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

    /* .card-hoper:hover {
        background-color: #F7F7F7;
    } */

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
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-book"></i></div>
                            Report PO
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12 mb-2">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <span class="small">Date : <b id="showDate"></b></span>
                                    </div>
                                    <div class="col mb-3">
                                        <button type="button" class="btn btn-primary btn-sm float-end" onclick="tampilFilter()"><i class="fa fa-filter me-2"></i> Filter</button>
                                    </div>
                                    <div class="col-12 mb-3" id="tampilReport">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-sm small" style="width: 100%;white-space:nowrap;">
                                                <thead class="align-self-center">
                                                    <tr class="align-self-center">
                                                        <th class="text-center p-3">No</th>
                                                        <th class="text-center p-3">Tanggal PO</th>
                                                        <th class="text-center p-3">Kode NTM</th>
                                                        <th class="text-center p-3">No. PR</th>
                                                        <th class="text-center p-3">No. PO</th>
                                                        <th class="text-center p-3">Nama Supplier</th>
                                                        <th class="text-center p-3">Nama Bahan</th>
                                                        <th class="text-center p-3">QTY</th>
                                                        <th class="text-center p-3">Satuan</th>
                                                        <th class="text-center p-3">Harga</th>
                                                        <th class="text-center p-3">DPP</th>
                                                        <th class="text-center p-3">PPN</th>
                                                        <th class="text-center p-3">TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="contentTable">
                                                    <tr class="align-self-center">
                                                        <td colspan="13" class="text-center pt-5 pb-5 align-self-center"><i>Anda Belum Melakukan Pencarian</i></td>
                                                    </tr>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
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
        // tampilFilter()
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
                // getDataReport()
                tampilFilter()
            }
        })
    }

    function tampilFilter() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Filter</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'

        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<b class="small">Tanggal Mulai</b>'
        html_body += '<input class="form-control datepicker" type="text" id="dateStart" placeholder="Tanggal Mulai" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + date_start + '">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<b class="small">Tanggal Akhir</b>'
        html_body += '<input class="form-control datepicker" type="text" id="dateEnd" placeholder="Tanggal Akhir" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + date_end + '">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<b class="small">Supplier</b>'
        html_body += '<select class="form-select form-select-lg w-100 supplierStok" id="supplierStok" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        html_body += '<option value="" selected>All Supplier</option>'
        $.each(data_supplier, function(keys, values) {
            var select = ""
            if (values['id'] == supplier_id) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
            firstDay: 0,
        })

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-success btn-sm float-end me-2" onclick="exportExcel()"><i class="fa fa-download me-2"></i> Export Excel</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnFilter" onclick="getDataReport()">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    function getDataReport() {
        date_start = $('#dateStart').val()
        date_end = $('#dateEnd').val()
        supplier_id = $('#supplierStok').val()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/reportPrPo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                supplier_id: supplier_id,
                date_start: date_start,
                date_end: date_end,
            },
            error: function(xhr) {
                $('#btnFilter').removeAttr('disabled', true)
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {
                $('#btnFilter').attr('disabled', true)
            },
            success: function(response) {
                $('#contentTable').empty()
                $('#btnFilter').removeAttr('disabled', true)
                $('#modal').modal('hide')
                data_report = response['data']
                $('#showDate').html(formatDate($('#dateStart').val()) + ' - ' + formatDate($('#dateEnd').val()))
                dataTampilReport()

            }
        })
    }

    function dataTampilReport() {
        var html_body = ""
        if (data_report != undefined) {
            $.each(data_report, function(key, value) {
                if (value['harga'] == null) {
                    value['harga'] = 0
                }
                if (value['dpp'] == null) {
                    value['dpp'] = 0
                }
                if (value['ppn'] == null) {
                    value['ppn'] = 0
                }
                if (value['total'] == null) {
                    value['total'] = 0
                }
                html_body += '<tr>'
                html_body += '<td>' + (key + 1) + '</td>'
                html_body += '<td>' + value['date'] + '</td>'
                html_body += '<td>' + value['item_code'] + '</td>'
                html_body += '<td>' + value['no_pr'] + '</td>'
                html_body += '<td>' + value['no_po'] + '</td>'
                html_body += '<td>' + value['supplier_name'] + '</td>'
                html_body += '<td>' + value['item_name'] + '</td>'
                html_body += '<td class="text-end">' + value['jumlah'] + '</td>'
                html_body += '<td>' + value['item_satuan'] + '</td>'
                html_body += '<td class="text-end">' + number_format(value['harga']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['dpp']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['ppn']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['total']) + '</td>'
                html_body += '</tr>'
            })
        } else {
            html_body += '<tr class="align-self-center">'
            html_body += '<td colspan="13" class="text-center pt-5 pb-5 align-self-center"><i>Data Tidak Tersedia</i></td>'
            html_body += '</tr>'
        }
        $('#contentTable').html(html_body)
    }

    function exportExcel() {
        date_start = $('#dateStart').val()
        date_end = $('#dateEnd').val()
        supplier_id = $('#supplierStok').val()
        var url = '<?= base_url('report/exportReportPO') ?>';
        var params = "*$" + supplier_id + "*$" + date_start + "*$" + date_end;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>