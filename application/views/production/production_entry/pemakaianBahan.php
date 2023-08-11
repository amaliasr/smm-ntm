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
    <div class="col-4">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row justify-content-between p-4 pb-0">
                    <div class="col-auto">
                        <p class="m-0 small-text"><b>Material</b></p>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 p-0">
                        <input type="text" class="form-control mt-4" placeholder="Search" id="search_nama" autocomplete="off" style="border-radius:0px;border-bottom:0px;border-left:0px;border-right:0px;">
                    </div>
                    <div class="col-12 p-0" style="height: 450px;overflow-x: hidden;overflow-y: auto;">
                        <div class="row m-0 p-0">
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <div class="col-12 p-0 border-top border-bottom">
                                    <div class="p-2">
                                        <p class="m-0 super-small-text"><b>RM.03-107</b></p>
                                        <p class="m-0 small-text">Alfoil Silver Dove (Uk : 74mm x 1500m x 60 gsm)</p>
                                    </div>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-primary super-small-text" style="width: 40%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-none mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="m-0 small-text">Saldo Awal</p>
                                <p class="m-0"><b>0</b></p>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-auto p-0 align-self-center">
                                        <i class="fa fa-arrow-up text-danger"></i>
                                    </div>
                                    <div class="col-auto">
                                        <p class="m-0 small-text">Terima</p>
                                        <p class="m-0"><b>0</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-auto p-0 align-self-center">
                                        <i class="fa fa-arrow-down text-success"></i>
                                    </div>
                                    <div class="col-auto">
                                        <p class="m-0 small-text">Pakai</p>
                                        <p class="m-0"><b>0</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <p class="m-0 small-text">Saldo Akhir</p>
                                <p class="m-0"><b>0</b></p>
                            </div>
                            <div class="col">
                                <p class="m-0 small-text">Unit</p>
                                <p class="m-0"><b>Roll</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col">
                                <p class="m-0 small-text"><b>Alfoil Silver Dove (Uk : 74mm x 1500m x 60 gsm)</b></p>
                            </div>
                            <div class="col text-end">
                                <p class="m-0 small-text"><b>Tray</b></p>

                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-12" id="productionDetail">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th class="small-text text-center">#</th>
                                            <th class="small-text text-center"></th>
                                            <th class="small-text text-center">Time</th>
                                            <th class="small-text text-center">User</th>
                                            <th class="small-text text-center">QTY</th>
                                            <th class="small-text text-center">Status</th>
                                            <th class="small-text text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <tr>
                                                <td class="small-text align-middle text-center">1</td>
                                                <td class="small-text align-middle text-center"><i class="fa fa-arrow-up text-danger"></i></td>
                                                <td class="small-text align-middle text-center">2023-08-10 15:26</td>
                                                <td class="small-text align-middle text-center">Bob</td>
                                                <td class="small-text align-middle text-center">20</td>
                                                <td class="small-text align-middle text-center"><span class="badge rounded-pill bg-primary">Pemakaian</span></td>
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