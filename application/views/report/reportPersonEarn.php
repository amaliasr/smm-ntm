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

    .bg-orange-light {
        background-color: #fcf6ec !important;
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
        <div class="row justify-content-center mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">REPORT PERSON SALARY</h1>
                <h5 class="fw-bolder m-0 text-orange mb-2">GILING</h5>
                <p class="m-0 small" id="dateRangeString">-</p>
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
                                <select class="selectpicker w-100" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" id="selectMachine" title="Pilih Mesin" onchange="arrangeVariable()">
                                </select>
                            </div>
                            <div class="col-auto p-0">
                                <p class="fw-bolder small-text m-0">View By</p>
                                <select class="selectpicker w-100" id="selectView" title="Pilih View By" onchange="arrangeVariable()">
                                    <option value="false" selected>SUMMARY</option>
                                    <option value="true">DETAIL</option>
                                </select>
                            </div>
                            <div class="col-auto d-flex align-items-end">
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
                                <li class="ps-3"><b class="small-text text-grey">Date Merged</b></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',0,1)">Excel Summary</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',1,1)">Excel Detail</a></li>
                                <li class="ps-3"><b class="small-text text-grey">Date Splited</b></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',0,0)">Excel Summary</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',1,0)">Excel Detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-2">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-auto" hidden id="formMode">
                                <button class="btn btn-sm btn-outline-primary active shadow-none btnMode" id="btnModenormal" onclick="changeMode('normal')">Normal Mode</button>
                                <button class="btn btn-sm btn-outline-primary shadow-none btnMode" id="btnModeseparate" onclick="changeMode('separate')">Separate Overtime</button>
                            </div>
                            <div class="col-auto">
                                <div id="custom-search-container"></div>
                            </div>
                        </div>
                        <div class="table-responsible" id="dataTable">

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
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

    function formatJustDay(orginaldate) {
        var date = new Date(orginaldate);
        var hari = date.getDay();
        switch (hari) {
            case 0:
                hari = "Minggu";
                break;
            case 1:
                hari = "Senin";
                break;
            case 2:
                hari = "Selasa";
                break;
            case 3:
                hari = "Rabu";
                break;
            case 4:
                hari = "Kamis";
                break;
            case 5:
                hari = "Jumat";
                break;
            case 6:
                hari = "Sabtu";
                break;
        }
        return hari;
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    function getFirstDateOfCurrentMonth() {
        const currentDate = new Date();
        const firstDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

        const year = firstDate.getFullYear();
        const month = (firstDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
        const day = firstDate.getDate().toString().padStart(2, '0');

        return `${year}-${month}-${day}`;
    }

    function getPreviousFriday() {
        // Mendapatkan tanggal hari ini
        const today = new Date();

        // Mendapatkan hari dalam bentuk angka (0: Minggu, 1: Senin, ..., 6: Sabtu)
        const dayOfWeek = today.getDay();

        // Menghitung selisih hari untuk kembali ke hari Jumat
        const daysUntilFriday = (dayOfWeek + 2) % 7;

        // Menghitung tanggal Jumat sebelumnya
        const previousFriday = new Date(today);
        previousFriday.setDate(today.getDate() - daysUntilFriday);

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = previousFriday.toISOString().split('T')[0];

        return formattedDate;
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_user = ""
    var data_report = ""
    var date_start = getPreviousFriday()
    var date_end = currentDate()
    var detailMode = false
    var mode = 'normal'
    $(document).ready(function() {
        $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian atau Bisa Langsung Download File'))
        $('select').selectpicker();
        loadData()
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
        $('#dateRangeString').html(formatDateIndonesiaShort(date_start) + ' - ' + formatDateIndonesiaShort(date_end))
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
            var select = ''
            if (e.id == 15) {
                select = 'selected'
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.code + '</option>'
        });
        $('#selectMachine').html(html)
        $('#selectMachine').selectpicker('refresh');
        $('#selectMachine').selectpicker({

        });
        // autoSave()
        // simpanData()
        arrangeVariable()
    }

    function arrangeVariable() {
        machineId = arrayToString($('#selectMachine').map(function() {
            return $(this).val();
        }).get())
        detailMode = JSON.parse($('#selectView').val())
    }

    function simpanData() {

        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportResultPersonEarn'); ?>'
        var data = {
            dateStart: date_start,
            dateEnd: date_end,
            machineId: machineId
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
                $('#formMode').prop('hidden', false)
                dateRangeString()
                $(button).prop("disabled", false);
                data_report = response.data
                if (data_report.reportResultPersonEarn.length) {
                    updatedStructure()
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
    var variableMode = {
        'normal': {
            0: [
                'qty_pokok',
                'earn_pokok',
            ],
            1: [
                'qty_inc',
                'earn_inc',
            ]
        },
        'separate': {
            0: [
                'qty_pokok',
                'earn_pokok_overtime',
                'earn_pokok_raw',
            ],
            1: [
                'qty_inc',
                'earn_inc_overtime',
                'earn_inc_raw',
            ]
        }
    }
    var nameMode = {
        'normal': {
            0: [
                'QTY<br>Pokok',
                'Earn<br>Pokok',
            ],
            1: [
                'QTY<br>Incentive',
                'Earn<br>Incentive',
            ]
        },
        'separate': {
            0: [
                'QTY<br>Pokok',
                'Earn<br>Pokok Raw',
                'Earn<br>Pokok Overtime',
            ],
            1: [
                'QTY<br>Incentive',
                'Earn<br>Incentive Raw',
                'Earn<br>Incentive Overtime',
            ]
        }
    }

    function dataTable() {
        var html = ''
        html += '<table class="table table-bordered table-hover table-sm small w-100" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '</table>'
        $('#dataTable').html(html)
        nameDetail()
    }

    function nameDetail() {
        var numberDetail = {}
        data_report.reportResultPersonEarn.forEach(a => {
            a.data.forEach(b => {
                if (detailMode) {
                    var num = b[Object.keys(b)[0]].detail_total.length
                } else {
                    var num = 0
                }
                if (numberDetail[Object.keys(b)[0]]) {
                    if (num > numberDetail[Object.keys(b)[0]]) {
                        numberDetail[Object.keys(b)[0]] = num
                    }
                } else {
                    numberDetail[Object.keys(b)[0]] = num
                }
            });
        });
        headTable(numberDetail)
    }

    function changeMode(x) {
        mode = x
        $('.btnMode').removeClass('active')
        $('#btnMode' + x).addClass('active')
        dataTable()
    }

    function headTable(numberDetail) {
        // console.log(numberDetail)
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">#</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">EID</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Nama</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">No. Meja</th>'
        const dates = data_report.reportResultPersonEarn[0].data.map(item => Object.keys(item)[0]);
        for (let i = 0; i < dates.length; i++) {
            var dataDate = data_report.reportResultPersonEarnDate.find((v, k) => {
                if (v.date == dates[i]) return true
            })
            var bgOver = ''
            var badgeOver = ''
            if (dataDate.is_overtime) {
                bgOver = 'bg-orange-light'
                badgeOver = '<span class="badge bg-orange ms-2" style="font-size:5px;vertical-align: middle;padding-top:3px;">OVERTIME</span>'
            }
            var add_num = 0
            if (detailMode) {
                if (mode == 'separate') {
                    add_num = 1
                }
            }
            html += '<th class="align-middle ' + bgOver + '" colspan="' + (3 + (parseInt(numberDetail[dates[i]] + add_num) * 2)) + '">'
            html += '<p class="m-0 fw-bolder">' + formatJustDay(dates[i]) + '</p>'
            html += '<p class="m-0 super-small-text fw-normal">' + dates[i] + '' + badgeOver + '</p>'
            html += '</th>'
        }
        html += '<th class="align-middle" rowspan="2">Total Salary</th>'
        html += '</tr>'

        html += '<tr>'
        for (let i = 0; i < dates.length; i++) {
            var dataDate = data_report.reportResultPersonEarnDate.find((v, k) => {
                if (v.date == dates[i]) return true
            })
            var bgOver = ''
            if (dataDate.is_overtime) {
                bgOver = 'bg-orange-light'
            }
            if (detailMode) {
                var data2 = nameMode[mode]
                var key2 = Object.keys(data2)
                for (let index = 0; index < key2.length; index++) {
                    for (let i = 0; i < data2[key2[index]].length; i++) {
                        var text = data2[key2[index]][i]
                        html += '<th class="align-middle ' + bgOver + '">' + text + '</th>'
                    }
                }
            }
            html += '<th class="align-middle ' + bgOver + '">Total<br>QTY</th>'
            html += '<th class="align-middle ' + bgOver + '">Total<br>Earn</th>'
            html += '<th class="align-middle ' + bgOver + '">Total<br>Setor</th>'
        }
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable(numberDetail)
    }

    function bodyTable(numberDetail) {
        $('#custom-search-container').html('');
        var html = ''
        var a = 1
        data_report.reportResultPersonEarn.forEach(e => {
            html += '<tr>'
            html += '<td class="text-center small-text" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.employee.eid + '</td>'
            html += '<td class="text-center small-text text-nowrap" style="background-color: white;">' + e.employee.name + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.row_code + '</td>'
            e.data.forEach(el => {
                var dataDate = data_report.reportResultPersonEarnDate.find((v, k) => {
                    if (v.date == Object.keys(el)[0]) return true
                })
                var bgOver = ''
                if (dataDate.is_overtime) {
                    bgOver = 'bg-orange-light'
                }
                var bgDanger = ''
                if (el[Object.keys(el)[0]].reject_left) {
                    bgDanger = 'bg-light-danger'
                }
                if (detailMode) {
                    var dataDetail = el[Object.keys(el)[0]]
                    var a = 0
                    dataDetail.detail_total.forEach(ele => {
                        var data2 = variableMode[mode][a]
                        for (let i = 0; i < data2.length; i++) {
                            var text = ele[data2[i]]
                            html += '<td class="text-center small-text ' + bgOver + ' ' + bgDanger + '">' + number_format(text) + '</td>'
                        }
                        a++
                    });
                }
                html += '<td class="text-center small-text ' + bgOver + ' ' + bgDanger + '">' + number_format(el[Object.keys(el)[0]].total_qty) + '</td>'
                html += '<td class="text-center small-text ' + bgOver + '">' + number_format(roundToTwo(el[Object.keys(el)[0]].total_earn)) + '</td>'
                html += '<td class="text-center small-text ' + bgOver + '">' + el[Object.keys(el)[0]].total_deliv + '</td>'
            });
            html += '<td class="text-end small-text">' + number_format(roundToTwo(e.total.earn)) + '</td>'
            html += '</tr>'
        });
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
                left: 4
            },
            paging: false,
            "initComplete": function(settings, json) {
                $('div.dataTables_filter input').attr('placeholder', 'Search...');
            },
        })
        $('#custom-search-container').html($('.dataTables_filter'));
    }

    function cetakReport(x, y, merge) {
        var viewBy = ''
        if (y == 1) {
            viewBy = 'Detail'
        }
        eval('var url = "<?= base_url() ?>report/' + x + 'PersonEarn' + viewBy + '"')
        var params = "*$" + date_start + "*$" + date_end + "*$" + machineId + "*$" + viewBy + "*$" + merge + "*$" + mode
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>