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
                            <div class="page-header-icon"><i class="fa fa-truck"></i></div>
                            Transaction
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
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col mb-2 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-clock-o text-warning fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Pending</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="persentPending">0</b></h1>
                                        <!-- <p style="font-size: 11px;" class="mb-0">Done This Order</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2 ps-1 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-truck text-primary fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Delivered</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahPending">0</b></h1>
                                        <!-- <p style="font-size: 11px;" class="lh-sm mb-0">Orders are On The Way</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2 ps-1 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-check text-success fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Checked</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahPending">0</b></h1>
                                        <!-- <p style="font-size: 11px;" class="lh-sm mb-0">Orders are Unpaid</p> -->
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
                                        <i class="fa fa-times text-danger fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Canceled</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahPending">0</b></h1>
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
                                        <span class="small"><b>List Surat Jalan</b></span>
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
                                        <div class="card shadow-sm mb-2 w-100 card-hoper">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-1 align-self-center">
                                                        <div id="profileImage"><i class="fa fa-truck"></i></div>
                                                    </div>
                                                    <div class="col-6 align-self-center">
                                                        <p class="m-0 text-grey small" style="font-size:11px ;">Create at 02/11/2022</p>
                                                        <b style="cursor: pointer;" onclick="detailSJ()">SJ #74927438</b>
                                                        <p class="m-0 small lh-2 mb-2" style="font-size: 11px;"><i class="fa fa-gift"></i> 3 Items from <b>PT BERCA KAWAN SEJATI</b></p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="m-0 small text-grey" style="font-size:10px ;">Item</p>
                                                        <p class="m-0 small" style="font-size:12px ;"><b>NTM</b></p>
                                                        <p class="m-0 small text-grey" style="font-size:10px ;">Status</p>
                                                        <p class="m-0 small" style="font-size:12px ;"><b>DELIVER</b></p>
                                                    </div>
                                                    <div class="col-1 align-self-center">
                                                        <button class="btn btn-sm float-end" id="dropdownMenuButton"><i class="fa fa-angle-down fa-2x"></i></button>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <hr>
                                                    <div class="col-1">

                                                    </div>
                                                    <div class="col-3">
                                                        <p class="m-0 mb-3" style="font-size: 11px;"><b>Tracking</b></p>
                                                        <div class="timeline timeline-sm">
                                                            <div class="timeline-item">
                                                                <div class="timeline-item-marker">
                                                                    <div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>
                                                                    <div class="timeline-item-marker-indicator bg-success text-white"><i data-feather="check"></i></div>
                                                                </div>
                                                                <div class="timeline-item-content" style="font-size: 11px;">Order</div>
                                                            </div>
                                                            <div class="timeline-item">
                                                                <div class="timeline-item-marker">
                                                                    <div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>
                                                                    <div class="timeline-item-marker-indicator bg-success text-white"><i data-feather="check"></i></div>
                                                                </div>
                                                                <div class="timeline-item-content" style="font-size: 11px;">Deliver</div>
                                                            </div>
                                                            <div class="timeline-item">
                                                                <div class="timeline-item-marker">
                                                                    <div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>
                                                                    <div class="timeline-item-marker-indicator text-grey"><i data-feather="check"></i></div>
                                                                </div>
                                                                <div class="timeline-item-content" style="font-size: 11px;">Checked</div>
                                                            </div>
                                                            <div class="timeline-item">
                                                                <div class="timeline-item-marker">
                                                                    <div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>
                                                                    <div class="timeline-item-marker-indicator text-grey"><i data-feather="check"></i></div>
                                                                </div>
                                                                <div class="timeline-item-content" style="font-size: 11px;">Done</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 border-start">
                                                        <p class="m-0 mb-3" style="font-size: 11px;"><b>Detail Item</b></p>
                                                        <?php for ($i = 0; $i < 4; $i++) { ?>
                                                            <div class="row">
                                                                <div class="col-2 p-2 text-center">
                                                                    <img src="<?= base_url() ?>assets/image/logo/box.png" class="w-100 mx-auto d-block">
                                                                </div>
                                                                <div class="col-5 align-self-center ps-0">
                                                                    <p class="m-0 small" style="font-size:12px ;"><b>Nama Item</b></p>
                                                                    <p class="m-0 small float-start" style="font-size:10px ;">20x</p>
                                                                    <p class="m-0 small float-end" style="font-size:10px ;">Lembar</p>
                                                                </div>
                                                                <div class="col-5 align-self-center">
                                                                    <p class="m-0 small text-end text-grey" style="font-size:12px ;"><i class="fa fa-check"></i> Uncheck</p>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="col-3 border-start text-center">
                                                        <div id="qrcode" style="text-align:center;" class="mt-3 mx-auto d-block w-100"></div>

                                                        <button type="button" class="btn btn-primary btn-sm mt-3" onclick="actionPerSJ()">Pengajuan Barang</button>

                                                    </div>
                                                    <div class="col-1">

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
    var user_id = 135
    var divisi_id = 11
    var data_account = ""


    var qrcode = new QRCode("qrcode", {
        text: "http://jindo.dev.naver.com/collie",
        width: 128,
        height: 128,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });

    $(document).ready(function() {
        $("#qrcode > img").css({
            "margin": "auto"
        });
        detailSJ()
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
                // actionPerSJ()
            }
        })
    })

    function actionPerSJ() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md');
        var html_header = '';
        html_header += '<h5 class="modal-title">SJ #12345</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small p-5 pt-2">'
        html_body += '<div class="row">'
        html_body += '<p class="m-0 mb-2 small"><b>Action</b></p>'
        for (let i = 0; i < 3; i++) {
            html_body += '<div class="card shadow-none mb-1 small">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-2 border-end">'
            html_body += '<input class="form-check-input data_account" type="radio" name="data_account" id="radioAccount' + i + '" value="">'
            html_body += '</div>'
            html_body += '<div class="col-10">'
            html_body += '<label class="form-check-label" for="radioAccount' + i + '">'
            html_body += 'Barang Kurang'
            html_body += '</label>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<p class="m-0 mb-2 mt-2 small"><b>Jumlah Kekurangan</b></p>'
        for ($i = 0; $i < 4; $i++) {
            html_body += '<div class="row">'
            html_body += '<div class="col-2 p-2 text-center">'
            html_body += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-75 mx-auto d-block">'
            html_body += '</div>'
            html_body += '<div class="col-4 align-self-center ps-0">'
            html_body += '<p class="m-0 small" style="font-size:12px ;"><b>Nama Item</b> <i class="fa fa-check text-grey"></i></p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center p-0">'
            html_body += '<input type="text" name="" class="form-control form-control-sm p-1 nominal" value="" id="nominalPembayaran">'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center text-start">'
            html_body += '<select name="" class="form-control select2-single form-control-sm w-100 " style="border:0" data-live-search="true" required="required">'
            html_body += '<option value="">Lembar</option>'
            html_body += '</select>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<div class="mt-3 text-center">'
        html_body += '<button class="btn btn-success w-100">Pengajuan Baru</button>'
        html_body += '<a class="small mt-1 text-grey" style="cursor:pointer;">Diterima saja</a>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.nominal').number(true);

        $('#modalFooter').addClass('d-none')
    }

    function detailSJ() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">SJ #12345</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small p-5 pt-2">'
        html_body += '<div class="row">'
        html_body += '<p class="m-0 p-0 small">Surat Jalan <b>#123456</b></p>'
        html_body += '<p class="m-0 p-0 mb-2 small">Supplier <b>PT BERCA KAWAN SEJATI</b></p>'
        html_body += '<div class="card shadow-sm">'
        html_body += '<div class="card-body p-2">'
        for (let i = 0; i < 20; i++) {
            html_body += '<div class="row">'
            html_body += '<div class="col-3 p-2 text-center">'
            html_body += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-50 mx-auto d-block">'
            html_body += '</div>'
            html_body += '<div class="col-5 align-self-center ps-0">'
            html_body += '<p class="m-0 small" style="font-size:12px ;"><b>Nama Item</b></p>'
            html_body += '<p class="m-0 small float-start" style="font-size:10px ;">20x</p>'
            html_body += '<p class="m-0 small float-end" style="font-size:10px ;">Lembar</p>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = ""
        html_footer += '<button type="button" class="btn btn-success w-100" id="btnSimpanPO"><i class="fa fa-check me-2"></i> Checked</button>'
        html_footer += '<span class="small mx-auto d-block text-danger" style="cursor:pointer;font-size:12px;">Pembatalan Surat Jalan</span>'
        $('#modalFooter').html(html_footer);
        $('#modalFooter').removeClass('d-none')
    }
</script>