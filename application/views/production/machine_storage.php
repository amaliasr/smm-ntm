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
        <div class="col-2 bg-left-panel full-height p-5 pt-2 pe-2">
            <div class="row p-3">
                <div class="col align-self-center p-0">
                    <h3 class="text-dark-grey m-0">
                        <b class="small">Machine Storage<br>Management</b>
                    </h3>
                    <p class="super-small-text m-0 text-light-dark-grey">Pengelolaan Penyimpanan Mesin</p>
                </div>

                <div class="col-12 p-0 pt-4 pb-2" id="listGudang">
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-10 bg-white p-4" id="kerangkaGudangDetail">

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
    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    function empty(location, text, height) {
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function formatNames(data) {
        var firstNames = data.map(function(item) {
            var firstName = item.name.split(' ')[0];
            return firstName;
        });
        return firstNames.join(', ');
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var dataListWarehouse
    var dataDetail
    var itemIdSelected = []
    var choosenId

    $(document).ready(function() {
        loadData()
    })

    function loadData() {
        var data = {
            employeeId: user_id,
        }
        var url = "<?= api_produksi('loadPageStorageManage'); ?>"
        getData(data, url)
    }

    function getData(data, url) {
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
                dataListWarehouse = response.data
                listGudang()
            }
        })
    }

    function listGudang() {
        var html = ''
        dataListWarehouse.warehouse.forEach(e => {
            html += '<div class="card shadow-none mb-2 btn-list-planning" id="btnWarehouse' + e.id + '" onclick="chooseWarehouse(' + e.id + ')">'
            html += '<div class="card-body pt-3 pb-3">'
            html += '<div class="row">'
            html += '<div class="col-10 align-self-center">'
            html += '<b class="small-text">' + e.name + '</b>'
            html += '</div>'
            html += '<div class="col-2 text-center align-self-center">'
            html += '<i class="fa fa-chevron-right"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#listGudang').html(html)
        empty('#kerangkaGudangDetail', 'Pilih Gudang Terlebih Dahulu', '500px')
    }

    function chooseWarehouse(id) {
        choosenId = id
        colorizedMenu(id)
        var data = {
            warehouseId: id,
        }
        var url = "<?= api_produksi('getWarehouseStockInfo'); ?>"
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
                dataDetail = response.data
                kerangkaGudangDetail(id)
            }
        })
    }

    function colorizedMenu(id) {
        $('.btn-list-planning').removeClass('clicked')
        $('#btnWarehouse' + id).addClass('clicked')
    }

    function kerangkaGudangDetail(id) {
        var data = dataListWarehouse.warehouse.find((v, k) => {
            if (v.id == id) return true
        })
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<p class="m-0 super-small-text" id="date">-</p>'
        html += '<b>' + data.name + '</b>'
        html += '</div>'
        html += '<div class="col-6 text-end align-self-center">'
        html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none me-2" onclick="loadData()"><i class="fa fa-refresh me-2"></i>Refresh</button>'
        html += '<div class="btn-group">'
        html += '<button class="btn btn-sm btn-outline-danger shadow-none dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">'
        html += '<i class="fa fa-bell-o"></i>'
        html += '</button>'
        html += '<ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuClickableInside" style="width: 300px;max-height: 400px;overflow-x: hidden;overflow-y: auto;" id="notifWaiting">'
        html += '</ul>'
        html += '</div>'

        html += '</div>'
        html += '<div class="col-3 pt-3">'
        html += '<div class="card shadow-none">'
        html += '<div class="card-body p-0 pt-3">'
        html += '<b class="m-0 ms-3 small-text">Item Stock</b>'
        html += '<input type="text" class="form-control mt-3" placeholder="Search" id="search_nama" autocomplete="off" style="border-radius:0px;border-bottom:0px;border-left:0px;border-right:0px;">'
        html += '<div class="m-0" style="height: 500px;overflow-x: hidden;overflow-y: auto;" id="listCurrentStock">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-9 pt-3">'
        html += '<div class="card shadow-none h-100">'
        html += '<div class="card-body p-0 pt-3">'
        html += '<div class="row">'

        html += '<div class="col">'
        html += '<b class="m-0 ms-3 small-text">Detail Transaction</b>'
        html += '</div>'

        html += '<div class="col text-end">'
        html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none me-2" onclick="formTransaction()"><i class="fa fa-paper-plane-o me-2"></i>Transaction</button>'
        html += '</div>'

        html += '<div class="col-12">'
        html += '<table class="table table-sm table-hover mt-5">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="small-text text-center">#</th>'
        html += '<th class="small-text text-center"></th>'
        html += '<th class="small-text text-center">Time</th>'
        html += '<th class="small-text text-center">User</th>'
        html += '<th class="small-text text-center">Source</th>'
        html += '<th class="small-text text-center">Destination</th>'
        html += '<th class="small-text text-center">Items / Materials</th>'
        html += '<th class="small-text text-center">Status</th>'
        html += '<th class="small-text text-center"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="tableDetail">'
        html += '</tbody>'
        html += '</table>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#kerangkaGudangDetail').html(html)
        notifWaiting()
    }

    function notifWaiting() {
        var html = ''
        dataDetail.mutationStockWaiting.forEach(e => {
            html += '<li><a class="dropdown-item" href="javascript:void(0)" onclick="detailWaiting(' + e.id + ')">'
            html += '<div class="row w-100">'
            html += '<div class="col-3 p-3 bg-dongker text-center">'
            html += '<p class="m-0 text-wrap small text-white">' + e.reference.name + '</p>'
            html += '</div>'
            html += '<div class="col-9 align-self-center">'
            html += '<p class="m-0 super-small-text text-orange"><b>' + e.employee.name + '</b></p>'
            html += '<p class="m-0 super-small-text"><b>' + getDateStringWithTime(e.time) + '</b></p>'
            e.machine_transfer_detail.forEach(el => {
                html += '<p class="m-0 small-text">' + el.item.name + '</p>'
            });
            html += '</div>'
            html += '</div>'
            html += '</a></li>'
        })
        $('#notifWaiting').html(html)
        listCurrentStock()
    }

    function listCurrentStock() {
        var html = ''
        var a = 0
        dataDetail.currentStock.forEach(e => {
            html += '<div class="card shadow-none border-end-0 border-start-0" style="border-radius:0px;" id="card_search' + a + '">'
            html += '<div class="card-body">'
            html += '<div class="row">'
            html += '<div class="col">'
            html += '<p class="m-0 super-small-text text_search" data-id="' + a + '">' + e.item.code + '</p>'
            html += '<p class="m-0 super-small-text"><b class="text_search" data-id="' + a + '">' + e.item.name + '</b></p>'
            html += '</div>'
            html += '<div class="col-auto text-end">'
            html += '<h5 class="m-0 text-orange small-text"><b>' + number_format(e.qty) + '</b></h5>'
            html += '<p class="m-0 small-text">' + e.unit.name + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            a++
        })
        $('#listCurrentStock').html(html)
        tableDetail()
    }

    function tableDetail() {
        var html = ''
        if (dataDetail.mutationStock.length) {
            var a = 1
            dataDetail.mutationStock.forEach(e => {
                var arrow = '<i class="fa fa-arrow-down text-success"></i>'
                if (e.action == 'OUT') {
                    arrow = '<i class="fa fa-arrow-up text-danger"></i>'
                }
                if (e.status == 'WAITING') {
                    var status = '<span class="badge rounded-pill bg-light text-dark-grey">Waiting</span>'
                } else if (e.status == 'RECEIVED') {
                    var status = '<span class="badge rounded-pill bg-success">Diterima</span>'
                } else if (e.status == 'REJECTED') {
                    var status = '<span class="badge rounded-pill bg-success">Ditolak</span>'
                } else {
                    var status = ''

                }
                html += '<tr>'
                html += '<td class="small-text align-middle text-center">' + a++ + '</td>'
                html += '<td class="small-text align-middle text-center">' + arrow + '</td>'
                html += '<td class="small-text align-middle text-center">' + getDateTime(e.time) + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.employee.name.split(' ')[0] + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.reference.name + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.warehouse.name + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.item.name + '</td>'
                html += '<td class="small-text align-middle text-center">' + status + '</td>'
                html += '<td class="small-text align-middle">'
                html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm"><i class="fa fa-eye"></i></button>'
                html += '</td>'
                html += '</tr>'
            });
        } else {
            html += '<tr>'
            html += '<td class="text-center p-5" colspan="8"><i class="small-text">Tidak Ada Data yang Tersedia</i></td>'
            html += '</tr>'
        }
        $('#tableDetail').html(html)
    }

    function viewDetail() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Machine Stock</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'
        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none');
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
    // search multi 2
    $(document).on('keyup', '#search_nama2', function(e) {
        searching2()
    })

    function searching2() {
        var value = $('#search_nama2').val().toLowerCase();
        var cards = $('.text_search2').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search2').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search2' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search2' + array_arranged[i]).removeClass('d-none')
        }
    }

    function formTransaction() {
        itemIdSelected = []
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Transaction</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-3 border-end ps-0">'

        html_body += '<div class="row p-0">'
        html_body += '<div class="col-auto align-self-center p-4 pb-0">'
        html_body += '<p class="small-text"><b>Item Stock</b></p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row">'
        html_body += '<input type="text" class="form-control mt-3" placeholder="Search" id="search_nama2" autocomplete="off" style="border-radius:0px;border-bottom:0px;border-left:0px;border-right:0px;">'
        html_body += '<div class="p-0 m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'
        var a = 0
        dataDetail.currentStock.forEach(e => {
            html_body += '<div class="card shadow-none border-end-0 border-start-0 pointer" style="border-radius:0px;" id="card_search2' + e.item.id + '" onclick="chooseItem(' + e.item.id + ')">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'
            html_body += '<div class="col">'
            html_body += '<p class="m-0 super-small-text text_search2" data-id="' + a + '">' + e.item.code + '</p>'
            html_body += '<p class="m-0 super-small-text"><b class="text_search2" data-id="' + a + '">' + e.item.name + '</b></p>'
            html_body += '</div>'
            html_body += '<div class="col-auto text-end">'
            html_body += '<h5 class="m-0 text-orange small-text"><b>' + number_format(e.qty) + '</b></h5>'
            html_body += '<p class="m-0 small-text">' + e.unit.name + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            a++
        })

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-9">'

        html_body += '<div class="row p-0">'
        html_body += '<div class="col-auto align-self-center p-4 pb-0">'
        html_body += '<p class="small-text"><b>Form Transaction</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-12" id="listFormTransaction">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('pt-0 pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="arrangeVariableInsert()">Simpan</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none')
        empty('#listFormTransaction', 'Belum Ada Data yang Terpilih', '300px')
    }

    function chooseItem(id) {
        if ($('#card_search2' + id).hasClass('selected')) {
            $('#card_search2' + id).removeClass('selected')
            itemIdSelected = itemIdSelected.filter(e => e.item.id != id);
        } else {
            $('#card_search2' + id).addClass('selected')
            var data = deepCopy(dataDetail.currentStock.find((v, k) => {
                if (v.item.id == id) return true
            }))
            data.qty_fill = 0
            if (data) {
                itemIdSelected.push(data)
            }
        }
        listFormTransaction()
    }

    function listFormTransaction() {
        var html = ''
        if (itemIdSelected.length) {
            html += '<div class="row">'
            html += '<div class="col-8">'
            itemIdSelected.forEach(e => {
                // card
                html += '<div class="card shadow-none mb-2" id="cardHasil' + e.item.id + '">'
                html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;" onclick="chooseItem(' + e.item.id + ')"><i class="small-text fa fa-times text-light"></i></span>'
                html += '<div class="card-body">'
                html += '<div class="row">'

                html += '<div class="row">'
                html += '<div class="col-6">'
                html += '<p class="m-0 super-small-text text-orange"><b>' + e.item.code + '</b></p>'
                html += '<p class="m-0 small-text"><b>' + e.item.name + '</b></p>'
                html += '</div>'
                html += '<div class="col-4">'
                html += '<input type="text" id="qty" class="form-control form-control-sm nominal qty" required="required" onkeyup="fillForm(event,' + e.item.id + ')" autocomplete="off" value="' + e.qty_fill + '" data-item="' + e.item.id + '" data-unit="' + e.unit.id + '" style="background-color:transparent;border:0px;" data-stok="' + e.qty + '">'
                html += '<hr class="m-0">'
                html += '<p class="m-0 float-end super-small-text">Sisa Stok : <b class="text-orange">' + e.qty + '</b></p>'
                html += '</div>'
                html += '<div class="col-2 align-self-center">'
                html += '<p class="m-0 small"><b>' + e.unit.name + '</b></p>'
                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'
                // card
            });
            html += '</div>'

            html += '<div class="col-4">'

            html += '<div class="card shadow-none">'
            html += '<div class="card-body p-2">'
            html += '<p class="small-text"><b>Tujuan Transaksi</b></p>'
            html += '<select class="form-select" name="state" id="tujuanTransaksi" onchange="eventButton()">'
            html += '<option value="" disabled selected>Pilih Tujuan</option>'
            // dataEntry.machineTransferDestination.forEach(e => {
            //     html += '<optgroup label="' + e.type + '">'
            //     e.data.forEach(el => {
            //         var gudang = ''
            //         if (el.gudang_id) {
            //             gudang = el.gudang_id
            //         }
            //         html += '<option value="' + el.id + '" data-variable="' + el.variable + '" data-gudang="' + gudang + '">' + el.name + '</option>'
            //     });
            //     html += '</optgroup>'
            // });
            html += '</select>'
            html += '<p class="small-text mt-3"><b>Notes</b></p>'
            html += '<textarea class="form-control" rows="10" placeholder="Tuliskan catatan disini" id="notes"></textarea>'
            html += '</div>'
            html += '</div>'

            html += '</div>'

            html += '</div>'
            $('#listFormTransaction').html(html)
        } else {
            empty('#listFormTransaction', 'Belum Ada Data yang Terpilih', '300px')
        }
        $('.nominal').number(true);
    }

    function detailWaiting(id) {
        var data = dataDetail.mutationStockWaiting.find((v, k) => {
            if (v.id == id) return true
        })
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Transaction</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'

        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Waktu Transaksi</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + getDateStringWithTime(data.time) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Dibuat Oleh</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + data.employee.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Mesin Asal</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + data.reference.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Warehouse</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + data.warehouse.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Detail</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        // detail
        html_body += '<div class="row">'
        data.machine_transfer_detail.forEach(el => {
            html_body += '<div class="col">'
            html_body += '<p class="m-0 small-text">' + el.item.name + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto text-end">'
            html_body += '<p class="m-0 small-text"><span class="text-orange">' + number_format(el.qty) + '</span> <b>' + el.unit.name + '</b></p>'
            html_body += '</div>'
        });

        html_body += '</div>'
        // detail
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-12">'

        html_body += '<div class="row pt-5">'
        html_body += '<div class="col" style="height:50px;">'
        html_body += '<button class=" w-100 h-100 btn btn-sm btn-outline-danger" onclick="approvalData(' + id + ',0,' + data.machine_next + ')"><i class="me-2 fa fa-times"></i> Reject</button>'
        html_body += '</div>'
        html_body += '<div class="col" style="height:50px;">'
        html_body += '<button class=" w-100 h-100 btn btn-sm btn-outline-success" onclick="approvalData(' + id + ',1,' + data.machine_next + ')"><i class="me-2 fa fa-check"></i> Accept</button>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pt-0 pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="">Simpan</button>'
        $('#modalFooter').html(html_footer).addClass('d-none');
    }

    function approvalData(id, approval, machine_next) {
        var isSendNextMachine = 0
        if (machine_next) {
            isSendNextMachine = 1
        }
        Swal.fire({
            text: 'Apakah anda yakin ingin menyetujui data tersebut ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var button = '#btnSimpan'
                var url = '<?php echo api_produksi('setMachineTransferReceive'); ?>'
                var data = {
                    id: id,
                    isReceive: approval,
                    employeeId: user_id,
                    isSendNextMachine: isSendNextMachine,
                }
                kelolaData(data, type, url, button)
            }
        })

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
                chooseWarehouse(choosenId)
            }
        });
    }

    function fillForm(event, id) {
        const value = event.target.value;
        const stok = event.target.dataset.stok;
        colorizedValue(value, stok, id)
    }

    function colorizedValue(value, stok, id, material_id) {
        var data = itemIdSelected.find((v, k) => {
            if (v.item.id == id) return true
        })
        data.qty_fill = value
        if (value) {
            if (parseFloat(value) <= parseFloat(stok)) {
                $('#cardHasil' + id).removeClass('bg-light-danger')
                $('#cardHasil' + id).addClass('bg-light-success')
            } else if (parseFloat(value) > parseFloat(stok)) {
                $('#cardHasil' + id).removeClass('bg-light-success')
                $('#cardHasil' + id).addClass('bg-light-danger')
            }
        } else {
            $('#cardHasil' + id).removeClass('bg-light-success')
            $('#cardHasil' + id).removeClass('bg-light-danger')
        }
        eventButton()
    }

    function eventButton() {
        var available = checkDataValidity(itemIdSelected)
        if (available) {
            $('#btnSimpan').removeAttr('disabled', true)
        } else {
            $('#btnSimpan').attr('disabled', true)
        }
    }

    function checkDataValidity(data) {
        for (let i = 0; i < data.length; i++) {
            const item = data[i];

            if (parseFloat(item.qty_fill) > parseFloat(item.qty)) {
                return 0;
            }
        }
        if (!$('#tujuanTransaksi').val()) {
            return 0
        }
        return 1;
    }
</script>