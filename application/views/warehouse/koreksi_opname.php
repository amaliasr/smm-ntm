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
    var id_detail_partisipan = '<?= $id_detail_partisipan ?>'
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
                data_detail_so = JSON.parse(data_so[0]['datas']).filter((values, keys) => {
                    if (values.is_active === 1) return true
                })
                console.log(data_detail_so)
                showStockOpname()
            }
        })
    }

    function showStockOpname() {
        console.log(id_detail_partisipan)
        var html_tab = ""
        var html_content = ""
        var active = ""
        $.each(data_detail_so, function(key, value) {
            // TAB
            var jumlah_yang_belum_dikoreksi = value['detail_item'].filter((values, keys) => {
                if (values.jumlah_koreksi === null) return true
            }).length
            var jumlah_yang_belum_dichecking = value['detail_item'].filter((values, keys) => {
                if (values.jumlah_input === null) return true
            }).length
            var jumlah_semua_detail = value['detail_item'].length

            html_tab += '<li class="nav-item" role="presentation">'

            if (id_detail_partisipan == "") {
                if (key == 0) {
                    active = 'active'
                } else {
                    active = ""
                }
            } else {
                if (id_detail_partisipan == value['id_detail']) {
                    active = 'active'
                } else {
                    active = ""
                }
            }
            html_tab += '<button class="nav-link ' + active + ' position-relative p-3 me-2" id="a' + key + '-tab" data-bs-toggle="tab" data-bs-target="#a' + key + '" type="button" role="tab" aria-controls="a' + key + '" aria-selected="true">'
            html_tab += value['user_name'].split(' ').slice(0, 2).join(' ')
            if (jumlah_yang_belum_dichecking == 0) {
                if (jumlah_yang_belum_dikoreksi == 0) {
                    // selesai
                    html_tab += '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"><i class="fa fa-check"><i></span>'
                } else {
                    // belum
                    html_tab += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"></span>'
                }
            }
            html_tab += '</button>'
            html_tab += '</li>'

            // CONTENT
            if (id_detail_partisipan == "") {
                if (key == 0) {
                    active = 'show active'
                } else {
                    active = ''
                }
            } else {
                if (id_detail_partisipan == value['id_detail']) {
                    active = 'show active'
                } else {
                    active = ""
                }
            }
            html_content += '<div class="tab-pane ' + active + ' fade pt-4" id="a' + key + '" role="tabpanel" aria-labelledby="a' + key + '-tab">'
            html_content += '<div class="row small">'
            html_content += '<div class="col-5 col-md-3">Dihitung Oleh</div>'
            html_content += '<div class="col-7 col-md-9"><b>' + value['user_name'] + '</b></div>'
            html_content += '<div class="col-5 col-md-3">Waktu Hitung</div>'
            var pengecekan = "belum"
            if (value['tanggal_check'] != null) {
                pengecekan = "sudah"
                html_content += '<div class="col-7 col-md-9"><b>' + value['tanggal_check'] + '</b></div>'
            } else {
                html_content += '<div class="col-7 col-md-9"><i class="fa fa-warning text-warning me-2"></i> <i>Belum Melakukan Pengecekan</i></div>'
            }
            html_content += '<div class="col-5 col-md-3">Keterangan</div>'
            var keterangan = "-"
            if (jumlah_yang_belum_dichecking != 0) {
                if (value['tanggal_check'] != null) {
                    keterangan = 'Pengecekan Belum Selesai'
                } else {
                    keterangan = '-'
                }
            } else {
                if (jumlah_yang_belum_dikoreksi == jumlah_semua_detail) {
                    keterangan = 'Pengecekan Selesai, Belum Melakukan Koreksi'
                } else if (jumlah_yang_belum_dikoreksi == 0) {
                    keterangan = 'Telah Terkoreksi Semua'
                } else {
                    keterangan = 'Sedang Melakukan Koreksi'
                }
            }
            html_content += '<div class="col-7 col-md-9"><i>' + keterangan + '</i></div>'
            html_content += '</div>'

            html_content += '<div class="row pt-5 small">'
            html_content += '<div class="col-12 pb-2" style="font-size:10px;">'
            html_content += '<div class="row">'
            html_content += '<div class="col-4 align-self-center"><b class="ms-3">Nama Item</b></div>'
            html_content += '<div class="col-2 align-self-center"><b>Input</b></div>'
            html_content += '<div class="col-2 align-self-center"><b>Stok Asli</b></div>'
            html_content += '<div class="col-2 align-self-center"><b>Koreksi</b></div>'
            html_content += '<div class="col-2 align-self-center text-end"><b class="me-3">Notes</b></div>'
            html_content += '</div>'
            html_content += '</div>'
            if (pengecekan == 'sudah') {
                $.each(value['detail_item'], function(keys, values) {
                    var bg = ""
                    if (values['jumlah_koreksi'] != null) {
                        bg = 'bg-light'
                    }
                    html_content += '<div class="col-12" style="font-size:11px;">'
                    html_content += '<div class="card shadow-none mb-2 card-hoper ' + bg + '" id="cardItem' + key + keys + '">'
                    html_content += '<div class="card-body p-3">'

                    html_content += '<div class="row">'

                    html_content += '<div class="col-4 align-self-center"><b>' + values['item_name'] + '</b></div>'

                    var selisih = ""
                    if (values['jumlah_input'] > values['jumlah_sistem']) {
                        selisih = '<span class="fw-bold badge bg-success">(+' + (parseFloat(values['jumlah_input']) - parseFloat(values['jumlah_sistem'])) + ')</span>'
                    } else if (values['jumlah_input'] < values['jumlah_sistem']) {
                        selisih = '<span class="fw-bold badge bg-danger">(-' + (parseFloat(values['jumlah_sistem']) - parseFloat(values['jumlah_input'])) + ')</span>'

                    }
                    if (values['jumlah_input'] != null) {
                        html_content += '<div class="col-2 align-self-center"><p class="m-0">' + values['jumlah_input'] + '  ' + values['satuan_name'] + ' ' + selisih + '</p></div>'
                    } else {
                        html_content += '<div class="col-2 align-self-center"><p class="m-0">-</p></div>'
                    }
                    html_content += '<div class="col-2 align-self-center"><p class="m-0">' + values['jumlah_sistem'] + ' ' + values['satuan_name'] + '</p></div>'

                    html_content += '<div class="col-2 align-self-center">'
                    html_content += '<div class="row" id="fieldInputLogistik' + key + keys + '">'

                    html_content += '</div>'
                    html_content += '</div>'

                    html_content += '<div class="col-2 align-self-center">'
                    var cocok = ""
                    if (values['jumlah_input'] == values['jumlah_sistem'] && values['jumlah_koreksi'] == null) {
                        cocok = "disabled checked"
                        html_content += '<input class="form-check-input checkbox-theme float-end checkItem" ' + cocok + ' type="checkbox" id="checkItem' + key + keys + '" data-key="' + key + keys + '" data-satuan="' + values['satuan_name'] + '" value="on">'
                    }
                    if (values['jumlah_koreksi'] != null) {
                        html_content += '<i style="font-size:10px;" class="float-end">Telah Diperiksa</i>'
                    }
                    html_content += '</div>'

                    html_content += '</div>'

                    html_content += '</div>'
                    html_content += '</div>'
                    html_content += '</div>'
                })
            } else {
                html_content += '<div class="col-12">'
                html_content += '<div class="card shadow-none mt-2 mb-2">'
                html_content += '<div class="card-body text-center">'
                html_content += '<p class="m-0 mt-5 mb-5"><i>' + value['user_name'] + ' Belum Melakukan Pengecekan</i></p>'
                html_content += '</div>'
                html_content += '</div>'
                html_content += '</div>'
            }
            html_content += '<div class="col-12" >'
            if (value['tanggal_check'] != null && jumlah_yang_belum_dichecking == 0) {
                html_content += '<button class="btn btn-sm btn-success float-end" id="btnSimpanPerubahan" onclick="simpanPerubahan(' + value['id_detail'] + ')"><i class="fa fa-save me-2"></i> Simpan Perubahan</button>'
            }
            html_content += '</div>'

            html_content += '</div>'
            html_content += '</div>'
        })
        $('#myTab').html(html_tab)
        $('#myTabContent').html(html_content)
        $.each(data_detail_so, function(key, value) {
            $.each(value['detail_item'], function(keys, values) {
                colorizedCardAfterCheck(+'' + key + '' + keys + '', values['satuan_name'], values['jumlah_koreksi'], values['item_id'], values['id_check'], values['jumlah_input'], values['jumlah_sistem'])
            })
        })
    }
    // $(document).on('click', '.checkItem', function(e) {
    //     var key = $(this).data('key')
    //     var satuan = $(this).data('satuan')
    //     colorizedCardAfterCheck(key, satuan)
    // })

    function colorizedCardAfterCheck(key, satuan = null, nilai = null, item_id = null, id_check = null, jumlah_input, jumlah_sistem) {
        if (nilai == null) {
            nilai = ""
        }
        if ($('#checkItem' + key + ':checked').val() != undefined) {
            // kalau ga undefined
            $('#cardItem' + key).addClass('bg-teals')
            var html = ""
            html += '<p class="m-0"><b><i class="fa fa-check text-success me-2"></i> Cocok</b></p>'
            html += '<input class="form-control form-control-sm inputJumlah nominal d-none" id="inputJumlah' + key + '" value="' + jumlah_input + '" data-item_id="' + item_id + '" data-id_check="' + id_check + '">'
            $('#fieldInputLogistik' + key).html(html)
        } else {
            // kalau undefined
            $('#cardItem' + key).removeClass('bg-teals')
            var html = ""
            if (satuan != null) {
                if (jumlah_sistem == jumlah_input) {
                    html += '<p class="m-0"><b><i class="fa fa-check text-success me-2"></i> Cocok</b></p>'
                } else {
                    html += '<div class="col-12 align-self-center"><input class="form-control form-control-sm inputJumlah nominal" id="inputJumlah' + key + '" value="' + nilai + '" data-item_id="' + item_id + '" data-id_check="' + id_check + '"></div>'
                }
                // console.log(html)
            }
            $('#fieldInputLogistik' + key).html(html)
            $('.nominal').number(true, 2)
        }
    }

    function simpanPerubahan(id_detail) {
        var checking = []
        var inputJumlah = $('.inputJumlah').map(function() {
            return $(this).val();
        }).get()
        var item_id = $('.inputJumlah').map(function() {
            return $(this).data('item_id');
        }).get()
        var id_check = $('.inputJumlah').map(function() {
            return $(this).data('id_check');
        }).get()
        for (let i = 0; i < item_id.length; i++) {
            checking.push({
                'id_check': id_check[i],
                'id_item': item_id[i],
                'jumlah': inputJumlah[i],
            })
        }
        var type = 'POST'
        var data = {
            input: checking,
            id_user: user_id,
        }
        var button = '#btnSimpanPerubahan'
        var url = '<?php echo api_url('Api_So/updateHasilSo'); ?>'
        kelolaData(data, type, url, button)
        // console.log(data)
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