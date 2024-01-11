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

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .bg-super-grey {
        background-color: #F7F7F7;
    }

    .is-select-picker {
        background-color: white !important;
        border: 1px solid #c5ccd6 !important;
        text-align: left !important;
    }

    .formFilter {
        border-radius: 20px;
        width: 200px;
        padding-left: 30px;
        padding: 10px;
        padding-right: 45px;
    }

    .is-select-picker {
        border-radius: 20px !important;
        width: 200px !important;
        padding-left: 30px !important;
        padding: 10px !important;
        padding-right: 45px !important;
    }

    .border-radius-20 {
        border-radius: 20px;
    }

    #tableDetail_length,
    #tableDetail_info {
        display: none;
    }

    .dataTables_filter {
        margin-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_paginate {
        float: none;
        text-align: center;
    }

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px !important;
        border: 1px solid #dce0e6 !important;
    }

    .vertical-line {
        border-left: 3px dotted #b2b0b0;
        height: 15px;
        margin: 0 auto;
    }

    .v-zone {
        /* display: flex; */
        padding-left: 20px;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .start-10 {
        left: 10% !important;
    }

    .bd-callout-warning {
        border-left-color: #FF9843 !important;
    }

    .border-lunch {
        border-color: #fce7d7 !important;
    }

    .border-mosque {
        border-color: #d4d6e2 !important;
    }

    .bg-dark-lunch {
        background-color: #F6B17A !important;

    }

    .bg-dark-mosque {
        background-color: #7077A1 !important;

    }

    .bd-callout {
        padding: 1.25rem;
        margin-top: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #e9ecef;
        border-left-width: 0.25rem;
        border-radius: 0.25rem;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


<main class="bg-purples">
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-between mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">Break Time Attendance</h1>
                <p class="m-0 small">Absensi Istirahat untuk Pekerja Giling</p>
            </div>
            <div class="col-auto align-self-center">
                <div class="row">
                    <div class="col-auto text-end">
                        <p class="m-0 small-text fw-bolder"><i>Telah Disimpan Otomatis</i></p>
                        <p class="m-0 super-small-text"><i>Terakhir Simpan 16:29</i></p>
                    </div>
                    <div class="col-auto text-end">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm"><i class="fa fa-eye me-2"></i>View</button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-save me-2"></i>Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 pt-3 text-center">
                                <p class="m-0 small"><span class="fw-bolder">Selasa</span>, 09 Januari 2024</p>
                                <lottie-player style="margin:auto;" src="<?= base_url() ?>assets/json/scan_barcode.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>
                            </div>
                            <div class="col-12">
                                <input class="form-control rounded-pill" style="text-align: center;" tabindex="1" role="dialog" placeholder="ID Pekerja" autofocus>
                                <button class="mt-2 w-100 btn btn-primary rounded-pill"><i class="fa fa-search me-2"></i>Cari</button>
                            </div>
                            <div class="col-12">
                                <div class="bd-callout bd-callout-warning super-small-text">
                                    Pastikan text scanner berada pada isi kolom diatas. Jika scanner sedang dalam masalah, anda dapat mengetikkan ID Pekerja kemudian klik <b>Cari</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-0" id="kerangkaIsi">

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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function notFoundReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function empty(location, text, height = null) {
        if (!height) {
            height = '100%'
        }
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

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
    var current_date = currentDate()
    var master_break = {
        istirahat: 60,
    }

    $(document).ready(function() {
        $('#kerangkaIsi').html(emptyReturn('Anda Belum Melakukan Scanning'))
        loadData()
    })

    function loadData() {
        $.ajax({
            url: "<?= api_produksi('loadPageEmployeeLeavePass'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_user = response['data']
                console.log(data_user)
            }
        })
    }

    function findIDPekerja(eid) {
        var dataFilter = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        kerangkaIsi(dataFilter)
    }

    function kerangkaIsi(data) {
        var html = ''
        html += '<div class="row h-100">'
        html += '<div class="col-6 p-5">'
        html += '<p class="m-0">21098736489</p>'
        html += '<p class="m-0 fw-bolder lh-1" style="font-weight: 900 !important;font-size:40px;">' + data.name.toUpperCase() + '</p>'
        html += '<p class="m-0 fw-bold">Sisa Waktu Istirahat : <span class="fw-bolder text-orange">30</span> Menit</p>'
        html += '<div class="row mt-3">'
        html += '<div class="col-12">'
        html += '<div class="alert alert-danger p-3" role="alert">'
        html += '<div class="row justify-content-between">'
        html += '<div class="col-auto">'
        html += 'Sedang <b>Istirahat</b>'
        html += '<p class="m-0 super-small-text">Dari pukul 09.00</p>'
        html += '</div>'
        html += '<div class="col-auto align-self-center">'
        html += '<button class="btn btn-sm btn-danger">Stop</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="row">'
        html += '<div class="col-6">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center">'
        html += '<p class="m-0 fw-bolder small-text">TOTAL ISTIRAHAT</p>'
        html += '<p class="m-0" style="font-weight: 900 !important;font-size:30px;">62</p>'
        html += '<p class="m-0  lh-1 fw-bolder small-text">Menit</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center">'
        html += '<p class="m-0 fw-bolder small-text">TOTAL IBADAH</p>'
        html += '<p class="m-0" style="font-weight: 900 !important;font-size:30px;">0</p>'
        html += '<p class="m-0  lh-1 fw-bolder small-text">Menit</p>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center">'
        html += '<p class="m-0 fw-bolder small-text">TOTAL SEMUA</p>'
        html += '<p class="m-0" style="font-weight: 900 !important;font-size:30px;">62</p>'
        html += '<p class="m-0  lh-1 fw-bolder small-text">Menit</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center">'
        html += '<p class="m-0 fw-bolder small-text">WAKTU OVERTIME</p>'
        html += '<p class="m-0 text-danger" style="font-weight: 900 !important;font-size:30px;">2</p>'
        html += '<p class="m-0  lh-1 fw-bolder small-text">Menit</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-6 border-start p-5">'
        html += '<p class="m-0 small fw-bolder">Detail Waktu</p>'
        html += '<div class="row mt-2">'

        html += '<div class="col-12">'
        html += '<div class="card shadow-none mb-2 border-mosque">'
        html += '<div class="card-body p-0">'
        html += '<div class="row p-0 m-0 w-100">'
        html += '<div class="col-2 p-3 align-self-center bg-dark-mosque text-center" style="border-bottom-left-radius: 0.35rem;border-top-left-radius: 0.35rem;">'
        html += '<p class="m-0 lh-1 text-white fw-bolder">40</p>'
        html += '<p class="m-0 lh-1 text-white super-small-text">Menit</p>'
        html += '</div>'
        html += '<div class="col p-2 ps-3 align-self-center">'
        html += '<p class="m-0 fw-bolder ">Waktu Ibadah</p>'
        html += '<p class="m-0 fw-bold  super-small-text">12:00 - 13:00</p>'
        html += '</div>'
        html += '<div class="col p-2 pe-3 align-self-center text-end">'
        html += '<i class="text-danger small-text">Overtime</i>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'


        html += '<div class="col-12">'
        html += '<div class="card shadow-none mb-2 border-lunch">'
        html += '<div class="card-body p-0">'
        html += '<div class="row  p-0 m-0 w-100">'
        html += '<div class="col-2 p-3 align-self-center bg-dark-lunch text-center" style="border-bottom-left-radius: 0.35rem;border-top-left-radius: 0.35rem;">'
        html += '<p class="m-0 lh-1 text-white fw-bolder">10</p>'
        html += '<p class="m-0 lh-1 text-white super-small-text">Menit</p>'
        html += '</div>'
        html += '<div class="col p-2 ps-3 align-self-center">'
        html += '<p class="m-0 fw-bolder ">Istirahat</p>'
        html += '<p class="m-0 fw-bold  super-small-text">12:00 - 13:00</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
    }

    function simpanData() {
        machineId = arrayToString($('#selectMachine').map(function() {
            return $(this).val();
        }).get())
        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportResultPersonQuality'); ?>'
        var data = {
            dateStart: date_start,
            dateEnd: date_end,
            machineId: machineId,
        }
        kelolaData(data, type, url, button)
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
            }
        });
    }


    function chooseRest() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Istirahat</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col">'
        html_body += '<div class="card shadow-none border-none pointer h-100" style="border-radius:20px;background-color:#F6B17A">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 text-center">'
        html_body += '<img src="<?= base_url() ?>assets/image/svg/lunch.svg" style="width: 50%">'
        html_body += '<h1 class="m-0 fw-bolder text-white lh-1 mt-5" style="font-weight: 900 !important;font-size:50px;">ISTIRAHAT</h1>'
        html_body += '<h5 class="m-0 fw-bolder text-white lh-1">SISA WAKTU : 45 MENIT</h5>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '<div class="col">'
        html_body += '<div class="card shadow-none border-none pointer h-100" style="border-radius:20px;background-color:#7077A1">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 text-center">'
        html_body += '<img src="<?= base_url() ?>assets/image/svg/mosque.svg" style="width: 50%">'
        html_body += '<h1 class="m-0 fw-bolder text-white mt-5" style="font-weight: 900 !important;font-size:50px;">IBADAH</h1>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body)
        $('#modalFooter').addClass('d-none');
    }

    function stopRest() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Istirahat</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col">'
        html_body += '<div class="card shadow-none border-none pointer h-100" style="border-radius:20px;background-color:#F6B17A">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 text-center">'
        html_body += '<img src="<?= base_url() ?>assets/image/svg/lunch.svg" style="width: 50%">'
        html_body += '<h1 class="m-0 fw-bolder text-white lh-1 mt-5" style="font-weight: 900 !important;font-size:50px;">ISTIRAHAT</h1>'
        html_body += '<h5 class="m-0 fw-bolder text-white lh-1">SISA WAKTU : 45 MENIT</h5>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body)
        $('#modalFooter').addClass('d-none');
    }
</script>