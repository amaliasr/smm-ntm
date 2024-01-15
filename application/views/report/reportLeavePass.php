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
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">REPORT LEAVE PASS</h1>
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
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',0)">Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2 pe-1">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 align-self-center text-center">
                                <img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/clock_alarm.svg" alt="Icon" />
                            </div>
                            <div class="col-8">
                                <p class="m-0 lh-2 fw-bold small-text">Sering Terlambat</p>
                                <p class="m-0 lh-1 fw-bolder h3" id="namaSeringTerlambat">-</p>
                                <p class="m-0 lh-2 fw-bold super-small-text">Jumlah : <span class="text-success" id="jumlahSeringTerlambat">0</span> Menit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2 pe-1 ps-1">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 align-self-center text-center">
                                <img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/lunch.svg" alt="Icon" />
                            </div>
                            <div class="col-8">
                                <p class="m-0 lh-2 fw-bold small-text">Sering Istirahat</p>
                                <p class="m-0 lh-1 fw-bolder h3" id="namaSeringIstirahat">-</p>
                                <p class="m-0 lh-2 fw-bold super-small-text">Jumlah : <span class="text-success" id="jumlahSeringIstirahat">0</span> Kali</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2 ps-1">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 align-self-center text-center">
                                <img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/mosque.svg" alt="Icon" />
                            </div>
                            <div class="col-8">
                                <p class="m-0 lh-2 fw-bold small-text">Sering Ibadah</p>
                                <p class="m-0 lh-1 fw-bolder h3" id="namaSeringIbadah">-</p>
                                <p class="m-0 lh-2 fw-bold super-small-text">Jumlah : <span class="text-success" id="jumlahSeringIbadah">0</span> Kali</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-2">
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

    function getFirstDate() {
        // Mendapatkan tanggal hari ini
        const today = new Date();
        var month = today.getMonth() + 1;
        var year = today.getFullYear();

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = year + "-" + month + "-01";

        return formattedDate;
    }

    function findTopTerlambat(data) {
        // Menyusun data berdasarkan total_good secara menurun
        data.sort((a, b) => b.minutes_over_istirahat - a.minutes_over_istirahat);

        // Mengambil 3 karyawan teratas
        const topEmployees = data.slice(0, 10);

        return topEmployees;
    }

    function findTopIstirahat(data) {
        // Menyusun data berdasarkan total_good secara menurun
        data.sort((a, b) => b.freq_istirahat - a.freq_istirahat);

        // Mengambil 3 karyawan teratas
        const topEmployees = data.slice(0, 10);

        return topEmployees;
    }

    function findTopIbadah(data) {
        // Menyusun data berdasarkan total_good secara menurun
        data.sort((a, b) => b.freq_ibadah - a.freq_ibadah);

        // Mengambil 3 karyawan teratas
        const topEmployees = data.slice(0, 10);

        return topEmployees;
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_user = ""
    var data_report = ""
    var date_start = getFirstDate()
    var date_end = currentDate()
    $(document).ready(function() {
        $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian atau Bisa Langsung Download File'))
        $('select').selectpicker();
        loadData()
    })

    function loadData() {
        setDaterange()
        dateRangeString()
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



    function simpanData() {

        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportLeavePassLog'); ?>'
        var data = {
            dateStart: date_start,
            dateEnd: date_end,
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
                if (data_report.reportLeavePassLog.length) {
                    updatedStructure()
                    seringTerlambat()
                } else {
                    // tidak ada data
                    $('#dataTable').html(notFoundReturn('Data Tidak Ditemukan'))
                }
            }
        });
    }

    function seringTerlambat() {
        var employeeSeringTerlambat = findTopTerlambat(data_report.reportLeavePassLog)
        if (employeeSeringTerlambat[0].minutes_over_istirahat) {
            $('#namaSeringTerlambat').html(shortenText(employeeSeringTerlambat[0].name, 20))
            $('#jumlahSeringTerlambat').html(number_format(employeeSeringTerlambat[0].minutes_over_istirahat))
        } else {
            $('#namaSeringTerlambat').html('-')
            $('#jumlahSeringTerlambat').html('0')
        }
        seringIstirahat()
    }

    function seringIstirahat() {
        var employeeSeringIstirahat = findTopIstirahat(data_report.reportLeavePassLog)
        $('#namaSeringIstirahat').html(shortenText(employeeSeringIstirahat[0].name, 20))
        $('#jumlahSeringIstirahat').html(number_format(employeeSeringIstirahat[0].freq_istirahat))
        seringIbadah()
    }

    function seringIbadah() {
        var employeeSeringIbadah = findTopIbadah(data_report.reportLeavePassLog)
        $('#namaSeringIbadah').html(shortenText(employeeSeringIbadah[0].name, 20))
        $('#jumlahSeringIbadah').html(number_format(employeeSeringIbadah[0].freq_ibadah))
    }

    function updatedStructure() {
        dataTable()
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
        headTable()
    }

    function headTable() {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle text-center" rowspan="2" style="background-color: white;">#</th>'
        html += '<th class="align-middle text-center" rowspan="2" style="background-color: white;">EID</th>'
        html += '<th class="align-middle text-center" rowspan="2" style="background-color: white;">Nama</th>'
        html += '<th class="align-middle text-center" rowspan="2" style="background-color: white;">No. Meja</th>'
        html += '<th class="align-middle text-center" colspan="5">ISTIRAHAT</th>'
        html += '<th class="align-middle text-center" colspan="5">IBADAH</th>'
        html += '</tr>'

        html += '<tr>'
        for (let i = 0; i < 2; i++) {
            html += '<th class="align-middle text-center small-text" style="background-color: white;">MENIT</th>'
            html += '<th class="align-middle text-center small-text" style="background-color: white;">MENIT<br>TERLAMBAT</th>'
            html += '<th class="align-middle text-center small-text" style="background-color: white;">FREQ</th>'
            html += '<th class="align-middle text-center small-text" style="background-color: white;">FREQ<br>TERLAMBAT</th>'
            html += '<th class="align-middle text-center small-text" style="background-color: white;">HARI YG<br>TERLAMBAT</th>'
        }
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ''
        var a = 1
        data_report.reportLeavePassLog.forEach(e => {
            html += '<tr>'
            html += '<td class="text-center small-text" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.eid + '</td>'
            html += '<td class="text-center small-text text-nowrap" style="background-color: white;">' + e.name + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.row_code + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.minute_usage_istirahat + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.minutes_over_istirahat + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.freq_istirahat + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.freq_over_istirahat + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.total_day_over_istirahat + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.minute_usage_ibadah + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.minutes_over_ibadah + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.freq_ibadah + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.freq_over_ibadah + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.total_day_over_ibadah + '</td>'
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
        })
    }

    function cetakReport(x, y) {
        eval('var url = "<?= base_url() ?>report/' + x + 'LeavePass"')
        var params = "*$" + date_start + "*$" + date_end
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>