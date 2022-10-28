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
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b>90%</b></h1>
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
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b>11</b></h1>
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
                                                <li><a class="dropdown-item" href="#">Supplier <i class="ms-2 fa fa-check text-success"></i></a></li>
                                                <li><a class="dropdown-item" href="#">PO</a></li>
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
                                <div class="mt-2">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <div class="card shadow-none mb-1 p-1 card-hoper">
                                            <div class="card-body p-2">
                                                <div class="row">
                                                    <div class="col-auto align-self-center">
                                                        <div id="profileImage"><i class="fa fa-truck"></i></div>
                                                    </div>
                                                    <div class="col-auto align-self-center">
                                                        <a href="#">
                                                            <p class="m-0 small fw-bold">DP PO #298012</p>
                                                        </a>
                                                        <p class="m-0 small lh-1" style="font-size: 11px;">Supplier BERCA KAWAN SEJATI</p>
                                                        <p class="m-0 mt-3 small lh-1 text-grey" style="font-size: 11px;">Due 25 Oktober 2022</p>
                                                    </div>
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
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = 135
    var divisi_id = 11

    $(document).ready(function() {
        tampilDetailPembayaran()
        modalSupplierpayment()
        // $.ajax({
        //     url: "<?= api_url('Api_Warehouse/getUser'); ?>",
        //     method: "GET",
        //     dataType: 'JSON',
        //     data: {
        //         id: user_id
        //     },
        //     error: function(xhr) {},
        //     beforeSend: function() {},
        //     success: function(response) {
        //         data_user = response['data']
        //         getData()
        //     }
        // })
    })

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                tampilDetailPembayaran()
            }
        })
    }

    function tampilDetailPembayaran() {
        var html = ""
        html += '<div class="card shadow-sm mb-2 w-100 card-hoper">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-11 align-self-center">'
        html += '<b style="cursor: pointer;" onclick="modalSupplierpayment()">PT BERCA KAWAN SEJATI</b>'
        html += '<p class="m-0 lh-sm small"><span class="badge bg-danger fw-bold text-white">20 PO</span> belum terselesaikan</p>'
        html += '<p class="m-0 mt-5 small" style="font-size:11px ;"><i class="fa fa-warning text-warning"></i> 2 Transaksi Mendekati Masa Tenggang</p>'
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
        // po
        html += '<div class="card shadow-sm mb-2 w-100 card-hoper">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-11 align-self-center">'
        html += '<p class="m-0 text-grey small" style="font-size:11px ;">Created at 27-10-2022</p>'
        html += '<b style="cursor: pointer;">PO 022/SMM-FAT/PR/2022'
        html += '</b>'
        html += '<p class="m-0 lh-sm small"><i class="fa fa-money text-success"></i> 500,000 / 1,000,000</p>'
        html += '<p class="m-0 mt-4 small" style="font-size:11px ;"><i class="fa fa-clock-o text-warning"></i> Due on 30 December 2022</p>'
        html += '<p class="m-0">'
        html += '<span class="badge bg-light me-2" style="font-size:11px ;"><i class="fa fa-check text-white"></i> DP</span>'
        html += '<span class="badge bg-light me-2" style="font-size:11px ;"><i class="fa fa-check text-white"></i> Lunas</span>'
        html += '</p>'
        html += '</div>'
        html += '<div class="col-1 align-self-center">'
        html += '<button class="btn btn-sm float-end" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
        html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
        html += '<a class="dropdown-item"><i class="fa fa-plus me-2"></i> Pembayaran</a>'
        html += '<a class="dropdown-item"><i class="fa fa-print me-2"></i> Cetak Invoice</a>'
        // html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#tampilDetailPembayaran').html(html)
    }

    function modalSupplierpayment() {
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
        html_body += '<div class="page-header-icon"><i class="fa fa-truck"></i></div>'
        html_body += 'Payments'
        html_body += '</h1>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</header>'
        html_body += '<div class="container-xl px-4 mt-n10">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 pb-5">'
        html_body += '</div>'

        html_body += '<div class="col-12 col-sm-12 col-md-6">'

        html_body += '<div class="card mb-1 w-100 shadow-sm card-hoper">'
        html_body += '<div class="card-body p-3">'
        html_body += '<div class="row">'
        html_body += '<div class="col-10">'
        html_body += '<p class="m-0 mb-3"><b>PO #022/SMM-FAT/PR/2022</b></p>'
        html_body += '<p class="m-0 float-start" style="font-size:11px;">500,000 / 1,000,000</p>'
        html_body += '<p class="m-0 float-end" style="font-size:11px;">50%</p>'
        html_body += '<br>'
        html_body += '<div class="progress" style="height: 5px;">'
        html_body += '<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>'
        html_body += '</div>'
        html_body += '<div class="mt-4">'
        html_body += '<b style="font-size:11px;">History Pembayaran</b>'
        html_body += '<table class="w-100" style="font-size:11px;">'
        html_body += '<tr>'
        html_body += '<td class="dots-lead">Pembayaran DP</td>'
        html_body += '<td class="text-end">Rp. 500,000</td>'
        html_body += '</tr>'
        html_body += '</table>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-2 align-self-center text-center">'
        html_body += '<i class="fa fa-angle-down fa-2x" style="cursor:pointer;"></i>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#modalBody').addClass('p-0')

        $('#modalFooter').addClass('d-none');
    }
</script>