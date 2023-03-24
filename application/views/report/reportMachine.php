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
                                <select class="selectpicker w-100" multiple data-selected-text-format="count > 3" id="selectMachine">
                                </select>
                            </div>
                            <div class="col">
                                <label class="small-text"><i class="fa fa-arrow-up me-2"></i>Status</label>
                                <select class="selectpicker w-100" multiple data-selected-text-format="count > 4" id="selectStatus">
                                </select>
                            </div>
                            <div class="col-1 align-self-end">
                                <button type="button" class="btn btn-success btn-sm w-100" onclick="getData()"><i class="fa fa-search me-1"></i>Find</button>
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
                                        <p class="m-0 small-text">Date : <span class="dateRangeText">-<span></p>
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
                                                    <tr class="align-self-center">
                                                        <td colspan="7" class="text-center pt-5 pb-5 align-self-center"><i>Tidak Ada Data Tersedia</i></td>
                                                    </tr>
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
                                        <p class="m-0 small-text">Date : <span class="dateRangeText">-</span></p>
                                    </div>
                                    <div class="col-auto text-end align-self-center">
                                        <select name="" id="selectMachineUsage" class="selectpicker form-control form-control-sm" required="required" onchange="usageItem()">
                                        </select>
                                    </div>
                                </div>
                                <div id="fieldChart">
                                </div>
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
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


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_user = ""
    var data_report = ""
    var supplier_id = ""
    var date_start = ""
    var date_end = ""

    $(document).ready(function() {
        $('select').selectpicker();
        $.ajax({
            url: "<?= api_produksi('loadPageMachineReport'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                // getData()
                $('#dateStart').val(data_user.date.dateStart)
                $('#dateEnd').val(data_user.date.dateEnd)
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
                formMachine()
            }
        })
    })

    function formMachine() {
        var html = ''
        data_user.machine.forEach(e => {
            html += '<option value="' + e.id + '" selected>' + e.code + '</option>'
        });
        $('#selectMachine').html(html)
        $('#selectMachine').selectpicker('refresh');
        formStatus()
    }

    function formStatus() {
        var html = ''
        data_user.status.forEach(e => {
            html += '<option value="' + e + '" selected>' + e + '</option>'
        });
        $('#selectStatus').html(html)
        $('#selectStatus').selectpicker('refresh');
        getData()
    }

    function getData() {
        $('.dateRangeText').html(formatDateIndonesia($('#dateStart').val()) + ' - ' + formatDateIndonesia($('#dateEnd').val()))
        var machineId = $('#selectMachine').map(function() {
            return $(this).val();
        }).get();
        var status = $('#selectStatus').map(function() {
            return $(this).val();
        }).get();
        // console.log(dateStart, dateEnd, machineId, status)
        $.ajax({
            url: "<?= api_produksi('getMachineReport'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                dateStart: $('#dateStart').val(),
                dateEnd: $('#dateEnd').val(),
                machineId: machineId,
                status: status,
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_report = response['data']
                contentTable()
            }
        })
    }

    function contentTable() {
        var html = ''
        $.each(data_report.item, function(key, value) {
            html += '<tr>'
            html += '<td class="p-2 small-text text-center">' + (parseInt(key) + 1) + '</td>'
            html += '<td class="p-2 small-text">' + value.date + '</td>'
            html += '<td class="p-2 small-text">' + value.item.name + '</td>'
            html += '<td class="p-2 small-text">' + value.machine.name + '</td>'
            html += '<td class="p-2 small-text text-end">' + value.qty + '</td>'
            html += '<td class="p-2 small-text">' + value.unit.name + '</td>'
            var sign = 'fa-arrow-up text-danger'
            if (value.status == 'IN') {
                sign = 'fa-arrow-down text-success'
            }
            html += '<td class="p-2 small-text text-center"><i class="fa ' + sign + '"></i></td>'
            html += '</tr>'
        })
        $('#contentTable').html(html)
        oTable = $('#myTable').DataTable();
        $('#myInputTextField').keyup(function() {
            oTable.search($(this).val()).draw();
        })
        $('.dataTables_info').addClass('d-none')
        $('.dataTables_filter').addClass('d-none')
        $('.dataTables_length').addClass('small-text d-none')
        $('.dataTables_paginate').addClass('small-text')
        fillSelectFormUsageItem()
    }

    function fillSelectFormUsageItem() {
        var html = ''
        $.each(data_report.machineItem, function(key, value) {
            html += '<option value="' + key + '">' + value.machine.code + '</option>'
        });
        $('#selectMachineUsage').html(html)
        $('#selectMachineUsage').selectpicker('refresh')
        usageItem()
    }

    function usageItem() {
        var id = $('#selectMachineUsage').val()
        var data = data_report.machineItem.filter((v, k) => {
            if (k == id) return true
        })[0].data
        var varchart = []
        var labels = []
        $.each(data, function(key, value) {
            var detail = []
            $.each(value.item, function(keys, values) {
                if (key == 0) {
                    labels.push('0' + (parseInt(keys)))
                }
                detail.push(values.qty)
            })
            var label = 'Used'
            if (value.status == 'IN') {
                label = 'Received'
            }
            varchart.push({
                'label': label,
                'data': detail,
            })
        })
        chart(varchart, labels)
    }

    function chart(varchart, labels) {
        // console.log(varchart, labels)
        $('#fieldChart').html('')
        $('#fieldChart').html('<canvas id="myChart" class="pt-5 pb-5" style="width: 300px;"></canvas>')
        let delayed;
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: labels,
                datasets: varchart
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
    }
</script>