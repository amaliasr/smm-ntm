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

    .text-grey {
        color: #D8D9CF;
    }

    .text-dark-grey {
        color: #B2B2B2;
    }

    .bg-grey {
        background-color: #EDEDED;
        color: #B2B2B2;
    }

    .bg-light-grey {
        background-color: #FAF7F0;
    }

    .text-random {
        color: #425F57;
    }

    .bg-random {
        background-color: #425F57;
    }

    .card-PR:hover {
        background-color: #EDEDED;
    }

    .card-hoper:hover {
        background-color: #EDEDED;
    }

    .card-PO:hover {
        background-color: #EDEDED;
    }

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }

    .select2-selection {
        border: 0px white !important;
    }

    .select2-selection__arrow b {
        display: none !important;
    }

    ul.select2-results__options li {
        font-size: 12px;
    }

    .under-hover:hover {
        text-decoration: underline;
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
                                        <input class="form-control pe-0" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="btn-group">
                                        <?php if ($this->session->userdata('division_id') != 10) { ?>
                                            <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="ms-2 d-none d-sm-block">Add New</span>
                                            </button>
                                        <?php } ?>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                            <li><a class="dropdown-item" href="#" onclick="formPR()">Purchase Requisition (PR)</a></li>
                                            <?php if ($this->session->userdata('division_id') == 4 || $this->session->userdata('division_id') == 35) { ?>
                                                <li><a class="dropdown-item" href="#" onclick="formPO()">Purchase Order (PO)</a></li>
                                                <!-- <li><a class="dropdown-item" href="#" onclick="formRetur()">Retur</a></li> -->
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <?php if ($this->session->userdata('division_id') == 4 || $this->session->userdata('division_id') == 35) { ?>
                                        <button type="button" class="btn btn-outline-light text-white" onclick="formReport()"><i class="fa fa-table"></i></button>
                                    <?php } ?>
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
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" data-status="PR">PR</button>
                                    </li>
                                    <?php if ($this->session->userdata('division_id') == 4 || $this->session->userdata('division_id') == 35 || $this->session->userdata('division_id') == 10 || $this->session->userdata('job_title_id') == 133 || $this->session->userdata('job_title_id') == 10) { ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" data-status="PO">PO</button>
                                        </li>
                                        <!-- <li class="nav-item float-end" role="presentation">
                                            <button class="nav-link" id="pills-retur-tab" data-bs-toggle="pill" data-bs-target="#pills-retur" type="button" role="tab" aria-controls="pills-retur" aria-selected="false" data-status="Retur">Retur</button>
                                        </li> -->
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col">
                                <div class="row justify-content-end">
                                    <!-- <div class="col-12 col-md-4 p-1">
                                        
                                    </div> -->
                                    <div class="col-12 col-md-6 p-1">
                                        <select class="form-select form-select-sm h-100 w-100" aria-label=".form-select-sm example" onchange="filterStatus()" id="selectStatus">
                                            <option selected value="all">Semua Status</option>
                                            <option value="REQUESTED">Permintaan</option>
                                            <option value="CHECKED">Checking</option>
                                            <option value="APPROVED">Selesai</option>
                                            <option value="CANCEL">Batal</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 p-1 ">
                                        <input type="date" name="" id="selectDate" class="form-control form-control-sm w-100" onchange="filterStatus()">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div id="qrcode" style="width:100px; height:100px; margin-top:15px;text-align:center;margin:0 auto;display:none;"></div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="card w-100 shadow-none mb-2 p-0">
                                    <div class="card-body p-2">
                                        <div class="row d-flex align-items-center">
                                            <div class="col text-center p-5">
                                                <i class="small">Memuat Data</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card w-100 shadow-none mb-2 p-0">
                                    <div class="card-body p-2">
                                        <div class="row d-flex align-items-center">
                                            <div class="col text-center p-5">
                                                <i class="small">Memuat Data</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-retur" role="tabpanel" aria-labelledby="pills-retur-tab">
                                <div class="card w-100 shadow-none mb-2 p-0">
                                    <div class="card-body p-2">
                                        <div class="row d-flex align-items-center">
                                            <div class="col text-center p-5">
                                                <i class="small">Memuat Data</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    var imgBase64Data

    function getQrcode(url, id, status) {
        if (url != 0) {
            var qrcode = new QRCode("qrcode", {
                text: url,
                width: 100,
                height: 100,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
            imgBase64Data = qrcode._oDrawing._elCanvas.toDataURL("image/png")
            var image = btoa(imgBase64Data)
            if (status == 0) {
                var url = '<?= base_url('order/cetakPR') ?>'
            } else {
                var url = '<?= base_url('order/cetakPO') ?>'
            }
            var params = "*$" + image + "*$" + id + "*$" + user_id
            window.open(url + '?params=' + (params), '_blank')
        } else {
            // buat supplier
            var url = '<?= base_url('order/cetakPO') ?>'
            var params = "*$0" + "*$" + id + "*$" + user_id
            window.open(url + '?params=' + (params), '_blank')
        }
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
        data_checked = ""
        id_po_detail = []
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_level_id = '<?= $this->session->userdata('job_level_id') ?>'
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    var no_po = ""
    var button_prpo = 'PR'
    var data_checked = ""
    var initialDivision = "<?= $this->session->userdata('alias') ?>"
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
                if (button_prpo == 'PR') {
                    masterPR()
                } else {
                    masterPO()
                }
            }
        })
    }
    var data_pr
    var data_po
    var data_pr_approval
    var data_po_approval

    function masterPR(state = "") {
        if (state == "") {
            ajaxPR()
        } else {
            if (data_pr == undefined) {
                ajaxPR()
            } else {
                formMasterPR(data_pr)
            }
        }
    }

    function refresh(status) {
        if (status == 'PR') {
            ajaxPR()
        } else {
            ajaxPO()
        }
    }

    function ajaxPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                user_id: user_id,
            },
            error: function(xhr) {
                notFound('#pills-home')
            },
            beforeSend: function() {
                loadingData('#pills-home')
            },
            success: function(response) {
                if (response['message'] == 'Data data not found') {
                    notFound('#pills-home')
                } else {
                    data_pr = response['data']
                    data_pr_approval = response['data_approval']
                    formMasterPR(data_pr)
                }
                numberinPR()

            }
        })
    }

    function loadingData(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small">Memuat Data</i>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)

    }

    function notFound(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small">Tidak Ada Data yang Tersedia</i>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)
    }

    var res = {}
    var itemYangSisa = []

    function formMasterPR(data) {
        // console.log(data)
        res = {}
        itemYangSisa = []
        var html = ""
        html += '<div class="row float-end">'
        html += '<div class="col-auto pe-0">'
        html += '<select class="form-select form-select-sm w-100 float-end" aria-label=".form-select-sm example" onchange="filterStatus()" id="selectItemYangBelumTuntas">'
        html += '<option selected value="all">Semua Item</option>'
        html += '</select>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<button class="btn btn-sm btn-outline-primary float-end mb-2" onclick="refresh(' + "'" + 'PR' + "'" + ')"><span class="fa fa-refresh me-2"></span> Refresh</button>'
        html += '</div>'
        html += '</div>'
        $.each(data, function(keys, values) {
            // console.log(ttd_pending)
            var acc_check
            var badge = ""
            var bg = ""
            var btnPO = ""
            var textPO = "text-light"
            var textAcc = ""
            var checkStatusDocument = 'fa-check text-light'
            if (values['state'] == 'DONE') {
                badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                bg = 'bg-light'
                checkStatusDocument = 'fa-check text-success'
                textAcc = "text-success"
            } else if (values['state'] == 'REJECTED' || values['state'] == 'CANCEL') {
                badge = '<span class="badge rounded-pill bg-danger"><i class="fa fa-times"></i></span>'
                bg = 'bg-light'
                textPO = 'text-light'
                checkStatusDocument = 'fa-times text-danger'
                textAcc = "text-danger"
            } else if (values['state'] == 'APPROVED') {
                textPO = ""
                btnPO = 'onclick="formPO(' + values['id'] + ')"'
                // badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                checkStatusDocument = 'fa-check text-success'
                textAcc = "text-success"
            }
            if (values['state_order'] == 'DONE') {
                badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                bg = 'bg-light'
                checkStatusDocument = 'fa-check text-success'
                textAcc = "text-success"
            }
            html += '<div class="card card-PR w-100 shadow-none mb-2 p-0 ' + bg + '" id="card_searchPR' + keys + '" data-status="' + values['state'] + '" data-date="' + values['date'] + '" data-key="PR' + keys + '" data-id="' + values['id'] + '">'
            html += '<div class="card-body p-2">'
            html += '<div class="row d-flex align-items-center">'
            html += '<div class="col">'
            html += '<small style="font-size: 11px;">' + values['date'] + '</small>'

            html += '<h6 class="m-0 p-0 fw-bold text_search" data-id="PR' + keys + '">' + values['no_pr'] + ' ' + badge + '</h6>'
            html += '<small class="m-0 p-0"><span class="fw-bold" style="font-size: 11px;"><span class="fa fa-user"></span> <span class="fw-bold text-random text_search" data-id="PR' + keys + '">' + values['name'] + '</span> <span class="badge bg-random fw-bold text-white text_search" data-id="PR' + keys + '">' + values['cost_center'] + '</span></span></small><br class="p-0 m-0">'
            // html += '<small class="m-0 p-0"><span class="fw-bold" style="font-size: 11px;">Cost Center : <span class="fw-bold text-warning text_search" data-id="PR' + keys + '">' + values['cost_center'] + '</span></span></small>'
            html += '</div>'
            html += '<div class="col">'
            html += '<div class="row">'

            html += '<div class="col-12">'
            html += '<span class="fa fa-file ' + textAcc + '" style="font-size: 12px;"></span> <span class="fw-bold" style="font-size: 12px;">' + values['state'] + '</span> <span class="fa ' + checkStatusDocument + '" style="font-size: 12px;"></span>'
            html += '</div>'
            html += '<div class="col-12">'

            let obj = JSON.parse(values['data_detail']).filter((value, key) => {
                if (value.is_po === 0) return true
            });
            let obj1 = JSON.parse(values['data_detail']).filter((value, key) => {
                if (value.is_po === 1) return true
            });
            if (obj.length == 0) {
                // jika all done
                if (values['state_order'] == 'DONE') {
                    html += '<span class="fa fa-truck text-success" style="font-size: 12px;"></span> <span class="fw-bold" style="font-size: 12px;">Order Selesai <span class="fa fa-check text-success" style="font-size: 12px;"></span>'
                } else {
                    html += '<span class="fa fa-truck text-success" style="font-size: 12px;"></span> <span class="fw-bold" style="font-size: 12px;">PO Telah Dibuat</span>'
                }
            } else if (JSON.parse(values['data_detail']).length == obj.length) {
                // jika tidak ada yang di PO kan
                html += '<span class="fa fa-truck text-grey" style="font-size: 12px;"></span> <span class="text-grey fw-bold" style="font-size: 12px;">Belum PO</span>'
            } else {
                html += '<span class="fa fa-truck text-warning" style="font-size: 12px;"></span> <span class="fw-bold" style="font-size: 12px;">' + obj1.length + ' dari ' + JSON.parse(values['data_detail']).length + ' Item Telah Dibuat PO</span>'
            }
            // html += '<br>'
            let qtySisa = JSON.parse(values['data_detail']).filter((value, key) => {
                if (value.qty_sisa !== 0 && value.qty_sisa !== null) return true
            })
            $.each(qtySisa, function(keys2, values2) {
                itemYangSisa.push({
                    'item': values2['item_id'],
                    'pr_id': values['id']
                })
            })
            var jumlahQtySisa = qtySisa.length
            // console.log(jumlahQtySisa)
            if (jumlahQtySisa > 0 && (values['state_order'] != 'DONE' || values['is_complete'] != 1)) {
                html += '<span class="text-grey ms-2" style="font-size: 12px;">(Partial)</span>'
            }
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '<div class="col">'
            if (values['justification'] != "" && values['justification'] != null) {
                html += '<p class="m-0" style="font-size:10px;"><b>Catatan :</b></p>'
                html += '<p class="m-0 text_search" style="font-size:10px;" data-id="PR' + keys + '">' + values['justification'] + '</p>'
            }
            html += '</div>'
            if (divisi_id == 4) {
                let resultPOPR = unique(JSON.parse(values['data_po_detail']).filter((value, key) => {
                    if (JSON.parse(values['data_po_detail'])[key] !== null) return true
                }).map(a => a.no_po))
                html += '<div class="col">'
                html += '<p class="m-0" style="font-size:10px;"><b>No.PO :</b></p>'
                for (let i = 0; i < resultPOPR.length; i++) {
                    html += '<p class="m-0 text_search under-hover" data-id="PR' + keys + '" style="font-size: 12px;cursor:pointer;" onclick="openDetailPO()">' + resultPOPR[i] + '</p>'
                }
                if (resultPOPR.length == 0) {
                    html += '<p class="m-0">-</p>'
                }
                html += '</div>'
            }
            html += '<div class="col-auto">'
            if (divisi_id != 10) {
                html += '<button class="small btn btn-sm btn-outline-primary w-100 mb-1 btn-print" data-id="' + values['id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(' + "'<?= base_url() ?>invoice/approval/PR/" + values['id'] + "'," + values['id'] + ',0)"><i class="fa fa-print"></i></button><br>'
                html += '<button class="small btn btn-sm btn-outline-primary w-100" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
                if (values['state'] == 'APPROVED' && values['order_detail'] != '[null]' && values['state'] != 'CANCEL') {
                    html += '<a class="dropdown-item" onclick="penerimaanBarangPR(' + values['id'] + ')"> <i class="fa fa-check me-2"></i> Penerimaan Barang</a>'
                }
                let qtyMasihAda = JSON.parse(values['data_detail']).filter((value, key) => {
                    if (value.qty_sisa !== 0) return true
                }).length
                // console.log(qtyMasihAda)
                if (divisi_id == 4 && (values['state_order'] != 'DONE' && qtyMasihAda > 0 || values['is_complete'] != 1)) {
                    html += '<a class="dropdown-item ' + textPO + '" ' + btnPO + '> <i class="fa fa-plus me-2"></i> Buat PO</a>'
                }
                html += '<a class="dropdown-item" onclick="detailPR(' + values['id'] + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
                // approval
                var ttd_pending = ""
                var pending = []
                for (let k = 0; k < data_pr_approval.length; k++) {
                    for (let i = 0; i < data_pr_approval[k].length; i++) {
                        for (let j = 0; j < data_pr_approval[k][i].length; j++) {
                            if (data_pr_approval[k][i][j]['reference_id'] == values['id']) {
                                ttd_pending = JSON.parse(data_pr_approval[k][i][j]['data_approval']).find((value, key) => {
                                    if (value.is_accept === 'Pending') return true
                                })
                                if (ttd_pending != undefined) {
                                    pending.push({
                                        'approval': ttd_pending,
                                        'keys': i,
                                    })
                                }
                            }
                        }
                    }
                }
                // console.log(pending)
                if (values['state'] != 'APPROVED' && values['state'] != 'REJECTED' && pending.length != 0 && values['state'] != 'CANCEL') {
                    var link = '<?= base_url() ?>order/detailPR/' + values['id'] + ''
                    html += '<a class="dropdown-item" onclick="beforeShareWhatsapp(' + values['id'] + ',' + "'" + '081944946015' + "'" + ',' + "'" + link + "'" + ',' + "'" + 'PR' + "'" + ',' + "'" + values['no_pr'] + "'" + ',' + "'" + pending[0]['approval']['user_name'] + "'" + ')"><i class="fa fa-share-alt me-2"></i> Bagikan Pengajuan</a>'
                    html += '<a class="dropdown-item" onclick="shareLink(' + "'" + link + "'" + ',0)"><i class="fa fa-link me-2"></i> Copy Tautan</a>'
                }
                if ((values['state_order'] == null && values['state'] != 'CANCEL' || values['is_complete'] == null || values['is_complete'] == 0) && divisi_id == 4) {
                    html += '<hr class="m-2">'
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-danger w-100" onclick="formCancelPR(' + values['id'] + ')">Pembatalan PR</button>'
                    html += '</div>'
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-success w-100 mt-2" onclick="formClosingPR(' + values['id'] + ')"><i class="fa fa-check text-white me-2"></i>CLOSING PR</button>'
                    html += '</div>'
                }
            }
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#pills-home').html(html)
        searching()
        // console.log(itemYangSisa)

        itemYangSisa.forEach(function(v) {
            res[v.item] = (res[v.item] || 0) + 1;
        })
        var select = ""
        select += '<option value="all">Pilih Item yang Belum Dibuat PO</option>'
        $.each(data_item, function(keys, values) {
            if (res[values['id']] > 0) {
                select += '<option value="' + values['id'] + '">' + values['name'] + ' (' + res[values['id']] + ')</option>'
            }
        })
        $('#selectItemYangBelumTuntas').html(select)
        return false
    }

    function groupAndSum(arr, groupKeys, sumKeys) {
        return Object.values(
            arr.reduce((acc, curr) => {
                const group = groupKeys.map(k => curr[k]).join('-');
                acc[group] = acc[group] || Object.fromEntries(groupKeys.map(k => [k, curr[k]]).concat(sumKeys.map(k => [k, 0])));
                sumKeys.forEach(k => acc[group][k] += parseFloat(curr[k]));
                return acc;
            }, {})
        );
    }

    function numberinPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getCountDocPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                const d = new Date();
                var month = d.getMonth() + 1;
                var thisMonth = (month < 10 ? '0' : '') + month
                let thisYear = d.getFullYear();
                if (response.message != 'Data data not found') {
                    let obj = response['data'].filter((value, key) => {
                        if (value.tahun === thisYear.toString() && value.cost_center_id === '23') return true
                    });
                    let count = 1
                    if (obj != undefined || obj.length == 0) {
                        var data_hasil = groupAndSum(obj, ['tahun'], ['count'])
                        count = parseInt(data_hasil[0]['count']) + 1;
                    }
                    no_pr = count.toString().padStart(3, "0") + '/SMM-' + initialDivision + '/PR/' + romanize(thisMonth) + '/' + thisYear
                } else {
                    no_pr = '001' + '/SMM-' + initialDivision + '/PR/' + romanize(thisMonth) + '/' + thisYear

                }
                numberinPO()
            }
        })
    }

    function numberinPO() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getCountDocPO'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                const d = new Date();
                var month = d.getMonth() + 1;
                var thisMonth = (month < 10 ? '0' : '') + month
                let thisYear = d.getFullYear();
                if (response.message != 'Data data not found') {
                    let obj = response['data'].filter((value, key) => {
                        if (value.tahun === thisYear.toString()) return true
                    });
                    let count = 1
                    if (obj != undefined || obj.length == 0) {
                        var data_hasil = groupAndSum(obj, ['tahun'], ['count'])
                        count = parseInt(data_hasil[0]['count']) + 1;
                        // count = parseInt(obj['count']) + 1;
                    }
                    no_po = count.toString().padStart(3, "0") + '/SMM-NTM/PO/' + romanize(thisMonth) + '/' + thisYear
                } else {
                    no_po = '001' + '/SMM-NTM/PO/' + romanize(thisMonth) + '/' + thisYear
                }
            }
        })
    }

    function masterPO(state = "") {
        if (state == "") {
            ajaxPO()
        } else {
            if (data_po == undefined) {
                ajaxPO()
            } else {
                formMasterPO(data_po)
            }
        }
    }

    function ajaxPO() {
        id_po_detail = []
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                user_id: user_id,
            },
            error: function(xhr) {
                notFound('#pills-profile')
            },
            beforeSend: function() {
                loadingData('#pills-profile')
            },
            success: function(response) {
                if (response['message'] == 'Data data not found') {
                    notFound('#pills-profile')
                } else {
                    data_po = response['data']
                    // console.log(data_po)
                    data_po_approval = response['data_approval']
                    formMasterPO(data_po)
                }
                numberinPR()
            }
        })
    }

    function formMasterPO(data) {

        var length_unclosing = data.filter((values, keys) => {
            if (values.is_complete === '0' && values.state_order === 'DONE') return true
        }).length
        var html = ""
        if (length_unclosing > 0) {
            html += '<button class="btn btn-sm btn-success float-start mb-2" onclick="showUncompletePO()"><span class="fw-bold me-2">' + length_unclosing + '</span>Data Belum Closing</button>'
        }
        html += '<button class="btn btn-sm btn-outline-primary float-end mb-2" onclick="refresh(' + "'" + 'PO' + "'" + ')"><span class="fa fa-refresh me-2"></span> Refresh</button>'
        $.each(data, function(keys, values) {
            var ttd_pending = ""
            if (values['data_approval'] != null) {
                ttd_pending = JSON.parse(values['data_approval']).find((value, key) => {
                    if (value.is_accept === 'Pending') return true
                })
            }
            // console.log(ttd_pending)
            var acc_check
            var badge = ""
            var bg = ""
            var textPO = "text-light"
            if (values['state'] == 'APPROVED' && values['state_order'] == 'DONE') {
                badge = '<span class="badge bg-success"><i class="fa fa-check"></i></span>'
                bg = 'bg-light'
                textPO = ""
            } else if (values['state'] == 'REJECTED' || values['state'] == 'CANCEL') {
                badge = '<span class="badge bg-danger"><i class="fa fa-times"></i></span>'
                bg = 'bg-light'
                textPO = 'text-light'
            }
            html += '<div class="card card-PO w-100 shadow-none mb-2 p-0 ' + bg + '" id="card_searchPO' + keys + '" data-status="' + values['state'] + '" data-date="' + values['date_po'] + '" data-key="' + keys + '">'
            html += '<div class="card-body p-2">'
            html += '<div class="row d-flex align-items-center">'
            html += '<div class="col">'
            html += '<small style="font-size: 11px;">' + values['date_po'] + '</small>'
            var rev = ''
            if (values['data_log'] != null) {
                if (JSON.parse(values['data_log'])[0]['old_date_po'] != null) {
                    rev = '<span class="badge bg-secondary me-1">REV</span>'
                }
            }
            if (values['state_order'] == null) {
                values['state_order'] = '-'
            }
            html += '<h6 class="m-0 p-0 fw-bold text_search" data-id="PO' + keys + '">' + values['no_po'] + ' ' + rev + badge + '</h6>'
            html += '<span class="fw-bold" style="font-size: 11px;"><i class="fa fa-file me-2"></i> <i class="text-warning">' + values['state'] + '</i> | <i class="fa fa-truck me-2"></i> <i class="text-warning">' + values['state_order'] + '</i></span>'
            html += '</div>'

            // SURAT JALAN PO
            html += '<div class="col">'
            html += '<b style="font-size: 11px;">Surat Jalan :</b>'
            // console.log(JSON.parse(values['no_sj_luar']))
            if (JSON.parse(values['no_sj_luar'])[0] != null) {
                var h = JSON.parse(values['no_sj_luar'])
                for (let i = 0; i < h.length; i++) {
                    html += '<p class="m-0 text_search under-hover" data-id="PO' + keys + '" style="font-size: 12px;cursor:pointer;" onclick="openDetailSuratJalan(' + "'" + h[i] + "'" + ',' + values['po_id'] + ')">' + h[i] + '</p>'
                }
            } else {
                html += '<p class="m-0 text-warning" style="font-size: 12px;"><i>Belum Ada Surat Jalan</i></p>'
            }
            html += '</div>'

            // LIST NO PR
            html += '<div class="col">'
            if (values['data_pr'] != null) {
                html += '<b style="font-size: 11px;">No. PR :</b>'
                if (JSON.parse(values['data_pr']) != null) {
                    $.each(JSON.parse(values['data_pr']), function(keys2, values2) {
                        if (values2['no_pr'] != null) {
                            html += '<p class="m-0 text_search under-hover" data-id="PO' + keys + '" style="font-size: 12px;cursor:pointer;" onclick="openDetailPR(' + values2['pr_id'] + ',' + values['po_id'] + ')">' + values2['no_pr'] + '</p>'
                        }
                    })
                } else {
                    html += '<p class="m-0 text-warning" style="font-size: 12px;">-</p>'
                }
            }
            html += '</div>'

            html += '<div class="col-1">'
            if (values['state_order'] == 'DONE') {
                if (values['is_complete'] == '0') {
                    html += '<button class="btn btn-outline-success h-100 btnClosePO" onclick="doClosePO(' + values['po_id'] + ')">Close<br>PO</button>'
                } else {
                    // jika udah close
                    html += '<img src="<?= base_url() ?>assets/image/logo/COMPLETE.svg" class="w-100 mx-auto d-block">'
                }
            }
            html += '</div>'

            html += '<div class="col-auto">'
            if (divisi_id != 10) {
                html += '<button class="small btn btn-sm btn-outline-primary w-100 mb-1" id="dropdownMenuButtonCetak" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print"></i></button><br>'
                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButtonCetak">'
                html += '<a class="dropdown-item" data-id="' + values['po_id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(' + "'<?= base_url() ?>invoice/approval/PO/" + values['po_id'] + "'," + values['po_id'] + ',1)"><i class="fa fa-qrcode me-2"></i>Cetak Internal</a>'
                html += '<a class="dropdown-item" data-id="' + values['po_id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(0,' + values['po_id'] + ',1)"><i class="fa fa-truck me-2"></i>Cetak Supplier</a>'
                html += '</div>'
                // html += '<button class="small btn btn-sm btn-outline-primary w-100 mb-1 btn-print" data-id="' + values['po_id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(' + "'<?= base_url() ?>invoice/approval/PO/" + values['po_id'] + "'," + values['po_id'] + ',1)"><i class="fa fa-print"></i></button><br>'
                html += '<button class="small btn btn-sm btn-outline-primary w-100 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>'
                if (values['state'] == 'APPROVED' && values['state_order'] == '-') {
                    html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle small">'
                    html += '<span class="visually-hidden">New alerts</span>'
                    html += '</span>'
                }
                html += '</button>'
                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'

                if (values['state'] == 'APPROVED') {
                    html += '<a class="dropdown-item" onclick="perubahanPO(' + values['pr_id'] + ',' + values['po_id'] + ')"><i class="fa fa-pencil me-2"></i> Perubahan PO</a>'
                }
                html += '<a class="dropdown-item" onclick="detailPO(' + values['pr_id'] + ',' + values['po_id'] + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
                var ttd_pending = ""
                var pending = []
                for (let k = 0; k < data_po_approval.length; k++) {
                    for (let i = 0; i < data_po_approval[k].length; i++) {
                        for (let j = 0; j < data_po_approval[k][i].length; j++) {
                            if (data_po_approval[k][i][j]['reference_id'] == values['po_id']) {
                                ttd_pending = JSON.parse(data_po_approval[k][i][j]['data_approval']).find((value, key) => {
                                    if (value.is_accept === 'Pending') return true
                                })
                                if (ttd_pending != undefined) {
                                    pending.push({
                                        'approval': ttd_pending,
                                        'keys': i,
                                    })
                                }
                            }
                        }
                    }
                }
                // console.log(pending)
                // console.log(values['po_id'])
                if (values['state'] != 'APPROVED' && values['state'] != 'REJECTED' && pending.length != 0) {
                    var link = '<?= base_url() ?>order/detailPO/' + values['po_id'] + ''
                    html += '<a class="dropdown-item" onclick="beforeShareWhatsapp(' + values['po_id'] + ',' + "'" + '081944946015' + "'" + ',' + "'" + link + "'" + ',' + "'" + 'PO' + "'" + ',' + "'" + values['no_po'] + "'" + ',' + "'" + pending[0]['approval']['user_name'] + "'" + ')"><i class="fa fa-share-alt me-2"></i> Bagikan Pengajuan</a>'
                    html += '<a class="dropdown-item" onclick="shareLink(' + "'" + link + "'" + ',1)"><i class="fa fa-link me-2"></i> Copy Tautan</a>'
                }
                if (values['state'] == 'APPROVED' && (values['state_order'] != null && values['state_order'] != '-')) {
                    html += '<hr class="m-2">'
                    // html += '<a class="dropdown-item" onclick="trackingOrder(' + values['po_id'] + ')"><i class="fa fa-truck me-2"></i> Tracking Order</a>'
                    html += '<a class="dropdown-item" onclick="orderPO(' + values['po_id'] + ')"><i class="fa fa-shopping-cart me-2"></i> Surat Jalan</a>'
                    // html += '<a class="dropdown-item" onclick=""><i class="fa fa-undo me-2"></i> Retur Barang</a>'
                }
                if (values['state'] == 'APPROVED' && (values['state_order'] == null || values['state_order'] == '-')) {
                    html += '<hr class="m-2">'
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-success w-100" onclick="orderPO(' + values['po_id'] + ')">Process Order</button>'
                    html += '</div>'
                }
                if (values['state_order'] != 'DONE') {
                    html += '<div class="text-center pe-2 ps-2 mt-2">'
                    html += '<button class="btn btn-sm btn-danger w-100" onclick="cancelOrder(' + values['po_id'] + ')">Cancel Order</button>'
                    html += '</div>'
                }
            }
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#pills-profile').html(html)
        searching()
        return false
    }

    function showUncompletePO() {
        var data = data_po.filter((values, keys) => {
            if (values.is_complete === '0' && values.state_order === 'DONE') return true
        })
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Data Belum Closing</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        $.each(data, function(key, value) {
            html_body += '<div class="card shadow-sm m-0 w-100 card-hoper">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row align-self-center">'
            html_body += '<div class="col">'
            html_body += '<p class="m-0" style="font-size:12px;"><b>' + value['no_po'] + '</b></p>'
            html_body += '<p class="m-0" style="font-size:12px;">Supplier : ' + value['supplier_name'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto">'
            html_body += '<button class="btn btn-sm btn-outline-success h-100 btnClosePO" onclick="doClosePO(' + value['po_id'] + ')">Close PO</button>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }

    function doClosePO(po_id) {
        var data = data_po.filter((values, keys) => {
            if (values.po_id === po_id.toString()) return true
        })[0]
        Swal.fire({
            text: 'Apakah anda yakin ingin Closing PO ' + data['no_po'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var data = {
                    po_id: po_id,
                }
                var button = '.btnClosePO'
                var url = '<?php echo api_url('Api_Warehouse/completePo'); ?>'
                kelolaData(data, type, url, button)
            }
        })
    }

    function cancelOrder(po_id) {
        var data = data_po.filter((values, keys) => {
            if (values.po_id === po_id.toString()) return true
        })[0]
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Cancel Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        if (data['order_detail'] == null) {
            html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
            html_body += '<div class="card shadow-sm m-0 w-100">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row align-self-center">'
            html_body += '<div class="col-12 text-center">'
            html_body += '<i class="small">Tidak Ada Order dan Surat Jalan pada PO ini, Apakah anda ingin membatalkan dokumen PO <span class="fw-bold text-primary">' + data['no_po'] + ' ?</span></i>'
            html_body += '<button class="mt-5 btn btn-danger btn-sm" id="btnCancelPO" onclick="formCancelPO(' + po_id + ')">Batalkan Purchase Order</button>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        } else {
            if (JSON.parse(data['order_detail'])[0]['no_sj'] != null) {
                html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                html_body += '<p class="small d-inline fw-bold" style="font-size:12px;"><b>Terdapat Surat Jalan didalam PO ini : </b></p>'
                $.each(JSON.parse(data['order_detail']), function(key, value) {
                    html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
                    html_body += '<div class="card-body p-3">'
                    html_body += '<div class="row align-self-center">'
                    html_body += '<div class="col-auto text-center align-self-center">'
                    var text = "text-grey"
                    if (value['state'] == 'DONE') {
                        text = 'text-success'
                    }
                    html_body += '<i class="fa fa-check fa-2x me-2 ' + text + '"></i>'
                    html_body += '</div>'
                    html_body += '<div class="col">'
                    html_body += '<p class="small d-inline m-0 fw-bold" style="font-size:12px;">No. SJ ' + value['no_sj'] + '</p>'
                    html_body += '<p class="m-0"><span class="small" style="font-size:10px;">Status Order : ' + value['state'] + '</span></p>'
                    if (value['state'] != 'DONE') {
                        html_body += '<p class="m-0 lh-1 text-danger"><span class="small" style="font-size:8px;">*) Ketika anda menutup PO ini, maka Surat Jalan yang belum Selesai akan otomatis tertutup tanpa penerimaan</span></p>'
                    }
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                })
                html_body += '<p class="m-0 mt-4"><b class="small">Alasan Pembatalan :</b></p>'
                html_body += '<textarea class="form-control form-control-sm w-100" rows="10" id="catatanPembatalan"></textarea>'
                html_body += '<button class="mt-2 p-3 btn btn-danger btn-sm w-100" id="btnCancelPO" onclick="formCancelPO(' + po_id + ')">Batalkan Purchase Order</button>'
                html_body += '</div>'
            } else {
                html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                html_body += '<div class="card shadow-sm m-0 w-100">'
                html_body += '<div class="card-body">'
                html_body += '<div class="row align-self-center">'
                html_body += '<div class="col-12 text-center">'
                html_body += '<p class="m-0 mb-5"><i class="small">Sebelumnya anda telah membuka order tanpa Surat Jalan, Apakah anda ingin membatalkan PO <span class="fw-bold text-primary">' + data['no_po'] + ' ?</span></i></p>'
                html_body += '<p class="m-0"><b class="small">Alasan Pembatalan :</b></p>'
                html_body += '<textarea class="form-control form-control-sm w-100" rows="10" id="catatanPembatalan"></textarea>'
                html_body += '<button class="mt-2 btn btn-danger btn-sm" id="btnCancelPO" onclick="formCancelPO(' + po_id + ')">Batalkan Purchase Order</button>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            }
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup Halaman</button>'
        $('#modalFooter').html(html_footer);
    }

    function formCancelPO(po_id) {
        var data = data_po.filter((values, keys) => {
            if (values.po_id === po_id.toString()) return true
        })[0]
        Swal.fire({
            text: 'Apakah anda yakin ingin membatalkan PO ' + data['no_po'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                doCancelPO(po_id)
            }
        })
    }

    function doCancelPO(po_id) {
        var data = data_po.filter((values, keys) => {
            if (values.po_id === po_id.toString()) return true
        })[0]
        var uncomplete_detail_order_id = []
        $.each(JSON.parse(data['order_detail']), function(keys, values) {
            if (values['state'] != 'DONE') {
                uncomplete_detail_order_id.push(values['pengiriman_detail_id'])
            }
        })
        var type = 'POST'
        var data = {
            po_id: data['po_id'],
            id_user: user_id,
            uncomplete_detail_order_id: uncomplete_detail_order_id,
            note: $('#catatanPembatalan').val()
        }
        var button = '#btnCancelPO'
        var url = '<?php echo api_url('Api_Warehouse/cancelPO'); ?>'
        kelolaData(data, type, url, button)
    }

    function trackingOrder(po_id) {
        var data = JSON.parse(data_po.filter((values, keys) => {
            if (values.po_id === po_id.toString()) return true
        })[0]['order_detail'])
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Tracking Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        if (data[0]['item_id'] == null) {
            html_body += '<div class="col-12 text-center">'
            html_body += '<i class="mt-5 mb-5">Belum Ada Order yang Dimulai</i>'
            html_body += '</div>'
        } else {
            html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
            html_body += '<div class="card shadow-sm m-0 w-100">'
            html_body += '<div class="card-body p-2">'
            html_body += '<div class="row align-self-center">'
            html_body += '<div class="col-3">'
            html_body += '<i class="fa fa-check fa-3x me-2"></i>'
            html_body += '</div>'
            html_body += '<div class="col-9">'
            html_body += '<p class="small d-inline m-0 fw-bold" style="font-size:12px;">Created</p>'
            html_body += '<p class="m-0"><span class="small" style="font-size:10px;">' + JSON.parse(data['data_approval'])[0]['user_name'] + '</span></p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }

    function perubahanPO(pr_id, id) {
        // console.log(pr_id, id)
        $.each(data_po, function(keys, values) {
            if (id == values['po_id']) {
                formPO(pr_id, data_po[keys], 'yes')
            }
        })
    }
    $(document).on('click', '.nav-link', function(e) {
        button_prpo = $(this).data('status')
        if (button_prpo == 'PR') {
            masterPR('MOVE')
        } else if (button_prpo == 'PO') {
            masterPO('MOVE')
        }
        searching()
    })

    function detailPR(id) {
        $.each(data_pr, function(keys, values) {
            if (id == values['id']) {
                formPR(data_pr[keys])
            }
        })

    }

    function detailPO(pr_id, id) {
        $.each(data_po, function(keys, values) {
            if (id == values['po_id']) {
                formPO(pr_id, data_po[keys])
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
        // if (data == undefined) {
        //     html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data_user[0]['division_name'] + '</span></div>'
        // } else {
        //     html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['cost_center'] + '</span></div>'
        // }
        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">NTM WAREHOUSE</span></div>'


        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'

        // category
        html_body += '<div class="row mb-2 float-end">'
        html_body += '<div class="col-auto align-self-center">Category :</div>'
        if (data == undefined) {
            html_body += '<div class="col-auto ps-0">'
            html_body += '<select name="" id="category" class="form-control form-control-sm select2-single category">'
            // html_body += '<option value=""></option>'
            html_body += '<option value="NTM">NTM</option>'
            // html_body += '<option value="ASSETS">ASSETS</option>'
            html_body += '</select>'
            html_body += '</div>'
        } else {
            html_body += '<div class="col-auto"><span class="fw-bold">' + data['category'] + '</span></div>'
        }
        html_body += '</div>'
        // category

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

        html_body += '<div class="col-12 col-md-8 mt-1">'
        html_body += '<small>Justification :</small>'
        if (data == undefined) {
            html_body += '<textarea class="form-control form-control-sm w-100" rows="5" id="justification"></textarea>'
        } else {
            html_body += '<div class="w-100 text-wrap small fw-bold">'
            html_body += data['justification']
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-4    mt-1">'
        if (data != undefined) {
            // approval
            var ttd_pending = ""
            var pending = []
            for (let k = 0; k < data_pr_approval.length; k++) {
                for (let i = 0; i < data_pr_approval[k].length; i++) {
                    pending.push(data_pr_approval[k][i])
                }
            }
            html_body += '<small class="mb-2"><b>Approval</b></small>'
            html_body += '<div class="row">'
            var e = []
            var acc_check = ""
            for (let i = 0; i < pending.length; i++) {
                for (let j = 0; j < pending[i].length; j++) {
                    if (data['id'] == pending[i][j]['reference_id']) {
                        $.each(JSON.parse(pending[i][j]['data_approval']), function(key, value) {
                            acc_check = value['is_accept']
                        })
                    }
                }
                if (pending[i][0]['reference_id'] == data['id']) {
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
                    for (let j = 0; j < pending[i].length; j++) {
                        if (data['id'] == pending[i][j]['reference_id']) {
                            $.each(JSON.parse(pending[i][j]['data_approval']), function(key, value) {
                                html_body += '<p class="m-0"><span class="small" style="font-size:10px;">' + value['user_name'] + '</span></p>'
                            })
                        }
                    }
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                }
            }
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
            html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanPR" onclick="simpan(0)">Simpan</button>'
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
            html_body += '<select style="border:none" name="" id="item_pr' + i + '" class="form-control form-control-sm selectpicker item_pr" data-id="' + i + '">'
            html_body += '<option value="" selected disabled> </option>'
            $.each(data_item, function(keys, values) {
                html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
            })
            html_body += '</select>'
        } else {
            html_body += data['item_name']
            if (data['is_po'] == 0) {
                html_body += '<span class="fa fa-truck ms-2 text-light" data-bs-toggle="tooltip" data-bs-placement="right" title="Belum masuk proses PO"></span>'
            } else {
                html_body += '<span class="fa fa-truck ms-2 text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Telah masuk proses PO"></span>'
            }
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
            html_body += '<select style="border:none" name="" id="unit_pr' + i + '" class="form-control form-control-sm select2-single unit_pr" data-id="' + i + '">'
            html_body += '<option value="" selected disabled></option>'
            html_body += '</select>'
        } else {
            html_body += data['unit_name']
        }
        html_body += '</td>'

        // unit price
        html_body += '<td class="text-end">'
        if (data == "") {
            html_body += '<input style="border:none" type="text" name="" id="unit_price_pr' + i + '" data-id="' + i + '" class="nominal form-control form-control-sm p-1 unit_price_pr " value="">'
        } else {
            html_body += number_format(data['unit_price'])
        }
        html_body += '</td>'

        // extended price
        html_body += '<td class="text-end">'
        if (data == "") {
            html_body += '<input style="border:none" type="text" name="" id="extended_price_pr' + i + '" data-id="' + i + '" class="nominal form-control form-control-sm p-1 extended_price_pr " value="">'
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
        $('#item_pr' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_pr' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_price_pr' + i).number(true, 2);
        $('#extended_price_pr' + i).number(true, 2);
        return true;
    }

    $(document).on('change', '.item_pr', function(e) {
        var key = $(this).data('id')
        $('#unit_pr' + key).empty()
        var id = $(this).val()
        let obj = data_item.find((value, key) => {
            if (value.id === id) return true
        })['data_konversi']
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id === id) return true
        });
        // console.log(satuan_tetap)
        var html_body = ""
        html_body += '<option value="" selected disabled></option>'
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '">' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                html_body += '<option value="' + values['satuan_id'] + '">' + values['satuan_name'] + '</option>'
            })
        }
        $('#unit_pr' + key).html(html_body)
    })

    $(document).on('change', '.item_po', function(e) {
        var key = $(this).data('id')
        var id = $(this).val()
        changeItemPO(id, key)
    })

    function changeItemPO(id_item, id, id_satuan = '') {
        $('#unit_po' + id).empty()
        let obj = data_item.find((value, key) => {
            if (value.id == id_item) return true
        })['data_konversi']
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id == id_item) return true
        });
        // console.log(satuan_tetap)
        var html_body = ""
        html_body += '<option value="" selected disabled></option>'
        var select = ''
        if (id_satuan == satuan_tetap.satuan_id) {
            select = 'selected'
        }
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '" ' + select + '>' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                var select = ''
                if (values.satuan_id == id_satuan) {
                    select = 'selected'
                }
                html_body += '<option value="' + values['satuan_id'] + '" ' + select + '>' + values['satuan_name'] + '</option>'
            })
        }
        $('#unit_po' + id).html(html_body)
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
        price = (parseFloat(unit) * parseFloat(qty))
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
                jumlahPR += parseFloat(total[i]);
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
                from: divisi_id,
                date: currentDate(),
                no_pr: no_pr,
                id_item: id_item,
                qty: qty,
                unit: unit,
                unit_price: unit_price,
                extended_price: total,
                notes: notes,
                total: jumlahPR,
                justification: $('#justification').val(),
                category: $('#category').val(),
                job_level_id: job_level_id,
            }
            var button = '#btnSimpanPR'
            var url = '<?php echo api_url('Api_Warehouse/insertPR'); ?>'
        } else {
            // PO
            var id_detail_pr = $('.item_po').map(function() {
                return $(this).data('id_pr');
            }).get();
            var id_item = $('.item_po').map(function() {
                return $(this).val();
            }).get();
            var qty = $('.qty_po').map(function() {
                return $(this).val();
            }).get();
            var id_satuan = $('.unit_po').map(function() {
                return $(this).val();
            }).get();
            var harga_po = $('.harga_po').map(function() {
                return $(this).val();
            }).get();
            var total_po = $('.total_po').map(function() {
                return $(this).val();
            }).get();
            var tanggal_po = $('.tanggal_po').map(function() {
                return $(this).val();
            }).get();
            var grand_total = $('#totalPO').val()
            if ($('#ppnPO').val() == "") {
                // $('#ppnPO').val() = 0
                var ppn = 0
            } else {

                var ppn = $('#ppnPO').val()
            }
            var total_all = $('#subtotalPO').val()
            var id_supplier = $('#supplier').val()
            // var pr_id = $('#no_pr').val()
            var pr_id = $('.item_po').map(function() {
                return $(this).data('parent');
            }).get();
            var po_id = $('#btnSimpanPO').data('po_id')
            var data = {
                no_po: no_po,
                created_by: user_id,
                id_supplier: id_supplier,
                pr_id: pr_id,
                id_detail_pr: id_detail_pr,
                id_item: id_item,
                qty: qty,
                id_satuan: id_satuan,
                harga_po: harga_po,
                total_po: total_po,
                tanggal_po: tanggal_po,
                total_all: total_all,
                ppn: ppn,
                grand_total: grand_total,
                po_id: po_id,
                id_po_detail: id_po_detail,
                job_level_id: job_level_id,
                ppn_percent: 11,
            }
            var button = '#btnSimpanPO'
            var url = '<?php echo api_url('Api_Warehouse/insertPO'); ?>'
        }
        // console.log(data)
        if (status == 1) {
            if (po_id != "") {
                Swal.fire({
                    text: 'Apakah anda yakin ingin mengubah PO ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // console.log(data)
                        kelolaData(data, type, url, button)
                    }
                })
            } else {
                kelolaData(data, type, url, button)
            }
        } else {
            kelolaData(data, type, url, button)
        }

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
                        text: 'Data Berhasil Tersimpan',
                        icon: 'success',
                    }).then((responses) => {
                        if (button == '#btnSimpanPR') {
                            var ttd_pending = ""
                            var pending = []
                            var data_app = response.data_approval
                            // console.log(data_app)
                            $.each(data_app, function(keys, values) {
                                $.each(data_app[keys], function(keys2, values2) {
                                    ttd_pending = JSON.parse(values2['data_approval']).filter((value, key) => {
                                        if (value.is_accept === 'Pending') return true
                                    })
                                    if (ttd_pending.length > 0) {
                                        pending.push({
                                            'approval': ttd_pending[0],
                                            'keys': keys,
                                        })
                                    }
                                })
                            })
                            // console.log(pending)
                            var key = pending[0]['keys']
                            var phone = []
                            var name = []
                            $.each(pending, function(keys, values) {
                                if (values['keys'] == key) {
                                    phone.push(values['approval']['phone'])
                                    name.push(values['approval']['user_name'])
                                }
                            })
                            button_prpo = 'PO'
                            var link = '<?= base_url() ?>order/detailPR/' + response.id_pr + ''
                            $('#modal').modal('hide')
                            shareWhatsapp(response.id_pr, phone, link, 'PR', response.no_pr, name)
                            ajaxPR()
                        } else if (button == '#btnSimpanPO') {
                            // var ttd_pending = ""
                            // if (response.data_approval[0]['data_approval'] != null) {
                            //     ttd_pending = JSON.parse(response.data_approval[0]['data_approval']).find((value, key) => {
                            //         if (value.is_accept === 'Pending') return true
                            //     })
                            // }
                            var ttd_pending = ""
                            var pending = []
                            var data_app = response.data_approval
                            // console.log(data_app)
                            $.each(data_app, function(keys, values) {
                                $.each(data_app[keys], function(keys2, values2) {
                                    ttd_pending = JSON.parse(values2['data_approval']).filter((value, key) => {
                                        if (value.is_accept === 'Pending') return true
                                    })
                                    if (ttd_pending.length > 0) {
                                        pending.push({
                                            'approval': ttd_pending[0],
                                            'keys': keys,
                                        })
                                    }
                                })
                            })
                            // console.log(pending)
                            // console.log(pending)
                            if (pending.length > 0) {
                                var key = pending[0]['keys']
                                var phone = []
                                var name = []
                                $.each(pending, function(keys, values) {
                                    if (values['keys'] == key) {
                                        phone.push(values['approval']['phone'])
                                        name.push(values['approval']['user_name'])
                                    }
                                })
                            }
                            button_prpo = 'PO'
                            var link = '<?= base_url() ?>order/detailPO/' + response.id_po + ''
                            $('#modal').modal('hide')
                            if (data['po_id'] == "" && pending.length > 0) {
                                shareWhatsapp(response.id_po, phone, link, 'PO', response.no_po, name)
                            }
                            ajaxPO()
                        } else {
                            button_prpo = 'PO'
                            $('#modal').modal('hide')
                            ajaxPO()
                        }
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

    function beforeShareWhatsapp(id, no_telp, link, status, no_doc, nama) {
        Swal.fire({
            text: 'Membagikan Approval akan langsung masuk ke Whatsapp dengan User ' + nama + ', apakah anda ingin melanjutkan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                if (status == 'PR') {
                    var ttd_pending = ""
                    var pending = []
                    for (let k = 0; k < data_pr_approval.length; k++) {
                        for (let i = 0; i < data_pr_approval[k].length; i++) {
                            for (let j = 0; j < data_pr_approval[k][i].length; j++) {
                                if (data_pr_approval[k][i][j]['reference_id'] == id) {
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
                    }
                    var key = pending[0]['keys']
                    var phone = []
                    var name = []
                    $.each(pending, function(keys, values) {
                        if (values['keys'] == key) {
                            phone.push(values['approval']['phone'])
                            // phone.push('081944946015')
                            name.push(values['approval']['user_name'])
                        }
                    })
                } else {
                    var ttd_pending = ""
                    var pending = []
                    for (let k = 0; k < data_po_approval.length; k++) {
                        for (let i = 0; i < data_po_approval[k].length; i++) {
                            for (let j = 0; j < data_po_approval[k][i].length; j++) {
                                if (data_po_approval[k][i][j]['reference_id'] == id) {
                                    ttd_pending = JSON.parse(data_po_approval[k][i][j]['data_approval']).filter((value, key) => {
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
                    }
                    var key = pending[0]['keys']
                    var phone = []
                    var name = []
                    $.each(pending, function(keys, values) {
                        if (values['keys'] == key) {
                            phone.push(values['approval']['phone'])
                            // phone.push('081944946015')
                            name.push(values['approval']['user_name'])
                        }
                    })
                }
                // console.log(loop)
                shareWhatsapp(id, phone, link, status, no_doc, name)
            }
        })
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
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Approval kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                $('#modal2').modal('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {});
                // if (response[0].message = 'message sent') {
                //     // formWhatsapp(link)
                //     Swal.fire({
                //         title: 'Success!',
                //         text: 'Berhasil Mengirimkan Approval',
                //         icon: 'success',
                //     }).then((responses) => {});
                // } else {
                //     // Swal.fire({
                //     //     icon: 'error',
                //     //     title: 'Oops...',
                //     //     text: 'Mengalami Masalah, Silahkan Kirim Ulang Pengajuan'
                //     // });
                //     Swal.fire({
                //         title: 'Success!',
                //         text: 'Berhasil Mengirimkan Approval',
                //         icon: 'success',
                //     }).then((responses) => {});
                // }
            }
        })
    }

    function shareLink(link, status) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        $('#modalHeader2').removeClass('d-none');
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
        // html_body += '<small class="mt-3">Atau juga bisa dengan mudah langsung kirim ke Whatsapp User terkait dengan menekan tombol <span class="fw-bold">Kirim</span> dibawah ini</small>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);

        var html_footer = '';
        $('#modalHeader2').removeClass('d-none');
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
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

    var status_more = "less"
    var data_detail = ""
    var keys_select = 0
    var id_po_detail = []

    function formPO(id_pr = "", data = "", perubahan = "") {
        // console.log(data)
        status_more = "less"
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
        var po = no_po
        var date = currentDate()
        var disable = ""
        if (data != "") {
            po = data['no_po']
            date = data['date_po']
            disable = 'disabled'
        }
        html_body += '<div class="col-8 col-md-10 align-self-center">' + po + '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">Tanggal</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">' + date + '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">Supplier</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">'
        if (data == "") {
            html_body += '<select name="" id="supplier" class="form-select form-select-sm w-75" required="required" ' + disabled + '>'
            html_body += '<option value="" disabled selected>Pilih Supplier</option>'
            $.each(data_supplier, function(keys, values) {
                var select = ""
                if (data != "") {
                    if (data['supplier_id'] == values['id']) {
                        select = 'selected'
                    }
                }
                html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
            })
            html_body += '</select>'
        } else {
            html_body += data['supplier_name']
        }
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2">No. PR</div>'
        html_body += '<div class="col-8 col-md-10">'
        if (data == "") {
            var disabled = ""
            if (id_pr != "") {
                disabled = 'disabled'
            }
            html_body += '<select name="" class="form-control select2-single form-control-sm w-75 mb-2 no_pr" data-live-search="true" required="required" ' + disabled + '>'
            html_body += '<option value="" disabled selected>Pilih No. PR</option>'
            data_detail = ""
            var pr_filtered = data_pr.filter((value, key) => {
                if (value.state === 'APPROVED' && (value.state_order !== 'DONE' || value.is_complete !== '1')) return true
            })
            // console.log(pr_filtered)
            $.each(pr_filtered, function(keys, values) {
                var select = ""
                if (values['id'] == id_pr) {
                    data_detail = JSON.parse(values['data_detail'])
                    select = 'selected'
                }
                html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['no_pr'] + '</option>'
            })
            html_body += '</select>'

            html_body += '<div id="select_many"></div>'
            html_body += '<span class="text-primary small" style="cursor:pointer;" onclick="tambahSelectPR()"><span class="fa fa-plus"></span> Tambah PR lainnya..</span>'
        } else {
            $.each(JSON.parse(data['data_pr']), function(keys, values) {
                html_body += values['no_pr'] + '<br>'
            })
        }
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        if (data == "") {
            html_body += '<div class="card shadow-sm w-100">'
            html_body += '<div class="card-body">'
            html_body += '<h6>Detail Item PR : </h6>'
            html_body += '<div id="showDetailPRinPO">'

            html_body += '</div>'
            html_body += '</div>'
            var footer_show = 'd-none'
            if (data_detail.length > 2) {
                footer_show = ''
            }
            html_body += '<div class="card-footer text-center text-primary p-2 ' + footer_show + '" style="cursor:pointer" id="showMorePR" onclick="showMoreFuction()">'
            html_body += 'Show More <span class="fa fa-chevron-down"></span>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'

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
        if (data == "") {
            html_body += '<button class="btn btn-sm btn-outline-primary float-end" style="font-size:11px" id="btnNewRowPO"><i class="fa fa-plus me-2"></i> New Row</button>'
        }
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6 mt-2 ps-4 pe-4 pb-4">'
        if (data != "" && perubahan == "") {
            var ttd_pending = ""
            var pending = []
            for (let k = 0; k < data_po_approval.length; k++) {
                for (let i = 0; i < data_po_approval[k].length; i++) {
                    pending.push(data_po_approval[k][i])
                }
            }
            html_body += '<small class="mb-2"><b>Approval</b></small>'
            // approval
            html_body += '<div class="row">'

            var e = []
            var acc_check = ""
            // console.log(data)
            for (let i = 0; i < pending.length; i++) {
                for (let j = 0; j < pending[i].length; j++) {
                    if (data['po_id'] == pending[i][j]['reference_id']) {
                        $.each(JSON.parse(pending[i][j]['data_approval']), function(key, value) {
                            acc_check = value['is_accept']
                        })
                    }
                }
                if (pending[i][0]['reference_id'] == data['po_id']) {
                    // console.log(acc_check)
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
                    for (let j = 0; j < pending[i].length; j++) {
                        if (data['po_id'] == pending[i][j]['reference_id']) {
                            $.each(JSON.parse(pending[i][j]['data_approval']), function(key, value) {
                                html_body += '<p class="m-0"><span class="small" style="font-size:10px;">' + value['user_name'] + '</span></p>'
                            })
                        }
                    }
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                }
            }

            html_body += '</div>'
        } else {
            if (perubahan != "") {
                html_body += '<small class="mb-4"><b><i class="fa fa-clock-o text-primary me-2"></i> History Revisi</b></small>'
                // approval
                html_body += '<div class="row mt-2">'
                if (data['data_log'] != null) {
                    if (JSON.parse(data['data_log'])[0]['old_date_po'] == null) {
                        html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                        html_body += '<div class="card shadow-none m-0 w-100">'
                        html_body += '<div class="card-body p-2 text-center">'
                        html_body += '<i class="small" style="font-size:10px;">Tidak Ada Riyawat Revisi PO</i>'
                        html_body += '</div>'
                        html_body += '</div>'
                        html_body += '</div>'
                    } else {
                        $.each(JSON.parse(data['data_log']), function(key, value) {
                            html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                            html_body += '<div class="card shadow-none m-0 w-100">'
                            html_body += '<div class="card-body p-2">'
                            html_body += '<div class="row">'
                            html_body += '<div class="col-6">'
                            html_body += '<span class="badge bg-primary text-white" style="font-size:10px;">' + value['date_action'] + '</span><br>'
                            $.each(value['data_detail_log'], function(keys, values) {
                                html_body += '<p class="m-0 p-0 float-start"><b class="small">' + values['item_name'] + '</b></p><br>'
                                html_body += '<p class="m-0 p-0 float-start" style="font-size:10px;">' + number_format(values['qty']) + ' ' + values['satuan_name'] + '</p>'
                                html_body += '<p class="m-0 mb-3 p-0 float-end" style="font-size:10px;">' + number_format(values['subtotal']) + '</p>'
                            })
                            html_body += '</div>'
                            html_body += '<div class="col-6 border-start" style="font-size:10px;">'

                            html_body += '<div class="row mb-2">'
                            html_body += '<div class="col-6 align-self-center text-end">Sub Total</div>'
                            html_body += '<div class="col-6 align-self-center text-end">'
                            html_body += number_format(value['old_total_harga'])
                            html_body += '</div>'
                            html_body += '</div>'
                            html_body += '<div class="row mb-2">'
                            html_body += '<div class="col-6 align-self-center text-end">PPN</div>'
                            html_body += '<div class="col-6 align-self-center text-end">'
                            html_body += number_format(value['old_ppn'])
                            html_body += '</div>'
                            html_body += '</div>'
                            html_body += '<div class="row mb-2">'
                            html_body += '<div class="col-6 align-self-center text-end">Grand Total</div>'
                            html_body += '<div class="col-6 align-self-center text-end">'
                            html_body += number_format(value['old_grand_total'])
                            html_body += '</div>'
                            html_body += '</div>'

                            html_body += '</div>'
                            html_body += '</div>'
                            html_body += '</div>'
                            html_body += '</div>'
                            html_body += '</div>'
                        })
                    }
                } else {
                    html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                    html_body += '<div class="card shadow-none m-0 w-100">'
                    html_body += '<div class="card-body p-2 text-center">'
                    html_body += '<i class="small" style="font-size:10px;">Tidak Ada Riyawat Revisi PO</i>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                }
                html_body += '</div>'
            }
        }
        html_body += '</div>'


        html_body += '<div class="col-12 col-md-6 mt-5">'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">Sub Total</div>'
        html_body += '<div class="col-8 align-self-center text-end">'
        if (data == "" || perubahan == 'yes') {
            var subtotal = (perubahan === 'yes') ? data['total_harga'] : '';
            html_body += '<input type="text" name="" id="subtotalPO" class="form-control form-control-sm p-1 w-100 nominal" value="' + subtotal + '" style="border:0">'
        } else {
            html_body += number_format(data['total_harga'])
        }
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 text-end">PPN</div>'
        html_body += '<div class="col-8 text-end">'
        if (data == "" || perubahan == 'yes') {
            var ppn = (perubahan === 'yes') ? data['ppn'] : 0;
            html_body += '<input type="text" name="" id="ppnPO" class="form-control form-control-sm p-1 w-100 nominal" value="' + ppn + '" disabled>'
            html_body += '<div>'
            html_body += '<input class="form-check-input" type="checkbox" value="on" id="checkPPN">'
            html_body += '<label class="form-check-label" for="checkPPN">'
            html_body += 'Tanpa Pajak ?'
            html_body += '</label>'
            html_body += '</div>'
        } else {
            html_body += number_format(data['ppn'])
        }
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">Total</div>'
        html_body += '<div class="col-8 align-self-center text-end">'
        if (data == "" || perubahan == 'yes') {
            var grand_total = (perubahan === 'yes') ? data['grand_total'] : '';
            html_body += '<input type="text" name="" id="totalPO" class="form-control form-control-sm p-1 w-100 nominal" value="' + grand_total + '" style="border:0">'
        } else {
            html_body += number_format(data['grand_total'])
        }
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#supplier').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        if (data == "" || perubahan == 'yes') {
            var po_id = (perubahan === 'yes') ? data['po_id'] : '';
            var text_po = (perubahan === 'yes') ? 'Change PO' : 'Create PO';
            html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanPO" onclick="simpan(1)" data-po_id="' + po_id + '">' + text_po + '</button>'
        }
        $('#modalFooter').html(html_footer);
        $('.nominal').number(true, 3);
        if (data_detail != "") {
            showDetailPRinPO(data_detail)
            hiddenDetailPR(2)
        }
        if (data != "") {
            $.each(JSON.parse(data['data_detail']), function(keys, values) {
                id_po_detail.push(values['id'])
                formRowPO(last_number, JSON.parse(data['data_detail'])[keys])
                last_number++
            })
        }
    }

    function tambahSelectPR(num = keys_select) {
        var html_body = ""
        html_body += '<div class="row align-items-center" id="selectForm' + num + '">'
        html_body += '<div class="col-7">'
        html_body += '<select name="" class="form-control select2-single form-control-sm w-100 mb-2 no_pr" data-live-search="true" required="required">'
        html_body += '<option value="" disabled selected>Pilih No. PR</option>'
        var pr_filtered = data_pr.filter((value, key) => {
            if (value.state === 'APPROVED') return true
        })
        $.each(pr_filtered, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['no_pr'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-5">'
        html_body += '<button class="btn btn-sm p-1" onclick="deleteSelectForm(' + num + ')"><i class="fa fa-trash text-danger fa-1x"></i></button>'
        html_body += '</div>'
        html_body += '</div>'
        $('#select_many').append(html_body)
        keys_select++
    }

    function deleteSelectForm(id) {
        $('#selectForm' + id).remove()
        changeNoPR()
    }
    $(document).on('change', '.no_pr', function(e) {
        changeNoPR()
    })

    function changeNoPR() {
        $('#showDetailPRinPO').empty()
        var array = []
        var pr_id = $('.no_pr').map(function() {
            return $(this).val();
        }).get();
        for (let i = 0; i < pr_id.length; i++) {
            var detail = JSON.parse(data_pr.filter(x => x.id === pr_id[i])[0]['data_detail'])
            for (let j = 0; j < detail.length; j++) {
                array.push(detail[j])
            }
        }
        data_detail = array
        showDetailPRinPO(array)
        hiddenDetailPR(2)
    }
    $(document).on('click', '#btnNewRowPO', function(e) {
        formRowPO(last_number, "")
        last_number++
    })

    function showMoreFuction() {
        if (status_more == 'less') {
            status_more = "more"
            $('#showMorePR').html('Show Less <span class="fa fa-chevron-up"></span>')
            hiddenDetailPR(data_detail.length)
        } else {
            status_more = "less"
            $('#showMorePR').html('Show More <span class="fa fa-chevron-down"></span>')
            hiddenDetailPR(2)
        }
    }

    function hiddenDetailPR(jumlah) {
        if (data_detail.length > 2) {
            $('#showMorePR').removeClass('d-none')
        } else {
            $('#showMorePR').addClass('d-none')
        }
        $.each(data_detail, function(keys, values) {
            if (keys < jumlah) {
                $('#cardDetailPR' + keys).removeClass('d-none')
            } else {
                $('#cardDetailPR' + keys).addClass('d-none')
            }
        })
    }

    function showDetailPRinPO(data) {
        last_number = 1
        $('#bodyPO').empty()
        var html_body = ""
        var check = []
        $.each(data, function(keys, values) {
            if (data_checked != "") {
                var id = data_checked.includes(values['id'].toString())
                if (id == true) {
                    check.push({
                        'keys': keys,
                        'id': values['id']
                    })
                }
            }
            var checkbox = ""
            if (values['is_po'] == 1 && values['qty_sisa'] == 0) {
                checkbox = 'disabled'
                html_body += '<div class="card shadow-none mb-1 p-0 small cardDetailPR bg-grey" id="cardDetailPR' + keys + '">'
            } else {
                html_body += '<div class="card shadow-none mb-1 p-0 small cardDetailPR" data-keys="' + keys + '" id="cardDetailPR' + keys + '">'
                // html_body += '<div class="card shadow-none mb-1 p-0 small cardDetailPR" data-keys="' + keys + '" id="cardDetailPR' + keys + '" onclick="cardClickPR(' + keys + ',' + values['id'] + ')">'
            }
            html_body += '<div class="card-body p-2">'
            html_body += '<div class="row d-flex align-items-center">'
            html_body += '<div class="col-1">'
            html_body += '<input class="form-check-input checkbox-PR" id="checkPR' + keys + '" type="checkbox" value="' + values['id'] + '" data-id="' + keys + '"  data-id_pr="' + values['id'] + '" ' + check + ' data-parent="' + values['id_parent'] + '"' + checkbox + '>'
            html_body += '</div>'
            html_body += '<div class="col-6"><span class="">' + values['item_name'] + '</span></div>'
            html_body += '<div class="col-5">'
            var sisa = ""
            if (values['qty_sisa'] != 0 && values['qty_sisa'] != null) {
                sisa = '<span class="text-danger" style="font-size:10px;">(Sisa : ' + values['qty_sisa'] + ')</span>'
            }
            html_body += '<span class="fa fa-shopping-basket fw-bold"></span> ' + values['qty'] + ' ' + sisa + '<br>'
            html_body += '<span class="fa fa-money fw-bold"></span> Rp. ' + number_format(values['extended_price'])
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#showDetailPRinPO').append(html_body)
        if (data_checked != "") {
            $.each(check, function(keys, values) {
                cardClickPR(values['keys'], values['id'])
            })
            status_more = 'more'
            showMoreFuction()
        }
    }
    $(document).on('click', '.checkbox-PR', function(e) {
        // cardClickPR($(this).data('id'), $(this).data('id_pr'))
        // console.log('hehe')
        var id = $(this).data('id')
        var stat = $('#checkPR' + id + ':checked').val()
        var id_pr = $('#checkPR' + id + '').data('id_pr')
        // console.log($('#checkPR' + id).is(':checked'))
        if (stat != undefined) {
            $('#checkPR' + id).attr('checked', true)
            $('#cardDetailPR' + id).addClass('bg-light')
            insertDataToBlankFormPO(id_pr)
        } else {
            // console.log('hehe')
            $('#checkPR' + id).removeAttr('checked', true)
            $('#cardDetailPR' + id).removeClass('bg-light')
            deleteDataToBlankFormPO(id_pr)
        }
        var id = $('.checkbox-PR:checked').map(function() {
            return $(this).val();
        }).get();
        data_checked = id
    })

    // function cardClickPR(id, id_pr) {
    //     var stat = $('#checkPR' + id + ':checked').val()
    //     // console.log($('#checkPR' + id).is(':checked'))
    //     if ($('#checkPR' + id).is(':checked')) {
    //         $('#checkPR' + id).removeAttr('checked', true)
    //         $('#cardDetailPR' + id).removeClass('bg-light')
    //         deleteDataToBlankFormPO(id_pr)
    //     } else {
    //         $('#checkPR' + id).attr('checked', true)
    //         $('#cardDetailPR' + id).addClass('bg-light')
    //         insertDataToBlankFormPO(id_pr)
    //     }
    //     var id = $('.checkbox-PR:checked').map(function() {
    //         return $(this).val();
    //     }).get();
    //     data_checked = id
    // }

    function insertDataToBlankFormPO(id) {
        var data = data_detail.filter(x => x.id === id)
        formRowPO(last_number, data[0])
        last_number++
    }

    function deleteDataToBlankFormPO(id) {
        last_number = 1
        var data = []
        var pr_id = $('.item_po').map(function() {
            return $(this).data('id_pr');
        }).get();
        var parent_id = $('.item_po').map(function() {
            return $(this).data('id_parent');
        }).get();
        var item_po = $('.item_po').map(function() {
            return $(this).val();
        }).get();
        var qty_po = $('.qty_po').map(function() {
            return $(this).val();
        }).get();
        var unit_po = $('.unit_po').map(function() {
            return $(this).val();
        }).get();
        var harga_po = $('.harga_po').map(function() {
            return $(this).val();
        }).get();
        var total_po = $('.total_po').map(function() {
            return $(this).val();
        }).get();
        var tanggal_po = $('.tanggal_po').map(function() {
            return $(this).val();
        }).get();
        $('#bodyPO').empty()
        for (let i = 0; i < item_po.length; i++) {
            if (pr_id[i] != id) {
                data.push({
                    'id': pr_id[i],
                    'item_id': item_po[i],
                    'qty': qty_po[i],
                    'unit_id': unit_po[i],
                    'unit_price': harga_po[i],
                    'extended_price': total_po[i],
                    'tanggal': tanggal_po[i],
                    'id_parent': parent_id[i]
                })
                formRowPO(last_number, data[0])
                last_number++
            }
            data = []
        }
    }

    function formRowPO(i, data) {
        // console.log(data)
        var html_body = ""
        html_body += '<tr>'

        html_body += '<td class="text-center align-middle">' + i + '</td>'

        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="item_po' + i + '" class="form-control form-control-sm select2-single item_po" data-id="' + i + '" data-id_pr="' + data['id'] + '" data-parent="' + data['id_parent'] + '">'
        if (data == "") {
            html_body += '<option value="" selected disabled></option>'
        }
        $.each(data_item, function(keys, values) {
            var select = ""
            if (data != "") {
                if (data['item_id'] == values['id']) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</td>'

        var qty = ""
        var satuan = ""
        var harga = ""
        var total = ""
        if (data != "") {
            if (data['qty_sisa'] == null) {
                qty = data['qty']
            } else {
                qty = data['qty_sisa']
            }
            if (data['unit_price'] == undefined) {
                harga = data['harga']
            } else {
                harga = data['unit_price']
            }
            if (data['unit_id'] == undefined) {
                satuan = data['satuan_id']
            } else {
                satuan = data['unit_id']
            }
            if (data['extended_price'] == undefined) {
                total = data['subtotal']
            } else {
                total = data['extended_price']
            }
        }
        html_body += '<td><input style="border:none" type="text" name="" id="qty_po' + i + '" class="form-control form-control-sm p-1 qty_po" value="' + qty + '" data-id="' + i + '"></td>'

        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="unit_po' + i + '" class="form-control form-control-sm select2-single unit_po" data-id="' + i + '">'
        html_body += '<option value="" selected disabled></option>'
        html_body += '</select>'
        // html_body += '<select style="border:none" name="" id="unit_po' + i + '" class="form-control form-control-sm select2-single unit_po" data-id="' + i + '">'
        // html_body += '<option value="" selected disabled></option>'
        // html_body += '<option value="addNew"><i class="fa fa-plus"></i></option>'
        // $.each(data_satuan, function(keys, values) {
        //     var select = ""
        //     if (data != "") {
        //         if (satuan == values['id']) {
        //             select = 'selected'
        //         }
        //     }
        //     html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        // })
        // html_body += '</select>'
        html_body += '</td>'

        html_body += '<td><input style="border:none" type="text" name="" id="harga_po' + i + '" class="form-control form-control-sm nominal p-1 harga_po" value="' + harga + '" data-id="' + i + '"></td>'

        html_body += '<td><input style="border:none" type="text" name="" id="total_po' + i + '" class="form-control form-control-sm nominal p-1 total_po" value="' + total + '"></td>'
        if (data['tanggal'] == undefined) {
            data['tanggal'] = ""
        }
        if (data == "") {
            html_body += '<td><input style="border:none" type="text" name="" id="tanggal_po' + i + '" class="form-control form-control-sm p-1 datepicker tanggal_po" value=""></td>'
        } else {
            if (data['tanggal'] == "" && data['tanggal_pengiriman'] != undefined) {
                data['tanggal'] = data['tanggal_pengiriman']
            }
            html_body += '<td><input style="border:none" type="text" name="" id="tanggal_po' + i + '" class="form-control form-control-sm p-1 datepicker tanggal_po" value="' + data['tanggal'] + '"></td>'

        }

        html_body += '</tr>'
        $('#bodyPO').append(html_body)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        $('#item_po' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_po' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('.nominal').number(true, 3);
        if (data != "") {
            changeItemPO(data['item_id'], i, satuan)
        }
        return true;
    }

    $(document).on('click', '.cardDetailPR,.checkbox-PR', function(e) {
        countTotalPO()
    })
    $(document).on('keyup', '#ppnPO', function(e) {
        countTotalPO()
    })
    $(document).on('change', '#checkPPN', function(e) {
        countTotalPO()
    })
    $(document).on('keyup', '.qty_po,.harga_po', function(e) {
        typingNominalPO($(this).data('id'))
    })

    function typingNominalPO(id) {
        var price = 0
        var unit = $('#harga_po' + id).val()
        if (unit == "") {
            unit = 0
        }
        var qty = $('#qty_po' + id).val()
        if (qty == "") {
            qty = 0
        }
        price = (parseFloat(unit) * parseFloat(qty))
        // console.log()
        $('#total_po' + id).val(price)
        countTotalPO()
    }

    function countTotalPO() {
        var total_po = $('.total_po').map(function() {
            return $(this).val();
        }).get();
        var ppn = $('#ppnPO').val()

        if (ppn == "") {
            ppn = 0
        }
        var total_all = 0
        for (let i = 0; i < total_po.length; i++) {
            total_all = parseFloat(total_po[i]) + parseFloat(total_all)
        }
        $('#subtotalPO').val(total_all)
        var persen = 0
        if ($('#checkPPN:checked').val() != 'on') {
            persen = (parseFloat(total_all) / 100 * 11)
        }
        $('#ppnPO').val(persen)
        total_all = parseFloat(total_all) + parseFloat(persen)
        $('#totalPO').val(total_all)
    }

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }
    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

    function searching() {
        var value = $('#search_nama').val().toLowerCase();
        var cards = $('.text_search').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search' + array_arranged[i]).removeClass('d-none')
        }
    }

    function orderPO(id) {
        var data = JSON.parse(data_po.filter(x => x.po_id === id.toString())[0]['data_detail'])
        var data_parent = data_po.filter(x => x.po_id === id.toString())[0]
        // console.log(data_parent)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Ordering</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6 mb-3">'
        html_body += '<b><h4>Summary</h4></b>'
        html_body += '<p class="text-dark-grey small">Dibawah ini merupakan list barang anda yang akan diberikan kepada supplier terkait</p>'
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 text-center align-self-center">'
        html_body += '<i class="fa fa-building-o fa-2x"></i>'
        html_body += '</div>'
        html_body += '<div class="col-8 align-self-center">'
        html_body += '<b>' + data_parent['supplier_name'] + '</b>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="card shadow-sm">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        $.each(data, function(keys, values) {
            html_body += '<div class="col-12 mb-2">'
            html_body += '<b>' + values['item_name'] + '</b><br>'
            html_body += '<small class="text-dark-grey">' + number_format(values['qty']) + 'x ' + values['satuan_name'] + '</small>'
            html_body += '<small class="text-dark-grey float-end">' + number_format(values['subtotal']) + '</small>'
            html_body += '</div>'
        })
        html_body += '<div class="col-12 mb-2">'
        html_body += '<b>PPN</b>'
        html_body += '<small class="text-dark-grey float-end">' + number_format(data_parent['ppn']) + '</small>'
        html_body += '</div>'
        html_body += '<hr>'
        html_body += '<div class="col-6 fw-bold mt-2"><b>Total Pembayaran</b></div>'
        html_body += '<div class="col-6 text-end fw-bold mt-2"><b>' + number_format(data_parent['grand_total']) + '</b></div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<b><h4>Order & Shipment</h4></b>'
        html_body += '<div id="statusOrdering">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
        console.log(data_parent)
        statusOrdering(data_parent['po_id'], data_parent['state_order'], data_parent['order_id'], data_parent['supplier_id'])
    }

    function statusOrdering(po_id, state, id_order = null, supplier_id = null) {
        // console.log(po_id, state, id_order)
        var html_body = ""
        if (state == null || state == '-') {
            html_body += '<p class="text-dark-grey small mb-3">Untuk melanjutkan proses pada Supplier, pilih tekan Tombol dibawah ini</p>'
            html_body += '<div class="row mb-2">'
            html_body += '<div class="col align-self-center">'
            html_body += '<p class="m-0 small">Tanggal Terakhir Pelunasan</p>'
            html_body += '</div>'
            html_body += '<div class="col">'
            html_body += '<p class="m-0 small"><input type="text" class="form-control form-control-sm p-1 datepicker" id="tanggalPelunasan"></p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '<button class="btn btn-success w-100 p-5" onclick="mulaiOrder(' + po_id + ')">Mulai Order ke Supplier</button>'
        } else if (state == 'PROCESS' || state == 'PENDING' || state == 'DONE') {
            html_body += '<p class="text-dark-grey small mb-3">Jika Supplier telah memberikan Surat Jalan, maka Anda Dapat Input Surat tersebut dibawah ini</p>'
            html_body += '<div class="mt-2">'
            html_body += '<b class="mb-2">Surat Jalan</b>'

            html_body += '<div id="dataSuratJalan" mb-2>'
            html_body += '</div>'
            html_body += '<div id="listSuratJalan" mb-2>'
            html_body += '</div>'
            html_body += '<button class="btn btn-primary btn-sm mt-2 float-end" id="btnTambahSJ" onclick="tambahSuratJalan(' + po_id + ',' + id_order + ',' + supplier_id + ')"><i class="fa fa-save me-2"></i>Save</button>'
            html_body += '<button class="btn btn-outline-primary btn-sm mt-2 float-end me-2" onclick="listSuratJalan(' + po_id + ')"><i class="fa fa-plus me-2"></i>New</button>'
            html_body += '</div>'
        }
        $('#statusOrdering').html(html_body)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        getSuratJalan(po_id)
    }

    function getSuratJalan(po_id) {
        $('#dataSuratJalan').empty()
        $('#listSuratJalan').empty()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataSuratJalan'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                po_id: po_id
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                viewSuratJalan(po_id, data)
            }
        })
    }

    function viewSuratJalan(po_id, data) {
        // console.log(data)
        var html_body = ""
        $.each(data, function(keys, values) {
            html_body += '<div class="card shadow-sm mb-2 bg-light-grey">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'

            html_body += '<div class="col-12 col-md-4 align-self-center">'
            html_body += '<span style="font-size:10px;">No. SJ</span><br>'
            html_body += '<b style="font-size:14px;">' + values['no_sj'] + '</b><br>'
            html_body += '<span style="font-size:10px;">Tanggal</span><br>'
            html_body += '<b style="font-size:14px;">' + formatDate(JSON.parse(values['data_order'])[0]['tanggal_sj']) + '</b>'
            html_body += '</div>'
            html_body += '<div class="col-12 col-md-7">'
            html_body += '<span style="font-size:10px;">Item </span><br>'
            html_body += '<hr class="mt-1 mb-1">'
            var array = []
            $.each(JSON.parse(values['data_order']), function(keys2, values2) {
                array.push(values2['detail_order_id'])
                html_body += '<span style="font-size:12px;">' + values2['item_name'] + ' <b>' + values2['jumlah_dikirim'] + 'x</b></span>'
                html_body += '<br>'
            })
            var stringArray = JSON.stringify(array)
            html_body += '</div>'
            html_body += '<div class="col-12 col-md-1 align-self-center">'
            html_body += '<i class="fa fa-trash" style="cursor:pointer;" onclick="hapusSuratJalan(' + "'" + values['no_sj'] + "'" + ',' + "'" + stringArray + "'" + ',' + po_id + ')"></i>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#dataSuratJalan').append(html_body)
        listSuratJalan(po_id)
    }

    function listSuratJalan(po_id) {
        var html_body = ""
        var data = JSON.parse(data_po.filter(x => x.po_id === po_id.toString())[0]['data_detail'])
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-3 align-self-center">'
        html_body += '<b class="mb-2">Tanggal</b>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-9">'
        html_body += '<input class="form-control form-control-sm tanggalSJ datepicker mb-2" data-id="' + last_number + '">'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-3 align-self-center">'
        html_body += '<b>Nomor</b>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-9">'
        html_body += '<input class="form-control form-control-sm nomorSJ" data-id="' + last_number + '">'
        html_body += '</div>'
        html_body += '<hr class="mt-3 mb-2 text-grey">'
        html_body += '<div class="col-12">'
        html_body += '<b class="mb-2">Pilih Item yang Akan Datang :</b>'
        // item
        // console.log(data)
        $.each(data, function(keys, values) {
            html_body += '<div class="card shadow-none mt-2 barangAkanDatang" style="cursor:pointer;" id="barangAkanDatang' + last_number + keys + '">'
            html_body += '<div class="card-body m-0 p-2">'
            html_body += '<div class="row">'
            html_body += '<div class="col align-self-center">'
            html_body += '<p class="m-0">' + values['item_name'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col align-self-center">'
            html_body += '<input class="form-control form-control-sm bawahaja inputJumlahyangDatang nominal" id="inputBarangAkanDatang' + last_number + keys + '" placeholder="Jumlah Item" data-id="' + last_number + '" data-key="' + keys + '" data-detail_id="' + values['id'] + '" data-item="' + values['item_id'] + '">'
            html_body += '</div>'
            html_body += '<i class="float-end fa fa-check text-grey" id="checkBarangAkanDatang' + last_number + keys + '"></i>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        // item
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#listSuratJalan').append(html_body)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        $('.nominal').number(true, 2);
        last_number++
    }
    $(document).on('keyup', '.inputJumlahyangDatang', function(e) {
        var id = $(this).data('id')
        var keys = $(this).data('key')
        textingJumlahDatang(id, keys)
    })

    function textingJumlahDatang(id, keys) {
        var input = parseInt($('#inputBarangAkanDatang' + id + keys).val())
        if (input > 0) {
            $('#barangAkanDatang' + id + keys).addClass('bg-light')
            $('#checkBarangAkanDatang' + id + keys).addClass('text-success')
            $('#checkBarangAkanDatang' + id + keys).removeClass('text-grey')
        } else {
            $('#barangAkanDatang' + id + keys).removeClass('bg-light')
            $('#checkBarangAkanDatang' + id + keys).removeClass('text-success')
            $('#checkBarangAkanDatang' + id + keys).addClass('text-grey')
        }
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

    function mulaiOrder(po_id) {
        var tgl = $('#tanggalPelunasan').val()
        var button = ''
        var url = '<?php echo api_url('Api_Warehouse/insertOrdering'); ?>'
        var type = 'POST'
        var data = {
            id_user: user_id,
            po_id: po_id,
            tanggal_expired: tgl
        }
        var image = 'truck.gif'
        var text_loading = 'Sedang Membuat Order Baru...'
        var state = 'MULAI'
        var content = {
            'button': button,
            'url': url,
            'type': type,
            'data': data,
            'image': image,
            'text_loading': text_loading,
            'po_id': po_id,
            'state': state,
        }
        // console.log(content)
        ajaxTemplate(content)
    }

    function tambahSuratJalan(po_id, order_id, supplier_id) {
        var tanggal_sj = $('.tanggalSJ').map(function() {
            return $(this).val();
        }).get();
        var no_sj = $('.nomorSJ').map(function() {
            return $(this).val();
        }).get();
        var number_sj = $('.nomorSJ').map(function() {
            return $(this).data('id');
        }).get();
        var input_jumlah = $('.inputJumlahyangDatang').map(function() {
            return $(this).val();
        }).get();
        var number_input_jumlah = $('.inputJumlahyangDatang').map(function() {
            return $(this).data('id');
        }).get();
        var detail_input_jumlah = $('.inputJumlahyangDatang').map(function() {
            return $(this).data('detail_id');
        }).get();
        var item_id = $('.inputJumlahyangDatang').map(function() {
            return $(this).data('item');
        }).get();

        var detail_po_id = []
        var jumlah_arrive = []
        var item_arrivce = []
        for (let i = 0; i < no_sj.length; i++) {
            var array_id = []
            var array_jumlah = []
            var array_item = []
            for (let j = 0; j < input_jumlah.length; j++) {
                if (input_jumlah[j] != "" && number_input_jumlah[j] == number_sj[i]) {
                    array_id.push(detail_input_jumlah[j])
                    array_jumlah.push(input_jumlah[j])
                    array_item.push(item_id[j])
                }
            }
            detail_po_id.push(array_id)
            jumlah_arrive.push(array_jumlah)
            item_arrivce.push(array_item)
        }
        // console.log(item_arrivce)
        //-----------------------//
        var button = '#btnTambahSJ'
        var url = '<?php echo api_url('Api_Warehouse/insertSj'); ?>'
        var type = 'POST'
        var data = {
            user_id: user_id,
            po_id: po_id,
            order_id: order_id,
            no_sj: no_sj,
            tanggal_sj: tanggal_sj,
            detail_po_id: detail_po_id,
            jumlah_arrive: jumlah_arrive,
            item_id: item_arrivce,
            supplier_id: supplier_id,
        }
        var image = 'message.gif'
        var id_order = order_id
        var text_loading = 'Sedang Membuat Surat Jalan...'
        var state = 'SURATJALAN'
        var content = {
            'button': button,
            'url': url,
            'type': type,
            'data': data,
            'image': image,
            'text_loading': text_loading,
            'po_id': po_id,
            'state': state,
            'id_order': id_order,
        }
        ajaxTemplate(content)
    }

    function ajaxTemplate(content) {
        var preloaderTimeout
        $.ajax({
            url: content['url'],
            type: content['type'],
            data: content['data'],
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
                $(content['button']).prop("disabled", false);
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading(content['image'], content['text_loading']), 500)
                $(content['button']).prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Berhasil',
                        icon: 'success',
                    }).then((responses) => {
                        $('#modal2').modal('hide')
                        ajaxPO()
                        if (content['state'] == "MULAI") {
                            statusOrdering(content['po_id'], 'PROCESS', response['id_order'])
                        } else if (content['state'] == "SURATJALAN") {
                            statusOrdering(content['po_id'], 'PROCESS', content['id_order'])
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(content['button']).prop("disabled", false);
                }
            }
        });
    }

    function hapusSuratJalan(no_sj, id, po_id) {
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus ' + no_sj + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_url('Api_Warehouse/deleteSuratJalan'); ?>',
                    type: 'POST',
                    data: {
                        order_detail_id: JSON.parse(id)
                    },
                    success: function(response) {
                        Swal.fire(
                            'Terhapus!',
                            'Surat Jalan ' + no_sj + ' Terhapus',
                            'success'
                        )
                        getSuratJalan(po_id)
                    }
                });
            }
        })
    }

    function filterStatus() {
        // console.log(itemYangSisa)
        var item = $('#selectItemYangBelumTuntas').val()
        var status = $('#selectStatus').val()
        var date = $('#selectDate').val()
        var card_key = $('.card-PR').map(function() {
            return $(this).data('key');
        }).get();
        var card_status = $('.card-PR').map(function() {
            return $(this).data('status');
        }).get();
        var card_date = $('.card-PR').map(function() {
            return $(this).data('date');
        }).get();
        var card_id = $('.card-PR').map(function() {
            return $(this).data('id');
        }).get();
        // console.log(item)
        // console.log(card_id)
        var array = []
        for (let i = 0; i < card_key.length; i++) {
            $('#card_search' + card_key[i]).addClass('d-none')
            if (status == 'all' && item == 'all') {
                if (date != "") {
                    if (formatDate(card_date[i]) == formatDate(date)) {
                        array.push(card_key[i])
                    }
                } else {
                    array.push(card_key[i])
                }
            } else {
                if (date != "") {
                    if (card_status[i] == status && formatDate(card_date[i]) == formatDate(date)) {
                        array.push(card_key[i])
                    }
                } else {
                    if (card_status[i] == status) {
                        array.push(card_key[i])
                    }
                }
            }
            // console.log(sisa)
            if (item != 'all') {
                var sisa = itemYangSisa.filter((value, key) => {
                    if (value.item === parseInt(item)) return true
                })
                $.each(sisa, function(keys, values) {
                    if (card_id[i] == values['pr_id']) {
                        array.push(card_key[i])
                    }
                })
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search' + array_arranged[i]).removeClass('d-none')
        }
    }

    function penerimaanBarangPR(id) {
        let data = data_pr.filter((value, key) => {
            if (value.id === id.toString()) return true
        })[0];
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Penerimaan Barang</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-12 mb-3">'
        html_body += '<div class="input-group mb-3">'
        html_body += '<input type="text" class="form-control basicAutoComplete" placeholder="Cari No. Surat Jalan" aria-label="No. Surat Jalan" aria-describedby="button-addon2" id="inputSearch" autocomplete="off">'
        html_body += '<button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="cariSuratJalan(' + id + ')"><i class="fa fa-search"></i></button>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-12 mb-3" id="tampilSuratJalan">'
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 align-self-center text-center small">'
        html_body += '<p class="mt-5 mb-5"><i>Cari Surat Jalan Terlebih Dahulu untuk Mengisi Form Penerimaan Barang, atau bisa langsung membuat Penerimaan Baru dengan tombol dibawah ini</i></p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }
    var data_sj = ""

    function cariSuratJalan(id) {
        data_sj = ""
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_sj: $('#inputSearch').val(),
                pr_id: id,
            },
            error: function(xhr) {
                $('#modal2').modal('hide')
                tidakAdaSuratJalan(id)
            },
            beforeSend: function() {
                loading('truck.gif', 'Sedang Mencari Data')
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil',
                    icon: 'success',
                }).then((responses) => {
                    if (response['data'] == undefined) {
                        $('#modal2').modal('hide')
                        tidakAdaSuratJalan(id)
                    } else {
                        $('#modal2').modal('hide')
                        data_sj = response['data'][0]
                        formPencarianSJ(response['data'][0])
                    }
                })
            }
        })
    }

    function tidakAdaSuratJalan(id) {
        var html = ""
        html += '<div class="card shadow-none mb-2 h-100">'
        html += '<div class="card-body">'
        html += '<div class="row justify-content-center">'
        html += '<div class="col-8 align-self-center text-center">'
        html += '<img src="<?= base_url() ?>assets/image/logo/page-not-found.png" class="w-50 mx-auto d-block mb-3">'
        html += '<p style="font-size:11px;">Surat Jalan Tidak Ditemukan</p>'
        html += '<p style="font-size:11px;" class="mb-5">Konfirmasi ke Purchasing untuk pembuatan Surat Jalan Baru</p>'
        // html += '<button class="btn btn-sm btn-primary" onclick="buatPenerimaanBaru(' + id + ')">Buat Penerimaan Baru</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#tampilSuratJalan').html(html)
    }

    function buatPenerimaanBaru(id) {
        let data = data_pr.filter((value, key) => {
            if (value.id === id.toString()) return true
        })[0];
        // console.log(data)
        var html_body = ""
        // html_body += '<div class="card shadow-sm mb-2">'
        // html_body += '<div class="card-body">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-12 align-self-center">'
        html_body += '<b>No. Surat Jalan</b>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-12">'
        html_body += '<input class="form-control form-control-sm nomorSJ mt-2" placeholder="">'
        html_body += '</div>'
        html_body += '<div class="col-12 mb-1 mt-3">'
        html_body += '<b>List Barang yang Diterima :</b>'
        // item
        $.each(JSON.parse(data['data_detail']), function(keys, values) {
            html_body += '<div class="card shadow-none mt-2 barangAkanDatang" style="cursor:pointer;" id="barangAkanDatang' + keys + '">'
            html_body += '<div class="card-body m-0 p-2">'
            html_body += '<div class="row">'
            html_body += '<div class="col-6 align-self-center">'
            html_body += '<p class="m-0"><b>' + values['item_name'] + '</b></p>'
            html_body += '<p class="m-0" style="font-size:10px;">' + values['qty'] + ' ' + values['unit_name'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center">'
            html_body += '<input class="form-control form-control-sm inputJumlahDiterima nominal" id="inputBarangAkanDatang' + keys + '" placeholder="0" data-key="' + keys + '" data-detail_id="' + values['id'] + '">'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center">'
            html_body += '<p class="m-0 small">' + values['unit_name'] + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        // item
        html_body += '</div>'
        html_body += '<div class="col-12 float-end mt-3">'
        html_body += '<div class="form-check">'
        html_body += '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">'
        html_body += '<label class="form-check-label" for="flexCheckDefault">'
        html_body += 'Langsung menutup PR ' + data['no_pr']
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<button class="btn btn-sm btn-success w-100">Terima Barang Tersebut</button>'
        html_body += '</div>'
        html_body += '</div>'
        // html_body += '</div>'
        // html_body += '</div>'
        $('#tampilSuratJalan').html(html_body)
        $('.nominal').number(true);
    }

    function formPencarianSJ(data) {
        let obj = JSON.parse(data['data_detail']).filter((value, key) => {
            if (value.status_order === 'DONE' || value.status_order === 'PENDING') return true
        }).length;
        // console.log(data)
        var html = ""
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<div id="profileImage"><i class="fa fa-truck"></i></div>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 small" style="font-size:11px;">Surat Jalan <b class="m-0">#' + data['no_sj'] + '</b></p>'
        html += '<p class="m-0 small" style="font-size:11px;">Supplier <b class="m-0">' + data['supplier_name'] + '</b></p>'
        html += '<p class="m-0 small" style="font-size:11px;">Item <b class="m-0">NTM</b></p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="d-flex bd-highlight mb-3">'
        html += '<p class="m-0 bd-highlight me-auto" style="font-size: 11px;"><b>Detail Item</b></p>'
        if (data['category'] == 'NTM') {
            html += '<span class="m-0 bd-highlight fa fa-print" style="cursor:pointer;" onclick="cetakPenerimaan(' + "'" + data['supplier_name'] + "'," + "'" + data['no_sj'] + "'" + ')"></span>'
        }
        html += '</div>'
        $.each(JSON.parse(data['data_detail']), function(keys, values) {
            html += '<div class="row">'
            html += '<div class="col-2 p-2 text-center">'
            html += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-50 mx-auto d-block">'
            html += '</div>'
            html += '<div class="col-5 align-self-center ps-0">'
            html += '<p class="m-0 small" style="font-size:12px ;"><b>' + values['item_name'] + '</b></p>'
            html += '<p class="m-0 small float-start" style="font-size:10px ;">' + values['jumlah'] + ' <span>' + values['satuan_name'] + '</span></p>'
            html += '</div>'
            html += '<div class="col-3 align-self-center ps-0">'
            if (obj == 0) {
                html += '<input type="text" name="" class="form-control form-control-sm p-1 nominal jumlahMasuk" id="jumlahMasuk' + keys + '" data-key="' + keys + '" data-jumlah="' + values['jumlah'] + '" data-item="' + values['item_id'] + '" data-satuan="' + values['satuan_id'] + '" data-order="' + values['id_detail_order'] + '">'
            }
            html += '</div>'
            html += '<div class="col-2 align-self-center">'
            html += '<p class="m-0 small text-start text-success d-none" id="checkItem' + keys + '" style="font-size:12px ;"><i class="fa fa-check fa-1x"></i></p>'
            html += '<p class="m-0 small text-start text-warning d-none" id="warningItem' + keys + '" style="font-size:12px ;"><i class="fa fa-exclamation fa-1x"></i></p>'
            html += '</div>'
            html += '</div>'
        })
        if (obj == 0 && data['category'] == 'NTM') {
            html += '<p class="m-0 mb-3 mt-3" style="font-size: 11px;"><b>User yang Melakukan Pengecekan</b></p>'
            html += '<select name="" id="user_checking" class="form-select form-select-sm" required="required">'
            html += '<option value="" disabled selected>Pilih User</option>'
            $.each(data_user, function(key, value) {
                html += '<option value="' + value['id'] + '">' + value['name'] + '</option>'
            })
            html += '</select>'
        }
        html += '</div>'
        html += '</div>'
        html += '<div class="mt-2">'
        if (obj == 0) {
            html += '<button class="btn btn-success w-100" id="btnChecked" onclick="checkDataArrived(' + data['pr_id'] + ',' + data['po_id'] + ',' + data['pengiriman_id'] + ',' + "'" + data['no_sj'] + "'" + ')">Selesaikan Pengecekan</button>'
        } else {
            html += '<button class="btn btn-outline-success w-100" disabled>Anda telah melakukan pengecekan</button>'
        }
        html += '</div>'
        $('#tampilSuratJalan').html(html)
        $('.nominal').number(true);
    }
    var any_anomali = 0
    $(document).on('keyup', '.jumlahMasuk', function(e) {
        var key = $(this).data('key')
        var jumlah = $(this).data('jumlah')
        if (parseInt(jumlah) == parseInt($('#jumlahMasuk' + key).val())) {
            any_anomali = 0
            $('#checkItem' + key).removeClass('d-none')
            $('#warningItem' + key).addClass('d-none')
        } else {
            any_anomali = 1
            $('#checkItem' + key).addClass('d-none')
            $('#warningItem' + key).removeClass('d-none')
        }
    })

    function checkDataArrived(pr_id, po_id, pengiriman_id, no_sj) {
        var jumlah = $('.jumlahMasuk').map(function() {
            return $(this).val();
        }).get();
        var item = $('.jumlahMasuk').map(function() {
            return $(this).data('item');
        }).get();
        var satuan = $('.jumlahMasuk').map(function() {
            return $(this).data('satuan');
        }).get();
        var order = $('.jumlahMasuk').map(function() {
            return $(this).data('order');
        }).get();
        var detail = []
        for (let i = 0; i < jumlah.length; i++) {
            detail.push({
                'id_detail_order': order[i],
                'jumlah_barang': jumlah[i],
                'id_satuan': satuan[i],
                'id_item': item[i],
            })
        }
        var id_user_checking = $('#user_checking').val()
        var type = 'POST'
        var data = {
            id_users: user_id,
            pengiriman_id: pengiriman_id,
            no_sj: no_sj,
            po_id: po_id,
            id_user_checking: id_user_checking,
            detail: detail,
            pr_id: pr_id,
        }
        var button = '#btnChecked'
        var url = '<?php echo api_url('Api_Warehouse/insertPenerimaan'); ?>'
        if (any_anomali == 1) {
            Swal.fire({
                text: 'Terdapat jumlah yang tidak sesuai dengan Surat Jalan, apakah anda ingin langsung menerima?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Terima Saja'
            }).then((result) => {
                if (result.isConfirmed) {
                    kelolaData(data, type, url, button)
                }
            })
        } else {
            kelolaData(data, type, url, button)
        }
    }

    // function pembatalanPR(pr_id) {
    //     var data = data_pr.filter((values, keys) => {
    //         if (values.id === pr_id.toString()) return true
    //     })[0]
    //     console.log(data)
    //     $('#modal').modal('show')
    //     $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered');
    //     var html_header = '';
    //     html_header += '<h5 class="modal-title">Cancel Order</h5>';
    //     html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    //     $('#modalHeader').html(html_header);

    //     var html_body = '';
    //     html_body += '<div class="container small">'
    //     html_body += '<div class="row">'
    //     html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
    //     html_body += '<div class="card shadow-sm m-0 w-100">'
    //     html_body += '<div class="card-body">'
    //     html_body += '<div class="row align-self-center">'
    //     html_body += '<div class="col-12 text-center">'
    //     html_body += '<i class="small">Apakah anda yakin ingin membatalkan PR ' + data['no_pr'] + '</span></i>'
    //     html_body += '<button class="mt-5 btn btn-danger btn-sm" id="btnCancelPR" onclick="formCancelPR(' + pr_id + ')">Batalkan PR</button>'
    //     html_body += '</div>'
    //     html_body += '</div>'
    //     html_body += '</div>'
    //     html_body += '</div>'
    //     html_body += '</div>'
    //     html_body += '</div>'
    //     html_body += '</div>'
    //     $('#modalBody').html(html_body);


    //     var html_footer = '';
    //     html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup Halaman</button>'
    //     $('#modalFooter').html(html_footer);
    // }

    function formCancelPR(pr_id) {
        var data = data_pr.filter((values, keys) => {
            if (values.id === pr_id.toString()) return true
        })[0]
        Swal.fire({
            text: 'Apakah anda yakin ingin membatalkan PR ' + data['no_pr'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                doCancelPR(pr_id)
            }
        })
    }

    function doCancelPR(pr_id) {
        var type = 'POST'
        var data = {
            pr_id: pr_id,
            id_user: user_id,
        }
        var button = '#btnCancelPR'
        var url = '<?php echo api_url('Api_Warehouse/cancelPr'); ?>'
        kelolaData(data, type, url, button)
    }

    function formClosingPR(pr_id) {
        var data = data_pr.filter((values, keys) => {
            if (values.id === pr_id.toString()) return true
        })[0]
        Swal.fire({
            text: 'Apakah anda yakin ingin Closing PR ' + data['no_pr'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                doClosingPR(pr_id)
            }
        })
    }

    function doClosingPR(pr_id) {
        var type = 'POST'
        var data = {
            pr_id: pr_id,
        }
        var button = '#btnClosingPR'
        var url = '<?php echo api_url('Api_Warehouse/completePr'); ?>'
        kelolaData(data, type, url, button)
    }

    var date_start_filter = ""
    var date_end_filter = ""
    var supplier_id_filter = ""
    var data_report = ""

    function formReport() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Report PR PO</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-4">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<b class="small">Tanggal Mulai</b>'
        html_body += '<input class="form-control datepicker" type="text" id="dateStart" placeholder="Tanggal Mulai" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + date_start_filter + '">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<b class="small">Tanggal Akhir</b>'
        html_body += '<input class="form-control datepicker" type="text" id="dateEnd" placeholder="Tanggal Akhir" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + date_end_filter + '">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<b class="small">Supplier</b>'
        html_body += '<select class="form-select form-select-lg w-100 supplierStok" id="supplierStok" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        html_body += '<option value="" selected>All Supplier</option>'
        $.each(data_supplier, function(keys, values) {
            var select = ""
            if (values['id'] == supplier_id_filter) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-12 text-end">'
        html_body += '<button class="btn btn-sm btn-primary mt-2" id="btnFilter" onclick="searchLaporan()">Cari</button>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8">'
        html_body += '<b style="font-size:12px;">Hasil</b>'
        html_body += '<div class="table-responsive">'
        html_body += '<table class="table table-bordered table-hover table-sm small" style="width: 100%;white-space:nowrap;">'
        html_body += '<thead class="align-self-center">'
        html_body += '<tr class="align-self-center">'
        html_body += '<th class="text-center p-3">No</th>'
        html_body += '<th class="text-center p-3">Tanggal PO</th>'
        html_body += '<th class="text-center p-3">Kode NTM</th>'
        html_body += '<th class="text-center p-3">No. PR</th>'
        html_body += '<th class="text-center p-3">No. PO</th>'
        html_body += '<th class="text-center p-3">Nama Supplier</th>'
        html_body += '<th class="text-center p-3">Nama Bahan</th>'
        html_body += '<th class="text-center p-3">QTY</th>'
        html_body += '<th class="text-center p-3">Satuan</th>'
        html_body += '<th class="text-center p-3">Harga</th>'
        html_body += '<th class="text-center p-3">DPP</th>'
        html_body += '<th class="text-center p-3">PPN</th>'
        html_body += '<th class="text-center p-3">TOTAL</th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody id="contentTable">'
        html_body += '<tr class="align-self-center">'
        html_body += '<td colspan="13" class="text-center pt-5 pb-5 align-self-center"><i>Anda Belum Melakukan Pencarian</i></td>'
        html_body += '</tr>'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
        })


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup Halaman</button>'
        $('#modalFooter').html(html_footer);
        if (data_report != "") {
            searchLaporanForm()
        }
    }

    function searchLaporan() {
        date_start_filter = $('#dateStart').val()
        date_end_filter = $('#dateEnd').val()
        supplier_id_filter = $('#supplierStok').val()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/reportPrPo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                supplier_id: supplier_id_filter,
                date_start: date_start_filter,
                date_end: date_end_filter,
            },
            error: function(xhr) {
                $('#btnFilter').removeAttr('disabled', true)
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {
                $('#btnFilter').attr('disabled', true)
            },
            success: function(response) {
                $('#contentTable').empty()
                $('#btnFilter').removeAttr('disabled', true)
                data_report = response['data']
                searchLaporanForm()

            }
        })
    }

    function searchLaporanForm() {
        var html_body = ""
        // console.log(data_report.length)
        if (data_report != undefined) {
            $.each(data_report, function(key, value) {
                if (value['harga'] == null) {
                    value['harga'] = 0
                }
                if (value['dpp'] == null) {
                    value['dpp'] = 0
                }
                if (value['ppn'] == null) {
                    value['ppn'] = 0
                }
                if (value['total'] == null) {
                    value['total'] = 0
                }
                html_body += '<tr>'
                html_body += '<td>' + (key + 1) + '</td>'
                html_body += '<td>' + value['date'] + '</td>'
                html_body += '<td>' + value['item_code'] + '</td>'
                html_body += '<td>' + value['no_pr'] + '</td>'
                html_body += '<td>' + value['no_po'] + '</td>'
                html_body += '<td>' + value['supplier_name'] + '</td>'
                html_body += '<td>' + value['item_concat'] + '</td>'
                html_body += '<td class="text-end">' + value['jumlah'] + '</td>'
                html_body += '<td>' + value['item_satuan'] + '</td>'
                html_body += '<td class="text-end">' + number_format(value['harga']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['dpp']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['ppn']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['total']) + '</td>'
                html_body += '</tr>'
            })
        } else {
            html_body += '<tr class="align-self-center">'
            html_body += '<td colspan="13" class="text-center pt-5 pb-5 align-self-center"><i>Data Tidak Tersedia</i></td>'
            html_body += '</tr>'
        }
        $('#contentTable').html(html_body)
    }

    function openDetailPR(pr_id, po_id) {
        var url = '<?= base_url() ?>order/infoPR/' + pr_id + '/' + po_id
        window.open(url, '_blank')
    }

    function openDetailSuratJalan(suratJalan, po_id) {
        var url = '<?= base_url() ?>order/infoSuratJalan/' + encodeURIComponent(suratJalan) + '/' + po_id
        window.open(url, '_blank')
    }
</script>