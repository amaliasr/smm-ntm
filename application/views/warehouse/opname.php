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

    .card-hoper:hover {
        background-color: #EDEDED;
    }

    #profileImage {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 29px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .bg-ungu {
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
    }

    .bg-hijau {
        background: rgb(30, 121, 4);
        background: linear-gradient(66deg, rgba(30, 121, 4, 1) 0%, rgba(213, 232, 15, 1) 100%);
    }

    .bg-oren {
        background: rgb(208, 103, 58);
        background: linear-gradient(66deg, rgba(208, 103, 58, 1) 0%, rgba(233, 188, 51, 1) 100%);
    }

    .bg-merah {
        background: rgb(36, 0, 0);
        background: linear-gradient(90deg, rgba(36, 0, 0, 1) 0%, rgba(255, 46, 0, 1) 100%);
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
                            Stock Opname
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
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="formSO()"><i class="me-2 fa fa-plus"></i>Mulai SO</a></li>
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
            <div class="col-lg-8 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-header">
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
                    <div class="card-body">
                        <div class="container" id="tampilStockOpname">
                            <?php for ($i = 0; $i < 20; $i++) { ?>
                                <div class="card mb-2">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div>

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
<!-- <script src="<?= base_url() ?>assets/js/vendor/jquery.validate/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/jquery.validate/additional-methods.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ImageTools.js"></script> -->
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
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var data_gudang = ""
    var data_stok = ""
    var data_all_stok = []
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
            }
        })
    }
</script>