<style type="text/css">
    .progress-kotak {
        height: 15px;
    }

    .progress-bar-kotak {
        font-size: 10px;
        text-align: left;
        padding-left: 4px;
    }

    .machineStock:hover {
        background-color: #d1deeb;
    }

    .selected {
        background-color: #F8F0E5;
    }

    .circle-shape {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    .vertical-line {
        border-left: 2px dotted grey;
        height: 10px;
        margin: 0 auto;
    }

    .v-zone {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }
</style>
<style>
    /* ANIMATION */
    .shake-bottom {
        -webkit-animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
        animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
    }

    @-webkit-keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    @keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .bg-outline-grey {
        border: 1px solid #e5e5e5 !important;
        border-color: #e5e5e5 !important;
    }

    .bg-outline-primary {
        border: 1px solid rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
        border-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
    }

    .bg-outline-orange {
        border: 1px solid #f76400 !important;
        border-color: #f76400 !important;
    }

    .bg-light-warning {
        background-color: #fdf5e5;
        border-color: #f4a100;
    }

    .timeline.timeline-sm .timeline-item .timeline-item-content {
        padding-bottom: 2rem;
    }

    .form-invisible-line {
        padding: 0px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 1.8rem;
        font-weight: bolder;
        text-align: right;
    }

    .table-hijau {
        background-color: #e5f6f0 !important;
    }

    .form-select,
    .dataTable-selector {
        text-align: right !important;
        background-position: left 2.125rem center !important;
        background-image: none;
        padding-right: 0px;
        font-weight: bolder;
        font-size: small;
    }
</style>
<style>
    /* In order to place the tracking correctly */
    canvas.drawing,
    canvas.drawingBuffer {
        position: absolute;
        left: 0;
        top: 0;
    }

    #html5-qrcode-button-camera-stop,
    #html5-qrcode-button-camera-start {
        border-color: #69707a;
        background-color: white;
        display: inline-block;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding: 10px;
        font-size: 0.875rem;
        border-radius: 20px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
            border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #html5-qrcode-anchor-scan-type-change {
        display: none !important;
    }

    @media print {
        * {
            margin: -100;
            padding: -100;
        }
    }

    .bg-radius-orange {
        border-top-left-radius: 50rem !important;
        border-bottom-left-radius: 50rem !important;
        background-color: #f76400 !important;
        color: white !important;
        border-color: #f76400 !important;
    }

    .bg-radius-primary {
        border-top-left-radius: 50rem !important;
        border-bottom-left-radius: 50rem !important;
        background-color: #0061f2 !important;
        color: white !important;
        border-color: #0061f2 !important;
    }

    /* progress step */

    #progress {
        position: relative;
    }

    #progress-bar {
        position: absolute;
        background: green;
        height: 5px;
        width: 0%;
        top: 50%;
        left: 0;
    }

    #progress-num {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        /* justify-content: space-between; */
    }

    #progress-num::before {
        content: "";
        background-color: lightgray;
        position: absolute;
        top: 50%;
        left: 0;
        height: 5px;
        width: 100%;
        z-index: -1;
    }

    #progress-num .steps {
        border: 1px solid lightgray;
        border-radius: 100%;
        width: 25px;
        height: 25px;
        line-height: 22px;
        text-align: center;
        background-color: #fff;
        font-family: sans-serif;
        font-size: 10px;
        position: relative;
        z-index: 1;
        color: #69707a !important;
        margin-right: 2px;
    }

    #progress-num .steps.active {
        border-color: #87b972 !important;
        background-color: #87b972 !important;
        color: white !important;
    }

    .bd-callout {
        padding: 1.25rem;
        margin-top: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #e9ecef;
        border-left-width: 0.25rem;
        border-radius: 0.25rem;
    }

    .bd-callout-warning {
        border-left-color: #FF9843 !important;
    }

    .bg-dark-grey {
        background-color: #999999;
    }

    .bg-light-primary {
        background-color: #e5effd !important;
    }

    .custom-popover {
        width: 200px !important;
    }

    .text-grey-small {
        color: #b4b7bc !important;
    }

    .bg-light-orange {
        background-color: #F0D9BB !important;
    }

    .bg-super-light-orange {
        background-color: #FBF5ED;
    }

    .bg-success-light {
        background-color: #BCE9AD !important;
    }

    .bg-super-light-success {
        background-color: #EDFAE9;
    }

    .btn-outline-grey {
        color: #b4b7bc;
        border-color: #b4b7bc;
    }

    .btn-outline-grey:hover {
        background-color: #b4b7bc;
        color: white;
        border-color: #b4b7bc;
    }

    .btn-outline-brown {
        color: #A67E4F;
        border-color: #A67E4F;
    }

    .btn-outline-brown:hover {
        background-color: #A67E4F;
        color: white !important;
        border-color: #A67E4F;
    }

    .btn-brown {
        background-color: #A67E4F;
        color: white !important;
        border-color: #A67E4F;
    }

    .border-brown {
        border-color: #A67E4F;
    }
</style>
<script src="<?= base_url(); ?>assets/JSPrintManager.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></script>
<div class="row">
    <div class="col-6 pt-2">
        <div class="card shadow-none" style="height: 700px">
            <div class="card-body p-0">
                <div class="row justify-content-between p-3 pb-0">
                    <div class="col-auto">
                        <p class="m-0 small-text"><b>List Box</b></p>
                        <p class="m-0 super-small-text text-grey-small"><b><span id="totalDataBox">0</span> Data</b><span class="ms-1" id="totalDataOfflineBox"></span></p>
                    </div>
                    <div class="col-auto text-end">
                        <div class="row">
                            <div class="col-auto ps-0 pe-1">
                                <button type="button" class="btn btn-sm btn-outline-brown shadow-none small-text" id="btnOpenDraft" disabled onclick="openDraft()">Pending <span id="totalOpenDraft"></span></button>
                            </div>
                            <div class="col-auto ps-0">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-outline-brown shadow-none small-text" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                                    <ul class="dropdown-menu custom-popover" aria-labelledby="dropdownMenuButton1">
                                        <li class="align-self-center"><a class="dropdown-item text-danger align-self-center" href="javascript:void(0)" onclick="hapusBallBox()"><i class="fa fa-trash me-2"></i>Pilihan Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mt-3 small-text" placeholder="Cari Kode atau Brand" id="search_kode_brand" onclick="offBlurOff(),this.focus()" onkeyup="searching('search_kode_brand','textListBox','listDetailBox')" onblur="onBlurOn()" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
                    </div>
                </div>
                <!-- <div> -->
                <div class="border-bottom" style="max-height: 560px;overflow-x: hidden;overflow-y: auto;" id="listBoxes">
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-6 pt-2">
        <div class="card shadow-sm h-100" style="min-height: 700px !important">
            <div class="card-body" id="fieldProcessAddNewBox">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
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

