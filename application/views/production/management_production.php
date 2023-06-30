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
        position: relative;
        padding-left: 10px;
        text-align: left;
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
                    <h1 class="m-0"><b>Management Production</b></h1>
                    <p class="m-0 small-text">Panel kegiatan produksi</p>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-8">
                    <div class="card shadow-none" style="border-radius: 0px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="m-0 small-text text-start"><b>Weekly Work Planner</b></p>
                                    <p class="m-0 small-text">25 Juni 2023 - 30 Juni 2023</p>
                                </div>
                                <div class="col text-end">
                                    <a href="<?= base_url() ?>production/"><button type="button" class="btn btn-primary btn-sm">Work Plan</button></a>
                                </div>
                                <div class="col-12 pt-3">
                                    <div mbsc-page class="demo-meal-planner">
                                        <div style="height:100%;">
                                            <div id="demo-meal-planner" class="md-meal-planner-calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-none h-100" style="border-radius: 0px;">
                        <div class="card-body p-0">
                            <div class="row p-4 pb-0">
                                <div class="col-auto">
                                    <p class="m-0 small-text text-start"><b>Quick Progress</b></p>
                                </div>
                                <div class="col text-end">
                                    <div class="row float-end align-self-center">
                                        <div class="col-auto text-end">
                                            <p class="m-0 super-small-text text-grey"><i>Updated<br>30/06/2023 10:19</i></p>
                                        </div>
                                        <div class="col-auto text-end ps-0">
                                            <button type="button" class="btn btn-sm btn-outline-dark shadow-none"><i class="fa fa-refresh text-grey"></i></button>
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
                            <div class="row">
                                <div class="col-12 pe-4">
                                    <div class="form-check d-flex align-items-center float-end">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckMachine" style="width: 13px;height:13px;">
                                        <label class="form-check-label small-text ms-1" for="flexCheckMachine">
                                            Per Machine
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <div class="card shadow-none" style="border-radius:0px;border-right: none;border-left: none;">
                                            <div class="card-body pt-3 pb-3">
                                                <p class="m-0"><b>ABLF 20</b></p>
                                                <div class="progress" style="height: 10px;border-radius:0px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="row pt-2">
                                                    <div class="col">
                                                        <p class="m-0 super-small-text">Realization</p>
                                                        <p class="m-0 small-text"><b><span class="text-primary">10</span> Tray</b></p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="m-0 super-small-text">Target Planning</p>
                                                        <p class="m-0 small-text"><b>160 Tray</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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
    $(document).ready(function() {

    })
    mobiscroll.setOptions({
        locale: mobiscroll.localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-themeVariant
    });

    $(function() {
        var calendar;
        var popup;
        var oldMeal;
        var tempMeal;
        var deleteMeal;
        var formatDate = mobiscroll.util.datetime.formatDate;
        var $name = $('#meal-name-input');
        var $calories = $('#meal-calories-input');
        var $notes = $('#meal-notes-textarea');
        var $deleteButton = $('#meal-delete');
        var $types = $('#meal-type-segmented');

        var types = [{
            id: 1,
            name: 'MK9 A',
            color: '#435B66',
            // kcal: '300 - 400 kcal',
        }, {
            id: 2,
            name: 'MK9 B',
            color: '#435B66',
            // kcal: '100 - 200 kcal',
        }, {
            id: 3,
            name: 'MK9 C',
            color: '#435B66',
            // kcal: '500 - 700 kcal',
        }, {
            id: 4,
            name: 'HLP 12 A',
            color: '#A76F6F',
            // kcal: '400 - 600 kcal',
        }, {
            id: 5,
            name: 'HLP 12 B',
            color: '#A76F6F',
            // kcal: '100 - 200 kcal',
        }, {
            id: 6,
            name: 'HLP 20 B',
            color: '#A76F6F',
            // kcal: '100 - 200 kcal',
        }, {
            id: 7,
            name: 'HLP 20 B',
            color: '#A76F6F',
            // kcal: '100 - 200 kcal',
        }];

        var calendar = $('#demo-meal-planner').mobiscroll().eventcalendar({
            view: { // More info about view: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-view
                timeline: {
                    type: 'week',
                    eventList: true
                }
            },
            resources: types, // More info about resources: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-resources
            dragToCreate: false, // More info about dragToCreate: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToCreate
            dragToResize: false, // More info about dragToResize: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToResize
            dragToMove: false, // More info about dragToMove: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToMove
            clickToCreate: false, // More info about clickToCreate: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-clickToCreate
            resizeEvent: true,
            eventBorder: true,
            eventBorderColor: '#000000', // Warna border luar
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
            renderResource: function(resource) { // More info about renderResource: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-renderResource
                return '<div class="md-meal-planner-cont">' +
                    '<div class="" style="color:' + resource.color + ';font-size:12px !important;">' + resource.name + '</div>' +
                    // '<div class="md-meal-planner-kcal">' + resource.kcal + '</div>' +
                    '</div>';
            },
            renderScheduleEventContent: function(args) { // More info about renderScheduleEventContent: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-renderScheduleEventContent
                var event = args.original;
                return '<div class="md-meal-planner-event">' +
                    '<div class="">' + event.title + '</div>' +
                    (event.calories ? '<div class="md-meal-planner-event-desc">' + event.calories + ' </div>' : '') +
                    '</div>';
            },

        }).mobiscroll('getInst');

        $.getJSON('https://trial.mobiscroll.com/meal-planner/?callback=?', function(events) {
            // console.log(events)
            var array = [{
                "start": "2023-06-30",
                "end": "2023-06-30",
                "title": "Shift 7 - 15",
                "resource": 1,
                "calories": 'ABLF12, ABOF20',
                "allDay": true
            }, {
                "start": "2023-06-30",
                "end": "2023-06-30",
                "title": "Shift 7 - 15",
                "resource": 2,
                "calories": 'ABLF12, ABOF20',
                "allDay": true
            }]
            calendar.setEvents(array);
            $('.mbsc-calendar-wrapper').attr('hidden', true)
        }, 'jsonp');

        var popup = $('#meal-planner-popup').mobiscroll().popup({
            display: 'bottom', // Specify display mode like: display: 'bottom' or omit setting to use default
            contentPadding: false,
            fullScreen: true,
            onClose: function() { // More info about onClose: https://docs.mobiscroll.com/5-25-1/eventcalendar#event-onClose
                if (deleteMeal) {
                    calendar.removeEvent(tempMeal);
                } else if (restoreMeal) {
                    calendar.updateEvent(oldMeal);
                }
            },
            responsive: { // More info about responsive: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-responsive
                medium: {
                    display: 'center', // Specify display mode like: display: 'bottom' or omit setting to use default
                    width: 400, // More info about width: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-width
                    fullScreen: false,
                    touchUi: false,
                    showOverlay: false
                }
            }
        }).mobiscroll('getInst');

        function getTypes() {
            var data = [];

            for (var i = 0; i < types.length; ++i) {
                var type = types[i];
                data.push({
                    text: type.name,
                    value: type.id
                })
            }
            return data;
        }

        function appendTypes() {
            var segmented = '<div mbsc-segmented-group>';

            for (var i = 0; i < types.length; ++i) {
                var type = types[i];
                segmented += '<label>' + type.name + '<input type="radio" mbsc-segmented name="meal-planner-type" value="' +
                    type.id + '" class="meal-planner-type" ' + '/></label>';
            }

            segmented += '</div>';
            $types.append(segmented);
            mobiscroll.enhance($types[0]);
        }

        appendTypes();

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
</script>