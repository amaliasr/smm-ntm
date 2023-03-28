<style>
    html {
        scroll-behavior: smooth;
    }

    @-webkit-keyframes fadeAnimation {
        0% {
            opacity: 0;
        }

        25% {
            opacity: 0.25;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
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
        background: rgb(194, 25, 162);
        background: linear-gradient(66deg, rgba(194, 25, 162, 1) 0%, rgba(58, 63, 111, 1) 46%, rgba(15, 232, 219, 1) 100%);
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

    .vertical-text {
        writing-mode: vertical-rl;
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        vertical-align: middle;
        display: inline-block;
    }

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FEC868;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .top-25 {
        top: 25% !important;
    }

    .start-25 {
        left: 25% !important;
    }

    .start-10 {
        left: 10% !important;
    }

    .w-35 {
        width: 35% !important;
    }

    .bd-callout-0 {
        border-left-color: #9b5fe0;
        border-left-width: 10px;
    }

    .bd-callout-1 {
        border-left-color: #16a4d8;
        border-left-width: 10px;
    }

    .bd-callout-2 {
        border-left-color: #60dbe8;
        border-left-width: 10px;
    }

    .bd-callout-3 {
        border-left-color: #8bd346;
        border-left-width: 10px;
    }

    .bd-callout-4 {
        border-left-color: #efdf48;
        border-left-width: 10px;
    }

    .bd-callout-5 {
        border-left-color: #f9a52c;
        border-left-width: 10px;
    }

    .bd-callout-6 {
        border-left-color: #d64e12;
        border-left-width: 10px;
    }

    .bg-callout-0 {
        background-color: #9b5fe0;
        opacity: 0.5;
    }

    .bg-callout-1 {
        background-color: #16a4d8;
        opacity: 0.5;
    }

    .bg-callout-2 {
        background-color: #60dbe8;
        opacity: 0.5;
    }

    .bg-callout-3 {
        background-color: #8bd346;
        opacity: 0.5;
    }

    .bg-callout-4 {
        background-color: #efdf48;
        opacity: 0.5;
    }

    .bg-callout-5 {
        background-color: #f9a52c;
        opacity: 0.5;
    }

    .bg-callout-6 {
        background-color: #d64e12;
        opacity: 0.5;
    }

    .table {
        border-color: #808080 !important;
    }

    .bg-dark-grey {
        background-color: #808080;
        color: while;
    }

    .text-black {
        color: black;
    }


    .card-daily {
        transition: transform 0.2s ease;
    }

    .card-daily :hover {
        transform: scale(1.1);
    }

    .fixed-right {
        position: fixed;
        right: 0;
        width: 120px;
        z-index: 1030;
    }

    .font-small {
        font-size: 9px;
    }

    .bg-gradient-production {
        background-color: #1C315E !important;
        background-image: linear-gradient(135deg,
                #1C315E 0%,
                rgba(34, 124, 112, 0.8) 100%) !important;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-production pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            <?= $head_title ?>
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0 shadow-none" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama" autocomplete="off">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
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
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <!-- side count -->
                                    <div class="fixed-right">
                                        <div class="card shadow-sm d-none" id="targetPane">
                                            <div class="card-body p-4 pt-3 pb-1">
                                                <div class="row p-0">
                                                    <div class="col-12 text-center p-0 pb-2">
                                                        <p class="m-0 text-orange" style="font-size: 14px;"><b>TARGET</b></p>
                                                    </div>
                                                    <div class="col-12 p-0 text-center">
                                                        <div class="row p-0" id="detailTargetPane">
                                                            <div class="col-12 p-0 border-top text-center pb-2 pt-2">
                                                                <p class="m-0" style="font-size: 9px;">Tidak Ada Target yang Dibuat</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="card-footer text-center p-2 bg-white">

                                                <button type="button" class="btn btn-success p-2 mb-1 w-100" style="font-size: 11px;"><i class="fa fa-save me-1"></i>Simpan</button>

                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- side count -->
                                    <div class="col-12" id="tampilDetailPembayaran">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav class="createPane">
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="changeTab('skm')">SKM
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle skmCircleDanger"></span>
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle skmCircleSuccess d-none"></span>
                                                        </button>
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="changeTab('skt')">SKT
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle sktCircleDanger"></span>
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle sktCircleSuccess d-none"></span>
                                                        </button>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card shadow-none mb-4 mt-4 small position-relative createPane">
                                                                <h3><span class="position-absolute top-0 start-10 translate-middle badge  bg-primary">Main Planning </span></h3>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Date Range</b></p>
                                                                            <input type="text" class="form-control form-control-sm litepicker mb-2" required="required" id="dateRange" disabled>
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Target Produksi</b></p>
                                                                            <div id="createTargetProduksi">
                                                                            </div>
                                                                            <button type="button" class="btn btn-outline-success btn-sm small w-100 p-3" onclick="targetProduksi()"><i class="fa fa-plus me-2"></i> Target Produksi Baru</button>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Customize Machine</b></p>
                                                                            <div class="card shadow-none">
                                                                                <div class="card-body">
                                                                                    <!-- <div class="row d-flex align-items-center h-100">
                                                                                        <div class="col text-center">
                                                                                            <i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat membuka Preview</i>
                                                                                        </div>
                                                                                    </div> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card shadow-none mb-4 mt-4 small position-relative">
                                                                <h3><span class="position-absolute top-0 start-10 translate-middle badge  bg-primary">Daily Planning</span></h3>
                                                                <div class="card-body">
                                                                    <div class="row createPane">
                                                                        <div class="col-12 col-md-9 mb-2">
                                                                            <h5 class="mt-3" id="conveying-meaning-to-assistive-technologies">Create Daily of Plan Production</h5>
                                                                            <p class="mb-3" style="font-size: 11px;">Setelah mengisi Date Range pada Main Planning, maka akan otomatis membuat tabel Planning per hari nya. Target Produksi dapat anda isi jika terdapat target untuk memudahkan pengisian target produksi ditiap harinya. Anda dapat melihat Target nya pada panel sebelah kanan</p>
                                                                        </div>
                                                                        <div class="col-12 col-md-3 mb-2 text-center align-self-center">
                                                                            <button type="button" class="btn btn-sm btn-primary h-100" onclick="automaticPlan()"><i class="fa fa-refresh me-2"></i>Automatic Plan</button>
                                                                        </div>
                                                                    </div>
                                                                    <div id="dataDailyPlanning">
                                                                    </div>

                                                                    <button type="button" class="btn btn-success float-end btnSimpan" onclick="saveAsIndividual()"><i class="fa fa-save me-2"></i> Simpan SKM</button>
                                                                    <button type="button" class="btn btn-outline-success float-end me-2 btnSimpan createPane"><i class="fa fa-save me-2"></i> Simpan Semua</button>

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
<!-- Modal -->
<div class="modal fade" id="modal3" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog3">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader3">

            </div>
            <div class="modal-body" id="modalBody3">

            </div>
            <div class="modal-footer" id="modalFooter3">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"></script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var id_plan = '<?= $id_plan ?>'
    var type_plan = '<?= $type ?>'
    var data_user = ""
    var data_master = ""
    var data_plan = ""
    var data_machine_capability = ""
    var data_skm = {}
    var data_skt = {}
    var jenis_produksi = "skm"
    var customDate = []

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    function clearModal2() {
        $('#modalDialog2').removeClass();
        $('#modalDialog2').removeAttr('style');
        $('#modalHeader2').html('');
        $('#modalBody2').html('');
        $('#modalFooter2').html('');
    }

    function getDateFromRange(startDate, endDate) {
        const dates = []
        let currentDate = startDate
        const addDays = function(days) {
            const date = new Date(this.valueOf())
            date.setDate(date.getDate() + days)
            return date
        }
        while (currentDate <= endDate) {
            dates.push(currentDate)
            currentDate = addDays.call(currentDate, 1)
        }
        return dates
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })
    var position = $('#tampilDetailPembayaran').offset().top;

    $(document).scroll(function() {
        fadeOfTarget()
    });

    function fadeOfTarget() {
        var y = $(this).scrollTop();
        if (y > position) {
            $('#targetPane').fadeIn().removeClass('d-none')
        } else {
            $('#targetPane').fadeOut().addClass('d-none')
        }
        return false
    }

    function changeTab(stat) {
        jenis_produksi = stat
        if (jenis_produksi == "skm") {
            // if (data_skm['dateStart'] == undefined) {
            clearForm()
            // }
            var data = data_skm
            customDate = data_skm['customDate']
        } else {
            // if (data_skt['dateStart'] == undefined) {
            clearForm()
            // }
            var data = data_skt
            customDate = data_skt['customDate']
        }
        $.each(customDate, function(key, value) {
            changeColorIconCustomDay(value.id)
        })
        if (data['productionPlanGoal'] != undefined) {
            $.each(data['productionPlanGoal'], function(key, value) {
                targetProduksi(value['qty'], value['item_id_product'])
            })
        }
        getDateRange()
    }

    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    $(document).ready(function() {
        if (id_plan != '') {
            $('.createPane').remove()
            $.ajax({
                url: "<?= api_produksi('getProductionPlanRevision'); ?>",
                method: "GET",
                dataType: 'JSON',
                data: {
                    productionPlanId: id_plan,
                    productionTypeId: type_plan,
                },
                error: function(xhr) {},
                beforeSend: function() {},
                success: function(response) {
                    $('.form-control').removeAttr('disabled')
                    data_plan = response['data']
                    jenis_produksi = data_plan.production_type.name.toLowerCase()
                    clearForm()
                    getData()
                }
            })
        } else {
            clearForm()
            fadeOfTarget()
            getDateRange()
        }
    })

    function clearForm() {
        $('#dateRange').val('')
        $('#createTargetProduksi').empty()
        $('#dataDailyPlanning').html('<div class="row d-flex align-items-center" style="height: 200px;"><div class="col text-center p-5"><i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat mengisi Daily Planning</i></div></div>')
        noTarget = 0;
        $('#detailTargetPane').html('<div class="col-12 p-0 border-top text-center pb-2 pt-2"><p class="m-0" style="font-size: 9px;">Tidak Ada Target yang Dibuat</p></div>')
        $('.totalMesin').empty()
    }

    var dateStart = ""
    var dateEnd = ""

    function getDateRange() {
        dateStart = ""
        dateEnd = ""
        $('#dateRange').val('')
        if (jenis_produksi == 'skm') {
            if (data_skm['dateEnd'] != undefined && data_skm['dateStart'] != undefined) {
                dateStart = data_skm['dateStart']
                dateEnd = data_skm['dateEnd']
                createDailyPlanning(dateStart, dateEnd)
            }
        } else {
            if (data_skt['dateEnd'] != undefined && data_skt['dateStart'] != undefined) {
                dateStart = data_skt['dateStart']
                dateEnd = data_skt['dateEnd']
                createDailyPlanning(dateStart, dateEnd)
            }
        }
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: dateStart,
            endDate: dateEnd,
            format: "DD MMMM YYYY",
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    dateStart = date1['dateInstance']
                    dateEnd = date2['dateInstance']
                    if (jenis_produksi == 'skm') {
                        data_skm['dateStart'] = dateStart
                        data_skm['dateEnd'] = dateEnd
                    } else {
                        data_skt['dateStart'] = dateStart
                        data_skt['dateEnd'] = dateEnd
                    }
                    customDate = []
                    createCode(dateStart, dateEnd)
                    // $('#dateRange').val(formatInternationalDate(dateStart) + ' - ' + formatInternationalDate(dateEnd))
                    createDailyPlanning(dateStart, dateEnd)
                });
            },
        })
        getData()
    }

    function getData() {
        if (data_user == "") {
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
                    master()
                }
            })
        } else {
            master()
        }
    }

    function master() {
        if (data_master == "") {
            $.ajax({
                url: "<?= api_produksi('loadPageProductionPlanCreate'); ?>",
                method: "GET",
                dataType: 'JSON',
                error: function(xhr) {},
                beforeSend: function() {},
                success: function(response) {
                    $('.form-control').removeAttr('disabled')
                    data_master = response['data']
                    data_machine_capability = response['machineCapability']
                    if (id_plan != '') {
                        dateStart = data_plan.date_start
                        dateEnd = data_plan.date_end
                        createDailyPlanning(data_plan.date_start, data_plan.date_end)
                    }
                }
            })
        }
    }

    var anyMachine = []

    function createDailyPlanning(dateStart, dateEnd) {
        var data = ""
        $('#dataDailyPlanning').empty()
        anyMachine = []
        var html = ""
        var date = getDateFromRange(new Date(dateStart), new Date(dateEnd))
        var a = 0
        var c = 0
        date.forEach(function(dates) {
            html += '<div class="card shadow-sm bd-callout-' + a + ' mb-5 small" id="card_search' + c + '">'
            html += '<div class="card-body">'

            html += '<div class="row pb-2">'
            html += '<div class="col-1 pe-0">'
            html += '<h6><p class="m-0"><b><i class="fa fa-calendar-o "></i></b></p></h6>'
            html += '</div>'
            html += '<div class="col-11 ps-0">'
            html += '<h6><p class="m-0"><b class="text_search" data-id="' + c + '">' + formatDateIndonesia(dates) + '</b></p></h6>'
            html += '</div>'
            html += '</div>'

            html += '<div class="row pb-2">'
            html += '<div class="col-1 pe-0">'
            html += '<h6><p class="m-0"><b><i class="fa fa-clock-o"></i></b></p></h6>'
            html += '</div>'
            html += '<div class="col-11 ps-0">'
            html += '<div class="row">'
            $.each(data_master[jenis_produksi].shift[0].shift_list, function(key, value) {
                html += '<div class="col-auto">'
                html += '<div class="card mb-1 shadow-none shiftCard shiftCard' + c + '" data-date="' + dates + '" data-id_date="' + c + '" data-id="' + value.id + '" style="cursor:pointer;" id="shiftCard' + c + key + '" onclick="chooseShift(' + c + ',' + key + ')">'
                html += '<div class="card-body p-2">'
                html += '<div class="row">'
                html += '<div class="col-auto align-self-center">'
                html += '<i class="fa fa-check-square text-light"></i>'
                html += '</div>'
                html += '<div class="col ps-0">'
                html += '<b class="me-2">' + value.name + '</b>'
                html += (value.start_time).substring(0, 5) + ' - ' + (value.end_time).substring(0, 5)
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })

            html += '</div>'
            html += '</div>'
            html += '</div>'

            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-hover table-sm mt-3">'
            html += '<thead>'
            html += '<tr class="bg-grey text-dark">'
            html += '<th class="p-2 font-small">Mesin</th>'
            html += '<th class="p-2 font-small">Satuan</th>'
            var jumlah = (data_master[jenis_produksi]['product'].length + 3)
            $.each(data_master[jenis_produksi]['product'], function(key, value) {
                html += '<th class="p-2 font-small">' + value['code'] + '</th>'
            })
            html += '<th class="p-2 font-small">TOTAL</th>'
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            $.each(data_master[jenis_produksi]['machine'], function(key, value) {
                html += '<tr class="bg-callout-' + a + ' text-black">'
                html += '<td colspan="' + jumlah + '" class="p-2 font-small"><b>' + value['type_name'] + '</b></td>'
                html += '</tr>'
                $.each(value['machine'], function(keys, values) {
                    if (a == 0) {
                        anyMachine.push({
                            'type_id': value.type_id,
                            'type_name': value.type_name,
                            'machine_id': values.id,
                            'machine_code': values.code,
                            'machine_name': values.name,
                            'unit_name': values.unit_name,
                            'unit_id': values.unit_id,
                            'unit_detail': values.unit_detail
                        })
                    }
                    html += '<tr>'
                    html += '<td class="font-small">' + values['code'] + '</td>'
                    html += '<td class="font-small">' + values['unit_name'] + '</td>'
                    $.each(data_master[jenis_produksi]['product'], function(keys2, values2) {
                        if (jenis_produksi == 'skm') {
                            data = data_skm
                        } else {
                            data = data_skt
                        }
                        var obj = ""
                        // console.log(data['detail'])
                        if (data['productionPlanDetail'] != undefined) {
                            // console.log(values['id'], formatDate(dates), values2['id'])
                            obj = data['productionPlanDetail'].find((value3, key3) => {
                                if (value3.machine_id === values['id'] && value3.date === formatDate(dates) && value3.item_id_product === parseInt(values2['id'])) return true
                            })
                            if (obj != undefined) {
                                obj = obj['qty']
                            } else {
                                obj = ""
                            }
                        }
                        // console.log(obj)
                        html += '<td class="p-0 bg-light font-small allfieldDPlan fieldType' + value['type_name'] + ' fieldDPlan' + values2['id'] + '"><input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:9px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="' + values2['code'] + ' for ' + values['code'] + '" data-produk="' + values2['id'] + '" data-mesin="' + values['id'] + '" data-unit="' + values['unit_id'] + '" data-tanggal="' + formatDate(dates) + '" id="jumlahPlanning' + values2['id'] + values['id'] + formatDate(dates) + '" value="' + obj + '"></td>'
                    })
                    html += '<td class="align-self-center totalMesin" style="font-size:14px;font-weight:bold;text-align:right;" id="totalMesin' + values['id'] + formatDate(dates) + '"></td>'
                    html += '</tr>'
                })
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            a++
            c++
            if (a == 7) {
                a = 0
            }
        })
        $('#dataDailyPlanning').html(html)
        $('.nominal').number(true);
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        var b = 0
        date.forEach(function(dates) {
            $.each(data_master[jenis_produksi].shift[0].shift_list, function(key, value) {
                if (value.is_default == 1) {
                    colorShift(b, key)
                }
            })
            b++
        })
        if (data['productionPlanGoal'] != undefined) {
            $.each(data['productionPlanGoal'], function(key, value) {
                changeColorTarget(value['item_id_product'])
            })
        }
        if (id_plan != '') {
            arrangedVariableEdit()
        } else {
            simpanProdukTarget()
        }
    }

    function chooseShift(a, id) {
        colorShift(a, id)
        simpanJumlahPlanning()
    }

    function colorShift(a, id) {
        var data = $('#shiftCard' + a + id).hasClass('activeItem')
        if (data == true) {
            // remove
            $('#shiftCard' + a + id).removeClass('activeItem bg-secondary text-white')
        } else {
            // insert
            $('#shiftCard' + a + id).addClass('activeItem bg-secondary text-white')
        }
    }

    $(document).on('keyup', '.jumlahPlanning', function(e) {
        simpanJumlahPlanning('manual')

    })

    function automaticPlan() {
        simpanProdukTarget()
    }

    function simpanJumlahPlanning(auto = '') {
        simpanProdukTarget(auto)
    }

    var noTarget = 0;

    function targetProduksi(jumlah = "", id_item = "") {
        var html = ""
        html += '<div class="row mb-2" id="fieldTarget' + noTarget + '">'
        html += '<div class="col-4">'
        html += '<select id="produkTarget' + noTarget + '" class="form-control form-control-sm produkTarget" required="required">'
        html += '<option value="" selected disabled>Pilih Produk</option>'
        $.each(data_master[jenis_produksi]['product'], function(key, value) {
            var select = ""
            if (value['id'] == id_item) {
                select = 'selected'
            }
            var index = value.unit_detail.findIndex(x => x.name == "Stick");
            html += '<option value="' + value['id'] + '" data-kode="' + value['code'] + '" data-stick="' + value.unit_detail[index].unit_value + '" data-stick_unit_id="' + value.unit_detail[index].id + '" data-num_stick="' + value.stick + '" data-operator="' + value.unit_detail[index].operator + '" ' + select + '>' + value['code'] + '</option>'
        })
        html += '</select>'
        html += '</div>'
        html += '<div class="col-2 p-0">'
        html += '<input type="text" id="jumlahTarget' + noTarget + '" class="form-control form-control-sm jumlahTarget" value="' + jumlah + '">'
        html += '</div>'
        html += '<div class="col-2 align-self-center">Box</div>'
        html += '<div class="col-4 text-end">'
        html += '<button type="button" class="btn btn-sm shadow-none" onclick="addCustomDate(' + noTarget + ')"><i class="fa fa-clock-o" id="iconCustomDay' + noTarget + '"></i></button>'
        html += '<button type="button" class="btn btn-danger btn-sm shadow-none" onclick="removeFieldTarget(' + noTarget + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#createTargetProduksi').append(html)
        noTarget++
    }

    function removeFieldTarget(no) {
        $('#fieldTarget' + no).remove()
        simpanProdukTarget()
    }

    function addCustomDate(no) {
        var date = getDateFromRange(new Date(dateStart), new Date(dateEnd))
        var data = customDate.find((value, key) => {
            if (value.id == no) return true
        })
        var tanggalMulai = ''
        var tanggalSelesai = ''
        if (data != undefined) {
            tanggalMulai = data.tanggal_mulai
            tanggalSelesai = data.tanggal_selesai
        }

        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Custom Target ' + $('#produkTarget' + no).find(':selected').data('kode') + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-9">'
        html_body += '<label class="form-check-label" for="switchTanggalMulai"><p class="mb-1 lh-1"><b>Tanggal Mulai</b></p><p class="font-small lh-1 m-0 p-0">Input tanggal mulai produksi, dapat memberi prioritas dibandingkan tanpa tanggal mulai</p></label>'
        html_body += '</div>'
        html_body += '<div class="col-3 text-end align-self-center">'
        html_body += '<div class="form-check form-switch">'
        var check = (tanggalMulai == '') ? '' : 'checked'
        var dnone = (tanggalMulai == '') ? 'd-none' : ''
        html_body += '<input class="form-check-input shadow-none float-end" type="checkbox" id="switchTanggalMulai" onchange="customPlanProduk(' + no + ')" ' + check + '>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-9 ' + dnone + '" id="fillTanggalMulai">'
        html_body += '<div class="input-group input-group-sm mt-1">'
        html_body += '<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-calendar"></i></span>'
        html_body += '<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="inputTanggalMulai"  value="' + tanggalMulai + '">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'

        html_body += '<div class="col-9">'
        html_body += '<label class="form-check-label" for="switchTanggalSelesai"><p class="mb-1 lh-1"><b>Tanggal Selesai Produksi</b></p><p class="font-small lh-1 m-0 p-0">Input tanggal selesai produksi, dapat memberi batas selesai produksi sesuai dengan input</p></label>'
        html_body += '</div>'
        html_body += '<div class="col-3 text-end align-self-center">'
        html_body += '<div class="form-check form-switch">'
        var check = (tanggalSelesai == '') ? '' : 'checked'
        var dnone = (tanggalSelesai == '') ? 'd-none' : ''
        html_body += '<input class="form-check-input shadow-none float-end" type="checkbox" id="switchTanggalSelesai" onchange="customPlanProduk(' + no + ')" ' + check + '>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-9 ' + dnone + '" id="fillTanggalSelesai">'
        html_body += '<div class="input-group input-group-sm mt-1">'
        html_body += '<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-calendar"></i></span>'
        html_body += '<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="inputTanggalSelesai" value="' + tanggalSelesai + '">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'

        html_body += '<div class="col-9">'
        html_body += '<p class="mb-1 lh-1"><b>Custom Day</b></p><p class="font-small lh-1 m-0 p-0">Pilihan hari tertentu yang dapat melakukan Plan dari suatu Produk tertentu</p>'
        html_body += '<br>'
        html_body += '<div id="listDayCustom">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-3 text-end align-self-center">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        // console.log(allowedDates)
        var allowedDates = []
        date.forEach(function(dates) {
            allowedDates.push(formatDate(dates))
        })
        new Litepicker({
            element: document.getElementById('inputTanggalMulai'),
            singleMode: true,
            firstDay: 0,
            allowRepick: true,
            format: "DD MMMM YYYY",
            lockDaysFilter: (date1, date2, pickedDates) => {
                return !allowedDates.includes(date1.format('YYYY-MM-DD'));
            },
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    $('inputTanggalMulai').val(date1.format('YYYY-MM-DD'))
                    customPlanProduk(no)
                });
            },
        })
        new Litepicker({
            element: document.getElementById('inputTanggalSelesai'),
            singleMode: true,
            firstDay: 0,
            allowRepick: true,
            format: "DD MMMM YYYY",
            lockDaysFilter: (date1, date2, pickedDates) => {
                return !allowedDates.includes(date1.format('YYYY-MM-DD'));
            },
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    $('inputTanggalSelesai').val(date1.format('YYYY-MM-DD'))
                    customPlanProduk(no)
                });
            },
        })
        $('#modalFooter').addClass('d-none');
        listDateCustom(no)
        simpanProdukTarget()
    }

    function listDateCustom(id) {
        var html = ''
        var a = 0
        var date = getDateFromRange(new Date(dateStart), new Date(dateEnd))
        var data = customDate.find((value, key) => {
            if (value.id == id) return true
        })
        var custom_day = []
        if (data != undefined) {
            custom_day = data.custom_day
        }
        if (date[0] != '') {
            date.forEach(function(dates) {
                var check = ''
                for (let i = 0; i < custom_day.length; i++) {
                    if (custom_day[i] == formatDate(dates)) {
                        check = 'checked'
                    }
                }
                html += '<div class="form-check">'
                html += '<input class="form-check-input shadow-none checkTanggal" type="checkbox" value="' + formatDate(dates) + '" id="checkTanggal' + a + '" onchange="customPlanProduk(' + id + ')" ' + check + '>'
                html += '<label class="form-check-label" for="checkTanggal' + a + '">' + formatDateIndonesia(dates) + '</label>'
                html += '</div>'
                a++
            })
        } else {
            html += '<i class="font-small text-danger">*) Anda Belum Memilih Date Range </i>'
        }
        $('#listDayCustom').html(html)
    }

    function customPlanProduk(id) {
        var id_item = $('#produkTarget' + id).find(':selected').val()
        var tanggalMulaiCheck = $('#switchTanggalMulai:checked').val()
        var tanggalMulai = ''
        var tanggalSelesai = ''
        if (tanggalMulaiCheck == 'on') {
            $('#fillTanggalMulai').removeClass('d-none')
            tanggalMulai = $('#inputTanggalMulai').val()
        } else {
            $('#fillTanggalMulai').addClass('d-none')
        }
        var tanggalSelesaiCheck = $('#switchTanggalSelesai:checked').val()
        if (tanggalSelesaiCheck == 'on') {
            $('#fillTanggalSelesai').removeClass('d-none')
            tanggalSelesai = $('#inputTanggalSelesai').val()
        } else {
            $('#fillTanggalSelesai').addClass('d-none')
        }
        var customDays = $('.checkTanggal:checked').map(function() {
            return $(this).val();
        }).get();
        var index = customDate.findIndex(x => x.id == id);
        if (index == -1) {
            customDate.push({
                'id': id,
                'id_item': id_item,
                'tanggal_mulai': tanggalMulai,
                'tanggal_selesai': tanggalSelesai,
                'custom_day': customDays
            })
        } else {
            var rem = customDate.filter(arr => arr.id != id);
            customDate = rem
            customDate.push({
                'id': id,
                'id_item': id_item,
                'tanggal_mulai': tanggalMulai,
                'tanggal_selesai': tanggalSelesai,
                'custom_day': customDays
            })
        }
        changeColorIconCustomDay(id)
    }

    function changeColorIconCustomDay(id) {
        var data = customDate.find((value, key) => {
            if (value.id == id) return true
        })
        $('#iconCustomDay' + id).removeClass('text-success')
        if (data != undefined) {
            if (data.tanggal_mulai == '' && data.tanggal_selesai == '' && data.custom_day.length == 0) {
                $('#iconCustomDay' + id).removeClass('text-success')
            } else {
                $('#iconCustomDay' + id).addClass('text-success')
            }
        }
        simpanProdukTarget()
    }
    $(document).on('change', '.produkTarget', function(e) {
        simpanProdukTarget()
    })
    $(document).on('keyup', '.jumlahTarget', function(e) {
        simpanProdukTarget()
    })

    function changeColorTarget(id) {
        $('.fieldDPlan' + id).removeClass('bg-light')
    }

    function arrangedVariableEdit() {
        var array = []
        data_plan.data.forEach(b => {
            // tanggal
            b.data.forEach(c => {
                // machine type
                c.data.forEach(d => {
                    // machine
                    d.data.forEach(e => {
                        // product
                        changeColorTarget(e.product.id)
                        $('#jumlahPlanning' + e.product.id + d.machine.id + formatDate(b.date)).val(e.qty)
                    });
                });
            });
        });
        simpanProdukTarget()
    }

    function simpanProdukTarget(auto = '', arranged = '') {
        if (auto == '' && id_plan == '') {
            $('.jumlahPlanning').val('')
        }
        if (id_plan == '') {
            $('.allfieldDPlan').addClass('bg-light')
        }
        var obj = []
        var objPlan = []
        var objShift = []

        // TARGET
        var produk = $('.produkTarget').map(function() {
            return $(this).val();
        }).get();
        var kode = $('.produkTarget').map(function() {
            return $(this).find(':selected').data('kode');
        }).get();
        var operator = $('.produkTarget').map(function() {
            return $(this).find(':selected').data('operator');
        }).get();
        var stick = $('.produkTarget').map(function() {
            return $(this).find(':selected').data('stick');
        }).get();
        var num_stick = $('.produkTarget').map(function() {
            return $(this).find(':selected').data('num_stick');
        }).get();
        var stick_unit_id = $('.produkTarget').map(function() {
            return $(this).find(':selected').data('stick_unit_id');
        }).get();
        var jumlah = $('.jumlahTarget').map(function() {
            return $(this).val();
        }).get();

        // PLAN
        var jumlahPlan = $('.jumlahPlanning').map(function() {
            return $(this).val();
        }).get();
        var produkPlan = $('.jumlahPlanning').map(function() {
            return $(this).data('produk');
        }).get();
        var mesin = $('.jumlahPlanning').map(function() {
            return $(this).data('mesin');
        }).get();
        var tanggal = $('.jumlahPlanning').map(function() {
            return $(this).data('tanggal');
        }).get();
        var unit = $('.jumlahPlanning').map(function() {
            return $(this).data('unit');
        }).get();

        // SHIFT
        var shift_date = $('.shiftCard').map(function() {
            return $(this).data('date');
        }).get();
        var shift_id = $('.shiftCard').map(function() {
            return $(this).data('id');
        }).get();
        var shift_date_id = $('.shiftCard').map(function() {
            return $(this).data('id_date');
        }).get();
        var hasClass = $('.shiftCard').map(function() {
            return $(this).hasClass('activeItem');
        }).get();
        for (let i = 0; i < jumlahPlan.length; i++) {
            if (jumlahPlan[i] != "") {
                objPlan.push({
                    'qty': jumlahPlan[i],
                    'item_id_product': produkPlan[i],
                    'machine_id': mesin[i],
                    'date': tanggal[i],
                    'unit_id': unit[i],
                })
            }
        }
        for (let i = 0; i < shift_date.length; i++) {
            if (hasClass[i] == true) {
                objShift.push({
                    'date': shift_date[i],
                    'id': 1,
                    // 'id': shift_id[i],
                    'date_id': shift_date_id[i],
                    'click': hasClass[i],
                    'num': 1,
                })
            }
        }
        for (let i = 0; i < produk.length; i++) {
            changeColorTarget(produk[i])
            if (jumlah[i] != "") {
                obj.push({
                    'qty': jumlah[i],
                    'qty_stick': eval(jumlah[i] + operator[i] + stick[i]),
                    'qty_stick_sisa': eval(jumlah[i] + operator[i] + stick[i]),
                    'item_id_product': produk[i],
                    'kode': kode[i],
                    'stick': stick[i],
                    'stick_unit_id': stick_unit_id[i],
                    'num_stick': num_stick[i],
                    'unit_id': data_master[jenis_produksi]['goalSatuan']['id'],
                })
            }
        }
        if (jenis_produksi == 'skm') {
            data_skm['productionPlanGoal'] = obj
            data_skm['customDate'] = customDate
            data_skm['productionPlanDetail'] = objPlan
            data_skm['shiftDetail'] = objShift
            if (id_plan == '') {
                getPaneTarget(data_skm, auto, arranged)
            } else {
                pembagianPerMesin(data_skm)
            }
        } else {
            data_skt['productionPlanGoal'] = obj
            data_skt['customDate'] = customDate
            data_skt['productionPlanDetail'] = objPlan
            data_skt['shiftDetail'] = objShift
            if (id_plan == '') {
                getPaneTarget(data_skt, auto, arranged)
            } else {
                pembagianPerMesin(data_skt)
            }
        }
    }



    function getPaneTarget(data, auto, arranged) {
        var html = ""
        if (data['productionPlanGoal'] != undefined) {
            if (data['productionPlanGoal'].length > 0) {
                $.each(data['productionPlanGoal'], function(key, value) {
                    var jumlah_isi = 0
                    var text_color = ''
                    if (data['productionPlanDetail'] != undefined) {
                        var obj = data['productionPlanDetail'].filter((values, keys) => {
                            if (values.item_id_product === parseInt(value['item_id_product']) && values.unit_id === parseInt(data_master[jenis_produksi]['goalSatuan']['id'])) return true
                        })
                        jumlah_isi = obj.reduce((n, {
                            qty
                        }) => parseInt(n) + parseInt(qty), 0)
                    }
                    if (value['qty'] <= jumlah_isi) {
                        text_color = 'text-success'
                    } else {
                        text_color = 'text-danger'
                    }
                    html += '<div class="col-12 p-0 border-top text-center pb-2 pt-2">'
                    html += '<p class="m-0" style="font-size: 9px;">' + value['kode'] + '</p>'
                    html += '<p class="m-0" style="font-size: 11px;"><b><span class="' + text_color + '">' + jumlah_isi + '</span> / ' + value['qty'] + '</b></p>'
                    html += '</div>'
                })
            } else {
                html += '<div class="col-12 p-0 border-top text-center pb-2 pt-2">'
                html += '<p class="m-0" style="font-size: 9px;">Tidak Ada Target yang Dibuat</p>'
                html += '</div>'
            }
        } else {
            html += '<div class="col-12 p-0 border-top text-center pb-2 pt-2">'
            html += '<p class="m-0" style="font-size: 9px;">Tidak Ada Target yang Dibuat</p>'
            html += '</div>'
        }
        $('#detailTargetPane').html(html)
        if (jenis_produksi == 'skm') {
            if (arranged == 'true') {
                pembagianPerMesin(data)
            } else {
                kapasitasMesin(data, auto)
            }
        } else {
            pembagianPerMesin(data)
        }
    }

    var dataShiftComplete = []

    function update(arr, id, updatedData) {
        return arr.map((item) =>
            item.machine_id === machine_id ? {
                ...item,
                ...updatedData
            } : item
        )
    }

    function kapasitasMesin(data, auto) {
        // console.log(data.shiftDetail)
        // dicek dulu apakah shift sudah di klik apa belum
        if (data.shiftDetail != undefined) {
            if (data.shiftDetail.length > 0) {
                var groupShiftDetail = getDateFromRange(new Date(dateStart), new Date(dateEnd))
                // var groupShiftDetail = groupAndSum(data.shiftDetail, ['date', 'date_id'], ['num'])
                // console.log(groupShiftDetail)
                // pembentukan variable
                dataShiftComplete = []
                var a = 0
                groupShiftDetail.forEach(function(dates) {
                    // $.each(groupShiftDetail, function(key, value) {
                    var details = []
                    $.each(data.shiftDetail, function(keys, values) {
                        if (a == values.date_id) {
                            var index = data_machine_capability.findIndex(x => x.shift_id == values.id);
                            // const text = data_machine_capability[index].machine
                            // data_machine_capability[index].machine.forEach(element => {

                            // });
                            var dataMachine = []
                            data_machine_capability[index].machine.forEach(mc => {
                                var dataDetailMachine = []
                                mc.data.forEach(mcd => {
                                    var dataDetailMachineHlp = []
                                    mcd.machine_link.forEach(mcdLink => {
                                        dataDetailMachineHlp.push({
                                            'code': mcdLink.code,
                                            'machine_id': mcdLink.machine_id,
                                            'max_volume': mcdLink.max_volume,
                                            'min_volume': mcdLink.min_volume,
                                            'name': mcdLink.name,
                                            'position': mcdLink.position,
                                            'stick': mcdLink.stick,
                                            'type_id': mcdLink.type_id,
                                            'unit_id': mcdLink.unit_id,
                                        })
                                    });
                                    dataDetailMachine.push({
                                        'stick': mcd.stick,
                                        'machine_link': dataDetailMachineHlp
                                    })
                                });
                                dataMachine.push({
                                    'machine_code': mc.machine_code,
                                    'machine_id': mc.machine_id,
                                    'machine_name': mc.machine_name,
                                    'machine_position': mc.machine_position,
                                    'machine_type_id': mc.machine_type_id,
                                    'max_volume': mc.max_volume,
                                    'min_volume': mc.min_volume,
                                    'data': dataDetailMachine
                                })
                            });
                            details.push({
                                'id_shift': values.id,
                                'machine': dataMachine,
                            })
                        }
                    })
                    dataShiftComplete.push({
                        'date_key': a,
                        'date': dates.toString(),
                        'detail': details,
                    })
                    a++
                })
                pembentukanKapasitasHariMesin(data, auto)
            }
        }
    }


    function pembentukanKapasitasHariMesin(data, auto) {
        // per produk
        // check shift per hari
        $.each(dataShiftComplete, function(keys, values) {
            // detail shift
            $.each(values.detail, function(keys2, values2) {
                // detail machine in shift MAKER
                $.each(values2.machine, function(keys3, values3) {
                    // anymachine buat id masukin konversi beserta operation
                    $.each(anyMachine, function(keys4, values4) {
                        if (values3.machine_id == values4.machine_id) {
                            values3['unit_detail'] = values4.unit_detail
                            values3['unit_name'] = values4.unit_name
                            values3['sisa_mesin'] = values3.max_volume
                            $.each(values4.unit_detail, function(keys5, values5) {
                                values3['sisa_mesin_stick'] = Math.ceil(eval(values3.max_volume + values5.operator_reverse + values5.value))
                                values3['max_volume_stick'] = Math.ceil(eval(values3.max_volume + values5.operator_reverse + values5.value))
                                values3['min_volume_stick'] = Math.ceil(eval(values3.min_volume + values5.operator_reverse + values5.value))
                            })
                        }
                    })
                    // detail hlp nya
                    $.each(values3.data, function(keys5, values5) {
                        $.each(values5.machine_link, function(keys6, values6) {
                            $.each(anyMachine, function(keys4, values4) {
                                if (values6.machine_id == values4.machine_id) {
                                    values6['unit_detail'] = values4.unit_detail
                                    values6['unit_name'] = values4.unit_name
                                    values6['sisa_mesin'] = values6.max_volume
                                    $.each(values4.unit_detail, function(keys7, values7) {
                                        values6['sisa_mesin_stick'] = Math.ceil(eval(values6.max_volume + values7.operator_reverse + values7.value))
                                        values6['max_volume_stick'] = Math.ceil(eval(values6.max_volume + values7.operator_reverse + values7.value))
                                        values6['min_volume_stick'] = Math.ceil(eval(values6.min_volume + values7.operator_reverse + values7.value))
                                    })
                                }
                            })
                        })
                    })
                })
            })
        })
        // dataShiftComplete[0].detail[0].machine[0].sisa_mesin = 1;
        if (auto == 'manual') {
            pembagianPerMesin(data)
        } else {
            pembentukanConvertMesin(data)
        }
    }

    function pembentukanConvertMesin(data) {
        // console.log(data)
        // console.log(dataShiftComplete)
        // console.log(customDate)
        // check shift per hari
        // per produk
        // total stick adalah sisa
        var sisa_stick = 0
        var sisa = 0

        $.each(data.productionPlanGoal, function(key, value) {
            sisa_stick = value.qty_stick
            sisa = value.qty
            // per harian
            var tanggalMulaiStatus = ''
            var tanggalSelesaiStatus = 'mulai'
            var tanggalCustomDate = 'mulai'
            $.each(dataShiftComplete, function(keys, values) {
                // CHECK IF ANY CUSTOM DATE
                var checkCustomDate = customDate[customDate.findIndex(x => x.id_item == value.item_id_product)]
                if (checkCustomDate == undefined) {
                    // jika ga custom
                    let nameVariable = makerMachine(data, dataShiftComplete[keys], keys, data.productionPlanGoal[key], key, sisa_stick, sisa)
                    sisa_stick = nameVariable.sisa_stick
                    sisa = nameVariable.sisa
                } else {
                    // TANGGAL MULAI
                    if (checkCustomDate.tanggal_mulai != '') {
                        if (formatDate(checkCustomDate.tanggal_mulai) == formatDate(values.date)) {
                            // jika tanggal mulai diisi
                            tanggalMulaiStatus = 'mulai'
                        }
                    } else {
                        tanggalMulaiStatus = 'mulai'
                    }

                    // TANGGAL AKHIR
                    if (checkCustomDate.tanggal_selesai != '') {
                        if (formatDate(checkCustomDate.tanggal_selesai) == formatDate(values.date)) {
                            // jika tanggal selesai diisi
                            tanggalSelesaiStatus = ''
                        } else {
                            tanggalSelesaiStatus = 'mulai'
                        }
                    } else {
                        tanggalSelesaiStatus = 'mulai'
                    }

                    // CUSTOM TANGGAL
                    if (checkCustomDate.custom_day.length > 0) {
                        var ada = 'tidak'
                        for (let i = 0; i < checkCustomDate.custom_day.length; i++) {
                            if (formatDate(checkCustomDate.custom_day[i]) == formatDate(values.date)) {
                                // jika tanggal cocok
                                ada = 'ada'
                            }
                        }
                        if (ada == 'ada') {
                            tanggalSelesaiStatus = 'mulai'
                        } else {
                            tanggalSelesaiStatus = ''
                        }
                    } else {
                        tanggalCustomDate = 'mulai'
                    }

                    if (tanggalMulaiStatus == 'mulai' && tanggalSelesaiStatus == 'mulai' && tanggalCustomDate == 'mulai') {
                        let nameVariable = makerMachine(data, dataShiftComplete[keys], keys, data.productionPlanGoal[key], key, sisa_stick, sisa)
                        sisa_stick = nameVariable.sisa_stick
                        sisa = nameVariable.sisa
                    }
                }
            })
        })
        // pembagianPerMesin(data)
        simpanProdukTarget('manual', 'true')
    }

    function makerMachine(data, values, keys, value, key, sisa_stick, sisa) {
        // detail shift
        // perulangan shift
        // console.log(values)
        values.detail.forEach(values2 => {
            // cari sisa mesin yang tidak kosong
            var hasil = values2.machine.find((values3, keys3) => {
                if (values3.sisa_mesin > 0) return true
            })
            var hasilChild = hasil.data[hasil.data.findIndex(x => x.stick == value.num_stick)].machine_link
            var checkAvailableChild = hasilChild.filter((v, k) => {
                if (v.sisa_mesin > 0) return true
            })
            if (sisa_stick != 0 && checkAvailableChild.length != 0) {
                var index = values2.machine.findIndex(x => x.machine_id == hasil.machine_id);

                var pemakaian_stick = 0
                var pemakaian = 0
                var var_sisa_mesin_stick = hasil.sisa_mesin_stick
                var var_sisa_mesin = hasil.sisa_mesin
                if (sisa_stick > hasil.sisa_mesin_stick) {
                    // jika banyak sisa stik dari pada sisa mesin
                    pemakaian_stick = var_sisa_mesin_stick
                    pemakaian = var_sisa_mesin
                    sisa_stick = sisa_stick - pemakaian_stick
                    sisa = sisa - pemakaian
                    var_sisa_mesin_stick = 0
                    var_sisa_mesin = 0
                } else {
                    // jika sisa stik lebih sedikit, sisa lebih banyak
                    pemakaian_stick = sisa_stick
                    $.each(hasil.unit_detail, function(keyUnit, valuesUnit) {
                        pemakaian = Math.ceil(eval(pemakaian_stick + valuesUnit.operator + valuesUnit.value))
                    })
                    var_sisa_mesin_stick = var_sisa_mesin_stick - pemakaian_stick
                    var_sisa_mesin = var_sisa_mesin - pemakaian
                    sisa_stick = 0
                    sisa = 0
                }
                // item mesin tanggal
                // console.log(keys, keys2, index)
                $('#jumlahPlanning' + value.item_id_product + hasil.machine_id + formatDate(values.date)).val(pemakaian)
                values2.machine[index].sisa_mesin_stick = var_sisa_mesin_stick
                values2.machine[index].sisa_mesin = var_sisa_mesin
                let nameVariable = machineChild(data.productionPlanGoal[key], hasil, pemakaian_stick, formatDate(values.date), values2.machine, hasilChild)
            }
        })
        return {
            'sisa_stick': sisa_stick,
            'sisa': sisa
        };
    }

    function machineChild(data, hasil, sisa_stick, date, machine, hasilChild) {
        hasilChild.forEach(e => {
            if (e.sisa_mesin > 0 || sisa_stick > 0) {
                var pemakaian_stick = 0
                var pemakaian = 0
                var var_sisa_mesin_stick = e.sisa_mesin_stick
                var var_sisa_mesin = e.sisa_mesin
                if (sisa_stick > e.sisa_mesin_stick) {
                    // jika banyak sisa stik dari pada sisa mesin
                    pemakaian_stick = var_sisa_mesin_stick
                    pemakaian = var_sisa_mesin
                    sisa_stick = sisa_stick - pemakaian_stick
                    sisa = sisa - pemakaian
                    var_sisa_mesin_stick = 0
                    var_sisa_mesin = 0
                } else {
                    // jika sisa stik lebih sedikit, sisa lebih banyak
                    pemakaian_stick = sisa_stick
                    $.each(e.unit_detail, function(keyUnit, valuesUnit) {
                        pemakaian = Math.ceil(eval(pemakaian_stick + valuesUnit.operator + valuesUnit.value))
                    })
                    var_sisa_mesin_stick = var_sisa_mesin_stick - pemakaian_stick
                    var_sisa_mesin = var_sisa_mesin - pemakaian
                    sisa_stick = 0
                    sisa = 0
                }
                $('#jumlahPlanning' + data.item_id_product + e.machine_id + date).val(pemakaian)
                e.sisa_mesin_stick = var_sisa_mesin_stick
                e.sisa_mesin = var_sisa_mesin
            }
        });
        // insert hasil sisa mesin hlp di semua maker
        machine.forEach(e => {
            e.data.forEach(element => {
                if (element.stick == data.num_stick) {
                    element.machine_link = hasilChild
                }
            });
        });
        return {
            'hasilDataChild': hasilChild,
        };
    }

    function pembagianPerMesin(data) {
        // console.log(data)
        var date = getDateFromRange(new Date(dateStart), new Date(dateEnd))
        date.forEach(function(dates) {
            $.each(data_master[jenis_produksi]['machine'], function(key, value) {
                $.each(value['machine'], function(keys, values) {
                    var jumlah_isi = 0
                    if (data['productionPlanDetail'] != undefined) {
                        var obj = data['productionPlanDetail'].filter((values2, keys2) => {
                            if (values2.date === formatDate(dates) && values2.machine_id === parseInt(values['id'])) return true
                        })
                        if (obj != undefined) {
                            jumlah_isi = obj.reduce((n, {
                                qty
                            }) => parseInt(n) + parseInt(qty), 0)
                        }
                        $('#totalMesin' + values['id'] + formatDate(dates)).html(jumlah_isi)
                    }
                })
            })
        })
        correctionAll(data)
    }
    var lanjutSave = "ya"

    function correctionAll(data) {
        if (data['productionPlanGoal'] != undefined) {
            if (data['productionPlanDetail'] != undefined && data['productionPlanGoal'].length > 0) {
                $('.' + jenis_produksi + 'CircleDanger').addClass('d-none')
                $('.' + jenis_produksi + 'CircleSuccess').removeClass('d-none')
            } else if (data['productionPlanDetail'] == undefined && data['productionPlanGoal'].length <= 0) {
                // lanjutSave = "tidak"
                $('.' + jenis_produksi + 'CircleDanger').removeClass('d-none')
                $('.' + jenis_produksi + 'CircleSuccess').addClass('d-none')
            } else {
                // lanjutSave = "tidak"
                $('.' + jenis_produksi + 'CircleDanger').removeClass('d-none')
                $('.' + jenis_produksi + 'CircleSuccess').removeClass('d-none')
            }
        } else {
            $('.' + jenis_produksi + 'CircleDanger').removeClass('d-none')
            $('.' + jenis_produksi + 'CircleSuccess').removeClass('d-none')
        }
    }
    var code = ""

    function createCode(dateStart, dateEnd) {
        var d = new Date();
        var month = d.getMonth() + 1;
        if (month < 10) {
            month = "0" + month;
        }
        code = 'SMD-P' + d.getFullYear().toString().substr(-2) + month + getNumberWeek(dateStart)
        return false
    }

    function saveAsIndividual() {
        if (jenis_produksi == 'skm') {
            data_skm['productionPlan'] = {
                'code': code,
                'date_start': formatDate(dateStart),
                'date_end': formatDate(dateEnd),
                'created_id': user_id,
                'status': 'CREATED',
                'is_active': 1,
                'note': "",
            }
            var save = {
                'skm': data_skm
            }
        } else {
            data_skt['productionPlan'] = {
                'code': code,
                'date_start': formatDate(dateStart),
                'date_end': formatDate(dateEnd),
                'created_id': user_id,
                'status': 'CREATED',
                'is_active': 1,
                'note': "",
            }
            var save = {
                'skt': data_skt
            }
        }
        if (lanjutSave == 'ya') {
            doSimpan(save)
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Pengisian Belum Lengkap',
                text: 'Lengkapi Dulu Datanya Yaa :)'
            });
        }
    }

    function doSimpan(save) {
        Swal.fire({
            text: 'Apakah anda yakin ingin menyimpan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                createVarSave(save)
            }
        })
    }

    function createVarSave(save) {
        var type = 'POST'
        var data = {
            data: save,
        }
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setProductionPlan'); ?>'
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
                        getDateRange()
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

    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

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
</script>