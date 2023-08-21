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
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row justify-content-between p-4 pb-3">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Material</b></p>
                    </div>
                    <div class="col-auto text-end">
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Search..." id="search_nama" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;border-color:#c5ccd6;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="align-middle small-text">#</th>
                            <th class="align-middle small-text" colspan="2">Material</th>
                            <th class="align-middle small-text">Unit</th>
                            <th class="align-middle small-text">Stok Awal</th>
                            <th class="align-middle small-text"><i class="fa fa-arrow-down text-success me-2"></i>In</th>
                            <th class="align-middle small-text"><i class="fa fa-arrow-up text-danger me-2"></i>Out</th>
                            <th class="align-middle small-text">Volume<br>Penggunaan</th>
                            <th class="align-middle small-text">Stok Akhir</th>
                            <th class="align-middle small-text"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fw-bolder bg-light">
                            <td class="align-middle small-text text-center">1</td>
                            <td class="align-middle small-text text-center">
                                <i class="fa fa-star text-primary"></i>
                            </td>
                            <td class="align-middle small-text">
                                <p class="m-0 super-small-text fw-light">RM.03-406</p>
                                Etiket Armour Bold 20 SKM (Barcode Baru)
                            </td>
                            <td class="align-middle small-text text-center">Lembar</td>
                            <td class="align-middle small-text text-center">130</td>
                            <td class="align-middle small-text text-center">0</td>
                            <td class="align-middle small-text text-center">0</td>
                            <td class="align-self-center small-text text-center">

                            </td>
                            <td class="align-middle small-text text-center"></td>
                            <td class="align-middle small-text text-center"><button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="inputSO()"><i class="fa fa-eye"></i></button></td>
                        </tr>
                        <tr class="fw-bolder bg-light-success">
                            <td class="align-middle small-text text-center">1</td>
                            <td class="align-middle small-text text-center">
                                <i class="fa fa-star text-primary"></i>
                            </td>
                            <td class="align-middle small-text">
                                <p class="m-0 super-small-text fw-light">IM.04-102</p>
                                Isolasi Daimaru ( Uk. 48mm x 90y ) - 45 Micron
                            </td>
                            <td class="align-middle small-text text-center">Roll</td>
                            <td class="align-middle small-text text-center">130</td>
                            <td class="align-middle small-text text-center">0</td>
                            <td class="align-middle small-text text-center">2</td>
                            <td class="align-self-center small text-center">
                                <span class="badge bg-dark-grey">8</span>
                            </td>
                            <td class="align-middle small-text text-center">
                                <p class="m-0 fw-lighter super-small-text"><b>DL : </b>120 cm</p>
                                <p class="m-0 fw-lighter super-small-text"><b>DD : </b>10 cm</p>
                            </td>
                            <td class="align-middle small-text text-center"><button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="inputSO()"><i class="fa fa-eye"></i></button></td>
                        </tr>
                        <tr class="bg-light-success">
                            <td class="align-middle small-text text-center">1</td>
                            <td class="align-middle small-text text-center">
                                <i class="fa fa-star-o text-grey"></i>
                            </td>
                            <td class="align-middle small-text">
                                <p class="m-0 super-small-text fw-light">RM.03-406</p>
                                Etiket Armour Bold 20 SKM (Barcode Baru)
                            </td>
                            <td class="align-middle small-text text-center">Lembar</td>
                            <td class="align-middle small-text text-center">130</td>
                            <td class="align-middle small-text text-center">0</td>
                            <td class="align-middle small-text text-center">0</td>
                            <td class="align-self-center small text-center">
                                <span class="badge bg-dark-grey">8</span>
                            </td>
                            <td class="align-middle small-text text-center">120</td>
                            <td class="align-middle small-text text-center"><button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="inputSO()"><i class="fa fa-eye"></i></button></td>

                        </tr>
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <tr>
                                <td class="align-middle small-text text-center">1</td>
                                <td class="align-middle small-text text-center">
                                    <i class="fa fa-star-o text-grey"></i>
                                </td>
                                <td class="align-middle small-text">
                                    <p class="m-0 super-small-text fw-light">RM.03-406</p>
                                    Etiket Armour Bold 20 SKM (Barcode Baru)
                                </td>
                                <td class="align-middle small-text text-center">Lembar</td>
                                <td class="align-middle small-text text-center">130</td>
                                <td class="align-middle small-text text-center">0</td>
                                <td class="align-middle small-text text-center">0</td>
                                <td class="align-self-center small-text text-center"></td>
                                <td class="align-middle small-text text-center">-</td>
                                <td class="align-middle small-text text-center"><button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="inputSO()"><i class="fa fa-eye"></i></button></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

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
        loadData()
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

    function reset() {
        dataProductionOut = []
        dataProductionOutGroup = []
    }

    function inputSO() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Input Stok Akhir</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="arrangeVariableInsert()">Simpan</button>'
    }
</script>