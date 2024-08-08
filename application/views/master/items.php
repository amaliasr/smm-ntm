<link href="<?= base_url(); ?>assets/smm/report.css" rel="stylesheet" type="text/css">
<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #69707a !important;
        font-size: 0.75rem !important;
        padding-left: 0.75rem !important;
    }

    .select2-container--default .select2-selection--single {
        border-color: #c5ccd6 !important;
    }

    .filter-border {
        border-bottom: 2px solid #40128B;
    }

    .bg-light-maroon {
        background-color: #9336B4;
    }

    .archive-row {
        background-color: #F8F6F4;
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
                                    <button type="button" class="btn btn-outline-light" onclick="formGrouping()"><i class="fa fa-check-square-o"></i> <span class="ms-2 d-none d-sm-block">Item Grouping</span></button>
                                    <button type="button" class="btn btn-light" onclick="formItemBaru()"><i class="fa fa-plus"></i> <span class="ms-2 d-none d-sm-block">Item Baru</span></button>
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
                    <div class="card-header d-none">
                        <div class="row">
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <input type="text" name="" id="input" autocomplete="off" class="form-control form-control-sm datepicker" placeholder="Tanggal">
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
                            <div class="row pb-3">
                                <div class="col-auto align-self-center" id="statusLine">
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive p-0">
                                    <table class="table table-bordered table-hover table-sm small" id="example">
                                        <thead class="bg-light">
                                            <tr style="height: 50px;vertical-align: middle;">
                                                <th style="width: 5%;">#</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Alias</th>
                                                <th>Satuan</th>
                                                <th>Konversi</th>
                                                <th>Tipe</th>
                                                <th>Unit</th>
                                                <th>Price</th>
                                                <th><i class="fa fa-gear"></i></th>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script>
    var groupedDataItem = []
    var dataListIdSatuan = [{
            'nama_id': 'Pembelian',
            'variable_id': 'satuanPembelian',
            'db_id': 'unit_id_purchase'
        },
        {
            'nama_id': 'Gudang',
            'variable_id': 'satuanGudang',
            'db_id': 'unit_id_warehouse'
        },
        {
            'nama_id': 'Request',
            'variable_id': 'satuanRequest',
            'db_id': 'unit_id_machine_request'
        },
        {
            'nama_id': 'Retur Gudang',
            'variable_id': 'satuanReturGudang',
            'db_id': 'unit_id_warehouse_return'
        },
    ]

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
        no_satuan = 1
        deletedKonversi = []
        numCostCenter = 0
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

    function number_format(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    var data_global
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var data_satuan_selected = []
    var formCostCenter = ''
    $(document).ready(function() {
        // $('#selectItem').selectpicker({

        // });
        // formCostCenter = $('#selectForm').html()
        getData()
    })
    var all_data_item = []

    function getData() {
        var isActive = [1, 0]
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                isActive: isActive
            },
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
                all_data_item = response['data']['item'];
                groupingDataMaterial(all_data_item)
            }
        });
    }

    function groupingDataMaterial(dataArray) {
        const data = dataArray
        groupedDataItem = Object.values(data.reduce((result, item) => {
            const {
                is_active
            } = item;

            if (result[is_active]) {
                result[is_active].count += 1;
                result[is_active].data.push(item);
                result[is_active].is_active = is_active;
            } else {
                result[is_active] = {
                    count: 1,
                    data: [item],
                    is_active: is_active
                };
            }

            return result;
        }, {}));
        groupedDataItem.sort(function(a, b) {
            var indexA = groupedDataItem.indexOf(a);
            var indexB = groupedDataItem.indexOf(b);
            return indexB - indexA;
        });
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-auto statusLine text-small pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="statusLine(' + "'all'" + ')" id="colStatusLineall">'
        html += 'Semua <span class="statusLineIcon ms-1 p-1 rounded bg-light-maroon text-white" id="statusLineIconall">' + dataArray.length + '</span>'
        html += '</div>'
        groupedDataItem.forEach(e => {
            var text = ''
            if (e.is_active == 1) {
                text = 'Active Item'
            } else {
                text = 'Archived'
            }
            html += '<div class="col-auto statusLine text-small pb-2 align-self-center text-grey" style="cursor:pointer" onclick="statusLine(' + "'" + e.is_active + "'" + ')" id="colStatusLine' + e.is_active + '">'
            html += text + ' <span class="statusLineIcon ms-1 p-1 rounded bg-light text-grey" id="statusLineIcon' + e.is_active + '">' + e.data.length + '</span>'
            html += '</div>'
        })
        html += '</div>'
        $('#statusLine').html(html)
        statusLine(1)
    }

    function statusLine(status) {
        if (status == 'all') {
            var data = all_data_item
        } else {
            var data = all_data_item.filter((v, k) => {
                if (v.is_active == status) return true
            })
        }
        coloringStatusLine(status)
        showData(data)
    }

    function coloringStatusLine(status) {
        // DEFAULT COLOR
        $('.statusLine').each(function() {
            if ($(this).hasClass('fw-bold') && $(this).hasClass('filter-border')) {
                $(this).removeClass('fw-bold filter-border').addClass('text-grey');
            }
        });
        $('.statusLineIcon').each(function() {
            if ($(this).hasClass('bg-light-maroon') && $(this).hasClass('text-white')) {
                $(this).removeClass('bg-light-maroon text-white').addClass('bg-light text-grey');
            }
        });
        $('#colStatusLine' + status).removeClass('text-grey').addClass('fw-bold filter-border')
        $('#statusLineIcon' + status).removeClass('bg-light text-grey').addClass('bg-light-maroon text-white')
    }

    function showData(data) {
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
                    'data': 'alias'
                },
                {
                    'data': 'satuan'
                },
                {
                    'data': 'konversi'
                },
                {
                    'data': 'tipe'
                },
                {
                    'data': 'unit'
                },
                {
                    'data': 'price'
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
                if (values['item_alias'] == null) {
                    values['item_alias'] = ''
                }
                var price = ""
                if (values['item_price'] != null) {
                    $.each(JSON.parse(values['item_price']), function(keys2, values2) {
                        if (values2['is_active'] = 1) {
                            price = number_format(values2['price'])
                        }
                    })
                }
                var satuan = ""
                if (values['data_konversi'] != null) {
                    $.each(values['data_konversi'], function(keys2, values2) {
                        satuan += '<span class="small">1 ' + values2['satuan_name'] + ' = <span class="text-success">' + values2['jumlah_konversi'] + '</span> ' + values['satuan_name'] + '</span><br>'
                    })
                }
                array = {
                    'id': keys + 1,
                    'kode': values['code'],
                    'nama': values['item_name'],
                    'alias': values['item_alias'],
                    'satuan': values['satuan_name'],
                    'konversi': satuan,
                    'tipe': values['type_name'],
                    'unit': values['unit_name'],
                    'price': price,
                    'is_active': values.is_active,
                    'action': '<i class="fa fa-pencil" onclick="formItemBaru(' + values['id'] + ',' + "'" + values['code'] + "'" + ',' + "'" + values['item_name'] + "'" + ',' + values['satuan_id'] + ',' + values['type_id'] + ',' + values['item_unit_id'] + ')" style="cursor:pointer;"></i>'
                }
                body.push(array)
            })
            $('#example').DataTable().destroy();
            $('#example').DataTable({
                fixedHeader: true,
                "data": body,
                responsive: true,
                pageLength: 10,
                lengthMenu: [
                    [10, 20],
                    [10, 20]
                ],
                "columns": header,
                rowCallback: function(row, body) {
                    if (body.is_active == 0) { // Misalnya, jika statusnya adalah "Completed"
                        $(row).addClass('archive-row'); // Tambahkan kelas CSS "completed-row" ke baris
                    }
                },
            })
        } else {
            $('#textSetoranRange').html('<div class="container d-flex h-100 text-center d-none"><div class="row justify-content-center align-items-center align-self-center text-center mx-auto "><i class="">Tidak Ada Data yang Tersedia</i></div></div>');
        }
        removeLoadingTable()
    }

    var getId = ''
    var numCostCenter = 0

    function formItemBaru(id = null, code = "", name = "", satuan = null, type = null, unit = null) {
        getId = id
        var dataFilter = data_global.item.find((v, k) => {
            if (v.id == id) return true
        })
        var alias = ''
        if (dataFilter != undefined) {
            alias = dataFilter.item_alias
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Item Baru</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        // BASIC
        html_body += '<div class="col-12 mb-2 p-3">'
        html_body += '<b class="mb-2">Informasi Dasar</b>'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 col-md-4 text-end">Kode</div>'
        html_body += '<div class="col-12 col-md-8 mb-2"><input type="text" id="code" autocomplete="off" class="form-control form-control-sm p-1" value="' + code + '"></div>'

        html_body += '<div class="col-12 col-md-4 text-end">Nama</div>'
        html_body += '<div class="col-12 col-md-8 mb-2"><input type="text" id="nama" autocomplete="off" class="form-control form-control-sm p-1" value="' + name + '"></div>'

        html_body += '<div class="col-12 col-md-4 text-end">Alias</div>'
        html_body += '<div class="col-12 col-md-8 mb-2"><input type="text" id="alias" autocomplete="off" class="form-control form-control-sm p-1" value="' + alias + '"></div>'

        html_body += '<div class="col-12 col-md-4 text-end">Satuan Terkecil</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<select name="" id="satuan_tetap" class="form-select form-select-sm satuan_tetap" required="required" onchange="getArraySatuan()">'
        html_body += '<option value="" selected disabled data-name=" ">Pilih Satuan Tetap</option>'
        $.each(data_global['itemSatuan'], function(keys, values) {
            var select = ""
            if (satuan != "") {
                if (values['id'] == satuan) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + values['id'] + '" ' + select + ' data-name="' + values['name'] + '">' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-4 text-end">Cost Center</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<div id="fieldCostCenterAdd">'
        html_body += '</div>'
        html_body += '<div id="fieldCostCenter">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-4 text-end">Konversi</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<div id="formSatuan">'
        html_body += '</div>'
        html_body += '<div class="row">'
        html_body += '<div class="col-9 align-self-center">'
        html_body += '<p class="lh-0 p-0 m-0" style="font-size:11px;"><b>Satuan Tetap</b> merupakan satuan dimana sebagai acuan setiap konversi yang akan dibuat</p>'
        html_body += '</div>'
        html_body += '<div class="col-3 text-end align-self-center">'
        html_body += '<button type="button" class="btn btn-sm btn-success" onclick="tambahFormSatuan()"><i class="fa fa-plus me-2"></i> Add</button>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // BASIC
        // MANAJEMEN SATUAN
        html_body += '<div class="col-12 bg-light mt-2 mb-2 p-3">'
        html_body += '<b class="mb-2">Manajemen Satuan</b>'
        html_body += '<div class="row mt-2">'

        dataListIdSatuan.forEach(list => {
            html_body += '<div class="col-12 col-md-4 text-end">' + list.nama_id + '</div>'
            html_body += '<div class="col-12 col-md-8 mb-2">'
            html_body += '<select id="' + list.variable_id + '" class="form-select form-select-sm manajemenSatuan" required="required">'
            html_body += '</select>'
            html_body += '</div>'
        });

        html_body += '</div>'
        html_body += '</div>'
        // MANAJEMEN SATUAN

        // MESIN
        html_body += '<div class="col-12 mt-2 mb-2 p-3">'
        html_body += '<b class="mb-2">Informasi Mesin</b>'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 col-md-4 text-end">Tipe</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<select name="" id="tipe" class="form-select form-select-sm" required="required" onchange="changeName()">'
        if (type == null) {
            html_body += '<option value="" selected>Tanpa Tipe</option>'
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

        html_body += '<div class="col-12 col-md-4 text-end">Unit Mesin</div>'
        html_body += '<div class="col-12 col-md-8 mb-2">'
        html_body += '<select name="" id="unit_mesin" class="form-select form-select-sm" required="required">'
        if (unit == null) {
            html_body += '<option value="null" selected>Tanpa Unit Mesin</option>'
        } else {
            html_body += '<option value="null">Tanpa Unit Mesin</option>'
        }
        $.each(data_global['itemUnit'], function(keys, values) {
            var select = ""
            if (unit == values['unit_id']) {
                select = 'selected'
            }
            html_body += '<option value="' + values['unit_id'] + '" ' + select + '>' + values['unit_name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // MESIN

        if (id != null) {
            if (dataFilter.is_active == 1 || dataFilter.is_active == null) {
                html_body += '<div class="col-12"><button type="button" class="btn btn-outline-danger btn-sm w-100 mt-5 pt-3 pb-3" onclick="hapusData(' + id + ',' + "'" + name + "'" + ')"><i class="fa fa-archive me-2"></i>Arsip Data</button></div>'
            } else {
                html_body += '<div class="col-12"><button type="button" class="btn btn-outline-success btn-sm w-100 mt-5 pt-3 pb-3" onclick="hapusData(' + id + ',' + "'" + name + "'" + ',1)"><i class="fa fa-undo me-2"></i>Aktifkan Kembali Data</button></div>'
            }
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        if (!dataFilter) {
            addFieldCostCenter()
        } else {
            if (dataFilter.cost_center_ids) {
                dataFilter.cost_center_ids.forEach(e => {
                    addFieldCostCenter(e)
                });
            } else {
                addFieldCostCenter()
            }
        }
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" data-id="' + id + '">Simpan</button>'
        $('#modalFooter').html(html_footer);
        if (id == null) {
            tambahFormSatuan()
        } else {
            var data_satuan = data_global['item'].filter((value, key) => {
                if (value.id == id) return true
            })[0]['data_konversi']
            $.each(data_satuan, function(keys, values) {
                tambahFormSatuan(data_satuan[keys])
            })
        }
        changeName()
    }
    // const validateMe = () => {
    //     $(".signupForm").validate({
    //         // in 'rules' user have to specify all the constraints for respective fields
    //         rules: {
    //             dateRange: "required",
    //             produkTarget: "required",
    //             jumlahTarget: "required",
    //         },
    //         // in 'messages' user have to specify message as per rules
    //         messages: {
    //             dateRange: "Harap isi Date Range untuk mengisi Daily Planning",
    //         }
    //     });
    // }

    var no_satuan = 1

    function tambahFormSatuan(data = "") {
        var html_body = ""
        html_body += '<div class="row" id="rowKonversi' + no_satuan + '">'

        html_body += '<div class="col-4 mb-2">'
        html_body += '<select name="" id="satuan' + no_satuan + '" class="form-select form-select-sm satuan" required="required" onchange="getArraySatuan()">'
        html_body += '<option value="" selected disabled>Pilih Satuan</option>'
        $.each(data_global['itemSatuan'], function(keys, values) {
            var select = ""
            if (data != "") {
                if (values['id'] == data['satuan_id']) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-auto mb-2 align-self-center"> = '
        html_body += '</div>'
        html_body += '<div class="col-4 mb-2">'
        if (data == "") {
            html_body += '<input type="text" id="konversi' + no_satuan + '" autocomplete="off" class="form-control form-control-sm p-1 konversi" value="" placeholder="Nilai Konversi" data-id_konversi="">'
        } else {
            html_body += '<div class="input-group">'
            html_body += '<input type="text" id="konversi' + no_satuan + '" autocomplete="off" class="form-control form-control-sm p-1 konversi" value="' + data['jumlah_konversi'] + '" placeholder="Nilai Konversi" data-id_konversi="' + data['konversi_id'] + '">'
            html_body += '<button class="btn btn-sm btn-outline-danger" type="button" onclick="clickDeleteKonversi(' + no_satuan + ',' + data['konversi_id'] + ')"><i class="fa fa-trash"></i></button>'
            html_body += '</div>'

        }
        html_body += '</div>'
        html_body += '<div class="col-2 mb-2 align-self-center">'
        html_body += '<span class="namaSatuanTetap">...</span>'
        html_body += '</div>'
        html_body += '</div>'
        $('#formSatuan').append(html_body)
        changeName()
        no_satuan++
    }
    var deletedKonversi = []

    function clickDeleteKonversi(no, konversi_id) {
        $('#rowKonversi' + no).empty()
        deletedKonversi.push(konversi_id)
    }

    $(document).on('change', "#satuan_tetap", function() {
        changeName()
    })

    function changeName() {
        var nama = $('#satuan_tetap').find(':selected').data('name')
        $('.namaSatuanTetap').html(nama)
        getArraySatuan()
    }

    function getArraySatuan() {
        var satuan_tetap = $('#satuan_tetap').val()
        var id_satuan = $('.satuan').map(function() {
            return $(this).val();
        }).get();
        var hasil = id_satuan.concat(satuan_tetap);
        getMenejemenSatuan(hasil)
    }

    var satuan_before = ''

    function getMenejemenSatuan(satuan) {
        var hasilFilter = data_global['itemSatuan'].filter(function(e) {
            return satuan.includes(e.id);
        });
        var html = ""
        html += '<option value="" selected disabled>Pilih Satuan</option>'
        if (satuan[0] != null) {
            $.each(hasilFilter, function(k, v) {
                html += '<option value="' + v.id + '" class="select-option">' + v.name + '</option>'
            })
        }
        $('.manajemenSatuan').html(html)
        returnValueSelect(satuan)
    }

    function returnValueSelect(satuan) {
        var alert = 'no'
        if (satuan_before != '') {
            if (data_satuan_selected.length > 0) {
                data_satuan_selected.forEach(e => {
                    var indexSatuanBefore = satuan_before.indexOf(e.nilai)
                    if (satuan[indexSatuanBefore] == e.nilai) {
                        // jika nilai nya masih sama
                        $('#' + e.id).val(e.nilai)
                    } else {
                        // jika nilainya berubah
                        $('#' + e.id).val('')
                    }
                    var available = cekAvailableSelectedOption(e.id, e.nilai)
                    if (available == 'tidak') {
                        alert = 'ya'
                    }
                });
            } else {
                if (getId != '') {
                    var dataFilter = data_global.item.find((v, k) => {
                        if (v.id == getId) return true
                    })
                    if (dataFilter != undefined) {
                        dataListIdSatuan.forEach(e => {
                            $('#' + e.variable_id).val(eval('dataFilter.' + e.db_id))
                        });
                    }
                }
            }
        }
        if (alert == 'ya') {
            Swal.fire({
                icon: 'error',
                title: 'Pilihan Satuan Berubah',
                text: 'Nilai Satuan yang Terpilih akan ikut berubah sesuai dengan Nilai yang Berubah'
            });
        }
        satuan_before = satuan
        checkManagemenSatuan(satuan)
    }

    function cekAvailableSelectedOption(id, value) {
        var nilaiCari = value; // Nilai yang ingin diperiksa
        var selectElement = $('#' + id);
        // Mencari opsi dengan nilai yang sesuai
        var opsi = selectElement.find('option[value="' + nilaiCari + '"]');
        if (opsi.length > 0) {
            // Nilai ditemukan dalam elemen <select>
            return 'ada'
        } else {
            // Nilai tidak ditemukan dalam elemen <select>
            return 'tidak'
        }
    }

    function checkManagemenSatuan(satuan) {
        var jumlahDipilih = $('.manajemenSatuan option:selected').not(':disabled').length;
        if (jumlahDipilih > 0) {
            var arrayNilai = satuan; // Array nilai yang akan dicocokkan
            // Memeriksa setiap elemen select
            var semuaTerpilih = true;
            $('.manajemenSatuan').each(function() {
                var nilaiTerpilih = $(this).val(); // Nilai terpilih pada elemen select
                // Memeriksa apakah nilai terpilih ada dalam array nilai
                if (nilaiTerpilih != null) {
                    if (arrayNilai.indexOf(nilaiTerpilih) == -1) {
                        semuaTerpilih = false;
                        return false; // Hentikan iterasi jika ada nilai yang tidak cocok
                    }
                }
            });
            // console.log(semuaTerpilih);
        }
    }

    $(document).on('change', ".manajemenSatuan", function() {
        var nilaiTerpilih = $(this).val(); // Nilai terpilih pada elemen select
        var idElemen = $(this).attr('id'); // ID elemen select
        var hasilFilter = data_satuan_selected.find(function(e) {
            return e.id == idElemen;
        });
        if (hasilFilter == undefined) {
            // tidak ada
            data_satuan_selected.push({
                'id': idElemen,
                'nilai': nilaiTerpilih
            })
        } else {
            // ada
            var indeks = data_satuan_selected.findIndex(function(o) {
                return o.id == idElemen;
            });
            data_satuan_selected[indeks].nilai = nilaiTerpilih
        }
    })

    function hapusData(id, name, isActive = 0) {
        if (isActive == 1) {
            var text = 'Apakah anda yakin ingin mengaktifkan kembali data ' + name + '?'
        } else {
            var text = 'Apakah anda yakin ingin mengarsipkan ' + name + '?'
        }
        Swal.fire({
            text: text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_url('MasterNtm/deleteItem'); ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        isActive: isActive,
                    },
                    success: function(response) {
                        if (response['delete'] == 'tertaut') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Menyimpan Data',
                                text: 'Refresh Lagi Halaman Ini'
                            });
                        } else {
                            Swal.fire(
                                'Tersimpan!',
                                'Data Berhasil Tersimpan',
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
        var satuan_tetap = $('#satuan_tetap').val()
        var cost_center = $('.cost_center').map(function() {
            return $(this).val();
        }).get();
        var id_satuan = $('.satuan').map(function() {
            return $(this).val();
        }).get();
        var konversi = $('.konversi').map(function() {
            return $(this).val();
        }).get();
        var id_konversi = $('.konversi').map(function() {
            return $(this).data('id_konversi');
        }).get();
        var satuan = []
        for (let i = 0; i < id_satuan.length; i++) {
            satuan.push({
                'id_satuan': id_satuan[i],
                'konversi': konversi[i],
                'id_konversi': id_konversi[i],
            })
        }
        var costCenterIds = []
        for (let i = 0; i < cost_center.length; i++) {
            if (cost_center[i]) {
                costCenterIds.push(cost_center[i])
            }
        }
        var type = 'POST'
        var button = '#btnSimpan'
        var data = {
            satuan_tetap: satuan_tetap,
            code: $('#code').val(),
            name: $('#nama').val(),
            satuan: satuan,
            type: $('#tipe').val(),
            unit: $('#unit_mesin').val(),
            active: 1,
            user: user_id,
            alias: $('#alias').val(),
            unitIdPurchase: $('#satuanPembelian').val(),
            unitIdWarehouse: $('#satuanGudang').val(),
            unitIdMachineRequest: $('#satuanRequest').val(),
            unitIdWarehouseReturn: $('#satuanReturGudang').val(),
            costCenterIds: costCenterIds,
        }
        if ($(this).data('id') == null) {
            var url = '<?php echo api_url('MasterNtm/insertItem'); ?>'
        } else {
            data['id'] = $(this).data('id')
            data['deleted_konversi_id'] = deletedKonversi
            var url = '<?php echo api_url('MasterNtm/updateItem'); ?>'
        }
        // console.log(data)
        kelolaData(data, type, url, button)
    })

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
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        $('#modal').modal('hide')
                        getData()
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

    function formGrouping() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Item Grouping</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6 mb-2">'
        html_body += '<div class="input-group input-group-joined">'
        html_body += '<input autocomplete="off" class="form-control pe-0" type="text" placeholder="Cari Item" aria-label="Search" id="search_item">'
        html_body += '<span class="input-group-text">'
        html_body += '<i class="fa fa-search"></i>'
        html_body += '</span>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<select class="form-select d-none select_unit" aria-label=".form-select-sm example">'
        html_body += '<option value="" selected disabled>Pilih Unit</option>'
        $.each(data_global['itemUnit'], function(key, value) {
            html_body += '<option value="' + value['unit_id'] + '">' + value['unit_name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6 overflow-auto" style="height:' + $(window).height() / 2 + 'px;">'
        $.each(data_global['item'], function(key, value) {
            html_body += '<div class="card shadow-none data-user mb-1" data-id="' + value['id'] + '" id="card_user' + value['id'] + '">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row d-flex align-items-center">'
            html_body += '<div class="col-1">'
            html_body += '<input class="form-check-input checkbox-user" type="checkbox" value="' + value['id'] + '" id="checkUser' + value['id'] + '">'
            html_body += '</div>'
            html_body += '<div class="col-10"><span class="text_user" data-id="' + value['id'] + '">' + value['code'] + ' ' + value['name'] + '</span></div>'
            if (value['item_unit_id'] != "" && value['item_unit_id'] != null && value['item_unit_id'] != 0) {
                html_body += '<div class="col-1"><i class="fa fa-check text-success"></i></div>'
            } else {
                html_body += '<div class="col-1"><i class="fa fa-check text-light"></i></div>'
            }
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div id="showItemUnit" class="mt-2 d-none">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanGroup">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }
    $(document).on('click', '.data-user', function(e) {
        $('.select_unit,#showItemUnit').addClass('d-none')
        var id = $(this).data('id')
        if ($('#checkUser' + id).is(':checked')) {
            $('#checkUser' + id).removeAttr('checked', true)
            $('#card_user' + id).removeClass('bg-primary text-white')
        } else {
            $('#checkUser' + id).attr('checked', true)
            $('#card_user' + id).addClass('bg-primary text-white')
        }
        if ($('.checkbox-user:checked').length > 0) {
            $('.select_unit, #showItemUnit').removeClass('d-none')
        }
    });
    $(document).on('keyup', '#search_item', function(e) {
        var value = $(this).val().toLowerCase();
        var cards = $('.text_user').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_user').map(function() {
            return $(this).data('id');
        }).get();
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            if (element > -1) {
                $('#card_user' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_user' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('change', '.select_unit', function(e) {
        var html = "List Mesin :"
        html += '<ol>'
        $.each(data_global['itemUnit'], function(key, value) {
            if (value['unit_id'] == $('.select_unit').val()) {
                $.each(JSON.parse(value['unit_detail']), function(keys, values) {
                    html += '<li>' + values['name'] + '</li>'
                })
            }
        })
        html += '<ol>'
        $('#showItemUnit').html(html)
    })
    $(document).on('click', '#btnSimpanGroup', function(e) {
        var item = $('.checkbox-user:checked').map(function() {
            return $(this).val();
        }).get();
        var type = 'POST'
        var button = '#btnSimpanGroup'
        var data = {
            id_item: item,
            unit: $('.select_unit').val()
        }
        var url = '<?php echo api_url('Api_Warehouse/updateItemtoUnit'); ?>'
        kelolaData(data, type, url, button)
    })

    function addFieldCostCenter(idCostCenter = null) {
        var html = ''
        html += '<div class="row mb-1" id="fieldCostCenter' + numCostCenter + '">'
        html += '<div class="col-11 pe-1">'
        html += '<select name="" id="cost_center' + numCostCenter + '" class="form-select form-select-sm cost_center super-small-text" required="required">'
        html += '<option value="" selected disabled>Pilih Cost Center</option>'
        $.each(data_global['costCenter'], function(keys, values) {
            var select = ''
            if (idCostCenter != null) {
                if (values['id'] == idCostCenter) {
                    select = 'selected'
                }
            }
            html += '<option value="' + values['id'] + '" data-name="' + values['name'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html += '</select>'
        html += '</div>'
        if (numCostCenter == 0) {
            html += '<div class="col-1 ps-0">'
            html += '<button type="button" class="btn btn-sm btn-success px-2 shadow-none" onclick="addFieldCostCenter()"><i class="fa fa-plus"></i></button>'
            html += '</div>'
            html += '</div>'
            $('#fieldCostCenterAdd').html(html)
        } else {
            html += '<div class="col-1 ps-0">'
            html += '<button type="button" class="btn btn-sm btn-danger px-2 shadow-none" onclick="hapusFieldCostCenter(' + numCostCenter + ')"><i class="fa fa-trash"></i></button>'
            html += '</div>'
            html += '</div>'
            $('#fieldCostCenter').append(html)
        }
        $('#cost_center' + numCostCenter).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        numCostCenter++
    }

    function hapusFieldCostCenter(id) {
        $('#fieldCostCenter' + id).remove()
    }
</script>