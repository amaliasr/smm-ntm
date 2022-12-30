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
                                            <table class="table table-bordered table-hover table-sm small" id="example" style="width: 100%;white-space:nowrap;">
                                                <thead class="align-self-center">
                                                    <tr class="align-self-center">
                                                        <th class="text-center" rowspan="2">No</th>
                                                        <th class="text-center" rowspan="2">Tanggal</th>
                                                        <th class="text-center" rowspan="2" id="namaSubject">-</th>
                                                        <th class="text-center" style="width:auto;" colspan="2">Dokumen</th>
                                                        <th class="text-center" style="width:auto;" colspan="2">Pengiriman</th>
                                                        <th class="text-center" style="width:auto;" colspan="3">Barang</th>
                                                    </tr>
                                                    <tr class="align-self-center" style="width:100%;">
                                                        <th class="text-center">Batal</th>
                                                        <th class="text-center">Revisi</th>
                                                        <th class="text-center">Tepat Waktu</th>
                                                        <th class="text-center">Terlambat</th>
                                                        <th class="text-center">Barang Sesuai</th>
                                                        <th class="text-center">Barang Kurang</th>
                                                        <th class="text-center">Barang Lebih</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="contentTable">

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
    var periode = ""
    var subject = ""
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
        html_body += '<b class="small">Periode</b>'
        html_body += '<div class="col">'
        html_body += '<select class="form-control w-100 selectPeriode" id="selectPeriode">'
        var select_d = ""
        var select_w = ""
        var select_m = ""
        if (periode == 'daily') {
            select_d = "selected"
            select_w = ""
            select_m = ""
        } else if (periode == 'weekly') {
            select_d = ""
            select_w = "selected"
            select_m = ""
        } else if (periode == 'monthly') {
            select_d = ""
            select_w = ""
            select_m = "selected"
        }
        html_body += '<option value="daily" ' + select_d + '>Daily</option>'
        html_body += '<option value="weekly" ' + select_w + '>Weekly</option>'
        html_body += '<option value="monthly" ' + select_m + '>Monthly</option>'
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row pt-2">'
        html_body += '<b class="small">Subject</b>'
        html_body += '<div class="col">'
        html_body += '<select class="form-control w-100 selectSubject" id="selectSubject">'
        var select_u = ""
        var select_c = ""
        var select_s = ""
        var select_d = ""
        if (subject == 'user') {
            select_u = "selected"
            select_c = ""
            select_s = ""
            select_d = ""
        } else if (subject == 'costcenter') {
            select_u = ""
            select_c = "selected"
            select_s = ""
            select_d = ""
        } else if (subject == 'supplier') {
            select_u = ""
            select_c = ""
            select_s = "selected"
            select_d = ""
        } else if (subject == 'department') {
            select_u = ""
            select_c = ""
            select_s = ""
            select_d = "selected"
        }
        html_body += '<option value="user" ' + select_u + '>User</option>'
        html_body += '<option value="costcenter" ' + select_c + '>Cost Center</option>'
        html_body += '<option value="supplier" ' + select_s + '>Supplier</option>'
        html_body += '<option value="department" ' + select_d + '>Department</option>'
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
        })

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnFilter" onclick="getDataReport()">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    function getDataReport() {
        date_start = $('#dateStart').val()
        date_end = $('#dateEnd').val()
        periode = $('#selectPeriode').val()
        subject = $('#selectSubject').val()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/rekapPo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                periode: periode,
                subject: subject,
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
                $('#namaSubject').html(toTitleCase(subject))
                $('#btnFilter').removeAttr('disabled', true)
                $('#modal').modal('hide')
                data_report = response['data']
                $('#showDate').html(formatDate($('#dateStart').val()) + ' - ' + formatDate($('#dateEnd').val()))
                dataTampilReport()

            }
        })
    }

    function dataTampilReport() {
        var html = ""
        var html_date = ""
        var html_ket = ""
        $.each(data_report, function(key, value) {
            var laporan = JSON.parse(value['data_laporan'])
            $.each(laporan, function(keys, values) {
                if (keys == 0) {
                    fieldContentDetail(laporan[keys], laporan.length, key, value['date'], 'parent', data_report[key])
                }
            })

            if (laporan.length > 1) {
                $.each(laporan, function(keys, values) {
                    if (keys > 0) {
                        fieldContentDetail(laporan[keys], laporan.length, key, value['date'], 'child', data_report[key])
                    }
                })
            }
        })
    }

    function fieldContentDetail(laporan, jumlah, key, date, jenis, data) {
        var html = ""
        html += '<tr>'
        if (jenis == 'parent') {
            html += '<td rowspan="' + jumlah + '">' + (key + 1) + '</td>'
            var param_lain = ""
            if (periode == 'weekly') {
                param_lain = 'Minggu ke-' + data['minggu_ke'] + '<br>'
            } else if (periode == 'monthly') {
                param_lain = data['bulan'] + '<br>'
            }
            html += '<td class="text-center" rowspan="' + jumlah + '">' + param_lain + date + '</td>'
        }
        if (laporan['subject_name'] == null) {
            laporan['subject_name'] = "-"
        }
        html += '<td>' + laporan['subject_name'] + '</td>'
        html += '<td class="text-center">' + laporan['total_batal'] + '</td>'
        html += '<td class="text-center">' + laporan['total_revisi'] + '</td>'
        html += '<td class="text-center">' + laporan['total_tepat_waktu'] + '</td>'
        html += '<td class="text-center">' + laporan['total_telat_kirim'] + '</td>'
        html += '<td class="text-center">' + laporan['total_barang_sesuai'] + '</td>'
        html += '<td class="text-center">' + laporan['total_barang_kurang'] + '</td>'
        html += '<td class="text-center">' + laporan['total_barang_lebih'] + '</td>'
        html += '</tr>'
        $('#contentTable').append(html)
    }

    function exportExcel() {
        var url = '<?= base_url('report/exportLaporanGudang') ?>';
        var params = "item_id=" + item_id + "&date_start=" + $('#dateStart').val() + "&date_end=" + $('#dateEnd').val()
        window.open(url + '?' + params, '_blank');
    }
</script>