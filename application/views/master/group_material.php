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
        background-color: #EDEDED !important;
        color: #B2B2B2;
    }

    .bg-light-grey {
        background-color: #fafafa;
    }

    .text-random {
        color: #425F57;
    }

    .bg-random {
        background-color: #425F57;
    }

    .card-hoper:hover {
        background-color: #F7F7F7;
        cursor: pointer;
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

    .bg-callout-7 {
        background-color: #245953;
    }

    .bg-callout-8 {
        background-color: #D25380;
    }

    .bg-callout-9 {
        background-color: #E08E6D;
    }

    .bg-callout-10 {
        background-color: #537188;
    }

    .bg-callout-11 {
        background-color: #CBB279;
    }

    .bg-callout-12 {
        background-color: #B04759;
    }

    .bg-callout-13 {
        background-color: #4C3D3D;
    }

    .bg-callout-14 {
        background-color: #617A55;
    }

    .bg-callout-15 {
        background-color: #394867;
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
        color: #686767 !important;
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


    .cursor-klik {
        cursor: pointer;
    }
</style>

<style>
    .border-light-dark {
        border-color: #a6aabb !important;
    }

    .text-light-dark {
        color: #a6aabb !important;
    }

    .nav-link {
        color: #61677A;
        border-color: #27374D #27374D #27374D;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: white !important;
        background-color: #27374D;
        border-color: #27374D #27374D #27374D;
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        background: none;
        border-top-left-radius: 0.35rem;
        border-top-right-radius: 0.35rem;
        border-top: 1px solid #27374D;
        border-right: 1px solid #27374D;
        border-left: 1px solid #27374D;
        border-bottom: 1px none rgba(229, 124, 35, 0);
    }

    th {
        padding: 20px;
    }

    .bg-light-success {
        background-color: #e9f4e0;
    }

    .bg-light-danger {
        background-color: #e8d6d6;
    }
</style>

<style>
    .dataTables_filter {
        font-size: 11px;
    }

    .selectpicker {
        min-height: calc(1em + 1rem + 2px);
        padding: 0.5rem 0.75rem;
        font-size: 0.75rem;
        border-radius: 0.25rem;
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: none;
    }

    .formFilter {
        border-radius: 20px;
        width: 200px;
        padding-left: 30px;
        padding: 10px;
        padding-right: 45px;
    }

    .is-select-picker {
        min-height: calc(1em + 1rem + 2px);
        padding: 0.5rem 0.75rem;
        font-size: 0.75rem;
        border-radius: 0.25rem;
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        box-shadow: none;
    }

    .select2-results,
    .select2-search__field {
        font-size: 10px;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/mobiscroll.jquery.min.css">
<script src="<?= base_url() ?>assets/js/mobiscroll.jquery.min.js"></script>
<script src="https://use.fontawesome.com/d80f210d12.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<main>
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col pb-2">
                <h1 class="text-dark-grey m-0">
                    <b class="small">Group Material Settings</b>
                </h1>
                <p class="super-small-text m-0 text-light-dark-grey">Master Group Material</p>
            </div>
            <div class="col-auto align-self-center">
                <button type="button" class="btn btn-primary btn-sm" onclick="addMaterialGroup()"><i class="fa fa-plus me-2"></i>Tambah Baru</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4" id="listMaterialGroup">

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
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2" style="overflow-x: hidden">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="true">
    <div class="offcanvas-header p-5" id="canvasHeader">
    </div>
    <div class="offcanvas-body p-5" id="canvasBody">
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
        firstKlik = false
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        firstKlik == false
        clearModal();
    })

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-2 m-2"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function notFoundReturn(text, functionButton, textButton, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p><button class="btn btn-sm btn-primary mt-3" onclick="' + functionButton + '()"><i class="fa fa-plus me-2"></i>Tambah ' + textButton + '</button></div></div></div></div>'
        return html
    }

    function cardAlert(text) {
        var html = ''
        html += '<div class="card shadow-none h-100" style="background-color:transparent;border: 1px dashed #cfcfcf;">'
        html += '<div class="card-body p-3 text-center d-flex align-items-center justify-content-center">'
        html += '<p class="m-0 super-small-text text-grey"><i>' + text + '</i></p>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function createCodeId() {
        var code = Math.floor(new Date().getTime() / 1000.0)
        return code;
    }

    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var dataListMaterialGroup
    var dataDetail
    var itemIdSelected = []
    var choosenId
    var indexLine = ''

    $(document).ready(function() {
        loadData()
    })

    function loadData() {
        var data = {}
        var url = "<?= api_produksi('loadPageMaterialGroupManage'); ?>"
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
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dataListMaterialGroup = response.data
                $('#listMaterialGroup').html(templateTable())
                $('#tableDetail').DataTable({
                    ordering: false, // Menonaktifkan pengurutan
                    pageLength: 200,
                    scrollY: "400px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedHeader: true,
                    search: false,
                })
            }
        })
    }

    function templateTable() {
        var html = ''
        html += '<table class="table table-sm table-hover w-100" id="tableDetail">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle small-text" style="width:10px;padding:20px;">#</th>'
        html += '<th class="align-middle small-text">Name</th>'
        html += '<th class="align-middle small-text">DD</th>'
        html += '<th class="align-middle small-text">DL</th>'
        html += '<th class="align-middle small-text">Length</th>'
        html += '<th class="align-middle small-text">Weight</th>'
        html += '<th class="align-middle small-text">Height</th>'
        html += '<th class="align-middle small-text">Category</th>'
        html += '<th class="align-middle small-text">Items</th>'
        html += '<th class="align-middle small-text">Material</th>'
        html += '<th class="align-middle small-text">Fraction</th>'
        html += '<th class="align-middle small-text">Action</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        var a = 1
        dataListMaterialGroup.materialGroup.forEach(e => {
            html += listDetail(a, e)
            a++
        });
        html += '</tbody>'
        return html
    }

    function if_null(data) {
        var a = '-'
        if (data) {
            a = data
        }
        return a
    }

    function length_item(data) {
        var a = 0
        if (data) {
            a = data.length
        }
        return a
    }

    function listDetail(num, data) {
        var html = ''
        html += '<tr>'
        html += '<td class="align-middle small-text text-center">' + num + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data.name) + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data.dd) + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data.dl) + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data['length']) + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data.weight) + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data.height) + '</td>'
        html += '<td class="align-middle small-text text-center">' + data.category_id + '</td>'
        html += '<td class="align-middle small-text text-center">' + length_item(data.items) + '</td>'
        html += '<td class="align-middle small-text text-center">' + data.material_category.name + '</td>'
        html += '<td class="align-middle small-text text-center">' + if_null(data.fraction_formula_id) + '</td>'
        html += '<td class="align-middle small-text text-center">'
        html += '<button type="button" class="btn btn-outline-primary btn-sm me-1" onclick="editMaterialGroup(' + data.id + ')"><i class="fa fa-pencil"></i></button>'
        html += '</td>'
        html += '</tr>'
        return html
    }

    function directToManage(id) {
        var url = "<?= base_url() ?>master/convertionMachine/" + id
        window.open(url, '_blank');
    }

    function editMaterialGroup(id) {
        var data = dataListMaterialGroup.materialGroup.find((v, k) => {
            if (v.id == id) return true
        })
        addMaterialGroup(data)
    }

    function addMaterialGroup(data = null) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Manage Material Group</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row pt-3 ps-5 pe-5 pb-3">'

        html_body += '<div class="col-6">'
        html_body += '<div class="row">'

        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Nama</div>'
        var name = ''
        var idMaterialGroup = ''
        if (data) {
            name = data.name
            idMaterialGroup = data.id
        }
        html_body += '<div class="col-9 small-text fw-bolder pb-2"><input class="form-control form-control-sm" id="nameMaterial" autocomplete="off" value="' + name + '" data-id="' + idMaterialGroup + '"></div>'

        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Material Category</div>'
        html_body += '<div class="col-9 small-text fw-bolder pb-2">'
        html_body += '<select class="form-control form-control-sm w-100" id="selectMaterialCategory" title="Pilih Item">'
        html_body += '<option value="">Pilih Material Category</option>'
        dataListMaterialGroup.materialCategory.forEach(e => {
            var select = ''
            if (data) {
                if (e.id == data.category_id) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html_body += '</select>'
        html_body += '</div>'

        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Fraction Formula</div>'
        html_body += '<div class="col-9 small-text fw-bolder pb-2">'
        html_body += '<select class="form-control form-control-sm w-100" id="selectFormula" title="Pilih Item" onchange="doSelectFormula()">'
        html_body += '<option value="">Pilih Fraction Formula</option>'
        dataListMaterialGroup.fractionFormula.forEach(e => {
            var select = ''
            if (data) {
                if (e.id == data.fraction_formula_id) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + e.id + '" ' + select + '>' + e.name + ' ( ' + e.note + ' )</option>'
        });
        html_body += '</select>'
        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<div class="row p-0" id="dimensiFraction">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-6">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<p class="fw-bolder">Item Material</p>'
        html_body += '</div>'
        html_body += '<div class="col-12" id="fieldItemMaterial">'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-2">'
        html_body += '<button class="btn btn-sm btn-outline-primary w-100" onclick="getItemMaterial()"><i class="me-2 fa fa-plus"></i>Tambah Item</button>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        if (data) {
            html_body += '<div class="col-12 mt-5">'
            html_body += '<button class="btn btn-sm btn-outline-danger w-100 small-text" onclick="deleteMaterialGroup(' + data.id + ',' + "'" + data.name + "'" + ')">Hapus Material Group Ini</button>'
            html_body += '</div>'
        }

        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm btnSimpan" onclick="saveVariable()">Simpan</button>'
        $('#modalFooter').html(html_footer)
        $('#fieldItemMaterial').html(cardAlert('Tidak Ada Data'))
        $('#selectCategory').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#selectFormula').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#selectMaterialCategory').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        doSelectFormula(data)
        if (data) {
            getItemMaterial(data)
        }
    }

    function doSelectFormula(dataEdit = null) {
        var selectFormula = $('#selectFormula').val()
        if (selectFormula) {
            var data = dataListMaterialGroup.fractionFormula.find((v, k) => {
                if (v.id == selectFormula) return true
            })
            if (data) {
                dimensiFraction(data, dataEdit)
            }
        }
    }

    function parseString(input) {
        const segments = input.split('/').map(segment => segment.trim());
        const result = [];

        for (const segment of segments) {
            const matches = segment.match(/$(\w+)/);
            if (matches) {
                result.push(matches[1]);
            }
        }

        return result;
    }

    function parseMathExpression(inputExpression) {
        const variables = {};
        const input = [];
        const data = [];

        const matches = inputExpression.match(/[@$]\w+/g);

        if (matches) {
            for (const match of matches) {
                const variable = match.substring(1); // Menghilangkan tanda @ atau $
                if (!variables[variable]) {
                    variables[variable] = true;

                    if (match.startsWith('$')) {
                        input.push(variable);
                    } else {
                        data.push(variable);
                    }
                }
            }
        }

        return {
            input,
            data
        };
    }

    function dimensiFraction(data, dataEdit) {
        var getFormula = parseMathExpression(data.formula).input
        var html = ''
        html += '<div class="col-5 align-self-center"><hr></div>'
        html += '<div class="col-2 align-self-center super-small-text text-center p-0">Dimensi</div>'
        html += '<div class="col-5 align-self-center"><hr></div>'

        html += '<div class="col-12 pt-2 pb-2"></div>'

        for (let i = 0; i < getFormula.length; i++) {
            var valueEdit = ''
            if (dataEdit) {
                valueEdit = dataEdit[getFormula[i].toLowerCase()]
                if (valueEdit == null) {
                    valueEdit = ''
                }
            }
            html += '<div class="col-3 small-text fw-bolder align-self-center pb-2">' + getFormula[i].toLocaleUpperCase() + '</div>'
            html += '<div class="col-9 small-text fw-bolder pb-2"><input class="form-control form-control-sm formula" id="' + getFormula[i].toLowerCase() + '" data-variable="' + getFormula[i].toLowerCase() + '" value="' + valueEdit + '"></div>'
        }

        $('#dimensiFraction').html(html)
    }
    var firstKlik = false
    var data_item

    function getItemMaterial(dataEdit = null) {
        if (!data_item) {
            $.ajax({
                url: "<?= api_produksi('getItemAll'); ?>",
                method: "GET",
                dataType: 'JSON',
                error: function(xhr) {
                    showOverlay('hide')
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error Data'
                    });
                },
                beforeSend: function() {
                    showOverlay('show')
                },
                success: function(response) {
                    showOverlay('hide')
                    data_item = response.data.item
                    addItemMaterial(dataEdit)
                }
            })
        } else {
            addItemMaterial(dataEdit)
        }
    }

    function addItemMaterial(dataEdit = null) {
        if (firstKlik == false) {
            firstKlik = true
            $('#fieldItemMaterial').html('')
        }
        if (dataEdit) {
            dataEdit.items.forEach(e => {
                templateItemMaterial(e, dataEdit)
            });
        } else {
            templateItemMaterial()
        }
    }
    var indexSelectItem = 0

    function templateItemMaterial(dataItem = null, dataEdit = null) {
        var html = ''
        html += '<div class="row mb-2" id="cardItemMaterial' + indexSelectItem + '">'
        html += '<div class="col-11 small-text fw-bolder">'

        html += '<select class="form-control form-control-sm w-100 selectItem" id="selectItem' + indexSelectItem + '" title="Pilih Item" onchange="controlSelectItem(' + indexSelectItem + ')">'
        html += '<option value="">Pilih Item</option>'
        data_item.forEach(e => {
            var select = ''
            if (dataItem) {
                if (dataItem.id == e.id) {
                    select = 'selected'
                }
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        var checkIfDefault = ''
        var valueItemId = ''
        if (dataItem) {
            if (dataEdit.item_id_default == dataItem.id) {
                checkIfDefault = 'checked'
                valueItemId = dataItem.id
            }
        }
        // check default
        html += '<div class="form-check mt-1">'
        html += '<input class="form-check-input checkItemDefault super-small-text" type="radio" value="' + valueItemId + '" name="checkItemDefault" id="checkItemDefault' + indexSelectItem + '" ' + checkIfDefault + '>'
        html += '<label class="form-check-label" for="checkItemDefault' + indexSelectItem + '">Default Item</label>'
        html += '</div>'
        // check default

        html += '</div>'
        html += '<div class="col-1">'
        var idItem = ''
        if (dataItem) {
            idItem = dataItem.id
        }
        html += '<button class="btn btn-sm btn-danger" onclick="doDeleteItem(' + indexSelectItem + ',' + idItem + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#fieldItemMaterial').append(html)
        $('#selectItem' + indexSelectItem).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        indexSelectItem++
        itemMaterialStatus()
    }

    function controlSelectItem(index) {
        var id = $('#selectItem' + index).val()
        $('#checkItemDefault' + index).val(id)
    }

    function deleteMaterialGroup(id, name) {
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Material Group ' + name + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var variableInsert = {
                    deletedId: {
                        materialGroup: [id]
                    }
                }
                simpanData(variableInsert)
            }
        })
    }

    function doDeleteItem(index) {
        $('#cardItemMaterial' + index).remove()
        itemMaterialStatus()
    }

    function itemMaterialStatus() {
        var findSelectItem = $('.selectItem').map(function() {
            return $(this).val();
        }).get()
        if (!findSelectItem.length) {
            firstKlik = false
            $('#fieldItemMaterial').html(cardAlert('Tidak Ada Data'))
        }
    }

    function saveVariable() {
        var name = $('#nameMaterial').val()
        var idMaterialGroup = $('#nameMaterial').data('id')
        if (!idMaterialGroup) {
            idMaterialGroup = createCodeId()
        }
        var selectMaterialCategory = $('#selectMaterialCategory').val()
        var selectFormula = $('#selectFormula').val()
        var valueFormula = $('.formula').map(function() {
            return $(this).val();
        }).get()
        var variableFormula = $('.formula').map(function() {
            return $(this).data('variable');
        }).get()
        var seelctItem = $('.selectItem').map(function() {
            return $(this).val();
        }).get()
        var itemDefaultId = $('.checkItemDefault:checked').val()
        var variableInsert = {
            materialGroup: [{
                id: idMaterialGroup,
                name: name,
                category_id: selectMaterialCategory,
                item_id_default: '',
                item_ids: seelctItem,
                created_at: getDateTime(currentDate()),
                updated_at: getDateTime(currentDate()),
                // fraction_formula_id: selectFormula,
                item_id_default: itemDefaultId,
            }],
        }
        if (selectFormula) {
            variableInsert.materialGroup[0]['fraction_formula_id'] = selectFormula
            for (let i = 0; i < variableFormula.length; i++) {
                variableInsert.materialGroup[0][variableFormula[i]] = valueFormula[i]
            }
        }
        simpanData(variableInsert)
    }

    function simpanData(data) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setMaterialGroup'); ?>'
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
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                loadData()
            }
        });
    }
</script>