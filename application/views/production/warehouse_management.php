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
        line-height: 1.8rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .has-search-filter .form-control {
        padding-left: 2.375rem;
    }

    .has-search-filter .form-control-feedback {
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

    .datepicker-inline {
        width: 100%;
    }

    .datepicker table {
        width: 100%;
    }

    .start-25 {
        left: 25% !important;
    }

    .top-30 {
        top: 30% !important;
    }

    .w-35 {
        width: 35% !important;
    }

    .image-20 {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
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
                <h1 class="text-dark-grey"><b><i class="fa fa-laptop me-3"></i>Management Warehouse</b></h1>
            </div>
            <div class="col pb-4 text-end">
                <button type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-industry me-2"></i> Management Machine</button>
                <button type="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-wrench me-2"></i>Mng. Material Request</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card shadow-sm h-100" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-1 text-center align-self-center">
                                        <img src="<?= base_url() ?>assets/image/svg/box.svg" class="img-responsive" alt="Image" style="width:70%">
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <h3 class="m-0"><b>Material Overview</b></h3>
                                        <p class="m-0 small-text">Apply date for overview warehouse all feature this pages</p>
                                    </div>
                                    <div class="col">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-outline-dark btn-sm" onclick=""><span class="fa fa-refresh"></span></button>
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                Filter Option <span class="text-grey ms-1 me-1">( Detail, Table )</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm" onclick="formTransaksiStok()"><span class="fa fa-plus me-2"></span>Add Transaction</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <h6 class="dropdown-header">Show By</h6>
                                                </li>
                                                <li><a class="dropdown-item">Detail <i class="ms-2 fa fa-check text-success" id="successAll"></i></a></li>
                                                <li><a class="dropdown-item">Group <i class="ms-2 fa fa-check text-success d-none" id="successSkm"></i></a></li>
                                                <li>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <h6 class="dropdown-header">Templates</h6>
                                                </li>
                                                <li><a class="dropdown-item">Table <i class="ms-2 fa fa-check text-success" id="successAll"></i></a></li>
                                                <li><a class="dropdown-item">Cardboard <i class="ms-2 fa fa-check text-success d-none" id="successSkm"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 pt-3">
                                <div class="card shadow-none mb-2">
                                    <div class="card-body">
                                        <div id="datepicker"></div>
                                        <input type="hidden" id="my_hidden_input">
                                    </div>
                                </div>
                                <b class="small">Announcement</b>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="card shadow-none mt-2 alert-warning">
                                            <div class="card-body pt-2 pb-2">
                                                <div class="row">
                                                    <div class="col-1 align-self-center">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="col-10 align-self-center">
                                                        <b class="m-0 small-text">2 Items almost out of stock</b>
                                                        <p class="m-0 super-small-text">Any items almost out of stock in this day</p>
                                                    </div>
                                                    <div class="col-1 align-self-center">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 pt-3">
                                <div class="row">
                                    <div class="col-12 col-md-6 pe-1">
                                        <div class="card shadow-none h-100" style="background-color: #D7E9B9;">
                                            <img src="<?= base_url() ?>assets/image/svg/box_in.svg" class="image-20 w-25 position-absolute top-30 start-25 translate-middle" alt="" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-5 align-self-center text-center">
                                                    </div>
                                                    <div class="col-7 align-self-center">
                                                        <h6 class="fw-bold m-0">Stock In</h6>
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <h1 class="m-0 mt-1 mb-1 fw-bold">
                                                                    <b id="jumlahIN">
                                                                        0
                                                                    </b>
                                                                </h1>
                                                            </div>
                                                            <div class="col-auto align-self-center ps-0">
                                                                <p class="m-0" style="font-size: 10px;">Transaction</p>
                                                                <p class="m-0" style="font-size: 10px;">At <span class="dateToday"><?= date('d/m/Y') ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 ps-1">
                                        <div class="card shadow-none h-100" style="background-color: #FFD495;">
                                            <img src="<?= base_url() ?>assets/image/svg/box_out.svg" class="image-20 w-25 position-absolute top-30 start-25 translate-middle" alt="" style="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-5 align-self-center text-center">
                                                    </div>
                                                    <div class="col-7 align-self-center">
                                                        <h6 class="fw-bold m-0">Stock Out</h6>
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <h1 class="m-0 mt-1 mb-1 fw-bold">
                                                                    <b id="jumlahOUT">
                                                                        0
                                                                    </b>
                                                                </h1>
                                                            </div>
                                                            <div class="col-auto align-self-center ps-0">
                                                                <p class="m-0" style="font-size: 10px;">Transaction</p>
                                                                <p class="m-0" style="font-size: 10px;">At <span class="dateToday"><?= date('d/m/Y') ?></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pt-1">
                                        <div class="card shadow-none h-100">
                                            <div class="card-body">
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <span class="badge rounded-pill me-1 bg-dark text-light small-text p-2">Semua</span>
                                                            <span class="badge rounded-pill me-1 bg-dark text-light small-text p-2">Supplier</span>
                                                            <span class="badge rounded-pill me-1 bg-dark text-light small-text p-2">Produksi</span>
                                                            <span class="badge rounded-pill me-1 bg-dark text-light small-text p-2">Other</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <div class="form-group has-search">
                                                                <span class="fa fa-search form-control-feedback"></span>
                                                                <input type="text" class="form-control form-control-sm" placeholder="Search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="overflow-auto" style="height: 300px;">
                                                    <div class="" id="tampilMaterialToday">
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
            <div class="col-12 col-md-12">
                <div class="card shadow-sm mt-2" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 pb-3">
                                <div class="row">
                                    <div class="col-1 text-center align-self-center">
                                        <img src="<?= base_url() ?>assets/image/svg/document.svg" class="img-responsive" alt="Image" style="width:70%">
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <h3 class="m-0"><b>Material Request</b></h3>
                                        <p class="m-0 small-text">Cut Off : Minggu, 18 Maret 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <b class="small">Comparison Request & Warehouse</b>
                                            </div>
                                            <div class="col-6 text-end">
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
                                        <div class="col-12" style="height:300px;">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 pt-3">
                                <div class="card shadow-none" style="background-color: #645CBB;">
                                    <div class="card-body">
                                        <div class="row">
                                            <b class="text-white small"><span class="h3 text-white">FORECAST</span><br>Warehouse 7 Days</b>
                                            <p class="super-small-text m-0 mb-5 text-white">Perkiraan Stok Warehouse beberapa waktu kedepan. Kami akan memperkirakan waktu habis dari stock jika dibandingkan oleh Draft atau Rata - Rata Request Harian</p>
                                            <div class="card mb-2" style="background-color: #BFACE2;">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="small m-0 text-dark"><b>Draft</b></p>
                                                            <p class="super-small-text m-0 text-dark">15/02/2023 - 22/02/2023</p>
                                                        </div>
                                                        <div class="col-auto text-end align-self-center">
                                                            <i class="fa fa-chevron-right text-dark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="small m-0 text-dark"><b>Daily Average</b></p>
                                                            <p class="super-small-text m-0 text-dark">18/02/2023 - 24/02/2023</p>
                                                        </div>
                                                        <div class="col-auto text-end align-self-center">
                                                            <i class="fa fa-chevron-right text-dark"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 pt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow-none" style="background-color: #F5F5F5;border:none">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <b class="m-0 small">Graph Forecast</b>
                                                        <p class="m-0 super-small-text"></p>
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                        <select name="" id="input" class="form-control form-control-sm" required="required" style="background-color: transparent;">
                                                            <option value=""></option>
                                                        </select>

                                                    </div>
                                                    <div class="col-12 pt-3">
                                                        <canvas id="chartForecast"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pt-2">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <b class="m-0 small mb-2">Prediction</b>
                                                <p class="m-0 super-small-text">Pada item <b>Cigarette Paper</b>, permintaan akan mencapai pada batas <i>Out of Stock</i> pada tanggal <b>25 Februari 2023</b>.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pt-2">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <p class="m-0 small mb-2"><b>What's item will be out of stock<br> at this Period?</b></p>
                                                <div class="card shadow-none mb-2">
                                                    <div class="card-body p-2">
                                                        <div class="row">
                                                            <div class="col align-self-center">
                                                                <p class="m-0 small-text text-danger"><b>Cigarette Paper</b></p>
                                                                <p class="m-0 super-small-text">Minggu, 25 Februari 2023</p>
                                                            </div>
                                                            <div class="col-auto align-self-center">
                                                                <i class="fa fa-chevron-circle-right w-100"></i>
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
            <div class="col-12 col-md-12">
                <div class="card shadow-sm mt-2" style="border: 0px;border-radius:5px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 pb-3">
                                <div class="row">
                                    <div class="col-1 text-center align-self-center">
                                        <img src="<?= base_url() ?>assets/image/svg/inventory.svg" class="img-responsive" alt="Image" style="width:70%">
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <h3 class="m-0"><b>Inventory</b></h3>
                                        <p class="m-0 small-text">Cut Off : Minggu, 18 Maret 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-9">
                                <!-- list inventory -->
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="row mt-3" id="tampilWarehouse">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <b class="mb-3">Filter</b>
                                        <div class="form-group has-search-filter">
                                            <span class="fa fa-search form-control-feedback"></span>
                                            <input type="text" class="form-control" placeholder="Search">
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
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
    }

    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
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
    var data_material = ""
    var stage_step = []
    var data_all_stok = []
    var stage = 0
    var tanggalCurrent = '2023-02-13'
    // var tanggalCurrent = currentDate()

    function formatDateSlash(orginaldate) {
        var date = new Date(orginaldate);
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }
        var date = day + "/" + month + "/" + year;
        return date;
    }
    $('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight: true,
    }).on('changeDate', function(e) {
        dateChanged()
    }).on('changeMonth', function(e) {
        dateChanged()
    }).on('changeYear', function(e) {
        dateChanged()
    }).on('changeDecade', function(e) {
        dateChanged()
    }).on('changeCentury', function(e) {
        dateChanged()
    });
    $(document).ready(function() {
        dateChanged()
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
                getDataStok()
            }
        })
    })

    function dateChanged() {
        const dateEpoch = new Date('2023-02-13').getTime()
        $("td[class='day'][data-date=" + dateEpoch + "]").addClass('bg-orange text-white')
    }

    var detail_in = ""
    var detail_out = ""
    var choosen_pie = 'IN'

    function getDataStok() {
        $('.dateToday').html(formatDateSlash(tanggalCurrent))
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataStok'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                tanggal: tanggalCurrent,
            },
            error: function(xhr) {
                var html = ""
                $('#tampilMaterialToday').html(html)
                $('#jumlahIN').html(html)
                $('#jumlahOUT').html(html)
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {},
            success: function(response) {
                $('#tampilMaterialToday').empty()
                $('#jumlahIN').empty()
                $('#jumlahOUT').empty()
                data_stok = response['data']
                data_all_stok = [];
                if (data_stok != undefined) {
                    var jumlah_in = response['dataCount'].find((value, key) => {
                        if (value.aksi === 'IN') return true
                    })
                    var jumlah_out = response['dataCount'].find((value, key) => {
                        if (value.aksi === 'OUT') return true
                    })
                    if (jumlah_in == undefined) {
                        $('#jumlahIN').html('0')
                    } else {
                        $('#jumlahIN').html(jumlah_in['jumlah'])
                    }
                    if (jumlah_out == undefined) {
                        $('#jumlahOUT').html('0')
                    } else {
                        $('#jumlahOUT').html(jumlah_out['jumlah'])
                    }
                    for (let i = 0; i < data_stok.length; i++) {
                        for (let j = 0; j < JSON.parse(data_stok[i]['data_item']).length; j++) {
                            var array = JSON.parse(data_stok[i]['data_item'])[j]
                            array['tanggal'] = data_stok[i]['tanggal_kirim']
                            array['subjek_name'] = data_stok[i]['subjek_name']
                            array['jenis'] = data_stok[i]['jenis']
                            data_all_stok.push(array)
                        }
                    }
                    detail_in = data_all_stok.filter((value, key) => {
                        if (value.ket === 'IN') return true
                    })
                    detail_out = data_all_stok.filter((value, key) => {
                        if (value.ket === 'OUT') return true
                    })
                } else {
                    detail_in = ""
                    detail_out = ""
                    $('#jumlahIN').html('0')
                    $('#jumlahOUT').html('0')
                }
                tampilMaterialToday()
            }
        })
    }

    function tampilMaterialToday() {
        var html = ""
        $.each(data_all_stok, function(key, value) {
            html += '<div class="row m-0" id="card_searchMATERIAL' + key + '">'
            html += '<div class="col-5 fw-bold small-text"><p class="m-0 fw-bold text_search" data-id="MATERIAL' + key + '">' + value['item_name'] + '</p><span class="text-primary text_search super-small-text" style="font-size:10px;" data-id="MATERIAL' + key + '">#' + value['jenis'] + '</span></div>'
            html += '<div class="col-5">'
            html += '<div class="row">'
            html += '<div class="col-auto">'
            if (value['ket'] == 'OUT') {
                html += '<i class="fa fa-arrow-up text-danger"></i>'
            } else {
                html += '<i class="fa fa-arrow-down text-success"></i>'
            }
            html += '</div>'
            html += '<div class="col-auto ps-0 small-text">'
            if (value['nama_lawan'] == null) {
                var lawan = value['subjek_lawan']
            } else {
                var lawan = value['nama_lawan']
            }
            html += '<p class="m-0 text-wrap text_search" data-id="MATERIAL' + key + '" style="font-size: 12px;"><b>' + lawan + '</b></p>'
            html += '<p class="m-0" style="font-size: 10px;">' + value['tanggal'] + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-2 text-end small-text">' + value['jumlah'] + ' ' + value['satuan_name'] + '</div>'
            html += '<hr class="mt-2">'
            html += '</div>'
        })
        $('#tampilMaterialToday').html(html)
        getStokPerItem()
    }

    function getStokPerItem() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataStokItem'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                var html = ""
                $.each(data, function(key, value) {
                    html += '<div class="col-4 pb-2" id="card_searchITEM' + key + '">'
                    html += '<div class="card shadow-sm card-hoper w-100 h-100">'
                    html += '<div class="card-body p-3">'
                    html += '<div class="row">'
                    html += '<div class="col-2 text-center align-self-center pe-0">'
                    if (value['jumlah'] == 0) {
                        html += '<img src="<?= base_url() ?>assets/image/svg/unavailable.svg" class="img-responsive" alt="Image" style="width:100%">'
                    } else {
                        html += '<img src="<?= base_url() ?>assets/image/svg/box_choco.svg" class="img-responsive" alt="Image" style="width:100%">'
                    }
                    html += '</div>'
                    html += '<div class="col-10">'
                    html += '<p class="m-0 super-small-text text_search" data-id="ITEM' + key + '"><b>' + value['name'] + '</b></p>'
                    html += '<b class="text-orange">' + number_format(value['jumlah']) + '</b><span class="ms-1 super-small-text">' + value['satuan_name'] + '</span>'
                    html += '</div>'
                    html += '<div class="col-12">'
                    // html += '<p class="m-0 super-small-text mt-2"><i class="fa fa-exclamation-circle me-2 text-warning"></i>There are <b class="text-success">2</b> Transactions Today</p>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                })
                $('#tampilWarehouse').html(html)
            }
        })
    }

    let delayed;
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Filter Rods', 'Cigarette Paper', 'CTP Armour', 'Filter Rods', 'Cigarette Paper', 'CTP Armour', 'Filter Rods', 'Cigarette Paper', 'CTP Armour'],
            datasets: [{
                    label: 'Request',
                    data: [12, 19, 3, 5, 2, 3, 11, 12, 23],
                    // borderWidth: 1
                    backgroundColor: '#5D3891',
                    borderColor: '#5D3891',
                },
                {
                    label: 'Warehouse',
                    data: [30, 40, 30, 50, 20, 30, 45, 66, 66],
                    // borderWidth: 1
                    backgroundColor: '#F99417',
                    borderColor: '#F99417',
                }
            ]
        },
        options: {
            animation: {
                onComplete: () => {
                    delayed = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !delayed) {
                        delay = context.dataIndex * 300 + context.datasetIndex * 100;
                    }
                    return delay;
                },
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    const ctx2 = document.getElementById('chartForecast');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['20 Feb', '21 Feb', '22 Feb', '23 Feb', '24 Feb', '25 Feb', '26 Feb', '27 Feb', '28 Feb'],
            datasets: [{
                    label: 'Draft',
                    data: [12, 19, 3, 5, 2, 40, 11, 12, 23],
                    backgroundColor: '#5D3891',
                    borderColor: '#5D3891',
                },
                {
                    label: 'Stok',
                    data: [40, 40, 40, 40, 40, 40, 40, 40, 40],
                    backgroundColor: '#F99417',
                    borderColor: '#F99417',
                }
            ]
        },
        options: {
            interaction: {
                mode: 'index',
                intersect: false
            },
            scales: {
                x: {
                    display: true,
                    title: {
                        display: false,
                        text: 'Date'
                    },
                    grid: {
                        // color: '#3E54AC',
                        color: function(context) {
                            // console.log(context.tick.value)
                            if (context.tick.value == 5) {
                                return '#970C0C';
                            } else {
                                return '#F5F5F5';
                            }
                        },
                        tickWidth: '5px'
                    },
                },
                y: {
                    display: true,
                    title: {
                        display: false,
                        text: 'Jumlah Stok'
                    },
                    suggestedMax: 50,
                }
            },
            responsive: true,
            maintainAspectRatio: false,
        },
        draw: function() {
            Chart.types.Line.prototype.draw.apply(this, arguments);

            var point = this.datasets[0].points[this.options.lineAtIndex]
            var scale = this.scale

            // draw line
            this.chart.ctx2.beginPath();
            this.chart.ctx2.moveTo(point.x, scale.startPoint + 24);
            this.chart.ctx2.strokeStyle = '#ff0000';
            this.chart.ctx2.lineTo(point.x, scale.endPoint);
            this.chart.ctx2.stroke();

            // write TODAY
            this.chart.ctx2.textAlign = 'center';
            this.chart.ctx2.fillText("TODAY", point.x, scale.startPoint + 12);
        }
    });

    var data = {
        labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
        datasets: [{
            data: [12, 3, 2, 1, 8, 8, 2, 2, 3, 5, 7, 1]
        }]
    };

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

    function formTransaksiStok() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Transaksi Stok</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 col-md-7 small">'
        html_body += '<p class="m-0 mb-2"><b>Nomor Dokumen :</b></p>'
        html_body += '<input type="text" class="form-control form-control-sm p-1" id="nomorDokumen" style="border:none;">'
        html_body += '<hr class="m-0 mb-3">'

        html_body += '<p class="m-0 mb-2"><b>Choose Item :</b></p>'
        html_body += '<div id="listFormItem">'
        html_body += '</div>'
        html_body += '<button class="btn btn-sm bg-ungu text-white float-end mt-2" onclick="addItem()">Tambah Item<i class="fa fa-plus ms-2"></i></button>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-5 small">'

        html_body += '<p class="m-0 mb-2"><b>Customized :</b></p>'
        // tanggal
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">1</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Tanggal</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="text" class="form-control form-control-sm datepicker" id="tanggalStok" style="border:none;" autocomplete="off">'
        html_body += '<hr class="m-0">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // tanggal
        // jenis barang
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">2</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Jenis Barang</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="radio" class="btn-check p-1 text-start radioJenisBarang" name="radioJenisBarang" id="radioJenisBarang1" autocomplete="off" value="IN">'
        html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioJenisBarang1" onclick="tampilKategori(0)">Barang Masuk</label>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="radio" class="btn-check p-1 text-start radioJenisBarang" name="radioJenisBarang" id="radioJenisBarang2" autocomplete="off" value="OUT">'
        html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioJenisBarang2" onclick="tampilKategori(1)">Barang Keluar</label>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // jenis barang
        // Tag
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">3</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Kategori</b></p>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '<div class="row" id="tampilKategori">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<div class="card shadow-none mt-3">'
        html_body += '<div class="card-body text-center">'
        html_body += '<p class="m-0 mt-5 mb-5" style="font-size:11px;">Pilih <b>Jenis Barang</b> terlebih dahulu</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Tag
        // Gudang
        html_body += '<div class="card shadow-none m-0 w-100 mb-2" id="tampilGudang">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">4</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b id="textTitleGudang">Gudang</b></p>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row" id="tampilGudangRow">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<div class="card shadow-none mt-3">'
        html_body += '<div class="card-body text-center">'
        html_body += '<p class="m-0 mt-5 mb-5" style="font-size:11px;">Pilih <b>Jenis Barang</b> terlebih dahulu</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Gudang
        // supplier
        html_body += '<div class="card shadow-none m-0 w-100 mb-2 d-none" id="tampilSupplier">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">4</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Supplier</b></p>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<select class="form-select form-select-sm w-100 supplierStok" id="supplierStok">'
        html_body += '<option value="" selected disabled>Pilih Supplier</option>'
        $.each(data_supplier, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // supplier
        // Upload Image
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">5</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Upload Dokumen</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input class="form-control form-control-sm" type="file" id="formFile" accept="image/*">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Upload Image
        // Notes
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">6</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Catatan</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<textarea class="form-control form-control-sm w-100" rows="5" id="catatanStok"></textarea>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Notes

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true,
            todayHighlight: true,
        });

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanStok" onclick="doSimpanStok()">Simpan</button>'
        $('#modalFooter').html(html_footer);
        addItem()
    }
    $(document).on('change', '.itemStok', function(e) {
        var key = $(this).data('id')
        $('#satuanStok' + key).empty()
        var id = $(this).val()
        let obj = JSON.parse(data_item.find((value, key) => {
            if (value.id === id) return true
        })['data_konversi'])
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id === id) return true
        });
        var html_body = ""
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '">' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                html_body += '<option value="' + values['satuan_id'] + '">' + values['satuan_name'] + '</option>'
            })
        }
        $('#satuanStok' + key).html(html_body)
    })
    var numberItem = 0

    function addItem() {
        var html = ""
        html += '<div class="card shadow-none m-0 w-100 mb-2" id="fieldItem' + numberItem + '">'
        html += '<div class="card-body p-3">'

        html += '<div class="row align-self-center mb-2">'

        html += '<div class="col-5">'
        html += '<select style="border:none"  class="form-select form-select-sm w-100 itemStok" id="itemStok' + numberItem + '" data-id="' + numberItem + '">'
        html += '<option value="" selected disabled>Pilih Item</option>'
        $.each(data_item, function(keys, values) {
            html += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html += '</select>'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-2">'
        html += '<input onkeypress="return event.charCode >= 48" min="1" style="border:none" type="text" name="" class="form-control form-control-sm p-1 nominal jumlahStok" value="" placeholder="Jumlah Stok" id="jumlahStok' + numberItem + '">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-3">'
        html += '<select style="border:none" name="" class="form-control form-control-sm satuanStok" id="satuanStok' + numberItem + '">'
        html += '</select>'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-1">'
        html += '<button class="btn btn-sm btn-outline-danger" onclick="removeFieldItem(' + numberItem + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#listFormItem').append(html)
        $('.nominal').number(true);
        numberItem++
        return true
    }
    $(document).on('change', '.radioTag', function(e) {
        var value = $('.radioTag:checked').val()
        $('#tampilGudang').removeClass('d-none')
        $('#tampilSupplier').addClass('d-none')
        if (value == 'Terima Supplier' || value == 'Retur Supplier') {
            $('#tampilGudang').addClass('d-none')
            $('#tampilSupplier').removeClass('d-none')
        }
    })

    function tampilKategori(status) {
        // 0 = masuk
        // 1 = keluar
        var name1 = 'Kembali Pinjam'
        var name2 = 'Retur Produksi'
        var name3 = 'Terima Supplier'
        var name4 = 'Adjustment In'
        $('#textTitleGudang').html('Gudang Asal')
        if (status == 1) {
            $('#textTitleGudang').html('Gudang Tujuan')
            name1 = 'Peminjaman'
            name2 = 'Distribusi Produksi'
            name3 = 'Retur Supplier'
            name4 = 'Adjustment Out'
        }
        var html = ""
        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag1" autocomplete="off" value="' + name1 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag1">' + name1 + '</label>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag2" autocomplete="off" value="' + name2 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag2">' + name2 + '</label>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag3" autocomplete="off" value="' + name3 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag3">' + name3 + '</label>'
        html += '</div>'

        html += '<div class="col-12">'
        html += '<hr>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag4" autocomplete="off" value="' + name4 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag4">' + name4 + '</label>'
        html += '</div>'
        $('#tampilKategori').html(html)

        var html_gudang = ""
        $.each(data_gudang, function(keys, values) {
            if (values['name'] != 'Gudang Utama' && values['name'] != 'Gudang Adjustment' && values['id'] != 1) {
                html_gudang += '<div class="col-2 ">'
                html_gudang += '</div>'
                html_gudang += '<div class="col-10 mb-2">'
                html_gudang += '<input type="radio" class="btn-check p-1 text-start radioGudang" name="radioGudang" id="radioGudang' + keys + '" autocomplete="off" value="' + values['id'] + '">'
                html_gudang += '<label class="btn btn-sm btn-outline-primary w-100" for="radioGudang' + keys + '">' + values['name'] + '</label>'
                html_gudang += '</div>'
            }
        })
        $('#tampilGudangRow').html(html_gudang)
        return true
    }

    function removeFieldItem(num) {
        $('#fieldItem' + num).remove()
    }

    function doSimpanStok(images = "") {
        Swal.fire({
            text: 'Apakah anda yakin ingin menyimpan data Transaksi Stok ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var item = []
                var id_item = $('.itemStok').map(function() {
                    return $(this).val();
                }).get();
                var qty = $('.jumlahStok').map(function() {
                    return $(this).val();
                }).get();
                var satuan = $('.satuanStok').map(function() {
                    return $(this).val();
                }).get();
                for (let i = 0; i < id_item.length; i++) {
                    item.push({
                        'id_item': id_item[i],
                        'jumlah': qty[i],
                        'id_satuan': satuan[i],
                    })
                }
                var form_data = new FormData();
                var tanggal = $('#tanggalStok').val()
                var no_doc = $('#nomorDokumen').val()
                var jenis_barang = $('.radioJenisBarang:checked').val()
                var kategori = $('.radioTag:checked').val()
                var gudang = $('.radioGudang:checked').val()
                var image = images
                var note = $('#catatanStok').val()
                var supplier = $('#supplierStok').val()
                var type = 'POST'
                var form_data = {
                    'tanggal': tanggal,
                    'no_doc': no_doc,
                    'jenis_barang': jenis_barang,
                    'kategori': kategori,
                    'gudang': gudang,
                    'image': image,
                    'note': note,
                    'item': item,
                    'created_by': user_id,
                    'id_supplier': supplier,
                }
                var button = '#btnClosePO'
                var url = '<?php echo api_url('Api_Warehouse/insertTransaksiStok'); ?>'
                // console.log(form_data)
                kelolaData(form_data, type, url, button)
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
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Tersimpan',
                        icon: 'success',
                    }).then((responses) => {
                        getData()
                        $('#modal').modal('hide')
                        $(button).prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(button).prop("disabled", false);
                }
            }
        });
    }
</script>