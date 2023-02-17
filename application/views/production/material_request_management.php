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
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">

        <div class="row justify-content-center">
            <div class="col pb-4">
                <h1 class="text-dark-grey"><b><i class="fa fa-wrench me-3"></i>Management Material</b></h1>
            </div>
            <div class="col pb-4 text-end">
                <button type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-industry me-2"></i> Management Machine</button>
                <button type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-laptop me-2"></i> Monitoring Warehouse</button>
            </div>
        </div>
        <!-- <div class="row mb-3" style="height: 100px;">
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#6C4AB6">
                    <div class="card-body">
                        <p class="text-white"><b>Request</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#8D72E1">
                    <div class="card-body">
                        <p class="text-white"><b>Warehouse</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#8D9EFF">
                    <div class="card-body">
                        <p class="text-white"><b>Machine</b></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px;background-color:#B9E0FF">
                    <div class="card-body">
                        <p class="text-white"><b>Request</b></p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="card shadow-sm" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 text-center align-self-center">
                                <img src="<?= base_url() ?>assets/image/svg/document.svg" class="img-responsive" alt="Image" style="width:100%">
                            </div>
                            <div class="col-8 align-self-center">
                                <h3 class="m-0"><b>Material Request</b></h3>
                                <p class="m-0 small-text">Find a new request or latest request, you can manage it after click a list below</p>
                            </div>
                            <div class="col-2 align-self-center">
                                <button type="button" class="btn btn-outline-dark" onclick="openNewMaterialRequest()"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-4 pb-2">
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div class="row overflow-auto" id="listMaterialRequest" style="height:500px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-1 text-center align-self-center">
                                        <img src="<?= base_url() ?>assets/image/svg/detail.svg" class="img-responsive" alt="Image" style="width:100%">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h3 class="m-0"><b>MRSKM-20230203331</b></h3>
                                        <p class="m-0 small-text"><i class="fa fa-calendar me-2"></i>Minggu, 18 Maret 2023</p>
                                    </div>
                                    <div class="col-3">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-outline-dark btn-sm me-1" onclick=""><span class="fa fa-refresh"></span></button>
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                Option
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <h6 class="dropdown-header">Utilities</h6>
                                                </li>

                                                <li>
                                                    <h6 class="dropdown-header">Show By</h6>
                                                </li>
                                                <li><a class="dropdown-item">Table <i class="ms-2 fa fa-check text-success" id="successAll"></i></a></li>
                                                <li><a class="dropdown-item">Cardboard <i class="ms-2 fa fa-check text-success d-none" id="successSkm"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-5">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link p-3 small text-dark active" id="nav-0-tab" data-bs-toggle="tab" data-bs-target="#nav-0" type="button" role="tab" aria-controls="nav-0" aria-selected="true"><i class="fa fa-list me-2"></i>Detail Request</button>
                                                <button class="nav-link p-3 small text-dark " id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="false"><i class="fa fa-cog me-2"></i>Machine Usage</span></button>
                                                <button class="nav-link p-3 small text-dark" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false"><i class="fa fa-clock-o me-2"></i>Activities</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-0" role="tabpanel" aria-labelledby="nav-0-tab">
                                                <!-- <b class="mb-2">Detail Material</b>
                                                <hr style="width:25%;height:2px;" class="text-orange"> -->
                                                <div class="table-responsive mt-3">
                                                    <table class="table table-sm table-hover" style="font-size: 10px;">
                                                        <thead>
                                                            <tr>
                                                                <th>Kode</th>
                                                                <th>Material</th>
                                                                <th>Mesin</th>
                                                                <th>QTY</th>
                                                                <th>Unit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                                                <tr>
                                                                    <td>RM.02-203</td>
                                                                    <td>Filter Rods Dual Shape Code SDW809053</td>
                                                                    <td>
                                                                        <span class="badge bg-purple p-1 me-1">MK9A</span>
                                                                        <span class="badge bg-pink p-1 me-1">MK9C</span>
                                                                    </td>
                                                                    <td class="text-end">30</td>
                                                                    <td>Tray</td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                                    <div class="card card-hoper mt-2 mb-2 shadow-none bd-callout-<?= $i ?>">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-6 align-self-center">
                                                                    <h3><b class="float-start">MK9 A</b></h3>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="row">
                                                                        <div class="col small-text">Catcher / Helper</div>
                                                                        <div class="col small-text text-end"><b>Supri</b></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col small-text">Operator</div>
                                                                        <div class="col small-text text-end"><b>Denny</b></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <hr class="mt-2 mb-2">
                                                                </div>
                                                                <div class="col-12 pt-2">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-sm table-hover" style="font-size: 10px;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Material</th>
                                                                                    <th>QTY</th>
                                                                                    <th>Unit</th>
                                                                                    <th>Status</th>
                                                                                    <th>Received</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>RM.02-203</td>
                                                                                    <td>Filter Rods Dual Shape Code SDW809053</td>
                                                                                    <td class="text-end">30</td>
                                                                                    <td class="text-center">Tray</td>
                                                                                    <td>
                                                                                        <i class="fa fa-check text-success me-2"></i>Diterima
                                                                                    </td>
                                                                                    <td class="text-end">
                                                                                        <b class="text-dark">30</b>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>RM.02-203</td>
                                                                                    <td>Cigarette Paper CP45W Black 600201 K MF 25g</td>
                                                                                    <td class="text-end">100</td>
                                                                                    <td class="text-center">Tray</td>
                                                                                    <td>
                                                                                        <i class="fa fa-cog text-success me-2"></i>Proses Produksi
                                                                                    </td>
                                                                                    <td class="text-end">
                                                                                        <span class="text-success me-2">(+1)</span><b class="text-dark">101</b>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 pt-2">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="row">
                                                                                <div class="col-auto">
                                                                                    <!-- Progress bar 1 -->
                                                                                    <div class="progress mx-auto" data-value='80'>
                                                                                        <span class="progress-left">
                                                                                            <span class="progress-bar border-pink"></span>
                                                                                        </span>
                                                                                        <span class="progress-right">
                                                                                            <span class="progress-bar border-pink"></span>
                                                                                        </span>
                                                                                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- END -->
                                                                                </div>
                                                                                <div class="col-auto align-self-center">
                                                                                    <div class="h4 font-weight-bold m-0">80%</div>
                                                                                    <p class="small-text text-gray m-0">Item diterima Oleh Catcher</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col text-end align-self-end">
                                                                            <!-- diisi apa aja untuk informasi -->

                                                                            <button type="button" class="btn btn-sm btn-danger text-center small-text p-1"><i class="fa fa-exchange me-1"></i>Pindah Mesin</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                                                <!-- <div class="p-3 "> -->
                                                <div class="timeline p-5 super-small-text">
                                                    <?php for ($i = 0; $i < 1; $i++) { ?>
                                                        <div class="timeline-item">
                                                            <div class="timeline-item-marker">
                                                                <div class="timeline-item-marker-text" style="white-space: normal;font-size:11px;">Minggu, 8 Maret 2022</div>
                                                                <div class="timeline-item-marker-indicator bg-primary-soft text-primary"><i class="fa fa-check text-success fa-3x"></i></div>
                                                            </div>
                                                            <div class="timeline-item-content pt-0">
                                                                <div class="card shadow-sm">
                                                                    <div class="card-body">
                                                                        <h6 class="text-dark">Received by Logistik</h6>
                                                                        <p>This is the content for the first timeline item. In this styled example, we're styling the timeline marker with background and typography utility classes. We've also shown that you can use the card component within the timeline item content.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php for ($i = 0; $i < 1; $i++) { ?>
                                                        <div class="timeline-item">
                                                            <div class="timeline-item-marker">
                                                                <div class="timeline-item-marker-text" style="white-space: normal;font-size:11px;">Minggu, 8 Maret 2022</div>
                                                                <div class="timeline-item-marker-indicator bg-primary-soft text-primary"><i class="fa fa-check text-success fa-3x"></i></div>
                                                            </div>
                                                            <div class="timeline-item-content pt-0">
                                                                <div class="card shadow-sm">
                                                                    <div class="card-body">
                                                                        <h6 class="text-dark">Approval SMD SPV</h6>
                                                                        <p>This is the content for the first timeline item. In this styled example, we're styling the timeline marker with background and typography utility classes. We've also shown that you can use the card component within the timeline item content.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-3 text-end">
                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-truck text-white me-2"></i>Penerimaan Logistik</button>
                            </div>
                            <div class="col-12 pt-3">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <b>More Information</b>
                                        <div class="row mt-3">
                                            <div class="col-4 pb-3">
                                                <p class="m-0 text-dark"><b>Create By</b></p>
                                                <p class="m-0 small-text">I Made Dharma</p>
                                            </div>
                                            <div class="col-4 pb-3">
                                                <p class="m-0 text-dark"><b>Date & Time</b></p>
                                                <p class="m-0 small-text">Minggu, 18 Maret 2023 16:00:12</p>
                                            </div>
                                            <div class="col-4 pb-3">
                                                <p class="m-0 text-dark"><b>Shift</b></p>
                                                <p class="m-0 small-text">#1 (07:00 - 15:00)</p>
                                            </div>
                                            <div class="col-4 pb-3">
                                                <p class="m-0 text-dark"><b>Status</b></p>
                                                <p class="m-0 small-text">Requested</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow-sm h-100 mt-3" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1 text-center align-self-center">
                                <img src="<?= base_url() ?>assets/image/svg/history.svg" class="img-responsive" alt="Image" style="width:50%">
                            </div>
                            <div class="col-8 align-self-center">
                                <h3 class="m-0"><b>Material Statistic</b></h3>
                                <p class="m-0 small-text">Learn More about Material Request based of time</p>
                            </div>
                            <div class="col-3">
                                <div class="float-end">
                                    <button type="button" class="btn btn-outline-dark btn-sm me-1" onclick=""><span class="fa fa-refresh"></span></button>
                                    <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        Option
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <h6 class="dropdown-header">Show By</h6>
                                        </li>
                                        <li><a class="dropdown-item">Graph <i class="ms-2 fa fa-check text-success" id="successAll"></i></a></li>
                                        <li><a class="dropdown-item">Table <i class="ms-2 fa fa-check text-success d-none" id="successSkm"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 pt-5">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-5">
                                                <p><b class="small">Settings</b></p>
                                                <div class="row">
                                                    <label class="small-text mt-2 mb-2">Date Range</label>
                                                    <div class="col-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control form-control-sm" id="dateStart" placeholder="" value="<?= date('d/m/Y') ?>">
                                                            <label for="dateStart">Date Start</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control form-control-sm" id="dateEnd" placeholder="" value="<?= date('d/m/Y') ?>">
                                                            <label for="dateEnd">Date End</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="small-text mt-2 mb-2">Production Type</label>
                                                        <br>
                                                        <span class="badge rounded-pill me-1 bg-dark text-light p-2">SKM</span>
                                                        <span class="badge rounded-pill me-1 bg-dark text-light p-2">SKT</span>
                                                    </div>
                                                    <!-- <div class="col-12">
                                                        <label class="small-text mt-2 mb-2">Status</label>
                                                        <br>
                                                        <span class="badge rounded-pill me-1 bg-dark text-light p-2">Requested</span>
                                                        <span class="badge rounded-pill me-1 bg-dark text-light p-2">Received</span>
                                                    </div> -->
                                                    <div class="col-12">
                                                        <label class="small-text mt-2 mb-2">Items</label>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <p><b class="small">Data</b></p>
                                                <canvas id="myChart2"></canvas>
                                            </div>
                                            <div class="col-12 pt-5">
                                                <p><b class="small">Average Request in A Day</b></p>
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <?php for ($i = 0; $i < 6; $i++) { ?>
                                                            <div class="col-2 pb-3">
                                                                <div class="card shadow-none h-100 text-white" style="background-color: #645CBB;">
                                                                    <div class="card-body p-2">
                                                                        <p class="small m-0">Filter Rods</p>
                                                                        <b class="h2 text-white">300</b>
                                                                        <p class="m-0 small-text">Tray per day</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
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


<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        $(location).html('<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
    }

    function notFound(location) {
        $(location).html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var id_material = '<?= $id ?>'
    var data_user = ""
    var data_request_manage = ""
    var stage_step = []
    var stage = 0

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {

            },
            beforeSend: function() {

            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })


    function getData() {
        $.ajax({
            url: "<?= api_produksi('getMaterialRequestManage'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {

            },
            beforeSend: function() {

            },
            success: function(response) {
                data_request_manage = response['data']
                console.log(data_request_manage)
                listMaterialRequest()
            }
        })
    }

    function listMaterialRequest() {
        var html = ""
        $.each(data_request_manage['materialRequest'], function(key, value) {
            html += '<div class="col-12">'
            html += '<div class="card shadow-none mb-2" style="cursor:pointer;">'
            html += '<div class="card-body p-0">'
            html += '<div class="row p-0 m-0">'
            html += '<div class="col-1 p-1 rounded-start bg-' + value['production_type']['name'].toLowerCase() + ' text-center">'
            html += '<div class="row d-flex align-items-center h-100">'
            html += '<div class="col text-center">'
            html += '<span class="small-text text-white vertical-text">' + value['production_type']['name'] + '</span>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-11 p-3">'
            html += '<div class="row">'
            html += '<div class="col">'
            html += '<b class="m-0">' + value['code'] + '</b>'
            html += '<p class="m-0 small-text text-orange fw-bold">' + value['created_employee']['name'] + '</p>'
            html += '<p class="m-0 mt-2 super-small-text">Time : Minggu, 18 Maret 2023 <span class="text-light ps-1 pe-1">|</span> Status : <span class="text-success">Requested</span> <span class="text-light ps-1 pe-1">|</span> 10 Items</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listMaterialRequest').html(html)
    }
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Filter Rods', 'Cigarette Paper', 'CTP Armour'],
            datasets: [{
                    label: 'Request',
                    data: [12, 19, 3, 5, 2, 3],
                    // borderWidth: 1
                    backgroundColor: '#645CBB',
                    borderColor: '#645CBB',
                },
                {
                    label: 'Warehouse',
                    data: [30, 40, 30, 50, 20, 30],
                    // borderWidth: 1
                    backgroundColor: '#A084DC',
                    borderColor: '#A084DC',
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true,
            maintainAspectRatio: false,
        }
    });
    const ctx2 = document.getElementById('myChart2');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Filter Rods', 'Cigarette Paper', 'CTP Armour'],
            datasets: [{
                    label: 'Minggu, 12 Januari 2023',
                    data: [12, 19, 34, 5, 24, 3],
                    // borderWidth: 1,
                    backgroundColor: '#645CBB',
                    borderColor: '#645CBB',
                },
                {
                    label: 'Senin, 13 Januari 2023',
                    data: [30, 40, 30, 50, 20, 30],
                    // borderWidth: 1,
                    backgroundColor: '#EBC7E6',
                    borderColor: '#EBC7E6',
                },
                {
                    label: 'Selasa, 14 Januari 2023',
                    data: [22, 34, 4, 5, 55, 5],
                    // borderWidth: 1,
                    backgroundColor: '#A084DC',
                    borderColor: '#A084DC',
                }
            ]
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            stacked: false,
            plugins: {},
            scales: {
                y: {
                    type: 'linear',
                    display: true,
                    position: 'left',
                },
            }
        },
    });


    function openNewMaterialRequest() {
        var url = '<?= base_url() ?>production/createMaterialRequest'
        window.open(url, '_blank')
    }
    $(function() {
        $(".progress").each(function() {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');

            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }

        })

        function percentageToDegrees(percentage) {

            return percentage / 100 * 360

        }

    });
</script>