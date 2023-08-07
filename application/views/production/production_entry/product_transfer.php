<!-- progress bar -->
<style type="text/css">
    .progress {
        width: 90px;
        height: 90px;
        background: none;
        position: relative;
    }

    .progress::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 10px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress .progress-left {
        left: 0;
    }

    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 10px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress .progress-right {
        right: 0;
    }

    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress .progress-value {
        position: absolute;
        top: 0;
        left: 0;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row">
                    <div class="col-2 align-self-center">
                        <b class="mb-2">
                            <p class="m-0 small">Machine Stock</p>
                        </b>
                        <p class="m-0 super-small-text">Updated</p>
                        <p class="m-0 super-small-text text-grey">05/08/2023 08:11</p>
                    </div>
                    <div class="col-5">
                        <div class="row">
                            <div class="col-auto">
                                <div class="progress mx-auto" data-value='80'>
                                    <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="font-weight-bold">80<sup class="small">%</sup></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center">
                                <h1 class="text-dark-grey"><b>ABLF12</b></h1>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="fa fa-arrow-down text-success"></i>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="m-0 super-small-text">30 Box (24,000 Pack)</p>
                                        <p class="m-0 super-small-text"><b>+ 24 Pack</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="fa fa-arrow-up text-danger"></i>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="m-0 super-small-text">30 Box (24,000 Pack)</p>
                                        <p class="m-0 super-small-text"><b>+ 24 Pack</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row">
                            <div class="col-auto">
                                <div class="progress mx-auto" data-value='80'>
                                    <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="font-weight-bold">80<sup class="small">%</sup></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center">
                                <h1 class="text-dark-grey"><b>ABLF12</b></h1>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="fa fa-arrow-down text-success"></i>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="m-0 super-small-text">30 Box (24,000 Pack)</p>
                                        <p class="m-0 super-small-text"><b>+ 24 Pack</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="fa fa-arrow-up text-danger"></i>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="m-0 super-small-text">30 Box (24,000 Pack)</p>
                                        <p class="m-0 super-small-text"><b>+ 24 Pack</b></p>
                                    </div>
                                </div>
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
                        <p class="m-0 super-small-text"><b>Transaksi</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-outline-dark shadow-none"><i class="fa fa-paper-plane me-2"></i>Transaction</button>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 12 A</p>
                                        <h1 class="text-dark-grey"><b>200</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 12 B</p>
                                        <h1 class="text-dark-grey"><b>0</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 20 A</p>
                                        <h1 class="text-dark-grey"><b>200</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 20 B</p>
                                        <h1 class="text-dark-grey"><b>200</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">Satuan</p>
                                        <h1 class="text-dark-grey"><b>Tray</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-12">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <table class="table table-sm table-hover small-text">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="p-3">#</th>
                                            <th scope="col" class="p-3">Brand</th>
                                            <th scope="col" class="p-3">QTY</th>
                                            <th scope="col" class="p-3">Unit</th>
                                            <th scope="col" class="p-3">Source</th>
                                            <th scope="col" class="p-3">Direction</th>
                                            <th scope="col" class="p-3">User</th>
                                            <th scope="col" class="p-3">Status</th>
                                            <th scope="col" class="p-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <tr>
                                                <th class="p-2 text-center" scope="row">1</th>
                                                <td class="p-2 text-center">ABLF12</td>
                                                <td class="p-2 text-center">100</td>
                                                <td class="p-2 text-center">Tray</td>
                                                <td class="p-2 text-center">MK9A</td>
                                                <td class="p-2 text-center">HLP12</td>
                                                <td class="p-2 text-center">Dera</td>
                                                <td class="p-2 text-center"><span class="badge rounded-pill bg-success">Telah Diterima</span></td>
                                                <td class="p-2 text-center">
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
    var workPlanMachineId = '<?= $workPlanMachineId ?>'
    $(function() {

        $(".progress").each(function() {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');

            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }

        })

        function percentageToDegrees(percentage) {

            return percentage / 100 * 360

        }

    });

    $(document).ready(function() {})
</script>