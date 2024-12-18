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
    <div class="col-4 pt-2">
        <div class="card shadow-none" style="height: 700px">
            <div class="card-body p-0">
                <div class="row justify-content-between p-3 pb-0">
                    <div class="col-auto">
                        <p class="m-0 small-text"><b>Ball & Box Stock</b></p>
                        <p class="m-0 super-small-text text-grey-small"><b><span id="totalData">0</span> Data</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mt-3 small-text" placeholder="Cari Kode atau Brand" id="search_kode_brand" onclick="offBlurOff(),this.focus()" onkeyup="searching('search_kode_brand','textListBox','listDetailBox')" onblur="onBlurOn()" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
                    </div>
                </div>
                <!-- <div> -->
                <div class="border-bottom" style="max-height: 560px;overflow-x: hidden;overflow-y: auto;" id="listBallBoxes">
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-8 pt-2" id="fieldProcessAddNewSuratJalan">
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

    function iconBoxFill(height, width) {
        return `<svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
        </svg>`
    }

    function iconBallFill(height, width) {
        return `<svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" fill="currentColor" class="bi bi-view-stacked" viewBox="0 0 16 16">
        <path d="M3 0h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm0 8h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
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
        fieldProcessAddNewSuratJalan()
        fieldButtonTemplate()
    })

    function iconTemplate(name, width, height) {
        if (name == 'Box') {
            return iconBoxFill(height, width)
        } else {
            return iconBallFill(height, width)
        }
    }

    function fieldProcessAddNewSuratJalan() {
        var html = `
                <div class="card shadow-sm h-100" style="min-height: 700px !important">
                    <div class="card-body">
                        <div class="row h-100 justify-content-center d-flex align-items-center">
                            <div class="col-12 align-self-center text-center">
                                <img src="<?= base_url('assets/image/png/contract.png'); ?>" class="mb-3" style="width: 100px;"><br>
                                <button type="button" class="btn btn-sm btn-outline-brown" id="btnAddNewSuratJalan" onclick="addNewSuratJalan()"><i class="fa fa-plus me-2"></i> Buat Surat Jalan</button>
                            </div>
                        </div>
                    </div>
                </div>
                `
        $('#fieldProcessAddNewSuratJalan').html(html)
    }

    function addNewSuratJalan() {
        var html = ''
        $('#fieldProcessAddNewSuratJalan').html(html)
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

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductionFinishGoodTransfer'); ?>"
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
                $('#listBallBoxes').html(LoadingReturn('Loading...'))
            },
            success: function(response) {
                showOverlay('hide')
                dataEntry = response.data
                listBallBoxes()
            }
        })
    }

    function listBallBoxes() {
        var html = '';
        var total_all = 0;
        var total_offline = 0;
        var data = deepCopy(dataEntry.resultStock);

        if (data.length) {
            data.forEach(e => {
                var pita = ''
                if (e.stok_year.id) {
                    pita = 'Pita ' + e.stok_year.name
                }
                html += `
            <div class="card shadow-none border-end-0 border-start-0 border-top-0 card-hoper" 
                style="border-radius: 0px; cursor: context-menu !important;" id="listDetailBox">
                <div class="card-body py-3">
                    <div class="row">
                        <!-- Main Column -->
                        <div class="col-6 pe-0">
                            <p class="m-0 super-small-text text-grey">${e.code}</p>
                            <p class="m-0 small fw-bolder lh-1">${e.name}</p>
                            <p class="m-0 super-small-text text-danger">${pita}</p>
                        </div>
            `;

                // Sub Columns
                dataEntry.resultStockTemplate.forEach(ele => {
                    html += `
                        <div class="col pe-0">
                            <p class="m-0 super-small-text text-grey">${ele.name}</p>
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    ${iconTemplate(ele.name, 10, 10)}
                                </div>
                                <div class="col-8 ps-0 align-self-center">
                                    <p class="m-0 small fw-bolder">100</p>
                                </div>
                            </div>
                        </div>
                `;
                });

                html += `
                    </div>
                </div>
            </div>
            `;
                total_all++;
            });
        } else {
            html += emptyReturnTextOnly('Tidak Ada Data yang Tersedia');
        }

        // Render HTML and update total
        $('#listBallBoxes').html(html);
        totalData(total_all, total_offline);
    }


    function totalData(total_all, total_offline) {
        $('#totalData').html(total_all)
        if (total_offline) {
            $('#totalDataOfflineBox').html('( ' + total_offline + ' Data still Offline )')
        }
    }
</script>