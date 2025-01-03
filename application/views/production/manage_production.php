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

    .vertical-line {
        border-left: 3px dotted #b2b0b0;
        height: 15px;
        margin: 0 auto;
    }

    .v-zone {
        /* display: flex; */
        padding-left: 20px;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .start-10 {
        left: 10% !important;
    }

    .bg-purples {}
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


<main class="bg-purples">
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-between mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">PRODUCTION WORKSPACE</h1>
                <p class="m-0 small">SKM Production Workspace</p>
            </div>
            <div class="col-auto align-self-center">
                <div class="row">
                    <div class="col-auto">
                        <input class="form-select form-select-sm datepicker formFilter" type="text" id="dateRange" placeholder="Tanggal Mulai" autocomplete="off">
                    </div>
                    <div class="col-auto p-0 d-flex align-items-end">
                        <button type="button" class="btn btn-primary btn-sm btnSimpan" style="border-radius: 20px;padding: 10px;" onclick="simpanData()">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- masih terbuka -->
            <div class="col-12 mt-4 mb-2">
                <div class="card shadow-sm border-radius-20 p-3 position-relative">
                    <span class="position-absolute top-0 start-10 translate-middle badge bg-primary">SEDANG BERJALAN
                    </span>
                    <div class="card-body">
                        <div class="table-responsible" id="dataTable">
                            <div class="row mb-2">
                                <div class="col-4">
                                    <div class="row p-3 pb-0 pt-0">
                                        <div class="col-4 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Date</p>
                                        </div>
                                        <div class="col-4 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Shift</p>
                                        </div>
                                        <div class="col-4 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Machine</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row p-3 pb-0 pt-0">
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Product</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Time</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Progress</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Worker</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Status</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Action</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-4 pe-1">
                                            <div class="card shadow-none border-2 mb-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-4 align-self-center text-center">
                                                            <p class="m-0 small-text">1 Januari 2024</p>
                                                        </div>
                                                        <div class="col-4 align-self-center text-center">
                                                            <p class="m-0 small-text">07:00 - 15:00</p>
                                                        </div>
                                                        <div class="col-4 align-self-center text-center">
                                                            <p class="m-0 fw-bolder small">MAKER 9 C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 ps-0">
                                            <div class="card shadow-none border-2 card-hoper mb-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 fw-bolder">ABLF 20</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 small-text">07:00 - 08:00</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <!-- progress bar -->
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90 / 200</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 pe-0 ps-0 align-self-center text-center">
                                                            <span class="badge bg-danger">C</span>
                                                            <span class="badge bg-danger">H</span>
                                                            <span class="badge bg-grey">O</span>
                                                            <span class="badge bg-grey">Q</span>
                                                            <span class="badge bg-grey">M</span>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <i class="small">OPEN</i>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <button class="btn btn-danger btn-sm">CLOSE</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="v-zone">
                                                <div class="vertical-line mt-1 mb-1 align-self-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 ps-0">
                                            <div class="card shadow-none border-2 card-hoper mb-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 fw-bolder">ABOF 20</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 small-text">--:-- - --:--</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <!-- progress bar -->
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0 / 200</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 pe-0 ps-0 align-self-center text-center">
                                                            <span class="badge bg-grey">C</span>
                                                            <span class="badge bg-grey">H</span>
                                                            <span class="badge bg-grey">O</span>
                                                            <span class="badge bg-grey">Q</span>
                                                            <span class="badge bg-grey">M</span>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <i class="small">--</i>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
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
            </div>
            <!-- yang closing -->
            <div class="col-12 mt-4 mb-2">
                <div class="card shadow-sm border-radius-20 p-3 position-relative">
                    <span class="position-absolute top-0 start-10 translate-middle badge bg-primary">SEDANG BERJALAN
                    </span>
                    <div class="card-body">
                        <div class="table-responsible" id="dataTable">
                            <div class="row mb-2">
                                <div class="col-4">
                                    <div class="row p-3 pb-0 pt-0">
                                        <div class="col-4 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Date</p>
                                        </div>
                                        <div class="col-4 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Shift</p>
                                        </div>
                                        <div class="col-4 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Machine</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row p-3 pb-0 pt-0">
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Product</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Time</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Progress</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Worker</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Status</p>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <p class="m-0 fw-bolder small-text">Action</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="row justify-content-end">
                                        <div class="col-4 pe-1">
                                            <div class="card shadow-none border-2 mb-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-4 align-self-center text-center">
                                                            <p class="m-0 small-text">1 Januari 2024</p>
                                                        </div>
                                                        <div class="col-4 align-self-center text-center">
                                                            <p class="m-0 small-text">07:00 - 15:00</p>
                                                        </div>
                                                        <div class="col-4 align-self-center text-center">
                                                            <p class="m-0 fw-bolder small">MAKER 9 C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 ps-0">
                                            <div class="card shadow-none border-2 card-hoper mb-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 fw-bolder">ABLF 20</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 small-text">07:00 - 08:00</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <!-- progress bar -->
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">90 / 200</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 pe-0 ps-0 align-self-center text-center">
                                                            <span class="badge bg-danger">C</span>
                                                            <span class="badge bg-danger">H</span>
                                                            <span class="badge bg-grey">O</span>
                                                            <span class="badge bg-grey">Q</span>
                                                            <span class="badge bg-grey">M</span>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <i class="small">OPEN</i>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <button class="btn btn-danger btn-sm">CLOSE</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="v-zone">
                                                <div class="vertical-line mt-1 mb-1 align-self-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 ps-0">
                                            <div class="card shadow-none border-2 card-hoper mb-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 fw-bolder">ABOF 20</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <p class="m-0 small-text">--:-- - --:--</p>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <!-- progress bar -->
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0 / 200</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 pe-0 ps-0 align-self-center text-center">
                                                            <span class="badge bg-grey">C</span>
                                                            <span class="badge bg-grey">H</span>
                                                            <span class="badge bg-grey">O</span>
                                                            <span class="badge bg-grey">Q</span>
                                                            <span class="badge bg-grey">M</span>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
                                                            <i class="small">--</i>
                                                        </div>
                                                        <div class="col-2 align-self-center text-center">
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
    var data_user = ""
    var data_report = ""
    var date_start = currentDate()
    var date_end = currentDate()
    var machineId
    var rowCode
    $(document).ready(function() {
        // $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian'))
        // $('select').selectpicker();
        // loadData()
    })

    function loadData() {
        $.ajax({
            url: "<?= api_produksi('loadPageMachineReport'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
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
                data_user = response['data']
                setDaterange()
                formMachine()
                dateRangeString()
            }
        })
    }

    function dateRangeString() {
        $('#dateRangeString').html(formatMonthYear(date_start) + ' - ' + formatMonthYear(date_end))
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: date_start,
            endDate: date_end,
            format: "DD MMMM YYYY",
            autoRefresh: true,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    date_start = formatDate(date1['dateInstance'])
                    date_end = formatDate(date2['dateInstance'])
                });
            },
        })
    }

    function formMachine() {
        var html = ''
        data_user.machine.forEach(e => {
            html += '<option value="' + e.id + '" selected>' + e.code + '</option>'
        });
        $('#selectMachine').html(html)
        $('#selectMachine').selectpicker('refresh');
        $('#selectMachine').selectpicker({

        });
        simpanData()
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function simpanData() {
        machineId = arrayToString($('#selectMachine').map(function() {
            return $(this).val();
        }).get())
        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportResultPersonQuality'); ?>'
        var data = {
            dateStart: date_start,
            dateEnd: date_end,
            machineId: machineId,
        }
        kelolaData(data, type, url, button)
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dateRangeString()
                $(button).prop("disabled", false);
                data_report = response.data
                // if (data_report.reportResultPersonQuality.length) {
                updatedStructure()
                // } else {
                // tidak ada data
                // $('#dataTable').html(notFoundReturn('Data Tidak Ditemukan'))
                // }
            }
        });
    }

    function updatedStructure() {
        // dataTable()
    }

    function tableTemplate() {}

    function dataTable() {
        var html = ''
        html += '<table class="table table-bordered table-hover table-sm small-text w-100" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '</table>'
        $('#dataTable').html(html)
        headTable()
    }

    function formatMonthYear(orginaldate) {
        var date = new Date(orginaldate);
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        switch (bulan) {
            case 0:
                bulan = "Januari";
                break;
            case 1:
                bulan = "Februari";
                break;
            case 2:
                bulan = "Maret";
                break;
            case 3:
                bulan = "April";
                break;
            case 4:
                bulan = "Mei";
                break;
            case 5:
                bulan = "Juni";
                break;
            case 6:
                bulan = "Juli";
                break;
            case 7:
                bulan = "Agustus";
                break;
            case 8:
                bulan = "September";
                break;
            case 9:
                bulan = "Oktober";
                break;
            case 10:
                bulan = "November";
                break;
            case 11:
                bulan = "Desember";
                break;
        }
        var tampilTanggal = bulan + " " + tahun;
        return tampilTanggal;
    }

    function headTable() {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">#</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Date</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Shift</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Machine</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Product</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Start - End</th>'
        html += '<th class="align-middle" colspan="5">Worker</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Status</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Action</th>'
        html += '</tr>'

        html += '<tr>'
        html += '<th class="align-middle">Catcher</th>'
        html += '<th class="align-middle">Helper</th>'
        html += '<th class="align-middle">Operator</th>'
        html += '<th class="align-middle">Mechanic</th>'
        html += '<th class="align-middle">QC</th>'
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ''
        var a = 1
        for (let i = 0; i < 3; i++) {
            html += '<tr class="">'
            html += '<td class="text-center align-middle small-text" rowspan="2" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="text-center align-middle small-text" rowspan="2" style="background-color: white;">Senin<br>12-01-2024</td>'
            html += '<td class="text-center align-middle small-text text-nowrap" rowspan="2" style="background-color: white;">Shift Pagi</td>'
            html += '<td class="text-center align-middle small-text text-nowrap" rowspan="2" style="background-color: white;">MK9-A</td>'
            html += '<td class="text-center align-middle small-text">ABOF20</td>'
            html += '<td class="text-center align-middle small-text">08:00 - 12:00</td>'
            html += '<td class="text-center align-middle small-text"><i class="fa fa-check text-success"></i></td>'
            html += '<td class="text-center align-middle small-text"><i class="fa fa-check text-success"></i></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text text-success fw-bolder"><i>Open</i></td>'
            html += '<td class="text-center align-middle small-text text-success fw-bolder"><button class="btn btn-sm btn-danger super-small-text p-2">Close</button></td>'
            html += '</tr>'

            html += '<tr>'
            html += '<td class="text-center align-middle small-text">ABLF20</td>'
            html += '<td class="text-center align-middle small-text">--:-- - --:--</td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text text-success fw-bolder"></td>'
            html += '<td class="text-center align-middle small-text text-success fw-bolder"></td>'
            html += '</tr>'
        }
        for (let i = 0; i < 100; i++) {
            html += '<tr class="bg-light">'
            html += '<td class="text-center align-middle small-text bg-light" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="text-center align-middle small-text bg-light" style="background-color: white;">Senin<br>12-01-2024</td>'
            html += '<td class="text-center align-middle small-text bg-light text-nowrap" style="background-color: white;">Shift Pagi</td>'
            html += '<td class="text-center align-middle small-text bg-light text-nowrap" style="background-color: white;">MK9-A</td>'
            html += '<td class="text-center align-middle small-text">ABLF20</td>'
            html += '<td class="text-center align-middle small-text">08:00 - 13:00</td>'
            html += '<td class="text-center align-middle small-text"><i class="fa fa-check text-success"></i></td>'
            html += '<td class="text-center align-middle small-text"><i class="fa fa-check text-success"></i></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"></td>'
            html += '<td class="text-center align-middle small-text"><i class="text-danger">Closed</i></td>'
            html += '<td class="text-center align-middle small-text text-success fw-bolder"></td>'
            html += '</tr>'
        }
        $('#bodyTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedColumns: {
                left: 3
            },
            paging: false,
        })
    }

    function cetakReport(x, y) {
        if (x == 'excel') {
            var url = "<?= base_url() ?>report/reportPersonQualityExcel"
        } else {
            var url = "<?= base_url() ?>report/reportPersonQualityPdf"
        }
        var params = "*$" + date_start + "*$" + date_end + "*$" + machineId;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>