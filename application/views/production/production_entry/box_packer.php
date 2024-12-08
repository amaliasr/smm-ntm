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
                        <p class="m-0 super-small-text text-grey-small"><b><span id="totalDataBall">160 Data</span></b> ( 12 Data still Offline )</p>
                    </div>
                    <div class="col-auto text-end">
                        <div class="row">
                            <div class="col-auto ps-0">
                                <button type="button" class="btn btn-sm btn-outline-brown shadow-none small-text" id="btnOpenDraft" disabled>Open Draft <span id="totalOpenDraft"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mt-3 small-text" placeholder="Cari Kode atau Brand" id="search_nama" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
                    </div>
                </div>
                <!-- <div> -->
                <div class="border-bottom" style="max-height: 560px;overflow-x: hidden;overflow-y: auto;" id="listBalls">
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-6 pt-2">
        <div class="card shadow-sm" style="height: 700px">
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
            deletedId: {
                result_product: [],
                result_product_machine: [],
            }
        }
        return data
    }

    function hapusDatadanReplaceData(inputData, dataUntukDihapus) {
        // Filter data berdasarkan id yang tidak termasuk dalam dataUntukDihapus
        return inputData.filter(item => !dataUntukDihapus.includes(item.id.toString()));
    }
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
                $('#listBalls').html(LoadingReturn('Loading...'))
            },
            success: function(response) {
                showOverlay('hide')
                dataEntry = response.data
                listBalls()
                if (!work_plan_product_id_clicked) {
                    // fieldProcessAddNewBox()
                    addNewBox()
                }
            }
        })
    }

    function listBalls() {
        var html = ''
        var data = deepCopy(dataEntry.productionOutItem)
        if (data.length) {
            data.forEach((v, i) => {
                // card created
                html += '<div class="card shadow-none border-end-0 border-start-0 border-top-0 pointer card-hoper bg-super-light-orange listDetailBall" style="border-radius:0px;" id="listDetailBall' + v.id + '" onclick="detailBall(' + "'" + v.id + "'" + ')">'
                html += '<div class="card-body py-3">'
                html += '<div class="row">'
                // column
                html += ballCreated(v, i)
                // column
                html += '</div>'
                html += '</div>'
                html += '</div>'
                // card created
            });
        } else {
            html += emptyReturnTextOnly('Tidak Ada Data yang Tersedia')
        }
        $('#listBalls').html(html)
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
        html += '<p class="m-0 small-text text-grey-small fw-bolder">BALL-ABLF20DF1120240001</p>'
        html += '<p class="m-0 super-small-text text-grey"><b>09:30</b> - Armour Black 20 Double Filter</p>'
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
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center">'
        html += '<span class="fa fa-box text-grey"></span>'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-dark-grey fw-bolder">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-dark-grey"><b>' + convertTimeFormat2(v.time.start) + '</b> - ' + v.item.name + '</p>'
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
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center">'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-dark-grey fw-bolder">BALL-ABLF20DF1120240001</p>'
        html += '<p class="m-0 super-small-text text-dark-grey"><b>09:30</b> - Armour Black 20 Double Filter</p>'
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
                        <button class="mt-2 w-100 btn btn-brown" onclick="firstScanner()"><i class="fa fa-search me-2"></i>Cari</button>
                    </div>
                </div>`
        $('#fieldProcessAddNewBox').html(html)
        $('#codeBallInput').focus();
    }
    $(document).on('keypress', '#codeBallInput', function(e) {
        if (event.keyCode === 13) {
            firstScanner()
        }
    })

    function firstScanner() {
        $('#alertIfListBalls').html('')
        var code = $('#codeBallInput').val()
        var data = dataEntry.machineStock.find((value, key) => {
            if (value.inventory_code == code) return true
        })
        if (data) {
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
                    Swal.fire({
                        icon: 'error',
                        title: 'Brand Tidak Cocok',
                        text: 'Brand yang dimasukkan berbeda dengan yang sebelumnya'
                    });
                }
            }

        }
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
        const code = `${variableGantung.item_alias}BX${defaultMachineLineBox.machine_line_label}${year}${month}${date}${xFormatted}`;

        return code;
    }

    function setFirstScanner(data) {
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
                variableGantung.is_product_final_other = brand.is_product_final_other
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
            $('#codeBallInput').val('')
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
            $('#alertIfListBalls').html(`<div class="alert alert-danger py-2 alert-dismissible fade show d-flex align-self-center" role="alert"><p class="m-0 small-text fw-bold">${text}</p><button type="button" class="small-text btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button></div>`)
            $('#codeBallInput').val('')
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
                        <img src="<?= base_url('assets/image/svg/box-open.svg'); ?>" style="width:70%">
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
                        <button class="btn btn-brown" onclick="firstScanner()">${iconQRCode(10,10)}</button>
                    </div>
                </div>
                <div class="row mx-2 mb-2">
                    <div class="col-12 mb-2">
                        <p class="m-0 small-text fw-bold text-grey-small">Balls List</p>
                    </div>
                    <div class="col-12" id="alertIfListBalls">
                    </div>
                    <div class="col-12 mb-2" id="fieldIfListBalls">
                    </div>
                </div>
                `
        $('#fieldProcessAddNewBox').html(html)
        $('#codeBallInput').focus();
        fieldIfListBalls()
    }

    function fieldIfListBalls() {
        var html = ''
        if (!inventory_scanner.length) {
            inventory_scanner.forEach(e => {
                var data = dataEntry.machineStock.find((v, k) => {
                    if (v.inventory_id == e) return true
                })
                html += `
                <div class="card shadow-none mb-2 card-hoper bg-super-light-orange">
                    <div class="card-body py-2">
                        <div class="row">
                            <div class="col-10 align-self-center">
                                <p class="m-0 small-text fw-bold text-dark-grey">${data.inventory_code}</p>
                            </div>
                            <div class="col-2 text-end" onclick="hapusBall(${e})">
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
        $('#fieldIfListBalls').html(html)
        $('#totalBallFilled').html(inventory_scanner.length)
    }

    function hapusBall(inventory_id) {
        // tanpa index, langsung pakai splice
        inventory_scanner.splice(inventory_scanner.indexOf(inventory_id), 1)
        fieldInputBox()
    }
</script>