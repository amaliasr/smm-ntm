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
        <div class="card shadow-none" style="height: 600px">
            <div class="card-body p-0">
                <div class="row justify-content-between p-3 pb-0">
                    <div class="col-auto">
                        <p class="m-0 small-text"><b>Ball & Box Stock</b></p>
                        <p class="m-0 super-small-text text-grey-small"><b><span id="totalData">0</span> Data</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mt-3 small-text" placeholder="Cari Kode atau Brand" id="search_kode_brand" onkeyup="searching('search_kode_brand','textListBox','listDetailBox')" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
                    </div>
                </div>
                <!-- <div> -->
                <div class="border-bottom" style="max-height: 480px;overflow-x: hidden;overflow-y: auto;" id="listBallBoxes">
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-8 pt-2" id="fieldProcessAddNewSuratJalan">
    </div>
    <div class="col-12 pt-3">
        <div class="card shadow-none" style="height: 600px">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 small-text fw-bolder">Detail</p>
                    </div>
                    <div class="col-auto" id="searchSuratJalan">
                    </div>
                    <div class="col-12" id="tableSuratJalan">

                    </div>
                </div>
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
            machine_transfer: [],
            machine_transfer_detail_request: [],
            deletedId: {
                machine_transfer: [],
                machine_transfer_detail_request: [],
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
    })
    $('#modal').on('shown.bs.modal', function() {});
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var linkBefore = '<?= $linkBefore ?>';
    var id_menu = '<?= $id_menu ?>';
    var id_pack = 9
    var work_plan_product_id_clicked
    var alias_clicked
    var year_clicked
    var variableGantung = {
        document_number: '',
        destination: null,
        destination_name: '',
    }
    var addSuratJalanState = false
    var brandStock = {}
    var variableAdd = []
    var variableInsert = deepCopy(resetVariableInsert())
    var variableDelete = deepCopy(resetVariableInsert())
    var variableInsertSendOffline = deepCopy(resetVariableInsert())
    var unitBrandOption = {}
    $(document).ready(function() {
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
        addSuratJalanState = false
        var html = `
                <div class="card shadow-sm h-100" style="min-height: 500px !important">
                    <div class="card-body">
                        <div class="row h-100 justify-content-center d-flex align-items-center">
                            <div class="col-12 align-self-center text-center">
                                <img src="<?= base_url('assets/image/png/contract.png'); ?>" class="mb-3" style="width: 100px;"><br>
                                <button type="button" class="btn btn-sm btn-outline-brown" id="btnAddNewSuratJalan" onclick="templateAddNewSuratJalan()"><i class="fa fa-plus me-2"></i> Buat Surat Jalan</button>
                            </div>
                        </div>
                    </div>
                </div>
                `
        $('#fieldProcessAddNewSuratJalan').html(html)
        listBallBoxes()
    }

    function templateAddNewSuratJalan() {
        addSuratJalanState = true
        var html = `
                <div class="card shadow-sm h-100" style="min-height: 500px !important">
                    <div class="card-header text-center">
                        <p class="m-0 text-dark-grey fw-bold">Form Serah Terima FG Logistik</p>
                    </div>
                    <div class="card-body p-0" id="bodySuratJalan">
                    </div>
                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-outline-brown shadow-none btn-sm shadow-none" id="btnBatal" onclick="batalInsert()">Batal</button>
                        <button type="button" class="btn btn-brown shadow-none btn-sm shadow-none" id="btnSimpan" onclick="saveInsert()"><i class="fa fa-save me-2"></i>Simpan</button>
                    </div>
                </div>
                `
        $('#fieldProcessAddNewSuratJalan').html(html)
        bodySuratJalan()
        listBallBoxes()
    }

    function batalInsert() {
        addSuratJalanState = false
        variableAdd = []
        fieldProcessAddNewSuratJalan()
    }

    function createSJCode() {
        x = (deepCopy(dataEntry.machineTransferList).length) + 1
        // Mendapatkan tanggal saat ini
        const today = new Date(dataTemplate.workPlanMachine.date);
        const year = today.getFullYear(); // Tahun (4 digit)
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan (2 digit)
        const date = String(today.getDate()).padStart(2, '0'); // Tanggal (2 digit)

        // Membuat format angka 5 digit untuk x
        const xFormatted = String(x).padStart(3, '0');

        // Membuat kode final
        const code = `SJLOG${year}${month}${date}${xFormatted}`;
        // const code = `${variableGantung.item_alias}BX${defaultMachineLineBox.machine_line_label}${year}${month}${date}${xFormatted}`;

        return code;
    }

    function bodySuratJalan() {
        variableGantung.document_number = createSJCode()
        var html = `
                        <div class="row">
                            <div class="col-12 p-3 px-5">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <p class="m-0 small-text text-grey-small">Hari / Tanggal</p>
                                        <p class="m-0 small fw-bolder">${formatDateIndonesia(currentDate())}</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="m-0 small-text text-grey-small">Surat Jalan</p>
                                        <p class="m-0 small fw-bolder">${variableGantung.document_number}</p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="m-0 small-text text-grey-small">Destination</p>
                                        <p class="m-0 small fw-bolder">${variableGantung.destination_name}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="m-0">
                            </div>
                            <div class="col-12" id="bodySuratJalanTableKerangka">
                            </div>
                        </div>
                        `
        $('#bodySuratJalan').html(html)
        bodySuratJalanTableKerangka()
    }

    function bodySuratJalanTableKerangka() {
        if (variableAdd.length) {
            var html = `
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center bg-light p-2 small-text">Kode Item</th>
                                <th scope="col" class="text-center bg-light p-2 small-text">Brand</th>
                                <th scope="col" class="text-center bg-light p-2 small-text">Pita</th>`
            dataEntry.resultStockTemplate.forEach(ele => {
                html += `<th scope="col" class="text-center bg-light p-2 small-text" style="width: 50px">${ele.name}</th>`
            })
            html += `<th scope="col" class="text-center bg-light p-2 small-text"></th>
                            </tr>
                        </thead>
                        <tbody id="bodySuratJalanTableKerangkaBody">
                        </tbody>
                        <tfoot id="footerSuratJalanTableKerangka">
                        </tfoot>
                    </table>
                </div>
                <div class="col-12 p-3 px-5">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <p class="m-0 small-text fw-bolder">Notes</p>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control form-control-sm" rows="5" placeholder="Tuliskan Notes Disini" id="notes"></textarea>
                        </div>
                    </div>
                </div>
            </div>
                                    `
        } else {
            var html = emptyReturnTextOnly('Tidak ada data, Pilih Brand disebelah kanan untuk menambahkan')
        }
        $('#bodySuratJalanTableKerangka').html(html)
        bodySuratJalanTableKerangkaBody()
    }

    function bodySuratJalanTableKerangkaBody() {
        var html = ''
        var total = {}
        variableAdd.forEach(e => {
            if (e.stok_year == 'NO YEAR') {
                e.stok_year = ''
            }
            html += '<tr id="rowSuratJalan' + e.id + '' + e.stok_year + '">'
            html += '<td class="text-center small-text p-2 fw-bolder">' + e.code + '</td>'
            html += '<td class="small-text p-2">' + e.name + '</td>'
            html += '<td class="text-center small-text p-2">' + e.stok_year + '</td>'
            dataEntry.resultStockTemplate.forEach(ele => {
                var dataDetail = e.data.find((v, k) => {
                    return v.id_template == ele.id
                })
                var qty = (dataDetail ? dataDetail.qty : 0)
                if (total[ele.id] == undefined) {
                    total[ele.id] = qty
                } else {
                    total[ele.id] = (qty + total[ele.id])
                }
                var qtyShow = (dataDetail ? dataDetail.qty : '')
                html += '<td class="text-center small-text p-2">'
                if (dataDetail) {
                    html += '<input type="text" class="form-control form-control-sm text-center border-0 nominal small-text p-0 w-100" id="qtySuratJalan' + e.id + '' + e.stok_year_id + '' + ele.id + '" value="' + qtyShow + '" style="min-height:0px;background-color:transparent;" onkeyup="inputQTYSuratJalan(' + e.id + ',' + e.stok_year_id + ',' + ele.id + ',' + dataDetail.item_id + ',' + dataDetail.unit_id + ',' + dataDetail.unit_detail_id + ')" >'
                }
                html += '</td>'
            })
            html += '<td class="text-center small-text p-2 align-middle pointer" onclick="deleteRow(' + e.id + ',' + e.stok_year_id + ')"><i class="fa fa-times text-danger"></i></td>'
            html += '</tr>'
        });
        $('#bodySuratJalanTableKerangkaBody').html(html)
        footerSuratJalanTableKerangka(total)
    }

    function deleteRow(id, stok_year_id) {
        variableAdd = variableAdd.filter((v, k) => {
            if (v.id == id && v.stok_year_id == stok_year_id) {
                return false
            } else {
                return true
            }
        })
        refreshDataForm()
    }

    function inputQTYSuratJalan(id, stok_year_id, id_template, item_id, unit_id, unit_detail_id) {
        var unit_option = convertUnitOption(item_id, unit_detail_id)
        var qty = $('#qtySuratJalan' + id + '' + stok_year_id + '' + id_template).val()
        if (!qty) {
            qty = 0
        }
        variableAdd = variableAdd.map((v, k) => {
            if (v.id == id && v.stok_year_id == stok_year_id) {
                v.data = v.data.map((vv, kk) => {
                    if (vv.id_template == id_template) {
                        vv.qty = qty
                        vv.qty_detail = parseInt(qty) * parseInt(unit_option.multiplier)
                    }
                    return vv
                })
            }
            return v
        })
        // console.log(variableAdd)
        listBallBoxes()
        footerSuratJalanTableKerangka()
    }

    function footerSuratJalanTableKerangka(total) {
        if (!total) {
            total = {}
            dataEntry.resultStockTemplate.forEach(ele => {
                variableAdd.forEach(e => {
                    var dataDetail = e.data.find((v, k) => {
                        return v.id_template == ele.id
                    })
                    var qty = (dataDetail ? dataDetail.qty : 0)
                    if (total[ele.id] == undefined) {
                        total[ele.id] = parseInt(qty)
                    } else {
                        total[ele.id] = (parseInt(qty) + parseInt(total[ele.id]))
                    }
                })
            })
        }
        var html = ''
        html += '<tr>'
        html += '<th class="text-end small-text bg-light p-2" colspan="3">Total</th>'
        dataEntry.resultStockTemplate.forEach(ele => {
            if (!total[ele.id]) {
                total[ele.id] = 0
            }
            html += '<th class="text-center small-text bg-light p-2">' + total[ele.id] + '</th>'
        })
        html += '<th class="text-end small-text bg-light p-2"></th>'
        html += '</tr>'
        $('#footerSuratJalanTableKerangka').html(html)
    }

    function fieldButtonTemplate() {
        var html = ''
        html += `<div class="row justify-content-end">
                    <div class="col-auto pe-0">
                        <p class="m-0 super-small-text"><i>Last Updated</i></p>
                        <p class="m-0 super-small-text"><i>At <b id="timeRefresh">-</b></i></p>
                    </div>
                    <div class="col-auto" id="contentButtonTemplates">
                    </div>
                </div>`
        $('#fieldButtonTemplates').html(html)
        contentButtonTemplates()
    }

    function contentButtonTemplates() {
        var html = ''
        html += `
                        <button type="button" class="btn btn-outline-brown shadow-none btn-sm shadow-none" onclick="loadDataTemplate()"><i class="fa fa-refresh me-2"></i>Refresh</button>

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
                brandStock = {}
                showOverlay('hide')
                dataEntry = response.data
                dataEntry.resultStock.forEach(e => {
                    brandStock[e.id + '' + e.stok_year.id] = e
                });
                if (!variableGantung.destination) {
                    variableGantung.destination = dataEntry.machineTransferDestination[0].data[0].id
                    variableGantung.destination_name = dataEntry.machineTransferDestination[0].data[0].name
                }
                setUnitBrandOption()
                tableSuratJalan()
                listBallBoxes()
                if (addSuratJalanState) {
                    templateAddNewSuratJalan()
                } else {
                    fieldProcessAddNewSuratJalan()
                }
            }
        })
    }

    function tableSuratJalan() {
        var html = ''
        html += `
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-sm mt-3">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center p-2 small-text">Surat Jalan</th>
                                <th scope="col" class="text-center p-2 small-text">Created At</th>
                                <th scope="col" class="text-center p-2 small-text">Created By</th>
                                <th scope="col" class="text-center p-2 small-text">Destination</th>
                                `
        dataEntry.resultStockTemplate.forEach(e => {
            html += `<th scope="col" class="text-center p-2 small-text" style="width: 50px">${e.name}</th>`
        })
        html += `
                                <th scope="col" class="text-center p-2 small-text">Note</th>
                                <th scope="col" class="text-center p-2 small-text"></th>
                            </tr>
                        </thead>    
                        <tbody id="tableDetailSuratJalan">
                        </tbody>
                    </table>
                </div>
            </div>
        `
        $('#tableSuratJalan').html(html)
        listDetailSuratJalan()
    }

    function listDetailSuratJalan() {
        var html = '';
        dataEntry.machineTransferList.forEach((value, key) => {
            html += `
            <tr>
                <td class="text-center small-text p-2 fw-bolder pointer" onclick="getDetailSuratJalan('${value.id}')">${value.document_number}</td>
                <td class="text-center small-text p-2">${getDateStringWithTime(value.send_at)}</td>
                <td class="text-center small-text p-2">${shortenName(value.employee_sender.name,1)}</td>
                <td class="text-center small-text p-2">${value.warehouse.name}</td>
                `
            dataEntry.resultStockTemplate.forEach(ele => {
                var dataDetail = value.summaries.find((v, k) => {
                    return v.unit.id == ele.id
                })
                html += `<td class="text-center small-text p-2">${dataDetail ? dataDetail.qty_request : ''}</td>`
            })
            html += `
                <td class="text-center small-text p-2">${value.note}</td>
                <td class="text-center small-text p-2">
                    <div class="dropdown">
                        <button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none" id="dropdownMenuButton${value.id}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton${value.id}">
                           <a class="dropdown-item" onclick="getDetailSuratJalan('${value.id}')">
                            <i class="fa fa-th-list me-2"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </td>

            </tr>
            `
        });
        $('#tableDetailSuratJalan').html(html)
    }

    function getDetailSuratJalan(id) {
        var data = dataEntry.machineTransferList.find((value, key) => {
            return value.id == id
        })
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Surat Jalan</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 border-bottom p-4 pt-0">'
        // content
        html_body += '<div class="row">'
        html_body += '<div class="col-12 align-self-center text-center">'
        html_body += '<p class="m-0 small">Surat Jalan</p>'
        html_body += '<p class="m-0 h3 fw-bolder">' + data.document_number + '</p>'
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
        html_body += '<div class="col-12 mb-2">'
        html_body += '<p class="m-0 small-text">Detail Information</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Destination</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + data.warehouse.name + 'r</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Created At</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + getDateStringWithTime(data.send_at) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Created By</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">' + data.employee_sender.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 pe-0 mb-2">'
        html_body += '<p class="m-0 super-small-text text-grey-small">Total Product</p>'
        html_body += '<p class="m-0 super-small-text fw-bolder">'
        data.summaries.forEach((value, key) => {
            html_body += '<span class="">' + value.qty_request + ' ' + value.unit.name + '</span>'
            if (key != data.summaries.length - 1) {
                html_body += '<span class="">, </span>'
            }
        });
        html_body += '</p>'
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
        html_body += '<p class="m-0 super-small-text text-grey-small">Detail Product <span>(' + data.products.length + ')</span></p>'
        html_body += '</div>'
        html_body += '</div>'
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
        html_body += timelineSuratJalan()
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
        if (data.receive_at == null) {
            html_footer += '<button type="button" class="btn btn-outline-danger btn-sm" onclick="hapusSuratJalan(' + "'" + id + "'" + ')">Hapus Surat Jalan</button>'
        }
        html_footer += '</div>'
        html_footer += '<div class="col-auto">'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '</div>'
        html_footer += '</div>'
        $('#modalFooter').html(html_footer)
        fieldIfListBoxesReview(data)
    }

    function fieldIfListBoxesReview(data) {
        var html = ''
        data.products.forEach(e => {
            html += `
            <div class="card shadow-none mb-2 cardBallEdit">
                <div class="card-body py-3">
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <p class="m-0 super-small-text fw-bold text-grey lh-1">${e.product.code}</p>
                            <p class="m-0 small-text fw-bolder text-dark-grey lh-1">${e.product.name}</p>
                        </div>`
            dataEntry.resultStockTemplate.forEach(ele => {
                var dataDetail = e.details.find((v, k) => {
                    return v.unit_id == ele.id
                })
                html += '<div class="col-3 align-self-end text-end">'
                if (dataDetail) {
                    dataDetail.machine_transfer_detail_requests.forEach(element => {
                        html += '<p class="m-0 small-text"><b>' + element.qty + '</b> ' + ele.name + '</p>'
                    });
                }
                html += '</div>'
            })
            html += `</div>
                </div>
            </div>
            `
        });
        $('#fieldIfListBoxesReview').html(html)
    }

    function hapusSuratJalan(id) {
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

    function timelineSuratJalan() {
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

    function setUnitBrandOption() {
        unitBrandOption = {}
        dataEntry.productMaterial.forEach(e => {
            unitBrandOption[e.item_id] = e.unit_option
        });
    }

    function convertUnitOption(item_id, unit_id) {
        var data = unitBrandOption[item_id].find((v, k) => {
            return v.id == unit_id
        })
        return data
    }

    function listBallBoxes() {
        var html = '';
        var total_all = 0;
        var total_offline = 0;
        var data = deepCopy(dataEntry.resultStock);

        if (data.length) {
            data.forEach(e => {
                var checkVariableAdd = variableAdd.find(item => item.id == e.id && item.stok_year_id == e.stok_year.id)
                var pita = ''
                if (e.stok_year.id) {
                    pita = 'Pita ' + e.stok_year.name
                }
                html += `
            <div class="card shadow-none border-end-0 border-start-0 border-top-0 card-hoper listDetailBox" 
                style="border-radius: 0px; cursor: context-menu !important;" id="listDetailBox${e.id}${e.stok_year.id}">
                <div class="card-body py-3">
                    <div class="row">
                        <!-- Main Column -->
                        <div class="col-6 pe-0">
                            <p class="m-0 super-small-text text-grey textListBox" data-id="${e.id}${e.stok_year.id}">${e.code}</p>
                            <p class="m-0 small fw-bolder lh-1 textListBox" data-id="${e.id}${e.stok_year.id}">${e.name}</p>
                            <p class="m-0 super-small-text text-danger textListBox" data-id="${e.id}${e.stok_year.id}">${pita}</p>
                        </div>
            `;

                // Sub Columns
                dataEntry.resultStockTemplate.forEach(ele => {
                    var checkDetailVariableAdd = (checkVariableAdd ? checkVariableAdd.data.find(item => item.id_template == ele.id) : '')
                    var qty = e.data.find(e => e.unit.id == ele.id)
                    var itemDetail = qty ? qty : ''
                    var qtyFinal = 0
                    var qtyDetail = 0
                    var iconTemplates = ''
                    var qtyDetailSelisih = undefined
                    if (qty) {
                        qtyFinal = qty.qty
                        qtyDetail = qty.qty_detail
                        // qtyDetailSelisih = qtyFinal * convertUnitOption(qty.item_id, qty.unit_detail.id).multiplier
                        qtyDetailSelisih = 0
                    } else {
                        iconTemplates = 'text-grey'
                        qtyFinal = 0
                    }
                    var textVariation = ''
                    var qtySisa = qtyFinal
                    if (checkDetailVariableAdd) {
                        textVariation = 'text-decoration-line-through text-danger opacity-50'
                        qtySisa = (qtyFinal - checkDetailVariableAdd.qty)
                        if (qtyDetail != checkDetailVariableAdd.qty_detail) {
                            qtyDetailSelisih = (qtyDetail - checkDetailVariableAdd.qty_detail)
                        }
                    }
                    html += `
                        <div class="col pe-0">
                            <p class="m-0 super-small-text text-grey lh-1">${ele.name}</p>
                            <div class="row">
                                <div class="col-4 align-self-center ${iconTemplates}">
                                    ${iconTemplate(ele.name, 10, 10)}
                                </div>
                                <div class="col-8 ps-0 align-self-center ${iconTemplates}">
                                    <span class="m-0 small fw-bolder ${textVariation}">${qtyFinal}</span>`
                    if (checkDetailVariableAdd) {
                        html += `<span class="m-0 small fw-bolder ms-1">${qtySisa}</span>`
                    }
                    html += `</div>`
                    if (addSuratJalanState && qtyFinal && qtySisa) {
                        html += buttonDropAll(e, ele, qtyFinal, itemDetail)
                    } else {
                        if (qtyDetailSelisih) {
                            html += buttonDropAll(e, ele, qtyFinal, itemDetail)
                        }
                    }
                    html += `
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

    function buttonDropAll(e, ele, qtyFinal, itemDetail) {
        var html = ''
        html += `
                <div class="col-12 align-self-start d-flex align-items-baseline">
                    <span class="badge bg-success shadow-none text-white pointer" style="font-size: 6px" onclick="addToSuratJalan(${e.id},${ele.id},${e.stok_year.id},${qtyFinal},'${itemDetail.item_id}','${itemDetail.unit.id}','${itemDetail.unit_detail.id}','${itemDetail.qty_detail}')">Drop All <i class="fa fa-chevron-right ms-1"></i></span>
                </div>
                `
        return html
    }

    function addToSuratJalan(id_brand, id_template, id_year, qty, item_id, unit_id, unit_detail_id, qty_detail) {
        // cek apakah di variableAdd ada brandnya
        var check = variableAdd.find(e => e.id == id_brand && e.stok_year_id == id_year)
        var templateDetail = {
            id: id_brand,
            id_template: id_template,
            qty: qty,
            qty_detail: qty_detail,
            item_id: item_id,
            unit_id: unit_id,
            unit_detail_id: unit_detail_id
        }
        if (check) {
            var checkTemplate = check.data.find(e => e.id_template == id_template)
            if (checkTemplate) {
                checkTemplate.qty = qty
                checkTemplate.qty_detail = qty_detail
            } else {
                check.data.push(templateDetail)
            }
        } else {
            variableAdd.push({
                id: id_brand,
                code: brandStock[id_brand + '' + id_year].code,
                name: brandStock[id_brand + '' + id_year].name,
                stok_year: brandStock[id_brand + '' + id_year].stok_year.name,
                stok_year_id: brandStock[id_brand + '' + id_year].stok_year.id,
                data: [templateDetail]
            })
        }
        refreshDataForm()
    }

    function refreshDataForm() {
        listBallBoxes()
        bodySuratJalanTableKerangka()
    }


    function totalData(total_all, total_offline) {
        $('#totalData').html(total_all)
        if (total_offline) {
            $('#totalDataOfflineBox').html('( ' + total_offline + ' Data still Offline )')
        }
    }

    function saveInsert() {
        variableInsert = deepCopy(resetVariableInsert())
        var time = currentDateTime()
        var id = createCodeId(0)
        variableInsert.machine_transfer.push({
            id: id,
            machine_id: dataTemplate.workPlanMachine.machine.id,
            gudang_id: dataEntry.machineTransferDestination[0].data[0].id,
            send_at: time,
            employee_id_sender: user_id,
            action: 'OUT',
            tag: 'TRANSFER FINISH GOOD',
            note: $('#notes').val(),
            created_at: time,
            updated_at: time,
            work_plan_id: dataTemplate.workPlanMachine.work_plan_id,
            shift_id: dataTemplate.workPlanMachine.shift_id,
            document_number: variableGantung.document_number,
            work_plan_machine_id: dataTemplate.workPlanMachineId
        })
        variableAdd.forEach(e => {
            e.data.forEach((value, key) => {
                variableInsert.machine_transfer_detail_request.push({
                    id: createCodeId(key),
                    machine_transfer_id: id,
                    item_id: value.item_id,
                    stok_year_id: e.stok_year_id,
                    unit_id: value.unit_id,
                    qty: value.qty,
                    unit_id_detail: value.unit_detail_id,
                    qty_detail: value.qty_detail,
                    created_at: time,
                    updated_at: time,
                })
            });
        });
        // console.log(variableInsert)
        sendAllVariableInsert('add')
    }

    function sendAllVariableInsert(status) {
        var data = deepCopy(variableInsert)
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setMachineTransfer'); ?>'
        if (data.machine_transfer.length || data.machine_transfer_detail_request.length) {
            kelolaDataSaveAuto(data, type, url, button)
        }
    }

    function kelolaDataSaveAuto(data, type, url, button) {
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
            },
            beforeSend: function() {
                $(button).prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...')
            },
            success: function(response) {
                variableAdd = []
                fieldProcessAddNewSuratJalan()
                loadData()
            }
        });
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