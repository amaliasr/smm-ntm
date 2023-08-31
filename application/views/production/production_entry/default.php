<div class="mt-5">
    <p class="m-0">Happy Working</p>
    <h1 style="font-size: 50px;"><b><?= $this->session->userdata('full_name') ?></b></h1>
    <div class="row">
        <div class="col-auto">
            <p class="m-0">You work at</p>
            <h1 class=""><b>Machine <?= $dataAPI->workPlanMachine->machine->name ?></b></h1>
        </div>
        <div class="col-auto">
            <p class="m-0">Position</p>
            <h1 class=""><b><?= $label ?></b></h1>
        </div>
        <div class="col-12 pt-5">
            <button type="button" class="btn btn-primary shadow-none">Start Now</button>
        </div>
    </div>
</div>