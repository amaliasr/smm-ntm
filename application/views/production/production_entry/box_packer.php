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
                            <div class="col-auto ps-0">
                                <button type="button" class="btn btn-sm btn-outline-brown shadow-none small-text" id="btnOpenDraft" disabled onclick="openDraft()">Pending <span id="totalOpenDraft"></span></button>
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
    }
    var variableInsert = deepCopy(resetVariableInsert())
    var variableDelete = deepCopy(resetVariableInsert())
    var variableInsertSendOffline = deepCopy(resetVariableInsert())
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
                // alert(JSPM.JSPrintManager.getBluetoothDevices())
                JSPM.JSPrintManager.getPrinters().then(function(e) {
                    printers = e
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
        var textButtonPrinter = '<i class="fa fa-exclamation-triangle text-danger me-2"></i>Printer'
        var textMachineLine = '<i class="fa fa-exclamation-triangle text-danger me-2"></i>Machine Line'
        var shakeButtonPrinter = ''
        var shakeButtonMachineLine = ''
        if (defaultLabelPrinterBox) {
            textButtonPrinter = '<i class="fa fa-print text-success me-2"></i>' + defaultLabelPrinterBox
        } else {
            shakeButtonPrinter = 'shake-bottom'
        }
        if (defaultMachineLineBox.machine_line_id && defaultMachineLineBox.work_plan_machine_id == workPlanMachineId) {
            textMachineLine = '<i class="fa fa-gear text-success me-2"></i>' + defaultMachineLineBox.machine_line_name
        } else {
            shakeButtonMachineLine = 'shake-bottom'
        }
        var html = ''
        html += `
                        <button type="button" class="btn btn-outline-brown shadow-none btn-sm shadow-none" onclick="loadDataTemplate()"><i class="fa fa-refresh me-2"></i>Refresh</button>

                        <button type="button" class="btn btn-outline-brown shadow-none btn-sm shadow-none ${shakeButtonMachineLine}" onclick="settingMachineLine()" id="btnSettingMachineLine">${textMachineLine}</button>

                        <button type="button" class="btn btn-outline-brown shadow-none btn-sm shadow-none ${shakeButtonPrinter}" onclick="settingPrinter()" id="btnSettingPrinter">${textButtonPrinter}</button>
                    `
        $('#contentButtonTemplates').html(html)
    }

    function settingPrinter() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-sm modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Setting Printer</h5>';
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
                html_body += '<div class="card shadow-none pointer card-hoper mb-2 cardChoosePrinter" onclick="choosePrinter(' + key + ',' + "'" + value + "'" + ')" id="cardChoosePrinter' + key + '">'
                html_body += '<div class="card-body p-1 px-2">'
                // text
                html_body += '<div class="row">'
                html_body += '<div class="col-10 align-self-center">'
                html_body += '<p class="m-0 super-small-text fw-bolder">' + value + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-2 text-end">'
                html_body += '<i class="fa fa-check-circle text-grey iconChoosePrinter" id="iconChoosePrinter' + key + '"></i>'
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
            choosePrinter(printerKey, defaultLabelPrinterBox)
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

    function choosePrinter(key, value) {
        defaultLabelPrinterBox = value
        localStorage.setItem('defaultLabelPrinterBox', value)
        $('.cardChoosePrinter').removeClass('border-success bg-light')
        $('.iconChoosePrinter').removeClass('text-success')
        $('#cardChoosePrinter' + key).addClass('border-success bg-light')
        $('#iconChoosePrinter' + key).addClass('text-success')
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
                if (!work_plan_product_id_clicked) {
                    // fieldProcessAddNewBox()
                    addNewBox()
                }
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
    }

    function fieldProcessAddNewBox() {
        var html = `
                <div class="row h-100 justify-content-center d-flex align-items-center">
                <div class="col-12 align-self-center text-center">
                <img src="<?= base_url('assets/image/png/box.png'); ?>" class="w-50"><br>
                    <button type="button" class="btn btn-sm btn-outline-brown" id="btnAddNewBox" onclick="addNewBox()"><i class="fa fa-plus me-2"></i> Add New Box</button>
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
        if (doEdit) {
            $('#codeBallInput').focus();
        }
        buttonSaveOfflineMode()
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
            if (data.stok_akhir) {
                if (!doEdit) {
                    // untuk add
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
                } else {
                    // untuk edit
                    var id_box = $('#codeBallInput' + variableEdit).data('id_box')
                    secondScannerEdit(id_box, data)
                }
            } else {
                alertIfListBoxes('Stok Telah Habis')
            }
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
        const today = new Date();
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

    function setFirstScanner(data) {
        var variableEdit = ''
        if (doEdit) {
            variableEdit = 'Edit'
        }
        item_id_scanner = data.item_id
        var dataProduct = checkSourceItem(data.item_id)
        if (dataProduct) {
            initial_product_scanned = dataProduct
            var brand = dataEntry.workPlanMachine.products.find((v, k) => {
                if (v.product.id == dataProduct.item_id) return true
            })
            variableGantung.dateCreated = currentDateTime()
            variableGantung.item_id = data.item_id
            variableGantung.unit_ball = dataProduct.material_group[0].requirement
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
                        <button class="btn btn-lg btn-brown shadow-none w-100 small-text" id="btnPrintSave" type="button" disabled onclick="saveAndPrint()">Simpan & Cetak</button>
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
                            <div class="col-2 text-end" onclick="Edit(${e})">
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

    function Edit(inventory_id) {
        // tanpa index, langsung pakai splice
        inventory_scanner.splice(inventory_scanner.indexOf(inventory_id), 1)
        fieldInputBox()
    }

    function saveAndPrint() {
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
            machine_line_id: defaultMachineLineBox.machine_line_id
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
        })
        if (inventory_scanner.length) {
            inventory_scanner.forEach((v, k) => {
                variableInsert.result_product_material.push({
                    id: createCodeId(k),
                    result_product_id: id,
                    datetime: variableGantung.dateCreated,
                    machine_id: dataEntry.workPlanMachine.machine.id,
                    item_id: variableGantung.item_id,
                    inventory_id: v,
                    unit_id: variableGantung.unit_ball.unit_id,
                    qty: 1,
                    created_at: time,
                    updated_at: time,
                })
            })
        }
        addToVariableOffline('add')
    }

    function addToVariableOffline(status) {
        // masukkan ke variableInsertSendOffline disimpan saja
        var dataMasuk = []
        if (status == 'add' || status == 'add_ball') {
            if (variableInsert.result_product.length) {
                variableInsert.result_product.forEach(e => {
                    var dataItemProduction = dataEntry.itemProduction.find((value, key) => {
                        if (value.id == e.item_id) return true
                    })
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
                        "updated_at": e.updated_at
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
        }
        reconstructionData(status, dataMasuk)
    }

    function reconstructionData(status, dataMasuk) {
        var data = []
        if (status == 'add') {
            dataMasuk.forEach(e => {
                data.push(e)
            });
            var dataOutItem = deepCopy(dataEntry.productionOutItem)
            dataOutItem.forEach(e => {
                data.push(e)
            });
            dataEntry.productionOutItem = data
            addNewBox()
            printQrCode(dataMasuk)
        } else if (status == 'delete') {
            if (!status == 'delete_ball') {
                $('#modal').modal('hide')
            }
            var dataOutItem = deepCopy(dataEntry.productionOutItem)
            var hasil = hapusDatadanReplaceData(dataOutItem, dataMasuk);
            dataEntry.productionOutItem = hasil
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
        listBalls()
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

    function detailBox(id) {
        var data = dataEntry.productionOutItem.find((value, key) => {
            if (value.id == id) return true
        })
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == data.item.id) return true
        })
        var pack = brand.unit_option.find((v, k) => {
            if (v.id == id_pack) return true
        })
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
        html_body += '<div class="col-10 align-self-center">'
        html_body += '<p class="m-0 small">ID Inventory</p>'
        html_body += '<p class="m-0 h3 fw-bolder">' + data.inventory_code + '</p>'
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
        html_body += '<button class="btn btn-sm btn-brown shadow-none super-small-text p-1" onclick="cetakUlangQRCode(' + "'" + id + "'" + ')"><i class="fa fa-print"></i></button>'
        html_body += '</div>'
        // html_body += '<div class="col-6 pe-0 mb-2">'
        // html_body += '<p class="m-0 super-small-text text-grey-small">Transaction Code</p>'
        // html_body += '<p class="m-0 super-small-text fw-bolder">' + data.inventory_code + '</p>'
        // html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">SKU</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + data.item.name + 'r</p>'
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
        if (!data.is_material_used) {
            html_footer += '<button type="button" class="btn btn-outline-danger btn-sm" onclick="hapusBox(' + "'" + id + "'" + ')">Hapus Box</button>'
        }
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

    function printQrCode(data) {
        let cmds = '';
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == data[0].item.id) return true
        })
        var pack = brand.unit_option.find((v, k) => {
            if (v.id == id_pack) return true
        })
        data.forEach(e => {
            cmds += '^XA\n';
            cmds += '^PW1100\n';
            cmds += '^LL500\n';

            cmds += '^FO0,60^A0N,28,28^FD ' + e.inventory_code + '^FS\n'; // Teks di bawah QR Code, ukuran lebih besar
            cmds += '^FO10,130^BQN,2,10^FDQA,' + e.inventory_code + '^FS\n'; // QR Code lebih besar

            cmds += '^FO330,140^A0N,28,28^FD SKU:^FS\n'; // Label SKU lebih besar
            cmds += '^FO340,180^A0N,40,40^FB390,2,2,L^FD ' + e.item.name + '^FS\n'; // Nama SKU lebih besar

            cmds += '^FO330,310^A0N,28,28^FD Type:^FS\n'; // Label Type lebih besar
            cmds += '^FO330,350^A0N,40,40^FD ' + brand.item_type.name + '^FS\n'; // Isi Type lebih besar

            cmds += '^FO700,140^A0N,28,28^FD Dimension:^FS\n'; // Label Dimension lebih besar
            cmds += '^FO700,180^A0N,40,40^FD ' + pack.multiplier + ' ' + pack.name + '^FS\n'; // Isi Dimension lebih besar

            cmds += '^FO700,310^A0N,28,28^FD Printed At:^FS\n'; // Label Printed At lebih besar
            cmds += '^FO700,350^A0N,40,40^FD ' + formatPrintedAt() + '^FS\n'; // Isi Printed At lebih besar

            cmds += '^XZ\n';
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
</script>