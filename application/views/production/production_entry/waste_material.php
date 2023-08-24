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

    .bg-dark-grey {
        color: white;
        background-color: #61677A !important;
    }

    .card-waste:hover {
        background-color: #F7F7F7;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body p-0 pb-5">
                <div class="row justify-content-between p-5 pb-3" id="menuWaste">

                </div>
                <div id="lisMaterial">
                    <div class="card shadow-none rounded-0 border-end-0 border-start-0">
                        <div class="card-body p-0">
                            <div class="row m-0">
                                <div class="col-9">
                                    <div class="row p-4">
                                        <div class="col-12">
                                            <b class="m-0 h1">ABLF12</b>
                                            <p class="m-0 small-text">Armour Black 12 Filter</p>
                                        </div>
                                        <div class="col">
                                            <div class="row mt-4">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                                                    <div class="card card-waste shadow-none border-2 pointer bg-light-success border-success" onclick="inputWaste()">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-4 text-center">
                                                                    <p class="m-0 text-success fw-bolder">100</p>
                                                                    <p class="m-0 fw-bolder small-text">Gram</p>
                                                                </div>
                                                                <div class="col-8 align-self-center">
                                                                    <p class="m-0 text-dark-grey"><b>Batang</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                                                        <div class="card card-waste shadow-none border-2 pointer" onclick="inputWaste()">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-4 text-center">
                                                                        <p class="m-0 text-danger">0</p>
                                                                        <p class="m-0 fw-bolder super-small-text">Gram</p>
                                                                    </div>
                                                                    <div class="col-8 align-self-center">
                                                                        <p class="m-0 text-dark-grey"><b>Batang</b></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 bg-light" id="fillWaste">
                                </div>
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
    var modeChart = 0
    var dataEntry
    var dataProductionOut = []
    var dataProductionOutGroup

    $(document).ready(function() {
        emptyText('#fillWaste', 'Pilih Card untuk Mengisi Waste')
        loadData()
        menuWaste()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageCatcherEntry'); ?>"
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
            }
        })
    }

    function menuWaste() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-auto statusLine small-text pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="statusLine(' + "'all'" + ')" id="colStatusLineall">Semua</div>'
        for (let i = 0; i < 2; i++) {
            html += '<div class="col-auto statusLine small-text pb-2 align-self-center text-grey" style="cursor:pointer" onclick="statusLine(' + "'" + i + "'" + ')" id="colStatusLine' + i + '">ABLF12</div>'
        }
        html += '</div>'
        $('#menuWaste').html(html)
    }

    function statusLine(status) {
        // if (status == 'all') {
        //     var data = data_material_filtered
        // } else {
        //     var data = data_material_filtered.filter((v, k) => {
        //         if (v.status == status) return true
        //     })
        // }
        listMaterial(status)
        coloringStatusLine(status)
    }

    function coloringStatusLine(status) {
        // DEFAULT COLOR
        $('.statusLine').each(function() {
            if ($(this).hasClass('fw-bold') && $(this).hasClass('filter-border')) {
                $(this).removeClass('fw-bold filter-border').addClass('text-grey');
            }
        });
        $('.statusLineIcon').each(function() {
            if ($(this).hasClass('bg-light-maroon') && $(this).hasClass('text-white')) {
                $(this).removeClass('bg-light-maroon text-white').addClass('bg-light text-grey');
            }
        });
        $('#colStatusLine' + status).removeClass('text-grey').addClass('fw-bold filter-border')
        $('#statusLineIcon' + status).removeClass('bg-light text-grey').addClass('bg-light-maroon text-white')
    }

    function listMaterial(status) {

    }

    function reset() {
        dataProductionOut = []
        dataProductionOutGroup = []
    }

    function inputWaste() {
        var html = ''
        html += '<div class="row p-4 h-100">'
        html += '<div class="col-12 align-self-center">'

        html += '<div class="card shadow-none" style="border:0px;height:100%;background-color:transparent">'
        html += '<div class="card-body h-100 p-0">'


        html += '<p class="m-0 super-small-text"><b>Fill Waste</b></p>'
        html += '<p class="m-0 h3"><b>Batang</b></p>'
        html += '<div class="row mt-3 align-items-center w-100">'
        html += '<div class="col-12">'
        html += '<input type="text" id="inputPassword6" class="form-control form-control-lg">'
        html += '</div>'
        html += '<div class="col-12 pt-2 text-end">Gram</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#fillWaste').html(html)
    }
</script>