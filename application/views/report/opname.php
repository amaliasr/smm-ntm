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
                                        <span class="small"><b>Check Arrived Package</b></span>
                                    </div>
                                    <div class="col mb-3">
                                        <button type="button" class="btn btn-primary btn-sm float-end" onclick="tampilFilter()"><i class="fa fa-filter me-2"></i> Filter</button>
                                    </div>
                                    <div class="col-12 mb-3" id="tampilReport">

                                        <table class="table table-bordered table-hover table-sm small" id="example" style="width: 100%;">
                                            <thead class="align-self-center">
                                                <tr class="align-self-center">
                                                    <th class="text-center" rowspan="2">No</th>
                                                    <th class="text-center" rowspan="2">Nama Item</th>
                                                    <th class="text-center" colspan="3">Waktu Opname</th>
                                                </tr>
                                                <tr class="align-self-center" id="dateTable">
                                                    <th class="text-center">2022-21-12</th>
                                                    <th class="text-center">2022-21-12</th>
                                                    <th class="text-center">2022-21-12</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contentTable">
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
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
<!-- autocomplete -->
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
    var data_account = ""
    var data_user = ""
    var data_report = ""

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
            }
        })
    })

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
        html_body += '<input class="form-control" type="text">'
        html_body += '</div>'
        html_body += '<div class="col-auto align-self-center">-</div>'
        html_body += '<div class="col ps-0">'
        html_body += '<input class="form-control" type="text">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row pt-2">'
        html_body += '<b class="small">Item</b>'
        html_body += '<div class="col">'
        html_body += '<select class="form-select w-100 itemStok">'
        html_body += '<option value="" selected disabled>All Item</option>'
        // $.each(data_item, function(keys, values) {
        //     html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        // })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanStok" onclick="doSimpanStok()">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    // function dataHistory() {
    //     $.ajax({
    //         url: "<?= api_url('Api_Warehouse/reportHutang'); ?>",
    //         method: "GET",
    //         dataType: 'JSON',
    //         error: function(xhr) {},
    //         beforeSend: function() {},
    //         success: function(response) {
    //             data_report = response['data']
    //             // console.log(data_report)
    //             var header = []
    //             var body = []
    //             if (data_report != null || data_report != undefined) {
    //                 header = [{
    //                         'data': 'no'
    //                     }, {
    //                         'data': 'no_po'
    //                     },
    //                     {
    //                         'data': 'supplier'
    //                     },
    //                     {
    //                         'data': 'biaya',
    //                         className: "text-end"
    //                     },
    //                     {
    //                         'data': 'terbayar',
    //                         className: "text-end"
    //                     },
    //                     {
    //                         'data': 'status_hutang'
    //                     },
    //                     {
    //                         'data': 'persentase_pelunasan'
    //                     },
    //                 ]
    //                 var array = {}
    //                 // console.log(data)
    //                 $.each(data_report, function(keys, values) {
    //                     var status = 'BELUM LUNAS'
    //                     if (values['status'] == '1') {
    //                         status = 'LUNAS'
    //                     }
    //                     var persen = (parseInt(values['total_bayar']) / parseInt(values['biaya'])) * 100
    //                     array = {
    //                         'no': keys + 1,
    //                         'no_po': values['no_po'],
    //                         'supplier': values['supplier_name'],
    //                         'biaya': number_format(values['biaya']),
    //                         'terbayar': number_format(values['total_bayar']),
    //                         'status_hutang': status,
    //                         'persentase_pelunasan': roundToTwo(persen) + '%',
    //                     }
    //                     body.push(array)
    //                 })
    //                 $('#example').DataTable().destroy();
    //                 $('#example').DataTable({
    //                     fixedHeader: true,
    //                     "data": body,
    //                     pageLength: 10,
    //                     lengthMenu: [
    //                         [10, 20],
    //                         [10, 20]
    //                     ],
    //                     "columns": header,
    //                 })
    //             } else {
    //                 $('#tampilReport').html('<div class="container d-flex h-100 text-center d-none"><div class="row justify-content-center align-items-center align-self-center text-center mx-auto "><i class="">Tidak Ada Data yang Tersedia</i></div></div>');
    //             }
    //         }
    //     })
    // }
</script>