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

    .bg-body-0 {
        background-color: #eff9fc !important;
    }

    .bg-body-1 {
        background-color: #f3fcf6 !important;
    }

    .bg-body-2 {
        background-color: #fdfdf7 !important;
    }

    .bg-body-3 {
        background-color: #fdf9f9 !important;
    }

    .bg-head-0 {
        background-color: #CAEDF6 !important;
    }

    .bg-head-1 {
        background-color: #D9F8E4 !important;
    }

    .bg-head-2 {
        background-color: #FBFBE7 !important;
    }

    .bg-head-3 {
        background-color: #FBEEEE !important;
    }

    .dtfc-right-top-blocker {
        background-color: white;
    }

    .bg-head-total {
        background-color: #6DC5D1 !important;
        color: white;
    }

    .bg-body-total {
        background-color: #b6e2e8 !important;
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
                <h5 class="fw-bolder m-0 text-primary mb-2">VERPACK</h5>
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
                                <p class="fw-bolder small-text m-0">Data Profile</p>
                                <select class="selectpicker w-100" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" id="selectTipeData" title="Pilih Tipe Data" onchange="arrangeVariable()">
                                    <option value="SMM">SMM</option>
                                    <option value="OTHER">Other</option>
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
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',0)">Excel</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',1)">Excel Extra<span class="badge bg-orange ms-2 p-1" style="font-size: 6px;">1 Sheet</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-2">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                        <div id="listDate">
                        </div>
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
            if (e.id == 14) {
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
        dataProfile = arrayToString($('#selectTipeData').map(function() {
            return $(this).val();
        }).get())
    }

    function simpanData() {
        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportResultPersonEarnStep'); ?>'
        var data = {
            dateStart: date_start,
            dateEnd: date_end,
            machineId: machineId,
            dataProfile: dataProfile,
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
                // console.log(data_report)
                if (data_report.reportResultPersonEarn.result.length) {
                    updatedStructure()
                } else {
                    // tidak ada data
                    $('#dataTable').html(notFoundReturn('Data Tidak Ditemukan'))
                }
            }
        });
    }
    var dataFiltered
    var showDataSetoran = false
    var showFitData = true
    var dateClicked
    var findAvailableBrand = []
    var uniqueAvailableBrand = {}
    var listDate = []

    function updatedStructure() {
        var html = ''
        listDate = data_report.reportResultPersonEarn.headerDate
        html += '<div class="row mb-2">'
        html += '<div class="col">'
        listDate.forEach(e => {
            html += '<button class="btn btn-sm btn-outline-success small-text border-radius-20 shadow-none btnSlide me-2" type="button" id="btnSlide' + e.date + '" onclick="dataTable(' + "'" + e.date + "'" + ')">' + e.date + '</button>'
        });
        html += '</div>'
        html += '<div class="col text-end">'
        html += '<button class="btn btn-sm btn-outline-primary small-text border-radius-20 shadow-none" id="btnTotalSetoran" onclick="tampilTotalSetoran()">Tampil Total <span class="ms-1" id="namaTotalSetoran">Setoran</span></button>'
        html += '<button class="btn btn-sm btn-primary small-text border-radius-20 shadow-none ms-2" id="btnFitData" onclick="onFitData()">Fit Data<i class="ms-2 fa fa-check text-success" id="checkFitData"></i></button>'
        html += '</div>'
        $('#listDate').html(html)
        if (!dataFiltered) {
            chooseDate(listDate[0].date)
        }
    }

    function tampilTotalSetoran() {
        if (showDataSetoran) {
            showDataSetoran = false
            $('#btnTotalSetoran').removeClass('btn-primary').addClass('btn-outline-primary')
            $('#namaTotalSetoran').html('Setoran')
        } else {
            showDataSetoran = true
            $('#btnTotalSetoran').removeClass('btn-outline-primary').addClass('btn-primary')
            $('#namaTotalSetoran').html('Upah')
        }
        chooseDate(dateClicked)
    }

    function onFitData() {
        if (showFitData) {
            showFitData = false
            $('#checkFitData').prop('hidden', true)
            $('#btnFitData').removeClass('btn-primary').addClass('btn-outline-primary')
        } else {
            showFitData = true
            $('#checkFitData').prop('hidden', false)
            $('#btnFitData').removeClass('btn-outline-primary').addClass('btn-primary')
        }
        dataTable(dateClicked)
    }

    var dataDetail = []

    function chooseDate(date) {
        findAvailableBrand = []
        dataDetail = []
        uniqueAvailableBrand = {}
        listDate.forEach(d => {
            findAvailableBrand = []
            data_report.reportResultPersonEarn.result.forEach(e => {
                var detail = []
                if (e.dates) {
                    var dataDate = e.dates.find((v, k) => {
                        if (v[d.date]) return true
                    })
                    if (dataDate) {
                        dataDate = dataDate[d.date]
                    } else {
                        dataDate = undefined
                    }
                } else {
                    var dataDate = undefined
                }
                var totalEarn = 0
                var a = 0
                data_report.reportResultPersonEarn.headerStepProduct.forEach(ek => {
                    if (dataDate) {
                        var dataStepProfile = dataDate.result_earn_step_profiles.find((v, k) => {
                            if (v[ek.id]) return true
                        })
                        if (dataStepProfile) {
                            dataStepProfile = dataStepProfile[ek.id]
                        } else {
                            dataStepProfile = undefined
                        }
                    } else {
                        var dataStepProfile = undefined
                    }
                    ek.products.forEach(el => {
                        if (dataStepProfile) {
                            var dataProducts = dataStepProfile.products.find((v, k) => {
                                if (v[el.id]) return true
                            })
                            if (dataProducts) {
                                dataProducts = dataProducts[el.id]
                            } else {
                                dataProducts = undefined
                            }
                        } else {
                            var dataProducts = undefined
                        }

                        var jumlahQty = '-'
                        if (dataProducts) {
                            findAvailableBrand.push({
                                'step_id': ek.id,
                                'product_id': el.id,
                                'date': d.date
                            })
                            if (!dataProducts.earn) {
                                dataProducts.earn = 0
                            }
                            var qty = dataProducts.earn
                            if (showDataSetoran) {
                                if (!dataProducts.qty_rpp) {
                                    dataProducts.qty_rpp = 0
                                }
                                qty = dataProducts.qty_rpp
                            }
                            totalEarn += qty
                            jumlahQty = qty
                        }
                        detail.push({
                            'a': a,
                            'step_id': ek.id,
                            'product_id': el.id,
                            'qty': jumlahQty
                        })

                    })
                    a++
                })
                dataDetail.push({
                    'date': d.date,
                    'worker_id': e.employee.id,
                    'worker_eid': e.employee.eid,
                    'worker_name': e.employee.name,
                    'row_code': e.row_code,
                    'totalEarn': totalEarn,
                    'detail': detail,
                })
            })
            uniqueAvailableBrand[d.date] = removeDuplicates(findAvailableBrand)
        });
        // console.log(dataDetail)
        // console.log(uniqueAvailableBrand)
        dataTable(date)
    }

    function loadingReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/loading.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function dataTable(date) {
        dateClicked = date
        // var filterDataDetail = dataDetail.filter((v, k) => {
        //     if (v.date == date) return true
        // })
        var checkDate = uniqueAvailableBrand[date]
        $('.btnSlide').removeClass('btn-success text-white').addClass('btn-outline-success')
        $('#btnSlide' + date + '').addClass('btn-success text-white')
        var html = ''
        if (checkDate.length) {
            html += '<table class="table table-bordered table-hover table-sm small w-100 mt-3" id="tableDetail">'
            html += '<thead id="headTable">'
            html += '</thead>'
            html += '<tbody id="bodyTable">'
            html += '</tbody>'
            html += '<tfoot id="footTable">'
            html += '</tfoot>'
            html += '</table>'
        } else {
            html += '<div class="m-5">'
            html += '<p class="text-center"><i>Tidak ada data</i></p>'
            html += '</div>'
        }
        $('#dataTable').html(html)
        nameDetail(date)
    }

    function nameDetail(date) {
        var dataDetail = {}
        headTable(date)
    }


    function headTable(date) {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">#</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">EID</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Nama</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">No. Meja</th>'
        var a = 0
        var html_below = ''
        // console.log(uniqueAvailableBrand)
        data_report.reportResultPersonEarn.headerStepProduct.forEach(e => {
            e.products.forEach(el => {
                if (showFitData) {
                    var findAvailableBrands = uniqueAvailableBrand[date].find((v, k) => {
                        if (e.id == v.step_id && el.id == v.product_id) return true
                    })
                } else {
                    var findAvailableBrands = true
                }
                if (findAvailableBrands) {
                    html += '<th class="align-middle px-2 bg-head-' + a + '">' + e.name + '</th>'
                    html_below += '<th class="align-middle bg-head-' + a + '">' + el.name + '</th>'
                }
            });
            a++
        });
        html += '<th class="align-middle bg-head-total" rowspan="2">Jumlah<br>Total</th>'
        html += '</tr>'

        html += '<tr>'
        html += html_below
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable(date)
    }

    function bodyTable(date) {
        findAvailableBrand = []
        var footData = {}
        var footTotal = 0
        var html = ''
        var no = 1
        var filterDataDetail = dataDetail.filter((v, k) => {
            if (v.date == date) return true
        })
        filterDataDetail.forEach(e => {
            html += '<tr>'
            html += '<td class="text-center small-text" style="background-color: white;">' + no++ + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.worker_eid + '</td>'
            html += '<td class="text-center small-text text-nowrap" style="background-color: white;">' + e.worker_name + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.row_code + '</td>'
            e.detail.forEach(el => {
                var qtyName = el.qty
                if (qtyName != '-') {
                    qtyName = number_format(roundToTwo(el.qty))
                }
                if (showFitData) {
                    var findFitData = uniqueAvailableBrand[date].find((v, k) => {
                        if (el.step_id == v.step_id && el.product_id == v.product_id) return true
                    })
                    if (findFitData) {
                        html += '<td class="text-end small-text bg-body-' + el.a + '">' + qtyName + '</td>'
                        if (el.qty == '-') {
                            el.qty = 0
                        }
                        if (!footData[el.step_id + '' + el.product_id]) {
                            footData[el.step_id + '' + el.product_id] = parseFloat(el.qty)
                        } else {
                            footData[el.step_id + '' + el.product_id] += parseFloat(el.qty)
                        }
                    }
                } else {
                    html += '<td class="text-end small-text bg-body-' + el.a + '">' + qtyName + '</td>'
                    if (el.qty == '-') {
                        el.qty = 0
                    }
                    if (!footData[el.step_id + '' + el.product_id]) {
                        footData[el.step_id + '' + el.product_id] = parseFloat(el.qty)
                    } else {
                        footData[el.step_id + '' + el.product_id] += parseFloat(el.qty)
                    }
                }
            });
            footTotal += parseFloat(e.totalEarn)
            html += '<td class="text-end small-text bg-body-total">' + number_format(roundToTwo(e.totalEarn)) + '</td>'
            html += '</tr>'
        });
        console.log(footData)
        let values = Object.values(footData);
        const desiredLength = Object.keys(footData).length;
        const resultArray = values.concat(Array(desiredLength).fill(0)).slice(0, desiredLength);
        $('#bodyTable').html(html)
        footTable(date, footData, footTotal)
    }

    function footTable(date, footData, footTotal) {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" style="background-color: white;"></th>'
        html += '<th class="align-middle" style="background-color: white;"></th>'
        html += '<th class="align-middle" style="background-color: white;"></th>'
        html += '<th class="align-middle" style="background-color: white;">Total</th>'
        data_report.reportResultPersonEarn.headerStepProduct.forEach(e => {
            e.products.forEach(el => {
                if (showFitData) {
                    var findAvailableBrands = uniqueAvailableBrand[date].find((v, k) => {
                        if (e.id == v.step_id && el.id == v.product_id) return true
                    })
                } else {
                    var findAvailableBrands = true
                }
                if (findAvailableBrands) {
                    console.log(e.id + '' + el.id)
                    if (footData[e.id + '' + el.id]) {
                        // html += '<th class="align-middle px-2 bg-head-' + a + '">' + e.name + '</th>'
                        html += '<th class="align-middle small-text text-end" style="background-color: white;">' + number_format(footData[e.id + '' + el.id]) + '</th>'
                    }
                }
            });
        });
        // for (let i = 0; i < footData.length; i++) {
        //     html += '<th class="align-middle text-end" style="background-color: white;">' + number_format(footData[i]) + '</th>'
        // }
        html += '<th class="align-middle small-text text-end" style="background-color: white;">' + number_format(footTotal) + '</th>'
        html += '</tr>'
        $('#footTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedColumns: {
                left: 4,
                right: 1,
            },
        })
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function removeDuplicates(arr) {
        const seen = {}; // Objek untuk melacak kombinasi yang sudah muncul

        return arr.filter(item => {
            const key = `${item.step_id}-${item.product_id}`; // Buat kunci unik dari kombinasi step_id dan product_id
            if (seen[key]) {
                return false; // Jika kombinasi ini sudah muncul, abaikan item ini
            } else {
                seen[key] = true; // Tandai kombinasi ini sebagai sudah muncul
                return true; // Simpan item ini
            }
        });
    }

    function cetakReport(x, y) {
        eval('var url = "<?= base_url() ?>report/' + x + 'PersonEarnVerpack"')
        var params = "*$" + date_start + "*$" + date_end + "*$" + machineId + "*$" + dataProfile + "*$" + y;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>