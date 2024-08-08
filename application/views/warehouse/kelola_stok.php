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
</style>
<style>
    .select2-selection {
        border: 0px white !important;
    }

    .select2-selection__arrow b {
        display: none !important;
    }

    ul.select2-results__options li {
        font-size: 12px;
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
                        <div class="row">
                            <div class="col-auto">
                                <div class="input-group w-100">
                                    <span class="input-group-text" style="border:none;background-color: transparent;color:white;cursor:pointer;" id="mengurangiHari">
                                        <i class="fa fa-chevron-left"></i>
                                    </span>
                                    <input type="text" name="" id="inputTanggalCurrent" class="form-control pe-0 datepicker" value="<?= date('Y-m-d') ?>" style="background-color:transparent;text-align:center;color:white;border-radius:20px;">
                                    <span class="input-group-text" style="border:none;background-color: transparent;color:white;cursor:pointer;" id="menambahHari">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
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
                                        <h1 class="m-0 mt-1 mb-1 fw-bold">
                                            <b id="jumlahIN">

                                            </b>
                                        </h1>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="m-0" style="font-size: 10px;">Transaction</p>
                                        <p class="m-0" style="font-size: 10px;">At <span class="dateToday"><?= date('d/m/Y') ?></span></p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-primary btn-sm p-1" onclick="detail('IN')">
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
                                        <h1 class="m-0 mt-1 mb-1 fw-bold">
                                            <b id="jumlahOUT">
                                            </b>
                                        </h1>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="m-0" style="font-size: 10px;">Transaction</p>
                                        <p class="m-0" style="font-size: 10px;">At <span class="dateToday"><?= date('d/m/Y') ?></span></p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-primary btn-sm p-1" onclick="detail('OUT')">
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
                        Request <span class="dateToday"><?= date('d/m/Y') ?></span>
                        <!-- <div class="row">
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
                        </div> -->
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4">
                                <select id="inputSelectChart" class="form-control form-control-sm mb-2" required="required">
                                    <option value="IN">IN</option>
                                    <option value="OUT">OUT</option>
                                </select>
                            </div>
                        </div>
                        <div id="initialPieChart">
                            <div class="chart-pie">
                                <canvas id="myPieChart" width="100%" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Material <span class="dateToday"><?= date('d/m/Y') ?></span>
                        <!-- <div class="row">
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
                        </div> -->
                    </div>
                    <div class="card-body overflow-auto" style="height: 300px;">
                        <div class="container" id="tampilMaterialToday">
                            <!-- <div class="row">
                                <div class="col-12 h-100 text-center">
                                    <p class="align-self-center">text</p>
                                </div>
                            </div> -->
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
                        <div class="row" id="tampilWarehouse">
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
    function formatDateSlash(orginaldate) {
        var date = new Date(orginaldate);
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }
        var date = day + "/" + month + "/" + year;
        return date;
    }

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
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
            maxViewMode: 2 //year
        });
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {
                var html = ""
                html += '<div class="d-flex justify-content-center h-100 align-self-center">'
                html += '<div class="spinner-border m-5" style="width: 3rem; height: 3rem;" role="status">'
                html += '<span class="visually-hidden">Loading...</span>'
                html += '</div>'
                html += '</div>'
                $('#tampilMaterialToday').html(html)
                var html_stock = ""
                html_stock += '<div class="spinner-grow text-light" role="status">'
                html_stock += '<span class="visually-hidden">Loading...</span>'
                html_stock += '</div>'
                $('#jumlahIN').html(html_stock)
                $('#jumlahOUT').html(html_stock)
            },
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
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {},
            success: function(response) {
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                data_supplier = response['data']['supplier'];
                data_gudang = response['data']['gudang'];
                getDataStok()
            }
        })
    }

    // var tanggalCurrent = currentDate()
    var tanggalCurrent = currentDate()

    $(document).on('change', '#inputTanggalCurrent', function(e) {
        changeDateCurrent()
    })
    $(document).on('click', '#mengurangiHari', function(e) {
        tanggalCurrent = formatDate(minDays(tanggalCurrent, 1))
        $('#inputTanggalCurrent').val(tanggalCurrent)
        getDataStok()
    })
    $(document).on('click', '#menambahHari', function(e) {
        tanggalCurrent = formatDate(addDays(tanggalCurrent, 1))
        $('#inputTanggalCurrent').val(tanggalCurrent)
        getDataStok()
    })

    function changeDateCurrent() {
        tanggalCurrent = $('#inputTanggalCurrent').val()
        getDataStok()
    }

    function addDays(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    function minDays(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() - days);
        return result;
    }
    var detail_in = ""
    var detail_out = ""
    var choosen_pie = 'IN'

    function getDataStok() {
        $('.dateToday').html(formatDateSlash(tanggalCurrent))
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataStok'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                tanggal: tanggalCurrent,
            },
            error: function(xhr) {
                var html = ""
                $('#tampilMaterialToday').html(html)
                $('#jumlahIN').html(html)
                $('#jumlahOUT').html(html)
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {},
            success: function(response) {
                $('#tampilMaterialToday').empty()
                $('#jumlahIN').empty()
                $('#jumlahOUT').empty()
                data_stok = response['data']
                data_all_stok = [];
                if (data_stok != undefined) {
                    var jumlah_in = response['dataCount'].find((value, key) => {
                        if (value.aksi === 'IN') return true
                    })
                    var jumlah_out = response['dataCount'].find((value, key) => {
                        if (value.aksi === 'OUT') return true
                    })
                    if (jumlah_in == undefined) {
                        $('#jumlahIN').html('0 x')
                    } else {
                        $('#jumlahIN').html(jumlah_in['jumlah'] + ' x')
                    }
                    if (jumlah_out == undefined) {
                        $('#jumlahOUT').html('0 x')
                    } else {
                        $('#jumlahOUT').html(jumlah_out['jumlah'] + ' x')
                    }
                    for (let i = 0; i < data_stok.length; i++) {
                        for (let j = 0; j < JSON.parse(data_stok[i]['data_item']).length; j++) {
                            var array = JSON.parse(data_stok[i]['data_item'])[j]
                            array['tanggal'] = data_stok[i]['tanggal_kirim']
                            array['subjek_name'] = data_stok[i]['subjek_name']
                            array['jenis'] = data_stok[i]['jenis']
                            data_all_stok.push(array)
                        }
                    }
                    detail_in = data_all_stok.filter((value, key) => {
                        if (value.ket === 'IN') return true
                    })
                    detail_out = data_all_stok.filter((value, key) => {
                        if (value.ket === 'OUT') return true
                    })
                } else {
                    detail_in = ""
                    detail_out = ""
                    $('#jumlahIN').html('0 x')
                    $('#jumlahOUT').html('0 x')
                }
                baganRequestToday(choosen_pie)
            }
        })
    }
    $(document).on('change', '#inputSelectChart', function(e) {
        choosen_pie = $(this).val()
        baganRequestToday(choosen_pie)
    })

    function baganRequestToday(status) {
        // Pie Chart Example
        if (status == 'IN') {
            var detail = detail_in
        } else {
            var detail = detail_out
        }
        var data = []
        if (detail != "") {
            data.push({
                'Gudang Others': detail.filter((value, key) => {
                    if (value.nama_lawan === 'Gudang Others') return true
                }).length,
                'Gudang Adjustment': detail.filter((value, key) => {
                    if (value.nama_lawan === 'Gudang Adjustment') return true
                }).length,
                'Gudang Bawah': detail.filter((value, key) => {
                    if (value.nama_lawan === 'Gudang Bawah') return true
                }).length,
                'Supplier': detail.filter((value, key) => {
                    if (value.subjek_lawan === 'SUPPLIER') return true
                }).length,
            })
        }
        // console.log(data)
        $('#initialPieChart').empty()
        $('#initialPieChart').html('<div class="chart-pie"><canvas id="myPieChart" width="100%" height="50"></canvas></div>')
        if (detail != "") {
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: ["Gudang Others", "Gudang Adjustment", "Gudang Bawah", "Supplier"],
                    datasets: [{
                        data: [data[0]['Gudang Others'], data[0]['Gudang Adjustment'], data[0]['Gudang Bawah'], data[0]['Supplier']],
                        backgroundColor: [
                            "rgb(71, 33, 131, 1)",
                            "rgb(75, 86, 210, 1)",
                            "rgb(130, 195, 236, 1)",
                            "rgb(241, 246, 245, 1)"
                        ],
                        hoverBackgroundColor: [
                            "rgb(71, 33, 131, 0.9)",
                            "rgb(75, 86, 210, 0.9)",
                            "rgb(130, 195, 236, 0.9)",
                            "rgb(241, 246, 245, 0.9)"
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
        }
        tampilMaterialToday()
    }

    function tampilMaterialToday() {
        var html = ""
        $.each(data_all_stok, function(key, value) {
            html += '<div class="row" id="card_searchMATERIAL' + key + '">'
            html += '<div class="col-5 fw-bold small"><p class="m-0 fw-bold text_search" data-id="MATERIAL' + key + '">' + value['item_name'] + '</p><span class="text-primary text_search" style="font-size:10px;" data-id="MATERIAL' + key + '">#' + value['jenis'] + '</span></div>'
            html += '<div class="col-5 align-self-center">'
            html += '<div class="row">'
            html += '<div class="col-auto">'
            if (value['ket'] == 'OUT') {
                html += '<i class="fa fa-arrow-up text-danger fa-2x"></i>'
            } else {
                html += '<i class="fa fa-arrow-down text-success fa-2x"></i>'
            }
            html += '</div>'
            html += '<div class="col-auto align-self-center ps-0">'
            if (value['nama_lawan'] == null) {
                var lawan = value['subjek_lawan']
            } else {
                var lawan = value['nama_lawan']
            }
            html += '<p class="m-0 text-wrap text_search" data-id="MATERIAL' + key + '" style="font-size: 12px;"><b>' + lawan + '</b></p>'
            html += '<p class="m-0" style="font-size: 10px;">' + value['tanggal'] + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-2 text-end">' + value['jumlah'] + ' ' + value['satuan_name'] + '</div>'
            html += '<hr class="mt-2">'
            html += '</div>'
        })
        $('#tampilMaterialToday').html(html)
        getStokPerItem()
    }

    function getStokPerItem() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataStokItem'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                var html = ""
                $.each(data, function(key, value) {
                    html += '<div class="col-6 col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-3" id="card_searchITEM' + key + '">'
                    html += '<div class="card shadow-sm w-100 h-100 p-1">'
                    html += '<div class="card-body text-center">'
                    html += '<small class="fw-bold text_search" data-id="ITEM' + key + '">' + value['name'] + '</small>'
                    html += '<h2 class="text-primary m-0 p-0">' + number_format(value['jumlah']) + '</h2>'
                    html += '<small class="m-0 p-0">' + value['satuan_name'] + '</small>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                })
                $('#tampilWarehouse').html(html)
            }
        })
    }

    function formTransaksiStok() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Transaksi Stok</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 col-md-7 small">'
        html_body += '<p class="m-0 mb-2"><b>Nomor Dokumen :</b></p>'
        html_body += '<input type="text" class="form-control form-control-sm p-1" id="nomorDokumen" style="border:none;">'
        html_body += '<hr class="m-0 mb-3">'

        html_body += '<p class="m-0 mb-2"><b>Choose Item :</b></p>'
        html_body += '<div id="listFormItem">'
        html_body += '</div>'
        html_body += '<button class="btn btn-sm bg-ungu text-white float-end mt-2" onclick="addItem()">Tambah Item<i class="fa fa-plus ms-2"></i></button>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-5 small">'

        html_body += '<p class="m-0 mb-2"><b>Customized :</b></p>'
        // tanggal
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">1</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Tanggal</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="text" class="form-control form-control-sm datepicker" id="tanggalStok" style="border:none;" autocomplete="off">'
        html_body += '<hr class="m-0">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // tanggal
        // jenis barang
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">2</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Jenis Barang</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="radio" class="btn-check p-1 text-start radioJenisBarang" name="radioJenisBarang" id="radioJenisBarang1" autocomplete="off" value="IN">'
        html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioJenisBarang1" onclick="tampilKategori(0)">Barang Masuk</label>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="radio" class="btn-check p-1 text-start radioJenisBarang" name="radioJenisBarang" id="radioJenisBarang2" autocomplete="off" value="OUT">'
        html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioJenisBarang2" onclick="tampilKategori(1)">Barang Keluar</label>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // jenis barang
        // Tag
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">3</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Kategori</b></p>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '<div class="row" id="tampilKategori">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<div class="card shadow-none mt-3">'
        html_body += '<div class="card-body text-center">'
        html_body += '<p class="m-0 mt-5 mb-5" style="font-size:11px;">Pilih <b>Jenis Barang</b> terlebih dahulu</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Tag
        // Gudang
        html_body += '<div class="card shadow-none m-0 w-100 mb-2" id="tampilGudang">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">4</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b id="textTitleGudang">Gudang</b></p>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row" id="tampilGudangRow">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<div class="card shadow-none mt-3">'
        html_body += '<div class="card-body text-center">'
        html_body += '<p class="m-0 mt-5 mb-5" style="font-size:11px;">Pilih <b>Jenis Barang</b> terlebih dahulu</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Gudang
        // supplier
        html_body += '<div class="card shadow-none m-0 w-100 mb-2 d-none" id="tampilSupplier">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">4</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Supplier</b></p>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<select class="form-select form-select-sm w-100 supplierStok" id="supplierStok">'
        html_body += '<option value="" selected disabled>Pilih Supplier</option>'
        $.each(data_supplier, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // supplier
        // Upload Image
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">5</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Upload Dokumen</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input class="form-control form-control-sm" type="file" id="formFile" accept="image/*">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Upload Image
        // Notes
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">6</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Catatan</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<textarea class="form-control form-control-sm w-100" rows="5" id="catatanStok"></textarea>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Notes

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true,
            todayHighlight: true,
        });

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanStok" onclick="doSimpanStok()">Simpan</button>'
        $('#modalFooter').html(html_footer);
        addItem()
    }
    $(document).on('change', '.itemStok', function(e) {
        var key = $(this).data('id')
        $('#satuanStok' + key).empty()
        var id = $(this).val()
        let obj = data_item.find((value, key) => {
            if (value.id == id) return true
        })['data_konversi']
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id == id) return true
        });
        var html_body = ""
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '">' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                html_body += '<option value="' + values['satuan_id'] + '">' + values['satuan_name'] + '</option>'
            })
        }
        $('#satuanStok' + key).html(html_body)
    })

    var numberItem = 0

    function addItem() {
        var html = ""
        html += '<div class="card shadow-none m-0 w-100 mb-2" id="fieldItem' + numberItem + '">'
        html += '<div class="card-body p-3">'

        html += '<div class="row align-self-center mb-2">'

        html += '<div class="col-5">'
        html += '<select style="border:none" class="form-control form-control-sm selectpicker w-100 itemStok" id="itemStok' + numberItem + '" data-id="' + numberItem + '">'
        html += '<option value="" selected disabled>Pilih Item</option>'
        $.each(data_item, function(keys, values) {
            html += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html += '</select>'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-2">'
        html += '<input onkeypress="return event.charCode >= 48" min="1" style="border:none" type="text" name="" class="form-control form-control-sm p-1 nominal jumlahStok" value="" placeholder="Jumlah Stok" id="jumlahStok' + numberItem + '">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-3">'
        html += '<select style="border:none" name="" class="form-control form-control-sm satuanStok" id="satuanStok' + numberItem + '">'
        html += '</select>'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-1">'
        html += '<button class="btn btn-sm btn-outline-danger" onclick="removeFieldItem(' + numberItem + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#listFormItem').append(html)
        $('.nominal').number(true, 2);
        $('#itemStok' + numberItem).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        numberItem++
        return true
    }
    $(document).on('change', '.radioTag', function(e) {
        var value = $('.radioTag:checked').val()
        $('#tampilGudang').removeClass('d-none')
        $('#tampilSupplier').addClass('d-none')
        if (value == 'Terima Supplier' || value == 'Retur Supplier') {
            $('#tampilGudang').addClass('d-none')
            $('#tampilSupplier').removeClass('d-none')
        }
    })

    function tampilKategori(status) {
        // 0 = masuk
        // 1 = keluar
        var name1 = 'Kembali Pinjam'
        var name2 = 'Retur Produksi'
        var name3 = 'Terima Supplier'
        var name4 = 'Adjustment In'
        $('#textTitleGudang').html('Gudang Asal')
        if (status == 1) {
            $('#textTitleGudang').html('Gudang Tujuan')
            name1 = 'Peminjaman'
            name2 = 'Distribusi Produksi'
            name3 = 'Retur Supplier'
            name4 = 'Adjustment Out'
        }
        var html = ""
        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag1" autocomplete="off" value="' + name1 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag1">' + name1 + '</label>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag2" autocomplete="off" value="' + name2 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag2">' + name2 + '</label>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag3" autocomplete="off" value="' + name3 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag3">' + name3 + '</label>'
        html += '</div>'

        html += '<div class="col-12">'
        html += '<hr>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag4" autocomplete="off" value="' + name4 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag4">' + name4 + '</label>'
        html += '</div>'
        $('#tampilKategori').html(html)

        var html_gudang = ""
        $.each(data_gudang, function(keys, values) {
            if (values['name'] != 'Gudang Utama' && values['name'] != 'Gudang Adjustment' && values['id'] != 1) {
                html_gudang += '<div class="col-2 ">'
                html_gudang += '</div>'
                html_gudang += '<div class="col-10 mb-2">'
                html_gudang += '<input type="radio" class="btn-check p-1 text-start radioGudang" name="radioGudang" id="radioGudang' + keys + '" autocomplete="off" value="' + values['id'] + '">'
                html_gudang += '<label class="btn btn-sm btn-outline-primary w-100" for="radioGudang' + keys + '">' + values['name'] + '</label>'
                html_gudang += '</div>'
            }
        })
        $('#tampilGudangRow').html(html_gudang)
        return true
    }

    function removeFieldItem(num) {
        $('#fieldItem' + num).remove()
    }

    function imageProcessing() {
        var image = $('#formFile').get(0).files;
        var file = $('#formFile').prop('files')[0];
        if (file != undefined) {
            var timestamp = Date.now()
            var gambar = [];
            for (let index = 0; index < image.length; index++) {
                if (!(/image/i).test(image[index].type)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File Not an Image',
                        text: 'Please Upload an Image'
                    });
                } else {
                    ImageTools.resize(image[index], {
                        width: 620,
                        height: 620
                    }, function(blob, didItResize) {
                        var isi = [];
                        if (didItResize == true) {
                            gambar.push(blob);
                            isi = blob
                        } else {
                            gambar.push(image[index]);
                            isi = image[index]
                        }
                        arrayImage(gambar, image.length)
                    });
                }
            }
        } else {
            doSimpanStok()
        }
    }

    function arrayImage(image, length) {
        if (image.length == length) {
            doSimpanStok(image[0])
        }
    }

    function doSimpanStok(images = "") {
        Swal.fire({
            text: 'Apakah anda yakin ingin menyimpan data Transaksi Stok ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var item = []
                var id_item = $('.itemStok').map(function() {
                    return $(this).val();
                }).get();
                var qty = $('.jumlahStok').map(function() {
                    return $(this).val();
                }).get();
                var satuan = $('.satuanStok').map(function() {
                    return $(this).val();
                }).get();
                for (let i = 0; i < id_item.length; i++) {
                    item.push({
                        'id_item': id_item[i],
                        'jumlah': qty[i],
                        'id_satuan': satuan[i],
                    })
                }
                var form_data = new FormData();
                var tanggal = $('#tanggalStok').val()
                var no_doc = $('#nomorDokumen').val()
                var jenis_barang = $('.radioJenisBarang:checked').val()
                var kategori = $('.radioTag:checked').val()
                var gudang = $('.radioGudang:checked').val()
                var image = images
                var note = $('#catatanStok').val()
                var supplier = $('#supplierStok').val()
                var type = 'POST'
                var form_data = {
                    'tanggal': tanggal,
                    'no_doc': no_doc,
                    'jenis_barang': jenis_barang,
                    'kategori': kategori,
                    'gudang': gudang,
                    'image': image,
                    'note': note,
                    'item': item,
                    'created_by': user_id,
                    'id_supplier': supplier,
                }
                var button = '#btnClosePO'
                var url = '<?php echo api_url('Api_Warehouse/insertTransaksiStok'); ?>'
                // console.log(form_data)
                kelolaData(form_data, type, url, button)
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
                        text: 'Data Berhasil Tersimpan',
                        icon: 'success',
                    }).then((responses) => {
                        getData()
                        $('#modal').modal('hide')
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

    function detail(keterangan) {
        if (keterangan == 'IN') {
            var data = detail_in
        } else {
            var data = detail_out
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Filter</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container">'
        $.each(data, function(key, value) {
            html_body += '<div class="card shadow-none mb-2 card-hoper">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'
            html_body += '<div class="col-5 fw-bold small"><p class="m-0 fw-bold">' + value['item_name'] + '</p><span class="text-primary" style="font-size:10px;">#' + value['jenis'] + '</span></div>'
            html_body += '<div class="col-5 align-self-center">'
            html_body += '<div class="row">'
            html_body += '<div class="col-auto">'
            if (value['ket'] == 'OUT') {
                html_body += '<i class="fa fa-arrow-up text-danger fa-2x"></i>'
            } else {
                html_body += '<i class="fa fa-arrow-down text-success fa-2x"></i>'
            }
            html_body += '</div>'
            html_body += '<div class="col-auto align-self-center ps-0">'
            if (value['nama_lawan'] == null) {
                var lawan = value['subjek_lawan']
            } else {
                var lawan = value['nama_lawan']
            }
            html_body += '<p class="m-0 text-wrap" style="font-size: 12px;"><b>' + lawan + '</b></p>'
            html_body += '<p class="m-0" style="font-size: 10px;">' + value['tanggal'] + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '<div class="col-2 text-end">' + value['jumlah'] + ' ' + value['satuan_name'] + '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        $('#modalFooter').html(html_footer);
    }
    // search multi
    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    $(document).on('keyup', '#search_nama', function(e) {
        searchingAll()
    })

    function searchingAll(value) {
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
</script>