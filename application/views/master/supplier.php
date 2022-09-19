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

    table.dataTable td {
        font-size: 1em;
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
                            <div class="page-header-icon"><i class="fa fa-file"></i></div>
                            Supplier
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-outline-light" onclick="formSupplierBaru()"><i class="fa fa-plus"></i> <span class="ms-2 d-none d-sm-block">Supplier Baru</span></button>
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
                        <div class="container">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-sm small" id="example">
                                        <thead class="bg-light">
                                            <tr class="text-nowrap" style="height: 50px;vertical-align: middle;">
                                                <th class="p-4">#</th>
                                                <th class="p-4">Kode</th>
                                                <th class="p-4">Tanggal</th>
                                                <th class="p-4">Nama</th>
                                                <th class="p-4">Nama Faktur Pajak</th>
                                                <th class="p-4">Note</th>
                                                <th class="p-4">Koneksi</th>
                                                <th class="p-4">Alamat</th>
                                                <th class="p-4">Kota</th>
                                                <th class="p-4">Provinsi</th>
                                                <th class="p-4">Negara</th>
                                                <th class="p-4">Kode Pos</th>
                                                <th class="p-4">NPWP</th>
                                                <th class="p-4">No. Telp</th>
                                                <th class="p-4">TOP</th>
                                                <th class="p-4">Is Pajak</th>
                                                <th class="p-4"></th>
                                            </tr>
                                        </thead>
                                    </table>
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
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script>
    function toTitleCase(str) {
        var lcStr = str.toLowerCase();
        return lcStr.replace(/(?:^|\s)\w/g, function(match) {
            return match.toUpperCase();
        });
    }

    function formatDate(orginaldate) {
        if (orginaldate != "") {
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
            var date = year + "-" + month + "-" + day;
        } else {
            var date = ""
        }
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
        clearModal();
    })

    function loadingTable(divID) {
        var width = $(window).width();
        var height = $(window).height();
        var html = " <div class='loadingTable table-loading-overlay'>" +
            " <div class='loadingTable table-loading-inner'>" +
            "<div class='col-xs-4 col-xs-offset-4'>" +
            // tempat spinner
            // '<div class="spinner-grow text-light" role="status">' +
            '<h3 class="text-white text-loading"><div class="spinner-border text-light" role="status" style="height:100px;width:100px;"><span class="sr-only">Loading...</span></div></h3>' +
            // '</div>' +
            " </div>" +
            " </div>" +
            " </div>"

        $('#' + divID).append(html);
        $('.table-loading-overlay').css('height', height + 'px');
        $('.text-loading').css('padding-top', height / 2 + 'px');
        $('.text-loading').css('padding-left', width / 2 + 'px');
        // $('.table-loading-inner').css('padding-left', ($('#' + divID).width() / 2) + 'px');
        // console.log($('#' + divID).height() / 2)
    }
    var data_global
    var kode_terakhir

    function removeLoadingTable() {
        $('.loadingTable').remove()
    }

    $(document).ready(function() {
        getData()
    })

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                removeLoadingTable()
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Tidak Dapat Memuat Data, Silahkan Refresh Halaman Ini'
                });
            },
            beforeSend: function() {
                loadingTable('tableData')
            },
            success: function(response) {

                data_global = response['data']
                var data = response['data']['supplier'];
                // bikin kode nya
                kode_terakhir = parseInt(data[parseInt(data.length) - 1]['kode_baru'].split("-")[1]) + 1
                var header = []
                var body = []
                if (data != null || data != undefined) {
                    header = [{
                            'data': 'id'
                        }, {
                            'data': 'kode'
                        },
                        {
                            'data': 'tanggal'
                        },
                        {
                            'data': 'nama'
                        },
                        {
                            'data': 'nama_faktur'
                        },
                        {
                            'data': 'note'
                        },
                        {
                            'data': 'koneksi'
                        },
                        {
                            'data': 'alamat'
                        },
                        {
                            'data': 'kota'
                        },
                        {
                            'data': 'provinsi'
                        },
                        {
                            'data': 'negara'
                        },
                        {
                            'data': 'kode_pos'
                        },
                        {
                            'data': 'npwp'
                        },
                        {
                            'data': 'no_telp'
                        },
                        {
                            'data': 'top'
                        },
                        {
                            'data': 'is_pajak'
                        },
                        {
                            'data': 'action'
                        }
                    ]
                    var array = {}
                    // console.log(data)
                    $.each(data, function(keys, values) {
                        var pajak_form = ""
                        if (values['is_pajak'] == 'Y') {
                            pajak_form = '<i class="fa fa-check text-success"></i>'
                        } else {
                            pajak_form = '<i class="fa fa-check text-light"></i>'
                        }
                        array = {
                            'id': keys + 1,
                            'kode': values['kode_baru'],
                            'tanggal': formatDate(values['date_transaction']),
                            'nama': values['name'],
                            'nama_faktur': values['name_faktur_pajak'],
                            'note': values['note'],
                            'koneksi': values['connection'],
                            'alamat': values['address'],
                            'kota': values['city'],
                            'provinsi': values['province'],
                            'negara': values['country'],
                            'kode_pos': values['postal_code'],
                            'npwp': values['npwp'],
                            'no_telp': values['phone'],
                            'top': values['top'],
                            'is_pajak': pajak_form,
                            'action': '<i class="fa fa-pencil" onclick="formSupplierBaru(' + values['id'] + ',' + "'" + values['kode_baru'] + "'" + ',' + "'" + values['name'] + "'" + ',' + "'" + values['name_faktur_pajak'] + "'" + ',' + "'" + values['note'] + "'" + ',' + "'" + values['connection'] + "'" + ',' + "'" + values['address'] + "'" + ',' + "'" + values['city'] + "'" + ',' + "'" + values['province'] + "'" + ',' + "'" + values['country'] + "'" + ',' + "'" + values['postal_code'] + "'" + ',' + "'" + values['npwp'] + "'" + ',' + "'" + values['phone'] + "'" + ',' + "'" + values['top'] + "'" + ',' + "'" + values['is_pajak'] + "'" + ',' + "'" + values['date_transaction'] + "'" + ')" style="cursor:pointer;"></i>'
                        }
                        body.push(array)
                    })
                    $('#example').DataTable().destroy();
                    $('#example').DataTable({
                        fixedHeader: true,
                        "data": body,
                        pageLength: 10,
                        lengthMenu: [
                            [10, 20],
                            [10, 20]
                        ],
                        "columns": header,
                    })
                } else {
                    $('#textSetoranRange').html('<div class="container d-flex h-100 text-center d-none"><div class="row justify-content-center align-items-center align-self-center text-center mx-auto "><i class="">Tidak Ada Data yang Tersedia</i></div></div>');
                }
                removeLoadingTable()
            }
        });
    }

    function formSupplierBaru(id = "", kode = "", nama = "", nama_faktur = "", note = "", connection = "", address = "", city = "", province = "", country = "", postal_code = "", npwp = "", phone = "", top = "", is_pajak = "", tanggal = "") {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Supplier Baru</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        var input_kode = 'V-' + kode_terakhir
        if (kode != "") {
            input_kode = kode
        }

        html_body += '<div class="col-12 col-md-3">Kode Supplier</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="kode" class="form-control form-control-sm p-1" value="' + input_kode + '" disabled></div>'

        html_body += '<div class="col-12 col-md-3">Tanggal</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="date" name="" id="tanggal" class="form-control form-control-sm p-1" value="' + formatDate(tanggal) + '"></div>'

        html_body += '<div class="col-12 col-md-3">Nama</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="nama" class="form-control form-control-sm p-1" value="' + nama + '"></div>'

        html_body += '<div class="col-12 col-md-3">Nama Faktur Pajak</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="nama_faktur" class="form-control form-control-sm p-1" value="' + nama_faktur + '"></div>'

        html_body += '<div class="col-12 col-md-3">Note</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="note" class="form-control form-control-sm p-1" value="' + note + '"></div>'

        html_body += '<div class="col-12 col-md-3">Koneksi</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="koneksi" class="form-control form-control-sm p-1" value="' + connection + '"></div>'

        html_body += '<div class="col-12 col-md-3">Alamat</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><textarea class="form-control form-control-sm" row="10" id="alamat">' + address + '</textarea></div>'


        html_body += '<div class="col-12 col-md-3">Negara</div>'
        html_body += '<div class="col-12 col-md-9 mb-2">'
        html_body += '<select name="" id="negara" class="form-select form-select-sm" required="required">'
        var select_indo = ""
        var select_lainnya = ""
        var none = "d-none"
        var dnone = ""
        if (country != "") {
            if (country == 'Indonesia') {
                select_indo = 'selected'
            } else {
                select_lainnya = "selected"
                none = ""
                dnone = "d-none"
            }
        }
        html_body += '<option value="Indonesia" ' + select_indo + '>INDONESIA</option>'
        html_body += '<option value="lainnya" ' + select_lainnya + '>Lainnya...</option>'
        html_body += '</select>'
        html_body += '<input type="text" name="" id="negara_lain" class="form-control form-control-sm p-1 mt-2 ' + none + '" value="' + country + '" placeholder="Isi Nama Negara">'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-3">Provinsi</div>'
        html_body += '<div class="col-12 col-md-9 mb-2">'
        html_body += '<select name="" id="provinsi" class="form-select form-select-sm select-prov ' + dnone + '" required="required">'
        html_body += '<option value="" selected>Pilih Provinsi</option>'
        var id_pro = ""
        $.each(data_global['provinces'], function(keys, values) {
            var select_province = ""
            if (toTitleCase(values['name']) == toTitleCase(province)) {
                select_province = "selected"
                id_pro = values['id']
            }
            html_body += '<option value="' + values['id'] + '" data-nama="' + toTitleCase(values['name']) + '" ' + select_province + '>' + toTitleCase(values['name']) + '</option>'
        })
        html_body += '</select>'
        html_body += '<input type="text" name="" id="provinsi_lain" class="form-control form-control-sm p-1 input-prov ' + none + '" value="' + province + '" placeholder="Isi Nama Provinsi">'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-3">Kota</div>'
        html_body += '<div class="col-12 col-md-9 mb-2">'
        html_body += '<select name="" id="kota" class="form-select form-select-sm select-kota ' + dnone + '" required="required" disabled>'
        html_body += '</select>'
        html_body += '<input type="text" name="" id="kota_lain" class="form-control form-control-sm p-1 input-kota ' + none + '" value="' + city + '" placeholder="Isi Nama Kota">'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-3">Kode Pos</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="kode_pos" class="form-control form-control-sm p-1" value="' + postal_code + '"></div>'

        html_body += '<div class="col-12 col-md-3">NPWP</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="npwp" class="form-control form-control-sm p-1" value="' + npwp + '" onkeyup="formatNpwp(this)"></div>'

        html_body += '<div class="col-12 col-md-3">No. Telepon</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="no_telp" class="form-control form-control-sm p-1" value="' + phone + '"></div>'

        html_body += '<div class="col-12 col-md-3">Term of Payment</div>'
        html_body += '<div class="col-12 col-md-9 mb-2"><input type="text" name="" id="top" class="form-control form-control-sm p-1" value="' + top + '"></div>'

        html_body += '<div class="col-12 col-md-3"></div>'
        html_body += '<div class="col-12 col-md-9 mb-2">'
        html_body += '<div class="form-check">'
        var check_pajak = ""
        if (is_pajak == "Y") {
            check_pajak = "checked"
        }
        html_body += '<input class="form-check-input" type="checkbox" value="Y" id="is_pajak" ' + check_pajak + '>'
        html_body += '<label class="form-check-label" for="is_pajak">'
        html_body += 'Masuk Pajak?'
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        if (id != "") {
            html_body += '<div class="col-12"><button type="button" class="btn btn-danger btn-sm w-100 mt-5" onclick="hapusData(' + id + ',' + "'" + nama + "'" + ')">Hapus Data</button></div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" data-id="' + id + '">Simpan</button>'
        $('#modalFooter').html(html_footer);

        if (country != "") {
            if (country == 'Indonesia') {
                getKota(id_pro, city)
            }
        }
    }

    function hapusData(id, name) {
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus ' + name + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_url('MasterNtm/deleteSupplier'); ?>',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response['delete'] == 'tertaut') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Hapus',
                                text: 'Refresh Lagi Halaman Ini'
                            });
                        } else {
                            Swal.fire(
                                'Terhapus!',
                                'Data Terhapus',
                                'success'
                            )
                            $('#modal').modal('hide')
                            getData()
                        }
                    }
                });
            }
        })
    }

    function formatNpwp(value) {
        if (typeof value === 'string') {
            return value.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
    }
    $(document).on('change', "#negara", function() {
        if ($(this).val() == 'lainnya') {
            $('#negara_lain').removeClass('d-none')
            $('.input-prov').removeClass('d-none')
            $('.select-prov').addClass('d-none')
            $('.input-kota').removeClass('d-none')
            $('.select-kota').addClass('d-none')
        } else {
            $('#negara_lain').addClass('d-none')
            $('.input-prov').addClass('d-none')
            $('.select-prov').removeClass('d-none')
            $('.input-kota').addClass('d-none')
            $('.select-kota').removeClass('d-none')
        }
    })
    $(document).on('change', "select#provinsi", function() {
        getKota($(this).val(), "")
    })

    function getKota(id, city) {
        $('#kota').removeAttr('disabled', true)
        $.ajax({
            url: "<?= api_url('MasterNtm/loadCity'); ?>",
            method: "GET",
            data: {
                id: id
            },
            dataType: 'JSON',
            error: function(xhr) {
                removeLoadingTable()
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Tidak Dapat Memuat Data, Silahkan Refresh Halaman Ini'
                });
            },
            beforeSend: function() {
                loadingTable('tableData')
            },
            success: function(response) {
                var data = response['data']
                var html = ""
                $.each(data, function(keys, values) {
                    var select = ""
                    if (toTitleCase(values['name']) == toTitleCase(city)) {
                        select = "selected"
                    }
                    html += '<option value="' + values['id'] + '" data-nama="' + toTitleCase(values['name']) + '" ' + select + '>' + toTitleCase(values['name']) + '</option>'
                })
                $('#kota').html(html)
            }
        })
    }

    $(document).on('click', "#btnSimpan", function() {
        var negara = $('#negara').val()
        var provinsi = $('#provinsi').find(':selected').data('nama')
        var kota = $('#kota').find(':selected').data('nama')
        var check = ""
        if ($('#negara').val() == 'lainnya') {
            negara = $('#negara_lain').val()
            provinsi = $('#provinsi_lain').val()
            kota = $('#kota_lain').val()
        }
        if ($('#is_pajak').is(':checked') == true) {
            check = "Y"
        }
        var type = 'POST'
        var data = {
            kode_baru: $('#kode').val(),
            date_transaction: $('#tanggal').val(),
            name: $('#nama').val(),
            name_faktur_pajak: $('#nama_faktur').val(),
            category_id: null,
            note: $('#note').val(),
            connection: $('#koneksi').val(),
            address: $('#alamat').val(),
            city: kota,
            province: provinsi,
            country: negara,
            postal_code: $('#kode_pos').val(),
            npwp: $('#npwp').val(),
            phone: $('#no_telp').val(),
            top: $('#top').val(),
            is_pajak: check,
            is_active: 1,
        }
        if ($(this).data('id') == "") {
            var url = '<?php echo api_url('MasterNtm/insertSupplier'); ?>'
        } else {
            data['id'] = $(this).data('id')
            var url = '<?php echo api_url('MasterNtm/updateSupplier'); ?>'
        }
        kelolaData(data, type, url)
    })


    function kelolaData(data, type, url) {
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
                $('#btnSimpan').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnSimpan').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        $('#modal').modal('hide')
                        getData()
                        $('#btnSimpan').prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $('#btnSimpan').prop("disabled", false);
                }
            }
        });
    }
</script>