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
                    <div class="col-4 text-end p-0 pe-4 align-self-center border-end">
                        <p class="m-0 text-orange" style="font-size: 14px;"><b>PLAN 1 WEEK</b></p>
                    </div>
                    <div class="col-auto p-0 ps-4 align-self-end">
                        <div class="row p-0" id="detailTargetPane">
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
                            <div class="col-12 col-md-10 align-self-center" id="mainDraftMaterial">
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="button" class="btn btn-teal w-100 btn-sm h-100" onclick="fieldDetailDateAuto()"><i class="fa fa-magic me-2"></i>Auto Generate Material</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4" id="detailDateForm">

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

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

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

    function startPane(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<p class="m-0 small">Anda dapat Melakukan Auto Generate Material dari Plan</>'
        html += '<p class="m-0 mb-4 small">Atau dengan <b>Manual</b></>'
        html += '<br>'
        html += '<button class="btn btn-outline-success btn-sm mt-4"><i class="fa fa-plus me-2"></i>Tambah Draft Manual</button>'
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
                notFound('#detailDateForm')
            },
            beforeSend: function() {
                loadingData('#detailDateForm')
            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })
    var jenis_produksi = ""

    function getData() {
        $.ajax({
            url: "<?= api_produksi('getProductionPlanSmdDetail'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: '<?= $id ?>'
            },
            error: function(xhr) {
                notFound('#detailDateForm')
            },
            beforeSend: function() {
                loadingData('#detailDateForm')
            },
            success: function(response) {
                data_plan = response['data']
                jenis_produksi = data_plan['data'][0]['production_type']['name'].toLowerCase()
                calculateTotal()
                mainDraft('#mainDraftMaterial')
                startPane('#detailDateForm')
                console.log(data_plan)
            }
        })
    }

    var a = 0

    function fieldDetailDateAuto() {
        $('#detailDateForm').html('')
        $.each(data_plan['data'][0]['detail'], function(key, value) {
            formDetail(data_plan['data'][0]['detail'][key])
        })

    }

    function groupAndSum(arr, groupKeys, sumKeys) {
        return Object.values(
            arr.reduce((acc, curr) => {
                const group = groupKeys.map(k => curr[k]).join('-');
                acc[group] = acc[group] || Object.fromEntries(groupKeys.map(k => [k, curr[k]]).concat(sumKeys.map(k => [k, 0])));
                sumKeys.forEach(k => acc[group][k] += curr[k]);
                return acc;
            }, {})
        );
    }

    var grupMachineType = ""
    var grupMachineTypeWithDate = ""
    var listProduct = ""

    function calculateTotal() {
        var array_product = []
        var product = []
        data_plan['data'][0]['detail'].forEach(a => {
            a['data'].forEach(b => {
                b['data'].forEach(c => {
                    c['data'].forEach(d => {
                        product.push(d['product']['code'])
                        array_product.push({
                            code: d['product']['code'],
                            product: d['product']['id'],
                            unit: d['unit']['name'],
                            qty: d['qty'],
                            machine: c['machine']['id'],
                            machine_name: c['machine']['name'],
                            machine_type: b['machine_type']['id'],
                            machine_type_name: b['machine_type']['name'],
                            date: a['date'],
                        })
                    })
                })
            });
        });
        // penjumlahan dan grouping
        grupMachineType = groupAndSum(array_product, ['product', 'machine_type', 'code', 'machine_type_name'], ['qty']);
        grupMachineTypeWithDate = groupAndSum(array_product, ['product', 'machine', 'machine_name', 'code', 'date', 'machine_type', 'unit'], ['qty']);
        console.log(grupMachineTypeWithDate);
        listProduct = unique(product)
        planAWeek()
    }

    function mainDraft(location) {
        var html = ""
        html += '<p class="m-0">#' + data_plan['data'][0]['code'] + '</p>'
        html += '<h5 class="m-0"><b>' + formatDateIndonesia(data_plan['data'][0]['date_start']) + ' - ' + formatDateIndonesia(data_plan['data'][0]['date_end']) + '</b></h5>'
        for (let i = 0; i < listProduct.length; i++) {
            html += '<span class="badge bg-dark me-2">'
            html += '<p class="m-0" style="font-size: 11px;">' + listProduct[i] + '</p>'
            html += '</span>'
        }
        $(location).html(html)
    }

    function planAWeek() {
        var html = ""
        $.each(grupMachineType, function(key, value) {
            html += '<div class="col-auto text-center align-self-center">'
            html += '<p class="m-0" style="font-size: 12px;"><span class="text-orange">' + value['code'] + '</span> <span style="font-size:9px">[ ' + value['machine_type_name'] + ' ]</span></p>'
            html += '<p class="m-0" style="font-size: 14px;"><b><span class="">' + number_format(value['qty']) + '</span> / ' + number_format(value['qty']) + '</b></p>'
            html += '</div>'
        })
        $('#detailTargetPane').html(html)
    }

    function formDetail(data) {
        var html = ""
        html += '<div class="card shadow-sm bd-callout-' + a + ' mb-3">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-12 col-md-6">'
        html += '<p class="m-0" style="font-size:11px;">Date</p>'
        html += '<h4 class="m-0"><b>' + formatDateIndonesia(data['date']) + '</b></h4>'
        html += '<p class="m-0 mt-3 mb-2" style="font-size:11px;">Additional :</p>'
        html += '<div class="form-check small" style="font-size: 11px;">'
        html += '<input class="form-check-input" type="checkbox" value="" id="checkLeftover' + a + '">'
        html += '<label class="form-check-label" for="checkLeftover' + a + '">'
        html += 'Include Leftover Material'
        html += '</label>'
        html += '</div>'
        html += '<div class="form-check small" style="font-size: 11px;">'
        html += '<input class="form-check-input" type="checkbox" value="" id="checkWasteAllMachine' + a + '" checked>'
        html += '<label class="form-check-label" for="checkWasteAllMachine' + a + '">'
        html += 'Include All for Waste (%)'
        html += '<br>'
        html += '<button class="btn btn-outline-dark btn-sm dropdown-toggle w-100 mt-2" id="dropdownMenuButton2' + a + '" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">'
        html += 'Option (6 Item)'
        html += '</button>'
        html += '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2' + a + '">'
        html += '<li>'
        html += '<h6 class="dropdown-header">Customized Waste</h6>'
        html += '</li>'
        html += '<li>'
        html += '<form class="px-3">'
        html += '<div class="row">'

        html += '<div class="col">'
        html += '<div class="form-check">'
        html += '<input type="checkbox" class="form-check-input" id="dropdownCheck' + a + '2" checked>'
        html += '<label class="form-check-label" for="dropdownCheck' + a + '2">'
        html += 'MK9-A'
        html += '<div class="form-check">'
        html += '<input type="checkbox" class="form-check-input" id="dropdownCheck' + a + '21" checked>'
        html += '<label class="form-check-label" for="dropdownCheck' + a + '21">'
        html += 'FILTER REG'
        html += '</label>'
        html += '</div>'
        html += '<div class="form-check">'
        html += '<input type="checkbox" class="form-check-input" id="dropdownCheck' + a + '22" checked>'
        html += '<label class="form-check-label" for="dropdownCheck' + a + '22">'
        html += 'FILTER PD160'
        html += '</label>'
        html += '</div>'
        html += '<div class="form-check">'
        html += '<input type="checkbox" class="form-check-input" id="dropdownCheck' + a + '23" checked>'
        html += '<label class="form-check-label" for="dropdownCheck' + a + '23">'
        html += 'FILTER PD180'
        html += ' </label>'
        html += '</div>'
        html += '</label>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</form>'
        html += '</li>'
        html += '</ul>'
        html += '</label>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 col-md-6">'
        html += '<p class="m-0 mb-2" style="font-size:11px;"><b><i class="fa fa-file-o me-2"></i>Plan Production Daily</b></p>'
        html += '<div class="row" id="listDetailProduction">'
        $.each(grupMachineTypeWithDate, function(key, value) {
            if (value['date'] == data['date']) {
                html += '<div class="col-12 col-md-6">'
                html += '<div class="card shadow-none w-100 mb-2">'
                html += '<div class="card-body p-2 ps-3 pe-3">'
                html += '<div class="row">'
                html += '<div class="col-5 align-self-center">'
                html += '<h6 class="m-0" style="font-size:12px;"><b>' + value['code'] + '</b></h6>'
                html += '<p class="m-0 font-small" style="font-size:8px;"><i class="fa fa-cogs me-2"></i>' + value['machine_name'] + '</p>'
                html += '</div>'
                html += '<div class="col-7 align-self-center">'
                html += '<div class="row">'
                html += '<div class="col-6 border-end">'
                html += '<p class="m-0 text-success lh-1" style="font-size:12px;"><b>' + value['qty'] + '</b> <br><span style="font-size:11px;">' + value['unit']
                '</span></p>'
                html += '</div>'
                html += '<div class="col-6">'
                html += '<p class="m-0 lh-1" style="font-size:12px;"><b>' + value['qty'] + '</b> <br><span style="font-size:11px;">' + value['unit']
                '</span></p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-4">'
        html += '<div class="row">'

        html += '<div class="col-12">'
        html += '<b style="font-size: 14px;">MAKER</b>'
        html += '<div class="table-responsive">'
        html += '<table class="table table-bordered table-hover table-sm">'
        html += '<thead>'
        html += '<tr class="bg-grey text-dark">'
        html += '<th class="p-2 font-small" rowspan="3">Machine</th>'
        html += '<th class="p-2 font-small" rowspan="3">Total Production</th>'
        html += '</tr>'
        html += '<tr class="bg-grey text-dark">'
        html += '<th class="p-2 font-small" colspan="3">BRAND / MERK</th>'
        html += '<th class="p-2 font-small" colspan="3">FILTER</th>'
        html += '<th class="p-2 font-small" colspan="3">CP/BOBIN</th>'
        html += '<th class="p-2 font-small" colspan="4">CTP</th>'
        html += '<th class="p-2 font-small" colspan="2">TSG</th>'
        html += '</tr>'
        html += '<tr class="bg-grey text-dark">'
        html += '<th class="p-2 font-small">ARF</th>'
        html += '<th class="p-2 font-small">ARF PD180</th>'
        html += '<th class="p-2 font-small">ABLF</th>'
        html += '<th class="p-2 font-small">FILTER REG</th>'
        html += '<th class="p-2 font-small">FILTER PD160</th>'
        html += '<th class="p-2 font-small">FILTER PD180</th>'
        html += '<th class="p-2 font-small">BLACK</th>'
        html += '<th class="p-2 font-small">REPSE</th>'
        html += '<th class="p-2 font-small">VERGE</th>'
        html += '<th class="p-2 font-small">RED</th>'
        html += '<th class="p-2 font-small">BLACK</th>'
        html += '<th class="p-2 font-small">BOLD</th>'
        html += '<th class="p-2 font-small">GINZA</th>'
        html += '<th class="p-2 font-small">KRETEK BOLD</th>'
        html += '<th class="p-2 font-small">KRETEK GINZA</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        html += '<tr>'
        html += '<td class="p-2 font-small">MK9-A</td>'
        html += '<?php for ($j = 0; $j < 16; $j++) { ?>'
        html += '<td class="p-0 font-small"><input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:9px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="..."></td>'
        html += '<?php } ?>'
        html += '</tr>'
        html += '</tbody>'
        html += '</table>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 text-end">'
        html += '<button type="button" class="btn btn-dark btn-sm mt-2"><i class="fa fa-plus me-2"></i>Buat Material Request</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#detailDateForm').append(html)
        a++
        if (a == 7) {
            a = 0
        }
    }
</script>