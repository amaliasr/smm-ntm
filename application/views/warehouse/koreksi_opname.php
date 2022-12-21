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

    .checkbox-theme {
        width: 30px;
        height: 30px;
        padding: 0px;
        margin: 0px;
        background-color: white;
    }

    .checkbox-theme:checked {
        background-color: #4E944F;
        border-color: #4E944F;
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
                            Correction Stock Opname
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body p-5">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        </ul>
                        <div class="tab-content" id="myTabContent">
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
    // var tanggalHariIni = '2022-12-20'
    var tanggalHariIni = currentDate()
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
                data_so = response['data']
                data_detail_so = JSON.parse(data_so[0]['datas'])
                console.log(data_detail_so)
                showStockOpname()
            }
        })
    }

    function showStockOpname() {
        var html_tab = ""
        var html_content = ""
        $.each(data_detail_so, function(key, value) {
            html_tab += '<li class="nav-item" role="presentation">'
            html_tab += '<button class="nav-link active position-relative p-3" id="' + key + '-tab" data-bs-toggle="tab" data-bs-target="#' + key + '" type="button" role="tab" aria-controls="' + key + '" aria-selected="true">'
            html_tab += value['user_name'].split(' ').slice(0, 2).join(' ')
            html_tab += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">'
            html_tab += '<span class="visually-hidden">New alerts</span>'
            html_tab += '</span>'
            html_tab += '</button>'
            html_tab += '</li>'

            html_content += '<div class="tab-pane fade show active pt-4" id="' + key + '" role="tabpanel" aria-labelledby="' + key + '-tab">'
            html_content += '<div class="row small">'
            html_content += '<div class="col-5 col-md-3">Dihitung Oleh</div>'
            html_content += '<div class="col-7 col-md-9"><b>' + value['user_name'] + '</b></div>'
            html_content += '<div class="col-5 col-md-3">Waktu Hitung</div>'
            html_content += '<div class="col-7 col-md-9"><b>' + value['tanggal_check'] + '</b></div>'
            html_content += '</div>'

            html_content += '<div class="row pt-5 small">'
            html_content += '<div class="col-12 pb-2" style="font-size:10px;">'
            html_content += '<div class="row">'
            html_content += '<div class="col-4 align-self-center"><b class="ms-3">Nama Item</b></div>'
            html_content += '<div class="col-2 align-self-center"><b>Input</b></div>'
            html_content += '<div class="col-4 align-self-center"><b>Koreksi</b></div>'
            html_content += '<div class="col-2 align-self-center text-end"><b class="me-3">Check</b></div>'
            html_content += '</div>'
            html_content += '</div>'
            $.each(data_detail_so[0]['detail_item'], function(keys, values) {
                html_content += '<div class="col-12" style="font-size:11px;">'
                html_content += '<div class="card shadow-none mb-2 card-hoper" id="cardItem' + key + keys + '">'
                html_content += '<div class="card-body p-3">'

                html_content += '<div class="row">'

                html_content += '<div class="col-4 align-self-center"><b>' + values['item_name'] + '</b></div>'

                html_content += '<div class="col-2 align-self-center"><p class="m-0">' + values['jumlah_input'] + ' ' + values['satuan_name'] + '</p></div>'

                html_content += '<div class="col-4 align-self-center">'
                html_content += '<div class="row" id="fieldInputLogistik' + key + keys + '">'
                html_content += '<div class="col-6 align-self-center"><input class="form-control form-control-sm inputJumlah" id="inputJumlah' + key + keys + '"></div>'
                html_content += '<div class="col-6 align-self-center">' + values['satuan_name'] + '</div>'
                html_content += '</div>'
                html_content += '</div>'

                html_content += '<div class="col-2">'
                html_content += '<input class="form-check-input checkbox-theme float-end checkItem" type="checkbox" id="checkItem' + key + keys + '" data-key="' + key + keys + '" value="on">'
                html_content += '</div>'

                html_content += '</div>'

                html_content += '</div>'
                html_content += '</div>'
                html_content += '</div>'
            })

            html_content += '</div>'
            html_content += '</div>'
        })
        $('#myTab').html(html_tab)
        $('#myTabContent').html(html_content)
    }
    $(document).on('click', '.checkItem', function(e) {
        var key = $(this).data('key')
        colorizedCardAfterCheck(key)
    })

    function colorizedCardAfterCheck(key) {
        console.log($('#checkItem' + key + ':checked').val())
        // if ($('#checkItem' + key + ':checked').val() != "") {
        //     // kalau ga kosong
        //     $('#cardItem' + key).addClass('bg-teals')
        // } else {
        //     // kalau kosong
        //     $('#cardItem' + key).removeClass('bg-teals')
        // }
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