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

    .btn-brown:disabled {
        background-color: lightgrey !important;
        color: white !important;
        border-color: lightgrey;
    }

    .border-brown {
        border-color: #A67E4F;
    }

    .text-brown {
        color: #A67E4F !important;
    }

    .input-edit-ball {
        font-size: 9px;
        display: block;
        border: none;
        border-bottom: solid 0.5px lightgrey;
        color: grey;
        text-align: end;
        width: 50px;
        padding: 0px;
        margin: 0px;
    }

    .input-edit-ball:focus {
        outline: none;
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
                        <p class="m-0 small-text"><b>List Ball</b></p>
                        <p class="m-0 super-small-text text-grey-small"><b><span id="totalDataBall">0</span> Data</b><span class="ms-1" id="totalDataOfflineBall"></span></p>
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
                        <input type="text" class="form-control mt-3 small-text" placeholder="Cari Kode atau Brand" id="search_kode_brand" onkeyup="searching('search_kode_brand','textListBall','listDetailBall')" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
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
        <div class="card shadow-sm h-100" style="min-height: 700px !important">
            <div class="card-body" id="fieldProcessProductWorkPlan">
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

    function iconBoxFill(height, width) {
        return `<svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
        </svg>`
    }

    function iconBoxEmpty(height, width) {
        return `<svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
        </svg>`
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
    var work_plan_product_id_clicked
    var alias_clicked
    var year_clicked
    var code_ball_created = []
    var printers = []
    var printerKey = ''
    var machineLineId = ''
    var defaultMachineLine = JSON.parse(localStorage.getItem('idMachineLine')) || {
        machine_line_id: '',
        machine_line_name: '',
        machine_line_label: '',
        work_plan_machine_id: ''
    }
    var id_pack = 9
    var defaultLabelPrinterBall = localStorage.getItem("defaultLabelPrinterBall") || '';
    var variableGantung = {
        dateCreated: '',
        item_id: '',
        unit_id: '',
        notes: '',
        work_plan_product_id: '',
        is_product_final_other: '',
        multiplier: '',
        unit_detail: '',
        is_qty_detail_allowed: '',
    }
    var variableInsert = deepCopy(resetVariableInsert())
    var variableDelete = deepCopy(resetVariableInsert())
    var variableInsertSendOffline = deepCopy(resetVariableInsert())
    var code_ball_created_detail = []
    var brand_multiplier_pack = {}
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
                        <button type="button" class="btn btn-brown shadow-none btn-sm shadow-none" id="btnSendAll" disabled onclick="sendAllVariableInsert()"><i class="fa fa-save me-2"></i>Send All</button>
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
        if (defaultLabelPrinterBall) {
            textButtonPrinter = '<i class="fa fa-print text-success me-2"></i>' + defaultLabelPrinterBall
        } else {
            shakeButtonPrinter = 'shake-bottom'
        }
        if (defaultMachineLine.machine_line_id && defaultMachineLine.work_plan_machine_id == workPlanMachineId) {
            textMachineLine = '<i class="fa fa-gear text-success me-2"></i>' + defaultMachineLine.machine_line_name
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
                if (defaultLabelPrinterBall == value) {
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
        if (defaultLabelPrinterBall) {
            choosePrinter(printerKey, defaultLabelPrinterBall)
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
                if (defaultMachineLine.machine_line_id == value.id) {
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
        if (defaultMachineLine.machine_line_id) {
            chooseMachineLine(defaultMachineLine.machine_line_id, defaultMachineLine.machine_line_name, defaultMachineLine.machine_line_label)
        }
    }

    function chooseMachineLine(id, name, label) {
        defaultMachineLine = {
            machine_line_id: id,
            machine_line_name: name,
            machine_line_label: label,
            work_plan_machine_id: workPlanMachineId
        }
        localStorage.setItem('idMachineLine', JSON.stringify(defaultMachineLine));
        $('.cardChooseMachineLine').removeClass('border-success bg-light')
        $('.iconChooseMachineLine').removeClass('text-success')
        $('#cardChooseMachineLine' + id).addClass('border-success bg-light')
        $('#iconChooseMachineLine' + id).addClass('text-success')
        contentButtonTemplates()
    }

    function choosePrinter(key, value) {
        defaultLabelPrinterBall = value
        localStorage.setItem('defaultLabelPrinterBall', value)
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
                brand_multiplier_pack = {}
                dataEntry.productMaterial.forEach(e => {
                    var multiplier = e.unit_option.find((value, key) => {
                        if (value.id == id_pack) return true
                    })
                    if (multiplier) {
                        brand_multiplier_pack[e.item_id] = multiplier.multiplier
                    }
                })
                listBalls()
                if (!work_plan_product_id_clicked) {
                    fieldProcessProductWorkPlan()
                }
            }
        })
    }

    function listBalls() {
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
                html += '<div class="card shadow-none border-end-0 border-start-0 border-top-0 pointer card-hoper listDetailBall ' + bg + '" style="border-radius:0px;" id="listDetailBall' + v.id + '" onclick="detailBall(' + "'" + v.id + "'" + ')">'
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
        $('#listBalls').html(html)
        totalDataBall(total_all, total_offline)
    }

    function totalDataBall(total_all, total_offline) {
        $('#totalDataBall').html(total_all)
        if (total_offline) {
            $('#totalDataOfflineBall').html('( ' + total_offline + ' Data still Offline )')
        } else {
            $('#totalDataOfflineBall').html('')
        }
    }

    function fieldProcessProductWorkPlan() {
        code_ball_created_detail = []
        var html = `
        <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Find Brands</b></p>
                    </div>
                    <div class="col-auto text-end">
                    </div>
                </div>
                <div class="row pt-2">
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
        $('#fieldProcessProductWorkPlan').html(html)
        productWorkPlan()
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
        html += '<p class="m-0 small-text text-grey-small fw-bolder textListBall" data-id="' + v.id + '">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-grey"><b class="textListBall" data-id="' + v.id + '">' + convertTimeFormat2(v.time.start) + '</b> - <span class="textListBall" data-id="' + v.id + '">' + v.item.name + '</span></p>'
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
        // console.log(v)
        var namaPita = ''
        if (v.stok_year_id) {
            var nameStokYear = dataEntry.stokYear.find((value, key) => {
                if (value.id == v.stok_year_id) return true
            })
            namaPita = '<span class="ms-1 text-danger">Pita ' + nameStokYear.name + '</span>'
        }
        if (v.qty_detail) {
            var qty = v.qty_detail
        } else {
            var qty = brand_multiplier_pack[v.item.id]
        }
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center text-brown pe-0">'
        html += '<div class="row">'
        html += '<div class="col-12 p-0">'
        html += '<span>' + iconBoxEmpty(16, 16) + '</span>'
        html += '</div>'
        html += '<div class="col-12 p-0">'
        html += '<p class="m-0 super-small-text">' + qty + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-dark-grey fw-bolder textListBall" data-id="' + v.id + '">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-dark-grey"><b class="textListBall" data-id="' + v.id + '">' + convertTimeFormat2(v.time.start) + '</b> - <span class="textListBall" data-id="' + v.id + '">' + v.item.name + '' + namaPita + '</span></p>'
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
        if (v.qty_detail) {
            var qty = v.qty_detail
        } else {
            var qty = brand_multiplier_pack[v.item.id]
        }
        var html = ''
        // icon
        html += '<div class="col-1 d-flex align-self-center text-center text-success pe-0">'
        html += '<div class="row">'
        html += '<div class="col-12 p-0">'
        html += '<span>' + iconBoxFill(16, 16) + '</span>'
        html += '</div>'
        html += '<div class="col-12 p-0">'
        html += '<p class="m-0 super-small-text">' + qty + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // icon
        // side name
        html += '<div class="col-8 align-self-center text-start">'
        html += '<p class="m-0 small-text text-dark-grey fw-bolder textListBall" data-id="' + v.id + '">' + v.inventory_code + '</p>'
        html += '<p class="m-0 super-small-text text-dark-grey"><b class="textListBall" data-id="' + v.id + '">' + convertTimeFormat2(v.time.start) + '</b> - <span class="textListBall" data-id="' + v.id + '">' + v.item.name + '' + namaPita + '</span></p>'
        html += '</div>'
        // side name
        // status
        html += '<div class="col-3 align-self-center text-end">'
        html += '<span class="badge rounded-pill border border-success bg-success-light py-2 px-2 super-small-text text-success w-100">IN THE BOX</span>'
        html += '</div>'
        // status
        return html
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
        variableGantung = {
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

    function totalStockBahan(id_product) {
        var id_ball = ''
        var id_press = ''
        var stock_akhir = 0
        // dicari dulu id ball nya apa
        var dataItemProduction = dataEntry.itemProduction.find((value, key) => {
            if (value.item_id_product_final == id_product) return true
        })
        if (dataItemProduction) {
            id_ball = dataItemProduction.id
            variableGantung.unit_id = dataItemProduction.unit.id
            variableGantung.item_id = dataItemProduction.id
            variableGantung.is_product_final_other = dataItemProduction.is_product_final_other
        }
        // dicari dulu id press nya berapa
        var checkProductMaterial = dataEntry.productMaterial.find((value, key) => {
            if (value.item_id == id_ball) return true
        })
        if (checkProductMaterial) {
            var unit = checkProductMaterial.unit_option.find((value, key) => {
                if (value.id == id_pack) return true
            })
            variableGantung.multiplier = unit.multiplier
            variableGantung.unit_detail = id_pack
            variableGantung.is_qty_detail_allowed = checkProductMaterial.is_qty_detail_allowed
            id_press = checkProductMaterial.material_group[0].item_id_default
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

    function formAddBrand(data) {
        var dateTime = currentDateTime()
        variableGantung.dateCreated = dateTime
        // variableGantung.item_id = data.product.id
        variableGantung.work_plan_product_id = data.work_plan_product_id
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
            <p class="m-0 text-grey-small super-small-text">Total Stok Bahan : <span class="text-orange fw-bolder">${number_format(totalStockBahan(data.product.id))} Press</span></p>
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
        <div class="col-12 mt-3">
            <p class="m-0 text-grey-small small-text">Jumlah Ball</p>
            <div class="row mt-2 align-self-center">
                <div class="col-auto pe-0 align-self-center">
                    <button type="button" class="btn btn-outline-brown shadow-none" onclick="decreaseBallQuantity()">-</button>
                </div>
                <div class="col-2 pe-0">
                    <input type="number" class="form-control text-center border-brown" placeholder="1" id="ballQuantity" value="1" min="1" oninput="changeAddBrand()" onkeyup="changeAddBrand()">
                </div>
                <div class="col-auto pe-0 align-self-center">
                    <button type="button" class="btn btn-outline-brown shadow-none" onclick="increaseBallQuantity()">+</button>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <p class="m-0 text-grey-small small-text">Code Created</p>
            <div class="row mt-2" id="codeBallCreated">
            </div>
        </div>
        <div class="col-12 mt-3">
            <p class="m-0 text-grey-small small-text pointer" id="btnAddNotes" onclick="showNotes()"><span id="textAddNotes">Add Notes <i>(optional)</i></span><span class="fa fa-pencil ms-2"></span></p>
            <div id="fieldAddNotes" hidden>
                <div class="row mt-2">
                    <div class="col-12">
                        <textarea class="form-control border-brown small-text" placeholder="Notes" id="notes" oninput="addNotes()" onkeyup="addNotes()" onblur="showNotes()" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3 text-center">
            <button class="btn btn-lg btn-brown shadow-none w-100 small-text" id="btnPrintSave" type="button" disabled onclick="saveAndPrint()">Simpan & Cetak <span id="totalBall" class="ms-2">( 1 Ball )</span></button>
            <button class="btn shadow-none w-100 text-danger small-text" onclick="fieldProcessProductWorkPlan()">Batalkan</button>
        </div>
    </div>
    `;
        $('#fieldProcessProductWorkPlan').html(html);
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

    function addNotes() {
        var text = $('#notes').val()
        variableGantung.notes = text
    }


    function setYear(year) {
        year_clicked = year
        $('.btnYear').addClass('btn-outline-brown').removeClass('btn-brown')
        $('#btnYear' + year).addClass('btn-brown')
        $('#btnYear' + year).removeClass('btn-outline-brown')
        changeAddBrand()
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
    }

    function totalBall() {
        var ballQuantity = $('#ballQuantity').val()
        $('#totalBall').html(`( ${ballQuantity} Ball )`)
        addBrandCodeCreated()
    }

    function addBrandCodeCreated() {
        code_ball_created = []
        var ballQuantity = $('#ballQuantity').val()
        var html = ''
        for (let i = 1; i <= ballQuantity; i++) {
            var code = createBrandCode(i)
            code_ball_created.push(code)
            var ballDetail = createBallDetail(code)
            var color = ''
            var colorDetail = 'text-grey'
            var onclickDetail = ''
            if (ballDetail.edited) {
                color = 'text-orange'
                colorDetail = 'text-orange'
            }
            if (variableGantung.is_qty_detail_allowed) {
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
                qty: variableGantung.multiplier,
                edited: false,
            }
            qty = variableGantung.multiplier
            code_ball_created_detail.push(data)
        }
        return data
    }

    function changeQTYDetail(code) {
        var qty = $('#inputQTYDetail' + code).val()
        var data = code_ball_created_detail.find(x => x.code == code)
        if (data) {
            data.qty = qty
            data.edited = true
        }
    }

    function showQTYDetail(code, boolean) {
        if (boolean) {
            $('#inputQTYDetail' + code).attr('hidden', false).focus()
            $('#textQTYDetail' + code).attr('hidden', true)
        } else {
            $('#inputQTYDetail' + code).attr('hidden', true)
            $('#textQTYDetail' + code).attr('hidden', false)
            addBrandCodeCreated()
        }
    }

    function findLargestInventoryCode(data) {
        // Mengurutkan data berdasarkan inventory_code (bagian numerik di akhir)
        const sortedData = data.sort((a, b) => {
            const numA = parseInt(a.inventory_code.match(/\d+$/)[0], 10);
            const numB = parseInt(b.inventory_code.match(/\d+$/)[0], 10);
            return numB - numA;
        });

        // Mengembalikan inventory_code terbesar
        return sortedData[0]?.inventory_code || null;
    }

    function extractTrailingNumber(code) {
        // Menggunakan regex untuk mengambil angka di akhir string
        const match = code.match(/.*?(\d{2,})$/);
        return match ? parseInt(match[1].slice(-2), 10) : null;
    }

    function createBrandCode(x) {
        x = (extractTrailingNumber(findLargestInventoryCode(deepCopy(dataEntry.productionOutItem)))) + x
        // Mendapatkan tanggal saat ini
        const today = new Date();
        const year = today.getFullYear(); // Tahun (4 digit)
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan (2 digit)
        const date = String(today.getDate()).padStart(2, '0'); // Tanggal (2 digit)

        // Membuat format angka 5 digit untuk x
        const xFormatted = String(x).padStart(5, '0');

        // Membuat kode final
        const code = `BL${defaultMachineLine.machine_line_label}${year}${month}${date}${xFormatted}`;
        // const code = `${alias_clicked}BL${defaultMachineLine.machine_line_label}${year}${month}${date}${xFormatted}`;

        return code;
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

    function detailBall(id) {
        var data = dataEntry.productionOutItem.find((value, key) => {
            if (value.id == id) return true
        })
        var dataProduct = checkSourceItem(data.item.id)
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == dataProduct.item_id) return true
        })
        var dataBall = dataProduct.material_group[0].items[0].unit_option.find((v, k) => {
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
        if (!data.qty_detail) {
            var qtyDetail = dataBall.multiplier
        } else {
            var qtyDetail = data.qty_detail
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Ball</h5>';
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
        html_body += '<p class="m-0 super-small-text fw-bolder">' + qtyDetail + ' ' + dataBall.name + '</p>'
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
        html_body += '<p class="m-0 small-text fw-bolder">' + data.note + '</p>'
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
        html_body += timelineBall()
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
            html_footer += '<button type="button" class="btn btn-outline-danger btn-sm" onclick="hapusBall(' + "'" + id + "'" + ')">Hapus Ball</button>'
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
    }

    function hapusBall(id) {
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
                addToVariableOffline('delete')
            }
        })

    }

    function timelineBall() {
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

    function saveAndPrint() {
        variableInsert = deepCopy(resetVariableInsert())
        var time = currentDateTime()
        // yang punya btn brown, diambil id nya
        var stok_year_id = $('.btnYear').filter('.btn-brown').attr('data-id')
        code_ball_created_detail.forEach((e, i) => {
            var id = createCodeId(i)
            variableInsert.result_product.push({
                id: id,
                work_plan_id: dataEntry.workPlanMachine.work_plan_id,
                shift_id: dataEntry.workPlanMachine.shift_id,
                machine_id: dataEntry.workPlanMachine.machine.id,
                time_start: currentDateTime(),
                time_end: currentDateTime(),
                item_id: variableGantung.item_id,
                qty: 1,
                unit_id: variableGantung.unit_id,
                employee_id: user_id,
                note: variableGantung.notes,
                created_at: currentDateTime(),
                updated_at: currentDateTime(),
                work_plan_product_id: variableGantung.work_plan_product_id,
                datetime_start: dataEntry.workPlanMachine.date + ' ' + formatTime(currentDateTime()),
                datetime_end: dataEntry.workPlanMachine.date + ' ' + formatTime(currentDateTime()),
                stok_year_id: stok_year_id,
                machine_step_id: dataEntry.machineStepid,
                inventory_code: e.code,
                machine_line_id: defaultMachineLine.machine_line_id,
                qty_detail: e.qty,
                unit_id_detail: variableGantung.unit_detail,
            })
            variableInsert.result_product_machine.push({
                id: createCodeId(i),
                result_product_id: id,
                datetime: currentDateTime(),
                machine_step_id: dataEntry.machineStepid,
                item_id_product: variableGantung.item_id,
                qty: 1,
                unit_id: variableGantung.unit_id,
                employee_id_complete: user_id,
                note: variableGantung.notes,
                created_at: currentDateTime(),
                updated_at: currentDateTime(),
                index: 1,
                stok_year_id: stok_year_id,
                is_product_final_other: variableGantung.is_product_final_other,
                employee_id_admin: user_id,
                is_complete: 1,
                qty_detail: e.qty,
                unit_id_detail: variableGantung.unit_detail,
            })
        })
        addToVariableOffline('add')
    }

    function addToVariableOffline(status) {
        // masukkan ke variableInsertSendOffline disimpan saja
        var dataMasuk = []
        if (status == 'add') {
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
                })
                variableInsertSendOffline.result_product.push(e)
            });
            variableInsert.result_product_machine.forEach(e => {
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
        // console.log(variableInsertSendOffline)
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
            formSuccessSaveVariable()
            printQrCode(dataMasuk)
        } else if (status == 'delete') {
            $('#modal').modal('hide')
            var dataOutItem = deepCopy(dataEntry.productionOutItem)
            var hasil = hapusDatadanReplaceData(dataOutItem, dataMasuk);
            dataEntry.productionOutItem = hasil
        }
        buttonSaveOfflineMode()
        listBalls()
    }

    function buttonSaveOfflineMode() {
        var data = deepCopy(variableInsertSendOffline.result_product)
        var data2 = deepCopy(variableInsertSendOffline.result_product_machine)
        var data3 = deepCopy(variableInsertSendOffline.deletedId.result_product)
        var data4 = deepCopy(variableInsertSendOffline.deletedId.result_product_machine)
        if (data.length || data2.length || data3.length || data4.length) {
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
        totalData += data3.length
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

    function formSuccessSaveVariable() {
        var html = `
        <div class="row h-100">
        <div class="col-12 align-self-center text-center h-100">
        <div class="card shadow-none" style="border:0px;height:100%;">
        <div class="card-body h-100 p-5 d-flex align-items-center">

        <div class="row">
        <div class="col-12">
        <p class="m-0 small">Proses Mencetak QR Code</p><br>
        </div>
        <div class="col-12">
        <img src="<?= base_url('assets/image/svg/barcode.svg') ?>" alt="" width="70px">
        </div>
        <div class="col-12 mt-4 text-center">
        <button class="btn btn-sm btn-outline-brown shadow-none small-text" type="button" onclick="resetFormInsert()"><i class="fa fa-home me-1"></i>Reset</button>
        <button class="btn btn-sm btn-brown shadow-none small-text" type="button" onclick="cetakUlangInsert()">Cetak Ulang</button>
        </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        `
        $('#fieldProcessProductWorkPlan').html(html)
    }

    function resetFormInsert() {
        work_plan_product_id_clicked = null
        fieldProcessProductWorkPlan()
    }

    function cetakUlangInsert() {
        addABrand(work_plan_product_id_clicked)
    }

    function sendAllVariableInsert() {
        var data = deepCopy(variableInsertSendOffline)
        var type = 'POST'
        var button = '#btnSendAll'
        var url = '<?php echo api_produksi('setResultProductMachine'); ?>'
        if (data.result_product.length || data.result_product_machine.length || data.deletedId.result_product.length || data.deletedId.result_product_machine.length) {
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
        // data all
        var dataAll = deepCopy(dataEntry.productionOutItem)
        dataAll = dataAll.filter(item => item.id != id)
        dataEntry.productionOutItem = dataAll
        contentOpenDraft()
        buttonSaveOfflineMode()
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
        sendSingleVariableInsert(data)
    }

    function sendSingleVariableInsert(dataSend) {
        var data = deepCopy(dataSend)
        var type = 'POST'
        var button = '#btnSendAll'
        var url = '<?php echo api_produksi('setResultProductMachine'); ?>'
        kelolaDataSaveAuto(data, type, url, button)
    }

    function formatDateBarcode(dateString) {
        // Create a new Date object from the input date string
        const date = new Date(dateString);

        // Array of month names for converting month number to name
        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];

        // Extract day, month, year, hours, and minutes
        const day = date.getDate(); // Day of the month
        const month = months[date.getMonth()]; // Month name
        const year = String(date.getFullYear()).slice(-2); // Last 2 digits of the year
        const hours = String(date.getHours()).padStart(2, '0'); // Hour in 2 digits
        const minutes = String(date.getMinutes()).padStart(2, '0'); // Minutes in 2 digits

        // Format the date as '18 Sep 24, 16:06'
        return `${day} ${month} ${year}, ${hours}:${minutes}`;
    }

    function cetakUlangQRCode(id) {
        var data = dataEntry.productionOutItem.filter((value, key) => {
            if (value.id == id) return true
        })
        printQrCode(data)
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

    function printQrCode(data) {
        let cmds = '';
        var dataProduct = checkSourceItem(data[0].item.id)
        var brand = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == dataProduct.item_id) return true
        })
        var dataBall = dataProduct.material_group[0].items[0].unit_option.find((v, k) => {
            if (v.id == id_pack) return true
        })
        data.forEach(e => {
            cmds += '^XA\n';
            cmds += '^PW600\n';
            cmds += '^LL600\n';

            cmds += '^FO0,50^A0N,30,30^FB600,1,0,C^FD ' + e.inventory_code + '^FS\n'; // Header teks di tengah

            cmds += '^FO30,150^BQN,2,8^FDQA,' + e.inventory_code + '^FS\n'; // QR Code diposisikan lebih jauh ke bawah

            cmds += '^FO0,120^GB610,1,1^FS\n'; // Garis horizontal setelah QR Code, lebih rendah dari QR Code

            cmds += '^FO250,160^A0N,25,25^FD SKU:^FS\n'; // Posisi SKU sejajar dengan QR Code
            cmds += '^FO255,190^A0N,30,30^FB300,2,2,L^FD ' + e.item.name + '^FS\n'; // Teks SKU otomatis wrap jika panjang

            cmds += '^FO250,270^A0N,25,25^FD Dimension:^FS\n'; // Posisi Dimension diturunkan
            cmds += '^FO250,300^A0N,30,30^FD ' + dataBall.multiplier + ' ' + dataBall.name + '^FS\n';

            cmds += '^FO250,350^A0N,25,25^FD Type:^FS\n';
            cmds += '^FO250,380^A0N,30,30^FD ' + brand.item_type.name + '^FS\n';

            cmds += '^FO30,500^A0N,20,20^FD Printed At:^FS\n'; // Baris pertama teks
            cmds += '^FO30,530^A0N,20,20^FD ' + formatPrintedAt() + '^FS\n'; // Baris kedua tanggal dan waktu

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
</script>