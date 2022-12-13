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

    .start-25 {
        left: 25% !important;
    }

    .top-25 {
        top: 25% !important;
    }

    .w-35 {
        width: 35% !important;
    }

    .image-20 {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
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
                            Stok Gudang
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
                                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="ms-2 d-none d-sm-block">Add New</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="formTransaksiStok()"><i class="me-2 fa fa-plus"></i>Transaksi Stok</a></li>
                                        </ul>
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
            <div class="col-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>assets/image/logo/stock_in.png" class="image-20 w-25 position-absolute top-25 start-25 translate-middle" alt="" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 align-self-center text-center">
                            </div>
                            <div class="col-7 align-self-center">
                                <h6 class="fw-bold m-0">Stock In</h6>
                                <div class="row">
                                    <div class="col-auto">
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="persentPending">255 x</b></h1>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="m-0" style="font-size: 10px;">Transaction</p>
                                        <p class="m-0" style="font-size: 10px;">Today 13/12/2022</p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-primary btn-sm p-1">
                                    <p style="font-size: 11px;" class="mb-0">Detail Stock In</p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>assets/image/logo/stock_out.png" class="image-20 w-25 position-absolute top-25 start-25 translate-middle" alt="" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 align-self-center text-center">
                            </div>
                            <div class="col-7 align-self-center">
                                <h6 class="fw-bold m-0">Stock Out</h6>
                                <div class="row">
                                    <div class="col-auto">
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="persentPending">255 x</b></h1>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="m-0" style="font-size: 10px;">Transaction</p>
                                        <p class="m-0" style="font-size: 10px;">Today 13/12/2022</p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-primary btn-sm p-1">
                                    <p style="font-size: 11px;" class="mb-0">Detail Stock Out</p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Request Today
                        <div class="row">
                            <div class="col-auto mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="1">Warehouse</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-auto mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="chart-pie"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Material Today
                        <div class="row">
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="1">Warehouse</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Material</option>
                                    <option value="1">Etiked</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="1">Sisa Gudang</option>
                                    <option value="1">Barang Out</option>
                                    <option value="2">Barang In</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-auto" style="height: 300px;">
                        <div class="container">
                            <?php for ($i = 0; $i < 30; $i++) { ?>
                                <div class="row">
                                    <div class="col fw-bold">Foil Gold 12 SKM</div>
                                    <div class="col align-self-center">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fa fa-arrow-down text-success fa-2x"></i>
                                            </div>
                                            <div class="col-auto align-self-center ps-0">
                                                <p class="m-0" style="font-size: 12px;"><b>Warehouse</b></p>
                                                <p class="m-0" style="font-size: 10px;">13/12/2022</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">650 Roll</div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-header-actions">
                    <div class="card-header">
                        <span class="d-none d-sm-block">Warehouse</span>
                        <div class="float-end">
                            <div class="input-group input-group-sm w-100">
                                <input class="form-control pe-0" type="text" placeholder="Cari Nama Material" aria-label="Search" id="search_soal">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <div class="col-6 col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="card shadow-sm w-100 h-100 p-1">
                                        <div class="card-body text-center">
                                            <small class="fw-bold">Filter DF 160</small>
                                            <h2 class="text-primary m-0 p-0">6,000</h2>
                                            <small class="m-0 p-0">Tray</small>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        jumlahPR = 0
        last_number = 1
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    // var user_id = 143
    // var user_id = 118
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var data_user = ""
    var data_item = ""
    var no_pr = ""
    var last_number = 1
    $(document).ready(function() {})
    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Direct", "Referral", "Social"],
            datasets: [{
                data: [55, 30, 15],
                backgroundColor: [
                    "rgba(0, 97, 242, 1)",
                    "rgba(0, 172, 105, 1)",
                    "rgba(88, 0, 232, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 97, 242, 0.9)",
                    "rgba(0, 172, 105, 0.9)",
                    "rgba(88, 0, 232, 0.9)"
                ],
                hoverBorderColor: "rgba(234, 236, 244, 1)"
            }]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    function formTransaksiStok() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Cancel Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
        html_body += '<div class="card shadow-sm m-0 w-100">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12 text-center">'
        html_body += '<i class="small">Apakah anda yakin ingin membatalkan PR ' + data['no_pr'] + '</span></i>'
        html_body += '<button class="mt-5 btn btn-danger btn-sm" id="btnCancelPR" onclick="formCancelPR(' + pr_id + ')">Batalkan PR</button>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup Halaman</button>'
        $('#modalFooter').html(html_footer);
    }
</script>