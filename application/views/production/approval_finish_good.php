<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<style>
    .border-grey {
        border: 1px solid #c1c1c1;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto mt-4">

                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-3">
                <h1 class="text-grey fw-bolder">
                    Approval<br>Form Finish Good
                </h1>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card shadow-none h-100">
                    <div class="card-header" id="tampilHeader">

                    </div>
                    <div class="card-body" id="tampilData">
                        <h4 class="text-center text-grey mt-5 mb-5"><i>Memuat Data ...</i></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader">

            </div>
            <div class="modal-body" id="modalBody">

            </div>
            <div class="modal-footer" id="modalFooter">

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script>
    function detectFileType(files) {
        const imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'];
        const pdfExtension = ['pdf'];

        let result = {
            images: [],
            pdfs: []
        };

        files.forEach(file => {
            // Ambil ekstensi file setelah titik terakhir
            let extension = file.split('.').pop().toLowerCase();

            if (imageExtensions.includes(extension)) {
                result.images.push(file);
            } else if (pdfExtension.includes(extension)) {
                result.pdfs.push(file);
            }
        });

        return result;
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        jumlahPR = 0
        last_number = 1
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    // var user_id = 143
    // var user_id = 118
    var user_id = '<?= $this->session->userdata('id') ?>'
    var employee_id = '<?= $this->session->userdata('employee_id') ?>'
    var id_sj = '<?= $id ?>'
    var data_user = ""
    var data_item = ""
    var no_pr = ""
    var last_number = 1
    var linkImage = ''
    var level = 0
    var key_next = ""
    var loop_next = []
    var phone_next = []
    var name_next = []
    var isCanApprove = false
    var data_fg = null
    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                masterFinishGood()
            }
        })
    })

    function masterFinishGood() {
        level = 0
        key_next = ""
        loop_next = []
        phone_next = []
        name_next = []
        $.ajax({
            url: "<?= api_produksi('getMachineTransferList'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                machineTransferId: id_sj,
            },
            error: function(xhr) {},
            beforeSend: function() {
                $('#tampilData').html('<h4 class="text-center text-grey mt-5 mb-5"><i>Memuat Data ...</i></h4>')
            },
            success: function(response) {
                if (response['data']) {
                    data_fg = response['data']
                    checkLoopNext()
                    checkCanApprove()
                    formDetail()
                } else {
                    $('#tampilData').html('<h4 class="text-center text-grey mt-5 mb-5"><i>Anda Tidak Memiliki Akses untuk Melihat Data PR</i></h4>')
                }
            }
        })
    }

    function checkLoopNext() {
        var checExceptkUser = data_fg.machineTransfer.approval_line.filter((val) => {
            return val.employee_id != employee_id && val.is_approve == null
        })
        loop_next = checExceptkUser
    }

    function checkCanApprove() {
        if (data_fg.machineTransfer.approval_line) {
            var checkUser = data_fg.machineTransfer.approval_line.find((val) => {
                return val.employee_id == employee_id && val.is_current == 1
            })
            if (checkUser) {
                level = checkUser.index
                isCanApprove = true
            } else {
                isCanApprove = false
            }
        } else {
            isCanApprove = false
        }
    }

    function formDetail() {
        last_number = 1
        // var image = 'request'
        // if (data_fg['state'] == 'CHECKED') {
        //     image = 'approval'
        // } else if (data_fg['state'] == 'DONE') {
        //     image = 'done'
        // } else if (data_fg['state'] == 'REJECTED') {
        //     image = 'rejected'
        // }

        var html = '';
        html += '<div class="container-fluid small">'
        html += '<div class="row">'

        html += '<div class="col-12 mb-3">'
        html += '<div class="row">'
        html += '<div class="col-5 small col-md-4">SJ Number</div>'
        html += '<div class="col-7 small col-md-8 fw-bold">' + data_fg.machineTransfer.document_number + '</div>'
        html += '<div class="col-5 small col-md-4">Created By</div>'
        html += '<div class="col-7 small col-md-8 fw-bold">' + data_fg.machineTransfer.employee_sender.name + '</div>'
        html += '<div class="col-5 small col-md-4">Created Date</div>'
        html += '<div class="col-7 small col-md-8 fw-bold">' + getDateTime(data_fg.machineTransfer.send_at) + '</div>'
        html += '<div class="col-5 small col-md-4">Destination</div>'
        html += '<div class="col-7 small col-md-8"><span class="fw-bold">' + data_fg.machineTransfer.warehouse.name + '</span></div>'
        html += '<div class="col-5 small col-md-4">Notes</div>'
        if (data_fg.machineTransfer.note == "") {
            data_fg.machineTransfer.note = "-"
        }
        html += '<div class="col-7 small col-md-8"><span class="fw-bold">' + data_fg.machineTransfer.note + '</span></div>'


        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="mt-2 mb-2">'
        // item list
        html += '<div class="card shadow-none">'
        html += '<div class="card-header py-2">'
        html += '<p class="m-0 small fw-bold text-grey-light fw-bolder">List Item</p>'
        html += '</div>'
        html += '<div class="card-body p-0">'
        // body
        html += '<div class="table-responsive">'
        html += '<table class="table table-hover m-0">'
        html += '<tr>'
        html += '<th class="text-center align-middle small-text" style="width:5%">No</th>'
        html += '<th class="text-center align-middle small-text">Code</th>'
        html += '<th class="text-center align-middle small-text">Item</th>'
        data_fg.resultStockTemplate.forEach(ele => {
            html += '<th class="text-center align-middle small-text">' + ele.name + '</th>'
        })
        html += '</tr>'
        $.each((data_fg.machineTransfer.products), function(keys, values) {
            html += '<tr>'
            html += '<td class="text-center align-middle small-text">' + last_number + '</td>'
            html += '<td class="small-text align-middle">' + values.product.code + '</td>'
            html += '<td class="small-text align-middle">' + values.product.name + '</td>'
            data_fg.resultStockTemplate.forEach(ele => {
                var dataDetail = values.details.find((v, k) => {
                    return v.unit_id == ele.id
                })
                if (dataDetail) {
                    dataDetail.machine_transfer_detail_requests.forEach(element => {
                        html += '<td class="text-center align-middle small-text">' + element.qty + '</td>'
                    })
                } else {
                    html += '<td class="text-center align-middle small-text"></td>'
                }
            })
            html += '</tr>'
            last_number++
        })
        html += '</table>'
        html += '</div>'
        // body
        html += '</div>'
        // html += '<div class="card-footer py-2">'
        // html += '<table style="width:100%" class="fw-bold">'
        // html += '<tr>'
        // html += '<td class="text-end small" style="width:65%">Total (Rp)</td>'
        // html += '<td class="text-end small fw-bolder" style="width:35%">' + number_format(data_fg['grand_total']) + '</td>'
        // html += '</tr>'
        // html += '</table>'
        // html += '</div>'
        html += '</div>'
        // item list
        html += '</div>'
        html += '<div class="mt-3">'

        if (isCanApprove) {
            html += '<button class="btn btn-primary w-100 p-3 rounded-pill small-text" onclick="approvalForm(' + "'" + data_fg.machineTransfer['document_number'] + "'" + ',' + data_fg.machineTransfer['id'] + ')">Approval</button>'
        } else {
            html += '<button class="btn btn-dark-light w-100 p-3 rounded-pill small-text" disabled><i>Cant Do Approval</i></button>'
        }

        html += '</div>'

        html += '<div class="col-12 mt-3 mb-2">'
        html += '<b>Approval</b>'
        html += '<div class="row mt-2">'
        $.each(data_fg.machineTransfer.approval_line, function(k, v) {
            var success = "fa-check text-light"
            var border = ''
            var bgApproval = ''
            if (v['approved_at']) {
                if (v['is_approve']) {
                    success = 'fa-check text-success'
                    border = 'border border-success'
                    bgApproval = 'bg-success-light'
                } else {
                    success = 'fa-times text-danger'
                    border = 'border border-danger'
                    bgApproval = 'bg-danger-light'
                }
            } else {
                if (v['is_approve'] == 0) {
                    success = 'fa-times text-danger'
                    border = 'border border-danger'
                    bgApproval = 'bg-danger-light'
                }
            }

            html += '<div class="col-12 col-sm-12 m-0 mb-2">'
            html += '<div class="card shadow-none ' + bgApproval + ' rounded-pill m-0 w-100 ' + border + '">'
            html += '<div class="card-body" style="padding:15px;">'
            html += '<div class="row h-100">'
            html += '<div class="col-3 text-center align-self-center">'
            html += '<i class="fa ' + success + ' fa-2x me-2"></i>'
            html += '</div>'
            html += '<div class="col-9 align-self-center">'
            var at = ''
            if (v['date_approval']) {
                at = '<p class="m-0 lh-2 super-duper-small-text fw-bold">' + v.approval_label + ' <span class="text-success">at ' + formatDateTime(v['approved_at']) + '</span></p>'
            } else {
                if (v['is_approve'] == 0) {
                    at = '<p class="m-0 lh-2 super-duper-small-text text-danger"><i>Cancelled</i></p>'
                } else {
                    at = '<p class="m-0 lh-2 super-duper-small-text text-grey"><i>Still Waiting</i></p>'
                }
            }
            html += '<p class="m-0 lh-1 fw-bolder small">' + v['full_name'] + '</p>'
            html += '<p class="m-0 lh-1 fw-bold"><span class="small-text">' + v['job_title'] + '</span></p>'
            html += at
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })

        html += '</div>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#tampilData').html(html);
        tampilHeader()
    }

    function tampilHeader() {
        var html = ''
        var colorBadge = 'bg-grey-light'
        var state = 'Waiting'
        if (data_fg['is_approve'] == 1) {
            colorBadge = 'bg-warning'
            state = 'Approved'
            if (data_fg['is_receive'] == 1) {
                colorBadge = 'bg-success'
                state = 'Received'
            } else if (data_fg['is_receive'] == 0) {
                colorBadge = 'bg-danger'
                state = 'Rejected'
            }
        } else if (data_fg['is_approve'] == 0) {
            colorBadge = 'bg-danger'
            state = 'Rejected'
        }
        html += '<div class="row h-100">'
        html += '<div class="col-auto">'
        html += '<p class="m-0 small-text lh-1 text-grey-light">SJ Number :</p>'
        html += '<p class="m-0 small fw-bolder text-grey-light">' + data_fg.machineTransfer['document_number'] + '</p>'
        html += '</div>'
        html += '<div class="col text-end align-middle">'
        html += '<span class="badge ' + colorBadge + ' text-white small-text px-2 py-1">' + state + '</span>'
        html += '</div>'
        html += '</div>'
        $('#tampilHeader').html(html)
    }

    function approvalForm(no_pr, id) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Approval</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'

        html_body += '<div class="row">'
        html_body += '<div class="col-12 mb-5">'
        html_body += '<div class="form-check">'
        html_body += '<input class="form-check-input" type="checkbox" value="" id="checkedApproval">'
        html_body += '<label class="form-check-label" for="checkedApproval">'
        html_body += 'Saya dengan Bijaksana dan Tanpa Paksaan Menyetujui Segala Permintaan dari Nomor Surat Jalan ' + no_pr
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row" id="formApproval">'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-primary w-100" id="btnApprove" disabled onclick="kirimApproval(' + id + ')">Kirim Approval</button>'
        $('#modalFooter').html(html_footer);
    }

    function formAccReject() {
        var html_body = ""
        html_body += '<div class="col-12 col-md-6 mb-2">'
        html_body += '<div class="card shadow-none btn-approval" id="btn_reject" data-status="0">'
        html_body += '<div class="card-body text-center">'
        html_body += '<span><i class="fa fa-times text-danger" id="icon_reject"></i> Reject</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="card shadow-none btn-approval" id="btn_accept" data-status="1">'
        html_body += '<div class="card-body text-center">'
        html_body += '<span><i class="fa fa-check text-success" id="icon_accept"></i> Accept</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-4 d-none" id="textareaReject">'
        html_body += '<b>Alasan Membatalkan :</b>'
        html_body += '<textarea class="form-control form-control-sm small" rows="5" id="textReject"></textarea>'
        html_body += '</div>'
        $('#formApproval').html(html_body)
        return true
    }
    $(document).on('click', '#checkedApproval', function(e) {
        var value = $(this).is(':checked');
        if (value == true) {
            formAccReject()
        } else {
            $('#formApproval').empty()
            $('#btnApprove').attr('disabled', true)
        }
    })
    var approval_status = ""
    $(document).on('click', '.btn-approval', function(e) {
        $('#btnApprove').removeAttr('disabled', true)
        var status = $(this).data('status')
        approval_status = status
        if (status == '1') {
            $('#btn_accept').addClass('text-white bg-success')
            $('#btn_reject').removeClass('text-white bg-danger')
            $('#icon_accept').addClass('text-white').removeClass('text-success')
            $('#icon_reject').removeClass('text-white').addClass('text-danger')
            $('#textareaReject').addClass('d-none')
        } else {
            $('#btn_accept').removeClass('text-white bg-success')
            $('#btn_reject').addClass('text-white bg-danger')
            $('#icon_accept').removeClass('text-white').addClass('text-success')
            $('#icon_reject').addClass('text-white').removeClass('text-danger')
            $('#textareaReject').removeClass('d-none')
        }
    })

    function kirimApproval(id) {
        var type = 'POST'
        var data = {
            employee_id: employee_id,
            reference_name: 'public.machine_transfer',
            reference_id: id,
            is_approve: approval_status,
            index: level,
            note: $('#textReject').val()
        }
        var button = '#btnApprove'
        var url = '<?php echo api_hr('approve-request'); ?>'
        // console.log(data)
        kelolaData(data, type, url, button)
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    if (loop_next.length > 0) {
                        if (approval_status != '0') {
                            // convertToWhatsapp()
                            doAfterInsert()
                        } else {
                            doAfterInsert()
                        }
                    } else {
                        doAfterInsert()
                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Approve'
                    });
                    $(button).prop("disabled", false);
                }
            }
        });
    }

    function doAfterInsert() {
        Swal.fire({
            title: 'Success!',
            text: 'Berhasil Melakukan Approval',
            icon: 'success',
        }).then((responses) => {
            $('#modal').modal('hide')
            masterFinishGood()
        });
    }

    function convertToWhatsapp() {
        // console.log(variable)
        var data = {
            no_telp: [],
            link: [],
            nama: [],
            kode: [],
        }
        var dataApproval = loop_next.find(e => e.is_current == 1)
        if (dataApproval) {
            data.no_telp.push('081944946015')
            // data.no_telp.push(e.phone)
            data.link.push('<?php echo base_url() ?>production/approvalFinishGood/' + data_fg.machineTransfer.id)
            data.nama.push(dataApproval.full_name)
            data.kode.push('#' + data_fg.machineTransfer.document_number)
        }
        shareWhatsapp(data)
    }

    function shareWhatsapp(data) {
        $.ajax({
            url: "<?= base_url('api/sendLogisticToFG') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: data.no_telp,
                link: data.link,
                nama: data.nama,
                kode: data.kode
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Terkirim',
                    icon: 'success',
                }).then((responses) => {
                    $('#modal2').modal('hide')
                    $('#modal').modal('hide')
                    masterFinishGood()
                });
            }
        })
    }

    function loading(image, text) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-centered');
        // var html_header = '';
        $('#modalHeader2').addClass('d-none');
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row text-center p-5">'
        html_body += '<img src="<?= base_url() ?>assets/image/gif/' + image + '" class="w-50  mx-auto d-block"><br>'
        html_body += '<p class="mt-3">' + text + '</p>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);
        // var html_footer = '';
        $('#modalFooter2').addClass('d-none');
    }
</script>