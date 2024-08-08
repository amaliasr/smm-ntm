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

    .text-small {
        font-size: 10px;
    }

    .super-text-small {
        font-size: 8px;
    }

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px !important;
        border: 1px solid #dce0e6 !important;
    }

    .bg-light-danger {
        background-color: #f9dfdf !important;
    }

    .bs-actionsbox {
        float: none !important;
    }

    .bs-actionsbox .btn-group button {
        font-size: 10px !important;
        margin-bottom: 5px;
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
        <div class="row justify-content-between mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">REPORT PRODUCTION DAILY</h1>
                <h5 class="fw-bolder m-0 text-primary mb-2">VERPACK</h5>
                <p class="m-0 small" id="dateRangeString">-</p>
            </div>
            <div class="col pb-2">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <p class="fw-bolder small-text m-0">Tanggal</p>
                                <input class="form-select form-select-sm datepicker formFilter" type="text" id="dateRange" placeholder="Tanggal Mulai" autocomplete="off">
                            </div>
                            <div class="col-auto ps-0">
                                <p class="fw-bolder small-text m-0">Machine</p>
                                <select class="selectpicker w-100" multiple data-selected-text-format="count > 1" data-live-search="true" data-actions-box="true" id="selectMachine" title="Pilih Mesin" onchange="arrangeVariable()">
                                </select>
                            </div>
                            <div class="col-auto ps-0">
                                <p class="fw-bolder small-text m-0">Kode Meja</p>
                                <select class="selectpicker w-100" multiple data-selected-text-format="count > 1" data-live-search="true" data-actions-box="true" id="selectCodeMeja" title="Pilih Kode Meja" onchange="arrangeVariable()">
                                </select>
                            </div>
                            <div class="col-auto p-0 d-flex align-items-end">
                                <button type="button" class="btn btn-primary btn-sm btnSimpan" style="border-radius: 20px;padding: 10px;" onclick="simpanData()">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-end">
                        <div class="dropdown">
                            <button class="btn btn-outline-primary btn-sm dropdown-toggle border-radius-20 shadow-none small-text btnSimpan" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fa fa-download me-2"></span>Downloads
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <!-- <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('pdf',0)">PDF (Raw)</a></li> -->
                                <!-- <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('pdf',1)">PDF (Formatted)</a></li> -->
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel','NORMAL')">Excel (Sortir)</a></li>
                                <li><a class="dropdown-item fw-bolder" href="javascript:void(0);" onclick="cetakReport('pdf','NORMAL')">PDF (Sortir)</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel','IGNORESORTIR')">Excel (Tanpa Sortir)</a></li>
                                <li><a class="dropdown-item fw-bolder" href="javascript:void(0);" onclick="cetakReport('pdf','IGNORESORTIR')">PDF (Tanpa Sortir)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                        <p class="fw-bolder m-0">Detail</p>
                        <div class="table-responsible" id="dataTable">

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

    function findTopEmployees(data) {
        // Menyusun data berdasarkan total_good secara menurun
        data.sort((a, b) => b.total_good - a.total_good);

        // Mengambil 3 karyawan teratas
        const topEmployees = data.slice(0, 10);

        return topEmployees;
    }

    function findDownEmployees(data) {
        // Menyusun data berdasarkan total_good secara menaik
        data.sort((a, b) => a.total_good - b.total_good);

        // Mengambil 3 karyawan teratas
        const topEmployees = data.slice(0, 3);

        return topEmployees;
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
    var dataProfile = 'NORMAL'
    $(document).ready(function() {
        $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian atau Bisa Langsung Download File'))
        $('select').selectpicker();
        loadData()
    })

    function loadData() {
        $.ajax({
            url: "<?= api_produksi('loadPageReportResultPersonDaily'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
                dataProfile: 'VERPACK'
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

    function arrangeVariable() {
        machineId = arrayToString($('#selectMachine').map(function() {
            return $(this).val();
        }).get())
        var dataCode = $('#selectCodeMeja').map(function() {
            return $(this).val();
        }).get()
        var row = []
        data_user.rowCodeProfile.forEach(e => {
            for (let i = 0; i < dataCode.length; i++) {
                if (e.id == dataCode[i]) {
                    for (let j = 0; j < e.codes.length; j++) {
                        if (!e.codes[j]) {
                            e.codes[j] = 'UNKNOWN'
                        }
                        row.push(e.codes[j])
                    }
                }

            }
        })
        rowCode = arrayToString(row)
    }

    function dateRangeString() {
        $('#dateRangeString').html(formatDateIndonesiaShort(date_start))
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: true,
            firstDay: 0,
            startDate: date_start,
            format: "DD MMMM YYYY",
            autoRefresh: true,
            setup: (picker) => {
                picker.on('selected', (date1) => {
                    date_start = formatDate(date1['dateInstance'])
                    // date_end = formatDate(date2['dateInstance'])
                });
            },
        })
    }

    function formMachine() {
        var html = ''
        data_user.dataMachine.forEach(e => {
            var select = ''
            if (e.id == 14) {
                select = 'selected'
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.code + '</option>'
        });
        $('#selectMachine').html(html)
        $('#selectMachine').selectpicker('refresh');
        $('#selectMachine').selectpicker({

        });
        formCodeMeja()
    }

    function formCodeMeja() {
        var html = ''
        data_user.rowCodeProfile.forEach(e => {
            html += '<option value="' + e.id + '" selected>' + e.name + '</option>'
        });
        $('#selectCodeMeja').html(html)
        $('#selectCodeMeja').selectpicker('refresh');
        $('#selectCodeMeja').selectpicker({

        });
        // simpanData()
        arrangeVariable()
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function simpanData() {
        // rowCode
        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportResultPersonStepDaily'); ?>'
        var data = {
            date: date_start,
            machineId: machineId,
            rowCode: rowCode,
            dataProfile: dataProfile
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
                if (data_report.reportResultPersonDaily.length) {
                    updatedStructure()
                    // setoranTerbanyak()
                } else {
                    // tidak ada data
                    $('#dataTable').html(notFoundReturn('Data Tidak Ditemukan'))
                }
            }
        });
    }

    function updatedStructure() {
        dataTable()
    }

    function setoranTerbanyak() {
        var setoranTerbanyak = findTopEmployees(data_report.reportResultPersonDaily)
        $('#namaSetoranTerbanyak').html(shortenText(setoranTerbanyak[0].employee.name, 20))
        $('#jumlahSetoranTerbanyak').html(number_format(setoranTerbanyak[0].total_good))
        // console.log(setoranTerbanyak)
        setoranTersedikit()
    }

    function setoranTersedikit() {
        var setoranTersedikit = findDownEmployees(data_report.reportResultPersonDaily)
        $('#namaSetoranTersedikit').html(shortenText(setoranTersedikit[0].employee.name, 20))
        $('#jumlahSetoranTersedikit').html(number_format(setoranTersedikit[0].total_good))
        // console.log(setoranTerbanyak)
        totalAllSetoran()
    }

    function totalAllSetoran() {
        var total = calculateTotalGood(data_report.reportResultPersonDaily)
        $('#totalAllSetoran').html(number_format(total))
    }

    function calculateTotalGood(data) {
        const totalGood = data.reduce((acc, employee) => acc + employee.total_good, 0);
        return totalGood;
    }

    function dataTable() {
        var html = ''
        html += '<table class="table table-bordered table-hover table-sm small w-100" style="overflow-x: hidden;" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '<tfoot id="footTable">'
        html += '</tfoot>'
        html += '</table>'
        $('#dataTable').html(html)
        headTable()
    }

    function headTable() {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" style="background-color: white;height:50px">#</th>'
        html += '<th class="align-middle" style="background-color: white;height:50px">EID</th>'
        html += '<th class="align-middle" style="background-color: white;height:50px">Nama</th>'
        html += '<th class="align-middle" style="background-color: white;height:50px">No. Meja</th>'
        data_report.reportResultPersonDaily[0].results.forEach(e => {
            var elabel = e.item_product.label + ' '
            if (!e.item_product.label) {
                elabel = ''
            }
            if (!e.label) {
                e.label = ' ' + elabel + '<br>' + e.machine_step_label
            } else {
                e.label = ' ' + elabel + '<br>' + e.label
            }
            html += '<th class="align-middle text-center">' + e.product.code + '' + e.label + '</th>'
        });
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ''
        var a = 1
        var footMenu = []
        data_report.reportResultPersonDaily.forEach(e => {
            html += '<tr>'
            html += '<td class="text-center small-text" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.employee.eid + '</td>'
            html += '<td class="text-center small-text text-nowrap" style="background-color: white;">' + e.employee.name + '</td>'
            if (!e.row_code) {
                e.row_code = '-'
            }
            html += '<td class="text-center small-text" style="background-color: white;">' + e.row_code + '</td>'
            var b = 0
            e.results.forEach(el => {
                var bg = ''
                if (el.reject_left) {
                    bg = 'bg-light-danger'
                }
                if (!el.qty_rpp) {
                    el.qty_rpp = 0
                }
                // console.log(el.product.id + '' + el.result_earn_step_profile_detail_id)
                html += '<td class="text-center small-text ' + bg + '">' + number_format(el.qty_rpp) + '</td>'
                if (!footMenu[el.product.id + '' + b]) {
                    footMenu[el.product.id + '' + b] = el.qty_rpp
                } else {
                    footMenu[el.product.id + '' + b] = footMenu[el.product.id + '' + b] + el.qty_rpp
                }
                b++
            });
            html += '</tr>'
        });
        $('#bodyTable').html(html)
        footTable(footMenu)

    }

    function footTable(footMenu) {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" style="background-color: white;"></th>'
        html += '<th class="align-middle" style="background-color: white;"></th>'
        html += '<th class="align-middle" style="background-color: white;"></th>'
        html += '<th class="align-middle" style="background-color: white;">Total</th>'
        var b = 0
        data_report.reportResultPersonDaily[0].results.forEach(e => {
            html += '<th class="align-middle">' + number_format(footMenu[e.product.id + '' + b]) + '</th>'
            b++
        })
        html += '</tr>'
        $('#footTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedFooter: true,
            fixedColumns: {
                left: 4
            },
            paging: false,
        })
    }

    function cetakReport(x, y) {
        if (x == 'excel') {
            var url = "<?= base_url() ?>report/reportDailySKTVerpack"
        } else {
            var url = "<?= base_url() ?>report/reportDailySKTPdfVerpack"
        }
        var params = "*$" + date_start + "*$" + machineId + "*$" + rowCode + "*$" + y;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>