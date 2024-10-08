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

    .bg-scene {
        background: url('../assets/image/background/logistic.png') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-scene pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-truck"></i></div>
                            Logistic
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
                    <div class="col-12 col-md-6 mb-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <span class="small"><b>Check Arrived Package</b></span>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control basicAutoComplete" placeholder="Cari No. Surat Jalan" aria-label="No. Surat Jalan" aria-describedby="button-addon2" id="inputSearch" autocomplete="off">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="cariSuratJalan()"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" id="tampilSuratJalan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="small"><b>History</b></span>
                                    </div>
                                    <div class="col">
                                        <div class="btn-group float-end">
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                Option
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <h6 class="dropdown-header">Group By</h6>
                                                </li>
                                                <li><a class="dropdown-item" onclick="changeDetail('supplier')">Supplier <i class="ms-2 fa fa-check text-success" id="successSupplier"></i></a></li>
                                                <li><a class="dropdown-item" onclick="changeDetail('po')">PO <i class="ms-2 fa fa-check text-success d-none" id="successPO"></i></a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <form class="px-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="dropdownCheck2" checked>
                                                            <label class="form-check-label" for="dropdownCheck2">
                                                                Paid
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="dropdownCheck3" checked>
                                                            <label class="form-check-label" for="dropdownCheck3">
                                                                Unpaid
                                                            </label>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4" id="tampilDetailSuratJalan">



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
<!-- Modal -->
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2">

            </div>
            <div class="modal-footer" id="modalFooter2">

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

    function clearModal2() {
        $('#modalDialog2').removeClass();
        $('#modalDialog2').removeAttr('style');
        $('#modalHeader2').html('');
        $('#modalBody2').html('');
        $('#modalFooter2').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var data_account = ""
    var data_user = ""
    var data_history = ""

    $(document).ready(function() {
        blankSuratJalan()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                dataHistory()
            }
        })
    })

    function dataHistory() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getHistoryPenerimaan'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                user_id: user_id,
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_history = response['data']
                listHistory()
            }
        })
    }

    function listHistory() {
        var html = ""
        $.each(data_history, function(keys, values) {
            html += '<div class="card shadow-sm mb-2 w-100 card-hoper">'
            html += '<div class="card-body">'
            html += '<div class="row">'
            html += '<div class="col-3 col-md-2  align-self-center">'
            html += '<div id="profileImage"><i class="fa fa-check"></i></div>'
            html += '</div>'
            html += '<div class="col-8 col-md-9  align-self-center">'
            html += '<p class="m-0 text-grey small" style="font-size:11px ;">Checked at ' + values['date'] + '</p>'
            html += '<b style="cursor: pointer;" onclick="detailSJ(' + keys + ')">SJ #' + values['no_sj'] + '</b>'
            html += '<p class="m-0 p-0 small lh-2" style="font-size: 11px;">Supplier <b>' + values['supplier_name'] + '</b></p>'
            html += '<p class="m-0 p-0 small lh-2" style="font-size: 11px;">Checked By <b>' + values['user_check_name'] + '</b></p>'
            html += '<p class="m-0 p-0 small lh-2" style="font-size: 11px;">'
            var data_sesuai = JSON.parse(values['data_detail']).filter(x => x.jumlah_asli === x.jumlah_diterima)
            var data_tidakksesuai = JSON.parse(values['data_detail']).filter(x => x.jumlah_asli != x.jumlah_diterima)

            if (data_sesuai.length != 0) {
                html += '<span class="badge bg-success"><i class="fa fa-check"></i> ' + data_sesuai.length + ' Item Jumlah telah sesuai</span> '
            }
            if (data_tidakksesuai.length != 0) {
                html += '<span class="badge bg-warning"><i class="fa fa-exclamation"></i> ' + data_tidakksesuai.length + ' Item Jumlah tidak sesuai</span>'
            }
            html += '</p>'
            html += '</div>'
            html += '<div class="col-1 col-md-1 align-self-center">'
            html += '<button class="btn btn-sm float-end" id="dropdownMenuButton"><i class="fa fa-ellipsis-v"></i></button>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#tampilDetailSuratJalan').html(html)
    }

    function blankSuratJalan() {
        var html = ""
        html += '<div class="card shadow-none mb-2 h-100">'
        html += '<div class="card-body">'
        html += '<div class="row justify-content-center">'
        html += '<div class="col-8 align-self-center text-center">'
        html += '<img src="<?= base_url() ?>assets/image/logo/search.png" class="w-50 mx-auto d-block mb-3">'
        html += '<p style="font-size:11px;" >Cari Nomor Surat Jalan untuk Melihat Detail</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#tampilSuratJalan').html(html)
    }

    function tidakAdaSuratJalan() {
        var html = ""
        html += '<div class="card shadow-none mb-2 h-100">'
        html += '<div class="card-body">'
        html += '<div class="row justify-content-center">'
        html += '<div class="col-8 align-self-center text-center">'
        html += '<img src="<?= base_url() ?>assets/image/logo/page-not-found.png" class="w-50 mx-auto d-block mb-3">'
        html += '<p style="font-size:11px;" >Surat Jalan Tidak Ditemukan</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#tampilSuratJalan').html(html)
    }
    var data_sj = ""

    var suratJalan = ""

    function cariSuratJalan() {
        data_sj = ""
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_sj: $('#inputSearch').val()
                // no_sj: 'AMA123'
            },
            error: function(xhr) {
                $('#modal2').modal('hide')
                tidakAdaSuratJalan()
            },
            beforeSend: function() {
                loading('truck.gif', 'Sedang Mencari Data')
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil',
                    icon: 'success',
                }).then((responses) => {
                    if (response['data'] == undefined) {
                        $('#modal2').modal('hide')
                        tidakAdaSuratJalan()
                    } else {
                        $('#modal2').modal('hide')
                        data_sj = response['data']
                        if (data_sj.length > 1) {
                            modalSJMulti()
                        } else {
                            data_key = 0
                            formPencarianSJ(response['data'][0], 0)
                        }
                    }
                })
            }
        })
    }
    var data_key

    function formPencarianSJKey(key) {
        data_key = key
        formPencarianSJ(data_sj[key], key)
    }

    function modalSJMulti() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Surat Jalan Terkait</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        $.each(data_sj, function(key, value) {
            let obj = JSON.parse(value['data_detail']).filter((value, key) => {
                if (value.status_order === 'ON DELIVERY') return true
            }).length;
            html_body += '<div class="col-12">'
            var check = "text-light"
            if (obj > 0) {
                html_body += '<div class="card shadow-none mb-2" style="cursor:pointer;" onclick="formPencarianSJKey(' + key + ')">'
            } else {
                check = 'text-success'
                html_body += '<div class="card shadow-none mb-2 bg-light">'
            }
            html_body += '<div class="card-body">'

            html_body += '<div class="row">'
            html_body += '<div class="col-6">'
            html_body += '<p class="m-0" style="font-size:10px;"><i class="fa fa-clock-o"></i> : ' + value['date_transaction_detail'] + '</p>'
            html_body += '<b style="font-size:16px;" class="mb-3">' + value['no_sj'] + '</b>'
            html_body += '<p class="m-0" style="font-size:11px;">NO. PO : <span class="fw-bold">' + value['no_po'] + '</span></p>'
            html_body += '<p class="m-0" style="font-size:11px;">Supplier : <span class="fw-bold">' + value['supplier_name'] + '</span></p>'
            html_body += '</div>'
            html_body += '<div class="col-6">'
            html_body += '<b style="font-size:11;">Item :</b>'
            $.each(JSON.parse(value['data_detail']), function(keys, values) {
                html_body += '<p class="m-0" style="font-size:11px;"><i class="fa fa-check ' + check + ' me-2"></i>' + values['item_name'] + ' (' + values['jumlah'] + ')</p>'
            })
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup Halaman</button>'
        $('#modalFooter').html(html_footer);
    }

    function formPencarianSJ(data, id) {
        $('#modal').modal('hide');
        let obj = JSON.parse(data['data_detail']).filter((value, key) => {
            if (value.status_order === 'DONE' || value.status_order === 'PENDING') return true
        }).length;
        var html = ""
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<div id="profileImage"><i class="fa fa-truck"></i></div>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 small" style="font-size:11px;">Surat Jalan <b class="m-0">#' + data['no_sj'] + '</b></p>'
        html += '<p class="m-0 small" style="font-size:11px;">Supplier <b class="m-0">' + data['supplier_name'] + '</b></p>'
        html += '<p class="m-0 small" style="font-size:11px;">Item <b class="m-0">' + data['category'] + '</b></p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="d-flex bd-highlight mb-3">'
        html += '<p class="m-0 bd-highlight me-auto" style="font-size: 11px;"><b>Detail Item</b></p>'
        html += '<span class="m-0 bd-highlight fa fa-print" style="cursor:pointer;" onclick="cetakPenerimaan(' + "'" + data['supplier_name'] + "'," + "'" + data['no_sj'] + "'" + ')"></span>'
        html += '</div>'

        $.each(JSON.parse(data['data_detail']), function(keys, values) {
            var converted = ''
            var checkSatuan = values.unit_option.find((v, k) => {
                if (v.id == values.satuan_id) return true
            })
            var satuanTerkecil = values.unit_option.find((v, k) => {
                if (v.is_default == 1) return true
            })
            if (!checkSatuan.is_default) {
                eval(`var total = parseFloat(values.jumlah) ${checkSatuan.operator_reverse} checkSatuan.multiplier`)
                converted = '<span class="ms-1">= ' + number_format(total) + ' ' + satuanTerkecil.name + '</span>'
            }

            html += '<div class="row">'
            html += '<div class="col-1 p-2 text-center">'
            html += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-100 mx-auto d-block">'
            html += '</div>'
            html += '<div class="col-5 align-self-center ps-0">'
            html += '<p class="m-0 small" style="font-size:12px ;"><b>' + values['item_name'] + '</b></p>'
            html += '<p class="m-0 small float-start" style="font-size:10px ;">' + values['jumlah'] + ' <span>' + values['satuan_name'] + '</span>' + converted + '</p>'
            html += '</div>'
            if (obj == 0) {
                html += '<div class="col-3 ps-0 pe-0 text-end">'
                html += '<input type="text" name="" class="form-control form-control-sm p-1 nominal jumlahMasuk" id="jumlahMasuk' + keys + '" data-key="' + keys + '" data-jumlah="' + values['jumlah'] + '" data-item="' + values['item_id'] + '" data-satuan="' + values['satuan_id'] + '" data-order="' + values['id_detail_order'] + '" data-date="' + "'" + values.date_transaction + "'" + '" autocomplete="off" placeholder="0" oninput="convertOption()">'
                html += '<p class="m-0 mt-1" style="font-size:10px;" id="convertedFill' + keys + '"></p>'
                html += '</div>'
                html += '<div class="col-3">'
                html += '<select name="" id="satuanSelect' + keys + '" class="form-select form-select-sm satuanSelect" required="required" onchange="convertOption()">'
                $.each(values.unit_option, function(key, value) {
                    var select = ''
                    if (value.id == values.satuan_id) {
                        select = 'selected'
                    }
                    html += '<option value="' + value['id'] + '" ' + select + '>' + value['name'] + '</option>'
                })
                html += '</select>'
                // html += '<p class="m-0 small text-start text-success d-none" id="checkItem' + keys + '" style="font-size:12px ;"><i class="fa fa-check fa-1x"></i></p>'
                // html += '<p class="m-0 small text-start text-warning d-none" id="warningItem' + keys + '" style="font-size:12px ;"><i class="fa fa-exclamation fa-1x"></i></p>'
                html += '</div>'
            }
            html += '</div>'
        })
        if (obj == 0) {
            // html += '<p class="m-0 mb-2 mt-3" style="font-size: 11px;"><b>Tambah Stok Sample</b></p>'
            // html += '<div id="dataSample">'
            // html += '</div>'
            // html += '<button class="btn btn-success btn-sm" onclick="tambahSample(' + id + ')"><i class="fa fa-plus me-2"></i>Tambah Sample</button>'
            html += '<p class="m-0 mb-3 mt-3" style="font-size: 11px;"><b>User yang Melakukan Pengecekan</b></p>'
            html += '<select name="" id="user_checking" class="form-select form-select-sm" required="required">'
            html += '<option value="" disabled selected>Pilih User</option>'
            $.each(data_user, function(key, value) {
                html += '<option value="' + value['id'] + '">' + value['name'] + '</option>'
            })
            html += '</select>'
            html += '<p class="m-0 mb-3 mt-3" style="font-size: 11px;"><b>Tanggal Penerimaan</b></p>'
            html += '<input class="form-control form-control-sm tanggalTerima datepicker mb-2">'
        }
        html += '</div>'
        html += '</div>'
        html += '<div class="mt-2">'
        if (obj == 0) {
            html += '<button class="btn btn-success w-100" id="btnChecked" onclick="checkDataArrived(' + data['pr_id'] + ',' + data['po_id'] + ',' + data['pengiriman_id'] + ',' + "'" + data['no_sj'] + "'" + ')">Selesaikan Pengecekan</button>'
        } else {
            html += '<button class="btn btn-outline-success w-100" disabled>Anda telah melakukan pengecekan</button>'
        }
        html += '</div>'
        $('#tampilSuratJalan').html(html)
        $('.nominal').number(true, 2);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        if (obj == 0) {
            convertOption()
        }
    }
    var noSampel = 0

    function tambahSample(id) {
        var data = JSON.parse(data_sj[id]['data_detail'])
        var html = ""
        html += '<div class="row pb-2">'
        html += '<div class="col-6 align-self-center">'
        html += '<select name="" id="itemSampel' + noSampel + '" class="form-select form-select-sm itemSampel" required="required" data-no="' + noSampel + '" onchange="isiSatuanSampel(' + noSampel + ',' + id + ')">'
        html += '<option value="" disabled selected>Pilih Item</option>'
        $.each(data, function(key, value) {
            html += '<option value="' + value['item_id'] + '" data-satuan="' + value['satuan_id'] + '">' + value['item_name'] + '</option>'
        })
        html += '</select>'
        html += '</div>'
        html += '<div class="col-3 align-self-center ps-0">'
        html += '<input type="text" name="" class="form-control form-control-sm p-1 nominal jumlahSampel" id="jumlahSampel' + noSampel + '" autocomplete="off">'
        html += '</div>'
        html += '<div class="col-3 align-self-center ps-0">'
        html += '<p class="m-0 small float-start" style="font-size:10px;" id="satuanSampel' + noSampel + '"></p>'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<div class="form-check">'
        html += '<input class="form-check-input checkStockSampel" type="checkbox" value="BAD" id="checkBadStock">'
        html += '<label class="form-check-label small" for="checkBadStock">'
        html += 'Bad Stock?'
        html += '</label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#dataSample').append(html)
        $('.nominal').number(true, 2);
        noSampel++
    }

    function isiSatuanSampel(no, id) {
        var data = JSON.parse(data_sj[id]['data_detail'])
        var value = $('#itemSampel' + no).val()
        $.each(data, function(keys, values) {
            if (value == values['item_id']) {
                $('#satuanSampel' + no).html(values['satuan_name'])
            }
        })
        // console.log(value)
    }

    var any_anomali = 0
    $(document).on('keyup', '.jumlahMasuk', function(e) {
        var key = $(this).data('key')
        var jumlah = $(this).data('jumlah')
        if (parseFloat(jumlah) == parseFloat($('#jumlahMasuk' + key).val())) {
            any_anomali = 0
            $('#checkItem' + key).removeClass('d-none')
            $('#warningItem' + key).addClass('d-none')
        } else {
            any_anomali = 1
            $('#checkItem' + key).addClass('d-none')
            $('#warningItem' + key).removeClass('d-none')
        }
    })

    function checkDataArrived(pr_id, po_id, pengiriman_id, no_sj) {
        var jumlah = $('.jumlahMasuk').map(function() {
            return $(this).val();
        }).get();
        var item = $('.jumlahMasuk').map(function() {
            return $(this).data('item');
        }).get();
        var satuan = $('.jumlahMasuk').map(function() {
            return $(this).data('satuan');
        }).get();
        var order = $('.jumlahMasuk').map(function() {
            return $(this).data('order');
        }).get();
        var key = $('.jumlahMasuk').map(function() {
            return $(this).data('key');
        }).get();
        var date_transaction = $('.jumlahMasuk').map(function() {
            return $(this).data('date');
        }).get();
        var item_sampel = $('.itemSampel').map(function() {
            return $(this).val();
        }).get();
        var satuan_sampel = $('.itemSampel').map(function() {
            return $(this).find(':selected').data('satuan');
        }).get();
        var jumlah_sampel = $('.jumlahSampel').map(function() {
            return $(this).val();
        }).get();
        var check_sampel = $('.checkStockSampel').map(function() {
            if ($('.checkStockSampel:checked').val() == 'BAD') {
                return 'BAD'
            } else {
                return 'GOOD'
            }
        }).get();
        var detail = []
        var detail_sampel = []
        for (let i = 0; i < jumlah.length; i++) {
            var data = convertReturn(i, order, key, jumlah)
            detail.push({
                'id_detail_order': order[i],
                'jumlah_barang': data.total,
                'id_satuan': data.satuanTerkecilId,
                'id_item': item[i],
                'date_transaction': date_transaction[i],
            })
        }
        for (let i = 0; i < jumlah_sampel.length; i++) {
            detail_sampel.push({
                'item_sampel': item_sampel[i],
                'satuan_sampel': satuan_sampel[i],
                'jumlah_sampel': jumlah_sampel[i],
                'check_sampel': check_sampel[i],
            })
        }
        var id_user_checking = $('#user_checking').val()
        var date_received = $('.tanggalTerima').val()
        var type = 'POST'
        var data = {
            id_users: user_id,
            pengiriman_id: pengiriman_id,
            no_sj: no_sj,
            po_id: po_id,
            id_user_checking: id_user_checking,
            detail: detail,
            detail_sampel: detail_sampel,
            pr_id: pr_id,
            date_received: date_received,
        }
        var button = '#btnChecked'
        var url = '<?php echo api_url('Api_Warehouse/insertPenerimaan'); ?>'
        // console.log(data)
        if (any_anomali == 1) {
            Swal.fire({
                text: 'Terdapat jumlah yang tidak sesuai dengan Surat Jalan, apakah anda ingin langsung menerima?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Terima Saja'
            }).then((result) => {
                if (result.isConfirmed) {
                    kelolaData(data, type, url, button)
                }
            })
        } else {
            kelolaData(data, type, url, button)
        }
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((responses) => {
                        blankSuratJalan()
                        dataHistory()
                        $(button).prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(button).prop("disabled", false);
                }
            }
        });
    }

    function detailSJ(keys) {
        var data_detail = JSON.parse(data_history[keys]['data_detail'])
        var data = data_history[keys]
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md');
        var html_header = '';
        html_header += '<h5 class="modal-title">SJ #' + data['no_sj'] + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small p-5 pt-2">'
        html_body += '<div class="row">'
        html_body += '<p class="m-0 mb-2 small"><b>Penerimaan Item</b></p>'
        // console.log(data_detail)
        $.each(data_detail, function(key, value) {
            html_body += '<div class="row">'
            html_body += '<div class="col-2 p-2 text-center">'
            html_body += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-75 mx-auto d-block">'
            html_body += '</div>'
            html_body += '<div class="col-4 align-self-center ps-0">'
            html_body += '<p class="m-0 small" style="font-size:12px ;"><b>' + value['item_name'] + '</b></p>'
            html_body += '<p class="m-0 small float-start" style="font-size:10px ;">' + value['jumlah_asli'] + ' <span>' + value['item_satuan'] + '</span></p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center text-center p-0">'
            html_body += '<p class="m-0 small">' + value['jumlah_diterima'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center text-start">'
            html_body += '<select name="" class="form-control select2-single form-control-sm w-100 " style="border:0" data-live-search="true" required="required">'
            html_body += '<option value="">' + value['item_satuan'] + '</option>'
            html_body += '</select>'
            html_body += '</div>'
            html_body += '</div>'
        })
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.nominal').number(true);

        $('#modalFooter').addClass('d-none')
    }

    function loading(image, text) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-centered');
        // var html_header = '';
        $('#modalHeader2').addClass('d-none');
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row text-center p-5">'
        html_body += '<img src="<?= base_url() ?>assets/image/gif/' + image + '" class="w-50  mx-auto d-block"><br>'
        html_body += '<p class="mt-3">' + text + '</p>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);
        // var html_footer = '';
        $('#modalFooter2').addClass('d-none');
    }

    function cetakPenerimaan(supplier, no_sj) {
        var url = '<?= base_url('order/cetakPenerimaan') ?>'
        var params = "*$" + btoa(no_sj) + "*$" + btoa(data_sj['data_detail']) + "*$" + btoa(supplier)
        window.open(url + '?params=' + (params), '_blank')
    }

    function convertOption() {
        var key = $('.jumlahMasuk').map(function() {
            return $(this).data('key');
        }).get();
        var order = $('.jumlahMasuk').map(function() {
            return $(this).data('order');
        }).get();
        var jumlah = $('.jumlahMasuk').map(function() {
            return $(this).data('jumlah');
        }).get();
        var valueJumlah = $('.jumlahMasuk').map(function() {
            return $(this).val();
        }).get();
        var satuan = $('.jumlahMasuk').map(function() {
            return $(this).data('satuan');
        }).get();
        for (let i = 0; i < key.length; i++) {
            var data = convertReturn(i, order, key, valueJumlah)
            $('#convertedFill' + key[i]).html(number_format(data.total) + ' ' + data.satuanTerkecilName)
        }
    }

    function convertReturn(i, order, key, valueJumlah) {
        var data = JSON.parse(data_sj[data_key].data_detail).find((v, k) => {
            if (v.id_detail_order == order[i]) return true
        })
        var idSatuanSeelct = $('#satuanSelect' + key[i]).val()
        var checkSatuan = data.unit_option.find((v, k) => {
            if (v.id == idSatuanSeelct) return true
        })
        var satuanTerkecil = data.unit_option.find((v, k) => {
            if (v.is_default == 1) return true
        })
        if (!valueJumlah[i]) {
            valueJumlah[i] = 0
        }
        eval(`var total = parseFloat(valueJumlah[i]) ${checkSatuan.operator_reverse} checkSatuan.multiplier`)
        return {
            total: total,
            satuanTerkecilName: satuanTerkecil.name,
            satuanTerkecilId: satuanTerkecil.id,
        }
    }
</script>