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

    .card-hoper:hover {
        background-color: #EDEDED;
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

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FED049;
    }

    .trans-select {
        border: none;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: none;
        /* Ganti dengan gambar transparan */
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 10px 10px;
        /* Sesuaikan dengan ukuran yang diinginkan */
        padding-right: 15px;
        /* Sesuaikan dengan ukuran gambar */
        border-radius: 0px;
        border: none;
        box-shadow: none;
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
    <div class="fixed-bottom">
        <div class="card shadow" id="targetPane" style="border-radius:0px;">
            <div class="card-body p-2">
                <div class="row p-0">
                    <div class="col p-0 ps-4 pe-4 text-end">
                        <button type="button" class="btn btn-success btn-sm btnSimpan" onclick="createMaterialRequest()"><i class="fa fa-paper-plane me-2"></i> Simpan dan Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                                <div class="col-12 text-center">
                                                    <i class="font-small">Fitur Belum Tersedia</i>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col">
                                                    <b class="small">#MR-1234</b>
                                                    <p class="m-0 font-small">Minggu, 1 Januari 2023</p>
                                                </div>
                                                <div class="col">

                                                </div>
                                            </div> -->
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
                                <p class="m-0 text-dark-grey">#<span id="kodeMaterial"><i>Loading. . .</i></span></p>
                                <h5 class="m-0 "><b id="today"><i>Loading . . .</i></b></h5>
                            </div>
                            <div class="col-6 align-self-center text-end">
                                <div class="row">
                                    <div class="col-6 font-small text-dark p-0 pe-3">Jenis Produksi</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><b><span class="badge bg-primary" id="prodType"><i>Loading . . .</i></span></b></div>
                                    <div class="col-6 font-small text-dark p-0 pe-3">Shift</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><b>#1 (07.00 - 15.00)</b></div>
                                    <div class="col-6 font-small text-dark p-0 pe-3">Created By</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><i class="fa fa-user me-2"></i><b id="fullName"></b></div>
                                    <div class="col-6 font-small text-dark p-0 pe-3">Time Created</div>
                                    <div class="col-6 font-small text-dark p-0 pe-3 text-end"><i class="fa fa-calendar-o me-2"></i><b id="time"><i>Loading . . .</i></b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row" id="listMaterialRequest">
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
    var timeDisplay = document.getElementById("time");
    var dateDisplay = document.getElementById("today");
    var kodeDisplay = document.getElementById("kodeMaterial");
    var codeMaterial = ''
    var codeProd = ''

    function refreshTime() {
        // Parse our locale string to [date, time]
        var date = new Date().toLocaleString().split(" ");

        // Now we can access our time at date[1], and monthdayyear @ date[0]
        var time = date[1].replace('.', ':');
        var mdy = date[0];

        // We then parse  the mdy into parts
        mdy = mdy.split('/');
        var month = parseInt(mdy[0]);
        if (month < 10) {
            month = "0" + month;
        }
        var day = parseInt(mdy[1]);
        if (day < 10) {
            day = "0" + day;
        }
        var year = parseInt(mdy[2]);

        // Putting it all together
        var formattedDate = day + '-' + month + '-' + year + ' ' + time;

        timeDisplay.innerHTML = formattedDate;
        codeMaterial = 'MR' + codeProd + '-' + year + month + day + time.split(':')[0] + time.split(':')[1]
        kodeMaterial.innerHTML = codeMaterial
    }

    setInterval(refreshTime, 1000);

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

    function notFoundWithButton(location, link, textBtn, textWarning) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0" style="border:0px;">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small">' + textWarning + '</i>'
        html += '<br>'
        html += '<button class="btn btn-sm mt-2 btn-success" onclick="linkToLinkLive(' + "'" + link + "'" + ')">' + textBtn + '</button>'
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
    var full_name = '<?= $this->session->userdata('full_name') ?>'
    var id_draft = '<?= $id ?>'
    var data_user = ""
    var data_plan = ""
    var list_data_plan = []

    function shortenName(data, jumlah) {
        var text = data.split(' ')
        var text2 = ""
        for (let i = 0; i < jumlah; i++) {
            if (text[i] == undefined) {
                text2 = text2 + ''
            } else {
                text2 = text2 + '' + text[i] + ' '
            }
        }
        return text2
    }

    $(document).ready(function() {
        $('#layoutSidenav_content').addClass('bg-white')
        $('#fullName').html(shortenName(full_name, 2))
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                notFound('#dataPlanning')
                notFound('#dataDraft')
                notFound('#listMaterialRequest')
            },
            beforeSend: function() {
                loadingData('#dataPlanning')
                loadingData('#dataDraft')
                loadingData('#listMaterialRequest')
            },
            success: function(response) {
                data_user = response['data']
                if (id_draft == "") {
                    chooseDate()
                } else {
                    var data = {
                        draftId: id_draft,
                        employeeId: user_id,
                    }
                    var url = "<?= api_produksi('loadPageMaterialRequestCreate'); ?>"
                    getData(data, url)
                }
            }
        })
    })


    function chooseDate() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Planning</h5>'
        html_header += '<div class="input-group w-50">'
        html_header += '<input class="form-control form-control-sm pe-0" type="text" autocomplete="off" placeholder="Cari Kode Plan / Tanggal" aria-label="Search" id="search_planning">'
        html_header += '<span class="input-group-text">'
        html_header += '<i class="fa fa-search"></i>'
        html_header += '</span>'
        html_header += '</div>'
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12" id="listPlanning">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#modalFooter').addClass('d-none');
        getDataPlanning()
    }

    var data_after_click_plan = ""

    function getDataPlanning() {
        $.ajax({
            url: "<?= api_produksi('loadPageMaterialRequestCreate'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {
                notFound('#listPlanning')
            },
            beforeSend: function() {
                loadingData('#listPlanning')
            },
            success: function(response) {
                data_after_click_plan = response['data']
                // console.log(data_after_click_plan['listProductionPlan'])
                $.each(data_after_click_plan['listProductionPlan'], function(key, value) {
                    // kode smd
                    $.each(value['detail'], function(keys, values) {
                        // tgl smd
                        list_data_plan.push({
                            'id': value['id'],
                            'code': value['code'],
                            'production_type': value['production_type']['id'],
                            'production_type_name': value['production_type']['name'],
                            'date': values['date'],
                        })
                    })
                })
                list_data_plan.sort(function(a, b) {
                    return new Date(a.date) - new Date(b.date);
                });
                formDataPlanning()
            }
        })
    }

    var html_expired_plan = ''
    var html_collapse = ""
    var jumlah_expired_plan = 0

    function formDataPlanning() {
        // console.log(list_data_plan)
        $('#listPlanning').empty()
        var html = ""
        html += '<div id="collapseExpired">'
        html += '</div>'
        if (list_data_plan.length != 0) {
            $.each(list_data_plan, function(key, value) {
                if (formatDate(value.date) < '') {
                    // if (formatDate(value.date) < currentDate()) {
                    jumlah_expired_plan++
                    html_expired_plan += '<div class="card card-hoper shadow-none mb-2 bg-light" id="card_search' + key + '">'
                    html_expired_plan += '<div class="card-body">'

                    html_expired_plan += '<div class="row">'
                    html_expired_plan += '<div class="col-8 align-self-center">'
                    html_expired_plan += '<p class="m-0 me-2 text_search" data-id="' + key + '">#' + value['code'] + '</p>'
                    html_expired_plan += '<p class="m-0"><b class="text_search" data-id="' + key + '">' + formatDateIndonesia(value['date']) + '</b></p>'
                    html_expired_plan += '</div>'
                    html_expired_plan += '<div class="col-4 align-self-end text-end">'
                    html_expired_plan += '<p class="m-0 small text-grey"><i>Expired</i></p>'
                    html_expired_plan += '</div>'
                    html_expired_plan += '</div>'

                    html_expired_plan += '</div>'
                    html_expired_plan += '</div>'
                } else {
                    html += '<div class="card card-hoper shadow-sm mb-2" style="cursor:pointer;" onclick="loadDataPlanning(' + value['id'] + ',' + "'" + value['date'] + "'" + ')" id="card_search' + key + '">'
                    html += '<div class="row g-0">'
                    html += '<div class="col-md-2 bg-' + value.production_type_name.toLowerCase() + '">'
                    html += '<div class="row d-flex align-items-center h-100">'
                    html += '<div class="col text-center">'
                    html += '<span class="text-white">' + value.production_type_name + '</span>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '<div class="col-md-10">'
                    html += '<div class="card-body">'

                    html += '<div class="row">'
                    html += '<div class="col-8 align-self-center">'
                    html += '<p class="m-0 text_search" data-id="' + key + '">#' + value['code'] + '</p>'
                    var today = ''
                    if (value['date'] == currentDate()) {
                        today = '<span class="badge bg-success">Today</span>'
                    }
                    html += '<p class="m-0"><b class="text_search" data-id="' + key + '">' + formatDateIndonesia(value['date']) + ' ' + today + '</b></p>'
                    html += '</div>'
                    html += '<div class="col-4 align-self-end">'
                    // html += '<p class="m-0 font-small">MR Created : <span class="fw-bold text-orange">2</span> Times</p>'
                    html += '</div>'
                    html += '</div>'

                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                }
            })
            html_expired_plan += '<div class="card card-hoper shadow-none mb-2 bg-danger" style="cursor:pointer;" onclick="switchCollapseExpired(0)">'
            html_expired_plan += '<div class="card-body">'

            html_expired_plan += '<div class="row">'
            html_expired_plan += '<div class="col-12 align-self-center text-center text-white">'
            html_expired_plan += 'Tutup Fitur <i class="fa fa-chevron-up ms-2"></i>'
            html_expired_plan += '</div>'
            html_expired_plan += '</div>'

            html_expired_plan += '</div>'
            html_expired_plan += '</div>'

            html_collapse += '<div class="card card-hoper shadow-none mb-2 bg-danger" style="cursor:pointer;" onclick="switchCollapseExpired(1)">'
            html_collapse += '<div class="card-body">'

            html_collapse += '<div class="row">'
            html_collapse += '<div class="col-12 align-self-center text-center text-white">'
            html_collapse += 'Terdapat ' + jumlah_expired_plan + ' Plan yang Telah Terlewat <i class="fa fa-chevron-down ms-2"></i>'
            html_collapse += '</div>'
            html_collapse += '</div>'

            html_collapse += '</div>'
            html_collapse += '</div>'
            $('#listPlanning').html(html)
            if (jumlah_expired_plan > 0) {
                switchCollapseExpired(0)
            }
        } else {
            notFoundWithButton('#listPlanning', '<?= base_url() ?>/production/planning/smd', 'Check into List Planning', 'Tidak Ada Planning Minggu ini yang Tersedia')
        }
    }

    function switchCollapseExpired(status) {
        if (status == 0) {
            // tutup
            $('#collapseExpired').html(html_collapse)
        } else {
            $('#collapseExpired').html(html_expired_plan)
        }
    }

    function loadDataPlanning(id, date) {
        var data = {
            productionPlanId: id,
            date: date,
            employeeId: user_id,
        }
        var url = "<?= api_produksi('getLoadPageMaterialRequestCreate'); ?>"
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
                notFound('#dataPlanning')
                notFound('#dataDraft')
                notFound('#listMaterialRequest')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
                loadingData('#dataPlanning')
                loadingData('#dataDraft')
                loadingData('#listMaterialRequest')
            },
            success: function(response) {
                showOverlay('hide')
                $('#modal').modal('hide')
                data_plan = response['data']
                dateDisplay.innerHTML = formatDateIndonesia(data_plan.productionPlan[0].date)
                codeProd = data_plan['productionPlan'][0]['production_type']['name']
                $('#prodType').html(codeProd)
                if (data_plan['materialItem'] == undefined) {
                    data_plan['materialItem'] = data_after_click_plan['materialItem']
                    data_plan['materialItemHeader'] = data_after_click_plan['materialItemHeader']
                }
                if (data_plan['productionPlan'].length > 0) {
                    dataPlanning()
                } else {
                    notFound('#dataPlanning')
                }
                if (data_plan['draft'].length > 0) {
                    dataDraft()
                } else {
                    notFoundWithButton('#dataDraft', '<?= base_url() ?>/production/draftMaterial/' + data_plan.productionPlan[0].id, 'Buat Draft Material', 'Tidak Ada Data yang Tersedia')
                    notFound('#listMaterialRequest')
                    dataMaterialRequest()
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
                    html += '<div class="col-7 pt-1 pb-1 font-small text-oyen"><b>' + shortenName(values['material_name'], 3) + ' <span class="badge bg-orange" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="...">' + data.length + ' <i class="fa fa-cog"></i></span></b></div>'
                    html += '<div class="col-5 pt-1 pb-1 font-small text-end"><b><span class="qtyMesin" id="qtyMesin' + values['machine_type_id'] + values['material_id'] + '">' + values['qty'] + '</span> / ' + values['qty'] + ' ' + values['unit_name'] + '</b></div>'
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
        dataMaterialRequest()
    }
    var machine_type = []
    var filled_cell = []

    function dataMaterialRequest() {
        // console.log(data_draft)
        var data = data_plan['materialItemHeader'].filter((value, key) => {
            if (value['detail'] != null) return true
        })
        // console.log(data_plan['materialItem'])
        var html = ""
        $.each(data, function(key, value) {
            html += '<div class="col-12 pt-2">'
            html += '<h3 class="m-0"><b>' + value['label'] + '</b></h3>'
            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-hover table-sm">'
            html += '<thead>'
            html += '<tr class="bg-grey text-dark">'
            html += '<th class="p-2 font-small" rowspan="2">ID MATERIAL</th>'
            html += '<th class="p-2 font-small" rowspan="2" style="width: 300px;">Nama Bahan</th>'
            html += '<th class="p-2 font-small" rowspan="2">Satuan</th>'
            html += '<th class="p-2 font-small" colspan="' + value['detail']['machine'].length + '">' + value['detail']['machine_type']['name'] + '</th>'
            html += '</tr>'
            html += '<tr class="bg-grey text-dark">'
            $.each(value['detail']['machine'], function(keys, values) {
                html += '<th class="p-2 font-small">' + values['code'] + '</th>'
            })
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            $.each(data_plan['materialItem'], function(keya, valuea) {
                if (value['detail']['machine_type']['id'] == valuea['machine_type'][0]['machine_type']['id']) {
                    html += '<tr>'
                    var name = valuea.material_alias
                    if (name == null) {
                        name = valuea.material_name
                    }
                    html += '<td class="p-2 font-small">' + valuea['material_code'] + '</td>'
                    html += '<td class="p-2 font-small">' + name + '</td>'
                    // html += '<td class="p-2 font-small">' + valuea['unit']['name'] + '</td>'
                    html += '<td class="p-2 font-small">'
                    html += '<select class="form-select trans-select font-small shadow-none" id="unitSelect' + valuea.material_id + '" style="cursor:pointer;padding:5px !important" data-item_id="' + valuea.material_id + '">'
                    valuea.unit_option.forEach(e => {
                        var select = ''
                        if (e.id == valuea.unit.id) {
                            select = 'selected'
                        }
                        html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
                    });
                    html += '<select>'
                    html += '</td>'
                    $.each(value['detail']['machine'], function(keys, values) {
                        // console.log(values['id'], valuea['material_id'])
                        var hasil = data_draft.find((values2, keys2) => {
                            if (values2.machine_id === values['id'] && values2.material_id === valuea['material_id']) return true
                        })
                        if (hasil == undefined) {
                            hasil = ''
                        } else {
                            hasil = hasil['qty']
                            filled_cell.push({
                                'machine_id': values['id'],
                                'material_id': valuea['material_id'],
                                'machine_type': value['detail']['machine_type']['id'],
                                'unit_id': valuea['unit']['id'],
                                'qty': hasil,
                            })
                        }
                        html += '<td class="p-0 font-small cellMaterial" id="cellMaterial' + values['id'] + valuea['material_id'] + '"><input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:11px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="..." value="' + hasil + '" id="inputMaterial' + values['id'] + valuea['material_id'] + '" data-machine="' + values['id'] + '" data-material="' + valuea['material_id'] + '" data-machine_type="' + value['detail']['machine_type']['id'] + '" data-unit="' + valuea['unit']['id'] + '"></td>'
                    })
                    html += '</tr>'
                }
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'

            html += '</div>'
        })
        html += '<div class="col-12 pt-2">'
        html += '<h3 class="m-0 mb-2 mt-2"><b>Catatan</b></h3>'
        html += '<textarea class="form-control" rows="5" id="catatan"></textarea>'
        html += '</div>'
        $('#listMaterialRequest').html(html)
        $('.nominal').number(true);
        collectDataInput()
    }

    $(document).on('keyup', '.jumlahPlanning', function(e) {
        collectDataInput()
    })

    function collectDataInput() {
        filled_cell = []
        var machine = $('.jumlahPlanning').map(function() {
            return $(this).data('machine');
        }).get();
        var material = $('.jumlahPlanning').map(function() {
            return $(this).data('material');
        }).get();
        var machine_type = $('.jumlahPlanning').map(function() {
            return $(this).data('machine_type');
        }).get();
        var unit_id = $('.jumlahPlanning').map(function() {
            return $(this).data('unit');
        }).get();
        var qty = $('.jumlahPlanning').map(function() {
            return $(this).val();
        }).get();
        for (let i = 0; i < qty.length; i++) {
            if (qty[i] != "") {
                filled_cell.push({
                    'machine_id': machine[i],
                    'material_id': material[i],
                    'machine_type': machine_type[i],
                    'unit_id': unit_id[i],
                    'qty': parseFloat(qty[i])
                })
            }
        }
        checkFilledForm()
    }

    function checkFilledForm() {
        $('.cellMaterial').removeClass('bg-light')
        $.each(filled_cell, function(key, value) {
            $('#cellMaterial' + value['machine_id'] + value['material_id']).addClass('bg-light')
        })
        correctingToDraft()
    }

    function correctingToDraft() {
        $('.qtyMesin').html('')
        var groupInput = groupAndSum(filled_cell, ['machine_type', 'material_id'], ['qty'])
        $.each(groupInput, function(key, value) {
            $('#qtyMesin' + value['machine_type'] + value['material_id']).html(number_format(value['qty']))
        })
    }

    function createMaterialRequest() {

        var data = {}
        var material_request = []
        var material_request_machine = []
        var material_request_item = []

        var id = new Date().getTime()
        var d = new Date();
        var month = d.getMonth() + 1;
        if (month < 10) {
            month = "0" + month;
        }
        material_request.push({
            'id': id,
            'production_plan_id': data_plan['productionPlan'][0]['id'],
            'production_type_id': data_plan['productionPlan'][0]['production_type']['id'],
            'date': formatDate(currentDateTime()),
            'code': codeMaterial,
            'created_at': currentDateTime(),
            'updated_at': currentDateTime(),
            'created_id': user_id,
            'note': $('#catatan').val(),
        })
        if (data_plan['draft'].length > 0) {
            material_request[0]['material_draft_id'] = data_plan['draft'][0]['id']
        }
        var mesin = groupAndSum(filled_cell, ['machine_id'], ['qty'])
        $.each(mesin, function(key, value) {
            var mcn_id = new Date().getTime() + '' + key
            material_request_machine.push({
                'id': mcn_id,
                'material_request_id': id,
                'machine_id': value['machine_id'],
            })
            $.each(filled_cell, function(keys, values) {
                if (values['machine_id'] == value['machine_id']) {
                    material_request_item.push({
                        'id': new Date().getTime() + '' + key + keys,
                        'material_request_machine_id': mcn_id,
                        'item_id': values['material_id'],
                        'unit_id': $('#unitSelect' + values.material_id).val(),
                        'unit_id_request': $('#unitSelect' + values.material_id).val(),
                        'qty_request': values['qty']
                    })
                }
            })
        })
        data = {
            'material_request': material_request,
            'material_request_machine': material_request_machine,
            'material_request_item': material_request_item,
        }
        // console.log(data)
        doSimpan(data)
    }

    function modalSimpan(data) {

    }

    function doSimpan(data) {
        Swal.fire({
            text: 'Apakah anda yakin ingin menyimpan dan mengirimkan ke Warehouse?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                createVarSave(data)
            }
        })
    }

    function createVarSave(data) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setMaterialRequest'); ?>'
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
                $('#modal').modal('hide')
                var data_notif = data_after_click_plan.sendNotif.spvSmd
                var no_telp = []
                var nama = []
                $.each(data_notif, function(key, value) {
                    no_telp.push(value.phone)
                    nama.push(value.full_name)
                })
                shareWhatsapp(no_telp, nama, codeMaterial, data.material_request[0].date, data.material_request[0].id)
            }
        });
    }

    function shareWhatsapp(no_telp, nama, code, date, id) {
        $.ajax({
            url: "<?= base_url('api/sendApprovalToSMD') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: '<?= base_url() ?>production/approvalMaterialRequest/' + id,
                nama: nama,
                nama_pembuat: full_name,
                kode: code,
                tanggal: date,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Approval kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {
                    $('#modal2').modal('hide')
                    linkToLinkLive('<?= base_url() ?>production/materialRequest')
                    getData()
                });
            }
        })
    }

    function loading(image, text) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-centered');
        // var html_header = '';
        $('#modalHeader2').addClass('d-none');
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row text-center p-5">'
        html_body += '<img src="<?= base_url() ?>assets/image/gif/' + image + '" class="w-50  mx-auto d-block"><br>'
        html_body += '<p class="mt-3">' + text + '</p>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);
        // var html_footer = '';
        $('#modalFooter2').addClass('d-none');
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
    // search multi
    $(document).on('keyup', '#search_planning', function(e) {
        var word = $('#search_planning').val().toLowerCase();
        searching(word)
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching(word) {
        var value = word
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

    function linkToLink(link) {
        var url = link
        window.open(url, '_blank')
    }

    function linkToLinkLive(link) {
        var url = link
        location.replace(url)
    }
</script>