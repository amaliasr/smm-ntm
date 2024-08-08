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
        background-color: #EDEDED !important;
        color: #B2B2B2;
    }

    .bg-ijo-polos {
        background-color: #f7f7f7 !important;
    }

    .bg-lembur {
        background-color: #FBF1ED !important;
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

    .cursor-klik {
        cursor: pointer;
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

    .bg-dongker {
        background-color: #27374D !important;
        color: white;
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

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px !important;
        border: 1px solid #dce0e6 !important;
    }

    th {
        border: 1px solid #dce0e6 !important;
        padding: 10px !important;
    }

    td {
        border: 1px solid #dce0e6 !important;
        padding: 10px !important;
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

    .avatar canvas {
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

    .plus-avatar-grey-empty {
        background-color: transparent;
        width: 30px;
        height: 30px;
        display: flex;
        color: white;
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
        background-color: #a3644b;
        color: white;
        border-width: 2px;
        border-color: #B31312;
    }

    .bg-no-workplan {
        background-color: white;
        border: 2px dashed #9BA4B5;
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

    .accordion-item:first-of-type .accordion-button {
        border-radius: 0px;
    }

    .accordion-button:not(.collapsed) {
        color: #69707a;
        background-color: #fff;
        border: 0;
    }

    .accordion-button.machine:not(.collapsed)::after {
        background-image: none !important;
    }

    .accordion-button.machine::after {
        background-image: none !important;
    }

    .bg-position {
        background-color: #DDE6ED;
        color: grey;
    }

    .bg-position-filled {
        background-color: #526D82 !important;
        color: white !important;
    }

    .bg-selected-collapse {
        /* background-color: #F3DEBA !important; */
    }

    .form-control:focus {
        border: 1px solid #c5ccd6;
        box-shadow: none;
    }

    .btn-addnew-production:hover {
        background-color: #27374D !important;
        color: white;
        border: 1px solid #27374D !important;
    }

    .btn-addnew-shift:hover,
    .btn-addnew-shift .active {
        background-color: #27374D !important;
        color: white;
        border: 1px solid #27374D !important;
    }

    .btn-choose-shift:hover {
        color: #FD8D14 !important;
    }

    textarea {
        resize: none;
    }

    .accordion-button::after {
        background: none;
        flex-shrink: none;
        width: 0px;
        height: 0px;
        margin-left: none;
    }

    .accordion-button:not(.collapsed)::after {
        background: none;
        flex-shrink: none;
        width: 0px;
        height: 0px;
        margin-left: none;
    }

    .bg-unavailable {
        background-color: #f3f3f5 !important;
    }

    .btn-outline-grey {
        color: var(--bs-gray-500) !important;
        border-color: var(--bs-gray-500) !important;
    }

    .popover.show {
        opacity: 1;
        pointer-events: auto;
    }

    .popover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    /* CSS Kustom untuk Mengatur Lebar Popover */
    .custom-popover {
        width: 200px !important;
    }

    .man-power:hover {
        color: var(--bs-orange-rgb) !important;
        font-weight: bolder !important;
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
                        <b>WORK PLAN <span id="productionType"></span></b>
                    </h2>
                    <p class="small-text m-0 text-light-dark-grey">Manajemenisasi Rencana Kerja Produksi</p>
                </div>
                <!-- <div class="col-auto align-self-center">
                    <button class="btn btn-sm float-end shadow-none position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"><i class="fa fa-file-o me-2"></i> Test</a>
                    </div>
                </div> -->
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
                    <button type="button" class="btn btn-outline-dark shadow-none btn-sm w-100 h-100" style="text-align: left;" onclick="saveAndShare()">
                        <div class="row">
                            <div class="col-auto p-0 pe-1 align-self-center">
                                <i class="fa fa-share-alt fa-1x"></i>
                            </div>
                            <div class="col-auto p-0 ps-1 align-self-center">
                                <p class="m-0 super-small-test">Share All</p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-6 pe-0 ps-1">
                    <button type="button" class="btn btn-success  shadow-none btn-sm w-100 h-100" style="text-align: left;" id="btnSimpan">
                        <div class="row">
                            <div class="col-auto p-0 pe-1 align-self-center">
                                <i class="fa fa-save fa-1x"></i>
                            </div>
                            <div class="col-auto p-0 ps-1 align-self-center">
                                <p class="m-0 super-small-test">Save Only</p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-12 pe-0 ps-0 pt-2">
                    <button type="button" class="btn btn-outline-danger shadow-none btn-sm w-100 h-100" style="text-align: left;" id="btnBatalAllWorkPlan" onclick="batalAllWorkPlan()" disabled>
                        <div class="row">
                            <div class="col-auto p-0 pe-1 align-self-center">
                                <i class="fa fa-times fa-1x"></i>
                            </div>
                            <div class="col-auto p-0 ps-1 align-self-center">
                                <p class="m-0 super-small-test">Batalkan Semua Workplan</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-9 bg-white p-4">
            <div class="row justify-content-between">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark btn-sm shadow-none" onclick="managementManPower(event)"><i class="fa fa-user-plus me-2"></i>Man Power & Shift</button>
                </div>
                <div class="col text-end">
                    <div class="row justify-content-end">
                        <div class="col-auto pe-0 align-self-center draftedMenu" hidden>
                            <p class="m-0 small-text"><i>Data Still Drafted</i></p>
                            <p class="m-0 small-text text-danger fw-bolder pointer" onclick="batalSimpan()"><u>Batalkan</u></p>
                        </div>
                        <div class="col-auto align-self-center">
                            <button type="button" class="btn btn-success btn-sm shadow-none draftedMenu" onclick="simpan()" hidden><i class="fa fa-save me-2"></i>Save</button>
                            <button type="button" class="btn btn-outline-dark btn-sm shadow-none" onclick="seeDetails()"><i class="fa fa-eye me-2"></i>View Detail</button>
                            <button type="button" class="btn btn-outline-danger btn-sm shadow-none" onclick="cetakPDF()"><i class="fa fa-download me-2"></i>PDF</button>

                        </div>
                    </div>
                </div>
                <div class="col-12 pt-3">
                    <div class="h-100">
                        <div class="table-responsive" id="table-product-trend-wrapper">
                            <table class="table table-hover table-bordered" style="width: 100%;white-space:nowrap;">
                                <thead>
                                    <tr id="date_list">
                                    </tr>
                                    <tr id="lembur_list">
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
            <div class="modal-body" id="modalBody2" style="overflow-x: hidden">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="true" style="z-index: 99999;">
    <div class="offcanvas-header p-5" id="canvasHeader">
    </div>
    <div class="offcanvas-body p-5" id="canvasBody">
    </div>
</div>
<div hidden>
    <div data-name="popover-content" id="popover_content">

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
<!-- AVATAR -->
<script>
    function hideSave() {
        $('.draftedMenu').attr('hidden', true);
    }

    function showSave() {
        $('.draftedMenu').attr('hidden', false);
    }

    function getInitials(name) {
        const nameArray = name.split(' ');
        return nameArray.map(word => word[0].toUpperCase()).join('');
    }

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    function generateAvatar(initials, date, shift_id, machine_type_id, machine_id) {
        // Create a new canvas element
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        const fontSize = '10'
        const size = '30'

        // Draw background
        context.fillStyle = '#000000';
        context.fillRect(0, 0, size, size);

        // Draw initials
        context.fillStyle = '#ffffff';
        context.font = `${fontSize}px Arial`;
        context.textAlign = 'center';
        context.textBaseline = 'middle';
        context.fillText(initials, size / 2, size / 2);

        return canvas;
    }
</script>
<script>
    function removeNullProduct(data) {
        var dataFiltered = data.filter((v, k) => {
            if (v.product_id != null) return true
        })
        return dataFiltered
    }

    function countEmployeesByParameters(data, groupId, machineType, machineId) {
        let totalCount = 0;
        let listEmployee = []

        function countEmployeeType(employeeArray, position) {
            if (Array.isArray(employeeArray)) {
                totalCount += employeeArray.length;
                if (employeeArray.length > 0) {
                    employeeArray.forEach(e => {
                        var dataEmployee = data_work.manPower[position].find((v, k) => {
                            if (e.id == v.id) return true
                        })
                        if (dataEmployee) {
                            listEmployee.push({
                                'full_name': dataEmployee.full_name,
                                'photo': dataEmployee.photo,
                            })
                        }
                    });
                }
            }
        }
        var dataShift = data.find((v, k) => {
            if (v.shift.group_id == groupId) return true
        })
        if (dataShift) {
            countEmployeeType(dataShift.employee_qc, 'qc');
            var dataMachineType = dataShift.shift_mechanic.find((v, k) => {
                if (v.machine_type.id == machineType) return true
            })
            if (dataMachineType) {
                countEmployeeType(dataMachineType.employee_mechanic, 'mechanic');
                var dataMachine = dataMachineType.shift_machine.find((v, k) => {
                    if (v.machine.id == machineId) return true
                })
                if (dataMachine) {
                    data_work.manPowerFrame.forEach(k => {
                        var show = 1
                        if (type_name_production == 'skm') {
                            if (k == 'qc' || k == 'mechanic') {
                                show = 0
                            }
                        }
                        if (show) {
                            eval(`countEmployeeType(dataMachine.employee_${k}, '${k}');`)
                        }
                    })
                    // countEmployeeType(dataMachine.employee_catcher, 'catcher');
                    // countEmployeeType(dataMachine.employee_helper, 'helper');
                    // countEmployeeType(dataMachine.employee_operator, 'operator');
                }
            }
        }
        var returnData = {
            'totalCount': totalCount,
            'listEmployee': listEmployee,
        }
        return returnData;
    }

    function findDataByIdFromArrayObject(input, data) {
        const idSet = new Set(input.map(id => parseInt(id))); // Mengonversi input menjadi set bilangan
        const foundData = data.filter(item => idSet.has(item.id));
        return foundData;
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function generateItemProduct() {
        var data = data_work.productItem
        const output = [];
        for (const item of data) {
            const {
                id,
                code,
                name,
                alias,
                machine
            } = item;

            for (const machineItem of machine) {
                const {
                    item_id
                } = machineItem;
                const outputItem = {
                    id: item_id,
                    code: code,
                    name: name,
                    alias: alias
                };
                output.push(outputItem);
            }
        }

        return output;
    }

    function findEntitiesByMachineId(data, targetMachineId) {
        const result = [];

        for (const entity of data) {
            if (entity.machine_ids.includes(targetMachineId)) {
                result.push(entity.id);
            }
        }

        return result;
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
                if (group[i].product_id != null) {
                    produk.push(group[i].product_alias + ' (' + group[i].product_qty + ')');
                }
            }
            var obj = {
                start: group[0].date,
                end: group[0].date,
                shift_id: group[0].shift_id,
                shift_group_id: group[0].shift_group_id,
                nama_shift: "" + convertTimeFormat(group[0].shift_start) + " - " + convertTimeFormat(group[0].shift_end),
                machine_type_id: group[0].machine_type_id,
                resource: group[0].machine_id,
                machine_name: group[0].machine_name,
                produk: produk.join(", "),
                work_plan_id: group[0].work_plan_id,
                work_plan_machine_id: group[0].work_plan_machine_id,
                allDay: true,
            };
            outputData.push(obj);
        }
        return outputData;
    }

    function findGroupName(shiftId, data) {
        for (let i = 0; i < data.length; i++) {
            if (data[i].shift_id.includes(shiftId)) {
                return data[i].group_name;
            }
        }
        return null;
    }

    function findMissingGroups(inputData, data) {
        const inputShiftIds = inputData.map(item => item.shift_id);
        const missingGroups = data.filter(item => {
            for (let i = 0; i < item.shift_id.length; i++) {
                if (inputShiftIds.includes(item.shift_id[i])) {
                    return false;
                }
            }
            return true;
        });

        return missingGroups;
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

    function findPositionUser(data, id) {
        const idCount = data.reduce((count, item) => {
            var countAllMachine = 0
            data_work.manPowerFrame.forEach(k => {
                var show = 1
                if (type_name_production == 'skm') {
                    if (k == 'qc' || k == 'mechanic') {
                        show = 0
                    }
                }
                if (show) {
                    var employeeCount = item.shift_mechanic.reduce((employeeCount, mechanic) => {
                        var employeeemployeeCount = mechanic.shift_machine.reduce((employeeCount, machine) => {
                            eval(`var employeeCountBase = machine.employee_${k} && machine.employee_${k}.filter(employee => employee.id == id).length || 0;`)
                            return employeeCount + employeeCountBase;
                        }, 0);
                        return employeeCount + employeeemployeeCount;
                    }, 0);
                    // console.log(employeeCount)
                    countAllMachine = countAllMachine + employeeCount
                }
            })
            // const helperCount = item.shift_mechanic.reduce((helperCount, mechanic) => {
            //     const employeeHelperCount = mechanic.shift_machine.reduce((helperCount, machine) => {
            //         const employeeCount = machine.employee_helper && machine.employee_helper.filter(employee => employee.id == id).length || 0;
            //         return helperCount + employeeCount;
            //     }, 0);
            //     return helperCount + employeeHelperCount;
            // }, 0);
            // const catcherCount = item.shift_mechanic.reduce((catcherCount, mechanic) => {
            //     const employeeCatcherCount = mechanic.shift_machine.reduce((catcherCount, machine) => {
            //         const employeeCount = machine.employee_catcher && machine.employee_catcher.filter(employee => employee.id == id).length || 0;
            //         return catcherCount + employeeCount;
            //     }, 0);
            //     return catcherCount + employeeCatcherCount;
            // }, 0);
            // const operatorCount = item.shift_mechanic.reduce((operatorCount, mechanic) => {
            //     const employeeOperatorCount = mechanic.shift_machine.reduce((operatorCount, machine) => {
            //         const employeeCount = machine.employee_operator && machine.employee_operator.filter(employee => employee.id == id).length || 0;
            //         return operatorCount + employeeCount;
            //     }, 0);
            //     return operatorCount + employeeOperatorCount;
            // }, 0);
            const qcCount = item.employee_qc && item.employee_qc.filter(employee => employee.id == id).length || 0;
            const mechanicCount = item.shift_mechanic.reduce((mechanicCount, mechanic) => {
                const employeeMechanicCount = mechanic.employee_mechanic && mechanic.employee_mechanic.filter(employee => employee.id == id).length || 0;
                return mechanicCount + employeeMechanicCount;
            }, 0);

            return count + mechanicCount + qcCount + countAllMachine;
        }, 0);

        const positions = [];
        data.forEach(item => {
            item.shift_mechanic.forEach(mechanic => {
                if (mechanic.employee_helper && mechanic.employee_helper.some(employee => employee.id == id)) {
                    positions.push("employee_helper");
                }
                if (mechanic.employee_catcher && mechanic.employee_catcher.some(employee => employee.id == id)) {
                    positions.push("employee_catcher");
                }
                if (mechanic.employee_mechanic && mechanic.employee_mechanic.some(employee => employee.id == id)) {
                    positions.push("employee_mechanic");
                }
                if (mechanic.employee_operator && mechanic.employee_operator.some(employee => employee.id == id)) {
                    positions.push("employee_operator");
                }
            });
        });

        const availablePositions = createAvailablePositions();

        return {
            idCount: idCount,
            positions: positions,
            availablePositions: availablePositions
        };
    }

    function createAvailablePositions() {
        var array = []
        data_work.manPowerFrame.forEach(k => {
            array.push('employee_' + k)
        })
        return array
    }

    function findLongestDuration(data, availableShift) {
        if (!availableShift) {
            const groups = {};

            // Group data by the "start" property
            data.forEach(item => {
                if (!groups[item.start]) {
                    groups[item.start] = [];
                }
                groups[item.start].push(item);
            });

            // Find the longest duration for each group
            let maxDuration = 0;
            let maxDurationStart = null;
            for (const key in groups) {
                if (groups.hasOwnProperty(key)) {
                    const groupItems = groups[key];
                    let longestDuration = 0;

                    groupItems.forEach(item => {
                        const start = new Date(`2023-07-28T${item.start}`);
                        const end = new Date(`2023-07-28T${item.end}`);
                        const duration = end - start;

                        if (duration > longestDuration) {
                            longestDuration = duration;
                        }
                    });

                    if (longestDuration > maxDuration) {
                        maxDuration = longestDuration;
                        maxDurationStart = key;
                    }
                }
            }

            // Filter the data with the longest duration group
            const filteredData = data.filter(item => item.start == maxDurationStart);

            // If there are multiple items with the same longest duration, choose the first one
            var finalData = [filteredData[0]];
        } else {
            var dataShiftMaster = data_work.shift[0].shift_list.filter((v, k) => {
                if (v.id == availableShift) return true
            })
            dataShiftMaster[0].end = dataShiftMaster[0].start_time
            dataShiftMaster[0].start = dataShiftMaster[0].end_time
            // console.log(dataShiftMaster)
            var finalData = dataShiftMaster
        }

        return finalData;
    }

    function groupDataByAttributes(inputData, attributes) {
        const groupedData = {};

        inputData.forEach(item => {
            const key = attributes.map(attribute => item[attribute]).join("-");

            if (!(key in groupedData)) {
                groupedData[key] = [];
            }

            groupedData[key].push(item);
        });

        const result = [];

        for (const key in groupedData) {
            const firstItem = groupedData[key][0];
            const groupedItem = {};

            attributes.forEach(attribute => {
                groupedItem[attribute] = firstItem[attribute];
            });

            result.push(groupedItem);
        }

        return result;
    }

    function generateEmployeeRolesOutput(data) {
        const employeeRoles = new Set();

        data.forEach(item => {
            data_work.manPowerFrame.forEach(k => {
                var show = 1
                if (type_name_production == 'skm') {
                    if (k == 'qc' || k == 'mechanic') {
                        show = 0
                    }
                }
                if (show) {
                    eval(`if (item.employee_${k}.length > 0) { employeeRoles.add('${k.toUpperCase()}'); }`)
                }
            })
            // if (item.employee_catcher.length > 0) {
            //     employeeRoles.add('CATCHER');
            // }
            // if (item.employee_helper.length > 0) {
            //     employeeRoles.add('HELPER');
            // }
            // if (item.employee_operator.length > 0) {
            //     employeeRoles.add('OPERATOR');
            // }
            if (item.employee_mechanic.length > 0) {
                employeeRoles.add('MECHANIC');
            }
            if (item.employee_qc.length > 0) {
                employeeRoles.add('QC');
            }
        });

        return Array.from(employeeRoles);
    }

    function groupEmployeesByUnique(data) {
        const uniqueEmployees = {};

        data.forEach(item => {
            const employeeCatcher = item.employee_catcher;
            const employeeHelper = item.employee_helper;
            const employeeOperator = item.employee_operator;
            const employeeMechanic = item.employee_mechanic;
            const employeeQC = item.employee_qc;

            [employeeCatcher, employeeHelper, employeeMechanic, employeeOperator, employeeQC].forEach(employees => {
                employees.forEach(employee => {
                    const key = `${employee.id}-${employee.name}`;
                    if (!(key in uniqueEmployees)) {
                        uniqueEmployees[key] = employee;
                    }
                });
            });
        });

        return Object.values(uniqueEmployees);
    }

    function ubahArrayKeString(arrayTanggal) {
        return arrayTanggal.join(', ');
    }

    function showVariableForEmployee(d) {
        // console.log(d)
        var findMachineTypeId = findEntitiesByMachineId(data_work.machineType, d.machine.id)[0]
        // console.log(findMachineTypeId)
        var data = []
        data_work.manPowerFrame.forEach(k => {
            if (type_name_production == 'skm') {
                if (k != 'qc' && k != 'mechanic') {
                    eval(`var em${k} = []`)
                    eval(`var dataEmployee =  d.employee_${k}`)
                    if (dataEmployee) {
                        if (dataEmployee.length > 0) {
                            eval(`em${k} = dataEmployee.map(employee => employee.id)`)
                        }
                    }
                    data.push({
                        variable: k,
                        name: 'em' + k,
                        data: eval(`em${k}`)
                    })
                }
            } else {
                // console.log(k)
                // if (k != 'qc_verpack') {
                eval(`var em${k} = []`)
                eval(`var dataEmployee =  d.employee_${k}`)
                if (dataEmployee.length > 0) {
                    eval(`em${k} = dataEmployee.map(employee => employee.id)`)
                }
                data.push({
                    variable: k,
                    name: 'em' + k,
                    data: eval(`em${k}`)
                })
                // }
            }
        });
        // data_work.machineTypeManPowerFrame.forEach(val => {
        //     if (val.id == findMachineTypeId) {
        //         if (val.person_label_entry_acces) {
        //             val.person_label_entry_acces.forEach(k => {
        //                 eval(`var em${k} = []`)
        //                 eval(`var dataEmployee =  d.employee_${k}`)
        //                 if (dataEmployee.length > 0) {
        //                     eval(`em${k} = dataEmployee.map(employee => employee.id)`)
        //                 }
        //                 data.push({
        //                     variable: k,
        //                     name: 'em' + k,
        //                     data: eval(`em${k}`)
        //                 })
        //             })
        //         } else {
        //             data_work.manPowerFrame.forEach(k => {
        //                 if (type_name_production == 'skm') {
        //                     if (k != 'qc' && k != 'mechanic') {
        //                         eval(`var em${k} = []`)
        //                         eval(`var dataEmployee =  d.employee_${k}`)
        //                         if (dataEmployee) {
        //                             if (dataEmployee.length > 0) {
        //                                 eval(`em${k} = dataEmployee.map(employee => employee.id)`)
        //                             }
        //                         }
        //                         data.push({
        //                             variable: k,
        //                             name: 'em' + k,
        //                             data: eval(`em${k}`)
        //                         })
        //                     }
        //                 } else {
        //                     // console.log(k)
        //                     eval(`var em${k} = []`)
        //                     eval(`var dataEmployee =  d.employee_${k}`)
        //                     if (dataEmployee.length > 0) {
        //                         eval(`em${k} = dataEmployee.map(employee => employee.id)`)
        //                     }
        //                     data.push({
        //                         variable: k,
        //                         name: 'em' + k,
        //                         data: eval(`em${k}`)
        //                     })
        //                 }
        //             });
        //         }
        //     }
        // })

        return data
    }

    function showVariableForEmployeeForManpower(masterMachine, date, v, value) {
        var data = []
        data_work.machineTypeManPowerFrame.forEach(val => {
            if (val.id == value.id) {
                if (val.person_label_entry_acces) {
                    val.person_label_entry_acces.forEach(k => {
                        // if (type_name_production == 'skm') {
                        // if (k != 'qc' && k != 'mechanic') {
                        eval(`var total${k} = 0`)
                        $.each(masterMachine, function(keys, values) {
                            var executorEmployee = manPowerFilter({
                                key: 'date',
                                value: date
                            }, {
                                key: 'shift_group_id',
                                value: v.group_id
                            }, {
                                key: 'machine_type_id',
                                value: value.id
                            }, {
                                key: 'machine_id',
                                value: values.id
                            })
                            // console.log(k)
                            // console.log(executorEmployee)
                            eval(`total${k} = total${k} + parseInt(executorEmployee[k].total)`)
                        })
                        data.push({
                            variable: k,
                            name: 'total' + k,
                            data: eval(`total${k}`)
                        })
                        // }
                        // } else {
                        //     eval(`var total${k} = 0`)
                        //     $.each(masterMachine, function(keys, values) {
                        //         var executorEmployee = manPowerFilter({
                        //             key: 'date',
                        //             value: date
                        //         }, {
                        //             key: 'shift_group_id',
                        //             value: v.group_id
                        //         }, {
                        //             key: 'machine_type_id',
                        //             value: value.id
                        //         }, {
                        //             key: 'machine_id',
                        //             value: values.id
                        //         })
                        //         eval(`total${k} = total${k} + parseInt(executorEmployee[k].total)`)
                        //     })
                        //     data.push({
                        //         variable: k,
                        //         name: 'total' + k,
                        //         data: eval(`total${k}`)
                        //     })
                        // }
                    });
                } else {
                    data_work.manPowerFrame.forEach(k => {
                        // if (type_name_production == 'skm') {
                        //     if (k != 'qc' && k != 'mechanic') {
                        eval(`var total${k} = 0`)
                        $.each(masterMachine, function(keys, values) {
                            var executorEmployee = manPowerFilter({
                                key: 'date',
                                value: date
                            }, {
                                key: 'shift_group_id',
                                value: v.group_id
                            }, {
                                key: 'machine_type_id',
                                value: value.id
                            }, {
                                key: 'machine_id',
                                value: values.id
                            })
                            eval(`total${k} = total${k} + parseInt(executorEmployee[k].total)`)
                        })
                        data.push({
                            variable: k,
                            name: 'total' + k,
                            data: eval(`total${k}`)
                        })
                        // }
                        // } else {
                        //     eval(`var total${k} = 0`)
                        //     $.each(masterMachine, function(keys, values) {
                        //         var executorEmployee = manPowerFilter({
                        //             key: 'date',
                        //             value: date
                        //         }, {
                        //             key: 'shift_group_id',
                        //             value: v.group_id
                        //         }, {
                        //             key: 'machine_type_id',
                        //             value: value.id
                        //         }, {
                        //             key: 'machine_id',
                        //             value: values.id
                        //         })
                        //         eval(`total${k} = total${k} + parseInt(executorEmployee[k].total)`)
                        //     })
                        //     data.push({
                        //         variable: k,
                        //         name: 'total' + k,
                        //         data: eval(`total${k}`)
                        //     })
                        // }
                    });
                }
            }
        })
        return data
    }

    function removeDataById(data, idsToRemove) {
        return data.filter(item => !idsToRemove.includes(item.id));
    }

    function removeDataByWorkPlanId(data, idsToRemove) {
        return data.filter(item => !idsToRemove.includes(item.work_plan_id));
    }

    function cardAlert(text, direction) {
        var html = ''
        html += '<div class="card h-100" style="background-color:transparent;border: 1px dashed #cfcfcf;">'
        html += '<div class="card-body p-5 text-center d-flex align-items-center justify-content-center">'
        html += '<p class="m-0 super-small-text"><i>' + text + '</i></p>'
        html += '</div>'
        html += '</div>'
        $(direction).html(html)
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
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
    }

    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    function empty(location, text) {
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none border-0"><div class="card-body h-100 p-5 m-5"><p class="small"><i>' + text + '</i></p><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player></div></div></div></div>')
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

    var data_work_plan = []
    var data_work_plan_no_shift = []
    var data_work_plan_group
    var data_work_plan_no_shift_group
    var data_work_plan_no_shift_machine
    var management_manpower = []
    var set_work_plan = {}
    var data_work_plan_real = []
    var delete_id = {}
    var data_work_plan_bar = {}
    var type_name_production
    var hariIni = currentDate()

    function reset() {
        data_work_plan = []
        data_work_plan_no_shift = []
        data_work_plan_group
        data_work_plan_no_shift_group
        data_work_plan_no_shift_machine
        management_manpower = []
        set_work_plan = {}
        data_work_plan_bar = {}
        set_work_plan['workPlan'] = []
        set_work_plan['workPlanShift'] = []
        set_work_plan['workPlanMachineType'] = []
        set_work_plan['workPlanMachine'] = []
        set_work_plan['workPlanProduct'] = []
        data_work_plan_bar['shift'] = []
        data_work_plan_bar['machineType'] = []
        data_work_plan_bar['machine'] = []
    }

    function resetDelete() {
        delete_id = {
            workPlan: [],
            workPlanShift: [],
            workPlanMachineType: [],
            workPlanMachine: [],
            workPlanProduct: [],
        }
    }

    $(document).ready(function() {
        loadDataPlanning(plan_id)
    })

    function loadDataPlanning(id) {
        resetDelete()
        var data = {
            productionPlanId: id,
            employeeId: user_id,
        }
        var url = "<?= api_produksi('loadPageWorkPlanManage'); ?>"
        getData(data, url, id)
    }

    var data_work
    var convertedToWorkPlan = 'no'

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
                // console.log(data_work)
                type_name_production = data_work.productionTypeForeman.name.toLowerCase()
                $('#kodePlan').html('#' + data_work.productionPlan.code)
                $('#dateRange').html(formatDateIndonesiaTanggalBulan(data_work.productionPlan.date_start) + ' - ' + formatDateIndonesiaTanggalBulan(data_work.productionPlan.date_end))
                $('#productionType').html('<span class="badge bg-' + data_work.productionPlan.production_type.name.toLowerCase() + ' ms-2 fw-bolder">' + data_work.productionPlan.production_type.name + '</span>')
                // cek apakah ada yang work_plan_id nya null
                var createAllWorkPlan = true
                data_work.workPlan.forEach(e => {
                    if (!e.work_plan[type_name_production].work_plan_id) {
                        createAllWorkPlan = false
                    }
                });
                if (!createAllWorkPlan) {
                    // jika belum ada workplan
                    $('#btnBatalAllWorkPlan').prop("disabled", true)
                    convertToWorkPlan()
                } else {
                    $('#btnBatalAllWorkPlan').prop("disabled", false)
                    // jika sudah ada workplan
                    convertedToWorkPlan = 'yes'
                    arrangeVariable()
                }
            }
        })
    }

    function workPlanStarted(params) {

    }
    var data_work_converted = []
    var blankShift = []

    function convertToWorkPlan() {
        data_work_converted = []
        var template = data_work.workPlanManageDataTemplate
        var indexDate = 0
        var availableShift
        data_work.workPlan.forEach(e => {
            if (e.work_plan[type_name_production].shift_qc) {
                e.work_plan[type_name_production].shift_qc.forEach(el => {
                    if (el.shift) {
                        availableShift = el.shift.id
                        convertedToWorkPlan = 'yes'
                    }
                });
            }
        });
        data_work.workPlan.forEach(a => {
            if (!a.work_plan[type_name_production].work_plan_id) {
                data_work_converted.push({
                    date: a.date,
                    id: a.id,
                    note: a.note,
                    production_plan: a.production_plan,
                    work_plan: a.work_plan,
                })
                data_work_converted[indexDate].work_plan[type_name_production] = {
                    work_plan_id: new Date().getTime() + '' + indexDate,
                    is_overtime: 0,
                    shift_qc: []
                }
                // data_work_converted[indexDate].work_plan[type_name_production].work_plan_id = new Date().getTime() + '' + indexDate
                // data_work_converted[indexDate].work_plan[type_name_production].shift_qc = []
                // date
                var indexShift = 0
                // console.log(a.production_plan.shift)
                var filteredShift = findLongestDuration(a.production_plan.shift, availableShift)
                filteredShift.forEach(b => {
                    // shift
                    var dataShift = deepCopy(template.shift_qc)[0]
                    dataShift.shift.id = b.id
                    dataShift.shift.name = b.name
                    dataShift.shift.start = b.start
                    dataShift.shift.end = b.end
                    dataShift.shift.group_id = b.group_id
                    dataShift.work_plan_shift_id = new Date().getTime() + '' + indexDate + '' + indexShift
                    dataShift.shift_mechanic = []
                    if (b.id == null) {
                        blankShift.push({
                            'id': dataShift.work_plan_shift_id,
                        })
                    }
                    data_work_converted[indexDate].work_plan[type_name_production].shift_qc.push(dataShift)
                    var indexMachineType = 0
                    a.production_plan.machine_type.forEach(c => {
                        var checkMachineType = data_work.machineType.find((v, k) => {
                            if (v.id == c.id) return true
                        })
                        if (checkMachineType) {
                            // machine_type
                            var dataMachineType = deepCopy(template.shift_mechanic)[0]
                            dataMachineType.shift.id = b.id
                            dataMachineType.shift.name = b.name
                            dataMachineType.shift.start = b.start
                            dataMachineType.shift.end = b.end
                            dataMachineType.shift.group_id = b.group_id
                            dataMachineType.machine_type.id = c.id
                            dataMachineType.machine_type.name = c.name
                            dataMachineType.work_plan_machine_type_id = new Date().getTime() + '' + +'' + indexShift + '' + indexDate + '' + indexMachineType
                            dataMachineType.shift_machine = []
                            if (b.id == null) {
                                blankShift.push({
                                    'id': dataMachineType.work_plan_machine_type_id,
                                })
                            }
                            data_work_converted[indexDate].work_plan[type_name_production].shift_qc[indexShift].shift_mechanic.push(dataMachineType)
                            var indexMachine = 0
                            c.machine.forEach(d => {
                                // machine
                                var dataMachine = deepCopy(template.shift_machine)[0]
                                dataMachine.shift.id = b.id
                                dataMachine.shift.name = b.name
                                dataMachine.shift.start = b.start
                                dataMachine.shift.end = b.end
                                dataMachine.shift.group_id = b.group_id
                                dataMachine.machine.id = d.id
                                dataMachine.machine.name = d.name
                                dataMachine.work_plan_machine_id = new Date().getTime() + '' + +'' + indexShift + '' + indexDate + '' + indexMachineType + '' + indexMachine
                                blankShift.push({
                                    'id': dataMachine.work_plan_machine_id,
                                })
                                dataMachine.products = []
                                data_work_converted[indexDate].work_plan[type_name_production].shift_qc[indexShift].shift_mechanic[indexMachineType].shift_machine.push(dataMachine)
                                var indexProduct = 0
                                d.product.forEach(e => {
                                    // console.log(e)
                                    var productConvert = convertUnit(e, d.id)
                                    // product
                                    var dataProduct = deepCopy(template.products)[0]
                                    dataProduct.product.id = productConvert.item_id
                                    dataProduct.product.code = productConvert.item_code
                                    dataProduct.product.name = productConvert.item_name
                                    dataProduct.product.alias = productConvert.item_alias
                                    dataProduct.qty = productConvert.qty
                                    dataProduct.unit.id = productConvert.unit_id
                                    dataProduct.unit.name = productConvert.unit_name
                                    dataProduct.unit.multiplier = productConvert.unit_multiplier
                                    // dataProduct.product.id = e.id
                                    // dataProduct.product.code = e.code
                                    // dataProduct.product.name = e.name
                                    // dataProduct.product.alias = e.alias
                                    // dataProduct.qty = e.qty
                                    // dataProduct.unit.id = e.unit.id
                                    // dataProduct.unit.name = e.unit.name
                                    // dataProduct.unit.multiplier = e.unit.multiplier
                                    dataProduct.work_plan_product_id = new Date().getTime() + '' + +'' + indexShift + '' + indexDate + '' + indexMachineType + '' + indexMachine + '' + indexProduct
                                    var checkProduct
                                    if (indexProduct) {
                                        checkProduct = data_work_converted[indexDate].work_plan[type_name_production].shift_qc[indexShift].shift_mechanic[indexMachineType].shift_machine[indexMachine].products.find((v, k) => {
                                            if (v.product.id == productConvert.item_id) return true
                                        })
                                    }
                                    if (!checkProduct) {
                                        data_work_converted[indexDate].work_plan[type_name_production].shift_qc[indexShift].shift_mechanic[indexMachineType].shift_machine[indexMachine].products.push(dataProduct)
                                        indexProduct++
                                    } else {
                                        checkProduct.qty = parseFloat(checkProduct.qty) + parseFloat(productConvert.qty)
                                    }
                                });
                                indexMachine++
                            });
                            indexMachineType++
                        }
                    });
                    indexShift++
                });
                indexDate++
            } else {
                data_work_converted.push(a)
                indexDate++
            }
        })
        // console.log(data_work_converted)
        finishedConvert()
    }

    function convertUnit(data, machine_id) {
        var conversion = 0
        eval(`conversion = parseFloat(data.qty) ${data.unit_work_plan_conversion.operator} data.unit_work_plan_conversion.multiplier`)
        var dataProduct = findProductItem(data.id, machine_id)
        var findUnit = data_work.item.find((v, k) => {
            if (v.id == dataProduct.id) return true
        }).unit_default.find((v, k) => {
            if (v.machine_id == machine_id) return true
        }).unit_id

        var findUnitMachine = data_work.item.find((v, k) => {
            if (v.id == dataProduct.id) return true
        }).unit_option.find((v, k) => {
            if (v.id == findUnit) return true
        })
        if (findUnitMachine) {
            eval(`conversion = parseFloat(conversion) ${findUnitMachine.operator} findUnitMachine.multiplier`)
        }
        return {
            qty: Math.ceil(conversion),
            unit_id: findUnitMachine.id,
            unit_name: findUnitMachine.name,
            unit_multiplier: findUnitMachine.multiplier,
            item_id: dataProduct.id,
            item_alias: dataProduct.alias,
            item_code: dataProduct.code,
            item_name: dataProduct.name,
        }
    }

    function findProductItem(product_id, machine_id) {
        var dataProduct = data_work.productItem.find((v, k) => {
            if (v.id == product_id) return true
        })
        if (dataProduct) {
            // console.log(dataProduct.machine)
            // console.log(dataProduct)
            // console.log(machine_id)
            dataProduct = dataProduct.machine.find((v, k) => {
                if (v.id == machine_id) return true
            }).item_id
        } else {
            dataProduct = product_id
        }
        var viewDataProduct = groupAndSum(data_work.item, ['id', 'alias', 'code', 'name'], []).find((v, k) => {
            if (v.id == dataProduct) return true
        })
        return viewDataProduct
    }

    function chooseShiftBeforeArrange() {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Choose Main Shift</h5>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 p-5 pb-2 pt-3">'
        html_body += '<p>Sistem Menemukan <b class="text-danger">' + blankShift.length + '</b> Data yang Belum Memiliki Shift, Silahkan Pilih Shift Utama untuk Bagian Shift yang kosong.</p>'
        html_body += '</div>'
        var a = 1
        data_work.shift[0].shift_list.forEach(e => {
            html_body += '<div class="col-12 pt-3 pb-3 ps-5 pe-5 btn-addnew-shift pointer" onclick="createShiftBeforeArrange(' + e.group_id + ',' + e.id + ')">'
            html_body += '<p class="m-0 small-text">' + e.name + '</p>'
            html_body += '<p class="m-0"><b>' + convertTimeFormat(e.start_time) + " - " + convertTimeFormat(e.end_time) + '</b></p>'
            html_body += '</div>'
            if (a < data_work.shift[0].shift_list.length) {
                html_body += '<div class="col-12"><hr class="m-0"></div>'
            }
            a++
        });
        html_body += '</div>'
        $('#modalBody2').html(html_body).addClass('p-0');
        $('#modalFooter2').addClass('d-none');
    }

    function createShiftBeforeArrange(group_shift_id, shift_id) {
        var dataShiftMaster = data_work.shift[0].shift_list.find((v, k) => {
            if (v.id == shift_id) return true
        })

        data_work.workPlan.forEach(a => {
            a.work_plan[type_name_production].shift_qc.forEach(b => {
                if (b.shift.id == null) {
                    b.shift.id = dataShiftMaster.id
                    b.shift.group_id = dataShiftMaster.group_id
                    b.shift.name = dataShiftMaster.name
                    b.shift.start = dataShiftMaster.start_time
                    b.shift.end = dataShiftMaster.end_time
                }
                b.shift_mechanic.forEach(c => {
                    if (c.shift.id == null) {
                        c.shift.id = dataShiftMaster.id
                        c.shift.group_id = dataShiftMaster.group_id
                        c.shift.name = dataShiftMaster.name
                        c.shift.start = dataShiftMaster.start_time
                        c.shift.end = dataShiftMaster.end_time
                    }
                    c.shift_machine.forEach(d => {
                        if (d.shift.id == null) {
                            d.shift.id = dataShiftMaster.id
                            d.shift.group_id = dataShiftMaster.group_id
                            d.shift.name = dataShiftMaster.name
                            d.shift.start = dataShiftMaster.start_time
                            d.shift.end = dataShiftMaster.end_time
                        }
                    })
                })
            })
        });
        $('#modal2').modal('hide')
        // console.log(data_work.workPlan)
        arrangeVariable()
    }

    function finishedConvert() {
        data_work.workPlan = data_work_converted
        var createShift = false
        data_work.workPlan.forEach(e => {
            if (e.work_plan[type_name_production].shift_qc) {
                createShift = true
            }
        });
        // console.log(data_work.workPlan)
        if (data_work.workPlan[0].production_plan.shift[0].id || !blankShift.length) {
            // jika sebelumnya shiftnya ada dan shiftnya ada di salah satu work plan
            arrangeVariable()
        } else {
            chooseShiftBeforeArrange()
        }
    }

    var jumlahLoad = 0
    var variableOfShift = {}
    var variableLembur = {}

    function arrangeVariable() {
        // console.log(data_work.workPlan)
        variableLembur = {}
        reset()
        // ARRANGE SHIFT
        data_work.shift[0].shift_list.forEach(e => {
            variableOfShift[e.id] = "" + convertTimeFormat(e.start_time) + " - " + convertTimeFormat(e.end_time)
        });
        var numIndex = 0
        var numIndexMachine = 0
        var numIndexWorkPlan = 0
        // VARIABLE WORK PLAN
        data_work.workPlan.forEach(a => {
            // date
            // kalau ada work plan
            // SET VARIABLE PRODUCTION PLAN
            var is_overtime = a.work_plan[type_name_production].is_overtime
            if (a.date) {
                if (formatJustDay(a.date) == 'Minggu') {
                    is_overtime = 1
                }
            }
            variableLembur[a.date] = is_overtime
            set_work_plan['workPlan'].push({
                id: a.work_plan[type_name_production].work_plan_id,
                production_plan_id: data_work.productionPlan.id,
                production_type_id: data_work.productionTypeForeman.id,
                date: a.date,
                is_overtime: is_overtime,
                note: a.note,
            })
            a.work_plan[type_name_production].shift_qc.forEach(b => {
                // qc
                var emqc = []
                if (b.employee_qc.length > 0) {
                    emqc = b.employee_qc.map(employee => employee.id)
                }
                if (b.work_plan_shift_id != null) {
                    set_work_plan['workPlanShift'].push({
                        id: b.work_plan_shift_id,
                        work_plan_id: a.work_plan[type_name_production].work_plan_id,
                        shift_id: b.shift.id,
                        employee_id_qc: emqc,
                        note: b.note,
                    })
                }
                // buat bar work plan
                data_work_plan_bar['shift'].push({
                    'work_plan_id': a.work_plan[type_name_production].work_plan_id,
                    'work_plan_shift_id': b.work_plan_shift_id,
                    'shift_id': b.shift.id,
                    'shift_name': b.shift.name,
                    'nama_shift': "" + convertTimeFormat(b.shift.start) + " - " + convertTimeFormat(b.shift.end),
                    'shift_group_id': b.shift.group_id,
                    'start': a.date,
                })
                // buat bar work plan
                b.shift_mechanic.forEach(c => {
                    // mechanic
                    var emmechanic = []
                    // console.log(c.employee_mechanic)
                    if (c.employee_mechanic.length > 0) {
                        emmechanic = c.employee_mechanic.map(employee => employee.id)
                    }
                    if (c.work_plan_machine_type_id != null) {
                        set_work_plan['workPlanMachineType'].push({
                            id: c.work_plan_machine_type_id,
                            work_plan_shift_id: b.work_plan_shift_id,
                            work_plan_id: a.work_plan[type_name_production].work_plan_id,
                            shift_id: c.shift.id,
                            machine_type_id: c.machine_type.id,
                            employee_id_mechanic: emmechanic,
                            note: c.note,
                        })
                    }
                    // buat bar work plan
                    data_work_plan_bar['machineType'].push({
                        'work_plan_id': a.work_plan[type_name_production].work_plan_id,
                        'machine_type_id': c.machine_type.id,
                        'work_plan_machine_type_id': c.work_plan_machine_type_id,
                        'shift_id': c.shift.id,
                        'shift_name': c.shift.name,
                        'nama_shift': "" + convertTimeFormat(c.shift.start) + " - " + convertTimeFormat(c.shift.end),
                        'shift_group_id': c.shift.group_id,
                        'start': a.date,
                    })
                    // buat bar work plan
                    c.shift_machine.forEach(d => {
                        // machine
                        var dataEmployee = showVariableForEmployee(d)
                        // console.log(dataEmployee)
                        if (d.work_plan_machine_id != null) {
                            set_work_plan['workPlanMachine'].push({
                                id: d.work_plan_machine_id,
                                work_plan_machine_type_id: c.work_plan_machine_type_id,
                                work_plan_id: a.work_plan[type_name_production].work_plan_id,
                                shift_id: d.shift.id,
                                machine_id: d.machine.id,
                                note: d.note,
                            })
                            dataEmployee.forEach(k => {
                                // console.log(k.variable)
                                if (!k.data.length) {
                                    k.data = [null]
                                }
                                eval(`set_work_plan['workPlanMachine'][numIndexMachine].employee_id_${k.variable} =  k.data`)
                            })
                            // console.log(set_work_plan['workPlanMachine'][numIndexMachine])
                            numIndexMachine++
                        }

                        // buat bar work plan
                        data_work_plan_bar['machine'].push({
                            'work_plan_id': a.work_plan[type_name_production].work_plan_id,
                            'machine_type_id': c.machine_type.id,
                            'work_plan_machine_id': d.work_plan_machine_id,
                            'shift_id': d.shift.id,
                            'shift_name': d.shift.name,
                            'nama_shift': "" + convertTimeFormat(d.shift.start) + " - " + convertTimeFormat(d.shift.end),
                            'shift_group_id': d.shift.group_id,
                            'resource': d.machine.id,
                            'start': a.date,
                        })

                        // buat bar work plan
                        var insertPriority = 1
                        d.products.forEach(e => {
                            // console.log(e.product)
                            var dataProduct = findProductItem(e.product.id, d.machine.id)
                            if (!dataProduct) {
                                dataProduct = e.product
                            }
                            // console.log(dataProduct)
                            if (e.work_plan_product_id != null) {
                                set_work_plan['workPlanProduct'].push({
                                    id: e.work_plan_product_id,
                                    work_plan_machine_id: d.work_plan_machine_id,
                                    item_id_product: dataProduct.id,
                                    // item_id_product: dataProduct,
                                    qty: e.qty,
                                    unit_id: e.unit.id,
                                    priority: insertPriority,
                                    note: e.note,
                                })
                                insertPriority++
                            }
                            // products
                            data_work_plan.push({
                                'id': a.id,
                                'date': a.date,
                                'note': a.note,
                                'work_plan_id': a.work_plan[type_name_production].work_plan_id,
                                'shift_id': d.shift.id,
                                'shift_name': d.shift.name,
                                'shift_end': d.shift.end,
                                'shift_start': d.shift.start,
                                'shift_group_id': d.shift.group_id,
                                'work_plan_shift_id': b.work_plan_shift_id,
                                'employee_qc': b.employee_qc,
                                'note_qc': b.note,
                                'shift_id_qc': b.shift.id,
                                'shift_group_id_qc': b.shift.group_id,
                                'machine_type_id': c.machine_type.id,
                                'machine_type_name': c.machine_type.name,
                                'employee_mechanic': c.employee_mechanic,
                                'note_mechanic': c.note,
                                'work_plan_machine_type_id': c.work_plan_machine_type_id,
                                'shift_id_mechanic': c.shift.id,
                                'shift_group_id_mechanic': c.shift.group_id,
                                'machine_id': d.machine.id,
                                'machine_name': d.machine.name,
                                'note_machine': d.note,
                                'work_plan_machine_id': d.work_plan_machine_id,
                                'shift_id_machine': d.shift.id,
                                'product_id': dataProduct.id,
                                'product_code': dataProduct.code,
                                'product_name': dataProduct.name,
                                'product_alias': dataProduct.alias,
                                'product_qty': e.qty,
                                'unit_id': e.unit.id,
                                'unit_name': e.unit.name,
                                'note_product': e.note,
                                'work_plan_product_id': e.work_plan_product_id,
                            })
                            var dataEmployee = showVariableForEmployee(d)
                            // console.log(dataEmployee)
                            dataEmployee.forEach(k => {
                                // console.log(k.variable)
                                eval(`data_work_plan[numIndexWorkPlan].employee_${k.variable} =  d.employee_${k.variable}`)
                            })
                            numIndexWorkPlan++
                        });
                    });
                });
            });
        });
        // data_work_plan = removeNullProduct(data_work_plan)
        if (jumlahLoad == 0) {
            data_work_plan_real = deepCopy(data_work_plan)
        }
        jumlahLoad++
        // console.log(data_work.workPlan)
        groupingData()
    }

    function groupingData() {
        data_work_plan_no_shift_group = groupAndSum(data_work_plan, ['date', 'machine_id', 'machine_name', 'product_id', 'product_name', 'product_alias', 'unit_name'], ['product_qty'])
        data_work_plan_no_shift_machine = groupAndSum(data_work_plan, ['date', 'machine_id', 'machine_name'], [])
        data_work_plan_group = transformData(data_work_plan);
        createHeaderPlanner()
    }

    function createHeaderPlanner() {
        var dateList = dateRangeComplete(data_work.workPlan[0].date, data_work.workPlan[parseInt(data_work.workPlan.length) - 1].date)
        var html = ''
        var html_qc = ''
        var html_lembur = ''
        html += '<th class="" rowspan="3" style="vertical-align: middle;"><b>Machine | Date</b></th>'
        for (let i = 0; i < dateList.length; i++) {
            var qcEmployee = manPowerFilter({
                key: 'date',
                value: dateList[i]
            })
            var classToday = ''
            var badgeToday = ''
            var badgeLembur = ''
            var bgToday = ''
            if (dateList[i] == hariIni) {
                classToday = 'today'
                bgToday = 'bg-ijo-polos'
                badgeToday = '<span class="badge bg-primary ms-2">Today</span>'
            }
            var checkLembur = ''
            if (variableLembur[dateList[i]]) {
                bgToday = 'bg-lembur'
                checkLembur = 'checked'
                badgeLembur = '<span class="badge bg-orange ms-2">Lembur</span>'
            }
            html += '<th class="small-text align-middle p-2 ' + classToday + ' ' + bgToday + '">'
            html += '<div class="row">'
            html += '<div class="col-12 align-self-center p-0 text-center">'
            html += '<p class="m-0">' + formatJustDay(dateList[i]) + '</p>'
            html += '<p class="m-0">' + formatInternationalDate(dateList[i]) + '</p>'
            html += badgeToday + badgeLembur
            html += '</div>'
            // html += '<div class="col-4 align-self-center">'
            // html += '<div class="dropdown"><span class="fa fa-ellipsis-h dropdown-date" role="button" id="dropdownMenuButtonDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;"></span>'
            // html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButtonDate">'
            // html += '<a class="dropdown-item" onclick="managementManPower(event,null,' + "'" + dateList[i] + "'" + ')"><i class="fa fa-file-o me-2"></i> Setting Man Power</a>'
            // html += '<a class="dropdown-item" onclick="formAddNotes(event,' + "'date'" + ",'" + dateList[i] + "'" + ')"><i class="fa fa-comment me-2"></i> Add Notes</a>'
            // html += '</div>'
            html += '</div></div></div>'
            html += '</th>'
            if (type_name_production == 'skm') {
                html_qc += '<th class="small-text ' + bgToday + '"><a href="javascript:void(0)" onclick="managementManPower(event,1,' + "'" + dateList[i] + "'" + ')">'
                var textColor = 'text-grey'
                if (qcEmployee['qc'].total) {
                    textColor = 'text-orange'
                }
                html_qc += '<p class="m-0 small-text ' + textColor + '">' + qcEmployee['qc'].total + ' Quality Control</p></a>'
                html_qc += '</th>'
            }
            html_lembur += '<th class="' + bgToday + '">'

            html_lembur += '<input class="form-check-input" type="checkbox" value="1" id="checkHariLembur' + dateList[i] + '" ' + checkLembur + ' onclick="addHariLembur(event,' + "'date'" + ",'" + dateList[i] + "'" + ')">'
            html_lembur += '<label class="form-check-label ms-1 small-text" for="checkHariLembur' + dateList[i] + '">Hari Lembur</label>'
            html_lembur += '</th>'
        }
        $('#date_list').html(html)
        $('#qc_list').html(html_qc)
        $('#lembur_list').html(html_lembur)
        $('.dropdown-date').dropdown();
        draggableTables('table-product-trend-wrapper')
        createBodyPlanner()
    }

    function createBodyPlanner() {
        var dateList = dateRangeComplete(data_work.workPlan[0].date, data_work.workPlan[parseInt(data_work.workPlan.length) - 1].date)
        var html = ''
        data_work.machineType.forEach(d => {
            html += '<tr>'
            html += '<td class="text-center small-text align-selft-center bg-light" style="vertical-align: middle;">'
            html += '<p class="m-0"><b class="text-dark">' + d.name + '</b></p>'
            html += '</td>'
            for (let i = 0; i < dateList.length; i++) {
                var bgToday = ''
                if (dateList[i] == hariIni) {
                    bgToday = 'bg-ijo-polos'
                }
                if (variableLembur[dateList[i]]) {
                    bgToday = 'bg-lembur'
                }
                var mekanikEmployee = manPowerFilter({
                    key: 'date',
                    value: dateList[i]
                }, {
                    key: 'machine_type_id',
                    value: d.id
                })
                // console.log(mekanikEmployee)
                html += '<td class="text-center small-text align-selft-center bg-light ' + bgToday + '" style="vertical-align: middle;">'
                if (type_name_production == 'skm') {
                    var textColor = 'text-grey'
                    if (mekanikEmployee['mechanic'].total) {
                        textColor = 'text-orange'
                    }
                    html += '<p class="m-0 ' + textColor + '" onclick="managementManPower(event,1,' + "'" + dateList[i] + "'" + ',null,' + d.id + ')"><b>' + mekanikEmployee['mechanic'].total + ' Mechanic</b></p>'
                }
                html += '</td>'
            }
            html += '</tr>'
            data_work.machine.forEach(e => {
                if (d.id == e.machine_type_id) {
                    html += '<tr>'
                    html += '<td class="text-center small-text align-selft-center" style="vertical-align: middle;"><b>' + e.name + '</b></td>'
                    // loop date
                    for (let i = 0; i < dateList.length; i++) {
                        var bgToday = ''
                        if (dateList[i] == hariIni) {
                            bgToday = 'bg-ijo-polos'
                        }
                        if (variableLembur[dateList[i]]) {
                            bgToday = 'bg-lembur'
                        }
                        var data = data_work_plan_bar.machine.filter((v, k) => {
                            if (v.resource == e.id && v.start == dateList[i]) return true
                        })
                        if (data.length) {
                            html += '<td class="p-1 ' + bgToday + '">'
                        } else {
                            html += '<td class="p-1 ' + bgToday + '" onclick="changePlan(event,' + "'" + dateList[i] + "'" + ',' + e.id + ')">'
                        }
                        data.forEach(el => {
                            // console.log(el)
                            var dataDetail = removeNullProduct(data_work_plan.filter((v, k) => {
                                if (v.machine_id == e.id && v.date == dateList[i] && v.shift_id == el.shift_id) return true
                            }))
                            var bg = 'bg-no-workplan'
                            if (el.work_plan_id != '') {
                                if (convertedToWorkPlan == 'yes') {
                                    bg = 'bg-shift-' + el.shift_id
                                } else {
                                    bg = 'bg-no-workplan'
                                }
                            }
                            html += '<div class="card shadow-none rounded-3 ' + bg + ' card-shift-produksi mb-2" style="cursor:pointer;width:200px;" onclick="changePlan(event,' + "'" + dateList[i] + "'" + ',' + e.id + ',' + el.shift_id + ',' + el.shift_group_id + ')">'
                            html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;" onclick="deleteDataMachine(event,' + "'" + dateList[i] + "'" + ',' + e.id + ',' + e.machine_type_id + ',' + el.shift_id + ',' + el.shift_group_id + ',' + "'" + el.work_plan_machine_id + "'" + ')"><i class="small-text fa fa-times text-light"></i></span>'
                            html += '<div class="card-body p-2 ">'
                            html += '<div class="row">'
                            html += '<div class="col-7 align-self-center">'
                            html += '<p class="m-0 small-text text-dark"><b>' + el.nama_shift + '</b></p>'
                            // data_work_plan
                            dataDetail.forEach(element => {
                                html += '<p class="m-0 super-small-text">' + element.product_alias + ' <b class="">' + element.product_qty + ' ' + element.unit_name + '</b></p>'
                            });
                            html += '</div>'
                            html += '<div class="col-5 align-self-center text-center">'
                            // man
                            html += '<div class="avatars" onclick="managementManPower(event,null,' + "'" + dateList[i] + "'" + ',' + el.shift_group_id + ',' + d.id + ',' + e.id + ')">'
                            var dataMaster = data_work.workPlan.find((v, k) => {
                                if (v.work_plan[type_name_production].work_plan_id == el.work_plan_id) return true
                            }).work_plan[type_name_production].shift_qc
                            var jumlahPerson = countEmployeesByParameters(dataMaster, el.shift_group_id, d.id, e.id).totalCount
                            var listPerson = countEmployeesByParameters(dataMaster, el.shift_group_id, d.id, e.id).listEmployee
                            // list person max 3
                            if (el.work_plan_id != '') {
                                var jumlahAva = jumlahPerson
                                if (jumlahPerson > 3) {
                                    jumlahAva = 3
                                }
                                for (let i = 0; i < jumlahAva; i++) {
                                    html += '<span class="avatar">'
                                    if (listPerson[i].photo) {
                                        html += '<img src="https://assets-hr.s3.ap-southeast-3.amazonaws.com/employee/photo/' + listPerson[i].photo + '">'
                                    } else {
                                        html += generateAvatar(getInitials(listPerson[i].full_name), dateList[i], el.shift_id, d.id, e.id)
                                    }
                                    html += '</span>'
                                }
                                // list person max 3
                                if (jumlahAva) {
                                    html += '<span class="avatar plus-avatar">'
                                    html += '<span class="plus-icon"><i class="fa fa-plus"></i></span>'
                                    html += '</span>'
                                    html += '</div>'
                                } else {
                                    html += '<span class="avatar plus-avatar-grey-empty">'
                                    html += '<span class="plus-icon"><i class="fa fa-plus"></i></span>'
                                    html += '</span>'
                                    html += '</div>'
                                }
                            } else {
                                html += '<span class="avatar plus-avatar-grey-empty">'
                                html += '<span class="plus-icon"><i class="fa fa-user-plus"></i></span>'
                                html += '</span>'
                                html += '</div>'
                            }

                            if (el.work_plan_id != '') {
                                if (jumlahPerson) {
                                    html += '<p class="m-0 mt-1 fw-bolder text-dark" style="font-size:7px;">' + jumlahPerson + ' Persons</p>'
                                } else {
                                    html += '<p class="m-0 mt-1" style="font-size:7px;">No Person</p>'
                                }
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
                }
            })
        })
        $('#body_list').html(html)
        focusDate()
        listProdPlanning()
    }

    function focusDate() {
        var tableContainer = $(".table-responsive");
        // Cari elemen dengan class "date-20"
        var targetDate = $(".today");
        // Hitung posisi horizontal elemen target
        if (targetDate.position()) {
            var scrollLeft = targetDate.position().left - (tableContainer.width() / 2) + (targetDate.width() / 2);
        } else {
            var scrollLeft = 0
        }
        // Gerakkan scroll horizontal ke posisi target
        tableContainer.scrollLeft(scrollLeft);
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
            // console.log(data_work_plan_no_shift_machine)
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
        // end of PAGE
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
    var directManagement = null
    var directManagementKey = null

    function managementManPower(event, direct = null, date = null, group_shift_id = null, machine_type_id = null, machine_id = null) {
        event.stopPropagation();
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Man Power & Shift</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'

        // barak main
        html_body += '<div class="col-12 col-md-9 p-4">'
        html_body += '<div class="row">'
        // TANGGAL
        html_body += '<div class="col-3">'
        html_body += '<div class="card shadow-none">'
        html_body += '<div class="card-body">'
        html_body += '<p class="super-small-text m-0 mb-4"><b>More Date</b></p>'
        html_body += '<div id="listMoreDate" class="pe-2" style="height: 300px;overflow-x: hidden;overflow-y: auto;">'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // TANGGAL
        // UTAMA
        html_body += '<div class="col-9" id="bodyManPower">'
        html_body += '</div>'
        // UTAMA
        html_body += '</div>'
        html_body += '</div>'
        // barak main

        // barak man power
        html_body += '<div class="col-12 col-md-3 p-4" style="background-color:#fcfcfc;">'
        html_body += '<div class="row">'
        // buat atas
        html_body += '<div class="col-12">'
        html_body += '<div class="row">'
        // header
        html_body += '<div class="col-auto align-self-center">'
        html_body += '<p class="small-text"><b id="nameManPower">No Man Power</b> <b id="machineManPower"></b></p>'
        html_body += '</div>'
        html_body += '<div class="col text-end align-self-center">'
        html_body += '<p class="super-small-text"><span id="sisaManPower">0</span> Person Left</p>'
        html_body += '</div>'
        // header
        // search
        html_body += '<div class="col-12">'
        html_body += '<div class="form-group has-search align-self-center">'
        html_body += '<span class="fa fa-search form-control-feedback"></span>'
        html_body += '<input type="text" class="form-control" placeholder="Search" id="search_nama" autocomplete="off">'
        html_body += '</div>'
        html_body += '</div>'
        // search
        // list hooman
        html_body += '<div class="col-12 pt-4">'
        html_body += '<div class="card shadow-none" style="background-color:transparent;">'
        html_body += '<div class="card-body p-1">'
        html_body += '<div style="height: 200px;overflow-x: hidden;overflow-y: auto;" id="listManPower">'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // list hooman
        html_body += '</div>'
        html_body += '</div>'
        // buat atas

        // buat bawah
        html_body += '<div class="col-12 mt-4">'
        html_body += '<div class="row">'
        // header
        html_body += '<div class="col-auto align-self-center">'
        html_body += '<p class="small-text"><b id="">Listed Man Power</b></p>'
        html_body += '</div>'
        html_body += '<div class="col text-end align-self-center">'
        html_body += '<p class="super-small-text"><span id="sisaAddedManPower">0</span> Person</p>'
        html_body += '</div>'
        // header
        // list hooman
        html_body += '<div class="col-12">'
        html_body += '<div style="max-height: 200px;overflow-x: hidden;overflow-y: auto;" id="listAddedManPower">'
        html_body += '</div>'
        html_body += '</div>'
        // list hooman
        html_body += '</div>'
        html_body += '</div>'
        // buat bawah
        html_body += '</div>'
        html_body += '</div>'
        // barak man power

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0');
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Simpan</button>'
        $('#modalFooter').html(html_footer);
        cardAlert('Pilih Posisi Terlebih Dahulu', '#listManPower')
        cardAlert('Pilih Posisi Terlebih Dahulu', '#listAddedManPower')
        directManagement = direct
        if (direct) {
            if (machine_type_id) {
                directManagementKey = 'mechanic'
            } else {
                directManagementKey = 'qc'
            }
        }
        listMoreDate(date, group_shift_id, machine_type_id, machine_id)
    }

    function listMoreDate(date, group_shift_id = null, machine_type_id = null, machine_id = null) {
        var dateList = dateRangeComplete(data_work.workPlan[0].date, data_work.workPlan[parseInt(data_work.workPlan.length) - 1].date)
        var html = ''
        for (let i = 0; i < dateList.length; i++) {
            var arrow = ''
            var textColor = ''
            if (dateList[i] == date) {
                arrow += '<div class="col-1 p-0 align-self-center">'
                arrow += '<i class="fa fa-chevron-right small-text"></i>'
                arrow += '</div>'
                textColor = 'text-orange'
            }
            html += '<div class="row cursor-klik" onclick="listMoreDate(' + "'" + dateList[i] + "'" + ')">'
            html += '<div class="col-11 align-self-center">'
            html += '<p class="m-0 small-text ' + textColor + '"><b>' + formatDateIndonesiaShort(dateList[i]) + '</b></p>'

            html += '<p class="m-0 super-small-text ' + textColor + '">' + countEmployeePositions(dateList[i]) + ' Position Added</p>'
            html += '</div>'
            html += arrow

            if (i < parseInt(dateList.length) - 1) {
                html += '<div class="col-12">'
                html += '<hr>'
                html += '</div>'
            }
            html += '</div>'
        }
        $('#listMoreDate').html(html);
        bodyManPower(date, group_shift_id, machine_type_id, machine_id)
    }

    function countEmployeePositions(date) {
        var data = data_work.workPlan.filter((v, k) => {
            if (v.date == date) return true
        })
        let totalEmployeePositions = 0;

        data.forEach(item => {
            const shift_qc = item.work_plan[type_name_production].shift_qc;

            if (shift_qc) {
                totalEmployeePositions += shift_qc[0].employee_qc.length || 0;
            }

            const shift_mechanic = item.work_plan[type_name_production].shift_qc[0].shift_mechanic;
            if (shift_mechanic) {
                shift_mechanic.forEach(shiftMechanicItem => {
                    totalEmployeePositions += shiftMechanicItem.employee_mechanic.length || 0;
                    const machine_type = shiftMechanicItem.shift_machine;
                    if (machine_type) {
                        if (machine_type.length) {
                            // console.log(machine_type)
                            machine_type.forEach(e => {
                                var findMachineTypeId = findEntitiesByMachineId(data_work.machineType, e.machine.id)[0]
                                // totalEmployeePositions += e.employee_qc_skt.length || 0;
                                // totalEmployeePositions += e.employee_foreman_ast.length || 0;
                                // totalEmployeePositions += e.employee_catcher.length || 0;
                                // totalEmployeePositions += e.employee_helper.length || 0;
                                // totalEmployeePositions += e.employee_operator.length || 0;
                                data_work.machineTypeManPowerFrame.forEach(val => {
                                    if (val.id == findMachineTypeId) {
                                        if (val.person_label_entry_acces) {
                                            val.person_label_entry_acces.forEach(k => {
                                                if (k != 'qc' && k != 'mechanic') {
                                                    eval(`totalEmployeePositions += e.employee_${k}.length || 0;`)
                                                }
                                            })
                                        }
                                    }
                                })
                            });

                        }
                    }
                });
            }
        });

        return totalEmployeePositions;
    }

    function bodyManPower(date, group_shift_id = null, machine_type_id = null, machine_id = null) {
        // console.log(group_shift_id)
        if (!group_shift_id && date) {
            var dataListShift = data_work_plan_bar.shift.filter((va, ke) => {
                if (va.start == date) return true
            })
            group_shift_id = dataListShift[0].shift_group_id
        }
        if (date != null) {
            var dataFilteredPlanGroup = data_work_plan_group.filter((v, k) => {
                if (v.start == date) return true
            })
            var currentShift = groupAndSum(dataFilteredPlanGroup, ['shift_id', 'nama_shift', 'shift_group_id'], [])
            var currentShiftId = groupAndSum(dataFilteredPlanGroup, ['shift_id'], [])
            var missingGroup = findMissingGroups(currentShiftId, data_work.shift[0].shift_group)
            var html = ''
            html += '<div class="row justify-content-between">'
            html += '<div class="col-auto">'
            html += '<h4 class="m-0"><b>' + formatDateIndonesia(date) + '</b></h4>'
            html += '<p class="super-small-text text-dark-grey m-0">Available ' + currentShift.length + ' Shift</p>'
            html += '</div>'
            html += '<div class="col-auto">'
            // choose
            html += '<div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">'
            $.each(data_work.shift[0].shift_group, function(k, v) {
                var dataShift = data_work_plan_bar.shift.find((va, ke) => {
                    if (va.start == date && va.shift_group_id == v.group_id) return true
                })

                var checking = ''
                var disabled = ''
                var onclick = ''
                onclick = 'onclick="scrolledGroupShift(' + "'" + date + "'" + ',' + v.group_id + ')"'
                if (v.group_id == group_shift_id) {
                    checking = 'checked'
                }
                if (!dataShift) {
                    disabled = 'disabled'
                    onclick = 'onclick="tambahShiftBaru(' + "'" + date + "'" + ',' + v.group_id + ')"'
                }
                html += '<input type="radio" class="btn-check" name="btnradio" id="btnradio' + k + '" autocomplete="off" ' + checking + ' ' + disabled + '>'
                html += '<label class="btn btn-outline-dark" for="btnradio' + k + '" ' + onclick + '><img class="me-1" style="width:10px" src="<?= base_url() ?>assets/image/svg/' + v.group_name.toLowerCase() + '.svg" alt="Icon"/> ' + v.group_name + '</label>'
            })
            html += '</div>'
            // choose
            html += '</div>'
            html += '</div>'

            html += '<div class="row pt-4">'
            html += '<div class="col-12" id="scrolledBodyManPower" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'

            // collapse
            html += '<div class="accordion" id="accordionPanelsStayOpenExample">'
            // shift
            $.each(data_work.shift[0].shift_group, function(k, v) {
                var dataMachine = currentShift.find((va, ke) => {
                    if (va.shift_group_id == v.group_id) return true
                })
                // console.log(dataMachine)
                if (dataMachine != undefined) {
                    var qcEmployee = manPowerFilter({
                        key: 'date',
                        value: date
                    }, {
                        key: 'shift_group_id',
                        value: v.group_id
                    })
                    var availableData = checkAvailableDataWork('qc', date, v.group_id)
                    var unavailableData = ''
                    var findShift = ''
                    var dataShift = data_work_plan_bar.shift.find((va, ke) => {
                        if (va.start == date && va.shift_group_id == v.group_id) return true
                    })
                    // console.log(v.group_id)
                    var workPlanShiftId = null
                    var shiftWorkPlanShift = null
                    var changeShiftBtn = '<i class="fa fa-calendar fa-2x btn-choose-shift" onclick="chooseShift(' + "'edit'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + shiftWorkPlanShift + ',null,null,' + workPlanShiftId + ')"></i>'
                    var setBgAvailable = ''
                    if (availableData == 'tidak') {
                        unavailableData = showTextUnavailable()
                        changeShiftBtn = ''
                        setBgAvailable = 'bg-unavailable'
                    } else {
                        var findShift = variableOfShift[dataShift.shift_id]
                        workPlanShiftId = dataShift.work_plan_shift_id
                        shiftWorkPlanShift = dataShift.shift_id
                    }
                    var warnEmpty = ''
                    if (type_name_production == 'skm') {
                        if (qcEmployee['qc'].total == 0) {
                            warnEmpty = '<span class="ms-1 fa fa-warning text-warning"></span>'
                        }
                    }

                    html += '<div class="accordion-item" style="border: none;">'
                    html += '<h2 class="accordion-header" id="headShift' + k + '" style="border: 1px solid #dedede;">'
                    html += '<button class="accordionClickable accordion-button primary-date date-' + date + ' p-2 small-text shadow-none ' + setBgAvailable + '" type="button" id="accordionqc' + date + v.group_id + '">'

                    html += '<div class="row m-0 w-100 justify-content-between">'

                    html += '<div class="col-11">'
                    html += '<div class="row m-0 w-100">'
                    html += '<div class="col-1 align-self-center text-center p-2">'
                    html += '<img class="w-50" src="<?= base_url() ?>assets/image/svg/' + v.group_name.toLowerCase() + '.svg" alt="Icon" />'
                    html += '</div>'
                    html += '<div class="col align-self-center" data-bs-toggle="collapse" data-bs-target="#panelShift' + k + '" aria-expanded="true" aria-controls="panelShift' + k + '">'
                    html += '<p class="m-0">SHIFT</p>'
                    html += '<b class="super-small-text">' + findShift + unavailableData + '</b>'
                    html += '</div>'
                    html += '<div class="col-auto text-end align-self-center pe-5">'
                    if (type_name_production == 'skm') {
                        var textColor = 'text-grey'
                        if (qcEmployee['qc'].total) {
                            textColor = 'text-orange'
                        }
                        html += '<p class="m-0 fw-bold super-small-text man-power ' + textColor + '"  onclick="chooseManPower(' + "'" + availableData + "'," + "'qc'" + ',' + "'" + date + "'" + ',' + v.group_id + ')">' + qcEmployee['qc'].total + ' Quality Control ' + warnEmpty + '</p>'
                    }
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'

                    // button shift
                    html += '<div class="col-1 align-self-center">'
                    html += changeShiftBtn
                    html += '</div>'
                    // button shift

                    html += '</div>'

                    html += '</button>'
                    html += '</h2>'
                    html += '<div id="panelShift' + k + '" class="accordion-collapse primary-date date-' + date + ' collapse show" aria-labelledby="headShift' + k + '">'
                    html += '<div class="accordion-body pt-0 pe-0 pb-0">'
                    // isi 1
                    $.each(data_work.machineType, function(key, value) {
                        var masterMachine = data_work.machine.filter((va, ke) => {
                            if (value.id == va.machine_type_id) return true
                        })

                        var mekanikEmployee = manPowerFilter({
                            key: 'date',
                            value: date
                        }, {
                            key: 'shift_group_id',
                            value: v.group_id
                        }, {
                            key: 'machine_type_id',
                            value: value.id
                        })
                        var availableData = checkAvailableDataWork('mechanic', date, v.group_id, value.id)
                        var unavailableData = ''
                        var findShift = ''
                        var dataShift = data_work_plan_bar.machineType.find((va, ke) => {
                            if (va.start == date && va.shift_group_id == v.group_id && va.machine_type_id == value.id) return true
                        })
                        var workPlanMachineTypeId = null
                        var shiftWorkPlanMachineType = null
                        var changeShiftBtn = '<i class="fa fa-calendar fa-2x btn-choose-shift" onclick="chooseShift(' + "'edit'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + shiftWorkPlanMachineType + ',null,' + value.id + ',' + workPlanMachineTypeId + ')"></i>'
                        var setBgAvailable = ''
                        if (availableData == 'tidak') {
                            unavailableData = showTextUnavailable()
                            changeShiftBtn = ''
                            setBgAvailable = 'bg-unavailable'
                        } else {
                            var findShift = variableOfShift[dataShift.shift_id]
                            workPlanMachineTypeId = findShift.work_plan_machine_type_id
                            shiftWorkPlanMachineType = dataShift.shift_id
                        }
                        if (type_name_production == 'skm') {
                            var warnEmpty = ''
                            if (mekanikEmployee['mechanic'].total == 0) {
                                warnEmpty = '<span class="ms-1 fa fa-warning text-warning"></span>'
                            }
                        }
                        html += '<div class="accordion-item" style="border: none;">'
                        html += '<h2 class="accordion-header" id="headMachineType' + k + key + '" style="border: 1px solid #dedede;">'
                        html += '<button class="accordionClickable accordion-button primary-machine-type machine-type-' + date + value.id + ' p-2 small-text shadow-none ' + setBgAvailable + '" type="button" id="accordionmechanic' + date + v.group_id + value.id + '">'

                        html += '<div class="row m-0 w-100 justify-content-between">'

                        html += '<div class="col-11">'
                        html += '<div class="row m-0 w-100">'
                        html += '<div class="col-8 align-self-center" data-bs-toggle="collapse" data-bs-target="#panelMachineType' + k + key + '" aria-expanded="true" aria-controls="panelMachineType' + k + key + '">'
                        html += '<p class="m-0">' + value.name + '</p>'
                        html += '<b class="super-small-text">' + findShift + unavailableData + '</b>'
                        html += '</div>'
                        html += '<div class="col-4 text-end align-self-center pe-5">'
                        if (type_name_production == 'skm') {
                            var textColor = 'text-grey'
                            if (mekanikEmployee['mechanic'].total) {
                                textColor = 'text-orange'
                            }
                            html += '<p class="m-0 fw-bold super-small-text man-power ' + textColor + '"  onclick="chooseManPower(' + "'" + availableData + "'," + "'mechanic'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ')">' + mekanikEmployee['mechanic'].total + ' Mekanik ' + warnEmpty + '</p>'
                        }
                        html += '</div>'
                        html += '</div>'
                        html += '</div>'
                        // button shift
                        html += '<div class="col-1 align-self-center">'
                        html += changeShiftBtn
                        html += '</div>'
                        // button shift

                        html += '</div>'

                        html += '</button>'
                        html += '</h2>'
                        html += '<div class="accordion-collapse primary-machine-type machine-type-' + date + value.id + ' collapse show">'
                        html += '<div class="accordion-body pt-0 pe-0 pb-0">'

                        // summary
                        html += '<div class="accordion-item" style="border: none;">'
                        html += '<h2 class="accordion-header" style="border: 1px solid #dedede;">'
                        html += '<button class="accordion-button machine p-2 small-text shadow-none bg-grey" type="button"  style="cursor:default">'

                        html += '<div class="row w-100">'
                        html += '<div class="col align-self-center text-dark-grey">'
                        html += '<b>SUMMARY ' + value.name + '</b>'
                        var dataSummary = showVariableForEmployeeForManpower(masterMachine, date, v, value)
                        // console.log(dataSummary)
                        // var totalCat = 0
                        // var totalHel = 0
                        // var totalOper = 0
                        // $.each(masterMachine, function(keys, values) {
                        //     var executorEmployee = manPowerFilter({
                        //         key: 'date',
                        //         value: date
                        //     }, {
                        //         key: 'shift_group_id',
                        //         value: v.group_id
                        //     }, {
                        //         key: 'machine_type_id',
                        //         value: value.id
                        //     }, {
                        //         key: 'machine_id',
                        //         value: values.id
                        //     })
                        //     totalCat = totalCat + parseInt(executorEmployee['catcher'].total)
                        //     totalHel = totalHel + parseInt(executorEmployee['helper'].total)
                        //     totalOper = totalOper + parseInt(executorEmployee['operator'].total)
                        // })
                        // html += '<p class="m-0 super-small-text text-dark-grey">' + jumlahMachine + ' Machine Added</p>'
                        html += '</div>'
                        html += '<div class="col text-end align-self-center pe-5">'
                        dataSummary.forEach(sum => {
                            html += '<span class="me-2 text-dark-grey super-small-text">' + sum.data + ' ' + toTitleCase(sum.variable.replace('_', ' ')) + '</span>'
                        });
                        html += '</div>'
                        html += '</div>'


                        html += '</button>'
                        html += '</h2>'
                        html += '<div id="panelMachineType' + k + key + '" class="accordion-collapse collapse show" aria-labelledby="headMachineType' + k + key + '">'
                        html += '<div class="accordion-body p-0">'
                        $.each(masterMachine, function(keys, values) {
                            var executorEmployee = manPowerFilter({
                                key: 'date',
                                value: date
                            }, {
                                key: 'shift_group_id',
                                value: v.group_id
                            }, {
                                key: 'machine_type_id',
                                value: value.id
                            }, {
                                key: 'machine_id',
                                value: values.id
                            })
                            // console.log(executorEmployee)
                            var availableData = checkAvailableDataWork('machine', date, v.group_id, value.id, values.id)
                            var unavailableData = ''
                            var findShift = ''
                            var dataShift = data_work_plan_bar.machine.find((va, ke) => {
                                if (va.start == date && va.shift_group_id == v.group_id && va.machine_type_id == value.id && va.resource == values.id) return true
                            })
                            var workPlanMachineId = null
                            var shiftWorkPlanMachine = null
                            var changeShiftBtn = '<i class="fa fa-calendar fa-2x btn-choose-shift" onclick="chooseShift(' + "'edit'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + shiftWorkPlanMachine + ',' + values.id + ',' + value.id + ',' + workPlanMachineId + ')"></i>'
                            var setBgAvailable = ''
                            if (availableData == 'tidak') {
                                unavailableData = showTextUnavailable()
                                changeShiftBtn = ''
                                setBgAvailable = 'bg-unavailable'
                                // data_work.manPowerFrame.forEach(k => {
                                data_work.machineTypeManPowerFrame.forEach(k => {
                                    if (k.id == value.id) {
                                        if (k.person_label_entry_acces) {
                                            k.person_label_entry_acces.forEach(ke => {
                                                executorEmployee[ke].class = 'bg-grey'
                                            });
                                        } else {
                                            data_work.manPowerFrame.forEach(k => {
                                                executorEmployee[k].class = 'bg-grey'
                                            })
                                        }
                                    }
                                })
                                // executorEmployee['catcher'].class = 'bg-grey'
                                // executorEmployee['helper'].class = 'bg-grey'
                                // executorEmployee['operator'].class = 'bg-grey'
                            } else {
                                var findShift = variableOfShift[dataShift.shift_id]
                                workPlanMachineId = findShift.work_plan_machine_id
                                shiftWorkPlanMachine = dataShift.shift_id
                            }
                            html += '<div class="accordion-item" style="border: none;">'
                            html += '<h2 class="accordion-header" style="border: 1px solid #dedede;">'
                            html += '<button class="accordionClickable accordion-button primary-machine machine-' + date + value.id + values.id + ' machine p-2 small-text shadow-none ' + setBgAvailable + '" type="button" id="accordionmachine' + date + v.group_id + value.id + values.id + '">'

                            html += '<div class="row m-0 w-100 justify-content-between">'

                            html += '<div class="col-11">'

                            html += '<div class="row m-0 w-100">'
                            html += '<div class="col align-self-center" style="cursor:default">'
                            html += '<p class="m-0">' + values.name + '</p>'
                            html += '<b class="super-small-text">' + findShift + unavailableData + '</b>'
                            html += '</div>'
                            html += '<div class="col text-end align-self-center pe-5">'
                            data_work.machineTypeManPowerFrame.forEach(ke => {
                                if (ke.id == value.id) {
                                    if (ke.person_label_entry_acces) {
                                        ke.person_label_entry_acces.forEach(k => {
                                            var statusShow = 'yes'
                                            if (type_name_production == 'skm') {
                                                if (k == 'qc' || k == 'mechanic') {
                                                    statusShow = 'no'
                                                }
                                            }
                                            if (statusShow == 'yes') {
                                                html += '<span class="badge ' + executorEmployee[k].class + ' me-1 man-power" style="border:1px solid grey" style="cursor:pointer" onclick="chooseManPower(' + "'" + availableData + "'," + "'" + k + "'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ',' + values.id + ')">' + executorEmployee[k].total + ' ' + toTitleCase(k.slice(0, 3)) + '</span>'
                                            }
                                        });
                                    } else {
                                        data_work.manPowerFrame.forEach(k => {
                                            var statusShow = 'yes'
                                            if (type_name_production == 'skm') {
                                                if (k == 'qc' || k == 'mechanic') {
                                                    statusShow = 'no'
                                                }
                                            }
                                            if (statusShow == 'yes') {
                                                html += '<span class="badge ' + executorEmployee[k].class + ' me-1 man-power" style="border:1px solid grey" style="cursor:pointer" onclick="chooseManPower(' + "'" + availableData + "'," + "'" + k + "'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ',' + values.id + ')">' + executorEmployee[k].total + ' ' + toTitleCase(k.slice(0, 3)) + '</span>'
                                            }
                                        })
                                    }
                                }
                            })
                            // data_work.manPowerFrame.forEach(k => {
                            //     var statusShow = 'yes'
                            //     if (type_name_production == 'skm') {
                            //         if (k == 'qc' || k == 'mechanic') {
                            //             statusShow = 'no'
                            //         }
                            //     }
                            //     if (statusShow == 'yes') {
                            //         html += '<span class="badge ' + executorEmployee[k].class + ' me-1 man-power" style="border:1px solid grey" style="cursor:pointer" onclick="chooseManPower(' + "'" + availableData + "'," + "'" + k + "'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ',' + values.id + ')">' + executorEmployee[k].total + ' ' + toTitleCase(k.slice(0, 3)) + '</span>'
                            //     }
                            // })
                            // html += '<span class="badge ' + executorEmployee['catcher'].class + ' me-1 man-power" style="border:1px solid grey" style="cursor:pointer" onclick="chooseManPower(' + "'" + availableData + "'," + "'catcher'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ',' + values.id + ')">' + executorEmployee['catcher'].total + ' Cat</span>'
                            // html += '<span class="badge ' + executorEmployee['helper'].class + ' me-1 man-power" style="border:1px solid grey" style="cursor:pointer" onclick="chooseManPower(' + "'" + availableData + "'," + "'helper'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ',' + values.id + ')">' + executorEmployee['helper'].total + ' Hel</span>'
                            // html += '<span class="badge ' + executorEmployee['operator'].class + ' me-1 man-power" style="border:1px solid grey" style="cursor:pointer" onclick="chooseManPower(' + "'" + availableData + "'," + "'operator'" + ',' + "'" + date + "'" + ',' + v.group_id + ',' + value.id + ',' + values.id + ')">' + executorEmployee['operator'].total + ' Opr</span>'

                            html += '</div>'
                            html += '</div>'
                            html += '</div>'
                            // button shift
                            html += '<div class="col-1 align-self-center">'
                            html += changeShiftBtn
                            html += '</div>'
                            // button shift

                            html += '</div>'

                            html += '</button>'
                            html += '</h2>'
                            html += '<div class="accordion-collapse primary-machine machine-' + date + value.id + values.id + ' collapse show">'
                            html += '<div class="accordion-body p-0">'

                            html += '</div>'
                            html += '</div>'
                            html += '</div>'
                        })
                        html += '</div>'
                        html += '</div>'
                        html += '</div>'
                        // summary


                        html += '</div>'
                        html += '</div>'
                        html += '</div>'
                    });
                    // isi 1
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                } else {
                    html += '<div class="accordion-item mt-2 mb-2" style="border: none;" onclick="tambahShiftBaru(' + "'" + date + "'" + ',' + v.group_id + ')">'
                    html += '<h2 class="accordion-header" style="border: 2px dashed #cfcfcf;">'
                    html += '<button class="accordion-button machine p-2 small-text shadow-none text-center" type="button">'
                    html += '<div class="row w-100">'
                    html += '<div class="col-12 text-center">'
                    html += '<i class="fa fa-plus me-2"></i>Tambah Shift ' + v.group_name
                    html += '</div>'
                    html += '</div>'
                    html += '</button>'
                    html += '</h2>'
                    html += '</div>'
                }
            });
            // shift
            html += '</div>'
            // collapse

            html += '</div>'
            html += '</div>'
            $('#bodyManPower').html(html)
            triggerCollapse(date, group_shift_id, machine_type_id, machine_id)
            if (directManagement) {
                chooseManPower('ya', directManagementKey, date, group_shift_id, machine_type_id, machine_id)
            }
        } else {
            empty('#bodyManPower', 'Silahkan Pilih Tanggal Terlebih Dahulu')
        }
    }

    function showTextUnavailable() {
        return '<i class="text-grey">Unavailable Production</i>'
    }

    function checkAvailableDataWork(key, date = null, group_shift_id = null, machine_type_id = null, machine_id = null) {
        var data = data_work.workPlan
        const foundDate = data.find(item => item.date == date);
        if (foundDate) {
            if (key == 'qc') {
                const foundShiftGroup = foundDate.work_plan[type_name_production].shift_qc.find(shift => shift.shift.group_id == group_shift_id);
                if (foundShiftGroup) {
                    return 'ya'
                } else {
                    return 'tidak'
                }
            } else {
                const foundShiftGroup = foundDate.work_plan[type_name_production].shift_qc.find(shift => shift.shift.group_id == group_shift_id);
                if (foundShiftGroup) {
                    const foundMachineType = foundShiftGroup.shift_mechanic.find(type => type.machine_type.id == machine_type_id);
                    if (foundMachineType) {
                        if (key == 'mechanic') {
                            return 'ya'
                        } else {
                            const foundMachine = foundMachineType.shift_machine.find(machine => machine.machine.id == machine_id);
                            if (foundMachine) {
                                if (key == 'machine') {
                                    return 'ya'
                                } else {
                                    return 'tidak'
                                }
                            } else {
                                return 'tidak'
                            }
                        }
                    } else {
                        return 'tidak'
                    }
                } else {
                    return 'tidak'
                }
            }
        } else {
            return 'tidak'
        }
    }

    function triggerCollapse(date, group_shift_id, machine_type_id, machine_id) {
        var buttons = document.querySelectorAll('.accordion-button');
        buttons.forEach(function(button) {
            button.classList.add('collapsed');
            button.classList.remove('bg-selected-collapse'); // Remove bg-selected-collapse class from all buttons
            button.setAttribute('aria-expanded', 'false');
            var collapseTarget = button.getAttribute('data-bs-target');
            if (collapseTarget) {
                var collapseElement = document.querySelector(collapseTarget);
                if (collapseElement) {
                    collapseElement.classList.remove('show');
                    triggerNestedCollapse(collapseElement);
                }
            }
        });

        if (date != null) {
            var dateButtons = document.querySelectorAll('.primary-date');
            dateButtons.forEach(function(dateButton) {
                dateButton.classList.add('collapsed');
                dateButton.classList.remove('bg-selected-collapse'); // Remove bg-selected-collapse class from all date buttons
                dateButton.setAttribute('aria-expanded', 'false');
                var dateCollapseTarget = dateButton.getAttribute('data-bs-target');
                if (dateCollapseTarget) {
                    var dateCollapseElement = document.querySelector(dateCollapseTarget);
                    if (dateCollapseElement) {
                        if (dateButton.classList.contains('date-' + date)) {
                            dateButton.classList.remove('collapsed');
                            dateButton.classList.add('bg-selected-collapse'); // Add bg-selected-collapse class to date button
                            dateButton.setAttribute('aria-expanded', 'true');
                            dateCollapseElement.classList.add('show');
                            triggerNestedCollapse(dateCollapseElement);
                        }
                    }
                }
            });
        }

        if (date != null && machine_type_id != null) {
            var machineTypeButtons = document.querySelectorAll('.primary-machine-type');
            machineTypeButtons.forEach(function(machineTypeButton) {
                machineTypeButton.classList.add('collapsed');
                machineTypeButton.classList.remove('bg-selected-collapse'); // Remove bg-selected-collapse class from all machine type buttons
                machineTypeButton.setAttribute('aria-expanded', 'false');
                var machineTypeCollapseTarget = machineTypeButton.getAttribute('data-bs-target');
                if (machineTypeCollapseTarget) {
                    var machineTypeCollapseElement = document.querySelector(machineTypeCollapseTarget);
                    if (machineTypeCollapseElement) {
                        if (machineTypeButton.classList.contains('machine-type-' + date + machine_type_id)) {
                            machineTypeButton.classList.remove('collapsed');
                            machineTypeButton.classList.add('bg-selected-collapse'); // Add bg-selected-collapse class to machine type button
                            machineTypeButton.setAttribute('aria-expanded', 'true');
                            machineTypeCollapseElement.classList.add('show');
                            triggerNestedCollapse(machineTypeCollapseElement);
                        } else {
                            machineTypeCollapseElement.classList.remove('show');
                            triggerNestedCollapse(machineTypeCollapseElement);
                        }
                    }
                }
            });
        }

        if (date != null && machine_type_id != null && machine_id != null) {
            var machineButtons = document.querySelectorAll('.primary-machine');
            machineButtons.forEach(function(machineButton) {
                machineButton.classList.add('collapsed');
                machineButton.classList.remove('bg-selected-collapse'); // Remove bg-selected-collapse class from all machine buttons
                machineButton.setAttribute('aria-expanded', 'false');
                if (machineButton.classList.contains('machine-' + date + machine_type_id + machine_id)) {
                    machineButton.classList.remove('collapsed');
                    machineButton.classList.add('bg-selected-collapse'); // Add bg-selected-collapse class to machine button
                    machineButton.setAttribute('aria-expanded', 'true');
                }
            });
        }
        scrolledGroupShift(date, group_shift_id)
    }

    function triggerNestedCollapse(parent) {
        var buttons = parent.querySelectorAll('.accordion-button');
        buttons.forEach(function(button) {
            button.classList.add('collapsed');
            button.classList.remove('bg-selected-collapse'); // Remove bg-primary class from all buttons in nested elements
            button.setAttribute('aria-expanded', 'false');
            var collapseTarget = button.getAttribute('data-bs-target');
            if (collapseTarget) {
                var collapseElement = document.querySelector(collapseTarget);
                if (collapseElement) {
                    collapseElement.classList.remove('show');
                    triggerNestedCollapse(collapseElement);
                }
            }
        });
    }

    function manPowerFilter(...params) {
        var dataMachine = data_work_plan.filter((va, ke) => {
            for (var i = 0; i < params.length; i++) {
                var param = params[i];
                if (va[param.key] != param.value) {
                    return false;
                }
            }
            return true;
        });
        var findMachineTypeId = params.find((v, k) => {
            if (v.key == 'machine_type_id') return true
        })
        // console.log(dataMachine)
        // console.log(findMachineTypeId)
        var varEmployee = {};
        if (!findMachineTypeId) {
            for (var nama in data_work.manPower) {
                // console.log(nama)
                var findNama = data_work.manPowerFrame.find((v, k) => {
                    if (v == nama) return true
                })
                if (findNama) {
                    if (data_work.workPlan[0].work_plan[type_name_production].work_plan_id != null) {
                        if (dataMachine.length > 0) {
                            // if (nama != 'qc_verpack') {
                            if (eval('dataMachine[0].employee_' + nama + '.length') > 0) {
                                varEmployee[nama] = {};
                                varEmployee[nama]['total'] = eval('dataMachine[0].employee_' + nama + '.length');
                                varEmployee[nama]['class'] = 'bg-position-filled';
                            } else {
                                varEmployee[nama] = {};
                                varEmployee[nama]['total'] = 0;
                                varEmployee[nama]['class'] = 'bg-position';
                            }
                            // }
                        } else {
                            varEmployee[nama] = {};
                            varEmployee[nama]['total'] = 0;
                            varEmployee[nama]['class'] = 'bg-position';
                        }
                    } else {
                        varEmployee[nama] = {};
                        varEmployee[nama]['total'] = 0;
                        varEmployee[nama]['class'] = 'bg-position';
                    }
                }
            }
        } else {
            data_work.machineTypeManPowerFrame.forEach(val => {
                if (val.id == findMachineTypeId.value) {
                    if (val.person_label_entry_acces) {
                        val.person_label_entry_acces.forEach(nama => {
                            if (nama) {
                                if (data_work.workPlan[0].work_plan[type_name_production].work_plan_id != null) {
                                    if (dataMachine.length > 0) {
                                        if (eval('dataMachine[0].employee_' + nama + '.length') > 0) {
                                            varEmployee[nama] = {};
                                            varEmployee[nama]['total'] = eval('dataMachine[0].employee_' + nama + '.length');
                                            varEmployee[nama]['class'] = 'bg-position-filled';
                                        } else {
                                            varEmployee[nama] = {};
                                            varEmployee[nama]['total'] = 0;
                                            varEmployee[nama]['class'] = 'bg-position';
                                        }
                                    } else {
                                        varEmployee[nama] = {};
                                        varEmployee[nama]['total'] = 0;
                                        varEmployee[nama]['class'] = 'bg-position';
                                    }
                                } else {
                                    varEmployee[nama] = {};
                                    varEmployee[nama]['total'] = 0;
                                    varEmployee[nama]['class'] = 'bg-position';
                                }
                            }
                        });
                    } else {
                        for (var nama in data_work.manPower) {
                            var findNama = data_work.manPowerFrame.find((v, k) => {
                                if (v == nama) return true
                            })
                            if (findNama) {
                                if (data_work.workPlan[0].work_plan[type_name_production].work_plan_id != null) {
                                    if (dataMachine.length > 0) {
                                        if (eval('dataMachine[0].employee_' + nama + '.length') > 0) {
                                            varEmployee[nama] = {};
                                            varEmployee[nama]['total'] = eval('dataMachine[0].employee_' + nama + '.length');
                                            varEmployee[nama]['class'] = 'bg-position-filled';
                                        } else {
                                            varEmployee[nama] = {};
                                            varEmployee[nama]['total'] = 0;
                                            varEmployee[nama]['class'] = 'bg-position';
                                        }
                                    } else {
                                        varEmployee[nama] = {};
                                        varEmployee[nama]['total'] = 0;
                                        varEmployee[nama]['class'] = 'bg-position';
                                    }
                                } else {
                                    varEmployee[nama] = {};
                                    varEmployee[nama]['total'] = 0;
                                    varEmployee[nama]['class'] = 'bg-position';
                                }
                            }
                        }
                    }
                }
            });
        }
        return varEmployee;
    }

    function chooseManPower(available, key, date = null, shift_group_id = null, machine_type_id = null, machine_id = null) {
        // $('.manPower').removeClass('active')
        // $('#manPower' + key).addClass('active')
        var masterMachine = data_work.machine.find((v, k) => {
            if (v.id == machine_id) return true
        })
        if (masterMachine) {
            $('#machineManPower').html(masterMachine.name.toUpperCase())
        } else {
            var masterMachineType = data_work.machineType.find((v, k) => {
                if (v.id == machine_type_id) return true
            })
            if (masterMachineType) {
                $('#machineManPower').html(masterMachineType.name.toUpperCase())
            } else {
                $('#machineManPower').html('')
            }
        }
        $('#nameManPower').html(key.toUpperCase())
        if (available == 'ya') {
            listManPower(key, date, shift_group_id, machine_type_id, machine_id)
        } else {
            $('#sisaManPower').html(0)
            $('#sisaAddedManPower').html(0)
            cardAlert('Tidak Ada Data', '#listAddedManPower')
            cardAlert('Tidak Ada Data', '#listManPower')
            insertIntoDataWork('add', date, shift_group_id, machine_type_id, machine_id, key)
        }
    }

    function listManPower(keys, date, shift_group_id, machine_type_id, machine_id) {
        var filters = [];
        if (date !== null || shift_group_id !== null || machine_type_id !== null || machine_id !== null) {
            if (date !== null) {
                filters.push({
                    key: 'date',
                    value: date
                });
            }
            if (shift_group_id !== null) {
                filters.push({
                    key: 'shift_group_id',
                    value: shift_group_id
                });
            }
            if (machine_type_id !== null) {
                filters.push({
                    key: 'machine_type_id',
                    value: machine_type_id
                });
            }
            if (machine_id !== null) {
                filters.push({
                    key: 'machine_id',
                    value: machine_id
                });
            }
        }
        var data = data_work_plan.filter((va, ke) => {
            for (var i = 0; i < filters.length; i++) {
                var param = filters[i];
                if (va[param.key] != param.value) {
                    return false;
                }
            }
            return true;
        })
        if (data.length > 0) {
            if (eval('data[0].employee_' + keys) != null) {
                var employeeManPower = eval('data[0].employee_' + keys)
            } else {
                var employeeManPower = []
            }
        } else {
            var employeeManPower = []
        }

        // employee master
        var html = ''
        var a = 0
        var jumlahUnchecked = 0
        data_work.manPower[keys].forEach(e => {
            var filter = employeeManPower.find((va, ke) => {
                if (va.id == e.id) return true
            })
            if (filter == undefined) {
                html += '<div class="row pt-2 pb-2" id="card_search' + a + '">'
            } else {
                html += '<div class="row pt-2 pb-2 bg-grey" id="card_search' + a + '">'
            }
            html += '<div class="col-10 align-self-center ps-4">'
            html += '<p class="m-0 small-text"><b class="text_search" data-id="' + a + '">' + e.full_name + '</b></p>'
            html += '<p class="m-0 super-small-text text-grey"><b class="text_search" data-id="' + a + '">' + e.job_title_name + '</b></p>'
            html += '</div>'
            html += '<div class="col-2 align-self-center text-start ps-0">'
            if (filter == undefined) {
                jumlahUnchecked++
                html += '<i class="fa fa-user-plus cursor-klik" onclick="addManPower(' + "'add'" + ',' + e.id + ',' + "'" + date + "'," + shift_group_id + ',' + machine_type_id + ',' + machine_id + ',' + "'" + keys + "'" + ')"></i>'
            } else {
                html += '<i class="fa fa-check text-success cursor-klik" onclick="addManPower(' + "'remove'" + ',' + e.id + ',' + "'" + date + "'," + shift_group_id + ',' + machine_type_id + ',' + machine_id + ',' + "'" + keys + "'" + ')"></i>'
            }
            html += '</div>'
            html += '</div>'
            a++
        });
        $('#listManPower').html(html)
        $('#sisaManPower').html(jumlahUnchecked)
        // employee added
        var html = ''
        employeeManPower.forEach(e => {
            var dataPersonalWork = findPositionUser(data_work.workPlan.find((v, k) => {
                if (v.date == date) return true
            }).work_plan[type_name_production].shift_qc, e.id)
            // console.log(dataPersonalWork)
            html += '<div class="card shadow-none mb-2 bg-grey">'
            html += '<div class="card-body p-2">'

            html += '<div class="row">'
            html += '<div class="col-10 align-self-center">'
            html += '<p class="m-0 small-text text-dark"><b>' + e.name + '</b></p>'
            html += '<p class="m-0 super-small-text"><b>Had <span class="text-dark">' + dataPersonalWork.idCount + '</span> Positions in a This Date</b></p>'
            html += '</div>'
            html += '<div class="col-2 align-self-center text-start ps-0">'
            html += '<i class="fa fa-times text-danger cursor-klik" onclick="addManPower(' + "'remove'" + ',' + e.id + ',' + "'" + date + "'," + shift_group_id + ',' + machine_type_id + ',' + machine_id + ',' + "'" + keys + "'" + ')"></i>'
            html += '</div>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
        });
        $('#listAddedManPower').html(html)
        if (employeeManPower.length == 0) {
            cardAlert('Tidak Ada Data', '#listAddedManPower')
        }
        $('#sisaAddedManPower').html(employeeManPower.length)
        coloringAccordionManPower(keys, date, shift_group_id, machine_type_id, machine_id)
    }

    function coloringAccordionManPower(key, date, shift_group_id, machine_type_id, machine_id) {
        $('.accordionClickable').removeClass('bg-dongker')
        var variable
        if (key == 'qc') {
            variable = date + '' + shift_group_id
        } else if (key == 'mechanic') {
            variable = date + '' + shift_group_id + '' + machine_type_id
        } else {
            variable = date + '' + shift_group_id + '' + machine_type_id + '' + machine_id
            key = 'machine'
        }
        $('#accordion' + key + variable).addClass('bg-dongker')
        searching()
    }

    function addManPower(action, employee_id, date, group_shift_id, machine_type_id, machine_id, key) {
        var newEmployee = {}
        var dataEmployee = data_work.manPower[key].find((v, k) => {
            if (v.id == employee_id) return true
        })
        newEmployee['id'] = dataEmployee.id
        newEmployee['name'] = dataEmployee.full_name
        newEmployee['job_title_nameid'] = dataEmployee.job_title_name
        insertIntoDataWork(action, date, group_shift_id, machine_type_id, machine_id, key, newEmployee, employee_id)
    }

    function insertIntoDataWork(action, date, group_shift_id, machine_type_id, machine_id, key, newData = null, employee_id = null) {
        var data = data_work.workPlan
        const foundDate = data.find(item => item.date == date);
        if (foundDate) {
            if (key == 'qc') {
                const foundShiftGroup = foundDate.work_plan[type_name_production].shift_qc.find(shift => shift.shift.group_id == group_shift_id);
                if (foundShiftGroup) {
                    if (action == 'add') {
                        // tambah
                        foundShiftGroup.employee_qc.push(newData);
                    } else {
                        // hapus
                        foundShiftGroup.employee_qc = foundShiftGroup.employee_qc.filter(employee => employee.id != employee_id);
                    }
                    loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
                } else {
                    unavailablePosition(date, group_shift_id, machine_type_id, machine_id, key, foundDate.work_plan['shift_qc']);
                }
            } else {
                const foundShiftGroup = foundDate.work_plan[type_name_production].shift_qc.find(shift => shift.shift.group_id == group_shift_id);
                if (foundShiftGroup) {
                    const foundMachineType = foundShiftGroup.shift_mechanic.find(type => type.machine_type.id == machine_type_id);
                    if (foundMachineType) {
                        // Cek jika key adalah 'mechanic' untuk menambahkan data pada employee_mechanic
                        if (key == 'mechanic') {
                            if (action == 'add') {
                                foundMachineType.employee_mechanic.push(newData);
                            } else {
                                foundMachineType.employee_mechanic = foundMachineType.employee_mechanic.filter(employee => employee.id != employee_id);
                            }
                            loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
                        } else {
                            const foundMachine = foundMachineType.shift_machine.find(machine => machine.machine.id == machine_id);
                            if (foundMachine) {
                                // Tambahkan data baru ke dalam employee_catcher, employee_helper, atau employee_operator
                                if (action == 'add') {
                                    eval(`foundMachine.employee_${key}.push(newData)`)
                                } else {
                                    eval(`foundMachine.employee_${key} = foundMachine.employee_${key}.filter(employee => employee.id != employee_id);`)
                                }
                                // console.log(foundMachine.employee_catcher)
                                loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
                                // if (key == 'catcher') {
                                //     if (action == 'add') {
                                //         foundMachine.employee_catcher.push(newData);
                                //     } else {
                                //         foundMachine.employee_catcher = foundMachine.employee_catcher.filter(employee => employee.id != employee_id);
                                //         // console.log(foundMachine.employee_catcher)
                                //     }
                                //     loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
                                // } else if (key == 'helper') {
                                //     if (action == 'add') {
                                //         foundMachine.employee_helper.push(newData);
                                //     } else {
                                //         foundMachine.employee_helper = foundMachine.employee_helper.filter(employee => employee.id != employee_id);
                                //     }
                                //     loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
                                // } else if (key == 'operator') {
                                //     if (action == 'add') {
                                //         foundMachine.employee_operator.push(newData);
                                //     } else {
                                //         foundMachine.employee_operator = foundMachine.employee_operator.filter(employee => employee.id != employee_id);
                                //     }
                                //     loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
                                // } else {
                                //     console.error("Invalid key parameter! Use 'catcher', 'helper', 'operator', 'mechanic', or 'qc'.");
                                // }
                            } else {
                                unavailablePosition(date, group_shift_id, machine_type_id, machine_id, key, foundMachineType['shift_machine']);
                            }
                        }
                    } else {
                        unavailablePosition(date, group_shift_id, machine_type_id, machine_id, key, foundShiftGroup['shift_mechanic']);
                    }
                } else {
                    unavailablePosition(date, group_shift_id, machine_type_id, machine_id, key, foundDate.work_plan['shift_qc']);
                }
            }
        } else {
            console.error("Date not found!");
        }
        // loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
    }

    function loadManPower(date, group_shift_id, machine_type_id, machine_id, key) {
        arrangeVariable()
        listManPower(key, date, group_shift_id, machine_type_id, machine_id)
        listMoreDate(date, group_shift_id, machine_type_id, machine_id)
    }
    var variableAdd

    function unavailablePosition(date, group_shift_id, machine_type_id, machine_id, key, variable) {
        variableAdd = variable
        Swal.fire({
            text: 'Gagal memilih employee, data ' + key + ' tidak tersedia. Apakah langsung generate data pada Mesin tersebut?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                // createNewVariableManPower(date, group_shift_id, machine_type_id, machine_id, key, variable, 'manpower')
                chooseShift('add_machine', date, group_shift_id, null, machine_id, machine_type_id, null, key)
            }
        })
    }

    function arrangeDataTemplate(input) {
        function fillData(inputData) {
            const newObj = {};

            if (inputData == null) {
                return null;
            }

            if (Array.isArray(inputData)) {
                return inputData.map((item) => fillData(item));
            }

            if (typeof inputData == "object" && inputData !== null) {
                for (const key in inputData) {
                    if (key == "products") {
                        newObj[key] = [data_work.workPlanManageDataTemplate.products[0]];
                    } else if (key == "shift_mechanic") {
                        newObj[key] = fillData(data_work.workPlanManageDataTemplate.shift_mechanic);
                    } else if (key == "shift_qc") {
                        newObj[key] = fillData(data_work.workPlanManageDataTemplate.shift_qc);
                    } else if (key == "shift_machine") {
                        newObj[key] = fillData(data_work.workPlanManageDataTemplate.shift_machine);
                    } else {
                        newObj[key] = fillData(inputData[key]);
                    }
                }
                return newObj;
            }

            return inputData;
        }

        var data = data_work.workPlanManageDataTemplate;
        const inputData = data[input];

        if (inputData == undefined) {
            return null;
        }

        return fillData(inputData);
    }

    function arrangeDataTemplateReal(input) {
        var template = data_work.workPlanManageDataTemplate[input][0]
        return template
    }

    function editShift(date, machine_id, machine_type_id, shift_id, shift_group_id, work_id) {
        // console.log(date, machine_id, machine_type_id, shift_id, shift_group_id, work_id)
        $('#modal2').modal('hide')
        var target = ''
        if (machine_id == null && machine_type_id == null) {
            target = 'shift'
            var getData = searchDataAll(date, machine_id, machine_type_id, shift_id, shift_group_id, target)
            // console.log(getData)
        } else if (machine_id == null && machine_type_id != null) {
            target = 'machine_type'
            var getData = searchDataAll(date, machine_id, machine_type_id, shift_id, shift_group_id, target)
        } else {
            target = 'machine'
            var getData = searchDataAll(date, machine_id, machine_type_id, shift_id, shift_group_id, target)[0]
        }
        var dataShiftMaster = data_work.shift[0].shift_list.find((v, k) => {
            if (v.id == shift_id) return true
        })
        getData.shift.id = dataShiftMaster.id
        getData.shift.group_id = dataShiftMaster.group_id
        getData.shift.name = dataShiftMaster.name
        getData.shift.start = dataShiftMaster.start_time
        getData.shift.end = dataShiftMaster.end_time
        arrangeVariable()
        listMoreDate(date, shift_group_id, machine_type_id, machine_id)
    }

    function createNewVariableManPower(date, group_shift_id, shift_id, machine_type_id, machine_id, key, variable = null) {
        // console.log(date, group_shift_id, shift_id, machine_type_id, machine_id, key, variable)
        $('#modal2').modal('hide')
        var data
        var dataShiftMaster = data_work.shift[0].shift_list.find((v, k) => {
            if (v.id == shift_id) return true
        })
        if (key == 'mechanic') {
            data = deepCopy(arrangeDataTemplate('shift_' + key)[0])
            var dataMachineType = data_work.machineType.find((v, k) => {
                if (v.id == machine_type_id) return true
            })
            data.machine_type['id'] = dataMachineType.id
            data.machine_type['name'] = dataMachineType.name
            data.shift.id = dataShiftMaster.id
            data.shift.name = dataShiftMaster.name
            data.shift.start = dataShiftMaster.start_time
            data.shift.end = dataShiftMaster.end_time
            data.shift.group_id = dataShiftMaster.group_id
            data.shift_machine = []
            data.work_plan_machine_type_id = new Date().getTime()
            variableAdd.push(data)
            // eval('variable.employee_' + key).push(data)
            loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
        } else if (key == 'products') {
            data = deepCopy(arrangeDataTemplate('products'))
            loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
        } else {
            var positionOfTemplate = searchDataAll(date, machine_id, machine_type_id, shift_id, group_shift_id, 'machine')
            data = deepCopy(arrangeDataTemplate('shift_machine')[0])
            var dataMachine = data_work.machine.find((v, k) => {
                if (v.id == machine_id) return true
            })
            data.machine['id'] = dataMachine.id
            data.machine['name'] = dataMachine.name
            data.shift.id = dataShiftMaster.id
            data.shift.name = dataShiftMaster.name
            data.shift.start = dataShiftMaster.start_time
            data.shift.end = dataShiftMaster.end_time
            data.shift.group_id = dataShiftMaster.group_id
            data.work_plan_machine_id = new Date().getTime()
            // tambahkan data shift
            if (!positionOfTemplate) {
                // jika machineType nya tidak ada
                var variableIsi = {
                    date: date,
                    machine_id: machine_id,
                    shift_id: shift_id,
                    shift_group_id: group_shift_id,
                    positionOfTemplate: positionOfTemplate,
                    template: data,
                    dataShift: dataShiftMaster,
                    text: 'machine',
                    key: key,
                }
                createMachineType(variableIsi, machine_type_id, true)
            } else {
                variableAdd.push(data)
                loadManPower(date, group_shift_id, machine_type_id, machine_id, key)
            }
        }
    }


    function changePlan(event, date, machine_id, shift_id = null, shift_group_id = null) {
        event.stopPropagation();
        if (shift_id != null) {
            $('#modal').modal('show')
            $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-xl');
            var html_header = '';
            html_header += '<h5 class="modal-title">Change Brand & Production</h5>';
            html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
            $('#modalHeader').html(html_header);
            var html_body = '';
            html_body += '<div class="row p-0 m-0">'

            html_body += '<div class="col-12 col-md-4 p-4" style="background-color:#fcfcfc;">'

            html_body += '<div class="row" id="headerPlan">'
            html_body += headerPlan(date, machine_id, shift_id, shift_group_id)
            html_body += '</div>'

            html_body += '<div class="row mt-3">'
            html_body += '<div class="col-12">'
            html_body += '<p class="m-0 super-small-text mb-2"><b>Machine This Day</b></p>'
            html_body += '</div>'
            html_body += '<div class="col-12" id="machineThisDay" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'
            // card maker
            html_body += machineThisDay(date, machine_id, shift_id, shift_group_id)
            // end card maker
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'

            html_body += '<div class="col-12 col-md-8 p-4">'
            // header
            html_body += '<div class="row" id="currentShiftMachine">'
            html_body += currentShiftMachine(date, machine_id, shift_id, shift_group_id)
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
            detailPerShift(event, date, machine_id, shift_id, shift_group_id)
        } else {
            var machine_type_id = findEntitiesByMachineId(data_work.machineType, machine_id)[0]
            chooseMachineThisDay(0, date, machine_id, machine_type_id, shift_id, shift_group_id)
        }
    }

    function headerPlan(date, machine_id, shift_id, shift_group_id) {
        var html = ''
        // data master mesin ini
        var masterMachine = data_work.machine.find((v, k) => {
            if (v.id == machine_id) return true
        })
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text text-grey">Date</p>'
        html += '<h4 class="text-dark-grey m-0"><b>' + formatInternationalDate(date) + '</b></h4>'
        html += '</div>'
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text text-grey">Machine</p>'
        html += '<h4 class="text-dark-grey m-0"><b>' + masterMachine.name + '</b></h4>'
        html += '</div>'
        return html
    }

    function currentShiftMachine(date, machine_id, shift_id, shift_group_id) {
        var html = ''
        // detail dari shift tersebut, tapi masih bisa lihat shift yang lain
        var dataPlanInADate = data_work_plan_bar.machine.filter((v, k) => {
            if (v.resource == machine_id && v.start == date) return true
        })
        var currentShift = groupAndSum(dataPlanInADate, ['shift_id', 'nama_shift', 'shift_name', 'shift_group_id'], [])
        // console.log(currentShift)
        // console.log(machine_id)
        currentShift.forEach(e => {
            var thisShift = ''
            if (shift_id == e.shift_id) {
                thisShift = 'clicked'
            }
            html += '<div class="col-auto p-1">'
            html += '<div class="card shadow-none ' + thisShift + '" style="cursor:pointer;" onclick="detailPerShift(event,' + "'" + date + "'" + ',' + machine_id + ', ' + e.shift_id + ',' + e.shift_group_id + ')">'
            html += '<div class="card-body p-2">'
            html += '<p class="super-small-text m-0"><b>' + e.shift_name + '</b> ' + e.nama_shift + ' <i class="fa fa-comment text-grey ms-2" onclick="formAddNotes(event,' + "'shift'" + ",'" + date + "'" + ',' + e.shift_id + ',' + e.shift_group_id + ')"></i></p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        return html
    }

    function machineThisDay(date, machine_id, shift_id, shift_group_id) {
        var html = ''
        // data semua mesin di tanggal itu
        var dataMachine = data_work_plan_bar.machine.filter((v, k) => {
            if (v.start == date) return true
        })
        data_work.machineType.forEach(e => {
            html += '<div class="card shadow-none mb-2">'
            html += '<div class="card-body p-3">'
            html += '<p class="m-0 mb-2"><b>' + e.name + '</b></p>'
            // list maker
            var dataMachineByType = dataMachine.filter((v, k) => {
                if (v.machine_type_id == e.id) return true
            })
            data_work.machine.forEach(el => {
                if (el.machine_type_id == e.id) {
                    var dataFindMachine = dataMachineByType.find((v, k) => {
                        if (v.resource == el.id) return true
                    })
                    var dataProdukString = data_work_plan_group.filter((v, k) => {
                        if (v.resource == el.id && v.start == date && v.machine_type_id == e.id) return true
                    })
                    var thisMachine = ''
                    if (el.id == machine_id) {
                        thisMachine = 'clicked'
                    }
                    unknown = 'bg-grey'
                    product = '<p class="m-0 super-small-text text-danger"><i>Machine Not Created</i></p>'
                    variableInput = 0
                    if (dataFindMachine != undefined) {
                        var unknown = ''
                        var variableInput = 1
                    }
                    if (dataProdukString.length > 0) {
                        var product = ''
                        dataProdukString.forEach(prod => {
                            product += '<p class="m-0 super-small-text"><b class="text-info">' + prod.nama_shift + '</b> : ' + prod.produk + '</p>'
                        });
                        if (dataProdukString[0].produk == '') {
                            var product = '<p class="m-0 super-small-text">No Product</p>'
                        }
                    } else {
                        if (dataFindMachine != undefined) {
                            var product = '<p class="m-0 super-small-text">No Product</p>'
                        }
                    }
                    html += '<div class="row">'
                    html += '<div class="col-12">'
                    html += '<div class="card shadow-none mb-2 ' + unknown + ' ' + thisMachine + ' btn-list-planning" onclick="chooseMachineThisDay(' + variableInput + ',' + "'" + date + "'" + ',' + el.id + ',' + e.id + ',' + shift_id + ',' + shift_group_id + ')">'
                    html += '<div class="card-body p-2">'
                    html += '<div class="row">'
                    html += '<div class="col-10 align-self-center">'
                    html += '<p class="m-0 small"><b>' + el.name + '</b></p>'
                    html += product
                    html += '</div>'
                    html += '<div class="col-2 align-self-center text-end">'
                    // html += '<i class="fa fa-comment text-grey"></i>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                }
            });
            // list maker
            html += '</div>'
            html += '</div>'
        });
        return html
    }

    function chooseMachineThisDay(input, date, machine_id, machine_type_id, shift_id = null, shift_group_id = null) {
        if (input == 0) {
            Swal.fire({
                text: 'Machine belum ter-Create. Apakah ingin membuat ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    chooseShift('create', date, shift_group_id, shift_id, machine_id, machine_type_id)
                }
            })
        } else {
            empty('#bodyPerShift', 'Pilih Shift Terlebih Dahulu')
            getKerangkaProduksi(date, machine_id, shift_id, shift_group_id)
        }
    }

    function createNewMachine(date, machine_id, machine_type_id, shift_id, shift_group_id) {
        $('#modal2').modal('hide')
        var dataMachine = data_work.machine.find((v, k) => {
            if (v.id == machine_id) return true
        })
        var dataShift = data_work.shift[0].shift_list.find((v, k) => {
            if (v.id == shift_id) return true
        })
        var positionOfTemplate = searchDataAll(date, machine_id, machine_type_id, shift_id, shift_group_id, 'machine')
        var template = arrangeDataTemplate('shift_machine')[0]
        template.machine.id = dataMachine.id
        template.machine.name = dataMachine.name
        template.shift.id = dataShift.id
        template.shift.end = dataShift.end_time
        template.shift.start = dataShift.start_time
        template.shift.name = dataShift.name
        template.shift.group_id = dataShift.group_id
        template.work_plan_machine_id = new Date().getTime()
        var variableIsi = {
            date: date,
            machine_id: machine_id,
            shift_id: shift_id,
            shift_group_id: shift_group_id,
            positionOfTemplate: positionOfTemplate,
            template: template,
            dataShift: dataShift,
            text: 'machine',
        }
        if (!positionOfTemplate) {
            // jika machineType nya tidak ada
            createMachineType(variableIsi, machine_type_id)
        } else {
            // console.log(positionOfTemplate)
            positionOfTemplate.push(template)
            insertDataAll(date, machine_id, shift_id, shift_group_id, positionOfTemplate, 'machine')
        }
    }

    function createMachineType(variableIsi, machine_type_id, allowManPower = false) {
        var dataMachineType = findDataByIdFromArrayObject([machine_type_id], data_work.machineType)
        var template = deepCopy(arrangeDataTemplateReal('shift_mechanic'))
        template.machine_type.id = dataMachineType[0].id
        template.machine_type.name = dataMachineType[0].name
        template.shift.id = variableIsi.dataShift.id
        template.shift.group_id = variableIsi.dataShift.group_id
        template.shift.name = variableIsi.dataShift.name
        template.shift.start = variableIsi.dataShift.start_time
        template.shift.end = variableIsi.dataShift.end_time
        template.work_plan_machine_type_id = new Date().getTime()
        template.shift_machine = []
        template.shift_machine.push(variableIsi.template)
        var data = searchDataAll(variableIsi.date, '', machine_type_id, variableIsi.shift_id, variableIsi.shift_group_id, 'shift')
        // console.log(dataMachineType)
        data.shift_mechanic.push(template)
        insertDataAll(variableIsi.date, variableIsi.machine_id, variableIsi.shift_id, variableIsi.group_shift_id, data.shift_mechanic, 'machine_type')
        if (allowManPower) {
            loadManPower(variableIsi.date, variableIsi.shift_group_id, dataMachineType[0].id, variableIsi.machine_id, variableIsi.key)
        }
    }

    function chooseShift(action, date, shift_group_id, shift_id = null, machine_id = null, machine_type_id = null, work_id = null, key = null) {
        // console.log(date, shift_group_id, shift_id, machine_id, machine_type_id)
        if (shift_group_id == null) {
            var dataFilteredPlanGroup = data_work_plan_group.find((v, k) => {
                if (v.start == date) return true
            })
            if (dataFilteredPlanGroup) {
                shift_group_id = dataFilteredPlanGroup.shift_group_id
            }
        }
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Choose Shift</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        var a = 1
        data_work.shift[0].shift_list.forEach(e => {
            if (e.group_id == shift_group_id) {
                if (action == 'create') {
                    html_body += '<div class="col-12 pt-3 pb-3 ps-5 pe-5 btn-addnew-shift pointer" onclick="createNewMachine(' + "'" + date + "'" + ',' + machine_id + ',' + machine_type_id + ',' + e.id + ',' + e.group_id + ')">'
                } else if (action == 'edit') {
                    var act = ''
                    if (e.id == shift_id) {
                        act = 'active'
                    }
                    html_body += '<div class="col-12 pt-3 pb-3 ps-5 pe-5 btn-addnew-shift ' + act + ' pointer" onclick="editShift(' + "'" + date + "'" + ',' + machine_id + ',' + machine_type_id + ',' + e.id + ',' + e.group_id + ',' + work_id + ')">'
                } else if (action == 'add_machine') {
                    html_body += '<div class="col-12 pt-3 pb-3 ps-5 pe-5 btn-addnew-shift ' + act + ' pointer" onclick="createNewVariableManPower(' + "'" + date + "'" + ',' + e.group_id + ',' + e.id + ',' + machine_type_id + ',' + machine_id + ',' + "'" + key + "'" + ',' + "'manpower'" + ')">'
                }
                html_body += '<p class="m-0 small-text">' + e.name + '</p>'
                html_body += '<p class="m-0"><b>' + convertTimeFormat(e.start_time) + " - " + convertTimeFormat(e.end_time) + '</b></p>'
                html_body += '</div>'
                if (a < data_work.shift[0].shift_list.length) {
                    html_body += '<div class="col-12"><hr class="m-0"></div>'
                }
                a++
            }
        });
        html_body += '</div>'
        $('#modalBody2').html(html_body).addClass('p-0');
        $('#modalFooter2').addClass('d-none');
    }

    function getKerangkaProduksi(date, machine_id, shift_id, shift_group_id) {
        $('#headerPlan').html(headerPlan(date, machine_id, shift_id, shift_group_id))
        $('#machineThisDay').html(machineThisDay(date, machine_id, shift_id, shift_group_id))
        $('#currentShiftMachine').html(currentShiftMachine(date, machine_id, shift_id, shift_group_id))
    }

    function detailPerShift(event, date, machine_id, shift_id, shift_group_id) {
        event.stopPropagation();
        // data detail dari shift tersebut
        var dataDetail = removeNullProduct(data_work_plan.filter((v, k) => {
            if (v.machine_id == machine_id && v.date == date && v.shift_id == shift_id) return true
        }))
        // console.log(dataDetail)
        var html = ''
        html += '<div class="row">'
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text mb-2"><b>Brand & Total Production</b></p>'
        // total
        dataDetail.forEach(e => {
            html += '<div class="row">'
            html += '<div class="col-12">'
            html += '<div class="card shadow-none mb-2">'
            html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;" onclick="deleteDataProduction(' + "'" + date + "'" + ',' + machine_id + ',' + shift_id + ',' + shift_group_id + ',' + e.product_id + ',' + e.work_plan_product_id + ')"><i class="small-text fa fa-times text-light"></i></span>'

            html += '<div class="card-body p-3">'
            html += '<div class="row">'
            html += '<div class="col align-self-center">'
            html += '<p class="m-0"><b class="m-0">' + e.product_alias + '</b></p>'
            html += '<p class="m-0 small-text">' + e.product_name + '</p>'
            html += '</div>'
            html += '<div class="col-3"><input class="form-control form-control-sm shadow-none nominal p-0 m-0" type="text" style="border:0px;" value="' + e.product_qty + '" onkeyup="fillInputProduction(' + "'" + date + "'" + ',' + machine_id + ',' + shift_id + ',' + shift_group_id + ',' + e.product_id + ',' + e.work_plan_product_id + ',event)"><hr class="m-0"></div>'
            html += '<div class="col-2 align-self-center p-0"><b class="m-0">' + e.unit_name + '</b></div>'
            html += '<div class="col-1 align-self-center p-0"><i class="fa fa-comment text-grey pointer" onclick="formAddNotes(event,' + "'product'" + ",'" + date + "'" + ',' + shift_id + ',' + shift_group_id + ',' + e.machine_type_id + ',' + e.machine_id + ',' + e.product_id + ')"></i></div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="card shadow-none mb-2 btn-addnew-production" style="border:1px dashed #D9D9D9;cursor:pointer;" onclick="addNewProduction(' + "'" + date + "'" + ',' + machine_id + ',' + shift_id + ',' + shift_group_id + ')">'
        html += '<div class="card-body p-3 text-center">'
        html += '<p class="m-0 small-text"><i class="me-2 fa fa-plus"></i>Add New</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // total
        html += '</div>'
        html += '<div class="col-12">'
        html += '<p class="m-0 super-small-text mb-2"><b>Notes</b></p>'
        html += '<textarea class="form-control" rows="10" onkeyup="textingNotes()"></textarea>'
        html += '</div>'
        html += '</div>'
        $('#bodyPerShift').html(html)
        $('#currentShiftMachine').html(currentShiftMachine(date, machine_id, shift_id, shift_group_id))
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

    function getDataByIdArrayItemProduct(inputIds, outputData) {
        const result = [];

        for (const id of inputIds) {
            const item = outputData.find((data) => data.id == id);
            if (item) {
                result.push(item);
            }
        }

        return result;
    }

    function addNewProduction(date, machine_id, shift_id, group_shift_id) {
        // var dataProduct = groupAndSum(data_work_plan, ['product_id', 'product_name', 'product_alias'], [])
        var dataProduct = getDataByIdArrayItemProduct(data_work.machine.find((v, k) => {
            if (v.id == machine_id) return true
        }).item_id_product, groupAndSum(data_work.item, ['id', 'alias', 'code', 'name'], []))
        // var dataProduct = getDataByIdArrayItemProduct(data_work.machine.find((v, k) => {
        //     if (v.id == machine_id) return true
        // }).item_id_product, groupAndSum(generateItemProduct(), ['id', 'alias', 'code', 'name'], []))
        // console.log(groupAndSum(generateItemProduct(), ['id', 'alias', 'code', 'name'], []))
        // console.log(dataProduct)
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Choose Brand</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        var a = 1
        dataProduct.forEach(e => {
            html_body += '<div class="col-12 pt-3 pb-3 ps-5 pe-5 btn-addnew-production pointer" onclick="addProduction(' + "'" + date + "'" + ',' + machine_id + ',' + shift_id + ',' + group_shift_id + ',' + e.id + ')">'
            html_body += '<p class="m-0 small-text">' + e.alias + '</p>'
            html_body += '<p class="m-0"><b>' + e.name + '</b></p>'
            html_body += '</div>'
            if (a < dataProduct.length) {
                html_body += '<div class="col-12"><hr class="m-0"></div>'
            }
            a++
        });
        html_body += '</div>'
        $('#modalBody2').html(html_body).addClass('p-0');
        $('#modalFooter2').addClass('d-none');
    }

    function addProduction(date, machine_id, shift_id, group_shift_id, product_id) {
        $('#modal2').modal('hide')
        addDataProduction(date, machine_id, shift_id, group_shift_id, product_id)
    }

    function searchDataAll(date, machine_id = null, machine_type_id = null, shift_id = null, group_shift_id = null, target, product_id = null) {
        if (machine_type_id == null) {
            machine_type_id = findEntitiesByMachineId(data_work.machineType, machine_id)[0]
        } else {
            machine_type_id = machine_type_id
        }
        var data = data_work.workPlan
        const foundDate = data.find(item => item.date == date);
        if (foundDate) {
            if (target == 'date') {
                return foundDate
            } else {
                const foundShiftGroup = foundDate.work_plan[type_name_production].shift_qc.find(shift => shift.shift.group_id == group_shift_id);
                if (foundShiftGroup) {
                    if (target == 'shift') {
                        return foundShiftGroup
                    } else {
                        const foundMachineType = foundShiftGroup.shift_mechanic.find(type => type.machine_type.id == machine_type_id);
                        if (foundMachineType) {
                            if (target == 'machine_type') {
                                return foundMachineType
                            } else {
                                if (target == 'machine') {
                                    return foundMachineType.shift_machine
                                } else {
                                    const foundMachine = foundMachineType.shift_machine.find(machine => machine.machine.id == machine_id);
                                    // console.log(machine_id)
                                    if (foundMachine) {
                                        if (target == 'product') {
                                            const foundProduct = foundMachine.products.find(product => product.product.id == product_id);
                                            if (foundProduct) {
                                                return foundProduct
                                            }
                                        } else {
                                            return foundMachine;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    function insertDataAll(date, machine_id, shift_id, group_shift_id, dataInsert, position = null) {
        showSave()
        var machine_type_id = findEntitiesByMachineId(data_work.machineType, machine_id)[0]
        var data = data_work.workPlan
        const foundDate = data.find(item => item.date == date);
        if (foundDate) {
            if (position == 'date') {
                // foundDate = dataInsert
            } else {
                const foundShiftGroup = foundDate.work_plan[type_name_production].shift_qc.find(shift => shift.shift.group_id == group_shift_id);
                if (foundShiftGroup) {
                    if (position == 'shift') {
                        // foundShiftGroup = dataInsert
                    } else {
                        const foundMachineType = foundShiftGroup.shift_mechanic.find(type => type.machine_type.id == machine_type_id);
                        if (foundMachineType) {
                            if (position == 'machine_type') {
                                // foundMachineType = dataInsert
                            } else {
                                if (position == 'machine') {
                                    foundMachineType.shift_machine = dataInsert
                                } else {
                                    const foundMachine = foundMachineType.shift_machine.find(machine => machine.machine.id == machine_id);
                                    if (foundMachine) {
                                        if (position == 'product') {

                                        } else {
                                            foundMachine.products = dataInsert
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        arrangeVariable()
        if (position != 'date' && position != 'shift' && position != 'machine_type') {
            getKerangkaProduksi(date, machine_id, shift_id, group_shift_id)
            if (position != 'edit_product') {
                detailPerShift(event, date, machine_id, shift_id, group_shift_id)
            }
            if (position == 'machine') {
                $('#bodyPerShift').html('')
            }
        }
    }

    function deleteDataProduction(date, machine_id, shift_id, group_shift_id, product_id, work_plan_product_id) {
        var data = searchDataAll(date, machine_id, null, shift_id, group_shift_id).products
        data = data.filter(p => p.work_plan_product_id != work_plan_product_id);
        deleteScene('workPlanProduct', work_plan_product_id)
        insertDataAll(date, machine_id, shift_id, group_shift_id, data)
    }

    function deleteDataMachine(event, date, machine_id, machine_type_id, shift_id, group_shift_id, work_plan_machine_id) {
        event.stopPropagation();
        var data = searchDataAll(date, machine_id, machine_type_id, shift_id, group_shift_id, 'machine')
        data = data.filter(p => p.work_plan_machine_id != work_plan_machine_id);
        var variableIsi = {
            date: date,
            work_plan_machine_id: work_plan_machine_id,
            machine_id: machine_id,
            shift_id: shift_id,
            group_shift_id: group_shift_id,
            data: data,
            text: 'machine',
        }
        deleteScene('workPlanMachine', work_plan_machine_id)
        checkAvailableMachineType(work_plan_machine_id, variableIsi)
    }

    function checkAvailableMachineType(work_plan_machine_id, variableIsi) {
        var dataSearch = data_work_plan.find((v, k) => {
            if (v.work_plan_machine_id == work_plan_machine_id) return true
        })
        var workplanMachineTypeId = dataSearch.work_plan_machine_type_id
        var machineTypeId = dataSearch.machine_type_id
        var availableMachineType = data_work_plan.filter((v, k) => {
            if (v.work_plan_machine_type_id == workplanMachineTypeId && v.work_plan_machine_id != work_plan_machine_id) return true
        })
        if (!availableMachineType.length) {
            // jika tidak ada maka hapus di machine type
            deleteWorkMachineType(workplanMachineTypeId, machineTypeId, variableIsi)
        } else {
            insertDataAll(variableIsi.date, variableIsi.machine_id, variableIsi.shift_id, variableIsi.group_shift_id, variableIsi.data, variableIsi.text)
        }
    }

    function deleteWorkMachineType(workplanMachineTypeId, machineTypeId, variableIsi) {
        var data = searchDataAll(variableIsi.date, '', machineTypeId, variableIsi.shift_id, variableIsi.group_shift_id, 'shift')
        data.shift_mechanic = data.shift_mechanic.filter((v, k) => {
            if (v.work_plan_machine_type_id != workplanMachineTypeId) return true
        })
        deleteScene('workPlanMachineType', workplanMachineTypeId)
        insertDataAll(variableIsi.date, variableIsi.machine_id, variableIsi.shift_id, variableIsi.group_shift_id, data.shift_mechanic, 'machine_type')
    }

    function checkAvailableShift(work_plan_machine_id) {

    }

    function addDataProduction(date, machine_id, shift_id, group_shift_id, product_id) {
        var dataProduct = groupAndSum(data_work.item, ['id', 'alias', 'code', 'name'], []).find((v, k) => {
            if (v.id == product_id) return true
        })
        var dataUnitId = data_work.item.find((v, k) => {
            if (v.id == product_id) return true
        }).unit_default.find((v, k) => {
            if (v.machine_id == machine_id) return true
        }).unit_id
        var dataItem = data_work.item.find((v, k) => {
            if (v.id == product_id) return true
        }).unit_option.find((v, k) => {
            if (v.id == dataUnitId) return true
        })
        // console.log(dataUnitId)
        var data = searchDataAll(date, machine_id, null, shift_id, group_shift_id).products
        var work_plan_product_id = new Date().getTime()
        var template = deepCopy(data_work.workPlanManageDataTemplate.products[0])
        template.product.id = product_id
        template.product.name = dataProduct.name
        template.product.code = dataProduct.code
        template.product.alias = dataProduct.alias
        template.unit.id = dataItem.id
        template.unit.name = dataItem.name
        template.unit.multiplier = dataItem.multiplier
        template.work_plan_product_id = work_plan_product_id
        template.qty = 0
        data.push(template)
        insertDataAll(date, machine_id, shift_id, group_shift_id, data)
    }

    function findIndexByWorkPlanProductId(inputData, workPlanProductId) {
        for (let i = 0; i < inputData.length; i++) {
            if (inputData[i].work_plan_product_id == workPlanProductId) {
                return i;
            }
        }
        return -1; // Return -1 if workPlanProductId is not found in the data
    }

    function fillInputProduction(date, machine_id, shift_id, group_shift_id, product_id, work_plan_product_id, event) {
        const inputValue = event.target.value;
        var data = searchDataAll(date, machine_id, null, shift_id, group_shift_id).products
        var index = findIndexByWorkPlanProductId(data, work_plan_product_id)
        // console.log(inputValue.replace(',', ''))
        data[index].qty = inputValue.replace(',', '')
        insertDataAll(date, machine_id, shift_id, group_shift_id, data, 'edit_product')
    }

    function formAddNotes(event, target, date, shift_id = null, group_shift_id = null, machine_type_id = null, machine_id = null, product_id = null) {
        var positionOfTemplate = searchDataAll(date, machine_id, machine_type_id, shift_id, group_shift_id, target, product_id)
        if (positionOfTemplate.note == null) {
            positionOfTemplate.note = ''
        }
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Add Notes</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<textarea class="form-control" rows="10" placeholder="Tuliskan notes disini" onkeyup="addNotes(event,' + "'" + target + "'" + ',' + "'" + date + "'" + ',' + shift_id + ',' + group_shift_id + ',' + machine_type_id + ',' + machine_id + ',' + product_id + ',event)">' + positionOfTemplate.note + '</textarea>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body).addClass('p-0');
        $('#modalFooter2').addClass('d-none');
    }

    function addNotes(event, target, date, shift_id, group_shift_id, machine_type_id, machine_id, product_id) {
        const inputValue = event.target.value;
        var positionOfTemplate = searchDataAll(date, machine_id, machine_type_id, shift_id, group_shift_id, target, product_id)
        positionOfTemplate.note = inputValue
        insertDataAll(date, machine_id, shift_id, group_shift_id, positionOfTemplate, target)
    }

    function addHariLembur(event, target, date) {
        var value = $('#checkHariLembur' + date + ':checked').val()
        if (!value) {
            value = 0
        }
        var positionOfTemplate = searchDataAll(date, null, null, null, null, 'date')
        positionOfTemplate.work_plan[type_name_production].is_overtime = value
        insertDataAll(date, null, null, null, positionOfTemplate, 'date')
        // console.log(positionOfTemplate)
    }

    function tambahShiftBaru(date, group_id) {
        var dataShiftGroup = data_work.shift[0].shift_group.find((v, k) => {
            if (v.group_id == group_id) return true
        })
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Tambah Shift ' + dataShiftGroup.group_time + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        var a = 1
        for (let i = 0; i < dataShiftGroup.shift_id.length; i++) {
            var findShift = data_work.shift[0].shift_list.find((v, k) => {
                if (v.id == dataShiftGroup.shift_id[i]) return true
            })
            html_body += '<div class="col-12 pt-3 pb-3 ps-5 pe-5 btn-addnew-production pointer" onclick="appliedToOtherPosition(' + "'" + date + "'" + ',' + findShift.id + ',' + findShift.group_id + ')">'
            html_body += '<p class="m-0 small-text">' + findShift.name + '</p>'
            html_body += '<p class="m-0"><b>' + convertTimeFormat(findShift.start_time) + " - " + convertTimeFormat(findShift.end_time) + '</b></p>'
            html_body += '</div>'
            if (a < dataShiftGroup.shift_id.length) {
                html_body += '<div class="col-12"><hr class="m-0"></div>'
            }
            a++
        }
        html_body += '</div>'
        $('#modalBody2').html(html_body).addClass('p-0');
        $('#modalFooter2').addClass('d-none');
    }

    function appliedToOtherPosition(date, shift_id, shift_group_id) {
        var dataShiftGroup = data_work.shift[0].shift_group.find((v, k) => {
            if (v.group_id == shift_group_id) return true
        })
        var template = arrangeDataTemplate('shift_qc')
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Applied to Position ' + dataShiftGroup.group_time + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        data_work.machineType.forEach(e => {
            html_body += '<div class="col-12">'
            html_body += '<div class="card shadow-none mb-2">'
            html_body += '<div class="card-body p-2">'
            html_body += '<p class="m-0 small-text"><b>' + e.name + '</b></p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            var dataMachine = data_work.machine.filter((v, k) => {
                if (v.machine_type_id == e.id)
                    return true;
            });
            dataMachine.forEach(el => {
                html_body += '<div class="col-12 ps-5">'
                html_body += '<div class="card shadow-none mb-2">'
                html_body += '<div class="card-body p-2">'
                html_body += '<div class="form-check">'
                html_body += '<input class="form-check-input  checkMachineFromCreateShift" type="checkbox" value="' + el.id + '" data-machine_type_id="' + e.id + '" id="checkMachineFromCreateShift' + el.id + '">'
                html_body += '<label class="form-check-label" for="checkMachineFromCreateShift' + el.id + '">' + el.name + '</label>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            });
        });
        html_body += '</div>'
        $('#modalBody2').html(html_body).removeClass('p-0');
        $('#modalFooter2').removeClass('d-none');
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-primary btn-sm" onclick="createNewDataShift(' + "'" + date + "'" + ',' + shift_id + ',' + shift_group_id + ')">Simpan</button>'
        $('#modalFooter2').html(html_footer);
    }

    function deleteScene(variable, id) {
        delete_id[variable].push(id)
    }

    function createNewDataShift(date, shift_id, shift_group_id) {
        $('#modal2').modal('hide')
        var machineId = $(".checkMachineFromCreateShift:checked").map(function() {
            return $(this).val();
        }).get();
        var machineTypeId = $(".checkMachineFromCreateShift:checked").map(function() {
            return $(this).data('machine_type_id');
        }).get();
        var dataShiftMaster = data_work.shift[0].shift_list.find((v, k) => {
            if (v.id == shift_id) return true
        })
        const machineTypeIdGroup = Array.from(new Set(machineTypeId));
        var template = deepCopy(arrangeDataTemplateReal('shift_qc'))
        var positionOfTemplate = searchDataAll(date, null, null, null, null, 'date')
        template.shift.id = dataShiftMaster.id
        template.shift.group_id = dataShiftMaster.group_id
        template.shift.name = dataShiftMaster.name
        template.shift.start = dataShiftMaster.start_time
        template.shift.end = dataShiftMaster.end_time
        template.work_plan_shift_id = new Date().getTime()
        // MECHANIC
        template.shift_mechanic = []
        var dataMachineType = findDataByIdFromArrayObject(machineTypeIdGroup, data_work.machineType)
        var a = 0
        dataMachineType.forEach(e => {
            var templateMachineType = deepCopy(arrangeDataTemplateReal('shift_mechanic'))
            templateMachineType.machine_type.id = e.id
            templateMachineType.machine_type.name = e.name
            templateMachineType.shift.id = dataShiftMaster.id
            templateMachineType.shift.group_id = dataShiftMaster.group_id
            templateMachineType.shift.name = dataShiftMaster.name
            templateMachineType.shift.start = dataShiftMaster.start_time
            templateMachineType.shift.end = dataShiftMaster.end_time
            templateMachineType.work_plan_machine_type_id = new Date().getTime() + '' + a
            // MACHINE
            templateMachineType.shift_machine = []
            var dataMachine = findDataByIdFromArrayObject(machineId, data_work.machine)
            var b = 0
            dataMachine.forEach(el => {
                if (e.id == el.machine_type_id) {
                    var templateMachine = deepCopy(arrangeDataTemplateReal('shift_machine'))
                    templateMachine.machine.id = el.id
                    templateMachine.machine.name = el.name
                    templateMachine.shift.id = dataShiftMaster.id
                    templateMachine.shift.group_id = dataShiftMaster.group_id
                    templateMachine.shift.name = dataShiftMaster.name
                    templateMachine.shift.start = dataShiftMaster.start_time
                    templateMachine.shift.end = dataShiftMaster.end_time
                    templateMachine.work_plan_machine_id = new Date().getTime() + '' + a + '' + b
                    templateMachine.products = []
                    templateMachine.products.push(deepCopy(arrangeDataTemplateReal('products')))
                    templateMachineType.shift_machine.push(templateMachine)
                    b++
                }
            });
            template.shift_mechanic.push(templateMachineType)
            a++
        });
        positionOfTemplate.work_plan[type_name_production].shift_qc.push(template)
        arrangeVariable()
        listMoreDate(date, shift_group_id)
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
    $(document).on('click', '#btnSimpan', function(e) {
        simpan()
    })

    function batalSimpan() {
        hideSave()
        loadDataPlanning(plan_id)
    }

    function simpan() {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setWorkPlan'); ?>'
        set_work_plan.deletedId = delete_id
        var data = set_work_plan
        // console.log(data)
        selectionOfVariableWorkPlan(data, type, url, button)
    }

    function selectionOfVariableWorkPlan(data, type, url, button) {
        var id = []
        data.workPlan.forEach(e => {
            var machine = data.workPlanMachine.find((v, k) => {
                if (v.work_plan_id == e.id) return true
            })
            var machineType = data.workPlanMachineType.find((v, k) => {
                if (v.work_plan_id == e.id) return true
            })
            var shift = data.workPlanShift.find((v, k) => {
                if (v.work_plan_id == e.id) return true
            })
            if (!machine || !machineType || !shift) {
                id.push(e.id)
            }
        });
        data.workPlan = removeDataById(data.workPlan, id);
        data.workPlanShift = removeDataByWorkPlanId(data.workPlanShift, id);
        data.workPlanMachineType = removeDataByWorkPlanId(data.workPlanMachineType, id);
        data.workPlanMachine = removeDataByWorkPlanId(data.workPlanMachine, id);
        // console.log(data)
        // data.workPlanMachine[21].employee_id_catcher = [null]
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
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                hideSave()
                loadDataPlanning(plan_id)
            }
        });
    }

    function dataNotToBeSaved() {
        Swal.fire({
            text: 'Anda belum menyimpan data. Apakah anda yakin untuk keluar dan tidak menyimpan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Kembali'
        }).then((result) => {
            if (result.isConfirmed) {
                loadDataPlanning(plan_id)
                clearModal();
            }
        })
    }

    function batalAllWorkPlan() {
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus semua data Work Plan ini dan kembali ke Plan Default ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Kembali'
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var button = '#btnBatalAllWorkPlan'
                var url = '<?php echo api_produksi('setWorkPlan'); ?>'
                var data = {
                    deletedId: {
                        workPlan: []
                    }
                }
                data_work.workPlan.forEach(e => {
                    data.deletedId.workPlan.push(e.work_plan[type_name_production].work_plan_id)
                });
                kelolaData(data, type, url, button)
            }
        })
    }

    function filterCanvas() {
        var machine = groupDataByAttributes(data_work_plan, ["machine_id", "machine_name"])
        var product = groupDataByAttributes(data_work_plan, ["product_id", "product_alias"])
        var position = generateEmployeeRolesOutput(data_work_plan)
        var manpower = groupEmployeesByUnique(data_work_plan)

        $('.offcanvas').offcanvas('show')
        var header = ''
        header += '<h5 id="offcanvasRightLabel">Filter</h5>'
        header += '<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>'
        $('#canvasHeader').html(header).addClass('pb-0')
        var body = ''
        body += '<div class="row">'

        body += '<div class="col-12 pb-2">'
        body += '<b class="small">Machine</b>'
        body += '<select class="form-select form-select-lg w-100 filter filterMachine" multiple id="filterMachine" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        machine.forEach(e => {
            body += '<option value="' + e.machine_id + '" selected>' + e.machine_name + '</option>'
        });
        body += '</select>'
        body += '</div>'

        body += '<div class="col-12 pb-2 pt-2">'
        body += '<b class="small">Position</b>'
        body += '<select class="form-select form-select-lg w-100 filter filterPosition" multiple id="filterPosition" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        for (let i = 0; i < position.length; i++) {
            body += '<option value="' + position[i] + '" selected>' + position[i] + '</option>'
        }
        body += '</select>'
        body += '</div>'

        body += '<div class="col-12 pb-2 pt-2">'
        body += '<b class="small">Product</b>'
        body += '<select class="form-select form-select-lg w-100 filter filterProduct" multiple id="filterProduct" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        product.forEach(e => {
            body += '<option value="' + e.product_id + '" selected>' + e.product_alias + '</option>'
        })
        body += '</select>'
        body += '</div>'

        body += '<div class="col-12 pb-2 pt-2">'
        body += '<b class="small">Man Power</b>'
        body += '<select class="form-select form-select-lg w-100 filter filterManpower" multiple id="filterManpower" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        manpower.forEach(e => {
            body += '<option value="' + e.id + '" selected>' + e.name + '</option>'
        })
        body += '</select>'
        body += '</div>'

        body += '</div>'
        $('#canvasBody').html(body)
        $('.filter').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            closeOnSelect: false,
            dropdownParent: $('#offcanvasRight'),
        });
    }

    function scrolledGroupShift(date, group_id) {
        var targetId = '#accordionqc' + date + group_id;
        $('#scrolledBodyManPower').animate({
            scrollTop: $(targetId).position().top - 140
        }, 'slow');
    }

    function cetakPDF() {
        var url = '<?= base_url('production/cetakWorkPlan') ?>'
        var params = "*$" + plan_id
        window.open(url + '?params=' + (params), '_blank')
    }

    function seeDetails() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">View Work Plan</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-10 pe-0">'
        html_body += '<div class="form-group has-search">'
        html_body += '<span class="fa fa-search form-control-feedback"></span>'
        html_body += '<input type="text" class="form-control" placeholder="Search All" id="search_nama" autocomplete="off">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-2">'
        html_body += '<button class="btn btn-outline-grey shadow-none" id="popoverFilter"><i class="fa fa-filter"></i></button>'
        html_body += '</div>'

        html_body += '<div class="col-12 mt-2">'
        data_work.workPlan.forEach(a => {
            html_body += '<div class="card shadow-none mb-2">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'
            html_body += '<div class="col">'
            html_body += '<b>' + formatDateIndonesia(a.date) + '</b>'
            html_body += '<b class="float-end pointer" onclick="saveAndShare(' + "'" + a.date + "'" + ')"><i class="fa fa-share-alt"></i></b>'

            html_body += '<div class="row mt-2 ps-2">'
            a.work_plan[type_name_production].shift_qc.forEach(b => {
                // SHIFT
                html_body += '<div class="row mt-2 ps-5">'
                html_body += '<div class="col-12 border-start">'

                html_body += '<p class="m-0 small-text"><b>Quality Control</b></p>'
                html_body += '<p class="m-0 small-text">Shift ' + convertTimeFormat(b.shift.start) + " - " + convertTimeFormat(b.shift.end) + '</p>'
                if (b.employee_qc.length) {
                    b.employee_qc.forEach(person => {
                        html_body += '<span class="badge small-text bg-secondary me-1">' + person.name + '</span>'
                    });
                } else {
                    html_body += '<span class="badge small-text bg-grey me-1">No Worker</span>'
                }
                b.shift_mechanic.forEach(c => {
                    // MACHINE TYPE
                    html_body += '<div class="row mt-2 ps-5">'
                    html_body += '<div class="col-12 border-start">'

                    html_body += '<p class="m-0 small-text"><b>Mechanic ' + c.machine_type.name + '</b></p>'
                    html_body += '<p class="m-0 small-text">Shift ' + convertTimeFormat(c.shift.start) + " - " + convertTimeFormat(c.shift.end) + '</p>'
                    if (c.employee_mechanic.length) {
                        c.employee_mechanic.forEach(person => {
                            html_body += '<span class="badge small-text bg-secondary me-1">' + person.name + '</span>'
                        });
                    } else {
                        html_body += '<span class="badge small-text bg-grey me-1">No Worker</span>'
                    }

                    c.shift_machine.forEach(d => {
                        // MAKER
                        html_body += '<div class="row mt-2 ps-5">'
                        html_body += '<div class="col-12 border-start">'

                        html_body += '<p class="m-0 small-text"><b>' + d.machine.name + '</b></p>'
                        html_body += '<p class="m-0 small-text">Shift ' + convertTimeFormat(d.shift.start) + " - " + convertTimeFormat(d.shift.end) + '</p>'

                        html_body += '<div class="card shadow-none w-100">'
                        html_body += '<div class="card-body p-2">'
                        html_body += '<b class="small-text">Product</b>'

                        // product
                        html_body += '<div class="row small-text">'
                        // console.log(d.products)
                        // if (d.products[0].id) {
                        d.products.forEach(e => {
                            html_body += '<div class="col-6">' + e.product.name + '</div>'
                            if (e.qty == null) {
                                e.qty = 0
                            }
                            html_body += '<div class="col-2 text-end"><b>' + number_format(e.qty) + '</b></div>'
                            html_body += '<div class="col-3">' + e.unit.name + '</div>'
                        })
                        // }
                        html_body += '</div>'
                        // product

                        html_body += '</div>'
                        html_body += '</div>'

                        data_work.manPowerFrame.forEach(k => {
                            var show = 1
                            if (type_name_production == 'skm') {
                                if (k == 'qc' || k == 'mechanic') {
                                    show = 0
                                }
                            }
                            if (show) {
                                html_body += '<div class="row mt-2">'
                                html_body += '<div class="col-12">'
                                html_body += '<p class="m-0 small-text"><b>' + toTitleCase(k.replace('_', ' ')) + '</b></p>'
                                eval(`var dataPerson =  d.employee_${k}`)
                                if (dataPerson.length) {
                                    dataPerson.forEach(person => {
                                        html_body += '<span class="badge small-text bg-secondary me-1">' + person.name + '</span>'
                                    });
                                } else {
                                    html_body += '<span class="badge small-text bg-grey me-1">No Worker</span>'
                                }
                                html_body += '</div>'
                                html_body += '</div>'
                            }
                        })


                        html_body += '</div>'
                        html_body += '</div>'
                    })

                    html_body += '</div>'
                    html_body += '</div>'
                })
                html_body += '</div>'
                html_body += '</div>'
            })
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0');
        var kontenPopover = ''
        kontenPopover += '<div class="row align-items-center justify-content-center super-small-text w-100">'
        kontenPopover += '<div class="col-12">'
        kontenPopover += '<p class="m-0 mb-2"><b>Worker</b></p>'
        // checkbox
        kontenPopover += '<div class="form-check">'
        kontenPopover += '<input class="form-check-input" type="checkbox" value="" id="checkNoWorker" checked>'
        kontenPopover += '<label class="form-check-label" for="checkNoWorker">No Worker</label>'
        kontenPopover += '</div>'
        kontenPopover += '<div class="form-check">'
        kontenPopover += '<input class="form-check-input" type="checkbox" value="" id="checkWithWorker" checked>'
        kontenPopover += '<label class="form-check-label" for="checkWithWorker">Added Worker</label>'
        kontenPopover += '</div>'
        // checkbox
        kontenPopover += '</div>'
        kontenPopover += '</div>'
        $('#popover_content').html(kontenPopover)
        var popoverTriggerEl = document.querySelector('#popoverFilter');
        var popover = new bootstrap.Popover(popoverTriggerEl, {
            title: '<div class="d-flex justify-content-between align-items-center"><p class="m-0 small-text">Filter</p></div>',
            placement: 'right', // Menentukan posisi popover
            trigger: 'click', // Menentukan trigger popover (dalam contoh ini, hover)
            html: true,
            content: $('#popover_content'),
            customClass: 'custom-popover',
        });
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }

    function saveAndShare(date = null) {
        var dataWorkPlan = data_work_plan
        if (date) {
            var dataWorkPlan = data_work_plan.filter((v, k) => {
                if (v.date == date) return true
            })
        }
        var data = []
        var manpower = groupEmployeesByUnique(dataWorkPlan)
        dataWorkPlan.forEach(e => {
            const availablePositions = createAvailablePositions();
            for (let i = 0; i < availablePositions.length; i++) {
                eval('var dataPosition = e.' + availablePositions[i])
                dataPosition.forEach(el => {
                    var pos = availablePositions[i].replace('employee_', '')
                    var dataEmployee = data_work.manPower[pos.toLowerCase()].find((v, k) => {
                        if (v.id == el.id) return true
                    })
                    var link = '<?= base_url() ?>production/productionEntry/default/' + btoa(e.work_plan_machine_id) + '/' + btoa(pos.toUpperCase())
                    data.push({
                        'account_id': el.id,
                        'account_name': el.name,
                        'account_type': pos.toUpperCase(),
                        'work_plan_machine_id': e.work_plan_machine_id,
                        'machine_name': e.machine_name,
                        'phone': '081944946015',
                        'link': link,
                        'date': formatDateIndonesia(e.date)
                        // 'phone': dataEmployee.phone,
                    })
                });
            }
        });
        confirmShareWorkplan(data, date)
    }

    function confirmShareWorkplan(data, date) {
        var text = 'keseluruhan'
        if (date) {
            text = 'tanggal ' + formatDateIndonesia(date)
        }
        Swal.fire({
            text: 'Apakah anda yakin ingin berbagi Work Plan untuk ' + text + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                shareWhatsapp(data)
            }
        })
    }


    function shareWhatsapp(data) {
        $.ajax({
            url: "<?= base_url('api/sendNotifWorkPlan') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                data: data,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {
                    // console.log(response)
                });
            }
        })
    }
</script>