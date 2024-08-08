<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row mb-4">
            <div class="col-8">
                <h1 class="text-dark fw-bolder mb-2" style="font-weight: 700 !important"><span class="text-orange">P</span>URCHASE <span class="text-orange">R</span>EQUISITION</h1>
            </div>
            <div class="col-4 text-end">
                <button type="button" class="btn btn-sm shadow-none btn-outline-primary" onclick="addNewPR()"><i class="fa fa-plus me-2"></i>Tambah Baru</button>
                <!-- <button type="button" class="btn btn-sm shadow-none btn-outline-dark" onclick="formReport()"><i class="fa fa-table"></i></button> -->
                <button type="button" class="btn btn-sm shadow-none btn-outline-dark" onclick="refresh()"><i class="fa fa-refresh"></i></button>
            </div>
            <div class="col-8">
                <p class="m-0 super-small-text">In Purchase Requisition section you can review and manage all requests with their details. You can view and edit many information such as of all orders, ordered product, send notifications, price, and make a purchase order. Only administrations and team leaders can reach. the changes you make will be approved after they are checked</p>
            </div>
            <div class="col-12 px-4" id="statusLine">

            </div>
            <div class="row me-0">
                <div class="col-12 pe-0">
                    <div class="table-responsible" id="dataTable">

                    </div>
                </div>
                <!-- <div class="col-4">
                    <div class="card shadow-none">
                        <div class="card-body">

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</main>

<!-- Modal -->
<div class="modal fade small" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog">
        <div class="modal-content">
            <div class="modal-header small" id="modalHeader">

            </div>
            <div class="modal-body small" style="min-height: 300px;" id="modalBody">

            </div>
            <div class="modal-footer small" id="modalFooter">

            </div>
        </div>
    </div>
