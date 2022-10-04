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
                            Request & Order
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_soal">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="btn-group">
                                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                            <span class="ms-2 d-none d-sm-block">Add New</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                            <li><a class="dropdown-item" href="#" onclick="formPR()">Purchase Requisition (PR)</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="formPO()">Purchase Order (PO)</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="formRetur()">Retur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">PR</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">PO</button>
                                    </li>
                                    <li class="nav-item float-end" role="presentation">
                                        <button class="nav-link" id="pills-retur-tab" data-bs-toggle="pill" data-bs-target="#pills-retur" type="button" role="tab" aria-controls="pills-retur" aria-selected="false">Retur</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-md-6 p-1">
                                        <select class="form-select form-select-sm h-100 w-100" aria-label=".form-select-sm example">
                                            <option selected value="all">Semua Status</option>
                                            <option value="1">Proses</option>
                                            <option value="2">Selesai</option>
                                            <option value="3">Batal</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 p-1 ">

                                        <input type="date" name="" id="input" class="form-control form-control-sm w-100">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <div class="card w-100 shadow-none mb-2 p-0">
                                        <div class="card-body p-2">
                                            <div class="row d-flex align-items-center">
                                                <div class="col">
                                                    <small style="font-size: 11px;">Senin, 12 September 2022</small>
                                                    <h6 class="m-0 p-0 fw-bold">PO-001 <span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span></h6>
                                                    <span class="fw-bold" style="font-size: 11px;">Status : <i class="text-warning">Approved</i></span>
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto">
                                                            <i class="fa fa-check fa-1x text-success"></i>
                                                            <p class="small d-inline">Checked</p>
                                                        </div>
                                                        <div class="col-12 col-sm-auto">
                                                            <i class="fa fa-check fa-1x text-success"></i>
                                                            <p class="small d-inline">Paid</p>
                                                        </div>
                                                        <div class="col-12 col-sm-auto">
                                                            <i class="fa fa-check fa-1x text-success"></i>
                                                            <p class="small d-inline">Done</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto border-start">
                                                    <button class="small btn btn-sm btn-outline-primary w-100 mb-1"><i class="fa fa-print"></i></button><br>
                                                    <button class="small btn btn-sm btn-outline-primary w-100" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" onclick="checkTimelinePO()"><i class="fa fa-eye me-2"></i> Lihat Detail</a>
                                                        <a class="dropdown-item" onclick=""><i class="fa fa-undo me-2"></i> Retur Barang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="tab-pane fade" id="pills-retur" role="tabpanel" aria-labelledby="pills-retur-tab">
                            </div>
                        </div>
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
    var user_id = 135
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    var no_po = ""
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
                data_supplier = response['data']['supplier'];
                masterPR()
            }
        })
    }
    var data_pr
    var data_po

    function masterPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_pr = response['data']
                var html = ""
                $.each(data_pr, function(keys, values) {
                    var acc_check
                    var badge = ""
                    var bg = ""
                    var btnPO = ""
                    var textPO = "text-light"
                    if (values['state'] == 'COMPLETE') {
                        badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                        bg = 'bg-light'
                        btnPO = 'onclick="formPO(' + values['id'] + ')"'
                        textPO = ""
                    } else if (values['state'] == 'REJECTED') {
                        badge = '<span class="badge rounded-pill bg-danger"><i class="fa fa-times"></i></span>'
                        bg = 'bg-light'
                        textPO = 'text-light'
                    }
                    html += '<div class="card w-100 shadow-none mb-2 p-0 ' + bg + '">'
                    html += '<div class="card-body p-2">'
                    html += '<div class="row d-flex align-items-center">'
                    html += '<div class="col">'
                    html += '<small style="font-size: 11px;">' + values['date'] + '</small>'

                    html += '<h6 class="m-0 p-0 fw-bold">' + values['no_pr'] + ' ' + badge + '</h6>'
                    html += '<span class="fw-bold" style="font-size: 11px;">Status : <i class="text-warning">' + values['state'] + '</i></span>'
                    html += '</div>'
                    html += '<div class="col">'
                    html += '<div class="row">'
                    acc_check = (JSON.parse(values['data_approval']) != null) ? (JSON.parse(values['data_approval'])[0] != null) ? JSON.parse(values['data_approval'])[0]['is_accept'] : "" : ""

                    var success = "fa-check text-light"
                    if (acc_check == 'Accepted') {
                        success = 'fa-check text-success'
                    } else if (acc_check == 'Rejected') {
                        success = 'fa-times text-danger'
                    }
                    html += '<div class="col-12 col-sm-auto">'
                    html += '<i class="fa ' + success + ' fa-1x me-2"></i>'
                    html += '<p class="small d-inline">Checked</p>'
                    html += '</div>'

                    success = "fa-check text-light"
                    acc_check = (JSON.parse(values['data_approval']) != null) ? (JSON.parse(values['data_approval'])[1] != null) ? JSON.parse(values['data_approval'])[1]['is_accept'] : "" : ""

                    if (acc_check == 'Accepted') {
                        success = 'fa-check text-success'
                    } else if (acc_check == 'Rejected') {
                        success = 'fa-times text-danger'
                    }
                    html += '<div class="col-12 col-sm-auto">'
                    html += '<i class="fa ' + success + ' fa-1x me-2"></i>'
                    html += '<p class="small d-inline">Approved</p>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '<div class="col-auto">'
                    html += '<button class="small btn btn-sm btn-outline-primary w-100 mb-1"><i class="fa fa-print"></i></button><br>'
                    html += '<button class="small btn btn-sm btn-outline-primary w-100" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
                    html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
                    html += '<a class="dropdown-item ' + textPO + '" ' + btnPO + '> <i class="fa fa-plus me-2"></i> Buat PO</a>'
                    html += '<a class="dropdown-item" onclick="detailPR(' + values['id'] + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
                    if (values['state'] != 'COMPLETE' && values['state'] != 'REJECTED') {
                        var link = '<?= base_url() ?>order/detailPR/' + values['id'] + ''
                        html += '<a class="dropdown-item" onclick="sharePR(' + values['id'] + ',6281944946015,' + "'" + link + "'" + ')"><i class="fa fa-share-alt me-2"></i> Bagikan Pengajuan</a>'
                    }
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                })
                $('#pills-home').html(html)
                numberinPR()
            }
        })
    }

    function numberinPR() {
        no_pr = "001/SMM-IT/PR/2022"
        numberinPO()
    }

    function numberinPO() {
        no_po = "001/SMM/PO/2022"
    }

    function detailPR(id) {
        $.each(data_pr, function(keys, values) {
            if (id == values['id']) {
                formPR(data_pr[keys])
            }
        })

    }

    $(document).on('click', "#btnDetail", function() {
        var id = $(this).data('id')
        var url = '<?= base_url() ?>Participant/viewDetailParticipant/' + id
        window.location.href = url
    })
    var last_number = 1

    function formPR(data) {
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Purchase Requisition</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container-fluid small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-2">From</div>'
        if (data == undefined) {
            html_body += '<div class="col-8 col-md-10 fw-bold">' + data_user[0]['name'] + '</div>'
        } else {
            html_body += '<div class="col-8 col-md-10 fw-bold">' + data['name'] + '</div>'
        }
        html_body += '<div class="col-4 col-md-2">To</div>'
        html_body += '<div class="col-8 col-md-10 fw-bold">Purchasing</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-3">No. PR</div>'
        if (data == undefined) {
            html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + no_pr + '</span></div>'
        } else {
            html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['no_pr'] + '</span></div>'
        }

        html_body += '<div class="col-4 col-md-3">Tanggal</div>'
        if (data == undefined) {
            html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + currentDate() + '</span></div>'
        } else {
            html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['date'] + '</span></div>'
        }
        html_body += '<div class="col-4 col-md-3">Cost Centre</div>'
        if (data == undefined) {
            html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data_user[0]['division_name'] + '</span></div>'
        } else {
            html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['cost_center'] + '</span></div>'
        }
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'
        // SKM

        html_body += '<table class="table table-bordered table-sm">'
        html_body += '<tr>'
        html_body += '<th class="align-middle" rowspan="2">No</th>'
        html_body += '<th class="align-middle" style="width:30%" rowspan="2">Description</th>'
        html_body += '<th class="align-middle" style="width:5%" rowspan="2">QTY</th>'
        html_body += '<th class="align-middle" style="width:10%" rowspan="2">Unit</th>'
        html_body += '<th class="align-middle" colspan="2">Estimated</th>'
        html_body += '<th class="align-middle" rowspan="2">Notes</th>'
        html_body += '</tr>'
        html_body += '<tr>'
        html_body += '<th class="align-middle" style="width:15%">Unit Price</th>'
        html_body += '<th class="align-middle" style="width:15%">Extended Price</th>'
        html_body += '</tr>'
        html_body += '<tbody id="bodyPR">'
        html_body += '</tbody>'
        html_body += '</table>'
        if (data == undefined) {
            html_body += '<button class="btn btn-sm btn-outline-primary float-end" style="font-size:11px" id="btnNewRowPR"><i class="fa fa-plus me-2"></i> New Row</button>'
        }
        html_body += '</div>'

        html_body += '<div class="col-12 mt-1">'
        html_body += '<small>Justification :</small>'
        if (data == undefined) {
            html_body += '<textarea class="form-control form-control-sm w-100" rows="5" id="justification"></textarea>'
        } else {
            html_body += '<div class="w-100 text-wrap small fw-bold">'
            html_body += data['justification']
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        var total = (data != undefined) ? data['grand_total'] : 0

        html_footer += '<div class="me-auto fw-bold">Total : Rp. <span id="totalPR">' + number_format(total) + '</span></div>'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        if (data == undefined) {
            html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnPreview" onclick="simpan(0)">Simpan</button>'
        }
        $('#modalFooter').html(html_footer);
        if (data == undefined) {
            for (let i = 1; i <= 3; i++) {
                last_number++
                formRowPR(i, '')
            }
        } else {
            $.each(JSON.parse(data['data_detail']), function(keys, values) {
                formRowPR(last_number, JSON.parse(data['data_detail'])[keys])
                last_number++
            })
        }
    }

    function formRowPR(i, data) {
        var html_body = ""
        html_body += '<tr>'
        // no
        html_body += '<td class="text-center align-middle">' + i + '</td>'

        // item
        html_body += '<td>'
        if (data == "") {
            html_body += '<select style="border:none" name="" id="item_pr" class="form-control form-control-sm select2-single item_pr" data-id="' + i + '">'
            html_body += '<option value="" selected disabled></option>'
            $.each(data_item, function(keys, values) {
                html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
            })
            html_body += '</select>'
        } else {
            html_body += data['item_name']
        }
        html_body += '</td>'

        // qty
        html_body += '<td class="text-wrap text-center">'
        if (data == "") {
            html_body += '<input style="border:none" type="text" name="" class="form-control form-control-sm p-1 qty_pr" id="qty_pr' + i + '" data-id="' + i + '"  value="">'
        } else {
            html_body += number_format(data['qty'])
        }
        html_body += '</td>'

        // unit
        html_body += '<td>'
        if (data == "") {
            html_body += '<select style="border:none" name="" id="unit_pr" class="form-control form-control-sm select2-single unit_pr" data-id="' + i + '">'
            html_body += '<option value="" selected disabled></option>'
            html_body += '<option value="addNew"><i class="fa fa-plus"></i></option>'
            $.each(data_satuan, function(keys, values) {
                html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
            })
            html_body += '</select>'
        } else {
            html_body += data['unit_name']
        }
        html_body += '</td>'

        // unit price
        html_body += '<td class="text-end">'
        if (data == "") {
            html_body += '<input onkeypress="return event.charCode >= 48" min="1" style="border:none" type="text" name="" id="unit_price_pr' + i + '" data-id="' + i + '" class="form-control form-control-sm p-1 unit_price_pr nominal" value="">'
        } else {
            html_body += number_format(data['unit_price'])
        }
        html_body += '</td>'

        // extended price
        html_body += '<td class="text-end">'
        if (data == "") {
            html_body += '<input onkeypress="return event.charCode >= 48" min="1" style="border:none" type="text" name="" id="extended_price_pr' + i + '" data-id="' + i + '" class="form-control form-control-sm p-1 extended_price_pr nominal" value="">'
        } else {
            html_body += number_format(data['extended_price'])
        }
        html_body += '</td>'


        // notes
        html_body += '<td>'
        if (data == "") {
            html_body += '<input style="border:none" type="text" name="" id="notes_pr' + i + '" data-id="' + i + '" class="form-control form-control-sm p-1 notes_pr" value="">'
        } else {
            html_body += data['note']
        }
        html_body += '</td>'
        html_body += '</tr>'
        $('#bodyPR').append(html_body)
        $('.nominal').number(true, 2);
        return true;
    }

    $(document).on('click', '#btnNewRowPR', function(e) {
        formRowPR(last_number, "")
        last_number++
    })
    $(document).on('keyup', '.qty_pr,.unit_price_pr', function(e) {
        typingNominalPR($(this).data('id'))
    })

    function typingNominalPR(id) {
        var price = 0
        var unit = $('#unit_price_pr' + id).val()
        if (unit == "") {
            unit = 0
        }
        var qty = $('#qty_pr' + id).val()
        if (qty == "") {
            qty = 0
        }
        price = (parseInt(unit) * parseInt(qty))
        $('#extended_price_pr' + id).val(price)
        totalPricePR()
    }

    var jumlahPR = 0

    function totalPricePR() {
        jumlahPR = 0
        var total = $('.extended_price_pr').map(function() {
            return $(this).val();
        }).get();
        for (let i = 0; i < total.length; i++) {
            if (total[i] != "")
                jumlahPR += parseInt(total[i]);
        }
        $('#totalPR').html(number_format(jumlahPR))
    }

    function simpan(status) {

        var type = 'POST'
        if (status == 0) {
            // PR
            var id_item = $('.item_pr').map(function() {
                return $(this).val();
            }).get();
            var qty = $('.qty_pr').map(function() {
                return $(this).val();
            }).get();
            var unit = $('.unit_pr').map(function() {
                return $(this).val();
            }).get();
            var unit_price = $('.unit_price_pr').map(function() {
                return $(this).val();
            }).get();
            var total = $('.extended_price_pr').map(function() {
                return $(this).val();
            }).get();
            var notes = $('.notes_pr').map(function() {
                return $(this).val();
            }).get();
            var data = {
                id_users: user_id,
                to: 1,
                from: 1,
                date: currentDate(),
                no_pr: no_pr,
                id_item: id_item,
                qty: qty,
                unit: unit,
                unit_price: unit_price,
                extended_price: total,
                notes: notes,
                total: jumlahPR,
                justification: $('#justification').val()
            }
            var button = '#btnSimpan'
            var url = '<?php echo api_url('Api_Warehouse/insertPR'); ?>'
        } else {
            var button = '#btnSimpan'
            data['id'] = $(this).data('id')
            // var url = '<?php echo api_url('MasterNtm/updateSupplier'); ?>'
        }
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
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((responses) => {
                        getData()
                        var link = '<?= base_url() ?>order/detailPR/' + response.id_pr + ''
                        $('#modal').modal('hide')
                        sharePR(response.id_pr, '6281944946015', link)
                        $(button).prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(button).prop("disabled", false);
                }
            }
        });
    }

    function sharePR(id, no_telp, link) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Share to User</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<small class="mb-1">Berbagi dengan Salin Link dibawah ini :</small>'
        html_body += '<div class="input-group mb-3">'
        html_body += '<input type="text" class="form-control" value="' + link + '" aria-describedby="button-addon2" onClick="this.select();" id="linkPRPO">'
        html_body += '<button class="btn btn-outline-primary" type="button" id="button-addon2" onClick="copyToClipboard()"><i class="fa fa-copy"></i></button>'
        html_body += '<small class="mt-3">Atau juga bisa dengan mudah langsung kirim ke Whatsapp User terkait dengan menekan tombol <span class="fw-bold">Kirim</span> dibawah ini</small>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-primary btn-sm" onclick="kirimWhatsapp(' + id + ',' + no_telp + ',' + "'" + link + "'" + ')">Kirim</button>'
        $('#modalFooter2').html(html_footer);
    }

    function copyToClipboard() {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#linkPRPO').val()).select();
        document.execCommand("copy");
        $temp.remove();
    }

    function kirimWhatsapp(id, no_telp, link) {
        var kalimat = ""
        kalimat = 'Coba Link'
        kalimat += 'Berikut Dibawah ini :'
        var url = 'https://api.whatsapp.com/send?phone=' + no_telp + '&text=' + kalimat
        window.open(url, '_blank').focus();
    }

    function formPO(id_pr = "") {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Purchase Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6">'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">No</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">' + no_po + '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">Tanggal</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">' + currentDate() + '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">Supplier</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">'
        html_body += '<select name="" id="supplier" class="form-select form-select-sm w-75" required="required">'
        html_body += '<option value="" disabled selected>Pilih Supplier</option>'
        $.each(data_supplier, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">No. PR</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">'
        var disabled = ""
        if (id_pr != "") {
            disabled = 'disabled'
        }
        html_body += '<select name="" id="no_pr" class="form-control select2-single form-control-sm w-75" data-live-search="true" required="required" ' + disabled + '>'
        html_body += '<option value="" disabled selected>Pilih No. PR</option>'
        $.each(data_pr, function(keys, values) {
            var select = ""
            if (values['id'] == id_pr) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['no_pr'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'
        // SKM

        html_body += '<table class="table table-bordered table-sm">'
        html_body += '<tr style="height:60px;">'
        html_body += '<th class="align-middle">No</th>'
        html_body += '<th class="align-middle" style="width:30%">Item</th>'
        html_body += '<th class="align-middle" style="width:5%">QTY</th>'
        html_body += '<th class="align-middle" style="width:10%">Satuan</th>'
        html_body += '<th class="align-middle">Harga</th>'
        html_body += '<th class="align-middle">Total</th>'
        html_body += '<th class="align-middle text-wrap">Tanggal Pengiriman</th>'
        html_body += '</tr>'
        html_body += '<tbody id="bodyPO">'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '<button class="btn btn-sm btn-outline-primary float-end" style="font-size:11px" id="btnNewRowPO"><i class="fa fa-plus me-2"></i> New Row</button>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6 mt-5">'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">Sub Total</div>'
        html_body += '<div class="col-8 align-self-center">'
        html_body += '<input type="text" name="" id="input" class="form-control form-control-sm p-1 w-100" value="">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">PPN</div>'
        html_body += '<div class="col-8 align-self-center">'
        html_body += '<input type="text" name="" id="input" class="form-control form-control-sm p-1 w-100" value="">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">Total</div>'
        html_body += '<div class="col-8 align-self-center">'
        html_body += '<input type="text" name="" id="input" class="form-control form-control-sm p-1 w-100" value="">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Preview</button>'
        $('#modalFooter').html(html_footer);
        for (let i = 1; i <= 1; i++) {
            last_number++
            formRowPO(i, '')
        }
    }

    function formRowPO(i, data) {
        var html_body = ""
        html_body += '<tr>'
        html_body += '<td class="text-center align-middle">' + i + '</td>'
        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="satuan" class="form-control form-control-sm select2-single">'
        html_body += '<option value="" selected></option>'
        html_body += '</select>'
        html_body += '</td>'
        html_body += '<td><input style="border:none" type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input style="border:none" type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input style="border:none" type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input style="border:none" type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input style="border:none" type="date" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '</tr>'
        $('#bodyPO').append(html_body)
    }

    function checkTimelinePO() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Purchase Requisition</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6">'

        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6">'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Preview</button>'
        $('#modalFooter').html(html_footer);
    }
</script>