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

    .text-grey {
        color: #D8D9CF;
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
                            <?php for ($i = 0; $i < 20; $i++) { ?>
                                <div class="card shadow-none card-hoper mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-1 align-self-center">
                                                <div id="profileImage" class="bg-hijau"><i class="fa fa-check"></i></div>
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
    var full_name = '<?= $this->session->userdata('full_name') ?>'
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
                formMulaiSO()
            }
        })
    }

    function randomString(length, chars) {
        var result = '';
        for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
        return result;
    }


    function formMulaiSO() {
        var rString = randomString(20, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
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
        html_body += '<div class="col-8"><input type="text" class="form-control form-control-sm datepicker"></div>'
        html_body += '<div class="col-4 pt-2 align-self-center">Catatan</div>'
        html_body += '<div class="col-8 pt-2"><textarea class="form-control form-control-sm w-100" rows="5" id="catatanStok"></textarea></div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<hr class="mt-5 mb-5">'
        html_body += '<h4><b>Stock Opname Participant</b></h4>'
        html_body += '</div>'

        html_body += '<div class="col-12" id="tampilParticipant">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<button class="btn btn-success mt-2 w-100 btn-sm" onclick="tampilParticipant()"><i class="fa fa-plus me-2"></i>Tambah Participant</button>'
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
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanStok" onclick="createNewOpname(' + "'" + rString + "'" + ')">Simpan</button>'
        $('#modalFooter').html(html_footer);
        tampilParticipant()
    }
    var numberParticipant = 0

    function tampilParticipant() {
        var html = ""
        html += '<div class="card shadow-sm mb-2 position-relative" style="cursor:pointer;" id="fieldParticipant' + numberParticipant + '">'
        // btn delete
        html += '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" onclick="hapusFieldParticipant(' + numberParticipant + ')"><i class="fa fa-trash"></i></span>'
        // btn delete
        html += '<div class="card-body">'

        html += '<div class="row">'

        html += '<div class="col">'
        html += '<div class="row">'
        html += '<div class="col-4 align-self-center">Checker By</div>'
        html += '<div class="col-8">'
        html += '<select name="" id="userCheck' + numberParticipant + '" class="form-select form-select-sm userCheck" required="required">'
        html += '<option value="" disabled selected>Pilih User</option>'
        $.each(data_user, function(key, value) {
            html += '<option value="' + value['id'] + '">' + value['name'] + '</option>'
        })
        html += '</select>'
        html += '</div>'
        html += '<div class="col-4 pt-2 align-self-center">Tanggal Mulai</div>'
        html += '<div class="col-8 pt-2"><input type="text" class="form-control form-control-sm datepicker" id="tanggalMulai' + numberParticipant + '"></div>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col">'
        html += '<h6><b>List Item</b></h6>'
        html += '<p class="m-0 small" style="font-size:11px;">User tersebut akan mendapatkan bagian item yang sudah dipilih dibawah ini</p>'
        html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2" id="itemKategoriNONE' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(0,' + numberParticipant + ')">Tanpa Type</span>'
        html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2" id="itemKategoriSKM' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(1,' + numberParticipant + ')">SKM</span>'
        html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2" id="itemKategoriSKT' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(2,' + numberParticipant + ')">SKT</span>'
        html += '<span class="badge rounded-pill me-2 bg-light text-dark p-2" id="itemKategoriSKTSKM' + numberParticipant + '" style="cursor:pointer;" onclick="showItemKategori(3,' + numberParticipant + ')">SKT / SKM</span>'
        html += '<div id="listItem' + numberParticipant + '" class="mb-2">'
        html += '</div>'
        html += '<div class="row">'
        html += '<div class="col-10">'
        html += '</div>'
        html += '<div class="col-2 pt-2">'
        html += '<button class="btn btn-sm btn-success" onclick="listItem(' + numberParticipant + ')"><i class="fa fa-plus"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#tampilParticipant').append(html)
        listItem(numberParticipant)
        numberParticipant++
    }
    var kategori_none = ""
    var kategori_skm = ""
    var kategori_skt = ""
    var kategori_skmskt = ""

    function showItemKategori(id, no) {
        // console.log(data_item)
        var type_name = ''
        if (id == 0) {
            // NON
            type_name = null
            var obj = data_item.filter(x => x.type_name === type_name)
            // console.log(obj)
            if (kategori_none == 'checked') {
                $('#itemKategoriNONE' + no).addClass('bg-light text-dark')
                $('#itemKategoriNONE' + no).removeClass('bg-dark text-light')
                kategori_none = ''
                removeItemFromKategori('NONE')
            } else {
                $('#itemKategoriNONE' + no).removeClass('bg-light text-dark')
                $('#itemKategoriNONE' + no).addClass('bg-dark text-light')
                kategori_none = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'NONE')
                })
            }
        }
        if (id == 1) {
            // SKM
            type_name = 'SKM'
            var obj = data_item.filter(x => x.type_name === type_name)
            if (kategori_skm == 'checked') {
                $('#itemKategoriSKM' + no).addClass('bg-light text-dark')
                $('#itemKategoriSKM' + no).removeClass('bg-dark text-light')
                kategori_skm = ''
                removeItemFromKategori('SKM')
            } else {
                $('#itemKategoriSKM' + no).removeClass('bg-light text-dark')
                $('#itemKategoriSKM' + no).addClass('bg-dark text-light')
                kategori_skm = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'SKM')
                })
            }
        }
        if (id == 2) {
            // SKT
            type_name = 'SKT'
            var obj = data_item.filter(x => x.type_name === type_name)
            if (kategori_skt == 'checked') {
                $('#itemKategoriSKT' + no).addClass('bg-light text-dark')
                $('#itemKategoriSKT' + no).removeClass('bg-dark text-light')
                kategori_skt = ''
                removeItemFromKategori('SKT')
            } else {
                $('#itemKategoriSKT' + no).removeClass('bg-light text-dark')
                $('#itemKategoriSKT' + no).addClass('bg-dark text-light')
                kategori_skt = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'SKT')
                })
            }
        }
        if (id == 3) {
            // SKM/SKT
            type_name = 'SKT / SKM'
            var obj = data_item.filter(x => x.type_name === type_name)
            if (kategori_skmskt == 'checked') {
                $('#itemKategoriSKTSKM' + no).addClass('bg-light text-dark')
                $('#itemKategoriSKTSKM' + no).removeClass('bg-dark text-light')
                kategori_skmskt = ''
                removeItemFromKategori('SKMSKT')
            } else {
                $('#itemKategoriSKTSKM' + no).removeClass('bg-light text-dark')
                $('#itemKategoriSKTSKM' + no).addClass('bg-dark text-light')
                kategori_skmskt = 'checked'
                $.each(obj, function(key, value) {
                    listItem(no, value['id'], 'SKMSKT')
                })
            }
        }
    }

    function removeItemFromKategori(status) {
        var st = $('.fieldItem').map(function() {
            return $(this).attr('data-status');
        }).get();
        var idst = $('.fieldItem').map(function() {
            return $(this).attr('id');
        }).get();
        for (let i = 0; i < st.length; i++) {
            if (st[i] == status) {
                hapusFieldItemFromKategory(idst[i])
            }
        }
    }

    function hapusFieldItemFromKategory(text) {
        $('#' + text).remove()
    }

    function hapusFieldParticipant(no) {
        $('#fieldParticipant' + no).remove()
    }

    var numberItem = []

    function listItem(noParticipant, id = "", status = "") {
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
        html += '<select class="form-select form-select-sm w-100 itemStok" id="itemStok' + noParticipant + objAfter[0]['jumlahNo'] + '">'
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
        html += '</div>'
        html += '<div class="col-2 pt-2">'
        html += '<button class="btn btn-sm btn-outline-danger" onclick="hapusFieldItem(' + noParticipant + ',' + objAfter[0]['jumlahNo'] + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#listItem' + noParticipant).append(html)
        objAfter[0]['jumlahNo'] = parseInt(objAfter[0]['jumlahNo']) + 1
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
                    'tanggal_mulai': tanggal_mulai,
                    'catatan': catatan,
                    'kode': kode,
                    'created_by': user_id,
                    'checking': checking,
                }
                var button = '#btnClosePO'
                var url = '<?php echo api_url('Api_So/insertTemplate'); ?>'
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
</script>