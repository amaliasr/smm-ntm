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
        padding-bottom: 3rem;
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
                                <!-- <button type="button" class="btn btn-sm btn-outline-dark shadow-none small-text" onclick="triggerQR()" id="btnQR">CAMERA<i class="fa fa-camera ms-2 text-green"></i></button> -->
                            </div>
                            <div class="col-auto ps-0 pe-0">
                                <button type="button" class="btn btn-sm btn-outline-dark shadow-none small-text" onclick="openModalScanner()">SCANNER<i class="fa fa-qrcode ms-2 text-green"></i></button>
                            </div>
                            <div class="col-auto ps-2 align-self-center">
                                <div class="btn-group float-end">
                                    <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        Option
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="width: 200px;">
                                        <li>
                                            <form class="px-3">
                                                <!-- <div class="form-check">
                                                    <input class="form-check-input checkAutoNext" type="checkbox" value="" id="checkAutoNext" onclick="autoNextOn()" checked>
                                                    <label class="form-check-label small" for="checkAutoNext">
                                                        Auto Next Setoran
                                                    </label>
                                                </div>
                                                <hr> -->
                                                <div class="form-check">
                                                    <input class="form-check-input selectModes" type="radio" value="" name="selectModes" id="checkMode" onclick="selectMode()" checked>
                                                    <label class="form-check-label small" for="checkMode">
                                                        Mode Manual
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input selectModes" type="radio" value="150" name="selectModes" id="checkMode150" onclick="selectMode()">
                                                    <label class="form-check-label small" for="checkMode150">
                                                        Mode 150
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input selectModes" type="radio" value="100" name="selectModes" id="checkMode100" onclick="selectMode()">
                                                    <label class="form-check-label small" for="checkMode100">
                                                        Mode 100
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input selectModes" type="radio" value="50" name="selectModes" id="checkMode50" onclick="selectMode()">
                                                    <label class="form-check-label small" for="checkMode50">
                                                        Mode 50
                                                    </label>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
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
                <div style="height: 400px;overflow-x: hidden;overflow-y: auto;" id="workerProgress">
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
    <div class="col-12 pt-3">
        <div class="card shadow-none h-100">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Detail Transaksi</b></p>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12">
                        <table class="table table-sm table-hover w-100" id="tableForm">
                            <thead>
                                <tr>
                                    <th class="small-text text-center align-middle" style="height:40px;">#</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">Time</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">Worker</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">Brand</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">QTY</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">Unit</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">Steps</th>
                                    <th class="small-text text-center align-middle" style="height:40px;">Status</th>
                                    <th class="small-text text-center align-middle" style="height:40px;"></th>
                                </tr>
                            </thead>
                            <tbody id="tableDetail">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-top" style="z-index: 99999;width: fit-content;">
    <div class="bg-orange text-white super-small-text p-2 text-center m-1 rounded-pill top-0 start-100 d-flex align-items-center align-self-center justify-content-center" style="width: 300px;min-height:40px;" id="offlineModePane" hidden>
        <span class="m-0 align-middle"><i class="fa fa-wifi me-2"></i>Offline Mode</span><span><i id="textAutoSave"></i></span><span id="buttonSaveOfflineMode" hidden><span id="" class="ms-2 btn btn-outline-dark text-white p-2 super-small-text" onclick="loadSimpanOfflineMode()"><i class="fa fa-eye me-1"></i>View</span><button id="btnSimpanOffline" class="ms-2 btn btn-dark p-2 super-small-text" onclick="autoSaveAtOfflineModeResult()"><i class="fa fa-save me-1"></i>Send All</button></span>
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
    // Memeriksa status koneksi setiap 60 detik (sesuaikan sesuai kebutuhan)


    function createCodeId(worker_id = '') {
        var date = worker_id + '' + (new Date).getTime()
        return date;
    }

    function replaceNullWithZero(variable) {
        return variable !== null ? variable : 0;
    }

    function findStatusEdit(id, menu) {
        var data = arrayDataDetailDelivery[id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == id) return true
        // })
        // console.log(data)
        var status
        var nextStatus
        var qty = {}
        var worker_id = null
        var item = ''
        var itemId = ''
        var itemName = '-'
        var step_status = ''
        var step_status_id = ''
        var warehouse_id
        var machine_step_profile_id
        var material_pickup_id
        var material_pickup_details
        var result_product_person_step = []
        var number = ''
        if (data) {
            number = data.number
            if (data.item_target) {
                worker_id = data.worker_id
                itemId = data.item.id
                item = data.item.alias
                itemName = data.item.name
                step_status = lastStatusSteps(data.result_product_person_step, 'name')
                step_status_id = lastStatusSteps(data.result_product_person_step, 'id')
                warehouse_id = getMaterialPickup(data.material_pickup).warehouse_id
                machine_step_profile_id = getMaterialPickup(data.material_pickup).machine_step_profile_id
                material_pickup_id = getMaterialPickup(data.material_pickup).id
                material_pickup_details = getMaterialPickup(data.material_pickup).material_pickup_details
                result_product_person_step = data.result_product_person_step
                if (menu == 'NEWDELIVER') {
                    qty = {
                        'good': getMaterialPickup(data.material_pickup).qty,
                        'process_at': data.datetime
                    }
                } else {
                    qty = deepCopy(data[menu.toLowerCase()])
                }
                status = menu
                nextStatus = menu
            }
        }
        return {
            id: id,
            status: status,
            nextStatus: nextStatus,
            qty: qty,
            worker_id: worker_id,
            item: item,
            step_status: step_status,
            step_status_id: step_status_id,
            itemName: itemName,
            itemId: itemId,
            warehouse_id: warehouse_id,
            machine_step_profile_id: machine_step_profile_id,
            material_pickup_id: material_pickup_id,
            material_pickup_details: material_pickup_details,
            result_product_person_step: result_product_person_step,
            number: number
        }
    }

    function lastStatusSteps(data, variable) {
        if (variable != 'all_steps') {
            var text = '-'
            if (data.length) {
                text = data[parseInt(data.length) - 1].machine_step[variable]
                if (text == null) {
                    text = '-'
                }
            }
        } else {
            var text = []
            if (data.length) {
                data.forEach(e => {
                    text.push(e.machine_step['name'])
                });
            }
        }
        return text
    }

    function lastStatusMachineProfileSteps(data, variable) {
        var text = '-'
        if (data.length) {
            text = data[parseInt(data.length) - 1].machine_step_profile_detail_id
            if (text == null) {
                text = '-'
            }
        }
        return text
    }

    function cekStatusProductPersonSteps(data) {
        if (data) {
            var cekData = data.find((v, k) => {
                if (v.is_complete == 1) return true
            })
            if (cekData) {
                return true
            } else {
                return false
            }
        } else {
            return false
        }
    }

    function cekAmbilMaterial(data) {
        if (data) {
            var cekData = data.find((v, k) => {
                if (v.is_pickup == 1) return true
            })
            if (cekData) {
                return true
            } else {
                return false
            }
        } else {
            return false
        }
    }

    function qtyMaterialPickup(data) {
        var output = 0
        if (data) {
            data.forEach(e => {
                // console.log(e)
                e.material_pickup_details.forEach(el => {
                    output = el.qty
                });
            });
        }
        return output
    }

    function getMaterialPickup(data) {
        var qty = 0
        var name = ''
        var warehouse_id
        var machine_step_profile_id
        var id
        var material_pickup_details = []
        var pickup_at = ''
        var unit_name = ''
        if (data) {
            data.forEach(e => {
                material_pickup_details = deepCopy(e.material_pickup_details)
                e.material_pickup_details.forEach(el => {
                    qty = el.qty
                    name = el.item.name
                    unit_name = el.unit.name
                });
                warehouse_id = e.warehouse.id
                machine_step_profile_id = e.machine_step_profile_id
                id = e.id
                pickup_at = e.pickup_at
            });
        }
        return {
            'qty': qty,
            'name': name,
            'warehouse_id': warehouse_id,
            'machine_step_profile_id': machine_step_profile_id,
            'id': id,
            'material_pickup_details': material_pickup_details,
            'pickup_at': pickup_at,
            'unit_name': unit_name,
        }
    }

    function findNumberNewBar(worker_id) {

    }

    function findStatus(id = null) {
        var data = arrayDataDetailDelivery[id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == id) return true
        // })
        // console.log(data)
        var status
        var nextStatus
        var qty = {}
        var worker_id = null
        var item = ''
        var itemId = ''
        var itemName = '-'
        var itemAlias = '-'
        var step_status = ''
        var step_status_id = ''
        var warehouse_id
        var machine_step_profile_id
        var machine_step_profile_detail_id
        var allSteps = []
        var number = ''
        if (data) {
            number = data.number
            if (data.item_target) {
                worker_id = data.worker_id
                itemId = data.item_target.id
                item = data.item_target.alias
                itemName = data.item_target.name
                itemAlias = data.item_target.alias
                step_status = lastStatusSteps(data.result_product_person_step, 'name')
                step_status_id = lastStatusSteps(data.result_product_person_step, 'id')
                allSteps = lastStatusSteps(data.result_product_person_step, 'all_steps')
                warehouse_id = getMaterialPickup(data.material_pickup).warehouse_id
                machine_step_profile_id = getMaterialPickup(data.material_pickup).machine_step_profile_id
                machine_step_profile_detail_id = lastStatusMachineProfileSteps(data.result_product_person_step)
                // console.log(data)
                // console.log(data.delivery.is_process)
                // console.log(cekAmbilMaterial(data.material_pickup))
                // console.log(cekStatusProductPersonSteps(data.result_product_person_step))
                // console.log(data.complete.is_process)
                if (!data.delivery.is_process && !cekAmbilMaterial(data.material_pickup) && !cekStatusProductPersonSteps(data.result_product_person_step) && !data.complete.is_process) {
                    // sedang ambil material
                    status = 'AMBIL MATERIAL'
                    nextStatus = 'SEDANG AMBIL MATERIAL'
                    qty = {
                        good: qtyMaterialPickup(data.material_pickup),
                    }
                } else if (!data.delivery.is_process && cekAmbilMaterial(data.material_pickup) && !cekStatusProductPersonSteps(data.result_product_person_step) && !data.complete.is_process) {
                    status = 'TELAH AMBIL MATERIAL'
                    nextStatus = 'DELIVERY'
                    qty = {
                        good: qtyMaterialPickup(data.material_pickup),
                    }

                } else if (data.delivery.is_process && cekAmbilMaterial(data.material_pickup) && !cekStatusProductPersonSteps(data.result_product_person_step) && !data.complete.is_process) {
                    // masih ngambag di delivery (karena ada reject)
                    status = 'DELIVERY'
                    nextStatus = 'FILLUP'
                    qty = {
                        waste: getWaste(data.result_product_person_id),
                        good: qtyMaterialPickup(data.material_pickup),
                    }

                } else if (data.delivery.is_process && cekAmbilMaterial(data.material_pickup) && cekStatusProductPersonSteps(data.result_product_person_step) && !data.complete.is_process) {
                    var checkAnyReject = checkIfAllStepIsReject(data.result_product_person_id)
                    var checkCompleteProfileStep = checkCompletedProfileStepsAll(data.result_product_person_id, machine_step_profile_id, itemId)
                    if (!checkCompleteProfileStep) {
                        // jika semua step belum complete
                        if (checkAnyReject.status == 'complete') {
                            // jika tidak ada reject
                            status = 'TELAH AMBIL MATERIAL'
                            nextStatus = 'DELIVERY'
                            qty = {
                                good: qtyMaterialPickup(data.material_pickup),
                            }
                        } else {
                            // jika ada reject
                            status = 'DELIVERY'
                            nextStatus = 'FILLUP'
                            qty = {
                                waste: data.delivery.waste,
                                total_waste: getWaste(data.result_product_person_id),
                                good: qtyMaterialPickup(data.material_pickup),
                            }
                        }
                    } else {
                        // console.log(checkCompleteProfileStep)
                        status = 'COMPLETE'
                        nextStatus = 'DONE'
                        qty = {
                            waste: data.complete.waste,
                            reject: data.complete.reject,
                            good: qtyMaterialPickup(data.material_pickup),
                        }
                    }

                } else if (data.delivery.is_process && cekAmbilMaterial(data.material_pickup) && cekStatusProductPersonSteps(data.result_product_person_step) && data.complete.is_process) {
                    status = 'COMPLETE'
                    nextStatus = 'DONE'
                    qty = {
                        waste: data.complete.waste,
                        reject: data.complete.reject,
                        good: data.complete.good,
                    }
                } else {
                    // console.log(data)
                    // console.log(data.delivery.is_process)
                    // console.log(cekAmbilMaterial(data.material_pickup))
                    // console.log(cekStatusProductPersonSteps(data.result_product_person_step))
                    // console.log(data.complete.is_process)
                    status = 'PROCESS'
                    nextStatus = 'DONE'
                    qty = {
                        good: 0
                    }
                }
            } else {
                status = 'NOT CREATED'
                nextStatus = 'NEWDELIVER'
                qty = {
                    good: 0
                }
            }
        } else {
            status = 'NOT CREATED'
            nextStatus = 'NEWDELIVER'
            qty = {
                good: 0
            }
        }
        return {
            id: id,
            status: status,
            nextStatus: nextStatus,
            qty: qty,
            worker_id: worker_id,
            item: item,
            step_status: step_status,
            step_status_id: step_status_id,
            itemName: itemName,
            itemAlias: itemAlias,
            itemId: itemId,
            warehouse_id: warehouse_id,
            machine_step_profile_id: machine_step_profile_id,
            machine_step_profile_detail_id: machine_step_profile_detail_id,
            allSteps: allSteps,
            number: number,
        }
    }

    function findDataResultPerson(result_product_person_id, machine_step_profile_detail_id) {
        var master = []
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        if (data) {
            var dataDetail = data.result_product_person_step.filter((v, k) => {
                if (v.machine_step_profile_detail_id == machine_step_profile_detail_id) return true
            })
            if (dataDetail.length) {
                master = dataDetail
            }
        }
        return master
    }

    function getWaste(result_product_person_id) {
        var qty = 0
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        if (data) {
            qty = data.delivery.waste
            if (qty == null) {
                qty = 0
            }
        }
        return qty
    }

    function checkIfStepIsDone(profile_step_id, result_product_person_id) {
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        var good = 0
        var reject = 0
        var process_at = 0
        var status = ''
        if (data) {
            // console.log(profile_step_id)
            // console.log(data.result_product_person_step)
            if (data.result_product_person_step) {
                var check = data.result_product_person_step.find((v, k) => {
                    if (v.machine_step_profile_detail_id == profile_step_id) return true
                })
                if (check) {
                    good = check.qty
                    reject = check.qty_reject
                    process_at = check.datetime
                    if (check.is_complete) {
                        status = 'complete'
                    } else {
                        if (check.is_reject) {
                            status = 'reject'
                        }
                    }
                }
            }
        }
        return {
            good: good,
            reject: reject,
            process_at: process_at,
            status: status
        }
    }

    function checkIfAllStepIsReject(result_product_person_id) {
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        var status = 'complete'
        if (data) {
            if (data.result_product_person_step) {
                data.result_product_person_step.forEach(e => {
                    if (e.is_reject) {
                        status = 'reject'
                    }
                });
            }
        }
        return {
            status: status
        }
    }

    function totalSetoran(worker_id) {
        var dataWorker = arrayDataDEntryProductionEntry[worker_id]
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
        var data = arrayDataDEntryProductionEntry[worker_id]
        var numSetoran = 1
        if (data) {
            if (data.data.length) {
                numSetoran = data.data[parseInt(data.data.length) - 1].number
            } else {
                numSetoran = 0
            }
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

    function shortenTextNoDots(text, maxLength) {
        if (text.length <= maxLength) {
            return text; // Mengembalikan teks asli jika panjangnya kurang dari atau sama dengan maxLength
        } else {
            var shortenedText = text.substring(0, maxLength); // Memperpendek teks dan menambahkan tanda titik-titik
            return shortenedText;
        }
    }

    function filterDataMachineSteps(data, criteria) {
        return data.filter(item => criteria.includes(item.machine_step_id));
    }

    function findmachineStep(idProduct, idStep) {
        var dataMaster = {
            listMachineStep: [],
            listMachineStepProduct: [],
            index: '',
            machine_step_profile_detail_id: '',
        }
        var data = dataEntry.machineStepProfile.find((v, k) => {
            if (v.item_id_product == idProduct) return true
        })
        // console.log(data)
        if (data) {
            var dataMachineStep = data.machine_step_profiles.find((v, k) => {
                if (v.id == idStep) return true
            })
            // console.log(idProduct)
            // console.log(dataMachineStep)
            if (dataMachineStep) {
                var machineStepProduct = dataMachineStep.machine_step_profile_details
                dataMaster.listMachineStep = machineStepProduct
                var stepProductDetail = dataMachineStep.machine_steps_product
                var totalStepProductDetail = []
                machineStepProduct.forEach(e => {
                    var array = filterDataMachineSteps(stepProductDetail, e.machine_step_ids)
                    array.forEach(el => {
                        totalStepProductDetail.push(el)
                    });
                });
                dataMaster.listMachineStepProduct = totalStepProductDetail
            }
        }
        if (dataMaster.listMachineStep.length) {
            var a = 0
            dataMaster.listMachineStep.forEach(e => {
                dataMaster.index = e.index
                dataMaster.machine_step_profile_detail_id = e.id
                e['data_machine_steps'] = []
                for (let i = 0; i < e.machine_step_ids.length; i++) {
                    var findStep = dataEntry.machineStep.find((v, k) => {
                        if (v.id == e.machine_step_ids[i]) return true
                    })
                    if (findStep) {
                        dataMaster.listMachineStep[a].data_machine_steps.push(findStep)
                    }
                }
                a++
            });
        }
        return dataMaster
    }

    function getMaterialMain(idProduct, idStep, idUnit, qtyInput) {
        // dataEntry.productMaterial
        var data = dataEntry.machineStepProfile.find((v, k) => {
            if (v.item_id_product == idProduct) return true
        })
        // console.log(data)
        var item_ids_material_main = []
        if (data) {
            var dataMachineStep = data.machine_step_profiles.find((v, k) => {
                if (v.id == idStep) return true
            })
            if (dataMachineStep) {
                item_ids_material_main = dataMachineStep.item_ids_material_main
            }
        }
        var dataCollect = []
        dataEntry.productMaterial.forEach(e => {
            e.material_group.forEach(el => {
                if (el) {
                    // console.log(e)
                    // console.log(el.item_id_default)
                    // console.log(idProduct)
                    // console.log(item_ids_material_main)
                    for (let i = 0; i < item_ids_material_main.length; i++) {
                        if (item_ids_material_main[i] == el.item_id_default) {
                            var dataUnit = el.item_default.unit_option.find((v, k) => {
                                if (v.id == el.requirement.unit_id) return true
                            })
                            eval('var qty = qtyInput ' + dataUnit.operator + ' ' + dataUnit.multiplier)
                            dataCollect.push({
                                'item_id': item_ids_material_main[i],
                                'unit_id_input': el.requirement.unit_id,
                                'qty_input': qtyInput,
                                'unit_id': el.item_default.unit.id,
                                'qty': qty,
                            })
                        }
                    }
                }
            });
        });

        return removeDuplicates(dataCollect)
    }

    function removeDuplicates(arr) {
        var uniqueArray = [];
        var uniqueItemIds = [];

        $.each(arr, function(index, obj) {
            if (uniqueItemIds.indexOf(obj.item_id) === -1) {
                uniqueItemIds.push(obj.item_id);
                uniqueArray.push(obj);
            }
        });

        return uniqueArray;
    }
</script>
<script>
    function emptyReturn(text, height = null) {
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
    var defaultleSetoran = 6
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
    var itemIdClicked
    var cameraOn
    var JustOnCamAfterAdd = false
    var scanned = false
    var fastMode = false
    var autoNext = false
    var offlineMode = true
    var variableSaveOffline = {
        resultProductPerson: [],
        resultProductPersonStep: [],
        deletedId: {
            resultProductPersonStep: [],
            resultProductPerson: [],
        }
    }
    var variableSaveMaterialOffline = {
        materialPickup: [],
        materialPickupDetail: [],
        deletedId: {
            materialPickup: [],
            materialPickupDetail: [],
        },
    }
    var memorySelectedBrand
    var memorySelectedProfile
    var modalProgress = false
    var firstAddedResultProductPersonId = ''
    var accessMenu = {
        qc_packer: [{
            access_name: 'Create New',
            name: 'NEWDELIVER'
        }, {
            access_name: 'Delivered',
            name: 'DELIVERY'
        }, {
            access_name: 'Complete',
            name: 'DONE'
        }, {
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
    var variableMode = ''
    var firstSetoranMode = true
    var totalFirstSetoranMode = 0
    var fillupAutoNextSetoran = false
    var lastSetoranMode = false
    var is_product_final_other = '0'


    $(document).ready(function() {
        empty('#detailWorker', '<span class="small-text">Pilih Worker pada Panel Kiri untuk Melihat Detail</span>')
        offlineModeConnection()
        // empty('#workerProgress', '<span class="small-text">Belum Tersedia Progress Worker</span>')
    })
    var loadDataDetailDelivery = []

    function getDataDetailDelivery() {
        var dataLoad = loadDataDetailDelivery
        if (dataLoad.length) {
            if (dataLoad.result_product_person_id != setoranIdClicked) {
                dataLoad = deepCopy(dataDetailDelivery).find((v, k) => {
                    if (v.result_product_person_id == setoranIdClicked) return true
                })
            }
        } else {
            dataLoad = deepCopy(dataDetailDelivery).find((v, k) => {
                if (v.result_product_person_id == setoranIdClicked) return true
            })
        }
        return dataLoad
    }

    function groupByUnique(array, key) {
        const grouped = array.reduce((result, currentValue) => {
            // Tentukan nilai dari properti yang akan digunakan sebagai grup
            const groupKey = currentValue[key];

            // Jika grup belum ada dalam hasil, atau jika sudah ada, periksa apakah objek dengan nilai yang sama sudah ada
            if (!result[groupKey]) {
                result[groupKey] = currentValue;
            }

            return result;
        }, {}); // Inisialisasi hasil dengan objek kosong

        // Mengambil nilai unik dari objek yang dikelompokkan
        return Object.values(grouped);
    }

    function totalSetoranAll(worker_id) {
        var dataWorker = arrayDataDEntryProductionEntry[worker_id]
        var total = 0
        var totalAll = {}
        var brand = []
        if (dataWorker) {
            if (dataWorker.data.length) {
                // console.log(dataWorker.data)
                dataWorker.data.forEach(e => {
                    var total_step = 0
                    if (e.result_product_person_step) {
                        total_step = e.result_product_person_step.length
                    }
                    brand.push({
                        'id': e.item.id,
                        'alias': e.item.alias,
                        // 'total_step': total_step
                    })
                })
                dataWorker.data.forEach(e => {
                    var qty = 0
                    if (e.complete.is_process) {
                        qty = e.complete.good
                    }
                    if (totalAll[e.item.id]) {
                        totalAll[e.item.id] = totalAll[e.item.id] + parseFloat(qty)
                    } else {
                        totalAll[e.item.id] = parseFloat(qty)
                    }
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
                    if (totalAll[e.item_id]) {
                        totalAll[e.item_id] = totalAll[e.item_id] + parseFloat(e.qty_good_deliv)
                    } else {
                        totalAll[e.item_id] = parseFloat(e.qty_good_deliv)
                    }
                });
            }
        }
        // var showData = []
        // console.log(brand)
        brand = groupByUnique(brand, 'alias')
        // brand = groupByUnique(brand, 'id')
        // console.log(brand)
        var html = ''
        html += '<p class="m-0 small-text text-dark-grey"><span class="fw-bold me-2">Total</span>'
        var badge = ''
        brand.forEach(e => {
            if (totalAll[e.id]) {
                var showTotal = ''
                badge += '<span class="badge rounded-pill bg-warning text-dark me-2 small-text"><b class="me-1">' + totalAll[e.id] + '</b><span class="fw-light">' + e.alias + '' + showTotal + '</span></span>'
            }
        });
        if (!badge) {
            badge = '<i class="text-grey">( None )</i>'
        }
        html += badge
        html += '</p>'
        return html
    }

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductionDelivEntry'); ?>"
        getData(data, url)
    }
    // setInterval(loadDataPeriodic, 60000); // 1 menit

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
                $('#workerProgress').html(LoadingReturn('Loading...'))
            },
            success: function(response) {
                showOverlay('hide')
                dataEntry = response.data
                arrangeVariable()
            }
        })
    }
    var arrayDataDetailDelivery = {}
    var arrayDataDEntryProductionEntry = {}

    function arrangeVariable() {
        var dataDeliveryBefore = deepCopy(dataDetailDelivery)
        var resultProductIdAfter = []
        dataDetailDelivery = []
        dataMaterial = []
        arrayDataDetailDelivery = {}
        arrayDataDEntryProductionEntry = {}
        $('#workerProgress').html('')
        dataEntry.productionDelivery.forEach(e => {
            e.data.forEach(el => {
                // console.log(el)
                resultProductIdAfter.push(el.result_product_person_id)
                var dataDel = {
                    'worker_id': e.employee_worker.id,
                    'worker_name': e.employee_worker.name,
                    'result_product_person_id': el.result_product_person_id,
                    'number': el.number,
                    'datetime': el.datetime,
                    'item': el.item_target,
                    'item_target': el.item_target,
                    'unit': el.unit,
                    'delivery': el.delivery,
                    'sortir': el.sortir,
                    'fillup': el.fillup,
                    'complete': el.complete,
                    'result_product_person_step': el.result_product_person_step,
                    'material_pickup': el.material_pickup,
                    'updated_at': el.updated_at
                }
                dataDetailDelivery.push(dataDel)
                arrayDataDetailDelivery[el.result_product_person_id] = dataDel
            });
            arrayDataDEntryProductionEntry[e.employee_worker.id] = e
            // arrayDataDEntryProductionEntry[e.employee_worker.eid] = e
        })
        dataDeliveryBefore.forEach(e => {
            if (!resultProductIdAfter.includes(e.result_product_person_id)) {
                dataDetailDelivery.push(e)
                arrayDataDetailDelivery[e.result_product_person_id] = e
            }
        });
        dataEntry.productMaterial.forEach(e => {
            var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                if (v.product.id == e.item_id) return true
            })
            e.material_group.forEach(el => {
                if (el) {
                    var itemDefault = el.items.find((v, k) => {
                        if (v.item.id == el.item_id_default) return true
                    })
                    if (dataProducts) {
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
                    }
                }
            })
        })
        brokenData()
        workerProgress()
    }

    function workerProgress() {
        $('#totalWorker').html(dataEntry.productionDelivery.length)
        $('#workerProgress').html(formWorkerProgress())
        $('#tableDetail').html(detailTransaction())
        $('#tableForm').DataTable().destroy();
        $('#tableForm').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedFooter: true,
            paging: false,
            searching: false
        })
        searching()
        if (modalProgress) {
            modalWorkProgress()
        }
    }

    function sortByDateTimeDesc(a, b) {
        return new Date(b.datetime) - new Date(a.datetime);
    }

    function detailTransaction() {
        var html = ''
        var a = 1;
        const sortedData = [...deepCopy(dataDetailDelivery)].sort(sortByDateTimeDesc);
        sortedData.forEach(e => {
            if (e.item) {
                var dataDelivery = findStatus(e.result_product_person_id)
                // console.log(dataDelivery)
                html += '<tr class="">'
                html += '<td class="small-text align-middle text-center">' + a++ + '</td>'
                html += '<td class="small-text align-middle text-center">' + formatJamMenit(e.datetime) + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.worker_name + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.item.alias + '</td>'
                html += '<td class="small-text align-middle text-center">' + dataDelivery.qty.good + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.unit.name + '</td>'
                html += '<td class="small-text align-middle text-center" style="width:100px;">'
                html += '<div id="progress">'
                html += '<ul id="progress-num">'
                dataEntry.machineStep.forEach(el => {
                    var active = ''
                    var data = e.result_product_person_step.find((v, k) => {
                        if (v.machine_step.id == el.id) return true
                    })
                    if (data) {
                        active = 'active'
                    }
                    html += '<li class="steps ' + active + '">' + el.index + '</li>'
                });
                html += '</ul>'
                html += '</div>'
                html += '</td>'
                html += '<td class="small-text align-middle text-center"><span class="badge rounded-pill bg-success">' + toTitleCase(dataDelivery.status) + '</span></td>'
                html += '<td class="small-text align-middle">'
                html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="detailWaiting()"><i class="fa fa-eye"></i></button>'
                html += '</td>'
                html += '</tr>'
            }
        });
        return html
    }

    function formWorkerProgress() {
        var html = ''
        if (dataEntry.productionDelivery.length) {
            dataEntry.productionDelivery.forEach(e => {
                totalSetoranAll(e.employee_worker.id)
                var badgeMeja = ''
                if (e.employee_worker.row_code) {
                    badgeMeja = '<span class="badge bg-light text-dark-grey border fw-bold border-dark me-2 mt-1" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + e.employee_worker.row_code + '</span>'
                }
                html += '<div class="card shadow-none border-end-0 border-start-0 pointer" style="border-radius:0px;" id="card_search' + e.employee_worker.id + '">'
                html += '<div class="card-body p-0">'
                html += '<div class="row">'
                html += '<div class="col-10 card-hoper p-0" onclick="detailWorker(' + e.employee_worker.id + ')">'
                html += '<div class="row p-3 px-4">'
                html += '<div class="col-12 ps-3">'

                html += '<div class="row">'
                html += '<div class="col-1">'
                html += badgeMeja
                html += '</div>'
                html += '<div class="col-11 ps-4">'
                html += '<p class="m-0 small fw-bolder"><span class="text_search" data-id="' + e.employee_worker.id + '">' + e.employee_worker.name.toUpperCase() + '</span></p>'
                // html += '<p class="m-0 super-small-text text-dark-grey"><span class="fw-bold">Total Setoran <span class="text-orange">' + number_format(totalSetoran(e.employee_worker.id)) + '</span> Pack</span></p>'
                html += totalSetoranAll(e.employee_worker.id)
                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '<div class="col-12 pt-3">'
                html += '<div class="row ps-3">'
                var jumlahSetoran = e.data.length
                var iskelebihan = false
                if (jumlahSetoran > defaultleSetoran) {
                    iskelebihan = true
                }
                for (let i = 1; i <= defaultleSetoran; i++) {
                    var check = e.data.find((v, k) => {
                        if (v.number == i) return true
                    })
                    var bg = 'bg-outline-grey'
                    var bgBase = ''
                    var textColor = ''
                    var value = 0
                    var content = ''
                    content += '<div class="row p-0 m-0 w-100 h-100">'
                    content += '<div class="col p-0 d-flex align-content-center flex-wrap justify-content-center">'
                    content += '-'
                    content += '</div>'
                    content += '</div>'
                    if (check) {
                        var dataDelivery = findStatus(check.result_product_person_id)
                        if (check.complete.is_process) {
                            bg = 'bg-outline-primary'
                            bgBase = 'bg-radius-primary'
                            textColor = 'text-primary'
                            value = check.good
                        } else {
                            bg = 'bg-outline-orange'
                            bgBase = 'bg-radius-orange'
                            textColor = 'text-orange'
                        }
                        content = ''
                        content += '<div class="row p-0 m-0 w-100 h-100">'
                        content += '<div class="col-6 p-0 ' + bgBase + ' d-flex align-content-center h-100 align-items-center align-self-center flex-wrap justify-content-center">'
                        content += '<p class="m-0" style="font-size:6px;">' + shortenTextNoDots(dataDelivery.item, 4) + '</p>'
                        content += '</div>'
                        content += '<div class="col-6 p-0 d-flex align-content-center h-100 flex-wrap justify-content-center align-items-center align-self-center">'
                        content += '<p class="m-0 ' + textColor + ' super-small-text">' + dataDelivery.qty.good + '</p>'
                        content += '</div>'
                        content += '</div>'

                    } else {
                        var dataDelivery = findStatus()
                    }
                    html += '<div class="col p-0 pe-1">'
                    html += '<span class="badge rounded-pill super-small-text p-0 w-100 ' + bg + '" style="height: 20px;">'
                    html += content
                    html += '</span>'
                    html += '</div>'
                    // html += '<div class="col p-0 pe-1">'
                    // html += '<span class="badge rounded-pill super-small-text p-1 ' + bg + ' w-100">' + dataDelivery.qty.good + '</span>'
                    // html += '</div>'
                }
                // kelebihan
                if (iskelebihan) {
                    html += '<div class="col-1 p-0 pe-1">'
                    html += '<span class="badge rounded-pill super-small-text p-0 w-100 bg-dark-grey" style="height: 20px;">'
                    html += '<div class="row p-0 m-0 w-100 h-100">'
                    html += '<div class="col p-0 d-flex align-content-center flex-wrap justify-content-center">'
                    html += '<p class="m-0 text-white">+' + (parseInt(jumlahSetoran) - parseInt(defaultleSetoran)) + '</p>'
                    html += '</div>'
                    html += '</div>'
                    html += '</span>'
                    html += '</div>'
                }
                // kelebihan
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '<div class="col-2 card-hoper p-0" onclick="chooseFromList(' + e.employee_worker.id + ')">'
                html += '<div class="row h-100">'
                html += '<div class="col-12 align-self-center text-center p-0">'
                html += '<i class="fa fa-pencil fa-1x text-grey"></i>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            })
        } else {
            html += emptyReturn('Belum Ada Progress Worker')
        }
        return html
    }

    function chooseFromList(worker_id) {
        scannerStatus = false
        firstWorkProgress(worker_id)
    }

    function detailWorker(worker_id) {
        var data = arrayDataDEntryProductionEntry[worker_id]
        // var data = dataEntry.productionDelivery.find((v, k) => {
        //     if (v.employee_worker.id == worker_id) return true
        // })
        templateDetailWorker(data)
    }

    function templateDetailWorker(data) {
        var html = ''
        var badgeMeja = ''
        if (data.employee_worker.row_code) {
            badgeMeja = '<span class="badge bg-light text-dark-grey border fw-bold border-dark me-2" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + data.employee_worker.row_code + '</span>'
        }
        html += '<div class="col-9">'

        html += '<div class="row">'
        html += '<div class="col-2">'
        html += '<h1 class="m-0 fw-bolder">' + badgeMeja + '</h1>'
        html += '</div>'
        html += '<div class="col-10">'
        html += '<h1 class="m-0 fw-bolder">' + data.employee_worker.name.toUpperCase() + '</h1>'
        // html += '<p class="m-0"><b class="text-dark-grey">Total Setoran </b><span class="text-warning fw-bold">' + number_format(totalSetoran(data.employee_worker.id)) + '</span> Pack</p>'
        html += totalSetoranAll(data.employee_worker.id)
        html += '</div>'
        html += '</div>'
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
        html += '<p class="super-small-text fw-bolder">Riwayat Setoran</p>'
        html += '<table class="table table-bordered table-hover small-text table-sm">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle super-small-text" rowspan="2">#</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Jam</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Brand</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Total<br>Step</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Steps</th>'
        html += '<th class="align-middle super-small-text" colspan="2">Quantity</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Unit</th>'
        html += '<th class="align-middle super-small-text" rowspan="2">Status</th>'
        html += '</tr>'
        html += '<tr>'
        html += '<th class="super-small-text">Good</th>'
        html += '<th class="super-small-text">Reject</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'

        if (data.data.length) {
            data.data.forEach(e => {
                var dataDelivery = findStatus(e.result_product_person_id)
                // console.log(dataDelivery)
                var bgColor = ''
                if (!dataDelivery.qty.good) {
                    dataDelivery.qty.good = '-'
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
                html += '<td class="text-center align-middle" style="height: 30px;">' + dataDelivery.allSteps.length + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + dataDelivery.step_status + '</td>'
                html += '<td class="text-center align-middle" style="height: 30px;">' + dataDelivery.qty.good + '</td>'
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

        scanned = true
        scanned2 = false
        // var dataProducts = arrayDataDEntryProductionEntry[eid]
        var dataProducts = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.eid == eid) return true
        })
        // console.log(eid)
        if (!dataProducts) {
            // baru dari setoran ke 1
            dataProducts = dataEntry.employee.find((v, k) => {
                if (v.eid == eid) return true
            })
            dataProducts = dataProducts.id
            createNewWorker(dataProducts)
        } else {
            // setoran selanjutnya
            var availSteps = checkAvailableSteps(eid)
            var statusAvailSteps = availSteps.status
            // console.log(statusAvailSteps)
            if (statusAvailSteps) {
                var result_product_person_id = availSteps.result_product_person_id
                // jika masih ada step yg masih belum selesai
                workerIdClicked = dataProducts.employee_worker.id
                setoranIdClicked = result_product_person_id
                modalWorkProgress()
                // isiWorkProgress(result_product_person_id)
            } else {
                // jika sudah selesai semua
                dataProducts = dataProducts.employee_worker.id
                workProgress(dataProducts)
            }
        }
    }

    function checkAvailableSteps(eid) {
        var status = false
        var data = {}
        // var dataDelivery = arrayDataDEntryProductionEntry[eid]
        var dataDelivery = dataEntry.productionDelivery.find((v, k) => {
            if (v.employee_worker.eid == eid) return true
        })
        var result_product_person_id = ''
        if (dataDelivery) {
            if (dataDelivery.data) {
                var resulPersonStep = dataDelivery.data[dataDelivery.data.length - 1]
                if (resulPersonStep) {
                    result_product_person_id = resulPersonStep.result_product_person_id
                    var findId = findStatus(resulPersonStep.result_product_person_id)
                    if (findId.nextStatus != 'DONE') {
                        status = true
                    }
                }
            }
        }
        return {
            status: status,
            result_product_person_id: result_product_person_id,
        }
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
        // arrangeVariable()
        workProgress(id)
    }

    function selectMode() {
        variableMode = $('#selectModes').val()
        if (variableMode == undefined) {
            variableMode = $('.selectModes:checked').val()
        }
        // console.log(variableMode)
        var color = 'text-grey'
        if (variableMode) {
            color = 'text-success'
        }
        $('#iconMode').attr('class', 'fa fa-circle ' + color)
        $('.selectModes').removeAttr('checked', true)
        $('#checkMode' + variableMode).attr('checked', true)
        qtyStepFill()
    }
    var mustOpenModal = false

    function firstWorkProgress(worker_id) {
        mustOpenModal = true
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
        modalWorkProgress()
    }

    function viewSelectMode() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-auto pe-0 align-self-center" hidden>'
        var color = 'text-grey'
        if (variableMode) {
            color = 'text-success'
        }
        html += '<i class="fa fa-circle ' + color + '" id="iconMode"></i>'
        html += '</div>'
        html += '<div class="col-auto pe-0">'
        html += '<select class="form-control form-control-sm fw-bolder" style="width:auto;text-align:center" id="selectModes" onchange="selectMode()">'
        var select = ''
        if (variableMode == '') {
            select = 'selected'
        }
        html += '<option value="" ' + select + '>Mode Manual</option>'
        select = ''
        if (variableMode == 150) {
            select = 'selected'
        }
        html += '<option value="150" ' + select + '>Mode 150</option>'
        if (variableMode == 100) {
            select = 'selected'
        }
        html += '<option value="100" ' + select + '>Mode 100</option>'
        select = ''
        if (variableMode == 50) {
            select = 'selected'
        }
        html += '<option value="50" ' + select + '>Mode 50</option>'
        html += '</select>'
        html += '</div>'
        html += '<div class="col-auto pe-0">'
        if (firstSetoranMode) {
            html += '<button class="btn btn-sm btn-success shadow-none" id="btnFirstSetoran" onclick="changeFirstSetoranMode()">Setoran Langsung</button>'
        } else {
            html += '<button class="btn btn-sm btn-outline-success shadow-none" id="btnFirstSetoran" onclick="changeFirstSetoranMode()">Setoran Tdk Langsung</button>'
        }
        html += '</div>'
        html += '<div class="col-auto pe-0">'
        var iconDaily = '<i class="fa fa-sun-o text-warning me-1"></i>Daily'
        if (lastSetoranMode) {
            iconDaily = '<i class="fa fa-moon-o text-blue me-1"></i>Last'
        }
        html += '<button class="btn btn-sm btn-dark shadow-none" onclick="changeLastSetoranMode()" id="btnLastSetoran">' + iconDaily + '</button>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<div class="form-check">'
        var check = ''
        if (autoNext) {
            check = 'checked'
        }
        html += '<input class="form-check-input checkAutoNext" type="checkbox" value="" id="checkAutoNexts" onclick="autoNextOn()" ' + check + '>'
        html += '<label class="form-check-label small" for="checkAutoNexts">Auto Next Setoran</label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function changeLastSetoranMode() {
        if (lastSetoranMode) {
            lastSetoranMode = false
            autoNext = true
            $('#btnLastSetoran').html('<i class="fa fa-sun-o text-warning me-1"></i>Daily')
            $('.goodDelivery').val($('.goodDelivery').data('values'))
            $('#jumlahBad').focus();
        } else {
            lastSetoranMode = true
            autoNext = false
            $('#btnLastSetoran').html('<i class="fa fa-moon-o text-blue me-1"></i>Last')
            $('.goodDelivery').val('')
            $('#jumlahGood').focus();
        }
    }

    function changeFirstSetoranMode() {
        if (firstSetoranMode) {
            firstSetoranView(firstSetoranMode)
            firstSetoranMode = false
        } else {
            firstSetoranView(firstSetoranMode)
            firstSetoranMode = true
        }
    }

    function firstSetoranView(index) {
        if (index) {
            $('#btnFirstSetoran').removeClass('btn-success').addClass('btn-outline-success').html('Setoran Tdk Langsung')
        } else {
            $('#btnFirstSetoran').addClass('btn-success').removeClass('btn-outline-success').html('Setoran Langsung')
        }
    }
    var holdRefreshData = false

    function modalWorkProgress() {
        modalProgress = true
        // var data = arrayDataDEntryProductionEntry[workerIdClicked]
        var data = deepCopy(dataEntry.productionDelivery).find((v, k) => {
            if (v.employee_worker.id == workerIdClicked) return true
        })
        if (!data) {
            // jika data ga ada / belum terdaftar
            var dataEmployee = dataEntry.employee.find((v, k) => {
                if (v.id == workerIdClicked) return true
            })
            var dataInputBaru = {
                employee_worker: {
                    "id": dataEmployee.id,
                    "eid": dataEmployee.eid,
                    "name": dataEmployee.name,
                    "row_code": dataEmployee.row_code,
                },
                remaining_material: null,
                data: []
            }
            dataEntry.productionDelivery.push(dataInputBaru)
            data = dataInputBaru
        }
        if (mustOpenModal == false) {
            if (!holdRefreshData) {
                // jika tidak hold, maka refresh data
                holdRefreshData = false
                actionModalWorkProgress(data)
            } else {
                // jika hold, maka skip
                setoranList(data)
            }
        } else {
            holdRefreshData = false
            mustOpenModal = false
            actionModalWorkProgress(data)
        }
    }

    function actionModalWorkProgress(data) {
        // console.log(data)
        var badgeMeja = ''
        if (data.employee_worker.row_code) {
            badgeMeja = '<span class="badge bg-light text-dark-grey border fw-bold border-dark me-2" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + data.employee_worker.row_code + '</span>'
        }
        // $('#modal').modal('show')
        $('#modalDialog').removeClass('modal-lg').addClass('modal-dialog modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<div class="row justify-content-between w-100 align-items-center">'
        html_header += '<div class="col-auto">'
        html_header += '<h5 class="modal-title">Entry Data</h5>';
        html_header += '</div>'
        html_header += '<div class="col-auto">'
        html_header += viewSelectMode()
        html_header += '</div>'
        html_header += '<div class="col-auto">'
        html_header += '</div>'
        html_header += '</div>'
        html_header += '<button type="button" class="btn-close" onclick="scannerQR()"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row w-100">'

        html_body += '<div class="col-3 p-5 pt-4 pe-2 border-end">'
        html_body += '<h1 class="mb-1 fw-bolder">' + badgeMeja + data.employee_worker.name.toUpperCase() + '</h1>'
        // html_body += '<p class="m-0">2,490 / <b class="text-dark-grey">3,000</b></p>'
        // html_body += '<p class="m-0"><b class="text-dark-grey">Total Setoran </b>' + number_format(totalSetoran(data.employee_worker.id)) + ' / <b class="text-dark-grey">--</b></p>'
        html_body += totalSetoranAll(data.employee_worker.id)
        // html_body += '<p class="m-0 super-small-text text-warning"><i class="fa fa-circle me-2"></i>Still Working</p>'

        html_body += '<div class="mt-3" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'
        html_body += '<div class="me-2">'
        // LIST SETORAN

        // add setoran
        html_body += '<div class="">'
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
        // add setoran

        // setoran semu
        html_body += '<div class="pt-3" id="setoranSemu">'
        html_body += '</div>'
        // setoran semu
        // LIST SETORAN
        html_body += '<div class="" id="setoranList">'

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
        setoranList(data)
        if (setoranIdClicked) {
            isiWorkProgress(setoranIdClicked)
        }
        if (scannerStatus) {
            var availSteps = checkAvailableSteps(data.employee_worker.eid).status
            if (!availSteps) {
                setoranBaru(data.employee_worker.id)
            }
        }
    }

    function setoranList(data) {
        // console.log(data)
        var a = 0
        var html = ''
        sortArrayOfObjectsDescending(data.data, 'number').forEach(e => {
            var dataDelivery = findStatus(e.result_product_person_id)
            // console.log(dataDelivery)
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
            html += setoranBar(e, deleteButton, bgColor, qty, icon)
            a++
        })
        $('#setoranList').html(html)
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
        var datas = arrayDataDEntryProductionEntry[worker_id].data.find((v, k) => {
            if (v.result_product_person_id == id) return true
        })
        if (!datas) {
            // jika datanya setoran baru
            $('#setoranSemu').html('')
            $('#btnNewSetoran').removeAttr('hidden', true)
            newSetoranBar--
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
                    //online
                    // var data = {
                    //     deletedId: {
                    //         resultProductPerson: []
                    //     }
                    // }
                    // data.deletedId.resultProductPerson.push(id)
                    // simpanData(data)

                    //offline
                    variableSaveOffline.deletedId.resultProductPerson.push(id)
                    // console.log('test')
                    buttonSaveOfflineMode(variableSaveOffline.resultProductPerson, variableSaveMaterialOffline.materialPickup, variableSaveMaterialOffline.materialPickupDetail, variableSaveOffline.deletedId.resultProductPerson)
                    var kerangkaEntryData = deepCopy(dataEntry.productionDelivery)
                    var dataKerangkaEntryData = kerangkaEntryData.find((v, k) => {
                        if (v.employee_worker.id == worker_id) return true
                    })
                    var dataSelainFilter = dataKerangkaEntryData.data.filter((v, k) => {
                        if (v.result_product_person_id != id) return true
                    })
                    dataKerangkaEntryData.data = dataSelainFilter
                    var dataKerangkaEntryDataExp = kerangkaEntryData.filter((v, k) => {
                        if (v.employee_worker.id != worker_id) return true
                    })
                    dataKerangkaEntryDataExp.push(dataKerangkaEntryData)
                    dataEntry.productionDelivery = dataKerangkaEntryDataExp
                    // modalWorkProgress()
                    var dataEmployee = dataEntry.employee.find((v, k) => {
                        if (v.id == worker_id) return true
                    })
                    holdRefreshData = true
                    mustOpenModal = false
                    modalWorkProgress()
                }
            })
        }
    }

    function deleteMaterial(worker_id, id) {
        // console.log(dataSaveMaterial.remainingMaterialPerson)
        dataSaveMaterial.deletedId.remainingMaterialPerson.push(id)
        var data = arrayDataDEntryProductionEntry[worker_id].remaining_material
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
        // console.log(dataStatus)
        var html = ''
        var time = '--'
        if (e.datetime) {
            time = formatJamMenit(e.datetime)
        }
        // html += '<div class="col-12 pb-2">'
        html += '<div class="card card-hoper shadow-none ' + bgColor + ' cardProgress mb-2" onclick="isiWorkProgress(' + "'" + e.result_product_person_id + "'" + ')" id="cardProgress' + e.result_product_person_id + '">'
        html += deleteButton
        html += '<div class="card-body p-2">'

        html += '<div class="row w-100">'
        html += '<div class="col-2 text-center align-self-center">'
        html += '<span class="badge bg-outline-primary text-dark-grey border fw-bold border-dark me-2 mt-1" style="vertical-align: middle !important;padding-top:5px;padding-bottom:5px;">' + e.number + '</span>'
        html += '</div>'
        html += '<div class="col-7">'
        html += '<p class="m-0 super-tiny-text"><i class="me-2">' + dataStatus.nextStatus + '</i></p>'
        html += '<p class="m-0 small-text fw-bolder lh-1">' + dataStatus.itemAlias + '</p>'
        if (dataStatus.step_status == '-') {
            dataStatus.step_status = '<span class="text-danger">Belum Ada Step</span>'
        }
        html += '<p class="m-0 super-tiny-text">' + dataStatus.step_status + ' - ' + time + '</p>'
        html += '</div>'
        html += '<div class="col align-self-center text-end">'
        html += '<p class="m-0 fw-bolder small-text">' + qty + '</p>'
        // html += '<p class="m-0 fw-bolder">' + qty + '</p>'
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

    function editSortir(result_product_person_id, menu, step_profile_id = null) {
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        var dataStatus = findStatusEdit(result_product_person_id, menu)
        formWorkProgress(data, dataStatus, true, step_profile_id)
    }

    function isiWorkProgress(result_product_person_id = null) {
        setoranIdClicked = result_product_person_id
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        var dataStatus = findStatus(result_product_person_id)
        dataSaveSetoran.next_status = dataStatus.nextStatus
        dataSaveSetoran.result_product_person_id = result_product_person_id
        // console.log(dataStatus)
        var dataMachineStep = findmachineStep(dataStatus.itemId, dataStatus.machine_step_profile_id).listMachineStep
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
        // Setoran Baru
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'

        status = 'text-grey'
        text = '<p>Belum Ada Proses</p>'
        btnEdit = ''
        if (data) {
            if (dataStatus.status != 'NOT CREATED') {
                var dataSetoranBaru = getMaterialPickup(data.material_pickup)
                // console.log(data)
                // console.log(dataSetoranBaru)
                status = 'bg-success text-white'
                text = '<p>Pukul ' + formatJamMenit(data.datetime) + ' membuat Setoran Baru Produk ' + dataSetoranBaru.name + ' sejumlah ' + dataSetoranBaru.qty + '</p>'
                if (checkLabelEdit('NEWDELIVER')) {
                    btnEdit = '<span class="fa fa-pencil pointer text-success ms-2" onclick="editSortir(' + "'" + result_product_person_id + "'" + ',' + "'" + 'NEWDELIVER' + "'" + ')"></span>'
                }
            }
        }

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
        if (data) {
            if (cekAmbilMaterial(data.material_pickup)) {
                var dataPickup = getMaterialPickup(data.material_pickup)
                status = 'bg-success text-white'
                text = '<p>Pukul ' + formatJamMenit(dataPickup.pickup_at) + ' telah menerima Material ' + dataPickup.name + ' sejumlah ' + dataPickup.qty + ' ' + dataPickup.unit_name + '</p>'
            }
        }

        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">'
        html += '<b>Ambil Material</b>' + btnEdit
        html += text
        html += '</div>'
        html += '</div>'
        // Ambil Material
        // Step
        // console.log(dataMachineStep)
        dataMachineStep.forEach(k => {
            // console.log(k)
            html += '<div class="timeline-item">'
            html += '<div class="timeline-item-marker">'

            status = 'text-grey'
            text = '<p>Belum Ada Proses</p>'
            btnEdit = ''
            var checkSteps = checkIfStepIsDone(k.id, result_product_person_id)
            // console.log(checkSteps)
            if (checkSteps.status) {
                status = 'bg-success text-white'
                text = '<p>Pukul ' + formatJamMenit(checkSteps.process_at) + ' Item Good ' + checkSteps.good + ' Reject ' + replaceNullWithZero(checkSteps.reject) + ' ' + data.unit.name + '</p>'
                if (checkLabelEdit('DELIVERY')) {
                    btnEdit = '<span class="fa fa-pencil pointer text-success ms-2" onclick="editSortir(' + "'" + result_product_person_id + "'" + ',' + "'" + 'DELIVERY' + "'" + ',' + k.id + ')"></span>'
                }
            }
            html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
            html += '</div>'
            html += '<div class="timeline-item-content" style="font-size: 11px;">'
            html += '<b>Setoran Tahap ' + k.name + '</b>' + btnEdit
            html += text
            html += '</div>'
            html += '</div>'
        });
        // Step
        // Complete
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
        // Complete
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
        // materialIdClicked = true
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
        var data = arrayDataDEntryProductionEntry[worker_id]
        // var data = dataEntry.productionDelivery.find((v, k) => {
        //     if (v.employee_worker.id == worker_id) return true
        // })
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
        var data = arrayDataDEntryProductionEntry[worker_id].remaining_material.find((v, k) => {
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
        var dataAll = arrayDataDEntryProductionEntry[worker_id].remaining_material
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
        var data = arrayDataDEntryProductionEntry[worker_id].remaining_material.find((v, k) => {
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
    var nextNewDeliverStatus = false
    var langsungNextNewDeliver = false

    function formNEWDELIVER(id = null, edit = false, step_profile_id = null) {
        badgeModeChangeSetoran()
        holdRefreshData = true
        var dataEdit
        if (edit) {
            dataEdit = findStatusEdit(id, 'NEWDELIVER')
        }
        if (!edit) {
            if (!nextNewDeliverStatus) {
                langsungNextNewDeliver = false
                actionNewDeliver(id, edit, step_profile_id, dataEdit)
            } else {
                // jika langsung next
                if (memorySelectedBrand) {
                    // jika ada memorySelectedBrand
                    langsungNextNewDeliver = true
                    nextStepNewDeliver(memorySelectedBrand, id, false)
                } else {
                    langsungNextNewDeliver = false
                    actionNewDeliver(id, edit, step_profile_id, dataEdit)
                }
            }
        } else {
            langsungNextNewDeliver = true
            nextStepNewDeliver(dataEdit.itemId, dataEdit.id, true)
        }
    }

    function actionNewDeliver(id, edit, step_profile_id, dataEdit) {
        var good = ''
        var bad = ''
        if (edit) {
            good = dataEdit.qty.good
            bad = dataEdit.qty.waste
        }
        var html = ''
        html += '<div class="row justify-content-end">'
        // sesi input

        // pilih produk
        html += '<div class="col-8 text-end">'
        html += '<p class="mb-1 small-text"><b>Brand</b></p>'
        html += '<div class="mt-2" id="fieldNewDeliver">'

        dataEntry.workPlanMachine.products.forEach(e => {
            html += '<div class="card shadow-sm mb-2 pointer card-hoper" onclick="nextStepNewDeliver(' + e.product.id + ',' + "'" + id + "'" + ',' + edit + ')">'
            html += '<div class="card-body">'
            html += '<div class="row">'
            html += '<div class="col-12 text-end">'
            if (e.product.label) {
                e.product.label = ' ' + e.product.label
            } else {
                e.product.label = ''
            }
            html += '<p class="m-0 fw-bolder small">' + e.product.alias + '' + e.product.label + '</p>'
            html += '<p class="m-0 fw-bold text-grey super-small-text">' + e.product.name + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });


        html += '</div>'
        html += '</div>'
        // pilih produk

        // sesi input
        html += '</div>'
        $('#formEntryData').html(html)
        $(document).on('keypress', function(event) {
            // Check if the key pressed is '1' (key code 49)
            if (event.which == 49) {
                // console.log('1')
            } else if (event.which == 50) {
                // console.log('2')
            }
        })
    }

    function changeNominalStepProfile(id, idProduct) {
        var value = $('.form-newdeliver').map(function() {
            return $(this).val();
        }).get();
        var idStep = $('.form-newdeliver').map(function() {
            return $(this).data('id_step');
        }).get();
        var good = 0
        for (let i = 0; i < value.length; i++) {
            if (!good) {
                if (value[i]) {
                    good = parseInt(value[i])
                }
            }
        }
        $('.form-newdeliver').val('')
        for (let i = 0; i < idStep.length; i++) {
            $('#cardStepProfile' + idStep[i]).removeClass('border-success border-3')
        }
        memorySelectedProfile = id
        $('#jumlahGood' + id).val(good)
        fieldInputStepProfile(good, id, idProduct)
    }

    function nextStepNewDeliver(idProduct, id, edit) {
        nextNewDeliverStatus = true
        var dataEdit
        var data = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == idProduct) return true
        })
        if (data) {
            // console.log(data)
            is_product_final_other = data.product.is_product_final_other
        }
        var time = timeNow()
        if (edit || modeChangeSetoran) {
            dataEdit = findStatusEdit(id, 'NEWDELIVER')
            time = formatJamMenit(dataEdit.qty.process_at)
        }
        var dataMachineStepProfile = dataEntry.machineStepProfile.find((v, k) => {
            if (v.item_id_product == idProduct) return true
        })
        var html = ''
        html += '<div class="row justify-content-between">'
        // sesi input
        html += '<div class="col-4 mt-3">'
        // pilih brand
        html += '<p class="mb-1 small-text"><b>Item</b></p>'
        dataEntry.workPlanMachine.products.forEach(e => {
            var select = 'btn-outline-dark'
            if (e.product.id == idProduct) {
                select = 'btn-warning'
            }
            if (e.product.label) {
                e.product.label = ' ' + e.product.label
            } else {
                e.product.label = ''
            }
            html += '<button class="btn ' + select + ' small-text text-start shadow-none w-100 mb-1 px-1" onclick="nextStepNewDeliver(' + e.product.id + ',' + "'" + id + "'" + ',' + edit + ')">' + e.product.alias + '' + e.product.label + '</button>'
        })
        // pilih brand
        html += '</div>'
        html += '<div class="col-8 p-4 pt-0" style="border-radius: 10px;background-color: #fdf8ec;">'
        // nama produk
        html += '<div class="col-12 mt-3 text-end">'
        html += '<p class="mb-1 small-text"><b>Brand</b></p>'
        html += '<div class="mt-2">'
        html += '<p class="m-0 h1 fw-bolder text-orange">' + data.product.name + '</p>'
        html += '</div>'
        html += '</div>'
        // nama produk
        // grup jumlah setoran
        html += '<div class="col-12 mt-3 text-end">'
        html += '<div class="row">'
        // isi
        html += '<div class="col-12">'
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="mb-1 small-text"><b>Bahan</b></p>'
        html += '<div class="mt-2">'
        var index = 0
        var a = 0
        dataMachineStepProfile.machine_step_profiles.forEach(e => {
            var qtyStep = ''
            var material_pickup_id = ''
            if (edit) {
                if (e.id == dataEdit.machine_step_profile_id) {
                    qtyStep = dataEdit.qty.good
                    material_pickup_id = dataEdit.material_pickup_id
                }
            }
            html += '<div class="card shadow-none mb-2 pointer card-hoper card-step-profiles" id="cardStepProfile' + e.id + '">'
            html += '<div class="card-body p-0">'

            html += '<div class="row p-0 m-0" onclick="changeNominalStepProfile(' + e.id + ',' + idProduct + ')">'
            html += '<div class="col-6 align-self-center">'
            html += '<p class="m-0 small-text fw-bolder">' + e.name + '<span class="ms-1 iconInfo" id="iconInfo' + e.id + '"></span></p>'
            html += '</div>'
            html += '<div class="col-6 border-start">'
            html += '<input class="form-control form-control-sm nominal form-newdeliver form-invisible-line cardStepProfile-' + a + '" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahGood' + e.id + '" value="' + qtyStep + '" tabindex="1" role="dialog" data-material_pickup_id="' + material_pickup_id + '" data-work_plan_product_id="' + data.work_plan_product_id + '" data-unit_id="' + data.unit_input.id + '" data-warehouse_id="' + e.warehouse_id_material_pickup + '" data-id_product="' + idProduct + '" data-id_step="' + e.id + '" oninput="inputStepProfile(' + e.id + ',' + idProduct + ')">'
            html += '</div>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            if (!memorySelectedProfile) {
                if (a == 0) {
                    index = e.id
                    memorySelectedProfile = index
                }
            } else {
                index = memorySelectedProfile
            }
            a++
        });
        var checkProfile = dataMachineStepProfile.machine_step_profiles.find((v, k) => {
            if (v.id == index) return true
        })
        if (!checkProfile) {
            index = dataMachineStepProfile.machine_step_profiles[0].id
            memorySelectedProfile = index
            memorySelectedBrand = idProduct
        }
        if (edit) {
            index = dataEdit.machine_step_profile_id
        }
        // console.log(memorySelectedProfile)
        html += '</div>'
        html += '</div>'

        // jam setoran
        html += '<div class="col-12 mt-3 text-end align-self-end">'
        html += '<p class="mb-1 small-text"><b>Jam Setoran</b></p>'
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
        html += '</div>'
        html += '</div>'
        // isi

        html += '</div>'
        html += '</div>'
        // grup jumlah setoran

        // button
        html += '<div class="col-12 text-end pt-3">'
        html += '<div class="row justify-content-between">'
        html += '<div class="col-auto">'
        html += '<button class="btn btn-outline-primary btn-sm" id="btnKembali" onclick="actionFormNewDeliver(' + "'" + id + "'" + ',' + edit + ')" tabindex="3"><i class="fa fa-chevron-left me-2"></i>Kembali</button>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<button class="btn btn-primary btn-sm" id="btnSimpan" onclick="insertNewDeliver(' + edit + ')" tabindex="3">Simpan dan Lanjutkan<i class="fa fa-chevron-right ms-2"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // button
        html += '</div>'
        html += '</div>'
        // sesi input
        html += '</div>'
        $('#formEntryData').html(html)
        $('.nominal').on('keypress', handleNumericInput);
        qtyStepFill()
        if (langsungNextNewDeliver) {
            $('#modal').on('shown.bs.modal', function() {
                setTimeout(function() {
                    $('#jumlahGood' + index).focus();
                }, 100);
            });
        } else {
            setTimeout(function() {
                $('#jumlahGood' + index).focus();
            }, 100);
        }
        if (edit) {
            inputStepProfile(dataEdit.machine_step_profile_id, idProduct)
        }
        $('.form-newdeliver').on('keypress', function(event) {
            if (event.which === 13) { // Tombol Enter ditekan
                event.preventDefault();
                insertNewDeliver(edit)
            }
        });
    }

    function actionFormNewDeliver(id, edit) {
        nextNewDeliverStatus = false
        formNEWDELIVER(id, edit)
    }

    function qtyStepFill() {
        // variableMode
        var value = $('.form-newdeliver').map(function() {
            return $(this).val();
        }).get();
        var idStep = $('.form-newdeliver').map(function() {
            return $(this).data('id_step');
        }).get();
        var idProduct = $('.form-newdeliver').map(function() {
            return $(this).data('id_product');
        }).get();
        var findId
        var findIdProduct
        for (let i = 0; i < value.length; i++) {
            if (value[i] != 0) {
                findId = idStep[i]
                findIdProduct = idProduct[i]
            }
        }
        // console.log(memorySelectedProfile)
        if (memorySelectedProfile) {
            findId = memorySelectedProfile
        }
        if (memorySelectedBrand) {
            findIdProduct = memorySelectedBrand
        }
        if (findIdProduct) {
            $('#jumlahGood' + findId).val(variableMode)
            $('#jumlahGood' + findId).focus();
        } else {
            findId = idStep[0]
            findIdProduct = idProduct[0]
            $('.cardStepProfile-0').val(variableMode)
            $('.cardStepProfile-0').focus();
        }
        inputStepProfile(findId, findIdProduct)
    }

    function infoStepNewDeliver(id, idProduct) {
        // console.log(idProduct)
        var dataProduct = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.product.id == idProduct) return true
        })
        var dataProfile = dataEntry.machineStepProfile.find((v, k) => {
            if (v.item_id_product == idProduct) return true
        }).machine_step_profiles.find((v, k) => {
            if (v.id == id) return true
        })
        var html = ''
        html += '<p class="m-0 small-text fw-bolder">Info</p>'
        html += '<ol class="text-start small-text fw-bold" style="padding-left: 20px;">'
        html += '<li>Pada sesi ini anda dapat memberikan material <b>' + dataProduct.product.alias + '</b> Bandrol kepada Worker</li>'
        html += '<li>Arahkan Worker untuk mengambil material <b>' + dataProduct.product.alias + '</b> dibagian <b>' + dataProfile.name.replace("Pack Filter ", "") + '</b></li>'
        html += '<li>Tahapan yang dapat dilalui Worker adalah</li>'
        html += '<ol type="a" class="text-start small-text fw-bold">'
        dataProfile.machine_step_profile_details.forEach(e => {
            html += '<li>' + e.name + '</li>'
        });
        html += '</ol>'
        html += '</ol>'
        var popoverTriggerEl = document.getElementById('popoverHover')
        // var popover = bootstrap.Popover.getOrCreateInstance(exampleTriggerEl)
        var popover = new bootstrap.Popover(popoverTriggerEl, {
            placement: 'bottom', // Menentukan posisi popover
            trigger: 'hover focus', // Menentukan trigger popover (dalam contoh ini, hover)
            html: true,
            content: html,
            customClass: 'custom-popover',
        });
        // $('#infoStepNewDeliver').html(html)
    }

    function insertNewDeliver(edit = false) {
        var nilai = 0
        var value = $('.form-newdeliver').map(function() {
            return $(this).val();
        }).get();
        var anyFill = false
        for (let i = 0; i < value.length; i++) {
            if (value[i]) {
                anyFill = true
                nilai = value[i]
            }
        }
        if (anyFill) {
            if (checkNotLong('form-newdeliver')) {
                JustOnCamAfterAdd = true
                arrangeVariableInsert(edit)
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
                title: 'Data Belum Lengkap',
                text: 'Data yang dimasukkan Tidak Lengkap'
            });
        }
    }

    function inputStepProfile(id, idProduct) {
        var input = $('#jumlahGood' + id).val()
        fieldInputStepProfile(input, id, idProduct)
    }

    function fieldInputStepProfile(input, id, idProduct) {
        $('.form-newdeliver').prop('readonly', true)
        // readonly
        if (input) {
            $('#cardStepProfile' + id).addClass('border-success border-3')
            $('#jumlahGood' + id).prop('readonly', false)
            $('.iconInfo').html('')
            $('#iconInfo' + id).html('<i class="fa fa-info-circle text-dark" id="popoverHover" data-bs-toggle="popover" data-bs-trigger="hover focus"></i>')
            infoStepNewDeliver(id, idProduct)
        } else {
            $('.iconInfo').html('')
            $('#cardStepProfile' + id).removeClass('border-success border-3')
        }
        senseOfStepProfile()
    }

    function senseOfStepProfile() {
        var value = $('.form-newdeliver').map(function() {
            return $(this).val();
        }).get();
        var anyFilled = false
        for (var i = 0; i < value.length; i++) {
            if (value[i]) {
                anyFilled = true
            }
        }
        if (!anyFilled) {
            $('.form-newdeliver').prop('readonly', false)
            $('#infoStepNewDeliver').html('')
        }
    }

    function formDELIVERY(id = null, edit = false, step_profile_id = null) {
        holdRefreshData = true
        var dataStatus = findStatus(dataSaveSetoran.result_product_person_id)
        var masterMachineStep = findmachineStep(dataStatus.itemId, dataStatus.machine_step_profile_id)
        // console.log(dataStatus)
        var dataMachineStep = masterMachineStep.listMachineStep
        var indexMachineStep = masterMachineStep.index
        var dataMachineStepProduct = masterMachineStep.listMachineStepProduct
        var currentMachineStep
        var currentIndex = 0
        var choosenCurrentIndex = 0
        if (dataStatus.step_status_id == '-') {
            currentMachineStep = dataMachineStep[currentIndex]
            choosenCurrentIndex = currentIndex
        } else {
            var index = 0
            dataMachineStep.forEach(e => {
                if (step_profile_id) {
                    if (e.id == step_profile_id) {
                        currentIndex = index
                    }
                } else {
                    if (e.id == dataStatus.step_status_id) {
                        currentIndex = index
                    }
                }
                index++
            });
            if (step_profile_id) {
                choosenCurrentIndex = currentIndex
            } else {
                choosenCurrentIndex = currentIndex + 1
            }
            currentMachineStep = dataMachineStep[choosenCurrentIndex]
        }
        // console.log(currentMachineStep)
        $('#namaStatusHalaman').html('SETOR ' + currentMachineStep.name)
        var dataEdit
        var good = ''
        var bad = ''
        var time = timeNow()
        var checkSteps = null
        if (edit) {
            dataEdit = findStatusEdit(id, 'DELIVERY')
            good = dataEdit.qty.good
            bad = dataEdit.qty.waste
            time = formatJamMenit(dataEdit.qty.process_at)
            checkSteps = checkIfStepIsDone(step_profile_id, dataEdit.id)
            // console.log(checkSteps)
        }
        var html = ''
        html += '<div class="row justify-content-end">'
        // sesi input

        // jumlah setoran
        html += '<div class="col-12 text-end">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="row">'

        html += '<div class="col">'
        html += '<p class="m-0 small-text fw-bolder">Review Setoran</p>'
        html += '<p class="m-0 small-text">Slop</p>'
        html += '</div>'

        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Target Setoran</p>'
        html += '<h1 class="fw-bolder">' + dataStatus.qty.good + '</h1>'
        html += '</div>'

        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Setoran Good</p>'
        var goodStep = dataStatus.qty.good
        if (!lastSetoranMode) {
            goodStep = dataStatus.qty.good
        }
        if (checkSteps) {
            goodStep = checkSteps.good
        }
        html += '<h1 class="fw-bolder" id="goodSorting">' + goodStep + '</h1>'
        html += '<p class="m-0 super-small-text text-danger" id="goodSortingText"></p>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // jumlah setoran

        // jumlah bad
        html += '<div class="col-7 text-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Total Setoran</b></p>'
        // console.log(dataStatus)
        var qtyGood = ''
        if (!lastSetoranMode) {
            qtyGood = dataStatus.qty.good
        }
        html += '<input class="form-control  nominal form-delivery form-invisible-line goodDelivery" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahGood" value="' + goodStep + '" tabindex="1" oninput="goodSortingFill()" data-values="' + goodStep + '">'
        html += '<hr class="m-0">'
        html += '</div>'
        // jumlah bad
        // jumlah bad
        html += '<div class="col-7 text-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jumlah Bad</b></p>'
        html += '<input class="form-control  nominal form-delivery form-invisible-line" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahBad" value="' + bad + '" tabindex="2" oninput="goodSortingFill()">'
        html += '<hr class="m-0">'
        html += '</div>'
        // jumlah bad

        // jam setoran
        html += '<div class="col-7 text-end align-self-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jam Setoran</b></p>'
        html += '<input class="form-control  form-invisible-line" style="background-color:transparent;border:0px;" type="time" placeholder="0" autocomplete="off" id="jamSetoran" value="' + time + '">'
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
        // custom steps
        html += '<div class="col-12 text-end align-self-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Custom Steps</b></p>'

        html += '<div class="" role="group" aria-label="Basic checkbox toggle button group">'
        var no = 1
        if (currentMachineStep.data_machine_steps) {
            var ifAutoBad = false
            if (currentMachineStep.machine_step_ids_bad_auto_complete) {
                ifAutoBad = true
            }
            currentMachineStep.data_machine_steps.forEach(e => {
                var dataFindMachineStepProduct = dataMachineStepProduct.find((v, k) => {
                    if (v.machine_step_id == e.id) return true
                })
                html += '<input type="checkbox" class="btn-check check-steps" id="btncheck' + e.id + '" onclick="checkSteps(' + e.id + ',' + choosenCurrentIndex + ',' + dataStatus.itemId + ',' + dataStatus.machine_step_profile_id + ')" autocomplete="off" value="' + e.id + '" data-item_id="' + dataFindMachineStepProduct.item_id_product + '" data-unit_id="' + dataFindMachineStepProduct.unit_id + '" data-machine_step_profile_id="' + dataStatus.machine_step_profile_id + '" data-machine_step_profile_detail_id="' + currentMachineStep.id + '" data-index="' + currentMachineStep.index + '" data-auto_bad="' + ifAutoBad + '" checked>'
                html += '<label class="btn btn-outline-success super-small-text p-2 ms-2 shadow-none" for="btncheck' + e.id + '"><span class="badge bg-light text-success me-1">' + no + '</span>' + e.name + '</label>'
                no++
            });
        }
        html += '</div>'

        html += '</div>'
        // custom steps

        html += '<div class="col-12 text-end pt-4">'
        html += '<button class="btn btn-primary btn-sm" id="btnSimpan" onclick="filteredSortir(' + edit + ')" tabindex="3">Simpan dan Lanjutkan<i class="fa fa-chevron-right ms-2"></i></button>'
        html += '</div>'
        // sesi input
        html += '</div>'
        $('#formEntryData').html(html)
        // $('#modal').on('shown.bs.modal', function() {
        setTimeout(function() {
            if (lastSetoranMode) {
                $('#jumlahGood').focus();
            } else {
                $('#jumlahBad').focus();
            }
        }, 100);
        // })
        $('.nominal').on('keypress', handleNumericInput);
        $('.form-delivery').on('keypress', function(event) {
            if (event.which === 13) { // Tombol Enter ditekan
                event.preventDefault();
                // AddedResultProductPersonId()
                filteredSortir(edit)
            }
        });
        goodSortingFill()
    }

    function checkSteps(idStep, index, idProduct, idMachineStepProfile) {
        $('.check-steps').prop('checked', false)
        var dataMachineStep = findmachineStep(idProduct, idMachineStepProfile).listMachineStep
        var data = dataMachineStep[index]
        var continues = true
        if (data.data_machine_steps) {
            data.data_machine_steps.forEach(e => {
                if (continues) {
                    $('#btncheck' + e.id).prop('checked', true)
                }
                if (e.id == idStep) {
                    continues = false
                }
            })
        }
        $('#jumlahBad').focus();
    }

    function handleNumericInput(event) {
        var allowChars = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 37, 39];
        if (allowChars.indexOf(event.which) === -1) {
            event.preventDefault();
        }

        var inputValue = $(this).val();
        $(this).val(inputValue.replace(/[^\d]/g, ''));
    }

    function filteredSortir(edit = false) {
        var jumlahBad = $('#jumlahBad').val()
        var jumlahGood = $('#jumlahGood').val()
        if (checkNotLong('form-delivery')) {
            if (jumlahGood > 0 || jumlahGood == undefined) {
                if (jumlahBad == 0 || jumlahBad == '0' || !jumlahBad) {
                    JustOnCamAfterAdd = true
                    arrangeVariableInsert(edit)
                    // Swal.fire({
                    //     text: 'Setoran Tidak ada jumlah Bad, apakah anda ingin menyelesaikan Sortir ke ' + dataSaveSetoran.number + ' ?',
                    //     icon: 'warning',
                    //     showCancelButton: true,
                    //     confirmButtonColor: '#3085d6',
                    //     cancelButtonColor: '#d33',
                    //     confirmButtonText: 'Yakin',
                    //     cancelButtonText: 'Batal',
                    // }).then((result) => {
                    //     if (result.isConfirmed) {
                    //         JustOnCamAfterAdd = true
                    //         arrangeVariableInsert(1)
                    //     }
                    // })
                } else {
                    JustOnCamAfterAdd = true
                    arrangeVariableInsert(edit)
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Tidak Lengkap',
                    text: 'Data yang dimasukkan Tidak Lengkap'
                });
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Terlalu Panjang',
                text: 'Data yang dimasukkan Terlalu Panjang'
            });
        }
    }

    function listCurrentMachineStep(result_product_person_id, item_id, machine_step_profile_id, machine_step_profile_detail_id) {
        var masterMachineStep = findmachineStep(item_id, machine_step_profile_id).listMachineStep
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        var findDataStep = []
        var findDataStepMaster = []
        if (data) {
            findDataStep = data.result_product_person_step.filter((v, k) => {
                if (v.machine_step_profile_detail_id == machine_step_profile_detail_id) return true
            })
        }
        if (masterMachineStep) {
            findDataStepMaster = masterMachineStep.find((v, k) => {
                if (v.id == machine_step_profile_detail_id) return true
            }).data_machine_steps
        }
        var dataReturn = {
            masterMachineStep: findDataStepMaster,
            cuutentListMachineStep: findDataStep,
        }
        return dataReturn
    }

    function formFILLUP(id = null, edit = false, step_profile_id = null) {
        holdRefreshData = true
        firstAddedResultProductPersonId = ''
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var listMachineStep = listCurrentMachineStep(dataSaveSetoran.result_product_person_id, dataDelivery.itemId, dataDelivery.machine_step_profile_id, dataDelivery.machine_step_profile_detail_id)
        var dataEdit
        var good = ''
        var bad = dataDelivery.qty.waste
        var time = timeNow()
        if (edit) {
            dataEdit = findStatusEdit(id, 'FILLUP')
            good = dataEdit.qty.good
            bad = dataEdit.qty.waste
            time = formatJamMenit(dataEdit.qty.process_at)
        }
        // console.log(dataDelivery)
        var html = ''
        html += '<div class="row justify-content-end">'
        // sesi input

        // view
        html += '<div class="col-12">'
        html += '<div class="card bg-light-grey shadow-sm">'
        html += '<div class="card-body">'

        html += '<div class="row">'
        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">Available Step</p>'
        listMachineStep.masterMachineStep.forEach(e => {
            var checkMachineStep = listMachineStep.cuutentListMachineStep.find((v, k) => {
                if (v.machine_step.id == e.id) return true
            })
            if (checkMachineStep) {
                html += '<p class="m-0 super-small-text fw-bolder text-success">' + e.name + '<i class="fa fa-check text-success ms-1"></i></p>'
            } else {
                html += '<p class="m-0 super-small-text">' + e.name + '<i class="fa fa-times text-danger ms-1"></i></p>'
            }
        });
        html += '</div>'

        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">Total Setoran</p>'
        if (!dataDelivery.qty.good) {
            dataDelivery.qty.good = 0
        }
        html += '<h1 class="fw-bolder">' + dataDelivery.qty.good + '</h1>'
        html += '</div>'
        html += '<div class="col-4">'
        html += '<p class="m-0 super-small-text fw-bolder">Total Reject</p>'
        if (!dataDelivery.qty.waste) {
            dataDelivery.qty.waste = 0
        }
        html += '<h1 class="fw-bolder">' + dataDelivery.qty.waste + '</h1>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        // view

        // jumlah setoran
        html += '<div class="col-8 text-end">'
        html += '<p class="mb-1 pt-3 small-text"><b>Jumlah Reject Ulang</b></p>'
        html += '<input class="form-control form-control-lg nominal form-fillup form-invisible-line" style="background-color:transparent;border:0px;" type="text" placeholder="0" autocomplete="off" id="jumlahBad" value="" data-bad="' + bad + '" tabindex="1" role="dialog">'
        html += '<hr class="m-0 text-danger">'
        html += '<p class="m-0 small-text text-danger">*) Jika tidak ada reject ulang, maka Reject Sebelumnya dianggap telah selesai</p>'
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
        html += '<button class="btn btn-primary btn-sm" id="btnSimpan" onclick="filteredSortir()" tabindex="2">Simpan dan Selesaikan</button>'
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
                filteredSortir()
            }
        });
    }

    function formDONE(id = null, edit = false, step_profile_id = null) {
        holdRefreshData = true
        firstAddedResultProductPersonId = ''
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var html = ''

        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<div class="card shadow-none border-0">'
        html += '<div class="card-body">'

        html += '<div class="row">'

        html += '<div class="col-12 pb-5">'
        html += '<div class="alert alert-success" role="alert">Setoran Complete !</div>'
        // html += '<lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/success.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>'
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

    function formWorkProgress(dataDetail, dataStatus, edit = false, step_profile_id = null) {
        itemIdClicked = dataStatus.itemId
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
                worker_id: dataStatus.worker_id,
                item_id: dataDetail.item.id
            }
        }
        var html = ''
        html += '<div class="row w-100 p-3 pe-1 pt-4">'

        html += '<div class="col-6 pb-3">'
        html += '<h2 class="m-0 fw-bolder"><span id="namaStatusHalaman">' + dataStatus.nextStatus + '</span> <span id="badgeStatusEdit" class="me-1"></span><span id="badgeModeChangeSetoran"></span></h2>'
        html += '<p class="m-0 fw-bolder small-text">SETORAN ' + dataDetail.number + '</p>'
        html += '</div>'
        html += '<div class="col-6 pb-3">'
        // select
        if (dataStatus.itemId) {
            html += '<select class="form-select shadow-none text-dark" id="productSetoran" style="border:none" onchange="changeItemSetoran()">'
            dataEntry.workPlanMachine.products.forEach(e => {
                var select = ''
                if (dataStatus.itemId == e.product.id) {
                    select = 'selected'
                }
                html += '<option value="' + e.product.id + '" data-unit="' + e.unit_input.id + '" data-work_plan_product_id="' + e.work_plan_product_id + '" ' + select + '>' + e.product.name + '</option>'
            });
            html += '<select>'
        }
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
            eval(`form${dataStatus.nextStatus}(dataDetail.result_product_person_id,edit,step_profile_id)`)
        } else {
            $('#formEntryData').html(emptyReturn('Anda Tidak Memiliki Akses'))
        }
    }

    var modeChangeSetoran = false

    function changeItemSetoran() {
        var itemId = $('#productSetoran').val()
        if (itemIdClicked != itemId) {
            // jika ada yg berubah, maka mengubah setorannya
            modeChangeSetoran = true
            nextNewDeliverStatus = true
            memorySelectedBrand = itemId
            formNEWDELIVER(setoranIdClicked)
        }
    }

    function badgeModeChangeSetoran() {
        if (modeChangeSetoran) {
            $('#badgeModeChangeSetoran').html('<span class="badge bg-warning ms-2 super-small-text">Ubah Brand</span>')
        } else {
            $('#badgeModeChangeSetoran').html('')
        }
    }

    function setoranBaru(worker_id) {
        dataSaveSetoran = {}
        var html = ''
        var numSetoran = findNumberofSetoran(worker_id)
        var result_product_person_id = createCodeId(worker_id)
        var number = parseInt(numSetoran) + parseInt(newSetoranBar)
        var dataDel = {
            'worker_id': worker_id,
            'worker_name': '',
            'result_product_person_id': result_product_person_id,
            'number': number,
            'datetime': null,
            'item': null,
            'item_target': null,
            'unit': null,
            'delivery': null,
            'sortir': null,
            'fillup': null,
            'complete': null,
            'result_product_person_step': null,
            'material_pickup': null,
            'updated_at': null
        }
        dataDetailDelivery.push(dataDel)
        var dataStatus = findStatus(result_product_person_id)
        var e = {
            result_product_person_id: result_product_person_id,
            datetime: currentDateTime(),
            number: number,
            next_status: dataStatus.nextStatus,
            qty_good: dataStatus.qty.good,
            qty_delivery_good: 0,
            worker_id: worker_id,
            item_id: null,
        }
        dataSaveSetoran = e
        html += setoranBar(e, deleteAndCloseButton('setoran', worker_id, result_product_person_id), '', '-', '<i class="fa fa-clock-o text-grey"></i>')
        $('#setoranSemu').append(html)
        isiWorkProgress(result_product_person_id)
        newSetoranBar++
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
        var valueGood = $('#jumlahGood').val()
        if (!valueGood) {
            valueGood = 0
        }
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var color = ''
        var textGood = ''
        if (valueGood < dataDelivery.qty.good) {
            color = 'text-danger'
            textGood = '*) Setoran kurang dari target'
        }
        $('#goodSorting').html('<span class="' + color + '">' + valueGood + '</span>')
        $('#goodSortingText').html(textGood)
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

    function arrangeVariableInsert(edit = false) {
        var jam = $('#jamSetoran').val()
        if (!jam) {
            Swal.fire({
                icon: 'error',
                title: 'Terlalu Cepat',
                text: 'Anda Terlalu Cepat sehingga data Tidak Terinput dengan Baik'
            });
        } else {
            doArrangeVariableInsert(edit)
        }
    }

    function doArrangeVariableInsert(edit) {
        nextNewDeliverStatus = true
        var dataDelivery = findStatus(dataSaveSetoran.result_product_person_id)
        var jamSetoran = dataEntry.workPlanMachine.date + ' ' + $('#jamSetoran').val() + ':00'
        var jumlahBad = $('#jumlahBad').val()
        var jumlahInput = $('#jumlahGood').val()
        if (!jumlahBad) {
            jumlahBad = 0
        }
        var id_product = $("#productSetoran").val()
        var id_product_target = $("#productSetoran").val()
        var machine_step_profile_id = ''
        var machine_step_profile_detail_id = ''
        var machine_step_profile_index = ''
        var warehouse_id = ''
        var material_pickup_id = ''
        var valuePersonStep = []
        var valuePersonStepIsBad = false
        var dataResultProductPerson = []
        if (modeChangeSetoran) {
            dataSaveSetoran.next_status = 'NEWDELIVER'
        }
        if (dataSaveSetoran.next_status != 'NEWDELIVER') {
            var unit_product = $("#productSetoran").find(':selected').data('unit')
            var work_plan_product_id = $("#productSetoran").find(':selected').data('work_plan_product_id')
            if (dataSaveSetoran.next_status == 'DELIVERY') {
                var valuePersonStepAll = $('.check-steps').map(function() {
                    return $(this).val();
                }).get();
                var valuePersonStep = $('.check-steps:checked').map(function() {
                    return $(this).val();
                }).get();
                var valuePersonStepIsBad = $('.check-steps:checked').map(function() {
                    return $(this).data('auto_bad');
                }).get()[0]
                var itemPersonStep = $('.check-steps:checked').map(function() {
                    return $(this).data('item_id');
                }).get()
                id_product = itemPersonStep[itemPersonStep.length - 1]
                var unitPersonStep = $('.check-steps:checked').map(function() {
                    return $(this).data('unit_id');
                }).get()
                unit_product = unitPersonStep[unitPersonStep.length - 1]
                machine_step_profile_id = $('.check-steps:checked').map(function() {
                    return $(this).data('machine_step_profile_id');
                }).get()[0]
                machine_step_profile_detail_id = $('.check-steps:checked').map(function() {
                    return $(this).data('machine_step_profile_detail_id');
                }).get()[0]
                machine_step_profile_index = $('.check-steps:checked').map(function() {
                    return $(this).data('index');
                }).get()[0]
            } else if (dataSaveSetoran.next_status == 'FILLUP') {
                dataResultProductPerson = findDataResultPerson(dataSaveSetoran.result_product_person_id, dataDelivery.machine_step_profile_detail_id)

                // console.log(dataDelivery)
                var dataFillup = {
                    qty_waste_deliv: parseInt(dataDelivery.qty.waste) + parseInt(jumlahBad),
                }
            }
        } else {
            // NEW DELIVER
            var value = $('.form-newdeliver').map(function() {
                return $(this).val();
            }).get();
            var idProducts = $('.form-newdeliver').map(function() {
                return $(this).data('id_product');
            }).get();
            // console.log(idProducts)
            var idStep = $('.form-newdeliver').map(function() {
                return $(this).data('id_step');
            }).get();
            var idMaterialPickup = $('.form-newdeliver').map(function() {
                return $(this).data('material_pickup_id');
            }).get();

            var work_plan_product_id = $('.form-newdeliver').map(function() {
                return $(this).data('work_plan_product_id');
            }).get()[0]
            var unit_product = $('.form-newdeliver').map(function() {
                return $(this).data('unit_id');
            }).get()[0]
            warehouse_id = $('.form-newdeliver').map(function() {
                return $(this).data('warehouse_id');
            }).get()[0]
            // console.log(warehouse_id)
            for (let i = 0; i < value.length; i++) {
                if (value[i]) {
                    jumlahInput = value[i]
                    id_product = idProducts[i]
                    machine_step_profile_id = idStep[i]
                    material_pickup_id = idMaterialPickup[i]
                }
            }
            memorySelectedBrand = id_product
            if (!id_product_target) {
                id_product_target = id_product
            }
            if (!id_product) {
                id_product = id_product_target
            }
            memorySelectedProfile = machine_step_profile_id

        }
        // console.log(id_product)
        var item_ids_material_main = getMaterialMain(id_product, machine_step_profile_id, unit_product, jumlahInput)
        var item_ids_chain_material = []
        if (item_ids_material_main.length) {
            item_ids_material_main.forEach(e => {
                item_ids_chain_material.push(e.item_id)
            });
        }
        if (!jumlahInput) {
            jumlahInput = dataDelivery.qty.good
        }
        var variableInsert = {
            NEWDELIVER: {
                datetime: jamSetoran,
                machine_step_profile_id: machine_step_profile_id,
                item_id_target: id_product,
                unit_id_target: unit_product,
                qty_target: parseInt(jumlahInput) - parseInt(jumlahBad),
                item_ids_chain_material: item_ids_chain_material,
            },
            DELIVERY: {
                datetime: jamSetoran,
                employee_id_deliv: user_id,
                qty_good_deliv: jumlahInput,
                qty_waste_deliv: jumlahBad,
                note_deliv: '',
            },
            FILLUP: dataFillup,
            COMPLETE: {
                is_complete: 1,
                complete_at: jamSetoran,
                employee_id_complete: user_id,
                qty_final: jumlahInput,
                note_complete: '',
            }
        }
        var dataMentah = {
            item_id_target: id_product_target,
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
            // is_product_final_other: is_product_final_other,
        }
        var data = {
            resultProductPerson: {
                ...dataMentah,
                ...variableInsert[dataSaveSetoran.next_status],
            },
        }
        // NEW DELIVER
        if (dataSaveSetoran.next_status == 'NEWDELIVER') {
            var dataEdit = findStatusEdit(dataSaveSetoran.result_product_person_id, dataSaveSetoran.next_status)
            var deleteMaterialPickup = []
            var deleteMaterialPickupDetail = []
            // console.log(dataEdit)
            var idPickup = createCodeId()
            if (dataEdit) {
                if (dataEdit.material_pickup_id && dataEdit.machine_step_profile_id == data.resultProductPerson.machine_step_profile_id && dataEdit.itemId == data.resultProductPerson.item_id) {
                    // jika tidak ada yg berubah maka edit saja
                    idPickup = dataEdit.material_pickup_id
                }
            }
            var materialPickup = [{
                id: idPickup,
                warehouse_id: warehouse_id,
                employee_id_pickup: dataSaveSetoran.worker_id,
                result_product_person_id: dataSaveSetoran.result_product_person_id,
                note: '',
                is_pickup: 1,
                pickup_at: currentDateTime(),
                material_pickup_type_id: 1,
                employee_id_admin: user_id,
            }]
            if (edit) {
                if (dataEdit.machine_step_profile_id != data.resultProductPerson.machine_step_profile_id || dataEdit.itemId != data.resultProductPerson.item_id) {
                    deleteMaterialPickup.push(dataEdit.material_pickup_id)
                    dataEdit.material_pickup_details.forEach(el => {
                        deleteMaterialPickupDetail.push(el.id)
                    });
                }
            }
            var materialPickupDetail = []
            var selectedPickupDetailId = []
            item_ids_material_main.forEach(e => {
                var idMaterialPickupDetail = createCodeId()
                if (dataEdit.material_pickup_details && dataEdit.machine_step_profile_id == data.resultProductPerson.machine_step_profile_id && dataEdit.itemId == data.resultProductPerson.item_id) {
                    var findDataMaterialPickupDetail = dataEdit.material_pickup_details.find((v, k) => {
                        if (v.item.id == e.item_id) return true
                    })
                    if (findDataMaterialPickupDetail) {
                        idMaterialPickupDetail = findDataMaterialPickupDetail.id
                    }
                }
                materialPickupDetail.push({
                    id: idMaterialPickupDetail,
                    material_pickup_id: idPickup,
                    item_id: e.item_id,
                    unit_id_input: e.unit_id_input,
                    qty_input: e.qty_input,
                    unit_id: e.unit_id,
                    qty: e.qty,

                })
                selectedPickupDetailId.push(idMaterialPickupDetail)
            });
            // cek apakah material pickup detail nya ada yg dihapus apa engga
            if (dataEdit.material_pickup_details) {
                dataEdit.material_pickup_details.forEach(e => {
                    var cekMaterialPickupDetail = selectedPickupDetailId.find((v, k) => {
                        if (v == e.id) return true
                    })
                    if (!cekMaterialPickupDetail) {
                        deleteMaterialPickupDetail.push(e.id)
                    }
                });
            }
            data['materialPickup'] = materialPickup
            data['materialPickupDetail'] = materialPickupDetail
            data['deletedId'] = {
                materialPickup: deleteMaterialPickup,
                materialPickupDetail: deleteMaterialPickupDetail,
                resultProductPersonStep: []
            }
            if (modeChangeSetoran || (edit && (dataEdit.machine_step_profile_id != data.resultProductPerson.machine_step_profile_id || dataEdit.itemId != data.resultProductPerson.item_id))) {
                var dataResult = getDataDetailDelivery().result_product_person_step
                dataResult.forEach(e => {
                    if (e.id) {
                        data.deletedId.resultProductPersonStep.push(e.id)
                    }
                });
                data.resultProductPerson.employee_id_deliv = null
                data.resultProductPerson.qty_good_deliv = null
                data.resultProductPerson.qty_waste_deliv = null
                data.resultProductPerson.is_complete = null
                data.resultProductPerson.complete_at = null
                data.resultProductPerson.employee_id_complete = null
                data.resultProductPerson.qty_final = null
            }
            data.resultProductPerson.is_product_final_other = is_product_final_other
        }

        // DELIVERY
        if (dataSaveSetoran.next_status == 'DELIVERY') {
            var dataEdit = findStatusEdit(dataSaveSetoran.result_product_person_id, dataSaveSetoran.next_status)
            var qtyDeliver = parseInt(jumlahInput)
            var qtyDeliverMinus = parseInt(jumlahInput) - parseInt(jumlahBad)
            data.resultProductPersonStep = []
            var dataDeliver = {
                reject: {
                    is: null,
                    at: null,
                    employee_id: null,
                    qty: null,
                    note: null,
                },
                complete: {
                    is: null,
                    at: null,
                    employee_id: null,
                    qty: null,
                    note: null,
                },
            }
            if (qtyDeliverMinus == jumlahInput) {
                // jika complete
                dataDeliver.complete.is = 1
                dataDeliver.complete.at = currentDateTime()
                dataDeliver.complete.employee_id = user_id
                dataDeliver.complete.qty = qtyDeliver
                dataDeliver.complete.note = ''
                dataDeliver.reject.is = 0
                var checkComplete = checkCompletedProfileStepsDelivery(dataSaveSetoran.result_product_person_id, valuePersonStep, valuePersonStepAll)
                // console.log(checkComplete)
                if (checkComplete) {
                    var dataNext = variableInsert['COMPLETE']
                    data.resultProductPerson = {
                        ...data.resultProductPerson,
                        ...dataNext
                    };
                }
            } else {
                // jika reject
                dataDeliver.reject.is = 1
                dataDeliver.reject.at = currentDateTime()
                dataDeliver.reject.employee_id = user_id
                dataDeliver.reject.qty = jumlahBad
                dataDeliver.reject.note = ''
                if (valuePersonStepIsBad) {
                    dataDeliver.reject.is = 0
                    dataDeliver.complete.is = 1
                    dataDeliver.complete.at = currentDateTime()
                    dataDeliver.complete.employee_id = user_id
                    dataDeliver.complete.qty = qtyDeliver
                    dataDeliver.complete.note = ''
                }
            }
            for (let i = 0; i < valuePersonStep.length; i++) {
                var idStepDetail = createCodeId() + '' + i
                if (edit) {
                    var findEditedId = dataEdit.result_product_person_step.find((v, k) => {
                        if (v.machine_step.id == valuePersonStep[i]) return true
                    })
                    if (findEditedId) {
                        idStepDetail = findEditedId.id
                    }
                }
                data.resultProductPersonStep.push({
                    id: idStepDetail,
                    result_product_person_id: dataSaveSetoran.result_product_person_id,
                    datetime: jamSetoran,
                    machine_step_id: valuePersonStep[i],
                    item_id_product: itemPersonStep[i],
                    qty: qtyDeliver,
                    unit_id: unitPersonStep[i],
                    note: '',
                    index: machine_step_profile_index,
                    machine_step_profile_detail_id: machine_step_profile_detail_id,
                })
                if (qtyDeliverMinus == jumlahInput) {
                    // jika complete
                    data.resultProductPersonStep[i].is_complete = dataDeliver.complete.is
                    data.resultProductPersonStep[i].complete_at = dataDeliver.complete.at
                    data.resultProductPersonStep[i].employee_id_complete = dataDeliver.complete.employee_id
                    data.resultProductPersonStep[i].qty_complete = dataDeliver.complete.qty
                    data.resultProductPersonStep[i].is_reject = dataDeliver.reject.is
                } else {
                    // jika reject
                    data.resultProductPersonStep[i].is_reject = dataDeliver.reject.is
                    data.resultProductPersonStep[i].reject_at = dataDeliver.reject.at
                    data.resultProductPersonStep[i].employee_id_reject = dataDeliver.reject.employee_id
                    data.resultProductPersonStep[i].qty_reject = dataDeliver.reject.qty
                    data.resultProductPersonStep[i].note_reject = ''
                    if (valuePersonStepIsBad) {
                        data.resultProductPersonStep[i].is_complete = dataDeliver.complete.is
                        data.resultProductPersonStep[i].complete_at = dataDeliver.complete.at
                        data.resultProductPersonStep[i].employee_id_complete = dataDeliver.complete.employee_id
                        data.resultProductPersonStep[i].qty_complete = dataDeliver.complete.qty
                    }
                }
            }
        }

        // FILLUP
        if (dataSaveSetoran.next_status == 'FILLUP') {
            data.resultProductPersonStep = []
            var index = 0
            if (dataResultProductPerson.length) {
                dataResultProductPerson.forEach(e => {
                    // console.log(e)
                    var qtyFillup = parseInt(jumlahInput) - parseInt(jumlahBad)
                    data.resultProductPersonStep.push({
                        id: e.id,
                        result_product_person_id: dataSaveSetoran.result_product_person_id,
                        datetime: jamSetoran,
                        machine_step_id: e.machine_step.id,
                        qty: jumlahBad,
                        unit_id: e.unit.id,
                        item_id_product: e.item.id
                    })
                    if (jumlahBad == 0) {
                        data.resultProductPersonStep[index].is_complete = 1
                        data.resultProductPersonStep[index].is_reject = 0
                        data.resultProductPersonStep[index].complete_at = currentDateTime()
                        data.resultProductPersonStep[index].employee_id_complete = user_id
                        data.resultProductPersonStep[index].qty_complete = dataDelivery.qty.good
                    }
                    index++
                });
            }
            // sisanya(jika ada)
            var masterStep = findmachineStep(id_product, dataDelivery.machine_step_profile_id)
            var masterMachineStep = masterStep.listMachineStep
            var masterMachineStepProduct = masterStep.listMachineStepProduct
            var jumlahStepTambahan = []
            if (jumlahBad == 0) {
                if (masterMachineStep) {
                    var findDataStepMaster = masterMachineStep.find((v, k) => {
                        if (v.id == dataDelivery.machine_step_profile_detail_id) return true
                    }).data_machine_steps
                    if (findDataStepMaster) {
                        var a = 0
                        findDataStepMaster.forEach(e => {
                            // console.log(e)
                            if (dataResultProductPerson.length) {
                                var checkResultProductPerson = dataResultProductPerson.find((v, k) => {
                                    if (v.machine_step.id == e.id) return true
                                })
                                if (!checkResultProductPerson) {
                                    // jika belum input, maka masuk variable buat di insert
                                    var checkUnitIdStep = masterMachineStepProduct.find((v, k) => {
                                        if (v.machine_step_id == e.id) return true
                                    })
                                    jumlahStepTambahan.push(1)
                                    data.resultProductPersonStep.push({
                                        id: createCodeId() + '' + a,
                                        result_product_person_id: dataSaveSetoran.result_product_person_id,
                                        datetime: jamSetoran,
                                        machine_step_id: e.id,
                                        qty: jumlahBad,
                                        unit_id: checkUnitIdStep.unit_id,
                                        item_id_product: checkUnitIdStep.item_id_product,
                                        note: '',
                                        index: e.index,
                                        machine_step_profile_detail_id: dataDelivery.machine_step_profile_detail_id,
                                        is_complete: 1,
                                        complete_at: currentDateTime(),
                                        employee_id_complete: user_id,
                                        qty_complete: dataDelivery.qty.good
                                    })
                                    a++
                                }
                            }
                        });
                    }
                }
            }


            var checkComplete = checkCompletedProfileSteps(dataSaveSetoran.result_product_person_id, jumlahStepTambahan)
            if (jumlahBad == 0 && checkComplete) {
                // jika complete semua
                fillupAutoNextSetoran = true
                var dataNext = variableInsert['COMPLETE']
                data.resultProductPerson = {
                    ...data.resultProductPerson,
                    ...dataNext
                };
            }
        }
        // console.log(dataResultProductPerson)
        // console.log(data)
        // console.log(dataDelivery)
        simpanVariableOffline(data, dataDelivery)
    }

    function checkCompletedProfileSteps(result_product_person_id, data_step) {
        var status = false
        var filterDelivery = arrayDataDetailDelivery[result_product_person_id]
        // var filterDelivery = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        if (filterDelivery) {
            var data = filterDelivery.result_product_person_step
            var dataStatus = findStatus(result_product_person_id)
            var dataMachineStepProduct = findmachineStep(dataStatus.itemId, dataStatus.machine_step_profile_id).listMachineStepProduct
            var totalSebenarnya = dataMachineStepProduct.length
            var jumlahSedangBerjalan = 0
            if (data.length) {
                var findAnyIdFilled = data.find((v, k) => {
                    if (v.id) return true
                })
                if (findAnyIdFilled) {
                    jumlahSedangBerjalan = data.length
                }
            }
            var jumlahInputs = data_step.length
            var totalInput = parseInt(jumlahInputs) + parseInt(jumlahSedangBerjalan)
            // console.log(dataMachineStepProduct)
            if (totalSebenarnya <= totalInput) {
                status = true
            }
        }
        return status
    }

    function checkCompletedProfileStepsDelivery(result_product_person_id, data_step, data_step_all) {
        var status = false
        var filterDelivery = arrayDataDetailDelivery[result_product_person_id]
        // var filterDelivery = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        if (filterDelivery) {
            var data = filterDelivery.result_product_person_step
            var dataStatus = findStatus(result_product_person_id)
            var dataMachineStepProduct = findmachineStep(dataStatus.itemId, dataStatus.machine_step_profile_id).listMachineStepProduct
            var totalSebenarnya = dataMachineStepProduct.length
            var jumlahSedangBerjalan = 0
            if (data.length) {
                var findAnyIdFilled = data.find((v, k) => {
                    if (v.id) return true
                })
                if (findAnyIdFilled) {
                    jumlahSedangBerjalan = data.length
                }
            }
            var jumlahInputs = data_step_all.length
            var totalInput = parseInt(jumlahInputs) + parseInt(jumlahSedangBerjalan)
            // console.log(dataMachineStepProduct)
            if (totalSebenarnya <= totalInput) {
                status = true
            }
        }
        return status
    }

    function checkCompletedProfileStepsAll(result_product_person_id, machine_step_profile_id, item_id) {
        var status = false
        var data = arrayDataDetailDelivery[result_product_person_id]
        // var data = dataDetailDelivery.find((v, k) => {
        //     if (v.result_product_person_id == result_product_person_id) return true
        // })
        // var resultProductPersonStep = data.result_product_person_step
        var resultProductPersonStep = data.result_product_person_step.filter((v, k) => {
            if (v.is_complete == 1) return true
        })
        var dataMachineStepProduct = findmachineStep(item_id, machine_step_profile_id).listMachineStepProduct
        var totalSebenarnya = dataMachineStepProduct.length
        var totalSedangBerjalan = 0
        if (resultProductPersonStep[0].id) {
            totalSedangBerjalan = resultProductPersonStep.length
        }
        if (totalSebenarnya == totalSedangBerjalan) {
            status = true
        }
        return status
    }

    function simpanVariableOffline(data, dataDelivery) {
        // console.log(dataDelivery)
        scannerStatus = false
        $('#textAutoSave').html('')
        var dataSaved = deepCopy(dataDetailDelivery).find((v, k) => {
            if (v.result_product_person_id == data.resultProductPerson.id) return true
        })
        var dataEmployee = dataEntry.employee.find((v, k) => {
            if (v.id == data.resultProductPerson.employee_id) return true
        })
        variableSaveOffline.resultProductPerson.push(data.resultProductPerson)

        if (data.resultProductPersonStep) {
            deepCopy(data.resultProductPersonStep).forEach(e => {
                variableSaveOffline.resultProductPersonStep.push(e)
            });
        }
        if (data.materialPickup) {
            data.materialPickup.forEach(e => {
                variableSaveMaterialOffline.materialPickup.push(e)
            });
        }
        if (data.materialPickupDetail) {
            data.materialPickupDetail.forEach(e => {
                variableSaveMaterialOffline.materialPickupDetail.push(e)
            });
        }
        if (data.deletedId) {
            data.deletedId.materialPickupDetail.forEach(e => {
                variableSaveMaterialOffline.deletedId.materialPickupDetail.push(e)
            });
            data.deletedId.resultProductPersonStep.forEach(e => {
                variableSaveOffline.deletedId.resultProductPersonStep.push(e)
            });
        }
        var material_pickup = []
        var result_product_person_step = []
        if (dataSaved) {
            if (dataSaved.material_pickup) {
                material_pickup = dataSaved.material_pickup
            }
            if (dataSaved.result_product_person_step) {
                result_product_person_step = dataSaved.result_product_person_step
            }
        }
        if (data.resultProductPersonStep) {
            data.resultProductPersonStep.forEach(e => {
                var dataProductss = dataEntry.productMaterial.find((v, k) => {
                    if (v.item_id == e.item_id_product) return true
                })
                var findStepName = dataEntry.machineStep.find((v, k) => {
                    if (v.id == e.machine_step_id) return true
                })
                // console.log(e)
                result_product_person_step.push({
                    "id": e.id,
                    "machine_step_profile_detail_id": e.machine_step_profile_detail_id,
                    "datetime": e.datetime,
                    "machine_step": {
                        "id": e.machine_step_id,
                        "name": findStepName.name
                    },
                    "item": {
                        "id": e.item_id_product,
                        "code": dataProductss.code,
                        "alias": dataProductss.alias,
                        "name": dataProductss.name
                    },
                    "unit": {
                        "id": e.unit_id,
                        "name": null
                    },
                    "qty": e.qty,
                    "is_reject": e.is_reject,
                    "reject_at": e.reject_at,
                    "employee_reject": {
                        "id": e.employee_id_reject,
                        "eid": null,
                        "name": null
                    },
                    "qty_reject": e.qty_reject,
                    "note_reject": e.note_reject,
                    "is_complete": e.is_complete,
                    "complete_at": e.complete_at,
                    "employee_complete": {
                        "id": e.employee_id_complete,
                        "eid": null,
                        "name": null
                    },
                    "qty_complete": e.qty_complete,
                    "note": e.note
                })

            })
        }

        if (data.materialPickup) {
            var indexMaterialPickup = 0
            data.materialPickup.forEach(e => {
                material_pickup.push({
                    "result_product_person_id": data.resultProductPerson.id,
                    "id": e.id,
                    "warehouse": {
                        "id": e.warehouse_id,
                        "name": null
                    },
                    "machine_step_profile_id": data.resultProductPerson.machine_step_profile_id,
                    "is_pickup": e.is_pickup,
                    "pickup_at": e.pickup_at,
                    "created_at": null,
                    "employee_admin": {
                        "id": e.employee_id_admin,
                        "name": "Febi Nadia Paramita"
                    },
                    'material_pickup_details': []
                })
                if (data.materialPickupDetail) {
                    data.materialPickupDetail.forEach(el => {
                        material_pickup[indexMaterialPickup].material_pickup_details.push({
                            "id": el.id,
                            'item': {
                                'id': el.item_id,
                            },
                            'unit': {
                                'id': el.unit_id
                            },
                            'qty': el.qty
                        })
                    });
                }
                indexMaterialPickup++
            });
        }
        var completeProcess = null
        var completeGood = 0
        var deliveryProcess = null
        var deliveryGood = 0
        if (data.resultProductPerson.qty_good_deliv) {
            deliveryProcess = 1
            deliveryGood = data.resultProductPerson.qty_good_deliv
        }
        if (data.resultProductPerson.qty_final) {
            completeProcess = 1
            completeGood = data.resultProductPerson.qty_final
        }
        // console.log(data.resultProductPerson.item_id_target)
        var dataProducts = dataEntry.productMaterial.find((v, k) => {
            if (v.item_id == data.resultProductPerson.item_id_target) return true
        })
        if (!dataProducts) {
            dataProducts = dataEntry.productMaterial.find((v, k) => {
                if (v.item_id == data.resultProductPerson.item_id_product) return true
            })
            if (!dataProducts) {
                dataProducts = {
                    code: '-',
                    name: '-',
                    alias: '-',
                }
            }
        }
        // console.log(is_product_final_other)
        var dataInputDetailDelivery = {
            'worker_id': data.resultProductPerson.employee_id,
            'worker_name': dataEmployee.name,
            'result_product_person_id': data.resultProductPerson.id,
            'number': data.resultProductPerson.number,
            'datetime': data.resultProductPerson.datetime,
            'item': {
                "id": data.resultProductPerson.item_id_product,
                "code": dataProducts.code,
                "name": dataProducts.name,
                "alias": dataProducts.alias
            },
            'item_target': {
                id: data.resultProductPerson.item_id_target,
                "code": dataProducts.code,
                "name": dataProducts.name,
                "alias": dataProducts.alias
            },
            'unit': {
                id: data.resultProductPerson.unit_id
            },
            'unit_target': {
                id: data.resultProductPerson.unit_id
            },
            'delivery': {
                is_process: deliveryProcess,
                good: deliveryGood
            },
            'qty_target': data.resultProductPerson.qty_target,
            'is_product_final_other': data.resultProductPerson.is_product_final_other,
            'sortir': null,
            'fillup': null,
            'complete': {
                "is_process": completeProcess,
                "good": completeGood,
            },
            'result_product_person_step': result_product_person_step,
            'material_pickup': material_pickup,
            'updated_at': data.resultProductPerson.updated_at
        }
        // console.log(dataInputDetailDelivery)
        var findDetailDelivery = deepCopy(dataDetailDelivery).find((v, k) => {
            if (v.result_product_person_id == data.resultProductPerson.id) return true
        })
        if (findDetailDelivery) {
            var testDetail = dataDetailDelivery.filter((v, k) => {
                if (v.result_product_person_id != data.resultProductPerson.id) return true
            })
            dataDetailDelivery = testDetail
            dataDetailDelivery.push(dataInputDetailDelivery)
        } else {
            dataDetailDelivery.push(dataInputDetailDelivery)
        }
        arrayDataDetailDelivery[data.resultProductPerson.id] = dataInputDetailDelivery
        // add kerangka entry
        var kerangkaEntryData = deepCopy(dataEntry.productionDelivery)
        var dataKerangkaEntryData = kerangkaEntryData.find((v, k) => {
            if (v.employee_worker.id == data.resultProductPerson.employee_id) return true
        })
        if (!dataKerangkaEntryData) {
            dataKerangkaEntryData = []
            dataKerangkaEntryData.push({
                employee_worker: {
                    "id": dataEmployee.id,
                    "eid": dataEmployee.eid,
                    "name": dataEmployee.name,
                    "row_code": dataEmployee.row_code,
                },
                remaining_material: null,
                data: []
            })
        } else {
            if (!dataKerangkaEntryData.data) {
                dataKerangkaEntryData.data = []
            }
        }
        var dataDetailDeliveryByWorker = dataDetailDelivery.filter((v, k) => {
            if (v.worker_id == data.resultProductPerson.employee_id) return true
        })
        dataKerangkaEntryData.data = []
        dataDetailDeliveryByWorker.forEach(e => {
            dataKerangkaEntryData.data.push(e)
        });
        // console.log(dataKerangkaEntryData)
        var dataSelainItu = kerangkaEntryData.filter((v, k) => {
            if (v.employee_worker.id != data.resultProductPerson.employee_id) return true
        })
        dataSelainItu.push(dataKerangkaEntryData)
        dataEntry.productionDelivery = dataSelainItu
        // add kerangka entry
        firstAddedResultProductPersonId = ''
        is_product_final_other = '0'
        buttonSaveOfflineMode(variableSaveOffline.resultProductPerson, variableSaveMaterialOffline.materialPickup, variableSaveMaterialOffline.materialPickupDetail)
        // jika setoran akan berakhir
        // var findOpenSetoran = findOpenedSetoran(data.resultProductPerson.employee_id)
        var findOpenSetoran = {
            status: false
        }
        // console.log(findOpenSetoran)
        if (!findOpenSetoran.status) {
            // jika setoran sudah close semua
            if (data.resultProductPerson.is_complete == 1) {
                if (autoNext) {
                    holdRefreshData = true
                    var namaBrand = ''
                    var dataproducts = dataEntry.workPlanMachine.products.find((v, k) => {
                        if (v.product.id == data.resultProductPerson.item_id) return true
                    })
                    if (dataproducts) {
                        namaBrand = dataproducts.product.alias
                    }
                    holdRefreshData = false
                    setoranBaru(workerIdClicked)
                    // var dataSwal = {
                    //     text: 'Apakah Dilanjutkan Pemberian Pita ' + namaBrand + ' untuk Setoran Berikutnya ?',
                    //     icon: 'warning',
                    //     showCancelButton: true,
                    //     showConfirmButton: true,
                    //     showDenyButton: true,
                    //     denyButtonColor: '#3085d6',
                    //     confirmButtonColor: '#5cb85c',
                    //     denyButtonText: 'Ganti Brand Lain',
                    //     cancelButtonText: 'Batal',
                    //     customClass: 'swal-wide',
                    //     confirmButtonText: 'Ya',
                    // }
                    // Swal.fire(dataSwal).then((result) => {
                    //     if (result.isConfirmed) {
                    //         // jika setoran berikutnya
                    //         holdRefreshData = false
                    //         setoranBaru(workerIdClicked)
                    //     } else if (result.isDenied) {
                    //         // jika ganti brand
                    //         nextNewDeliverStatus = false
                    //         holdRefreshData = false
                    //         setoranBaru(workerIdClicked)
                    //     } else {
                    //         holdRefreshData = false
                    //         scannerQR()
                    //     }
                    // })
                } else {
                    scannerQR()
                }
            } else {
                if ((firstSetoranMode && dataDelivery.nextStatus == 'NEWDELIVER' && totalFirstSetoranMode < 1) || fillupAutoNextSetoran) {
                    fillupAutoNextSetoran = false
                    holdRefreshData = false
                    var dataEmployee = dataEntry.employee.find((v, k) => {
                        if (v.id == workerIdClicked) return true
                    })
                    if (firstSetoranMode) {
                        totalFirstSetoranMode++
                    }
                    checkWorkerId(dataEmployee.eid)
                } else [
                    scannerQR()
                ]
            }
        } else {
            // jika ada setoran yg masih open
            Swal.fire({
                text: 'Terdapat Setoran lainnya yang masih buka, apakah membuka setoran yang masih buka ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    isiWorkProgress(findOpenSetoran.result_product_person_id)
                } else {
                    scannerQR()
                }
            })
        }
    }

    function buttonSaveOfflineMode(data = [], data2 = [], data3 = [], data4 = []) {
        // console.log(data)
        // console.log(data2)
        // console.log(data3)
        if (data.length || data2.length || data3.length || data4.length) {
            $('#buttonSaveOfflineMode').prop("hidden", false);
        } else {
            $('#buttonSaveOfflineMode').prop("hidden", true);
        }
    }

    function loadSimpanOfflineMode() {
        $('#modal').modal('show')
        $('#modalDialog').removeClass('modal-xl').removeClass('modal-lg').addClass('modal-dialog modal-dialog-scrollable');
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
        if (data.resultProductPerson.length) {
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
            resultProductPersonStep: [],
            deletedId: {
                resultProductPersonStep: [],
                resultProductPerson: [],
            }
        }
        // materialIdClicked = false
        if (offlineMode) {
            buttonSaveOfflineMode(variableSaveOffline.resultProductPerson, variableSaveMaterialOffline.materialPickup, variableSaveMaterialOffline.materialPickupDetail)
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
    var openedModal = false

    function openModalScanner() {
        openedModal = true
        $('#modal').modal('show')
        scannerQR()
    }

    function scannerQR() {
        newSetoranBar = 1
        totalFirstSetoranMode = 0
        holdRefreshData = false
        modalProgress = false
        modeChangeSetoran = false
        firstAddedResultProductPersonId = ''
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
        $('#modalDialog').removeClass('modal-xl').addClass('modal-dialog modal-lg modal-dialog-centered');
        var html_header = '';
        html_header += '<div class="row justify-content-between w-100 align-items-center">'
        html_header += '<div class="col-auto">'
        html_header += '<h5 class="modal-title">QR Scan</h5>';
        html_header += '</div>'
        html_header += '<div class="col-auto">'
        html_header += viewSelectMode()
        html_header += '</div>'
        html_header += '<div class="col-auto">'
        html_header += '</div>'
        html_header += '</div>'
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';

        html_body += '<div class="row p-0 m-0">'

        html_body += '<div class="col-4 border-end">'

        html_body += '<p class="m-0 super-small-text text-dark-grey fw-bolder">History</p>'
        html_body += '<div class="mt-2" id="listHistoryInsert">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-8">'
        html_body += '<div class="row justify-content-center">'

        html_body += '<div class="col-12 text-center mt-5">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 align-self-center"><p class="m-0 fw-bolder">' + formatDateIndonesia(dataEntry.workPlanMachine.date) + '</p></div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-6 text-center mb-5 mt-5">'

        html_body += '<img src="<?= base_url() ?>assets/image/svg/barcode.svg" style="width: 50%;">'

        html_body += '</div>'
        html_body += '<div class="col-8 text-center">'
        html_body += '<input class="form-control rounded-pill form-leave" style="text-align: center;" type="text" id="codeQR" role="dialog" autocomplete="off">'
        html_body += '<div class="row mt-2">'
        html_body += '<div class="col-9 pe-0">'
        html_body += '<button class="w-100 btn btn-primary rounded-pill" onclick="changeScanner()"><i class="fa fa-search me-2"></i>Cari</button>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<button class="w-100 btn btn-outline-primary rounded-pill" onclick="loadDataClick()"><i class="fa fa-refresh"></i></button>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-8">'
        html_body += '<div class="bd-callout bd-callout-warning super-small-text">Pastikan text scanner berada pada isi kolom diatas. Jika scanner sedang dalam masalah, anda dapat mengetikkan ID Pekerja kemudian klik <b>Cari</b></div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        shortHistory()
        if (!openedModal) {
            setTimeout(function() {
                $('#codeQR').focus();
            }, 100);
        } else {
            $('#modal').on('shown.bs.modal', function() {
                setTimeout(function() {
                    $('#codeQR').focus();
                }, 100);
            });
        }
        openedModal = false
        $("#codeQR").keypress(function(event) {
            // Periksa apakah tombol yang ditekan adalah 'Enter' (kode 13)
            if (event.keyCode === 13) {
                changeScanner()
            }
        });
    }

    function filterUniqueNames(data) {
        const uniqueNames = new Set(); // Membuat Set kosong untuk menyimpan nama unik
        const filteredData = []; // Membuat array kosong untuk menyimpan data yang telah difilter

        data.forEach(item => {
            if (!uniqueNames.has(item.name)) {
                uniqueNames.add(item.name); // Menambahkan nama baru ke Set jika belum ada
                filteredData.push(item); // Menambahkan data ke array jika nama belum pernah muncul
            }
        });

        return filteredData;
    }

    function shortHistory() {
        var dataTime = []
        var data = deepCopy(dataDetailDelivery)
        data.forEach(e => {
            if (e.datetime) {
                dataTime.push({
                    'datetime': e.updated_at,
                    'name': e.worker_name,
                    'id': e.worker_id,
                    'item_target': e.item_target.id
                })
            }
        });
        dataTime.sort((a, b) => new Date(b.datetime) - new Date(a.datetime));
        if (dataTime.length) {
            memorySelectedBrand = dataTime[0].item_target
        }
        if (memorySelectedBrand) {
            nextNewDeliverStatus = true
        }
        dataTime = filterUniqueNames(dataTime)
        const top10Data = dataTime.slice(0, 11);
        var html = ''
        top10Data.forEach(e => {
            html += '<div class="card card-hoper shadow-none mb-2" onclick="firstWorkProgress(' + e.id + ')">'
            html += '<div class="card-body p-2">'
            html += '<div class="row justify-content-center">'
            html += '<div class="col-auto">'
            html += '<p class="m-0 small-text"><b>' + shortenName(e.name, 3) + '</b></p>'
            // html += '<p class="m-0 super-small-text">' + e.to_do + '</p>'
            html += '</div>'
            html += '<div class="col text-end align-self-center">'
            html += '<p class="m-0 super-small-text">' + formatJamMenit(e.datetime) + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#listHistoryInsert').html(html)
    }

    function loadDataClick() {
        setoranIdClicked = null
        stillOpenModal = true
        JustOnCamAfterAdd = true
        loadData()
    }
    var scannedId = ''
    var scannerStatus = false

    function changeScanner() {
        if ($('#codeQR').val()) {
            scannerStatus = true
            mustOpenModal = true
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

    function autoNextOn() {
        if ($('.checkAutoNext').is(':checked')) {
            autoNext = true
            $('.checkAutoNext').attr('checked', true)
        } else {
            autoNext = false
            $('.checkAutoNext').removeAttr('checked', true)
        }
    }

    function offlineModeOn() {
        if ($('#checkOfflineMode').is(':checked')) {
            offlineModeConnection()
        } else {
            yesConnection()
        }
    }

    function offlineModeConnection() {
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
            intervalId = setInterval(autoSaveAtOfflineModeResult, 30 * 1000);
        }
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function autoSaveAtOfflineModeResult() {
        // holdRefreshData = true
        var type = 'POST'
        var button = '#btnSimpanOffline'
        var url = '<?php echo api_produksi('setResultProductPerson'); ?>'
        var data = deepCopy(variableSaveOffline)
        var dataMaterial = deepCopy(variableSaveMaterialOffline)
        if (data.resultProductPerson.length || data.deletedId.resultProductPersonStep.length || data.deletedId.resultProductPerson.length) {
            // insert_data
            kelolaDataSaveAuto(data, type, url, button)
        } else {
            if (dataMaterial.materialPickup.length || dataMaterial.materialPickupDetail.length) {
                autoSaveAtOfflineModeMaterial()
            }
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
                // Buat salinan data agar data asli tidak berubah
                var dataToDelete = deepCopy(data.resultProductPerson)
                var newData = deepCopy(variableSaveOffline.resultProductPerson).slice();
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                variableSaveOffline.resultProductPerson = newData

                if (data.resultProductPersonStep) {
                    var dataToDelete = deepCopy(data.resultProductPersonStep)
                    var newData = deepCopy(variableSaveOffline.resultProductPersonStep).slice();
                    dataToDelete.forEach(itemToDelete => {
                        newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                    });
                    variableSaveOffline.resultProductPersonStep = newData
                }
                if (data.deletedId.resultProductPersonStep) {
                    var dataToDelete = deepCopy(data.deletedId.resultProductPersonStep)
                    var newData = deepCopy(variableSaveOffline.deletedId.resultProductPersonStep).slice();
                    dataToDelete.forEach(itemToDelete => {
                        newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                    });
                    variableSaveOffline.deletedId.resultProductPersonStep = newData
                }
                if (data.deletedId.resultProductPerson) {
                    var dataToDelete = deepCopy(data.deletedId.resultProductPerson)
                    var newData = deepCopy(variableSaveOffline.deletedId.resultProductPerson).slice();
                    dataToDelete.forEach(itemToDelete => {
                        newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                    });
                    variableSaveOffline.deletedId.resultProductPerson = newData
                }
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
                buttonSaveOfflineMode(variableSaveOffline.resultProductPerson, variableSaveMaterialOffline.materialPickup, variableSaveMaterialOffline.materialPickupDetail)
                autoSaveAtOfflineModeMaterial()
            }
        });
    }

    function autoSaveAtOfflineModeMaterial() {
        // material pickup
        var type = 'POST'
        var button = '#btnSimpanOffline'
        var url = '<?php echo api_produksi('setMaterialPickup'); ?>'
        var data = deepCopy(variableSaveMaterialOffline)
        var dataResult = deepCopy(variableSaveOffline)
        if (data.materialPickup.length || data.materialPickupDetail.length) {
            // insert_data
            kelolaDataSaveAutoMaterial(data, type, url, button)
        } else {
            if (dataResult.resultProductPerson.length) {
                autoSaveAtOfflineModeResult()
            } else {
                setoranIdClicked = null
                JustOnCamAfterAdd = true
                holdRefreshData = true
                loadData()
            }
        }
    }

    function kelolaDataSaveAutoMaterial(data, type, url, button) {
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
                // Buat salinan data agar data asli tidak berubah
                var dataToDelete = deepCopy(data.materialPickup)
                var newData = deepCopy(variableSaveMaterialOffline.materialPickup).slice();
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                variableSaveMaterialOffline.materialPickup = newData

                var dataToDelete = deepCopy(data.materialPickupDetail)
                var newData = deepCopy(variableSaveMaterialOffline.materialPickupDetail).slice();
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                variableSaveMaterialOffline.materialPickupDetail = newData


                var dataToDelete = deepCopy(data.deletedId.materialPickupDetail)
                var newData = deepCopy(variableSaveMaterialOffline.deletedId.materialPickupDetail).slice();
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                variableSaveMaterialOffline.deletedId.materialPickupDetail = newData
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
                if (!variableSaveMaterialOffline.materialPickup.length && !variableSaveMaterialOffline.materialPickupDetail.length && !variableSaveMaterialOffline.deletedId.materialPickupDetail.length) {
                    $('#textAutoSave').html('<span class="ms-2 super-small-text">Tersimpan Otomatis</span>')
                }
                buttonSaveOfflineMode(variableSaveOffline.resultProductPerson, variableSaveMaterialOffline.materialPickup, variableSaveMaterialOffline.materialPickupDetail)
                // loadDataAfterAutoSave()
                setoranIdClicked = null
                JustOnCamAfterAdd = true
                loadData()
            }
        });
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
            error: function(xhr) {},
            beforeSend: function() {},
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
        var dataDeliveryBefore = deepCopy(dataDetailDelivery)
        var resultProductIdAfter = []
        dataDetailDelivery = []
        dataMaterial = []
        arrayDataDetailDelivery = {}
        arrayDataDEntryProductionEntry = {}
        dataEntry.productionDelivery.forEach(e => {
            e.data.forEach(el => {
                resultProductIdAfter.push(el.result_product_person_id)
                var dataDel = {
                    'worker_id': e.employee_worker.id,
                    'worker_name': e.employee_worker.name,
                    'result_product_person_id': el.result_product_person_id,
                    'number': el.number,
                    'datetime': el.datetime,
                    'item': el.item_target,
                    'item_target': el.item_target,
                    'unit': el.unit,
                    'delivery': el.delivery,
                    'sortir': el.sortir,
                    'fillup': el.fillup,
                    'complete': el.complete,
                    'result_product_person_step': el.result_product_person_step,
                    'material_pickup': el.material_pickup,
                    'updated_at': el.updated_at
                }
                dataDetailDelivery.push(dataDel)
                arrayDataDetailDelivery[el.result_product_person_id] = dataDel
            });
            arrayDataDEntryProductionEntry[e.employee_worker.id] = e
            // arrayDataDEntryProductionEntry[e.employee_worker.eid] = e
        })
        dataDeliveryBefore.forEach(e => {
            if (!resultProductIdAfter.includes(e.result_product_person_id)) {
                dataDetailDelivery.push(e)
                arrayDataDetailDelivery[e.result_product_person_id] = e
            }
        });
        dataEntry.productMaterial.forEach(e => {
            var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                if (v.product.id == e.item_id) return true
            })
            e.material_group.forEach(el => {
                if (el) {
                    var itemDefault = el.items.find((v, k) => {
                        if (v.item.id == el.item_id_default) return true
                    })
                    if (dataProducts) {
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
                    }
                }
            })
        })
        $('#totalWorker').html(dataEntry.productionDelivery.length)
        $('#workerProgress').html(formWorkerProgress())
        searching()
        // if (modalProgress) {
        //     modalWorkProgress()
        // }
    }
    document.addEventListener('keydown', handleEscapeKey);

    function handleEscapeKey(event) {
        // Periksa apakah tombol yang ditekan adalah 'esc'
        if (event.key === "Escape") {
            // Lakukan sesuatu di sini, misalnya menutup sebuah modal atau melakukan tindakan lainnya
            scannerQR()
        }
    }

    function findOpenedSetoran(worker_id) {
        var data = {
            status: false,
            result_product_person_id: null
        }
        var dataDelivery = deepCopy(dataDetailDelivery).filter((v, k) => {
            if (v.worker_id == worker_id) return true
        })
        var totalUnComplete = 0
        var findUncomplete = []
        if (dataDelivery.length > 0) {
            findUncomplete = dataDelivery.filter((v, k) => {
                if (v.complete.is_process == null) return true
            })
            // console.log(dataDelivery)
            totalUnComplete = findUncomplete.length
        }
        if (totalUnComplete > 0) {
            data.status = true
            data.result_product_person_id = findUncomplete[0].result_product_person_id
        }
        return data
    }

    var dataBroken = []

    function brokenData() {
        dataBroken = []
        deepCopy(dataDetailDelivery).filter((v, k) => {
            if (v.result_product_person_step && v.complete.is_process != null) {
                var status = checkQtyDifference(v.result_product_person_step, v.complete.good)
                if (status) {
                    dataBroken.push(v)
                }

            }
        })
        countBrokenData(dataBroken)
    }

    function countBrokenData(dataBroken) {
        if (dataBroken.length > 0) {
            $('#textBrokenData').html(dataBroken.length)
            $('#btnBrokenData').prop('hidden', false)
        } else {
            $('#textBrokenData').html(0)
            $('#btnBrokenData').prop('hidden', true)
        }
        isiBrokenData()
    }

    function modalBrokenData() {
        // console.log(dataBroken)
        $('#modal').modal('show')
        $('#modalDialog').removeClass('modal-xl').removeClass('modal-lg').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Fix Broken Data</h5>';
        html_header += '<button type="button" class="btn-close" onclick="scannerQR()"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row" id="isiBrokenData">'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('p-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer)
        isiBrokenData()
    }

    function isiBrokenData() {
        var html_body = '';
        deepCopy(dataBroken).forEach(e => {
            var data = checkQty(e.result_product_person_step, e.complete.good)
            html_body += '<div class="col-12" id=""fieldFixAllSetoran' + e.result_product_person_id + '>'
            html_body += '<div class="card shadow-none mb-2 card-hoper">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'

            html_body += '<div class="col-4">'
            html_body += '<p class="m-0 fw-bolder">' + e.worker_name + '</p>'
            html_body += '<p class="m-0 small">Setoran ke ' + e.number + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-8 align-self-center ps-0">'
            html_body += '<p class="m-0 super-small-text text-danger mb-2">*) ' + data + '</p>'
            html_body += '<button class="btn btn-sm btn-outline-orange small-text me-2 btnSeeDetail" onclick="clickedBroken(' + "'" + e.result_product_person_id + "'" + ',' + e.worker_id + ')">Lihat Detail</button>'
            html_body += '<button class="btn btn-sm btn-danger small-text btnFixAllBroker" onclick="fixAllBroker(' + "'" + e.result_product_person_id + "'" + ',' + e.complete.good + ')">Fix This Setoran</button>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        });
        $('#isiBrokenData').html(html_body)
    }

    function checkQty(data, inputQty) {
        var differentQtySteps = [];
        $.each(data, function(index, item) {
            if (item.qty !== inputQty) {
                differentQtySteps.push(item.machine_step.name);
            }
        });

        if (differentQtySteps.length > 0) {
            return differentQtySteps.join(', ') + ' jumlahnya tidak sama dengan <b>' + inputQty + '</b>';
        } else {
            return 'Semua machine step memiliki qty yang sama dengan ' + inputQty;
        }
    }

    function clickedBroken(result_product_person_id, worker_id) {
        workerIdClicked = worker_id
        setoranIdClicked = result_product_person_id
        var data = deepCopy(dataEntry.productionDelivery).find((v, k) => {
            if (v.employee_worker.id == workerIdClicked) return true
        })
        actionModalWorkProgress(data)
    }

    function checkQtyDifference(data, qty) {
        var initialQty = qty;
        for (var i = 1; i < data.length; i++) {
            if (data[i].qty != initialQty) {
                return true;
            }
        }
        return false;
    }

    function fixAllBroker(result_product_person_id, qty) {
        var data = dataBroken.find((v, k) => {
            if (v.result_product_person_id == result_product_person_id) return true
        })
        var resultProductPersonStep = []
        data.result_product_person_step.forEach(e => {
            resultProductPersonStep.push({
                id: e.id,
                qty: qty,
                qty_complete: qty
            })
        });
        var inputData = {
            resultProductPerson: [{
                id: result_product_person_id,
                qty_target: qty
            }],
            resultProductPersonStep: resultProductPersonStep
        }
        Swal.fire({
            text: 'Apakah anda yakin untuk mengubah data setoran ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                simpanData(inputData, result_product_person_id)
            }
        })
    }

    function simpanData(data, result_product_person_id) {
        var type = 'POST'
        var button = '.btnFixAllBroker'
        var url = '<?php echo api_produksi('setResultProductPerson'); ?>'
        kelolaData(data, type, url, button, result_product_person_id)
    }

    function kelolaData(data, type, url, button, result_product_person_id) {
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
                $('#fieldFixAllSetoran' + result_product_person_id).remove()
                loadData()
            }
        });
    }
</script>