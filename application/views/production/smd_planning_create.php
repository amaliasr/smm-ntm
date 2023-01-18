<style>
    html {
        scroll-behavior: smooth;
    }

    @-webkit-keyframes fadeAnimation {
        0% {
            opacity: 0;
        }

        25% {
            opacity: 0.25;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
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

    .vertical-text {
        writing-mode: vertical-rl;
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        vertical-align: middle;
        display: inline-block;
    }

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FEC868;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .top-25 {
        top: 25% !important;
    }

    .start-25 {
        left: 25% !important;
    }

    .start-10 {
        left: 10% !important;
    }

    .w-35 {
        width: 35% !important;
    }

    .bd-callout-0 {
        border-left-color: #9b5fe0;
        border-left-width: 10px;
    }

    .bd-callout-1 {
        border-left-color: #16a4d8;
        border-left-width: 10px;
    }

    .bd-callout-2 {
        border-left-color: #60dbe8;
        border-left-width: 10px;
    }

    .bd-callout-3 {
        border-left-color: #8bd346;
        border-left-width: 10px;
    }

    .bd-callout-4 {
        border-left-color: #efdf48;
        border-left-width: 10px;
    }

    .bd-callout-5 {
        border-left-color: #f9a52c;
        border-left-width: 10px;
    }

    .bd-callout-6 {
        border-left-color: #d64e12;
        border-left-width: 10px;
    }

    .bg-callout-0 {
        background-color: #9b5fe0;
        opacity: 0.5;
    }

    .bg-callout-1 {
        background-color: #16a4d8;
        opacity: 0.5;
    }

    .bg-callout-2 {
        background-color: #60dbe8;
        opacity: 0.5;
    }

    .bg-callout-3 {
        background-color: #8bd346;
        opacity: 0.5;
    }

    .bg-callout-4 {
        background-color: #efdf48;
        opacity: 0.5;
    }

    .bg-callout-5 {
        background-color: #f9a52c;
        opacity: 0.5;
    }

    .bg-callout-6 {
        background-color: #d64e12;
        opacity: 0.5;
    }

    .table {
        border-color: #808080 !important;
    }

    .bg-dark-grey {
        background-color: #808080;
        color: while;
    }

    .text-black {
        color: black;
    }


    .card-daily {
        transition: transform 0.2s ease;
    }

    .card-daily :hover {
        transform: scale(1.1);
    }

    .fixed-right {
        position: fixed;
        right: 0;
        width: 120px;
        z-index: 1030;
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
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            Create SMD Planning
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
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
                    <div class="col-12 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <!-- side count -->
                                    <div class="fixed-right">
                                        <div class="card shadow-sm d-none" id="targetPane">
                                            <div class="card-body p-4 pt-3 pb-1">
                                                <div class="row p-0">
                                                    <div class="col-12 text-center p-0 pb-2">
                                                        <p class="m-0 text-orange" style="font-size: 14px;"><b>TARGET</b></p>
                                                    </div>
                                                    <div class="col-12 p-0 border-top text-center pb-2 pt-2">
                                                        <p class="m-0" style="font-size: 9px;">ABLF 20</p>
                                                        <p class="m-0" style="font-size: 9px;"></p>
                                                        <p class="m-0" style="font-size: 11px;"><b>200 / 200</b></p>
                                                    </div>
                                                    <div class="col-12 p-0 border-top text-center pb-2 pt-2">
                                                        <p class="m-0" style="font-size: 8px;">ABF 20</p>
                                                        <p class="m-0" style="font-size: 11px;"><b>200 / 200</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center p-2 bg-white">

                                                <button type="button" class="btn btn-success p-2 mb-1 w-100" style="font-size: 11px;"><i class="fa fa-save me-1"></i>Simpan</button>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- side count -->
                                    <div class="col-12" id="tampilDetailPembayaran">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="changeTab('skm')">SKM
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                            </span>
                                                        </button>
                                                        <button style="width: 100px;" class="p-3 nav-link position-relative" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="changeTab('skt')">SKT
                                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                            </span>
                                                        </button>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card shadow-none mb-4 mt-4 small position-relative">
                                                                <h3><span class="position-absolute top-0 start-10 translate-middle badge  bg-primary">Main Planning </span></h3>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Date Range</b></p>
                                                                            <input type="text" class="form-control form-control-sm litepicker mb-2" required="required" id="dateRange" disabled>
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Target Produksi</b> (Optional)</p>
                                                                            <div id="createTargetProduksi">
                                                                            </div>
                                                                            <button type="button" class="btn btn-outline-success btn-sm small w-100 p-3" onclick="targetProduksi()"><i class="fa fa-plus me-2"></i> Target Produksi Baru</button>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <p class="m-0 mb-2" style="font-size: 12px;"><b>Preview</b></p>
                                                                            <div class="card shadow-none">
                                                                                <div class="card-body h-100">
                                                                                    <div class="row d-flex align-items-center h-100">
                                                                                        <div class="col text-center">
                                                                                            <i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat membuka Preview</i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card shadow-none mb-4 small position-relative">
                                                                <h3><span class="position-absolute top-0 start-10 translate-middle badge  bg-primary">Daily Planning </span></h3>
                                                                <div class="card-body">
                                                                    <div>
                                                                        <h5 class="mt-3" id="conveying-meaning-to-assistive-technologies">Create Daily of Plan Production</h5>
                                                                        <p class="mb-3" style="font-size: 11px;">Setelah mengisi Date Range pada Main Planning, maka akan otomatis membuat tabel Planning per hari nya. Target Produksi dapat anda isi jika terdapat target untuk memudahkan pengisian target produksi ditiap harinya. Anda dapat melihat Target nya pada panel sebelah kanan</p>
                                                                    </div>
                                                                    <div id="dataDailyPlanning">
                                                                    </div>

                                                                    <button type="button" class="btn btn-success float-end"><i class="fa fa-save me-2"></i> Simpan SKM</button>
                                                                    <button type="button" class="btn btn-outline-success float-end me-2"><i class="fa fa-save me-2"></i> Simpan Semua</button>

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
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"></script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var data_user = ""
    var data_master = ""
    var data_skm = {}
    var data_skt = {}
    var jenis_produksi = "skm"

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

    function getDateFromRange(startDate, endDate) {
        const dates = []
        let currentDate = startDate
        const addDays = function(days) {
            const date = new Date(this.valueOf())
            date.setDate(date.getDate() + days)
            return date
        }
        while (currentDate <= endDate) {
            dates.push(currentDate)
            currentDate = addDays.call(currentDate, 1)
        }
        return dates
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })
    var position = $('#tampilDetailPembayaran').offset().top;

    $(document).scroll(function() {
        fadeOfTarget()
    });

    function fadeOfTarget() {
        var y = $(this).scrollTop();
        if (y > position) {
            $('#targetPane').fadeIn().removeClass('d-none')
        } else {
            $('#targetPane').fadeOut().addClass('d-none')
        }
        return false
    }

    function changeTab(stat) {
        jenis_produksi = stat
        if (jenis_produksi == "skm") {
            if (data_skm['dateStart'] == undefined) {
                clearForm()
            }
        } else {
            if (data_skt['dateStart'] == undefined) {
                clearForm()
            }
        }
        getDateRange()
    }

    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    $(document).ready(function() {
        clearForm()
        fadeOfTarget()
        getDateRange()
    })

    function clearForm() {
        $('#dateRange').val('')
        $('#createTargetProduksi').empty()
        $('#dataDailyPlanning').html('<div class="row d-flex align-items-center" style="height: 200px;"><div class="col text-center p-5"><i class="small">Isi Terlebih Dahulu <b>Main Planning</b> agar dapat mengisi Daily Planning</i></div></div>')
    }

    function getDateRange() {
        $('#dateRange').val('')
        var dateStart = ""
        var dateEnd = ""
        if (jenis_produksi == 'skm') {
            if (data_skm['dateEnd'] != undefined && data_skm['dateStart'] != undefined) {
                dateStart = data_skm['dateStart']
                dateEnd = data_skm['dateEnd']
                createDailyPlanning(dateStart, dateEnd)
            }
        } else {
            if (data_skt['dateEnd'] != undefined && data_skt['dateStart'] != undefined) {
                dateStart = data_skt['dateStart']
                dateEnd = data_skt['dateEnd']
                createDailyPlanning(dateStart, dateEnd)
            }
        }
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: dateStart,
            endDate: dateEnd,
            format: "DD MMMM YYYY",
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    dateStart = date1['dateInstance']
                    dateEnd = date2['dateInstance']
                    if (jenis_produksi == 'skm') {
                        data_skm['dateStart'] = dateStart
                        data_skm['dateEnd'] = dateEnd
                    } else {
                        data_skt['dateStart'] = dateStart
                        data_skt['dateEnd'] = dateEnd
                    }
                    // $('#dateRange').val(formatInternationalDate(dateStart) + ' - ' + formatInternationalDate(dateEnd))
                    createDailyPlanning(dateStart, dateEnd)
                });
            },
        })
        getData()
    }

    function getData() {
        if (data_user == "") {
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
                    master()
                }
            })
        } else {
            master()
        }
    }

    function master() {
        if (data_master == "") {
            $.ajax({
                url: "<?= api_produksi('loadPageProductionPlanCreate'); ?>",
                method: "GET",
                dataType: 'JSON',
                error: function(xhr) {},
                beforeSend: function() {},
                success: function(response) {
                    $('.form-control').removeAttr('disabled')
                    data_master = response['data']
                }
            })
        }
    }

    function createDailyPlanning(dateStart, dateEnd) {
        $('#dataDailyPlanning').empty()
        var html = ""
        var date = getDateFromRange(dateStart, dateEnd)
        var a = 0
        date.forEach(function(dates) {
            html += '<div class="card shadow-sm bd-callout-' + a + ' mb-5 ">'
            html += '<div class="card-body">'
            html += '<div class="pb-3">'
            html += '<h4>'
            html += '<p class="m-0 mb-2"><b><i class="fa fa-calendar-o me-2"></i> ' + formatDateIndonesia(dates) + '</b></p>'
            html += '</h4>'
            html += '</div>'
            html += '<div class="table-responsive">'
            html += '<table class="table table-bordered table-hover table-sm mt-3">'
            html += '<thead>'
            html += '<tr class="bg-grey text-dark">'
            html += '<th class="p-2">Mesin</th>'
            html += '<th class="p-2">Satuan</th>'
            var jumlah = (data_master[jenis_produksi]['product'].length + 3)
            $.each(data_master[jenis_produksi]['product'], function(key, value) {
                html += '<th class="p-2">' + value['code'] + '</th>'
            })
            html += '<th class="p-2">TOTAL</th>'
            html += '</tr>'
            html += '</thead>'
            html += '<tbody>'
            $.each(data_master[jenis_produksi]['machine'], function(key, value) {
                html += '<tr class="bg-callout-' + a + ' text-black">'
                html += '<td colspan="' + jumlah + '" class="p-2"><b>' + value['type_name'] + '</b></td>'
                html += '</tr>'
                $.each(value['machine'], function(keys, values) {
                    html += '<tr>'
                    html += '<td>' + values['code'] + '</td>'
                    html += '<td>' + values['unit_name'] + '</td>'
                    $.each(data_master[jenis_produksi]['product'], function(keys2, values2) {
                        if (jenis_produksi == 'skm') {
                            var data = data_skm
                        } else {
                            var data = data_skt
                        }
                        var obj = ""
                        // console.log(data['detail'])
                        if (data['detail'] != undefined) {
                            // console.log(values['id'], formatDate(dates), values2['id'])
                            obj = data['detail'].find((value3, key3) => {
                                if (value3.mesin === values['id'] && value3.tanggal === formatDate(dates) && value3.produk === parseInt(values2['id'])) return true
                            })
                            if (obj != undefined) {
                                obj = obj['jumlah']
                            } else {
                                obj = ""
                            }
                        }
                        // console.log(obj)
                        html += '<td class="p-0"><input class="form-control form-control-sm nominal jumlahPlanning" style="border-radius: 0px;border:none;box-shadow: none;font-size:14px;font-weight:bold;text-align:right;" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="' + values2['code'] + ' for ' + values['code'] + '" data-produk="' + values2['id'] + '" data-mesin="' + values['id'] + '" data-tanggal="' + formatDate(dates) + '" id="jumlahPlanning' + values2['id'] + values['id'] + formatDate(dates) + '" value="' + obj + '"></td>'
                    })
                    html += '<td class="align-self-center" style="font-size:14px;font-weight:bold;text-align:right;"></td>'
                    html += '</tr>'
                })
            })
            html += '</tbody>'
            html += '</table>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            a++
            if (a == 7) {
                a = 0
            }
        })
        $('#dataDailyPlanning').html(html)
        $('.nominal').number(true);
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    }
    $(document).on('keyup', '.jumlahPlanning', function(e) {
        simpanJumlahPlanning()
    })

    function simpanJumlahPlanning() {
        var obj = []
        var jumlah = $('.jumlahPlanning').map(function() {
            return $(this).val();
        }).get();
        var produk = $('.jumlahPlanning').map(function() {
            return $(this).data('produk');
        }).get();
        var mesin = $('.jumlahPlanning').map(function() {
            return $(this).data('mesin');
        }).get();
        var tanggal = $('.jumlahPlanning').map(function() {
            return $(this).data('tanggal');
        }).get();
        for (let i = 0; i < jumlah.length; i++) {
            if (jumlah[i] != "") {
                obj.push({
                    'jumlah': jumlah[i],
                    'produk': produk[i],
                    'mesin': mesin[i],
                    'tanggal': tanggal[i],
                })
            }
        }
        if (jenis_produksi == 'skm') {
            data_skm['detail'] = obj
        } else {
            data_skt['detail'] = obj
        }
    }

    var noTarget = 0;

    function targetProduksi() {
        var html = ""
        html += '<div class="row mb-2" id="fieldTarget' + noTarget + '">'
        html += '<div class="col-4">'
        html += '<select id="produkTarget' + noTarget + '" class="form-control form-control-sm produkTarget" required="required">'
        $.each(data_master[jenis_produksi]['product'], function(key, value) {
            html += '<option value="' + value['code'] + '">' + value['code'] + '</option>'
        })
        html += '</select>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<input type="text" id="jumlahTarget' + noTarget + '" class="form-control form-control-sm jumlahTarget">'
        html += '</div>'
        html += '<div class="col-3 align-self-center">Box</div>'
        html += '<div class="col-2 text-end">'
        html += '<button type="button" class="btn btn-danger btn-sm" onclick="removeFieldTarget(' + noTarget + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#createTargetProduksi').append(html)
        noTarget++
    }

    function removeFieldTarget(no) {
        $('#fieldTarget' + no).remove()
    }
</script>