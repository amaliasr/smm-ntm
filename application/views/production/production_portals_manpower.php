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

    .bg-position-1 {
        background-color: #884A39;
    }

    .bg-position-2 {
        background-color: #C38154;
    }

    .bg-position-3 {
        background-color: #47A992;
    }

    .bg-position-4 {
        background-color: #A0D8B3;
    }

    .bg-position-5 {
        background-color: #A2A378;
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

    th:first-child,
    td:first-child {
        position: sticky;
        left: 0px;
        background-color: white;
        z-index: 1;
        /* border: 1px solid rgba(33, 40, 50, 0.125); */
        border: 1px solid #ddd;
    }

    .bg-ijo-polos {
        background-color: #F9E0BB !important;
    }

    .text-darker-grey {
        color: #374259;
    }

    .cursor {
        cursor: pointer;
    }

    .modal-backdrop.show {
        opacity: 0.5;
        z-index: 9999 !important;
    }

    .offcanvas {
        z-index: 99999 !important;
    }

    .litepicker {
        z-index: 1000000 !important;
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
                    <h1 class="m-0"><b>Production Schedule</b></h1>
                    <p class="m-0 small-text">Jadwal kegiatan produksi</p>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 col-lg-12">
                    <div class="card shadow-none mb-4" style="border-radius: 0px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="m-0 small-text text-start"><b>My Working Plan</b></p>
                                    <p class="m-0 small-text" id="dateRange">-</p>
                                </div>
                                <div class="col text-end">
                                    <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none" onclick="loadDataPlanning()"><i class="fa fa-refresh me-2"></i>Refresh</button>
                                    <button type="button" class="btn btn-primary btn-sm" onclick="filterCanvas()"><i class="fa fa-filter me-2"></i> Filter</button>
                                </div>
                                <div class="col-12 pt-3">
                                    <div class="h-100">
                                        <div class="table-responsive" id="table-product-trend-wrapper">
                                            <table class="table table-bordered" style="width: 100%;white-space:nowrap;">
                                                <thead>
                                                    <tr id="date_list">
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
                </div>
                <div class="col-12 col-lg-7">
                    <div class="card shadow-none h-100" style="border-radius: 0px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <p class="m-0 small-text text-start"><b>Daily Tasks</b></p>
                                </div>
                                <div class="col text-end">

                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="col-12" id="dailyTask">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="card shadow-none h-100" style="border-radius: 0px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <p class="m-0 small-text text-start"><b>Insight</b></p>
                                </div>
                                <div class="col text-end">

                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="col-12" id="insight">
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="true">
    <div class="offcanvas-header p-5" id="canvasHeader">
    </div>
    <div class="offcanvas-body p-5" id="canvasBody">
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

    function convertTimeFormat(timeString) {
        // Memisahkan jam, menit, dan detik dari string waktu
        var timeParts = timeString.split(":");
        var hour = timeParts[0];
        var minute = timeParts[1];

        // Menggabungkan jam dan menit dengan tanda titik sebagai pemisah
        var formattedTime = hour + "." + minute;

        return formattedTime;
    }

    function convertToDailyTasks(data) {
        const transformedData = [];

        // Mengelompokkan data berdasarkan tanggal
        var a = 0
        const groupedData = data.reduce((acc, item) => {
            const date = new Date(item.date);
            const formattedDate = `${date.getDate()} ${date.toLocaleString('default', { month: 'long' })}`;

            // if (!acc[formattedDate]) {
            acc[a] = {
                date: formattedDate,
                posisi: item.posisi,
                note: item.note,
                shift_id: item.shift_id,
                shift_name: item.shift_name,
                work_plan_table_id: item.work_plan_table_id,
                work_plan_table_type: item.work_plan_table_type,
                machine: [],
            };
            // }

            acc[a].machine.push({
                machine_id: item.machine_id,
                machine_name: item.machine_name,
            });

            a++
            return acc;
        }, {});

        // Mengubah objek hasil pengelompokkan menjadi array
        for (const key in groupedData) {
            transformedData.push(groupedData[key]);
        }
        // Mengurutkan data berdasarkan tanggal (urutan tertinggi ke terendah)
        transformedData.sort((a, b) => {
            const dateA = new Date(a.date);
            const dateB = new Date(b.date);
            return dateB - dateA;
        });

        return transformedData;
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

    function generateDateThisMonth() {
        var currentDate = new Date();
        var currentMonth = currentDate.getMonth() + 1;
        var currentYear = currentDate.getFullYear();
        var daysInMonth = new Date(currentYear, currentMonth, 0).getDate();
        var datesInMonth = [];
        for (var i = 1; i <= daysInMonth; i++) {
            var day = i < 10 ? '0' + i : i;
            var month = currentMonth < 10 ? '0' + currentMonth : currentMonth;
            var date = currentYear + '-' + month + '-' + day;
            datesInMonth.push(date);
        }
        return datesInMonth
    }

    function loadingData(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
    }

    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    function empty(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><p class="small"><i>' + text + '</i></p><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player></div></div>')
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
    // var hariIni = '2023-06-13'
    var hariIni = currentDate()
    var dateStart
    var dateEnd

    $(document).ready(function() {
        // chooseDate()
        loadDataPlanning()
    })

    var html_expired_plan = ''
    var html_collapse = ""
    var jumlah_expired_plan = 0


    function loadDataPlanning() {
        var data = {
            productionTypeId: 1,
            employeeId: user_id,
        }
        if (dateStart != undefined) {
            data['dateStart'] = dateStart
            data['dateEnd'] = dateEnd
        }
        var url = "<?= api_produksi('loadPageWorkPlanSchedule'); ?>"
        getData(data, url)
    }

    var data_work = ''
    var id_production_plan_clicked = ''

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
                $('#modal').modal('hide')
                $('#time').html(currentDateTimeNoSeconds())
                data_work = response['data']
                dateStart = data_work.schedule[0].line_shift[0].date_shift[0].date
                dateEnd = data_work.schedule[0].line_shift[0].date_shift[parseInt(data_work.schedule[0].line_shift[0].date_shift.length) - 1].date
                $('#dateRange').html(formatInternationalDate(data_work.schedule[0].line_shift[0].date_shift[0].date) + ' - ' + formatInternationalDate(data_work.schedule[0].line_shift[0].date_shift[parseInt(data_work.schedule[0].line_shift[0].date_shift.length) - 1].date))
                arrangeVariable()
            }
        })
    }

    var data_shift_person = []
    var data_shift_person_complete = []
    var dataDailyTask

    function arrangeVariable() {
        // console.log(data_work.schedule)
        data_work.schedule.forEach(a => {
            // section
            a.line_shift.forEach(b => {
                // line
                b.date_shift.forEach(c => {
                    // date shift
                    data_shift_person.push({
                        'section': a.section,
                        'line_id': b.line.id,
                        'line_name': b.line.name,
                        'date': c.date,
                        'shift_person': c.shift_person,
                    })
                    if (c.shift_person != null) {
                        c.shift_person.forEach(d => {
                            // shift
                            // posisi
                            var dataShift = data_work.shift[0].shift_list.find((v, k) => {
                                if (v.id == d.shift) return true
                            })
                            data_shift_person_complete.push({
                                'machine_id': b.line.id,
                                'machine_name': b.line.name,
                                'date': c.date,
                                'shift_id': d.shift,
                                'shift_name': 'Shift ' + convertTimeFormat(dataShift.start_time) + ' - ' + convertTimeFormat(dataShift.end_time),
                                'posisi': d.person.person_label,
                                'work_plan_table_id': d.person.work_plan_table.id,
                                'work_plan_table_type': d.person.work_plan_table.type,
                                'note': d.person.note,
                            })
                        });
                    }
                });
            });
        });
        dataDailyTask = convertToDailyTasks(data_shift_person_complete)
        createHeaderPlanner()
    }

    function createHeaderPlanner() {
        var html = ''
        html += '<th class=""><b>Machine | Date</b></th>'
        data_work.schedule[0].line_shift[0].date_shift.forEach(e => {
            var today = ''
            var classToday = ''
            if (e.date == hariIni) {
                today = 'bg-ijo-polos text-darker-grey'
                classToday = 'today'
            }
            html += '<th class="small-text ' + today + ' ' + classToday + '">' + formatInternationalDate(e.date) + '</th>'
        });
        $('#date_list').html(html)
        createBodyPlanner()
    }

    function createBodyPlanner() {
        var html = ''
        data_work.sectionLine.forEach(e => {
            html += '<tr>'
            html += '<td class="small-text align-selft-center bg-light" style="vertical-align: middle;"><b>' + e.section + '</b></td>'
            html += '<td class="small-text align-selft-center bg-light" style="vertical-align: middle;" colspan="' + data_work.schedule[0].line_shift[0].date_shift.length + '"></td>'
            html += '</tr>'
            e.line.forEach(el => {
                html += '<tr>'
                html += '<td class="text-center small-text align-selft-center" style="vertical-align: middle;"><b>' + el.name + '</b></td>'
                // loop date
                data_work.schedule[0].line_shift[0].date_shift.forEach(d => {
                    html += '<td class="p-1">'
                    var data = data_shift_person.find((v, k) => {
                        if (v.section == e.section && v.line_id == el.id && v.date == d.date) return true
                    })
                    if (data.shift_person != null) {
                        // console.log(data.shift_person)
                        var a = 1
                        data.shift_person.forEach(s => {
                            var data = data_work.shift[0].shift_list.find((v, k) => {
                                if (v.id == s.shift) return true
                            })
                            var today = 'bg-grey'
                            if (d.date == hariIni) {
                                today = 'bg-ijo-polos'
                            }
                            html += '<div class="card mb-2 shadow-none rounded-3 ' + today + '" style="cursor:pointer;" onclick="openDailyTask(' + "'" + s.person.id + "'" + ',' + "'" + s.person.person_label + "'" + ')">'
                            html += '<div class="card-body  p-2">'

                            html += '<div class="row">'
                            html += '<div class="col-auto">'
                            html += '<p class="m-0 super-small-text text-dark"><b>Shift ' + convertTimeFormat(data.start_time) + ' - ' + convertTimeFormat(data.end_time) + '</b></p>'
                            html += '</div>'
                            html += '<div class="col">'

                            // s.person.forEach(p => {
                            html += '<span class="badge rounded-pill bg-position-' + a + ' me-1 super-small-text">' + s.person.person_label + '</span>'
                            // });
                            html += '</div>'
                            html += '</div>'

                            html += '</div>'
                            html += '</div>'
                            a++
                        });
                    }
                    html += '</td>'
                })
                // loop date
                html += '</tr>'
            });
        })
        $('#body_list').html(html)
        draggableTables('table-product-trend-wrapper')
        focusDate()
        dailyTask()
    }

    function focusDate() {
        var tableContainer = $(".table-responsive");
        // Cari elemen dengan class "date-20"
        var targetDate = $(".today");
        // Hitung posisi horizontal elemen target
        var scrollLeft = targetDate.position().left - (tableContainer.width() / 2) + (targetDate.width() / 2);
        // Gerakkan scroll horizontal ke posisi target
        tableContainer.scrollLeft(scrollLeft);
    }

    function dailyTask() {
        var html = ''
        // console.log(dataDailyTask)
        dataDailyTask.forEach(e => {
            const dateString = e.date;
            const parts = dateString.split(" ");
            const day = parseInt(parts[0]);
            const month = parts[1];
            html += '<div class="card card-hoper shadow-sm mb-2" style="cursor:pointer;" onclick="openDailyTask(' + "'" + e.work_plan_table_id + "'" + ',' + "'" + e.posisi + "'" + ')">'
            html += '<div class="row g-0">'
            html += '<div class="col-md-2 bg-skm">'
            html += '<div class="row d-flex align-items-center h-100">'
            html += '<div class="col text-center">'
            html += '<h3 class="m-0 text-white"><b>' + day + '</b></h3>'
            html += '<p class="m-0 text-white small">' + month + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-md-10">'
            html += '<div class="card-body">'

            html += '<div class="row">'
            html += '<div class="col-12 align-self-center">'
            html += '</div>'
            html += '</div>'
            // <span class="badge bg-danger ms-1">R</span>
            html += '<p class="m-0 small-text text-orange"><b>' + e.posisi + '</b></p>'
            html += '<p class="m-0 small"><b>' + e.shift_name + '</b> <span id="revisionSign"></span></p>'
            html += '<p class="m-0 mb-2 small-text">'
            e.machine.forEach(f => {
                html += '<span class="badge rounded-pill bg-skm me-1">' + f.machine_name + '</span>'
            });
            html += '</p>'
            if (e.note == null) {
                html += '<p class="m-0 super-small-text">Notes : -</p>'
            } else {
                html += '<p class="m-0 super-small-text">Notes : ' + shortenText(e.note, 200) + '</p>'
            }

            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#dailyTask').html(html)
        insight()
    }

    function openDailyTask(id, label) {
        // console.log(id)
        var url = '<?= base_url() ?>production/productionEntry/default/' + btoa(id) + '/' + btoa(label)
        window.open(url, '_blank')
    }

    function insight() {

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
                    loadDataPlanning()
                });
            },
        })
    }

    function changeFilter() {
        // dateStart = $('#dateStart').val()
        // console.log(dateStart)
        // dateEnd = $('#dateEnd').val()
    }
</script>