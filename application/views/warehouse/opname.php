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

    .start-75 {
        left: 75% !important;
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

    .text-grey {
        color: #D8D9CF;
    }

    .bg-grey {
        background-color: #D8D9CF;
    }

    .text-dark-grey {
        color: #B2B2B2;
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
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="formMulaiSO()"><i class="me-2 fa fa-plus"></i>Mulai SO</a></li>
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
            <div class="col-lg-12 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-header">
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
                    <div class="card-body">
                        <div class="container" id="tampilStockOpname">

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
        numberParticipant = 0
        last_number = 1
    }

    function randomString(length, chars) {
        var result = '';
        for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
        return result;
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        numberParticipant = 0
        last_number = 1
        data_item = data_item_all
        selected_item = []
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    function removeItemArray(arr, item) {
        return arr.filter(f => f !== item)
    }
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var full_name = '<?= $this->session->userdata('full_name') ?>'
    var data_user = ""
    var data_item = ""
    var data_item_all = ""
    var data_supplier = ""
    var data_gudang = ""
    var data_stok = ""
    var data_all_stok = []
    var selected_item_check = []
    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
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
                data_item_all = response['data']['item'];
                data_item = data_item_all
                data_satuan = response['data']['itemSatuan'];
                data_supplier = response['data']['supplier'];
                data_gudang = response['data']['gudang'];
                getHistorySO()
            }
        })
    }
    var data_so = ""

    function getHistorySO(no = null, status = null) {
        $.ajax({
            url: "<?= api_url('Api_So/historyOpname'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_so = response['data'].filter((values, keys) => {
                    if (values.is_active === '1') return true
                })
                if (no == null) {
                    listStockOpname()
                } else {
                    formMulaiSO(no)
                }
            }
        })
    }

    function listStockOpname() {
        var html = ""
        // console.log(data_so)
        $.each(data_so, function(key, value) {
            var jumlah_belum_checking = JSON.parse(value['datas']).filter((values, keys) => {
                if (values.tanggal_check === null && values.is_active === 1) return true
            }).length
            var bgCard = ""
            if (value['is_close'] == 1) {
                bgCard = 'bg-grey'
            }
            html += '<div class="card shadow-none card-hoper mb-2 ' + bgCard + '" id="card_search' + key + '">'
            html += '<div class="card-body">'
            if (value['is_close'] == 1) {
                html += '<img src="<?= base_url() ?>assets/image/logo/CLOSE.svg" class="image-20 position-absolute top-50 start-75 translate-middle" alt="" style="width:100px;opacity: 0.5;">'
            }
            html += '<div class="row">'

            html += '<div class="col-1 align-self-center">'
            if (jumlah_belum_checking == 0) {
                html += '<div id="profileImage" class="bg-hijau"><i class="fa fa-check"></i></div>'
            } else {
                html += '<div id="profileImage" class="bg-grey"><i class="fa fa-clock-o"></i></div>'
            }
            html += '</div>'

            html += '<div class="col-5 align-self-center">'
            html += '<p class="m-0" style="font-size:10px">' + value['kode'] + ' <span class="fa fa-copy text-grey"></span></p>'
            html += '<h5 style="cursor:pointer;" onclick="formMulaiSO(' + key + ')" class="text_search" data-id="' + key + '"><b>Stock Opname ' + formatDate(value['date_start']) + '</b></h5>'
            html += '<p class="m-0 small text_search" data-id="' + key + '">Note : ' + value['note'] + '</p>'
            html += '</div>'

            html += '<div class="col-5 align-self-center">'
            html += '<p class="m-0" style="font-size:10px"><b>Eksekutor :</b></p>'
            html += '<ol style="font-size:10px;">'
            var jumlah_belum = 0
            $.each(JSON.parse(value['datas']), function(keys, values) {
                if (values['is_active'] == 1 || values['is_active'] == null) {
                    var sisa_belum = values['detail_item'].filter((values, keys) => {
                        if (values.jumlah_input === null) return true
                    }).length
                    jumlah_belum = parseInt(jumlah_belum) + parseInt(sisa_belum)
                    var check = ""
                    if (sisa_belum == 0) {
                        check = '<i class="fa fa-check-circle text-success ms-2"></i>'
                    }
                    html += '<li class="text_search" data-id="' + key + '">' + values['user_name'] + check + '</li>'
                } else {
                    html += '<li class="text_search" data-id="' + key + '">' + values['user_name'].strike() + ' <span class="fa fa-times-circle text-danger"></span></li>'
                }
            })
            html += '</ol>'
            html += '</div>'

            html += '<div class="col-1 align-self-center">'
            html += '<button class="small btn btn-sm w-100" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
            html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
            html += '<a class="dropdown-item" onclick="formMulaiSO(' + key + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
            if (value['is_close'] == 0) {
                html += '<a class="dropdown-item" onclick="bagikanKeWhatsapp(' + key + ',' + "'" + value['kode'] + "'" + ')"><i class="fa fa-share-alt me-2"></i> Bagikan ke Eksekutor</a>'
                if (jumlah_belum != 0) {
                    html += '<hr class="m-2">'
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-danger w-100" id="btnBatalSO' + key + '" onclick="pembatalanSO(' + key + ',' + value['id_so'] + ",'" + formatDate(value['date_start']) + "'" + ')">Hapus Program Stok Opname</button>'
                    html += '</div>'
                } else {
                    html += '<hr class="m-2">'
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-success w-100" id="btnClosingSO' + key + '" onclick="closingSO(' + key + ',' + value['id_so'] + ",'" + formatDate(value['date_start']) + "'" + ')">Closing Opname</button>'
                    html += '</div>'

                }
            }
            html += '</div>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#tampilStockOpname').html(html)
    }


    function formMulaiSO(id_key = "") {
        var data = data_so[id_key]
        // console.log(JSON.parse(data['datas']))
        if (id_key === "") {
            var rString = randomString(20, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
        } else {
            var rString = data['kode']
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Mulai Stock Opname</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-6 small">'

        html_body += '<p class="m-0">Kode</p>'
        html_body += '<h4><b>' + rString + '</b> <span class="fa fa-copy text-grey"></span></h4>'
        html_body += '<p class="m-0">Pelaksana</p>'
        html_body += '<h4><b>' + full_name + '</b></h4>'

        html_body += '</div>'
        html_body += '<div class="col-6 small">'

        html_body += '<div class="row">'
        html_body += '<div class="col-4 align-self-center">Tanggal Pelaksanaan</div>'
        if (id_key === "") {
            html_body += '<div class="col-8"><input type="text" class="form-control form-control-sm datepicker" id="tanggalPelaksanaan"></div>'
        } else {
            html_body += '<div class="col-8 align-self-center">' + formatDate(data['date_start']) + '</div>'
        }
        html_body += '<div class="col-4 pt-2 align-self-center">Catatan</div>'
        if (id_key === "") {
            html_body += '<div class="col-8 pt-2"><textarea class="form-control form-control-sm w-100" rows="5" id="catatanOpname"></textarea></div>'
        } else {
            html_body += '<div class="col-8 align-self-center pt-2">' + data['note'] + '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<hr class="mt-5 mb-5">'
        html_body += '<h4><b>Stock Opname Participant</b></h4>'
        html_body += '</div>'

        html_body += '<div class="col-12" id="tampilParticipant">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        if (id_key === "") {
            html_body += '<button class="btn btn-success mt-2 w-100 btn-sm" onclick="tampilParticipant(' + id_key + ')"><i class="fa fa-plus me-2"></i>Tambah Participant</button>'
        } else {
            if (data['is_close'] == 0) {
                html_body += '<button class="btn btn-success mt-2 w-100 btn-sm" onclick="tampilParticipant(' + id_key + ')"><i class="fa fa-plus me-2"></i>Tambah Participant</button>'
            }
        }
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        if (id_key !== "") {
            if (data['is_close'] == 0) {
                html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnCreateOpname" onclick="createNewOpname(' + "'" + rString + "'" + ')">Simpan</button>'
            }
        } else {
            html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnCreateOpname" onclick="createNewOpname(' + "'" + rString + "'" + ')">Simpan</button>'
        }
        $('#modalFooter').html(html_footer);
        if (id_key === "") {
            tampilParticipant(id_key)
        } else {
            $.each(JSON.parse(data['datas']), function(key, value) {
                tampilParticipant(id_key, JSON.parse(data['datas'])[key], rString, data['is_close'])
            })
        }
    }
    var numberParticipant = 0

    function tampilParticipant(key, detail = null, kode = null, is_close = null) {
        var html = ""
        var aktif = 1
        if (detail != null) {
            if (detail['is_active'] == 0) {
                aktif = 0
            }
        }
        if (aktif != 0) {
            // yang masih active
            html += '<div class="card shadow-sm mb-2 position-relative" id="fieldParticipant' + numberParticipant + '">'
            // btn delete
            if (detail == null) {
                html += '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" onclick="hapusFieldParticipant(' + numberParticipant + ')"><i class="fa fa-trash"></i></span>'
            }
            // btn delete
            html += '<div class="card-body">'

            html += '<div class="row">'

            html += '<div class="col">'
            html += '<div class="row">'
            html += '<div class="col-4 align-self-center">Checker By</div>'
            html += '<div class="col-8">'
            if (detail == null) {
                html += '<select name="" id="userCheck' + numberParticipant + '" class="form-select form-select-sm userCheck" required="required" data-no="' + numberParticipant + '">'
                html += '<option value="" disabled selected>Pilih User</option>'
                $.each(data_user, function(key, value) {
                    html += '<option value="' + value['id'] + '">' + value['name'] + '</option>'
                })
                html += '</select>'
            } else {
                html += '<b>' + detail['user_name'] + '</b>'
            }
            html += '</div>'
            // html += '<div class="col-4 pt-2 align-self-center">Tanggal Mulai</div>'
            // html += '<div class="col-8 pt-2">'
            // if (detail == null) {
            //     html += '<input type="text" class="form-control form-control-sm datepicker tanggalMulai" id="tanggalMulai' + numberParticipant + '">'
            // } else {
            //     html += '<b>' + formatDate(detail['tanggal_mulai']) + '</b>'
            // }
            // html += '</div>'
            if (detail != null && is_close != 1) {
                if (detail['detail_item'][0]['id_check'] == null) {
                    html += '<div class="col-auto pt-3 pe-0">'
                    html += '<button class="btn btn-danger btn-sm" id="btnBatalPartisipan' + numberParticipant + '" onclick="pembatalanPartisipant(' + key + ',' + detail['id_detail'] + ",'" + detail['user_name'] + "'" + ')">Batalkan</button>'
                    html += '</div>'
                }
                html += '<div class="col-auto pt-3 ps-1">'
                html += '<button class="btn btn-success btn-sm" id="btnKoreksiOpname' + numberParticipant + '" onclick="koreksiOpname(' + detail['id_detail'] + ',' + "'" + kode + "'" + ')"><i class="me-2 fa fa-pencil"></i> Check Input</button>'
                html += '</div>'
            }
            html += '</div>'
            html += '</div>'

            html += '<div class="col">'
            html += '<h6><b>List Item</b></h6>'
            html += '<p class="m-0 small" style="font-size:11px;">User tersebut akan mendapatkan bagian item yang sudah dipilih dibawah ini</p>'
            if (detail == null) {
                html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2 pillKategori" id="itemKategoriNONE' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(0,' + numberParticipant + ')">Tanpa Type</span>'
                html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2 pillKategori" id="itemKategoriSKM' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(1,' + numberParticipant + ')">SKM</span>'
                html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2 pillKategori" id="itemKategoriSKT' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(2,' + numberParticipant + ')">SKT</span>'
                html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2 pillKategori" id="itemKategoriSKTSKM' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(3,' + numberParticipant + ')">SKT / SKM</span>'
            }
            html += '<div id="listItem' + numberParticipant + '" class="mb-2">'
            html += '</div>'
            html += '<div class="row">'
            html += '<div class="col-10">'
            html += '</div>'
            html += '<div class="col-2 pt-2">'
            if (detail == null) {
                html += '<button class="btn btn-sm btn-success" onclick="listItem(' + numberParticipant + ')"><i class="fa fa-plus"></i></button>'
            }
            html += '</div>'
            html += '</div>'
            html += '</div>'

            html += '</div>'

            html += '</div>'
            html += '</div>'
        } else {
            // yang tidak aktif
            html += '<div class="card shadow-sm mb-2 position-relative bg-light" id="fieldParticipant' + numberParticipant + '">'
            html += '<div class="card-body p-2">'
            html += '<div class="row">'

            html += '<div class="col-2 align-self-center">'
            html += '<span class="badge rounded-pill bg-danger">Canceled</span>'
            html += '</div>'
            html += '<div class="col-5 align-self-center">'
            html += '<b class="small">' + detail['user_name'] + '</b> ( ' + detail['detail_item'].length + ' Item )'
            html += '</div>'
            html += '<div class="col-5 text-right align-self-center">'
            html += '<button class="btn btn-sm btn-success float-end" id="btnBukaPartisipan' + numberParticipant + '" onclick="bukaLagiPartisipant(' + key + ',' + detail['id_detail'] + ",'" + detail['user_name'] + "'" + ')">Buka Lagi</button>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</div>'
        }
        $('#tampilParticipant').append(html)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        if (detail == null) {
            listItem(numberParticipant)
        } else {
            $.each(detail['detail_item'], function(key, value) {
                listItem(numberParticipant, '', '', detail['detail_item'][key])
            })
        }
        numberParticipant++
    }

    function pembatalanSO(key, id_so, tanggal) {
        Swal.fire({
            text: 'Apakah anda yakin ingin Menghapus Program Stock Opname tanggal ' + tanggal + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var form_data = new FormData();
                var type = 'POST'
                var form_data = {
                    'id_so': id_so,
                    'status': 'batal',
                    'no': "",
                }
                var button = '#btnBatalSO' + key
                var url = '<?php echo api_url('Api_So/hapusSo'); ?>'
                kelolaData(form_data, type, url, button)
            }
        })
    }

    function closingSO(key, id_so, tanggal) {
        Swal.fire({
            text: 'Apakah anda yakin ingin Melakukan Closing SO tanggal ' + tanggal + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var form_data = new FormData();
                var type = 'POST'
                var form_data = {
                    'id': id_so,
                    'user_id': user_id,
                }
                var button = '#btnClosingSO' + key
                var url = '<?php echo api_url('Api_So/closingSo'); ?>'
                kelolaData(form_data, type, url, button)
            }
        })
    }

    function pembatalanPartisipant(no, id_detail, nama) {
        Swal.fire({
            text: 'Apakah anda yakin ingin Membatalkan Partisipan dari ' + nama + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var form_data = new FormData();
                var type = 'POST'
                var form_data = {
                    'id_detail': id_detail,
                    'status': 'batal',
                    'no': no,
                }
                var button = '#btnBatalPartisipan' + no
                var url = '<?php echo api_url('Api_So/batalPartisipant'); ?>'
                // console.log(form_data)
                kelolaData(form_data, type, url, button)
            }
        })
    }

    function bukaLagiPartisipant(no, id_detail, nama) {
        Swal.fire({
            text: 'Apakah anda yakin ingin Membatalkan Partisipan dari ' + nama + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var form_data = new FormData();
                var type = 'POST'
                var form_data = {
                    'id_detail': id_detail,
                    'status': 'aktif',
                    'no': no,
                }
                var button = '#btnBatalPartisipan' + no
                var url = '<?php echo api_url('Api_So/batalPartisipant'); ?>'
                // console.log(form_data)
                kelolaData(form_data, type, url, button)
            }
        })
    }

    var kategori_none = []
    var kategori_skm = []
    var kategori_skt = []
    var kategori_skmskt = []

    function showItemKategori(id, no) {
        // console.log(kategori_none[no])
        var type_name = ''
        if (id == 0) {
            // NON
            type_name = null
            var obj = data_item.filter(x => x.type_name === type_name)
            // console.log(obj)
            if (kategori_none[no] == 'checked') {
                $('#itemKategoriNONE' + no).addClass('bg-light text-dark')
                $('#itemKategoriNONE' + no).removeClass('bg-dark text-light')
                kategori_none[no] = ''
                removeItemFromKategori('NONE', no)
            } else {
                $('#itemKategoriNONE' + no).removeClass('bg-light text-dark')
                $('#itemKategoriNONE' + no).addClass('bg-dark text-light')
                kategori_none[no] = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'NONE')
                })
            }
        }
        if (id == 1) {
            // SKM
            type_name = 'SKM'
            var obj = data_item.filter(x => x.type_name === type_name)
            if (kategori_skm[no] == 'checked') {
                $('#itemKategoriSKM' + no).addClass('bg-light text-dark')
                $('#itemKategoriSKM' + no).removeClass('bg-dark text-light')
                kategori_skm = ''
                removeItemFromKategori('SKM', no)
            } else {
                $('#itemKategoriSKM' + no).removeClass('bg-light text-dark')
                $('#itemKategoriSKM' + no).addClass('bg-dark text-light')
                kategori_skm[no] = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'SKM')
                })
            }
        }
        if (id == 2) {
            // SKT
            type_name = 'SKT'
            var obj = data_item.filter(x => x.type_name === type_name)
            if (kategori_skt[no] == 'checked') {
                $('#itemKategoriSKT' + no).addClass('bg-light text-dark')
                $('#itemKategoriSKT' + no).removeClass('bg-dark text-light')
                kategori_skt = ''
                removeItemFromKategori('SKT', no)
            } else {
                $('#itemKategoriSKT' + no).removeClass('bg-light text-dark')
                $('#itemKategoriSKT' + no).addClass('bg-dark text-light')
                kategori_skt[no] = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'SKT')
                })
            }
        }
        if (id == 3) {
            // SKM/SKT
            type_name = 'SKT / SKM'
            var obj = data_item.filter(x => x.type_name === type_name)
            if (kategori_skmskt[no] == 'checked') {
                $('#itemKategoriSKTSKM' + no).addClass('bg-light text-dark')
                $('#itemKategoriSKTSKM' + no).removeClass('bg-dark text-light')
                kategori_skmskt = ''
                removeItemFromKategori('SKMSKT', no)
            } else {
                $('#itemKategoriSKTSKM' + no).removeClass('bg-light text-dark')
                $('#itemKategoriSKTSKM' + no).addClass('bg-dark text-light')
                kategori_skmskt[no] = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'SKMSKT')
                })
            }
        }
        changeWhenClickable()
    }

    function removeItemFromKategori(status, no) {
        var st = $('.fieldItem').map(function() {
            return $(this).attr('data-status');
        }).get();
        var nost = $('.fieldItem').map(function() {
            return $(this).attr('data-no');
        }).get();
        var idst = $('.fieldItem').map(function() {
            return $(this).attr('id');
        }).get();
        for (let i = 0; i < st.length; i++) {
            if (st[i] == status && no == nost[i]) {
                // selected_item = removeItem(selected_item, idst[i])
                hapusFieldItemFromKategory(idst[i])
            }
        }
    }

    function hapusFieldItemFromKategory(text) {
        $('#' + text).remove()
        changeWhenClickable()

    }

    function hapusFieldParticipant(no) {
        $('#fieldParticipant' + no).remove()
        changeWhenClickable()
    }

    var numberItem = []
    var selected_item = []
    var selected_item_ada = []

    function selectedItem() {
        selected_item.concat(selected_item_ada)
        data_item = data_item_all.filter(values => !selected_item.includes(values.id))
    }
    $(document).on('change', '.fieldItem', function(e) {
        changeWhenClickable()
    })

    $(document).on('click', '.pillKategori', function(e) {
        changeWhenClickable()
    })

    function changeWhenClickable() {
        selected_item = []
        var item = $('.itemStok').map(function() {
            return $(this).val();
        }).get();
        selected_item = unique(selected_item.concat(item))
        selectedItem()
    }

    function selectedItemCheck() {
        selected_item_ada = unique(selected_item_check)
        selectedItem()
        return true
    }

    function listItem(noParticipant, id = "", status = "", detail = null) {
        // console.log(detail)
        var obj = numberItem.filter(x => x.id === noParticipant)
        if (obj.length == 0) {
            numberItem.push({
                'id': noParticipant,
                'jumlahNo': 0
            })
        }
        var objAfter = numberItem.filter(x => x.id === noParticipant)
        var html = ""
        html += '<div class="row fieldItem" id="fieldItem' + noParticipant + objAfter[0]['jumlahNo'] + '" data-no="' + noParticipant + '" data-status="' + status + '">'
        html += '<div class="col-10 pt-2">'
        if (detail == null) {
            html += '<select class="form-select form-select-sm w-100 itemStok itemStokNo' + noParticipant + '" id="itemStok' + noParticipant + objAfter[0]['jumlahNo'] + '">'
            html += '<option value="" selected disabled>Pilih Item</option>'
            $.each(data_item, function(keys, values) {
                var select = ""
                if (id != "") {
                    if (id == values['id']) {
                        select = "selected"
                    }
                }
                html += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
            })
            html += '</select>'
        } else {
            if (detail['jumlah_input'] == null) {
                var text = 'text-grey'
            } else {
                var text = 'text-success'
            }
            selected_item_check.push(detail['item_id'].toString())
            html += '<b class="small"><i class="fa fa-check-circle ' + text + ' me-2"></i>' + detail['item_name'] + '</b>'
        }
        html += '</div>'
        html += '<div class="col-2 pt-2">'
        if (detail == null) {
            html += '<button class="btn btn-sm btn-outline-danger" onclick="hapusFieldItem(' + noParticipant + ',' + objAfter[0]['jumlahNo'] + ')"><i class="fa fa-trash"></i></button>'
        }
        html += '</div>'
        html += '</div>'
        $('#listItem' + noParticipant).append(html)
        objAfter[0]['jumlahNo'] = parseInt(objAfter[0]['jumlahNo']) + 1
        // console.log(selected_item)
        // selectedItemCheck()
        return true
    }

    function hapusFieldItem(no, no2) {
        $('#fieldItem' + no + no2).remove()
    }

    function createNewOpname(kode) {
        Swal.fire({
            text: 'Apakah anda yakin ingin membuat Program Stock Opname Baru untuk kode ' + kode + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var checking = []
                var user = $('.userCheck').map(function() {
                    return $(this).val();
                }).get();
                var no = $('.userCheck').map(function() {
                    return $(this).data('no');
                }).get();
                var tanggal = $('.tanggalMulai').map(function() {
                    return $(this).val();
                }).get();
                for (let i = 0; i < user.length; i++) {
                    var item = $('.itemStokNo' + no[i]).map(function() {
                        return $(this).val();
                    }).get();
                    checking.push({
                        'id_user': user[i],
                        'tanggal': tanggal[i],
                        'item': item
                    })
                }
                var form_data = new FormData();
                var tanggal_mulai = $('#tanggalPelaksanaan').val()
                var catatan = $('#catatanOpname').val()
                var type = 'POST'
                var form_data = {
                    'tanggal_mulai': tanggal_mulai,
                    'catatan': catatan,
                    'kode': kode,
                    'created_by': user_id,
                    'checking': checking,
                    'no': "",
                }
                var button = '#btnCreateOpname'
                var url = '<?php echo api_url('Api_So/insertTemplate'); ?>'
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
                        clearModal()
                        // $('#modal').modal('hide')
                        if (button == '#btnBatalPartisipan' + data['no']) {
                            getHistorySO(data['no'], 'batal')
                        } else if (button == '#btnBukaPartisipan' + data['no']) {
                            getHistorySO(data['no'], 'aktif')
                        } else {
                            $('#modal').modal('hide')
                            getHistorySO()
                        }
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

    function bagikanKeWhatsapp(key, kode) {
        var data = JSON.parse(data_so[key]['datas']).filter((values, keys) => {
            if (values.is_active === 1) return true
        })
        // console.log(data)
        var link = '<?= base_url() ?>warehouse/checkingOpname/' + kode
        var no_telp = []
        var nama = []
        var tanggal = []
        $.each(data, function(key, value) {
            nama.push(value['user_name'])
            no_telp.push(value['user_telp'])
            tanggal.push(formatDate(value['tanggal_mulai']))
        })
        shareWhatsapp(no_telp, link, nama, tanggal)
    }

    function shareWhatsapp(no_telp, link, nama, tanggal) {
        $.ajax({
            url: "<?= base_url('api/sendOpname') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: link,
                nama: nama,
                tanggal: tanggal,
            },
            error: function(xhr) {
                $('#modal2').modal('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {});
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Pesan kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                $('#modal2').modal('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {

                });
            }
        })
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

    function koreksiOpname(id_checking, kode) {
        var url = '<?= base_url() ?>warehouse/koreksiOpname/' + kode + '/' + id_checking
        window.open(url, '_blank').focus();
    }
    // search multi
    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

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
</script>