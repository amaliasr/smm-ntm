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
        font-size: 9px;
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

    .bg-gradient-production {
        background-color: #1C315E !important;
        background-image: linear-gradient(135deg,
                #1C315E 0%,
                rgba(34, 124, 112, 0.8) 100%) !important;
    }
</style>
<!-- loading CSS -->
<style type="text/css">
    @keyframes ldio-wf2k1rxtsnb {
        0% {
            transform: translate(12px, 80px) scale(0);
        }

        25% {
            transform: translate(12px, 80px) scale(0);
        }

        50% {
            transform: translate(12px, 80px) scale(1);
        }

        75% {
            transform: translate(80px, 80px) scale(1);
        }

        100% {
            transform: translate(148px, 80px) scale(1);
        }
    }

    @keyframes ldio-wf2k1rxtsnb-r {
        0% {
            transform: translate(148px, 80px) scale(1);
        }

        100% {
            transform: translate(148px, 80px) scale(0);
        }
    }

    @keyframes ldio-wf2k1rxtsnb-c {
        0% {
            background: #93dbe9
        }

        25% {
            background: #3b4368
        }

        50% {
            background: #5e6fa3
        }

        75% {
            background: #689cc5
        }

        100% {
            background: #93dbe9
        }
    }

    .ldio-wf2k1rxtsnb div {
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transform: translate(80px, 80px) scale(1);
        background: #93dbe9;
        animation: ldio-wf2k1rxtsnb 1s infinite cubic-bezier(0, 0.5, 0.5, 1);
    }

    .ldio-wf2k1rxtsnb div:nth-child(1) {
        background: #689cc5;
        transform: translate(148px, 80px) scale(1);
        animation: ldio-wf2k1rxtsnb-r 0.25s infinite cubic-bezier(0, 0.5, 0.5, 1), ldio-wf2k1rxtsnb-c 1s infinite step-start;
    }

    .ldio-wf2k1rxtsnb div:nth-child(2) {
        animation-delay: -0.25s;
        background: #93dbe9;
    }

    .ldio-wf2k1rxtsnb div:nth-child(3) {
        animation-delay: -0.5s;
        background: #689cc5;
    }

    .ldio-wf2k1rxtsnb div:nth-child(4) {
        animation-delay: -0.75s;
        background: #5e6fa3;
    }

    .ldio-wf2k1rxtsnb div:nth-child(5) {
        animation-delay: -1s;
        background: #3b4368;
    }

    .loadingio-spinner-ellipsis-16zv7w22yjg {
        width: 200px;
        height: 200px;
        display: inline-block;
        overflow: hidden;
        background: none;
    }

    .ldio-wf2k1rxtsnb {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(1);
        backface-visibility: hidden;
        transform-origin: 0 0;
        /* see note above */
    }

    .ldio-wf2k1rxtsnb div {
        box-sizing: content-box;
    }

    /* generated by https://loading.io/ */
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-production pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            Draft Material
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
    </div>
    <!-- side count -->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-9 align-self-center">
                                <p class="m-0">#KODESMF1234</p>
                                <h5 class="m-0"><b>1 JANUARI 2023 - 7 JANUARI 2023</b></h5>
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <span class="badge bg-cyan">
                                        <p class="m-0" style="font-size: 11px;">ABLF 20</p>
                                    </span>
                                <?php } ?>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="button" class="btn btn-teal w-100 btn-sm h-100"><i class="fa fa-cog me-2"></i>Auto Generate Material</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="card shadow-sm bd-callout-<?= $i ?> mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p class="m-0" style="font-size:11px;">Date</p>
                                    <h4 class="m-0"><b>Minggu, 1 Januari 2023</b></h4>
                                    <p class="m-0 mt-3 mb-2" style="font-size:11px;">Additional :</p>
                                    <div class="form-check small" style="font-size: 11px;">
                                        <input class="form-check-input" type="checkbox" value="" id="checkLeftover">
                                        <label class="form-check-label" for="checkLeftover">
                                            Include Leftover Material
                                        </label>
                                    </div>
                                    <div class="form-check small" style="font-size: 11px;">
                                        <input class="form-check-input" type="checkbox" value="" id="checkWasteAllMachine" checked>
                                        <label class="form-check-label" for="checkWasteAllMachine">
                                            Include All for Waste (%)
                                            <br>
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle w-100 mt-2" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                Option (6 Item)
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <h6 class="dropdown-header">Customized Waste</h6>
                                                </li>
                                                <li>
                                                    <form class="px-3">
                                                        <div class="row">
                                                            <?php for ($k = 0; $k < 2; $k++) { ?>
                                                                <div class="col">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="dropdownCheck2" checked>
                                                                        <label class="form-check-label" for="dropdownCheck2">
                                                                            MK9-A
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="dropdownCheck21" checked>
                                                                                <label class="form-check-label" for="dropdownCheck21">
                                                                                    FILTER REG
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="dropdownCheck22" checked>
                                                                                <label class="form-check-label" for="dropdownCheck22">
                                                                                    FILTER PD160
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="dropdownCheck23" checked>
                                                                                <label class="form-check-label" for="dropdownCheck23">
                                                                                    FILTER PD180
                                                                                </label>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <p class="m-0 mb-2" style="font-size:11px;"><b><i class="fa fa-file-o me-2"></i>Plan Production Daily</b></p>
                                    <div id="listDetailProduction">
                                        <?php for ($k = 0; $k < 2; $k++) { ?>
                                            <div class="card shadow-none w-100 mb-2">
                                                <div class="card-body p-2 ps-3 pe-3">
                                                    <div class="row">
                                                        <div class="col-5 align-self-center">
                                                            <h4 class="m-0"><b>ABLF 20</b></h4>
                                                            <p class="m-0 font-small"><i class="fa fa-cogs me-2"></i>MKA-9</p>
                                                        </div>
                                                        <div class="col-7 align-self-center">
                                                            <div class="row">
                                                                <div class="col-6 border-end">
                                                                    <div class="row">
                                                                        <div class="col-auto p-0 pe-2 align-self-center">
                                                                            <h1 class="m-0 text-success"><b>60</b></h1>
                                                                        </div>
                                                                        <div class="col-auto p-0 align-self-center">
                                                                            <p class="m-0" style="font-size:9px">Box</p>
                                                                            <p class="m-0" style="font-size:9px"><b>Terpakai</b></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="row">
                                                                        <div class="col-auto pt-0 pb-0 pe-2 align-self-center">
                                                                            <h1 class="m-0"><b>60</b></h1>
                                                                        </div>
                                                                        <div class="col-auto p-0 align-self-center">
                                                                            <p class="m-0" style="font-size:9px">Box</p>
                                                                            <p class="m-0" style="font-size:9px"><b>Target Plan</b></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-12 pt-4">
                                    <div class="row">
                                        <?php for ($k = 0; $k < 2; $k++) { ?>
                                            <div class="col-12">
                                                <b style="font-size: 14px;">MAKER</b>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-sm">
                                                        <thead>
                                                            <tr class="bg-grey text-dark">
                                                                <th class="p-2 font-small" rowspan="3">Machine</th>
                                                                <th class="p-2 font-small" rowspan="3">Total Production</th>
                                                            </tr>
                                                            <tr class="bg-grey text-dark">
                                                                <th class="p-2 font-small" colspan="3">BRAND / MERK</th>
                                                                <th class="p-2 font-small" colspan="3">FILTER</th>
                                                                <th class="p-2 font-small" colspan="3">CP/BOBIN</th>
                                                                <th class="p-2 font-small" colspan="4">CTP</th>
                                                                <th class="p-2 font-small" colspan="2">TSG</th>
                                                            </tr>
                                                            <tr class="bg-grey text-dark">
                                                                <th class="p-2 font-small">ARF</th>
                                                                <th class="p-2 font-small">ARF PD180</th>
                                                                <th class="p-2 font-small">ABLF</th>
                                                                <th class="p-2 font-small">FILTER REG</th>
                                                                <th class="p-2 font-small">FILTER PD160</th>
                                                                <th class="p-2 font-small">FILTER PD180</th>
                                                                <th class="p-2 font-small">BLACK</th>
                                                                <th class="p-2 font-small">REPSE</th>
                                                                <th class="p-2 font-small">VERGE</th>
                                                                <th class="p-2 font-small">RED</th>
                                                                <th class="p-2 font-small">BLACK</th>
                                                                <th class="p-2 font-small">BOLD</th>
                                                                <th class="p-2 font-small">GINZA</th>
                                                                <th class="p-2 font-small">KRETEK BOLD</th>
                                                                <th class="p-2 font-small">KRETEK GINZA</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="p-2 font-small">MK9-A</td>
                                                                <?php for ($j = 0; $j < 16; $j++) { ?>
                                                                    <td class="p-0 font-small"><input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:9px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="..."></td>
                                                                <?php } ?>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-dark btn-sm mt-2"><i class="fa fa-plus me-2"></i>Buat Material Request</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small mb-5">Memuat Data</i><br>'
        html += '<div class="loadingio-spinner-ellipsis-16zv7w22yjg"><div class="ldio-wf2k1rxtsnb">'
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
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
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
                notFound('#tampilDetailPembayaran')
            },
            beforeSend: function() {
                loadingData('#tampilDetailPembayaran')
            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })

    function getData() {

    }
</script>