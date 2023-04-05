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

    .table {
        border-color: #808080 !important;
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
            <div class="col-12 pb-2">
                <h1 class="text-dark"><b>Detail Material Request</b></h1>
            </div>
        </div>
        <div class="row justify-content-center" id="fieldIsi">
        </div>
        <div class="row">
            <div class="col-12 text-end" id="fieldBtnApproval">
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
        html += '<div class="card w-100 shadow-none mb-2 p-0" style="border:0px;">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
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
    var job_title_id = '<?= $this->session->userdata('job_title_id') ?>'
    var id_material = '<?= $id ?>'
    var data_user = ""
    var data_material = ""
    var stage_step = []
    var stage = 0

    $(document).ready(function() {
        // $('#layoutSidenav_content').addClass('bg-lembut')
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                $('#fieldIsi').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#fieldIsi').html('<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })


    function getData() {
        $.ajax({
            url: "<?= api_produksi('getMaterialRequestApproval'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: id_material,
                employeeId: user_id,
            },
            error: function(xhr) {
                $('#fieldIsi').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#fieldIsi').html('<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
            },
            success: function(response) {
                data_material = response['data']
                // console.log(data_material)
                stages()
            }
        })
    }

    function stages() {
        $('#fieldIsi').html('')
        if (data_material['materialRequest'].length > 0) {
            infoMaterialRequest()
            detailMaterialRequest()
            sizing()
        } else {
            $('#fieldIsi').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
        }
    }

    function infoMaterialRequest() {
        var html = ""
        html += '<div class="col-12 col-md-4" id="cardSampingKiri">'
        html += '<div class="card shadow-none mb-4">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<span class="btn btn-sm bg-pinku rounded-pill" style="width: 3rem; height:3rem;"><i class="fa fa-info fa-2x text-white"></i></span>'
        html += '</div>'
        html += '<div class="col align-self-center p-0">'
        html += '<p class="m-0" style="font-size:10px;">Material Request</p>'
        html += '<h3 class="m-0"><b>' + data_material['materialRequest'][0]['code'] + '</b></h3>'
        html += '<p class="m-0" style="font-size:10px;"><i class="fa fa-calendar me-2"></i>' + formatDateIndonesia(data_material['materialRequest'][0]['date']) + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<hr>'
        html += '</div>'
        html += '<div class="col-12 small">'
        html += '<div class="row">'
        html += '<div class="col-5 pt-1 pb-1 small">Create By</div>'
        html += '<div class="col-7 pt-1 pb-1 small text-end"><b><i class="fa fa-user-o me-2"></i>' + data_material['materialRequest'][0]['created_employee']['name'] + '</b></div>'
        html += '<div class="col-5 pt-1 pb-1 small">Production Type</div>'
        html += '<div class="col-7 pt-1 pb-1 small text-end"><b>' + data_material['materialRequest'][0]['production_type']['name'] + '</b></div>'
        html += '<div class="col-5 pt-1 pb-1 small">Shift</div>'
        html += '<div class="col-7 pt-1 pb-1 small text-end"><b>#1 (07:00 - 15:00)</b></div>'
        html += '<div class="col-5 pt-1 pb-1 small">Status Material</div>'
        html += '<div class="col-7 pt-1 pb-1 small text-end text-orange"><b>' + data_material['materialRequest'][0]['status'] + '</b></div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#fieldIsi').append(html)
    }
    var data_isi_material = []
    var data_isi_material_group = []

    function detailMaterialRequest() {
        // pembentukan variable
        $.each(data_material['materialRequest'][0]['machine_type'], function(key, value) {
            // machine type
            $.each(value['machine_sub_type'], function(keys, values) {
                // machine sub type
                $.each(values['detail'], function(keys2, values2) {
                    // machine
                    $.each(values2['machine']['material'], function(keys3, values3) {
                        data_isi_material.push({
                            'machine_type_id': value['id'],
                            'machine_type_name': value['name'],
                            'machine_subtype_id': values['id'],
                            'machine_subtype_name': values['name'],
                            'machine_id': values2['machine']['id'],
                            'machine_code': values2['machine']['code'],
                            'material_id': values3['material']['id'],
                            'material_name': values3['material']['name'],
                            'material_code': values3['material']['code'],
                            'unit_id': values3['unit']['id'],
                            'unit': values3['unit']['name'],
                            'qty': values3['qty_request'],
                        })
                    })
                })
            })
        })
        data_isi_material_group = groupAndSum(data_isi_material, ['material_id', 'material_name', 'material_code', 'unit'], ['qty'])
        // console.log(data_isi_material)
        formDetailMaterialRequest()
    }

    function formDetailMaterialRequest() {
        var html = ""
        html += '<div class="col-12 col-md-8" id="cardSampingKanan">'
        html += '<div class="card shadow-none mb-4">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<span class="btn btn-sm bg-pinku rounded-pill" style="width: 3rem; height:3rem;"><i class="fa fa-file-text-o fa-2x text-white"></i></span>'
        html += '</div>'
        html += '<div class="col align-self-center p-0 pl-1">'
        html += '<h3 class="m-0"><b>Detail Material Request</b></h3>'
        html += '<p class="m-0" style="font-size:10px;">List Material Request berdasarkan Tiap Mesin yang akan digunakan</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 small">'
        html += '<div class="row pt-4">'
        $.each(data_material['machineMaterialHeader'], function(key, value) {
            var nama = data_material['machineMaterialHeader'][key].filter((values2, keys2) => {
                if (values2.detail != null) return true
            })
            var nama_non = data_material['machineMaterialHeader'][key].filter((values2, keys2) => {
                if (values2.detail == null) return true
            })
            var data = data_isi_material.filter((values2, keys2) => {
                if (values2['machine_type_name'] == nama[0]['label']) return true
            })
            var data_group = groupAndSum(data, ['material_id', 'material_name', 'material_code', 'unit'], ['qty'])
            html += '<div class="col-12 pt-2">'
            html += '<h3 class="m-0 mb-2"><b>' + nama[0]['label'] + '</b></h3>'
            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-hover table-sm">'
            html += '<thead>'
            html += '<tr class="bg-grey text-dark">'
            $.each(data_material['machineMaterialHeader'][key], function(keys, values) {
                var row = 'rowspan="2"'
                if (values['detail'] != null) {
                    row = 'colspan="' + values['detail']['machine'].length + '"'
                }
                html += '<th class="p-2 font-small" ' + row + '>' + values['label'].toUpperCase() + '</th>'
            })
            html += '</tr>'
            html += '<tr class="bg-grey text-dark">'
            var a = 0
            $.each(nama, function(keys, values) {
                $.each(values['detail']['machine'], function(keys2, values2) {
                    html += '<th class="p-2 font-small">' + values2['code'] + '</th>'
                    a++
                })
            })
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            if (data_group.length > 0) {
                $.each(data_group, function(keya, valuea) {
                    html += '<tr>'
                    $.each(nama_non, function(keys, values) {
                        html += '<td class="p-2 font-small">' + valuea[values['label'].replace(' ', '_')] + '</td>'
                    })
                    $.each(nama, function(keys, values) {
                        $.each(values['detail']['machine'], function(keys2, values2) {
                            var datas = data.find((valuesa, keysa) => {
                                if (valuesa['material_id'] == valuea['material_id'] && values2['id'] == valuesa['machine_id']) return true
                            })
                            var jumlah = ""
                            var bg = ""
                            if (datas != undefined) {
                                jumlah = datas['qty']
                                bg = 'bg-light'
                            }
                            html += '<td class="p-2 font-small text-end fw-bold ' + bg + '"><b>' + number_format(jumlah) + '</b></td>'
                        })
                    })
                    html += '</tr>'
                })
            } else {
                var jumlah = parseInt(nama_non.length) + parseInt(a)
                html += '<tr>'
                html += '<td colspan="' + jumlah + '" class="text-center p-5">'
                html += '<i class="small">Tidak Ada Data yang Tersedia</i>'
                html += '</td>'
                html += '</tr>'
            }
            html += '</tbody>'
            html += '</table>'
            html += '</div>'
            html += '</div>'
        })
        html += '<div class="col-12 text-end" id="fieldBtnSelesaikan">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#fieldIsi').append(html)
        if (data_material.materialRequest[0].is_approve == null) {
            fieldBtnApproval()
        }
    }

    function resultMaterialRequest(location) {
        var html = ""
        // html += '<div class="col-12 col-md-4 ">'
        // html += '</div>'
        // html += '<div class="col-12 col-md-4 order-last">'
        html += '<div class="card shadow-none mb-4" id="resultPane">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<span class="btn btn-sm bg-pinku rounded-pill" style="width: 3rem; height:3rem;"><i class="fa fa-th fa-2x text-white"></i></span>'
        html += '</div>'
        html += '<div class="col align-self-center p-0 pl-1">'
        html += '<h3 class="m-0"><b>Result Material</b></h3>'
        html += '<p class="m-0" style="font-size:10px;">Rangkuman dari detail Material Request berdasarkan Per Material yang diminta</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 text-end pt-2">'
        html += '<button class="btn btn-outline-dark btn-sm dropdown-toggle shadow-none" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" style="font-size: 10px;">View</button>'
        html += '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">'
        html += '<li>'
        html += '<h6 class="dropdown-header">View By</h6>'
        html += '</li>'
        html += '<li><a class="dropdown-item" onclick="formatCard(' + "'" + 'cardboard' + "'" + ')"><i class="fa fa-th-large me-1"></i>Cardboard <i class="ms-2 fa fa-check text-success" id="successCardboard"></i></a></li>'
        html += '<li><a class="dropdown-item" onclick="formatCard(' + "'" + 'table' + "'" + ')"><i class="fa fa-table me-1"></i>Table <i class="ms-2 fa fa-check text-success d-none" id="successTable"></i></a></li>'
        html += '</ul>'
        html += '</div>'
        html += '<div class="col-12 small pt-3" id="formatCard">'

        html += '</div>'
        html += '</div>'
        // html += '</div>'
        $(location).append(html)
        formatCard('cardboard')
    }

    function fieldBtnApproval() {
        if (job_title_id == 7) {
            var html = ''
            html += '<button type="button" class="btn btn-success" onclick="approvalForm()">Selesaikan Persetujuan</button>'
            $('#fieldBtnSelesaikan').html(html)
        }
    }

    function formatCard(status) {
        var html = ""
        if (status == 'cardboard') {
            $('#successCardboard').removeClass('d-none')
            $('#successTable').addClass('d-none')
            $.each(data_isi_material_group, function(key, value) {
                html += '<div class="card shadow-none bd-callout-0 mb-2">'
                html += '<div class="card-body p-2">'
                html += '<div class="row">'
                html += '<div class="col-7 pt-1 pb-1 small">' + value['material_name'] + '</div>'
                html += '<div class="col-5 pt-1 pb-1 text-end"><b><span class="text-orange">' + number_format(value['qty']) + '</span> ' + value['unit'] + '</b></div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
        } else {
            $('#successCardboard').addClass('d-none')
            $('#successTable').removeClass('d-none')
            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-hover table-sm">'
            html += '<thead>'
            html += '<tr class="bg-grey text-dark">'
            html += '<th class="p-2 font-small">Material Code</th>'
            html += '<th class="p-2 font-small">Material Name</th>'
            html += '<th class="p-2 font-small">QTY</th>'
            html += '<th class="p-2 font-small">Unit</th>'
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            $.each(data_isi_material_group, function(key, value) {
                html += '<tr>'
                html += '<td class="p-2 font-small">' + value['material_code'] + '</td>'
                html += '<td class="p-2 font-small">' + value['material_name'] + '</td>'
                html += '<td class="p-2 font-small text-end fw-bold"><b>' + number_format(value['qty']) + '</b></td>'
                html += '<td class="p-2 font-small">' + value['unit'] + '</td>'
                html += '</tr>'
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'
        }
        $('#formatCard').html(html)
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
    $(window).on('resize', function() {
        sizing()
    })

    function sizing() {
        $('#resultPane').remove()
        var width = $(window).width()
        if (width <= 720) {
            resultMaterialRequest('#cardSampingKanan')
        } else {
            resultMaterialRequest('#cardSampingKiri')
        }
    }

    function approvalForm() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Approval</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'

        html_body += '<div class="row">'
        html_body += '<div class="col-12 mb-5">'
        html_body += '<div class="form-check">'
        html_body += '<input class="form-check-input" type="checkbox" value="" id="checkedApproval">'
        html_body += '<label class="form-check-label" for="checkedApproval">'
        html_body += 'Saya dengan Bijaksana dan Tanpa Paksaan Menyetujui Segala Permintaan Material Request dari ' + data_material['materialRequest'][0]['created_employee']['name'] + ' pada tanggal ' + formatDateIndonesia(data_material['materialRequest'][0]['date'])
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row" id="formApproval">'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-primary w-100" id="btnApprove" disabled onclick="kirimApproval()">Kirim Approval</button>'
        $('#modalFooter').html(html_footer);
    }

    function formAccReject() {
        var html_body = ""
        html_body += '<div class="col-12 col-md-6 mb-2">'
        html_body += '<div class="card shadow-none btn-approval" id="btn_reject" data-status="0">'
        html_body += '<div class="card-body text-center">'
        html_body += '<span><i class="fa fa-times text-danger" id="icon_reject"></i> Reject</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="card shadow-none btn-approval" id="btn_accept" data-status="1">'
        html_body += '<div class="card-body text-center">'
        html_body += '<span><i class="fa fa-check text-success" id="icon_accept"></i> Accept</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-4 d-none" id="textareaReject">'
        html_body += '<b>Alasan Membatalkan :</b>'
        html_body += '<textarea class="form-control form-control-sm small" rows="5" id="textReject"></textarea>'
        html_body += '</div>'
        $('#formApproval').html(html_body)
        return true
    }
    $(document).on('click', '#checkedApproval', function(e) {
        var value = $(this).is(':checked');
        if (value == true) {
            formAccReject()
        } else {
            $('#formApproval').empty()
            $('#btnApprove').attr('disabled', true)
        }
    })
    var approval_status = 0
    $(document).on('click', '.btn-approval', function(e) {
        $('#btnApprove').removeAttr('disabled', true)
        var status = $(this).data('status')
        approval_status = status
        if (status == 1) {
            $('#btn_accept').addClass('text-white bg-success')
            $('#btn_reject').removeClass('text-white bg-danger')
            $('#icon_accept').addClass('text-white').removeClass('text-success')
            $('#icon_reject').removeClass('text-white').addClass('text-danger')
            $('#textareaReject').addClass('d-none')
        } else {
            $('#btn_accept').removeClass('text-white bg-success')
            $('#btn_reject').addClass('text-white bg-danger')
            $('#icon_accept').removeClass('text-white').addClass('text-success')
            $('#icon_reject').addClass('text-white').removeClass('text-danger')
            $('#textareaReject').removeClass('d-none')
        }
    })

    function kirimApproval() {
        Swal.fire({
            text: 'Anda akan melakukan approval, apakah anda ingin melanjutkan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var data = {
                    employeeId: user_id,
                    referenceTable: 'material_request',
                    referenceId: id_material,
                    isApprove: approval_status,
                    note: $('#textReject').val(),
                    index: 1
                }
                var button = '#btnApprove'
                var url = '<?php echo api_produksi('setApproval'); ?>'
                sendData(data, type, url, button)
            }
        })
    }

    function sendData(data, type, url, button) {
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
                $('#modal2').modal('hide')
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Approval kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                $('#modal').modal('hide')
                var data_notif = response.data.sendNotif.logistik
                var no_telp = []
                var nama = []
                $.each(data_notif, function(key, value) {
                    no_telp.push(value.phone)
                    nama.push(value.full_name)
                })
                shareWhatsapp(no_telp, nama, response.data.materialRequest[0].code, response.data.materialRequest[0].date, response.data.materialRequest[0].production_type_name, response.data.materialRequest[0].id)
            }
        })
    }

    function shareWhatsapp(no_telp, nama, code, date, type_name, id) {
        $.ajax({
            url: "<?= base_url('api/sendMaterialToLogistik') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: '<?= base_url() ?>production/managementMaterialRequest/' + id,
                nama: nama,
                kode: code,
                tanggal: date,
                type_name: type_name
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
</script>