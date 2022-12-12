<style>
    html {
        scroll-behavior: smooth;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    .nominal {
        text-align: right;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-truck"></i></div>
                            Approval PR
                        </h1>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card h-100">
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
                data_pr = response['data'][0]
                data_pr_approval = response['data_approval']
                if (data_pr['state'] != 'APPROVED') {
                    // approval
                    var ttd_pending = ""
                    var pending = []
                    var ttd_all = []
                    var ttd_kelompok = []
                    for (let k = 0; k < data_pr_approval.length; k++) {
                        for (let i = 0; i < data_pr_approval[k].length; i++) {
                            ttd_kelompok.push(data_pr_approval[k][i])
                            for (let j = 0; j < data_pr_approval[k][i].length; j++) {
                                ttd_all.push(JSON.parse(data_pr_approval[k][i][j]['data_approval'])[0])
                                ttd_pending = JSON.parse(data_pr_approval[k][i][j]['data_approval']).filter((value, key) => {
                                    if (value.is_accept === 'Pending') return true
                                })
                                if (ttd_pending.length > 0) {
                                    pending.push({
                                        'approval': ttd_pending[0],
                                        'keys': i,
                                    })
                                }
                            }
                        }
                    }
                    // console.log(ttd_kelompok)
                    var key = pending[0]['keys']
                    var loop = []
                    $.each(pending, function(keys, values) {
                        if (values['keys'] == key) {
                            loop.push(values['approval'])
                        }
                    })
                    // console.log(pending)
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
                    // console.log(loop_next)
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
                        var html = ""
                        html += '<h4 class="text-center mt-5 mb-5"><i>Anda Tidak Memiliki Hak Akses pada Halaman Ini</i></h4>'
                        $('#tampilData').html(html);
                    } else {
                        formDetail(ttd_kelompok)
                    }
                } else {
                    var html = ""
                    html += '<h4 class="text-center mt-5 mb-5"><i>Anda Tidak Memiliki Hak Akses pada Halaman Ini</i></h4>'
                    $('#tampilData').html(html);
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

        // html += '<div class="col-12 col-md-4 mb-3">'
        // html += '<div class="text-center">'
        // html += '<img src="<?= base_url() ?>assets/image/logo/' + image + '.png" class="w-50" alt="Request">'
        // html += '</div>'
        // html += '</div>'

        html += '<div class="col-12 col-md-6 mb-3">'
        html += '<div class="row">'
        html += '<div class="col-5 col-md-3">From</div>'
        html += '<div class="col-7 col-md-9 fw-bold">' + data_pr['name'] + '</div>'
        html += '<div class="col-5 col-md-3">To</div>'
        html += '<div class="col-7 col-md-9 fw-bold">Purchasing</div>'
        html += '<div class="col-5 col-md-3">No. PR</div>'
        html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['no_pr'] + '</span></div>'
        html += '<div class="col-5 col-md-3">Tanggal</div>'
        html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['date'] + '</span></div>'
        html += '<div class="col-5 col-md-3">Cost Centre</div>'
        html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['cost_center'] + '</span></div>'
        html += '<div class="col-5 col-md-3">Notes</div>'
        if (data_pr['justification'] == "") {
            data_pr['justification'] = "-"
        }
        html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['justification'] + '</span></div>'

        html += '<div class="col-5 col-md-3">Status</div>'
        html += '<div class="col-7 col-md-9"><i><span class="fw-bold text-warning">' + data_pr['state'] + '</span></i></div>'


        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 col-md-6 mb-2">'
        html += '<b>List Item</b>'
        html += '<div id="bodyPR" class="mt-2 mb-2">'
        html += '</div>'
        html += '<table style="width:100%" class="fw-bold mt-2 mb-2">'
        html += '<tr>'
        html += '<td class="text-end" style="width:65%">Total</td>'
        html += '<td class="text-end" style="width:35%">' + number_format(data_pr['grand_total']) + '</td>'
        html += '</tr>'
        html += '</table>'
        html += '<div class="mt-3">'
        html += '<button class="btn btn-primary w-100" onclick="approvalForm(' + "'" + data_pr['no_pr'] + "'" + ',' + data_pr['id'] + ')">Approval</button>'
        html += '</div>'

        html += '<div class="col-12 mt-3 mb-2">'
        html += '<b>Approval</b>'
        html += '<div class="row mt-2">'

        // $.each(data_approval, function(keys, values) {
        //     var success = "fa-check text-light"
        //     if (values['is_accept'] == 'Accepted') {
        //         success = 'fa-check text-success'
        //     } else if (values['is_accept'] == 'Rejected') {
        //         success = 'fa-times text-danger'
        //     }

        //     html += '<div class="col-12 col-sm-12 m-0 p-1">'
        //     html += '<div class="card shadow-sm m-0 w-100">'
        //     html += '<div class="card-body p-2">'
        //     html += '<div class="row align-self-center">'
        //     html += '<div class="col-3">'
        //     html += '<i class="fa ' + success + ' fa-3x me-2"></i>'
        //     html += '</div>'
        //     html += '<div class="col-9">'
        //     if (keys == 0) {
        //         var name = 'Checked'
        //     } else {
        //         var name = 'Approved'
        //     }
        //     html += '<p class="small d-inline m-0 fw-bold" style="font-size:12px;">' + name + '</p>'
        //     html += '<p class="m-0"><span class="small" style="font-size:10px;">' + values['user_name'] + '</span></p>'
        //     html += '</div>'
        //     html += '</div>'
        //     html += '</div>'
        //     html += '</div>'
        //     html += '</div>'
        // })
        var e = []
        var acc_check = ""
        // console.log(data_pr_approval)
        for (let i = 0; i < ttd_kelompok.length; i++) {
            for (let j = 0; j < ttd_kelompok[i].length; j++) {
                // if (data['id'] == ttd_kelompok[i][j]['reference_id']) {
                $.each(JSON.parse(ttd_kelompok[i][j]['data_approval']), function(key, value) {
                    acc_check = value['is_accept']
                })
                // }
            }
            // if (ttd_kelompok[i][0]['reference_id'] == data['id']) {
            var success = "fa-check text-light"
            if (acc_check == 'Accepted') {
                success = 'fa-check text-success'
            } else if (acc_check == 'Rejected') {
                success = 'fa-times text-danger'
            }

            html_body += '<div class="col-12 col-sm-12 m-0 p-1">'
            html_body += '<div class="card shadow-sm m-0 w-100">'
            html_body += '<div class="card-body p-2">'
            html_body += '<div class="row align-self-center">'
            html_body += '<div class="col-3">'
            html_body += '<i class="fa ' + success + ' fa-3x me-2"></i>'
            html_body += '</div>'
            html_body += '<div class="col-9">'
            if (i == 0) {
                var name = 'Checked'
            } else {
                var name = 'Approved'
            }
            html_body += '<p class="small d-inline m-0 fw-bold" style="font-size:12px;">' + name + '</p>'
            for (let j = 0; j < ttd_kelompok[i].length; j++) {
                // if (data['id'] == ttd_kelompok[i][j]['reference_id']) {
                $.each(JSON.parse(ttd_kelompok[i][j]['data_approval']), function(key, value) {
                    html_body += '<p class="m-0"><span class="small" style="font-size:10px;">' + value['user_name'] + '</span></p>'
                })
                // }
            }
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            // }
        }

        html += '</div>'
        html += '</div>'

        html += '</div>'



        html += '</div>'
        html += '</div>'
        $('#tampilData').html(html);
        $.each(JSON.parse(data_pr['data_detail']), function(keys, values) {
            formRowPR(last_number, JSON.parse(data_pr['data_detail'])[keys])
            last_number++
        })
    }

    function formRowPR(i, data) {
        var html = ""
        html += '<div class="card w-100 shadow-sm mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center ">'

        html += '<div class="col-12 col-md-6 align-self-center">'
        html += '<span class="fw-bold text-primary">' + data['item_name'] + '</span><br>'
        if (data['note'] == "") {
            data['note'] = "-"
        }
        html += '<span class="small">Note : <span class="text-grey">' + data['note'] + '</span></span>'
        html += '</div>'

        html += '<div class="col-12 col-md-6 text-right">'
        html += '<table class="table small mt-2 align-self-center border-none">'
        html += '<tr>'
        html += '<td class="p-0 m-0">QTY</td>'
        html += '<td class="fw-bold p-0 m-0">' + data['qty'] + ' ' + data['unit_name'] + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="p-0 m-0">Unit Price</td>'
        html += '<td class="fw-bold p-0 m-0">' + number_format(data['unit_price']) + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="p-0 m-0">Total Price</td>'
        html += '<td class="fw-bold p-0 m-0">' + number_format(data['extended_price']) + '</td>'
        html += '</tr>'
        html += '</table>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'

        $('#bodyPR').append(html)
        return true;
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