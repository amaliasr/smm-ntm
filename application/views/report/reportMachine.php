<style>
    html {
        scroll-behavior: smooth;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    .nominal {
        text-align: right;
    }

    .text-grey {
        color: #D8D9CF;
    }

    .text-dark-grey {
        color: #B2B2B2;
    }

    .bg-grey {
        background-color: #EDEDED;
        color: #B2B2B2;
    }

    .bg-light-grey {
        background-color: #FAF7F0;
    }

    .text-random {
        color: #425F57;
    }

    .bg-random {
        background-color: #425F57;
    }

    .card-hoper:hover {
        background-color: #F7F7F7;
    }

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }

    #profileImage {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 39px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .dots-lead {
        display: flex;
    }

    .dots-lead::after {
        background-image: radial-gradient(circle, currentcolor 1px, transparent 1.5px);
        background-position: bottom;
        background-size: 1ex 4.5px;
        background-repeat: space no-repeat;
        content: "";
        flex-grow: 1;
        height: 1em;
        order: 2;
    }

    .gambar-miring {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
        opacity: 0.3;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .bg-super-grey {
        background-color: #F7F7F7;
    }

    .is-select-picker {
        background-color: white !important;
        border: 1px solid #c5ccd6 !important;
        text-align: left !important;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row justify-content-center">
            <div class="col pb-4">
                <h1 class="text-dark"><b><i class="fa fa-book me-3"></i>Report Machine</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12 pb-3">
                        <div class="row">
                            <div class="col">
                                <label class="small-text"><i class="fa fa-calendar me-2"></i>Date Start</label>
                                <input type="text" name="" id="dateStart" class="form-control form-control-sm" value="" required="required" autocomplete="off">
                            </div>
                            <div class="col">
                                <label class="small-text"><i class="fa fa-calendar me-2"></i>Date End</label>
                                <input type="text" name="" id="dateEnd" class="form-control form-control-sm" value="" required="required" autocomplete="off">
                            </div>
                            <div class="col">
                                <label class="small-text"><i class="fa fa-cog me-2"></i>Machine</label>
                                <select class="selectpicker" multiple data-selected-text-format="count > 3">
                                    <option value="1" selected>MK9A</option>
                                    <option value="2" selected>MK9B</option>
                                    <option value="3" selected>MK9C</option>
                                    <option value="4" selected>HLP20A</option>
                                    <option value="5" selected>HLP20B</option>
                                    <option value="6" selected>HLP12A</option>
                                    <option value="7" selected>HLP12B</option>
                                </select>
                            </div>
                            <div class="col">
                                <label class="small-text"><i class="fa fa-arrow-up me-2"></i>Status</label>
                                <select class="selectpicker" multiple data-selected-text-format="count > 4">
                                    <option value="IN" selected>IN</option>
                                    <option value="OUT" selected>OUT</option>
                                </select>
                            </div>
                            <div class="col-1 align-self-end">
                                <button type="button" class="btn btn-success btn-sm w-100"><i class="fa fa-search me-1"></i>Find</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-3">
                    </div>
                    <div class="col-12 col-md-8 mb-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col">
                                        <h3 class="m-0 small"><b>History Transaction</b></h3>
                                        <p class="m-0 small-text">Date : Minggu, 18 Maret 2023</p>
                                    </div>
                                    <div class="col-auto text-end align-self-center">
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="myTable" id="myInputTextField">
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-download me-1"></i>Export</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3" id="tampilReport">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-sm small" style="width: 100%;white-space:nowrap;" id="myTable">
                                                <thead class="align-self-center">
                                                    <tr class="align-self-center">
                                                        <th style="width: 5%;" class="text-center p-2 small">No</th>
                                                        <th style="width: 10%;" class="text-center p-2 small">Date</th>
                                                        <th style="width: 20%;" class="text-center p-2 small">Item</th>
                                                        <th style="width: 10%;" class="text-center p-2 small">Machine</th>
                                                        <th style="width: 10%;" class="text-center p-2 small">QTY</th>
                                                        <th style="width: 10%;" class="text-center p-2 small">Unit</th>
                                                        <th style="width: 10%;" class="text-center p-2 small">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="contentTable">
                                                    <!-- <tr class="align-self-center">
                                                        <td colspan="6" class="text-center pt-5 pb-5 align-self-center"><i>Anda Belum Melakukan Pencarian</i></td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-0 small"><b>Usage Items</b></h3>
                                        <p class="m-0 small-text">Date : Minggu, 18 Maret 2023</p>
                                    </div>
                                    <div class="col-auto text-end align-self-center">

                                        <select name="" id="input" class="form-control form-control-sm" required="required">
                                            <option value="">MK9-A</option>
                                        </select>

                                    </div>
                                </div>
                                <canvas id="myChart" class="pt-5 pb-5" style="width: 300px;"></canvas>
                                <div class="row">
                                    <div class="col-12">
                                        <b class="small-text">Information :</b>
                                    </div>
                                    <div class="col-12">
                                        <div class="card shadow-none mb-2 card-hoper">
                                            <div class="card-body p-2">
                                                <div class="row">
                                                    <div class="col-2 align-self-center text-center">
                                                        <b class="h4">01</b>
                                                    </div>
                                                    <div class="col-10 align-self-center">
                                                        <p class="m-0 small-text">CTP Armour Black 454MC ( Uk. 50mm x 3000 m )</p>
                                                        <p class="m-0 text-dark-grey super-small-text">Stock : 1,000 | Usage : 100</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card shadow-none mb-2 card-hoper">
                                            <div class="card-body p-2">
                                                <div class="row">
                                                    <div class="col-2 align-self-center text-center">
                                                        <b class="h4">02</b>
                                                    </div>
                                                    <div class="col-10 align-self-center">
                                                        <p class="m-0 small-text">Cigarette Paper CP45W Black 600201 K MF 25g</p>
                                                        <p class="m-0 text-dark-grey super-small-text">Stock : 1,000 | Usage : 100</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
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

<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }
    $('#dateStart').val(currentDate())
    $('#dateEnd').val(currentDate())
    new Litepicker({
        element: document.getElementById('dateStart'),
        elementEnd: document.getElementById('dateEnd'),
        singleMode: false,
        allowRepick: true,
        firstDay: 0,
        setup: (picker) => {
            picker.on('selected', (date1, date2) => {
                dateStart = formatDate(date1['dateInstance'])
                dateEnd = formatDate(date2['dateInstance'])
            });
        },
    })

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_user = ""
    var data_report = ""
    var data_item = ""
    var data_satuan = ""
    var data_supplier = ""
    var data_gudang = ""
    var supplier_id = ""
    var date_start = ""
    var date_end = ""

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                data_supplier = response['data']['supplier'];
                data_gudang = response['data']['gudang'];
                contentTable()
            }
        })
    }

    function contentTable() {
        var html = ''
        for (let i = 0; i < 100; i++) {
            html += '<tr>'
            html += '<td class="p-2 small-text text-center">1</td>'
            html += '<td class="p-2 small-text">09/03/2023</td>'
            html += '<td class="p-2 small-text">Cigarette Paper CP45W Black 600201 K MF 25g</td>'
            html += '<td class="p-2 small-text">MK9-A</td>'
            html += '<td class="p-2 small-text text-end">100</td>'
            html += '<td class="p-2 small-text">Tray</td>'
            html += '<td class="p-2 small-text text-center"><i class="fa fa-arrow-up text-danger"></i></td>'
            html += '</tr>'
        }
        $('#contentTable').html(html)
        oTable = $('#myTable').DataTable();
        $('#myInputTextField').keyup(function() {
            oTable.search($(this).val()).draw();
        })
        $('.dataTables_info').addClass('d-none')
        $('.dataTables_filter').addClass('d-none')
        $('.dataTables_length').addClass('small-text d-none')
        $('.dataTables_paginate').addClass('small-text')
    }
    let delayed;
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09'],
            datasets: [{
                    label: 'Used',
                    data: [12, 19, 3, 5, 2, 3, 11, 12, 23],
                },
                {
                    label: 'Received',
                    data: [30, 40, 30, 50, 20, 30, 45, 66, 66],
                }
            ]
        },
        options: {
            animation: {
                onComplete: () => {
                    delayed = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !delayed) {
                        delay = context.dataIndex * 300 + context.datasetIndex * 100;
                    }
                    return delay;
                },
            },
            responsive: false,
            maintainAspectRatio: true,
        }
    });
</script>