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

    .dataTables_scrollBody {
        overflow-x: hidden !important;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row p-4 justify-content-between">
                    <div class="col-auto align-self-center">
                        <p class="m-0 small fw-bolder">Workflow ABLF</p>
                        <p class="m-0 small-text fw-bolder"><span class="text-orange">2 j 23 m</span><span class="text-grey"> Total Worktime</span></p>
                    </div>
                    <div class="col-auto text-end">
                        <p class="m-0 small fw-bolder text-grey">Total 8 Hours</p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="progress" style="border-radius: 0px;height:50px;">
                        <div class="progress-bar bg-blue" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        </div>
                        <div class="progress-bar bg-warning" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                        </div>
                        <div class="progress-bar bg-danger" style="width: 4%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="row p-4 pt-2 justify-content-between">
                    <div class="col-auto align-self-center">
                        <div class="row">
                            <div class="col-auto pe-1 align-self-center"><i class="fa fa-square text-primary"></i></div>
                            <div class="col-auto ps-1">
                                <p class="m-0 small fw-bolder">Uptime</p>
                                <p class="m-0 lh-1 small-text text-primary fw-bolder">1 j 20 m</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="row">
                            <div class="col-auto pe-1 align-self-center"><i class="fa fa-square text-warning"></i></div>
                            <div class="col-auto ps-1">
                                <p class="m-0 small fw-bolder">PD</p>
                                <p class="m-0 lh-1 small-text text-warning fw-bolder">40 m</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="row">
                            <div class="col-auto pe-1 align-self-center"><i class="fa fa-square text-danger"></i></div>
                            <div class="col-auto ps-1">
                                <p class="m-0 small fw-bolder">UD</p>
                                <p class="m-0 lh-1 small-text text-danger fw-bolder">10 m</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="row">
                            <div class="col-auto pe-1 align-self-center"><i class="fa fa-square text-grey"></i></div>
                            <div class="col-auto ps-1">
                                <p class="m-0 small fw-bolder">Remaining</p>
                                <p class="m-0 lh-1 small-text text-grey fw-bolder">6 j</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 pt-2">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Detail Downtime</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-outline-primary shadow-none" onclick="formTransaction()"><i class="fa fa-paper-plane me-2"></i>Transaction</button>
                    </div>
                    <div class="col-12">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr class="">
                                    <th scope="col" class="p-3 pt-5 small-text">#</th>
                                    <th scope="col" class="p-3 pt-5 small-text">Time</th>
                                    <th scope="col" class="p-3 pt-5 small-text">Event</th>
                                    <th scope="col" class="p-3 pt-5 small-text">Status</th>
                                    <th scope="col" class="p-3 pt-5 small-text">Note</th>
                                    <th scope="col" class="p-3 pt-5 small-text">Total Minutes</th>
                                    <th scope="col" class="p-3 pt-5 small-text"></th>
                                </tr>
                            </thead>
                            <tbody id="transaksiDetail">
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <tr class="">
                                        <td class="p-2 small-text text-center">1</td>
                                        <td class="p-2 small-text text-center">07:00 - 07:15</td>
                                        <td class="p-2 small-text text-center">Prepare</td>
                                        <td class="p-2 small text-center"><span class="badge bg-warning">PD</span></td>
                                        <td class="p-2 small-text text-center">Persiapan Produksi</td>
                                        <td class="p-2 small-text text-center fw-bolder">15</td>
                                        <td class="p-2 small-text text-center"><button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="viewDetail()"><i class="fa fa-eye"></i></button></td>
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
            workPlanProductId: isRunningID
        }
        var url = "<?= api_produksi('loadPageProductTransferEntrySingle'); ?>"
        // getData(data, url)
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
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
                var dataMentah = deepCopy(dataEntry.workPlanMachine.product)
                dataEntry.workPlanMachine.products = []
                dataEntry.workPlanMachine.products.push(dataMentah)
                arrangeVariable()
            }
        })
    }

    function addDowntime() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Unprocessed Data</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'

        html_body += '<nav>'
        html_body += '<div class="nav nav-tabs" id="nav-tab" role="tablist">'
        html_body += '<button class="nav-link small-text active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Today</button>'
        html_body += '<button class="nav-link small-text" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">All Pending</button>'
        html_body += '</div>'
        html_body += '</nav>'
        html_body += '<div class="tab-content" id="nav-tabContent">'
        html_body += '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">'
        // today
        // today
        html_body += '</div>'
        html_body += '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">'
        // all
        // all
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none');
    }
</script>