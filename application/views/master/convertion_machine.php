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

    .text-light-dark {
        color: #a6aabb !important;
    }

    .nav-link {
        color: #61677A;
        border-color: #27374D #27374D #27374D;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: white !important;
        background-color: #27374D;
        border-color: #27374D #27374D #27374D;
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        background: none;
        border-top-left-radius: 0.35rem;
        border-top-right-radius: 0.35rem;
        border-top: 1px solid #27374D;
        border-right: 1px solid #27374D;
        border-left: 1px solid #27374D;
        border-bottom: 1px none rgba(229, 124, 35, 0);
    }

    th {
        padding: 20px;
    }

    .bg-light-success {
        background-color: #e9f4e0;
        border-color: #8FCE00;
    }

    .bg-light-danger {
        background-color: #e8d6d6;
    }
</style>
<style type="text/css">
    .progress-bulat {
        width: 90px;
        height: 90px;
        background: none;
        position: relative;
    }

    .progress-bulat::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 10px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress-bulat>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress-bulat .progress-left {
        left: 0;
    }

    .progress-bulat .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 10px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress-bulat .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress-bulat .progress-right {
        right: 0;
    }

    .progress-bulat .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress-bulat .progress-value {
        position: absolute;
        top: 0;
        left: 0;
    }

    .litepicker {
        z-index: 1000000 !important;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .offcanvas.show {
        transform: none;
        z-index: 100000;
    }

    .selected {
        background-color: #F8F0E5;
    }

    .highlighted-date {
        background-color: #f0ad4e;
    }

    .bg-dark-grey {
        color: white;
        background-color: #5C5470 !important;
    }

    .circle-shape {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    .bg-light-dongker {
        background-color: #7d8794;
    }

    .bg-light-primary {
        background-color: #f7f9fc;
    }

    /* .dateInput .day:not(.disabled) {
        background-color: #84b0e2;
        border-radius: 0px;
        color: white;
    }

    .datepicker table tr td.active {
        color: white !important;
    } */
</style>
<style>
    /* ANIMATION */
    .shake-bottom {
        -webkit-animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
        animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
    }

    @-webkit-keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    @keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .list-group-item {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .list-group .list-group-item {
        background-color: transparent !important;
        font-size: 12px;
        padding-right: 0px;
    }

    .list-material-group {
        padding-left: 16px;
    }

    .card-product {
        background-color: transparent !important;
        cursor: pointer;
    }

    .card-product:hover {
        background-color: #9AC5F4 !important;
        color: white !important;
    }

    .card-product:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }

    .card-add-product:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }

    .card-added-product:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }

    .card-waste {
        background-color: transparent !important;
        cursor: pointer;
    }

    .card-waste:hover {
        background-color: #9AC5F4 !important;
        color: white !important;
    }

    .card-waste:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }

    .card-waste-group:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }


    .card-material-group:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }

    .card-waste-group:active,
    .clicked {
        background-color: #27374D !important;
        color: white;
        border-color: #27374D !important;
    }

    .is-select-picker {
        background-color: white !important;
        border: 1px solid #c5ccd6 !important;
        text-align: left !important;
    }

    .is-select-picker {
        border-radius: 20px !important;
        width: 200px !important;
        padding-left: 30px !important;
        padding: 10px !important;
        padding-right: 45px !important;
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
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<main>
    <div class="row">
        <!-- LEFT PANEL -->
        <div class="col-2 bg-left-panel full-height border-end">
            <div class="row">
                <div class="col align-self-center p-5">
                    <h3 class="text-dark-grey m-0">
                        <b class="small-text">Convertion Machine</b>
                        <p class="h4 fw-bolder m-0" style="font-weight: 900 !important;" id="machineName">-</p>
                    </h3>
                    <p class="super-small-text m-0 text-light-dark-grey">Pengaturan Material Group dan Material Didalamnya</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0 ps-4 pb-3 pe-4">
                    <div class="list-material-group">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search Product" id="search_product" autocomplete="off" onkeyup="onSearch('#search_product','.textProduct','#btnProduct')">
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 ps-4 pe-4">
                    <div class="list-material-group">
                        <button class="btn btn-outline-primary w-100 mb-2" style="border-style: dotted;border-width:2px;" onclick="getItemProduct()"><i class="fa fa-plus me-2"></i>Tambah Produk</button>
                    </div>
                </div>
                <div class="col-12 p-2 ps-4 pb-2 pe-4" style="max-height: 400px;overflow-x: hidden;overflow-y: auto;">
                    <div class="list-material-group" id="listProduct">
                    </div>
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-10 bg-white p-5" id="kerangkaProductDetail">
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="true">
    <div class="offcanvas-header p-5" id="canvasHeader">
    </div>
    <div class="offcanvas-body p-5" id="canvasBody">
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script>
    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function notFoundReturn(text, functionButton, textButton, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p><button class="btn btn-sm btn-primary mt-3" onclick="' + functionButton + '()"><i class="fa fa-plus me-2"></i>Tambah ' + textButton + '</button></div></div></div></div>'
        return html
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
        firstKlik = false
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var machineId = '<?= $machine_id ?>'
    var data_master
    var data_material
    var data_machine_conversion
    var data_item
    var data_unit
    var data_waste_group
    var data_add_waste_group = []
    var indexLine = 0
    var productId
    var wasteGroupId
    var dataMaterialGroup
    var dataWaste
    var dataProduct
    var dataSteps
    var dataInsert = {
        conversionMachine: [],
        conversionMachineProduct: [],
        conversionMachineMaterialGroup: [],
        conversionMachineWaste: [],
        deletedId: {
            conversionMachine: [],
            conversionMachineProduct: [],
            conversionMachineMaterial: [],
            conversionMachineWaste: []
        }
    }
    var firstKlik = false
    var variableProduct = []

    $(document).ready(function() {
        $('#kerangkaProductDetail').html(emptyReturn('Pilih Produk Terlebih Dahulu'))
        loadData()
    })

    function loadData(variable = null) {
        dataInsert = {
            conversionMachine: [],
            conversionMachineProduct: [],
            conversionMachineMaterialGroup: [],
            conversionMachineWaste: [],
            deletedId: {
                conversionMachine: [],
                conversionMachineProduct: [],
                conversionMachineMaterial: [],
                conversionMachineWaste: []
            }
        }
        var data = {
            machineId: machineId,
        }
        var url = "<?= api_produksi('loadPageMachineMaterialConversion'); ?>"
        getData(data, url, variable)
    }

    function getData(data, url, variable) {
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
                    text: 'Tidak Bisa Mendapatkan Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_master = response.data
                data_machine_conversion = data_master.machineConversion[0]
                dataSteps = data_master.machineStep
                data_unit = data_master.unit
                $('#machineName').html(data_master.currentMachine.name)
                getOutItem(variable)
            }
        })
    }

    function getOutItem(variable) {
        $.ajax({
            url: "<?= api_produksi('getItemOut'); ?>",
            method: "GET",
            dataType: 'JSON',
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
                data_item = response.data.itemOut
                getMaterialGroup(variable)
            }
        })
    }

    function getMaterialGroup(variable) {
        if (!data_material) {
            $.ajax({
                url: "<?= api_produksi('getMaterialGroup'); ?>",
                method: "GET",
                dataType: 'JSON',
                error: function(xhr) {
                    showOverlay('hide')
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Tidak Bisa Mendapatkan Data'
                    });
                },
                beforeSend: function() {
                    showOverlay('show')
                },
                success: function(response) {
                    showOverlay('hide')
                    data_material = response.data.materialGroup
                    listProduct(variable)
                }
            })
        } else {
            listProduct(variable)
        }
    }

    function listProduct(variable) {
        var html = ''
        if (data_machine_conversion) {
            data_machine_conversion.conversion_machine_products.forEach(e => {
                html += '<div class="card shadow-none mb-2 small-text card-product" id="btnProduct' + e.id + '" onclick="chooseProduct(' + e.id + ')">'
                html += '<div class="card-body p-3">'
                html += '<div class="row">'
                html += '<div class="col align-slef-center">'
                html += '<p class="m-0 super-small-text text-grey textProduct" data-id="' + e.id + '">' + e.item_product.code + '</p>'
                html += '<p class="m-0"><b class="textProduct" data-id="' + e.id + '">' + e.item_product.alias + '</b></p>'
                html += '</div>'
                html += '<div class="col-auto align-self-center">'
                html += '<span class="fa fa-chevron-right"></span>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            });
        }
        $('#listProduct').html(html)
        onSearch('#search_product', '.textProduct', '#btnProduct')
        if (variable == 'conversionMachineMaterialGroup') {
            afterSaveMaterialGroup()
        } else if (variable == 'conversionMachineWaste') {
            afterSaveWasteGroup()
        } else if (variable == 'conversionMachineProduct') {
            afterSaveMachineProduct()
        }
    }

    function chooseProduct(id) {
        productId = id
        wasteGroupId = ''
        var data = data_machine_conversion.conversion_machine_products.find((v, k) => {
            if (v.id == id) return true
        })
        if (data) {
            dataProduct = data
            dataMaterialGroup = data.conversion_machine_material_groups
            dataWaste = data.conversion_machine_wastes
            buttonProduct(id)
            kerangkaProductDetail(data)
        } else {
            $('#kerangkaProductDetail').html(emptyReturn('Pilih Produk Terlebih Dahulu'))
        }
    }

    function buttonProduct(id) {
        $('.card-product').removeClass('clicked')
        $('#btnProduct' + id).addClass('clicked')
    }



    function findNullThings(index) {
        if (index) {

        } else {

        }
    }

    function kerangkaProductDetail(data) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="m-0 small"><b>Product Material</b></p>'
        html += '<h1 class="m-0 fw-bolder">' + data.item_product.name + '</h1>'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<div class="row ps-2 pe-2 pb-2 mt-5">'
        html += '<div class="col-auto statusLine small-text pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="chooseStatusLine(0)" id="colStatusLine0"><b>MATERIAL GROUP</b></div>'
        html += '<div class="col-auto statusLine small-text pb-2 align-self-center text-grey" style="cursor:pointer" onclick="chooseStatusLine(1)" id="colStatusLine1"><b>WASTE</b></div>'
        html += '<div class="col-auto statusLine small-text pb-2 align-self-center text-grey" style="cursor:pointer" onclick="chooseStatusLine(2)" id="colStatusLine2"><b>OPTION</b></div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 mt-3" id="isiLine">'
        // isi

        // isi
        html += '</div>'
        html += '</div>'
        $('#kerangkaProductDetail').html(html)
        statusLine()
    }

    function chooseStatusLine(e) {
        indexLine = e
        statusLine()
    }

    function statusLine() {
        $('.statusLine').removeClass('fw-bold filter-border').addClass('text-grey')
        $('#colStatusLine' + indexLine).addClass('fw-bold filter-border').removeClass('text-grey')
        if (indexLine == 0) {
            templateMaterialGroup()
        } else if (indexLine == 1) {
            templateWaste()
        } else {
            getItemOutWIthId()
        }
    }

    function getItemOutWIthId() {
        var data = {}

        if (dataProduct.item_product.product_id) {
            data = {
                'productId': dataProduct.item_product.product_id
            }
        } else {
            data = {
                'productGroupId': dataProduct.item_product.product_group_id
            }
        }
        $.ajax({
            url: "<?= api_produksi('getItemOut'); ?>",
            data: data,
            method: "GET",
            dataType: 'JSON',
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
                var data_item_load = response.data.itemOut
                templateOption(data_item_load)
            }
        })
    }

    function templateOption(data_item_load) {
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-2 fw-bolder align-self-center">Select Unit</div>'
        html += '<div class="col-2 fw-bolder align-self-center">'
        html += '<select class="form-control w-100" id="selectUnitEdit" title="Pilih Unit" onchange="changeUnit()">'
        html += '<option value="">Pilih Unit</option>'
        data_unit.forEach(e => {
            var select = ''
            if (e.id == dataProduct.unit.id) {
                select = 'selected'
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'
        html += '<div class="col-1 p-0 fw-bolder">'
        html += '<button class="btn btn-sm btn-success" hidden id="btnSaveProduct" onclick="saveUnit()"><i class="fa fa-save"></i></button>'
        html += '</div>'
        html += '</div>'

        html += '<div class="row p-2">'
        html += '<div class="col-2 fw-bolder align-self-center">Select Steps</div>'
        html += '<div class="col-2 fw-bolder align-self-center">'
        html += '<select class="form-control w-100" id="selectStepsEdit" title="Pilih Steps" onchange="changeSteps()">'
        html += '<option value="">Pilih Steps</option>'
        dataSteps.forEach(e => {
            var select = ''
            if (e.id == dataProduct.machine_step_id) {
                select = 'selected'
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'
        html += '<div class="col-1 p-0 fw-bolder">'
        html += '<button class="btn btn-sm btn-success" hidden id="btnSaveSteps" onclick="saveSteps()"><i class="fa fa-save"></i></button>'
        html += '</div>'
        html += '</div>'

        html += '<div class="row p-2">'
        html += '<div class="col-2 fw-bolder align-self-center">Select Final Product</div>'
        html += '<div class="col-2 fw-bolder align-self-center">'
        html += '<select class="form-control w-100" id="selectFinalEdit" title="Pilih Final Product" onchange="changeFinalProduct()">'
        html += '<option value="">Pilih Final Product</option>'
        data_item_load.forEach(e => {
            var select = ''
            if (e.id == dataProduct.item_id_product_final) {
                select = 'selected'
            }
            html += '<option class="super-small-text" value="' + e.id + '" ' + select + '>' + e.code + ' - ' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'
        html += '<div class="col-1 p-0 fw-bolder align-self-center">'
        html += '<button class="btn btn-sm btn-success" hidden id="btnSaveFinal" onclick="saveFinalProduct()"><i class="fa fa-save"></i></button>'
        html += '</div>'
        html += '</div>'

        html += '<div class="row p-2">'
        html += '<div class="col-2 fw-bolder align-self-center">Delete Product</div>'
        html += '<div class="col-3 fw-bolder">'
        html += '<button class="btn btn-danger" onclick="deleteProduct()">Delete This Product</button>'
        html += '</div>'
        html += '</div>'
        $('#isiLine').html(html)
        $('#selectUnitEdit').select2({
            closeOnSelect: true,
            width: '100%',
        })
        $('#selectStepsEdit').select2({
            closeOnSelect: true,
            width: '100%',
        })
        $('#selectFinalEdit').select2({
            closeOnSelect: true,
            width: '100%',
        })
    }

    function changeUnit() {
        var unit = $('#selectUnitEdit').val()
        if (dataProduct.unit.id != unit) {
            $('#btnSaveProduct').removeAttr('hidden', true)
        } else {
            $('#btnSaveProduct').attr('hidden', true)
        }
    }

    function changeSteps() {
        var id = $('#selectStepsEdit').val()
        if (dataProduct.machine_step_id != id) {
            $('#btnSaveSteps').removeAttr('hidden', true)
        } else {
            $('#btnSaveSteps').attr('hidden', true)
        }
    }

    function changeFinalProduct() {
        var id = $('#selectFinalEdit').val()
        if (dataProduct.item_id_product_final != id) {
            $('#btnSaveFinal').removeAttr('hidden', true)
        } else {
            $('#btnSaveFinal').attr('hidden', true)
        }
    }

    function saveUnit() {
        var data = [{
            id: dataProduct.id,
            unit_id: $('#selectUnitEdit').val()
        }]
        arrangeVariable('conversionMachineProduct', data)
    }

    function saveSteps() {
        var data = [{
            id: dataProduct.id,
            machine_step_id: $('#selectStepsEdit').val()
        }]
        arrangeVariable('conversionMachineProduct', data)
    }

    function saveFinalProduct() {
        var id = $('#selectFinalEdit').val()
        var data = [{
            id: dataProduct.id,
            item_id_product_final: id
        }]
        arrangeVariable('conversionMachineProduct', data)

    }

    function deleteProduct(id = null, idProduct = null) {
        if (!id) {
            id = dataProduct.id
            var name = dataProduct.item_product.alias
        } else {
            var dataMaster = data_item.find((v, k) => {
                if (v.id == idProduct) return true
            })
            var name = dataMaster.alias
        }
        var data = {
            deletedId: {
                conversionMachineProduct: [id]
            }
        }
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Produk ' + name + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanData(data, 'conversionMachineProduct')
            }
        })
    }

    function templateMaterialGroup() {
        var data = dataMaterialGroup
        if (data) {
            $('#isiLine').html(materialGroup(data))
        } else {
            $('#isiLine').html(notFoundReturn('Data Belum Tersedia', 'addMaterialGroup', 'Material Group'))
        }
    }

    function materialGroup(data) {
        var html = ''
        if (indexLine == 0) {
            html += '<button class="btn btn-sm btn-primary float-end mb-3" onclick="addMaterialGroup()"><i class="fa fa-plus me-2"></i>Manage Material Group</button>'
        }
        html += '<table class="table table-hover mt-3 w-100">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle small-text">#</th>'
        html += '<th class="align-middle small-text">Name</th>'
        html += '<th class="align-middle small-text">Material Default</th>'
        html += '<th class="align-middle small-text">Main<br>Material</th>'
        html += '<th class="align-middle small-text">Unit</th>'
        html += '<th class="align-middle small-text">Height</th>'
        html += '<th class="align-middle small-text">Length</th>'
        html += '<th class="align-middle small-text">Weight</th>'
        html += '<th class="align-middle small-text">DD</th>'
        html += '<th class="align-middle small-text">DL</th>'
        html += '<th class="align-middle small-text">Total Items</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        var a = 1
        data.forEach(e => {
            html += '<tr>'
            html += '<td class="align-middle small text-center">' + a++ + '</td>'
            html += '<td class="align-middle small text-center"><b>' + e.material_group.name + '</b></td>'
            if (e.material_group.item_id_default) {
                var dataDefaultItems = e.material_group.items.find((v, k) => {
                    if (v.id == e.material_group.item_id_default) return true
                })
                var defaultItemName = dataDefaultItems.name
            } else {
                var defaultItemName = '<span class="small-text"><i>Belum Disetting </i><i class="fa fa-warning text-warning"></i></span>'
            }
            html += '<td class="align-middle small">' + defaultItemName + '</td>'
            var isMain = ''
            if (e.is_material_main) {
                isMain = '<i class="fa fa-check text-success"></i>'
            }
            html += '<td class="align-middle small text-center">' + isMain + '</td>'
            var namaUnit = '-'
            if (e.unit) {
                e.unit.name
            }
            html += '<td class="align-middle small text-center">' + namaUnit + '</td>'
            if (!e.material_group.height) {
                e.material_group.height = '-'
            }
            if (!e.material_group['length']) {
                e.material_group['length'] = '-'
            }
            if (!e.material_group.weight) {
                e.material_group.weight = '-'
            }
            if (!e.material_group.dd) {
                e.material_group.dd = '-'
            }
            if (!e.material_group.dl) {
                e.material_group.dl = '-'
            }
            html += '<td class="align-middle small text-center">' + e.material_group.height + '</td>'
            html += '<td class="align-middle small text-center">' + e.material_group['length'] + '</td>'
            html += '<td class="align-middle small text-center">' + e.material_group.weight + '</td>'
            html += '<td class="align-middle small text-center">' + e.material_group.dd + '</td>'
            html += '<td class="align-middle small text-center">' + e.material_group.dl + '</td>'
            html += '<td class="align-middle small text-center"><span class="badge bg-primary fe-bolder">' + e.material_group.items.length + '</span></td>'
            html += '</tr>'
        });
        html += '</tbody>'
        return html
    }

    function templateWaste() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-3">'
        html += '<button class="btn btn-outline-primary w-100 mb-2" style="border-style: dotted;border-width:2px;" onclick="getWasteGroup()"><i class="fa fa-plus me-2"></i><span id="textLine"></span></button>'
        html += '<div id="isiLineWaste">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-9">'
        html += '<div class="card shadow-none" style="height:500px;">'
        html += '<div class="card-body" id="kerangkaAllDetail">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#isiLine').html(html)
        $('#kerangkaAllDetail').html(emptyReturn('Pilih Waste Group Terlebih Dahulu'))
        waste()
    }

    function waste() {
        $('#textLine').html('Kelola Waste')
        var html = ''
        if (dataWaste) {
            dataWaste.forEach(e => {
                html += '<div class="card shadow-sm card-waste mb-2" id="btnWaste' + e.id + '" onclick="chooseWasteGroup(' + e.id + ')">'
                // html += '<span class="position-absolute top-50 start-100 translate-middle p-2 bg-warning border border-light rounded-circle" style="height: 40px;width: 40px;text-align: center;"><i class="fa fa-pencil text-white"></i></span>'
                html += '<div class="card-body">'
                html += '<div class="row">'
                html += '<div class="col-12">'
                html += '<p class="fw-bolder m-0">' + e.waste_groups.name + '<span class="badge bg-primary ms-2" style="vertical-align: text-bottom !important;">' + e.waste_groups.waste_group_details.length + '</span></p>'
                html += '<div class="row">'
                html += '<div class="col">'
                html += '<p class="m-0 small-text">Ratio Total : <b>' + e.waste_groups.ratio_total + '</b></p>'
                html += '</div>'
                html += '<div class="col border-start">'
                html += '<p class="m-0 small-text">Unit : <b>' + e.waste_groups.unit.name + '</b></p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
        }
        $('#isiLineWaste').html(html)
        if (wasteGroupId) {
            chooseWasteGroup(wasteGroupId)
        }
    }

    function chooseWasteGroup(id) {
        wasteGroupId = id
        var data = dataWaste.find((v, k) => {
            if (v.id == id) return true
        })
        buttonWaste(id)
        kerangkaAllDetail(data)
    }

    function buttonWaste(id) {
        $('.card-waste').removeClass('clicked')
        $('#btnWaste' + id).addClass('clicked')
    }

    function kerangkaAllDetail(data) {
        var dataWaste = data.waste_groups.waste_group_details
        $('#kerangkaAllDetail').html(materialGroup(dataWaste))
    }


    function getWasteGroup(id = null) {
        $.ajax({
            url: "<?= api_produksi('getWasteGroup'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                machineId: machineId,
                conversionMachineProductId: productId
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
                data_waste_group = response.data.wasteGroup
                addWasteGroup()
            }
        })
    }

    function manageWasteGroup(data) {
        // productId
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Manage Waste Group</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'
        // informasi
        html_body += '<div class="col-12 border-bottom p-3 bg-light">'
        html_body += '<p class="m-0 small"><b>Product Material</b></p>'
        html_body += '<h1 class="m-0 fw-bolder">Armour Black Filter FEO - Stick</h1>'
        html_body += '</div>'
        // informasi
        html_body += '<div class="col-4">'
        // list waste group
        html_body += '<div class="row">'
        html_body += '<div class="col-12 p-3">'
        // list jika ada data
        html_body += '<p class="m-0 small-text fw-bolder">Selected Waste Group</p>'
        html_body += '<div class="m-0 pe-2 mt-3" style="height: 150px;overflow-x: hidden;overflow-y: auto;" id="listSelectedWasteGroup">'
        html_body += '</div>'
        // list jika ada data
        html_body += '</div>'
        html_body += '<div class="col-12 border-top p-0">'
        // list jika ada data
        html_body += '<div class="p-3">'
        html_body += '<p class="m-0 small-text fw-bolder">All Waste Group</p>'
        html_body += '</div>'
        html_body += '<input type="text" class="form-control" placeholder="Search" id="search_nama" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">'
        html_body += '<div class="m-0" style="height: 150px;overflow-x: hidden;overflow-y: auto;" id="listWasteGroup">'
        html_body += '</div>'
        // list jika ada data
        html_body += '</div>'
        html_body += '</div>'
        // list waste group
        html_body += '</div>'
        html_body += '<div class="col-8 p-4 border-start" id="kerangkaSelectedWasteGroup">'
        // kerangkaSelectedWasteGroup
        // kerangkaSelectedWasteGroup
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        listSelectedWasteGroup()
        listWasteGroup()
        kerangkaSelectedWasteGroup()
    }

    function kerangkaSelectedWasteGroup() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="m-0 small">Afval Pendek</p>'
        html += '<p class="m-0 fw-bolder h1">Afval Pendek Ablfdf</p>'
        html += '</div>'
        html += '<div class="col-12 pt-3">'
        html += '<div class="card shadow-none mb-3">'
        html += '<div class="card-body">'
        html += '<p class="small-text fw-bolder">Detail Information</p>'
        html += '<div class="row">'
        html += '<div class="col-4 align-self-center"><p class="m-0 small-text">Ratio Total</p></div>'
        html += '<div class="col-8 align-self-center"><input class="form-control form-control-sm"></div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<p class="small-text fw-bolder">Material Group</p>'
        html += '<div id="listSelectedMatrialGroup">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#kerangkaSelectedWasteGroup').html(html)
    }

    function listSelectedMatrialGroup() {
        var html = ''
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-body">'
        html += '</div>'
        html += '</div>'
        $('#listSelectedMatrialGroup').html(html)
    }

    function getItemProduct() {
        if (!data_item) {
            // $.ajax({
            //     url: "<?= api_produksi('getItemOut'); ?>",
            //     method: "GET",
            //     dataType: 'JSON',
            //     error: function(xhr) {
            //         showOverlay('hide')
            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Oops...',
            //             text: 'Error Data'
            //         });
            //     },
            //     beforeSend: function() {
            //         showOverlay('show')
            //     },
            //     success: function(response) {
            //         showOverlay('hide')
            //         data_item = response.data.itemOut
            //         modalItemProduct()
            //     }
            // })
        } else {
            modalItemProduct()
        }
    }

    function modalItemProduct() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Tambah Produk</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'
        html_body += '<div class="col-2 p-0 border-end">'
        html_body += '<div class="p-3">'
        html_body += '<p class="m-0 small-text fw-bolder">List Machine Steps</p>'
        html_body += '</div>'
        html_body += '<input type="text" class="form-control" placeholder="Cari Machine Steps" id="search_list_machine_steps" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;" onkeyup="onSearch(' + "'#search_list_machine_steps'" + ',' + "'.textAddMachineSteps'" + ',' + "'#btnAddMachineSteps'" + ')">'
        html_body += '<div class="m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;" id="listMachineSteps">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 p-5" id="detailItemOut">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        $('#detailItemOut').html(emptyReturn('Pilih Produk Terlebih Dahulu'))
        listMachineSteps()
    }

    function listMachineSteps() {
        var html = ''
        dataSteps.forEach(e => {
            html += '<div class="card shadow-none border-end-0 border-start-0 card-hoper pointer card-add-product" style="border-radius:0px;" id="btnAddMachineSteps' + e.id + '" onclick="detailMachineSteps(' + e.id + ')">'
            html += '<div class="card-body p-3">'
            html += '<div class="row">'
            html += '<div class="col-10 align-self-center">'
            html += '<p class="m-0 small-text fw-bolder textAddMachineSteps" data-id="' + e.id + '">' + e.name + '</p>'
            html += '</div>'
            html += '<div class="col-2 text-center align-self-center">'
            html += '<i class="fa fa-chevron-right text-grey"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        // data_item.forEach(e => {
        //     var ada = false
        //     if (data_machine_conversion) {
        //         data_machine_conversion.conversion_machine_products.forEach(el => {
        //             if (e.id == el.item_product.id) {
        //                 ada = true
        //             }
        //         });
        //     }
        //     if (!ada) {
        //         html += '<div class="card shadow-none border-end-0 border-start-0 card-hoper pointer card-add-product" style="border-radius:0px;" id="btnAddProduct' + e.id + '" onclick="detailItemOut(' + e.id + ')">'
        //         html += '<div class="card-body p-3">'
        //         html += '<div class="row">'
        //         html += '<div class="col-10">'
        //         html += '<p class="m-0 super-small-text fw-bolder textAddProduct" data-id="' + e.id + '">' + e.alias + '</p>'
        //         html += '<p class="m-0 small-text fw-bold textAddProduct" data-id="' + e.id + '">' + e.name + '</p>'
        //         html += '</div>'
        //         html += '<div class="col-2 text-center align-self-center">'
        //         html += '<i class="fa fa-chevron-right text-grey"></i>'
        //         html += '</div>'
        //         html += '</div>'
        //         html += '</div>'
        //         html += '</div>'
        //     }
        // })
        $('#listMachineSteps').html(html)
    }

    function detailMachineSteps(id) {
        if (variableProduct.length) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Tersimpan',
                text: 'Simpan data terlebih dahulu sebelum pindah ke Step Lainnya'
            });
        } else {
            doDetailMachineSteps(id)
        }
    }

    function doDetailMachineSteps(id) {
        var data = dataSteps.find((v, k) => {
            if (v.id == id) return true
        })
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12 pb-4">'
        html += '<h1 class="m-0 fw-bolder">' + data.name + '</h1>'
        html += '</div>'
        html += '<div class="col-12">'

        html += '<div class="row">'

        html += '<div class="col-4">'
        html += '<p class="m-0 small-text fw-bolder">List Produk</p>'
        html += '<input type="text" class="form-control mt-2" placeholder="Cari Produk" id="search_add_product" autocomplete="off" style="border-radius:0.35rem;" onkeyup="onSearch(' + "'#search_add_product'" + ',' + "'.textAddProduct'" + ',' + "'#btnAddedProduct'" + ')">'
        html += '<div id="fieldProduct" class="mt-2 pe-2" style="height: 350px;overflow-x: hidden;overflow-y: auto;">'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-8">'
        html += '<p class="m-0 small-text fw-bolder">List Selected Produk (<span class="text-orange" id="totalSelectedProduct">0</span>)</p>'
        html += '<input type="text" class="form-control mt-2" placeholder="Cari Produk yang Terpilih" id="search_selected_product" autocomplete="off" style="border-radius:0.35rem;" onkeyup="onSearch(' + "'#search_selected_product'" + ',' + "'.textSelectedProduct'" + ',' + "'#btnSelectedProduct'" + ')">'
        html += '<div id="fieldSelectedProduct" class="mt-2 pe-3" style="height: 390px;overflow-x: hidden;overflow-y: auto;">'
        html += emptyReturn('Tidak Ada Data yang Dipilih')
        html += '</div>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '<div class="col-12 text-end pt-2">'
        html += '<button class="btn btn-success small-text btnSimpan" onclick="addAllProduct(' + id + ')">Simpan Perubahan<i class="fa fa-chevron-right ms-2"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#detailItemOut').html(html)
        $('#selectProduct').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        buttonItemOut(id)
        fieldProduct(id)
        fieldSelectedProduct(id)
    }

    function fieldProduct(idSteps) {
        var html = ''
        data_item.forEach(e => {
            var checkData = data_machine_conversion.conversion_machine_products.find((v, k) => {
                if (v.item_product.id == e.id && v.machine_step_id == idSteps) return true
            })
            if (!checkData) {
                html += '<div class="card shadow-none pointer card-hoper mb-2 card-added-product" id="btnAddedProduct' + e.id + '" onclick="insertVariableProduct(' + idSteps + ',' + e.id + ')">'
                html += '<div class="card-body">'
                html += '<div class="row">'
                html += '<div class="col-10">'
                html += '<p class="m-0 super-small-text fw-bolder textAddProduct" data-id="' + e.id + '">' + e.code + ' - ' + e.alias + '</p>'
                html += '<p class="m-0 super-small-text fw-bold textAddProduct" data-id="' + e.id + '">' + e.name + '</p>'
                html += '</div>'
                html += '<div class="col-2 align-self-center text-center">'
                html += '<i class="fa fa-plus text-grey"></i>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })
        $('#fieldProduct').html(html)
    }


    function insertVariableProduct(idSteps, idProduct) {
        var checkProduct = variableProduct.find((v, k) => {
            if (v.id == idProduct) return true
        })
        if (!checkProduct) {
            // add product
            $('#btnAddedProduct' + idProduct).addClass('clicked')
            var dataProduct = data_item.find((v, k) => {
                if (v.id == idProduct) return true
            })
            if (dataProduct) {
                variableProduct.push(dataProduct)
            }
        } else {
            // remove product
            $('#btnAddedProduct' + idProduct).removeClass('clicked')
            var availProduct = variableProduct.filter((v, k) => {
                if (v.id != idProduct) return true
            })
            variableProduct = deepCopy(availProduct)
        }
        fieldSelectedProduct(idSteps)
    }

    function fieldSelectedProduct(idSteps) {
        var dataProduct = data_machine_conversion.conversion_machine_products.filter((v, k) => {
            if (v.machine_step_id == idSteps) return true
        })
        var total = 0
        var html = ''
        if (variableProduct.length) {
            variableProduct.forEach(el => {
                html += kerangkaSelectedProduct(el)
                total++
            });
        }
        if (dataProduct.length) {
            dataProduct.forEach(el => {
                var dataMaster = data_item.find((v, k) => {
                    if (v.id == el.item_product.id) return true
                })
                html += kerangkaSelectedProduct(dataMaster, el)
                total++
            });
        }
        $('#totalSelectedProduct').html(total)
        $('#fieldSelectedProduct').html(html)
    }

    function kerangkaSelectedProduct(data, dataEdit = null) {
        var html = ''
        html += '<div class="card shadow-none pointer card-hoper mb-2" id="btnSelectedProduct' + data.id + '">'
        if (dataEdit) {
            // console.log(dataEdit)
            html += '<span class="position-absolute top-50 start-100 translate-middle bg-danger border border-light rounded-circle pointer" style="height: 25px;width: 25px;text-align: center;" onclick="deleteProduct(' + dataEdit.id + ',' + data.id + ')"><i class="fa fa-trash text-white small-text"></i></span>'
        }
        html += '<div class="card-body">'

        html += '<div class="row">'
        html += '<div class="col-12 pb-4">'
        html += '<p class="m-0 super-small-text"><b class="textSelectedProduct" data-id="' + data.id + '">' + data.alias + '</b></p>'
        html += '<h1 class="m-0 fw-bolder small-text textSelectedProduct" data-id="' + data.id + '">' + data.name + '</h1>'
        html += '</div>'
        html += '<div class="col-4 super-small-text">Kategori</div>'
        html += '<div class="col-8 super-small-text fw-bolder">' + data.category.name + '</div>'
        html += '<div class="col-4 super-small-text">Item Type</div>'
        html += '<div class="col-8 super-small-text fw-bolder">' + data.item_type.name + '</div>'
        html += '<div class="col-4 super-small-text">Stok Type</div>'
        html += '<div class="col-8 super-small-text fw-bolder">' + data.stok_type.name + '</div>'
        html += '<div class="col-4 super-small-text align-self-center">Unit / Satuan</div>'
        // ' + data.unit.name + '
        html += '<div class="col-8 super-small-text fw-bolder">'
        html += '<select class="form-select form-select-sm" id="selectUnit' + data.id + '" title="Pilih Unit">'
        data_unit.forEach(e => {
            var select = ''
            if (e.id == data.unit.id) {
                select = 'selected'
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        return html
    }

    function buttonItemOut(id) {
        $('.card-add-product').removeClass('clicked')
        $('#btnAddMachineSteps' + id).addClass('clicked')
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function createCodeId() {
        var code = Math.floor(new Date().getTime() / 1000.0)
        return code;
    }

    function addProduct(id) {
        var data = [{
            id: createCodeId(),
            conversion_machine_id: data_machine_conversion.id,
            item_id_product: id,
            unit_id: $('#selectUnit').val()
        }]
        arrangeVariable('conversionMachineProduct', data)
    }

    function addAllProduct(idSteps) {
        var data = []
        var a = 0
        variableProduct.forEach(e => {
            data.push({
                id: createCodeId() + a,
                conversion_machine_id: data_machine_conversion.id,
                item_id_product: e.id,
                unit_id: $('#selectUnit' + e.id).val(),
                machine_step_id: idSteps,
            })
            a++
        })
        var dataProduct = data_machine_conversion.conversion_machine_products.filter((v, k) => {
            if (v.machine_step_id == idSteps) return true
        })
        if (dataProduct.length) {
            dataProduct.forEach(e => {
                data.push({
                    id: e.id,
                    conversion_machine_id: data_machine_conversion.id,
                    item_id_product: e.item_product.id,
                    unit_id: $('#selectUnit' + e.item_product.id).val(),
                    machine_step_id: idSteps,
                })
            })
        }
        arrangeVariable('conversionMachineProduct', data)
    }

    function collectingVariable() {
        var machine = {
            id,
            machine_id,
            date,
            note,
            is_active,
            created_id
        }

        var materialWaste = {
            id,
            conversion_machine_product_id,
            waste_group_id
        }
    }

    function arrangeVariable(variable, dataMentah) {
        dataInsert[variable] = dataMentah
        var data = deepCopy(dataInsert)
        simpanData(data, variable)
    }

    function simpanData(data, variable) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setConversionMachine'); ?>'
        kelolaData(data, type, url, button, variable)
    }

    function kelolaData(data, type, url, button, variable) {
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
                if ((!variable == 'conversionMachineMaterialGroup' && !variable == 'conversionMachineWaste') || variable == 'conversionMachineProduct') {
                    $('#modal').modal('hide')
                }
                data_add_waste_group = []
                variableProduct = []
                loadData(variable)
            }
        });
    }

    function afterSaveMaterialGroup() {
        firstKlik = false
        var data = data_machine_conversion.conversion_machine_products.find((v, k) => {
            if (v.id == productId) return true
        })
        dataProduct = data
        dataMaterialGroup = data.conversion_machine_material_groups
        dataWaste = data.conversion_machine_wastes
        $('#listMaterialGroup').html('')
        listMaterialGroup()
        chooseProduct(productId)
        statusLine()
    }

    function onSearch(idKotakSearch, classCardSearch, idCardSearch) {
        searching(idKotakSearch, classCardSearch, idCardSearch)
    }

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching(idKotakSearch, classCardSearch, idCardSearch) {
        var value = $(idKotakSearch).val().toLowerCase();
        var cards = $(classCardSearch).map(function() {
            return $(this).text();
        }).get();
        var id_cards = $(classCardSearch).map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $(idCardSearch + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $(idCardSearch + array_arranged[i]).removeClass('d-none')
        }
    }

    function addMaterialGroup() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Manage Material Group</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'
        html_body += '<div class="col-4">'
        // list waste group
        html_body += '<div class="row">'
        html_body += '<div class="col-12 p-0">'
        // list jika ada data
        html_body += '<div class="p-3">'
        html_body += '<p class="m-0 small-text fw-bolder">All Material Group</p>'
        html_body += '</div>'
        html_body += '<input type="text" class="form-control" placeholder="Cari Material Group..." id="search_material_group" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;" onkeyup="onSearch(' + "'#search_material_group'" + ',' + "'.textAddMaterialGroup'" + ',' + "'#cardMaterialGroup'" + ')">'
        html_body += '<div class="m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;" id="listMaterialGroup">'
        html_body += '</div>'
        // list jika ada data
        html_body += '</div>'
        html_body += '</div>'
        // list waste group
        html_body += '</div>'
        html_body += '<div class="col-8 p-4 border-start">'
        // kerangkaSelectedMaterialGroup
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<p class="m-0 small">Komposisi</p>'
        html_body += '<h1 class="m-0 fw-bolder">1 ' + dataProduct.unit.name + ' ' + dataProduct.item_product.alias + '</h1>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12" style="height: 400px;overflow-x: hidden;overflow-y: auto;" id="kerangkaSelectedMaterialGroup">'
        html_body += '</div>'

        html_body += '</div>'
        // kerangkaSelectedMaterialGroup
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm btnSimpan" onclick="addedMaterialGroup()">Simpan</button>'

        $('#modalFooter').html(html_footer)
        $('#kerangkaSelectedMaterialGroup').html(emptyReturn('Anda belum memilih Material Group'))
        listMaterialGroup()
    }

    function listMaterialGroup() {
        var html = ''
        if (dataMaterialGroup) {
            dataMaterialGroup.forEach(el => {
                data_material.forEach(e => {
                    if (e.id == el.material_group_id) {
                        html += cardListMaterialGroup(e, true)
                    }
                })
            });
        }
        data_material.forEach(e => {
            var avail = false
            if (dataMaterialGroup) {
                dataMaterialGroup.forEach(el => {
                    if (e.id == el.material_group_id) {
                        avail = true
                    }
                });
            }
            if (!avail) {

                html += cardListMaterialGroup(e)
            }
        })
        $('#listMaterialGroup').html(html)

    }

    function cardListMaterialGroup(data, edit = false) {
        var html = ''
        var classed = ''
        var link = 'onclick="arrangeMaterialGroup(' + data.id + ')"'
        var icon = '<i class="fa fa-plus text-grey"></i>'
        if (edit) {
            arrangeMaterialGroup(data.id, edit)
            classed = 'clicked'
            link = ''
            icon = '<i class="fa fa-check text-success"></i>'
        }
        html += '<div class="card shadow-none border-end-0 border-start-0 card-hoper pointer card-material-group ' + classed + '" id="cardMaterialGroup' + data.id + '" style="border-radius:0px;" ' + link + '>'
        html += '<div class="card-body p-3">'
        html += '<div class="row">'
        html += '<div class="col-10">'
        html += '<p class="m-0 super-small-text fw-bolder textAddMaterialGroup" data-id="' + data.id + '">' + data.material_category.name + '</p>'
        html += '<p class="m-0 small-text fw-bold textAddMaterialGroup" data-id="' + data.id + '">' + data.name + '</p>'
        html += '</div>'
        html += '<div class="col-2 text-center align-self-center">'
        html += icon
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function arrangeMaterialGroup(id, edit = false) {
        if (firstKlik == false) {
            firstKlik = true
            $('#kerangkaSelectedMaterialGroup').html('')
        }
        if ($('#cardMaterialGroup' + id).hasClass('clicked')) {
            $('#cardIsiMaterialGroup' + id).remove()
            $('#cardMaterialGroup' + id).removeClass('clicked')
        } else {
            $('#cardMaterialGroup' + id).addClass('clicked')
            var data = data_material.find((v, k) => {
                if (v.id == id) return true
            })
            if (edit) {
                $('#kerangkaSelectedMaterialGroup').append(formatMaterialGroup(data, id))
            } else {
                $('#kerangkaSelectedMaterialGroup').append(formatMaterialGroup(data))
            }

        }
    }

    function formatMaterialGroup(data, idMaterialGroup = null) {
        if (dataMaterialGroup) {
            var dataEdit = dataMaterialGroup.find((v, k) => {
                if (v.material_group_id == idMaterialGroup) return true
            })
        } else {
            var dataEdit = ''
        }
        var html = ''

        html += '<div class="row" id="cardIsiMaterialGroup' + data.id + '">'

        html += '<div class="col-2">'
        html += '<div class="row h-100">'
        html += '<div class="col-6 border-2 border-end"></div>'
        html += '<div class="col-6"></div>'
        html += '<div class="col-6 border-2 border-end"></div>'
        html += '<div class="col-6 border-2 border-top"></div>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-10">'
        html += '<div class="card shadow-sm mb-2">'
        if (idMaterialGroup) {
            html += '<span class="position-absolute top-50 start-100 translate-middle bg-danger border border-light rounded-circle pointer" style="height: 25px;width: 25px;text-align: center;" onclick="deleteItem(' + dataEdit.conversion_machine_product_id + ',' + idMaterialGroup + ')"><i class="fa fa-trash text-white small-text"></i></span>'
        }
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-5">'
        html += '<p class="m-0 super-small-text">' + data.material_category.name + '</p>'
        html += '<p class="m-0 small-text fw-bolder">' + data.name + '</p>'
        html += '</div>'
        html += '<div class="col-7 ps-0 align-self-center">'
        if (dataEdit) {
            var qtyMaterialGroup = dataEdit.qty
            var selectUnit = dataEdit.unit_id
            if (dataEdit.is_material_main) {
                var checked = 'checked'
            } else {
                var checked = ''
            }
        } else {
            var qtyMaterialGroup = ''
            var selectUnit = ''
            var checked = ''
        }
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<input class="form-control form-control-sm qtyMaterialGroup" id="qtyMaterialGroup" data-idmaterial="' + data.id + '" value="' + qtyMaterialGroup + '" autocomplete="off">'
        html += '<div class="form-check d-flex align-items-center">'
        html += '<input class="form-check-input is_material_main" style="width:10px;height:10px;" type="radio" name="is_material_main" id="is_material_main' + data.id + '" ' + checked + '>'
        html += '<label class="form-check-label super-small-text mt-1 ms-2" for="is_material_main' + data.id + '">Material Utama</label>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-6 ps-0">'
        html += '<select class="form-select form-select-sm selectUnit" id="selectUnit" title="Pilih Unit">'
        html += '<option value="">Pilih</option>'
        data_unit.forEach(e => {
            var select = ''
            if (e.id == selectUnit) {
                select = 'selected'
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '</div>'

        return html
    }

    function findNoData(data) {
        var available = false
        for (let i = 0; i < data.length; i++) {
            if (data[i]) {
                available = true
            }
        }
        return available
    }

    function addedMaterialGroup() {
        var selectUnit = $('.selectUnit').map(function() {
            return $(this).val();
        }).get()
        var qtyMaterialGroup = $('.qtyMaterialGroup').map(function() {
            return $(this).val();
        }).get()
        var idMaterialGroup = $('.qtyMaterialGroup').map(function() {
            return $(this).data('idmaterial');
        }).get()
        if (findNoData(qtyMaterialGroup) && findNoData(selectUnit)) {
            var data = []
            for (let i = 0; i < selectUnit.length; i++) {
                var is_material_main = $('#is_material_main' + idMaterialGroup[i] + ':checked').val()
                if (is_material_main) {
                    is_material_main = 1
                } else {
                    is_material_main = 0
                }
                data.push({
                    conversion_machine_product_id: dataProduct.id,
                    material_group_id: idMaterialGroup[i],
                    qty: qtyMaterialGroup[i],
                    unit_id: selectUnit[i],
                    is_material_main: is_material_main,
                    operator: '*',
                })
            }
            arrangeVariable('conversionMachineMaterialGroup', data)
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Tidak Lengkap',
                text: 'Pengisian Tidak Lengkap'
            });
        }
    }

    function deleteItem(id, idMaterialGroup) {
        var dataEdit = dataMaterialGroup.find((v, k) => {
            if (v.material_group_id == idMaterialGroup) return true
        })
        var data = {
            deletedId: {
                conversionMachineMaterialGroup: [{
                    conversion_machine_product_id: dataEdit.conversion_machine_product_id,
                    material_group_id: dataEdit.material_group_id,
                }]
            }
        }
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Material Group ' + dataEdit.material_group.name + ' dari Produk ' + dataProduct.item_product.alias + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanData(data, 'conversionMachineMaterialGroup')
            }
        })
    }

    function addWasteGroup(data) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Manage Waste Group</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-0 m-0">'
        html_body += '<div class="col-4">'
        // list waste group
        html_body += '<div class="row">'
        html_body += '<div class="col-12 p-0">'
        // list jika ada data
        html_body += '<div class="p-3">'
        html_body += '<p class="m-0 small-text fw-bolder">All Waste Group</p>'
        html_body += '</div>'
        html_body += '<input type="text" class="form-control" placeholder="Cari Material Group..." id="search_waste_group" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;" onkeyup="onSearch(' + "'#search_waste_group'" + ',' + "'.textAddWasteGroup'" + ',' + "'#cardWasteGroup'" + ')">'
        html_body += '<div class="m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;" id="listWasteGroup">'
        html_body += '</div>'
        // list jika ada data
        html_body += '</div>'
        html_body += '</div>'
        // list waste group
        html_body += '</div>'
        html_body += '<div class="col-8 p-4 border-start">'
        // kerangkaSelectedMaterialGroup
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<p class="m-0 small">Waste Group</p>'
        html_body += '<h1 class="m-0 fw-bolder">' + dataProduct.item_product.name + '</h1>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12" style="height: 350px;overflow-x: hidden;overflow-y: auto;" id="kerangkaSelectedWaste">'
        html_body += '</div>'

        html_body += '</div>'
        // kerangkaSelectedMaterialGroup
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm btnSimpan" onclick="addedWasteGroup()">Simpan</button>'

        $('#modalFooter').html(html_footer)
        listWasteGroup()
    }

    function listWasteGroup() {
        var html = ''
        data_waste_group.forEach(e => {
            var edit = false
            if (dataWaste) {
                dataWaste.forEach(el => {
                    if (e.id == el.waste_group_id) {
                        edit = true
                    }
                })
            }
            var link = 'onclick="arrangeCardWasteGroup(' + e.id + ')"'
            var clicked = ''
            if (edit) {
                link = ''
                clicked = 'clicked'
            }
            html += '<div class="card shadow-none border-end-0 border-start-0 card-hoper pointer card-waste-group ' + clicked + '" style="border-radius:0px;" id="cardWasteGroup' + e.id + '" ' + link + '>'
            html += '<div class="card-body p-3">'
            html += '<div class="row">'
            html += '<div class="col-10">'
            html += '<p class="m-0 super-small-text fw-bolder textAddWasteGroup" data-id="' + e.id + '">' + e.name + '</p>'
            html += '<p class="m-0 small-text fw-bold textAddWasteGroup" data-id="' + e.id + '">' + e.label + '</p>'
            html += '</div>'
            html += '<div class="col-2 text-center align-self-center">'
            if (edit) {
                html += '<i class="fa fa-check text-success"></i>'
            } else {
                html += '<i class="fa fa-plus text-grey"></i>'
            }
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listWasteGroup').html(html)
        kerangkaSelectedWaste()
    }

    function kerangkaSelectedWaste() {
        var html = ''
        if (dataWaste) {
            firstKlik = true
            dataWaste.forEach(e => {
                html += selectedWaste(e.waste_group_id, e.id)
            })
        } else {
            firstKlik = false
            html = emptyReturn('Belum ada Data Waste Group')
        }
        $('#kerangkaSelectedWaste').html(html)
    }

    function selectedWaste(id, wasteGroupId = null) {
        var data = data_waste_group.find((v, k) => {
            if (v.id == id) return true
        })
        var html = ''
        html += '<div class="card shadow-none pointer bg-light-success card-hoper mb-2" id="cardIsiWasteGroup' + data.id + '">'
        html += '<div class="card-body p-2">'
        html += '<div class="row">'
        html += '<div class="col-10">'
        html += '<p class="m-0 super-small-text fw-bolder">' + data.name + '</p>'
        html += '<p class="m-0 small-text fw-bold">' + data.label + '</p>'
        html += '</div>'
        if (wasteGroupId) {
            html += '<div class="col-2 align-self-center text-center" onclick="deleteWasteGroup(' + wasteGroupId + ')">'
            html += '<i class="fa fa-trash text-danger"></i>'
            html += '</div>'
        }
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function arrangeCardWasteGroup(id) {
        if (firstKlik == false) {
            firstKlik = true
            $('#kerangkaSelectedWaste').html('')
        }
        if ($('#cardWasteGroup' + id).hasClass('clicked')) {
            $('#cardIsiWasteGroup' + id).remove()
            $('#cardWasteGroup' + id).removeClass('clicked')
            var data = deepCopy(data_add_waste_group.filter((v, k) => {
                if (v.waste_group_id != id) return true
            }))
            data_add_waste_group = data
        } else {
            $('#cardWasteGroup' + id).addClass('clicked')
            $('#kerangkaSelectedWaste').append(selectedWaste(id))
            data_add_waste_group.push({
                id: createCodeId(),
                conversion_machine_product_id: dataProduct.id,
                waste_group_id: id,
            })
        }
    }

    function deleteWasteGroup(id) {
        var dataEdit = dataWaste.find((v, k) => {
            if (v.id == id) return true
        })
        var conversionMachineWaste = []
        conversionMachineWaste.push(id)
        var data = {
            deletedId: {
                conversionMachineWaste: conversionMachineWaste
            }
        }
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Material Group ' + dataEdit.waste_groups.label + ' dari Produk ' + dataProduct.item_product.alias + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanData(data, 'conversionMachineWaste')
            }
        })
    }

    function addedWasteGroup() {
        arrangeVariable('conversionMachineWaste', data_add_waste_group)
    }

    function afterSaveWasteGroup() {
        firstKlik = false
        var data = data_machine_conversion.conversion_machine_products.find((v, k) => {
            if (v.id == productId) return true
        })
        dataProduct = data
        dataMaterialGroup = data.conversion_machine_material_groups
        dataWaste = data.conversion_machine_wastes
        $('#kerangkaSelectedWaste').html('')
        listWasteGroup()
        chooseProduct(productId)
        statusLine()
    }

    function afterSaveMachineProduct() {
        firstKlik = false
        var data = data_machine_conversion.conversion_machine_products.find((v, k) => {
            if (v.id == productId) return true
        })
        if (data) {
            dataProduct = data
            dataMaterialGroup = data.conversion_machine_material_groups
            dataWaste = data.conversion_machine_wastes
            $('#listMaterialGroup').html('')
            chooseProduct(productId)
            statusLine()
        } else {
            $('#kerangkaProductDetail').html(emptyReturn('Pilih Produk Terlebih Dahulu'))
        }
    }
</script>