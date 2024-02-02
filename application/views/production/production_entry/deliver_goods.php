<style type="text/css">
    .progress-bulat {
        width: 80px;
        height: 80px;
        background: none;
        position: relative;
    }

    .progress-bulat::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 10px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress-bulat>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress-bulat .progress-left {
        left: 0;
    }

    .progress-bulat .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 10px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress-bulat .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress-bulat .progress-right {
        right: 0;
    }

    .progress-bulat .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress-bulat .progress-value {
        position: absolute;
        top: 0;
        left: 0;
    }
</style>
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

    .bg-outline-primary {
        border: 1px solid rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
        border-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
    }

    .bg-light-warning {
        background-color: #fdf5e5;
        border-color: #f4a100;
    }

    .timeline.timeline-sm .timeline-item .timeline-item-content {
        padding-bottom: 3rem;
    }

    .form-invisible-line {
        padding: 0px;
        font-size: 2rem;
        font-weight: bolder;
        text-align: right;
    }

    .table-hijau {
        background-color: #e5f6f0 !important;
    }

    .form-select,
    .dataTable-selector {
        text-align: right !important;
        background-position: left 1.125rem center !important;
        padding-right: 0px;
        font-weight: bolder;
        font-size: large;
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
</style>
<script src="<?= base_url(); ?>assets/JSPrintManager.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<div class="row">
    <div class="col-6 pt-2">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row justify-content-between p-3">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Worker Progress</b></p>
                        <p class="m-0 super-small-text text-grey"><b><span id="totalWorker">0</span> Persons</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <div class="row">
                            <div class="col-auto pe-2">
                                <button type="button" class="btn btn-sm btn-outline-dark shadow-none small-text" onclick="triggerQR()" id="btnQR">CAMERA<i class="fa fa-camera ms-2 text-green"></i></button>
                            </div>
                            <div class="col-auto ps-0 pe-0">
                                <button type="button" class="btn btn-sm btn-outline-dark shadow-none small-text" onclick="openModalScanner()">SCANNER<i class="fa fa-qrcode ms-2 text-green"></i></button>
                            </div>
                            <div class="col-auto ps-2 align-self-center">
                                <?php if ($link == 'deliver_goods') { ?>
                                    <div class="btn-group float-end">
                                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                            Option
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li>
                                                <form class="px-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkFastMode" onclick="fastModeOn()">
                                                        <label class="form-check-label small" for="checkFastMode">
                                                            Fast Mode
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkAuto500" onclick="auto500On()" checked>
                                                        <label class="form-check-label small" for="checkAuto500">
                                                            Auto 500
                                                        </label>
                                                    </div>
                                                    <hr>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkOfflineMode" onclick="offlineModeOn()">
                                                        <label class="form-check-label small" for="checkOfflineMode">
                                                            Offline Mode
                                                        </label>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkFastMode" onclick="fastModeOn()">
                                        <label class="form-check-label small" for="checkFastMode">
                                            Fast Mode
                                        </label>
                                    </div> -->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mt-3" placeholder="Search" id="search_nama" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
                    </div>
                </div>
                <!-- <div> -->
                <div style="height: 500px;overflow-x: hidden;overflow-y: auto;" id="workerProgress">
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-6 pt-2">
        <div class="card shadow-none h-100">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Detail Worker</b></p>
                    </div>
                    <div class="col-auto text-end">
                    </div>
                </div>
                <div class="row pt-4" id="detailWorker">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-top" style="z-index: 999999999;">
    <div class="bg-danger text-white small p-3 text-center m-1 rounded-pill top-0 start-100" style="width: 350px;" id="offlineModePane" hidden>
        <i class="fa fa-wifi me-2"></i>Offline Mode<span><i id="textAutoSave"></i></span><span id="buttonSaveOfflineMode" hidden><span id="" class="ms-2 btn btn-outline-dark text-white p-2" onclick="loadSimpanOfflineMode()"><i class="fa fa-eye me-1"></i>View</span><button id="btnSimpanOffline" class="ms-2 btn btn-dark p-2" onclick="simpanOfflineMode()"><i class="fa fa-save me-1"></i>Send All</button></span>
    </div>
</div>
<div aria-live="polite" aria-atomic="true" class="position-relative">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <div class="toast-container position-absolute bottom-0 end-0 p-3" style="z-index: 9999999999999999">

        <!-- Then put toasts within -->
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
            <div class="toast-header">
                <strong class="me-auto">Berhasil</strong>
                <small class="text-muted">Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Refresh Data Berhasil !
            </div>
        </div>
    </div>
</div>
<div class="qrcode" id="qrcode" style="text-align:center;display:none;" class="mt-3 mx-auto d-block w-100"></div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
<script src="<?= base_url(); ?>assets/html5-qrcode.min.js"></script>
<script>
    function measureSpeed() {
        var startTime, endTime;
        var download = new Image();
        download.onload = function() {
            endTime = (new Date()).getTime();
            var duration = (endTime - startTime) / 1000; // in seconds
            var speed = (2.5 / duration).toFixed(2); // Assuming 2.5 MB file size

            // Tampilkan kecepatan koneksi
            $('#speed').text(speed + ' Mbps');
        }

        // Mulai waktu pengukuran
        startTime = (new Date()).getTime();
        var cacheBuster = '?t=' + startTime;
        download.src = 'https://example.com/test-file.jpg' + cacheBuster;
    }
    // Fungsi yang akan dipanggil ketika koneksi terputus
    function handleConnectionLost() {
        console.log("Koneksi terputus. Melakukan sesuatu...");
        // noConnection()
        // Panggil fungsi atau lakukan sesuatu yang diinginkan ketika koneksi terputus di sini
    }

    // Memeriksa status koneksi secara teratur
    function checkConnectionStatus() {
        if (navigator.onLine) {
            console.log("Koneksi aktif");
        } else {
            handleConnectionLost();
        }
    }

    // Menambahkan event listener untuk event offline
    window.addEventListener('offline', handleConnectionLost);

    // Memeriksa status koneksi setiap 60 detik (sesuaikan sesuai kebutuhan)

    JSPM.JSPrintManager.auto_reconnect = true;
    JSPM.JSPrintManager.start();

    function createCodeId(worker_id = '') {
        var date = worker_id + '' + (new Date).getTime()
        // var day = date.getDate();
        // var month = date.getMonth() + 1;
        // var year = date.getFullYear();
        // var jam = date.getHours();
        // var menit = date.getMinutes();
        // var detik = date.getSeconds();
        // if (detik < 10) {
        //     detik = "0" + detik;
        // }
        // if (menit < 10) {
        //     menit = "0" + menit;
        // }
        // if (jam < 10) {
        //     jam = "0" + jam;
        // }
        // if (day < 10) {
        //     day = "0" + day;
        // }
        // if (month < 10) {
        //     month = "0" + month;
        // }
        // var date = year + "" + month + "" + day + '' + jam + "" + menit + "" + detik;
        return date;
    }

    function replaceNullWithZero(variable) {
        return variable !== null ? variable : 0;
    }

    function findStatusEdit(id, menu) {
        var data = dataDetailDelivery.find((v, k) => {
            if (v.result_product_person_id == id) return true
        })
        // console.log(data)
        var status
        var nextStatus
        var qty = {}
        var worker_id = null
        if (data) {
            worker_id = data.worker_id
            qty = deepCopy(data[menu.toLowerCase()])
            status = menu
            nextStatus = menu
        }
        return {
            id: id,
            status: status,
            nextStatus: nextStatus,
            qty: qty,
            worker_id: worker_id
        }
    }

    function findStatus(id = null) {
        var data = dataDetailDelivery.find((v, k) => {
            if (v.result_product_person_id == id) return true
        })
        // console.log(data)
        var status
        var nextStatus
        var qty = {}
        var worker_id = null
        if (data) {
            worker_id = data.worker_id
            if (data.delivery.is_process && !data.sortir.is_process && !data.fillup.is_process && !data.complete.is_process) {
                status = 'DELIVERY'
                nextStatus = 'SORTIR'
                qty = {
                    waste: data.delivery.waste,
                    good: data.delivery.good,
                }
            } else if (data.delivery.is_process && data.sortir.is_process && !data.fillup.is_process && !data.complete.is_process) {
                status = 'SORTIR'
                nextStatus = 'FILLUP'
                qty = {
                    reject: data.sortir.reject,
                    good: data.sortir.good,
                }
            } else if (data.delivery.is_process && data.sortir.is_process && data.fillup.is_process && !data.complete.is_process) {
                status = 'FILLUP'
                nextStatus = 'COMPLETE'
                qty = {
                    waste: data.fillup.waste,
                    good: data.fillup.good,
                }

            } else if (data.delivery.is_process && data.sortir.is_process && data.fillup.is_process && data.complete.is_process) {
                status = 'COMPLETE'
                nextStatus = 'DONE'
                qty = {
                    waste: data.complete.waste,
                    reject: data.complete.reject,

                    good: data.complete.good,
                }
            } else if (data.delivery.is_process && data.sortir.is_process && !data.fillup.is_process && data.complete.is_process) {
                status = 'COMPLETE'
                nextStatus = 'DONE'
                qty = {
                    waste: data.complete.waste,
                    reject: data.complete.reject,

                    good: data.complete.good,
                }
            } else {
                status = 'PROCESS'
                nextStatus = 'DELIVERY'
                qty = {
                    good: 0
                }
            }
        } else {
            status = 'NOT CREATED'
            nextStatus = 'DELIVERY'
            qty = {
                good: 0
            }
        }
        return {
            id: id,
            status: status,
            nextStatus: nextStatus,
            qty: qty,
            worker_id: worker_id
        }
    }

    function totalSetoran(worker_id) {
        var dataWorker = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        })
        var total = 0
        if (dataWorker) {
            if (dataWorker.data.length) {
                dataWorker.data.forEach(e => {
                    total = total + parseFloat(findStatus(e.result_product_person_id).qty.good)
                });
            }
        }
        var dataOffline = deepCopy(variableSaveOffline.resultProductPerson)
        if (dataOffline.length) {
            var dataWorker = dataOffline.filter((v, k) => {
                if (v.employee_id == worker_id) return true
            })
            if (dataWorker.length) {
                dataWorker.forEach(e => {
                    total = total + parseFloat(e.qty_good_deliv)
                });
            }
        }
        return total
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function sortArrayOfObjectsDescending(arr, prop) {
        var data = deepCopy(arr)
        return data.sort((a, b) => (b[prop] > a[prop]) ? 1 : ((a[prop] > b[prop]) ? -1 : 0));
    }

    function findHighestNumber(data) {
        let highestNumber = 0;

        for (let i = 0; i < data.length; i++) {
            if (data[i].number > highestNumber) {
                highestNumber = data[i].number;
            }
        }

        return highestNumber;
    }

    function findNumberofSetoran(worker_id) {
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        })
        var numSetoran = 1
        if (data.data.length) {
            numSetoran = data.data[parseInt(data.data.length) - 1].number
        } else {
            numSetoran = 0
        }
        if (variableSaveOffline.resultProductPerson.length) {
            var dataOffline = variableSaveOffline.resultProductPerson.filter((v, k) => {
                if (v.employee_id == worker_id) return true
            })
            if (dataOffline.length) {
                numSetoran = findHighestNumber(dataOffline)
            }
        }

        return numSetoran
    }

    function jumlahkanQtyBerdasarkanItemId(data) {
        const hasilJumlah = {};

        data.forEach(item => {
            const itemId = item.item.id;

            if (hasilJumlah[itemId]) {
                hasilJumlah[itemId].qty += item.qty;
            } else {
                hasilJumlah[itemId] = {
                    item: item.item,
                    unit: item.unit,
                    qty: item.qty
                };
            }
        });

        return Object.values(hasilJumlah);
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var label = '<?= $label ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var workPlanMachineId = '<?= $workPlanMachineId ?>'
    var link = '<?= $link ?>'
    var dataEntry
    var itemIdSelected = []
    var defaultleSetoran = 10
    var dataDetailDelivery = []
    var dataMaterial = []
    var newSetoranBar = 1
    var dataSaveSetoran = {}
    var dataSaveMaterial = {
        remainingMaterialPerson: [],
        deletedId: []
    }
    var workerIdClicked
    var setoranIdClicked
    var materialIdClicked
    var cameraOn
    var JustOnCamAfterAdd = false
    var scanned = false
    var fastMode = false
    var auto500 = true
    var offlineMode = false
    var variableSaveOffline = {
        resultProductPerson: [],
        deletedId: []
    }
    var idEmployeeGiling = [2401069101,
        2401039807,
        2206149101,
        2210037510,
        2401069601,
        2301187705,
        2301208105,
        2401058307,
        2301238901,
        2301248904,
        2301258508,
        2401069712,
        2301258610,
        2301259612,
        2301268609,
        2301278811,
        2401089301,
        2401088809,
        2401110003,
        2401110104,
        2301279004,
        2401110209,
        2305050204,
        2401058703,
        2401039110,
        2302210211,
        2305058201,
        2209138307,
        2401109802,
        2401100501,
        2401129401,
        2401199810,
        2401128703,
        2401129802,
        2401138306,
        2401160411,
        2401120209,
        2401209705,
        2401259208,
        2302149205,
        2302158410,
        2302159003,
        2401058506,
        2312140304,
        2302159205,
        2401120207,
        2401067506,
        2401200506,
        2302159502,
        2302159712,
        2302159907,
        2302160306,
        2401160304,
        2312129906,
        2312129208,
        2401220604,
        2312150108,
        2401260504,
        2401260308,
        2210037710,
        2401279502,
        2401279503,
        2401298603,
        2302168101,
        2302168309,
        2302168409,
        2302208306,
        2206248809,
        2206249706,
        2208298401,
        2208298909,
        2211308810,
        2212088502,
        2212089108,
        2212158808,
        2212298312,
        2208308709,
        2302208910,
        2401279309,
        2401279406,
        2401278708,
        2302210304,
        2302237704,
        2302218308,
        2302218405,
        2302218505,
        2302218507,
        2302219002,
        2302219207,
        2302219710,
        2302237106,
        2401270606,
        2302237710,
        2302238906,
        2302239206,
        2302239804,
        2302249009,
        2302277907,
        2302278002,
        2302278204,
        2302278511,
        2311227706,
        2302278601,
        2302279107,
        2302288002,
        2311247505,
        2401230005,
        2401230308,
        2401230505,
        2401230204,
        2401230607,
        2302288008,
        2303018003,
        2303048212,
        2104218011,
        2209088304,
        2312018506,
        2401230404,
        2304049108,
        2208318706,
        2208319408,
        2209028205,
        2209028505,
        2304278109,
        2304278205,
        2303049005,
        2303078708,
        2303088601,
        2303089006,
        2303097701,
        2303097805,
        2303099407,
        2303100510,
        2303107609,
        2303108112,
        2303148009,
        2303148609,
        2303158903,
        2303187811,
        2303208801,
        2303237806,
        2303308604,
        2303308802,
        2308300303,
        2309110211,
        2309190302,
        2309190410,
        2309198401,
        2309199301,
        2209158101,
        2209158803,
        2309229401,
        2309250303,
        2208098203,
        2304278905,
        2209079103,
        2309078509,
        2309250406,
        2309270409,
        2309270418,
        2309278403,
        2310029101,
        2310030203,
        2310040407,
        2310049310,
        2310058910,
        2310100202,
        2310100505,
        2310120007,
        2310128409,
        2301277507,
        2302278206,
        2303038409,
        2310129508,
        2012157806,
        2012159012,
        2104058605,
        2104059007,
        2104128903,
        2104207111,
        2104208307,
        2104208401,
        2104218801,
        2104219104,
        2311257702,
        2311279606,
        2012158307,
        2012217812,
        2311308501,
        2311309504,
        2311309812,
        2304279012,
        2305240211,
        2307317907,
        2307318301,
        2307319106,
        2307319908,
        2305298406,
        2308318312,
        2308319807,
        2312010404,
        2203148912,
        2203158709,
        2203158907,
        2203159103,
        2010108210,
        2312279402,
        2312289112,
        2105058311,
        2105058407,
        2111058909,
        2112118808,
        2112119011,
        2112208903,
        2203188506,
        2203188509,
        2203198202,
        2203198512,
        2203198606,
        2103298603,
        2103308701,
        2206088609,
        2206089309,
        2012158910,
        2205218001,
        2205218103,
        2205218601,
        2205218703,
        2206089703,
        2309018601,
        2309040405,
        2309048505,
        1604256706,
        2206097606,
        2206098306,
        2206139206,
        2206139511,
        2206147901,
        2206148501,
        2206307803,
        2206309811,
        2207028404,
        2207067812,
        2207068303,
        2207078903,
        2207089004,
        2207128405,
        2207129310,
        2205219008,
        2205219303,
        2205239001,
        2205239002,
        2205278603,
        2309049709,
        2205278703,
        2205279001,
        2312198804,
        2206028407,
        2206029104,
        2206047410,
        2206048606,
        2206108603,
        2206108909,
        2209078409,
        2302029312,
        2309180109,
        2208278708,
        2208298105,
        2208298910,
        2208299108,
        2208308705,
        2208308909,
        2209028808,
        2209057808,
        2209058706,
        2209070305,
        2209078410,
        2209098202,
        2207138405,
        2207139108,
        2207158207,
        2207208312,
        2207228311,
        2207229012,
        2207238603,
        2310129606,
        2207268303,
        2207268406,
        2208018104,
        2208018307,
        2208018501,
        2208018604,
        2208119301,
        2208228901,
        2208229202,
        2208258904,
        2208259007,
        2208269503,
        2210208307,
        2210268703,
        2211027411,
        2211027608,
        2211028910,
        2211029011,
        2211047108,
        2211058602,
        2211058611,
        2211107710,
        2211108304,
        2211108505,
        2211108607,
        2211188306,
        2211188505,
        2211188805,
        2211189012,
        2211217706,
        2211218409,
        2301020201,
        2301317202,
        2301317204,
        2301317612,
        2301317704,
        2301318712,
        2301318908,
        2301319203,
        2301319206,
        2302018307,
        2302089806,
        2302099103,
        2302136401,
        2302138107,
        2302148106,
        2302148403,
        2302148408,
        2308308505,
        2308318004,
        2207088008,
        2207088307,
        2304179501,
        2304287709,
        2304289106,
        2305027803,
        2305028102,
        2305028206,
        2305028211,
        2305037212,
        2305037802,
        2305038005,
        2305038405,
        2305038612,
        2305038701,
        2305050412,
        2305057807,
        2305058012,
        2305058108,
        2305058207,
        2305059212,
        2305080508,
        2305088205,
        2305088604,
        2305089609,
        2305089901,
        2307189807,
        2307218207,
        2307218403,
        2307260103,
        2307278908,
        2311048510,
        2311078709,
        2311218111,
        2311218805,
        2311227606,
        2311228101,
        2311228411,
        2311228506,
        2311228510,
        2311228701,
        2311238702,
        2311238710,
        2311238712,
        2311239005,
        2311247908,
        2311248802,
        2311249306,
        2311249406,
        2311249808,
        2311250410,
        2311257603,
        2312309202,
        2306138205,
        2311238205,
        2302169405,
        2312209012,
        2312010406,
        2312010412,
        2312049211,
        2312069807,
        2311257906,
        1910079108,
        2312278803,
        2312298407,
        2309050304,
        2309050507,
        2309058911,
        2309079803,
        2309088109,
        2309089807,
        1509287303,
        2012158002,
        2104218605,
        2104308519,
        2112209104,
        2112209701,
        2203148211,
        2203198908,
        2203258212,
        2203258607,
        2203297904,
        2203298007,
        2203298104,
        2203298112,
        2205198406,
        2312139310,
        2212088008,
        2205198805,
        2205217507,
        2207158303,
        2207208502,
        2209018510,
        2209018609,
        2209018710,
        2209089212,
        2210037812,
        2210037909,
        2210038011,
        2210038103,
        2210038111,
        2210038208,
        2210038312,
        2210068812,
        2210109503,
        2210118207,
        2210128208,
        2210128607,
        2210138610,
        2210147805,
        2210148812,
        2210198312,
        2210198610,
        2210199308,
        2211238903,
        2211258309,
        1909108402,
        1912137303,
        2301279709,
        2301287305,
        2302148812,
        2302149010,
        2302149202,
        2008138605,
        2008198307,
        2212019007,
        2212028912,
        2212029101,
        2212029203,
        2212068701,
        2212080412,
        2212168804,
        2212199106,
        2212218508,
        2301027105,
        2301027407,
        2301027805,
        2301029305,
        2301038110,
        2301038401,
        2301038402,
        2309047808,
        2311218001,
        2311219002,
        2311219004,
        2301128412,
        2301138903,
        2301178202,
        2301178407,
        2301178703,
        2302149510,
        2302158211,
        2304147609,
        2304148502,
        2304178303,
        2304179106,
        2304277108,
        2304277510,
        2304277810,
        2304278101,
        2305238907,
        2305239104,
        2305249803,
        2305249807,
        2305249809,
        2305258008,
        2305258209,
        2305268211,
        2305268501,
        2306050206,
        2306059005,
        2306060210,
        2306088911,
        2306138701,
        2306198611,
        2306207705,
        2306209105,
        2306228212,
        2308148004,
        2308157503,
        2308237809,
        2308238909,
        2308239008,
        2308239811,
        2308248208,
        2308257806,
        2308300104,
        2209178206,
        2209178511,
        2209190424,
        2209198808,
        2209207810,
        2209208507,
        2209218108,
        2209278108,
        2209297505,
        2209297807,
        2309199703,
        2309220104,
        2309220401,
        2309228008,
        2308318805,
        2310179104,
        2209138304,
        2209148701,
        2104267801,
        2104267825,
        2209098604,
        2209098612,
        2209098805,
        2209098807,
        2209128509,
        2209148601,
        2310160606,
        2310209502,
        2310209510,
        2310219507,
        2310239503,
        2310248906,
        2311018909,
        2311258003,
        2311258007,
        2311259110,
        2311259202,
        2207148905,
        2301268411,
        2301277407,
        2303038903,
        2311028703,
        2311039508,
        2311257703,
        2311259405,
        2311259512,
        2311259708,
        2311278202,
        2311279602,
        2103298912,
        2311279610,
        2103299007,
        2103308811,
        2104068412,
        2104120301,
        2104208510,
        2104268307,
        2104268902,
        2104269202,
        2104269203,
        2104306508,
        2104307806,
        2311280012,
        2311287705,
        2311298804,
        2311299103,
        2311299409,
        2010109111,
        2012157908,
        2012158507,
        2104308009,
        2104308108,
        2104308501,
        2312079705,
        2312119702,
        2312110503,
        2312138405,
        2312110507,
        2312158601,
        2312158606,
        2312119703,
        2312120207,
        2312158710,
        2312199710,
        2312187504,
        2312199601,
        2312230202,
        2312230205,
        2312230409,
        2312279207,
        2105036701,
        2105057205,
        2206288602,
        2309148604,
        2309180012,
        2305117705,
        2305158202,
        2305159604,
        2305197610,
        2305198505,
        2305227604,
        2305227802,
        2305228608,
        2306239102,
        2307047601,
        2307048203,
        2307048210,
        2307128803,
        2307148707,
        2307148901
    ]

    var firstAddedResultProductPersonId = ''
    var accessMenu = {
        deliver_goods: [{
            access_name: 'Delivered',
            name: 'DELIVERY'
        }, {
            access_name: 'Complete',
            name: 'DONE'
        }],
        sorting_goods: [{
            access_name: 'QC Sorting',
            name: 'SORTIR'
        }, {
            access_name: 'Setor Reject',
            name: 'FILLUP'
        }, {
            access_name: 'Complete',
            name: 'DONE'
        }],
    }


    $(document).ready(function() {
        // loadData()
        // scannerQR()
        empty('#detailWorker', '<span class="small-text">Pilih Worker pada Panel Kiri untuk Melihat Detail</span>')
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductionDelivEntry'); ?>"
        getData(data, url)
    }
    setInterval(loadDataPeriodic, 60000);

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
                $('#workerProgress').html(loadingDataReturn())
            },
            success: function(response) {
                showOverlay('hide')
                dataEntry = response.data
                arrangeVariable()
            }
        })
    }

    function arrangeVariable() {
        dataDetailDelivery = []
        dataMaterial = []
        $('#workerProgress').html('')
        dataEntry.productionDelivery.forEach(e => {
            e.data.forEach(el => {
                dataDetailDelivery.push({
                    'worker_id': e.employee_worker.id,
                    'worker_name': e.employee_worker.name,
                    'result_product_person_id': el.result_product_person_id,
                    'number': el.number,
                    'datetime': el.datetime,
                    'item': el.item,
                    'unit': el.unit,
                    'delivery': el.delivery,
                    'sortir': el.sortir,
                    'fillup': el.fillup,
                    'complete': el.complete,
                })
            });
        })
        dataEntry.productMaterial.forEach(e => {
            var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                if (v.product.id == e.item_id) return true
            })
            e.material_group.forEach(el => {
                var itemDefault = el.items.find((v, k) => {
                    if (v.item.id == el.item_id_default) return true
                })
                dataMaterial.push({
                    work_plan_product_id: dataProducts.work_plan_product_id,
                    item_id: e.item_id,
                    item_name: e.name,
                    item_code: e.code,
                    item_name: e.name,
                    material_group_id: el.material_group.id,
                    material_group_name: el.material_group.name,
                    material_id: itemDefault.item.id,
                    material_code: itemDefault.item.code,
                    material_alias: itemDefault.item.alias,
                    material_name: itemDefault.item.name,
                    unit_id: itemDefault.unit.id,
                    unit_name: itemDefault.unit.name,
                })
            })
        })
        // console.log(dataDetailDelivery)
        if (firstAddedResultProductPersonId) {
            cetakQR(firstAddedResultProductPersonId)
        }
        workerProgress()
    }

    function workerProgress() {
        $('#totalWorker').html(dataEntry.productionDelivery.length)
        $('#workerProgress').html(formWorkerProgress())
        searching()
        if (stillOpenModal) {
            if (!JustOnCamAfterAdd) {
                if (materialIdClicked) {
                    newMaterial(workerIdClicked)
                } else {
                    modalWorkProgress()
                }
            } else {
                JustOnCamAfterAdd = false
                // nanti buka kamera disini
                firstAddedResultProductPersonId = ''
                scannerQR()
            }
            detailWorker(workerIdClicked)
        }
    }

    function formWorkerProgress() {
        var html = ''
        dataEntry.productionDelivery.forEach(e => {
            var badgeMeja = ''
            if (e.employee_worker.row_code) {
                badgeMeja = '<span class="badge bg-light text-dark-grey border fw-bold border-dark me-2" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + e.employee_worker.row_code + '</span>'
            }
            html += '<div class="card shadow-none border-end-0 border-start-0 pointer" style="border-radius:0px;" id="card_search' + e.employee_worker.id + '">'
            html += '<div class="card-body p-0">'
            html += '<div class="row">'
            html += '<div class="col-10 card-hoper p-0" onclick="detailWorker(' + e.employee_worker.id + ')">'
            html += '<div class="row p-3 px-4">'
            html += '<div class="col-12 ps-3">'
            html += '<p class="m-0 small fw-bolder">' + badgeMeja + '<span class="text_search" data-id="' + e.employee_worker.id + '">' + e.employee_worker.name.toUpperCase() + '</span></p>'
            html += '<p class="m-0 mt-1 super-small-text text-dark-grey"><span class="fw-bold">Total Setoran <span class="text-orange">' + number_format(totalSetoran(e.employee_worker.id)) + '</span> / --</span></p>'
            html += '</div>'
            html += '<div class="col-12 pt-1">'
            html += '<div class="row ps-3">'
            for (let i = 1; i <= defaultleSetoran; i++) {
                var check = e.data.find((v, k) => {
                    if (v.number == i) return true
                })
                var bg = 'bg-outline-primary'
                var value = 0
                if (check) {
                    var dataDelivery = findStatus(check.result_product_person_id)
                    if (check.complete.is_process) {
                        bg = 'bg-primary'
                        value = check.good
                    } else {
                        bg = 'bg-orange'
                    }
                } else {
                    var dataDelivery = findStatus()
                }
                html += '<div class="col p-0 pe-1">'
                html += '<span class="badge rounded-pill super-small-text p-1 ' + bg + ' w-100">' + dataDelivery.qty.good + '</span>'
                html += '</div>'
            }
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-2 card-hoper p-0" onclick="firstWorkProgress(' + e.employee_worker.id + ')">'
            html += '<div class="row h-100">'
            html += '<div class="col-12 align-self-center text-center p-0">'
            html += '<i class="fa fa-pencil fa-1x text-grey"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        return html
    }

    function detailWorker(worker_id) {
        console.log(worker_id)
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        })
        templateDetailWorker(data)
    }

    function templateDetailWorker(data) {
        var html = ''
        var badgeMeja = ''
        if (data.employee_worker.row_code) {
            badgeMeja = '<span class="badge bg-light text-dark-grey border fw-bold border-dark me-2" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + data.employee_worker.row_code + '</span>'
        }
        html += '<div class="col-9">'
        html += '<h1 class="m-0 fw-bolder">' + badgeMeja + data.employee_worker.name.toUpperCase() + '</h1>'
        html += '<p class="m-0"><b class="text-dark-grey">Total Setoran </b>' + number_format(totalSetoran(data.employee_worker.id)) + ' / <b class="text-dark-grey">--</b></p>'
        html += '<p class="m-0 super-small-text text-warning"><i class="fa fa-circle me-2"></i>Still Working</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<div class="card bg-warning">'
        html += '<div class="card-body text-center text-white p-2">'
        html += '<p class="m-0 super-small-text">Setoran Ke</p>'
        html += '<h1 class="m-0 fw-bolder text-white">' + findNumberofSetoran(data.employee_worker.id) + '</h1>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-4">'
        html += '<p class="super-small-text fw-bolder">Material Stock</p>'
        if (data.remaining_material) {
            data.remaining_material.forEach(e => {
                html += '<div class="card shadow-sm mb-2">'
                html += '<div class="card-body p-3">'
                html += '<div class="row">'
                html += '<div class="col align-self-center">'
                html += '<p class="m-0 h2"><b>' + e.item.name + '</b></p>'
                html += '</div>'
                html += '<div class="col text-end">'
                html += '<p class="m-0 small"><b>' + e.qty + ' ' + e.unit.name + '</b></p>'
                html += '<p class="m-0 super-tiny-text">Added at ' + formatJamMenit(e.datetime) + '</p>'
                html += '</div>'
                html += '<div class="col-2 text-center align-self-center pointer" onclick="sisaStokMaterial(' + data.employee_worker.id + ')">'
                html += '<i class="fa fa-pencil text-danger"></i>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            });
        } else {
            html += '<div class="mb-2">'
            html += cardAlert('Tidak Ada Material Stock')
            html += '</div>'
        }

        html += '</div>'
        // if (data.remaining_material) {
        html += '<div class="col-12 text-end">'
        html += '<button type="button" class="btn btn-outline-dark btn-sm super-small-text" onclick="sisaStokMaterial(' + data.employee_worker.id + ')"><i class="fa fa-plus me-2"></i>Tambah Material</button>'
        html += '</div>'
        // }

        html += '<div class="col-12 pt-4">'
        html += '<p class="super-small-text fw-bolder">Riwayat Setoran</p>'
        html += '<table class="table table-bordered table-hover small-text table-sm">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle super-small-text" rowspan="2">#</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Jam Setor</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Brand</th>'
        html += '<th class="align-middle super-small-text" colspan="3">Quantity</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Unit</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Status</th>'
        html += '</tr>'
        html += '<tr>'
        html += '<th class="super-small-text">Good</th>'
        html += '<th class="super-small-text">Bad</th>'
        html += '<th class="super-small-text">Reject</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'

        if (data.data.length) {
            data.data.forEach(e => {
                var dataDelivery = findStatus(e.result_product_person_id)
                var bgColor = ''
                if (!dataDelivery.qty.good) {
                    dataDelivery.qty.good = '-'
                }
                if (!dataDelivery.qty.waste) {
                    dataDelivery.qty.waste = '-'
                }
                if (!dataDelivery.qty.reject) {
                    dataDelivery.qty.reject = '-'
                }
                if (dataDelivery.status == 'COMPLETE') {
                    bgColor = 'table-hijau'
                }
                html += '<tr class="' + bgColor + '">'
                html += '<td class="text-center align-middle" style="height: 30px;">' + e.number + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + formatJamMenit(e.datetime) + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + e.item.alias + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + dataDelivery.qty.good + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + dataDelivery.qty.waste + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + dataDelivery.qty.reject + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + e.unit.name + '</td>'
                html += '<td class="text-center align-middle small-text" style="height: 30px;">' + toTitleCase(dataDelivery.status) + '</td>'
                html += '</tr>'
            });
        }

        html += '<tr class="pointer" onclick="workProgress(' + data.employee_worker.id + ')">'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '<td class="text-center align-middle" style="height: 30px;"></td>'
        html += '</tr>'

        html += '</tbody>'
        html += '</table>'

        html += '</div>'

        $('#detailWorker').html(html)
        totalRealizationofTarget()
    }

    function totalRealizationofTarget() {
        var total = jumlahkanQtyBerdasarkanItemId(dataEntry.productionOutItem)
        // console.log(total)
        total.forEach(e => {
            $('#realizationTarget' + e.item.id).html(e.qty + ' ' + e.unit.name)
        });
    }

    function triggerQR() {
        if (cameraOn) {
            cameraOn = false
            $('#btnQR').html('QR SCANNER<i class="fa fa-qrcode ms-2 text-green"></i>').removeClass('btn-dark').addClass('btn-outline-dark')
            $('#showCameraQR').html('')
            // scanButtonStopScanningText()
            stream.getTracks().forEach((track) => {
                if (track.readyState == 'live' && track.kind === 'video') {
                    track.stop();
                }
            });
        } else {
            cameraOn = true
            $('#btnQR').html('OFF CAM<i class="fa fa-times ms-2 text-danger"></i>').addClass('btn-dark').removeClass('btn-outline-dark')
            onCam2()
        }
    }

    function onCam2() {
        firstAddedResultProductPersonId = ''
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "showCameraQR", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);
        $('#showCameraQR__scan_region').addClass('cameraOption')
        $('#html5-qrcode-button-camera-stop').addClass('btn bt-primary btn-sm')
    }
    var scanned2 = false
    var afterScan = false

    function onScanSuccess(decodedText, decodedResult) {
        checkWorkerId(decodedText)
        html5QrcodeScanner.clear();
    }

    function checkWorkerId(eid) {
        let arrayOfNumbers = eid.split(',').map(Number);
        if (arrayOfNumbers.length == 1) {
            // new
            scanned = true
            scanned2 = false
            var dataProducts = dataEntry.productionDelivery.find((v, k) => {
                if (v.employee_worker.eid == arrayOfNumbers[0]) return true
            })
            if (!dataProducts) {
                dataProducts = dataEntry.employee.find((v, k) => {
                    if (v.eid == arrayOfNumbers[0]) return true
                })
                dataProducts = dataProducts.id
                createNewWorker(dataProducts)
            } else {
                dataProducts = dataProducts.employee_worker.id
                workProgress(dataProducts)
            }
        } else {
            scanned = false
            scanned2 = true
            var dataProducts = dataEntry.productionDelivery.find((v, k) => {
                if (v.employee_worker.id == arrayOfNumbers[0]) return true
            })
            setoranIdClicked = arrayOfNumbers[1]
            if (!afterScan) {
                afterScan = true
                if (offlineMode) {
                    // jika offline
                    afterScan = false
                    workProgress(arrayOfNumbers[0])
                } else {
                    // jika online
                    loadScanData(arrayOfNumbers[0])
                }
            }
        }
    }

    function loadScanData(worker_id) {
        showOverlay('show')
        $.ajax({
            url: "<?= api_produksi('getProductionDeliv'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                resultProductPersonId: setoranIdClicked
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {},
            success: function(response) {
                showOverlay('hide')
                var dataLoadProductionDeliv = response.data.productionDelivery
                var findEntry = dataEntry.productionDelivery.filter((v, k) => {
                    if (v.employee_worker.id == worker_id) return true
                })
                if (!findEntry.length) {
                    findEntry.push(dataLoadProductionDeliv[0])
                } else {
                    findEntry[0].data = dataLoadProductionDeliv[0].data
                }
                dataDetailDelivery = []
                dataMaterial = []
                dataEntry.productionDelivery.forEach(e => {
                    e.data.forEach(el => {
                        dataDetailDelivery.push({
                            'worker_id': e.employee_worker.id,
                            'worker_name': e.employee_worker.name,
                            'result_product_person_id': el.result_product_person_id,
                            'number': el.number,
                            'datetime': el.datetime,
                            'item': el.item,
                            'unit': el.unit,
                            'delivery': el.delivery,
                            'sortir': el.sortir,
                            'fillup': el.fillup,
                            'complete': el.complete,
                        })
                    });
                })
                dataEntry.productMaterial.forEach(e => {
                    var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                        if (v.product.id == e.item_id) return true
                    })
                    e.material_group.forEach(el => {
                        var itemDefault = el.items.find((v, k) => {
                            if (v.item.id == el.item_id_default) return true
                        })
                        dataMaterial.push({
                            work_plan_product_id: dataProducts.work_plan_product_id,
                            item_id: e.item_id,
                            item_name: e.name,
                            item_code: e.code,
                            item_name: e.name,
                            material_group_id: el.material_group.id,
                            material_group_name: el.material_group.name,
                            material_id: itemDefault.item.id,
                            material_code: itemDefault.item.code,
                            material_alias: itemDefault.item.alias,
                            material_name: itemDefault.item.name,
                            unit_id: itemDefault.unit.id,
                            unit_name: itemDefault.unit.name,
                        })
                    })
                })
                afterScan = false
                workProgress(worker_id)
                workerProgress()
            }
        })
    }

    function createNewWorker(id) {
        var dataEmployee = dataEntry.employee.find((v, k) => {
            if (v.id == id) return true
        })
        if (!dataEntry.productionDelivery) {
            dataEntry.productionDelivery = []
        }
        dataEntry.productionDelivery.push({
            employee_worker: {
                "id": dataEmployee.id,
                "eid": dataEmployee.eid,
                "name": dataEmployee.name,
                "row_code": dataEmployee.row_code,
            },
            remaining_material: null,
            data: []
        })
        arrangeVariable()
        workProgress(id)
    }

    function firstWorkProgress(worker_id) {
        $('#modal').modal('show')
        workProgress(worker_id)
    }

    function workProgress(worker_id) {
        workerIdClicked = worker_id
        stillOpenModal = true
        if (!scanned2) {
            setoranIdClicked = null
        }
        newSetoranBar = 1
        // detailWorker(worker_id)
        modalWorkProgress()
    }

    function modalWorkProgress() {
        materialIdClicked = false
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == workerIdClicked) return true
        })
        var badgeMeja = ''
        if (data.employee_worker.row_code) {
            badgeMeja = '<span class="badge bg-light text-dark-grey border fw-bold border-dark me-2" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + data.employee_worker.row_code + '</span>'
        }
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');

        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-xl');
        var html_header = '';
        var textFast = ''
        if (fastMode) {
            textFast = '<span class="text-danger fw-bolder">FAST MODE <i class="ms-1 fa fa-bolt"></i></span>'
        }
        html_header += '<h5 class="modal-title">Entry Data ' + textFast + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row w-100">'

        html_body += '<div class="col-3 p-5 pt-4 pe-2 border-end">'
        html_body += '<h1 class="mb-1 fw-bolder">' + badgeMeja + data.employee_worker.name.toUpperCase() + '</h1>'
        // html_body += '<p class="m-0">2,490 / <b class="text-dark-grey">3,000</b></p>'
        html_body += '<p class="m-0"><b class="text-dark-grey">Total Setoran </b>' + number_format(totalSetoran(data.employee_worker.id)) + ' / <b class="text-dark-grey">--</b></p>'
        html_body += '<p class="m-0 super-small-text text-warning"><i class="fa fa-circle me-2"></i>Still Working</p>'

        html_body += '<div class="mt-5" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'
        html_body += '<div class="me-2">'
        // LIST SETORAN

        // add setoran

        if (link == 'deliver_goods') {
            html_body += '<div class="pb-2">'
            html_body += '<div class="card card-hoper shadow-none" style="border: 1px dashed grey" onclick="setoranBaru(' + workerIdClicked + ')" id="btnNewSetoran">'
            html_body += '<div class="card-body p-3">'

            html_body += '<div class="row">'
            html_body += '<div class="col align-self-center text-center">'
            html_body += '<p class="m-0 small-text"><i class="fa fa-plus me-2"></i>Setoran Baru</p>'
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        // add setoran

        // setoran semu
        html_body += '<div class="" id="setoranSemu">'
        html_body += '</div>'
        // setoran semu
        // LIST SETORAN
        var a = 0
        html_body += '<div class="">'
        sortArrayOfObjectsDescending(data.data, 'number').forEach(e => {
            var dataDelivery = findStatus(e.result_product_person_id)
            var bgColor = ''
            var deleteButton = ''
            var qty = dataDelivery.qty.good
            var icon = ''
            // if (dataDelivery.status == 'DELIVERY') {
            deleteButton = deleteAndCloseButton('setoran', data.employee_worker.id, e.result_product_person_id)
            // }
            if (dataDelivery.status == 'COMPLETE') {
                bgColor = 'bg-light-success'
                icon = '<span class="fa fa-check fa-1x text-success"></span>'
            } else if (dataDelivery.status == 'PROCESS') {
                bgColor = ''
                qty = '--'
                icon = '<span class="fa fa-clock-o fa-1x text-grey"></span>'
            } else {
                bgColor = 'bg-light-warning'
                icon = '<span class="fa fa-exclamation fa-1x text-warning"></span>'
            }
            html_body += setoranBar(e, deleteButton, bgColor, qty, icon)
            a++
        })
        html_body += '</div>'
        html_body += '</div>'
        // LIST SETORAN

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-9 p-0">'
        html_body += '<div class="row" id="isiWorkProgress">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('p-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        empty('#isiWorkProgress', '<span class="small-text">Pilih Setoran pada Panel Kiri untuk Melihat Detail</span>', '500px')
        // console.log(setoranIdClicked)
        if (setoranIdClicked) {
            isiWorkProgress(setoranIdClicked)
        }
        if (scanned) {
            setoranBaru(data.employee_worker.id)
        }
    }

    function deleteAndCloseButton(jenis, worker_id, id) {
        var fungsi = ''
        if (jenis == 'material') {
            fungsi = 'onclick="deleteMaterial(' + worker_id + ',' + id + ')"'
        } else if (jenis == 'setoran') {
            fungsi = 'onclick="deleteSetoran(' + worker_id + ',' + "'" + id + "'" + ')"'
        }
        var html = '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;z-index:999;" ' + fungsi + '><i class="small-text fa fa-times text-light"></i></span>'
        return html
    }

    function deleteSetoran(worker_id, id) {
        var datas = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).data.find((v, k) => {
            if (v.result_product_person_id == id) return true
        })
        if (!datas) {
            // jika datanya setoran baru
            $('#setoranSemu').html('')
            $('#btnNewSetoran').removeAttr('hidden', true)
        } else {
            Swal.fire({
                text: 'Apakah anda ingin menghapus data setoran ke ' + datas.number + ' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    var data = {
                        deletedId: {
                            resultProductPerson: []
                        }
                    }
                    data.deletedId.resultProductPerson.push(id)
                    simpanData(data)
                }
            })
        }
    }

    function deleteMaterial(worker_id, id) {
        // console.log(dataSaveMaterial.remainingMaterialPerson)
        dataSaveMaterial.deletedId.remainingMaterialPerson.push(id)
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).remaining_material
        var dataFiltered = data.filter(p => p.remaining_material_person_id != id);
        // var materialFiltered = dataSaveMaterial.remainingMaterialPerson.filter(p => p.id != id);
        // dataSaveMaterial.remainingMaterialPerson = materialFiltered
        if (!dataFiltered.length) {
            dataFiltered = null
        }
        dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).remaining_material = dataFiltered
        newMaterial(worker_id)
    }

    function setoranBar(e, deleteButton, bgColor, qty, icon) {
        var dataStatus = findStatus(e.result_product_person_id)
        var html = ''
        var time = '--'
        if (e.datetime) {
            time = formatJamMenit(e.datetime)
        }
        // html += '<div class="col-12 pb-2">'
        html += '<div class="card card-hoper shadow-none ' + bgColor + ' cardProgress mb-2" onclick="isiWorkProgress(' + "'" + e.result_product_person_id + "'" + ')" id="cardProgress' + e.result_product_person_id + '">'
        html += deleteButton
        html += '<div class="card-body p-3">'

        html += '<div class="row w-100">'
        html += '<div class="col">'
        html += '<p class="m-0 small-text fw-bolder">Setoran ' + e.number + '</p>'
        html += '<p class="m-0 super-tiny-text"><i class="me-2">' + dataStatus.nextStatus + '</i>' + time + '</p>'
        html += '</div>'
        html += '<div class="col align-self-center text-end">'
        html += '<p class="m-0 fw-bolder">' + qty + '</p>'
        html += '</div>'
        html += '<div class="col-1 align-self-center text-end">'
        html += icon
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        // html += '</div>'
        return html
    }

    function checkLabelEdit(menu) {
        var data = accessMenu[link].find((v, k) => {
            if (v.name == menu) return true
        })
        return data
    }

    function editSortir(result_product_person_id, menu) {
        var data = dataDetailDelivery.find((v, k) => {
            if (v.result_product_person_id == result_product_person_id) return true
        })
        var dataStatus = findStatusEdit(result_product_person_id, menu)
        // console.log(data, dataStatus)
        formWorkProgress(data, dataStatus, true)
    }

    function isiWorkProgress(result_product_person_id = null) {
        setoranIdClicked = result_product_person_id
        var data = dataDetailDelivery.find((v, k) => {
            if (v.result_product_person_id == result_product_person_id) return true
        })
        var dataStatus = findStatus(result_product_person_id)
        var html = ''
        html += '<div class="col-8 border-end" style="height:600px;" id="formWorkProgress">'
        html += '</div>'

        html += '<div class="col-4">'

        html += '<div class="row w-100 p-3 pe-1 pt-4">'
        html += '<p class="m-0 small fw-bolder">Timeline</p>'
        // timeline
        var status = ''
        var text = ''
        var btnEdit = ''
        html += '<div class="timeline timeline-sm mt-5">'
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'
        if (data) {
            if (data.delivery.is_process) {
                status = 'bg-success text-white'
                text = '<p>Pukul ' + formatJamMenit(data.delivery.process_at) + ' Setoran ' + data.delivery.good + ' ' + data.unit.name + ' dengan Jumlah Bad ' + replaceNullWithZero(data.delivery.waste) + ' ' + data.unit.name + '</p>'
                text += '<button class="btn btn-sm btn-outline-success" onclick="cetakQR(' + "'" + result_product_person_id + "'" + ')">Cetak QR</button>'
                if (checkLabelEdit('DELIVERY')) {
                    btnEdit = '<span class="fa fa-pencil pointer text-success ms-2" onclick="editSortir(' + result_product_person_id + ',' + "'" + 'DELIVERY' + "'" + ')"></span>'
                }
            }
        }

        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Delivered</b>' + btnEdit
        html += text
        html += '</div>'
        html += '</div>'
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'
        btnEdit = ''
        if (data) {
            if (data.sortir.is_process) {
                status = 'bg-success text-white'
                text = '<p>Pukul ' + formatJamMenit(data.sortir.process_at) + ' Item Good ' + data.sortir.good + ' Reject ' + replaceNullWithZero(data.sortir.reject) + ' ' + data.unit.name + '</p>'
                if (checkLabelEdit('SORTIR')) {
                    btnEdit = '<span class="fa fa-pencil pointer text-success ms-2" onclick="editSortir(' + result_product_person_id + ',' + "'" + 'SORTIR' + "'" + ')"></span>'
                }
            }
        }

        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>QC Sorting</b>' + btnEdit
        html += text
        html += '</div>'
        html += '</div>'

        var textColor = ''
        text = '<p>Belum Ada Proses</p>'
        btnEdit = ''
        if (data) {
            if (!data.fillup.is_process && data.complete.is_process) {
                textColor = 'text-grey'
                text = '<p>Tidak Ada Setor Reject</p>'
            }
        }
        html += '<div class="timeline-item ' + textColor + '">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        if (data) {
            if (data.fillup.is_process) {
                status = 'bg-success text-white'
                text = '<p>Pukul ' + formatJamMenit(data.fillup.process_at) + ' Reject ' + data.fillup.good + ' ' + data.unit.name + ' telah disetor</p>'
                if (checkLabelEdit('FILLUP')) {
                    btnEdit = '<span class="fa fa-pencil pointer text-success ms-2" onclick="editSortir(' + result_product_person_id + ',' + "'" + 'FILLUP' + "'" + ')"></span>'
                }
            }
        }

        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Setor Reject</b>' + btnEdit
        html += text
        html += '</div>'
        html += '</div>'

        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'
        if (data) {
            if (data.complete.is_process) {
                status = 'bg-success text-white'
                text = '<p>Total Good Stock ' + data.complete.good + ' ' + data.unit.name + '</p>'
            }
        }

        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Complete</b>'
        html += text
        html += '</div>'
        html += '</div>'
        // timeline
        html += '</div>'
        $('#isiWorkProgress').html(html)
        coloredClickerBar(result_product_person_id)
        formWorkProgress(data, dataStatus)
    }

    function coloredClickerBar(result_product_person_id) {
        $('.cardProgress').removeClass('clicked')
        $('#cardProgress' + result_product_person_id).addClass('clicked')
    }

    function sisaStokMaterial(worker_id) {
        workerIdClicked = worker_id
        setoranIdClicked = null
        materialIdClicked = true
        stillOpenModal = true
        dataSaveMaterial = {
            remainingMaterialPerson: [],
            deletedId: {
                remainingMaterialPerson: []
            }
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Material Entry</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-12" id="newMaterial">'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="simpanMaterial()">Simpan</button>'
        $('#modalFooter').html(html_footer)
        newMaterial(worker_id)
    }

    function newMaterial(worker_id) {
        var html = ''
        dataSaveMaterial.remainingMaterialPerson = []
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        })
        // console.log(data)
        dataMaterial.forEach(e => {
            if (data.remaining_material) {
                var datas = data.remaining_material.find((v, k) => {
                    if (v.item.id == e.material_id) return true
                })
            } else {
                var datas = null
            }
            if (!datas) {
                html += '<div id="materialEntryField' + e.item_id + '' + e.material_id + '">'

                html += '<div class="card shadow-sm mb-2 bg-light card-hoper" onclick="AddNewMaterial(' + worker_id + ',' + e.item_id + ',' + e.material_id + ')">'
                html += '<div class="card-body p-2 px-3">'
                html += '<div class="row">'

                html += '<div class="col-10 align-self-center">'
                html += '<p class="super-small-text m-0">' + e.item_name + '</p>'
                html += '<p class="m-0 h5 text-dark-grey"><b>' + toTitleCase(e.material_name) + '</b></p>'
                html += '</div>'

                html += '<div class="col-2 text-end text-center align-self-center">'
                html += '<i class="fa fa-plus"></i>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'

                html += '</div>'
            } else {
                html += remainingMaterial(worker_id, datas)
            }
        });
        $('#newMaterial').html(html)
        $('.nominal').number(true, 2);
    }

    function fillToMaterialEntry(worker_id, item_id, material_id) {
        var jumlahMaterial = $('#jumlahMaterial' + worker_id + item_id + material_id).val()
        var jamMaterial = $('#jamMaterial' + worker_id + item_id + material_id).val()
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).remaining_material.find((v, k) => {
            if (v.item.id == material_id) return true
        })
        data.qty = jumlahMaterial
        data.datetime = dataEntry.workPlanMachine.date + ' ' + jamMaterial + ':00'
        newMaterial(worker_id)
    }

    function AddNewMaterial(worker_id, item_id, material_id) {
        var dataMaterials = dataMaterial.find((v, k) => {
            if (v.material_id == material_id && v.item_id == item_id) return true
        })
        var dataCreate = {
            "qty": 0,
            "item": {
                "id": dataMaterials.material_id,
                "code": dataMaterials.material_code,
                "name": dataMaterials.material_name,
                "alias": dataMaterials.material_alias,
            },
            "unit": {
                "id": dataMaterials.unit_id,
                "name": dataMaterials.unit_name
            },
            "datetime": currentDateTime(),
            "work_plan_product_id": dataMaterials.work_plan_product_id,
            "remaining_material_person_id": createCodeId(worker_id)
        }
        var dataAll = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).remaining_material
        if (!dataAll) {
            dataEntry.productionDelivery.find((v, k) => {
                if (v.employee_worker.id == worker_id) return true
            }).remaining_material = []
        }
        dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).remaining_material.push(dataCreate)
        newMaterial(worker_id)
    }

    function remainingMaterial(worker_id, data) {
        var html = ''
        var time = ''
        if (data.datetime) {
            time = formatJamMenit(data.datetime)
        }
        var dataMaterials = dataMaterial.find((v, k) => {
            if (v.material_id == data.item.id) return true
        })
        saveDataMaterial(worker_id, dataMaterials.item_id, dataMaterials.material_id)
        html += '<div class="card card-hoper shadow-sm mb-2">'
        html += deleteAndCloseButton('material', worker_id, data.remaining_material_person_id)
        html += '<div class="card-body p-2 px-3">'
        html += '<div class="row">'
        html += '<div class="col align-self-center">'
        html += '<p class="super-small-text m-0">' + dataMaterials.item_name + '</p>'
        html += '<p class="m-0 h2"><b>' + data.item.name + '</b></p>'
        html += '<p class="m-0 small-text"><b>Added At </b>' + time + '</p>'
        html += '</div>'
        html += '<div class="col text-end">'

        html += '<div class="row">'

        html += '<div class="col-8">'
        html += '<input class="form-control form-control-lg nominal form-invisible-line jumlahMaterial" style="background-color:transparent;border:0px;" type="text" placeholder="0" id="jumlahMaterial' + worker_id + '' + dataMaterials.item_id + '' + dataMaterials.material_id + '" data-id="' + data.remaining_material_person_id + '" value="' + data.qty + '" oninput="fillToMaterialEntry(' + worker_id + ',' + dataMaterials.item_id + ',' + dataMaterials.material_id + ')">'
        html += '<hr class="m-0 text-danger">'
        html += '</div>'
        html += '<div class="col-4 align-self-center text-center">'
        html += '<p class="m-0 small"><b>' + data.unit.name + '</b></p>'
        html += '</div>'

        html += '<div class="col-8">'
        html += '<input class="form-control form-control-lg nominal form-invisible-line jamMaterial" style="background-color:transparent;border:0px;" type="time" placeholder="0" id="jamMaterial' + worker_id + '' + dataMaterials.item_id + '' + dataMaterials.material_id + '" data-id="' + data.remaining_material_person_id + '" value="' + time + '" oninput="fillToMaterialEntry(' + worker_id + ',' + dataMaterials.item_id + ',' + dataMaterials.material_id + ')">'
        html += '<hr class="m-0 text-danger">'
        html += '<button class="btn btn-outline-dark btn-sm mt-2 shadow-none" onclick="autoJamMaterial(' + worker_id + ',' + dataMaterials.item_id + ',' + dataMaterials.material_id + '),fillToMaterialEntry(' + worker_id + ',' + dataMaterials.item_id + ',' + dataMaterials.material_id + ')">Auto <i class="fa fa-clock-o ms-2"></i></button>'
        html += '</div>'
        html += '<div class="col-4 align-self-center text-center">'
        html += '<i class="fa fa-clock-o"></i>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function saveDataMaterial(worker_id, item_id, material_id) {
        var data = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.id == worker_id) return true
        }).remaining_material.find((v, k) => {
            if (v.item.id == material_id) return true
        })
        var dataMaterials = dataMaterial.find((v, k) => {
            if (v.material_id == material_id && v.item_id == item_id) return true
        })
        dataSaveMaterial.remainingMaterialPerson.push({
            id: data.remaining_material_person_id,
            work_plan_id: dataEntry.workPlanMachine.work_plan_id,
            work_plan_product_id: dataMaterials.work_plan_product_id,
            shift_id: dataEntry.workPlanMachine.shift_id,
            machine_id: dataEntry.workPlanMachine.machine.id,
            employee_id_worker: worker_id,
            item_id_product: item_id,
            item_id: material_id,
            qty: data.qty,
            unit_id: data.unit.id,
            created_at: currentDateTime(),
            updated_at: currentDateTime(),
            datetime: data.datetime,
            note: '',
        })
    }

    function timeNow() {
        var d = new Date();
        var jam = d.getHours();
        var menit = d.getMinutes();
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        var time = jam + ":" + menit;
        return time;
    }


    function formDELIVERY(id = null, edit = false) {
        var dataEdit
        var good = ''
        var bad = ''
        var time = timeNow()
        if (auto500) {
            good = '500'
        }
        if (edit) {
            dataEdit = findStatusEdit(id, 'DELIVERY')
            good = dataEdit.qty.good
            bad = dataEdit.qty.waste
            time = formatJamMenit(dataEdit.qty.process_at)
        }
        var html = ''
        html += '<div class="row justify-content-end">'
        // sesi input

        // jumlah setoran

        html += '<div class="col-8 text-end">'
        html += '<p class="mb-1 small-text"><b>Jumlah Setoran</b></p>'
        html += '<input class="form-control form-control-lg nominal form-delivery form-invisible-line" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahGood" value="' + good + '" tabindex="1" role="dialog">'
        html += '<hr class="m-0 text-danger">'
        html += '</div>'
        html += '<div class="col-12 text-end">'
        html += '<div class="row pt-2 justify-content-end">'
        for (let i = 0; i < 3; i++) {
            html += '<div class="col-2 ps-0">'
            html += '<button class="btn btn-outline-dark btn-sm w-100 shadow-none" onclick="autoJumlahGood(500)">500</button>'
            html += '</div>'
        }
        html += '</div>'
        html += '</div>'
        // jumlah setoran

        // jumlah bad
        if (!fastMode) {
            html += '<div class="col-8 text-end">'
            html += '<p class="mb-1 pt-3 small-text"><b>Jumlah Bad</b></p>'
            html += '<input class="form-control form-control-lg nominal form-delivery form-invisible-line" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahBad" value="' + bad + '" tabindex="2">'
            html += '<hr class="m-0">'
            html += '</div>'
            html += '<div class="col-12 text-end pe-4">'
            html += '<div class="row pt-2 justify-content-end">'
            for (let i = 0; i <= 6; i++) {
                html += '<div class="col-1 pe-0">'
                html += '<button class="btn btn-outline-dark btn-sm w-100 shadow-none" onclick="autoJumlahBad(' + i + ')">' + i + '</button>'
                html += '</div>'
            }
            html += '</div>'
            html += '</div>'
        }
        // jumlah bad

        // jam setoran
        html += '<div class="col-4 text-end align-self-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jam Setoran</b></p>'
        html += '<input class="form-control form-control-lg form-invisible-line" style="background-color:transparent;border:0px;" type="time" placeholder="0" autocomplete="off" id="jamSetoran" value="' + time + '">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-12 text-end">'
        html += '<div class="row pt-2 justify-content-end">'
        html += '<div class="col-4">'
        html += '<button class="btn btn-outline-dark btn-sm shadow-none" onclick="autoJamSetoran()">Auto <i class="fa fa-clock-o ms-2"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // jam setoran

        html += '<div class="col-12 text-end pt-3">'
        // html += '<button class="btn btn-outline-primary btn-sm me-1" onclick="AddedResultProductPersonId(),arrangeVariableInsert()" tabindex="4">Simpan</button>'
        // if (!edit) {
        html += '<button class="btn btn-primary btn-sm" id="btnSimpan" onclick="insertWithNextPerson()" tabindex="3">Simpan dan Lanjutkan<i class="fa fa-chevron-right ms-2"></i></button>'
        // }
        html += '</div>'
        // sesi input
        html += '</div>'
        $('#formEntryData').html(html)
        // $('#modal').on('shown.bs.modal', function() {
        setTimeout(function() {
            if (auto500) {
                // $('#jumlahBad').focus();
                $('#jumlahGood').focus();
            } else {
                $('#jumlahGood').focus();
            }
        }, 100);
        // })
        $('.nominal').on('keypress', handleNumericInput);
        $('.form-delivery').on('keypress', function(event) {
            if (event.which === 13) { // Tombol Enter ditekan
                event.preventDefault();
                // AddedResultProductPersonId()
                insertWithNextPerson()
            }
        });
    }

    function handleNumericInput(event) {
        var allowChars = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 37, 39];
        if (allowChars.indexOf(event.which) === -1) {
            event.preventDefault();
        }

        var inputValue = $(this).val();
        $(this).val(inputValue.replace(/[^\d]/g, ''));
    }

    function formSORTIR(id = null, edit = false) {
        firstAddedResultProductPersonId = ''
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var dataEdit
        var good = ''
        var bad = ''
        var time = timeNow()
        if (edit) {
            dataEdit = findStatusEdit(id, 'SORTIR')
            good = dataEdit.qty.good
            bad = dataEdit.qty.reject
            time = formatJamMenit(dataEdit.qty.process_at)
        }
        var html = ''
        html += '<div class="row justify-content-end">'
        // sesi input

        // view
        html += '<div class="col-12">'
        html += '<div class="card bg-light-grey shadow-sm">'
        html += '<div class="card-body">'

        html += '<div class="row">'
        html += '<div class="col-4">'
        html += '<p class="fw-bolder m-0 small">Review Setoran</p>'
        html += '<p class="m-0 small-text">Delivery</p>'
        html += '</div>'

        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">Stock Tersedia</p>'
        html += '<h1 class="fw-bolder">' + dataDelivery.qty.good + '</h1>'
        html += '</div>'
        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">Good Sorting</p>'
        html += '<h1 class="fw-bolder" id="goodSorting">--</h1>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        // view

        // jumlah bad
        html += '<div class="col-8 text-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jumlah Bad</b></p>'
        html += '<input class="form-control form-control-lg nominal form-sortir form-invisible-line" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahBad" oninput="goodSortingFill()" value="' + bad + '" tabindex="1" role="dialog">'
        html += '<hr class="m-0">'
        html += '</div>'
        html += '<div class="col-12 text-end pe-4">'
        html += '<div class="row pt-2 justify-content-end">'
        for (let i = 0; i <= 6; i++) {
            html += '<div class="col-1 pe-0">'
            html += '<button class="btn btn-outline-dark btn-sm w-100 shadow-none" onclick="autoJumlahBad(' + i + '),goodSortingFill()">' + i + '</button>'
            html += '</div>'
        }
        html += '</div>'
        html += '</div>'
        // jumlah bad

        // jam setoran
        html += '<div class="col-4 text-end align-self-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jam Setoran</b></p>'
        html += '<input class="form-control form-control-lg form-invisible-line" style="background-color:transparent;border:0px;" type="time" placeholder="0" autocomplete="off" id="jamSetoran" value="' + time + '">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-12 text-end">'
        html += '<div class="row pt-2 justify-content-end">'
        html += '<div class="col-4">'
        html += '<button class="btn btn-outline-dark btn-sm shadow-none" onclick="autoJamSetoran()">Auto <i class="fa fa-clock-o ms-2"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // jam setoran

        html += '<div class="col-12 text-end pt-3">'
        html += '<button class="btn btn-primary btn-sm" id="btnSimpan" onclick="filteredSortir()" tabindex="2">Simpan</button>'
        html += '</div>'
        // sesi input
        html += '</div>'
        $('#formEntryData').html(html)
        // $('#modal').on('shown.bs.modal', function() {
        setTimeout(function() {
            $('#jumlahBad').focus();
        }, 100);
        // })
        $('.nominal').on('keypress', handleNumericInput);
        $('.form-sortir').on('keypress', function(e) {
            if (e.which == 13) { // Tombol Enter ditekan
                e.preventDefault();
                filteredSortir()
            }
        });
        goodSortingFill()
    }

    function filteredSortir() {
        var jumlahBad = $('#jumlahBad').val()
        if (jumlahBad == 0 || jumlahBad == '0' || !jumlahBad) {
            Swal.fire({
                text: 'Setoran Tidak ada jumlah Bad, apakah anda ingin menyelesaikan Sortir ke ' + dataSaveSetoran.number + ' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    JustOnCamAfterAdd = true
                    arrangeVariableInsert(1)
                }
            })
        } else {
            JustOnCamAfterAdd = true
            arrangeVariableInsert()
        }
    }

    function formFILLUP(id = null, edit = false) {
        firstAddedResultProductPersonId = ''
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var dataEdit
        var good = ''
        var bad = dataDelivery.qty.reject
        var time = timeNow()
        if (edit) {
            dataEdit = findStatusEdit(id, 'FILLUP')
            good = dataEdit.qty.good
            bad = dataEdit.qty.good
            time = formatJamMenit(dataEdit.qty.process_at)
        }
        var html = ''
        html += '<div class="row justify-content-end">'
        // sesi input

        // view
        html += '<div class="col-12">'
        html += '<div class="card bg-light-grey shadow-sm">'
        html += '<div class="card-body">'

        html += '<div class="row">'
        html += '<div class="col-4">'
        html += '<p class="fw-bolder m-0 small">Review QC</p>'
        html += '<p class="m-0 small-text">QC Sorting</p>'
        html += '</div>'

        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">QC Reject</p>'
        if (!dataDelivery.qty.reject) {
            dataDelivery.qty.reject = 0
        }
        html += '<h1 class="fw-bolder">' + dataDelivery.qty.reject + '</h1>'
        html += '</div>'
        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">Setoran Reject</p>'
        html += '<h1 class="m-0 fw-bolder" id="showSetoranReject">--</h1>'
        html += '<p class="m-0 super-tiny-text" id="textSetoranReject"></p>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        // view

        // jumlah setoran
        html += '<div class="col-8 text-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jumlah Setoran Reject</b></p>'
        html += '<input class="form-control form-control-lg nominal form-fillup form-invisible-line" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahBad" oninput="setoranRejectFill()" value="' + bad + '" tabindex="1" role="dialog">'
        html += '<hr class="m-0 text-danger">'
        html += '</div>'

        html += '<div class="col-12 text-end">'
        html += '<div class="row pt-2 justify-content-end">'
        html += '<div class="col-4">'
        html += '<button class="btn btn-outline-dark btn-sm shadow-none" onclick="autoSetoranReject(),setoranRejectFill()">Auto <i class="fa fa-clock-o ms-2"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // jumlah setoran

        // jam setoran
        html += '<div class="col-5 text-end align-self-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jam Setoran</b></p>'
        html += '<input class="form-control form-control-lg form-invisible-line" style="background-color:transparent;border:0px;" type="time" placeholder="0" autocomplete="off" id="jamSetoran" value="' + time + '">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-12 text-end">'
        html += '<div class="row pt-2 justify-content-end">'
        html += '<div class="col-4">'
        html += '<button class="btn btn-outline-dark btn-sm shadow-none" onclick="autoJamSetoran()">Auto <i class="fa fa-clock-o ms-2"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // jam setoran

        html += '<div class="col-12 text-end pt-3">'
        html += '<button class="btn btn-primary btn-sm" id="btnSimpan" onclick="insertFillup()" tabindex="2">Simpan dan Selesaikan</button>'
        html += '</div>'
        // sesi input
        html += '</div>'
        $('#formEntryData').html(html)
        // $('#jumlahBad').focus();
        // $('#modal').on('shown.bs.modal', function() {
        setTimeout(function() {
            $('#jumlahBad').focus();
        }, 100);
        // })
        $('.nominal').on('keypress', handleNumericInput);
        $('.form-fillup').on('keypress', function(event) {
            if (event.which === 13) { // Tombol Enter ditekan
                event.preventDefault();
                insertFillup()
            }
        });
        setoranRejectFill()
    }

    function insertFillup() {
        if (checkNotEmpty('form-fillup')) {
            JustOnCamAfterAdd = true
            arrangeVariableInsert()
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Tidak Lengkap',
                text: 'Data yang dimasukkan Tidak Lengkap'
            });
        }
    }

    function formDONE(id = null, edit = false) {
        firstAddedResultProductPersonId = ''
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var html = ''

        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="card shadow-none border-0">'
        html += '<div class="card-body">'

        html += '<div class="row">'

        html += '<div class="col-12 pb-5">'
        html += '<lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/success.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>'
        html += '</div>'

        html += '<div class="col-3">'
        html += '<p class="fw-bolder m-0 small">Summary</p>'
        html += '<p class="m-0 super-small-text">All Deliveries are Complete</p>'
        html += '</div>'

        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text fw-bolder">Good Stock</p>'
        html += '<h1 class="fw-bolder text-success">' + dataDelivery.qty.good + '</h1>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text fw-bolder">Waste Stock</p>'
        if (!dataDelivery.qty.waste) {
            dataDelivery.qty.waste = 0
        }
        html += '<h1 class="fw-bolder text-danger">' + dataDelivery.qty.waste + '</h1>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text fw-bolder">Reject Stock</p>'
        if (!dataDelivery.qty.reject) {
            dataDelivery.qty.reject = 0
        }
        html += '<h1 class="fw-bolder text-orange">' + dataDelivery.qty.reject + '</h1>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#formEntryData').html(html)
        $('.nominal').on('keypress', handleNumericInput);
    }

    function formWorkProgress(dataDetail, dataStatus, edit = false) {
        // console.log(dataStatus)
        if (!dataDetail) {
            dataDetail = dataSaveSetoran
        } else {
            dataSaveSetoran = {
                result_product_person_id: dataDetail.result_product_person_id,
                datetime: dataDetail.datetime,
                number: dataDetail.number,
                next_status: dataStatus.nextStatus,
                qty_good: dataStatus.qty.good,
                qty_reject: dataStatus.qty.reject,
                qty_delivery_good: dataDetail.delivery.good,
                qty_sortir_good: dataDetail.sortir.good,
                worker_id: dataStatus.worker_id
            }
        }
        var html = ''
        html += '<div class="row w-100 p-3 pe-1 pt-4">'

        html += '<div class="col-7 pb-3">'
        html += '<h2 class="m-0 fw-bolder">' + dataStatus.nextStatus + ' <span id="badgeStatusEdit"></span></h2>'
        html += '<p class="m-0 fw-bolder small-text">SETORAN ' + dataDetail.number + '</p>'
        html += '</div>'
        html += '<div class="col-5 pb-3">'
        // select
        html += '<select class="form-select shadow-none text-dark" id="productSetoran" style="border:none">'
        dataEntry.workPlanMachine.products.forEach(e => {
            html += '<option value="' + e.product.id + '" data-unit="' + e.unit_input.id + '" data-work_plan_product_id="' + e.work_plan_product_id + '">' + e.product.name + '</option>'
        });
        html += '<select>'
        // select
        html += '</div>'
        // ---
        html += '<div class="col-12" id="formEntryData">'
        html += '</div>'
        //---
        html += '</div>'
        $('#formWorkProgress').html(html)
        var badge = ''
        if (edit) {
            badge = '<span class="badge bg-warning ms-2 small"><i class="fa fa-pencil me-2"></i>Edit</span>'
        }
        $('#badgeStatusEdit').html(badge)
        var check = checkLabelEdit(dataStatus.nextStatus)
        if (check) {
            eval(`form${dataStatus.nextStatus}(dataDetail.result_product_person_id,edit)`)
        } else {
            $('#formEntryData').html(emptyReturn('Anda Tidak Memiliki Akses'))
        }
    }

    function setoranBaru(worker_id) {
        dataSaveSetoran = {}
        var html = ''
        var numSetoran = findNumberofSetoran(worker_id)
        var result_product_person_id = createCodeId(worker_id)
        var dataStatus = findStatus(result_product_person_id)
        var e = {
            result_product_person_id: result_product_person_id,
            datetime: currentDateTime(),
            number: parseInt(numSetoran) + parseInt(newSetoranBar),
            next_status: dataStatus.nextStatus,
            qty_good: dataStatus.qty.good,
            qty_sortir_good: 0,
            qty_delivery_good: 0,
            worker_id: worker_id
        }
        dataSaveSetoran = e
        html += setoranBar(e, deleteAndCloseButton('setoran', worker_id, result_product_person_id), '', '--', '<i class="fa fa-clock-o text-grey"></i>')
        $('#setoranSemu').append(html)
        $('#btnNewSetoran').attr('hidden', true)
        isiWorkProgress(result_product_person_id)
        // newSetoranBar++
    }

    function currentTimeTitikDua() {
        var d = new Date();
        var jam = d.getHours();
        var menit = d.getMinutes();
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        var time = jam + ":" + menit;
        return time;
    }

    function autoJamSetoran() {
        $('#jamSetoran').val(currentTimeTitikDua())
    }

    function autoJamMaterial(worker_id, item_id, material_id) {
        $('#jamMaterial' + worker_id + item_id + material_id).val(currentTimeTitikDua())
    }

    function autoJumlahGood(value) {
        $('#jumlahGood').val(value)
    }

    function autoJumlahBad(value) {
        $('#jumlahBad').val(value)
    }

    function autoSetoranReject() {
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        $('#jumlahBad').val(dataDelivery.qty.reject)
    }

    function setoranRejectFill() {
        var value = $('#jumlahBad').val()
        if (!value) {
            value = 0
        }
        $('#showSetoranReject').html(value)
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        if (dataDelivery.qty.reject == value) {
            $('#textSetoranReject').html('<span class="text-success">Jumlah Sesuai <i class="fa fa-check ms-2"></i></span>')
        } else {
            $('#textSetoranReject').html('<span class="text-danger">Jumlah Tidak Sesuai <i class="fa fa-times ms-2"></i></span>')
        }
    }

    function goodSortingFill() {
        var value = $('#jumlahBad').val()
        if (!value) {
            value = 0
        }
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var goodStock = parseInt(dataDelivery.qty.good) - parseInt(value)
        $('#goodSorting').html('<span class="text-success">' + goodStock + '</span>')
    }

    function AddedResultProductPersonId() {
        firstAddedResultProductPersonId = dataSaveSetoran.result_product_person_id
    }

    function insertWithNextPerson() {
        firstAddedResultProductPersonId = dataSaveSetoran.result_product_person_id
        if (checkNotEmpty('form-delivery')) {
            if (checkNotLong('form-delivery')) {
                JustOnCamAfterAdd = true
                arrangeVariableInsert()
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Terlalu Panjang',
                    text: 'Data yang dimasukkan Terlalu Panjang'
                });
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Tidak Lengkap',
                text: 'Data yang dimasukkan Tidak Lengkap'
            });
        }
    }

    function checkNotEmpty(kelas) {
        var value = $('.' + kelas).map(function() {
            return $(this).val();
        }).get();
        var stillEmpty = true
        for (let i = 0; i < value.length; i++) {
            if (value[i] == null || value[i] == undefined || value[i] == '') {
                stillEmpty = false
            }
        }
        return stillEmpty
    }

    function checkNotLong(kelas) {
        var value = $('.' + kelas).map(function() {
            return $(this).val();
        }).get();
        var stillNormal = true
        for (let i = 0; i < value.length; i++) {
            if (value[i].length > 9) {
                stillNormal = false
            }
        }
        return stillNormal
    }

    function arrangeVariableInsert(autoComplete = null) {
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var jamSetoran = dataEntry.workPlanMachine.date + ' ' + $('#jamSetoran').val() + ':00'
        var jumlahBad = $('#jumlahBad').val()
        var jumlahInput = $('#jumlahGood').val()
        if (!jumlahBad) {
            jumlahBad = 0
        }

        if (autoComplete) {
            dataSaveSetoran.qty_sortir_good = dataDelivery.qty.good
        }
        var variableInsert = {
            DELIVERY: {
                datetime: jamSetoran,
                employee_id_deliv: user_id,
                qty_good_deliv: jumlahInput,
                qty_waste_deliv: jumlahBad,
                note_deliv: '',
            },
            SORTIR: {
                is_sortir: 1,
                sortir_at: jamSetoran,
                employee_id_sortir: user_id,
                qty_good_sortir: parseInt(dataSaveSetoran.qty_delivery_good) - parseInt(jumlahBad),
                qty_reject_sortir: jumlahBad,
                note_sortir: ''
            },
            FILLUP: {
                is_fillup: 1,
                fillup_at: jamSetoran,
                employee_id_fillup: user_id,
                qty_good_fillup: jumlahBad,
                qty_waste_fillup: 0,
                note_fillup: '',
            },
            COMPLETE: {
                is_complete: 1,
                complete_at: jamSetoran,
                employee_id_complete: user_id,
                qty_final: parseInt(dataSaveSetoran.qty_sortir_good) + parseInt(jumlahBad),
                note_complete: '',
            }
        }
        var id_product = $("#productSetoran").val()
        var unit_product = $("#productSetoran").find(':selected').data('unit')
        var work_plan_product_id = $("#productSetoran").find(':selected').data('work_plan_product_id')
        var dataMentah = {
            id: dataSaveSetoran.result_product_person_id,
            number: dataSaveSetoran.number,
            employee_id: dataSaveSetoran.worker_id,
            shift_id: dataEntry.workPlanMachine.shift_id,
            machine_id: dataEntry.workPlanMachine.machine.id,
            work_plan_id: dataEntry.workPlanMachine.work_plan_id,
            created_at: currentDateTime(),
            updated_at: currentDateTime(),
            item_id: id_product,
            unit_id: unit_product,
            work_plan_product_id: work_plan_product_id,
        }

        var data = {
            resultProductPerson: {
                ...dataMentah,
                ...variableInsert[dataSaveSetoran.next_status],
            }
        }
        if (autoComplete || dataSaveSetoran.next_status == 'FILLUP') {
            var dataNext = variableInsert['COMPLETE']
            data.resultProductPerson = {
                ...data.resultProductPerson,
                ...dataNext
            };
        }
        if (dataSaveSetoran.qty_delivery_good > 0 && jumlahInput != dataSaveSetoran.qty_delivery_good) {
            // edit DELIVERY FULL
            var dataEdit = {
                qty_good_deliv: jumlahInput,
                qty_waste_deliv: jumlahBad,
            }
            if (dataDelivery.status == 'SORTIR') {
                // console.log(dataDelivery)
                dataEdit = {
                    ...dataEdit,
                    ...{
                        qty_good_sortir: parseInt(jumlahInput) - parseInt(dataDelivery.qty.reject),
                        qty_reject_sortir: parseInt(dataDelivery.qty.reject),
                    }
                }
            } else if (dataDelivery.status == 'COMPLETE' && dataDelivery.qty.reject == 0) {
                dataEdit = {
                    ...dataEdit,
                    ...{
                        qty_good_sortir: parseInt(jumlahInput) - parseInt(dataDelivery.qty.reject),
                        qty_reject_sortir: parseInt(dataDelivery.qty.reject),
                        qty_final: (parseInt(jumlahInput) - parseInt(dataDelivery.qty.reject)) + parseInt(dataDelivery.qty.reject),
                    }
                }
            } else if (dataDelivery.status == 'COMPLETE' && dataDelivery.qty.reject > 0) {
                dataEdit = {
                    ...dataEdit,
                    ...{
                        qty_good_sortir: parseInt(jumlahInput) - parseInt(dataDelivery.qty.reject),
                        qty_reject_sortir: parseInt(dataDelivery.qty.reject),
                        qty_final: (parseInt(jumlahInput) - parseInt(dataDelivery.qty.reject)) + parseInt(dataDelivery.qty.reject),
                        qty_good_fillup: parseInt(dataDelivery.qty.reject),
                    }
                }
            }
            var data = {
                resultProductPerson: {
                    ...dataMentah,
                    ...dataEdit,
                }
            }
            // edit DELIVERY FULL
        }
        if (offlineMode) {
            // mode offline
            simpanVariableOffline(data, dataDelivery)
        } else {
            // mode online
            // console.log(dataSaveSetoran)
            // console.log(jumlahInput)
            // console.log(dataDelivery)
            // console.log(data)
            simpanData(data)
        }
    }

    function simpanVariableOffline(data, dataDelivery) {
        $('#textAutoSave').html('')
        var dataEmployee = dataEntry.employee.find((v, k) => {
            if (v.id == data.resultProductPerson.employee_id) return true
        })
        variableSaveOffline.resultProductPerson.push(data.resultProductPerson)
        dataDetailDelivery.push({
            'worker_id': data.resultProductPerson.employee_id,
            'worker_name': dataEmployee.name,
            'result_product_person_id': data.resultProductPerson.id,
            'number': data.resultProductPerson.number,
            'datetime': data.resultProductPerson.datetime,
            'item': {
                id: data.resultProductPerson.item_id,
            },
            'unit': {
                id: data.resultProductPerson.unit_id
            },
            'delivery': {
                good: data.resultProductPerson.qty_good_deliv
            },
            'sortir': null,
            'fillup': null,
            'complete': null,
        })
        buttonSaveOfflineMode(variableSaveOffline.resultProductPerson)
        cetakQR(firstAddedResultProductPersonId)
    }

    function buttonSaveOfflineMode(data) {
        if (data.length) {
            $('#buttonSaveOfflineMode').prop("hidden", false);
        } else {
            $('#buttonSaveOfflineMode').prop("hidden", true);
        }
    }

    function loadSimpanOfflineMode() {
        $('#modal').modal('show')
        $('#modalDialog').removeClass('modal-xl').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Data Offline Mode</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12" id="listDataOfflineMode">'



        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        // html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="simpanOfflineMode()">Simpan</button>'
        $('#modalFooter').html(html_footer)
        listDataOfflineMode()
    }

    function listDataOfflineMode() {
        var html_body = ''
        variableSaveOffline.resultProductPerson.forEach(e => {
            var dataEmployee = dataEntry.employee.find((v, k) => {
                if (v.id == e.employee_id) return true
            })
            html_body += '<div class="card shadow-none mb-1">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row justify-content-between">'
            html_body += '<div class="col-auto">'
            html_body += '<p class="m-0 fw-bolder small">Setoran ke ' + e.number + '</p>'
            html_body += '<p class="m-0 fw-bolder small-text">' + dataEmployee.name + '</p>'
            html_body += '<p class="m-0 super-small-text">' + e.datetime + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto align-self-center">'
            html_body += '<p class="m-0 fw-bolder">' + e.qty_good_deliv + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto align-self-center">'
            html_body += '<button class="btn btn-sm btn-primary" onclick="saveOneByOneOffline(' + "'" + e.id + "'" + ')">Retry</button>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        });
        $('#listDataOfflineMode').html(html_body)
    }

    function saveOneByOneOffline(id) {
        var data = deepCopy(variableSaveOffline.resultProductPerson)
        var dataFilter = data.filter((v, k) => {
            if (v.id == id) return true
        })
        var newData = {}
        newData.resultProductPerson = dataFilter
        var type = 'POST'
        var button = '#btnSimpanOffline'
        var url = '<?php echo api_produksi('setResultProductPerson'); ?>'
        kelolaDataSaveAuto(newData, type, url, button)
    }

    function simpanOfflineMode() {
        firstAddedResultProductPersonId = ''
        var type = 'POST'
        var button = '#btnSimpanOffline'
        var url = '<?php echo api_produksi('setResultProductPerson'); ?>'
        var data = deepCopy(variableSaveOffline)
        if (variableSaveOffline.resultProductPerson.length) {
            kelolaDataSaveAuto(data, type, url, button)
        }
    }

    function simpanData(data) {
        var type = 'POST'
        var button = '#btnSimpan'

        var url = '<?php echo api_produksi('setResultProductPerson'); ?>'
        kelolaData(data, type, url, button)
    }

    function simpanMaterial() {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setRemainingMaterialPerson'); ?>'
        // console.log(dataSaveMaterial)
        kelolaData(dataSaveMaterial, type, url, button)
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
                // $('#modal').modal('hide')
                $('#btnNewSetoran').removeAttr('hidden', true)
                loadAfterSave()
            }
        });
    }

    function loadAfterSave() {
        scanned = false
        dataSaveMaterial = {
            remainingMaterialPerson: [],
            deletedId: {
                remainingMaterialPerson: []
            }
        }
        variableSaveOffline = {
            resultProductPerson: [],
            deletedId: []
        }
        materialIdClicked = false
        if (offlineMode) {
            buttonSaveOfflineMode(variableSaveOffline.resultProductPerson)
        }
        loadData()
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

    function textPirnt(id) {
        $.ajax({
            url: "<?= base_url('api/printThermal') ?>", // The server-side script to handle printing
            data: {
                id: id,
            },
            type: 'POST',
            success: function(response) {
                // console.log(response);
            }
        });
    }

    function cetakQR(id) {
        var data = dataDetailDelivery.find((v, k) => {
            if (v.result_product_person_id == id) return true
        })

        $('#qrcode').empty()
        var qrcode = new QRCode("qrcode", {
            text: data.worker_id + ',' + id,
            width: 128,
            height: 128,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
        $(".qrcode > img").css({
            margin: 0,
            padding: 0,
        });
        var image = qrcode._oDrawing._elCanvas.toDataURL("image/png")
        doPrint(image, data, id)
    }

    function getDateStringWithTimeReal(orginaldate) {
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

    function doPrint(image, data, id) {
        firstAddedResultProductPersonId = ''
        var dataEmployee = dataEntry.employee.find((v, k) => {
            if (v.id == data.worker_id) return true
        })
        var nomorMeja = ''
        if (dataEmployee) {
            nomorMeja = dataEmployee.row_code + ' - '
        }
        var totalADay = 0;
        var templateTotalADay = ''
        if (fastMode) {
            totalADay = number_format(totalSetoran(data.worker_id))
            templateTotalADay = 'Total : ' + totalADay
        }
        var dataStatus = findStatus(id)

        if (jspmWSStatus()) {
            var b64Prefix = "data:image/png;base64,";
            image = image.trim();
            var imgBase64Content = image.substring(b64Prefix.length, image.length);
            //Create a ClientPrintJob
            var cpj = new JSPM.ClientPrintJob();
            var cpj2 = new JSPM.ClientPrintJob();
            var cpj3 = new JSPM.ClientPrintJob();
            //Set Printer type (Refer to the help, there many of them!)
            // cpj.clientPrinter = new JSPM.InstalledPrinter('POS-58(copy of 1)');
            // cpj2.clientPrinter = new JSPM.InstalledPrinter('POS-58(copy of 1)');
            cpj.clientPrinter = new JSPM.DefaultPrinter();
            cpj2.clientPrinter = new JSPM.DefaultPrinter();
            cpj3.clientPrinter = new JSPM.DefaultPrinter();
            var myImageFile = new JSPM.PrintFile(imgBase64Content, JSPM.FileSourceType.Base64, "MyPicture-PX=0.4-PY=0.1-PW=1-PH=1-PO=P.jpg", 1);
            myImageFile.printRotation = 'Rot90';
            // var myImageFile = new JSPM.PrintFile(imgBase64Content, JSPM.FileSourceType.Base64, 'myFileToPrint.png', 1);
            // printToBluetoothPrinter($('#installedPrinterName').val(), 'test')
            var esc = '\x1B'; //ESC byte in hex notation
            var newLine = '\x0A'; //LF byte in hex notation

            var cmds = esc + "@"; //Initializes the printer (ESC @)
            cmds += esc + '!' + '\x31' + '\x00'; //Emphasized + Double-height + Double-width mode selected (ESC ! (8 + 16 + 32)) 56 dec => 38 hex
            // cmds += newLine;
            cmds += nomorMeja + 'Setoran ' + data.number; //text to print
            // cmds += image
            cmds += esc + '!' + '\x00'; //Character font A selected (ESC ! 0)
            cmds += newLine;
            cmds += data.worker_name
            cmds += newLine;
            cmds += getDateStringWithTimeReal(data.datetime);
            cmds += newLine;
            cmds += 'Good : ' + data.delivery.good + '  | Reject : '
            cmds += newLine;
            var cmds2 = ''
            cmds2 += templateTotalADay
            cmds2 += newLine + newLine
            if (fastMode) {
                cmds2 += newLine
            }
            //add file to print job
            cpj.printerCommands = cmds;
            cpj2.files.push(myImageFile);
            cpj3.printerCommands = cmds2;
            var cpjg = new JSPM.ClientPrintJobGroup();
            cpjg.jobs.push(cpj);
            cpjg.jobs.push(cpj2);
            cpjg.jobs.push(cpj3);
            //Send print job to printer!
            cpjg.sendToClient()
            console.log(variableSaveOffline.resultProductPerson)
            firstAddedResultProductPersonId = ''
            scannerQR()
        }
    }

    function jspmWSStatus() {
        if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open) {
            return true;
        } else if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Closed) {
            alert('JSPrintManager (JSPM) is not installed or not running! Download JSPM Client App from https://neodynamic.com/downloads/jspm');
            return false;
        } else if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Blocked) {
            alert('JSPM has blocked this website!');
            return false;
        }
    }

    function configurationPrinters() {
        var data = ''
        if (jspmWSStatus()) {
            //get client installed printers
            // console.log(JSPM.JSPrintManager.getPrinters())
            JSPM.JSPrintManager.getPrinters().then(function(myPrinters) {
                for (var i = 0; i < myPrinters.length; i++) {
                    data += '<div class="col-12 mb-2">'

                    data += '<div class="card card-hoper pointer shadow-sm">'
                    data += '<div class="card-body">'

                    data += '<div class="row">'
                    data += '<div class="col-8 align-self-center">'
                    data += '<p class="m-0 small">' + myPrinters[i] + '</p>'
                    data += '</div>'
                    data += '</div>'

                    data += '</div>'
                    data += '</div>'

                    data += '</div>'
                }
            })
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Configuration Printers</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 small fw-bolder">Set your Default Printer : </p>'

        html_body += '<div class="row mt-2">'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="simpanDefaultPrinter()">Simpan</button>'
        $('#modalFooter').html(html_footer)
        // console.log(data)
    }

    function openModalScanner() {
        $('#modal').modal('show')
        scannerQR()
    }
    var jumEmploye = 0

    function scannerQR() {
        firstAddedResultProductPersonId = ''
        // $('#modal').modal('show')
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
        $('#modalDialog').removeClass('modal-xl').addClass('modal-dialog modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">QR Scan | ' + formatDateIndonesia(dataEntry.workPlanMachine.date) + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row justify-content-center">'
        // html_body += '<div class="col-6 text-center">'

        // html_body += '<lottie-player style="width: 100%;height:100%" src="<?= base_url() ?>assets/json/scanner.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>'

        // html_body += '</div>'
        html_body += '<div class="col-12 text-center">'
        html_body += '<div class="row" style="height:200px;">'
        html_body += '<div class="col-12 align-self-center"><p class="m-0 small fw-bolder">Running a Scanner</p></div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 text-center">'
        html_body += '<input class="form-control" type="text" id="codeQR" role="dialog" autocomplete="off"  value="' + idEmployeeGiling[jumEmploye] + '">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        // $('#modal').on('shown.bs.modal', function() {
        setTimeout(function() {
            $('#codeQR').focus();
        }, 100);
        // });
        $("#codeQR").keypress(function(event) {
            // Periksa apakah tombol yang ditekan adalah 'Enter' (kode 13)
            if (event.keyCode === 13) {
                jumEmploye++
                changeScanner()
            }
        });
    }
    var scannedId = ''

    function changeScanner() {
        if ($('#codeQR').val()) {
            scannedId = $('#codeQR').val()
            checkWorkerId(scannedId)
        }
    }

    function fastModeOn() {
        if ($('#checkFastMode').is(':checked')) {
            fastMode = true
        } else {
            fastMode = false
        }
    }

    function auto500On() {
        if ($('#checkAuto500').is(':checked')) {
            auto500 = true
        } else {
            auto500 = false
        }
    }

    function offlineModeOn() {
        if ($('#checkOfflineMode').is(':checked')) {
            noConnection()
        } else {
            yesConnection()
        }
    }

    function noConnection() {
        offlineMode = true
        $('#offlineModePane').prop("hidden", false);
        setIntervalOfflineMode()
    }

    function yesConnection() {
        offlineMode = false
        $('#offlineModePane').prop("hidden", true);
        setIntervalOfflineMode()
    }

    // Panggil fungsi saat halaman dimuat atau pada suatu peristiwa
    window.addEventListener("beforeunload", function(event) {
        if (variableSaveOffline.resultProductPerson.length) {
            event.returnValue = "Data Offline Mode masih belum di Upload";
        }
    });

    var intervalId

    function setIntervalOfflineMode() {
        if (!offlineMode) {
            clearInterval(intervalId);
        } else {
            // tiap satu menit
            intervalId = setInterval(autoSaveAtOfflineMode, 30 * 1000);
        }
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function autoSaveAtOfflineMode() {
        var type = 'POST'
        var button = '#btnSimpanOffline'
        var url = '<?php echo api_produksi('setResultProductPerson'); ?>'
        var data = deepCopy(variableSaveOffline)
        if (variableSaveOffline.resultProductPerson.length) {
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
                console.log('Auto Save' + data)
                // variableSaveOffline = {
                //     resultProductPerson: [],
                //     deletedId: []
                // }
                // Buat salinan data agar data asli tidak berubah
                var dataToDelete = deepCopy(data.resultProductPerson)
                let newData = deepCopy(variableSaveOffline.resultProductPerson).slice();
                // Loop melalui setiap elemen di dataToDelete dan hapus dari newData
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                variableSaveOffline.resultProductPerson = newData
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
                if (!variableSaveOffline.resultProductPerson.length) {
                    $('#textAutoSave').html('<span class="ms-2 super-small-text">Tersimpan Otomatis</span>')
                }
                buttonSaveOfflineMode(variableSaveOffline.resultProductPerson)
                loadDataAfterAutoSave()
            }
        });
    }

    function loadDataAfterAutoSave() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductionDelivEntry'); ?>"
        getDataAfterAutoSave(data, url)
    }

    function getDataAfterAutoSave(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                // $('#textAutoSave').html('<span class="ms-2 super-small-text">Gagal Memuat Data, Refresh Data</span>')
            },
            beforeSend: function() {
                // $('#textAutoSave').html('<span class="ms-2 super-small-text">Memuat Data...</span>')
            },
            success: function(response) {
                // $('#textAutoSave').html('<span class="ms-2 super-small-text">Tersimpan Otomatis</span>')
                dataEntry = response.data
                arrangeVariableAutoSave()
            }
        })
    }

    function arrangeVariableAutoSave() {
        dataDetailDelivery = []
        dataMaterial = []
        dataEntry.productionDelivery.forEach(e => {
            e.data.forEach(el => {
                dataDetailDelivery.push({
                    'worker_id': e.employee_worker.id,
                    'worker_name': e.employee_worker.name,
                    'result_product_person_id': el.result_product_person_id,
                    'number': el.number,
                    'datetime': el.datetime,
                    'item': el.item,
                    'unit': el.unit,
                    'delivery': el.delivery,
                    'sortir': el.sortir,
                    'fillup': el.fillup,
                    'complete': el.complete,
                })
            });
        })
        dataEntry.productMaterial.forEach(e => {
            var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                if (v.product.id == e.item_id) return true
            })
            e.material_group.forEach(el => {
                var itemDefault = el.items.find((v, k) => {
                    if (v.item.id == el.item_id_default) return true
                })
                dataMaterial.push({
                    work_plan_product_id: dataProducts.work_plan_product_id,
                    item_id: e.item_id,
                    item_name: e.name,
                    item_code: e.code,
                    item_name: e.name,
                    material_group_id: el.material_group.id,
                    material_group_name: el.material_group.name,
                    material_id: itemDefault.item.id,
                    material_code: itemDefault.item.code,
                    material_alias: itemDefault.item.alias,
                    material_name: itemDefault.item.name,
                    unit_id: itemDefault.unit.id,
                    unit_name: itemDefault.unit.name,
                })
            })
        })
        listDataOfflineMode()
    }

    function loadDataPeriodic() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductionDelivEntry'); ?>"
        getDataPeriodic(data, url)
    }

    function getDataPeriodic(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                // Swal.fire({
                //     icon: 'error',
                //     title: 'Oops...',
                //     text: 'Error Data'
                // });
            },
            beforeSend: function() {
                // $('#workerProgress').html(loadingDataReturn())
            },
            success: function(response) {
                // showSuccessToast()
                $('#textAutoSave').html('<span class="ms-2 super-small-text">Tersimpan Otomatis</span>')
                dataEntry = response.data
                arrangeVariablePeriodic()
            }
        })
    }

    function showSuccessToast() {
        var successToast = new bootstrap.Toast(document.getElementById('toast'));
        successToast.show();

        // Menutup toast secara otomatis setelah 3 detik (sesuaikan dengan kebutuhan)
        setTimeout(function() {
            successToast.hide();
        }, 3000);
    }

    function arrangeVariablePeriodic() {
        dataDetailDelivery = []
        dataMaterial = []
        dataEntry.productionDelivery.forEach(e => {
            e.data.forEach(el => {
                dataDetailDelivery.push({
                    'worker_id': e.employee_worker.id,
                    'worker_name': e.employee_worker.name,
                    'result_product_person_id': el.result_product_person_id,
                    'number': el.number,
                    'datetime': el.datetime,
                    'item': el.item,
                    'unit': el.unit,
                    'delivery': el.delivery,
                    'sortir': el.sortir,
                    'fillup': el.fillup,
                    'complete': el.complete,
                })
            });
        })
        dataEntry.productMaterial.forEach(e => {
            var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                if (v.product.id == e.item_id) return true
            })
            e.material_group.forEach(el => {
                var itemDefault = el.items.find((v, k) => {
                    if (v.item.id == el.item_id_default) return true
                })
                dataMaterial.push({
                    work_plan_product_id: dataProducts.work_plan_product_id,
                    item_id: e.item_id,
                    item_name: e.name,
                    item_code: e.code,
                    item_name: e.name,
                    material_group_id: el.material_group.id,
                    material_group_name: el.material_group.name,
                    material_id: itemDefault.item.id,
                    material_code: itemDefault.item.code,
                    material_alias: itemDefault.item.alias,
                    material_name: itemDefault.item.name,
                    unit_id: itemDefault.unit.id,
                    unit_name: itemDefault.unit.name,
                })
            })
        })
        $('#totalWorker').html(dataEntry.productionDelivery.length)
        $('#workerProgress').html(formWorkerProgress())
        searching()
    }
</script>