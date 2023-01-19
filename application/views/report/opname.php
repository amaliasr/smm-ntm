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
                            Report Opname
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
                                            <table class="table table-bordered table-hover table-sm small" id="example" style="width: 100%;white-space:nowrap;">
                                                <thead class="align-self-center">
                                                    <tr class="align-self-center">
                                                        <th class="text-center" rowspan="3">No</th>
                                                        <th class="text-center" rowspan="3">Nama Item</th>
                                                        <th class="text-center" rowspan="3">Satuan</th>
                                                        <th class="text-center" id="waktuOpname" style="width:auto;">Waktu Opname</th>
                                                    </tr>
                                                    <tr class="align-self-center" style="width:100%;" id="dateTable">
                                                    </tr>
                                                    <tr class="align-self-center" style="width:100%;" id="ketTable">
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
    var item_id = ""
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
                tampilFilter()
                // getDataOpname()
            }
        })
    }

    function tampilFilter() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Filter</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'

        html_body += '<div class="row">'
        html_body += '<b class="small">Tanggal</b>'
        html_body += '<div class="col pe-0">'
        html_body += '<input class="form-control datepicker" type="text" id="dateStart" placeholder="Tanggal Mulai" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + date_start + '">'
        html_body += '</div>'
        html_body += '<div class="col-auto align-self-center">-</div>'
        html_body += '<div class="col ps-0">'
        html_body += '<input class="form-control datepicker" type="text" id="dateEnd" placeholder="Tanggal Akhir" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + date_end + '">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row pt-2">'
        html_body += '<b class="small">Item</b>'
        html_body += '<div class="col">'
        html_body += '<div class="form-check">'
        var check = ""
        if (data_item.length == item_id.length) {
            check = 'checked'
        }
        html_body += '<input class="form-check-input mb-2" type="checkbox" value="on" id="checkPilihSemua" onchange="itemAll()"' + check + '>'
        html_body += '<label class="form-check-label" for="checkPilihSemua">'
        html_body += 'Pilih Semua'
        html_body += '</label>'
        html_body += '</div>'
        html_body += '<select class="form-select form-select-lg w-100 itemStok" multiple id="itemStok" style="width:100%;padding:0.875rem 3.375rem 0.875rem 1.125rem;">'
        // html_body += '<option value="" selected>All Item</option>'
        $.each(data_item, function(keys, values) {
            var select = ""
            for (let i = 0; i < item_id.length; i++) {
                if (values['id'] == item_id[i]) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#itemStok').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            closeOnSelect: false,
            dropdownParent: $('#modal'),
        });
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
            firstDay: 0,
        })

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnFilter" onclick="getDataOpname()">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    function itemAll() {
        var check = $('#checkPilihSemua:checked').val()
        var html_body = ""
        if (check == 'on') {
            $.each(data_item, function(keys, values) {
                html_body += '<option value="' + values['id'] + '" selected>' + values['name'] + '</option>'
            })
        } else {
            $('#itemStok').empty()
            $.each(data_item, function(keys, values) {
                html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
            })
        }
        $('#itemStok').html(html_body)
    }

    var item_id = ""
    var data_header = ""

    function getDataOpname() {
        date_start = $('#dateStart').val()
        date_end = $('#dateEnd').val()
        item_id = $('.itemStok').map(function() {
            return $(this).val();
        }).get();
        $.ajax({
            url: "<?= api_url('Api_So/laporanSo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                item_id: item_id,
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
                $('#btnFilter').removeAttr('disabled', true)
                $('#modal').modal('hide')
                data_report = response['data']
                data_header = response['dataHeaderTanggal']
                console.log(data_report)
                $('#showDate').html(formatDate($('#dateStart').val()) + ' - ' + formatDate($('#dateEnd').val()))
                dataTampilReport()

            }
        })
    }

    function dataTampilReport() {
        var html = ""
        var html_date = ""
        var html_ket = ""
        // var obj = JSON.parse(data_report).filter((value, key) => {
        //     if (value3.mesin === values['id'] && value3.tanggal === formatDate(dates) && value3.produk === parseInt(values2['id'])) return true
        // })
        $.each(data_header, function(key, value) {
            html_date += '<th class="text-center p-2" colspan="5">' + value['perhari'] + '</th>'
            html_ket += '<th class="text-center p-2">Stok Sistem</th>'
            html_ket += '<th class="text-center p-2">Stok Hitung</th>'
            html_ket += '<th class="text-center p-2">Stok Cek</th>'
            html_ket += '<th class="text-center p-2">Dihitung Oleh</th>'
            html_ket += '<th class="text-center p-2">Dicek Oleh</th>'
        })
        $('#waktuOpname').attr('colspan', (data_header.length * 5))
        $('#dateTable').html(html_date)
        $('#ketTable').html(html_ket)
        $.each(data_report, function(key, value) {
            html += '<tr>'
            html += '<td>' + (parseInt(key) + 1) + '</td>'
            html += '<td>' + JSON.parse(value['item'])['name'] + '</td>'
            html += '<td>' + JSON.parse(value['item'])['satuan_name'] + '</td>'
            $.each(JSON.parse(value['datas']), function(key, value) {
                var stok_input = '-'
                var stok_sistem = '-'
                var stok_koreksi = '-'
                var employee_hitung = "-"
                var employee_koreksi = "-"
                if (value['data_so']['stok_opname'] != null) {
                    stok_input = value['data_so']['stok_opname']
                }
                if (value['data_so']['stok_sistem'] != null) {
                    stok_sistem = value['data_so']['stok_sistem']
                }
                if (value['data_so']['stok_opname_koreksi'] != null) {
                    stok_koreksi = value['data_so']['stok_opname_koreksi']
                }
                if (value['data_so']['employee_hitung'] != null) {
                    employee_hitung = value['data_so']['employee_hitung'].split(' ').slice(0, 2).join(' ')
                }
                if (value['data_so']['employee_koreksi_name'] != null) {
                    employee_koreksi = value['data_so']['employee_koreksi_name'].split(' ').slice(0, 2).join(' ')
                }
                html += '<td class="text-center">' + number_format(stok_sistem) + '</td>'
                html += '<td class="text-center">' + number_format(stok_input) + '</td>'
                html += '<td class="text-center">' + number_format(stok_koreksi) + '</td>'
                html += '<td class="">' + employee_hitung + '</td>'
                html += '<td class="">' + employee_koreksi + '</td>'
            })
            html += '</tr>'
        })
        $('#contentTable').html(html)
    }

    function exportExcel() {
        var url = '<?= base_url('report/exportLaporanGudang') ?>';
        var params = "item_id=" + item_id + "&date_start=" + $('#dateStart').val() + "&date_end=" + $('#dateEnd').val()
        window.open(url + '?' + params, '_blank');
    }
</script>