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
        background: rgb(194, 25, 162);
        background: linear-gradient(66deg, rgba(194, 25, 162, 1) 0%, rgba(58, 63, 111, 1) 46%, rgba(15, 232, 219, 1) 100%);
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
                            <div class="page-header-icon"><i class="fa fa-truck"></i></div>
                            Payments
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="btn-group">
                                        <button class="btn btn-outline-light position-relative" type="button" id="dropdownMenuClickableOutside">
                                            <i class="fa fa-bell"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col mb-2 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-money text-success fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Payment Rate</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="persentPending">0%</b></h1>
                                        <p style="font-size: 11px;" class="mb-0">Paid to Supplier</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2 ps-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-truck text-success fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Pending</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahPending">0</b></h1>
                                        <p style="font-size: 11px;" class="lh-sm mb-0">Orders are Unpaid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="small"><b>Detail Pembayaran</b></span>
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
                                    <div class="col-12 pt-4" id="tampilDetailPembayaran">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="fw-bold float-start">Quick Payments</p>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm float-end"><i class="fa fa-ellipsis-v"></i></button>
                                    </div>
                                </div>
                                <div class="pagination-wrapper">
                                    <div class="mt-2" id="listQuickPayment">

                                    </div>
                                    <div id="pagination-container">

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
<!-- Modal -->
<div class="modal fade" id="modal3" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog3">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader3">

            </div>
            <div class="modal-body" id="modalBody3">

            </div>
            <div class="modal-footer" id="modalFooter3">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
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

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })
    var data_payment = ""

    function getData(po_id = "", modal = "") {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPayment'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_payment = response
                var data = data_payment['by_po'].filter((values, keys) => {
                    if (values.is_lunas === "0") return true
                })
                let sum = 0;
                let total = 0;
                data.forEach(obj => {
                    for (let property in obj) {
                        sum += parseInt(obj['total_dibayar']);
                        total += parseInt(obj['grand_total']);
                    }
                })
                var percent = roundToTwo((parseInt(total) - parseInt(sum)) / parseInt(total) * 100)
                $('#jumlahPending').html(data.length)
                $('#persentPending').html(percent + '%')
                tampilDetailPembayaran(data_payment['by_supplier'], 'supplier')
                if (po_id != "") {
                    formPaymentPO(po_id, modal)
                }
            }
        })
    }

    function changeDetail(jenis) {
        if (jenis == 'supplier') {
            $('#successSupplier').removeClass('d-none')
            $('#successPO').addClass('d-none')
            tampilDetailPembayaran(data_payment['by_supplier'], 'supplier')
        } else if (jenis == 'po') {
            $('#successSupplier').addClass('d-none')
            $('#successPO').removeClass('d-none')
            tampilDetailPembayaran(data_payment['by_po'], 'po')
        }
    }

    function tampilDetailPembayaran(data, jenis) {
        var html = ""
        $.each(data, function(key, value) {
            if (jenis == 'supplier') {
                html += '<div class="card shadow-sm mb-2 w-100 card-hoper" id="card_searchSUPPLIER' + key + '">'
                html += '<div class="card-body">'
                html += '<div class="row">'
                html += '<div class="col-11 align-self-center">'
                html += '<b class="text_search" data-id="SUPPLIER' + key + '" style="cursor: pointer;" onclick="modalSupplierpayment(' + value['supplier_id'] + ',' + "'" + value['supplier_name'] + "'" + ')">' + value['supplier_name'] + '</b>'
                if (value['total_belum'] != 0) {
                    html += '<p class="m-0 lh-sm small"><span class="badge bg-danger fw-bold text-white">' + value['total_belum'] + ' PO</span> belum terselesaikan</p>'
                } else {
                    html += '<p class="m-0 lh-sm small">Seluruh Transaksi Terselesaikan</p>'
                }
                if (value['almost_expired'] != 0) {
                    html += '<p class="m-0 mt-3 small" style="font-size:11px ;"><i class="fa fa-warning text-warning"></i> ' + value['almost_expired'] + ' Transaksi Mendekati Masa Tenggang</p>'
                } else {
                    html += '<p class="m-0 mt-3 small" style="font-size:11px ;"><i class="fa fa-thumbs-up text-success"></i> Transaksi Aman</p>'
                }
                html += '</div>'
                html += '<div class="col-1 align-self-center">'
                html += '<button class="btn btn-sm float-end" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
                html += '<a class="dropdown-item"><i class="fa fa-plus me-2"></i> Pembayaran</a>'
                html += '<a class="dropdown-item"><i class="fa fa-print me-2"></i> Cetak Invoice</a>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            } else {
                html += '<div class="card shadow-sm mb-2 w-100 card-hoper" id="card_searchPO' + key + '">'
                html += '<div class="card-body">'
                html += '<div class="row">'
                html += '<div class="col-7 align-self-center">'
                html += '<p class="m-0 text-grey small" style="font-size:11px ;">Ordered at ' + value['date_order'] + '</p>'
                html += '<b class="text_search" data-id="PO' + key + '" style="cursor: pointer;" onclick="paymentPO(' + value['po_id'] + ')">PO ' + value['no_po'] + '</b>'
                html += '<p class="m-0 small lh-2 mb-2" style="font-size: 10px;">Supplier ' + value['supplier_name'] + '</p>'
                html += '<p class="m-0 lh-sm small"><i class="fa fa-money text-success"></i> ' + number_format(value['total_dibayar']) + ' / ' + number_format(value['grand_total']) + '</p>'
                html += '</div>'
                html += '<div class="col-4">'
                html += '<p class="m-0 small" style="font-size:11px ;"><i class="fa fa-clock-o text-warning"></i> Due on ' + formatDate(value['masa_tenggang']) + '</p>'
                html += '<p class="m-0">'
                var is_dp = 0
                if (value['detail_pembayaran'] != null) {
                    is_dp = [JSON.parse(value['detail_pembayaran']).find((values, keys) => {
                        if (values.pembayaran_dp === 1) return true
                    })].length;
                }
                if (is_dp == 1) {
                    html += '<span class="badge bg-success me-2" style="font-size:11px ;"><i class="fa fa-check text-white"></i> DP</span>'
                } else {
                    html += '<span class="badge bg-light me-2" style="font-size:11px ;"><i class="fa fa-check text-white"></i> DP</span>'
                }
                if (value['is_lunas'] == 0) {
                    html += '<span class="badge bg-light me-2" style="font-size:11px ;"><i class="fa fa-check text-white"></i> Lunas</span>'
                } else {
                    html += '<span class="badge bg-success me-2" style="font-size:11px ;"><i class="fa fa-check text-white"></i> Lunas</span>'

                }
                html += '</p>'
                html += '</div>'
                html += '<div class="col-1 align-self-center">'
                html += '<button class="btn btn-sm float-end" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
                html += '<a class="dropdown-item"><i class="fa fa-plus me-2"></i> Pembayaran</a>'
                html += '<a class="dropdown-item"><i class="fa fa-print me-2"></i> Cetak Invoice</a>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })

        $('#tampilDetailPembayaran').html(html)
        searching()
        tampilQuickPayment()
    }

    function tampilQuickPayment() {
        var html = ""
        $.each(data_payment['by_po'], function(key, value) {
            if (value['is_lunas'] == 0) {
                html += '<div class="card shadow-none mb-1 p-1 card-hoper">'
                html += '<div class="card-body p-2">'
                html += '<div class="row">'
                html += '<div class="col-3 align-self-center text-center">'
                html += '<div id="profileImage"><i class="fa fa-truck"></i></div>'
                html += '</div>'
                html += '<div class="col-9 align-self-center text-break">'
                html += '<a onclick="paymentPO(' + value['po_id'] + ')" class="text-primary" style="cursor:pointer;">'
                html += '<p class="m-0 small fw-bold" style="font-size: 14px;">PO #' + value['no_po'] + '</p>'
                html += '</a>'
                html += '<p class="m-0 small lh-2" style="font-size: 11px;">Supplier ' + value['supplier_name'] + '</p>'
                html += '<p class="m-0 mt-3 small lh-1 text-grey" style="font-size: 11px;">Due ' + formatDate(value['masa_tenggang']) + '</p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })
        $('#listQuickPayment').html(html)
    }

    function modalSupplierpayment(id_supplier = "", nama_supplier = "") {
        var data = null
        if (id_supplier != "") {
            data = data_payment['by_po'].filter((values, keys) => {
                if (values.supplier_id === id_supplier.toString()) return true
            })
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable modal-fullscreen');
        var html_header = '';
        html_header += '<h5 class="modal-title">Payment</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = ""
        html_body += '<header class="page-header page-header-dark bg-gradient-danger-to-warning pb-5">'
        html_body += '<div class="container-xl px-4">'
        html_body += '<div class="page-header-content pt-4">'
        html_body += '<div class="row align-items-center justify-content-between">'
        html_body += '<div class="col-auto mt-4">'
        html_body += '<h1 class="page-header-title">'
        html_body += 'Daftar PO'
        html_body += '</h1>'
        html_body += '<span class="small text-white">'
        html_body += '<span class="fa fa-building-o text-white me-3"></span>'
        html_body += nama_supplier
        html_body += '</span>'
        html_body += '</div>'
        html_body += '<div class="col-auto mt-4">'
        html_body += '<div class="input-group w-100">'
        html_body += '<input class="form-control pe-0" type="text" placeholder="Cari No. PO" aria-label="Search" id="search_nama_in_supplier">'
        html_body += '<span class="input-group-text">'
        html_body += '<i class="fa fa-search"></i>'
        html_body += '</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</header>'
        html_body += '<div class="container-xl px-4 mt-n10">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 pb-5">'
        html_body += '</div>'

        // console.log(data)
        if (data.length == 0) {
            html_body += '<div class="col-12 col-sm-12 col-md-12">'
            html_body += '<div class="card mb-2 w-100 shadow-sm card-hoper">'
            html_body += '<div class="card-body p-3 align-self-center text-center">'
            html_body += 'Tidak ada PO yang tersedia'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        $.each(data, function(key, value) {
            html_body += '<div class="col-12 col-sm-12 col-md-12">'
            html_body += '<div class="card mb-2 w-100 shadow-sm card-hoper" id="card_search_supplier' + key + '">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-6 ">'
            html_body += '<p class="m-0" style="cursor:pointer;" onclick="paymentPO(' + value['po_id'] + ',2)"><b class="text_search_supplier" data-id="' + key + '">PO #' + value['no_po'] + '</b></p>'
            html_body += '<p class="m-0 small" style="font-size:11px;"><i class="fa fa-clock-o text-warning"></i> <i>Due at ' + formatDate(value['masa_tenggang']) + '</i></p>'
            html_body += '</div>'
            html_body += '<div class="col-5">'
            html_body += '<p class="m-0 float-start" style="font-size:11px;">' + number_format(value['total_dibayar']) + ' / ' + number_format(value['grand_total']) + '</p>'
            var percent = 0
            percent = roundToTwo(parseInt(value['total_dibayar']) / parseInt(value['grand_total']) * 100)
            if (percent > 100) {
                percent = 100
            }
            html_body += '<p class="m-0 float-end" style="font-size:11px;">' + percent + '%</p>'
            html_body += '<br>'
            html_body += '<div class="progress" style="height: 5px;">'
            html_body += '<div class="progress-bar" role="progressbar" style="width: ' + percent + '%;" aria-valuenow="' + percent + '" aria-valuemin="0" aria-valuemax="100"></div>'
            html_body += '</div>'

            html_body += '<div class="mt-4 detailPembayaran d-none" id="detailPembayaran' + key + '">'
            html_body += '<b style="font-size:11px;" class="mb-2">History Pembayaran</b>'

            // detail
            var jum_pay = 1
            if (value['detail_pembayaran'] != null) {
                $.each(JSON.parse(value['detail_pembayaran']), function(keys, values) {
                    html_body += '<div class="card shadow-none mb-1 small" style="font-size:11px;">'
                    html_body += '<div class="card-body p-3">'
                    html_body += '<div class="row">'
                    html_body += '<div class="col-1 align-self-center text-center">'
                    html_body += '<span class="fa fa-clock-o text-primary"></span>'
                    html_body += '</div>'
                    html_body += '<div class="col-11 align-self-center">'
                    html_body += '<p class="m-0 text-grey text_search_supplier" data-id="' + key + '">#' + values['kode_pembayaran'] + '</p>'
                    var text = ""
                    if (values['pembayaran_dp'] == 1) {
                        text = "Pembayaran DP"
                    } else {
                        text = "Pembayaran ke-" + jum_pay
                        jum_pay++

                    }
                    html_body += '<b class="float-start">' + text + '</b>'
                    html_body += '<b class="float-end">Rp. ' + number_format(values['nominal']) + '</b><br>'
                    html_body += '<p class="m-0" style="font-size:10px;">' + formatDate(values['tanggal_pembayaran']) + '</p>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                })
            } else {
                html_body += '<div class="card shadow-none mb-1 small position-relative" style="font-size:11px;">'
                html_body += '<div class="card-body p-3 align-self-center text-center">'
                html_body += 'Belum ada Pembayaran yang dibuat'
                html_body += '</div>'
                html_body += '</div>'
            }
            // detail

            html_body += '</div>'

            html_body += '</div>'
            html_body += '<div class="col-1 text-center">'
            html_body += '<i class="fa fa-angle-down fa-2x" id="iconUp' + key + '" style="cursor:pointer;" onclick="showDetailPay(' + key + ')"></i>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'
        })
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#modalBody').addClass('p-0')

        $('#modalFooter').addClass('d-none');
    }

    function showDetailPay(keys) {
        var element = document.getElementById('detailPembayaran' + keys).classList.contains('d-none');
        if (element == false) {
            // tutup
            $('#detailPembayaran' + keys).addClass('d-none')
            $('#iconUp' + keys).addClass('fa-angle-down')
            $('#iconUp' + keys).removeClass('fa-angle-up')
        } else {
            // buka
            $('#detailPembayaran' + keys).removeClass('d-none')
            $('#iconUp' + keys).removeClass('fa-angle-down')
            $('#iconUp' + keys).addClass('fa-angle-up')
        }
    }

    function paymentPO(id = "", modal = "") {
        if (data_account == "") {
            $.ajax({
                url: "<?= api_url('MasterNtm/getAccount'); ?>",
                method: "GET",
                dataType: 'JSON',
                error: function(xhr) {},
                beforeSend: function() {},
                success: function(response) {
                    data_account = response['data_bank']
                    var array2 = response['data_kas']
                    Array.prototype.push.apply(data_account, array2);
                    formPaymentPO(id, modal)
                }
            })
        } else {
            formPaymentPO(id, modal)
        }
    }

    function formPaymentPO(id = "", modal = "") {
        var detail = null
        var data = null
        if (id != "") {
            detail = JSON.parse(data_payment['by_po'].find((values, keys) => {
                if (values.po_id === id.toString()) return true
            })['detail_pembayaran'])
            data = data_payment['by_po'].find((values, keys) => {
                if (values.po_id === id.toString()) return true
            })
        }
        $('#modal' + modal).modal('show')
        $('#modalDialog' + modal).addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title"></h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader' + modal).html(html_header);

        var html_body = ''
        html_body += '<div class="container">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6 ">'

        html_body += '<p class="small mb-2"><b><span class="fa fa-list me-2"></span>Detail Pembayaran</b></p>'
        // detail
        html_body += '<div class="card shadow-none mb-1 small position-relative" style="font-size:12px;">'
        if (data['is_lunas'] == 1) {
            html_body += '<div class="position-absolute top-50 start-50 translate-middle">'
            html_body += '<img class="gambar-miring" src="<?= base_url() ?>assets/image/logo/paid.png" style="width:60px;height:60px;">'
            html_body += '</div>'
        }
        html_body += '<div class="card-body p-3">'
        html_body += '<div class="row">'

        html_body += '<div class="col-6">'
        html_body += 'Total Terbayarkan'
        html_body += '</div>'
        html_body += '<div class="col-6 text-end">'
        html_body += number_format(data['total_dibayar'])
        html_body += '</div>'
        if (data['is_lunas'] == 0) {
            html_body += '<div class="col-6">'
            html_body += 'Total Belum Terbayar'
            html_body += '</div>'
            html_body += '<div class="col-6 text-end">'
            var selisih = parseInt(data['grand_total']) - parseInt(data['total_dibayar'])
            if (selisih < 0) {
                selisih = 0 + ' (lebih biaya ' + Math.abs(selisih) + ')'
            }
            html_body += number_format(selisih)
            html_body += '</div>'
        } else {
            html_body += '<div class="col-6">'
            html_body += 'Total Belum Terbayar'
            html_body += '</div>'
            html_body += '<div class="col-6 text-end">0'
            html_body += '</div>'
            html_body += '<div class="col-6">'
            html_body += 'Selisih'
            html_body += '</div>'
            html_body += '<div class="col-6 text-end">'
            var selisih = parseInt(data['grand_total']) - parseInt(data['total_dibayar'])
            if (selisih < 0) {
                selisih = 0 + ' (lebih biaya ' + Math.abs(selisih) + ')'
            }
            html_body += number_format(selisih)
            html_body += '</div>'
        }

        html_body += '<div class="col-6 pt-3">'
        html_body += '<b>Total Semua</b>'
        html_body += '</div>'
        html_body += '<div class="col-6 pt-3 text-end">'
        html_body += '<b>' + number_format(data['grand_total']) + '</b>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // detail

        html_body += '<p class="small mb-2 mt-4"><b><span class="fa fa-clock-o me-2"></span>History Pembayaran</b></p>'
        html_body += '<div class="mb-3">'
        // detail
        var jum_pay = 1;
        if (detail == null) {
            html_body += '<div class="card shadow-none mb-1 small position-relative" style="font-size:11px;">'
            html_body += '<div class="card-body p-3 align-self-center text-center">'
            html_body += 'Belum ada Pembayaran yang dibuat'
            html_body += '</div>'
            html_body += '</div>'
        }
        $.each(detail, function(key, value) {
            html_body += '<div class="card shadow-none mb-1 small position-relative" style="font-size:11px;">'
            html_body += '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:14px;cursor:pointer;" onclick="hapusTransaksi(' + value['id_pembayaran_detail'] + ',' + "'" + value['kode_pembayaran'] + "'" + ',' + "'" + modal + "'" + ',' + id + ')">'
            html_body += '<i class="fa fa-trash"></i>'
            html_body += '<span class="visually-hidden">Delete</span>'
            html_body += '</span>'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-1 align-self-center text-center">'
            html_body += '<span class="fa fa-clock-o text-primary"></span>'
            html_body += '</div>'
            html_body += '<div class="col-11 align-self-center">'
            html_body += '<p class="m-0 text-grey">#' + value['kode_pembayaran'] + '</p>'
            var text = ""
            if (value['pembayaran_dp'] == 1) {
                text = "Pembayaran DP"
            } else {
                text = "Pembayaran ke-" + jum_pay
                jum_pay++

            }
            html_body += '<b class="float-start">' + text + '</b>'
            html_body += '<b class="float-end">Rp. ' + number_format(value['nominal']) + '</b><br>'
            html_body += '<p class="m-0" style="font-size:10px;">' + formatDate(value['tanggal_pembayaran']) + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        // detail
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6 ">'
        html_body += '<p class="small mb-2"><b><span class="fa fa-plus me-2"></span>Buat Pembayaran Baru</b></p>'

        html_body += '<div class="card shadow-none mb-1 small" style="font-size:12px;">'
        html_body += '<div class="card-body p-3">'
        html_body += '<p class="m-0 mb-3"><b>No. Invoice</b></p>'
        html_body += '<input style="border:none" type="text" name="" class="form-control form-control-sm p-1" value="" id="no_invoice">'
        html_body += '<hr class="m-0">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="card shadow-none mb-1 small" style="font-size:12px;">'
        html_body += '<div class="card-body p-3">'
        html_body += '<p class="m-0 mb-3"><b>Sumber Dana</b></p>'

        // sumber
        $.each(data_account, function(key, value) {
            html_body += '<div class="card shadow-none mb-1 small">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-2 border-end">'
            html_body += '<input class="form-check-input data_account" type="radio" name="data_account" id="radioAccount' + key + '" value="' + value['id'] + '">'
            html_body += '</div>'
            html_body += '<div class="col-10">'
            html_body += '<label class="form-check-label" for="radioAccount' + key + '">'
            html_body += value['name']
            html_body += '</label>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        // sumber

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="card shadow-none mb-1 small" style="font-size:12px;">'
        html_body += '<div class="card-body p-3">'
        html_body += '<p class="m-0 mb-3"><b>Jenis Pembayaran</b></p>'

        // sumber
        html_body += '<div class="card shadow-none mb-1 small">'
        html_body += '<div class="card-body p-3">'
        html_body += '<div class="row">'
        html_body += '<div class="col-2 border-end">'
        html_body += '<input class="form-check-input jenis_pembayaran" type="radio" name="jenis_pembayaran" id="jenis_pembayaran1" value="dp">'
        html_body += '</div>'
        html_body += '<div class="col-10">'
        html_body += '<label class="form-check-label" for="jenis_pembayaran1">'
        html_body += 'Pembayaran DP'
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // sumber
        // sumber
        html_body += '<div class="card shadow-none mb-1 small">'
        html_body += '<div class="card-body p-3">'
        html_body += '<div class="row">'
        html_body += '<div class="col-2 border-end">'
        html_body += '<input class="form-check-input jenis_pembayaran" type="radio" name="jenis_pembayaran" id="jenis_pembayaran2" value="lainnya">'
        html_body += '</div>'
        html_body += '<div class="col-10">'
        html_body += '<label class="form-check-label" for="jenis_pembayaran2">'
        html_body += 'Lainnya'
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // sumber

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="card shadow-none mb-1 small" style="font-size:12px;">'
        html_body += '<div class="card-body p-3">'
        html_body += '<p class="m-0 mb-3"><b>Nominal</b></p>'
        html_body += '<input style="border:none" type="text" name="" class="form-control form-control-sm p-1 nominal" value="" placeholder="Rp. 400,000" id="nominalPembayaran">'
        html_body += '<hr class="m-0">'
        html_body += '<div class="mt-2">'
        html_body += '<div class="form-check  float-end">'
        html_body += '<input class="form-check-input" type="checkbox" value="1" id="isLunas">'
        html_body += '<label class="form-check-label" for="isLunas">'
        html_body += 'Langsung Lunas?'
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<button class="btn btn-success w-100 mt-2" id="btnPembayaran" onclick="tambahPembayaran(' + id + ',' + modal + ')">Lanjutkan Pembayaran</button>'


        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody' + modal).html(html_body);
        $('.nominal').number(true);

        var html_footer = ''
        $('#modalFooter' + modal).html(html_footer);
        $('#modalBody' + modal).removeClass('p-0')
        $('#modalFooter' + modal).addClass('d-none');
    }

    function tambahPembayaran(po_id, modal) {
        var type = 'POST'
        var account_source_id = $('.data_account:checked').val()
        var jenis_payment = $('.jenis_pembayaran:checked').val()
        var is_lunas = $('#isLunas:checked').val()
        if (is_lunas == undefined) {
            is_lunas = 0
        }
        if (modal == undefined) {
            modal = ""
        }
        var nominal = $('#nominalPembayaran').val()
        var no_invoice = $('#no_invoice').val()
        var data = {
            account_source_id: account_source_id,
            jenis_payment: jenis_payment,
            nominal: nominal,
            is_lunas: is_lunas,
            user_id: user_id,
            po_id: po_id,
            modal: modal,
            no_invoice: no_invoice,
        }
        var button = '#btnPembayaran'
        var url = '<?php echo api_url('Api_Warehouse/insertPayment'); ?>'
        kelolaData(data, type, url, button)
    }

    function hapusTransaksi(id, kode, modal, po_id) {
        if (modal == undefined) {
            modal = ''
        }
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus transaksi ' + kode + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_url('Api_Warehouse/deletePayment'); ?>',
                    type: 'POST',
                    data: {
                        id_pembayaran_detail: id,
                        user_id: user_id
                    },
                    success: function(response) {
                        getData(po_id, modal)
                        Swal.fire(
                            'Terhapus!',
                            'Transaksi ' + kode + ' Terhapus',
                            'success'
                        )
                    }
                });
            }
        })
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
                        getData(data['po_id'], data['modal'])
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
    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })
    $(document).on('keyup', '#search_nama_in_supplier', function(e) {
        searchingSupplier()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching() {
        var value = $('#search_nama').val().toLowerCase();
        var cards = $('.text_search').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search' + array_arranged[i]).removeClass('d-none')
        }
    }

    function searchingSupplier() {
        var value = $('#search_nama_in_supplier').val().toLowerCase();
        var cards = $('.text_search_supplier').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search_supplier').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search_supplier' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search_supplier' + array_arranged[i]).removeClass('d-none')
        }
    }
</script>