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

    /* BORDER SKM */

    .bd-callout-0-skm {
        border-left-color: #0B2447;
        border-left-width: 10px;
    }

    .bd-callout-1-skm {
        border-left-color: #19376D;
        border-left-width: 10px;
    }

    .bd-callout-2-skm {
        border-left-color: #1A5F7A;
        border-left-width: 10px;
    }

    .bd-callout-3-skm {
        border-left-color: #159895;
        border-left-width: 10px;
    }

    .bd-callout-4-skm {
        border-left-color: #57C5B6;
        border-left-width: 10px;
    }

    .bd-callout-5-skm {
        border-left-color: #87CBB9;
        border-left-width: 10px;
    }

    .bd-callout-6-skm {
        border-left-color: #B9EDDD;
        border-left-width: 10px;
    }

    /* BACKGROUND SKM */

    .bg-callout-0-skm {
        background-color: #0B2447;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-1-skm {
        background-color: #19376D;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-2-skm {
        background-color: #1A5F7A;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-3-skm {
        background-color: #159895;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-4-skm {
        background-color: #57C5B6;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-5-skm {
        background-color: #87CBB9;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-6-skm {
        background-color: #B9EDDD;
        opacity: 0.5;
        color: white;
    }

    /* BORDER SKT */

    .bd-callout-0-skt {
        border-left-color: #fff9ae;
        border-left-width: 10px;
    }

    .bd-callout-1-skt {
        border-left-color: #f8ed62;
        border-left-width: 10px;
    }

    .bd-callout-2-skt {
        border-left-color: #e9d700;
        border-left-width: 10px;
    }

    .bd-callout-3-skt {
        border-left-color: #dab600;
        border-left-width: 10px;
    }

    .bd-callout-4-skt {
        border-left-color: #a98600;
        border-left-width: 10px;
    }

    .bd-callout-5-skt {
        border-left-color: #b3910b;
        border-left-width: 10px;
    }

    .bd-callout-6-skt {
        border-left-color: #9f810a;
        border-left-width: 10px;
    }

    /* BACKGROUND SKT */

    .bg-callout-0-skt {
        background-color: #fff9ae;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-1-skt {
        background-color: #f8ed62;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-2-skt {
        background-color: #e9d700;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-3-skt {
        background-color: #dab600;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-4-skt {
        background-color: #a98600;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-5-skt {
        background-color: #b3910b;
        opacity: 0.5;
        color: white;
    }

    .bg-callout-6-skt {
        background-color: #9f810a;
        opacity: 0.5;
        color: white;
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

    .bg-gradient-production-skm {
        background-color: #1C315E !important;
        background-image: linear-gradient(135deg,
                #1C315E 0%,
                rgba(34, 124, 112, 0.8) 100%) !important;
    }

    .bg-gradient-production-skt {
        background: rgb(150, 96, 14);
        background: linear-gradient(97deg, rgba(150, 96, 14, 1) 0%, rgba(236, 225, 59, 1) 100%);
    }

    .popover.show {
        opacity: 1;
        pointer-events: auto;
    }

    .bg-pita-1 {
        background-color: #fff16f !important;
    }

    .bg-pita-2 {
        background: rgb(251, 180, 25);
        background: linear-gradient(180deg, rgba(251, 180, 25, 1) 50%, rgba(255, 241, 111, 1) 50%);
    }

    .popover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
</style>
<style>
    .custom-popover-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-production-skt pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            <?= $head_title ?>
                            </script>
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
                                                        <div class="row p-0" id="detailTargetPane" style="max-height: 200px;overflow-x: hidden;overflow-y: auto;">
                                                            <div class="col-12 p-0 align-self-center border-top text-center pb-2 pt-2">
                                                                <p class="m-0" style="font-size: 9px;">Tidak Ada Target yang Dibuat</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center p-2 bg-white">
                                                <button type="button" class="btn btn-sm btn-primary h-100 w-100 mt-2 autoButton" onclick="automaticPlan()"><i class="fa fa-magic me-2"></i>AUTO</button>
                                            </div>
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
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="changeTab('skt')">SKT
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
                                                                    <form class="row signupForm" id="signupForm">
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Date Range</b></p>
                                                                            <input type="text" class="form-control form-control-sm litepicker mb-2" required="required" id="dateRange" name="dateRange" autocomplete="off" disabled>
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Target Produksi</b></p>
                                                                            <div id="createTargetProduksi">
                                                                            </div>
                                                                            <button type="button" class="btn btn-outline-success btn-sm small w-100 p-3" onclick="targetProduksi()"><i class="fa fa-plus me-2"></i> Target Produksi Baru</button>
                                                                            <p class="m-0 mt-2 mb-2" style="font-size: 12px;"><b>Notes</b></p>
                                                                            <textarea class="form-control form-control-sm" rows="10" placeholder="Tuliskan catatan anda disini" id="notes"></textarea>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Customize Machine</b></p>
                                                                            <div class="card shadow-none">
                                                                                <div class="card-body">
                                                                                    <div class="row customMachine" id="customMachineskm">
                                                                                        <div class="col-6">
                                                                                            <b class="small">Sustainable Machine in A Day</b>
                                                                                            <p class="font-small m-0">Pilih Mesin yang dimana item tersebut dapat lebih dari 1 Mesin dalam 1 Hari</p>
                                                                                            <div class="small pt-3" id="listMachine">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <b class="small">Calculate Method</b>
                                                                                            <p class="font-small m-0">Pilih Metode Perhitungan Plan Produksi ke Masing - Masing Mesin</p>
                                                                                            <div class="small pt-3">
                                                                                                <div class="form-check">
                                                                                                    <input class="form-check-input radioMethod" type="radio" value="" id="checkMethod1" name="checkMethod" onchange="chooseCalculateMethod('maker')">
                                                                                                    <label class="form-check-label" for="checkMethod1">Maker Based</label>
                                                                                                </div>
                                                                                                <div class="form-check">
                                                                                                    <input class="form-check-input radioMethod" type="radio" value="" id="checkMethod2" name="checkMethod" onchange="chooseCalculateMethod('ratio')" checked>
                                                                                                    <label class="form-check-label" for="checkMethod2">Ratio Based <i class="ms-2 fa fa-question-circle-o" style="cursor: pointer;" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="Ratio berdasarkan perbandingan dari kapasitas produksi mesin HLP dengan mesin MAKER." title="Information"></i></label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row customMachine d-none" id="customMachineskt">
                                                                                        <div class="col-12 text-center">
                                                                                            <i class="small">Fitur untuk SKT Belum Tersedia</i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <input class="submit" type="submit" value="submit"> -->
                                                                    </form>
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
                                                                        <div class="col-12 col-md-3 mb-4 text-center align-self-center">
                                                                            <div class="row">
                                                                                <div class="col-12 pb-2">
                                                                                    <button type="button" class="btn btn-sm btn-primary h-100 w-100 mt-2 autoButton" onclick="automaticPlan()"><i class="fa fa-magic me-2"></i>Automatic Plan</button>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="button" class="btn btn-sm btn-outline-danger h-100 w-100 mt-2" onclick="clearPlan()"><i class="fa fa-rotate-left me-2"></i>Clear All</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="dataDailyPlanning">
                                                                    </div>

                                                                    <button type="button" class="btn btn-success float-end btnSimpan" onclick="saveAsIndividual()"><i class="fa fa-save me-2"></i> Simpan<span class="ms-1 textJenisProduksi">SKM</span></button>
                                                                    <!-- <button type="button" class="btn btn-outline-success float-end me-2 btnSimpan createPane"><i class="fa fa-save me-2"></i> Simpan Semua</button> -->

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
<div id="hidden_content" hidden>
    <div data-name="popover-content" id="popover_content">

    </div>
</div>
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
            <div class="modal-footer d-none" id="modalFooter3">

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
    var detailPitaCukai = []
    var fillPitaVariable = []

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

    function clearModal3() {
        $('#modalDialog3').removeClass();
        $('#modalDialog3').removeAttr('style');
        $('#modalHeader3').html('');
        $('#modalBody3').html('');
        $('#modalFooter3').html('');
        localStorage.setItem('hint', 1)
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
    $('#modal3').on('hidden.bs.modal', function(e) {
        clearModal3();
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
        customAfterSwitch()
        if (jenis_produksi == "skm") {
            $('.autoButton').removeAttr('disabled', true)
            clearForm()
            var data = data_skm
            customDate = data_skm['customDate']
            $('#notes').val(data_skm.notes)
        } else {
            $('.autoButton').attr('disabled', true)
            clearForm()
            var data = data_skt
            customDate = data_skt['customDate']
            $('#notes').val(data_skt.notes)
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

    const validateMe = () => {
        $(".signupForm").validate({
            // in 'rules' user have to specify all the constraints for respective fields
            rules: {
                dateRange: "required",
                produkTarget: "required",
                jumlahTarget: "required",
            },
            // in 'messages' user have to specify message as per rules
            messages: {
                dateRange: "Harap isi Date Range untuk mengisi Daily Planning",
            }
        });
    }

    $(document).ready(function() {
        showHint()
        validateMe()
        customAfterSwitch()
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

    function customAfterSwitch() {
        $('.textJenisProduksi').html(jenis_produksi.toUpperCase())
        $('.customMachine').addClass('d-none')
        $('#customMachine' + jenis_produksi).removeClass('d-none')
        if (jenis_produksi == 'skm') {
            $('.page-header').removeClass('bg-gradient-production-skt')
        } else {
            $('.page-header').removeClass('bg-gradient-production-skm')
        }
        $('.page-header').addClass('bg-gradient-production-' + jenis_produksi)
    }

    function showHint() {
        if (localStorage.getItem('hint') != 1) {
            hint()
        }
    }

    function clearForm() {
        $('#dateRange').val('')
        $('#createTargetProduksi').empty()
        $('#dataDailyPlanning').html('<div class="row d-flex align-items-center" style="height: 200px;"><div class="col text-center p-5"><i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat mengisi Daily Planning</i></div></div>')
        noTarget = 0;
        $('#detailTargetPane').html('<div class="col-12 p-0 border-top text-center pb-2 pt-2"><p class="m-0" style="font-size: 9px;">Tidak Ada Target yang Dibuat</p></div>')
        $('.totalMesin').empty()
        // detailPitaCukai = []
        // fillPitaVariable = []
    }

    function clearPlan() {
        $('.totalMesin').empty()
        $('.jumlahPlanning').val('')
        $('.fillBoxPita').val('')
        // detailPitaCukai = []
    }
    var dateStart = ""
    var dateEnd = ""
    var dataLockDays = []

    new Litepicker({
        element: document.getElementById('dateRange'),
        singleMode: false,
        firstDay: 0,
        startDate: dateStart,
        endDate: dateEnd,
        format: "DD MMMM YYYY",
        autoRefresh: true,
        lockDays: dataLockDays,
        setup: (picker) => {
            picker.on('selected', (date1, date2) => {
                document.getElementById('dateRange').value = date1.format('DD MM YYYY') + ' - ' + date2.format('DD MM YYYY');
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
                arrangeMachineGroupPlan(dateStart, dateEnd)
            });
        },
    })

    function getDateRange() {
        dateStart = ""
        dateEnd = ""
        $('#dateRange').val('')
        if (jenis_produksi == 'skm') {
            if (data_skm['dateEnd'] != undefined && data_skm['dateStart'] != undefined) {
                dateStart = data_skm['dateStart']
                dateEnd = data_skm['dateEnd']
                document.getElementById('dateRange').value = formatInternationalDate(dateStart) + ' - ' + formatInternationalDate(dateEnd);
                createCode(dateStart, dateEnd)
                arrangeMachineGroupPlan(dateStart, dateEnd)
            }
        } else {
            if (data_skt['dateEnd'] != undefined && data_skt['dateStart'] != undefined) {
                dateStart = data_skt['dateStart']
                dateEnd = data_skt['dateEnd']
                document.getElementById('dateRange').value = formatInternationalDate(dateStart) + ' - ' + formatInternationalDate(dateEnd);
                createCode(dateStart, dateEnd)
                arrangeMachineGroupPlan(dateStart, dateEnd)
            }
        }
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
                data: {
                    employeeId: user_id,
                },
                error: function(xhr) {},
                beforeSend: function() {},
                success: function(response) {
                    $('.form-control').removeAttr('disabled')
                    data_master = response['data']
                    dataLockDays = ['1900-01-01', currentDate()], '2023-04-29', '2023-04-30'
                    data_machine_capability = response['machineGroupCapability']
                    listCutomizedMachine()
                    if (id_plan != '') {
                        dateStart = data_plan.date_start
                        dateEnd = data_plan.date_end
                        arrangeMachineGroupPlan(data_plan.date_start, data_plan.date_end)
                    }
                }
            })
        }
    }

    function listCutomizedMachine() {
        var html = ''
        $.each(data_master[jenis_produksi]['machine'], function(key, value) {
            html += '<b>' + value.type_name + '</b>'
            $.each(value['machine'], function(keys, values) {
                html += '<div class="form-check">'
                html += '<input class="form-check-input checkListMachine" type="checkbox" value="' + values.id + '" id="checkMachineCustom' + values.id + '" onchange="checkListMachine()">'
                html += '<label class="form-check-label" for="checkMachineCustom' + values.id + '">' + values.name + '</label>'
                html += '</div>'
            })
        })
        $('#listMachine').html(html)
    }

    var customMachine = ''

    function checkListMachine() {
        customMachine = $('.checkListMachine:checked').map(function() {
            return $(this).val();
        }).get();
    }

    var anyMachine = []
    var machine_group_plan = []
    var machine_group_plan_group = ''

    function arrangeMachineGroupPlan(dateStart, dateEnd) {
        machine_group_plan = []
        data_master[jenis_produksi].machineGroupPlan.forEach(e => {
            e.machine_group_plan.forEach(e2 => {
                e2.machine.forEach(e3 => {
                    machine_group_plan.push({
                        // MAKER
                        'group_plan_id': e.id,
                        'group_plan_name': e.name,
                        // MAKER 9A
                        'machine_group_plan_id': e2.id,
                        'machine_group_plan_name': e2.name,
                        'machine_group_plan_item': e2.item_id_product,
                        'machine_id': e3.id,
                        'machine_name': e3.name,
                    })
                });
            });
        });
        machine_group_plan_group = groupAndSum(machine_group_plan, ['group_plan_id', 'group_plan_name'], ['machine_id'])
        createDailyPlanning(dateStart, dateEnd)
    }

    function createDailyPlanning(dateStart, dateEnd) {
        detailPitaCukai = []
        var data = ""
        $('#dataDailyPlanning').empty()
        anyMachine = []
        var html = ""
        var date = getDateFromRange(new Date(dateStart), new Date(dateEnd))
        var a = 0
        var c = 0
        date.forEach(function(dates) {
            html += '<div class="card shadow-sm bd-callout-' + a + '-' + jenis_produksi + ' mb-5 small cardDate" data-date="' + formatDate(dates) + '" id="card_search' + c + '">'
            html += '<div class="card-body">'

            html += '<div class="row pb-2">'
            html += '<div class="col-1 pe-0">'
            html += '<h6><p class="m-0"><b><i class="fa fa-calendar-o "></i></b></p></h6>'
            html += '</div>'
            html += '<div class="col-10 ps-0">'
            html += '<h6><p class="m-0"><b class="text_search" data-id="' + c + '">' + formatDateIndonesia(dates) + '</b></p></h6>'
            html += '</div>'
            html += '</div>'

            if (jenis_produksi == 'skm') {
                html += '<div class="row pb-2">'
                html += '<div class="col-1 pe-0">'
                html += '<h6><p class="m-0"><b><i class="fa fa-clock-o"></i></b></p></h6>'
                html += '</div>'
                html += '<div class="col-11 ps-0">'
                html += '<div class="row">'
                $.each(data_master[jenis_produksi].shift[0].shift_list, function(key, value) {
                    html += '<div class="col-auto">'
                    html += '<div class="card mb-1 shadow-none shiftCard shiftCard' + c + '" data-date="' + dates + '" data-id_date="' + c + '" data-id="' + value.id + '" style="cursor:pointer;" id="shiftCard' + c + value.id + '" onclick="chooseShift(' + c + ',' + value.id + ')">'
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
            } else {
                html += '<div class="row pb-2">'
                html += '<div class="col-1 pe-0">'
                html += '<h6><p class="m-0"><b><i class="fa fa-ticket"></i></b></p></h6>'
                html += '</div>'
                html += '<div class="col-11 ps-0">'
                html += '<button class="btn btn-sm btn-outline-warning p-1" onclick="addPitaCukai(' + "'" + dates + "'" + ')"><i class="me-2 fa fa-pencil"></i>Custom Pita</button>'
                html += '<span class="small ms-2 m-0" id="textCustomPita' + formatDate(dates) + '">Belum Ada Custom Pita</span>'
                html += '</div>'
                html += '</div>'
            }

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
            var detailPita = []
            $.each(data_master[jenis_produksi]['machineGroupPlan'], function(key, value) {
                html += '<tr class="bg-callout-' + a + '-' + jenis_produksi + ' text-black">'
                html += '<td colspan="' + jumlah + '" class="p-2 font-small"><b>' + value['name'] + '</b></td>'
                html += '</tr>'
                $.each(value['machine_group_plan'], function(keys, values) {
                    if (a == 0) {
                        values.machine.forEach(e => {
                            anyMachine.push({
                                'type_id': value.id,
                                'type_name': value.name,
                                'machine_group_plan_id': values.id,
                                'machine_group_plan_name': values.name,
                                'machine_id': e.id,
                                'machine_code': e.code,
                                'machine_name': e.name,
                                'unit_name': e.unit_name,
                                'unit_id': e.unit_id,
                                'unit_detail': e.unit_detail
                            })
                        });
                    }
                    html += '<tr>'
                    html += '<td class="font-small">' + values['name'] + '</td>'
                    html += '<td class="font-small">' + values['item_unit_name_plan'] + '</td>'
                    $.each(data_master[jenis_produksi]['product'], function(keys2, values2) {
                        if (jenis_produksi == 'skm') {
                            data = data_skm
                        } else {
                            data = data_skt
                        }
                        // console.log(data)
                        var obj = ""
                        if (data['productionPlanDetailGroup'] != undefined) {
                            obj = data['productionPlanDetailGroup'].find((value3, key3) => {
                                if (value3.machine_group_plan_id === values['machine_group_plan_id'] && value3.date === formatDate(dates) && value3.item_id_product === parseInt(values2['id'])) return true
                            })
                            if (obj != undefined) {
                                obj = obj['qty']
                            } else {
                                obj = ""
                            }
                        }
                        // if (jenis_produksi == 'skt') {
                        // console.log(machine_group_plan.find((v, k) => {
                        //     if (v.machine_group_plan_id == values.id) return true
                        // }))
                        var findGroupPlanItem = machine_group_plan.find((v, k) => {
                            if (v.machine_group_plan_id == values.id) return true
                        }).machine_group_plan_item.find((v, k) => {
                            if (v == values2['id']) return true
                        })
                        // } else {
                        //     var findGroupPlanItem = ''
                        // }
                        var formPopover = values2['code'] + ' for ' + values.name
                        if (findGroupPlanItem != undefined) {
                            var findGroupPlan = machine_group_plan.find((v, k) => {
                                if (v.machine_group_plan_id == values.id) return true
                            })
                            var form = ''
                            form += '<input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:9px;font-weight:bold;text-align:right;background-color:transparent" data-produk="' + values2['id'] + '" data-mesin="' + values['id'] + '" data-unit="' + values['item_unit_id_plan'] + '" data-tanggal="' + formatDate(dates) + '" id="jumlahPlanning' + values2['id'] + values['id'] + formatDate(dates) + '" value="' + obj + '" data-formpopover="' + formPopover + '" data-machine_group_plan_id="' + values.id + '" autocomplete="off">'
                            var bgForm = ''
                            if (jenis_produksi == 'skt') {
                                var data_pita = data_master[jenis_produksi].productPita.filter((v, k) => {
                                    if (v.is_default == 1) return true
                                })
                                var pita = []
                                data_pita.forEach(e => {
                                    pita.push(e.id)
                                });
                                detailPita.push({
                                    // 'mesin_id': values.id,
                                    // 'mesin_code': values.code,
                                    'produk_id': values2.id,
                                    'produk_code': values2.code,
                                    'machine_group_plan_id': values.id,
                                    'machine_group_plan_name': values.name,
                                    'data': pita,
                                })
                            }
                        } else {
                            var form = ''
                            var bgForm = 'bg-light'
                        }
                        html += '<td class="p-0 ' + bgForm + ' font-small fieldPita' + values.id + values2.id + formatDate(dates) + ' allfieldDPlan fieldType' + value.name + ' fieldDPlan' + values2['id'] + '">'
                        html += form
                        html += '</td>'
                    })
                    html += '<td class="align-self-center totalMesin" style="font-size:14px;font-weight:bold;text-align:right;" id="totalMesin' + values['id'] + formatDate(dates) + '"></td>'
                    html += '</tr>'
                })
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'

            if (jenis_produksi == 'skt') {
                html += '<div class="mt-2">'
                html += '<span class="small"><i class="fa fa-square-o bg-pita-1 me-2"></i>Pita 2022</span>'
                html += '<span class="small"><i class="fa fa-square-o bg-pita-2 ms-2 me-2"></i>Terdapat 2 Pita atau Lebih</span>'
                html += '</div>'
            }

            html += '</div>'
            html += '</div>'
            if (jenis_produksi == 'skt') {
                detailPitaCukai.push({
                    'date': dates,
                    'detail': detailPita,
                })
            }
            a++
            c++
            if (a == 7) {
                a = 0
            }
        })
        $('#dataDailyPlanning').html(html)
        $('.nominal').number(true);
        if (jenis_produksi == 'skm') {
            if (data['productionPlanGoal'] != undefined) {
                $.each(data['productionPlanGoal'], function(key, value) {
                    changeColorTarget(value['item_id_product'])
                })
            }
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
            $('#shiftCard' + a + id).removeClass('activeItem activeItem' + a + ' bg-secondary text-white')
        } else {
            // insert
            $('#shiftCard' + a + id).addClass('activeItem activeItem' + a + ' bg-secondary text-white')
        }
    }

    $(document).on('keyup', '.jumlahPlanning', function(e) {
        simpanJumlahPlanning('manual')

    })

    var tombolOtomatis = 0

    function automaticPlan() {
        tombolOtomatis = 1
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
        html += '<select id="produkTarget' + noTarget + '" class="form-control form-control-sm produkTarget" name="produkTarget" required="required">'
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
        html += '<input type="text" id="jumlahTarget' + noTarget + '" class="form-control form-control-sm jumlahTarget" name="jumlahTarget" value="' + jumlah + '" required="required">'
        html += '</div>'
        html += '<div class="col-2 align-self-center">Box</div>'
        html += '<div class="col-4 text-end">'
        html += '<button type="button" class="btn btn-sm shadow-none" onclick="addCustomDate(' + noTarget + ')"><i class="fa fa-clock-o" id="iconCustomDay' + noTarget + '"></i></button>'
        html += '<button type="button" class="btn btn-danger btn-sm shadow-none" onclick="removeFieldTarget(' + noTarget + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#createTargetProduksi').append(html)
        noTarget++
        validateMe()
        valid()
    }

    function valid() {
        return $('.signupForm').valid();
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
    $(document).on('keyup', '#notes', function(e) {
        simpanProdukTarget()
    })


    function changeColorTarget(id) {
        $('.fieldDPlan' + id).removeClass('bg-light')
    }

    var dataIdPlanDetail = []
    var dataIdPlanGroup = []

    function arrangedVariableEdit() {
        var array = []
        var a = 0
        data_plan.data.forEach(b => {
            // tanggal
            if (b.shift != null) {
                b.shift.forEach(element => {
                    chooseShift(a, element.id)
                });
            }
            b.data.forEach(c => {
                // machine type
                c.forEach(c2 => {
                    if (c2.data_group != null) {
                        c2.data_group.forEach(d => {
                            // machine
                            d.data.forEach(e => {
                                // product
                                changeColorTarget(e.product.id)
                                $('#jumlahPlanning' + e.product.id + d.machine.id + formatDate(b.date)).val(e.qty)
                                // pita
                                e.pita.forEach(p => {
                                    dataIdPlanGroup.push({
                                        'machine_id': d.machine.id,
                                        'pita_id': p.id,
                                        'production_plan_detail_group_id': p.production_plan_detail_group_id
                                    })
                                });
                            });
                        });
                    }
                    if (c2.data_detail != null) {
                        c2.data_detail.forEach(d => {
                            d.data.forEach(e => {
                                // pita
                                e.pita.forEach(p => {
                                    dataIdPlanDetail.push({
                                        'machine_id': d.machine.id,
                                        'pita_id': p.id,
                                        'production_plan_detail_id': p.production_plan_detail_id
                                    })
                                })
                            })
                        })
                    }
                });
            });
            a++
        });
        simpanProdukTarget()
    }

    function simpanProdukTarget(auto = '', arranged = '') {
        if (auto == '' && id_plan == '' && tombolOtomatis == 1) {
            $('.jumlahPlanning').val('')
        }
        if (id_plan == '' && jenis_produksi == 'skm') {
            $('.allfieldDPlan').addClass('bg-light')
        }
        var obj = []
        var objPlan = []
        var objPlanGroup = []
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
        var machine_group_plan_id = $('.jumlahPlanning').map(function() {
            return $(this).data('machine_group_plan_id');
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
        var indexDetail = 0
        var indexGroup = 0
        for (let i = 0; i < jumlahPlan.length; i++) {
            if (jumlahPlan[i] != "") {
                if (jenis_produksi == 'skt') {
                    var pitaCukaiCheck = fillPitaVariable.find((v, k) => {
                        if (formatDate(v.date) == formatDate(tanggal[i]) && v.mesin == machine_group_plan_id[i] && v.produk == produkPlan[i]) return true
                    })
                    if (pitaCukaiCheck == undefined) {
                        var pitaCukai = detailPitaCukai.find((v, k) => {
                            if (formatDate(v.date) == formatDate(tanggal[i])) return true
                        }).detail.find((v, k) => {
                            if (v.machine_group_plan_id == machine_group_plan_id[i]) return true
                        }).data
                    } else {
                        var pitaCukai = []
                        pitaCukaiCheck.detail.forEach(e => {
                            pitaCukai.push(e.id)
                        });
                    }
                } else {
                    var pitaCukai = []
                    pitaCukai.push('')
                }

                for (let j = 0; j < pitaCukai.length; j++) {
                    var jum = jumlahPlan[i]
                    if (pitaCukaiCheck != undefined) {
                        jum = pitaCukaiCheck.detail[j].value
                    }
                    if (jenis_produksi == 'skm') {
                        objPlanGroup.push({
                            'qty': jum,
                            'item_id_product': produkPlan[i],
                            'machine_group_plan_id': machine_group_plan_id[i],
                            'machine_id': mesin[i],
                            'date': tanggal[i],
                            'unit_id': unit[i],
                        })
                        var production_plan_group = dataIdPlanGroup.find((v, k) => {
                            if (v.machine_id == mesin[i]) return true
                        })
                    } else {
                        objPlanGroup.push({
                            'qty': jum,
                            'item_id_product': produkPlan[i],
                            'machine_group_plan_id': machine_group_plan_id[i],
                            'machine_id': mesin[i],
                            'date': tanggal[i],
                            'unit_id': unit[i],
                            'pita_id': pitaCukai[j],
                        })
                        var production_plan_group = dataIdPlanGroup.find((v, k) => {
                            if (v.machine_id == mesin[i] && v.pita_id == pitaCukai[j]) return true
                        })
                    }
                    if (id_plan != '') {
                        objPlanGroup[indexGroup]['id'] = production_plan_group.production_plan_detail_group_id
                    }
                    indexGroup++
                }
                var machines = machine_group_plan.filter((v, k) => {
                    if (v.machine_group_plan_id == machine_group_plan_id[i]) return true
                })
                // PLAN DETAIL
                for (let j = 0; j < pitaCukai.length; j++) {
                    var jum = jumlahPlan[i]
                    if (pitaCukaiCheck != undefined) {
                        jum = pitaCukaiCheck.detail[j].value
                    }
                    machines.forEach(e => {
                        if (jenis_produksi == 'skm') {
                            objPlan.push({
                                'qty': jum,
                                'item_id_product': produkPlan[i],
                                'machine_id': e.machine_id,
                                'date': tanggal[i],
                                'unit_id': unit[i],
                            })
                            var production_plan_detail = dataIdPlanDetail.find((v, k) => {
                                if (v.machine_id == e.machine_id) return true
                            })
                        } else {
                            objPlan.push({
                                'qty': jum,
                                'item_id_product': produkPlan[i],
                                'machine_id': e.machine_id,
                                'date': tanggal[i],
                                'unit_id': unit[i],
                                'pita_id': pitaCukai[j],
                            })
                            var production_plan_detail = dataIdPlanDetail.find((v, k) => {
                                if (v.machine_id == e.machine_id && v.pita_id == pitaCukai[j]) return true
                            })
                        }
                        if (id_plan != '') {
                            objPlan[indexDetail]['id'] = production_plan_detail.production_plan_detail_id
                        }
                        indexDetail++
                    });
                }
            }
        }
        for (let i = 0; i < shift_date.length; i++) {
            if (hasClass[i] == true) {
                objShift.push({
                    'date': shift_date[i],
                    'id': shift_id[i],
                    'date_id': shift_date_id[i],
                    'click': hasClass[i],
                    'num': 1,
                })
            }
        }
        for (let i = 0; i < produk.length; i++) {
            if (jenis_produksi == 'skm') {
                changeColorTarget(produk[i])
            }
            if (jumlah[i] != "") {
                if (jenis_produksi == 'skm') {
                    var propo = ''
                    data_master[jenis_produksi].machineSubtypeProportion.forEach(e => {
                        if (e.stick == num_stick[i]) {
                            propo = e.proportion[0]
                        }
                    });
                    obj.push({
                        'qty': jumlah[i],
                        'qty_sisa': jumlah[i],
                        'qty_stick': eval(jumlah[i] + operator[i] + stick[i]),
                        'qty_tray': eval(jumlah[i] + propo.operator + propo.value),
                        'qty_stick_sisa': eval(jumlah[i] + operator[i] + stick[i]),
                        'qty_tray_sisa': eval(jumlah[i] + propo.operator + propo.value),
                        'item_id_product': produk[i],
                        'kode': kode[i],
                        'stick': stick[i],
                        'stick_unit_id': stick_unit_id[i],
                        'num_stick': num_stick[i],
                        'unit_id': data_master[jenis_produksi]['goalSatuan']['id'],
                    })
                } else {
                    obj.push({
                        'qty': jumlah[i],
                        'item_id_product': produk[i],
                        'kode': kode[i],
                        'unit_id': data_master[jenis_produksi]['goalSatuan']['id'],
                    })
                }
            }
        }
        if (jenis_produksi == 'skm') {
            data_skm['productionPlanGoal'] = obj
            data_skm['customDate'] = customDate
            data_skm['productionPlanDetailGroup'] = objPlanGroup
            data_skm['productionPlanDetail'] = objPlan
            data_skm['shiftDetail'] = objShift
            data_skm['notes'] = $('#notes').val()
            if (id_plan == '') {
                getPaneTarget(data_skm, auto, arranged)
            } else {
                pembagianPerMesin(data_skm)
            }
        } else {
            data_skt['productionPlanGoal'] = obj
            data_skt['customDate'] = customDate
            data_skt['productionPlanDetailGroup'] = objPlanGroup
            data_skt['productionPlanDetail'] = objPlan
            data_skt['shiftDetail'] = objShift
            data_skt['notes'] = $('#notes').val()
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
        if (tombolOtomatis == 1) {
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
    }

    var dataShiftComplete = []

    function kapasitasMesin(data, auto) {
        // dicek dulu apakah shift sudah di klik apa belum
        if (data.shiftDetail != undefined) {
            if (data.shiftDetail.length > 0) {
                var groupShiftDetail = getDateFromRange(new Date(dateStart), new Date(dateEnd))
                // pembentukan variable
                dataShiftComplete = []
                var a = 0
                groupShiftDetail.forEach(function(dates) {
                    var details = []
                    $.each(data.shiftDetail, function(keys, values) {
                        if (a == values.date_id) {
                            var index = data_machine_capability.findIndex(x => x.shift_id == values.id);
                            // const text = data_machine_capability[index].machine
                            // console.log(index)
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

    var switchModeMachine = 2

    function chooseCalculateMethod(status) {
        if (status == 'maker') {
            switchModeMachine = 1
        } else {
            switchModeMachine = 2
        }
        simpanProdukTarget()
    }

    function pembentukanKapasitasHariMesin(data, auto) {
        // console.log(dataShiftComplete)
        // per produk
        // check shift per hari
        $.each(dataShiftComplete, function(keys, values) {
            var sisa_mesin = 0
            var sisa_mesin_stick = 0
            var max_volume_stick = 0
            var min_volume_stick = 0

            var detailMaker = {}

            var sisa_mesin_hlp = 0
            var sisa_mesin_stick_hlp = 0
            var max_volume_stick_hlp = 0
            var min_volume_stick_hlp = 0

            var detailHLP = {}
            // detail shift
            $.each(values.detail, function(keys2, values2) {
                // detail machine in shift MAKER
                $.each(values2.machine, function(keys3, values3) {
                    if (detailMaker['sisa_mesin' + values3.machine_id] == undefined) {
                        detailMaker['sisa_mesin' + values3.machine_id] = 0
                        detailMaker['sisa_mesin_stick' + values3.machine_id] = 0
                        detailMaker['max_volume_stick' + values3.machine_id] = 0
                        detailMaker['min_volume_stick' + values3.machine_id] = 0
                    }
                    // anymachine buat id masukin konversi beserta operation
                    $.each(anyMachine, function(keys4, values4) {
                        if (values3.machine_id == values4.machine_id) {
                            //
                            values3['unit_detail'] = values4.unit_detail
                            values3['unit_name'] = values4.unit_name
                            values3['sisa_mesin'] = parseFloat(values3.max_volume) + parseFloat(detailMaker['sisa_mesin' + values3.machine_id])
                            $.each(values4.unit_detail, function(keys5, values5) {
                                values3['sisa_mesin_stick'] = parseFloat(Math.ceil(eval(values3.max_volume + values5.operator_reverse + values5.value))) + parseFloat(detailMaker['sisa_mesin_stick' + values3.machine_id])
                                values3['max_volume_stick'] = parseFloat(Math.ceil(eval(values3.max_volume + values5.operator_reverse + values5.value))) + parseFloat(detailMaker['max_volume_stick' + values3.machine_id])
                                values3['min_volume_stick'] = parseFloat(Math.ceil(eval(values3.min_volume + values5.operator_reverse + values5.value))) + parseFloat(detailMaker['min_volume_stick' + values3.machine_id])

                                detailMaker['sisa_mesin_stick' + values3.machine_id] = values3['sisa_mesin_stick']
                                detailMaker['max_volume_stick' + values3.machine_id] = values3['max_volume_stick']
                                detailMaker['min_volume_stick' + values3.machine_id] = values3['min_volume_stick']
                            })
                            detailMaker['sisa_mesin' + values3.machine_id] = values3['sisa_mesin']
                        }
                    })
                    // detail hlp nya
                    $.each(values3.data, function(keys5, values5) {
                        $.each(values5.machine_link, function(keys6, values6) {
                            if (detailHLP['sisa_mesin_hlp' + values3.machine_id + '' + values6.machine_id] == undefined) {
                                detailHLP['sisa_mesin_hlp' + values3.machine_id + '' + values6.machine_id] = 0
                                detailHLP['sisa_mesin_stick_hlp' + values3.machine_id + '' + values6.machine_id] = 0
                                detailHLP['max_volume_stick_hlp' + values3.machine_id + '' + values6.machine_id] = 0
                                detailHLP['min_volume_stick_hlp' + values3.machine_id + '' + values6.machine_id] = 0
                            }
                            $.each(anyMachine, function(keys4, values4) {
                                if (values6.machine_id == values4.machine_id) {
                                    //
                                    values6['unit_detail'] = values4.unit_detail
                                    values6['unit_name'] = values4.unit_name
                                    values6['sisa_mesin'] = parseFloat(values6.max_volume) + parseFloat(detailHLP['sisa_mesin_hlp' + values3.machine_id + '' + values6.machine_id])
                                    $.each(values4.unit_detail, function(keys7, values7) {
                                        values6['sisa_mesin_stick'] = parseFloat(Math.ceil(eval(values6.max_volume + values7.operator_reverse + values7.value))) + parseFloat(detailHLP['sisa_mesin_stick_hlp' + values3.machine_id + '' + values6.machine_id])
                                        values6['max_volume_stick'] = parseFloat(Math.ceil(eval(values6.max_volume + values7.operator_reverse + values7.value))) + parseFloat(detailHLP['max_volume_stick_hlp' + values3.machine_id + '' + values6.machine_id])
                                        values6['min_volume_stick'] = parseFloat(Math.ceil(eval(values6.min_volume + values7.operator_reverse + values7.value))) + parseFloat(detailHLP['min_volume_stick_hlp' + values3.machine_id + '' + values6.machine_id])

                                        detailHLP['sisa_mesin_stick_hlp' + values3.machine_id + '' + values6.machine_id] = values6['sisa_mesin_stick']
                                        detailHLP['max_volume_stick_hlp' + values3.machine_id + '' + values6.machine_id] = values6['max_volume_stick']
                                        detailHLP['min_volume_stick_hlp' + values3.machine_id + '' + values6.machine_id] = values6['min_volume_stick']
                                    })
                                    detailHLP['sisa_mesin_hlp' + values3.machine_id + '' + values6.machine_id] = values6['sisa_mesin']
                                }
                            })
                        })
                    })
                })
            })
        })
        // console.log(dataShiftComplete)
        // dataShiftComplete[0].detail[0].machine[0].sisa_mesin = 1;
        if (auto == 'manual') {
            pembagianPerMesin(data)
        } else {
            // if (switchModeMachine == 1) {
            pembentukanConvertMesin(data)
            // } else {
            //     pembentukanModePembanding(data)
            // }
        }
    }

    function pembentukanConvertMesin(data) {
        // console.log(dataShiftComplete)
        // check shift per hari
        // per produk
        // total stick adalah sisa
        var sisa_stick = 0
        var sisa_tray = 0
        var sisa = 0

        $.each(data.productionPlanGoal, function(key, value) {
            sisa_stick = value.qty_stick
            sisa_tray = value.qty_tray
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
                    if (switchModeMachine == 1) {
                        let nameVariable = makerMachine(data, dataShiftComplete[keys], keys, data.productionPlanGoal[key], key, sisa_stick, sisa)
                        sisa_stick = nameVariable.sisa_stick
                        sisa = nameVariable.sisa
                    } else {
                        let nameVariable = makerMachinePerbandingan(data, dataShiftComplete[keys], keys, data.productionPlanGoal[key], key, sisa_tray, sisa)
                        sisa_tray = nameVariable.sisa_tray
                        sisa = nameVariable.sisa
                    }
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
                        if (switchModeMachine == 1) {
                            let nameVariable = makerMachine(data, dataShiftComplete[keys], keys, data.productionPlanGoal[key], key, sisa_stick, sisa)
                            sisa_stick = nameVariable.sisa_stick
                            sisa = nameVariable.sisa
                        } else {
                            let nameVariable = makerMachinePerbandingan(data, dataShiftComplete[keys], keys, data.productionPlanGoal[key], key, sisa_tray, sisa)
                            sisa_tray = nameVariable.sisa_tray
                            sisa = nameVariable.sisa
                        }
                    }
                }
            })
            // console.log(sisa)
        })
        simpanProdukTarget('manual', 'true')
    }

    function makerMachinePerbandingan(data, values, keys, value, key, sisa_tray, sisa) {
        // MAKER
        var a = 1;
        values.detail.forEach(values2 => {
            if (a == values.detail.length) {
                // cari sisa mesin yang tidak kosong
                var hasil = values2.machine.find((values3, keys3) => {
                    if (values3.sisa_mesin > 0) return true
                })
                var hasilChild = hasil.data[hasil.data.findIndex(x => x.stick == value.num_stick)].machine_link
                var checkAvailableChild = hasilChild.filter((v, k) => {
                    if (v.sisa_mesin > 0) return true
                })
                if (sisa_tray != 0 && checkAvailableChild.length != 0) {
                    // index mesin
                    var index = values2.machine.findIndex(x => x.machine_id == hasil.machine_id);
                    var pemakaian_tray = 0
                    // MASUK KE HLP
                    if (sisa > 0) {
                        let nameVariable = machineChildPerbandingan(data.productionPlanGoal[key], hasil, formatDate(values.date), values2.machine, hasilChild, values2, index, sisa_tray, sisa, value, values)
                        sisa_tray = nameVariable.sisa_tray
                        sisa = nameVariable.sisa
                    }
                }
            }
            a++
        })
        return {
            'sisa_tray': sisa_tray,
            'sisa': sisa
        };
    }

    function machineChildPerbandingan(data, hasil, date, machine, hasilChild, values2, index, sisa_tray, sisa, value, values) {
        // HLP (SISA box)
        var totalPemakaian = 0
        // console.log(hasilChild)
        hasilChild.forEach(e => {
            if (e.sisa_mesin > 0 || sisa > 0) {
                var pemakaian = 0
                var var_sisa_mesin = e.sisa_mesin
                if (sisa > e.sisa_mesin) {
                    // jika banyak sisa box dari pada sisa mesin
                    pemakaian = var_sisa_mesin
                    sisa = sisa - pemakaian
                    var_sisa_mesin = 0
                } else {
                    // jika sisa stik lebih sedikit, sisa lebih banyak
                    pemakaian = sisa
                    var_sisa_mesin = var_sisa_mesin - pemakaian
                    sisa = 0
                }
                totalPemakaian = parseFloat(totalPemakaian) + parseFloat(pemakaian)
                $('#jumlahPlanning' + data.item_id_product + e.machine_id + date).val(pemakaian)
                e.sisa_mesin = var_sisa_mesin
                // values2.machine[e].sisa_mesin = var_sisa_mesin
            }
        });
        // console.log(hasilChild)
        // insert hasil sisa mesin hlp di semua maker
        machine.forEach(e => {
            e.data.forEach(element => {
                if (element.stick == data.num_stick) {
                    element.machine_link = hasilChild
                }
            });
        });
        // MASUK LAGI KE MAKER
        if (sisa_tray > 0) {
            let nameVariable = macihneMakerAgainPerbandingan(hasil, sisa_tray, value, values, values2, index, sisa, totalPemakaian, data.num_stick)
            sisa_tray = nameVariable.sisa_tray
        }
        // console.log(totalPemakaian)
        return {
            'sisa_tray': sisa_tray,
            'sisa': sisa
        };
    }

    function macihneMakerAgainPerbandingan(hasil, sisa_tray, value, values, values2, index, sisa, totalPemakaian, num_stick) {
        // MAKER (TRAY)
        var propo = ''
        data_master[jenis_produksi].machineSubtypeProportion.forEach(e => {
            if (e.stick == num_stick) {
                propo = e.proportion[0]
            }
        });
        var var_sisa_mesin_tray = hasil.sisa_mesin
        pemakaian_tray = eval(totalPemakaian + propo.operator + propo.value)
        pemakaian_tray = Math.floor(pemakaian_tray / 10) * 10
        if (sisa_tray > hasil.sisa_mesin) {
            // jika banyak sisa stik dari pada sisa mesin
            sisa_tray = sisa_tray - pemakaian_tray
            var_sisa_mesin_tray = 0
        } else {
            // jika sisa stik lebih sedikit, sisa lebih banyak
            // pemakaian_tray = sisa_tray
            var_sisa_mesin_tray = var_sisa_mesin_tray - pemakaian_tray
            sisa_tray = 0
        }
        // item mesin tanggal
        // console.log(keys, keys2, index)
        $('#jumlahPlanning' + value.item_id_product + hasil.machine_id + formatDate(values.date)).val(pemakaian_tray)
        // dimasukkan ke array
        values2.machine[index].sisa_mesin = var_sisa_mesin_tray
        return {
            'sisa_tray': sisa_tray,
        };
    }

    function makerMachine(data, values, keys, value, key, sisa_stick, sisa) {
        // detail shift
        // perulangan shift
        var a = 1
        values.detail.forEach(values2 => {
            if (a == values.detail.length) {
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
            }
            a++
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
                    // sisa = sisa - pemakaian
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
                    // sisa = 0
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
        tombolOtomatis = 0
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
    var anyBlankShift = 0

    function saveAsIndividual() {
        anyBlankShift = 0
        if (jenis_produksi == 'skm') {
            data_skm['productionPlan'] = {}
            // data_skm['productionPlan'] = {
            //     'created_id': user_id,
            //     'status': 'CREATED',
            //     'is_active': 1,
            //     // 'note': data_skm.notes,
            // }
            if (id_plan != '') {
                data_skm['productionPlan']['id'] = id_plan
                data_skm['productionPlan']['code'] = data_plan.code
            } else {
                data_skm['productionPlan']['note'] = data_skm.notes
                data_skm['productionPlan']['code'] = code
                data_skm['productionPlan']['date_start'] = formatDate(dateStart)
                data_skm['productionPlan']['date_end'] = formatDate(dateEnd)
                data_skm['productionPlan']['created_id'] = user_id
                data_skm['productionPlan']['status'] = 'CREATED'
                data_skm['productionPlan']['is_active'] = 1
            }
            var dataShift = []
            var date = $('.cardDate').map(function() {
                return $(this).data('date');
            }).get();
            for (let i = 0; i < date.length; i++) {
                var shift_id = $('.activeItem' + i).map(function() {
                    return $(this).data('id');
                }).get();
                if (shift_id.length == 0) {
                    anyBlankShift = 1
                }
                dataShift.push({
                    'date': formatDate(date[i]),
                    'shift_id': shift_id
                })
            }
            data_skm['productionPlanShift'] = dataShift
            data_skm['productionPlanGoal'].forEach(function(v) {
                delete v.kode
                delete v.num_stick
                delete v.qty_sisa
                delete v.qty_stick
                delete v.qty_tray
                delete v.qty_stick_sisa
                delete v.qty_stick_sisa
                delete v.qty_tray_sisa
                delete v.stick
                delete v.stick_unit_id
                delete v.machine_id
            });
            // console.log(data_skm['productionPlanGoal'])
            data_skm['productionPlanDetailGroup'].forEach(function(v) {
                delete v.machine_id
            });
            var save = {
                'skm': data_skm
            }
        } else {
            data_skt['productionPlan'] = {}
            // data_skt['productionPlan'] = {
            //     'code': code,
            //     'date_start': formatDate(dateStart),
            //     'date_end': formatDate(dateEnd),
            //     'created_id': user_id,
            //     'status': 'CREATED',
            //     'is_active': 1,
            //     // 'note': data_skt.notes,
            // }
            if (id_plan != '') {
                data_skt['productionPlan']['id'] = id_plan
                data_skt['productionPlan']['code'] = data_plan.code
            } else {
                data_skt['productionPlan']['note'] = data_skt.notes
                data_skt['productionPlan']['code'] = code
                data_skt['productionPlan']['date_start'] = formatDate(dateStart)
                data_skt['productionPlan']['date_end'] = formatDate(dateEnd)
                data_skt['productionPlan']['created_id'] = user_id
                data_skt['productionPlan']['status'] = 'CREATED'
                data_skt['productionPlan']['is_active'] = 1
            }
            data_skt['productionPlanGoal'].forEach(function(v) {
                delete v.kode
                delete v.num_stick
                delete v.qty_sisa
                delete v.qty_stick
                delete v.qty_tray
                delete v.qty_stick_sisa
                delete v.qty_stick_sisa
                delete v.qty_tray_sisa
                delete v.stick
                delete v.stick_unit_id
                delete v.machine_id
            });
            data_skt['productionPlanDetailGroup'].forEach(function(v) {
                delete v.machine_id
            });
            var save = {
                'skt': data_skt
            }
        }
        if (lanjutSave == 'ya' && anyBlankShift == 0) {
            // console.log(save)
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
        // console.log(save)
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
                        // getDateRange()
                        $(button).prop("disabled", false);
                        if (id_plan == '') {
                            linkToSMDPlanning()
                        }
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

    function linkToSMDPlanning() {
        var url = '<?= base_url() ?>production/planning/smd'
        location.replace(url)
    }

    function hint() {
        $('#modal3').modal('show')
        $('#modalDialog3').addClass('modal-dialog modal-lg modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">New Feature</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader3').html(html_header);
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<img src="<?= base_url() ?>assets/image/gif/hint 1.gif" class="w-100" loading="lazy">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody3').html(html_body);
    }

    function addPitaCukai(date) {
        closeAllPopover()
        var data = detailPitaCukai.find((v, k) => {
            if (formatDate(date) == formatDate(v.date)) return true
        }).detail
        // console.log(data)
        var group = groupAndSum(data, ['machine_group_plan_id', 'machine_group_plan_name'], ['produk_id'])
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Custom Pita Cukai ' + formatDateIndonesia(date) + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        group.forEach(e => {
            html_body += '<div class="col-12 pb-3">'
            html_body += '<b class="text-grey small mb-2">' + e.machine_group_plan_name + '</b>'
            html_body += '<div class="row">'
            data.forEach(el => {
                if (el.machine_group_plan_id == e.machine_group_plan_id) {
                    html_body += '<div class="col-12">'
                    html_body += '<div class="card shadow-none mb-2 card-hoper">'
                    html_body += '<div class="card-body p-2">'

                    html_body += '<div class="row">'
                    html_body += '<div class="col-4">'
                    html_body += '<b class="small">' + el.produk_code + '</b>'
                    html_body += '</div>'
                    data_master[jenis_produksi].productPita.forEach(pita => {
                        var check = ''
                        if (el.data.length == 0) {
                            if (pita.is_default == 1) {
                                check = 'checked'
                            }
                        } else {
                            if (el.data.includes(pita.id)) {
                                check = 'checked'
                            }
                        }

                        html_body += '<div class="col-auto">'
                        html_body += '<div class="form-check">'
                        html_body += '<input class="form-check-input checkPita' + e.machine_group_plan_id + el.produk_id + '" type="checkbox" value="' + pita.id + '" id="checkPita' + e.machine_group_plan_id + el.produk_id + pita.id + '" ' + check + ' onclick="checkingPita(' + "'" + date + "'" + ',' + e.machine_group_plan_id + ',' + el.produk_id + ')">'
                        html_body += '<label class="form-check-label" for="checkPita' + e.machine_group_plan_id + el.produk_id + pita.id + '">' + pita.name + '</label>'
                        html_body += '</div>'
                        html_body += '</div>'
                    });
                    html_body += '</div>'

                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                }
            });
            html_body += '</div>'
            html_body += '</div>'
        });

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
    }

    function checkingPita(date, mesin, produk) {
        var value = $('.checkPita' + mesin + produk + ':checked').map(function() {
            return $(this).val();
        }).get();
        detailPitaCukai.forEach(e => {
            if (formatDate(date) == formatDate(e.date)) {
                e.detail.forEach(element => {
                    if (element.machine_group_plan_id == mesin && element.produk_id == produk) {
                        element.data = value
                        colorizedPita(value, mesin, produk, formatDate(date))
                    }
                });
            }
        });
        countPitaCukai(formatDate(date))
    }

    function countPitaCukai(date) {
        var data = detailPitaCukai.find((v, k) => {
            if (formatDate(date) == formatDate(v.date)) return true
        }).detail
        // console.log(data)
        var data_pita = data_master[jenis_produksi].productPita.filter((v, k) => {
            if (v.is_default == 1) return true
        })
        var id_pita = []
        data_pita.forEach(e => {
            const result = data.find(obj => obj.id != e.id);
            // console.log(result)
        });
        $('#textCustomPita' + date)
    }

    function colorizedPita(value, mesin, produk, date) {
        $('.fieldPita' + mesin + produk + date).removeClass('bg-pita-1 bg-pita-2')
        if (value.length >= 2) {
            $('.fieldPita' + mesin + produk + date).addClass('bg-pita-2')
            changeTogglePopover(value, mesin, produk, date, 'split')
        } else {
            var obj = data_master[jenis_produksi].productPita.find((v, k) => {
                if (v.id == value[0]) return true
            }).is_default
            if (obj == 1) {
                $('.fieldPita' + mesin + produk + date).removeClass('bg-pita-1 bg-pita-2')
                changeTogglePopover(value, mesin, produk, date)
            } else {
                $('.fieldPita' + mesin + produk + date).addClass('bg-pita-1')
                changeTogglePopover(value, mesin, produk, date)
            }
        }

    }

    function changeTogglePopover(value, mesin, produk, date, status) {
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).val('')
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).removeClass('split')
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).addClass(status)
        var id = "jumlahPlanning" + produk + mesin + formatDate(date)
        if (status == 'split') {
            openFormPopover(value, mesin, produk, date, status, id)
        } else {
            openDefaultPopover(value, mesin, produk, date, status, id)
        }
    }

    function openFormPopover(value, mesin, produk, date, status, id) {
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).attr('readonly', true)
        var contents = ""
        contents += '<div class="row">'
        for (let i = 0; i < value.length; i++) {
            var obj = data_master[jenis_produksi].productPita.find((v, k) => {
                if (v.id == value[i]) return true
            })
            contents += '<div class="col-12 pt-2">'
            contents += '<p class="m-0 small"><b>Pita ' + obj.name + '</b></p>'
            contents += '<div class="input-group mb-3 align-self-center">'
            contents += '<input type="text" class="form-control form-control-sm nominal fillBoxPita fillBoxPita' + produk + mesin + status + formatDate(date) + '" value="0" data-variable_box="' + produk + mesin + status + formatDate(date) + '" data-variable_form="' + produk + mesin + formatDate(date) + '" data-id="' + obj.id + '" data-produk="' + produk + '" data-mesin="' + mesin + '" data-date="' + formatDate(date) + '">'
            contents += '<span class=" ms-2 me-5" style="margin: auto;">Box</span>'
            contents += '</div>'
            contents += '</div>'
        }
        contents += '</div>'
        $('#popover_content').html(contents)
        $('.nominal').number(true);
        var options = {
            placement: 'bottom',
            // title: "Split Rencana Produksi",
            title: function() {
                const popoverTitle = document.createElement('div');
                popoverTitle.classList.add('custom-popover-title');

                const titleText = document.createElement('span');
                titleText.textContent = 'Split Rencana Produksi';

                const closeButton = document.createElement('button');
                closeButton.classList.add('btn-close');
                closeButton.setAttribute('aria-label', 'Close');
                closeButton.addEventListener('click', function() {
                    myPopover[id].hide();
                });

                popoverTitle.appendChild(titleText);
                popoverTitle.appendChild(closeButton);

                return popoverTitle;
            },
            trigger: 'click',
            html: true,
            content: $('#popover_content')
        }
        $('#hidden_content').html('<div data-name="popover-content" id="popover_content"></div>')
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).attr('tabindex', '-1')
        sendTojumlahPlanning(mesin, produk, date, options, id)
    }

    function openDefaultPopover(value, mesin, produk, date, status, id) {
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).removeAttr('readonly', true)
        // var contents = $('#jumlahPlanning' + produk + mesin + formatDate(date)).data('formpopover')
        var options = {
            html: true,
            content: ''
        }
        $('#jumlahPlanning' + produk + mesin + formatDate(date)).removeAttr('tabindex', '-1')
        sendTojumlahPlanning(mesin, produk, date, options, id)
    }

    function sendTojumlahPlanning(mesin, produk, date, options, id) {
        togglePopover(id, options)
    }
    var myPopover = []

    function togglePopover(id, options) {
        var exampleEl = document.getElementById(id)
        myPopover[id] = new bootstrap.Popover(exampleEl, options)
    }

    $(document).on('click', '.jumlahPlanning', function(e) {
        var anySplit = $(this).hasClass('split')
        if (anySplit == true) {
            // jika ada split
            var variable_box = $(this).data('variable_box')
            var variable_form = $(this).data('variable_form')
            // fillBoxFunction(variable_box, variable_form)
        }
    })
    $(document).on('keyup', '.fillBoxPita', function(e) {
        var variable_box = $(this).data('variable_box')
        var variable_form = $(this).data('variable_form')
        fillBoxFunction(variable_box, variable_form)
    })

    function fillBoxFunction(variable_box, variable_form) {
        var value = $('.fillBoxPita' + variable_box).map(function() {
            return $(this).val();
        }).get();
        var sum = value.reduce(function(a, b) {
            if (a == '') {
                a = 0
            }
            if (b == '') {
                b = 0
            }
            return parseFloat(a) + parseFloat(b);
        }, 0);
        $('#jumlahPlanning' + variable_form).val(sum)
        checkAvailableFillBoxPopover(variable_box, variable_form)
    }

    function checkAvailableFillBoxPopover(variable_box, variable_form) {
        var avail = fillPitaVariable.find((v, k) => {
            if (v.variable_box == variable_box) return true
        })
        var value = $('.fillBoxPita' + variable_box).map(function() {
            return $(this).val();
        }).get();
        var id = $('.fillBoxPita' + variable_box).map(function() {
            return $(this).data('id');
        }).get();
        var produk = $('.fillBoxPita' + variable_box).map(function() {
            return $(this).data('produk');
        }).get();
        var mesin = $('.fillBoxPita' + variable_box).map(function() {
            return $(this).data('mesin');
        }).get();
        var date = $('.fillBoxPita' + variable_box).map(function() {
            return $(this).data('date');
        }).get();
        var detail = []
        for (let i = 0; i < value.length; i++) {
            detail.push({
                'id': id[i],
                'value': value[i],
            })
        }
        if (avail != undefined) {
            // pernah diisi
            avail.detail = detail
        } else {
            // tidak pernah diisi
            fillPitaVariable.push({
                'variable_box': variable_box,
                'variable_form': variable_form,
                'produk': produk[0],
                'mesin': mesin[0],
                'date': date[0],
                'detail': detail
            })
        }
        simpanProdukTarget()
    }

    function closeAllPopover() {
        const popovers = Array.from(document.querySelectorAll('.jumlahPlanning'));
        popovers.forEach((popover) => {
            const popoverInstance = bootstrap.Popover.getInstance(popover);
            if (popoverInstance) {
                popoverInstance.hide();
            }
        });
    }
</script>