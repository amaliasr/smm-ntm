<link href="<?= base_url(); ?>assets/smm/master.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/mobiscroll.jquery.min.css">
<script src="<?= base_url() ?>assets/js/mobiscroll.jquery.min.js"></script>
<script src="https://use.fontawesome.com/d80f210d12.js"></script>
<!-- Chart js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<main>
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col pb-2">
                <h1 class="text-dark-grey m-0">
                    <b class="small">Waste Group Settings</b>
                </h1>
                <p class="super-small-text m-0 text-light-dark-grey">Master Waste Group</p>
            </div>
            <div class="col-auto align-self-center">
                <button type="button" class="btn btn-primary btn-sm" onclick="addMaterialGroup()"><i class="fa fa-plus me-2"></i>Tambah Baru</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4" id="listWasteGroup">
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
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2" style="overflow-x: hidden">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="true">
    <div class="offcanvas-header p-5" id="canvasHeader">
    </div>
    <div class="offcanvas-body p-5" id="canvasBody">
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
        firstKlik = false
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        firstKlik == false
        clearModal();
    })

    function cardAlert(text) {
        var html = ''
        html += '<div class="card shadow-none h-100" style="background-color:transparent;border: 1px dashed #cfcfcf;">'
        html += '<div class="card-body p-3 text-center d-flex align-items-center justify-content-center">'
        html += '<p class="m-0 super-small-text text-grey"><i>' + text + '</i></p>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function createCodeId() {
        var code = Math.floor(new Date().getTime() / 1000.0)
        return code;
    }
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var dataListWasteGroup
    var dataDetail
    var itemIdSelected = []
    var choosenId
    var indexLine = ''

    $(document).ready(function() {
        loadData()
    })

    function loadData() {
        var data = {}
        var url = "<?= api_produksi('loadPageWasteGroupManage'); ?>"
        getData(data, url)
    }

    function getData(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dataListWasteGroup = response.data
                $('#listWasteGroup').html(templateTable())
                $('#tableDetail').DataTable({
                    ordering: false, // Menonaktifkan pengurutan
                    pageLength: 200,
                    scrollY: "400px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedHeader: true,
                    search: false,
                })
            }
        })
    }

    function templateTable() {
        var html = ''
        html += '<table class="table table-sm table-hover w-100" id="tableDetail">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle small-text" style="width:10px;padding:20px;">#</th>'
        html += '<th class="align-middle small-text">Name</th>'
        html += '<th class="align-middle small-text">Label</th>'
        html += '<th class="align-middle small-text">Unit</th>'
        html += '<th class="align-middle small-text">Ratio Total</th>'
        html += '<th class="align-middle small-text">Detail</th>'
        html += '<th class="align-middle small-text">Action</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        var a = 1
        dataListWasteGroup.wasteGroup.forEach(e => {
            html += listDetail(a, e)
            a++
        });
        html += '</tbody>'
        return html
    }

    function findUnit(id) {
        var a = ''
        var data = dataListWasteGroup.unit.find((v, k) => {
            if (v.id == id) return true
        })
        if (data) {
            a = data.name
        }
        return a
    }

    function listDetail(num, data) {
        var html = ''
        html += '<tr>'
        html += '<td class="align-middle small-text text-center">' + num + '</td>'
        html += '<td class="align-middle small-text text-center">' + data.name + '</td>'
        html += '<td class="align-middle small-text text-center">' + data.label + '</td>'
        html += '<td class="align-middle small-text text-center">' + findUnit(data.unit_id) + '</td>'
        html += '<td class="align-middle small-text text-center">' + data.ratio_total + '</td>'
        html += '<td class="align-middle small-text text-center">' + data.waste_group_details.length + '</td>'
        html += '<td class="align-middle small-text text-center">'
        html += '<button type="button" class="btn btn-outline-primary btn-sm me-1" onclick="editMaterialGroup(' + data.id + ')"><i class="fa fa-pencil"></i></button>'
        html += '</td>'
        html += '</tr>'
        return html
    }

    function directToManage(id) {
        var url = "<?= base_url() ?>master/convertionMachine/" + id
        window.open(url, '_blank');
    }

    function editMaterialGroup(id) {
        var data = dataListWasteGroup.wasteGroup.find((v, k) => {
            if (v.id == id) return true
        })
        addMaterialGroup(data)
    }

    function addMaterialGroup(data = null) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Manage Waste Group</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row pt-3 ps-5 pe-5 pb-3">'

        html_body += '<div class="col-5">'
        html_body += '<div class="row">'

        var name = ''
        var label = ''
        var ratio_total = ''
        var idWasteGroup = ''
        if (data) {
            name = data.name
            label = data.label
            ratio_total = data.ratio_total
            idWasteGroup = data.id
        }
        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Nama</div>'
        html_body += '<div class="col-9 small-text fw-bolder pb-2"><input class="form-control form-control-sm" id="nameMaterial" autocomplete="off" value="' + name + '" data-id="' + idWasteGroup + '"></div>'

        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Label</div>'
        html_body += '<div class="col-9 small-text fw-bolder pb-2"><input class="form-control form-control-sm" id="labelMaterial" autocomplete="off" value="' + label + '"></div>'

        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Ratio Total</div>'
        html_body += '<div class="col-9 small-text fw-bolder pb-2"><input class="form-control form-control-sm" id="ratioTotalMaterial" autocomplete="off" value="' + ratio_total + '"></div>'


        html_body += '<div class="col-3 small-text fw-bolder align-self-center pb-2">Unit</div>'
        html_body += '<div class="col-9 small-text fw-bolder pb-2">'
        html_body += '<select class="form-control form-control-sm w-100" id="selectUnit" title="Pilih Unit">'
        html_body += '<option value="">Pilih Unit</option>'
        dataListWasteGroup.unit.forEach(e => {
            var select = ''
            if (data) {
                if (e.id == data.unit_id) {
                    select = 'selected'
                }
            }
            html_body += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html_body += '</select>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-7">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<p class="fw-bolder">Waste Group Detail</p>'
        html_body += '</div>'
        html_body += '<div class="col-12" id="fieldMaterialGroup">'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-2">'
        html_body += '<button class="btn btn-sm btn-outline-primary w-100" onclick="getMaterialGroup()"><i class="me-2 fa fa-plus"></i>Tambah Material Group</button>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        if (data) {
            html_body += '<div class="col-12 mt-5">'
            html_body += '<button class="btn btn-sm btn-outline-danger w-100 small-text" onclick="deleteWasteGroup(' + data.id + ',' + "'" + data.name + "'" + ')">Hapus Waste Group Ini</button>'
            html_body += '</div>'
        }

        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm btnSimpan" onclick="saveVariable()">Simpan</button>'
        $('#modalFooter').html(html_footer)
        $('#fieldMaterialGroup').html(cardAlert('Tidak Ada Data'))
        $('#selectUnit').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        if (data) {
            getMaterialGroup(data)
        }
    }

    var firstKlik = false
    var data_item

    function getMaterialGroup(dataEdit = null) {
        if (!data_item) {
            $.ajax({
                url: "<?= api_produksi('getMaterialGroup'); ?>",
                method: "GET",
                dataType: 'JSON',
                error: function(xhr) {
                    showOverlay('hide')
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error Data'
                    });
                },
                beforeSend: function() {
                    showOverlay('show')
                },
                success: function(response) {
                    showOverlay('hide')
                    data_item = response.data.materialGroup
                    addItemMaterial(dataEdit)
                }
            })
        } else {
            addItemMaterial(dataEdit)
        }
    }

    function addItemMaterial(dataEdit = null) {
        if (firstKlik == false) {
            firstKlik = true
            $('#fieldMaterialGroup').html('')
        }
        if (dataEdit) {
            dataEdit.waste_group_details.forEach(e => {
                templateItemMaterial(e, dataEdit)
            });
        } else {
            templateItemMaterial()
        }
    }
    var indexSelectItem = 0

    function templateItemMaterial(dataItem = null, dataEdit = null) {
        var idItem = 0
        var namaItem = ''
        if (dataItem) {
            idItem = dataItem.id
            namaItem = dataItem.material_group.name
        }
        var html = ''
        html += '<div class="row mb-2" id="cardItemMaterial' + indexSelectItem + '">'
        html += '<div class="col-5 small-text fw-bolder">'

        html += '<select class="form-control form-control-sm w-100 selectItem" id="selectItem' + indexSelectItem + '" title="Pilih Material Group">'
        html += '<option value="">Pilih Material Group</option>'
        data_item.forEach(e => {
            var select = ''
            if (dataItem) {
                if (dataItem.material_group_id == e.id) {
                    select = 'selected'
                }
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        var ratio = ''
        if (dataItem) {
            ratio = dataItem.ratio
        }

        html += '</div>'
        html += '<div class="col-2 ps-0 small-text fw-bolder">'
        html += '<input class="form-control form-control-sm ratio" id="ratio' + indexSelectItem + '" placeholder="Ratio" autocomplete="off" value="' + ratio + '" data-id="' + idItem + '">'
        html += '</div>'
        html += '<div class="col-3 p-0 small-text fw-bolder">'
        html += '<select class="form-control form-control-sm w-100 selectUnitDetail" id="selectUnitDetail' + indexSelectItem + '" title="Pilih Unit">'
        html += '<option value="">Pilih Unit</option>'
        dataListWasteGroup.unit.forEach(e => {
            var select = ''
            if (dataItem) {
                if (e.id == dataItem.unit_id) {
                    select = 'selected'
                }
            }
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'
        html += '<div class="col-1">'

        html += '<button class="btn btn-sm btn-danger" onclick="deleteMaterialGroup(' + indexSelectItem + ',' + idItem + ',' + "'" + namaItem + "'" + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'
        html += '</div>'
        $('#fieldMaterialGroup').append(html)
        $('#selectItem' + indexSelectItem).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#selectUnitDetail' + indexSelectItem).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        indexSelectItem++
        itemMaterialStatus()
    }

    function doDeleteItem(index) {
        $('#cardItemMaterial' + index).remove()
        itemMaterialStatus()
    }

    function itemMaterialStatus() {
        var findSelectItem = $('.selectItem').map(function() {
            return $(this).val();
        }).get()
        if (!findSelectItem.length) {
            firstKlik = false
            $('#fieldMaterialGroup').html(cardAlert('Tidak Ada Data'))
        }
    }

    function deleteMaterialGroup(index, id, name) {
        if (id) {
            Swal.fire({
                text: 'Apakah Anda yakin ingin menghapus Material Group ' + name + ' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    var variableInsert = {
                        deletedId: {
                            wasteGroupDetail: [id]
                        }
                    }
                    simpanData(variableInsert, index)
                }
            })
        } else {
            doDeleteItem(index)
        }
    }

    function deleteWasteGroup(id, name) {
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Waste Group ' + name + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var variableInsert = {
                    deletedId: {
                        wasteGroup: [id]
                    }
                }
                simpanData(variableInsert)
            }
        })
    }

    function simpanData(data, index = null) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setWasteGroup'); ?>'
        kelolaData(data, type, url, button, index)
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
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                if (index) {
                    doDeleteItem(index)
                }
                loadData()
            }
        });
    }

    function saveVariable() {
        var name = $('#nameMaterial').val()
        var label = $('#labelMaterial').val()
        var ratio_total = $('#ratioTotalMaterial').val()
        var idWasteGroup = $('#nameMaterial').data('id')
        if (!idWasteGroup) {
            idWasteGroup = createCodeId()
        }
        var selectUnit = $('#selectUnit').val()
        var selectItem = $('.selectItem').map(function() {
            return $(this).val();
        }).get()
        var ratio = $('.ratio').map(function() {
            return $(this).val();
        }).get()
        var idWasteGroupDetail = $('.ratio').map(function() {
            return $(this).data('id');
        }).get()
        var selectUnitDetail = $('.selectUnitDetail').map(function() {
            return $(this).val();
        }).get()
        var variableInsert = {
            wasteGroup: [{
                id: idWasteGroup,
                name: name,
                label: label,
                unit_id: selectUnit,
                created_at: getDateTime(currentDate()),
                updated_at: getDateTime(currentDate()),
                ratio_total: ratio_total,
            }],
            wasteGroupDetail: []
        }
        var a = 0;
        for (let i = 0; i < selectItem.length; i++) {
            if (!idWasteGroupDetail[i]) {
                idWasteGroupDetail[i] = idWasteGroup + '' + a
            }
            variableInsert.wasteGroupDetail.push({
                id: idWasteGroupDetail[i],
                waste_group_id: idWasteGroup,
                material_group_id: selectItem[i],
                ratio: ratio[i],
                unit_id: selectUnitDetail[i],
            })
            a++
        }
        simpanData(variableInsert)
    }

    function simpanData(data) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setWasteGroup'); ?>'
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
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                loadData()
            }
        });
    }
</script>