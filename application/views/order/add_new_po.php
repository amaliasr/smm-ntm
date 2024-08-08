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

    .card-hoper:hover {
        background-color: #F7F7F7;
    }

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }


    .actions-btn {
        background-color: transparent;
        border: 1px solid #c5ccd6;
        border-radius: 20px !important;
    }

    .actions-btn:hover {
        background-color: #c5ccd6;
        color: white;
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

    .super-small-text {
        font-size: 9px;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>

<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow-sm">
                    <div class="card-body py-5">
                        <div class="row justify-content-center">
                            <div class="col-12 pb-4 text-center">
                                <p class="m-0 fw-bolder">Create New Purchase Order (PO)</p>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="card shadow-none pointer" style="background-color:transparent;border: 1px dashed #cfcfcf;">
                                    <div class="card-body p-5 text-center d-flex align-items-center justify-content-center">
                                        <p class="m-0 super-small-text"><i class="fa fa-plus me-2"></i>Tambah PO</p>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function notFoundReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function empty(location, text, height = null) {
        if (!height) {
            height = '100%'
        }
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
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
    var po_id = '<?= $id ?>'
    var pr_id = '<?= $idPr ?>'
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_level_id = '<?= $this->session->userdata('job_level_id') ?>'
    var initialDivision = "<?= $this->session->userdata('alias') ?>"
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var no_po = ""
    var id_po_detail = []
    var date_start = currentDate()
    var date_end = currentDate()
    var data_pr = ''
    var data_pr_approval = ''
    var data_po = ''
    var data_po_approval = ''
    var data_checked = ""
    $(document).ready(function() {
        loadUser()
    })

    function loadUser() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
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
                data_user = response['data']
                getData()
            }
        })
    }

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                data_supplier = response['data']['supplier'];
                ajaxPR()
            }
        })
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
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_pr = response['data']
                data_pr_approval = response['data_approval']
                ajaxPO()
            }
        })
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
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_po = response['data']
                data_po_approval = response['data_approval']
                numberinPO()
            }
        })
    }

    function numberinPO() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getCountDocPO'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                showOverlay('hide')
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
                if (po_id) {
                    var dataPOFilter = data_po.find((value, key) => {
                        if (value.po_id == po_id) return true
                    });
                    formPO(po_id, dataPOFilter, 'yes')
                } else {
                    formPO(pr_id)
                }
            }
        })
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
    var status_more = "less"
    var data_detail = ""
    var keys_select = 0
    var id_po_detail = []
    var last_number = 1

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

    function simpan(status) {

        var type = 'POST'
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
        // console.log(data)
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
                        if (button == '#btnSimpanPO') {
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
                            ajaxPR()
                        } else {
                            button_prpo = 'PO'
                            $('#modal').modal('hide')
                            ajaxPR()
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

    function cardClickPR(id, id_pr) {
        var stat = $('#checkPR' + id + ':checked').val()
        // console.log($('#checkPR' + id).is(':checked'))
        if ($('#checkPR' + id).is(':checked')) {
            $('#checkPR' + id).removeAttr('checked', true)
            $('#cardDetailPR' + id).removeClass('bg-light')
            deleteDataToBlankFormPO(id_pr)
        } else {
            $('#checkPR' + id).attr('checked', true)
            $('#cardDetailPR' + id).addClass('bg-light')
            insertDataToBlankFormPO(id_pr)
        }
        var id = $('.checkbox-PR:checked').map(function() {
            return $(this).val();
        }).get();
        data_checked = id
    }
</script>