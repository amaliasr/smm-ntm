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

    .font-small {
        font-size: 11px;
    }

    .table {
        border-color: #808080 !important;
    }

    .fixed-right {
        position: fixed;
        right: 0;
        width: 120px;
        z-index: 1030;
    }

    .start-25 {
        left: 25% !important;
    }

    .start-10 {
        left: 10% !important;
    }

    .bg-gradient-material_request {
        background-color: #9A1663 !important;
        background-image: linear-gradient(135deg,
                #9A1663 0%,
                rgba(224, 20, 76, 0.8) 100%) !important;
    }

    .translate-samping {
        transform: translate(0%, -50%) !important;
    }

    .bg-oyen {
        background-color: #EF9A53;
    }

    .text-oyen {
        color: #EF9A53;
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
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-material_request pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            Create Material Request
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <!-- side count -->
    <!-- <div class="fixed-bottom">
        <div class="card shadow" id="targetPane">
            <div class="card-body p-2">
                <div class="row p-0">
                    <div class="col-6 text-center p-0 align-self-center">
                        <p class="m-0 text-orange" style="font-size: 14px;"><b>PLAN 1 WEEK</b></p>
                    </div>
                    <div class="col-auto p-0 align-self-center">
                        <div class="row p-0" id="detailTargetPane">
                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <div class="col-auto text-center align-self-center">
                                    <p class="m-0 text-orange" style="font-size: 14px;">ABLF 20</p>
                                    <p class="m-0" style="font-size: 11px;"><b><span class="">2,000</span> / 2,000</b></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- side count -->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm position-relative mb-3" style="border: 0px;border-radius:0%">
                    <!-- <h3><span class="position-absolute top-0 start-10 translate-samping badge bg-warning">Planning</span></h3> -->
                    <div class="card-header text-white bg-oyen" style="border:0px;cursor:pointer;border-radius:0%" data-bs-toggle="collapse" data-bs-target="#collapseExample0" aria-expanded="false" aria-controls="collapseExample0">
                        <h6 class="m-0 float-start text-white"><b>PLANNING</b></h6>
                        <i class="fa fa-chevron-up fa-1x float-end" id="iconChevron0"></i>
                    </div>
                    <div class="collapse show head-collapse" id="collapseExample0" data-key="0">
                        <div class="card-body pt-3">
                            <div class="row" id="dataPlanning">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm position-relative mb-3" style="border: 0px;border-radius:0%">
                    <!-- <h3><span class="position-absolute top-0 start-10 translate-samping badge bg-warning">Planning</span></h3> -->
                    <div class="card-header text-white bg-oyen" style="border:0px;cursor:pointer;border-radius:0%" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                        <h6 class="m-0 float-start text-white"><b>DRAFT MATERIAL</b></h6>
                        <i class="fa fa-chevron-up fa-1x float-end" id="iconChevron1"></i>
                    </div>
                    <div class="collapse show head-collapse" id="collapseExample1" data-key="1">
                        <div class="card-body pt-3">
                            <div class="row" id="dataDraft">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm position-relative mb-3" style="border: 0px;border-radius:0%">
                    <!-- <h3><span class="position-absolute top-0 start-10 translate-samping badge bg-warning">Planning</span></h3> -->
                    <div class="card-header text-white bg-oyen" style="border:0px;cursor:pointer;border-radius:0%" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <h6 class="m-0 float-start text-white"><b>LOGS MATERIAL REQUEST</b></h6>
                        <i class="fa fa-chevron-up fa-1x float-end" id="iconChevron2"></i>
                    </div>
                    <div class="collapse show head-collapse" id="collapseExample2" data-key="2">
                        <div class="card-body pt-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card shadow-none mt-2 bd-callout-0">
                                        <div class="card-body p-2">
                                            <div class="row">
                                                <div class="col">
                                                    <b class="small">#MR-1234</b>
                                                    <p class="m-0 font-small">Minggu, 1 Januari 2023</p>
                                                </div>
                                                <div class="col">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 mb-4">
                <div class="card shadow-sm position-relative" style="border-radius:0%">
                    <!-- <h3><span class="position-absolute top-0 start-10 translate-samping badge bg-warning">List Request</span></h3> -->
                    <div class="card-header" style="border-radius:0%">
                        <div class="row">
                            <div class="col-6 align-self-center">
                                <p class="m-0 text-dark-grey">#KODEMATERIAL1234</p>
                                <h5 class="m-0 "><b>Minggu, 1 JANUARI 2023</b></h5>
                            </div>
                            <div class="col-6 align-self-center text-end">
                                <div class="row">
                                    <div class="col-6 font-small text-dark p-0 pe-3">Jenis Produksi</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><b><span class="badge bg-primary">SKM</span></b></div>
                                    <div class="col-6 font-small text-dark p-0 pe-3">Shift</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><b>#1 (07.00 - 15.00)</b></div>
                                    <div class="col-6 font-small text-dark p-0 pe-3">Created By</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><i class="fa fa-user me-2"></i><b>MADE</b></div>
                                    <div class="col-6 font-small text-dark p-0 pe-3">Time Created</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><i class="fa fa-calendar-o me-2"></i><b>01-01-2023 07:01:00</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 pt-2">
                                <h3 class="m-0"><b>MAKER</b></h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-sm">
                                        <thead>
                                            <tr class="bg-grey text-dark">
                                                <th class="p-2 font-small" rowspan="2">ID MATERIAL</th>
                                                <th class="p-2 font-small" rowspan="2" style="width: 300px;">Nama Bahan</th>
                                                <th class="p-2 font-small" rowspan="2">Satuan</th>
                                                <th class="p-2 font-small" colspan="3">Mesin Maker</th>
                                            </tr>
                                            <tr class="bg-grey text-dark">
                                                <th class="p-2 font-small">MK9-A</th>
                                                <th class="p-2 font-small">MK9-B</th>
                                                <th class="p-2 font-small">MK9-C</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td class="p-2 font-small">RM.001</td>
                                                    <td class="p-2 font-small">Filter Reg</td>
                                                    <td class="p-2 font-small">Tray</td>
                                                    <?php for ($j = 0; $j < 3; $j++) { ?>
                                                        <td class="p-0 font-small"><input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:11px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="..."></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
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

<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
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
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0" style="border:0px;">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        // html += '<i class="small mb-5">Memuat Data</i><br>'
        html += '<div class="loadingio-spinner-ellipsis-6qq63lm6xx6"><div class="ldio-4vsyzdoqibk">'
        html += '<div></div><div></div><div></div><div></div><div></div>'
        html += '</div></div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)

    }

    function notFound(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0" style="border:0px;">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small">Tidak Ada Data yang Tersedia</i>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)
    }
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var id_draft = '<?= $id ?>'
    var data_user = ""
    var data_plan = ""

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                notFound('#dataPlanning')
            },
            beforeSend: function() {
                loadingData('#dataPlanning')
            },
            success: function(response) {
                data_user = response['data']
                if (id_draft == "") {
                    chooseDate()
                } else {
                    getData()
                }
            }
        })
    })

    function chooseDate() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Planning</h5>'
        html_header += '<div class="input-group w-50">'
        html_header += '<input class="form-control form-control-sm pe-0" type="text" placeholder="Cari Kode Plan / Tanggal" aria-label="Search" id="search_nama">'
        html_header += '<span class="input-group-text">'
        html_header += '<i class="fa fa-search"></i>'
        html_header += '</span>'
        html_header += '</div>'
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<div class="card shadow-sm mb-2" style="cursor:pointer;">'
        html_body += '<div class="card-body">'

        html_body += '<div class="row">'
        html_body += '<div class="col-8 align-self-center">'
        html_body += '<p class="m-0">#KODEPLANNING123</p>'
        html_body += '<p class="m-0"><b>Minggu, 1 Januari 2022 <span class="badge bg-success">Today</span></b></p>'
        html_body += '</div>'
        html_body += '<div class="col-4 align-self-end">'
        html_body += '<p class="m-0 font-small">MR Created : <span class="fw-bold text-orange">2</span> Times</p>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#modalFooter').addClass('d-none');
    }

    function getData() {
        $.ajax({
            url: "<?= api_produksi('loadPageMaterialRequestCreate'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                draftId: id_draft,
                employeeId: user_id,
            },
            error: function(xhr) {
                notFound('#dataPlanning')
            },
            beforeSend: function() {
                loadingData('#dataPlanning')
            },
            success: function(response) {
                data_plan = response['data']
                console.log(data_plan)
                if (data_plan['productionPlan'].length > 0) {
                    dataPlanning()
                } else {
                    notFound('#dataPlanning')
                }
                if (data_plan['draft'].length > 0) {
                    dataDraft()
                } else {
                    notFound('#dataDraft')
                }
            }
        })
    }

    function dataPlanning() {
        var html = ""
        html += '<div class="col-12 small">'
        html += '<b class="text-orange" style="font-size: 14px;">DETAIL</b>'
        html += '<div class="row pt-2">'
        html += '<div class="col-6 pt-1 pb-1 small">No. Planning</div>'
        html += '<div class="col-6 pt-1 pb-1 small text-end"><b>#' + data_plan['productionPlan'][0]['code'] + '</b></div>'
        html += '<div class="col-6 pt-1 pb-1 small">Date Planning</div>'
        html += '<div class="col-6 pt-1 pb-1 small text-end"><b>' + data_plan['productionPlan'][0]['date'] + '</b></div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<hr>'
        html += '</div>'
        html += '<div class="col-12 pt-2 small">'
        html += '<b class="text-orange" style="font-size: 14px;">INFORMATION ITEMS</b>'
        $.each(data_plan['productionPlan'][0]['detail'], function(key, value) {
            html += '<div class="card shadow-none mt-2 bd-callout-' + key + '">'
            html += '<div class="card-body p-2">'
            html += '<b class="small">' + value['machine_type']['name'] + '</b>'

            html += '<div class="row pt-2">'
            $.each(value['data'], function(keys, values) {
                $.each(values['data'], function(keys2, values2) {
                    html += '<div class="col-4 pt-1 pb-1 font-small text-oyen"><b>' + values2['product']['code'] + '</b></div>'
                    html += '<div class="col-4 pt-1 pb-1 font-small">' + values['machine']['name'] + '</div>'
                    html += '<div class="col-4 pt-1 pb-1 font-small text-end"><b>' + values2['qty'] + ' ' + values2['unit']['name'] + '</b></div>'
                })
            })
            html += '</div>'

            html += '</div>'
            html += '</div>'
        })
        html += '</div>'
        $('#dataPlanning').html(html)
    }

    var data_draft = []
    var data_draft_group_machine_type = []
    var machine_type = []

    function dataDraft() {
        $.each(data_plan['draft'][0]['detail'], function(key, value) {
            // machine type
            $.each(value['machine'], function(keys, values) {
                // machine
                $.each(values['material'][0], function(keys2, values2) {
                    data_draft.push({
                        'machine_type_id': value['machine_type']['id'],
                        'machine_type_name': value['machine_type']['name'],
                        'machine_id': values['machine']['id'],
                        'machine_name': values['machine']['name'],
                        'material_id': values2['material']['id'],
                        'material_name': values2['material']['name'],
                        'unit_id': values2['unit']['id'],
                        'unit_name': values2['unit']['name'],
                        'qty': values2['qty'],
                    })
                })
            })
        })
        console.log(data_draft)
        data_draft_group_machine_type = groupAndSum(data_draft, ['machine_type_id', 'machine_type_name', 'material_id', 'material_name', 'unit_name'], ['qty']);
        machine_type = groupAndSum(data_draft_group_machine_type, ['machine_type_id', 'machine_type_name'], []);
        formDraft()
    }

    function formDraft() {
        var html = ""
        html += '<div class="col-12 small">'
        html += '<b class="text-orange" style="font-size: 14px;">DETAIL</b>'
        html += '<div class="row pt-2">'
        html += '<div class="col-6 pt-1 pb-1 small">No. Draft</div>'
        html += '<div class="col-6 pt-1 pb-1 small text-end"><b>#' + data_plan['draft'][0]['code'] + '</b></div>'
        html += '<div class="col-6 pt-1 pb-1 small">Time Draft</div>'
        html += '<div class="col-6 pt-1 pb-1 small text-end"><b>' + getDateTime(data_plan['draft'][0]['created_at']) + '</b></div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<hr>'
        html += '</div>'
        html += '<div class="col-12 pt-2 small">'
        html += '<b class="text-orange" style="font-size: 14px;">INFORMATION ITEMS</b>'
        $.each(machine_type, function(key, value) {
            html += '<div class="card shadow-none mt-2 bd-callout-' + key + '">'
            html += '<div class="card-body p-2">'
            html += '<b class="small">' + value['machine_type_name'] + '</b>'
            html += '<div class="row pt-2">'

            $.each(data_draft_group_machine_type, function(keys, values) {
                if (values['machine_type_id'] == value['machine_type_id']) {
                    var data = data_draft.filter((values2, keys2) => {
                        if (values2['machine_type_id'] === values['machine_type_id'] && values2['material_id'] === values['material_id']) return true
                    })
                    var text = values['material_name'].split(' ')
                    if (text[2] == undefined) {
                        text[2] = ""
                    }
                    var text2 = text[0] + ' ' + text[1] + ' ' + text[2]
                    html += '<div class="col-7 pt-1 pb-1 font-small text-oyen"><b>' + text2 + ' <span class="badge bg-orange" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="...">' + data.length + ' <i class="fa fa-cog"></i></span></b></div>'
                    html += '<div class="col-5 pt-1 pb-1 font-small text-end"><b>' + values['qty'] + ' / ' + values['qty'] + ' ' + values['unit_name'] + '</b></div>'
                }
            })

            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        html += '</div>'
        $('#dataDraft').html(html)
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    }

    $('.head-collapse').on('hide.bs.collapse', function() {
        var key = $(this).data('key')
        $('#iconChevron' + key).removeClass('fa-chevron-up')
        $('#iconChevron' + key).addClass('fa-chevron-down')
    })
    $('.head-collapse').on('show.bs.collapse', function() {
        var key = $(this).data('key')
        $('#iconChevron' + key).addClass('fa-chevron-up')
        $('#iconChevron' + key).removeClass('fa-chevron-down')
    })
</script>