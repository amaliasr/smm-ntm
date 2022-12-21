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

    .bg-teals {
        background-color: #CFF5E7;
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
                            <div class="page-header-icon"><i class="fa fa-check"></i></div>
                            Checking Stock
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="container">
                            <div class="row small">
                                <div class="col-6 col-md-4">Nama</div>
                                <div class="col-6 col-md-8"><b><?= $this->session->userdata('full_name') ?></b></div>
                                <div class="col-6 col-md-4">Tanggal Eksekusi</div>
                                <div class="col-6 col-md-8"><b>20 Dec 2022</b></div>
                                <div class="col-6 col-md-4">Jumlah Item</div>
                                <div class="col-6 col-md-8"><b class="text-primary totalItemAll">0</b> Item</div>
                                <div class="col-6 col-md-4">Jumlah Terisi</div>
                                <div class="col-6 col-md-8"><b class="text-danger totalItemTerisi">0</b> / <b class="totalItemAll">0</b> Item</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <div class="container small">
                            <div class="row">
                                <div class="col-12">
                                    <p class="m-0"><b>MULAI STOCK OPNAME</b></p>
                                    <p class="m-0" style="font-size: 10px;">Harap mengisi jumlah barang dari masing - masing item dengan benar</p>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-12" id="tampilStockOpname">
                                    <div class="w-100 text-center">
                                        <div class="spinner-border text-light" style="width: 10rem; height: 10rem;" role="status">
                                            <span class="visually-hidden">Loading...</span>
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

    $('#modal').on('hidden.bs.modal', function(e) {
        numberParticipant = 0
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
    var kode = '<?= $kode ?>'
    var tanggalHariIni = '2022-12-20'
    // var tanggalHariIni = currentDate()
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var data_gudang = ""
    var data_stok = ""
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
                getHistorySO()
            }
        })
    }
    var data_so = ""
    var id_detail_partisipan = ""

    function getHistorySO(no = null, status = null) {
        $.ajax({
            url: "<?= api_url('Api_So/historyOpname'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                kode: kode
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                // console.log(tanggalHariIni)
                data_so = JSON.parse(response['data'].filter((values, keys) => {
                    if (values.is_active === '1') return true
                })[0]['datas']).filter((values, keys) => {
                    if (values.user_check === parseInt(user_id) && formatDate(values.tanggal_mulai) === tanggalHariIni) return true
                })
                id_detail_partisipan = data_so[0]['id_detail']
                formSO()
            }
        })
    }
    var jumlahAll = 0

    function formSO() {
        var html = ""
        var a = 0
        $.each(data_so, function(key, value) {
            console.log(value['detail_item'])
            $.each(value['detail_item'], function(keys, values) {
                var input = ""
                var color = ""
                if (values['jumlah_input'] != null) {
                    input = values['jumlah_input']
                    color = 'bg-teals'
                }
                html += '<div class="card shadow-sm card-hoper mb-2 ' + color + '" id="cardItem' + a + '">'
                html += '<div class="card-body p-3">'
                html += '<div class="row small">'
                html += '<div class="col-6 col-md-8 align-self-center">'
                html += '<b style="font-size: 11px;">' + values['item_name'] + '</b>'
                html += '</div>'
                html += '<div class="col-4 col-md-2 align-self-center">'
                html += '<input type="text" data-id_check="' + values['id_check'] + '" data-id_item="' + values['item_id'] + '" data-key="' + a + '" data-id_satuan="' + values['satuan_id'] + '" id="jumlah' + a + '" class="form-control form-control-sm jumlah" value="' + input + '" required="required">'
                html += '</div>'
                html += '<div class="col-2 col-md-2 align-self-center">'
                html += '<p class="m-0" style="font-size: 9px;">' + values['satuan_name'] + '</p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                colorizedCardAfterKeyup(a)
                a++
            })
        })
        html += '<button type="button" class="btn btn-success w-100 mt-3" id="btnSelesaiPerhitungan" onclick="selesaikanPerhitungan()">Simpan Perhitungan</button>'
        jumlahAll = a
        $('.totalItemAll').html(a)
        $('#tampilStockOpname').html(html)
        countJumlahTerisi()
    }
    $(document).on('keyup', '.jumlah', function(e) {
        var key = $(this).data('key')
        countJumlahTerisi()
        colorizedCardAfterKeyup(key)
    })

    function colorizedCardAfterKeyup(key) {
        if ($('#jumlah' + key).val() != "") {
            // kalau ga kosong
            $('#cardItem' + key).addClass('bg-teals')
        } else {
            // kalau kosong
            $('#cardItem' + key).removeClass('bg-teals')
        }
    }

    function countJumlahTerisi() {
        var jumlah_terisi = $('.jumlah').map(function() {
            if ($(this).val() != "") {
                return $(this).val();
            }
        }).get().length
        if (jumlah_terisi > 0 && jumlah_terisi < jumlahAll) {
            $('.totalItemTerisi').removeClass('text-danger')
            $('.totalItemTerisi').removeClass('text-success')
        } else if (jumlah_terisi == jumlahAll) {
            // console.log('cocok')
            $('.totalItemTerisi').removeClass('text-danger')
            $('.totalItemTerisi').addClass('text-success')
        } else {
            $('.totalItemTerisi').removeClass('text-success')
            $('.totalItemTerisi').addClass('text-danger')
        }
        $('.totalItemTerisi').html(jumlah_terisi)
    }

    function selesaikanPerhitungan() {
        var jumlah = $('.jumlah').map(function() {
            return $(this).val();
        }).get()
        var id_check = $('.jumlah').map(function() {
            return $(this).data('id_check');
        }).get()
        var id_item = $('.jumlah').map(function() {
            return $(this).data('id_item');
        }).get()
        var id_satuan = $('.jumlah').map(function() {
            return $(this).data('id_satuan');
        }).get()
        if (id_check[0] == null) {
            // add
            tambahPerhitungan(jumlah, id_item, id_satuan)
        } else {
            // edit
            ubahPerhitungan(jumlah, id_check)
        }
    }

    function tambahPerhitungan(jumlah, id_item, id_satuan) {
        var checking = []
        for (let i = 0; i < id_item.length; i++) {
            checking.push({
                'id_item': id_item[i],
                'jumlah': jumlah[i],
                'satuan_id': id_satuan[i],
            })
        }
        var type = 'POST'
        var data = {
            id_user: user_id,
            tanggal: currentDate(),
            checking: checking,
            id_detail: id_detail_partisipan
        }
        var button = '#btnSelesaiPerhitungan'
        var url = '<?php echo api_url('Api_So/insertHasilSo'); ?>'
        kelolaData(data, type, url, button)
    }

    function ubahPerhitungan(jumlah, id_check) {
        var checking = []
        for (let i = 0; i < id_check.length; i++) {
            checking.push({
                'jumlah': jumlah[i],
                'id_check': id_check[i],
            })
        }
        var type = 'POST'
        var data = {
            input: checking
        }
        var button = '#btnSelesaiPerhitungan'
        var url = '<?php echo api_url('Api_So/updateHitungSo'); ?>'
        kelolaData(data, type, url, button)
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
                        getHistorySO()
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