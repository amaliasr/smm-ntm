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
        background-color: #fafafa;
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
<style>
    .full-height {
        height: 100vh;
    }

    .bg-left-panel {
        background-color: #fcfcfc;
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

    .btn-list-planning:hover {
        background-color: #9AC5F4;
        cursor: pointer;
        color: white;
    }

    .btn-list-planning:active,
    .clicked {
        background-color: #27374D;
        color: white;
    }

    .card-list-planning {
        transition: opacity 0.3s ease;
    }

    .card-list-planning.hidden {
        opacity: 0;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/mobiscroll.jquery.min.css">
<script src="<?= base_url() ?>assets/js/mobiscroll.jquery.min.js"></script>
<script src="https://use.fontawesome.com/d80f210d12.js"></script>
<main>
    <div class="row">
        <!-- LEFT PANEL -->
        <div class="col-3 bg-left-panel full-height p-5 pt-2 pe-2">
            <div class="row p-3">
                <div class="col align-self-center p-0">
                    <h2 class="text-dark-grey m-0">
                        <b>WORK PLAN</b>
                    </h2>
                    <p class="small-text m-0 text-light-dark-grey">Manajemenisasi Rencana Kerja Produksi</p>
                </div>
                <div class="col-auto align-self-center">
                    <button class="btn btn-sm float-end shadow-none position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"><i class="fa fa-file-o me-2"></i> Test</a>
                    </div>
                </div>
                <div class="col-12 p-0 pt-4 pb-2">
                    <div class="card shadow-none" style="border-radius: 0px;">
                        <div class="card-body p-0">
                            <div class="row p-3">
                                <div class="col-12">
                                    <p class="m-0 super-small-text text-start"><b>SMD Prod. Planning</b></p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p class="m-0 small-text text-start text-grey">#SMD-1234567890</p>
                                    <h5 class="m-0"><b>25 Juni - 30 Juni</b></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <div class="card shadow-none btn-list-planning" style="border-radius:0px;border-right: none;border-left: none;cursor:pointer;" data-index="<?= $i ?>">
                                            <div class="card-body pt-2 pb-2">
                                                <div class="row">
                                                    <div class="col align-self-center">
                                                        <p class="m-0 small-text"><b>Senin, 25 Juni 2023</b></p>
                                                    </div>
                                                    <div class="col-1 align-self-center text-right pe-3">
                                                        <i class="fa fa-arrow-circle-o-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow-none card-list-planning" id="card-list-planning<?= $i ?>" style="border-radius:0px;border-right: none;border-left: none;cursor:pointer;" hidden>
                                            <div class="card-body pt-2 pb-2">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="m-0 super-small-text"><b>Detail</b></p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="m-0 super-small-text text-primary"><b>Check Plan</b></p>
                                                    </div>
                                                    <div class="col-12 pt-2">
                                                        <?php for ($j = 1; $j <= 5; $j++) { ?>
                                                            <div class="row">
                                                                <div class="col-4 pe-1">
                                                                    <p class="m-0 super-small-text">HLP20A</p>
                                                                </div>
                                                                <div class="col-8">
                                                                    <?php for ($k = 0; $k < 2; $k++) { ?>
                                                                        <div class="row">
                                                                            <div class="col ps-0 pe-0">
                                                                                <p class="m-0 super-small-text">ABLF12</p>
                                                                            </div>
                                                                            <div class="col text-end pe-0">
                                                                                <p class="m-0 super-small-text">100</p>
                                                                            </div>
                                                                            <div class="col ps-1">
                                                                                <p class="m-0 super-small-text">Tray</p>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <?php if ($j < 5) { ?>
                                                                    <div class="col-12">
                                                                        <hr class="mt-1 mb-2">
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        <?php } ?>
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
                <div class="col-6 ps-0 pe-1">
                    <button type="button" class="btn btn-success shadow-none btn-sm w-100 h-100" style="text-align: left;">
                        <div class="row">
                            <div class="col-auto p-0 pe-1 align-self-center">
                                <i class="fa fa-share-alt fa-1x"></i>
                            </div>
                            <div class="col-auto p-0 ps-1 align-self-center">
                                <p class="m-0 super-small-test">Save<br> and Share</p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-6 pe-0 ps-1">
                    <button type="button" class="btn btn-outline-dark shadow-none btn-sm w-100 h-100" style="text-align: left;">
                        <div class="row">
                            <div class="col-auto p-0 pe-1 align-self-center">
                                <i class="fa fa-envelope-open-o fa-1x"></i>
                            </div>
                            <div class="col-auto p-0 ps-1 align-self-center">
                                <p class="m-0 super-small-test">Save Draft</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-9 bg-white p-4">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark btn-sm shadow-none" onclick="managementManPower()"><i class="fa fa-user-plus me-2"></i>Management Man Power</button>
                </div>
                <div class="col text-end">
                    <button type="button" class="btn btn-outline-dark btn-sm shadow-none"><i class="fa fa-list me-2"></i>See Detail</button>
                    <button type="button" class="btn btn-danger btn-sm shadow-none"><i class="fa fa-download me-2"></i>PDF</button>
                </div>
                <div class="col-12 pt-3">
                    <div mbsc-page class="demo-meal-planner">
                        <div style="height:100%">
                            <div id="demo-meal-planner" class="md-meal-planner-calendar"></div>

                            <div id="meal-planner-popup" class="md-meal-planner-popup">
                                <div id="meal-type-segmented" class="mbsc-form-group"></div>
                                <div class="mbsc-form-group">
                                    <label>
                                        Name
                                        <input mbsc-input id="meal-name-input" />
                                    </label>
                                    <label>
                                        Calories
                                        <input mbsc-input id="meal-calories-input" type="number" />
                                    </label>
                                    <label>
                                        Notes
                                        <textarea mbsc-textarea id="meal-notes-textarea"></textarea>
                                    </label>
                                </div>
                                <div class="mbsc-button-group">
                                    <button class="mbsc-button-block" id="meal-delete" mbsc-button data-color="danger" data-variant="outline">Delete meal</button>
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

        function addMealPopup() {
            // hide delete button inside add popup
            $deleteButton.hide();
            deleteMeal = true;
            restoreMeal = false;

            // set popup header text and buttons for adding
            popup.setOptions({
                headerText: '<div>New meal</div><div class="md-meal-type">' + // More info about headerText: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-headerText
                    formatDate('DDDD, DD MMMM YYYY', new Date(tempMeal.start)) + '</div>',
                buttons: [ // More info about buttons: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-buttons
                    'cancel',
                    {
                        text: 'Add',
                        keyCode: 'enter',
                        handler: function() {
                            calendar.updateEvent(tempMeal);

                            deleteMeal = false;
                            popup.close();
                        },
                        cssClass: 'mbsc-popup-button-primary'
                    }
                ]
            });

            // fill popup with a new event data
            $name.mobiscroll('getInst').value = tempMeal.title;
            $calories.mobiscroll('getInst').value = '';
            $notes.mobiscroll('getInst').value = '';

            $('.meal-planner-type').each(function(i, elm) {
                $(elm).mobiscroll('getInst').checked = +elm.value == tempMeal.resource;
            });

            popup.open();
        }

        function editMealPopup(args) {
            var ev = args.event;
            var resource = types.find(function(obj) {
                return obj.id === ev.resource
            });

            // show delete button inside edit popup
            $deleteButton.show();

            deleteMeal = false;
            restoreMeal = true;

            // // set popup header text and buttons for editing
            popup.setOptions({
                headerText: '<div>' + resource.name + '</div><div class="md-meal-type">' + // More info about headerText: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-headerText
                    formatDate('DDDD, DD MMMM YYYY', new Date(ev.start)) + '</div>',
                buttons: [ // More info about buttons: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-buttons
                    'cancel',
                    {
                        text: 'Save',
                        keyCode: 'enter',
                        handler: function() {
                            // update event with the new properties on save button click
                            calendar.updateEvent({
                                id: ev.id,
                                title: tempMeal.title,
                                calories: tempMeal.calories,
                                notes: tempMeal.notes,
                                start: ev.start,
                                end: ev.end,
                                resource: tempMeal.resource,
                                allDay: true,
                            });

                            restoreMeal = false;
                            popup.close();
                        },
                        cssClass: 'mbsc-popup-button-primary'
                    }
                ]
            });

            // fill popup with the selected event data
            $name.mobiscroll('getInst').value = ev.title || '';
            $calories.mobiscroll('getInst').value = ev.calories || '';
            $notes.mobiscroll('getInst').value = ev.notes || '';

            $('.meal-planner-type').each(function(i, elm) {
                $(elm).mobiscroll('getInst').checked = +elm.value == tempMeal.resource;
            });

            popup.open();
        }

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
            dragToMove: true, // More info about dragToMove: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-dragToMove
            clickToCreate: true, // More info about clickToCreate: https://docs.mobiscroll.com/5-25-1/eventcalendar#opt-clickToCreate
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
                    addMealPopup();
                }, 100);
            },
            onEventClick: function(args, inst) { // More info about onEventClick: https://docs.mobiscroll.com/5-25-1/eventcalendar#event-onEventClick
                oldMeal = $.extend({}, args.event);
                tempMeal = args.event;

                if (!popup.isVisible()) {
                    editMealPopup(args);
                }
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
            // Ambil semua elemen dengan kelas "mbsc-timeline-header-date-text mbsc-ios"
            var elements = document.querySelectorAll('.mbsc-timeline-header-date-text.mbsc-ios');

            // Loop melalui setiap elemen
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];

                // Periksa apakah elemen memiliki teks di dalamnya
                if (element.textContent.trim().length > 0) {
                    // Buat elemen <br> baru
                    var lineBreak = document.createElement('br');

                    // Buat elemen <a> baru
                    var link = document.createElement('a');
                    link.href = "..."; // Ganti dengan URL yang diinginkan

                    // Buat elemen <i> dengan kelas "fa fa-user" (font awesome)
                    var icon = document.createElement('i');
                    icon.className = 'fa fa-user';

                    // Tambahkan elemen <i> ke dalam elemen <a>
                    link.appendChild(icon);

                    // Tambahkan elemen <br> dan elemen <a> setelah elemen saat ini
                    element.appendChild(lineBreak);
                    element.appendChild(link);
                }
            }

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

        $('.meal-planner-type').on('change', function(ev) {
            tempMeal.resource = +ev.target.value;
        });

        $name.on('change', function(ev) {
            tempMeal.title = ev.target.value;
        });

        $calories.on('change', function(ev) {
            tempMeal.calories = ev.target.value;
        });

        $notes.on('change', function(ev) {
            tempMeal.notes = ev.target.value;
        });

        $deleteButton.on('click', function() {
            // delete current event on button click
            calendar.removeEvent(tempMeal);

            // save a local reference to the deleted event
            var deletedMeal = tempMeal;

            popup.close();

            mobiscroll.snackbar({

                button: {
                    action: function() {
                        calendar.addEvent(deletedMeal);
                    },
                    text: 'Undo'
                },
                duration: 10000,
                message: 'Meal deleted'
            });
        });

    });
