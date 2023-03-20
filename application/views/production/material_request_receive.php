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

    .small-text {
        font-size: 11px;
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
            <div class="col-12 col-lg-6 col-md-6 pb-2">
                <div class="row">
                    <div class="col-2 text-center align-self-center">
                        <img src="<?= base_url() ?>assets/image/svg/receive.svg" class="img-responsive" alt="Image" style="width:100%">
                    </div>
                    <div class="col align-self-center">
                        <p class="m-0 h4"><b>Receive Material</b></p>
                        <p class="m-0" id="codeMaterial">-</p>
                        <!-- <p class="m-0 small-text"><i class="fa fa-calendar me-2"></i> Rabu, 1 Maret 2023</p> -->
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-lg-6 col-md-6">
                <button type="button" class="btn btn-orange btn-sm mb-2 me-1 shadow-none" id="btnChecklist" onclick="swapBtn('checklist')">Checklist Material <span class="ms-2 badge bg-light text-orange"><span id="numberCheck">0</span> / <span id="numberTotal">0</span></span></button>
                <button type="button" class="btn btn-light btn-sm mb-2 shadow-none" id="btnInfo" onclick="swapBtn('info')">Info</button>
                <div class="card shadow-none">
                    <div class="card-body p-4" id="listMaterial">
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
<!-- TOAST -->
<div class="position-fixed top-50 start-50 translate-middle-x p-3" style="z-index: 999999999999999">
    <div class="toast align-items-center text-white bg-success border-0 shadow-sm" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-animation="true">
        <div class="d-flex">
            <div class="toast-body p-5">
                Hurray! Semua Item telah di Check, silahkan pilih tombol 'Terima' untuk melanjutkan
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
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
    var full_name = '<?= $this->session->userdata('full_name') ?>'
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
                $('#listMaterial').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#listMaterial').html('<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
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
                $('#listMaterial').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#listMaterial').html('<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
            },
            success: function(response) {
                data_material = response['data']
                if (data_material.materialRequest.length > 0) {
                    $('#codeMaterial').html(data_material.materialRequest[0].code)
                    stages()
                } else {
                    $('#btnChecklist').addClass('d-none')
                    $('#btnInfo').addClass('d-none')
                    $('#listMaterial').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
                }
            }
        })
    }

    function stages() {
        $('#listMaterial').html('')
        if (data_material.materialRequest[0].is_process == 1 && data_material.materialRequest[0].is_receive == null) {
            $('#btnChecklist').removeClass('d-none')
            $('#btnInfo').removeClass('d-none')
            detailMaterialRequest()
        } else {
            $('#btnChecklist').addClass('d-none')
            $('#btnInfo').addClass('d-none')
            $('#listMaterial').html('<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
        }
    }
    var data_isi_material = []
    var data_isi_machine_group = []
    var valueItem = []

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
                            'material_request_item_id': values3['material']['material_request_item_id'],
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
        data_isi_machine_group = groupAndSum(data_isi_material, ['machine_id', 'machine_code'], ['qty'])
        formDetailMaterialRequest()
    }

    function formDetailMaterialRequest() {
        var html = ''
        $.each(data_isi_machine_group, function(key, value) {
            html += '<div class="pb-3">'
            html += '<p class="m-0 text-orange"><b>' + value.machine_code + '</b></p>'
            html += '<hr style="width:100px;height:2px;" class="text-orange">'
            $.each(data_isi_material, function(keys, values) {
                if (value.machine_id == values.machine_id) {
                    html += '<div class="card shadow-none mb-2 cardItem" id="cardList' + key + keys + '" data-id="' + values.material_request_item_id + '">'
                    html += '<div class="card-body p-3">'
                    html += '<div class="row">'
                    html += '<div class="col">'
                    html += '<p class="m-0 small"><b>' + values.material_name + '</b></p>'
                    html += '<p class="m-0 small-text">' + number_format(values.qty) + ' ' + values.unit + '</p>'
                    html += '</div>'
                    html += '<div class="col-auto align-self-center text-center" style="cursor:pointer;" onclick="checkedList(' + "'" + key + keys + "'" + ')">'
                    html += '<i class="fa fa-check-square text-light fa-2x"  id="checkCardItem' + key + keys + '"></i>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                }
            })
            html += '</div>'
        })
        html += '<button type="button" class="btn btn-primary w-100" id="btnApprove" disabled onclick="kirimApproval()">Material Diterima</button>'
        $('#listMaterial').html(html)
        $('#numberTotal').html(data_isi_material.length)
        for (let i = 0; i < valueItem.length; i++) {
            check(valueItem[i])
        }
    }

    function fieldInfo() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-5 small">Code</div>'
        html += '<div class="col-7 small"><b>' + data_material.materialRequest[0].code + '</b></div>'
        html += '<div class="col-5 small">Created At</div>'
        html += '<div class="col-7 small"><b>' + formatDateIndonesia(data_material.materialRequest[0].date) + '</b></div>'
        html += '<div class="col-5 small">Production Type</div>'
        html += '<div class="col-7 small"><b>' + data_material.materialRequest[0].production_type.name + '</b></div>'
        html += '<div class="col-5 small">Status</div>'
        html += '<div class="col-7 small text-orange"><b>' + data_material.materialRequest[0].status + '</b></div>'
        html += '</div>'
        $('#listMaterial').html(html)
    }

    function swapBtn(type) {
        if (type == 'checklist') {
            $('#btnChecklist').removeClass('btn-light')
            $('#btnChecklist').addClass('btn-orange')
            $('#btnInfo').addClass('btn-light')
            $('#btnInfo').removeClass('btn-orange')
            formDetailMaterialRequest()
        } else {
            $('#btnChecklist').addClass('btn-light')
            $('#btnChecklist').removeClass('btn-orange')
            $('#btnInfo').removeClass('btn-light')
            $('#btnInfo').addClass('btn-orange')
            fieldInfo()
        }
    }

    function checkedList(id) {
        var data = $('#cardList' + id).hasClass('activeItem')
        if (data == true) {
            // uncheck
            valueItem.splice($.inArray(id, valueItem), 1);
            uncheck(id)
        } else {
            // check
            valueItem.push(id)
            check(id)
        }
        countItemCheck()
    }

    function check(id) {
        $('#cardList' + id).addClass('activeItem bg-light')
        $('#checkCardItem' + id).removeClass('text-light')
        $('#checkCardItem' + id).addClass('text-success')
    }

    function uncheck(id) {
        $('#cardList' + id).removeClass('activeItem bg-light')
        $('#checkCardItem' + id).addClass('text-light')
        $('#checkCardItem' + id).removeClass('text-success')
    }

    function countItemCheck() {
        var jumlahCard = $('.cardItem').length
        var jumlahCardSelected = $('.activeItem').length
        $('#numberCheck').html(jumlahCardSelected)
        if (jumlahCard == jumlahCardSelected) {
            callToast()
            $('#btnApprove').removeAttr('disabled', true)
        } else {
            $('#btnApprove').attr('disabled', true)
        }
    }

    function callToast() {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        })
        toastList.forEach(toast => toast.show())
    }

    function kirimApproval() {
        Swal.fire({
            text: 'Anda telah menyelesaikan pengecekan, Apakah anda ingin menyelesaikan Material Request ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                var materailId = $('.cardItem').map(function() {
                    return $(this).data('id');
                }).get();
                var type = 'POST'
                var data = {
                    material_request_id: '<?= $id ?>',
                    is_receive: 1,
                    employee_id: user_id,
                    material_request_item_id: materailId,
                }
                var button = '#btnApprove'
                var url = '<?php echo api_produksi('setMaterialRequestReceive'); ?>'
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
                console.log(response)
                var data_notif = response.data.sendNotif.logistik
                var data_notif2 = response.data.sendNotif.spvSmd
                var no_telp = []
                var nama = []
                $.each(data_notif, function(key, value) {
                    no_telp.push('081944946015')
                    nama.push(value.full_name)
                })
                $.each(data_notif2, function(key, value) {
                    no_telp.push('081944946015')
                    nama.push(value.full_name)
                })
                shareWhatsapp(no_telp, nama, data.material_request_id)
            }
        })
    }

    function shareWhatsapp(no_telp, nama, code) {
        $.ajax({
            url: "<?= base_url('api/sendNotifAfterReceiveMaterial') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                nama: nama,
                kode: code,
                owner: full_name
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