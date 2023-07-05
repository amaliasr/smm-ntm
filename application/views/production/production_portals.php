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

    .text-orange {
        color: #FF8551;
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
<style>
    .full-height {
        height: 100vh;
    }

    .bg-left-panel {
        background-color: #f8f8f8;
    }

    .text-light-dark-grey {
        color: #B2B2B2;
    }

    .text-small {
        font-size: 10px;
    }

    .filter-border {
        border-bottom: 2px solid #27374D;
    }

    .bg-light-blue {
        background-color: #9DB2BF;
    }

    a {
        cursor: pointer;
    }
</style>
<!-- EVENT CALENDAR -->
<style>
    .md-meal-type {
        font-size: 14px;
        font-weight: 600;
        opacity: .6;
    }

    .md-meal-planner-popup .mbsc-popup .mbsc-popup-header {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .md-meal-planner-cont {
        /* position: relative; */
        /* padding-left: 10px; */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        vertical-align: middle;
    }

    .md-meal-planner-title {
        font-size: 20px;
    }

    .md-meal-planner-kcal {
        color: #929292;
    }

    .md-meal-planner-icon {
        position: absolute;
        left: 0;
    }

    .md-meal-planner-calendar.mbsc-calendar .mbsc-schedule-event-all-day-inner {
        height: 40px;
        display: flex;
        align-items: center;
    }

    .md-meal-planner-calendar .md-meal-planner-event-title {
        font-size: 12px;
    }

    .md-meal-planner-calendar .md-meal-planner-event-desc {
        opacity: .6;
    }

    .md-meal-planner-popup .mbsc-segmented-item:first-child .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:first-child .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:first-child .mbsc-segmented-selectbox-inner {
        background: #f08786;
    }

    .md-meal-planner-popup .mbsc-segmented-item:nth-child(2) .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(2) .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(2) .mbsc-segmented-selectbox-inner {
        background: #8abe89;
    }

    .md-meal-planner-popup .mbsc-segmented-item:nth-child(3) .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(3) .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(3) .mbsc-segmented-selectbox-inner {
        background: #99d3ef;
    }

    .md-meal-planner-popup .mbsc-segmented-item:nth-child(4) .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(4) .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(4) .mbsc-segmented-selectbox-inner {
        background: #f0ce8e;
    }

    .md-meal-planner-popup .mbsc-segmented-item:last-child .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:last-child .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:last-child .mbsc-segmented-selectbox-inner {
        background: #b48bce;
    }

    .cell-content {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        vertical-align: middle;
        align-items: center;
    }

    .color-cell-1 {
        color: #4A55A2;
    }

    .color-cell-2 {
        color: #FF9B9B;
    }

    .color-cell-3 {
        color: #898121;
    }

    .color-cell-4 {
        color: #A76F6F;
    }

    .color-cell-5 {
        color: #F86F03;
    }

    .color-cell-6 {
        color: #F1C27B;
    }

    .color-cell-7 {
        color: #E966A0;
    }

    .color-cell-8 {
        color: #17594A;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/mobiscroll.jquery.min.css">
<script src="<?= base_url() ?>assets/js/mobiscroll.jquery.min.js"></script>
<main>
    <div class="row">
        <!-- RIGHT PANEL -->
        <div class="col-12 bg-white p-5">
            <div class="row">
                <div class="col-1 align-self-center">
                    <img class="w-100" src="<?= base_url() ?>assets/image/svg/planner.svg" alt="Icon" />
                </div>
                <div class="col-auto align-self-center">
                    <h1 class="m-0"><b>Production Portals</b></h1>
                    <p class="m-0 small-text">Portal kegiatan produksi</p>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <div class="card shadow-none mb-2" style="border-radius: 0px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="m-0 small-text text-start"><b>Weekly Work Planner</b></p>
                                    <p class="m-0 small-text">25 Juni 2023 - 30 Juni 2023</p>
                                </div>
                                <div class="col text-end">
                                    <a href="<?= base_url() ?>production/workPlan"><button type="button" class="btn btn-primary btn-sm">Work Plan</button></a>
                                </div>
                                <div class="col-12 pt-3">
                                    <!-- <div mbsc-page class="demo-meal-planner">
                                        <div style="height:100%;">
                                            <div id="demo-meal-planner" class="md-meal-planner-calendar"></div>
                                        </div>
                                    </div> -->
                                    <div class="h-100">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-none h-100" style="border-radius: 0px;">
                        <div class="card-body p-0">
                            <div class="row p-4 pb-0">
                                <div class="col-auto">
                                    <p class="m-0 small-text text-start"><b>Quick Progress</b></p>
                                </div>
                                <div class="col text-end">
                                    <div class="row float-end align-self-center">
                                        <div class="col-auto text-end">
                                            <p class="m-0 super-small-text text-grey"><i>Updated<br><span id="time">-</span></i></p>
                                        </div>
                                        <div class="col-auto text-end ps-0">
                                            <button type="button" class="btn btn-sm btn-outline-dark shadow-none" onclick="refresh()"><i class="fa fa-refresh text-grey"></i></button>
                                        </div>
                                    </div>
                                    <p class="m-0 small-text text-end"></p>
                                </div>
                            </div>
                            <div class="row p-4 pt-0 pb-0">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-auto align-self-center" id="statusLine">
                                            <div class="row p-3">
                                                <div class="col-auto statusLine text-small pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="statusLine()" id="colStatusLineall">
                                                    Target Production
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="formTargetProduction">
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
    mobiscroll.setOptions({
        locale: mobiscroll.localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'material', // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-themeVariant
    });
</script>
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
        $(location).html('<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
    }

    function notFound(location) {
        $(location).html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    function empty(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><p class="small"><i>' + text + '</i></p><lottie-player style="margin:auto;width: 200px; height: 100%;" src="https://assets8.lottiefiles.com/packages/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player></div></div>')
    }
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'

    $(document).ready(function() {
        // chooseDate()
    })

    function chooseDate() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Planning</h5>'
        html_header += '<div class="input-group w-50">'
        html_header += '<input class="form-control form-control-sm pe-0" type="text" autocomplete="off" placeholder="Cari Kode Plan / Tanggal" aria-label="Search" id="search_planning">'
        html_header += '<span class="input-group-text">'
        html_header += '<i class="fa fa-search"></i>'
        html_header += '</span>'
        html_header += '</div>'
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12" id="listPlanning">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#modalFooter').addClass('d-none');
        getDataPlanning()
    }
    var data_all_plan = ""

    function getDataPlanning() {
        $.ajax({
            url: "<?= api_produksi('loadPageWorkPlanPortal'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {
                notFound('#listPlanning')
                notFound('#formTargetProduction')
            },
            beforeSend: function() {
                loadingData('#listPlanning')
                empty('#formTargetProduction', 'Data Belum Dipilih')
            },
            success: function(response) {
                data_all_plan = response['data']['listProductionPlan']
                formDataPlanning()
            }
        })
    }
    var html_expired_plan = ''
    var html_collapse = ""
    var jumlah_expired_plan = 0

    function formDataPlanning() {
        $('#listPlanning').empty()
        var html = ""
        if (data_all_plan.length != 0) {
            $.each(data_all_plan, function(key, value) {
                html += '<div class="card card-hoper shadow-sm mb-2" style="cursor:pointer;" onclick="loadDataPlanning(' + value['id'] + ')" id="card_search' + key + '">'
                html += '<div class="row g-0">'
                html += '<div class="col-md-2 bg-' + value.production_type.name.toLowerCase() + '">'
                html += '<div class="row d-flex align-items-center h-100">'
                html += '<div class="col text-center">'
                html += '<span class="text-white">' + value.production_type.name + '</span>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '<div class="col-md-10">'
                html += '<div class="card-body">'

                html += '<div class="row">'
                html += '<div class="col-12 align-self-center">'
                html += '<p class="m-0 text_search" data-id="' + key + '">#' + value['code'] + '</p>'
                var today = ''
                if (value.date_start <= currentDate() && value.date_end >= currentDate()) {
                    today = '<span class="badge bg-success">Today in This Plan</span>'
                }
                html += '<p class="m-0"><b class="text_search" data-id="' + key + '">' + formatDateIndonesia(value['date_start']) + ' - ' + formatDateIndonesia(value['date_end']) + ' ' + today + '</b></p>'
                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
            $('#listPlanning').html(html)
        } else {
            notFoundWithButton('#listPlanning', '<?= base_url() ?>/production/planning/smd', 'Check into List Planning', 'Tidak Ada Planning Minggu ini yang Tersedia')
        }
    }

    function loadDataPlanning(id) {
        var data = {
            productionPlanId: id,
        }
        var url = "<?= api_produksi('getWorkPlan'); ?>"
        getData(data, url, id)
    }

    var data_work = ''
    var id_production_plan_clicked = ''

    function getData(data, url, id) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
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
                $('#modal').modal('hide')
                $('#time').html(currentDateTimeNoSeconds())
                data_work = response['data']
                id_production_plan_clicked = id
                arrangeVariable()
            }
        })
    }

    var calendar;
    var popup;
    var oldMeal;
    var tempMeal;
    var deleteMeal;
    var data_detail_plan_clicked = []
    var target_per_production_type = []
    var target_per_machine = []
    var target_production = {}
    var data_clicked_plan = ''
    var data_work_plan = []
    var data_work_plan_group = ''

    function arrangeVariable() {
        // VARIABLE PLANNING

        data_clicked_plan = data_all_plan.filter((v, k) => {
            if (v.id == id_production_plan_clicked) return true
        })
        data_clicked_plan[0].detail.forEach(a => {
            // date
            a.data.forEach(b => {
                // production_step (MAKER/HLP)
                b.data.forEach(c => {
                    // machine
                    c.data.forEach(d => {
                        // product
                        data_detail_plan_clicked.push({
                            'product_id': d.product.id,
                            'product_code': d.product.code,
                            'qty': d.qty,
                            'unit_id': d.unit.id,
                            'unit_name': d.unit.name,
                            'product_group_id': d.product.product_group.id,
                            'product_group_code': d.product.product_group.code,
                            'product_group_name': d.product.product_group.name,
                            'machine_id': c.machine.id,
                            'machine_name': c.machine.name,
                            'production_step_id': b.production_step.id,
                            'production_step_name': b.production_step.name,
                            'date': a.date,
                        })
                    })
                });

            });
        });
        target_per_production_type = groupAndSum(data_detail_plan_clicked, ['product_id', 'product_code', 'unit_id', 'unit_name', 'production_step_id', 'production_step_name'], ['qty']);
        target_per_production_type = target_per_production_type.map(objek => ({
            ...objek,
            qty_realisasi: 20
        }));
        target_per_machine = groupAndSum(data_detail_plan_clicked, ['product_id', 'product_code', 'unit_id', 'unit_name', 'machine_id', 'machine_name'], ['qty']);
        target_per_machine = target_per_machine.map(objek => ({
            ...objek,
            qty_realisasi: 0
        }));
        target_production = {
            'target_per_production_type': target_per_production_type,
            'target_per_machine': target_per_machine,
        }

        // VARIABLE WORK PLAN
        data_work.workPlan.forEach(a => {
            // date
            if (a.work_plan.id == null) {
                // jika null, maka pakai production_plan
                a.production_plan.shift.forEach(b => {
                    // shift
                    a.production_plan.machine_type.forEach(c => {
                        // machine_type
                        c.machine.forEach(d => {
                            // machine
                            d.product.forEach(e => {
                                // product
                                data_work_plan.push({
                                    'id': a.id,
                                    'date': a.date,
                                    'note': a.note,
                                    'shift_id': b.id,
                                    'shift_name': b.name,
                                    'shift_end': b.end,
                                    'shift_start': b.start,
                                    'machine_type_id': c.id,
                                    'machine_type_name': c.name,
                                    'machine_id': d.id,
                                    'machine_name': d.name,
                                    'product_id': e.product.id,
                                    'product_code': e.product.code,
                                    'product_name': e.product.name,
                                    'product_alias': e.product.alias,
                                    'product_qty': e.product.qty,
                                    'unit_id': e.product.unit.id,
                                    'unit_name': e.product.unit.name,
                                })
                            });
                        });
                    });
                });
            } else {
                // jika work plan id tidak null, pakai yg workplan
            }
        });
        data_work_plan_group = transformData(data_work_plan);
        console.log(data_work_plan_group)
        createPlanner()
    }

    function convertTimeFormat(timeString) {
        // Memisahkan jam, menit, dan detik dari string waktu
        var timeParts = timeString.split(":");
        var hour = timeParts[0];
        var minute = timeParts[1];

        // Menggabungkan jam dan menit dengan tanda titik sebagai pemisah
        var formattedTime = hour + "." + minute;

        return formattedTime;
    }

    function transformData(inputData) {
        // Objek hasil yang akan diisi dengan data yang diolah
        var outputData = [];

        // Mengelompokkan data berdasarkan shift, mesin, dan tanggal
        var groups = {};
        for (var i = 0; i < inputData.length; i++) {
            var key = inputData[i].shift_name + "_" + inputData[i].machine_id + "_" + inputData[i].date;
            if (!groups[key]) {
                groups[key] = [];
            }
            groups[key].push(inputData[i]);
        }

        // Mengolah setiap kelompok data
        for (var key in groups) {
            var group = groups[key];
            var produk = [];
            for (var i = 0; i < group.length; i++) {
                produk.push(group[i].product_alias);
            }
            var obj = {
                start: group[0].date,
                end: group[0].date,
                nama_shift: "Shift " + convertTimeFormat(group[0].shift_start) + " - " + convertTimeFormat(group[0].shift_end),
                // nama_shift: group[0].shift_name + " " + convertTimeFormat(group[0].shift_start) + " - " + convertTimeFormat(group[0].shift_end),
                resource: group[0].machine_id,
                produk: produk.join(", "),
                allDay: true,
            };
            outputData.push(obj);
        }
        return outputData;
    }

    function createPlanner() {
        var types = []
        data_work.machine.forEach(e => {
            types.push({
                id: e.id,
                name: e.name,
                color: colorEvent(e.machine_type_id),
            })
        });

        calendar = $('#demo-meal-planner').mobiscroll().eventcalendar({
            view: { // More info about view: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-view
                timeline: {
                    type: 'week',
                    eventList: true,
                }
            },
            min: new Date(data_clicked_plan[0].date_start),
            max: new Date(data_clicked_plan[0].date_end),
            resources: types, // More info about resources: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-resources
            dragToCreate: false, // More info about dragToCreate: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToCreate
            dragToResize: false, // More info about dragToResize: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToResize
            dragToMove: false, // More info about dragToMove: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToMove
            clickToCreate: false, // More info about clickToCreate: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-clickToCreate
            resizeEvent: true,
            todayText: 'Today',
            extendDefaultEvent: function(ev) { // More info about extendDefaultEvent: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-extendDefaultEvent
                return {
                    title: 'New meal',
                    allDay: true
                };
            },
            onEventCreate: function(args, inst) { // More info about onEventCreate: https://docs.mobiscroll.com/5-25-1/eventcalendar#event-onEventCreate
                // store temporary event
                tempMeal = args.event;
                setTimeout(function() {
                    // addMealPopup();
                }, 100);
            },
            onEventClick: function(args, inst) { // More info about onEventClick: https://docs.mobiscroll.com/5-25-1/eventcalendar#event-onEventClick
                oldMeal = $.extend({}, args.event);
                tempMeal = args.event;

                // if (!popup.isVisible()) {
                // editMealPopup(args);
                // }
            },

            renderResourceHeader: function(resource) { // More info about renderResource: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-renderResource
                // LIST MESINNYA
                return '<div class="cell-content"><p class="m-0">Machine | Date<p></div>';
            },
            renderResource: function(resource) { // More info about renderResource: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-renderResource
                // LIST MESINNYA
                return '<div class="cell-content">' +
                    '<p class="m-0 ' + resource.color + '" style="font-size:12px !important;">' + resource.name + '</p>' +
                    '</div>';
            },
            renderScheduleEventContent: function(args) { // More info about renderScheduleEventContent: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-renderScheduleEventContent
                var event = args.original;
                return '<div class="md-meal-planner-event">' +
                    '<div class="">' + event.nama_shift + '</div>' +
                    (event.produk ? '<div class="md-meal-planner-event-desc">' + event.produk + ' </div>' : '') +
                    '</div>';
            },
            renderDay: function(day) {
                var date = day.date;
                var formatDate = mobiscroll.util.datetime.formatDate;
                var formattedDate = formatDate('DD MMMM YYYY', date);

                // Check if the current day is today's date
                var today = new Date();
                var isToday = date.toDateString() === today.toDateString();

                // Apply a CSS class or add a marker for today's date
                var marker = isToday ? '<span class="today-marker"></span>' : '';

                return '<div class="cell-content">' +
                    '<p class="small">' + formattedDate + '</p>' +
                    marker +
                    '</div>';
            }
        }).mobiscroll('getInst');
        createDataPlanner()

    }

    function createDataPlanner() {
        var array = data_work_plan_group
        calendar.setEvents(array);
        // $('.mbsc-calendar-wrapper').attr('hidden', true)
        createTargetProduction()
    }

    function createTargetProduction() {
        var html = ''
        html += '<div class="col-12 pe-4">'
        html += '<div class="form-check d-flex align-items-center float-end">'
        html += '<input class="form-check-input mb-2" type="checkbox" value="" id="flexCheckMachine" onchange="changeTargetMachine()" style="width: 13px;height:13px;">'
        html += '<label class="form-check-label small-text ms-1" for="flexCheckMachine">Per Machine</label>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12" id="listTargetProduction"></div>'
        $('#formTargetProduction').html(html)
        changeTargetMachine()
    }

    function targetProduction(name) {
        var html = ''
        target_production[name].forEach(e => {
            html += '<div class="card shadow-none" style="border-radius:0px;border-right: none;border-left: none;">'
            html += '<div class="card-body pt-3 pb-3">'
            if (name == 'target_per_production_type') {
                html += '<p class="m-0 super-small-text text-orange">' + e.production_step_name + '</p>'
            } else {
                html += '<p class="m-0 super-small-text text-orange">' + e.machine_name + '</p>'
            }
            html += '<p class="m-0"><b>' + e.product_code + '</b></p>'
            html += '<div class="progress" style="height: 10px;border-radius:0px;">'
            var percent = (e.qty_realisasi / e.qty) * 100
            html += '<div class="progress-bar" role="progressbar" style="width: ' + percent + '%" aria-valuenow="' + e.qty_realisasi + '" aria-valuemin="0" aria-valuemax="' + e.qty + '"></div>'
            html += '</div>'
            html += '<div class="row pt-2">'
            html += '<div class="col">'
            html += '<p class="m-0 super-small-text">Realization</p>'
            html += '<p class="m-0 small-text"><b><span class="text-primary">' + number_format(e.qty_realisasi) + '</span> ' + e.unit_name + '</b></p>'
            html += '</div>'
            html += '<div class="col text-end">'
            html += '<p class="m-0 super-small-text">Target Planning</p>'
            html += '<p class="m-0 small-text"><b>' + number_format(e.qty) + ' ' + e.unit_name + '</b></p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#listTargetProduction').html(html)
    }

    function changeTargetMachine() {
        if ($('#flexCheckMachine').is(':checked')) {
            targetProduction('target_per_machine')
        } else {
            targetProduction('target_per_production_type')
        }
    }

    function refresh() {
        loadDataPlanning(id_production_plan_clicked)
    }

    function colorEvent(id) {
        switch (id) {
            // case 1:
            //     return '#4A55A2'
            //     break;
            // case 2:
            //     return '#FF9B9B'
            //     break;
            // case 3:
            //     return '#898121'
            //     break;
            // case 4:
            //     return '#A76F6F'
            //     break;
            // case 5:
            //     return '#F86F03'
            //     break;
            // case 6:
            //     return '#F1C27B'
            //     break;
            // case 7:
            //     return '#E966A0'
            //     break;
            // case 8:
            //     return '#17594A'
            //     break;
            default:
                return '#EAEAEA'
                break;
        }
    }
</script>