</script>
<script>
    var cards = document.getElementsByClassName('btn-list-planning');
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener('click', toggleCard.bind(null, i));
    }

    function toggleCard(index) {
        var cardId = 'card-list-planning' + index;
        var card = document.getElementById(cardId);
        var isHidden = card.hasAttribute('hidden');

        // Mengubah class 'clicked' pada btn-list-planning
        cards[index].classList.toggle('clicked');

        // Mengubah atribut 'hidden' pada card-list-planning
        if (isHidden) {
            card.removeAttribute('hidden');
            setTimeout(function() {
                card.style.opacity = 1;
            }, 300);
        } else {
            card.style.opacity = 0;
            setTimeout(function() {
                card.setAttribute('hidden', 'true');
            }, 300);
        }
    }

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

    $(document).ready(function() {
        changePlan()
    })

    function managementManPower() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Management Man Power</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'

        html_body += '<div class="col-12 col-md-4 p-4" style="background-color:#fcfcfc;">'
        html_body += '<div class="row">'
        html_body += '<div class="col-auto align-self-center">'
        html_body += '<p class="small-text"><b>Quality Control</b></p>'
        html_body += '</div>'
        html_body += '<div class="col text-end align-self-center">'
        html_body += '<p class="super-small-text">4 Person Left</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<div class="form-group has-search">'
        html_body += '<span class="fa fa-search form-control-feedback"></span>'
        html_body += '<input type="text" class="form-control" placeholder="Search" id="search_nama">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 pt-4">'

        html_body += '<div style="max-height: 300px;overflow-x: hidden;overflow-y: auto;">'
        for (let i = 0; i < 10; i++) {
            html_body += '<div class="row pt-2 pb-2">'
            html_body += '<div class="col-9 align-self-center">'
            html_body += '<p class="m-0 small-text"><b>Amalia Safira Rhamadany</b></p>'
            html_body += '<p class="m-0 super-small-text text-grey"><b>amalia.safira@pt-bks.com</b></p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center">'
            html_body += '<i class="fa fa-user-plus"></i>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8 p-4">'

        html_body += '<div class="row">'
        html_body += '<div class="col-8">'
        // UTAMA
        html_body += '<h4 class="m-0"><b>03 Juli 2023</b></h4>'
        html_body += '<p class="super-small-text text-grey m-0">Available 1 Shift</p>'

        html_body += '<div class="row p-3 pt-4">'
        html_body += '<div class="col-auto statusLine super-small-text pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="statusLine()" id="colStatusLineall">07.00 - 15.00</div>'
        html_body += '<div class="col-auto statusLine super-small-text pb-2 align-self-center fw-bold text-grey" style="cursor:pointer" onclick="statusLine()" id="colStatusLineall">15.00 - 19.00</div>'
        html_body += '</div>'

        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        html_body += '<p class="m-0 super-small-text"><b>Position</b></p>'
        html_body += '<div class="row ps-2 pe-2 mb-3">'
        for (let i = 0; i < 5; i++) {
            html_body += '<div class="col p-1">'
            html_body += '<div class="card shadow-none">'
            html_body += '<div class="card-body p-2 text-center text-wrap">'
            html_body += '<p class="m-0 super-small-text">Catcher</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '<p class="m-0 super-small-text"><b>Machine/Section</b></p>'
        html_body += '<div class="row ps-2 pe-2 mb-3">'
        for (let i = 0; i < 7; i++) {
            html_body += '<div class="col p-1">'
            html_body += '<div class="card shadow-none">'
            html_body += '<div class="card-body p-2 text-center text-wrap">'
            html_body += '<p class="m-0 super-small-text">HLP 20 A</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '<p class="m-0 super-small-text"><b>Man Power</b></p>'
        html_body += '<div class="row ps-2 pe-2 mb-3">'
        for (let i = 0; i < 2; i++) {
            html_body += '<div class="col-12 p-1">'
            html_body += '<div class="card shadow-none">'
            html_body += '<div class="card-body p-2">'

            html_body += '<div class="row">'
            html_body += '<div class="col-11">'
            html_body += '<p class="m-0 small-text"><b>Moch. Sochron</b></p>'
            html_body += '<p class="m-0 super-small-text">2 Position in this Date</p>'
            html_body += '</div>'
            html_body += '<div class="col-1 align-self-center">'
            html_body += '<i class="fa fa-times text-danger"></i>'
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        // UTAMA
        html_body += '</div>'
        html_body += '<div class="col-4">'
        // TANGGAL
        html_body += '<div class="card shadow-none h-100">'
        html_body += '<div class="card-body">'
        html_body += '<p class="super-small-text text-grey m-0 mb-4">More Date</p>'
        for (let i = 0; i < 5; i++) {
            html_body += '<div class="row">'
            if (i == 0) {
                html_body += '<div class="col-2 align-self-center">'
                html_body += '<i class="fa fa-chevron-left"></i>'
                html_body += '</div>'
            }
            html_body += '<div class="col-10 align-self-center">'
            html_body += '<p class="m-0 small"><b>03 June 2023</b></p>'
            html_body += '<p class="m-0 super-small-text">0 Position Added</p>'
            html_body += '</div>'
            html_body += '<div class="col-12">'
            html_body += '<hr>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        // TANGGAL
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0');
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    function changePlan() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Change Plan</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'

        html_body += '<div class="col-12 col-md-4 p-4" style="background-color:#fcfcfc;">'

        html_body += '<div class="row">'
        html_body += '<div class="col">'
        html_body += '<p class="m-0 super-small-text text-grey">Date</p>'
        html_body += '<h4 class="text-dark-grey m-0"><b>03 July 2023</b></h4>'
        html_body += '</div>'
        html_body += '<div class="col">'
        html_body += '<p class="m-0 super-small-text text-grey">Machine</p>'
        html_body += '<h4 class="text-dark-grey m-0"><b>MK9-A</b></h4>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mt-3">'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 super-small-text mb-2"><b>Machine This Day</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        // card maker
        for (let j = 0; j < 2; j++) {
            html_body += '<div class="card shadow-none mb-2">'
            html_body += '<div class="card-body p-3">'
            html_body += '<p class="m-0 mb-2"><b>MAKER</b></p>'
            // list maker
            for (let i = 0; i < 2; i++) {
                html_body += '<div class="row">'
                html_body += '<div class="col-12">'
                html_body += '<div class="card shadow-none mb-2">'
                html_body += '<div class="card-body p-2">'
                html_body += '<div class="row">'
                html_body += '<div class="col-10 align-self-center">'
                html_body += '<p class="m-0 small"><b>MK9-A</b></p>'
                html_body += '<p class="m-0 super-small-text">ABLF20 (100), ABOF20(100)</p>'
                html_body += '</div>'
                html_body += '<div class="col-2 align-self-center text-end">'
                html_body += '<i class="fa fa-envelope text-grey"></i>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            }
            html_body += '<div class="row">'
            html_body += '<div class="col-12 text-end">'
            html_body += '<a href="" class="small-text">Add Mekanik (0)</a></i>'
            html_body += '</div>'
            html_body += '</div>'
            // list maker
            html_body += '</div>'
            html_body += '</div>'
        }
        // end card maker
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8 p-4">'
        // header
        html_body += '<div class="row">'
        for (let i = 0; i < 2; i++) {
            html_body += '<div class="col-auto p-1">'
            html_body += '<div class="card shadow-none">'
            html_body += '<div class="card-body p-2">'
            html_body += '<p class="super-small-text m-0"><b>Pendek</b> 07.00 - 15.00 <i class="fa fa-envelope text-grey ms-2"></i></p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<div class="col-auto p-1">'
        html_body += '<div class="card shadow-none">'
        html_body += '<div class="card-body p-2">'
        html_body += '<p class="super-small-text m-0"><i class="fa fa-plus text-grey"></i></p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // header
        // body
        html_body += '<div class="row">'
        html_body += '<div class="col-12 p-1">'
        html_body += '<div class="card shadow-none">'
        html_body += '<div class="card-body h-100">'

        html_body += '<div class="row">'
        html_body += '<div class="col">'
        html_body += '<p class="m-0 super-small-text mb-2"><b>Brand & Total Production</b></p>'
        // total
        for (let i = 0; i < 2; i++) {
            html_body += '<div class="row">'
            html_body += '<div class="col-12">'
            html_body += '<div class="card shadow-none mb-2">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col align-self-center"><b class="m-0">ABLF 20</b></div>'
            html_body += '<div class="col-3"><input class="form-control form-control-sm shadow-none" type="text" style="border:0px;"><hr class="m-0"></div>'
            html_body += '<div class="col-2 align-self-center p-0"><b class="m-0">Tray</b></div>'
            html_body += '<div class="col-1 align-self-center p-0"><i class="fa fa-envelope text-grey"></i></div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<div class="card shadow-none mb-2" style="border:1px dashed #D9D9D9;">'
        html_body += '<div class="card-body p-3 text-center">'
        html_body += '<p class="m-0 small-text"><i class="me-2 fa fa-plus"></i>Add New</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // total
        html_body += '</div>'
        html_body += '<div class="col">'
        html_body += '<p class="m-0 super-small-text mb-2"><b>Man Power</b></p>'
        // man power
        for (let i = 0; i < 2; i++) {
            html_body += '<div class="row pb-2">'
            html_body += '<div class="col-4 align-self-center">'
            html_body += '<p class="m-0 small-text">Helper (<span>0</span>)</p>'
            html_body += '</div>'
            html_body += '<div class="col-8">'
            html_body += '<select class="form-select form-select-lg w-100" multiple id="identity' + i + '" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
            html_body += '<option value="1">Amalia Safira</option>'
            html_body += '<option value="2">Moch. Sochron</option>'
            html_body += '</select>'
            html_body += '</div>'
            html_body += '</div>'
        }
        // man power
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 super-small-text mb-2"><b>Notes</b></p>'
        // man power
        html_body += '<textarea class="form-control" rows="10"></textarea>'
        // man power
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // body
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0');
        for (let i = 0; i < 2; i++) {
            $('#identity' + i).select2({
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                closeOnSelect: false,
                dropdownParent: $('#modal'),
                maximumInputLength: 1,
            });
        }
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }
</script>