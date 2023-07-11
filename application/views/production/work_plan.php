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

    .card-shift-produksi:hover {
        background-color: #DDDDDD !important;
        color: #434242;
    }

    th[rowspan],
    td:first-child {
        position: sticky;
        left: 0px;
        background-color: white;
        z-index: 1;
        /* border: 1px solid rgba(33, 40, 50, 0.125); */
        border: 1px solid #ddd;
    }

    a:hover {
        text-decoration: none;
    }

    .avatars {
        display: inline-flex;
        flex-direction: row;
    }

    .avatar {
        position: relative;
        border: 2px solid #fff;
        border-radius: 50%;
        overflow: hidden;
        width: 30px;
        height: 30px;
        /* Sesuaikan dengan ukuran yang diinginkan */
    }

    .avatar:not(:last-child) {
        margin-right: -20px;
        /* Mengatur jarak antara gambar */
    }

    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar tetap terlihat utuh dalam lingkaran */
        display: block;
    }

    .plus-avatar {
        background-color: #27374D;
        width: 30px;
        height: 30px;
        display: flex;
        color: white;
        justify-content: center;
        align-items: center;
    }

    .plus-avatar-grey {
        background-color: #EFF5F5;
        width: 30px;
        height: 30px;
        display: flex;
        color: grey;
        justify-content: center;
        align-items: center;
    }

    .plus-icon {
        font-size: 10px;
        font-weight: bold;
    }

    .bg-shift-42 {
        background-color: #9DB2BF;
        color: white;
        border-width: 2px;
        border-color: #1D5B79;
    }

    .bg-shift-39 {
        background-color: #EA906C;
        color: white;
        border-width: 2px;
        border-color: #B31312;
    }

    .bg-shift-44 {
        background-color: #526D82;
        color: white;
        border-width: 2px;
        border-color: #1D5B79;
    }

    .bg-shift-41 {
        background-color: #B31312;
        color: white;
        border-width: 2px;
        border-color: #470707;
    }

    .bg-no-workplan {
        background-color: white;
        border-width: 2px;
        border-color: #65647C;
    }

    .manPower:active,
    .active {
        border-width: 3px;
        border-color: #4A55A2;
        color: #4A55A2 !important;
    }

    .machinePower:active,
    .active {
        border-width: 3px;
        border-color: #4A55A2;
        color: #4A55A2 !important;
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
                                    <p class="m-0 small-text text-start text-grey" id="kodePlan">-</p>
                                    <h5 class="m-0"><b id="dateRange">-</b></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" id="listProdPlanning">
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
                    <button type="button" class="btn btn-outline-dark btn-sm shadow-none" onclick="managementManPower(event)"><i class="fa fa-user-plus me-2"></i>Management Man Power</button>
                </div>
                <div class="col text-end">
                    <button type="button" class="btn btn-outline-dark btn-sm shadow-none"><i class="fa fa-list me-2"></i>See Detail</button>
                    <button type="button" class="btn btn-danger btn-sm shadow-none"><i class="fa fa-download me-2"></i>PDF</button>
                </div>
                <div class="col-12 pt-3">
                    <div class="h-100">
                        <div class="table-responsive" id="table-product-trend-wrapper">
                            <table class="table table-bordered" style="width: 100%;white-space:nowrap;">
                                <thead>
                                    <tr id="date_list">
                                    </tr>
                                    <tr id="qc_list">
                                    </tr>
                                </thead>
                                <tbody id="body_list">
                                </tbody>
                            </table>
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
                produk.push(group[i].product_alias + ' (' + group[i].product_qty + ')');
            }
            var obj = {
                start: group[0].date,
                end: group[0].date,
                shift_id: group[0].shift_id,
                nama_shift: "" + convertTimeFormat(group[0].shift_start) + " - " + convertTimeFormat(group[0].shift_end),
                machine_type_id: group[0].machine_type_id,
                resource: group[0].machine_id,
                machine_name: group[0].machine_name,
                produk: produk.join(", "),
                work_plan_id: group[0].work_plan_id,
                allDay: true,
            };
            outputData.push(obj);
        }
        return outputData;
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

    function empty(location, text) {
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none"><div class="card-body h-100 p-5 m-5"><p class="small"><i>' + text + '</i></p><lottie-player style="margin:auto;width: 200px; height: 100%;" src="https://assets8.lottiefiles.com/packages/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player></div></div></div></div>')
    }

    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var plan_id = '<?= $id ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'

    $(document).ready(function() {
        loadDataPlanning(plan_id)
    })

    function loadDataPlanning(id) {
        var data = {
            productionPlanId: id,
        }
        var url = "<?= api_produksi('loadPageWorkPlanManage'); ?>"
        getData(data, url, id)
    }

    var data_work

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
                data_work = response.data
                $('#kodePlan').html('#' + data_work.productionPlan.code)
                $('#dateRange').html(formatDateIndonesiaTanggalBulan(data_work.productionPlan.date_start) + ' - ' + formatDateIndonesiaTanggalBulan(data_work.productionPlan.date_end))
                arrangeVariable()
            }
        })
    }
    var data_work_plan = []
    var data_work_plan_no_shift = []
    var data_work_plan_group
    var data_work_plan_no_shift_group
    var data_work_plan_no_shift_machine
    var management_manpower = []

    function arrangeVariable() {
        var numIndex = 0
        // VARIABLE WORK PLAN
        data_work.workPlan.forEach(a => {
            // date
            var indexShift = 0
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
                            if (a.work_plan.id != null) {
                                data_work_plan[numIndex]['work_plan_id'] = a.work_plan.id
                            } else {
                                data_work_plan[numIndex]['work_plan_id'] = ''
                            }
                            numIndex++

                            // buat tanpa shift
                            if (indexShift == 0) {
                                data_work_plan_no_shift.push({
                                    'id': a.id,
                                    'date': a.date,
                                    'note': a.note,
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
                            }
                        });
                    });
                });
                indexShift++
            });
        });
        // console.log(data_work_plan)
        groupingData()
    }

    function groupingData() {
        data_work_plan_no_shift_group = groupAndSum(data_work_plan_no_shift, ['date', 'machine_id', 'machine_name', 'product_id', 'product_name', 'product_alias', 'unit_name'], ['product_qty'])
        data_work_plan_no_shift_machine = groupAndSum(data_work_plan_no_shift, ['date', 'machine_id', 'machine_name'], [])
        data_work_plan_group = transformData(data_work_plan);
        createHeaderPlanner()
    }

    function createHeaderPlanner() {
        var dateList = dateRangeComplete(data_work.workPlan[0].date, data_work.workPlan[parseInt(data_work.workPlan.length) - 1].date)
        var html = ''
        var html_qc = ''
        html += '<th class="" rowspan="2" style="vertical-align: middle;"><b>Machine | Date</b></th>'
        for (let i = 0; i < dateList.length; i++) {
            html += '<th class="small-text"><div class="row"><div class="col-8 align-self-center p-0 text-end">' + formatInternationalDate(dateList[i]) + '</div><div class="col-4 align-self-center"><div class="dropdown"><span class="fa fa-ellipsis-h dropdown-date" role="button" id="dropdownMenuButtonDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;"></span>'
            html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButtonDate">'
            html += '<a class="dropdown-item" onclick="managementManPower(event,' + "'" + dateList[i] + "'" + ')"><i class="fa fa-file-o me-2"></i> Setting Man Power</a>'
            html += '<a class="dropdown-item"><i class="fa fa-comment me-2"></i> Add Notes</a>'
            html += '</div>'
            html += '</div></div></div>'
            html += '</th>'
            html_qc += '<th class="small-text"><a href="javascript:void(0)" onclick="directToWorkPlan()"><p class="m-0 small-text text-primary">0 Quality Control</p></a></th>'
        }
        $('#date_list').html(html)
        $('#qc_list').html(html_qc)
        $('.dropdown-date').dropdown();
        draggableTables('table-product-trend-wrapper')
        createBodyPlanner()
    }

    function createBodyPlanner() {
        var dateList = dateRangeComplete(data_work.workPlan[0].date, data_work.workPlan[parseInt(data_work.workPlan.length) - 1].date)
        var html = ''
        data_work.machine.forEach(e => {
            html += '<tr>'
            html += '<td class="text-center small-text align-selft-center" style="vertical-align: middle;"><b>' + e.name + '</b></td>'
            // loop date
            for (let i = 0; i < dateList.length; i++) {
                html += '<td class="p-1" onclick="changePlan(event,' + "'" + dateList[i] + "'" + ',' + e.id + ')">'
                var data = data_work_plan_group.filter((v, k) => {
                    if (v.resource == e.id && v.start == dateList[i]) return true
                })
                // console.log(data)
                data.forEach(el => {
                    var dataDetail = data_work_plan.filter((v, k) => {
                        if (v.machine_id == e.id && v.date == dateList[i] && v.shift_id == el.shift_id) return true
                    })
                    var bg = 'bg-no-workplan'
                    if (el.work_plan_id != '') {
                        bg = 'bg-shift-' + el.shift_id
                    }
                    html += '<div class="card shadow-none rounded-3 ' + bg + ' card-shift-produksi" style="cursor:pointer;width:200px;" onclick="changePlan(event,' + "'" + dateList[i] + "'" + ',' + e.id + ',' + el.shift_id + ')">'
                    html += '<div class="card-body p-2 ">'
                    html += '<div class="row">'
                    html += '<div class="col-7 align-self-center">'
                    html += '<p class="m-0 small-text text-dark"><b>' + el.nama_shift + '</b></p>'
                    // data_work_plan
                    dataDetail.forEach(element => {
                        html += '<p class="m-0 super-small-text">' + element.product_alias + ' <b class="">( ' + element.product_qty + ' ' + element.unit_name + ')</b></p>'
                    });
                    html += '</div>'
                    html += '<div class="col-5 align-self-center text-center">'
                    // man
                    html += '<div class="avatars" onclick="managementManPower(event,' + "'" + dateList[i] + "'" + ',' + e.id + ')">'
                    // list person max 3
                    if (el.work_plan_id != '') {
                        html += '<span class="avatar">'
                        html += '<img src="https://picsum.photos/70">'
                        html += '</span>'
                        html += '<span class="avatar">'
                        html += '<img src="https://picsum.photos/80">'
                        html += '</span>'
                        html += '<span class="avatar">'
                        html += '<img src="https://picsum.photos/90">'
                        html += '</span>'
                        // list person max 3
                        html += '<span class="avatar plus-avatar">'
                        html += '<span class="plus-icon"><i class="fa fa-plus"></i></span>'
                        html += '</span>'
                        html += '</div>'
                    } else {
                        html += '<span class="avatar plus-avatar-grey">'
                        html += '<span class="plus-icon"><i class="fa fa-user-plus"></i></span>'
                        html += '</span>'
                        html += '</div>'
                    }

                    if (el.work_plan_id != '') {
                        html += '<p class="m-0 mt-1" style="font-size:7px;">3 Persons</p>'
                    } else {
                        html += '<p class="m-0 mt-1" style="font-size:7px;">No Person</p>'
                    }
                    // man
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                });
                html += '</td>'
            }
            // loop date
            html += '</tr>'
        })
        $('#body_list').html(html)
        listProdPlanning()
    }
    var cards
    var activeIndex

    function listProdPlanning() {
        var html = ''
        $.each(data_work.workPlan, function(k, v) {
            var today = ''
            if (v.date == currentDate()) {
                activeIndex = k
                today = '<span class="ms-2 badge bg-info text-dark">Today</span>'
            }
            html += '<div class="card shadow-none btn-list-planning" style="border-radius:0px;border-right: none;border-left: none;cursor:pointer;" data-index="' + k + '">'
            html += '<div class="card-body pt-2 pb-2">'
            html += '<div class="row">'
            html += '<div class="col align-self-center">'
            html += '<p class="m-0 small-text"><b>' + formatDateIndonesia(v.date) + '</b>' + today + '</p>'
            html += '</div>'
            html += '<div class="col-1 align-self-center text-right pe-3">'
            html += '<i class="fa fa-arrow-circle-o-right"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="card shadow-none card-list-planning" id="card-list-planning' + k + '" style="border-radius:0px;border-right: none;border-left: none;cursor:pointer;" hidden>'
            html += '<div class="card-body pt-2 pb-2">'
            html += '<div class="row">'
            html += '<div class="col">'
            html += '<p class="m-0 super-small-text"><b>Detail</b></p>'
            html += '</div>'
            html += '<div class="col text-end">'
            html += '<p class="m-0 super-small-text text-primary"><b>Check Plan</b></p>'
            html += '</div>'
            html += '<div class="col-12 pt-3 pb-3">'
            // list mesin
            var indexMachine = 1
            var dataMachine = data_work_plan_no_shift_machine.filter((value, key) => {
                if (v.date == value.date) return true
            })
            dataMachine.forEach(e => {
                html += '<div class="row">'
                html += '<div class="col-4 pe-1">'
                html += '<p class="m-0 super-small-text">' + e.machine_name + '</p>'
                html += '</div>'
                html += '<div class="col-8">'
                var data = data_work_plan_no_shift_group.filter((value, key) => {
                    if (v.date == value.date && value.machine_id == e.machine_id) return true
                })
                // list produk
                data.forEach(el => {
                    html += '<div class="row">'
                    html += '<div class="col-4 ps-0 pe-0">'
                    html += '<p class="m-0 super-small-text">' + el.product_alias + '</p>'
                    html += '</div>'
                    html += '<div class="col-4 text-end pe-0">'
                    html += '<p class="m-0 super-small-text">' + number_format(el.product_qty) + '</p>'
                    html += '</div>'
                    html += '<div class="col-4 text-end ps-1">'
                    html += '<p class="m-0 super-small-text">' + el.unit_name + '</p>'
                    html += '</div>'
                    html += '</div>'
                })
                // list produk
                html += '</div>'
                // if kurang dari mesin maka nampilkan hr
                if (indexMachine < dataMachine.length) {
                    html += '<div class="col-12">'
                    html += '<hr class="mt-1 mb-2">'
                    html += '</div>'
                }
                // if kurang dari mesin maka nampilkan hr
                html += '</div>'
                indexMachine++
            })
            // list mesin
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listProdPlanning').html(html)
        cards = document.getElementsByClassName('btn-list-planning');
        for (var i = 0; i < cards.length; i++) {
            cards[i].addEventListener('click', toggleCard.bind(null, i));
        }
        if (activeIndex != undefined) {
            toggleCard(activeIndex)
        }
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

    function managementManPower(event, date = null, machine_id = null) {
        event.stopPropagation();
        var dateList = dateRangeComplete(data_work.workPlan[0].date, data_work.workPlan[parseInt(data_work.workPlan.length) - 1].date)
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
        html_body += '<p class="small-text"><b id="nameManPower">No Man Power</b></p>'
        html_body += '</div>'
        html_body += '<div class="col text-end align-self-center">'
        html_body += '<p class="super-small-text"><span id="sisaManPower">0</span> Person Left</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<div class="form-group has-search">'
        html_body += '<span class="fa fa-search form-control-feedback"></span>'
        html_body += '<input type="text" class="form-control" placeholder="Search" id="search_nama">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 pt-4">'

        html_body += '<div style="max-height: 300px;overflow-x: hidden;overflow-y: auto;" id="listManPower">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8 p-4">'

        html_body += '<div class="row">'
        html_body += '<div class="col-8" id="bodyManPower">'
        // UTAMA
        // UTAMA
        html_body += '</div>'
        html_body += '<div class="col-4">'
        // TANGGAL
        html_body += '<div class="card shadow-none h-100">'
        html_body += '<div class="card-body">'
        html_body += '<p class="super-small-text text-grey m-0 mb-4">More Date</p>'
        for (let i = 0; i < dateList.length; i++) {
            html_body += '<div class="row">'
            if (dateList[i] == date) {
                html_body += '<div class="col-2 align-self-center">'
                html_body += '<i class="fa fa-chevron-left"></i>'
                html_body += '</div>'
            }
            html_body += '<div class="col-10 align-self-center">'
            html_body += '<p class="m-0 small"><b>' + formatDateIndonesia(dateList[i]) + '</b></p>'
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
        bodyManPower(date)
    }

    function bodyManPower(date) {
        if (date != null) {
            var dataMachine = data_work_plan_group.filter((v, k) => {
                if (v.start == date) return true
            })
            var currentShift = groupAndSum(data_work_plan_group, ['shift_id', 'nama_shift'], [])
            var html = ''
            html += '<h4 class="m-0"><b>' + formatDateIndonesia(date) + '</b></h4>'
            html += '<p class="super-small-text text-grey m-0">Available ' + currentShift.length + ' Shift</p>'

            html += '<div class="row p-3 pt-4">'
            currentShift.forEach(e => {
                html += '<div class="col-auto statusLine super-small-text pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="statusLine()" id="colStatusLineall">' + e.nama_shift + '</div>'
            });
            html += '</div>'

            html += '<div class="row">'
            html += '<div class="col-12">'

            html += '<p class="m-0 super-small-text"><b>Position</b></p>'
            html += '<div class="row ps-2 pe-2 mb-3">'
            $.each(data_work.manPower, function(key, value) {
                html += '<div class="col p-1">'
                html += '<div class="card shadow-none manPower" id="manPower' + key + '" style="cursor:pointer;" onclick="chooseManPower(' + "'" + key + "'" + ')">'
                html += '<div class="card-body p-2 text-center text-wrap">'
                html += '<p class="m-0 super-small-text">' + key.toUpperCase() + '</p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
            html += '</div>'

            html += '<p class="m-0 super-small-text"><b>Machine/Section</b></p>'
            html += '<div class="row ps-2 pe-2 mb-3" id="listMachineSection">'
            html += '</div>'

            html += '<p class="m-0 super-small-text"><b>Man Power</b></p>'
            html += '<div class="row ps-2 pe-2 mb-3">'
            for (let i = 0; i < 2; i++) {
                html += '<div class="col-12 p-1">'
                html += '<div class="card shadow-none">'
                html += '<div class="card-body p-2">'

                html += '<div class="row">'
                html += '<div class="col-11">'
                html += '<p class="m-0 small-text"><b>Moch. Sochron</b></p>'
                html += '<p class="m-0 super-small-text">2 Position in this Date</p>'
                html += '</div>'
                html += '<div class="col-1 align-self-center">'
                html += '<i class="fa fa-times text-danger"></i>'
                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
            html += '</div>'

            html += '</div>'
            html += '</div>'
            $('#bodyManPower').html(html)
        } else {
            empty('#bodyManPower', 'Silahkan Pilih Tanggal Terlebih Dahulu')
        }
    }

    function chooseManPower(key) {
        $('.manPower').removeClass('active')
        $('#manPower' + key).addClass('active')
        listManPower(key)
    }

    function listManPower(key) {
        var html = ''
        $('#nameManPower').html(key.toUpperCase())
        $('#sisaManPower').html(data_work.manPower[key].length)
        data_work.manPower[key].forEach(e => {
            html += '<div class="row pt-2 pb-2">'
            html += '<div class="col-9 align-self-center">'
            html += '<p class="m-0 small-text"><b>' + e.full_name + '</b></p>'
            html += '<p class="m-0 super-small-text text-grey"><b>' + e.email + '</b></p>'
            html += '</div>'
            html += '<div class="col-3 align-self-center">'
            html += '<i class="fa fa-user-plus"></i>'
            html += '</div>'
            html += '</div>'
        });
        $('#listManPower').html(html)
        listMachineSection(key)
    }

    function listMachineSection(key) {
        var html = ''
        if (key == 'mechanic') {
            $.each(data_work.machineType, function(k, v) {
                html += '<div class="col p-1">'
                html += '<div class="card shadow-none machinePower" id="machinePower' + k + '" onclick="showManPower(' + k + ')" style="cursor:pointer">'
                html += '<div class="card-body p-2 text-center text-wrap">'
                html += '<p class="m-0 super-small-text">' + v.name + '</p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
        } else if (key == 'qc') {
            html += '<div class="col-12 text-center p-3">'
            html += '<p class="m-0 small-text"><i>Mesin tidak tersedia untuk Quality Control<i></p>'
            html += '</div>'
        } else {
            $.each(data_work.machine, function(k, v) {
                html += '<div class="col p-1">'
                html += '<div class="card shadow-none machinePower" id="machinePower' + k + '" onclick="showManPower(' + k + ')" style="cursor:pointer">'
                html += '<div class="card-body p-2 text-center text-wrap">'
                html += '<p class="m-0 super-small-text">' + v.code + '</p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
        }
        $('#listMachineSection').html(html)
    }

    function showManPower(key) {
        $('.machinePower').removeClass('active')
        $('#machinePower' + key).addClass('active')
    }

    function changePlan(event, date, machine_id, shift_id = null) {
        // detail dari shift tersebut, tapi masih bisa lihat shift yang lain
        var dataPlanInADate = data_work_plan.filter((v, k) => {
            if (v.machine_id == machine_id && v.date == date) return true
        })
        var currentShift = groupAndSum(dataPlanInADate, ['shift_id', 'shift_name', 'shift_start', 'shift_end'], [])
        // data semua mesin di tanggal itu
        var dataMachine = data_work_plan_group.filter((v, k) => {
            if (v.start == date) return true
        })
        // data master mesin ini
        var masterMachine = data_work.machine.find((v, k) => {
            if (v.id == machine_id) return true
        })
        event.stopPropagation();
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
        html_body += '<h4 class="text-dark-grey m-0"><b>' + formatInternationalDate(date) + '</b></h4>'
        html_body += '</div>'
        html_body += '<div class="col">'
        html_body += '<p class="m-0 super-small-text text-grey">Machine</p>'
        html_body += '<h4 class="text-dark-grey m-0"><b>' + masterMachine.name + '</b></h4>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mt-3">'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 super-small-text mb-2"><b>Machine This Day</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        // card maker
        data_work.machineType.forEach(e => {
            html_body += '<div class="card shadow-none mb-2">'
            html_body += '<div class="card-body p-3">'
            html_body += '<p class="m-0 mb-2"><b>' + e.name + '</b></p>'
            // list maker
            var dataMachineByType = dataMachine.filter((v, k) => {
                if (v.machine_type_id == e.id) return true
            })
            dataMachineByType.forEach(el => {
                var thisMachine = ''
                if (el.resource == machine_id) {
                    thisMachine = 'clicked'
                }
                html_body += '<div class="row">'
                html_body += '<div class="col-12">'
                html_body += '<div class="card shadow-none mb-2 ' + thisMachine + '">'
                html_body += '<div class="card-body p-2">'
                html_body += '<div class="row">'
                html_body += '<div class="col-10 align-self-center">'
                html_body += '<p class="m-0 small"><b>' + el.machine_name + '</b></p>'
                html_body += '<p class="m-0 super-small-text">' + el.produk + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-2 align-self-center text-end">'
                html_body += '<i class="fa fa-comment text-grey"></i>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            });
            html_body += '<div class="row">'
            html_body += '<div class="col-12 text-end">'
            html_body += '<a href="" class="small-text">Add Mekanik (0)</a></i>'
            html_body += '</div>'
            html_body += '</div>'
            // list maker
            html_body += '</div>'
            html_body += '</div>'
        });
        // end card maker
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8 p-4">'
        // header
        html_body += '<div class="row">'
        currentShift.forEach(e => {
            html_body += '<div class="col-auto p-1">'
            html_body += '<div class="card shadow-none">'
            html_body += '<div class="card-body p-2">'
            html_body += '<p class="super-small-text m-0"><b>' + e.shift_name + '</b> ' + convertTimeFormat(e.shift_start) + ' - ' + convertTimeFormat(e.shift_end) + ' <i class="fa fa-comment text-grey ms-2"></i></p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        });
        html_body += '<div class="col-auto p-1">'
        html_body += '<div class="card shadow-none" style="cursor:pointer">'
        html_body += '<div class="card-body p-2">'
        html_body += '<p class="super-small-text m-0"><i class="fa fa-plus text-grey me-2"></i>New Shift</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // header
        // body
        html_body += '<div class="row">'
        html_body += '<div class="col-12 p-1">'
        html_body += '<div class="card shadow-none">'
        html_body += '<div class="card-body h-100" id="bodyPerShift">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // body
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0');

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Simpan</button>'
        $('#modalFooter').html(html_footer);
        if (shift_id != null) {
            detailPerShift(date, machine_id, shift_id)
        }
    }

    function detailPerShift(date, machine_id, shift_id) {
        // data detail dari shift tersebut
        var dataDetail = data_work_plan.filter((v, k) => {
            if (v.machine_id == machine_id && v.date == date && v.shift_id == shift_id) return true
        })
        console.log(dataDetail)
        var html = ''
        html += '<div class="row">'
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text mb-2"><b>Brand & Total Production</b></p>'
        // total
        dataDetail.forEach(e => {
            html += '<div class="row">'
            html += '<div class="col-12">'
            html += '<div class="card shadow-none mb-2">'
            html += '<div class="card-body p-3">'
            html += '<div class="row">'
            html += '<div class="col align-self-center">'
            html += '<p class="m-0"><b class="m-0">' + e.product_alias + '</b></p>'
            html += '<p class="m-0 small-text">' + e.product_name + '</p>'
            html += '</div>'
            html += '<div class="col-3"><input class="form-control form-control-sm shadow-none nominal p-0 m-0" type="text" style="border:0px;" value="' + e.product_qty + '"><hr class="m-0"></div>'
            html += '<div class="col-2 align-self-center p-0"><b class="m-0">' + e.unit_name + '</b></div>'
            html += '<div class="col-1 align-self-center p-0"><i class="fa fa-comment text-grey"></i></div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="card shadow-none mb-2" style="border:1px dashed #D9D9D9;">'
        html += '<div class="card-body p-3 text-center">'
        html += '<p class="m-0 small-text"><i class="me-2 fa fa-plus"></i>Add New</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // total
        html += '</div>'
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text mb-2"><b>Man Power</b></p>'
        // man power
        for (let i = 0; i < 2; i++) {
            html += '<div class="row pb-2">'
            html += '<div class="col-4 align-self-center">'
            html += '<p class="m-0 small-text">Helper (<span>0</span>)</p>'
            html += '</div>'
            html += '<div class="col-8">'
            html += '<select class="form-select form-select-lg w-100" multiple id="identity' + i + '" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
            html += '<option value="1">Amalia Safira</option>'
            html += '<option value="2">Moch. Sochron</option>'
            html += '</select>'
            html += '</div>'
            html += '</div>'
        }
        // man power
        html += '</div>'
        html += '<div class="col-12">'
        html += '<p class="m-0 super-small-text mb-2"><b>Notes</b></p>'
        // man power
        html += '<textarea class="form-control" rows="10"></textarea>'
        // man power
        html += '</div>'
        html += '</div>'
        $('#bodyPerShift').html(html)
        $('.nominal').number(true);
        for (let i = 0; i < 2; i++) {
            $('#identity' + i).select2({
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                closeOnSelect: false,
                dropdownParent: $('#modal'),
                maximumInputLength: 1,
            });
        }
    }
</script>