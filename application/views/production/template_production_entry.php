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
        <div class="col-3 bg-left-panel full-height p-5 pt-2 pe-2">
            <div class="row p-3">
                <div class="col align-self-center p-0">
                    <h2 class="text-dark-grey m-0">
                        <b class="small">Production Entry & Control</b>
                    </h2>
                    <p class="super-small-text m-0 text-light-dark-grey">Panel Kegiatan Entri Produksi dan Controlling</p>
                </div>
                <div class="col-auto align-self-center">
                    <button class="btn btn-sm float-end shadow-none position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"><i class="fa fa-file-o me-2"></i> Test</a>
                    </div>
                </div>
                <div class="col-12 p-0 pt-4 pb-2" id="showCameraQR">
                </div>
                <div class="col-12 p-0 pb-2">
                    <?php foreach ($menu as $key => $value) {
                        $clicked = '';
                        if ($value->name == $link) {
                            $clicked = 'clicked';
                        }
                    ?>
                        <div class="card shadow-none mb-2 btn-list-planning <?= $clicked ?>" onclick="location='<?= base_url() ?>production/productionEntry/<?= $value->name ?>/<?= base64_encode($workPlanMachineId) ?>/<?= base64_encode($label) ?>/<?= base64_encode($workPlanId) ?>'">
                            <span class="position-absolute top-50 start-100 translate-middle p-2 bg-light border border-light-dark rounded-circle" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;cursor:pointer;"><i class="fa fa-check text-light-dark"></i></span>
                            <div class="card-body pt-3 pb-3">
                                <div class="row">
                                    <div class="col-3 align-self-center">
                                        <i class="fa <?= $value->icon ?> fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <b class="small-text">
                                            <?php
                                            $words = preg_split('/ /', $value->label);
                                            $uppercaseWords = array_map('strtoupper', $words);
                                            ?>
                                            <?php if (count($uppercaseWords) <= 2) { ?>
                                                <?php for ($i = 0; $i < count($uppercaseWords); $i++) { ?>
                                                    <p class="m-0"><?= $uppercaseWords[$i] ?></p>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                                    <p class="m-0"><?= $uppercaseWords[$i] ?></p>
                                                <?php } ?>
                                                <p class="m-0"><?= $uppercaseWords[count($uppercaseWords) - 2] ?> <?= $uppercaseWords[count($uppercaseWords) - 1] ?></p>
                                            <?php } ?>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-12 p-0 pt-2 pb-2">
                    <div class="card shadow-none">
                        <div class="card-body p-0">
                            <div class="row p-3">
                                <div class="col-auto align-self-center">
                                    <i class="fa fa-map-o text-grey"></i>
                                </div>
                                <div class="col align-self-center">
                                    <p class="m-0 super-small-text text-start"><b>Target Production<br>Information</b></p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12" id="listWorkPlan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 pt-2 pb-2">
                    <div class="card shadow-none">
                        <div class="card-body p-0">
                            <div class="row p-3">
                                <div class="col-auto align-self-center">
                                    <i class="fa fa-briefcase text-grey"></i>
                                </div>
                                <div class="col align-self-center">
                                    <p class="m-0 super-small-text text-start"><b>Working<br>Information</b></p>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12" id="workingInformation">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-9 bg-white p-4">
            <div class="row">
                <div class="col-auto align-self-center text-center" id="iconShift">
                </div>
                <div class="col-auto">
                    <!-- <span class="super-small-text" id="date">-</span>
                    <span class="super-small-text fw-bold">Shift <span id="shiftName">-</span></span>
                    <br>
                    <b>Machine <span id="machineName">-</span></b> -->
                    <p class="m-0 super-small-text"><span class="fa fa-calendar me-1"></span><span id="date" class="me-3">-</span><span class="fa fa-clock-o me-1"></span><span id="shiftName">-</span></p>
                    <b>Machine <span id="machineName">-</span></b>
                </div>
                <div class="col text-end align-self-center">
                    <!-- <button type="button" class="btn btn-outline-success shadow-none btn-sm shadow-none"><i class="fa fa-save me-2"></i>Save Draft</button> -->
                    <?php if ($link == 'deliver_goods' || $link == 'sorting_goods') { ?>
                        <!-- SKT -->
                        <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none me-1" onclick="loadData()"><i class="fa fa-refresh me-2"></i>Refresh</button>
                        <!-- <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none" onclick="configurationPrinters()"><i class="fa fa-print me-2"></i>Config Printer</button> -->
                        <!-- <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none small me-1" onclick="loadIncomplete('DATA')"><span class="badge rounded-pill bg-danger me-2" style="padding-top:1px;padding-bottom:1px;padding-left:5px;padding-right:5px;font-size:10px;" id="jumlahIncomplete">0</span>Incomplete Data
                    </button> -->
                        <div class="btn-group float-end">
                            <button class="btn btn-outline-dark btn-sm dropdown-toggle shadow-none" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                More
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="formReportDailySKT()"><i class="fa fa-file-excel-o me-2"></i>Report Daily</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="offlineModeLog()"><i class="fa fa-cog me-2"></i>Offline Mode Log</a></li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none" onclick="loadDataTemplate()"><i class="fa fa-refresh me-2"></i>Refresh</button>
                        <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none" id="btnChooseBrand" onclick="chooseBrandTemplate()"><i class="fa fa-hand-o-up me-2"></i>Choose Brand</button>
                        <button type="button" class="btn shadow-none btn-sm shadow-none btn-danger" id="btnCloseBrand" onclick="closeBrand()" hidden><i class="fa fa-times me-2"></i>Closing</button>
                    <?php } ?>
                    <?php if ($link == 'qc_packer') { ?>
                        <button type="button" class="btn btn-outline-danger shadow-none btn-sm shadow-none me-1" id="btnBrokenData" onclick="modalBrokenData()" hidden>Broken Data ( <span id="textBrokenData"></span> )</button>
                    <?php } ?>
                    <!-- <button type="button" class="btn btn-danger shadow-none btn-sm shadow-none"><i class=" fa fa-cloud-upload me-2"></i>Closing</button> -->
                </div>
                <div class="col-12 pt-3">
                    <div class="h-100">
                        <?php $this->load->view('production/production_entry/' . $link) ?>
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
</script>
<script>
    var workPlanMachineId = '<?= $workPlanMachineId ?>'
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var link = '<?= $link ?>'
    var workPlanId = '<?= $workPlanId ?>'
    var isRunningID = ''

    $(document).ready(function() {
        loadDataTemplate()
        if (link == 'deliver_goods' || link == 'sorting_goods') {
            // loadIncomplete()
        }
    })

    function loadIncomplete(dataOption = 'COUNT') {
        var data = {
            dateStart: currentDate(),
            dateEnd: currentDate(),
            dataProfile: 'ALL',
            machineId: 15,
            dataOption: dataOption,
        }
        var url = "<?= api_produksi('getReportIncompleteDeliv'); ?>"
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                if (dataOption == 'COUNT') {
                    var data = response.data.reportResultPerson
                    if (data.length) {
                        $('#jumlahIncomplete').removeClass('bg-light').addClass('bg-danger').html(data)
                    } else {
                        $('#jumlahIncomplete').addClass('bg-light').removeClass('bg-danger').html('0')
                    }
                } else {
                    var url = "<?= base_url() ?>report/reportIncomplete"
                    window.open(url);
                    // var data = response.data.reportResultPerson
                    // incompleteData(data)
                }
            }
        })
    }

    function incompleteData(data) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Incomplete Data</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-12 p-5 pt-3 pb-3">'
        html_body += '<div class="input-group">'
        html_body += '<input class="form-control form-control-sm pe-0" type="text" autocomplete="off" placeholder="Cari Pekerja" aria-label="Search" id="search_planning">'
        html_body += '<span class="input-group-text">'
        html_body += '<i class="fa fa-search"></i>'
        html_body += '</span>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<hr class="m-0">'
        html_body += '</div>'

        html_body += '<div class="col-12 p-5 pt-3 pb-3">'
        html_body += '<div class="card shadow-none mb-2">'
        html_body += '<div class="card-body">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0 overflow-hidden')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
    }

    function loadDataTemplate() {
        var data = {
            personLabel: '<?= $label ?>',
            workPlanMachineId: workPlanMachineId,
            workPlanId: workPlanId,
        }
        var url = "<?= api_produksi('loadPageProductionEntry'); ?>"
        getDataTemplate(data, url)
    }
    var dateMachine = ''
    var dataTemplate
    var hurufRowCode

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function convertRowCode(data) {
        var row = []
        data.forEach(e => {
            for (let i = 0; i < e.codes.length; i++) {
                if (e.codes[i]) {
                    row.push(e.codes[i])
                    // e.codes[i] = 'UNKNOWN'
                }
            }
        });
        return row.sort()
    }

    function getDataTemplate(data, url) {
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
                var data = response.data
                dataTemplate = data
                if (link == 'deliver_goods' || link == 'sorting_goods') {
                    hurufRowCode = convertRowCode(dataTemplate.rowCodeProfile)
                }
                $('#date').html(formatDateIndonesia(data.workPlanMachine.date))
                dateMachine = data.workPlanMachine.date
                $('#shiftName').html(convertTimeFormat(data.workPlanMachine.shift.start) + ' - ' + convertTimeFormat(data.workPlanMachine.shift.end))
                $('#machineName').html(data.workPlanMachine.machine.name)
                if (data.workPlanMachine.shift.group_id == 1) {
                    $('#iconShift').html('<img class="float-center" style="width: 20px;" src="<?= base_url() ?>assets/image/svg/am.svg" alt="Icon" />')
                } else {
                    $('#iconShift').html('<img class="float-center" style="width: 20px;" src="<?= base_url() ?>assets/image/svg/pm.svg" alt="Icon" />')
                }
                getWorkPlanProduct(data)
            }
        })
    }
    var dataWorkPlanProducts
    var isRunningBrand = false

    function getWorkPlanProduct(data) {
        $.ajax({
            url: "<?= api_produksi('getWorkPlanProduct'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                workPlanMachineId: workPlanMachineId,
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
                dataWorkPlanProducts = response.data
                isRunningBrand = ifBrandIsRunning()
                listWorkPlan(data)
            }
        })
    }

    function listWorkPlan(data) {
        var html = ''
        html += '<div class="row mb-2 text-grey justify-content-between">'
        html += '<div class="col align-self-center text-center">'
        html += '<p class="super-small-text m-0"><b>Product</b></p>'
        html += '</div>'
        html += '<div class="col align-self-center text-center">'
        html += '<p class="super-small-text m-0"><b>Realization</b></p>'
        html += '</div>'
        html += '<div class="col align-self-center text-center">'
        html += '<p class="super-small-text m-0"><b>Target</b></p>'
        html += '</div>'
        html += '</div>'
        data.workPlanMachine.products.forEach(e => {
            html += '<div class="card shadow-none mb-2">'
            html += '<div class="card-body p-1 ps-3 pe-3">'
            html += '<div class="row justify-content-between">'
            html += '<div class="col align-self-center">'
            html += '<p class="small-text m-0"><b>' + e.product.alias + '</b> #' + e.priority + '</p>'
            // html += '<p class="m-0 super-small-text">#' + e.priority + '</p>'
            html += '</div>'
            html += '<div class="col align-self-center super-small-text text-center" id="realizationTarget' + e.product.id + '">'
            html += '--'
            html += '</div>'
            html += '<div class="col align-self-center text-center">'
            html += '<p class="m-0 super-small-text">' + e.qty + ' ' + e.unit_target.name + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#listWorkPlan').html(html)
        workingInformation(data)
    }

    function workingInformation(data) {
        var html = ''
        html += '<div class="row small-text">'
        html += '<div class="col-5 text-grey">Shift</div>'
        html += '<div class="col-7"><b>' + convertTimeFormat(data.workPlanMachine.shift.start) + ' - ' + convertTimeFormat(data.workPlanMachine.shift.end) + '</b></div>'
        html += '<div class="col-5 text-grey">Operator</div>'
        html += '<div class="col-7"><b>' + formatNames(data.workPlanMachine.employee_operator) + '</b></div>'
        html += '<div class="col-5 text-grey">Helper</div>'
        html += '<div class="col-7"><b>' + formatNames(data.workPlanMachine.employee_helper) + '</b></div>'
        html += '<div class="col-5 text-grey">Catcher</div>'
        html += '<div class="col-7"><b>' + formatNames(data.workPlanMachine.employee_catcher) + '</b></div>'
        html += '</div>'
        $('#workingInformation').html(html)
        var label = '<?= $link ?>'
        if (label != 'default') {
            if (isRunningID) {
                loadData()
            } else {
                if (data.productionType.name == 'SKM') {
                    chooseBrandTemplate()
                } else {
                    loadData()
                }
            }
        } else {
            if (!isRunningBrand && data.productionType.name == 'SKM') {
                chooseBrandTemplate()
            }
        }
    }

    function formReportDailySKT() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Download Report Daily - Option</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        var huruf = hurufRowCode
        html_body += '<div class="row w-100 pb-5">'
        html_body += '<div class="col-12">'
        dataTemplate.rowCodeProfile.forEach(e => {
            html_body += '<span class="badge rounded-pill me-2 bg-light text-dark p-2 pillKategori" style="cursor:pointer;1px solid black;" id="pillKategori' + e.id + '" onclick="chooseKategori(' + e.id + ')">' + e.name + '</span>'
        });
        html_body += '<span class="badge rounded-pill me-2 bg-light text-dark p-2 pillKategori" style="cursor:pointer;1px solid black;" id="pillKategori" onclick="chooseKategori()">Semua</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row w-100">'

        for (let i = 0; i < huruf.length; i++) {
            html_body += '<div class="col-2">'
            html_body += '<div class="card bg-info text-white shadow-none pointer card-hoper mb-2 cardMeja" data-huruf="' + huruf[i] + '" id="cardMeja' + huruf[i] + '" onclick="chooseMeja(' + "'" + huruf[i] + "'" + ')">'
            html_body += '<div class="card-body text-center p-2">'
            html_body += huruf[i]
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<div class="col-4">'
        html_body += '<div class="card bg-info text-white shadow-none pointer card-hoper mb-2 cardMeja" data-huruf="UNKNOWN" id="cardMejaUNKNOWN" onclick="chooseMeja(' + "'UNKNOWN'" + ')">'
        html_body += '<div class="card-body text-center p-2">'
        html_body += 'UNKNOWN'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="downloadReportDailySKT()">Simpan</button>'
        $('#modalFooter').html(html_footer)
        chooseKategori()
    }

    function chooseMeja(huruf) {
        var meja = $('#cardMeja' + huruf).hasClass('bg-info')
        if (meja) {
            $('#cardMeja' + huruf).removeClass('bg-info text-white')
        } else {
            $('#cardMeja' + huruf).addClass('bg-info text-white')
        }
    }

    function chooseKategori(id = '') {
        $('.pillKategori').removeClass('bg-dark text-white')
        $('#pillKategori' + id).addClass('bg-dark text-white')
        $('.cardMeja').removeClass('bg-info text-white')
        if (id) {
            dataTemplate.rowCodeProfile.forEach(e => {
                if (e.id == id) {
                    for (let i = 0; i < e.codes.length; i++) {
                        if (!e.codes[i]) {
                            e.codes[i] = 'UNKNOWN'
                        }
                        $('#cardMeja' + e.codes[i]).addClass('bg-info text-white')
                    }
                }
            })
        } else {
            dataTemplate.rowCodeProfile.forEach(e => {
                for (let i = 0; i < e.codes.length; i++) {
                    if (!e.codes[i]) {
                        e.codes[i] = 'UNKNOWN'
                    }
                    $('#cardMeja' + e.codes[i]).addClass('bg-info text-white')
                }
            })
        }
    }

    function downloadReportDailySKT() {
        var url = "<?= base_url() ?>report/reportDailySKT"
        var rowCode = arrayToString($('.cardMeja.bg-info').map(function() {
            return $(this).data('huruf');
        }).get())
        var params = "*$" + dateMachine + "*$15" + "*$" + rowCode;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }


    function ifBrandIsRunning() {
        var dataIsRunning = dataWorkPlanProducts.workPlanProduct.find((v, k) => {
            if (v.is_running == 1) return true
        })
        if (dataIsRunning) {
            // jika ada yang berjalan
            isRunningID = dataIsRunning.id
            $('#btnChooseBrand').prop('hidden', true)
            $('#btnCloseBrand').prop('hidden', false)
            return true
        } else {
            isRunningID = ''
            $('#btnChooseBrand').prop('hidden', false)
            $('#btnCloseBrand').prop('hidden', true)
            return false
        }
    }

    function chooseBrandTemplate() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Choose Brand</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-12" id="listChooseBrand">'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        listChooseBrandTemplate()
    }

    function listChooseBrandTemplate() {
        var html = ''
        dataWorkPlanProducts.workPlanProduct.forEach(e => {
            var bg = 'card-hoper pointer'
            var text = ''
            var btnChoose = 'onclick="afterChooseBrand(' + "'" + e.id + "'" + ')"'
            if (e.is_complete) {
                bg = 'bg-light-success'
                btnChoose = ''
            } else {
                if (e.is_running) {
                    bg = 'bg-light-orange text-white'
                    text = 'text-white'
                    btnChoose = ''
                }
            }
            html += '<div class="card mb-2 shadow-sm ' + bg + '" ' + btnChoose + '>'
            html += '<div class="card-body">'
            html += '<div class="row">'

            html += '<div class="col-2 align-self-center">'
            html += '<p class="m-0 small fw-bold">#' + e.priority + '</p>'
            html += '</div>'
            html += '<div class="col-4 ps-0 align-self-center">'
            html += '<h5 class="m-0 fw-bolder ' + text + '">' + e.product.alias + '</h5>'
            html += '<p class="m-0 super-small-text">' + e.product.name + '</p>'
            html += '</div>'
            html += '<div class="col-2 align-self-center">'
            html += '<p class="m-0 super-small-text">Start Time</p>'
            var startTimeBrand = '--:--'
            if (e.datetime_start) {
                startTimeBrand = formatJamMenit(e.datetime_start)
            }
            var endTimeBrand = '--:--'
            if (e.datetime_end) {
                endTimeBrand = formatJamMenit(e.datetime_end)
            }
            html += '<p class="m-0 fw-bolder">' + startTimeBrand + '</p>'
            html += '</div>'
            html += '<div class="col-2 align-self-center">'
            html += '<p class="m-0 super-small-text">End Time</p>'
            html += '<p class="m-0 fw-bolder">' + endTimeBrand + '</p>'
            html += '</div>'
            if (e.is_complete) {
                html += '<div class="col-2 align-self-center text-end">'
                html += '<i class="small">Selesai</i>'
                html += '</div>'
            } else {
                if (e.is_running) {
                    html += '<div class="col-2 align-self-center text-end">'
                    html += '<button class="btn btn-sm btn-danger btnSimpan" onclick="closeBrand(' + "'" + e.id + "'" + ')">Close</button>'
                    html += '</div>'
                }
            }

            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#listChooseBrand').html(html)
    }


    function afterChooseBrand(id) {
        var data = dataWorkPlanProducts.workPlanProduct.find((v, k) => {
            if (v.id == id) return true
        })
        Swal.fire({
            text: 'Apakah Anda Yakin ingin memproses brand ' + data.product.alias + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#modal').modal('hide')
                isRunningID = id
                loadData()
            }
        })
    }

    function generateCode() {
        var date = (new Date).getTime()
        return date;
    }

    function closeBrand() {
        var data = dataWorkPlanProducts.workPlanProduct.find((v, k) => {
            if (v.id == isRunningID) return true
        })
        Swal.fire({
            text: 'Apakah Anda Yakin ingin Closing Brand ' + data.product.alias + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var dataInsert = {
                    workPlanProductClosing: [{
                        id: generateCode(),
                        work_plan_product_id: id,
                        datetime: currentDateTime(),
                        employee_id: user_id,
                        person_label: '<?= $label ?>',
                        note: '',
                    }]
                }
                simpanDataTemplate(dataInsert)
            }
        })
    }

    function simpanDataTemplate(data) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setWorkPlanProductClosing'); ?>'
        kelolaDataTemplate(data, type, url, button)
    }

    function kelolaDataTemplate(data, type, url, button) {
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
                loadDataTemplate()
            }
        });
    }

    function offlineModeLog() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Offline Mode Log</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = ''
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<textarea class="form-control" rows="20">' + JSON.stringify(variableSaveOffline) + '</textarea>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
    }
</script>