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
<main id="tableData">
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-file"></i></div>
                            Items
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-outline-light" onclick="formItemBaru()"><i class="fa fa-plus"></i> <span class="ms-2 d-none d-sm-block">Item Baru</span></button>
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

                                    <table class="table table-bordered table-hover table-sm" id="example">
                                        <thead class="bg-light">
                                            <tr style="height: 50px;vertical-align: middle;">
                                                <th style="width: 5%;">#</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Satuan</th>
                                                <th>Tipe</th>
                                                <th></th>
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
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script>
    function toTitleCase(str) {
        var lcStr = str.toLowerCase();
        return lcStr.replace(/(?:^|\s)\w/g, function(match) {
            return match.toUpperCase();
        });
    }

    function formatDate(orginaldate) {
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

    function removeLoadingTable() {
        $('.loadingTable').remove()
    }
    var data_global
    var user_id = 999

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
                $('#textSetoranRange').html("")
                data_global = response['data']
                console.log(data_global)
                var data = response['data']['item'];
                var header = []
                var body = []
                if (data != null || data != undefined) {
                    header = [{
                            'data': 'id'
                        },
                        {
                            'data': 'kode'
                        },
                        {
                            'data': 'nama'
                        },
                        {
                            'data': 'satuan'
                        },
                        {
                            'data': 'tipe'
                        },
                        {
                            'data': 'action'
                        }
                    ]
                    var array = {}
                    $.each(data, function(keys, values) {
                        if (values['type_name'] == null) {
                            values['type_name'] = ""
                        }
                        array = {
                            'id': keys + 1,
                            'kode': values['code'],
                            'nama': values['name'],
                            'satuan': values['satuan_name'],
                            'tipe': values['type_name'],
                            'action': '<i class="fa fa-pencil" onclick="formItemBaru(' + values['id'] + ',' + "'" + values['code'] + "'" + ',' + "'" + values['name'] + "'" + ',' + values['satuan_id'] + ',' + values['type_id'] + ')" style="cursor:pointer;"></i>'
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

    function formItemBaru(id = null, code = "", name = "", satuan = null, type = null) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Item Baru</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-4">Kode</div>'
        html_body += '<div class="col-12 col-md-8 mb-2"><input type="text" id="code" class="form-control form-control-sm p-1" value="' + code + '"></div>'

        html_body += '<div class="col-12 col-md-4">Nama</div>'
        html_body += '<div class="col-12 col-md-8 mb-2"><input type="text" id="nama" class="form-control form-control-sm p-1" value="' + name + '"></div>'

        html_body += '<div class="col-12 col-md-4">Satuan</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<select name="" id="satuan" class="form-select form-select-sm" required="required">'
        if (satuan == null) {
            html_body += '<option value="" selected disabled>Pilih Satuan</option>'
        }
        $.each(data_global['itemSatuan'], function(keys, values) {
            var select = ""
            if (satuan == values['id']) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-4">Tipe</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<select name="" id="tipe" class="form-select form-select-sm" required="required">'
        if (type == null) {
            html_body += '<option value="" selected disabled>Pilih Tipe</option>'
        }
        $.each(data_global['itemType'], function(keys, values) {
            var select = ""
            if (type == values['id']) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        if (id != null) {
            html_body += '<div class="col-12"><button type="button" class="btn btn-danger btn-sm w-100 mt-5" onclick="hapusData(' + id + ',' + "'" + name + "'" + ')">Hapus Data</button></div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" data-id="' + id + '">Simpan</button>'
        $('#modalFooter').html(html_footer);
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
                    url: '<?php echo api_url('MasterNtm/deleteItem'); ?>',
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
    $(document).on('click', "#btnSimpan", function() {
        var type = 'POST'
        var data = {
            code: $('#code').val(),
            name: $('#nama').val(),
            satuan: $('#satuan').val(),
            type: $('#tipe').val(),
            active: 1,
            user: user_id,
        }
        if ($(this).data('id') == null) {
            var url = '<?php echo api_url('MasterNtm/insertItem'); ?>'
        } else {
            data['id'] = $(this).data('id')
            var url = '<?php echo api_url('MasterNtm/updateItem'); ?>'
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