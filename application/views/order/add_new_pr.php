<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>

<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow-sm">
                    <div class="card-body py-5">
                        <div class="row justify-content-center">
                            <div class="col-12 pb-2 text-center">
                                <p class="m-0 fw-bolder">Create New Purchase Requisition (PR)</p>
                                <p class="m-0 small-text">Please Select Cost Centre</p>
                            </div>
                            <div class="col-12 mt-3" id="costCenterList">
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function notFoundReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function empty(location, text, height = null) {
        if (!height) {
            height = '100%'
        }
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
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
        data_checked = ""
        id_po_detail = []
        clearModal();
    })
    var pr_id = '<?= $id ?>'
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_level_id = '<?= $this->session->userdata('job_level_id') ?>'
    var initialDivision = "<?= $this->session->userdata('alias') ?>"
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    var date_start = currentDate()
    var date_end = currentDate()
    $(document).ready(function() {
        loadUser()
    })

    function loadUser() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                data_user = response['data']
                getCostCenter()
            }
        })
    }

    function getData(idCostCenter, nameCostCenter) {
        $.ajax({
            url: "<?= api_url('getPurchaseDataCreate'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                costCenterId: idCostCenter
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_item = response['data']['item'];
                formPR(idCostCenter, nameCostCenter)
            }
        })
    }
    var data_cost_center = []

    function refresh() {
        showOverlay('show')
        getCostCenter()
    }

    function getCostCenter() {
        $.ajax({
            url: "<?= api_url('loadPagePurchaseRequestCreate'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                userId: user_id,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_cost_center = response['data']
                numberinPR()
            }
        })
    }

    function ajaxPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                user_id: user_id,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_pr = response['data']
                data_pr_approval = response['data_approval']
                numberinPR()
            }
        })
    }

    function numberinPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getCountDocPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                showOverlay('hide')
                const d = new Date();
                var month = d.getMonth() + 1;
                var thisMonth = (month < 10 ? '0' : '') + month
                let thisYear = d.getFullYear();
                if (response.message != 'Data data not found') {
                    let obj = response['data'].filter((value, key) => {
                        if (value.tahun === thisYear.toString() && value.cost_center_id === '23') return true
                    });
                    let count = 1
                    if (obj != undefined || obj.length == 0) {
                        var data_hasil = groupAndSum(obj, ['tahun'], ['count'])
                        count = parseInt(data_hasil[0]['count']) + 1;
                    }
                    no_pr = count.toString().padStart(3, "0") + '/SMM-' + initialDivision + '/PR/' + romanize(thisMonth) + '/' + thisYear
                } else {
                    no_pr = '001' + '/SMM-' + initialDivision + '/PR/' + romanize(thisMonth) + '/' + thisYear

                }
                costCenterList()
            }
        })
    }

    function costCenterList() {
        var html = ''
        data_cost_center.costCenter.forEach(e => {
            html += '<div class="card shadow-none mb-2 pointer card-hoper actions-btn" onclick="getData(' + e.id + ',' + "'" + e.code + ' - ' + e.name + "'" + ')">'
            html += '<div class="card-body small-text p-2">' + e.code + ' - ' + e.name + '</div>'
            html += '</div>'
        });
        $('#costCenterList').html(html)
    }

    function groupAndSum(arr, groupKeys, sumKeys) {
        return Object.values(
            arr.reduce((acc, curr) => {
                const group = groupKeys.map(k => curr[k]).join('-');
                acc[group] = acc[group] || Object.fromEntries(groupKeys.map(k => [k, curr[k]]).concat(sumKeys.map(k => [k, 0])));
                sumKeys.forEach(k => acc[group][k] += parseFloat(curr[k]));
                return acc;
            }, {})
        );
    }
    var last_number = 1

    function formPR(idCostCenter, nameCostCenter) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Purchase Requisition</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container-fluid small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-2">From</div>'
        html_body += '<div class="col-8 col-md-10 fw-bold">' + data_user[0]['name'] + '</div>'

        html_body += '<div class="col-4 col-md-2">To</div>'
        html_body += '<div class="col-8 col-md-10 fw-bold">Purchasing</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-3">No. PR</div>'
        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + no_pr + '</span></div>'

        html_body += '<div class="col-4 col-md-3">Tanggal</div>'
        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + currentDate() + '</span></div>'

        html_body += '<div class="col-4 col-md-3">Cost Centre</div>'
        html_body += '<div class="col-8 col-md-9"><span class="fw-bolder text-orange">' + nameCostCenter + '</span></div>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'
        html_body += '<table class="table table-bordered table-sm">'
        html_body += '<tr>'
        html_body += '<th class="align-middle" rowspan="2">No</th>'
        html_body += '<th class="align-middle" style="width:30%" rowspan="2">Description</th>'
        html_body += '<th class="align-middle" style="width:5%" rowspan="2">QTY</th>'
        html_body += '<th class="align-middle" style="width:10%" rowspan="2">Unit</th>'
        html_body += '<th class="align-middle" colspan="2">Estimated</th>'
        html_body += '<th class="align-middle" rowspan="2">Notes</th>'
        html_body += '</tr>'
        html_body += '<tr>'
        html_body += '<th class="align-middle" style="width:15%">Unit Price</th>'
        html_body += '<th class="align-middle" style="width:15%">Extended Price</th>'
        html_body += '</tr>'
        html_body += '<tbody id="bodyPR">'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '<button class="btn btn-sm btn-outline-primary float-end" style="font-size:11px" id="btnNewRowPR"><i class="fa fa-plus me-2"></i> New Row</button>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8 mt-1">'
        html_body += '<small>Justification :</small>'
        html_body += '<textarea class="form-control form-control-sm w-100" rows="5" id="justification"></textarea>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-4 mt-1">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        var total = 0
        html_footer += '<div class="me-auto fw-bold">Total : Rp. <span id="totalPR">' + number_format(total) + '</span></div>'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanPR" onclick="simpan(' + idCostCenter + ')">Simpan</button>'

        $('#modalFooter').html(html_footer);
        for (let i = 1; i <= 3; i++) {
            last_number++
            formRowPR(i)
        }
    }

    function formRowPR(i) {
        var html_body = ""
        html_body += '<tr>'
        // no
        html_body += '<td class="text-center align-middle">' + i + '</td>'

        // item
        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="item_pr' + i + '" class="form-control form-control-sm selectpicker item_pr" data-id="' + i + '">'
        html_body += '<option value="" selected disabled> </option>'
        $.each(data_item, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</td>'

        // qty
        html_body += '<td class="text-wrap text-center">'
        html_body += '<input autocomplete="off" style="border:none" type="text" name="" class="form-control form-control-sm shadow-none p-1 qty_pr" id="qty_pr' + i + '" data-id="' + i + '"  value="">'
        html_body += '</td>'

        // unit
        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="unit_pr' + i + '" class="form-control form-control-sm shadow-none select2-single unit_pr" data-id="' + i + '">'
        html_body += '<option value="" selected disabled></option>'
        html_body += '</select>'
        html_body += '</td>'

        // unit price
        html_body += '<td class="text-end" id="unit_field' + i + '">'
        html_body += addUnitField(i)
        html_body += '</td>'

        // extended price
        html_body += '<td class="text-end">'
        html_body += '<input autocomplete="off" style="border:none" type="text" name="" id="extended_price_pr' + i + '" data-id="' + i + '" class="nominal form-control form-control-sm shadow-none p-1 extended_price_pr " value="">'
        html_body += '</td>'

        // notes
        html_body += '<td>'
        html_body += '<input autocomplete="off" style="border:none" type="text" name="" id="notes_pr' + i + '" data-id="' + i + '" class="form-control form-control-sm shadow-none p-1 notes_pr" value="">'
        html_body += '</td>'

        html_body += '</tr>'
        $('#bodyPR').append(html_body)
        $('#item_pr' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_pr' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_price_pr' + i).number(true, 2);
        $('#extended_price_pr' + i).number(true, 2);
        return true;
    }

    function addUnitField(key) {
        var html = ''
        html += '<input autocomplete="off" style="border:none" type="text" name="" id="unit_price_pr' + key + '" data-id="' + key + '" class="nominal form-control form-control-sm shadow-none p-1 unit_price_pr " value="">'
        return html
    }

    $(document).on('change', '.item_pr', function(e) {
        var key = $(this).data('id')
        $('#unit_pr' + key).empty()
        var id = $(this).val()
        let obj = JSON.parse(data_item.find((value, key) => {
            if (value.id == id) return true
        })['data_konversi'])
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id == id) return true
        });
        // console.log(satuan_tetap)
        var html_body = ""
        // html_body += '<option value="" selected disabled></option>'
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '">' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                html_body += '<option value="' + values['satuan_id'] + '">' + values['satuan_name'] + '</option>'
            })
        }
        $('#unit_pr' + key).html(html_body)
        $('#unit_field' + key).html(addUnitField(key))
        $('#unit_price_pr' + key).number(true, 2);
        if (satuan_tetap.price) {
            $('#unit_price_pr' + key).val(satuan_tetap.price)
        }
        typingNominalPR($(this).data('id'))
    })
    $(document).on('click', '#btnNewRowPR', function(e) {
        formRowPR(last_number, "")
        last_number++
    })
    $(document).on('keyup', '.qty_pr,.unit_price_pr', function(e) {
        typingNominalPR($(this).data('id'))
    })

    function typingNominalPR(id) {
        var price = 0
        var unit = $('#unit_price_pr' + id).val()
        if (unit == "") {
            unit = 0
        }
        var qty = $('#qty_pr' + id).val()
        if (qty == "") {
            qty = 0
        }
        price = (parseFloat(unit) * parseFloat(qty))
        $('#extended_price_pr' + id).val(price)
        totalPricePR()
    }

    var jumlahPR = 0

    function totalPricePR() {
        jumlahPR = 0
        var total = $('.extended_price_pr').map(function() {
            return $(this).val();
        }).get();
        for (let i = 0; i < total.length; i++) {
            if (total[i] != "")
                jumlahPR += parseFloat(total[i]);
        }
        $('#totalPR').html(number_format(jumlahPR))
    }

    function simpan(idCostCenter) {
        var type = 'POST'
        var id_item = $('.item_pr').map(function() {
            return $(this).val();
        }).get();
        var qty = $('.qty_pr').map(function() {
            return $(this).val();
        }).get();
        var unit = $('.unit_pr').map(function() {
            return $(this).val();
        }).get();
        var unit_price = $('.unit_price_pr').map(function() {
            return $(this).val();
        }).get();
        var total = $('.extended_price_pr').map(function() {
            return $(this).val();
        }).get();
        var notes = $('.notes_pr').map(function() {
            return $(this).val();
        }).get();
        var data = {
            id_users: user_id,
            to: 1,
            from: divisi_id,
            date: currentDate(),
            no_pr: no_pr,
            id_item: id_item,
            qty: qty,
            unit: unit,
            unit_price: unit_price,
            extended_price: total,
            notes: notes,
            total: jumlahPR,
            justification: $('#justification').val(),
            // category: $('#category').val(),
            job_level_id: job_level_id,
            cost_center_id: idCostCenter,
        }
        var button = '#btnSimpanPR'
        var url = '<?php echo api_url('Api_Warehouse/insertPR'); ?>'
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
                        var ttd_pending = ""
                        var pending = []
                        var data_app = response.data_approval
                        $.each(data_app, function(keys, values) {
                            $.each(data_app[keys], function(keys2, values2) {
                                ttd_pending = JSON.parse(values2['data_approval']).filter((value, key) => {
                                    if (value.is_accept === 'Pending') return true
                                })
                                if (ttd_pending.length > 0) {
                                    pending.push({
                                        'approval': ttd_pending[0],
                                        'keys': keys,
                                    })
                                }
                            })
                        })
                        // console.log(pending)
                        var key = pending[0]['keys']
                        var phone = []
                        var name = []
                        $.each(pending, function(keys, values) {
                            if (values['keys'] == key) {
                                phone.push(values['approval']['phone'])
                                name.push(values['approval']['user_name'])
                            }
                        })
                        button_prpo = 'PO'
                        var link = '<?= base_url() ?>order/detailPR/' + response.id_pr + ''
                        $('#modal').modal('hide')
                        shareWhatsapp(response.id_pr, phone, link, 'PR', response.no_pr, name)
                        refresh()
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

    function shareWhatsapp(id, no_telp, link, status, no_doc, nama) {
        $.ajax({
            url: "<?= base_url('api') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: link,
                status: status,
                nama: nama,
                no_doc: no_doc,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Approval kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                $('#modal2').modal('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {});
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
</script>