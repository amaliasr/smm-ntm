<!-- <link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css"> -->
<style>
    .select2-selection {
        border: 0px transparent !important;
        background-color: transparent !important;
    }

    .select2-selection__arrow b {
        display: none !important;
    }

    ul.select2-results__options li {
        font-size: 12px;
    }

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
        color: #686767 !important;
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

    .super-tiny-text {
        font-size: 8px;
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

    .border-dongker {
        border: 1px solid #27374d;
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
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
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
</style>
<style>
    .border-light-dark {
        border-color: #a6aabb !important;
    }

    .bg-light-dark {
        background-color: #a6aabb !important;
    }

    .text-light-dark {
        color: #a6aabb !important;
    }

    .nav-link {
        color: #61677A;
        border-color: #E57C23 #E57C23 #E57C23;

    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: white !important;
        background-color: #E57C23;
        border-color: #E57C23 #E57C23 #E57C23;
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        background: none;
        border-top-left-radius: 0.35rem;
        border-top-right-radius: 0.35rem;
        border-top: 1px solid #e57c23;
        border-right: 1px solid #e57c23;
        border-left: 1px solid #e57c23;
        border-bottom: 1px none rgba(229, 124, 35, 0);
    }

    th {
        padding: 20px;
    }

    .bg-light-success {
        background-color: #e9f4e0;
    }

    .bg-light-danger {
        background-color: #e8d6d6;
    }

    .bg-light-dongker {
        background-color: #7d8794;
    }

    .cameraOption {
        border-radius: 20px !important;
    }

    .bg-light-orange {
        background-color: #fda45a !important;
    }

    .text-grey-small {
        color: #b4b7bc !important;
    }

    .border-menu-dashboard {
        border-bottom: 2px solid rgb(209, 209, 209) !important;
    }

    .border-menu-dashboard.active {
        border-bottom: 2px solid #737EFB !important;
    }

    .circle-icon {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* color: white; */
        /* font-size: 30px; */
    }

    .bg-light-danger {
        background-color: #fceff0 !important;
    }

    .btn-check:checked+.btn-warning,
    .btn-check:active+.btn-warning,
    .btn-warning:active,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #c38100;
        border-color: #b77900;
        border-radius: 20px;
    }

    .btn-check.btn-warning,
    .btn-check.btn-warning,
    .btn-warning,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #c38100;
        background-color: white;
        border-color: #b77900;
        border-radius: 20px;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/mobiscroll.jquery.min.css">
<script src="<?= base_url() ?>assets/js/mobiscroll.jquery.min.js"></script>
<script src="https://use.fontawesome.com/d80f210d12.js"></script>
<!-- Chart js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<main>
    <div class="row">
        <!-- LEFT PANEL -->
        <div class="col-3 bg-left-panel full-height p-5 pt-2 pe-2 shadow" style="z-index: 999;">
            <div class="row justify-content-between p-3">
                <div class="col align-self-center p-0">
                    <h2 class="text-dark-grey m-0">
                        <b class="small">Shipment Order</b>
                    </h2>
                    <p class="super-small-text m-0 text-light-dark-grey">Panel Pengelolaan dan Pemantauan seluruh proses pengiriman barang</p>
                </div>
                <div class="col-auto align-self-center text-end" id="fieldActiveOrder" hidden>
                    <button class="btn btn-sm rounded text-orange border border-orange shadow-none p-2 d-flex align-self-center" onclick="viewActiveOrder()"><i class="fa fa-truck me-1"></i><span class="text-orange small-text" id="textActiveOrder">0</span></button>
                </div>
                <div class="col-12 p-0 pe-2">
                    <input type="text" class="form-control mt-3 small-text" placeholder="Cari Kode Order" id="search_kode_order" autocomplete="off" onkeyup="searching('search_kode_order','textListOrder','listDetailOrder')">
                </div>
                <div class="col-12 p-0 pe-2 pb-1">
                    <span class="badge pointer rounded-pill bg-primary super-small-text"><i class="fa fa-calendar me-1"></i>01/01/25 - 10/01/25</span>
                    <span class="badge pointer rounded-pill bg-light-dark text-white super-small-text ">All Data</span>
                    <span class="badge pointer rounded-pill border border-light-dark text-light-dark super-small-text ">Waiting</span>
                    <span class="badge pointer rounded-pill border border-light-dark text-light-dark super-small-text ">Process</span>
                    <span class="badge pointer rounded-pill border border-light-dark text-light-dark super-small-text ">Done</span>
                </div>
                <div class="col-12 p-0 pe-2 pb-2" id="listOrder">
                    <!-- card loading -->
                    <!-- <div class="card shadow-none card-hoper mb-1">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col pe-0">
                                    <p class="text-dark-grey m-0 fw-bolder small">#ORDER001</p>
                                    <p class="text-grey-small m-0 fw-bold super-small-text">
                                        <span class="me-2"><i class="fa fa-calendar me-1"></i>10 Jan 2025</span>
                                        <span class="me-2"><i class="fa fa-truck me-1"></i>BO Malang</span>
                                        <span class="me-2"><i class="fa fa-shopping-basket me-1"></i>10</span>
                                    </p>
                                </div>
                                <div class="col-auto align-self-center text-end">
                                    <span class="badge rounded-pill border border-orange text-orange p-2 super-small-text">Waiting</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- card loading -->
                    <!-- card on the way -->
                    <!-- <div class="card shadow-none card-hoper mb-1">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col pe-0">
                                    <p class="text-dark-grey m-0 fw-bolder small">#ORDER001</p>
                                    <p class="text-grey-small m-0 fw-bold super-small-text">
                                        <span class="me-2"><i class="fa fa-calendar me-1"></i>10 Jan 2025</span>
                                        <span class="me-2"><i class="fa fa-truck me-1"></i>BO Malang</span>
                                        <span class="me-2"><i class="fa fa-shopping-basket me-1"></i>10</span>
                                    </p>
                                </div>
                                <div class="col-auto align-self-center text-end">
                                    <span class="badge rounded-pill border border-primary text-primary p-2 super-small-text">Process</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- card on the way -->
                    <!-- card on the way -->
                    <!-- <div class="card shadow-none card-hoper mb-1">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col pe-0">
                                    <p class="text-dark-grey m-0 fw-bolder small">#ORDER001</p>
                                    <p class="text-grey-small m-0 fw-bold super-small-text">
                                        <span class="me-2"><i class="fa fa-calendar me-1"></i>10 Jan 2025</span>
                                        <span class="me-2"><i class="fa fa-truck me-1"></i>BO Malang</span>
                                        <span class="me-2"><i class="fa fa-shopping-basket me-1"></i>10</span>
                                    </p>
                                </div>
                                <div class="col-auto align-self-center text-end">
                                    <span class="badge rounded-pill border border-success text-success p-2 super-small-text">Done</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- card on the way -->
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-9 bg-white">
            <div class="row">
                <div class="col-12 px-4 py-2 pb-0 bg-white shadow-sm">
                    <div class="row justify-content-start" id="headerOfView">

                    </div>
                </div>
                <div class="col-12 p-4" id="fieldOfView">
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
<?php $this->load->view('components/modal_static') ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var stillOpenModal = false

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
        stillOpenModal = false
        isOtherDate = false
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
        stillOpenModal = false
        isOtherDate = false
    })

    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
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

    function loadingDataReturn() {
        var html = '<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>'
        return html
    }

    function cardAlert(text) {
        var html = ''
        html += '<div class="card shadow-none h-100" style="background-color:transparent;border: 1px dashed #cfcfcf;">'
        html += '<div class="card-body p-3 text-center d-flex align-items-center justify-content-center">'
        html += '<p class="m-0 super-small-text text-grey"><i>' + text + '</i></p>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function iconBox(width, height) {
        var html = ''
        html += '<svg xmlns="http://www.w3.org/2000/svg" width="' + width + '" height="' + height + '" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/></svg>'
        return html
    }

    function formatNames(data) {
        if (data.length) {
            var firstNames = data.map(function(item) {
                if (item.id) {
                    var firstName = item.name.split(' ')[0];
                } else {
                    var firstName = ''
                }
                return firstName;
            });
            return firstNames.join(', ');
        } else {
            return ''
        }
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function createOrderCode() {
        x = (deepCopy(data_load.shipmentOrder).length) + 1
        // Mendapatkan tanggal saat ini
        const today = new Date();
        const year = today.getFullYear(); // Tahun (4 digit)
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan (2 digit)
        const date = String(today.getDate()).padStart(2, '0'); // Tanggal (2 digit)

        // Membuat format angka 5 digit untuk x
        const xFormatted = String(x).padStart(3, '0');

        // Membuat kode final
        const code = `SPO${year}${month}${date}${xFormatted}`;
        // const code = `${variableGantung.item_alias}BX${defaultMachineLineBox.machine_line_label}${year}${month}${date}${xFormatted}`;

        return code;
    }

    function resetVariableInsert() {
        var data = {
            shipment_order: [],
            shipment_order_detail: [],
            deletedId: {
                shipment_order: [],
                shipment_order_detail: [],
            }
        }
        return data
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var indexAddItem = 0
    var data_load = {}
    var data_good_stock = []
    var variableInsert = deepCopy(resetVariableInsert())
    var variableGantung = {
        document_code: '',
    }
    $(document).ready(function() {
        headerOfView()
        loadData()
    })

    function headerOfView() {
        var html = ''
        html += '<div class="col-auto align-self-end pb-2 text-center border-menu-dashboard pointer" id="btnMenu0" onclick="changeMenu(0),menuDashoard()">'
        html += '<p class="m-0 small-text textMenu text-grey" id="textMenu0">Dashboard</p>'
        html += '</div>'
        html += '<div class="col-auto align-self-end pb-2 text-center border-menu-dashboard pointer" id="btnMenu1" onclick="changeMenu(1),emptyViewShipment()">'
        html += '<p class="m-0 small-text textMenu text-grey" id="textMenu1">View Shipment</p>'
        html += '</div>'
        html += '<div class="col-auto align-self-end pb-2 text-center border-menu-dashboard pointer" id="btnMenu2" onclick="changeMenu(2)">'
        html += '<p class="m-0 small-text textMenu text-grey" id="textMenu2">Form Order</p>'
        html += '</div>'
        html += '<div class="col-auto pb-2 text-cente ms-auto d-flex align-self-center">'
        html += '<button class="btn btn-sm btn-outline-primary shadow-none p-2 d-flex align-self-center me-1" onclick="loadData()"><i class="fa fa-refresh me-1"></i><span class="small-text">Refresh</span></button>'
        html += '<button class="btn btn-sm bg-primary text-white border border-primary shadow-none p-2 d-flex align-self-center" onclick="newOrder()"><i class="fa fa-plus me-1"></i><span class="text-white small-text">New Order</span></button>'
        html += '</div>'
        $('#headerOfView').html(html)
    }

    function changeMenu(index) {
        $('.border-menu-dashboard').removeClass('active')
        $('#btnMenu' + index).addClass('active')
        $('.textMenu').removeClass('fw-bolder').addClass('text-grey')
        $('#textMenu' + index).addClass('fw-bolder').removeClass('text-grey')
    }

    function menuDashoard() {
        var html = ''
        html += viewDashboard()
        $('#fieldOfView').html(html)
        chartDashboard()
    }

    function emptyViewShipment() {
        var html = ''
        html += emptyTextReturn('Please select Shipment Order')
        $('#fieldOfView').html(html)
    }

    function viewDashboard() {
        var html = ''
        html += '<div class="row">'
        // title
        html += '<div class="col-12 mb-3">'
        html += '<h1 class="m-0 fw-bolder">Dashboard</h1>'
        html += '</div>'
        // title
        // card
        //total order
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<p class="m-0 small fw-bolder">Total<br>Order</p>'
        html += '</div>'
        html += '<div class="col-6 text-end align-self-end">'
        html += '<p class="m-0 fw-bold">' + data_load.shipmentOrder.length + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // card
        // card
        // brand terbanyak in english
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<p class="m-0 small fw-bolder">Pending Shipments</p>'
        html += '</div>'
        html += '<div class="col-6 text-end align-self-end">'
        html += '<p class="m-0 fw-bold">' + data_load.shipmentOrder.length + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // card
        // card
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<p class="m-0 small fw-bolder">Delivery Shipments</p>'
        html += '</div>'
        html += '<div class="col-6 text-end align-self-end">'
        html += '<p class="m-0 fw-bold">' + data_load.shipmentOrder.length + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // card
        // card
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<p class="m-0 small fw-bolder">Total Package</p>'
        html += '</div>'
        html += '<div class="col-6 text-end align-self-end">'
        html += '<p class="m-0 fw-bold">' + data_load.shipmentOrder.length + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // card
        // chart
        html += '<div class="col-12 mt-3">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-12 text-center align-self-center mb-3">'
        html += `
            <input type="radio" class="btn-sm btn-check" name="options" id="option1" autocomplete="off" onclick="changePeriodOption('DAILY')">
            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option1">Daily</label>

            <input type="radio" class="btn-sm btn-check" name="options" id="option2" autocomplete="off" onclick="changePeriodOption('WEEKLY')" checked>
            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option2">Weekly</label>

            <input type="radio" class="btn-sm btn-check" name="options" id="option4" autocomplete="off" onclick="changePeriodOption('MONTHLY')">
            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option4">Monthly</label>
        `
        html += '</div>'
        html += '<div class="col-12" id="chartDashboard">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // chart
        html += '</div>'
        return html
    }

    function chartDashboard() {
        var options = {
            series: [{
                name: 'Done',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Process',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Waiting',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    borderRadius: 5,
                    borderRadiusApplication: 'end'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: ''
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chartDashboard"), options);
        chart.render();
    }

    function loadData() {
        data_good_stock = []
        $.ajax({
            url: "<?= api_url('loadPageShipmentOrder'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                gudangId: 13,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_load = response.data
                data_load.finishGoodStock.forEach(e => {
                    e.data.forEach(el => {
                        data_good_stock.push(el)
                    });
                });
                if (data_load.shipmentOrder.length) {
                    $('#fieldActiveOrder').removeAttr('hidden')
                    $('#textActiveOrder').html(data_load.shipmentOrder.length)
                } else {
                    $('#fieldActiveOrder').attr('hidden', true)
                }
                changeMenu(0)
                listOrder()
                menuDashoard()
            }
        })
    }

    function formatDateShort(date = new Date()) {
        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const day = date.getDate();
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        return `${day} ${month} ${year}`;
    }

    function listOrder() {
        var html = ''
        if (data_load.shipmentOrder.length == 0) {
            html += emptyTextReturn('Tidak Ada Data')
        } else {
            data_load.shipmentOrder.forEach(e => {
                html += '<div class="card shadow-none card-hoper mb-1 listOrderId" id="listOrderId' + e.id + '" onclick="chooseShipment(' + "'" + e.id + "'" + ',1)">'
                html += '<div class="card-body p-3">'
                html += '<div class="row">'
                html += '<div class="col pe-0">'
                html += '<p class="text-dark-grey m-0 fw-bolder small">#' + e.document_code + '</p>'
                html += '<p class="text-grey-small m-0 fw-bold super-small-text">'
                html += '<span class="me-2"><i class="fa fa-calendar me-1"></i>' + (e.date_start) + '</span>'
                html += '<span class="me-2"><i class="fa fa-truck me-1"></i>' + e.gudang_dest.name + '</span>'
                html += '<span class="me-2"><i class="fa fa-shopping-basket me-1"></i>' + e.shipment_order_details.length + '</span>'
                html += '</p>'
                html += '</div>'
                html += '<div class="col-auto align-self-center text-end">'
                html += '<span class="badge rounded-pill border border-orange text-orange p-2 super-small-text">Waiting</span>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            });
        }
        $('#listOrder').html(html)
    }

    function chooseShipment(id, type) {
        $('.listOrderId').removeClass('bg-light')
        $('#listOrderId' + id).addClass('bg-light')
        viewShipmentAll(id, type)
    }

    function newOrder() {
        changeMenu(2)
        var html = ''
        html += viewNewOrder()
        $('#fieldOfView').html(html)
        formNewOrder()
    }

    function editOrder(id) {
        changeMenu(2)
        var html = ''
        var data = data_load.shipmentOrder.find(x => x.id == id)
        html += viewNewOrder(data)
        $('#fieldOfView').html(html)
        formNewOrder(data)
    }

    function viewNewOrder(data = null) {
        var text = 'NEW ORDER'
        if (data) {
            text = 'EDIT ORDER #' + data.document_code
        }
        var html = ''
        html += `
        <div class="row">
            <div class="col-12 pb-3">
                <h1 class="m-0 fw-bolder">${text}</h1>
            </div>
            <div class="col-12">
                <div class="card shadow-sm mb-2">
                    <div class="card-header bg-light-dark-grey">
                        <p class="m-0 small-text text-light-dark">Order Form</p>
                    </div>
                    <div class="card-body" id="formNewOrder">
                    </div>
                </div>
            </div>
            <div class="col-8">
            </div>
        </div>
        `
        return html
    }

    function formNewOrder(data = null) {
        var document_code = ''
        var date = ''
        var destination = ''
        var notes = ''
        var id = ''
        if (data) {
            variableGantung.document_code = data.document_code
            date = data.date_start
            destination = data.gudang_dest.id
            notes = data.note
            id = data.id
        } else {
            variableGantung.document_code = createOrderCode()
            date = formatDate(new Date())
        }
        document_code = variableGantung.document_code
        var html = ''
        html += `
        <div class="row justify-content-between">
            <div class="col-4">
                <div class="mb-3">
                    <label for="orderID" class="form-label small-text fw-bolder">Order ID</label>
                    <input type="text" class="form-control form-control-sm" id="orderID" placeholder="Order ID" autocomplete="off" disabled value="${document_code}">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="orderDate" class="form-label small-text fw-bolder">Order Date</label>
                    <input type="text" class="form-control form-control-sm datepicker" id="orderDate" placeholder="Order Date" autocomplete="off" value="${date}">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="orderDestination" class="form-label small-text fw-bolder">Destination</label>
                    <select class="form-select form-select-sm" id="orderDestination" aria-label="Default select example">
                        <option value="" selected disabled>Select Destination</option>`
        data_load.shippingDestination.forEach(e => {
            e.data.forEach(el => {
                var selected = ''
                if (el.id == destination) {
                    selected = 'selected'
                }
                html += `<option value="${el.id}" ${selected}>${el.name}</option>`
            });
        })
        html += `</select>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label small-text fw-bolder">Items</label>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th class="small-text align-middle" >Item</th>
                                <th class="small-text align-middle" style="width: 20px;">Available<br>Warehouse</th>
                                <th class="small-text align-middle" style="width: 100px;">Stock<br>Year</th>
                                <th class="small-text align-middle" style="width: 100px;">Unit</th>
                                <th class="small-text align-middle" style="width: 100px;">QTY<br>Min</th>
                                <th class="small-text align-middle" style="width: 100px;">QTY<br>Max</th>
                                <th class="small-text align-middle" style="width: 10px;"></th>
                            </tr>
                        </thead>
                        <tbody id="tableRowItem">
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="small-text align-middle"></td>
                                <td class="small-text align-middle">
                                    <button class="btn btn-sm btn-primary shadow-none p-2 super-small-text" onclick="addRowItem()"><i class="fa fa-plus"></i></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="notes" class="form-label small-text fw-bolder">Notes</label>
                    <textarea class="form-control form-control-sm" id="notes" placeholder="Write Notes Here" autocomplete="off" rows="5">${notes}</textarea>
                </div>
            </div>
            <div class="col-auto text-end">
                <div class="mb-3">`
        if (id) {
            html += `<button class="btn btn-sm btn-outline-danger shadow-none p-2 small-text btnSimpan" onclick="hapusOrder(${id})" id="btnHapusOrder"><i class="fa fa-save me-2"></i> Hapus Order</button>`
        }
        html += `</div>
            </div>
            <div class="col-auto text-end">
                <div class="mb-3">
                    <button class="btn btn-sm btn-primary shadow-none p-2 small-text btnSimpan" onclick="saveNewOrder(${id})" id="btnSimpan"><i class="fa fa-save me-2"></i> Simpan</button>
                </div>
            </div>
        </div>
        `
        $('#formNewOrder').html(html)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        if (data) {
            data.shipment_order_details.forEach(e => {
                addRowItem(data.id, e.id)
                // $('#item_order' + indexAddItem).val(e.item_id).trigger('change')
                // $('#qty_min' + indexAddItem).val(e.qty_min)
                // $('#qty_max' + indexAddItem).val(e.qty_max)
            });
        } else {
            addRowItem()
        }
    }

    function hapusOrder(id) {
        var data = data_load.shipmentOrder.find(x => x.id == id)
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus data Order ' + data.document_code + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                variableInsert = deepCopy(resetVariableInsert())
                variableInsert.deletedId.shipment_order.push(id)
                data.shipment_order_details.forEach(a => {
                    variableInsert.deletedId.shipment_order_detail.push(a.id)
                });
                sendAllVariableInsert('delete')
            }
        })
    }

    function addRowItem(id = null, id_detail = null) {
        $('#tableRowItem').append(tableRowItem(indexAddItem, id, id_detail))
        $('.nominal').number(true, 2);
        $('#item_order' + indexAddItem).select2({
            closeOnSelect: true,
            width: '100%',
            dropdownCssClass: 'custom-dropdown border-top'
        })
        $('#stock_year' + indexAddItem).select2({
            closeOnSelect: true,
            width: '100%',
            dropdownCssClass: 'custom-dropdown border-top'
        })
        if (id) {
            var data = data_load.shipmentOrder.find(x => x.id == id)
            var data_detail = data.shipment_order_details.find(x => x.id == id_detail)
            $('#qty_min' + indexAddItem).val(data_detail.qty_min)
            $('#qty_max' + indexAddItem).val(data_detail.qty_max)
            $('#item_order' + indexAddItem).trigger('change')
        }
        indexAddItem++
    }

    function tableRowItem(index, id = null, id_detail = null) {
        if (id) {
            var data = data_load.shipmentOrder.find(x => x.id == id)
            var data_detail = data.shipment_order_details.find(x => x.id == id_detail)
        } else {
            var data = ''
            var data_detail = ''
        }
        var html = ''
        html += `
            <tr id="rowItem${index}">
                <td class="small-text align-middle bg-light-danger itemGroup${index}">
                    <select style="border:none;background-color:transparent" name="" id="item_order${index}" class="form-control form-control-sm selectpicker item_order" data-id="${index}" data-id_detail="${id_detail}" onchange="getAvailableWarehouse(${index})">
                        <option value="" selected disabled>Piih Item</option>`
        data_load.product.forEach(e => {
            var select = ''
            if (data_detail) {
                if (e.item_id == data_detail.item.id) {
                    select = 'selected'
                }
            }
            html += `<option value="${e.id}" ${select}>${e.code} - ${e.name}</option>`
        })
        html += `</select>
                </td>
                <td class="small-text align-middle bg-light-danger text-center availableWarehouse itemGroup${index}" id="availableWarehouse${index}"></td>
                <td class="small-text align-middle bg-light-danger stokYearGroup${index}">
                    <select style="border:none;background-color:transparent" name="" id="stock_year${index}" class="form-select form-select-sm selectpicker stock_year" data-id="${index}" data-id_detail="${id_detail}" onchange="changeColorItems(${index})">
                        <option value="" selected disabled>Piih Tahun</option>`
        data_load.stokYear.forEach(e => {
            var select = ''
            if (data_detail) {
                if (e.id == data_detail.stok_year.id) {
                    select = 'selected'
                }
            }
            html += `<option value="${e.id}" ${select}>${e.name}</option>`
        })
        html += `</select>
                </td>
                <td class="small-text align-middle bg-light-danger text-center unit itemGroup${index}" id="unit${index}"></td>
                <td class="small-text align-middle bg-light-danger qtyMinGroup${index}">
                    <input type="number" class="form-control form-control-sm text-end nominal qty_min" id="qty_min${index}" placeholder="0" autocomplete="off" style="border:none;background-color:transparent" onkeyup="changeColorItems(${index})">
                </td>
                <td class="small-text align-middle bg-light-danger qtyMaxGroup${index}">
                    <input type="number" class="form-control form-control-sm text-end nominal qty_max" id="qty_max${index}" placeholder="0" autocomplete="off" style="border:none;background-color:transparent" onkeyup="changeColorItems(${index})">
                </td>
                <td class="small-text align-middle bg-light-danger itemGroup${index}">
                    <button class="btn btn-sm btn-danger shadow-none p-2 super-small-text" onclick="deleteRowItem(${index},${id_detail})" data-id_detail="${id_detail}" id="btnDeleteItem${index}"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            `
        return html
    }

    function getAvailableWarehouse(index) {
        var id = $('#item_order' + index).val()
        var data = data_load.product.find(x => x.id == id)
        var checkStock = data_load.finishGoodStock.find(x => x.id == id)
        var iconCheckStock = '<i class="fa fa-times text-danger"></i>'
        if (checkStock) {
            iconCheckStock = `<i class="fa fa-check text-success"></i>`
        }
        $('#availableWarehouse' + index).html(iconCheckStock)
        var dataUnit = data_load.finishGoodItem.find(x => x.id == data.item_id)
        $('#unit' + index).html(dataUnit.unit.name)
        changeColorItems(index)
    }

    function changeColorItems(index) {
        var id = $('#item_order' + index).val()
        var stockYear = $('#stock_year' + index).val()
        var qtyMin = $('#qty_min' + index).val()
        var qtyMax = $('#qty_max' + index).val()
        if (id) {
            $('.itemGroup' + index).removeClass('bg-light-danger')
        } else {
            $('.itemGroup' + index).addClass('bg-light-danger')
        }
        if (stockYear) {
            $('.stokYearGroup' + index).removeClass('bg-light-danger')
        } else {
            $('.stokYearGroup' + index).addClass('bg-light-danger')
        }
        if (qtyMin) {
            $('.qtyMinGroup' + index).removeClass('bg-light-danger')
        } else {
            $('.qtyMinGroup' + index).addClass('bg-light-danger')
        }
        if (qtyMax) {
            $('.qtyMaxGroup' + index).removeClass('bg-light-danger')
        } else {
            $('.qtyMaxGroup' + index).addClass('bg-light-danger')
        }
    }

    function deleteRowItem(index, id_detail) {
        // console.log(id_detail)
        $('#rowItem' + index).remove()
        if (id_detail) {
            variableInsert.deletedId.shipment_order_detail.push(id_detail)
        }
    }

    function viewShipmentAll(id, typeData) {
        $('#modal').modal('hide')
        changeMenu(1)
        var html = ''
        if (typeData == 1) {
            var data = data_load.shipmentOrder.find(x => x.id == id)
        } else {
            var data = data_load.shipmentOrderActive.find(x => x.id == id)
        }
        html += viewShipmentContent(data)
        $('#fieldOfView').html(html)
        cardShipmentInformation(data)
    }

    function formatDateTime(date) {
        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const day = date.getDate();
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        const hours = date.getHours().toString().padStart(2, '0'); // Menambah nol di depan jika jam < 10
        const minutes = date.getMinutes().toString().padStart(2, '0'); // Menambah nol di depan jika menit < 10

        return `${day} ${month} ${year} ${hours}:${minutes}`;
    }

    function viewShipmentContent(data) {
        var html = ''
        html += `
        <div class="row justify-content-between">
            <div class="col-6 pb-3">
                <p class="m-0 small text-grey-small">Order Detail</p>
                <h1 class="m-0 fw-bolder">#${data.document_code}</h1>
            </div>
            <div class="col-6 align-self-end text-end pb-3">
                <button class="btn btn-sm btn-outline-dark shadow-none p-2 small-text" onclick="editOrder(${data.id})"><i class="fa fa-edit me-2"></i>Edit Order</button>
            </div>
            <div class="col-8">
                <div class="card shadow-sm mb-2">
                    <div class="card-header bg-light-dark-grey">
                        <p class="m-0 small-text text-light-dark">Detail Information</p>
                    </div>
                    <div class="card-body py-3">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="m-0 small-text text-grey-small">Order Date</p>
                                <p class="m-0 small fw-bolder">${formatDateTime(new Date(data.created_at))}</p>
                            </div>
                            <div class="col-auto">
                                <p class="m-0 small-text text-grey-small">Warehouse Origin</p>
                                <p class="m-0 small fw-bolder">${data.gudang_origin.name}</p>
                            </div>
                            <div class="col-auto">
                                <p class="m-0 small-text text-grey-small">Destination</p>
                                <p class="m-0 small fw-bolder">${data.gudang_dest.name}</p>
                            </div>
                            <div class="col-auto">
                                <p class="m-0 small-text text-grey-small">Notes</p>
                                <p class="m-0 small fw-bolder">${data.note}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm mb-2">
                    <div class="card-header bg-light-dark-grey">
                        <p class="m-0 small-text text-light-dark">Item Information</p>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th class="small-text align-middle">#</th>
                                    <th class="small-text align-middle">Alias</th>
                                    <th class="small-text align-middle">Item Name</th>
                                    <th class="small-text align-middle">Tahun Stok</th>
                                    <th class="small-text align-middle">QTY<br>Min</th>
                                    <th class="small-text align-middle">QTY<br>Max</th>
                                    <th class="small-text align-middle">QTY<br>Realization</th>
                                    <th class="small-text align-middle">Status</th>
                                </tr>
                            </thead>
                            <tbody>`
        var a = 1
        data.shipment_order_details.forEach(e => {
            html += `<tr>
                        <td class="small-text text-center align-middle p-2">${a++}</td>
                        <td class="small-text text-center align-middle p-2">${e.item.alias}</td>
                        <td class="small-text text-center align-middle p-2">${e.item.name}</td>
                        <td class="small-text text-center align-middle p-2">${e.stok_year.name}</td>
                        <td class="small-text text-center align-middle p-2">${e.qty_min}</td>
                        <td class="small-text text-center align-middle p-2">${e.qty_max}</td>
                        <td class="small-text text-center align-middle p-2">-</td>
                        <td class="small-text text-center align-middle p-2">PROCESS</td>
                    </tr>`
        });
        html += `</tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 ps-0">
                <div class="card shadow-sm mb-2">
                    <div class="card-header bg-light-dark-grey">
                        <p class="m-0 small-text text-light-dark">Shipment Information</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control small-text" placeholder="Cari Kode Shipping" id="search_kode_brand" autocomplete="off">
                            </div>
                            <div class="col-12" id="cardShipmentInformation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
            </div>
        </div>
        `
        return html
    }

    function cardShipmentInformation() {
        var html = ''
        for (let i = 0; i < 2; i++) {
            html += '<div class="card shadow-sm mb-2">'
            html += '<div class="card-body p-0">'
            //content
            html += '<div class="row p-3 pb-0">'
            html += '<div class="col-auto d-flex text-end align-self-center">'
            html += '<div class="circle-icon bg-white border border-warning text-warning small-text"><i class="fa fa-truck small"></i></div>'
            html += '</div>'
            html += '<div class="col-auto ps-0 align-self-center">'
            html += '<p class="m-0 super-small-text fw-bold text-grey lh-1">10 Jan 2025 08:00</p>'
            html += '<p class="m-0 small fw-bolder">#SHIPPING001</p>'
            html += '</div>'
            html += '</div>'
            html += '<div class="row">'
            html += '<div class="col-12">'
            html += '<hr>'
            html += '</div>'
            html += '</div>'
            html += '<div class="row p-3 pt-0">'
            html += '<div class="col-12">'
            // detail data
            // detail data
            html += '</div>'
            html += '</div>'
            //content
            html += '</div>'
            html += '</div>'
        }
        $('#cardShipmentInformation').html(html)
    }

    function createCodeId(x) {
        var date = (new Date).getTime() + '' + x
        return date;
    }

    function saveNewOrder(id_order = null) {
        var time = currentDateTime()
        if (id_order) {
            var id = id_order
        } else {
            var id = createCodeId(0)
        }
        var epoch = new Date().getTime()
        variableInsert.shipment_order.push({
            id: id,
            gudang_id_origin: 13,
            gudang_id_dest: $('#orderDestination').val(),
            date_start: $('#orderDate').val(),
            date_end: $('#orderDate').val(),
            note: $('#notes').val(),
            // created_at: time,
            updated_at: time,
            is_required: 1,
            sync_key: epoch,
            document_code: variableGantung.document_code,
            employee_id: user_id,
        })
        if (!id_order) {
            variableInsert.shipment_order[0].created_at = time
        }
        var a = 0
        var itemOrder = $('.item_order').map(function() {
            return $(this).val()
        }).get()
        var id_detail_order = $('.item_order').map(function() {
            return $(this).data('id_detail')
        }).get()
        var qty_min = $('.qty_min').map(function() {
            return $(this).val()
        }).get()
        var qty_max = $('.qty_max').map(function() {
            return $(this).val()
        }).get()
        var stock_year = $('.stock_year').map(function() {
            return $(this).val()
        }).get()
        for (let i = 0; i < itemOrder.length; i++) {
            if (itemOrder[i]) {
                var dataProduct = data_load.product.find(x => x.id == itemOrder[i])
                if (id_detail_order[i]) {
                    var id_detail = id_detail_order[i]
                } else {
                    var id_detail = createCodeId(i)
                }
                variableInsert.shipment_order_detail.push({
                    id: id_detail,
                    shipment_order_id: id,
                    item_id: dataProduct.item_id,
                    qty_min: qty_min[i],
                    qty_max: qty_max[i],
                    // created_at: time,
                    updated_at: time,
                    sync_key: epoch,
                    stok_year_id: stock_year[i],
                })
                if (!id_detail_order[i]) {
                    variableInsert.shipment_order_detail[i].created_at = time
                }
                a++
            }
        }
        // console.log(variableInsert)
        sendAllVariableInsert('add')
    }

    function sendAllVariableInsert(status) {
        var data = deepCopy(variableInsert)
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setShipmentOrder'); ?>'
        if (data.shipment_order.length || data.shipment_order_detail.length || data.deletedId.shipment_order.length || data.deletedId.shipment_order_detail.length) {
            kelolaDataSaveAuto(data, type, url, button)
        }
    }

    function kelolaDataSaveAuto(data, type, url, button) {
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
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Simpan')
            },
            beforeSend: function() {
                $(button).prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...')
            },
            success: function(response) {
                variableInsert = deepCopy(resetVariableInsert())
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Simpan')
                loadData()
            }
        });
    }

    function viewActiveOrder() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pending Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 table-responsive">'
        html_body += '<table class="table table-sm table-bordered w-100" id="tableActiveOrder">'
        html_body += '<thead>'
        html_body += '<tr>'
        html_body += '<th class="small-text text-center">No</th>'
        html_body += '<th class="small-text text-center">Order ID</th>'
        html_body += '<th class="small-text text-center">Order Date</th>'
        html_body += '<th class="small-text text-center">Destination</th>'
        html_body += '<th class="small-text text-center">Items</th>'
        html_body += '<th class="small-text text-center">Status</th>'
        html_body += '<th class="small-text text-center"></th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody>'
        var a = 1
        data_load.shipmentOrderActive.forEach(e => {
            html_body += '<tr>'
            html_body += '<td class="small-text text-center">' + a++ + '</td>'
            html_body += '<td class="small-text text-center">' + e.document_code + '</td>'
            html_body += '<td class="small-text text-center">' + e.date_start + '</td>'
            html_body += '<td class="small-text text-center">' + e.gudang_dest.name + '</td>'
            html_body += '<td class="small-text text-center">' + e.shipment_order_details.length + '</td>'
            html_body += '<td class="small-text text-center">Waiting</td>'
            html_body += '<td class="small-text text-center"><button class="btn btn-sm btn-primary shadow-none super-small-text p-1" onclick="viewShipmentAll(' + "'" + e.id + "'" + ',0)">View <i class="ms-2 fa fa-chevron-right"></i></button></td>'
            html_body += '</tr>'
        });
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        $('#tableActiveOrder').DataTable({
            "paging": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });
    }

    function searching(id_search_form, class_text_search, id_card_search) {
        var value = $('#' + id_search_form).val().toLowerCase();
        var cards = $('.' + class_text_search).map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.' + class_text_search).map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#' + id_card_search + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#' + id_card_search + array_arranged[i]).removeClass('d-none')
        }
    }

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }
</script>