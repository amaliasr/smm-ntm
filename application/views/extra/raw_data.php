<link href="<?= base_url(); ?>assets/smm/report.css" rel="stylesheet" type="text/css">
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

    #profileImage {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 39px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .dots-lead {
        display: flex;
    }

    .dots-lead::after {
        background-image: radial-gradient(circle, currentcolor 1px, transparent 1.5px);
        background-position: bottom;
        background-size: 1ex 4.5px;
        background-repeat: space no-repeat;
        content: "";
        flex-grow: 1;
        height: 1em;
        order: 2;
    }

    .gambar-miring {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
        opacity: 0.3;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .bg-super-grey {
        background-color: #F7F7F7;
    }

    .is-select-picker {
        background-color: white !important;
        border: 1px solid #c5ccd6 !important;
        text-align: left !important;
    }

    .formFilter {
        border-radius: 20px;
        width: 200px;
        padding-left: 30px;
        padding: 10px;
        padding-right: 45px;
    }

    .is-select-picker {
        border-radius: 20px !important;
        width: 200px !important;
        padding-left: 30px !important;
        padding: 10px !important;
        padding-right: 45px !important;
    }

    .border-radius-20 {
        border-radius: 20px;
    }

    #tableDetail_length,
    #tableDetail_info {
        display: none;
    }

    .dataTables_filter {
        margin-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_paginate {
        float: none;
        text-align: center;
    }

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px !important;
        border: 1px solid #dce0e6 !important;
    }

    .bg-custom {
        background-image: linear-gradient(132.6deg, rgba(71, 139, 214, 1) 23.3%, rgba(37, 216, 211, 1) 84.7%);
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-custom">
        <div class="container-xl">
            <div class="page-header-content pt-1">
                <div class="row align-items-center justify-content-between mt-4">
                    <div class="col-4">
                        <h1 class="text-white fw-bolder m-0" style="font-weight: 700 !important;font-size:40px;">RAW DATA</h1>
                        <p class="m-0 small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                    <div class="col-4 align-self-center">
                        <lottie-player style="margin:auto;width: 100%; height: 100%;" src="<?= base_url() ?>assets/json/database.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center mt-4 mb-2">
            <div class="col-12 col-md-12">
                <div class="card p-4 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 align-self-center">
                                <p class="m-0 fw-bolder">Mutation</p>
                                <p class="m-0 fw-bolder">Stock</p>
                            </div>
                            <div class="col-9">
                                <div class="row justify-content-center">
                                    <div class="col-auto pe-0">
                                        <p class="fw-bolder small-text m-0">Items</p>
                                        <select class="selectpicker w-100" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" id="selectItems" title="Pilih Items" onchange="arrangeVariable()" data-width="fit" data-dropup-auto="false">
                                        </select>
                                    </div>
                                    <div class="col-auto pe-0">
                                        <p class="fw-bolder small-text m-0">Tanggal Awal</p>
                                        <input class="form-select form-select-sm datepicker formFilter" type="text" id="dateStart" placeholder="Tanggal Mulai" autocomplete="off">
                                        </select>
                                    </div>
                                    <div class="col-auto pe-0">
                                        <p class="fw-bolder small-text m-0">Tanggal Akhir</p>
                                        <input class="form-select form-select-sm datepicker formFilter" type="text" id="dateEnd" placeholder="Tanggal Akhir" autocomplete="off">
                                        </select>
                                    </div>
                                    <div class="col-auto d-flex align-items-end">
                                        <button type="button" class="btn btn-success btn-sm btnSimpan" style="border-radius: 20px;padding: 10px;" onclick="cetakMutationStock()">Export</button>
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

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function groupDataByProperties(data, propertyNames) {
        // Menggunakan Set untuk menyimpan nilai unik dari kombinasi properti
        var uniqueValuesSet = new Set();

        // Loop melalui data untuk mendapatkan nilai unik dari kombinasi properti
        data.forEach(function(item) {

            // Membuat array yang berisi nilai properti yang diinginkan
            var propertyValues = propertyNames.map(function(propertyName) {
                if (item[propertyName].name) {
                    return item[propertyName].name
                } else {
                    return item[propertyName];
                }
            });

            // Menambahkan array nilai properti ke dalam Set
            uniqueValuesSet.add(JSON.stringify(propertyValues));
        });

        // Mengonversi Set menjadi array dan mengembalikan hasilnya
        var uniqueValuesArray = Array.from(uniqueValuesSet).map(function(stringifiedArray) {
            return JSON.parse(stringifiedArray);
        });

        return uniqueValuesArray;
    }

    function findQty(data, criteria) {
        for (let i = 0; i < data.length; i++) {
            let match = true;

            for (let key in criteria) {
                // Mengatasi properti dengan hierarki
                const keys = key.split('.');
                let currentValue = data[i];

                for (let j = 0; j < keys.length; j++) {
                    if (currentValue.hasOwnProperty(keys[j])) {
                        currentValue = currentValue[keys[j]];
                    } else {
                        match = false;
                        break;
                    }
                }

                if (!match) {
                    break;
                }
                if (currentValue != criteria[key]) {
                    match = false;
                    break;
                }
            }
            if (match) {
                if (data[i].qty_waste == null) {
                    data[i].qty_waste = 0
                }
                if (data[i].qty_goods == null) {
                    data[i].qty_goods = 0
                }
                if (data[i].qty_reject == null) {
                    data[i].qty_reject = 0
                }
                return {
                    qty_goods: number_format(data[i].qty_goods),
                    qty_reject: number_format(data[i].qty_reject),
                    qty_waste: number_format(data[i].qty_waste),
                }
            }
        }
        return null;
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_item
    var data_report
    var date_start = currentDate()
    var date_end = currentDate()
    var itemId
    var rowCode
    $(document).ready(function() {
        $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian'))
        $('select').selectpicker();
        loadData()
    })

    function loadData() {
        $('#dateStart').val(date_start)
        $('#dateEnd').val(date_end)
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
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_item = response['data']['item'];
                setDaterange()
                formItems()
            }
        })
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateStart'),
            singleMode: true,
            firstDay: 0,
            format: "DD MMMM YYYY",
            allowRepick: true,
            setup: (picker) => {
                picker.on('selected', (date1) => {
                    date_start = formatDate(date1['dateInstance'])
                });
            },
        })
        new Litepicker({
            element: document.getElementById('dateEnd'),
            singleMode: true,
            firstDay: 0,
            format: "DD MMMM YYYY",
            allowRepick: true,
            setup: (picker) => {
                picker.on('selected', (date1) => {
                    date_end = formatDate(date1['dateInstance'])
                });
            },
        })
    }

    function formItems() {
        var html = ''
        data_item.forEach(e => {
            html += '<option value="' + e.id + '">' + e.item_name + '</option>'
        });
        $('#selectItems').html(html)
        $('#selectItems').selectpicker('refresh');
        $('#selectItems').selectpicker({

        });
        arrangeVariable()
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function arrangeVariable() {
        itemId = arrayToString($('#selectItems').map(function() {
            return $(this).val();
        }).get())
    }

    function cetakMutationStock() {
        var url = "<?= base_url() ?>extra/exportRawDataMutationStock"
        var params = "*$" + itemId + "*$" + date_start + "*$" + date_end;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>