</div>

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
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;text-align:center;margin:0 auto;display:none;"></div>
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
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/`json/`nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
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

    var imgBase64Data

    function getQrcode(url, id, status) {
        if (url != 0) {
            var qrcode = new QRCode("qrcode", {
                text: url,
                width: 100,
                height: 100,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
            imgBase64Data = qrcode._oDrawing._elCanvas.toDataURL("image/png")
            var image = btoa(imgBase64Data)
            if (status == 0) {
                var url = '<?= base_url('order/cetakPR') ?>'
            } else {
                var url = '<?= base_url('order/cetakPO') ?>'
            }
            var params = "*$" + image + "*$" + id + "*$" + user_id
            window.open(url + '?params=' + (params), '_blank')
        } else {
            // buat supplier
            var url = '<?= base_url('order/cetakPO') ?>'
            var params = "*$0" + "*$" + id + "*$" + user_id
            window.open(url + '?params=' + (params), '_blank')
        }
    }

    function getFirstDate() {
        // Mendapatkan tanggal hari ini
        const today = new Date();
        // Mengurangi tiga bulan dari bulan saat ini
        today.setMonth(today.getMonth() - 3);
        var month = today.getMonth() + 1;
        var year = today.getFullYear();

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = year + "-" + (month < 10 ? '0' : '') + month + "-01";

        return formattedDate;
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        last_number = 1
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_level_id = '<?= $this->session->userdata('job_level_id') ?>'
    var initialDivision = "<?= $this->session->userdata('alias') ?>"
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    // var date_start = '2022-01-01'
    var date_start = getFirstDate()
    var date_end = currentDate()
    var statusLineVariable = [{
            id: 0,
            name: 'All Data',
            selected: true,
            functions: 'countAllData()',
            getData: 'chooseDataAllData()'
        },

        {
            id: 1,
            name: '<span class="text-warning fa fa-warning me-1"></span>All Pending',
            selected: false,
            functions: 'countPending()',
            getData: 'chooseDataPending()'
        },
        {
            id: 2,
            name: 'Canceled',
            selected: false,
            functions: 'countCanceled()',
            getData: 'chooseDataCanceled()'
        }
    ]
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
                getData()
            }
        })
    }

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
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
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                data_supplier = response['data']['supplier'];
                ajaxPR()
            }
        })
    }

    function refresh() {
        showOverlay('show')
        ajaxPR()
    }
    var data_pr_showed = []

    function ajaxPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR2'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                user_id: user_id,
                dateStart: date_start,
                dateEnd: date_end
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
                showOverlay('hide')
                data_pr = response['data']
                if (!data_pr) {
                    data_pr = []
                }
                data_pr_showed = data_pr
                // data_pr_showed = data_pr.filter((v, k) => {
                //     if (v.date <= date_end && v.date >= date_start) return true
                // })
                data_pr_approval = response['data_approval']
                statusLine()
            }
        })
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

    function statusLine() {
        var html = ''
        html += '<div class="row mt-4 justify-content-between">'
        html += '<div class="col h-100">'
        html += '<div class="row" style="height:30px">'
        statusLineVariable.forEach(e => {
            var text = 'text-grey'
            var icon = 'text-grey bg-light'
            if (e.selected) {
                text = 'fw-bold filter-border'
                icon = 'bg-light-blue text-white'
            }
            var num = eval(e.functions)
            html += '<div class="col-auto h-100 statusLine text-small pb-2 align-self-center ' + text + '" style="cursor:pointer" onclick="statusLineSwitch(' + e.id + ',' + "'" + e.getData + "'" + ')" id="colStatusLine' + e.id + '">'
            html += e.name + '<span class="statusLineIcon ms-1 p-1 rounded ' + icon + '" id="statusLineIcon' + e.id + '">' + num + '</span>'
            html += ' </div>'

        });
        html += '</div>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<div class="row h-100">'

        html += '<div class="col-auto ps-0">'
        html += '<input class="form-select form-select-sm datepicker formFilter" type="text" id="dateRange" placeholder="Tanggal" autocomplete="off">'
        html += '</div>'
        html += '<div class="col-auto ps-0">'
        html += '<select class="form-select form-select-sm float-end formFilter" aria-label=".form-select-sm example" onchange="filterStatus()" id="selectItemYangBelumTuntas">'
        html += '</select>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 border-top pt-2">'

        html += '<div class="row justify-content-end">'
        html += '<div class="col-auto">'
        html += '<p class="m-0 small-text">Filter :</p>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#statusLine').html(html)
        setDaterange()
        dataTable()
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: date_start,
            endDate: date_end,
            format: "DD MMMM YYYY",
            autoRefresh: true,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    date_start = formatDate(date1['dateInstance'])
                    date_end = formatDate(date2['dateInstance'])
                    refresh()
                });
            },
        })
    }

    function chooseDataAllData() {
        var data = data_pr
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataPending() {
        var data = data_pr.filter((v, k) => {
            if (v.is_complete != 1) return true
        })
        return data
    }

    function countPending() {
        return chooseDataPending().length
    }

    function chooseDataCanceled() {
        var data = data_pr.filter((v, k) => {
            if (v.state == 'REJECTED' || v.state == 'CANCEL') return true
        })
        return data
    }

    function countCanceled() {
        return chooseDataCanceled().length
    }

    function statusLineSwitch(id, getData) {
        let updatedData = statusLineVariable.map(item => {
            return {
                ...item,
                selected: false
            };
        });
        let updatedData2 = updatedData.map(item => {
            if (item.id == id) {
                return {
                    ...item,
                    selected: true
                };
            }
            return item;
        });
        statusLineVariable = updatedData2
        data_pr_showed = eval(getData)
        var item = $('#selectItemYangBelumTuntas').val()
        if (item && item != 'all') {
            var array = []
            data_pr_showed.forEach(e => {
                var sisa = itemYangSisa.filter((value, key) => {
                    if (value.item === parseInt(item)) return true
                })
                $.each(sisa, function(keys, values) {
                    if (e.id == values['pr_id']) {
                        array.push(e)
                    }
                })
            });
            data_pr_showed = array
        }
        statusLine()
    }

    function dataTable() {
        var html = ''
        html += '<table class="table table-hover table-sm small w-100" style="overflow-x: hidden;" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '<tfoot id="footTable">'
        html += '</tfoot>'
        html += '</table>'
        $('#dataTable').html(html)
        headTable()
    }

    function headTable() {
        var html = ''
        html += '<tr class="py-2">'
        html += '<th class="align-middle small" style="background-color: white;">#</th>'
        html += '<th class="align-middle small" style="background-color: white;"></th>'
        html += '<th class="align-middle small" style="background-color: white;">PR ID</th>'
        html += '<th class="align-middle small" style="background-color: white;">User</th>'
        html += '<th class="align-middle small" style="background-color: white;">Created Date</th>'
        html += '<th class="align-middle small" style="background-color: white;">Cost Center</th>'
        html += '<th class="align-middle small" style="background-color: white;">Stat. Approval</th>'
        html += '<th class="align-middle small" style="background-color: white;">Stat. PO</th>'
        html += '<th class="align-middle small" style="background-color: white;">PO</th>'
        html += '<th class="align-middle small" style="background-color: white;">Price (Rp)</th>'
        html += '<th class="align-middle small" style="background-color: white;">Notes</th>'
        html += '<th class="align-middle small" style="background-color: white;"></th>'
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ''
        var a = 1
        res = {}
        itemYangSisa = []
        $.each(data_pr_showed, function(keys, values) {
            var acc_check
            var badge = ""
            var bg = ""
            var btnPO = ""
            var textPO = "text-light"
            var textAcc = ""
            var checkStatusDocument = 'fa-check text-light'
            var bgRow = ''
            if (values.is_complete) {
                bgRow = 'bg-light'
            }
            if (values['state'] == 'DONE') {
                badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                bg = 'bg-light'
                checkStatusDocument = 'fa-check text-success'
                textAcc = "text-success"
            } else if (values['state'] == 'REJECTED' || values['state'] == 'CANCEL') {
                badge = '<span class="badge rounded-pill bg-danger"><i class="fa fa-times"></i></span>'
                bg = 'bg-light'
                textPO = 'text-light'
                checkStatusDocument = 'fa-times text-danger'
                textAcc = "text-danger"
                bgRow = 'bg-light-danger'
            } else if (values['state'] == 'APPROVED') {
                textPO = ""
                btnPO = 'onclick="addNewPO(' + values['id'] + ')"'
                checkStatusDocument = 'fa-check text-success'
                textAcc = "text-success"
            }
            if (values['state_order'] == 'DONE') {
                badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                bg = 'bg-light'
                checkStatusDocument = 'fa-check text-success'
                textAcc = "text-success"
            }

            html += '<tr>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">'
            if (values.is_complete) {
                html += '<i class="fa fa-lock text-dark" title="Data Telah Di Closing"></i>'
            }
            html += '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2 under-hover fw-bolder pointer" style="background-color: white;" onclick="linkToDetail(' + values.id + ')">' + values['no_pr'] + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + shortenName(values['name'], 2) + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + formatDateNormal(values['date']) + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + values['cost_center'] + '</td>'

            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">'
            html += '<span class="fw-bold">' + values['state'] + '</span> <span class="fa ' + checkStatusDocument + '"></span>'
            html += '</td>'

            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">'
            let obj = values['data_detail'].filter((value, key) => {
                if (value.is_po === 0) return true
            });
            let obj1 = values['data_detail'].filter((value, key) => {
                if (value.is_po === 1) return true
            });
            if (obj.length == 0) {
                // jika all done
                if (values['state_order'] == 'DONE') {
                    html += '<span class="fa fa-check text-success"></span> <span class="fw-bold">Order Selesai</span>'
                } else {
                    html += '<span class="fa fa-truck text-success"></span> <span class="fw-bold">PO Telah Dibuat</span>'
                }
            } else if (values['data_detail'].length == obj.length) {
                // jika tidak ada yang di PO kan
                html += '<span class="fa fa-truck text-grey"></span> <span class="text-grey fw-bold">Belum PO</span>'
            } else {
                html += '<span class="fa fa-truck text-warning"></span> <span class="fw-bold">' + obj1.length + ' / ' + values['data_detail'].length + ' Item Dibuat PO</span>'
            }
            // html += '<br>'
            let qtySisa = values['data_detail'].filter((value, key) => {
                if (value.qty_sisa != 0 && value.qty_sisa != null) return true
            })
            // console.log(qtySisa)
            $.each(qtySisa, function(keys2, values2) {
                itemYangSisa.push({
                    'item': values2['item_id'],
                    'pr_id': values['id']
                })
            })
            var jumlahQtySisa = qtySisa.length
            // console.log(jumlahQtySisa)
            if (jumlahQtySisa > 0 && (values['state_order'] != 'DONE' || values['is_complete'] != 1)) {
                html += '<span class="text-grey">(Partial)</span>'
            }
            html += '</td>'
            html += '<td class="' + bgRow + ' text-center small align-middle py-2" style="background-color: white;">'
            // PO
            if (divisi_id == 4) {
                let resultPOPR = unique(values['data_po_detail'].filter((value, key) => {
                    if (values['data_po_detail'][key] !== null) return true
                }).map(a => a.no_po))
                if (resultPOPR.length) {
                    html += '<span class="badge bg-success text-white fw-bold pointer hover-effect" id="dropdownPO" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' + resultPOPR.length + '</span>'
                    html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownPO">'
                    html += '<p class="small-text mb-2" style="margin-left: 16px">List Purchase Order</p>'
                    for (let k = 0; k < resultPOPR.length; k++) {
                        html += '<a class="dropdown-item small-text"  onclick="openDetailPO()">' + resultPOPR[k] + '</a>'
                    }
                    html += '</div>'
                }
            }
            // PO
            html += '</td>'
            html += '<td class="' + bgRow + ' text-end small-text align-middle py-2" style="background-color: white;">' + number_format(values['grand_total']) + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">'
            if (values['justification'] != "" && values['justification'] != null) {
                html += values['justification']
            }
            html += '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">'
            if (divisi_id != 10) {
                html += '<button class="super-small-text btn btn-sm btn-outline-success me-1 py-1 px-2 shadow-none" data-id="' + values['id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(' + "'<?= base_url() ?>invoice/approval/PR/" + values['id'] + "'," + values['id'] + ',0)"><i class="fa fa-print"></i></button>'
                html += '<button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'

                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
                if (values['state'] == 'APPROVED' && values['order_detail'] != '[null]' && values['state'] != 'CANCEL') {
                    html += '<a class="dropdown-item" onclick="penerimaanBarangPR(' + values['id'] + ')"> <i class="fa fa-check me-2"></i> Penerimaan Barang</a>'
                }
                let qtyMasihAda = values['data_detail'].filter((value, key) => {
                    if (value.qty_sisa !== 0) return true
                }).length
                // console.log(qtyMasihAda)
                if (divisi_id == 4 && (values['state_order'] != 'DONE' && qtyMasihAda > 0 || values['is_complete'] != 1)) {
                    html += '<a class="dropdown-item ' + textPO + '" ' + btnPO + '> <i class="fa fa-plus me-2"></i> Buat PO</a>'
                }
                html += '<a class="dropdown-item" onclick="detailPR(' + values['id'] + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
                // approval
                var ttd_pending = ""
                var pending = []
                for (let k = 0; k < data_pr_approval.length; k++) {
                    for (let i = 0; i < data_pr_approval[k].length; i++) {
                        for (let j = 0; j < data_pr_approval[k][i].length; j++) {
                            if (data_pr_approval[k][i][j]['reference_id'] == values['id']) {
                                ttd_pending = data_pr_approval[k][i][j]['data_approval'].find((value, key) => {
                                    if (value.is_accept === 'Pending') return true
                                })
                                if (ttd_pending != undefined) {
                                    pending.push({
                                        'approval': ttd_pending,
                                        'keys': i,
                                    })
                                }
                            }
                        }
                    }
                }
                // console.log(pending)
                var link = '<?= base_url() ?>order/detailPR/' + values['id'] + ''
                if (values['state'] != 'APPROVED' && values['state'] != 'REJECTED' && pending.length != 0 && values['state'] != 'CANCEL') {
                    html += '<a class="dropdown-item" onclick="beforeShareWhatsapp(' + values['id'] + ',' + "'" + '081944946015' + "'" + ',' + "'" + link + "'" + ',' + "'" + 'PR' + "'" + ',' + "'" + values['no_pr'] + "'" + ',' + "'" + pending[0]['approval']['user_name'] + "'" + ')"><i class="fa fa-share-alt me-2"></i> Bagikan Pengajuan</a>'
                }
                html += '<a class="dropdown-item" onclick="shareLink(' + "'" + link + "'" + ',0)"><i class="fa fa-link me-2"></i> Copy Link Pengajuan</a>'
                if ((values['state_order'] == null && values['state'] != 'CANCEL' || values['is_complete'] == null || values['is_complete'] == 0)) {
                    html += '<hr class="m-2">'
                    if (values['state'] != 'APPROVED') {
                        html += '<div class="text-center pe-2 ps-2">'
                        html += '<button class="btn btn-sm btn-danger w-100" onclick="formCancelPR(' + values['id'] + ')">Pembatalan PR</button>'
                        html += '</div>'
                    }
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-success w-100 mt-2" onclick="formClosingPR(' + values['id'] + ')"><i class="fa fa-check text-white me-2"></i>CLOSING PR</button>'
                    html += '</div>'
                }
                html += '</div>'
            }
            html += '</td>'
            html += '</tr>'
        })
        var select = ''
        select += '<option value="all">Pilih Item Yang Belum Tuntas</option>'
        itemYangSisa.forEach(function(v) {
            res[v.item] = (res[v.item] || 0) + 1;
        })
        $.each(data_item, function(keys, values) {
            if (res[values['id']] > 0) {
                select += '<option value="' + values['id'] + '">' + values['name'] + ' (' + res[values['id']] + ')</option>'
            }
        })
        $('#selectItemYangBelumTuntas').html(select)
        $('#bodyTable').html(html)
        $('#tableDetail').DataTable({
            pageLength: 200,
            scrollY: "550px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedFooter: true,
            fixedColumns: {
                left: 4
            },
            paging: false,
            searching: false,
        })
    }

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function formatDateNormal(orginaldate) {
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
        var date = day + "-" + month + "-" + year;
        return date;
    }

    var date_start_filter = ""
    var date_end_filter = ""
    var supplier_id_filter = ""
    var data_report = ""

    function formReport() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Report PR PO</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<div class="row">'
        html_body += '<div class="col">'
        html_body += '<b class="small">Tanggal Mulai</b>'
        html_body += '<input class="form-control form-control-sm shadow-none datepicker" autocomplete="off" type="text" id="dateStart" placeholder="Tanggal Mulai" value="' + date_start_filter + '">'
        html_body += '</div>'
        html_body += '<div class="col">'
        html_body += '<b class="small">Tanggal Akhir</b>'
        html_body += '<input class="form-control form-control-sm shadow-none datepicker" autocomplete="off" type="text" id="dateEnd" placeholder="Tanggal Akhir" value="' + date_end_filter + '">'
        html_body += '</div>'
        html_body += '<div class="col">'
        html_body += '<b class="small">Supplier</b>'
        html_body += '<select class="selectpicker w-100 supplierStok" multiple data-selected-text-format="count > 1" data-live-search="true" id="supplierStok" >'
        html_body += '<option value="" selected>All Supplier</option>'
        $.each(data_supplier, function(keys, values) {
            var select = ""
            if (values['id'] == supplier_id_filter) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-1 text-end d-flex align-items-end">'
        html_body += '<button class="btn btn-sm btn-primary" id="btnFilter" onclick="searchLaporan()">Cari</button>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<div class="table-responsive" id="dataDetailReport">'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
            autoRefresh: true,
            firstDay: 0,
        })
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>'
        $('#modalFooter').html(html_footer);
        if (data_report != "") {
            searchLaporanForm()
        }
    }

    function searchLaporan() {
        date_start_filter = $('#dateStart').val()
        date_end_filter = $('#dateEnd').val()
        supplier_id_filter = $('#supplierStok').val()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/reportPrPo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                supplier_id: supplier_id_filter,
                date_start: date_start_filter,
                date_end: date_end_filter,
            },
            error: function(xhr) {
                $('#btnFilter').removeAttr('disabled', true)
                Swal.fire({
                    icon: 'error',
                    title: 'Error Data',
                    text: 'Please Refresh This Page'
                });
            },
            beforeSend: function() {
                $('#btnFilter').attr('disabled', true)
            },
            success: function(response) {
                $('#contentTable').empty()
                $('#btnFilter').removeAttr('disabled', true)
                data_report = response['data']
                reportTemplate()
            }
        })
    }

    function reportTemplate() {
        var html = ''
        html += '<table class="table table-bordered table-hover table-sm small" style="width: 100%;white-space:nowrap;">'
        html += '<thead class="align-self-center">'
        html += '<tr class="align-self-center">'
        html += '<th class="text-center p-3">No</th>'
        html += '<th class="text-center p-3">Tanggal PO</th>'
        html += '<th class="text-center p-3">Kode NTM</th>'
        html += '<th class="text-center p-3">No. PR</th>'
        html += '<th class="text-center p-3">No. PO</th>'
        html += '<th class="text-center p-3">Nama Supplier</th>'
        html += '<th class="text-center p-3">Nama Bahan</th>'
        html += '<th class="text-center p-3">QTY</th>'
        html += '<th class="text-center p-3">Satuan</th>'
        html += '<th class="text-center p-3">Harga</th>'
        html += '<th class="text-center p-3">DPP</th>'
        html += '<th class="text-center p-3">PPN</th>'
        html += '<th class="text-center p-3">TOTAL</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="contentTable">'
        html += '<tr class="align-self-center">'
        html += '<td colspan="13" class="text-center pt-5 pb-5 align-self-center"><i>Anda Belum Melakukan Pencarian</i></td>'
        html += '</tr>'
        html += '</tbody>'
        html += '</table>'
        $('#dataDetailReport').html(html)
        searchLaporanForm()
    }

    function searchLaporanForm() {
        var html_body = ""
        // console.log(data_report.length)
        if (data_report != undefined) {
            $.each(data_report, function(key, value) {
                if (value['harga'] == null) {
                    value['harga'] = 0
                }
                if (value['dpp'] == null) {
                    value['dpp'] = 0
                }
                if (value['ppn'] == null) {
                    value['ppn'] = 0
                }
                if (value['total'] == null) {
                    value['total'] = 0
                }
                html_body += '<tr>'
                html_body += '<td>' + (key + 1) + '</td>'
                html_body += '<td>' + value['date'] + '</td>'
                html_body += '<td>' + value['item_code'] + '</td>'
                html_body += '<td>' + value['no_pr'] + '</td>'
                html_body += '<td>' + value['no_po'] + '</td>'
                html_body += '<td>' + value['supplier_name'] + '</td>'
                html_body += '<td>' + value['item_concat'] + '</td>'
                html_body += '<td class="text-end">' + value['jumlah'] + '</td>'
                html_body += '<td>' + value['item_satuan'] + '</td>'
                html_body += '<td class="text-end">' + number_format(value['harga']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['dpp']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['ppn']) + '</td>'
                html_body += '<td class="text-end">' + number_format(value['total']) + '</td>'
                html_body += '</tr>'
            })
        } else {
            html_body += '<tr class="align-self-center">'
            html_body += '<td colspan="13" class="text-center pt-5 pb-5 align-self-center"><i>Data Tidak Tersedia</i></td>'
            html_body += '</tr>'
        }
        $('#contentTable').html(html_body)
    }

    function addNewPR(id = '') {
        var url = '<?= base_url() ?>order/addNewPR/' + id
        window.open(url, '_blank')
    }

    function addNewPO(idPr = 'default', id = '') {
        var url = '<?= base_url() ?>order/addNewPO/' + idPr + '/' + id
        window.open(url, '_blank')
    }

    function linkToDetail(idPr) {
        var url = '<?= base_url() ?>order/detailPR/' + idPr
        window.open(url, '_blank')
    }

    function detailPR(id) {
        $.each(data_pr, function(keys, values) {
            if (id == values['id']) {
                formPR(data_pr[keys])
            }
        })

    }

    var last_number = 1

    function formPR(data) {
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

        html_body += '<div class="col-8 col-md-10 fw-bold">' + data['name'] + '</div>'

        html_body += '<div class="col-4 col-md-2">To</div>'
        html_body += '<div class="col-8 col-md-10 fw-bold">Purchasing</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-3">No. PR</div>'

        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['no_pr'] + '</span></div>'


        html_body += '<div class="col-4 col-md-3">Tanggal</div>'

        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['date'] + '</span></div>'

        html_body += '<div class="col-4 col-md-3">Cost Centre</div>'
        // if (data == undefined) {
        //     html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data_user[0]['division_name'] + '</span></div>'
        // } else {
        //     html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + data['cost_center'] + '</span></div>'
        // }
        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">NTM WAREHOUSE</span></div>'


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

        html_body += '</div>'

        html_body += '<div class="col-12 col-md-8 mt-1">'
        html_body += '<small>Justification :</small>'

        html_body += '<div class="w-100 text-wrap small fw-bold">'
        html_body += data['justification']
        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-12 col-md-4    mt-1">'

        // approval
        var ttd_pending = ""
        var pending = []
        for (let k = 0; k < data_pr_approval.length; k++) {
            for (let i = 0; i < data_pr_approval[k].length; i++) {
                pending.push(data_pr_approval[k][i])
            }
        }
        html_body += '<small class="mb-2"><b>Approval</b></small>'
        html_body += '<div class="row">'
        var e = []
        var acc_check = ""
        for (let i = 0; i < pending.length; i++) {
            for (let j = 0; j < pending[i].length; j++) {
                if (data['id'] == pending[i][j]['reference_id']) {
                    $.each(pending[i][j]['data_approval'], function(key, value) {
                        acc_check = value['is_accept']
                    })
                }
            }
            if (pending[i][0]['reference_id'] == data['id']) {
                var success = "fa-check text-light"
                if (acc_check == 'Accepted') {
                    success = 'fa-check text-success'
                } else if (acc_check == 'Rejected') {
                    success = 'fa-times text-danger'
                }

                html_body += '<div class="col-12 col-sm-12 m-0 p-1">'
                html_body += '<div class="card shadow-sm m-0 w-100">'
                html_body += '<div class="card-body p-2">'
                html_body += '<div class="row align-self-center">'
                html_body += '<div class="col-3">'
                html_body += '<i class="fa ' + success + ' fa-3x me-2"></i>'
                html_body += '</div>'
                html_body += '<div class="col-9">'
                if (i == 0) {
                    var name = 'Checked'
                } else {
                    var name = 'Approved'
                }
                html_body += '<p class="small d-inline m-0 fw-bold" style="font-size:12px;">' + name + '</p>'
                for (let j = 0; j < pending[i].length; j++) {
                    if (data['id'] == pending[i][j]['reference_id']) {
                        $.each(pending[i][j]['data_approval'], function(key, value) {
                            html_body += '<p class="m-0"><span class="small" style="font-size:10px;">' + value['user_name'] + '</span></p>'
                        })
                    }
                }
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            }
        }


        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        var total = (data != undefined) ? data['grand_total'] : 0

        html_footer += '<div class="me-auto fw-bold">Total : Rp. <span id="totalPR">' + number_format(total) + '</span></div>'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);

        $.each(data['data_detail'], function(keys, values) {
            formRowPR(last_number, data['data_detail'][keys])
            last_number++
        })

    }

    function formRowPR(i, data) {
        var html_body = ""
        html_body += '<tr>'
        // no
        html_body += '<td class="text-center align-middle">' + i + '</td>'

        // item
        html_body += '<td>'
        html_body += data['item_name']
        if (data['is_po'] == 0) {
            html_body += '<span class="fa fa-truck ms-2 text-light" data-bs-toggle="tooltip" data-bs-placement="right" title="Belum masuk proses PO"></span>'
        } else {
            html_body += '<span class="fa fa-truck ms-2 text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Telah masuk proses PO"></span>'
        }
        html_body += '</td>'

        // qty
        html_body += '<td class="text-wrap text-center">'
        html_body += number_format(data['qty'])
        html_body += '</td>'

        // unit
        html_body += '<td>'
        html_body += data['unit_name']
        html_body += '</td>'

        // unit price
        html_body += '<td class="text-end">'
        html_body += number_format(data['unit_price'])
        html_body += '</td>'

        // extended price
        html_body += '<td class="text-end">'
        if (data == "") {
            html_body += '<input style="border:none" type="text" name="" id="extended_price_pr' + i + '" data-id="' + i + '" class="nominal form-control form-control-sm p-1 extended_price_pr " value="">'
        } else {
            html_body += number_format(data['extended_price'])
        }
        html_body += '</td>'

        // notes
        html_body += '<td>'
        html_body += data['note']
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

    function formCancelPR(pr_id) {
        var data = data_pr.find((values, keys) => {
            if (values.id == pr_id) return true
        })
        // console.log(data)
        Swal.fire({
            text: 'Apakah anda yakin ingin membatalkan PR ' + data['no_pr'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                doCancelPR(pr_id)
            }
        })
    }

    function doCancelPR(pr_id) {
        var type = 'POST'
        var data = {
            pr_id: pr_id,
            id_user: user_id,
        }
        var button = '#btnCancelPR'
        var url = '<?php echo api_url('Api_Warehouse/cancelPr'); ?>'
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
                        $('#modal').modal('hide')
                        $(button).prop("disabled", false);
                        refresh()
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

    function penerimaanBarangPR(id) {
        let data = data_pr.filter((value, key) => {
            if (value.id === id.toString()) return true
        })[0];
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Penerimaan Barang</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-12 mb-3">'
        html_body += '<div class="input-group mb-3">'
        html_body += '<input type="text" class="form-control basicAutoComplete" placeholder="Cari No. Surat Jalan" aria-label="No. Surat Jalan" aria-describedby="button-addon2" id="inputSearch" autocomplete="off">'
        html_body += '<button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="cariSuratJalan(' + id + ')"><i class="fa fa-search"></i></button>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-12 mb-3" id="tampilSuratJalan">'
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 align-self-center text-center small">'
        html_body += '<p class="mt-5 mb-5"><i>Cari Surat Jalan Terlebih Dahulu untuk Mengisi Form Penerimaan Barang, atau bisa langsung membuat Penerimaan Baru dengan tombol dibawah ini</i></p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }
    var data_sj = ""

    function cariSuratJalan(id) {
        data_sj = ""
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_sj: $('#inputSearch').val(),
                pr_id: id,
            },
            error: function(xhr) {
                $('#modal2').modal('hide')
                tidakAdaSuratJalan(id)
            },
            beforeSend: function() {
                loading('truck.gif', 'Sedang Mencari Data')
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil',
                    icon: 'success',
                }).then((responses) => {
                    if (response['data'] == undefined) {
                        $('#modal2').modal('hide')
                        tidakAdaSuratJalan(id)
                    } else {
                        $('#modal2').modal('hide')
                        data_sj = response['data'][0]
                        formPencarianSJ(response['data'][0])
                    }
                })
            }
        })
    }

    function tidakAdaSuratJalan(id) {
        var html = ""
        html += '<div class="card shadow-none mb-2 h-100">'
        html += '<div class="card-body">'
        html += '<div class="row justify-content-center">'
        html += '<div class="col-8 align-self-center text-center">'
        html += '<img src="<?= base_url() ?>assets/image/logo/page-not-found.png" class="w-50 mx-auto d-block mb-3">'
        html += '<p style="font-size:11px;">Surat Jalan Tidak Ditemukan</p>'
        html += '<p style="font-size:11px;" class="mb-5">Konfirmasi ke Purchasing untuk pembuatan Surat Jalan Baru</p>'
        // html += '<button class="btn btn-sm btn-primary" onclick="buatPenerimaanBaru(' + id + ')">Buat Penerimaan Baru</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#tampilSuratJalan').html(html)
    }

    function buatPenerimaanBaru(id) {
        let data = data_pr.filter((value, key) => {
            if (value.id === id.toString()) return true
        })[0];
        // console.log(data)
        var html_body = ""
        // html_body += '<div class="card shadow-sm mb-2">'
        // html_body += '<div class="card-body">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-12 align-self-center">'
        html_body += '<b>No. Surat Jalan</b>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-12">'
        html_body += '<input class="form-control form-control-sm nomorSJ mt-2" placeholder="">'
        html_body += '</div>'
        html_body += '<div class="col-12 mb-1 mt-3">'
        html_body += '<b>List Barang yang Diterima :</b>'
        // item
        $.each(data['data_detail'], function(keys, values) {
            html_body += '<div class="card shadow-none mt-2 barangAkanDatang" style="cursor:pointer;" id="barangAkanDatang' + keys + '">'
            html_body += '<div class="card-body m-0 p-2">'
            html_body += '<div class="row">'
            html_body += '<div class="col-6 align-self-center">'
            html_body += '<p class="m-0"><b>' + values['item_name'] + '</b></p>'
            html_body += '<p class="m-0" style="font-size:10px;">' + values['qty'] + ' ' + values['unit_name'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center">'
            html_body += '<input class="form-control form-control-sm inputJumlahDiterima nominal" id="inputBarangAkanDatang' + keys + '" placeholder="0" data-key="' + keys + '" data-detail_id="' + values['id'] + '">'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center">'
            html_body += '<p class="m-0 small">' + values['unit_name'] + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        // item
        html_body += '</div>'
        html_body += '<div class="col-12 float-end mt-3">'
        html_body += '<div class="form-check">'
        html_body += '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">'
        html_body += '<label class="form-check-label" for="flexCheckDefault">'
        html_body += 'Langsung menutup PR ' + data['no_pr']
        html_body += '</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<button class="btn btn-sm btn-success w-100">Terima Barang Tersebut</button>'
        html_body += '</div>'
        html_body += '</div>'
        // html_body += '</div>'
        // html_body += '</div>'
        $('#tampilSuratJalan').html(html_body)
        $('.nominal').number(true);
    }

    function formPencarianSJ(data) {
        let obj = data['data_detail'].filter((value, key) => {
            if (value.status_order === 'DONE' || value.status_order === 'PENDING') return true
        }).length;
        // console.log(data)
        var html = ""
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<div id="profileImage"><i class="fa fa-truck"></i></div>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 small" style="font-size:11px;">Surat Jalan <b class="m-0">#' + data['no_sj'] + '</b></p>'
        html += '<p class="m-0 small" style="font-size:11px;">Supplier <b class="m-0">' + data['supplier_name'] + '</b></p>'
        html += '<p class="m-0 small" style="font-size:11px;">Item <b class="m-0">NTM</b></p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'
        html += '<div class="d-flex bd-highlight mb-3">'
        html += '<p class="m-0 bd-highlight me-auto" style="font-size: 11px;"><b>Detail Item</b></p>'
        if (data['category'] == 'NTM') {
            html += '<span class="m-0 bd-highlight fa fa-print" style="cursor:pointer;" onclick="cetakPenerimaan(' + "'" + data['supplier_name'] + "'," + "'" + data['no_sj'] + "'" + ')"></span>'
        }
        html += '</div>'
        $.each(data['data_detail'], function(keys, values) {
            html += '<div class="row">'
            html += '<div class="col-2 p-2 text-center">'
            html += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-50 mx-auto d-block">'
            html += '</div>'
            html += '<div class="col-5 align-self-center ps-0">'
            html += '<p class="m-0 small" style="font-size:12px ;"><b>' + values['item_name'] + '</b></p>'
            html += '<p class="m-0 small float-start" style="font-size:10px ;">' + values['jumlah'] + ' <span>' + values['satuan_name'] + '</span></p>'
            html += '</div>'
            html += '<div class="col-3 align-self-center ps-0">'
            if (obj == 0) {
                html += '<input type="text" name="" class="form-control form-control-sm p-1 nominal jumlahMasuk" id="jumlahMasuk' + keys + '" data-key="' + keys + '" data-jumlah="' + values['jumlah'] + '" data-item="' + values['item_id'] + '" data-satuan="' + values['satuan_id'] + '" data-order="' + values['id_detail_order'] + '">'
            }
            html += '</div>'
            html += '<div class="col-2 align-self-center">'
            html += '<p class="m-0 small text-start text-success d-none" id="checkItem' + keys + '" style="font-size:12px ;"><i class="fa fa-check fa-1x"></i></p>'
            html += '<p class="m-0 small text-start text-warning d-none" id="warningItem' + keys + '" style="font-size:12px ;"><i class="fa fa-exclamation fa-1x"></i></p>'
            html += '</div>'
            html += '</div>'
        })
        if (obj == 0 && data['category'] == 'NTM') {
            html += '<p class="m-0 mb-3 mt-3" style="font-size: 11px;"><b>User yang Melakukan Pengecekan</b></p>'
            html += '<select name="" id="user_checking" class="form-select form-select-sm" required="required">'
            html += '<option value="" disabled selected>Pilih User</option>'
            $.each(data_user, function(key, value) {
                html += '<option value="' + value['id'] + '">' + value['name'] + '</option>'
            })
            html += '</select>'
        }
        html += '</div>'
        html += '</div>'
        html += '<div class="mt-2">'
        if (obj == 0) {
            html += '<button class="btn btn-success w-100" id="btnChecked" onclick="checkDataArrived(' + data['pr_id'] + ',' + data['po_id'] + ',' + data['pengiriman_id'] + ',' + "'" + data['no_sj'] + "'" + ')">Selesaikan Pengecekan</button>'
        } else {
            html += '<button class="btn btn-outline-success w-100" disabled>Anda telah melakukan pengecekan</button>'
        }
        html += '</div>'
        $('#tampilSuratJalan').html(html)
        $('.nominal').number(true);
    }
    var any_anomali = 0
    $(document).on('keyup', '.jumlahMasuk', function(e) {
        var key = $(this).data('key')
        var jumlah = $(this).data('jumlah')
        if (parseInt(jumlah) == parseInt($('#jumlahMasuk' + key).val())) {
            any_anomali = 0
            $('#checkItem' + key).removeClass('d-none')
            $('#warningItem' + key).addClass('d-none')
        } else {
            any_anomali = 1
            $('#checkItem' + key).addClass('d-none')
            $('#warningItem' + key).removeClass('d-none')
        }
    })

    function checkDataArrived(pr_id, po_id, pengiriman_id, no_sj) {
        var jumlah = $('.jumlahMasuk').map(function() {
            return $(this).val();
        }).get();
        var item = $('.jumlahMasuk').map(function() {
            return $(this).data('item');
        }).get();
        var satuan = $('.jumlahMasuk').map(function() {
            return $(this).data('satuan');
        }).get();
        var order = $('.jumlahMasuk').map(function() {
            return $(this).data('order');
        }).get();
        var detail = []
        for (let i = 0; i < jumlah.length; i++) {
            detail.push({
                'id_detail_order': order[i],
                'jumlah_barang': jumlah[i],
                'id_satuan': satuan[i],
                'id_item': item[i],
            })
        }
        var id_user_checking = $('#user_checking').val()
        var type = 'POST'
        var data = {
            id_users: user_id,
            pengiriman_id: pengiriman_id,
            no_sj: no_sj,
            po_id: po_id,
            id_user_checking: id_user_checking,
            detail: detail,
            pr_id: pr_id,
        }
        var button = '#btnChecked'
        var url = '<?php echo api_url('Api_Warehouse/insertPenerimaan'); ?>'
        if (any_anomali == 1) {
            Swal.fire({
                text: 'Terdapat jumlah yang tidak sesuai dengan Surat Jalan, apakah anda ingin langsung menerima?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Terima Saja'
            }).then((result) => {
                if (result.isConfirmed) {
                    kelolaData(data, type, url, button)
                }
            })
        } else {
            kelolaData(data, type, url, button)
        }
    }

    function formClosingPR(pr_id) {
        var data = data_pr.find((values, keys) => {
            if (values.id == pr_id) return true
        })
        Swal.fire({
            text: 'Apakah anda yakin ingin Closing PR ' + data['no_pr'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                doClosingPR(pr_id)
            }
        })
    }

    function doClosingPR(pr_id) {
        var type = 'POST'
        var data = {
            pr_id: pr_id,
        }
        var button = '#btnClosingPR'
        var url = '<?php echo api_url('Api_Warehouse/completePr'); ?>'
        kelolaData(data, type, url, button)
    }

    function shareLink(link, status) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        $('#modalHeader2').removeClass('d-none');
        html_header += '<h5 class="modal-title">Share to User</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<small class="mb-1">Berbagi dengan Salin Link dibawah ini :</small>'
        html_body += '<div class="input-group mb-3">'
        html_body += '<input type="text" class="form-control" value="' + link + '" aria-describedby="button-addon2" onClick="this.select();" id="linkPRPO">'
        html_body += '<button class="btn btn-outline-primary" type="button" id="button-addon2" onClick="copyToClipboard()"><i class="fa fa-copy"></i></button>'
        // html_body += '<small class="mt-3">Atau juga bisa dengan mudah langsung kirim ke Whatsapp User terkait dengan menekan tombol <span class="fw-bold">Kirim</span> dibawah ini</small>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);

        var html_footer = '';
        $('#modalHeader2').removeClass('d-none');
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter2').html(html_footer);
    }

    function copyToClipboard() {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#linkPRPO').val()).select();
        document.execCommand("copy");
        $temp.remove();
    }

    function beforeShareWhatsapp(id, no_telp, link, status, no_doc, nama) {
        Swal.fire({
            text: 'Membagikan Approval akan langsung masuk ke Whatsapp dengan User ' + nama + ', apakah anda ingin melanjutkan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var ttd_pending = ""
                var pending = []
                for (let k = 0; k < data_pr_approval.length; k++) {
                    for (let i = 0; i < data_pr_approval[k].length; i++) {
                        for (let j = 0; j < data_pr_approval[k][i].length; j++) {
                            if (data_pr_approval[k][i][j]['reference_id'] == id) {
                                ttd_pending = data_pr_approval[k][i][j]['data_approval'].filter((value, key) => {
                                    if (value.is_accept === 'Pending') return true
                                })
                                if (ttd_pending.length > 0) {
                                    pending.push({
                                        'approval': ttd_pending[0],
                                        'keys': i,
                                    })
                                }
                            }
                        }
                    }
                }
                var key = pending[0]['keys']
                var phone = []
                var name = []
                $.each(pending, function(keys, values) {
                    if (values['keys'] == key) {
                        phone.push(values['approval']['phone'])
                        // phone.push('081944946015')
                        name.push(values['approval']['user_name'])
                    }
                })
                shareWhatsapp(id, phone, link, status, no_doc, name)
            }
        })
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