<div class="qrcode" id="qrcode" style="text-align:center;display:none;" class="mt-3 mx-auto d-block w-100"></div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script src="<?= base_url(); ?>assets/html5-qrcode.min.js"></script>
<script src="<?= base_url(); ?>assets/JSPrintManager.js"></script>
<script>
    function emptyReturnTextOnly(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function LoadingReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function iconQRCode(width, height) {
        var html = `
        <svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 ${width} ${height}">
            <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5M.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5M4 4h1v1H4z"/>
            <path d="M7 2H2v5h5zM3 3h3v3H3zm2 8H4v1h1z"/>
            <path d="M7 9H2v5h5zm-4 1h3v3H3zm8-6h1v1h-1z"/>
            <path d="M9 2h5v5H9zm1 1v3h3V3zM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8zm2 2H9V9h1zm4 2h-1v1h-2v1h3zm-4 2v-1H8v1z"/>
            <path d="M12 9h2V8h-2z"/>
        </svg>
        `
        return html
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function createCodeId(x) {
        var date = (new Date).getTime() + '' + x
        return date;
    }

    function formatTanggal(tanggalInput) {
        // Buat objek Date dari input
        const date = new Date(tanggalInput);

        // Daftar nama bulan dalam Bahasa Indonesia
        const bulanIndonesia = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        // Ambil bagian-bagian tanggal
        const tanggal = date.getDate();
        const bulan = bulanIndonesia[date.getMonth()];
        const tahun = date.getFullYear();
        const jam = date.getHours().toString().padStart(2, '0'); // Tambahkan padding nol
        const menit = date.getMinutes().toString().padStart(2, '0'); // Tambahkan padding nol

        // Format hasil akhir
        return `${tanggal} ${bulan} ${tahun} ${jam}:${menit}`;
    }

    function totalStockBahan(id_product) {
        var id_ball = ''
        var id_press = ''
        var stock_akhir = 0
        // dicari dulu id ball nya apa
        var dataItemProduction = dataEntry.itemProductionBall.find((value, key) => {
            if (value.item_id_product_final == id_product) return true
        })
        if (dataItemProduction) {
            // console.log(dataItemProduction.id)
            id_ball = dataItemProduction.id
            variableGantungBall.unit_id = dataItemProduction.unit.id
            variableGantungBall.item_id = dataItemProduction.id
            variableGantungBall.is_product_final_other = dataItemProduction.is_product_final_other
        }
        // dicari dulu id press nya berapa
        var checkProductMaterial = dataEntry.productMaterial.find((value, key) => {
            if (value.item_id == id_ball) return true
        })
        if (checkProductMaterial) {
            var unit = checkProductMaterial.unit_option.find((value, key) => {
                if (value.id == checkProductMaterial.unit_detail.id) return true
            })
            if (unit) {
                variableGantungBall.multiplier = unit.multiplier
                variableGantungBall.qty_detail = unit.multiplier
                variableGantungBall.unit_detail = checkProductMaterial.unit_detail.id
                variableGantungBall.is_qty_detail_allowed = checkProductMaterial.is_qty_detail_allowed
                id_press = checkProductMaterial.material_group[0].item_id_default
            }
        }
        // cari machine stock dari press
        var dataMachineStock = dataEntry.machineStock.find((value, key) => {
            if (value.item_id == id_press) return true
        })
        if (dataMachineStock) {
            stock_akhir = dataMachineStock.stok_akhir
        }
        var dataProduct = checkSourceItem(id_product)
        return stock_akhir
    }

    function resetVariableInsert() {
        var data = {
            result_product: [],
            result_product_machine: [],
            result_product_material: [],
            deletedId: {
                result_product: [],
                result_product_machine: [],
                result_product_material: []
            }
        }
        return data
    }

    function resetVariableInsertBall() {
        var data = {
            result_product: [],
            result_product_machine: [],
            deletedId: {
                result_product: [],
                result_product_machine: [],
            }
        }
        return data
    }

    function getDateStringWithTime(orginaldate) {
        var date = new Date(orginaldate);
        var day = date.getDate();
        var month = date.getMonth();
        var year = date.getFullYear();
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();
        if (detik < 10) {
            detik = "0" + detik;
        }
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        if (day < 10) {
            day = "0" + day;
        }
        switch (month) {
            case 0:
                month = "Januari";
                break;
            case 1:
                month = "Februari";
                break;
            case 2:
                month = "Maret";
                break;
            case 3:
                month = "April";
                break;
            case 4:
                month = "Mei";
                break;
            case 5:
                month = "Juni";
                break;
            case 6:
                month = "Juli";
                break;
            case 7:
                month = "Agustus";
                break;
            case 8:
                month = "September";
                break;
            case 9:
                month = "Oktober";
                break;
            case 10:
                month = "November";
                break;
            case 11:
                month = "Desember";
                break;
        }
        var date = day + " " + month + " " + year + ' ' + jam + ":" + menit + ":" + detik;
        return date;
    }

    function hapusDatadanReplaceData(inputData, dataUntukDihapus) {
        // Filter data berdasarkan id yang tidak termasuk dalam dataUntukDihapus
        return inputData.filter(item => !dataUntukDihapus.includes(item.id.toString()));
    }
    $('#modal').on('hidden.bs.modal', function(e) {
        variableEdit = ''
        doEdit = false
        onBlurOn()
    })
    $('#modal').on('shown.bs.modal', function() {
        console.log('test')
        offBlurOff()
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var linkBefore = '<?= $linkBefore ?>';
    var id_menu = '<?= $id_menu ?>';
    var id_pack = 9
    var work_plan_product_id_clicked
    var alias_clicked
    var year_clicked
    var code_ball_created = []
    var printers = []
    var printerKey = ''
    var machineLineId = ''
    var defaultMachineLineBox = JSON.parse(localStorage.getItem('idMachineLineBox')) || {
        machine_line_id: '',
        machine_line_name: '',
        machine_line_label: '',
        work_plan_machine_id: ''
    }
    var inventory_scanner = []
    var item_id_scanner = ''
    var initial_product_scanned = {}
    var defaultLabelPrinterBox = localStorage.getItem("defaultLabelPrinterBox") || '';
    var defaultLabelPrinterBall = localStorage.getItem("defaultLabelPrinterBall") || '';
    var variableGantung = {
        dateCreated: '',
        item_id: '',
        item_alias: '',
        notes: '',
        work_plan_product_id: '',
        is_product_final_other: '',
        stok_year_id: '',
        stok_year_name: '',
        box_code: '',
        unit_pack: '',
        unit_ball: '',
        qty_detail: '',
        unit_detail: '',
    }
    var variableGantungBall = {
        dateCreated: '',
        item_id: '',
        unit_id: '',
        notes: '',
        work_plan_product_id: '',
        is_product_final_other: '',
        multiplier: '',
        unit_detail: '',
        qty_detail: '',
        is_qty_detail_allowed: '',
    }
    var variableInsert = deepCopy(resetVariableInsert())
    var variableDelete = deepCopy(resetVariableInsert())
    var variableInsertSendOffline = deepCopy(resetVariableInsert())
    var variableInsertBall = deepCopy(resetVariableInsertBall())
    var variableDeleteBall = deepCopy(resetVariableInsertBall())
    // var variableInsertSendOffline = deepCopy(resetVariableInsertBall())
    var code_ball_created_detail = []
    var checkDatabase = false
    var doEdit = false
    $(document).ready(function() {
        jspManager()
        fieldButtonTemplate()
    })

    function jspManager() {
        printerKey = ''
        JSPM.JSPrintManager.auto_reconnect = true;
        JSPM.JSPrintManager.start();
        JSPM.JSPrintManager.WS.onStatusChanged = function() {
            if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open) {
                console.log(JSPM.JSPrintManager.getPrinters())
                JSPM.JSPrintManager.getPrinters().then(function(e) {
                    printers = e
                    // console.log(printers)
                    if (printers.length > 0) {
                        $('#btnSettingPrinter').prop('disabled', false)
                    } else {
                        $('#btnSettingPrinter').prop('disabled', true)
                    }
                });
            } else {
                // tidak bisa karena lewat android
            }
        };
    }

    function fieldButtonTemplate() {
        var html = ''
        html += `<div class="row justify-content-end">
                    <div class="col-auto pe-0">
                        <p class="m-0 super-small-text"><i>Last Updated</i></p>
                        <p class="m-0 super-small-text"><i>At <b id="timeRefresh">-</b></i></p>
                    </div>
                    <div class="col-auto pe-0" id="contentButtonTemplates">
                    </div>
                    <div class="col-auto ps-1">
                        <button type="button" class="btn btn-brown shadow-none btn-sm shadow-none" id="btnSendAll" onclick="sendAllVariableInsert()"><i class="fa fa-save me-2"></i>Send All</button>
                    </div>
                </div>`
        $('#fieldButtonTemplates').html(html)
        contentButtonTemplates()
    }

    function contentButtonTemplates() {
        var textButtonPrinter = '<i class="fa fa-exclamation-triangle text-danger me-2"></i>Box Printer'
        var textButtonPrinterBall = '<i class="fa fa-exclamation-triangle text-danger me-2"></i>Ball Printer'
        var textMachineLine = '<i class="fa fa-exclamation-triangle text-danger me-2"></i>Machine Line'
        var shakeButtonPrinter = ''
        var shakeButtonPrinterBall = ''
        var shakeButtonMachineLine = ''
        var alertBadge = ''
        if (defaultLabelPrinterBox) {
            textButtonPrinter = '<i class="fa fa-print text-success me-2"></i>' + defaultLabelPrinterBox
        } else {
            // shakeButtonPrinter = 'shake-bottom'
        }
        if (defaultLabelPrinterBall) {
            textButtonPrinterBall = '<i class="fa fa-print text-success me-2"></i>' + defaultLabelPrinterBall
        } else {
            // shakeButtonPrinterBall = 'shake-bottom'
        }
        if (defaultMachineLineBox.machine_line_id && defaultMachineLineBox.work_plan_machine_id == workPlanMachineId) {
            textMachineLine = '<i class="fa fa-gear text-success me-2"></i>' + defaultMachineLineBox.machine_line_name
        } else {
            // shakeButtonMachineLine = 'shake-bottom'
        }
        if (!defaultLabelPrinterBox || !defaultLabelPrinterBall || !defaultMachineLineBox.machine_line_id) {
            shakeButtonMachineLine = 'shake-bottom'
            alertBadge = '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"></span>'
        }
        var html = ''
        html += `
        <div class="row">
            <div class="col-auto ps-1 pe-0">
                <button type="button" class="btn btn-outline-brown shadow-none btn-sm shadow-none" onclick="loadDataTemplate()"><i class="fa fa-refresh me-2"></i>Refresh</button>
            </div>
            <div class="col-auto ps-1">
                <div class="dropdown">
                    <button type="button" class="btn btn-sm btn-outline-brown shadow-none small-text ${shakeButtonMachineLine}" id="dropdownMenuButtonNavbar" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                    ${alertBadge}
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonNavbar">
                        <p class="dropdown-header">Box</p>
                        <li class="align-self-center"><a class="dropdown-item align-self-center" href="javascript:void(0)" onclick="settingMachineLine()" id="btnSettingMachineLine">${textMachineLine}</a></li>
                        <li class="align-self-center"><a class="dropdown-item align-self-center" href="javascript:void(0)" onclick="settingPrinter()" id="btnSettingPrinter">${textButtonPrinter}</a></li>
                        <p class="dropdown-divider"></p>
                        <p class="dropdown-header">Ball</p>
                        <li class="align-self-center"><a class="dropdown-item align-self-center" href="javascript:void(0)" onclick="settingPrinterBall()" id="btnSettingPrinterBall">${textButtonPrinterBall}</a></li>
                    </ul>
                </div>
            </div>
        </div>
                    `
        $('#contentButtonTemplates').html(html)
    }

    function settingPrinter() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-sm modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Setting Printer Box</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        if (printers.length) {
            $.each(printers, (key, value) => {
                if (defaultLabelPrinterBox == value) {
                    printerKey = key
                }
                html_body += '<div class="card shadow-none pointer card-hoper mb-2 cardChoosePrinter0" onclick="choosePrinter(' + key + ',' + "'" + value + "'" + ',0)" id="cardChoosePrinter0' + key + '">'
                html_body += '<div class="card-body p-1 px-2">'
                // text
                html_body += '<div class="row">'
                html_body += '<div class="col-10 align-self-center">'
                html_body += '<p class="m-0 super-small-text fw-bolder">' + value + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-2 text-end">'
                html_body += '<i class="fa fa-check-circle text-grey iconChoosePrinter0" id="iconChoosePrinter0' + key + '"></i>'
                html_body += '</div>'
                html_body += '</div>'
                // text
                html_body += '</div>'
                html_body += '</div>'
            })
        } else {
            html_body += '<div class="card shadow-none border-0">'
            html_body += '<div class="card-body p-5">'
            html_body += '<p class="text-center small-text fw-bolder"><i>Printer Tidak Ditemukan</i></p>'
            html_body += '<p class="m-0 text-center small-text">Silahkan untuk instalasi JSPM Terlebih Dahulu</p>'
            html_body += '<p class="m-0 text-center small-text">Jika printer sudah terinstall, silahkan refresh halaman ini</p>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        if (defaultLabelPrinterBox) {
            choosePrinter(printerKey, defaultLabelPrinterBox, 0)
        }
    }

    function settingPrinterBall() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-sm modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Setting Printer Ball</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        if (printers.length) {
            $.each(printers, (key, value) => {
                if (defaultLabelPrinterBall == value) {
                    printerKey = key
                }
                html_body += '<div class="card shadow-none pointer card-hoper mb-2 cardChoosePrinter1" onclick="choosePrinter(' + key + ',' + "'" + value + "'" + ',1)" id="cardChoosePrinter1' + key + '">'
                html_body += '<div class="card-body p-1 px-2">'
                // text
                html_body += '<div class="row">'
                html_body += '<div class="col-10 align-self-center">'
                html_body += '<p class="m-0 super-small-text fw-bolder">' + value + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-2 text-end">'
                html_body += '<i class="fa fa-check-circle text-grey iconChoosePrinter1" id="iconChoosePrinter1' + key + '"></i>'
                html_body += '</div>'
                html_body += '</div>'
                // text
                html_body += '</div>'
                html_body += '</div>'
            })
        } else {
            html_body += '<div class="card shadow-none border-0">'
            html_body += '<div class="card-body p-5">'
            html_body += '<p class="text-center small-text fw-bolder"><i>Printer Tidak Ditemukan</i></p>'
            html_body += '<p class="m-0 text-center small-text">Silahkan untuk instalasi JSPM Terlebih Dahulu</p>'
            html_body += '<p class="m-0 text-center small-text">Jika printer sudah terinstall, silahkan refresh halaman ini</p>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        if (defaultLabelPrinterBall) {
            choosePrinter(printerKey, defaultLabelPrinterBall, 1)
        }
    }

    function settingMachineLine() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-sm modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Setting Machine Line</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        if (dataEntry.machineLine.length) {
            $.each(dataEntry.machineLine, (key, value) => {
                if (defaultMachineLineBox.machine_line_id == value.id) {
                    machineLineId = value.id
                }
                html_body += '<div class="card shadow-none pointer card-hoper mb-2 cardChooseMachineLine" onclick="chooseMachineLine(' + value.id + ',' + "'" + value.name + "'" + ',' + "'" + value.label + "'" + ')" id="cardChooseMachineLine' + value.id + '">'
                html_body += '<div class="card-body p-1 px-2">'
                // text
                html_body += '<div class="row">'
                html_body += '<div class="col-10 align-self-center">'
                html_body += '<p class="m-0 super-small-text fw-bolder">' + value.name + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-2 text-end">'
                html_body += '<i class="fa fa-check-circle text-grey iconChooseMachineLine" id="iconChooseMachineLine' + value.id + '"></i>'
                html_body += '</div>'
                html_body += '</div>'
                // text
                html_body += '</div>'
                html_body += '</div>'
            })
        } else {
            html_body += '<div class="card shadow-none border-0">'
            html_body += '<div class="card-body p-5">'
            html_body += '<p class="text-center small-text fw-bolder"><i>Machine Line Tidak Ditemukan</i></p>'
            html_body += '<p class="m-0 text-center small-text">Silahkan untuk Konfirmasi ke IT</p>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        if (defaultMachineLineBox.machine_line_id) {
            chooseMachineLine(defaultMachineLineBox.machine_line_id, defaultMachineLineBox.machine_line_name, defaultMachineLineBox.machine_line_label)
        }
    }

    function chooseMachineLine(id, name, label) {
        defaultMachineLineBox = {
            machine_line_id: id,
            machine_line_name: name,
            machine_line_label: label,
            work_plan_machine_id: workPlanMachineId
        }
        localStorage.setItem('idMachineLineBox', JSON.stringify(defaultMachineLineBox));
        $('.cardChooseMachineLine').removeClass('border-success bg-light')
        $('.iconChooseMachineLine').removeClass('text-success')
        $('#cardChooseMachineLine' + id).addClass('border-success bg-light')
        $('#iconChooseMachineLine' + id).addClass('text-success')
        contentButtonTemplates()
    }

    function choosePrinter(key, value, code) {
        if (code == 0) {
            defaultLabelPrinterBox = value
            localStorage.setItem('defaultLabelPrinterBox', value)
        } else {
            defaultLabelPrinterBall = value
            localStorage.setItem('defaultLabelPrinterBall', value)
        }
        $('.cardChoosePrinter' + code).removeClass('border-success bg-light')
        $('.iconChoosePrinter' + code).removeClass('text-success')
        $('#cardChoosePrinter' + code + key).addClass('border-success bg-light')
        $('#iconChoosePrinter' + code + key).addClass('text-success')
        contentButtonTemplates()
    }

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
            productionEntryAccessId: id_menu,
        }
        var url = "<?= api_produksi('loadPageProductionOutEntryMachine'); ?>"
        getData(data, url)
    }

    function getData(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                $('#listBoxes').html(LoadingReturn('Loading...'))
            },
            success: function(response) {
                showOverlay('hide')
                dataEntry = response.data
                listBoxes()
                fieldProcessAddNewBox()
            }
        })
    }

    function listBoxes() {
        var html = ''
        var total_all = 0
        var total_offline = 0
        var data = deepCopy(dataEntry.productionOutItem)
        if (data.length) {
            data.forEach((v, i) => {
                // card created
                var bg = ''
                if (!v.is_offline) {
                    if (!v.is_material_used) {
                        bg = 'bg-super-light-orange'
                    } else {
                        bg = 'bg-super-light-success'
                    }
                } else {
                    total_offline++
                }
                html += '<div class="card shadow-none border-end-0 border-start-0 border-top-0 pointer card-hoper ' + bg + ' listDetailBox" style="border-radius:0px;" id="listDetailBox' + v.id + '" onclick="detailBox(' + "'" + v.id + "'" + ')">'
                html += '<div class="card-body py-3">'
                html += '<div class="row">'
                // column
                if (!v.is_offline) {
                    if (!v.is_material_used) {
                        html += ballCreated(v, i)
                    } else {
                        html += ballInTheBox(v, i)
                    }
                } else {
                    html += ballOffline(v, i)
                }
                // column
                html += '</div>'
                html += '</div>'
                html += '</div>'
                // card created
                total_all++
            });
        } else {
            html += emptyReturnTextOnly('Tidak Ada Data yang Tersedia')
        }
        $('#listBoxes').html(html)
        totalDataBox(total_all, total_offline)
    }

    function totalDataBox(total_all, total_offline) {
        $('#totalDataBox').html(total_all)
        if (total_offline) {
            $('#totalDataOfflineBox').html('( ' + total_offline + ' Data still Offline )')
        }
        buttonSaveOfflineMode()
    }

    function fieldProcessAddNewBox() {
        var html = `
                <div class="row h-100 justify-content-center d-flex align-items-center">
                    <div class="col-12 align-self-center text-center p-5">
                        <img src="<?= base_url('assets/image/png/box.png'); ?>" class="w-50"><br>
                        <button type="button" class="mt-1 btn btn-outline-brown w-100 mb-2" id="btnAddNewBox" onclick="addNewBox()"><i class="fa fa-qrcode me-2"></i> Tambah Box dengan Scan Ball</button>
                        <button class="mt-1 w-100 btn btn-outline-brown mb-2" onclick="fieldProcessProductWorkPlan()"><i class="fa fa-plus me-2"></i>Tambah Ball & Box Manual</button>
                    </div>
                </div>`
        $('#fieldProcessAddNewBox').html(html)
    }

    function ballOffline(v, i) {
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center">'
        html += '<span class="fa fa-clock-o text-grey"></span>'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-grey-small fw-bolder textListBox" data-id="' + v.id + '">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-grey"><b class="textListBox" data-id="' + v.id + '">' + convertTimeFormat2(v.time.start) + '</b> - <span class="textListBox" data-id="' + v.id + '">' + v.item.name + '</span></p>'
        html += '</div>'
        // side name
        // status
        html += '<div class="col-3 align-self-center text-end">'
        html += '<span class="badge rounded-pill bg-light-grey border border-dark-grey py-2 px-2 super-small-text text-grey-small w-100">SENDING</span>'
        html += '</div>'
        // status
        return html
    }

    function ballCreated(v, i) {
        var namaPita = ''
        if (v.stok_year_id) {
            var nameStokYear = dataEntry.stokYear.find((value, key) => {
                if (value.id == v.stok_year_id) return true
            })
            namaPita = '<span class="ms-1 text-danger">Pita ' + nameStokYear.name + '</span>'
        }
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center">'
        html += '<span class="fa fa-box text-grey"></span>'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-dark-grey fw-bolder textListBox" data-id="' + v.id + '">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-dark-grey"><b class="textListBox" data-id="' + v.id + '">' + convertTimeFormat2(v.time.start) + '</b> - <span class="textListBox" data-id="' + v.id + '">' + v.item.name + '' + namaPita + '</span></p>'
        html += '</div>'
        // side name
        // status
        html += '<div class="col-3 align-self-center text-end">'
        html += '<span class="badge rounded-pill border border-orange bg-light-orange py-2 px-2 super-small-text text-orange w-100">CREATED</span>'
        html += '</div>'
        // status
        return html
    }

    function ballInTheBox(v, i) {
        var namaPita = ''
        if (v.stok_year_id) {
            var nameStokYear = dataEntry.stokYear.find((value, key) => {
                if (value.id == v.stok_year_id) return true
            })
            namaPita = '<span class="ms-1 text-danger">Pita ' + nameStokYear.name + '</span>'
        }
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center">'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-dark-grey fw-bolder textListBox" data-id="' + v.id + '">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-dark-grey"><b>' + convertTimeFormat2(v.time.start) + '</b> - <span class="textListBox" data-id="' + v.id + '">' + v.item.name + '' + namaPita + '</span></p>'
        html += '</div>'
        // side name
        // status
        html += '<div class="col-3 align-self-center text-end">'
        html += '<span class="badge rounded-pill border border-success bg-success-light py-2 px-2 super-small-text text-success w-100">IN THE BOX</span>'
        html += '</div>'
        // status
        return html
    }

    function addNewBox() {
        inventory_scanner = []
        item_id_scanner = ''
        initial_product_scanned = {}
        var html = `
                <div class="row">
                    <div class="col-12">
                        <div class="pointer d-flex align-self-center" onclick="fieldProcessAddNewBox()">
                            <span class="fa fa-angle-left me-3"></span>
                            <p class="m-0 small-text fw-bold">Back to Dashboard</p>
                        </div>
                    </div>
                </div>
                <div class="row h-100 justify-content-center d-flex align-items-center">
                    <div class="col-9 align-self-center text-center">
                        <img src="<?= base_url('assets/image/png/bunny.png'); ?>" class="w-50 mb-2"><br>
                        <p class="m-0 fw-bolder small">Lakukan Scan Ball Pertama</p>
                        <p class="m-0 mb-3 small-text">Scan QRCode Ball pertama terlebih dahulu untuk
    mendeteksi brand pada Box yang akan dibuat</p>
                        <input class="form-control form-leave" style="text-align: center;" tabindex="1" role="dialog" placeholder="Masukkan Kode Ball" id="codeBallInput" autocomplete="off" onblur="this.focus()" autofocus>
                        <button class="mt-2 w-100 btn btn-brown mb-2" onclick="firstScanner()"><i class="fa fa-search me-2"></i>Cari</button>
                        <div id="alertIfListBoxes">
                        </div>
                    </div>
                </div>`
        $('#fieldProcessAddNewBox').html(html)
        if (!doEdit) {
            $('#codeBallInput').focus();
        }
        buttonSaveOfflineMode()
    }

    function fieldProcessProductWorkPlan() {
        code_ball_created_detail = []
        var html = `
        <div class="row justify-content-between">
                    <div class="col-12">
            <div class="pointer d-flex align-self-center" onclick="fieldProcessAddNewBox()">
                <span class="fa fa-angle-left me-3"></span>
                <p class="m-0 small-text fw-bold">Find a Brand</p>
            </div>
        </div>
                </div>
                <div class="row pt-4">
                <div class="col-12">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control small-text" placeholder="Cari Brand" id="search_brand" autocomplete="off" onkeyup="searching('search_brand','textBrand','listBrand')">
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="m-0 super-small-text text-dark-grey">Product Workplan</p>
                        <div class="row mt-2" id="fieldProductWorkplan">
                        </div>
                    </div>
                </div>`
        $('#fieldProcessAddNewBox').html(html)
        productWorkPlan()
    }

    function productWorkPlan() {
        var html = ''
        if (dataEntry.workPlanMachine.products.length) {
            dataEntry.workPlanMachine.products.forEach(e => {
                html += `<div class="col-12" id="listBrand${e.work_plan_product_id}">
            <div class="card shadow-none mb-2 pointer card-hoper" onclick="addABrand(${e.work_plan_product_id})">
            <div class="card-body py-2 px-3">
            <div class="row">
            <div class="col-12">
            <p class="m-0 super-small-text text-grey-small fw-bold d-flex align-items-center textBrand" data-id="${e.work_plan_product_id}">${e.product.alias}</p>
            <p class="m-0 small-text text-dark-grey fw-bolder textBrand" data-id="${e.work_plan_product_id}">${e.product.name}</p>
            <p class="m-0 super-small-text fw-bold">Sisa : <span class="text-orange fw-bolder">${number_format(totalStockBahan(e.product.id))} Press</span></p>
            </div>
            </div>
            </div>
            </div>
            </div>`
            })
        } else {
            html = emptyProductWorkPlan()
        }
        $('#fieldProductWorkplan').html(html)
        buttonSaveOfflineMode()
    }

    function emptyProductWorkPlan() {
        var html = `<div class="col-12 text-center align-self-center">
                                <div class="card shadow-none" style="border:0px;height:100%;">
                                    <div class="card-body h-100 p-5 m-5">
                                        <img class="mb-3" style="width: 50px;" src="<?= base_url() ?>assets/image/logo/search_2.png" alt="Icon" />
                                        <p class="m-0 small text-orange-payment fw-bolder">Produk Tidak Ditemukan</p>
                                        <p class="m-0 super-small-text text-orange-payment fw-light">Silahkan hubungi foreman terkait untuk menambahkan produk</p>
                                    </div>
                                </div>
                            </div>`
        return html
    }

    function addABrand(work_plan_product_id) {
        variableGantungBall = {
            dateCreated: '',
            item_id: '',
            unit_id: '',
            notes: '',
            work_plan_product_id: '',
            is_product_final_other: '',
            multiplier: '',
            is_qty_detail_allowed: '',
        }
        code_ball_created_detail = []
        work_plan_product_id_clicked = work_plan_product_id
        var data = dataEntry.workPlanMachine.products.find((value, key) => {
            if (value.work_plan_product_id == work_plan_product_id) return true
        });
        if (data) {
            alias_clicked = data.product.alias
            formAddBrand(data)
        }
    }

    function formAddBrand(data) {
        // console.log(data)
        inventory_scanner = []
        item_id_scanner = data.product.id
        initial_product_scanned = {}
        var dateTime = currentDateTime()
        variableGantungBall.dateCreated = dateTime
        totalStockBahan(data.product.id)
        // console.log(variableGantungBall.item_id)
        // variableGantungBall.item_id = data.product.id
        variableGantungBall.work_plan_product_id = data.work_plan_product_id
        var html = `
    <div class="row">
        <div class="col-12">
            <div class="pointer d-flex align-self-center" onclick="fieldProcessProductWorkPlan()">
                <span class="fa fa-angle-left me-3"></span>
                <p class="m-0 small-text fw-bold">Add a Brand</p>
            </div>
        </div>
        <div class="col-12 mt-4">
            <p class="m-0 text-grey-small small fw-bolder">${data.product.alias}</p>
            <p class="m-0 text-dark-grey h1 fw-bolder">${data.product.name}</p>
        </div>
        <div class="col-12 mt-3">
            <p class="m-0 text-grey-small small-text">Date Created</p>
            <p class="m-0 text-dark-grey small fw-bold">${getDateStringWithTime(dateTime)}</p>
        </div>
        <div class="col-12 mt-3">
            <p class="m-0 text-grey-small small-text">Tahun Pita</p>
            <div class="row mt-2">
                ${
                    dataEntry.stokYear.map(year => {
                        let yearSelect = year.id == year_clicked ? 'btn-brown' : 'btn-outline-brown';
                        return `
                            <div class="col-auto pe-0">
                                <button type="button" class="btn ${yearSelect} shadow-none small-text btnYear" id="btnYear${year.id}" data-id="${year.id}" onclick="setYear(${year.id})">${year.name}</button>
                            </div>
                        `;
                    }).join('')
                }
            </div>
        </div>
        <div class="col-12 mt-3" id="fieldAlerts">
            <div class="alert alert-success" role="alert">
            <p class="m-0 small fw-bolder">Tahun Pita masih kosong !</p>
            <p class="m-0 small-text">Pilih tahun pita terlebih dahulu agar dapat kode ball sekaligus kode box</p>
            </div>
        </div>
        <div class="col-12 mt-3" hidden id="fieldJumlahBall">
            <p class="m-0 text-grey-small small-text">Jumlah Ball</p>
            <div class="row mt-2 align-self-center">
                <div class="col-auto pe-0 align-self-center">
                    <button type="button" class="btn btn-outline-brown shadow-none" onclick="decreaseBallQuantity()">-</button>
                </div>
                <div class="col-2 pe-0">
                    <input type="number" class="form-control text-center border-brown" placeholder="1" id="ballQuantity" value="1" min="1" oninput="changeAddBrand()" onkeyup="changeAddBrand()">
                </div>
                <div class="col-auto pe-0 align-self-center">
                    <button type="button" class="btn btn-outline-brown shadow-none" onclick="increaseBallQuantity()" id="btnAddBall">+</button>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3" hidden id="fieldBoxCodeCreated">
            <p class="m-0 fw-bolder small-text">Box Code</p>
            <div class="card shadow-none bg-super-light-orange mt-2">
                <div class="card-body p-2">
                    <div class="row" id="codeBoxCreated">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3" hidden id="fieldBallCodeCreated">
            <p class="m-0 fw-bolder small-text">Ball Code</p>
            <div class="card shadow-none bg-super-light-orange mt-2">
                <div class="card-body p-2">
                    <div class="row" id="codeBallCreated">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3" hidden id="fieldAddNotes">
            <p class="m-0 text-grey-small small-text pointer" id="btnAddNotes" onclick="showNotes()"><span id="textAddNotes">Add Notes <i>(optional)</i></span><span class="fa fa-pencil ms-2"></span></p>
            <div id="fieldAddNotes" hidden>
                <div class="row mt-2">
                    <div class="col-12">
                        <textarea class="form-control border-brown small-text" placeholder="Notes" id="notes" oninput="addNotes()" onkeyup="addNotes()" onblur="showNotes()" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3 text-center" hidden id="fieldPrintSave">
            <button class="btn btn-lg btn-brown shadow-none w-100 small-text" id="btnPrintSave" type="button" disabled onclick="saveAndPrintBall()">Simpan & Cetak <span id="totalBall" class="ms-2">( 1 Ball )</span></button>
            <button class="btn shadow-none w-100 text-danger small-text" onclick="fieldProcessProductWorkPlan()">Batalkan</button>
        </div>
    </div>
    `;
        $('#fieldProcessAddNewBox').html(html);
        changeBoxCode()
        changeAddBrand()
    }

    function showNotes() {
        if ($('#fieldAddNotes').is(':hidden')) {
            $('#fieldAddNotes').attr('hidden', false)
            $('#btnAddNotes').attr('hidden', true)
            $('#notes').focus()
        } else {
            $('#fieldAddNotes').attr('hidden', true)
            $('#btnAddNotes').attr('hidden', false)
            if (variableGantung.notes) {
                $('#textAddNotes').html('<span class="text-orange fw-bolder">Notes : ' + variableGantung.notes + '</span>')
            } else {
                $('#textAddNotes').html('Add Notes <i>(optional)</i>')
            }
        }
    }

    function decreaseBallQuantity() {
        var ballQuantity = $('#ballQuantity').val()
        if (ballQuantity > 1) {
            ballQuantity--
        }
        $('#ballQuantity').val(ballQuantity)
        changeAddBrand()
    }

    function increaseBallQuantity() {
        var ballQuantity = $('#ballQuantity').val()
        ballQuantity++
        $('#ballQuantity').val(ballQuantity)
        changeAddBrand()
    }

    function setYear(year) {
        year_clicked = year
        $('.btnYear').addClass('btn-outline-brown').removeClass('btn-brown')
        $('#btnYear' + year).addClass('btn-brown')
        $('#btnYear' + year).removeClass('btn-outline-brown')
        changeBoxCode()
        changeAddBrand()
    }

    function changeBoxCode() {
        var dataProduct = dataEntry.productMaterial.find((value, key) => {
            if (value.item_id == item_id_scanner) return true
        });
        var qty = 0
        if (dataProduct) {
            var findQty = dataProduct.unit_option.find((value, key) => {
                if (value.id == dataProduct.unit_detail.id) return true
            })
            if (findQty) {
                qty = findQty.multiplier
            }
        }
        var data = {
            stok_year_id: year_clicked,
            item_id: dataProduct.item_id,
            unit_detail: dataProduct.unit_detail.id,
            qty_detail: qty,
        }
        setToVariableGantung(data, dataProduct)
        // console.log(variableGantung)
        $('#codeBoxCreated').html('<p class="m-0 small-text fw-bolder"><i>' + variableGantung.box_code + '</i></p>')
        if (variableGantung.unit_ball.multiplier > 1) {
            $('#totalBall').html(`( ${ballQuantity * variableGantung.unit_ball.multiplier} Ball )`)
            $('#ballQuantity').val(variableGantung.unit_ball.multiplier)
        }
    }

    function changeAddBrand() {
        enabledButton()
        totalBall()
    }

    function enabledButton() {
        var ballQuantity = $('#ballQuantity').val()
        if (ballQuantity && year_clicked != undefined) {
            $('#btnPrintSave').prop('disabled', false)
        } else {
            $('#btnPrintSave').prop('disabled', true)
        }
        showHiddenAllField()
    }

    function showHiddenAllField() {
        if (year_clicked != undefined) {
            $('#fieldJumlahBall').removeAttr('hidden')
            $('#fieldBallCodeCreated').removeAttr('hidden')
            $('#fieldBoxCodeCreated').removeAttr('hidden')
            $('#fieldAddNotes').removeAttr('hidden')
            $('#fieldPrintSave').removeAttr('hidden')
            $('#fieldAlerts').attr('hidden', true)
        }
    }

    function totalBall() {
        var ballQuantity = $('#ballQuantity').val()
        $('#totalBall').html(`( ${ballQuantity} Ball )`)
        addBrandCodeCreated()
    }

    function addBrandCodeCreated() {
        code_ball_created = []
        code_ball_created_detail = []
        var ballQuantity = $('#ballQuantity').val()
        var html = ''
        for (let i = 1; i <= parseInt(ballQuantity); i++) {
            var code = createBrandBallCode(i)
            code_ball_created.push(code)
            var ballDetail = createBallDetail(code)
            var color = ''
            var colorDetail = 'text-grey'
            var onclickDetail = ''
            if (ballDetail.edited) {
                color = 'text-orange'
                colorDetail = 'text-orange'
            }
            if (variableGantungBall.is_qty_detail_allowed) {
                onclickDetail = 'onclick="showQTYDetail(' + "'" + code + "'" + ',true)"'
            }
            html += '<div class="col-6 pe-0">'

            html += '<div class="row">'
            html += '<div class="col align-self-center">'
            html += '<p class="m-0 small-text fw-bolder ' + color + '"><i>' + code + '</i></p>'
            html += '</div>'
            html += '<div class="col ps-0 align-self-center">'
            html += '<p class="' + colorDetail + ' fw-bolder m-0 small-text pointer" ' + onclickDetail + ' id="textQTYDetail' + code + '"><i>' + ballDetail.qty + '</i></p>'
            html += '<input class="input-edit-ball" type="number" value="' + ballDetail.qty + '" data-multiplier="' + ballDetail.qty + '" id="inputQTYDetail' + code + '" oninput="changeQTYDetail(' + "'" + code + "'" + ')" onkeyup="changeQTYDetail(' + "'" + code + "'" + ')" onblur="showQTYDetail(' + "'" + code + "'" + ',false)" hidden>'
            html += '</div>'
            html += '</div>'

            html += '</div>'
        }
        $('#codeBallCreated').html(html)
        if (ballQuantity == parseInt(variableGantung.unit_ball.multiplier)) {
            $('#btnAddBall').prop('disabled', true)
        } else {
            $('#btnAddBall').prop('disabled', false)
        }
    }

    function createBallDetail(code) {
        var check = code_ball_created_detail.find(x => x.code == code)
        if (check) {
            //jika ada
            var data = {
                code: code,
                qty: check.qty,
                edited: check.edited,
            }
        } else {
            // jika tidak ada
            var data = {
                code: code,
                qty: variableGantungBall.multiplier,
                edited: false,
            }
            qty = variableGantungBall.multiplier
            code_ball_created_detail.push(data)
        }
        return data
    }
    $(document).on('keypress', '#codeBallInput', function(e) {
        if (event.keyCode === 13) {
            firstScanner()
        }
    })
    $(document).on('keypress', '#codeBallInputEdit', function(e) {
        if (event.keyCode === 13) {
            firstScanner()
        }
    })

    function firstScanner() {
        var variableEdit = ''
        if (doEdit) {
            variableEdit = 'Edit'
        }
        $('#alertIfListBoxes' + variableEdit).html('')
        var code = $('#codeBallInput' + variableEdit).val()
        var data = dataEntry.machineStock.find((value, key) => {
            if (value.inventory_code == code) return true
        })
        if (data) {
            // ada code nya
            checkDatabase = false
            var checkInBox = checkBallIsInBox(data.inventory_id)
            nextStepOfScanner(data, checkInBox)
        } else {
            if (checkDatabase) {
                // jika sudah pernah di cek ternyata tidak ada
                alertIfListBoxes('Kode Ball Tidak Ada')
                checkDatabase = false
            } else {
                // pencarian jika belum ada tapi belum dicek di database
                findDataBall()
            }
        }
    }

    function nextStepOfScanner(data, checkInBox) {
        if (!doEdit) {
            // untuk add
            if (checkInBox) {
                // ada di dalam box
                if (data.stok_akhir) {
                    Swal.fire({
                        text: 'Ball ' + data.inventory_code + ' sudah ada di list, apakah ingin digunakan lagi?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yakin',
                        cancelButtonText: 'Batal',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            nextStepOfScanner2(data)
                        } else {
                            $('#codeBallInput').val('')
                        }
                    })
                } else {
                    alertIfListBoxes('Stok Telah Habis')
                }
            } else {
                // tidak ada di dalam box
                if (data.stok_akhir) {
                    nextStepOfScanner2(data)
                } else {
                    alertIfListBoxes('Stok Telah Habis')
                }
            }
        } else {
            // untuk edit
            var id_box = $('#codeBallInput' + variableEdit).data('id_box')
            secondScannerEdit(id_box, data)
        }
    }

    function nextStepOfScanner2(data) {
        if (!inventory_scanner.length) {
            // belum pernah scanner atau scanner nya kosong (scan pertama kali)
            setFirstScanner(data)
        } else {
            // scan ke 2 kalinya atau lebih
            if (data.item_id == item_id_scanner) {
                // scanner sama
                secondScanner(data)
            } else {
                // scanner beda
                alertIfListBoxes('Brand Tidak Cocok')
            }
        }
    }

    function checkBallIsInBox(inventory_id) {
        var status = false
        dataEntry.productionOutItem.forEach(e => {
            e.result_product_materials.find((value, key) => {
                if (value.inventory_id == inventory_id) {
                    status = true
                }
            })
        })
        return status
    }

    function findDataBall() {
        checkDatabase = true
        $.ajax({
            url: "<?= api_produksi('getMachineStockMachineStep'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                workPlanMachineId: workPlanMachineId,
                productionEntryAccessId: id_menu
            },
            error: function(xhr) {
                alertIfListBoxes('Error Data, Not Found!')
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dataEntry.machineStock = deepCopy(response.data.machineStock)
                firstScanner()
            }
        })
    }

    function alertIfListBoxes(text) {
        var variableEdit = ''
        if (doEdit) {
            variableEdit = 'Edit'
        }
        $('#alertIfListBoxes' + variableEdit).html(`<div class="alert alert-danger py-2 alert-dismissible fade show d-flex align-self-center" role="alert"><p class="m-0 small-text fw-bold">${text}</p><button type="button" class="small-text btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button></div>`)
        $('#codeBallInput').val('')
    }

    function createBrandCode(x = 1) {
        x = (deepCopy(dataEntry.productionOutItem).length) + x
        // Mendapatkan tanggal saat ini
        const today = new Date(dataEntry.workPlanMachine.date);
        const year = today.getFullYear(); // Tahun (4 digit)
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan (2 digit)
        const date = String(today.getDate()).padStart(2, '0'); // Tanggal (2 digit)

        // Membuat format angka 5 digit untuk x
        const xFormatted = String(x).padStart(5, '0');

        // Membuat kode final
        const code = `BX${defaultMachineLineBox.machine_line_label}${year}${month}${date}${xFormatted}`;
        // const code = `${variableGantung.item_alias}BX${defaultMachineLineBox.machine_line_label}${year}${month}${date}${xFormatted}`;

        return code;
    }

    function createBrandBallCode(x) {
        x = (extractTrailingNumber(findLargestInventoryCode(deepCopy(dataEntry.productionOutItemBall)))) + x
        // Mendapatkan tanggal saat ini
        const today = new Date(dataEntry.workPlanMachine.date);
        const year = today.getFullYear(); // Tahun (4 digit)
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan (2 digit)
        const date = String(today.getDate()).padStart(2, '0'); // Tanggal (2 digit)

        // Membuat format angka 5 digit untuk x
        const xFormatted = String(x).padStart(5, '0');

        // Membuat kode final
        const code = `BL${defaultMachineLineBox.machine_line_label}${year}${month}${date}${xFormatted}`;
        // const code = `${alias_clicked}BL${defaultMachineLine.machine_line_label}${year}${month}${date}${xFormatted}`;

        return code;
    }

    function extractTrailingNumber(code) {
        // Menggunakan regex untuk mengambil angka di akhir string
        if (code) {
            const match = code.match(/.*?(\d{2,})$/);
            return match ? parseInt(match[1].slice(-5), 10) : 0;
        } else {
            return 0
        }
    }

    function findLargestInventoryCode(data) {
        // Filter data berdasarkan prefix yang sesuai dengan machine_line_label
        const filteredData = data.filter(item =>
            item.inventory_code.startsWith(`BL${defaultMachineLineBox.machine_line_label}`)
        );

        if (filteredData.length === 0) {
            return null; // Tidak ada data yang sesuai
        }

        // Mengurutkan data berdasarkan 5 digit terakhir
        const sortedData = filteredData.sort((a, b) => {
            const numA = parseInt(a.inventory_code.slice(-5), 10); // Ambil 5 digit terakhir
            const numB = parseInt(b.inventory_code.slice(-5), 10); // Ambil 5 digit terakhir
            return numB - numA;
        });

        // Mengembalikan inventory_code terbesar berdasarkan 5 digit terakhir
        return sortedData[0]?.inventory_code || null;
    }

    function setFirstScanner(data) {
        var variableEdit = ''
        if (doEdit) {
            variableEdit = 'Edit'
        }
        item_id_scanner = data.item_id
        var dataProduct = checkSourceItem(data.item_id)
        // console.log(dataProduct)
        if (dataProduct) {
            setToVariableGantung(data, dataProduct)
            secondScanner(data)
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Tidak Ada Brand',
                text: 'Tidak Ada brand yang tersedia untuk item ini'
            });
            $('#codeBallInput' + variableEdit).val('')
        }
    }

    function setToVariableGantung(data, dataProduct) {
        initial_product_scanned = dataProduct
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == dataProduct.item_id) return true
        })
        variableGantung.dateCreated = currentDateTime()
        variableGantung.datetime = currentDateTime()
        variableGantung.item_id = data.item_id
        variableGantung.unit_ball = dataProduct.material_group[0].requirement
        variableGantung.unit_detail = data.unit_detail
        variableGantung.qty_detail = data.qty_detail
        if (brand) {
            variableGantung.item_alias = brand.product.alias
            variableGantung.work_plan_product_id = brand.work_plan_product_id
            variableGantung.is_product_final_other = brand.product.is_product_final_other
            var unitOption = brand.unit_option.find((v, k) => {
                if (v.id == id_pack) return true
            })
            if (unitOption) {
                variableGantung.unit_pack = unitOption
            }
        }
        variableGantung.stok_year_id = data.stok_year_id
        if (data.stok_year_id) {
            var nameStokYear = dataEntry.stokYear.find((v, k) => {
                if (v.id == data.stok_year_id) return true
            })
            variableGantung.stok_year_name = nameStokYear.name
        }
        variableGantung.box_code = createBrandCode()
    }

    function secondScanner(data) {
        var checkAvailable = inventory_scanner.includes(data.inventory_id)
        if (!checkAvailable && data.stok_year_id == variableGantung.stok_year_id && data.item_id == variableGantung.item_id) {
            // jika data sebelumnya belum ada, tahun nya sama stok nya, dan item nya sama
            inventory_scanner.push(data.inventory_id)
            fieldInputBox(data)
        } else {
            var text = ''
            if (checkAvailable) {
                text += 'Ball sudah ada di list'
            }
            if (data.stok_year_id != variableGantung.stok_year_id) {
                if (text) text += ' dan '
                text += 'Tahun tidak cocok'
            }
            if (data.item_id != variableGantung.item_id) {
                if (text) text += ' dan '
                text += 'Item tidak cocok'
            }
            alertIfListBoxes(text)
        }
    }

    function secondScannerEdit(id_box, data) {
        // console.log(data)
        variableInsert = deepCopy(resetVariableInsert())
        var findData = dataEntry.productionOutItem.find((value, key) => {
            if (value.id == id_box) return true
        })
        var checkAvailable = findData.result_product_materials.find((value, key) => {
            if (value.inventory_id == data.inventory_id) return true
        })
        var checkDataBall = dataEntry.productMaterial.find((v, k) => {
            if (v.item_id == findData.item.id) return true
        })
        if (!checkAvailable && data.stok_year_id == findData.stok_year_id && data.item_id == checkDataBall.material_group[0].item_id_default) {
            // jika data sebelumnya belum ada, tahun nya sama stok nya, dan item nya sama
            // tambahkan ke result_product_materials
            var dataInsert = {
                "id": createCodeId(0),
                "qty": 1,
                "item_id": data.item_id,
                "unit_id": checkDataBall.material_group[0].requirement.unit_id,
                "datetime": currentDateTime(),
                "created_at": currentDateTime(),
                "machine_id": data.machine_id,
                "updated_at": currentDateTime(),
                "inventory_id": data.inventory_id,
                "inventory_code": data.inventory_code,
                "result_product_id": id_box
            }
            // findData.result_product_materials.push(dataInsert)
            variableInsert.result_product_material.push(dataInsert)
            $('#codeBallInputEdit').val('')
            $('#btnSaveMaterial').prop('disabled', false)
            addToVariableOffline('add_ball')
            fieldIfListBoxesReview(findData)
        } else {
            var text = ''
            if (checkAvailable) {
                text += 'Ball sudah ada di list'
            }
            if (data.stok_year_id != findData.stok_year_id) {
                if (text) text += ' dan '
                text += 'Tahun tidak cocok'
            }
            if (data.item_id != checkDataBall.material_group[0].item_id_default) {
                if (text) text += ' dan '
                text += 'Item tidak cocok'
            }
            alertIfListBoxes(text)
        }
    }

    function checkSourceItem(item_id) {
        var data = undefined
        dataEntry.productMaterial.forEach(e => {
            e.material_group.forEach(el => {
                var itemDefault = el.items.find((v, k) => {
                    if (v.item.id == item_id) return true
                })
                if (itemDefault) {
                    data = e
                }
            });
        });
        return data
    }

    function fieldInputBox() {
        var nama_pita = ''
        if (variableGantung.stok_year_id) {
            nama_pita = ' - Pita ' + variableGantung.stok_year_name
        }
        var html = `
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="pointer d-flex align-self-center" onclick="addNewBox()">
                            <span class="fa fa-angle-left me-3"></span>
                            <p class="m-0 small-text fw-bold">Back to First Scan</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 text-center align-self-center pe-0">
                        <img src="<?= base_url('assets/image/svg/box-open.svg'); ?>" style="width:70%" id="imageBox">
                    </div>
                    <div class="col-8 align-self-center">
                        <p class="m-0 fw-bolder h1">${initial_product_scanned.name}</p>
                        <p class="m-0 small fw-bold"><span id="totalBallFilled">0</span> <b class="text-brown">/ ${variableGantung.unit_ball.multiplier} ${variableGantung.unit_ball.unit_name}</b></p>
                    </div>
                </div>
                <div class="row mx-2 mb-3">
                    <div class="col-6 mb-2 pe-0">
                        <p class="m-0 super-small-text text-grey-small">Transaction Code</p>
                        <p class="m-0 small-text fw-bolder">${variableGantung.box_code}</p>
                    </div>
                    <div class="col-6 mb-2 pe-0">
                        <p class="m-0 super-small-text text-grey-small">Date Created</p>
                        <p class="m-0 small-text fw-bolder">${formatTanggal(variableGantung.dateCreated)}</p>
                    </div>
                    <div class="col-6 mb-2 pe-0">
                        <p class="m-0 super-small-text text-grey-small">Type</p>
                        <p class="m-0 small-text fw-bolder">SKM${nama_pita}</p>
                    </div>
                    <div class="col-6 mb-2 pe-0">
                        <p class="m-0 super-small-text text-grey-small">Dimension</p>
                        <p class="m-0 small-text fw-bolder"><span id="fieldDimension">0</span> / ${variableGantung.unit_pack.multiplier} ${variableGantung.unit_pack.name}</p>
                    </div>
                </div>
                <div class="row mx-2 mb-2">
                    <div class="col-10 pe-0">
                        <input class="form-control form-leave" tabindex="1" role="dialog" placeholder="Masukkan Kode Ball" id="codeBallInput" autocomplete="off" onblur="this.focus()" autofocus>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-brown h-100" onclick="firstScanner()">${iconQRCode(10,10)}</button>
                    </div>
                </div>
                <div class="row mx-2 mb-2">
                    <div class="col-12 mb-2">
                        <p class="m-0 small-text fw-bold text-grey-small">Balls List</p>
                    </div>
                    <div class="col-12" id="alertIfListBoxes">
                    </div>
                    <div class="col-12 mb-2" id="fieldIfListBoxes" style="max-height: 200px; overflow-x: hidden;overflow-y: auto;">
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button class="btn btn-lg btn-brown shadow-none w-100 small-text" id="btnPrintSave" type="button" disabled onclick="saveAndPrint()">Simpan & Cetak Ball Box</button>
                        <button class="btn shadow-none w-100 text-danger small-text" onclick="addNewBox()">Batalkan</button>
                    </div>
                </div>
                `
        $('#fieldProcessAddNewBox').html(html)
        $('#codeBallInput').focus();
        fieldIfListBoxes()
    }

    function fieldIfListBoxes() {
        var html = ''
        if (inventory_scanner.length) {
            inventory_scanner.forEach(e => {
                var data = dataEntry.machineStock.find((v, k) => {
                    if (v.inventory_id == e) return true
                })
                html += `
                <div class="card shadow-none mb-2 card-hoper bg-super-light-orange cardBallList">
                    <div class="card-body py-2">
                        <div class="row">
                            <div class="col-10 align-self-center">
                                <p class="m-0 small-text fw-bold text-dark-grey">${data.inventory_code}</p>
                            </div>
                            <div class="col-2 text-end" onclick="ballboxEdit(${e})">
                            <i class="fa fa-times text-grey"></i>
                            </div>    
                        </div>
                    </div>
                </div>
            `
            })
        } else {
            html += emptyReturnTextOnly('Tidak Ada Data yang Tersedia')
        }
        $('#fieldIfListBoxes').html(html)
        $('#totalBallFilled').html(inventory_scanner.length)
        fieldDimension()
    }

    function fieldDimension() {
        var multiplier = initial_product_scanned.material_group[0].items[0].unit_option.find((v, k) => {
            if (v.id == id_pack) return true
        })
        if (multiplier) {
            multiplier = multiplier.multiplier
        } else [
            multiplier = 1
        ]
        var total = inventory_scanner.length * multiplier
        $('#fieldDimension').html(total)
        showButtonSave()
    }

    function showButtonSave() {
        var batas = variableGantung.unit_ball.multiplier
        var base_url = '<?= base_url(); ?>'
        if (inventory_scanner.length == batas) {
            // sudah mencapai batas
            $('#btnPrintSave').attr('disabled', false)
            $('#codeBallInput').attr('disabled', true)
            $('.cardBallList').removeClass('bg-super-light-orange')
            $('.cardBallList').addClass('bg-super-light-success border-success')
            $('#alertIfListBoxes').html(`<div class="alert alert-success super-small-text py-2" role="alert">
                Ball telah memenuhi Box
                </div>`)
            $('#imageBox').attr('src', base_url + 'assets/image/svg/box-close.svg')
        } else {
            $('#btnPrintSave').attr('disabled', true)
            $('#codeBallInput').attr('disabled', false)
            $('.cardBallList').removeClass('bg-super-light-success border-success')
            $('.cardBallList').addClass('bg-super-light-orange')
            $('#alertIfListBoxes').html('')
            $('#imageBox').attr('src', base_url + 'assets/image/svg/box-open.svg')
        }
    }

    function ballboxEdit(inventory_id) {
        // tanpa index, langsung pakai splice
        inventory_scanner.splice(inventory_scanner.indexOf(inventory_id), 1)
        fieldInputBox()
    }

    function saveAndPrint() {
        formInsertBox()
        addToVariableOffline('add')
    }

    function formInsertBox() {
        // console.log(variableGantung)
        variableInsert = deepCopy(resetVariableInsert())
        var time = currentDateTime()
        var id = createCodeId(0)
        variableInsert.result_product.push({
            id: id,
            work_plan_id: dataEntry.workPlanMachine.work_plan_id,
            shift_id: dataEntry.workPlanMachine.shift_id,
            machine_id: dataEntry.workPlanMachine.machine.id,
            time_start: variableGantung.dateCreated,
            time_end: variableGantung.dateCreated,
            item_id: initial_product_scanned.item_id,
            qty: 1,
            unit_id: initial_product_scanned.unit.id,
            employee_id: user_id,
            note: variableGantung.notes,
            created_at: time,
            updated_at: time,
            work_plan_product_id: variableGantung.work_plan_product_id,
            datetime_start: dataEntry.workPlanMachine.date + ' ' + formatTime(variableGantung.dateCreated),
            datetime_end: dataEntry.workPlanMachine.date + ' ' + formatTime(variableGantung.dateCreated),
            stok_year_id: variableGantung.stok_year_id,
            machine_step_id: dataEntry.machineStepid,
            inventory_code: variableGantung.box_code,
            inventory_id: id,
            machine_line_id: defaultMachineLineBox.machine_line_id,
            unit_id_detail: variableGantung.unit_detail,
            qty_detail: variableGantung.qty_detail,
        })
        variableInsert.result_product_machine.push({
            id: createCodeId(0),
            result_product_id: id,
            datetime: variableGantung.dateCreated,
            machine_step_id: dataEntry.machineStepid,
            item_id_product: initial_product_scanned.item_id,
            qty: 1,
            unit_id: initial_product_scanned.unit.id,
            employee_id_complete: user_id,
            note: variableGantung.notes,
            created_at: time,
            updated_at: time,
            index: 1,
            stok_year_id: variableGantung.stok_year_id,
            is_product_final_other: variableGantung.is_product_final_other,
            employee_id_admin: user_id,
            is_complete: 1,
            unit_id_detail: variableGantung.unit_detail,
            qty_detail: variableGantung.qty_detail,
        })
        if (inventory_scanner.length) {
            inventory_scanner.forEach((v, k) => {
                variableInsert.result_product_material.push({
                    id: createCodeId(k),
                    result_product_id: id,
                    datetime: dataEntry.workPlanMachine.date + ' ' + formatTime(variableGantung.dateCreated),
                    machine_id: dataEntry.workPlanMachine.machine.id,
                    item_id: variableGantungBall.item_id,
                    inventory_id: v,
                    unit_id: variableGantungBall.unit_id,
                    stok_year_id: variableGantung.stok_year_id,
                    qty: 1,
                    created_at: time,
                    updated_at: time,
                    unit_id_detail: variableGantungBall.unit_detail,
                    qty_detail: variableGantungBall.qty_detail,
                })
            })
        }
    }

    function addToVariableOffline(status, dataMasukBall = null) {
        // masukkan ke variableInsertSendOffline disimpan saja
        var dataMasuk = []
        if (status == 'add' || status == 'add_ball') {
            if (variableInsert.result_product.length) {
                variableInsert.result_product.forEach(e => {
                    var dataItemProduction = dataEntry.itemProduction.find((value, key) => {
                        if (value.id == e.item_id) return true
                    })
                    // console.log(e.item_id)
                    dataMasuk.push({
                        "id": e.id,
                        "item": {
                            "id": dataItemProduction.id,
                            "code": dataItemProduction.code,
                            "name": dataItemProduction.name,
                            "alias": dataItemProduction.alias
                        },
                        "time": {
                            "end": e.time_end,
                            "start": e.time_start,
                            "datetime_end": e.datetime_end,
                            "datetime_start": e.datetime_start
                        },
                        'is_offline': 1,
                        "qty": 1,
                        "note": e.note,
                        "inventory_code": e.inventory_code,
                        "unit_id_detail": e.unit_id_detail,
                        "qty_detail": e.qty_detail,
                        "result_product_machines": [],
                        "result_product_materials": [],
                    })
                    variableInsertSendOffline.result_product.push(e)
                });
            }
            if (status == 'add_ball') {
                var findData = dataEntry.productionOutItem.find((value, key) => {
                    if (value.id == variableInsert.result_product_material[0].result_product_id) return true
                })
                dataMasuk.push(findData)
            }
            if (variableInsert.result_product_machine) {
                variableInsert.result_product_machine.forEach(e => {
                    //filter datamasuk
                    var filterDataMasuk = dataMasuk.find((value, key) => {
                        if (value.id == e.result_product_id) return true
                    })
                    filterDataMasuk.result_product_machines.push(e)
                    variableInsertSendOffline.result_product_machine.push(e)
                });
            }
            if (variableInsert.result_product_material) {
                variableInsert.result_product_material.forEach(e => {
                    //filter datamasuk
                    var filterDataMasuk = dataMasuk.find((value, key) => {
                        if (value.id == e.result_product_id) return true
                    })
                    // e.inventory_code tidak perlu masuk di filterDataMasuk.result_product_materials
                    filterDataMasuk.result_product_materials.push(e)
                    variableInsertSendOffline.result_product_material.push({
                        "id": e.id,
                        "result_product_id": e.result_product_id,
                        "datetime": e.datetime,
                        "machine_id": e.machine_id,
                        "item_id": e.item_id,
                        "inventory_id": e.inventory_id,
                        "unit_id": e.unit_id,
                        "qty": e.qty,
                        "created_at": e.created_at,
                        "updated_at": e.updated_at,
                        "stok_year_id": e.stok_year_id,
                        "unit_id_detail": e.unit_id_detail,
                        "qty_detail": e.qty_detail,
                    })
                });
            }
        } else if (status == 'delete' || status == 'delete_ball') {
            variableDelete.deletedId.result_product.forEach(e => {
                dataMasuk.push(e)
                variableInsertSendOffline.deletedId.result_product.push(e)
            });
            variableDelete.deletedId.result_product_machine.forEach(e => {
                variableInsertSendOffline.deletedId.result_product_machine.push(e)
            });
            variableDelete.deletedId.result_product_material.forEach(e => {
                variableInsertSendOffline.deletedId.result_product_material.push(e)
            });
        } else if (status == 'delete_eachBox' || status == 'delete_eachBall') {
            variableDelete.deletedId.result_product.forEach(e => {
                dataMasuk.push(e)
                variableInsertSendOffline.deletedId.result_product.push(e)
            });
            variableDelete.deletedId.result_product_machine.forEach(e => {
                variableInsertSendOffline.deletedId.result_product_machine.push(e)
            });
        }
        // console.log(dataMasuk)
        // console.log(dataMasukBall)
        reconstructionData(status, dataMasuk, dataMasukBall)
    }

    function reconstructionData(status, dataMasuk, dataMasukBall = null) {
        var data = []
        var dataBall = []
        if (status == 'add') {
            dataMasuk.forEach(e => {
                data.push(e)
            });
            if (dataMasukBall) {
                dataMasukBall.forEach(e => {
                    dataBall.push(e)
                });
            }
            var dataOutItem = deepCopy(dataEntry.productionOutItem)
            dataOutItem.forEach(e => {
                data.push(e)
            });
            dataEntry.productionOutItem = data
            if (dataMasukBall) {
                // jika pakai menu ball box manual
                var dataOutItemBall = deepCopy(dataEntry.productionOutItemBall)
                dataOutItemBall.forEach(e => {
                    dataBall.push(e)
                });
                dataEntry.productionOutItemBall = dataBall
                fieldProcessProductWorkPlan()
            } else {
                // jika pakai menu box auto scan
                addNewBox()
            }
            printQrCode(dataMasuk, dataMasukBall)
        } else if (status == 'delete') {
            if (!status == 'delete_ball') {
                $('#modal').modal('hide')
            }
            var dataOutItem = deepCopy(dataEntry.productionOutItem)
            var hasil = hapusDatadanReplaceData(dataOutItem, dataMasuk);
            dataEntry.productionOutItem = hasil
        } else if (status == 'delete_eachBox') {
            $('#modal').modal('hide')
            var dataOutItem = deepCopy(dataEntry.productionOutItem)
            var hasil = hapusDatadanReplaceData(dataOutItem, dataMasuk);
            dataEntry.productionOutItem = hasil
        } else if (status == 'delete_eachBall') {
            $('#modal').modal('hide')
            var dataOutItem = deepCopy(dataEntry.productionOutItemBall)
            var hasil = hapusDatadanReplaceData(dataOutItem, dataMasuk);
            dataEntry.productionOutItemBall = hasil
        }
        buttonSaveOfflineMode()
        listBoxes()
    }

    function buttonSaveOfflineMode() {
        var data = deepCopy(variableInsertSendOffline.result_product)
        var data2 = deepCopy(variableInsertSendOffline.result_product_machine)
        var data3 = deepCopy(variableInsertSendOffline.result_product_material)
        var data4 = deepCopy(variableInsertSendOffline.deletedId.result_product)
        var data5 = deepCopy(variableInsertSendOffline.deletedId.result_product_machine)
        var data6 = deepCopy(variableInsertSendOffline.deletedId.result_product_material)
        if (data.length || data2.length || data3.length || data4.length || data5.length || data6.length) {
            // jika masih ada data nya
            $('#btnSendAll').prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
        } else {
            // jika sudah tidak ada data
            $('#btnSendAll').prop("disabled", true).html('<i class="fa fa-save me-1"></i>Send All')
        }
        totalOpenDraft(data, data2, data3, data4)
    }

    function totalOpenDraft(data, data2, data3, data4) {
        var totalData = 0
        totalData += data.length
        totalData += data4.length
        if (totalData == 0) {
            $('#btnOpenDraft').prop("disabled", true)
            $('#totalOpenDraft').html('')
            $('#totalOpenDraft').removeClass('ms-1')
        } else {
            $('#btnOpenDraft').prop("disabled", false)
            $('#totalOpenDraft').html("( " + totalData + " )")
            $('#totalOpenDraft').addClass('ms-1')
        }
    }

    function sendAllVariableInsert() {
        var data = deepCopy(variableInsertSendOffline)
        var type = 'POST'
        var button = '#btnSendAll'
        var url = '<?php echo api_produksi('setResultProductMachine'); ?>'
        if (data.result_product.length || data.result_product_machine.length || data.result_product_material.length || data.deletedId.result_product.length || data.deletedId.result_product_machine.length || data.deletedId.result_product_material.length) {
            kelolaDataSaveAuto(data, type, url, button)
        }
    }

    function kelolaDataSaveAuto(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
            },
            beforeSend: function() {
                $(button).prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...')
            },
            success: function(response) {
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
                doAfterInsert(data)
            }
        });
    }

    function doAfterInsert(data) {
        if (data.result_product) {
            var dataToDelete = deepCopy(data.result_product)
            var newData = deepCopy(variableInsertSendOffline.result_product).slice();
            dataToDelete.forEach(itemToDelete => {
                newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
            });
            variableInsertSendOffline.result_product = newData
        }
        if (data.result_product_machine) {
            var dataToDelete = deepCopy(data.result_product_machine)
            var newData = deepCopy(variableInsertSendOffline.result_product_machine).slice();
            dataToDelete.forEach(itemToDelete => {
                newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
            });
            variableInsertSendOffline.result_product_machine = newData
        }
        if (data.result_product_material) {
            var dataToDelete = deepCopy(data.result_product_material)
            var newData = deepCopy(variableInsertSendOffline.result_product_material).slice();
            dataToDelete.forEach(itemToDelete => {
                newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
            });
            variableInsertSendOffline.result_product_material = newData
        }

        if (data.deletedId.result_product) {
            var dataToDelete = deepCopy(data.deletedId.result_product)
            var newData = deepCopy(variableInsertSendOffline.deletedId.result_product).slice();
            dataToDelete.forEach(itemToDelete => {
                newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
            });
            variableInsertSendOffline.deletedId.result_product = newData
        }
        if (data.deletedId.result_product_machine) {
            var dataToDelete = deepCopy(data.deletedId.result_product_machine)
            var newData = deepCopy(variableInsertSendOffline.deletedId.result_product_machine).slice();
            dataToDelete.forEach(itemToDelete => {
                newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
            });
            variableInsertSendOffline.deletedId.result_product_machine = newData
        }
        if (data.deletedId.result_product_material) {
            var dataToDelete = deepCopy(data.deletedId.result_product_material)
            var newData = deepCopy(variableInsertSendOffline.deletedId.result_product_material).slice();
            dataToDelete.forEach(itemToDelete => {
                newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
            });
            variableInsertSendOffline.deletedId.result_product_material = newData
        }
        contentOpenDraft()
        buttonSaveOfflineMode()
        loadData()
    }

    function openDraft() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pending Draft</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">';
        html_body += '<div class="col-12">';
        html_body += '<table class="table table-sm table-bordered" id="tableDraft">';
        html_body += '<thead>';
        html_body += '<tr>';
        html_body += '<th class="text-center align-middle">No</th>';
        html_body += '<th class="text-center align-middle">Time</th>';
        html_body += '<th class="text-center align-middle">Inventory Code</th>';
        html_body += '<th class="text-center align-middle">Item</th>';
        html_body += '<th class="text-center align-middle">Stock Year</th>';
        html_body += '<th class="text-center align-middle">Action</th>';
        html_body += '</tr>';
        html_body += '</thead>';
        html_body += '<tbody id="contentOpenDraft">';
        html_body += '</tbody>';
        html_body += '</table>';
        html_body += '</div>';
        html_body += '</div>';
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>';
        $('#modalFooter').html(html_footer);
        contentOpenDraft()
    }

    function contentOpenDraft() {
        var html = ''
        var data = deepCopy(variableInsertSendOffline.result_product)
        data.forEach((value, key) => {
            var dataItemProduction = dataEntry.itemProduction.find((v, key) => {
                if (v.id == value.item_id) return true
            })
            var nameStokYear = dataEntry.stokYear.find((v, key) => {
                if (v.id == value.stok_year_id) return true
            })
            html += '<tr>';
            html += '<td class="text-center align-middle small-text">' + (key + 1) + '</td>';
            html += '<td class="text-center align-middle small-text">' + formatTime(value.time_start) + '</td>';
            html += '<td class="text-center align-middle small-text">' + value.inventory_code + '</td>';
            html += '<td class="text-center align-middle small-text">' + dataItemProduction.name + '</td>';
            html += '<td class="text-center align-middle small-text">' + nameStokYear.name + '</td>';
            html += '<td class="text-center align-middle small-text">'
            html += '<button type="button" class="btn btn-outline-danger btn-sm p-2 small-text me-1" onclick="HapusDataSatuan(' + "'" + value.id + "'" + ')">Hapus</button>';
            html += '<button type="button" class="btn btn-primary btn-sm p-2 small-text" onclick="kirimUlangDataSatuan(' + "'" + value.id + "'" + ')">Kirim Ulang</button>';
            html += '</td>';
            html += '</tr>';
        })
        $('#contentOpenDraft').html(html)
    }

    function HapusDataSatuan(id) {
        // result_product
        var dataProduct = deepCopy(variableInsertSendOffline.result_product)
        dataProduct = dataProduct.filter(item => item.id != id)
        variableInsertSendOffline.result_product = dataProduct
        // result_product_machine
        var dataProductMachine = deepCopy(variableInsertSendOffline.result_product_machine)
        dataProductMachine = dataProductMachine.filter(item => item.result_product_id != id)
        variableInsertSendOffline.result_product_machine = dataProductMachine
        // result_product_material
        var dataProductMaterial = deepCopy(variableInsertSendOffline.result_product_material)
        dataProductMaterial = dataProductMaterial.filter(item => item.result_product_id != id)
        variableInsertSendOffline.result_product_material = dataProductMaterial
        // data all
        var dataAll = deepCopy(dataEntry.productionOutItem)
        dataAll = dataAll.filter(item => item.id != id)
        dataEntry.productionOutItem = dataAll
        contentOpenDraft()
        listBoxes()
    }

    function kirimUlangDataSatuan(id) {
        var data = deepCopy(resetVariableInsert())
        // result_product
        var dataProduct = deepCopy(variableInsertSendOffline.result_product)
        var dataChoosen = dataProduct.filter(item => item.id == id)
        data.result_product.push(dataChoosen[0])
        // result_product_machine
        var dataProductMachine = deepCopy(variableInsertSendOffline.result_product_machine)
        var dataChoosen = dataProductMachine.filter(item => item.result_product_id == id)
        data.result_product_machine.push(dataChoosen[0])
        // result_product_material
        var dataProductMaterial = deepCopy(variableInsertSendOffline.result_product_material)
        var dataChoosen = dataProductMaterial.filter(item => item.result_product_id == id)
        data.result_product_material.push(dataChoosen[0])
        sendSingleVariableInsert(data)
    }

    function sendSingleVariableInsert(dataSend) {
        var data = deepCopy(dataSend)
        var type = 'POST'
        var button = '#btnSendAll'
        var url = '<?php echo api_produksi('setResultProductMachine'); ?>'
        kelolaDataSaveAuto(data, type, url, button)
    }

    function checkConsole(data, brand, pack) {
        var nameStokYear = dataEntry.stokYear.find((value, key) => {
            if (value.id == data.stok_year_id) return true
        })
        if (!data.stok_year_id) {
            nameStokYear = {
                name: ''
            }
        } else {
            nameStokYear = {
                name: ' ( ' + nameStokYear.name + ' ) '
            }
        }
        var cmds = ''
        cmds += '^XA\n';
        cmds += '^PW850\n'; // Lebar label disesuaikan untuk 203 dpi
        cmds += '^LL400\n'; // Tinggi label disesuaikan

        cmds += '^FO40,50^BQN,2,8^FDQA,' + data.inventory_code + '^FS\n'; // QR Code

        cmds += '^FO260,70^A0N,22,22^FD SKU' + nameStokYear.name + ':^FS\n';
        cmds += '^FO265,100^A0N,25,25^FB210,3,2,L^FD' + data.item.name + '^FS\n'; // Teks SKU dengan auto wrap

        cmds += '^FO260,160^A0N,22,22^FD Type:^FS\n';
        cmds += '^FO265,190^A0N,25,25^FD' + brand.item_type.name + '^FS\n';

        cmds += '^FO500,70^A0N,22,22^FD Dimension:^FS\n';
        cmds += '^FO505,100^A0N,25,25^FD' + pack.multiplier + ' ' + pack.name + '^FS\n';

        cmds += '^FO500,160^A0N,22,22^FD Created At:^FS\n';
        cmds += '^FO505,190^A0N,25,25^FD' + getDateStringWithTime(data.datetime) + '^FS\n'; // Menggunakan fungsi formatCreatedAt() untuk waktu dinamis

        cmds += '^FO40,290^A0N,25,25^FD' + data.inventory_code + '^FS\n';
        cmds += '^FO35,340^A0N,19,19^FD Printed At:^FS\n';
        cmds += '^FO40,365^A0N,19,19^FD' + formatPrintedAt() + '^FS\n'; // Menggunakan fungsi formatPrintedAt() untuk waktu cetak

        cmds += '^XZ\n';

        // cmds += '^XA\n';
        // cmds += '^PW850\n'; // Lebar label disesuaikan untuk 203 dpi
        // cmds += '^LL400\n'; // Tinggi label disesuaikan

        // cmds += '^FO20,50^A0N,22,22^FD' + data.inventory_code + '^FS\n'; // Header teks

        // cmds += '^FO20,110^BQN,2,8^FDQA,' + data.inventory_code + '^FS\n'; // QR Code

        // cmds += '^FO260,130^A0N,22,22^FD SKU:^FS\n';
        // cmds += '^FO265,160^A0N,25,25^FB210,3,2,L^FD' + data.item.name + '^FS\n'; // Teks SKU dengan auto wrap

        // cmds += '^FO260,260^A0N,22,22^FD Type:^FS\n';
        // cmds += '^FO265,290^A0N,25,25^FD' + brand.item_type.name + '^FS\n';

        // cmds += '^FO500,130^A0N,22,22^FD Dimension:^FS\n';
        // cmds += '^FO505,160^A0N,25,25^FD' + pack.multiplier + ' ' + pack.name + '^FS\n';

        // cmds += '^FO500,260^A0N,22,22^FD Printed At:^FS\n';
        // cmds += '^FO505,290^A0N,25,25^FD' + formatPrintedAt() + '^FS\n';

        // cmds += '^XZ\n';
        console.log(cmds)
    }

    function detailBox(id) {
        var data = dataEntry.productionOutItem.find((value, key) => {
            if (value.id == id) return true
        })
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == data.item.id) return true
        })
        var dataUnit = dataEntry.productMaterial.find((value, key) => {
            if (value.item_id == data.item.id) return true
        })
        var pack = brand.unit_option.find((v, k) => {
            if (v.id == dataUnit.unit_detail.id) return true
        })
        // checkConsole(data, brand, pack)
        var status = '<span class="badge align-self-center small-text p-1 bg-light text-grey">Sending</span>'
        if (!data.is_offline) {
            if (data.is_material_used) {
                status = '<span class="badge align-self-center small-text p-1 bg-success">In The Box</span>'
            } else {
                status = '<span class="badge align-self-center small-text p-1 bg-warning">Created</span>'
            }
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Box</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 border-bottom p-4 pt-0">'
        // content
        html_body += '<div class="row">'
        html_body += '<div class="col-2 pe-0">'
        html_body += '<div id="qrcodePacking" style="margin-top:15px;margin:auto;"></div>'
        html_body += '</div>'
        html_body += '<div class="col-9 align-self-center">'
        html_body += '<p class="m-0 small">ID Inventory</p>'
        html_body += '<p class="m-0 h3 fw-bolder">' + data.inventory_code + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-1 align-self-center">'
        // button option ellipsis
        html_body += '<div class="dropdown">'
        html_body += '<button class="btn btn-sm shadow-none" type="button" id="dropdownMenuButtonDetail" data-bs-toggle="dropdown" aria-expanded="false">'
        html_body += '<i class="fa fa-ellipsis-v"></i>'
        html_body += '</button>'
        html_body += '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDetail">'
        html_body += '<li><a class="dropdown-item" href="javascript:void(0)" onclick="editMaterial(' + "'" + id + "'" + ')">Edit Material</a></li>'
        html_body += '<li><a class="dropdown-item" href="javascript:void(0)" onclick="cetakUlangQRCode(' + "'" + id + "'" + ')">Cetak Ulang QR Code</a></li>'
        if (!data.is_material_used) {
            html_body += '<li><a class="dropdown-item text-danger fw-bolder" href="javascript:void(0)" onclick="hapusBox(' + "'" + id + "'" + ')"><i class="fa fa-trash me-2"></i>Hapus Box & Ball</a></li>'
        }
        html_body += '</ul>'
        html_body += '</div>'
        // button option
        html_body += '</div>'
        html_body += '</div>'
        // content
        html_body += '</div>'
        html_body += '<div class="col-12 p-0">'
        html_body += '<div class="row w-100">'
        // column
        html_body += '<div class="col-7 p-3 ps-5 border-end">'
        // Detail Information
        html_body += '<div class="row justify-content-between">'
        html_body += '<div class="col-auto mb-2">'
        html_body += '<p class="m-0 small-text">Detail Information</p>'
        html_body += '</div>'
        html_body += '<div class="col-auto text-end mb-2">'
        // html_body += '<button class="btn btn-sm btn-brown shadow-none super-small-text p-1" onclick="cetakUlangQRCode(' + "'" + id + "'" + ')"><i class="fa fa-print"></i></button>'
        html_body += '</div>'
        // html_body += '<div class="col-6 pe-0 mb-2">'
        // html_body += '<p class="m-0 super-small-text text-grey-small">Transaction Code</p>'
        // html_body += '<p class="m-0 super-small-text fw-bolder">' + data.inventory_code + '</p>'
        // html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">SKU</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + data.item.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Type</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + brand.item_type.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Dimension</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + pack.multiplier + ' ' + pack.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Time Created</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + formatTanggal(data.time.datetime_start) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Status</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + status + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Notes</p>'
        if (!data.note) {
            data.note = '-'
        }
        html_body += '<p class="m-0 super-small-text fw-bolder">' + data.note + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12 mb-2 mt-2">'
        html_body += '<div class="row justify-content-between">'
        html_body += '<div class="col-auto align-self-center">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Whats inside the box ?</p>'
        html_body += '</div>'
        if (!data.is_material_used) {
            html_body += '<div class="col-auto align-self-center">'
            html_body += '<i class="fa fa-pencil text-dark pointer small-text" id="editMaterial" onclick="editMaterial(' + "'" + data.id + "'" + ')"></i>'
            html_body += '<button class="btn btn-sm super-small-text p-1 align-self-center btn-success" hidden id="btnSaveMaterial" onclick="sendAllVariableInsert()" disabled><i class="fa fa-save me-1"></i>Simpan</button>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 mb-2" hidden id="fieldIfAddBallReview">'
        html_body += `
                <div class="row">
                    <div class="col-9 pe-0">
                        <input class="form-control form-control-sm form-leave" tabindex="1" role="dialog" placeholder="Masukkan Kode Ball" id="codeBallInputEdit" autocomplete="off" onblur="this.focus()" data-id_box="${data.id}" autofocus>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-brown btn-sm h-100" onclick="firstScanner()">${iconQRCode(10,10)}</button>
                    </div>
                    <div class="col-12">
                        <div id="alertIfListBoxesEdit">
                        </div>
                        <div class="card shadow-none mt-2">
                            <div class="card-body p-2 text-center bg-light" id="textSisaBallReview">
                            </div>
                        </div>
                    </div>
                </div>
        `
        html_body += '</div>'
        html_body += '<div class="col-12 mb-2" id="fieldIfListBoxesReview">'
        html_body += '</div>'
        html_body += '</div>'
        // Detail Information
        html_body += '</div>'
        html_body += '<div class="col-5 p-3">'
        // Timeline
        html_body += '<div class="row">'
        html_body += '<div class="col-12 mb-4">'
        html_body += '<p class="m-0 small-text">Timeline</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += timelineBox()
        html_body += '</div>'
        html_body += '</div>'
        // Timeline
        html_body += '</div>'
        // column
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<div class="row w-100 justify-content-between">'
        html_footer += '<div class="col-auto">'
        // if (!data.is_material_used) {
        //     html_footer += '<button type="button" class="btn btn-outline-danger btn-sm" onclick="hapusBox(' + "'" + id + "'" + ')">Hapus Box</button>'
        // }
        html_footer += '</div>'
        html_footer += '<div class="col-auto">'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '</div>'
        html_footer += '</div>'
        $('#modalFooter').html(html_footer)
        var qrcode = new QRCode("qrcodePacking", {
            text: data.inventory_code,
            width: 60,
            height: 60,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
        fieldIfListBoxesReview(data)
    }

    function fieldIfListBoxesReview(data) {
        var html = ''
        var editStatus = 'hidden'
        if (doEdit) {
            editStatus = ''
        }
        data.result_product_materials.forEach(e => {
            html += `
            <div class="card shadow-none mb-2 cardBallEdit">
                <div class="card-body py-2">
                    <div class="row">
                        <div class="col-11 align-self-center">
                            <p class="m-0 super-small-text fw-bold text-dark-grey">${e.inventory_code}</p>
                        </div>   
                        <div class="col-1 ps-0 align-self-center btnDeleteBall" ${editStatus}>
                            <i class="fa fa-times text-grey-small small-text pointer d-flex" onclick="hapusBallEdit(${data.id},${e.id})"></i>
                        </div>
                    </div>
                </div>
            </div>
            `
        });
        $('#fieldIfListBoxesReview').html(html)
        checkIfDataUnderMultiplier(data)
    }

    function checkIfDataUnderMultiplier(data) {
        var checkUnit = dataEntry.productMaterial.find((v, k) => {
            if (v.item_id == data.item.id) return true
        })
        if (data.result_product_materials.length < checkUnit.material_group[0].requirement.multiplier) {
            $('#fieldIfAddBallReview').prop('hidden', false)
            $('#codeBallInputEdit').focus()
            $('#textSisaBallReview').html('<p class="m-0 super-small-text">Sisa <b>' + (parseInt(checkUnit.material_group[0].requirement.multiplier) - parseInt(data.result_product_materials.length)) + '</b> Ball</p>')
        } else {
            $('#fieldIfAddBallReview').prop('hidden', true)
        }
    }

    function hapusBallEdit(id_box, id_ball) {
        var data = dataEntry.productionOutItem.find((value, key) => {
            if (value.id == id_box) return true
        })
        var dataBall = data.result_product_materials.filter((value, key) => {
            if (value.id != id_ball) return true
        })
        data.result_product_materials = deepCopy(dataBall)
        variableDelete.deletedId.result_product_material.push(id_ball)
        fieldIfListBoxesReview(data)
        addToVariableOffline('delete_ball')
    }

    function hapusBox(id) {
        var data = deepCopy(dataEntry.productionOutItem).find((value, key) => {
            if (value.id == id) return true
        })
        // console.log(data)
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus data Ball ' + data.inventory_code + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                variableDelete = deepCopy(resetVariableInsert())
                variableDelete.deletedId.result_product.push(id)
                data.result_product_machines.forEach(e => {
                    variableDelete.deletedId.result_product_machine.push(e.id)
                });
                data.result_product_materials.forEach(e => {
                    variableDelete.deletedId.result_product_material.push(e.id)
                });
                addToVariableOffline('delete')
            }
        })

    }

    function timelineBox() {
        var html = ''
        var status = ''
        var text = ''
        var btnEdit = ''
        html += '<div class="timeline timeline-sm">'
        // Setoran Baru
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'
        btnEdit = ''
        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Buat Setoran Baru</b>' + btnEdit
        html += text
        html += '</div>'
        html += '</div>'
        // Setoran Baru
        // Ambil Material
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'
        btnEdit = ''
        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Ambil Material</b>' + btnEdit
        html += text
        html += '</div>'
        html += '</div>'
        // Ambil Material
        // Complete
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'

        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Complete</b>'
        html += text
        html += '</div>'
        html += '</div>'
        // Complete
        return html
    }

    function formatPrintedAt(date = new Date()) {
        // Array bulan dalam bahasa Indonesia
        const bulan = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        // Ekstrak bagian tanggal, bulan, dan tahun
        const tanggal = date.getDate();
        const namaBulan = bulan[date.getMonth()];
        const tahun = date.getFullYear();

        // Format jam dan menit
        const jam = date.getHours().toString().padStart(2, '0');
        const menit = date.getMinutes().toString().padStart(2, '0');

        // Gabungkan ke dalam format yang diinginkan
        return `${tanggal} ${namaBulan} ${tahun} ${jam}:${menit}`;
    }

    function cetakUlangQRCode(id) {
        var data = dataEntry.productionOutItem.filter((value, key) => {
            if (value.id == id) return true
        })
        printQrCode(data)
    }

    function printQrCode(data, dataBall = null) {
        if (dataBall) {
            printQRCodeBall(dataBall)
        }
        printQRCodeBox(data)
    }

    function printQRCodeBall(data) {
        // console.log(data)
        let cmds = '';
        var dataProduct = checkSourceItem(data[0].item.id)
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == dataProduct.item_id) return true
        })
        var dataBall = dataProduct.material_group[0].items[0].unit_option.find((v, k) => {
            if (v.id == id_pack) return true
        })
        data.forEach(e => {
            // cmds += codeForZebra(e, brand, dataBall)
            cmds += codeForPOS58(e, brand, dataBall)
        });
        defaultLabelPrinterBall = localStorage.getItem("defaultLabelPrinterBall") || '';
        if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open) {
            var cpj = new JSPM.ClientPrintJob();
            cpj.clientPrinter = new JSPM.InstalledPrinter(defaultLabelPrinterBall);
            // cpj.clientPrinter = new JSPM.BluetoothPrinter("60:95:32:23:E4:45", 1);
            cpj.printerCommands = cmds;
            cpj.sendToClient();

        }
    }

    function codeForZebra(e, brand, dataBall) {
        let textCmds = ''
        textCmds += '^XA\n';
        textCmds += '^PW460\n'; // Lebar label disesuaikan untuk 230 dpi
        textCmds += '^LL460\n'; // Tinggi label juga disesuaikan

        textCmds += '^FO0,40^A0N,24,24^FB420,1,0,C^FD' + e.inventory_code + '^FS\n'; // Header teks di tengah

        textCmds += '^FO20,120^BQN,2,6^FDQA,' + e.inventory_code + '^FS\n'; // QR Code lebih kecil agar sesuai

        textCmds += '^FO0,100^GB470,1,1^FS\n'; // Garis horizontal disesuaikan agar tetap sejajar

        textCmds += '^FO190,130^A0N,20,20^FD SKU:^FS\n';
        textCmds += '^FO195,155^A0N,21,21^FB200,2,2,L^FD' + e.item.name + '^FS\n'; // Teks SKU disesuaikan

        textCmds += '^FO190,210^A0N,20,20^FD Dimension:^FS\n';
        textCmds += '^FO195,235^A0N,24,24^FD' + dataBall.multiplier + ' ' + dataBall.name + '^FS\n';

        textCmds += '^FO190,280^A0N,20,20^FD Type:^FS\n';
        textCmds += '^FO195,305^A0N,24,24^FD' + brand.item_type.name + '^FS\n';

        textCmds += '^FO20,355^A0N,16,16^FD Printed At:^FS\n';
        textCmds += '^FO25,375^A0N,16,16^FD' + formatPrintedAt() + '^FS\n';

        textCmds += '^XZ\n';

        return textCmds
    }

    function codeForPOS58(e, brand, dataBall) {
        let textCmds = "";

        // Reset printer dan set ukuran font
        textCmds += "\x1B\x40"; // Reset printer
        textCmds += "\x1B\x33\x10"; // Set line spacing

        // Header (Inventory Code)
        textCmds += "\x1B\x61\x01"; // Align Center
        textCmds += "\x1D\x21\x00"; // Font size double (height x2, width x2)
        textCmds += e.inventory_code + "\n\n";
        textCmds += "\x1D\x21\x00"; // Kembali ke font normal

        // QR Code
        textCmds += "\x1B\x61\x01"; // Align Center
        textCmds += "\x1D\x28\x6B\x03\x00\x31\x43\x06"; // Set QR Code size
        textCmds += "\x1D\x28\x6B" + String.fromCharCode(e.inventory_code.length + 3, 0) + "\x31\x50\x30" + e.inventory_code; // Data QR Code
        textCmds += "\x1D\x28\x6B\x03\x00\x31\x51\x30"; // Print QR Code
        textCmds += "\n";

        // Garis pemisah
        textCmds += "\x1B\x61\x00"; // Align Left
        textCmds += "--------------------------------\n";

        // SKU
        textCmds += "SKU:\n";
        textCmds += e.item.name + "\n\n";

        // Dimension
        textCmds += "Dimension:\n";
        textCmds += dataBall.multiplier + " " + dataBall.name + "\n\n";

        // Type
        textCmds += "Type:\n";
        textCmds += brand.item_type.name + "\n\n";

        // Printed At
        textCmds += "Printed At:\n";
        textCmds += formatPrintedAt() + "\n\n";

        // Potong kertas (jika printer mendukung auto-cutter)
        textCmds += "\x1D\x56\x41\x10"; // Partial Cut
        return textCmds
    }

    function printQRCodeBox(data) {
        let cmds = '';
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == data[0].item.id) return true
        })
        var pack = brand.unit_option.find((v, k) => {
            if (v.id == id_pack) return true
        })
        var nameStokYear = dataEntry.stokYear.find((value, key) => {
            if (value.id == variableGantung.stok_year_id) return true
        })
        var nameStok = ''
        // console.log(data)
        if (!variableGantung.stok_year_id) {
            // nameStokYear = {
            //     name: ''
            // }
        } else {
            // nameStokYear = {
            //     name: ' ( ' + nameStokYear.name + ' ) '
            // }
            nameStok = ' ( ' + nameStokYear.name + ' ) '
        }
        // console.log(nameStokYear)
        data.forEach(e => {
            console.log(e)
            cmds += '^XA\n';
            cmds += '^PW850\n'; // Lebar label disesuaikan untuk 203 dpi
            cmds += '^LL400\n'; // Tinggi label disesuaikan

            cmds += '^FO40,50^BQN,2,8^FDQA,' + e.inventory_code + '^FS\n'; // QR Code

            cmds += '^FO260,70^A0N,22,22^FD SKU ' + nameStok + ':^FS\n';
            cmds += '^FO265,100^A0N,25,25^FB210,3,2,L^FD' + e.item.name + '^FS\n'; // Teks SKU dengan auto wrap

            cmds += '^FO260,160^A0N,22,22^FD Type:^FS\n';
            cmds += '^FO265,190^A0N,25,25^FD' + brand.item_type.name + '^FS\n';

            cmds += '^FO500,70^A0N,22,22^FD Dimension:^FS\n';
            cmds += '^FO505,100^A0N,25,25^FD' + pack.multiplier + ' ' + pack.name + '^FS\n';

            cmds += '^FO500,160^A0N,22,22^FD Created At:^FS\n';
            cmds += '^FO505,190^A0N,25,25^FD' + getDateStringWithTime(variableGantung.dateCreated) + '^FS\n'; // Menggunakan fungsi formatCreatedAt() untuk waktu dinamis

            cmds += '^FO40,290^A0N,25,25^FD' + e.inventory_code + '^FS\n';
            cmds += '^FO35,340^A0N,19,19^FD Printed At:^FS\n';
            cmds += '^FO40,365^A0N,19,19^FD' + formatPrintedAt() + '^FS\n'; // Menggunakan fungsi formatPrintedAt() untuk waktu cetak

            cmds += '^XZ\n';
        });
        defaultLabelPrinterBox = localStorage.getItem("defaultLabelPrinterBox") || '';
        if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open) {
            var cpj = new JSPM.ClientPrintJob();
            cpj.clientPrinter = new JSPM.InstalledPrinter(defaultLabelPrinterBox);
            // cpj.clientPrinter = new JSPM.BluetoothPrinter("60:95:32:23:E4:45", 1);
            cpj.printerCommands = cmds;
            cpj.sendToClient();

        }
    }

    function onBlurOn() {
        $('#codeBallInput').attr('onblur', 'this.focus()').focus();
    }

    function offBlurOff() {
        $('#codeBallInput').removeAttr('onblur', 'this.focus()')
    }

    function searching(id_search_form, class_text_search, id_card_search) {
        var value = $('#' + id_search_form).val().toLowerCase();
        var cards = $('.' + class_text_search).map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.' + class_text_search).map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#' + id_card_search + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#' + id_card_search + array_arranged[i]).removeClass('d-none')
        }
    }

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function editMaterial(id) {
        doEdit = true
        var data = dataEntry.productionOutItem.find((value, key) => {
            if (value.id == id) return true
        })
        $('#editMaterial').prop('hidden', true)
        $('#btnSaveMaterial').prop('hidden', false)
        $('.btnDeleteBall').prop('hidden', false)
    }

    function saveAndPrintBall() {
        variableInsertBall = deepCopy(resetVariableInsertBall())
        var time = currentDateTime()
        // yang punya btn brown, diambil id nya
        var stok_year_id = $('.btnYear').filter('.btn-brown').attr('data-id')
        code_ball_created_detail.forEach((e, i) => {
            var id = createCodeId(parseInt(i) + 1)
            inventory_scanner.push(id)
            variableInsertBall.result_product.push({
                id: id,
                work_plan_id: dataEntry.workPlanMachine.work_plan_id,
                shift_id: dataEntry.workPlanMachine.shift_id,
                machine_id: dataEntry.workPlanMachine.machine.id,
                time_start: formatTime(time),
                time_end: formatTime(time),
                item_id: variableGantungBall.item_id,
                qty: 1,
                unit_id: variableGantungBall.unit_id,
                employee_id: user_id,
                note: variableGantungBall.notes,
                created_at: time,
                updated_at: time,
                work_plan_product_id: variableGantungBall.work_plan_product_id,
                datetime_start: dataEntry.workPlanMachine.date + ' ' + formatTime(time),
                datetime_end: dataEntry.workPlanMachine.date + ' ' + formatTime(time),
                stok_year_id: stok_year_id,
                machine_step_id: dataEntry.machineStepIdBall,
                inventory_code: e.code,
                inventory_id: id,
                machine_line_id: defaultMachineLineBox.machine_line_id,
                qty_detail: e.qty,
                unit_id_detail: variableGantungBall.unit_detail,
            })
            variableInsertBall.result_product_machine.push({
                id: createCodeId(parseInt(i) + 1),
                result_product_id: id,
                datetime: time,
                machine_step_id: dataEntry.machineStepIdBall,
                item_id_product: variableGantungBall.item_id,
                qty: 1,
                unit_id: variableGantungBall.unit_id,
                employee_id_complete: user_id,
                note: variableGantungBall.notes,
                created_at: time,
                updated_at: time,
                index: 1,
                stok_year_id: stok_year_id,
                is_product_final_other: variableGantungBall.is_product_final_other,
                employee_id_admin: user_id,
                is_complete: 1,
                qty_detail: e.qty,
                unit_id_detail: variableGantungBall.unit_detail,
            })
        })
        formInsertBox()
        addToVariableOfflineBall('add')
    }

    function addToVariableOfflineBall(status) {
        // masukkan ke variableInsertSendOffline disimpan saja
        var dataMasuk = []
        if (status == 'add') {
            variableInsertBall.result_product.forEach(e => {
                var dataItemProduction = dataEntry.itemProductionBall.find((value, key) => {
                    if (value.id == e.item_id) return true
                })
                // console.log(e.item_id)
                // console.log(dataItemProduction)
                dataMasuk.push({
                    "id": e.id,
                    "item": {
                        "id": dataItemProduction.id,
                        "code": dataItemProduction.code,
                        "name": dataItemProduction.name,
                        "alias": dataItemProduction.alias
                    },
                    "time": {
                        "end": e.time_end,
                        "start": e.time_start,
                        "datetime_end": e.datetime_end,
                        "datetime_start": e.datetime_start
                    },
                    'is_offline': 1,
                    "qty": 1,
                    "note": e.note,
                    "inventory_code": e.inventory_code,
                    "result_product_machines": [],
                })
                variableInsertSendOffline.result_product.push(e)
            });
            variableInsertBall.result_product_machine.forEach(e => {
                //filter datamasuk
                var filterDataMasuk = dataMasuk.find((value, key) => {
                    if (value.id == e.result_product_id) return true
                })
                filterDataMasuk.result_product_machines.push(e)
                variableInsertSendOffline.result_product_machine.push(e)
            });
        } else if (status == 'delete') {
            variableDelete.deletedId.result_product.forEach(e => {
                dataMasuk.push(e)
                variableInsertSendOffline.deletedId.result_product.push(e)
            });
            variableDelete.deletedId.result_product_machine.forEach(e => {
                variableInsertSendOffline.deletedId.result_product_machine.push(e)
            });
        }
        addToVariableOffline('add', dataMasuk)
    }

    function hapusBallBox() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Hapus Ball & Box</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">';
        html_body += '<div class="col-12">';
        html_body += `<input type="text" class="form-control mt-2 small-text" placeholder="Cari Kode atau Brand" id="search_kode_brand_ball_box" onclick="offBlurOff(),this.focus()" onkeyup="searching('search_kode_brand_ball_box','textBrandBallBox','listBrandBallBox')" onblur="onBlurOn()" autocomplete="off">`
        html_body += '</div>';
        html_body += '<div class="col-12 mt-3">';
        html_body += '<table class="table table-sm table-bordered" id="tableDraft">';
        html_body += '<thead>';
        html_body += '<tr>';
        html_body += '<th class="text-center align-middle small-text py-2">Time</th>';
        html_body += '<th class="text-center align-middle small-text py-2">Inventory Code</th>';
        html_body += '<th class="text-center align-middle small-text py-2">Item</th>';
        html_body += '<th class="text-center align-middle small-text py-2">Stock Year</th>';
        html_body += '<th class="text-center align-middle small-text py-2"></th>';
        html_body += '</tr>';
        html_body += '</thead>';
        html_body += '<tbody id="contentHapusBallBox">';
        html_body += '</tbody>';
        html_body += '</div>';
        html_body += '</div>';
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>';
        $('#modalFooter').html(html_footer);
        offBlurOff()
        $('#search_kode_brand_ball_box').focus()
        contentHapusBallBox()
    }

    function contentHapusBallBox() {
        var html = ''
        var dataBox = deepCopy(dataEntry.productionOutItem)
        var dataBall = deepCopy(dataEntry.productionOutItemBall)
        dataBox.forEach((value, key) => {
            html += templateTableBallBox(key, value, 0)
        })
        dataBall.forEach((value, key) => {
            html += templateTableBallBox(key, value, 1)
        })
        $('#contentHapusBallBox').html(html)
    }

    function templateTableBallBox(key, value, index) {
        var nameStokYear = dataEntry.stokYear.find((v, key) => {
            if (v.id == value.stok_year_id) return true
        })
        var html = ''
        html += '<tr id="listBrandBallBox' + value.id + '">';
        html += '<td class="text-center align-middle small-text textBrandBallBox" data-id="' + value.id + '">' + formatTime(value.datetime) + '</td>';
        html += '<td class="text-center align-middle small-text textBrandBallBox" data-id="' + value.id + '">' + value.inventory_code + '</td>';
        html += '<td class="text-center align-middle small-text textBrandBallBox" data-id="' + value.id + '">' + value.item.name + '</td>';
        html += '<td class="text-center align-middle small-text textBrandBallBox" data-id="' + value.id + '">' + nameStokYear.name + '</td>';
        html += '<td class="text-center align-middle small-text">'
        html += '<button type="button" class="btn btn-outline-danger btn-sm p-2 super-small-text me-1" onclick="hapusBoxBall(' + "'" + value.id + "'" + ',' + index + ')">Hapus</button>';
        html += '</td>';
        html += '</tr>';
        return html
    }

    function hapusBoxBall(id, index) {
        if (index == 0) {
            var text = 'Box'
            var data = deepCopy(dataEntry.productionOutItem).find((value, key) => {
                if (value.id == id) return true
            })
        } else {
            var text = 'Ball'
            var data = deepCopy(dataEntry.productionOutItemBall).find((value, key) => {
                if (value.id == id) return true
            })
        }
        // console.log(data)
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus hanya data ' + text + ' ' + data.inventory_code + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                variableDelete = deepCopy(resetVariableInsert())
                variableDelete.deletedId.result_product.push(id)
                data.result_product_machines.forEach(e => {
                    variableDelete.deletedId.result_product_machine.push(e.id)
                });
                addToVariableOffline('delete_each' + text)
            }
        })

    }

    function doHapusDataBallBoxSatuan(id, index) {
        // result_product
        var dataProduct = deepCopy(variableInsertSendOffline.result_product)
        dataProduct = dataProduct.filter(item => item.id != id)
        variableInsertSendOffline.result_product = dataProduct
        // result_product_machine
        var dataProductMachine = deepCopy(variableInsertSendOffline.result_product_machine)
        dataProductMachine = dataProductMachine.filter(item => item.result_product_id != id)
        variableInsertSendOffline.result_product_machine = dataProductMachine
        // data all
        if (index == 0) {
            var dataAll = deepCopy(dataEntry.productionOutItem)
            dataAll = dataAll.filter(item => item.id != id)
            dataEntry.productionOutItem = dataAll
        } else {
            var dataAll = deepCopy(dataEntry.productionOutItemBall)
            dataAll = dataAll.filter(item => item.id != id)
            dataEntry.productionOutItemBall = dataAll
        }
        buttonSaveOfflineMode()
        contentHapusBallBox()
        listBoxes()
    }

    setInterval(sendAllVariableInsert, 60000); // 1 menit

    window.addEventListener('beforeunload', function(event) {
        // Function to check if any array in the object has values
        function hasData(obj) {
            for (const key in obj) {
                if (Array.isArray(obj[key]) && obj[key].length > 0) {
                    return true;
                } else if (typeof obj[key] === 'object' && obj[key] !== null) {
                    if (hasData(obj[key])) {
                        return true;
                    }
                }
            }
            return false;
        }

        if (hasData(variableInsertSendOffline)) {
            event.preventDefault();
            event.returnValue = 'Data masih tersimpan, apakah Anda yakin ingin meninggalkan halaman?';
        }
    });
</script>