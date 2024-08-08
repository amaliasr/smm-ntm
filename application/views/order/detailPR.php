<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
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
                    Approval<br>Purchase Requisition
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
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script>
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
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var id_pr = '<?= $id ?>'
    var data_user = ""
    var data_item = ""
    var no_pr = ""
    var last_number = 1
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
                getData()
            }
        })
    })

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                masterPR()
            }
        })
    }
    var level = 0
    var key_next = ""
    var loop_next = []
    var phone_next = []
    var name_next = []
    var isCanApprove = true

    function masterPR() {
        level = 0
        key_next = ""
        loop_next = []
        phone_next = []
        name_next = []
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: id_pr,
                user_id: user_id,
            },
            error: function(xhr) {},
            beforeSend: function() {
                $('#tampilData').html('<h4 class="text-center text-grey mt-5 mb-5"><i>Memuat Data ...</i></h4>')
            },
            success: function(response) {
                if (response['data']) {
                    data_pr = response['data'][0]
                    data_pr_approval = response['data_approval']
                    // if (data_pr['state'] != 'APPROVED') {
                    // approval
                    var ttd_pending = ""
                    var pending = []
                    var ttd_all = []
                    for (let k = 0; k < data_pr_approval.length; k++) {
                        for (let i = 0; i < data_pr_approval[k].length; i++) {
                            for (let j = 0; j < data_pr_approval[k][i].length; j++) {
                                ttd_all.push(JSON.parse(data_pr_approval[k][i][j]['data_approval'])[0])
                                if (data_pr['state'] == 'APPROVED') {
                                    ttd_pending = JSON.parse(data_pr_approval[k][i][j]['data_approval'])
                                } else {
                                    ttd_pending = JSON.parse(data_pr_approval[k][i][j]['data_approval']).filter((value, key) => {
                                        if (value.is_accept === 'Pending') return true
                                    })
                                }
                                if (ttd_pending.length > 0) {
                                    pending.push({
                                        'approval': ttd_pending[0],
                                        'keys': i,
                                    })
                                }
                            }
                        }
                    }
                    // console.log(ttd_all)
                    var key = pending[0]['keys']
                    var loop = []
                    $.each(pending, function(keys, values) {
                        if (values['keys'] == key) {
                            loop.push(values['approval'])
                        }
                    })
                    // BUAT NEXT WHATSAPP
                    key_next = parseInt(key) + 1
                    loop_next = []
                    phone_next = []
                    name_next = []
                    $.each(pending, function(keys, values) {
                        if (values['keys'] == key_next) {
                            loop_next.push(values['approval'])
                        }
                    })
                    $.each(loop_next, function(keys, values) {
                        phone_next.push(values['phone'])
                        name_next.push(values['user_name'])
                    })
                    // console.log(loop_next)
                    // BUAT NEXT WHATSAPP

                    var data_approval = loop
                    var ada = "tidak"
                    $.each(data_approval, function(keys, values) {
                        if (user_id == values['user_id']) {
                            // console.log()
                            if (values['is_accept'] == 'Pending') {
                                ada = "ya"
                                level = values['id_approval']
                            }
                        }
                    })
                    if (data_pr['state'] == 'APPROVED') {
                        ada = 'tidak'
                    }
                    if (ada == "tidak") {
                        // tidak ada akses
                        isCanApprove = false
                    }
                    if (data_pr['state'] == 'APPROVED') {
                        isCanApprove = false
                    }
                    // } else {
                    //     isCanApprove = false
                    // }
                    formDetail(ttd_all)
                } else {
                    $('#tampilData').html('<h4 class="text-center text-grey mt-5 mb-5"><i>Anda Tidak Memiliki Akses untuk Melihat Data PR</i></h4>')
                }
            }
        })
    }

    function formDetail(data_approval) {
        var image = 'request'
        if (data_pr['state'] == 'CHECKED') {
            image = 'approval'
        } else if (data_pr['state'] == 'DONE') {
            image = 'done'
        } else if (data_pr['state'] == 'REJECTED') {
            image = 'rejected'
        }

        var html = '';
        html += '<div class="container-fluid small">'
        html += '<div class="row">'

        html += '<div class="col-12 mb-3">'
        html += '<div class="row">'
        html += '<div class="col-5 small col-md-3">From</div>'
        html += '<div class="col-7 small col-md-9 fw-bold">' + data_pr['name'] + '</div>'
        html += '<div class="col-5 small col-md-3">To</div>'
        html += '<div class="col-7 small col-md-9 fw-bold">Purchasing</div>'
        html += '<div class="col-5 small col-md-3">Tanggal</div>'
        html += '<div class="col-7 small col-md-9"><span class="fw-bold">' + data_pr['date'] + '</span></div>'
        html += '<div class="col-5 small col-md-3">Cost Centre</div>'
        html += '<div class="col-7 small col-md-9"><span class="fw-bold">' + data_pr['cost_center'] + '</span></div>'
        html += '<div class="col-5 small col-md-3">Notes</div>'
        if (data_pr['justification'] == "") {
            data_pr['justification'] = "-"
        }
        html += '<div class="col-7 small col-md-9"><span class="fw-bold">' + data_pr['justification'] + '</span></div>'


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
        html += '<table class="table table-hover m-0">'
        html += '<tr>'
        html += '<th class="text-center align-middle small-text" style="width:5%">No</th>'
        html += '<th class="text-center align-middle small-text">Item</th>'
        html += '<th class="text-center align-middle small-text">Unit</th>'
        html += '<th class="text-center align-middle small-text">QTY</th>'
        html += '<th class="text-center align-middle small-text">Price<br>(Rp)</th>'
        html += '<th class="text-center align-middle small-text">Ext. Price<br>(Rp)</th>'
        html += '</tr>'
        $.each(JSON.parse(data_pr['data_detail']), function(keys, values) {
            html += '<tr>'
            html += '<td class="text-center align-middle small-text">' + last_number + '</td>'
            html += '<td class="small-text align-middle">' + values['item_name'] + '</td>'
            html += '<td class="text-center align-middle small-text">' + values['unit_name'] + '</td>'
            html += '<td class="text-center align-middle small-text">' + values['qty'] + '</td>'
            html += '<td class="text-center align-middle small-text">' + number_format(values['unit_price']) + '</td>'
            html += '<td class="text-center align-middle small-text">' + number_format(values['extended_price']) + '</td>'
            html += '</tr>'
            last_number++
        })
        html += '</table>'
        // body
        html += '</div>'
        html += '<div class="card-footer py-2">'
        html += '<table style="width:100%" class="fw-bold">'
        html += '<tr>'
        html += '<td class="text-end small" style="width:65%">Total (Rp)</td>'
        html += '<td class="text-end small fw-bolder" style="width:35%">' + number_format(data_pr['grand_total']) + '</td>'
        html += '</tr>'
        html += '</table>'
        html += '</div>'
        html += '</div>'
        // item list
        html += '</div>'
        html += '<div class="mt-3">'
        if (isCanApprove) {
            html += '<button class="btn btn-primary w-100 p-3 rounded-pill small-text" onclick="approvalForm(' + "'" + data_pr['no_pr'] + "'" + ',' + data_pr['id'] + ')">Approval</button>'
        } else {
            html += '<button class="btn btn-dark-light w-100 p-3 rounded-pill small-text" disabled><i>Cant Do Approval</i></button>'
        }
        html += '</div>'

        html += '<div class="col-12 mt-3 mb-2">'
        html += '<b>Approval</b>'
        html += '<div class="row mt-2">'
        $.each(data_approval, function(keys, values) {
            // console.log(values)
            var success = "fa-check text-light"
            var border = ''
            var bgApproval = ''
            if (values['is_accept'] == 'Accepted') {
                success = 'fa-check text-success'
                border = 'border border-success'
                bgApproval = 'bg-success-light'
            } else if (values['is_accept'] == 'Rejected') {
                success = 'fa-times text-danger'
                border = 'border border-danger'
                bgApproval = 'bg-danger-light'
            } else {
                if (data_pr['state'] == 'REJECTED' || data_pr['state'] == 'CANCEL') {
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
            if (keys == 0) {
                var name = 'Checked'
            } else {
                var name = 'Approved'
            }
            var at = ''
            if (values['date_approval']) {
                at = '<p class="m-0 lh-2 super-duper-small-text fw-bold">' + name + ' <span class="text-success">at ' + values['date_approval'] + '</span></p>'
            } else {
                if (data_pr['state'] == 'REJECTED' || data_pr['state'] == 'CANCEL') {
                    at = '<p class="m-0 lh-2 super-duper-small-text text-danger"><i>Cancelled</i></p>'
                } else {
                    at = '<p class="m-0 lh-2 super-duper-small-text text-grey"><i>Still Waiting</i></p>'
                }
            }
            html += '<p class="m-0 lh-1 fw-bolder small">' + values['user_name'] + '</p>'
            html += '<p class="m-0 lh-1 fw-bold"><span class="small-text">' + values['job_title'] + '</span></p>'
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
        if (data_pr['state'] == 'CHECKED') {
            colorBadge = 'bg-orange'
        } else if (data_pr['state'] == 'DONE') {
            colorBadge = 'bg-success'
        } else if (data_pr['state'] == 'APPROVED') {
            colorBadge = 'bg-success'
        } else if (data_pr['state'] == 'REJECTED' || data_pr['state'] == 'CANCEL') {
            colorBadge = 'bg-danger'
        }
        html += '<div class="row h-100">'
        html += '<div class="col-auto">'
        html += '<p class="m-0 small-text lh-1 text-grey-light">PR Number :</p>'
        html += '<p class="m-0 small fw-bolder text-grey-light">' + data_pr['no_pr'] + '</p>'
        html += '</div>'
        html += '<div class="col text-end align-middle">'
        html += '<span class="badge ' + colorBadge + ' text-white small-text px-2 py-1">' + data_pr['state'] + '</span>'
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
        html_body += 'Saya dengan Bijaksana dan Tanpa Paksaan Menyetujui Segala Permintaan dari Nomor PR ' + no_pr
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
        html_body += '<div class="card shadow-none btn-approval" id="btn_reject" data-status="reject">'
        html_body += '<div class="card-body text-center">'
        html_body += '<span><i class="fa fa-times text-danger" id="icon_reject"></i> Reject</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="card shadow-none btn-approval" id="btn_accept" data-status="accept">'
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
        if (status == 'accept') {
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
            id_users: user_id,
            id_pr: id,
            status: approval_status,
            id_approval: level,
            note: $('#textReject').val()
        }
        var button = '#btnApprove'
        var url = '<?php echo api_url('Api_Warehouse/approvePr'); ?>'
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
                        if (approval_status != 'reject') {
                            shareWhatsapp(id_pr, phone_next, '<?= base_url() ?>order/detailPR/' + id_pr, 'PR', data_pr['no_pr'], name_next)
                        } else {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Berhasil Melakukan Approval',
                                icon: 'success',
                            }).then((responses) => {
                                $('#modal').modal('hide')
                                masterPR()
                            });
                        }
                    } else {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Berhasil Melakukan Approval',
                            icon: 'success',
                        }).then((responses) => {
                            $('#modal').modal('hide')
                            masterPR()
                        });
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

    function shareWhatsapp(id, no_telp, link, status, no_doc, nama) {
        $.ajax({
            url: "<?= base_url('api') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: link,
                status: status,
                nama: nama,
                no_doc: no_doc,
            },
            error: function(xhr) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {
                    $('#modal2').modal('hide')
                    $('#modal').modal('hide')
                    masterPR()
                });
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Approval kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {
                    $('#modal2').modal('hide')
                    $('#modal').modal('hide')
                    masterPR()
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