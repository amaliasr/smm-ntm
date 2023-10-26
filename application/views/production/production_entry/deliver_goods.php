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
</style>
<div class="row">
    <div class="col-6 pt-2">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row justify-content-between p-3">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Worker Progress</b></p>
                        <p class="m-0 super-small-text text-grey"><b>20 Persons</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-outline-dark shadow-none" onclick="formTransaction()">QR OFF<i class="fa fa-qrcode ms-2"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mt-3" placeholder="Search" id="search_nama" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">
                    </div>
                </div>
                <!-- <div> -->
                <div style="height: 400px;overflow-x: hidden;overflow-y: auto;">

                    <?php for ($i = 0; $i < 30; $i++) { ?>
                        <div class="card shadow-none card-hoper border-end-0 border-start-0 pointer" style="border-radius:0px;" id="card_search2" onclick="workPorgress()">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col px-3">
                                        <p class="m-0 small text_search2 fw-bolder">RUSMIATI SARASVATI</p>
                                        <p class="m-0 super-small-text text-grey"><b class="text_search2">2,490 / <span class="text-dark-grey">3,000</span></b></p>
                                    </div>
                                    <div class="col px-3">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <div class="row px-3">
                                            <?php for ($j = 0; $j < 4; $j++) { ?>
                                                <div class="col p-0 pe-1">
                                                    <span class="badge rounded-pill super-small-text p-1 bg-primary w-100">500</span>
                                                </div>
                                            <?php } ?>
                                            <?php for ($j = 0; $j < 1; $j++) { ?>
                                                <div class="col p-0 pe-1">
                                                    <span class="badge rounded-pill super-small-text p-1 bg-orange w-100">490</span>
                                                </div>
                                            <?php } ?>
                                            <?php for ($j = 0; $j < 5; $j++) { ?>
                                                <div class="col p-0 pe-1">
                                                    <span class="badge rounded-pill super-small-text p-1 bg-outline-primary w-100">500</span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="col-6 pt-2">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Detail Worker</b></p>
                    </div>
                    <div class="col-auto text-end">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-9">
                        <h1 class="m-0 fw-bolder">Rusmiati Sarasvati</h1>
                        <p class="m-0">2,490 / <b class="text-dark-grey">3,000</b></p>
                        <p class="m-0 super-small-text text-warning"><i class="fa fa-circle me-2"></i>Still Working</p>
                    </div>
                    <div class="col-3">
                        <div class="card bg-warning">
                            <div class="card-body text-center text-white p-2">
                                <p class="m-0 super-small-text">Setoran Ke</p>
                                <h1 class="m-0 fw-bolder text-white">5</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-4">
                        <p class="super-small-text fw-bolder">Material Left</p>
                        <div class="card shadow-sm">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col align-self-center">
                                        <p class="m-0 h2"><b>TSG</b></p>
                                    </div>
                                    <div class="col text-end">
                                        <p class="m-0 small"><b>1,2 Kg</b></p>
                                        <p class="m-0 super-tiny-text">Updated at 7/10/2023 16:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-4">
                        <p class="super-small-text fw-bolder">Riwayat Setoran</p>
                        <table class="table table-bordered table-hover small-text table-sm">
                            <thead>
                                <tr>
                                    <th class="align-middle" rowspan="2">#</th>
                                    <th class="align-middle" rowspan="2">Jam Setor</th>
                                    <th class="align-middle" rowspan="2">Brand</th>
                                    <th class="align-middle" colspan="3">Quantity</th>
                                    <th class="align-middle" rowspan="2">Total</th>
                                    <th class="align-middle" rowspan="2">Status</th>
                                </tr>
                                <tr>
                                    <th>Good</th>
                                    <th>Bad</th>
                                    <th>Fillup</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <tr>
                                        <td class="text-center align-middle" style="height: 30px;">1</td>
                                        <td class="text-center align-middle" style="height: 30px;">10:23</td>
                                        <td class="text-center align-middle" style="height: 30px;">AK</td>
                                        <td class="text-center align-middle" style="height: 30px;">490</td>
                                        <td class="text-center align-middle" style="height: 30px;">10</td>
                                        <td class="text-center align-middle" style="height: 30px;">10</td>
                                        <td class="text-center align-middle" style="height: 30px;">500</td>
                                        <td class="text-center align-middle" style="height: 30px;">Complete</td>
                                    </tr>
                                <?php } ?>
                                <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <tr>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                        <td class="text-center align-middle" style="height: 30px;"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    function sortByProductId(data, idProducts) {
        const idSet = new Set(idProducts);

        const sortedData = [...data].sort((a, b) => {
            const aInIdProducts = idSet.has(a.item_id);
            const bInIdProducts = idSet.has(b.item_id);

            if (aInIdProducts && !bInIdProducts) {
                return -1;
            } else if (!aInIdProducts && bInIdProducts) {
                return 1;
            } else {
                return 0;
            }
        });

        return sortedData;
    }

    function extractProductId(data) {
        return data.map(function(item) {
            return item.product.id;
        });
    }

    function sumQtyByItemId(data) {
        const qtySumByItemId = {};

        data.forEach(item => {
            const itemId = item.item.id;
            const qty = item.qty;

            if (!qtySumByItemId[itemId]) {
                qtySumByItemId[itemId] = qty;
            } else {
                qtySumByItemId[itemId] += qty;
            }
        });

        const output = [];
        for (const itemId in qtySumByItemId) {
            output.push({
                item_id: parseInt(itemId),
                total_qty: qtySumByItemId[itemId],
            });
        }

        return output;
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function percentageToDegrees(percentage) {
        return percentage / 100 * 360
    }

    function getAliases(data) {
        const aliases = data.map(item => item.item.alias);
        return aliases.join(', ');
    }

    function conversiToTarget(input, multiplier, satuanBesar, satuanKecil) {
        const trays = Math.floor(input / multiplier);
        const remainingStik = input % multiplier;

        var nilai = ''
        if (remainingStik) {
            nilai = number_format(trays) + ' <span class="text-dark-grey">' + satuanBesar + '</span> ' + number_format(remainingStik) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
        } else {
            nilai = number_format(trays) + ' <span class="text-dark-grey">' + satuanBesar + '</span>'
        }
        return nilai
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var workPlanMachineId = '<?= $workPlanMachineId ?>'
    var dataEntry
    var itemIdSelected = []

    $(document).ready(function() {
        // loadData()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductTransferEntry'); ?>"
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
                dataEntry = response.data
                arrangeVariable()
            }
        })
    }
</script>