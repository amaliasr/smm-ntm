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
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-cubes"></i></div>
                            Material Request
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari No. MR" aria-label="Search" id="search_soal">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-outline-light" onclick="formRequest()"><i class="fa fa-plus"></i> <span class="ms-2 d-none d-sm-block">Request</span></button>
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
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-auto col-12 mb-1 p-1">

                                <input type="text" name="" id="input" class="form-control form-control-sm datepicker" placeholder="Tanggal">

                            </div>
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Status</option>
                                    <option value="1">Baru Dimulai</option>
                                    <option value="1">Diterima Warehouse</option>
                                    <option value="1">Telah Disiapkan</option>
                                    <option value="1">Verifikasi Gudang</option>
                                    <option value="1">Diterima SMD</option>
                                    <option value="1">Selesai</option>
                                </select>
                            </div>
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <div class="card w-100 shadow-none mb-2 p-0 position-relative">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        Baru
                                    </span>
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center">
                                            <div class="col">
                                                <small style="font-size: 11px;">Senin, 12 September 2022</small>
                                                <h6 class="m-0 p-0 fw-bold" data-bs-html="true" style="cursor: pointer;" data-bs-toggle="popover" title="FM.SDM-003" data-bs-content="Filter Reg : 45 Tray<br/>Filter DF : 30 Tray" data-bs-placement="bottom">FM.SMD-003</h6>
                                                <span class="fw-bold" style="font-size: 11px;">Status : <i class="text-warning">Telah Disiapkan</i></span>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto">
                                                        <i class="fa fa-check fa-1x text-success"></i>
                                                        <p class="small d-inline">Foreman</p>
                                                    </div>
                                                    <div class="col-12 col-sm-auto">
                                                        <i class="fa fa-check fa-1x text-success"></i>
                                                        <p class="small d-inline">Logistik</p>
                                                    </div>
                                                    <div class="col-12 col-sm-auto text-light">
                                                        <i class="fa fa-check fa-1x"></i>
                                                        <p class="small d-inline">SPV Logistik</p>
                                                    </div>
                                                    <div class="col-12 col-sm-auto text-light">
                                                        <i class="fa fa-check fa-1x"></i>
                                                        <p class="small d-inline">SPV SMD</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-angle-right fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <div class="card w-100 shadow-none mb-2 p-0">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center">
                                            <div class="col">
                                                <small style="font-size: 11px;">Senin, 12 September 2022</small>
                                                <h6 class="m-0 p-0 fw-bold">FM.SMD-003 <span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span></h6>
                                                <span class="fw-bold" style="font-size: 11px;">Status : <i class="text-warning">Selesai</i></span>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto">
                                                        <i class="fa fa-check fa-1x text-success"></i>
                                                        <p class="small d-inline">Foreman</p>
                                                    </div>
                                                    <div class="col-12 col-sm-auto">
                                                        <i class="fa fa-check fa-1x text-success"></i>
                                                        <p class="small d-inline">Logistik</p>
                                                    </div>
                                                    <div class="col-12 col-sm-auto">
                                                        <i class="fa fa-check fa-1x text-success"></i>
                                                        <p class="small d-inline">SPV Logistik</p>
                                                    </div>
                                                    <div class="col-12 col-sm-auto">
                                                        <i class="fa fa-check fa-1x text-success"></i>
                                                        <p class="small d-inline">SPV SMD</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-angle-right fa-3x"></i>
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
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
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
        clearModal();
    })

    $(document).ready(function() {})

    $(document).on('click', "#btnDetail", function() {
        var id = $(this).data('id')
        var url = '<?= base_url() ?>Participant/viewDetailParticipant/' + id
        window.location.href = url
    })

    function formRequest() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Material Request</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-2">No. Dokumen</div>'
        html_body += '<div class="col-8 col-md-10"><span class="fw-bold">FM.SMD-003</span></div>'
        html_body += '<div class="col-4 col-md-2">Tanggal</div>'
        html_body += '<div class="col-8 col-md-10"><span class="fw-bold">13/09/2022</span></div>'
        html_body += '<div class="col-4 col-md-2">Perihal</div>'
        html_body += '<div class="col-8 col-md-10"><span class="fw-bold">Permintaan NTM Maker dan Paker/HLP</span></div>'
        html_body += '<div class="col-12 mt-5">'

        // SKM

        html_body += '<table class="table table-bordered table-hover table-sm">'
        html_body += '<thead>'
        html_body += '<tr>'
        html_body += '<th class="d-none d-md-block">ID MATERIAL</th>'
        html_body += '<th style="width:40%">NAMA BAHAN</th>'
        html_body += '<th>SATUAN</th>'
        html_body += '<th style="width:15%">MK-A</th>'
        html_body += '<th style="width:15%">MK-B</th>'
        html_body += '<th style="width:15%">MK-C</th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody>'
        html_body += '<tr>'
        html_body += '<td class="d-none d-md-block">RM.02-201</td>'
        html_body += '<td class="text-wrap">Filter Reg</td>'
        html_body += '<td class="text-wrap">Tray</td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '</tr>'
        html_body += '<tr>'
        html_body += '<td class="d-none d-md-block">RM.02-203</td>'
        html_body += '<td class="text-wrap">Etiket Armour Black 20 SKM</td>'
        html_body += '<td class="text-wrap">Tray</td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '</tr>'
        html_body += '</tbody>'
        html_body += '</table>'

        html_body += '<table class="table table-bordered table-hover table-sm">'
        html_body += '<thead>'
        html_body += '<tr>'
        html_body += '<th class="d-none d-md-block">ID MATERIAL</th>'
        html_body += '<th style="width:40%">NAMA BAHAN</th>'
        html_body += '<th>SATUAN</th>'
        html_body += '<th style="width:15%">MK-A</th>'
        html_body += '<th style="width:15%">MK-B</th>'
        html_body += '<th style="width:15%">MK-C</th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody>'
        html_body += '<tr>'
        html_body += '<td class="d-none d-md-block">RM.02-201</td>'
        html_body += '<td class="text-wrap">Filter Reg</td>'
        html_body += '<td class="text-wrap">Tray</td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '</tr>'
        html_body += '<tr>'
        html_body += '<td class="d-none d-md-block">RM.02-203</td>'
        html_body += '<td class="text-wrap">Etiket Armour Black 20 SKM</td>'
        html_body += '<td class="text-wrap">Tray</td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '</tr>'
        html_body += '</tbody>'
        html_body += '</table>'

        // SKT
        html_body += '<table class="table table-bordered table-hover table-sm">'
        html_body += '<thead>'
        html_body += '<tr>'
        html_body += '<th class="d-none d-md-block">ID MATERIAL</th>'
        html_body += '<th style="width:40%">NAMA BAHAN</th>'
        html_body += '<th>SATUAN</th>'
        html_body += '<th style="width:15%">Jumlah</th>'
        html_body += '<th style="width:30%">Keterangan</th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody>'
        html_body += '<tr>'
        html_body += '<td class="d-none d-md-block">RM.02-201</td>'
        html_body += '<td class="text-wrap">OPP Luar 12 SKM Armour</td>'
        html_body += '<td class="text-wrap">Tray</td>'
        html_body += '<td><input type="text" name="" id="input" class="form-control form-control-sm p-1" value=""></td>'
        html_body += '<td><textarea class="form-control form-control-sm p-1" style="height:30px;"></textarea></td>'
        html_body += '</tr>'
        html_body += '</tbody>'
        html_body += '</table>'


        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan">Preview</button>'
        $('#modalFooter').html(html_footer);
    }
</script>