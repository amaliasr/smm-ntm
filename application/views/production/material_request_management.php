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
        cursor: pointer;
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
    }

    .bg-callout-1 {
        background-color: #16a4d8;
    }

    .bg-callout-2 {
        background-color: #60dbe8;
    }

    .bg-callout-3 {
        background-color: #8bd346;
    }

    .bg-callout-4 {
        background-color: #efdf48;
    }

    .bg-callout-5 {
        background-color: #f9a52c;
    }

    .bg-callout-6 {
        background-color: #d64e12;
    }

    .bg-callout-7 {
        background-color: #245953;
    }

    .bg-callout-8 {
        background-color: #D25380;
    }

    .bg-callout-9 {
        background-color: #E08E6D;
    }

    .bg-callout-10 {
        background-color: #537188;
    }

    .bg-callout-11 {
        background-color: #CBB279;
    }

    .bg-callout-12 {
        background-color: #B04759;
    }

    .bg-callout-13 {
        background-color: #4C3D3D;
    }

    .bg-callout-14 {
        background-color: #617A55;
    }

    .bg-callout-15 {
        background-color: #394867;
    }

    .text-callout-0 {
        color: #9b5fe0;
    }

    .text-callout-1 {
        color: #16a4d8;
    }

    .text-callout-2 {
        color: #60dbe8;
    }

    .text-callout-3 {
        color: #8bd346;
    }

    .text-callout-4 {
        color: #efdf48;
    }

    .text-callout-5 {
        color: #f9a52c;
    }

    .text-callout-6 {
        color: #d64e12;
    }

    .font-small {
        font-size: 9px;
    }


    .fixed-right {
        position: fixed;
        right: 0;
        width: 120px;
        z-index: 1030;
    }

    .bg-gradient-material_request {
        background-color: #9A1663 !important;
        background-image: linear-gradient(135deg,
                #9A1663 0%,
                rgba(224, 20, 76, 0.8) 100%) !important;
    }

    .bg-pinku {
        color: white;
        background-color: #F56EB3;
    }

    .bg-lembut {
        background: #9a2697;
        background: -webkit-linear-gradient(141deg, #9a2697 0%, #5d09b0 100%);
        background: linear-gradient(141deg, #9a2697 0%, #5d09b0 100%);
    }

    .bg-glass {
        background: rgba(255, 255, 255, 0.8);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .text-dark-grey {
        color: #434242 !important;
    }

    .shadow-good {
        -webkit-box-shadow: 2px 1px 23.5px -4px #dddddd !important;
        -moz-box-shadow: 2px 1px 23.5px -4px #dddddd !important;
        box-shadow: 2px 1px 23.5px -4px #dddddd !important;
    }

    .bg-abu-muda {
        background-color: #EAEAEA;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FED049;
    }

    .select2-container--default .select2-selection--multiple {
        font-size: 11px;
    }

    input[class="inputBaru"]::-webkit-outer-spin-button,
    input[class="inputBaru"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[class="inputBaru"] {
        -moz-appearance: textfield;
    }
</style>
<!-- loading CSS -->
<style type="text/css">
    @keyframes ldio-4vsyzdoqibk {
        0% {
            transform: translate(6px, 40px) scale(0);
        }

        25% {
            transform: translate(6px, 40px) scale(0);
        }

        50% {
            transform: translate(6px, 40px) scale(1);
        }

        75% {
            transform: translate(40px, 40px) scale(1);
        }

        100% {
            transform: translate(74px, 40px) scale(1);
        }
    }

    @keyframes ldio-4vsyzdoqibk-r {
        0% {
            transform: translate(74px, 40px) scale(1);
        }

        100% {
            transform: translate(74px, 40px) scale(0);
        }
    }

    @keyframes ldio-4vsyzdoqibk-c {
        0% {
            background: #e15b64
        }

        25% {
            background: #abbd81
        }

        50% {
            background: #f8b26a
        }

        75% {
            background: #f47e60
        }

        100% {
            background: #e15b64
        }
    }

    .ldio-4vsyzdoqibk div {
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        transform: translate(40px, 40px) scale(1);
        background: #e15b64;
        animation: ldio-4vsyzdoqibk 1s infinite cubic-bezier(0, 0.5, 0.5, 1);
    }

    .ldio-4vsyzdoqibk div:nth-child(1) {
        background: #f47e60;
        transform: translate(74px, 40px) scale(1);
        animation: ldio-4vsyzdoqibk-r 0.25s infinite cubic-bezier(0, 0.5, 0.5, 1), ldio-4vsyzdoqibk-c 1s infinite step-start;
    }

    .ldio-4vsyzdoqibk div:nth-child(2) {
        animation-delay: -0.25s;
        background: #e15b64;
    }

    .ldio-4vsyzdoqibk div:nth-child(3) {
        animation-delay: -0.5s;
        background: #f47e60;
    }

    .ldio-4vsyzdoqibk div:nth-child(4) {
        animation-delay: -0.75s;
        background: #f8b26a;
    }

    .ldio-4vsyzdoqibk div:nth-child(5) {
        animation-delay: -1s;
        background: #abbd81;
    }

    .loadingio-spinner-ellipsis-6qq63lm6xx6 {
        width: 71px;
        height: 71px;
        display: inline-block;
        overflow: hidden;
        background: none;
    }

    .ldio-4vsyzdoqibk {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(0.71);
        backface-visibility: hidden;
        transform-origin: 0 0;
        /* see note above */
    }

    .ldio-4vsyzdoqibk div {
        box-sizing: content-box;
    }

    /* generated by https://loading.io/ */
</style>
<!-- progress bar -->
<style type="text/css">
    .progress {
        width: 50px;
        height: 50px;
        background: none;
        position: relative;
    }

    .progress::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 10px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress .progress-left {
        left: 0;
    }

    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 10px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress .progress-right {
        right: 0;
    }

    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress .progress-value {
        position: absolute;
        top: 0;
        left: 0;
    }

    /* .select2-selection {
        border: 0px white !important;
    }

    .select2-selection__arrow b {
        display: none !important;
    } */

    ul.select2-results__options li {
        font-size: 12px;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">

        <div class="row justify-content-center">
            <div class="col pb-4">
                <h1 class="text-dark-grey"><b><i class="fa fa-wrench me-3"></i>Management Material</b></h1>
            </div>
            <div class="col pb-4 text-end">
                <!-- <button type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-industry me-2"></i> Management Machine</button>
                <button type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-laptop me-2"></i> Monitoring Warehouse</button> -->
            </div>
        </div>
        <!-- <div class="row mb-3" style="height: 100px;">
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#6C4AB6">
                    <div class="card-body">
                        <p class="text-white"><b>Request</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#8D72E1">
                    <div class="card-body">
                        <p class="text-white"><b>Warehouse</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#8D9EFF">
                    <div class="card-body">
                        <p class="text-white"><b>Machine</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#B9E0FF">
                    <div class="card-body">
                        <p class="text-white"><b>Request</b></p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="card shadow-sm" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 text-center align-self-center">
                                <img src="<?= base_url() ?>assets/image/svg/document.svg" class="img-responsive" alt="Image" style="width:100%">
                            </div>
                            <div class="col-8 align-self-center">
                                <h3 class="m-0"><b>Material Request</b></h3>
                                <p class="m-0 small-text">Find a new request or latest request, you can manage it after click a list below</p>
                            </div>
                            <div class="col-2 align-self-center">
                                <?php if (job_foreman()) { ?>
                                    <button type="button" class="btn btn-outline-dark" onclick="openNewMaterialRequest()"><i class="fa fa-plus"></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 pt-4 pb-2">
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search" id="search_nama">
                                </div>
                            </div>
                            <div class="col-2 pt-4 pb-2 align-self-center">
                                <button type="button" class="ps-3 pe-3 btn btn-outline-dark btn shadow-none" onclick="filterCanvas()"><i class="fa fa-filter"></i></button>
                            </div>
                        </div>
                        <div class="overflow-auto" style="height:500px;">
                            <div class="row" id="listMaterialRequest">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row h-100" id="detailMaterialRequest">
                            <div class="col-12 align-self-center text-center">
                                <p class="small"><i>Pilih Material Request pada <br>Bagian Kiri untuk Melihat Detail</i></p>
                                <lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow-sm h-100 mt-3" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1 text-center align-self-center">
                                <img src="<?= base_url() ?>assets/image/svg/history.svg" class="img-responsive" alt="Image" style="width:50%">
                            </div>
                            <div class="col-8 align-self-center">
                                <h3 class="m-0"><b>Material Statistic</b></h3>
                                <p class="m-0 small-text">Learn More about Material Request based of time</p>
                            </div>
                            <div class="col-3">
                                <div class="float-end">
                                    <!-- <button type="button" class="btn btn-outline-dark btn-sm me-1" onclick=""><span class="fa fa-refresh"></span></button> -->
                                    <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        Option
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <h6 class="dropdown-header">Show By</h6>
                                        </li>
                                        <li><a class="dropdown-item" onclick="changeStatistic('graph')">Graph <i class="ms-2 fa fa-check text-success" id="successGraph"></i></a></li>
                                        <li><a class="dropdown-item" onclick="changeStatistic('table')">Table <i class="ms-2 fa fa-check text-success d-none" id="successTable"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 pt-5">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-5/">
                                                <p><b class="small">Settings</b></p>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <label class="small-text mt-2 mb-2">Date Range</label>
                                                            <div class="col-6">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control form-control-sm" id="dateStart" placeholder="">
                                                                    <label for="dateStart">Date Start</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control form-control-sm" id="dateEnd" placeholder="">
                                                                    <label for="dateEnd">Date End</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <label class="small-text mt-2 mb-2">Production Type</label>
                                                        <br>
                                                        <div id="listProductionType">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 pt-5">
                                                <p><b class="small">Data</b></p>
                                                <div id="graphStats">
                                                    <canvas id="myChart2" width="100%"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-12 pt-3">
                                                <div id="listItems">
                                                </div>
                                            </div>
                                            <div class="col-12 pt-5">
                                                <p><b class="small disable-text">Average Request in A Day</b></p>
                                                <div class="mt-3">
                                                    <div class="row" id="listAverage">

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
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;text-align:center;margin:0 auto;display:none;"></div>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
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

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })

    function loadingData(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
    }

    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var id_material = '<?= $id ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var data_user = ""
    var data_request_manage = ""
    var stage_step = []
    var stage = 0
    var data_stats = ''
    var data_statistic = ''

    function filterCanvas() {
        $('.offcanvas').offcanvas('show')
        var header = ''
        header += '<h5 id="offcanvasRightLabel">Filter</h5>'
        header += '<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>'
        $('#canvasHeader').html(header)
        var body = ''
        body += '<div class="row">'
        body += '<div class="col-12">'
        body += '<b class="small">Tanggal Mulai</b>'
        body += '<input class="form-control datepicker mb-3" type="text" id="dateStart" placeholder="Tanggal Mulai" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + dateStart + '" onchange="changeFilter()">'
        body += '</div>'
        body += '<div class="col-12">'
        body += '<b class="small">Tanggal Akhir</b>'
        body += '<input class="form-control datepicker mb-3" type="text" id="dateEnd" placeholder="Tanggal Akhir" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + dateEnd + '" onchange="changeFilter()">'
        body += '</div>'
        body += '</div>'
        $('#canvasBody').html(body)
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
            firstDay: 0,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    dateStart = formatDate(date1['dateInstance'])
                    dateEnd = formatDate(date2['dateInstance'])
                    getData()
                });
            },
        })
    }
    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                $('#listMaterialRequest').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#listMaterialRequest').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_zadfo6lc.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })


    function getData() {
        var data = {}
        data.employeeId = user_id
        if (id_material != '') {
            data.materialRequestId = id_material
        }
        $.ajax({
            url: "<?= api_produksi('getMaterialRequestManage'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                $('#listMaterialRequest').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#listMaterialRequest').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_zadfo6lc.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            success: function(response) {
                data_request_manage = response['data']
                data_stats = data_request_manage.stats
                data_statistic = data_stats.stats[0]
                getDataCurrentStok()
            }
        })
    }
    var data_all_stok = ''
    var stok_by_id = {}
    var satuan_by_name = {}

    function getDataCurrentStok() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataStokItem'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                $('#listMaterialRequest').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#listMaterialRequest').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_zadfo6lc.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            success: function(response) {
                data_all_stok = response['data']
                $.each(data_all_stok, function(key, value) {
                    stok_by_id[value.item_id] = value.jumlah
                    satuan_by_name[''] = ''
                    satuan_by_name[value.item_id] = value.satuan_name
                })

                listMaterialRequest()
            }
        })
    }

    function listMaterialRequest() {
        var html = ""
        $.each(data_request_manage['materialRequest'], function(key, value) {
            var jum = 0
            if (value['material'][0] != null) {
                jum = value['material'][0].length
            }
            var textApprove = 'text-success'
            if (value.status == 'DISAPPROVE') {
                textApprove = 'text-danger'
            }
            html += '<div class="col-12" id="card_search' + key + '">'
            html += '<div class="card shadow-none card-hoper mb-2 cardMaterial" onclick="detailMaterialRequest(' + key + ',' + value.id + ')" id="cardMaterial' + value.id + '">'
            html += '<div class="card-body p-0">'
            html += '<div class="row p-0 m-0">'

            html += '<div class="col-1 p-1 rounded-start bg-' + value['production_type']['name'].toLowerCase() + ' text-center">'
            html += '<div class="row d-flex align-items-center h-100">'
            html += '<div class="col text-center">'
            html += '<span class="small-text text-white vertical-text">' + value['production_type']['name'] + '</span>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-9 p-3">'
            html += '<div class="row">'
            html += '<div class="col">'
            html += '<b class="m-0 text_search" data-id="' + key + '">' + value['code'] + '</b>'
            html += '<p class="m-0 small-text text-orange fw-bold text_search" data-id="' + key + '">' + value['created_employee']['name'] + '</p>'
            html += '<p class="m-0 mt-2 super-small-text">Time : ' + formatDateIndonesia(value['date']) + ' <span class="text-light ps-1 pe-1">|</span> Status : <span class="text-success text_search fw-bold ' + textApprove + '" data-id="' + key + '">' + value['status'] + '</span> <span class="text-light ps-1 pe-1">|</span> ' + jum + ' Items</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-2 text-center align-self-center">'
            if (value.status == 'RECEIVED') {
                html += '<i class="fa fa-check text-success fa-2x"></i>'
            } else if (value.status == 'REQUESTED') {
                html += '<i class="fa fa-clock-o text-light fa-2x"></i>'
            } else if (value.status == 'APPROVED') {
                html += '<i class="fa fa-file-o text-light fa-2x"></i>'
            } else if (value.status == 'DISAPPROVE') {
                html += '<i class="fa fa-times text-danger fa-2x"></i>'
            }
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listMaterialRequest').html(html)
        dataStats()
        if (id_material != '') {
            // console.log(data_request_manage)
            var index = data_request_manage.materialRequest.findIndex(x => x.id == id_material);
            if (index != -1) {
                detailMaterialRequest(index, id_material)
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Tidak Ditemukan',
                    text: 'ID yang diberikan tidak ada pada daftar Material Request yang ada. Silahkan cek ulang'
                });
            }
        }
    }

    var data_isi_material = []
    var data_isi_material_group = []
    var data_isi_machine_group = []
    var data_materialrequest = ''

    function detailMaterialRequest(id, id_materials = '') {
        reset()
        // pembentukan variable
        data_materialrequest = data_request_manage['materialRequest'][id]
        $.each(data_materialrequest['machine_type'], function(key, value) {
            // machine type
            $.each(value['machine_sub_type'], function(keys, values) {
                // machine sub type
                $.each(values['detail'], function(keys2, values2) {
                    // machine
                    $.each(values2['machine']['material'], function(keys3, values3) {
                        data_isi_material.push({
                            'machine_type_id': value['id'],
                            'machine_type_name': value['name'],
                            'machine_subtype_id': values['id'],
                            'machine_subtype_name': values['name'],
                            'machine_id': values2['machine']['id'],
                            'machine_code': values2['machine']['code'],
                            'material_request_machine_id': values2['id'],
                            'material_id': values3['material']['id'],
                            'material_request_item_id': values3['material']['material_request_item_id'],
                            'material_name': values3['material']['name'],
                            'material_alias': values3['material']['alias'],
                            'material_code': values3['material']['code'],
                            'unit_id': values3['unit']['id'],
                            'unit_request_id': values3['unit_request']['id'],
                            'unit_approve_id': values3['unit_approve']['id'],
                            'unit': values3['unit']['name'],
                            'unit_request_name': values3['unit_request']['name'],
                            'unit_approve_name': values3['unit_approve']['name'],
                            'unit_option': values3['unit_option'],
                            'qty': values3['qty_request'],
                            'qty_approve': values3['qty_approve'],
                        })
                    })
                })
            })
        })
        data_isi_material_group = groupAndSum(data_isi_material, ['material_id', 'material_name', 'material_alias', 'material_code', 'unit', 'unit_request_name', 'unit_approve_name'], ['qty', 'qty_approve'])
        data_isi_machine_group = groupAndSum(data_isi_material, ['machine_code', 'machine_id', 'material_request_machine_id'], ['qty', 'qty_approve'])
        formDetailMaterialRequest()
        if (id_materials != '') {
            clickedMaterial(id_materials)
        }
    }

    function clickedMaterial(id) {
        $('.cardMaterial').removeClass('bg-light')
        $('#cardMaterial' + id).addClass('bg-light')
    }

    function reset() {
        // test
        data_isi_material = []
        data_isi_material_group = []
        data_materialrequest = ''
        $('#detailMaterialRequest').html('')
    }

    function formDetailMaterialRequest() {
        $('#detailMaterialRequest').removeClass('h-100')
        headerMaterialRequest()
        // btnMaterialRequest()
        contentMaterialRequest()
        infoMaterialRequest()
        if (job_logistik_warehouse) {
            if (id_material != '' && data_materialrequest.id == id_material && data_materialrequest.is_process == null && data_materialrequest.is_approve == 1) {
                prosesLogistik()
            }
        }
    }

    function headerMaterialRequest() {
        var html = ""
        html += '<div class="col-12">'
        html += '<div class="row">'
        html += '<div class="col-1 text-center align-self-center">'
        html += '<img src="<?= base_url() ?>assets/image/svg/detail.svg" class="img-responsive" alt="Image" style="width:100%">'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<h3 class="m-0"><b>' + data_materialrequest['code'] + '</b></h3>'
        html += '<p class="m-0 small-text"><i class="fa fa-calendar me-2"></i>' + formatDateIndonesia(data_materialrequest['date']) + '</p>'
        html += '</div>'
        html += '<div class="col-auto text-end">'
        html += '<div class="float-end" id="listBtnDetail">'
        // html += '<button type="button" class="btn btn-outline-dark btn-sm me-1" onclick=""><span class="fa fa-refresh"></span></button>'
        html += '<button type="button" class="btn btn-outline-dark btn-sm me-1" onclick="cetakMaterialRequest(' + data_materialrequest.id + ')"><span class="fa fa-print"></span></button>'
        // html += '<button class="btn btn-outline-dark btn-sm dropdown-toggle me-1" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Option</button>'
        if (job_logistik_warehouse) {
            if (data_materialrequest.is_approve == 1 && data_materialrequest.is_process == null) {
                html += '<button type="button" class="btn btn-success btn-sm" onclick="prosesLogistik()"><i class="fa fa-truck text-white me-2"></i>Proses Logistik</button>'
            }
        }
        html += '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">'
        html += '<li>'
        html += '<h6 class="dropdown-header">Show By</h6>'
        html += '</li>'
        html += '<li><a class="dropdown-item">Table <i class="ms-2 fa fa-check text-success" id="successAll"></i></a></li>'
        html += '<li><a class="dropdown-item">Cardboard <i class="ms-2 fa fa-check text-success d-none" id="successSkm"></i></a></li>'
        html += '</ul>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#detailMaterialRequest').append(html)
    }
    var imgBase64Data

    function cetakMaterialRequest(id) {
        var urlQR = '<?= base_url() ?>production/material_request_approval/' + id
        var qrcode = new QRCode("qrcode", {
            text: urlQR,
            width: 100,
            height: 100,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
        imgBase64Data = qrcode._oDrawing._elCanvas.toDataURL("image/png")
        var image = btoa(imgBase64Data)
        var url = '<?= base_url('production/cetakMaterialRequest') ?>'
        var params = "*$" + image + "*$" + id + "*$" + user_id
        window.open(url + '?params=' + (params), '_blank')
    }

    function contentMaterialRequest() {
        var html = ""
        html += '<div class="col-12 pt-5">'
        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<nav>'
        html += '<div class="nav nav-tabs" id="nav-tab" role="tablist">'
        html += '<button class="nav-link p-3 small text-dark active" id="nav-0-tab" data-bs-toggle="tab" data-bs-target="#nav-0" type="button" role="tab" aria-controls="nav-0" aria-selected="true"><i class="fa fa-list me-2"></i>Detail Request</button>'
        html += '<button class="nav-link p-3 small text-dark " id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="false"><i class="fa fa-cog me-2"></i>Machine Usage</span></button>'
        html += '<button class="nav-link p-3 small text-dark" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false"><i class="fa fa-clock-o me-2"></i>Activities</button>'
        html += '</div>'
        html += '</nav>'
        html += '<div class="tab-content" id="nav-tabContent">'
        html += '<div class="tab-pane fade show active" id="nav-0" role="tabpanel" aria-labelledby="nav-0-tab">'
        html += '<div class="table-responsive mt-3">'
        html += '<table class="table table-sm table-hover" style="font-size: 10px;">'
        html += '<thead>'
        html += '<tr>'
        html += '<th>Kode</th>'
        html += '<th>Alias</th>'
        html += '<th>Material</th>'
        html += '<th>Mesin</th>'
        html += '<th>QTY</th>'
        html += '<th>Unit</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        var anyChanged = 0
        $.each(data_isi_material_group, function(key, value) {
            html += '<tr>'
            html += '<td>' + value['material_code'] + '</td>'
            html += '<td class="bg-light">' + value['material_alias'] + '</td>'
            html += '<td>' + value['material_name'] + '</td>'
            html += '<td>'
            $.each(data_isi_material, function(keys, values) {
                if (value['material_id'] == values['material_id']) {
                    // console.log(values.machine_id)
                    html += '<span class="badge bg-callout-' + values.machine_id + ' p-1 me-1">' + values['machine_code'] + '</span>'
                }
            })
            html += '</td>'
            if (value.qty != value.qty_approve && data_materialrequest.is_process != null) {
                anyChanged++
                html += '<td class="text-end"><span>' + number_format(value.qty_approve) + '</span><br><span class="text-decoration-line-through text-danger">' + number_format(value.qty) + '<span></td>'
            } else {
                html += '<td class="text-end">' + number_format(value.qty) + '</td>'
            }
            if (value.unit_approve_name == null || value.unit_request_name == value.unit_approve_name) {
                html += '<td>' + value['unit'] + '</td>'
            } else {
                html += '<td class="text-end"><span>' + value.unit_approve_name + '</span><br><span class="text-decoration-line-through text-danger">' + value.unit_request_name + '<span></td>'

            }
            html += '</tr>'
        })
        html += '</tbody>'
        html += '</table>'
        html += '</div>'
        if (anyChanged > 0) {
            html += '<p class="m-0 small-text text-danger">*) Tanda Merah menandakan terjadi perubahan Jumlah Request dengan Jumlah yang Kirim Logistik</p>'
        }
        html += '</div>'
        html += '<div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">'
        $.each(data_isi_machine_group, function(key, value) {
            html += '<div class="card card-hoper mt-2 mb-2 shadow-none bd-callout-' + key + '">'
            html += '<div class="card-body">'
            html += '<div class="row">'
            html += '<div class="col-6 align-self-center">'
            html += '<h3><b class="float-start">' + value['machine_code'] + '</b></h3>'
            html += '</div>'
            html += '<div class="col-6">'
            // html += '<div class="row">'
            // html += '<div class="col small-text">Catcher / Helper</div>'
            // html += '<div class="col small-text text-end"><b>Supri</b></div>'
            // html += '</div>'
            // html += '<div class="row">'
            // html += '<div class="col small-text">Operator</div>'
            // html += '<div class="col small-text text-end"><b>Denny</b></div>'
            // html += '</div>'
            html += '</div>'
            html += '<div class="col-12">'
            html += '<hr class="mt-2 mb-2">'
            html += '</div>'
            html += '<div class="col-12 pt-2">'
            html += '<div class="table-responsive">'
            html += '<table class="table table-sm table-hover" style="font-size: 10px;">'
            html += '<thead>'
            html += '<tr>'
            html += '<th>Kode</th>'
            html += '<th>Alias</th>'
            html += '<th>Material</th>'
            html += '<th>QTY</th>'
            html += '<th>Unit</th>'
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            // console.log(data_isi_material)
            $.each(data_isi_material, function(keys, values) {
                if (value['machine_id'] == values['machine_id']) {
                    html += '<tr>'
                    html += '<td>' + values['material_code'] + '</td>'
                    html += '<td class="bg-light">' + values['material_alias'] + '</td>'
                    html += '<td>' + values['material_name'] + '</td>'
                    html += '<td class="text-end">' + values['qty'] + '</td>'
                    html += '<td class="text-center">' + values['unit'] + '</td>'
                    html += '</tr>'
                }
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        html += '</div>'
        html += '<div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">'
        html += '<div class="timeline p-5 super-small-text">'

        var date = formatDateIndonesia(data_materialrequest.created_at)
        var check = '<i class="fa fa-check text-success fa-3x"></i>'
        var user = data_materialrequest.created_employee.name

        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        html += '<div class="timeline-item-marker-text" style="white-space: normal;font-size:11px;">' + date + '</div>'
        html += '<div class="timeline-item-marker-indicator bg-primary-soft text-primary">' + check + '</div>'
        html += '</div>'
        html += '<div class="timeline-item-content pt-0">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<h6 class="text-dark">Material Request Created</h6>'
        html += '<p>Material Request made by ' + user + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        if (data_materialrequest.approve_at != null) {
            date = formatDateIndonesia(data_materialrequest.approve_at)
            if (data_materialrequest.is_approve == 1) {
                check = '<i class="fa fa-check text-success fa-3x"></i>'
            } else {
                check = '<i class="fa fa-times text-danger fa-3x"></i>'
            }
        } else {
            date = '<i>(Not Available)</i>'
            check = '<i class="fa fa-check text-light fa-3x"></i>'
        }
        var user = data_materialrequest.approved_employee.name
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        html += '<div class="timeline-item-marker-text" style="white-space: normal;font-size:11px;">' + date + '</div>'
        html += '<div class="timeline-item-marker-indicator bg-primary-soft text-primary">' + check + '</div>'
        html += '</div>'
        html += '<div class="timeline-item-content pt-0">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<h6 class="text-dark">Approval SMD SPV</h6>'
        html += '<p>Approving by ' + user + '</p>'
        if (data_materialrequest.is_approve == 0) {
            html += '<div class="card shadow-none">'
            html += '<div class="card-body">'
            html += '<p class="m-0"><b>Alasan Pembatalan :</b></p>'
            html += '<p class="m-0">' + data_materialrequest.note + '</p>'
            html += '</div>'
            html += '</div>'
        }
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        if (data_materialrequest.process_at != null) {
            date = formatDateIndonesia(data_materialrequest.process_at)
            if (data_materialrequest.is_process == 1) {
                check = '<i class="fa fa-check text-success fa-3x"></i>'
            } else {
                check = '<i class="fa fa-times text-danger fa-3x"></i>'
            }
        } else {
            date = '<i>(Not Available)</i>'
            check = '<i class="fa fa-check text-light fa-3x"></i>'
        }
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        html += '<div class="timeline-item-marker-text" style="white-space: normal;font-size:11px;">' + date + '</div>'
        html += '<div class="timeline-item-marker-indicator bg-primary-soft text-primary">' + check + '</div>'
        html += '</div>'
        html += '<div class="timeline-item-content pt-0">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<h6 class="text-dark">Processed by Logistik</h6>'
        html += '<p>This is the content for the first timeline item. In this styled example, we are styling the timeline marker with background and typography utility classes. We have also shown that you can use the card component within the timeline item content.</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        if (data_materialrequest.receive_at != null) {
            date = formatDateIndonesia(data_materialrequest.receive_at)
            if (data_materialrequest.is_receive == 1) {
                check = '<i class="fa fa-check text-success fa-3x"></i>'
            } else {
                check = '<i class="fa fa-times text-danger fa-3x"></i>'
            }
        } else {
            date = '<i>(Not Available)</i>'
            check = '<i class="fa fa-check text-light fa-3x"></i>'
        }
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        html += '<div class="timeline-item-marker-text" style="white-space: normal;font-size:11px;">' + date + '</div>'
        html += '<div class="timeline-item-marker-indicator bg-primary-soft text-primary">' + check + '</div>'
        html += '</div>'
        html += '<div class="timeline-item-content pt-0">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<h6 class="text-dark">Received by Foreman</h6>'
        html += '<p>This is the content for the first timeline item. In this styled example, we are styling the timeline marker with background and typography utility classes. We have also shown that you can use the card component within the timeline item content.</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#detailMaterialRequest').append(html)
    }

    function btnMaterialRequest() {
        var html = ""
        // html += '<div class="col-12 text-end">'
        html += '<button type="button" class="btn btn-success btn-sm"><i class="fa fa-truck text-white me-2"></i>Proses Logistik</button>'
        // html += '</div>'
        $('#listBtnDetail').append(html)
    }

    function infoMaterialRequest() {
        var html = ""
        html += '<div class="col-12 pt-2">'
        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<b>Catatan</b>'

        html += '<div class="row mt-3">'
        html += '<div class="col-12 pb-3">'
        html += '<p class="m-0 small-text">' + data_materialrequest.note + '</p>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 pt-2">'
        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<b>More Information</b>'
        html += '<div class="row mt-3">'
        html += '<div class="col-4 pb-3">'
        html += '<p class="m-0 text-dark"><b>Create By</b></p>'
        html += '<p class="m-0 small-text">' + data_materialrequest.created_employee.name + '</p>'
        html += '</div>'
        html += '<div class="col-4 pb-3">'
        html += '<p class="m-0 text-dark"><b>Date & Time</b></p>'
        html += '<p class="m-0 small-text">' + formatDateIndonesia(data_materialrequest.date) + '</p>'
        html += '</div>'
        html += '<div class="col-4 pb-3">'
        html += '<p class="m-0 text-dark"><b>Shift</b></p>'
        html += '<p class="m-0 small-text">#1 (07:00 - 15:00)</p>'
        html += '</div>'
        html += '<div class="col-4 pb-3">'
        html += '<p class="m-0 text-dark"><b>Status</b></p>'
        html += '<p class="m-0 small-text">' + data_materialrequest.status + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#detailMaterialRequest').append(html)

    }
    var dateStart = ''
    var dateEnd = ''
    var productionTypeId = []

    function dataStats() {
        // dateStart = data_stats.stats[0].datasets[0].label
        // dateEnd = data_stats.stats[0].datasets[(data_stats.stats[0].datasets.length - 1)].label
        dateStart = data_request_manage.statsTanggal.date_start
        dateEnd = data_request_manage.statsTanggal.date_end
        $('#dateStart').val(dateStart)
        $('#dateEnd').val(dateEnd)
        createStats()
    }

    function changeType(type) {
        var data = $('#typeBtn' + type).hasClass('active')
        if (data == true) {
            // remove
            productionTypeId.splice($.inArray(type, productionTypeId), 1);
            $('#typeBtn' + type).removeClass('bg-dark text-light active')
            $('#typeBtn' + type).addClass('bg-light text-dark')
        } else {
            // insert
            productionTypeId.push(type)
            $('#typeBtn' + type).addClass('bg-dark text-light active')
            $('#typeBtn' + type).removeClass('bg-light text-dark')
        }
        dataChangeStats()
    }

    function dataChangeStats() {
        $.ajax({
            url: "<?= api_produksi('getMaterialRequestStats'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                dateStart: dateStart,
                dateEnd: dateEnd,
                productionTypeId: productionTypeId
            },
            error: function(xhr) {
                $('#graphStats').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_rc6CDU.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#graphStats').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_zadfo6lc.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            success: function(response) {
                data_stats = response['data']
                data_statistic = data_stats.stats[0]
                $('#graphStats').html('')
                $('#graphStats').html('<canvas id="myChart2" width="100%"></canvas>')
                listItems()
            }
        })
    }

    function createStats() {
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
            firstDay: 0,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    dateStart = formatDate(date1['dateInstance'])
                    dateEnd = formatDate(date2['dateInstance'])
                    dataChangeStats()
                });
            },
        })
        listProductionType()
    }

    function listProductionType() {
        var html = ""
        $.each(data_request_manage.productionType, function(key, value) {
            productionTypeId.push(value['id'])
            html += '<span class="badge rounded-pill me-1 bg-dark text-light p-2 active" style="cursor:pointer;" onclick="changeType(' + value['id'] + ')" id="typeBtn' + value['id'] + '">' + value['name'] + '</span>'
        })
        $('#listProductionType').html(html)
        listItems()
    }

    function listItems() {
        $('.disable-text').removeClass('d-none')
        var html = ""
        if (data_stats.average.length > 0) {
            html += '<select class="form-select w-100 items" multiple id="items" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;" onchange="changeItemGraph()">'
            $.each(data_stats.average, function(key, value) {
                html += '<option value="' + value['name'] + '" selected>' + value['name'] + '</option>'
            })
            html += '</select>'
            $('#listItems').html(html)
            $('#items').select2({
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                closeOnSelect: false,
                // dropdownParent: $('#modal'),
            });
        } else {
            html += '<div class="row">'
            html += '<div class="col-12 text-center">'
            html += 'Tidak Ada Data'
            html += '</div>'
            html += '</div>'
            $('#listItems').html(html)
        }
        averageStats()
    }

    function averageStats() {
        var html = ""
        $.each(data_stats.average, function(key, value) {
            html += '<div class="col-3 pb-3">'
            html += '<div class="card shadow-none h-100 text-white" style="background-color: #645CBB;">'
            html += '<div class="card-body p-2">'
            html += '<p class="small-text m-0">' + value['name'] + '</p>'
            html += '<b class="h2 text-white">' + roundToTwo(value['avg']) + '</b>'
            html += '<p class="m-0 small-text">Tray per day</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listAverage').html(html)
        statsGraph()
    }

    function isInArray(value, array) {
        return array.indexOf(value) > -1;
    }

    function changeItemGraph() {
        var item = $('#items').val()
        // reset data statistic
        var a = 0
        data_statistic = {}
        var labels = []
        data_stats.stats[0].labels.forEach(e => {
            labels.push(e)
        })
        var datasets = []
        $.each(data_stats.stats[0].datasets, function(key, value) {
            var detail = []
            value.data.forEach(element => {
                detail.push(element)
            });
            datasets.push({
                label: value.label,
                data: detail,
            })
        })
        data_statistic = {
            labels: labels,
            datasets: datasets
        }
        // cari mana yang tidak ada pada item
        data_stats.stats[0].labels.forEach(e => {
            if (isInArray(e, item) == false) {
                data_statistic.labels.splice(a, 1);
                data_statistic.datasets.forEach(element => {
                    element.data.splice(a, 1);
                });
            }
            a++
        });
        $('#graphStats').html('')
        $('#graphStats').html('<canvas id="myChart2" width="100%"></canvas>')
        listItems()
    }

    function statsGraph() {
        if (data_stats.average.length > 0) {
            var data = data_statistic.datasets.filter((value, key) => {
                if (value.data[0] != null) return true
            })
            var labels = []
            for (let i = 0; i < data_statistic.labels.length; i++) {
                labels.push(shortenName(data_statistic.labels[i], 2))
            }
            const ctx2 = document.getElementById('myChart2');
            new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: data
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    stacked: false,
                    plugins: {},
                    scales: {
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                        },
                    }
                },
            });
        } else {
            $('#graphStats').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_rc6CDU.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            $('.disable-text').addClass('d-none')
        }
    }

    function statsTable() {
        var html = ""
        if (data_stats.average.length > 0) {
            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-sm table-hover" style="font-size: 10px;" id="myTable">'
            html += '<thead>'
            html += '<tr>'
            html += '<th rowspan="2" class="small">Tanggal</th>'
            html += '<th colspan="' + data_stats.stats[0].labels.length + '" class="small">Material</th>'
            html += '</tr>'
            html += '<tr>'
            for (let i = 0; i < data_stats.stats[0].labels.length; i++) {
                html += '<th style="word-wrap: break-word;min-width: 10%;max-width: 10%;" class="small">' + shortenName(data_stats.stats[0].labels[i], 2) + '</th>'
            }
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            $.each(data_stats.stats[0].datasets, function(key, value) {
                html += '<tr>'
                html += '<td>' + value['label'] + '</td>'
                for (let i = 0; i < value['data'].length; i++) {
                    var nilai = value['data'][i]
                    if (value['data'][i] == null) {
                        nilai = ''
                    }
                    html += '<td class="text-end">' + number_format(nilai) + '</td>'
                }
                html += '</tr>'
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'
            $('#graphStats').html(html)
            $('#myTable').DataTable({
                responsive: true
            });
        } else {
            $('#graphStats').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_rc6CDU.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            $('.disable-text').addClass('d-none')
        }
    }

    function changeStatistic(status) {
        if (status == 'graph') {
            $('#successGraph').removeClass('d-none')
            $('#successTable').addClass('d-none')
            $('#graphStats').html('<canvas id="myChart2" width="100%"></canvas>')
            statsGraph()
        } else {
            $('#successGraph').addClass('d-none')
            $('#successTable').removeClass('d-none')
            $('#graphStats').html('')
            statsTable()
        }
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


    function openNewMaterialRequest() {
        var url = '<?= base_url() ?>production/createMaterialRequest'
        window.open(url, '_blank')
    }
    $(function() {
        $(".progress").each(function() {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');

            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }

        })

        function percentageToDegrees(percentage) {
            return percentage / 100 * 360
        }

    });
    var jumlahCheckLogistik = 0
    var jumlahTotalLogistik = 0
    var statusAlias = 0
    var stok_by_id_berjalan = {}
    var indexLogistik = {}

    function prosesLogistik() {
        jumlahCheckLogistik = 0
        jumlahTotalLogistik = 0
        stok_by_id_berjalan = {}
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Proses Logistik ' + data_materialrequest.code + '</h5>';
        html_header += '<button type="button" class="btn btn-sm btn-outline-dark float-end ms-5 shadow-none" id="btnAlias" onclick="triggerAlias()"><i class="fa fa-eye-slash me-2"></i> Show Alias</button>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        $.each(data_isi_machine_group, function(key, value) {
            indexLogistik[key] = 0
            html_body += '<div class="card mt-2 mb-2 shadow-none bd-callout-' + key + '">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'

            html_body += '<div class="col-6 align-self-center">'
            html_body += '<h3><b class="float-start">' + value['machine_code'] + '</b></h3>'
            html_body += '</div>'
            html_body += '<div class="col-12 pt-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-4"><b>Material</b></div>'
            // html_body += '<div class="col"><b>Alias</b></div>'
            html_body += '<div class="col"><b>QTY</b></div>'
            html_body += '<div class="col"><b>Unit</b></div>'
            html_body += '<div class="col"><b>Stok Gudang</b></div>'
            html_body += '<div class="col-1"><b></b></div>'
            html_body += '</div>'
            var b = 0
            $.each(data_isi_material, function(keys, values) {
                if (value['machine_id'] == values['machine_id']) {
                    html_body += insertCardMaterial(values, key, b, value.material_request_machine_id).html
                    indexLogistik[key]++
                    b++
                }
            })

            html_body += '<div class="row">'
            html_body += '<div class="col-12" id="listNewMaterial' + value.material_request_machine_id + '">'
            html_body += '</div>'
            html_body += '<div class="col-12 text-end">'

            html_body += '<button class="btn btn-sm btn-primary" onclick="addNewRow(' + key + ',' + value.material_request_machine_id + ')"><i class="fa fa-plus me-2"></i>New Materials ' + value.machine_code + '</button>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        html_body += '</div>'
        html_body += '<div class="row mt-3">'

        html_body += '<div class="col text-end align-self-center">Tanggal Ambil</div>'
        html_body += '<div class="col align-self-center">'
        html_body += '<input type="text" name="" id="tanggalAmbil" class="form-control form-control-sm p-1 datepicker" value="' + currentDate() + '">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        for (let i = 0; i < jumlahTotalLogistik; i++) {
            $('#itemStok' + i).select2({
                closeOnSelect: true,
                dropdownParent: $('#modal'),
                width: '100%',
            })

        }

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-primary w-100" id="btnApprove" disabled onclick="kirimApproval(' + data_materialrequest.id + ',' + "'" + data_materialrequest.code + "'" + ')"><span id="jumlahCardSelected">&nbsp;0&nbsp;</span> / <span>&nbsp;<span id="jumlahTotalLogistik">' + jumlahTotalLogistik + '</span>&nbsp;</span>&nbsp;Item Telah di Check</button>'
        $('#modalFooter').html(html_footer);
        $('.aliasName').hide()
    }

    function addNewRow(key, material_request_machine_id) {
        var values = {}
        values.material_request_item_id = new Date().getTime()
        values.qty = 0
        values.material_code = '<span class="text-danger">Pilih Material Terlebih Dahulu</span>'
        values.material_alias = ''
        values.material_id = ''
        values.unit = 'None'
        values.unit_id = ''
        var htmls = insertCardMaterial(values, key, indexLogistik[key], material_request_machine_id)
        $('#listNewMaterial' + material_request_machine_id).append(htmls.html)
        $('.aliasName').hide()
        $('#itemStok' + htmls.jumlah).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        indexLogistik[key]++
    }

    var variableDataProcess = []

    function insertCardMaterial(values, key, keys, material_request_machine_id) {
        var dataInsert = {}
        var html = ''
        if (stok_by_id_berjalan[values.material_id] == undefined) {
            stok_by_id_berjalan[values.material_id] = stok_by_id[values.material_id]
            if (stok_by_id[values.material_id] == undefined) {
                stok_by_id_berjalan[values.material_id] = 0
            }
        }
        html += '<div class="card shadow-none mb-2 cardItem" id="cardItem' + key + keys + material_request_machine_id + '" data-id="' + values.material_request_item_id + '" data-qty="' + values.qty + '" data-unit="' + values.unit_id + '" data-material_request_machine_id="' + material_request_machine_id + '">'
        html += '<div class="card-body p-2">'
        html += '<div class="row">'
        html += '<div class="col-4 small"><b class="super-small-text" id="materialCode' + key + keys + material_request_machine_id + '">' + values.material_code + '</b><span class="aliasName small-text text-grey"><br><span id="materialAlias' + key + keys + material_request_machine_id + '">' + values.material_alias + '</span></span><br>'
        // html += values.material_name
        html += '<select style="border:none" class="form-control form-control-sm selectpicker w-100 itemStok" id="itemStok' + jumlahTotalLogistik + '" data-id="' + jumlahTotalLogistik + '" onchange="changeItemStok(' + jumlahTotalLogistik + ',' + key + ',' + keys + ',' + material_request_machine_id + ')">'
        html += '<option value="" selected disabled>Pilih Item</option>'
        $.each(data_all_stok, function(k, v) {
            var select = ''
            if (values.material_id == v.item_id) {
                select = 'selected'
            }
            html += '<option value="' + v.item_id + '" ' + select + '>' + v.concated_name + '</option>'
        })
        html += '</select>'
        html += '</div>'
        html += '<div class="col">'
        // JUMLAH
        html += '<span class="m-0 fw-bolder" id="jumlahLama' + key + keys + material_request_machine_id + '">' + number_format(values.qty) + '</span>'
        html += '<span class="m-0 ms-1 fw-bolder" id="jumlahBaru' + key + keys + material_request_machine_id + '"></span>'
        html += '<i class="fa fa-pencil text-primary ms-2 showInputBaru" id="showInputBaru' + key + keys + material_request_machine_id + '" style="cursor:pointer;" onclick="showInputBaru(' + key + ',' + keys + ',' + material_request_machine_id + ')"></i><br>'
        html += '<div class="d-none fieldInputBaru" id="inputBaru' + key + keys + material_request_machine_id + '"><b class="super-small-text">Jumlah Baru</b><input type="text" class="form-control form-control-sm p-1 inputBaru nominal" id="inputBaruForm' + key + keys + material_request_machine_id + '" data-key="' + key + keys + material_request_machine_id + '" data-qty="' + values.qty + '" data-stok="' + stok_by_id_berjalan[values.material_id] + '" data-id="' + jumlahTotalLogistik + '" data-material_id="' + values.material_id + '" autocomplete="off" oninput="validateNumber(this)"></div>'
        // JUMLAH
        html += '</div>'
        html += '<div class="col">'
        // UNIT
        html += '<span class="m-0 fw-bolder" id="unitLama' + key + keys + material_request_machine_id + '">' + values.unit + '</span>'
        html += '<span class="m-0 ms-1 fw-bolder" id="unitBaru' + key + keys + material_request_machine_id + '"></span>'
        html += '<i class="fa fa-pencil text-primary ms-2 showUnitBaru" id="showUnitBaru' + key + keys + material_request_machine_id + '" style="cursor:pointer;" onclick="showUnitBaru(' + key + ',' + keys + ',' + material_request_machine_id + ')"></i><br>'
        html += '<div class="d-none fieldUnitBaru" id="inputUnitBaru' + key + keys + material_request_machine_id + '"><b class="super-small-text">Unit Baru</b>'

        html += '<select name="" class="form-control form-control-sm p-1 inputUnitBaru" id="inputUnitBaruForm' + key + keys + material_request_machine_id + '" data-id="' + jumlahTotalLogistik + '" data-key="' + key + keys + material_request_machine_id + '" data-unit="' + values.unit_id + '">'
        if (values.material_id != '') {
            values.unit_option.forEach(e => {
                var select = ""
                if (e.id == values.unit_id) {
                    select = 'selected'
                }
                html += '<option value="' + e.id + '" ' + select + ' data-name="' + e.name + '">' + e.name + '</option>'
            });
        } else {
            html += '<option value="" selected disabled>Tidak Ada Satuan</option>'
        }
        html += '</select>'

        html += '</div>'
        // STOK GUDANG
        html += '</div>'
        html += '<div class="col text-end" id="stokGudang' + key + keys + material_request_machine_id + '">'
        html += stokGudang(values.material_id)
        html += '</div>'
        html += '<div class="col-1 text-center align-self-center p-3" style="cursor:pointer;" onclick="chooseCardItem(' + "'" + key + keys + material_request_machine_id + "'" + ')">'
        html += '<i class="fa fa-check-square fa-2x text-grey checkCardItem" id="checkCardItem' + key + keys + material_request_machine_id + '"></i>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        dataInsert.jumlah = jumlahTotalLogistik
        dataInsert.html = html
        variableDataProcess.push({
            'machine_id': values.material_id,
            'material_request_machine_id': material_request_machine_id,
            'material_request_item_id': values.material_request_item_id,
            'unit_id': values.unit_id,
            'qty': values.qty,
            'key': key,
            'keys': keys,
            'jumlahTotalLogistik': jumlahTotalLogistik,
        })
        jumlahTotalLogistik++
        $('#jumlahTotalLogistik').html(jumlahTotalLogistik)
        return dataInsert
    }

    function stokGudang(material_id) {
        var html = ''
        if (material_id != '') {
            html += number_format(stok_by_id[material_id]) + '<p class="fw-bold m-0" style="font-size:10px;">' + satuan_by_name[material_id] + '</p>'
        } else {
            html += '<i class="super-small-text lh-0 text-danger">Not Available<br><b>Pilih Item Terlebih Dahulu</b></i>'
        }
        // stok_by_id_berjalan[material_id] = parseFloat(stok_by_id_berjalan[material_id]) - parseFloat(qty)
        return html
    }

    function changeItemStok(id, key, keys, material_request_machine_id) {
        var item_id = $('#itemStok' + id).val()
        var data = data_all_stok.find((v, k) => {
            if (v.item_id == item_id) return true
        })
        $('#materialCode' + key + keys + material_request_machine_id).html(data.code)
        $('#materialAlias' + key + keys + material_request_machine_id).html(data.alias)
        newStokGudang(item_id, key, keys, material_request_machine_id)
        unitOption(data, key, keys, material_request_machine_id)
    }

    function newStokGudang(item_id, key, keys, material_request_machine_id) {
        var html = ''
        html += stokGudang(item_id)
        $('#stokGudang' + key + keys + material_request_machine_id).html(html)
    }

    function unitOption(data, key, keys, material_request_machine_id) {
        var html = ''
        html += '<option value="" selected disabled>Pilih Satuan</option>'
        data.unit_option.forEach(e => {
            html += '<option value="' + e.id + '" data-name="' + e.name + '">' + e.name + '</option>'
        });

        $('#unitLama' + key + keys + material_request_machine_id).html('<span class="fa fa-warning me-2 text-warning"></span>None')
        $('#inputUnitBaruForm' + key + keys + material_request_machine_id).html(html)
    }

    function validateNumber(input) {
        var inputValue = input.value;
        var sanitizedValue = inputValue.replace(/[^0-9]/g, ''); // Hapus karakter selain angka
        // Hapus angka 0 di depan jika diikuti oleh angka lain
        sanitizedValue = sanitizedValue.replace(/^0(\d+)/, '$1');

        input.value = sanitizedValue;
    }


    function triggerAlias() {
        if (statusAlias == 0) {
            // tutup alias
            $('.aliasName').show()
            $('#btnAlias').html('<i class="fa fa-eye me-2"></i> Hide Alias')
            statusAlias = 1
        } else {
            // buka alias
            $('.aliasName').hide()
            $('#btnAlias').html('<i class="fa fa-eye-slash me-2"></i> Show Alias')
            statusAlias = 0
        }
    }

    function kirimApproval(id, code) {
        // console.log('test')
        var materailId = $('.cardItem').map(function() {
            return $(this).data('id');
        }).get();
        var itemId = $('.itemStok').map(function() {
            return $(this).val();
        }).get();
        var materialRequestMachineId = $('.cardItem').map(function() {
            return $(this).data('material_request_machine_id');
        }).get();
        var materailQty = $('.cardItem').map(function() {
            return $(this).data('qty');
        }).get();
        var materialQtyNewValue = $('.inputBaru').map(function() {
            return $(this).val();
        }).get();
        var materialUnitNewValue = $('.inputUnitBaru').map(function() {
            return $(this).val();
        }).get();
        var detail = []
        for (let i = 0; i < materailId.length; i++) {
            if (materialQtyNewValue[i] != '') {
                var qty = materialQtyNewValue[i]
            } else {
                var qty = materailQty[i]
            }
            detail.push({
                material_request_item_id: materailId[i],
                material_request_machine_id: materialRequestMachineId[i],
                item_id: itemId[i],
                qty_approve: qty,
                unit_id_approve: materialUnitNewValue[i],
            })
        }
        Swal.fire({
            text: 'Material akan diberikan kepada Foreman, apakah anda ingin melanjutkan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var data = {
                    material_request_id: id,
                    is_proses: 1,
                    employee_id: user_id,
                    take_out_at: $('#tanggalAmbil').val(),
                    data: detail,
                }
                var button = '#btnApprove'
                var url = '<?php echo api_produksi('setMaterialRequestProcess'); ?>'
                // console.log(data)
                kelolaData(data, type, url, button, id, code)
            }
        })
    }

    function kelolaData(data, type, url, button, id, code) {
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
                        $(button).prop("disabled", false);
                        $('#modal').modal('hide')
                        var data_notif = response.data.sendNotif.penerima
                        var no_telp = []
                        var nama = []
                        $.each(data_notif, function(key, value) {
                            // no_telp.push('081944946015')
                            no_telp.push(value.phone)
                            nama.push(value.full_name)
                        })
                        shareWhatsapp(no_telp, nama, id, code)
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
        })
    }

    function shareWhatsapp(no_telp, nama, id, code) {
        $.ajax({
            url: "<?= base_url('api/sendPenerimaanToForeman') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: '<?= base_url() ?>production/receiveMaterialRequest/' + id,
                nama: nama,
                kode: code,
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
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Pemberitahuan kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {
                    $('#modal2').modal('hide')
                    $('#graphStats').html('')
                    $('#graphStats').html('<canvas id="myChart2" width="100%"></canvas>')
                    getData()
                });
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

    function chooseCardItem(id) {
        var data = $('#cardItem' + id).hasClass('activeItem')
        if (data == true) {
            // remove
            $('#cardItem' + id).removeClass('activeItem bg-light')
            $('#checkCardItem' + id).addClass('text-grey')
            $('#checkCardItem' + id).removeClass('text-success')
        } else {
            // insert
            $('#cardItem' + id).addClass('activeItem bg-light')
            $('#checkCardItem' + id).removeClass('text-grey')
            $('#checkCardItem' + id).addClass('text-success')
        }
        countItemCheck()
    }

    function countItemCheck() {
        var jumlahCard = $('.cardItem').length
        var jumlahCardSelected = $('.activeItem').length
        if (jumlahCard == jumlahCardSelected) {
            $('#btnApprove').removeAttr('disabled', true)
            $('#btnApprove').html('Selesaikan dan Kirim ke Foreman')
        } else {
            $('#btnApprove').attr('disabled', true)
            $('#btnApprove').html('<span id="jumlahCardSelected">&nbsp;' + jumlahCardSelected + '&nbsp;</span> / <span>&nbsp;' + jumlahTotalLogistik + '&nbsp;</span>&nbsp;Item Telah di Check')
        }
    }

    // UBAH JUMLAH QTY

    $(document).on('keyup', '.inputBaru', function(e) {
        var key = $(this).data('key')
        var qty = $(this).data('qty')
        var id = $(this).data('id')
        // var material_id = $(this).data('material_id')
        var material_id = $('#itemStok' + id).val()
        var stok = stok_by_id[material_id]
        // console.log(stok)
        // var stok = $(this).data('stok')
        var value = $(this).val()
        whileOverThis(key)
        if (value == '') {
            resetFormQty(key)
        } else {
            fillFormQty(key, value, stok)
        }
    })

    $(document).on('focusout', '.inputBaru', function(e) {
        $('.fieldInputBaru').addClass('d-none')
        $('.showInputBaru').removeClass('active')
    })

    function showInputBaru(key, keys, material_request_machine_id) {
        whileOverThis('' + key + keys + material_request_machine_id + '')
        var data = $('#showInputBaru' + key + keys + material_request_machine_id).hasClass('active')
        if (data == true) {
            // remove
            closeFormQty('' + key + keys + material_request_machine_id + '')
        } else {
            // insert
            openFormQty('' + key + keys + material_request_machine_id + '')
        }
    }

    function whileOverThis(key) {
        // ketika diluar form
        $('.fieldInputBaru').addClass('d-none')
        $('#inputBaru' + key).removeClass('d-none')
    }

    function resetFormQty(key) {
        $('#jumlahLama' + key).addClass('fw-bolder')
        $('#jumlahLama' + key).removeClass('text-decoration-line-through')
        $('#jumlahBaru' + key).html('')
    }

    function closeFormQty(key) {
        $('#showInputBaru' + key).removeClass('active')
        $('#inputBaru' + key).addClass('d-none')
    }

    function openFormQty(key) {
        $('#showInputBaru' + key).addClass('active')
        $('#inputBaru' + key).removeClass('d-none')
    }

    function fillFormQty(key, value, stok) {
        $('#jumlahLama' + key).removeClass('fw-bolder')
        $('#jumlahLama' + key).addClass('text-decoration-line-through')
        $('#jumlahBaru' + key).html('<br>' + number_format(value))
        if (value > stok) {
            colorizedInputBaru('text-danger', '#jumlahBaru' + key, 'add')
        } else {
            colorizedInputBaru('text-danger', '#jumlahBaru' + key, 'remove')
        }
    }

    function colorizedInputBaru(color, html, state) {
        if (state == 'remove') {
            $(html).removeClass(color)
        } else {
            $(html).addClass(color)
        }
    }

    // UBAH UNIT
    $(document).on('change', '.inputUnitBaru', function(e) {
        var key = $(this).data('key')
        var unit = $(this).data('unit')
        var id = $(this).data('id')
        var value = $(this).val()
        var text = $(this).find("option:selected").data('name')
        whileOverThisUnit(key)
        if (value == '' || value == 0) {
            resetFormUnit(key)
        } else {
            fillFormUnit(key, value, unit, text, id)
        }
    })

    $(document).on('focusout', '.inputUnitBaru', function(e) {
        $('.fieldUnitBaru').addClass('d-none')
        $('.showUnitBaru').removeClass('active')
    })

    function showUnitBaru(key, keys, material_request_machine_id) {
        whileOverThisUnit('' + key + keys + material_request_machine_id + '')
        var data = $('#showUnitBaru' + key + keys + material_request_machine_id).hasClass('active')
        if (data == true) {
            // remove
            closeFormUnit('' + key + keys + material_request_machine_id + '')
        } else {
            // insert
            openFormUnit('' + key + keys + material_request_machine_id + '')
        }
    }

    function whileOverThisUnit(key) {
        // ketika diluar form
        $('.fieldUnitBaru').addClass('d-none')
        $('#inputUnitBaru' + key).removeClass('d-none')
    }

    function resetFormUnit(key) {
        $('#unitLama' + key).addClass('fw-bolder')
        $('#unitLama' + key).removeClass('text-decoration-line-through')
        $('#unitBaru' + key).html('')
    }

    function closeFormUnit(key) {
        $('#showUnitBaru' + key).removeClass('active')
        $('#inputUnitBaru' + key).addClass('d-none')
    }

    function openFormUnit(key) {
        $('#showUnitBaru' + key).addClass('active')
        $('#inputUnitBaru' + key).removeClass('d-none')
    }

    function fillFormUnit(key, value, unit, name, id) {
        $('#unitLama' + key).removeClass('fw-bolder')
        $('#unitLama' + key).addClass('text-decoration-line-through')
        $('#unitBaru' + key).html('<br>' + name)
        convertIntoUnit(key, value, unit, name, id)
    }

    function convertIntoUnit(key, value, unit, name, id) {
        var material_id = $('#itemStok' + id).val()
        var stok = stok_by_id[material_id]
        var value_converted = 0
        var data = data_all_stok.find((v, k) => {
            if (v.item_id == material_id) return true
        })
        var findDataUnitBefore = data.unit_option.find((v, k) => {
            if (v.id == unit) return true
        })
        var findDataUnitAfter = data.unit_option.find((v, k) => {
            if (v.id == value) return true
        })
        // var value_converted = ()
        console.log(findDataUnit)
        // fillFormQty(key, value_converted, stok)
    }
</script>