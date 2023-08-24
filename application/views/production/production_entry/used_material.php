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
                            <td class="align-middle small-text text-center">120</td>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Input Stok Akhir</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += ''
        html_body += '</div>'
        html_body += '<div class="col-12">'
        // card
        html_body += '<div class="card shadow-none mb-2">'
        html_body += '<div class="card-body">'

        html_body += '<div class="row w-100">'
        html_body += '<div class="col-2 align-self-center">'
        html_body += '<p class="m-0 small-text"><b>ROLL</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9 align-self-center border-start">'
        // form
        html_body += '<div class="row g-3 align-items-center justify-content-center small-text w-100">'
        html_body += '<div class="col-3">'
        html_body += '</div>'
        html_body += '<div class="col-4">'
        html_body += '<input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<span id="passwordHelpInline" class="form-text">Roll</span>'
        html_body += '</div>'
        html_body += '</div>'
        // form
        html_body += '</div>'
        html_body += '<div class="col-1 align-self-center pointer text-end">'
        html_body += '<span class="fa fa-check text-grey fa-2x"></span>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        // card
        html_body += '<div id="listAdditional">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<div class="row w-100">'
        html_footer += '<div class="col">'
        html_footer += '<p class="m-0"><b>Total Stok Akhir : </b><span>100</span> Roll</p>'
        html_footer += '</div>'
        html_footer += '<div class="col text-end">'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm me-2" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="arrangeVariableInsert()">Simpan</button>'
        html_footer += '</div>'
        html_footer += '</div>'
        $('#modalFooter').html(html_footer)
        emptyListAdditional()
    }

    function emptyListAdditional() {
        var html = ''
        // card
        html += '<div class="card shadow-none mb-2" style="border: 6px dashed #eeeeee;">'
        html += '<div class="card-body text-center">'
        html += '<div class="row">'
        html += '<div class="col-12 align-self-center">'
        html += '<p class="m-0 small-text"><i></i></p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
    }

    function listAdditional() {
        var html = ''
        // card
        html += '<div class="card shadow-none mb-2">'
        html += '<div class="card-body">'

        html += '<div class="row w-100">'
        html += '<div class="col-2 align-self-center">'
        html += '<p class="m-0 small-text"><b>DIAMETER</b></p>'
        html += '</div>'
        html += '<div class="col-9 align-self-center border-start">'
        // form
        for (let index = 0; index < 2; index++) {
            html += '<div class="row g-3 align-items-center justify-content-center small-text w-100 mb-2">'
            html += '<div class="col-3">'
            html += '<label for="inputPassword6" class="col-form-label">Diameter Dalam</label>'
            html += '</div>'
            html += '<div class="col-4">'
            html += '<input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">'
            html += '</div>'
            html += '<div class="col-3">'
            html += '<span id="passwordHelpInline" class="form-text">CM</span>'
            html += '</div>'
            html += '</div>'
        }
        // form
        html += '</div>'
        html += '<div class="col-1 align-self-center pointer text-end">'
        html += '<span class="fa fa-check text-grey fa-2x"></span>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'

        // card
    }
</script>