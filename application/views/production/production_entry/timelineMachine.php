<style type="text/css">
    .progress {
        height: 40px;
        border-radius: 0px;
    }

    .progress-bar {
        text-align: left;
        padding-left: 10px;
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

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check-input {
        transform: scale(0.6);
        margin: 0;
    }

    .form-check-label {
        font-size: 12px;
        margin-left: 5px;
    }

    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .line-with-text hr {
        flex-grow: 1;
        border: none;
        border-top: 1px solid black;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row justify-content-between p-4 pb-0">
                    <div class="col-auto">
                        <p class="m-0 small-text"><b>Workflow All Brand</b></p>
                        <p class="m-0 super-small-text text-orange"><b>2 h 23 m</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <div class="btn-group">
                            <button class="btn btn-outline-primary btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                All Brand
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item">All Brand <i class="ms-2 fa fa-check text-success" id="successAll"></i></a></li>
                                <li><a class="dropdown-item">ARF12 <i class="ms-2 fa fa-check text-success d-none" id="successSkm"></i></a></li>
                                <li><a class="dropdown-item">ABOF20 <i class="ms-2 fa fa-check text-success d-none" id="successSkt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="progress mb-3 mt-4" style="height: 50px;">
                            <div class="progress-bar bg-primary" style="width: 40%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                Uptime<br><b>1 h 20 m</b>
                            </div>
                            <div class="progress-bar bg-yellow" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                PD<br><b>40 m</b>
                            </div>
                            <div class="progress-bar bg-danger" style="width: 5%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                UD<br><b>10 m</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-4 pt-0">
                    <div class="col-12 text-end">
                        <p class="m-0 small-text"><b>Remaining</b></p>
                        <p class="m-0 small-text text-grey"><b>6 h</b></p>
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
                        <p class="m-0 small-text"><b>Detail Downtime All Brand</b></p>
                        <p class="m-0 small-text"><b><span class="text-orange">195 Minutes</span></b></p>
                    </div>
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-outline-dark shadow-none" onclick="formProductionOut()"><i class="fa fa-plus me-2"></i>Add New</button>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12" id="productionDetail">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th class="small-text text-center">#</th>
                                    <th class="small-text text-center">Time</th>
                                    <th class="small-text text-center">Brand</th>
                                    <th class="small-text text-center">Event</th>
                                    <th class="small-text text-center">Status</th>
                                    <th class="small-text text-center">Note</th>
                                    <th class="small-text text-center">Total Minutes</th>
                                    <th class="small-text text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <tr>
                                        <td class="small-text align-middle text-center">1</td>
                                        <td class="small-text align-middle text-center">07.00 - 08.00</td>
                                        <td class="small-text align-middle text-center">ABLF20</td>
                                        <td class="small-text align-middle text-center">Prepare</td>
                                        <td class="small-text align-middle text-center"><span class="badge rounded-pill bg-danger">UD</span></td>
                                        <td class="small-text align-middle text-center">Pemberhentian Mesin</td>
                                        <td class="small-text align-middle text-center">20</td>
                                        <td class="small-text align-middle">
                                            <button type="button" class="btn btn-outline-dark shadow-none btn-sm"><i class="fa fa-eye"></i></button>
                                        </td>
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

<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var workPlanMachineId = '<?= $workPlanMachineId ?>'
    var modeChart = 0
    var dataEntry
    var dataProductionOut = []
    var dataProductionOutGroup

    $(document).ready(function() {})
</script>