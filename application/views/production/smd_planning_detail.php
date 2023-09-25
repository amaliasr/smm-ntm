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

    .start-25 {
        left: 25% !important;
    }

    .start-15 {
        left: 15% !important;
    }

    .bg-gradient-production {
        background-color: #1C315E !important;
        background-image: linear-gradient(135deg,
                #1C315E 0%,
                rgba(34, 124, 112, 0.8) 100%) !important;
    }
</style>
<style>
    .bg-pita-other {
        background-color: #6C9BCF !important;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-production pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            SMD Plan Detail
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0 shadow-none" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama" autocomplete="off">
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
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 align-self-center" id="listParent">
                            </div>
                            <div class="col-12">
                                <div class="row pt-4" id="listDetail">
                                </div>
                                <div class="row pt-3" id="btnProcess">
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
    var grupMachineType = ""
    var grupMachineTypeWithDate = ""
    var listProduct = ""
    var coloriPita = []
    var jenis_produksi = ""

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                $('#listDetail').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
            },
            beforeSend: function() {
                $('#listDetail').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })


    function getData() {
        if ('<?= $id ?>' != '') {
            $.ajax({
                url: "<?= api_produksi('getProductionPlanSmdDetail'); ?>",
                method: "GET",
                dataType: 'JSON',
                data: {
                    id: '<?= $id ?>',
                    employeeId: user_id,
                },
                error: function(xhr) {
                    $('#listDetail').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
                },
                beforeSend: function() {
                    $('#listDetail').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_afKs3W.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>')
                },
                success: function(response) {
                    data_plan = response['data']
                    jenis_produksi = data_plan['data'][0]['production_type']['name'].toLowerCase()
                    coloringPita()
                }
            })
        } else {
            $('#listDetail').html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
        }
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

    function coloringPita() {
        if (jenis_produksi == 'skt') {
            data_plan.loadPage[jenis_produksi].productPita.forEach(e => {
                if (e.is_default == 1) {
                    var classes = 'bg-warning text-white'
                } else {
                    var classes = 'bg-pita-other text-white'
                }
                coloriPita.push({
                    'id': e.id,
                    'classes': classes,
                    'name': e.name,
                })
            });
        }
        calculateTotal()
    }

    function calculateTotal() {
        var array_product = []
        data_plan['data'][0]['detail'].forEach(a => {
            a['data'].forEach(b => {
                b['data'].forEach(c => {
                    c['data'].forEach(d => {
                        array_product.push({
                            code: d['product']['code'],
                            product: d['product']['id'],
                            unit: d['unit']['name'],
                            qty: d['qty'],
                            machine: c['machine']['id'],
                            machine_name: c['machine']['name'],
                            production_step: b['production_step']['id'],
                            production_step_name: b['production_step']['name'],
                            date: a['date'],
                        })
                    })
                })
            });
        });
        // penjumlahan dan grouping
        grupMachineTypeWithDate = groupAndSum(array_product, ['product', 'machine', 'machine_name', 'code', 'date', 'production_step', 'unit'], ['qty']);
        formDetail()
    }



    function formDetail() {
        var html = ""
        var html_parent = ""
        html_parent += '<p class="m-0">#' + data_plan['data'][0]['code'] + '</p>'
        html_parent += '<h5 class="m-0"><b>' + formatDateIndonesia(data_plan['data'][0]['date_start']) + ' - ' + formatDateIndonesia(data_plan['data'][0]['date_end']) + '</b></h5>'
        if (data_plan['data'][0]['note'] == '') {
            data_plan['data'][0]['note'] = '-'
        }
        html_parent += '<div class="row">'
        html_parent += '<div class="col-auto">'
        html_parent += '<b class="fa fa-sticky-note-o" style="font-size:10px;"></b>'
        html_parent += '</div>'
        html_parent += '<div class="col-auto ps-0">'
        html_parent += '<i class="text-dark-grey artikel" style="font-size:10px;">' + data_plan['data'][0]['note'] + '</i>'
        html_parent += '</div>'
        html_parent += '</div>'
        $('#listParent').html(html_parent)
        $.each(data_plan['data'][0]['detail'], function(keya, valuea) {

            html += '<div class="col-12" id="card_search' + keya + '">'
            html += '<div class="card shadow-none mb-3 mt-3 small position-relative">'
            html += '<h3><span class="position-absolute top-0 start-15 translate-middle badge bg-primary text_search" data-id="' + keya + '">' + formatDateIndonesia(valuea['date']) + '</span></h3>'
            html += '<div class="card-body">'

            // if (jenis_produksi == 'skm') {
            html += '<div class="row">'
            html += '<div class="col-auto align-self-center">'
            html += '<b>Shift :</b>'
            html += '</div>'
            html += '<div class="col-auto">'
            html += '<div class="row">'
            $.each(valuea.shift, function(k, v) {
                html += '<div class="col-auto">'
                html += '<div class="card mb-1 shadow-none">'
                html += '<div class="card-body p-2">'
                html += '<div class="row">'
                html += '<div class="col-auto align-self-center">'
                html += '<i class="fa fa-check-square text-success"></i>'
                html += '</div>'
                html += '<div class="col ps-0">'
                html += '<b class="me-2">' + v.name + '</b>'
                let obj = data_plan.loadPage[jenis_produksi].shift[0].shift_list.find((value, key) => {
                    if (v.id === value.id) return true
                });
                html += (obj.start_time).substring(0, 5) + ' - ' + (obj.end_time).substring(0, 5)
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
            html += '</div>'
            html += '</div>'
            html += '</div>'
            // }

            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-hover table-sm mt-3">'
            html += '<thead>'
            html += '<tr class="bg-grey text-dark">'
            html += '<th class="p-2 font-small">Mesin</th>'
            html += '<th class="p-2 font-small">Satuan</th>'
            var jumlah = (data_plan['loadPage'][jenis_produksi]['product'].length + 3)
            $.each(data_plan['loadPage'][jenis_produksi]['product'], function(key, value) {
                html += '<th class="p-2 font-small">' + value['code'] + '</th>'
            })
            html += '<th class="p-2 font-small">TOTAL</th>'
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            $.each(data_plan['loadPage'][jenis_produksi]['machineGroupPlan'], function(key, value) {
                html += '<tr class="text-black">'
                html += '<td colspan="' + jumlah + '" class="p-2 font-small"><b>' + value['name'] + '</b></td>'
                html += '</tr>'
                var checkAvailableProduction = valuea['data'].filter((value3, key3) => {
                    if (value3.production_step.id === parseInt(value['id'])) return true
                })
                if (checkAvailableProduction.length) {
                    var obj_production_step = checkAvailableProduction[0]['data']
                    $.each(value['machine_group_plan'], function(keys, values) {
                        var obj_machine = obj_production_step.filter((value3, key3) => {
                            if (value3.machine.id === values['id']) return true
                        })[0]
                        // console.log(obj_machine)
                        var jumlahDoublePita = []
                        var checkDPita = []
                        if (obj_machine != undefined) {
                            checkDPita = obj_machine.data.filter((v, k) => {
                                if (v.pita.length > 1) return true
                            })
                            if (checkDPita.length != 0) {
                                var jumlahDoublePita = checkDPita[0].pita
                            }
                        }
                        // console.log(checkDPita)
                        // console.log(jumlahDoublePita)
                        var rowspan = ''
                        if (jumlahDoublePita.length > 1) {
                            rowspan = 'rowspan="' + jumlahDoublePita.length + '"'
                        }
                        html += '<tr>'
                        html += '<td class="font-small" ' + rowspan + '>' + values['name'] + '</td>'
                        html += '<td class="font-small" ' + rowspan + '>' + values['item_unit_name_plan'] + '</td>'
                        $.each(data_plan['loadPage'][jenis_produksi]['product'], function(keys2, values2) {
                            var obj_qty = ""
                            if (obj_machine != undefined) {
                                var obj_product = obj_machine['data'].find((value3, key3) => {
                                    if (value3.product.id === parseInt(values2['id'])) return true
                                })
                                if (obj_product != undefined) {
                                    obj_qty = obj_product['qty']
                                }
                                var checkLetakPita = checkDPita.find((v, k) => {
                                    if (v.product.id == values2.id) return true
                                })
                                var rowspanItem = ''
                                if (checkLetakPita != undefined) {
                                    obj_qty = checkLetakPita.pita[0].qty
                                } else {
                                    rowspanItem = rowspan
                                }
                            }
                            var bg = ""
                            if (obj_qty != "") {
                                bg = 'bg-warning text-white'
                                if (checkLetakPita != undefined) {
                                    let objColor = coloriPita.find((v, k) => {
                                        if (v.id == checkLetakPita.pita[0].id) return true
                                    })
                                    bg = objColor.classes
                                }
                            }
                            html += '<td class="' + bg + '" style="font-size:9px;font-weight:bold;text-align:right;" ' + rowspanItem + '>' + obj_qty + '</td>'
                        })
                        var total = 0
                        if (obj_machine != undefined) {
                            total = obj_machine['data'].reduce((n, {
                                qty
                            }) => n + qty, 0)
                        }
                        html += '<td class="align-self-center totalMesin bg-light" style="font-size:14px;font-weight:bold;text-align:right;" id="totalMesin' + values['id'] + formatDate(valuea['date']) + '" ' + rowspan + '>' + total + '</td>'
                        html += '</tr>'
                        if (jumlahDoublePita.length > 1) {
                            html += '<tr>'
                            checkDPita.forEach(e => {
                                var obj_qty = e.pita[1].qty
                                let objColor = coloriPita.find((v, k) => {
                                    if (v.id == e.pita[1].id) return true
                                })
                                // console.log(objColor.classes)
                                html += '<td class="' + objColor.classes + '" style="font-size:9px;font-weight:bold;text-align:right;" >' + obj_qty + '</td>'
                            })
                            html += '</tr>'
                        }
                    })
                }
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'

            if (jenis_produksi == 'skt') {
                html += '<div class="mt-2">'
                coloriPita.forEach(e => {
                    html += '<span class="small me-2"><i class="fa fa-square-o ' + e.classes + ' me-2"></i>Pita ' + e.name + '</span>'
                });
                html += '</div>'
            }

            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listDetail').html(html)
        var hasil = data_plan.access_create_material.find((v, k) => {
            if (v.employee_id == user_id) return true
        })
        if (hasil != undefined) {
            buttonToDraft()
        }
        // if(data_plan.access_create_material)
        // hiungTotalMesinPerHari()
    }

    function buttonToDraft() {
        var html = ''
        html += '<div class="col-12 text-end">'
        html += '<button class="btn btn-primary" onclick="linkToDraft(' + data_plan.data[0].production_plan_id + ')">Make a Draft <i class="fa fa-pencil ms-2"></i></button>'
        $('#btnProcess').html(html)
        html += '</div>'
    }

    function hiungTotalMesinPerHari() {
        $.each(data_plan['detail'][0]['detail'], function(keya, valuea) {
            $$.each(data_plan['loadPage'][jenis_produksi]['machine'], function(key, value) {
                $.each(value['machine'], function(keys, values) {
                    var jumlah_isi = 0
                    var obj = data['productionPlanDetail'].filter((values2, keys2) => {
                        if (values2.date === formatDate(dates) && values2.machine_id === parseInt(values['id'])) return true
                    })
                    if (obj != undefined) {
                        jumlah_isi = obj.reduce((n, {
                            qty
                        }) => parseInt(n) + parseInt(qty), 0)
                    }
                    $('#totalMesin' + values['id'] + formatDate(dates)).html(jumlah_isi)
                })
            })
        })
    }

    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching() {
        var value = $('#search_nama').val().toLowerCase();
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

    function linkToDraft(id) {
        var url = '<?= base_url() ?>production/draftMaterial/' + id
        window.open(url, '_blank')
    }
</script>