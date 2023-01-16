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

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .top-25 {
        top: 25% !important;
    }

    .start-25 {
        left: 25% !important;
    }

    .start-10 {
        left: 10% !important;
    }

    .w-35 {
        width: 35% !important;
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
        opacity: 0.5;
    }

    .bg-callout-1 {
        background-color: #16a4d8;
        opacity: 0.5;
    }

    .bg-callout-2 {
        background-color: #60dbe8;
        opacity: 0.5;
    }

    .bg-callout-3 {
        background-color: #8bd346;
        opacity: 0.5;
    }

    .bg-callout-4 {
        background-color: #efdf48;
        opacity: 0.5;
    }

    .bg-callout-5 {
        background-color: #f9a52c;
        opacity: 0.5;
    }

    .bg-callout-6 {
        background-color: #d64e12;
        opacity: 0.5;
    }

    .table {
        border-color: #808080 !important;
    }

    .bg-dark-grey {
        background-color: #808080;
        color: while;
    }

    .text-black {
        color: black;
    }


    .card-daily {
        transition: transform 0.2s ease;
    }

    .card-daily :hover {
        transform: scale(1.1);
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            Create SMD Planning
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12" id="tampilDetailPembayaran">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">SKM
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                            </span>
                                                        </button>
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">SKT
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                            </span>
                                                        </button>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card shadow-none mb-4 mt-4 small position-relative">
                                                                <h3><span class="position-absolute top-0 start-10 translate-middle badge  bg-primary">Main Planning </span></h3>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Date Range</b></p>
                                                                            <input type="text" class="form-control form-control-sm litepicker mb-2" required="required" id="dateRange">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Goal Produksi</b></p>
                                                                            <div class="row mb-2">
                                                                                <div class="col-4">
                                                                                    <select name="" id="input" class="form-control form-control-sm" required="required">
                                                                                        <option value=""></option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-3">
                                                                                    <input type="text" name="" id="input" class="form-control form-control-sm" value="">
                                                                                </div>
                                                                                <div class="col-3 align-self-center">
                                                                                    Box
                                                                                </div>
                                                                                <div class="col-2 text-end">
                                                                                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Preview</b></p>
                                                                            <div class="card shadow-none">
                                                                                <div class="card-body h-100">
                                                                                    <!-- <div class="row d-flex align-items-center h-100">
                                                                                        <div class="col text-center">
                                                                                            <i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat membuka Preview</i>
                                                                                        </div>
                                                                                    </div> -->
                                                                                    <div class="card shadow-sm card-daily">
                                                                                        <div class="card-body">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card shadow-none mb-4 small position-relative">
                                                                <h3><span class="position-absolute top-0 start-10 translate-middle badge  bg-primary">Daily Planning </span></h3>
                                                                <div class="card-body">
                                                                    <div id="dataDailyPlanning">
                                                                        <!-- <div class="row d-flex align-items-center" style="height: 200px;">
                                                                        <div class="col text-center p-5">
                                                                            <i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat mengisi Daily Planning</i>
                                                                        </div>
                                                                    </div> -->
                                                                        <div>
                                                                            <h5 class="mt-3" id="conveying-meaning-to-assistive-technologies">Generate Otomatis Rencana Produksi dari Goal Produksi</h5>
                                                                            <p class="mb-3">Goal Produksi yang tertera diatas akan di generate otomatis harian dibawah ini. Jika terdapat perubahan pada setiap mesin atau jumlah rencana, maka anda dapat mengubahnya sendiri. Anda dapat monitoring setiap goal pada preview diatas.</p>
                                                                        </div>
                                                                        <?php $a = 0;
                                                                        for ($j = 0; $j < 14; $j++) { ?>
                                                                            <div class="card shadow-sm bd-callout-<?= $a ?> mb-5 ">
                                                                                <div class="card-body">
                                                                                    <p class="m-0 mb-2"><b>Tanggal : 16 Januari 2023</b></p>

                                                                                    <table class="table table-bordered table-hover table-sm">
                                                                                        <thead>
                                                                                            <tr class="bg-grey text-dark">
                                                                                                <th class="p-2">Mesin</th>
                                                                                                <th class="p-2">Satuan</th>
                                                                                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                                                                                    <th class="p-2">ABF 12</th>
                                                                                                <?php } ?>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="bg-callout-<?= $a ?> text-black">
                                                                                                <td colspan="12" class="p-2"><b>MAKER</b></td>
                                                                                            </tr>
                                                                                            <?php for ($k = 0; $k < 3; $k++) { ?>
                                                                                                <tr>
                                                                                                    <td>MK-A</td>
                                                                                                    <td>Tray</td>
                                                                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                                                                        <td></td>
                                                                                                    <?php } ?>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                            <tr class="bg-callout-<?= $a ?> text-black">
                                                                                                <td colspan="12" class="p-2"><b>HLP</b></td>
                                                                                            </tr>
                                                                                            <?php for ($k = 0; $k < 3; $k++) { ?>
                                                                                                <tr>
                                                                                                    <td>MK-A</td>
                                                                                                    <td>Tray</td>
                                                                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                                                                        <td></td>
                                                                                                    <?php } ?>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        <?php $a++;
                                                                            if ($a == 7) {
                                                                                $a = 0;
                                                                            }
                                                                        } ?>
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
<!-- Modal -->
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
<!-- Modal -->
<div class="modal fade" id="modal3" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog3">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader3">

            </div>
            <div class="modal-body" id="modalBody3">

            </div>
            <div class="modal-footer" id="modalFooter3">

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
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"></script>
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
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var data_account = ""

    $(document).ready(function() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            allowRepick: true,
            firstDay: 0,
        })
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
            }
        })
    })
</script>