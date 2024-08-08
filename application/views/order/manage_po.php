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
                <div class="row">
                    <div class="col-2 align-self-center text-center">
                        <img class="" style="width: 60px;" src="<?= base_url() ?>assets/image/svg/truck.svg" alt="Icon" />
                    </div>
                    <div class="col-10">
                        <div class="col-12">
                            <h1 class="text-dark fw-bolder mb-2" style="font-weight: 700 !important"><span class="text-orange">P</span>URCHASE <span class="text-orange">O</span>RDER</h1>
                        </div>
                        <div class="col-12">
                            <p class="m-0 super-small-text">In Purchase Order section you can review and manage all orders with their details. You can view and edit many information such as of all orders, ordered product, send notifications, price, and make a approvals. Only administrations and team leaders can reach. the changes you make will be approved after they are checked</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end">
                <button type="button" class="btn btn-sm shadow-none btn-outline-primary" onclick="addNewPO()"><i class="fa fa-plus me-2"></i>Tambah Baru</button>
                <!-- <button type="button" class="btn btn-sm shadow-none btn-outline-dark" onclick="formReport()"><i class="fa fa-table"></i></button> -->
                <button type="button" class="btn btn-sm shadow-none btn-outline-dark" onclick="refresh()"><i class="fa fa-refresh"></i></button>
            </div>

            <div class="col-12 px-4" id="statusLine">
            </div>
            <div class="row me-0">
                <div class="col-12 pe-0">
                    <div class="table-responsible" id="dataTable">

                    </div>
                </div>
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
        data_checked = ""
        id_po_detail = []
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
            name: 'All Pending',
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
                ajaxPO()
            }
        })
    }

    function refresh() {
        showOverlay('show')
        ajaxPO()
    }
    var data_po_showed = []

    function ajaxPO() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPO2'); ?>",
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
                data_po = response['data']
                if (!data_po) {
                    data_po = []
                }
                data_po_showed = data_po
                // data_po_showed = data_po.filter((v, k) => {
                //     if (formatDate(v.date_po) <= date_end && formatDate(v.date_po) >= date_start) return true
                // })
                data_po_approval = response['data_approval']
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
        var length_unclosing = data_po.filter((values, keys) => {
            if (values.is_complete == 0 && values.state_order == 'DONE') return true
        }).length
        if (length_unclosing > 0) {
            html += '<button class="btn btn-sm btn-success float-start rounded-pill shadow-none super-duper-small-text" onclick="showUncompletePO()"><span class="fw-bold me-2">' + length_unclosing + '</span>Data Belum Closing</button>'
        } else {
            html += '<button class="btn btn-sm bg-grey float-start rounded-pill shadow-none super-duper-small-text">Tidak Ada Data yang Belum Closing<i class="ms-2 fa fa-thumbs-up text-success"></i></button>'

        }
        html += '</div>'

        html += '<div class="col-auto ps-0">'
        html += '<input class="form-select form-select-sm datepicker formFilter" type="text" id="dateRange" placeholder="Tanggal" autocomplete="off">'
        html += '</div>'


        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 border-top pt-2">'

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
        var data = data_po
        // var data = data_po.filter((v, k) => {
        //     if (formatDate(v.date_po) <= date_end && formatDate(v.date_po) >= date_start) return true
        // })
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataPending() {
        var data = data_po.filter((v, k) => {
            if (v.is_complete != 1) return true
        })
        return data
    }

    function countPending() {
        return chooseDataPending().length
    }

    function chooseDataCanceled() {
        var data = data_po.filter((v, k) => {
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
        data_po_showed = eval(getData)
        var item = $('#selectItemYangBelumTuntas').val()
        if (item && item != 'all') {
            var array = []
            data_po_showed.forEach(e => {
                var sisa = itemYangSisa.filter((value, key) => {
                    if (value.item === parseInt(item)) return true
                })
                $.each(sisa, function(keys, values) {
                    if (e.id == values['po_id']) {
                        array.push(e)
                    }
                })
            });
            data_po_showed = array
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
        html += '<th class="align-middle small" style="background-color: white;">PO ID</th>'
        html += '<th class="align-middle small" style="background-color: white;">Name</th>'
        html += '<th class="align-middle small" style="background-color: white;">Created Date</th>'
        html += '<th class="align-middle small" style="background-color: white;">PR Source</th>'
        html += '<th class="align-middle small" style="background-color: white;">Surat Jalan</th>'
        html += '<th class="align-middle small" style="background-color: white;">Stat. Approval</th>'
        html += '<th class="align-middle small" style="background-color: white;">Stat. Order</th>'
        html += '<th class="align-middle small" style="background-color: white;">Price (Rp)</th>'
        html += '<th class="align-middle small" style="background-color: white;">Rev</th>'
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
        $.each(data_po_showed, function(keys, values) {
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
            if (values.state_order == 'DONE') {
                if (values.is_complete) {
                    // jika sudah diclose
                    html += '<i class="fa fa-lock text-dark" title="Data Telah Di Closing"></i>'
                } else {
                    // jika belum close tapi siap di close
                    // console.log(values)
                    html += '<button class="btn btn-sm btn-outline-danger h-100 btnClosePO p-1" style="font-size:7px;" onclick="doClosePO(' + values['po_id'] + ')">Close</button>'
                }
            }
            html += '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2 under-hover fw-bolder pointer" style="background-color: white;" onclick="linkToDetail(' + values.po_id + ')">' + values['no_po'] + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + shortenName(values['name'], 2) + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + formatDateNormal(values['date_po']) + '</td>'
            // PR
            var prList = ''
            if (values['data_pr']) {
                $.each(values['data_pr'], function(keys2, values2) {
                    if (values2['no_pr']) {
                        prList += '<p class="m-0" style="font-size:9px">' + values2['no_pr'] + '</p>'
                    }
                })
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + prList + '</td>'
            // PR
            // SURAT JALAN
            var sjList = ''
            if (values['no_sj_luar'][0]) {
                $.each(values['no_sj_luar'], function(keys2, values2) {
                    if (values2) {
                        var showSJ = '<p class="m-0 text-grey" style="font-size:9px">' + values2 + '</p>'
                        if (values.order_detail) {
                            var findOrderDetail = values.order_detail.find(x => x.no_sj == values2)
                            if (findOrderDetail) {
                                var iconSJ = '<i class="fa fa-truck text-orange ms-1"></i>'
                                if (findOrderDetail.is_complete) {
                                    iconSJ = '<i class="fa fa-check text-success ms-1"></i>'
                                }
                                showSJ = '<p class="m-0 fw-bolder pointer under-hover " style="font-size:9px" onclick="openDetailSuratJalan(' + "'" + values2 + "'" + ',' + values['po_id'] + ')">' + values2 + '' + iconSJ + '</p>'
                            }
                        }
                        sjList += showSJ
                    }
                })
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + sjList + '</td>'
            // SURAT JALAN
            var textColor = 'text-grey'
            if (values['state'] == 'REJECTED' || values['state'] == 'CANCEL') {
                textColor = 'text-danger'
            } else if (values['state'] == 'APPROVED') {
                textColor = 'text-success'
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2 ' + textColor + '" style="background-color: white;">' + values['state'] + '</td>'
            if (!values['state_order']) {
                values['state_order'] = ''
            }
            var textOrder = 'text-grey'
            if (values['state_order'] == 'DONE') {
                textOrder = 'text-success'
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2 ' + textOrder + '" style="background-color: white;">' + values['state_order'] + '</td>'
            html += '<td class="' + bgRow + ' text-end small-text align-middle py-2" style="background-color: white;">' + number_format(values['total_harga']) + '</td>'
            var rev = ''
            if (values['data_log']) {
                if (values['data_log'][0]['old_date_po']) {
                    rev = '<span class="badge bg-secondary me-1">REV</span>'
                }
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + rev + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">'
            if (divisi_id != 10) {
                html += '<button class="super-small-text btn btn-sm btn-outline-success me-1 py-1 px-2 shadow-none" data-id="' + values['id'] + '" data-no="' + values['no_pr'] + '" id="dropdownMenuButtonCetak" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print"></i></button>'
                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButtonCetak">'
                html += '<a class="dropdown-item" data-id="' + values['po_id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(' + "'<?= base_url() ?>invoice/approval/PO/" + values['po_id'] + "'," + values['po_id'] + ',1)"><i class="fa fa-qrcode me-2"></i>Cetak Internal</a>'
                html += '<a class="dropdown-item" data-id="' + values['po_id'] + '" data-no="' + values['no_pr'] + '" onclick="getQrcode(0,' + values['po_id'] + ',1)"><i class="fa fa-truck me-2"></i>Cetak Supplier</a>'
                html += '</div>'
                html += '<button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>'
                if (values['state'] == 'APPROVED' && values['state_order'] == '') {
                    html += '<span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle small">'
                    html += '<span class="visually-hidden">New alerts</span>'
                    html += '</span>'
                }
                html += '</button>'

                html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
                if (values['state'] == 'APPROVED') {
                    html += '<a class="dropdown-item" onclick="perubahanPO(' + values['pr_id'] + ',' + values['po_id'] + ')"><i class="fa fa-pencil me-2"></i> Perubahan PO</a>'
                }
                html += '<a class="dropdown-item" onclick="detailPO(' + values['pr_id'] + ',' + values['po_id'] + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
                var ttd_pending = ""
                var pending = []
                for (let k = 0; k < data_po_approval.length; k++) {
                    for (let i = 0; i < data_po_approval[k].length; i++) {
                        for (let j = 0; j < data_po_approval[k][i].length; j++) {
                            if (data_po_approval[k][i][j]['reference_id'] == values['po_id']) {
                                ttd_pending = data_po_approval[k][i][j]['data_approval'].find((value, key) => {
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
                // console.log(values['po_id'])
                if (values['state'] != 'APPROVED' && values['state'] != 'REJECTED' && pending.length != 0) {
                    var link = '<?= base_url() ?>order/detailPO/' + values['po_id'] + ''
                    html += '<a class="dropdown-item" onclick="beforeShareWhatsapp(' + values['po_id'] + ',' + "'" + '081944946015' + "'" + ',' + "'" + link + "'" + ',' + "'" + 'PO' + "'" + ',' + "'" + values['no_po'] + "'" + ',' + "'" + pending[0]['approval']['user_name'] + "'" + ')"><i class="fa fa-share-alt me-2"></i> Bagikan Pengajuan</a>'
                    html += '<a class="dropdown-item" onclick="shareLink(' + "'" + link + "'" + ',1)"><i class="fa fa-link me-2"></i> Copy Tautan</a>'
                }
                if (values['state'] == 'APPROVED' && (values['state_order'])) {
                    html += '<hr class="m-2">'
                    html += '<a class="dropdown-item" onclick="orderPO(' + values['po_id'] + ')"><i class="fa fa-shopping-cart me-2"></i> Surat Jalan</a>'
                }
                if (values['state'] == 'APPROVED' && (values['state_order'] == null || values['state_order'] == '')) {
                    html += '<hr class="m-2">'
                    html += '<div class="text-center pe-2 ps-2">'
                    html += '<button class="btn btn-sm btn-success w-100" onclick="orderPO(' + values['po_id'] + ')">Process Order</button>'
                    html += '</div>'
                }
                if (values['state_order'] != 'DONE') {
                    html += '<div class="text-center pe-2 ps-2 mt-2">'
                    html += '<button class="btn btn-sm btn-danger w-100" onclick="cancelOrder(' + values['po_id'] + ')">Cancel Order</button>'
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

    function openDetailSuratJalan(suratJalan, po_id) {
        var url = '<?= base_url() ?>order/infoSuratJalan/' + encodeURIComponent(suratJalan) + '/' + po_id
        window.open(url, '_blank')
    }

    function orderPO(id) {
        var data = data_po.find(x => x.po_id == id)['data_detail']
        var data_parent = data_po.find(x => x.po_id == id)
        // console.log(data_parent)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Ordering</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6 mb-3">'
        html_body += '<b><h4>Summary</h4></b>'
        html_body += '<p class="text-dark-grey small">Dibawah ini merupakan list barang anda yang akan diberikan kepada supplier terkait</p>'
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 text-center align-self-center">'
        html_body += '<i class="fa fa-building-o fa-2x"></i>'
        html_body += '</div>'
        html_body += '<div class="col-8 align-self-center">'
        html_body += '<b>' + data_parent['supplier_name'] + '</b>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="card shadow-sm">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'
        $.each(data, function(keys, values) {
            html_body += '<div class="col-12 mb-2">'
            html_body += '<b>' + values['item_name'] + '</b><br>'
            html_body += '<small class="text-dark-grey">' + number_format(values['qty']) + 'x ' + values['satuan_name'] + '</small>'
            html_body += '<small class="text-dark-grey float-end">' + number_format(values['subtotal']) + '</small>'
            html_body += '</div>'
        })
        html_body += '<div class="col-12 mb-2">'
        html_body += '<b>PPN</b>'
        html_body += '<small class="text-dark-grey float-end">' + number_format(data_parent['ppn']) + '</small>'
        html_body += '</div>'
        html_body += '<hr>'
        html_body += '<div class="col-6 fw-bold mt-2"><b>Total Pembayaran</b></div>'
        html_body += '<div class="col-6 text-end fw-bold mt-2"><b>' + number_format(data_parent['grand_total']) + '</b></div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<b><h4>Order & Shipment</h4></b>'
        html_body += '<div id="statusOrdering">'
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
        statusOrdering(data_parent['po_id'], data_parent['state_order'], data_parent['order_id'], data_parent['supplier_id'])
    }

    function statusOrdering(po_id, state, id_order = null, supplier_id = null) {
        if (!supplier_id) {
            var data_parent = data_po.find(x => x.po_id == po_id)
            supplier_id = data_parent['supplier_id']
        }
        var html_body = ""
        if (!state) {
            html_body += '<p class="text-dark-grey small mb-3">Untuk melanjutkan proses pada Supplier, pilih tekan Tombol dibawah ini</p>'
            html_body += '<div class="row mb-2">'
            html_body += '<div class="col-12">'
            html_body += '<input type="text" class="form-control form-control-sm rounded-pill small-text text-center p-3 datepicker" id="tanggalPelunasan" placeholder="Pilih Tanggal Terakhir Pelunasan">'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '<button class="btn btn-success w-100 p-3 rounded-pill small-text" onclick="mulaiOrder(' + po_id + ')">Mulai Order ke Supplier</button>'
        } else if (state == 'PROCESS' || state == 'PENDING' || state == 'DONE') {
            html_body += '<p class="text-dark-grey small mb-3">Jika Supplier telah memberikan Surat Jalan, maka Anda Dapat Input Surat tersebut dibawah ini</p>'
            html_body += '<div class="mt-2">'
            html_body += '<b class="mb-2">Surat Jalan</b>'

            html_body += '<div id="dataSuratJalan" mb-2>'
            html_body += '</div>'
            html_body += '<div id="listSuratJalan" mb-2>'
            html_body += '</div>'
            html_body += '<button class="btn btn-primary btn-sm mt-2 float-end" id="btnTambahSJ" onclick="tambahSuratJalan(' + po_id + ',' + id_order + ',' + supplier_id + ')"><i class="fa fa-save me-2"></i>Save</button>'
            html_body += '<button class="btn btn-outline-primary btn-sm mt-2 float-end me-2" onclick="listSuratJalan(' + po_id + ')"><i class="fa fa-plus me-2"></i>New</button>'
            html_body += '</div>'
        }
        $('#statusOrdering').html(html_body)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        getSuratJalan(po_id)
    }

    function getSuratJalan(po_id) {
        $('#dataSuratJalan').empty()
        $('#listSuratJalan').empty()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataSuratJalan'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                po_id: po_id
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                viewSuratJalan(po_id, data)
            }
        })
    }

    function viewSuratJalan(po_id, data) {
        // console.log(data)
        var html_body = ""
        $.each(data, function(keys, values) {
            html_body += '<div class="card shadow-sm mb-2 bg-light-grey">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'

            html_body += '<div class="col-12 col-md-4 align-self-center">'
            html_body += '<span style="font-size:10px;">No. SJ</span><br>'
            html_body += '<b style="font-size:14px;">' + values['no_sj'] + '</b><br>'
            html_body += '<span style="font-size:10px;">Tanggal</span><br>'
            html_body += '<b style="font-size:14px;">' + formatDate(JSON.parse(values['data_order'])[0]['tanggal_sj']) + '</b>'
            html_body += '</div>'
            html_body += '<div class="col-12 col-md-7">'
            html_body += '<span style="font-size:10px;">Item </span><br>'
            html_body += '<hr class="mt-1 mb-1">'
            var array = []
            $.each(JSON.parse(values['data_order']), function(keys2, values2) {
                array.push(values2['detail_order_id'])
                html_body += '<span style="font-size:12px;">' + values2['item_name'] + ' <b>' + values2['jumlah_dikirim'] + 'x</b></span>'
                html_body += '<br>'
            })
            var stringArray = JSON.stringify(array)
            html_body += '</div>'
            html_body += '<div class="col-12 col-md-1 align-self-center">'
            html_body += '<i class="fa fa-trash" style="cursor:pointer;" onclick="hapusSuratJalan(' + "'" + values['no_sj'] + "'" + ',' + "'" + stringArray + "'" + ',' + po_id + ')"></i>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#dataSuratJalan').append(html_body)
        listSuratJalan(po_id)
    }

    function listSuratJalan(po_id) {
        var html_body = ""
        var data = data_po.find(x => x.po_id == po_id)['data_detail']
        html_body += '<div class="card shadow-sm mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-3 align-self-center">'
        html_body += '<b class="mb-2">Tanggal</b>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-9">'
        html_body += '<input class="form-control form-control-sm rounded-pill tanggalSJ datepicker mb-2" autocomplete="off" data-id="' + last_number + '">'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-3 align-self-center">'
        html_body += '<b>Nomor</b>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-9">'
        html_body += '<input class="form-control form-control-sm rounded-pill nomorSJ" autocomplete="off" data-id="' + last_number + '">'
        html_body += '</div>'
        html_body += '<hr class="mt-3 mb-2 text-grey">'
        html_body += '<div class="col-12">'
        html_body += '<b class="mb-2">Pilih Item yang Akan Datang :</b>'
        // item
        // console.log(data)
        $.each(data, function(keys, values) {
            html_body += '<div class="card shadow-none mt-2 barangAkanDatang" style="cursor:pointer;" id="barangAkanDatang' + last_number + keys + '">'
            html_body += '<div class="card-body m-0 p-2">'
            html_body += '<div class="row">'
            html_body += '<div class="col align-self-center">'
            html_body += '<p class="m-0">' + values['item_name'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col align-self-center">'
            html_body += '<input class="form-control form-control-sm border-0 shadow-none inputJumlahyangDatang nominal" id="inputBarangAkanDatang' + last_number + keys + '" placeholder="Jumlah Item" data-id="' + last_number + '" data-key="' + keys + '" data-detail_id="' + values['id'] + '" data-item="' + values['item_id'] + '">'
            html_body += '<hr class="my-0 py-0">'
            html_body += '</div>'
            html_body += '<i class="float-end fa fa-check text-grey" id="checkBarangAkanDatang' + last_number + keys + '"></i>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        // item
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#listSuratJalan').append(html_body)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        $('.nominal').number(true, 2);
        last_number++
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

    var last_number = 1

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
        let data = data_po.filter((value, key) => {
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
        var data = data_po.filter((values, keys) => {
            if (values.id === pr_id.toString()) return true
        })[0]
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
                for (let k = 0; k < data_po_approval.length; k++) {
                    for (let i = 0; i < data_po_approval[k].length; i++) {
                        for (let j = 0; j < data_po_approval[k][i].length; j++) {
                            if (data_po_approval[k][i][j]['reference_id'] == id) {
                                ttd_pending = data_po_approval[k][i][j]['data_approval'].filter((value, key) => {
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

    function perubahanPO(pr_id, id) {
        // console.log(pr_id, id)
        addNewPO(pr_id, id)
    }

    function detailPO(pr_id, id) {
        $.each(data_po, function(keys, values) {
            if (id == values['po_id']) {
                formPO(pr_id, data_po[keys])
            }
        })

    }
    var status_more = "less"
    var data_detail = ""
    var keys_select = 0
    var id_po_detail = []

    function formPO(id_pr = "", data = "", perubahan = "") {
        // console.log(data)
        status_more = "less"
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Purchase Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6">'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">No</div>'
        var po = data['no_po']
        var date = data['date_po']
        var disable = 'disabled'

        html_body += '<div class="col-8 col-md-10 align-self-center">' + po + '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">Tanggal</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">' + date + '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2 align-self-center">Supplier</div>'
        html_body += '<div class="col-8 col-md-10 align-self-center">'
        html_body += data['supplier_name']
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 col-md-2">No. PR</div>'
        html_body += '<div class="col-8 col-md-10">'
        $.each(data['data_pr'], function(keys, values) {
            html_body += values['no_pr'] + '<br>'
        })
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'

        html_body += '<table class="table table-bordered table-sm">'
        html_body += '<tr style="height:60px;">'
        html_body += '<th class="align-middle">No</th>'
        html_body += '<th class="align-middle" style="width:30%">Item</th>'
        html_body += '<th class="align-middle" style="width:5%">QTY</th>'
        html_body += '<th class="align-middle" style="width:10%">Satuan</th>'
        html_body += '<th class="align-middle">Harga</th>'
        html_body += '<th class="align-middle">Total</th>'
        html_body += '<th class="align-middle text-wrap">Tanggal Pengiriman</th>'
        html_body += '</tr>'
        html_body += '<tbody id="bodyPO">'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6 mt-2 ps-4 pe-4 pb-4">'
        var ttd_pending = ""
        var pending = []
        for (let k = 0; k < data_po_approval.length; k++) {
            for (let i = 0; i < data_po_approval[k].length; i++) {
                pending.push(data_po_approval[k][i])
            }
        }
        html_body += '<small class="mb-2"><b>Approval</b></small>'
        // approval
        html_body += '<div class="row">'

        var e = []
        var acc_check = ""
        // console.log(data)
        for (let i = 0; i < pending.length; i++) {
            for (let j = 0; j < pending[i].length; j++) {
                if (data['po_id'] == pending[i][j]['reference_id']) {
                    $.each(pending[i][j]['data_approval'], function(key, value) {
                        acc_check = value['is_accept']
                    })
                }
            }
            if (pending[i][0]['reference_id'] == data['po_id']) {
                // console.log(acc_check)
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
                    if (data['po_id'] == pending[i][j]['reference_id']) {
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
        html_body += '<small class="mb-4 mt-2"><b><i class="fa fa-clock-o text-primary me-2"></i> History Revisi</b></small>'
        // approval
        html_body += '<div class="row mt-2">'
        if (data['data_log'] != null) {
            if (data['data_log'][0]['old_date_po'] == null) {
                html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                html_body += '<div class="card shadow-none m-0 w-100">'
                html_body += '<div class="card-body p-2 text-center">'
                html_body += '<i class="small" style="font-size:10px;">Tidak Ada Riyawat Revisi PO</i>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            } else {
                $.each(data['data_log'], function(key, value) {
                    html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                    html_body += '<div class="card shadow-none m-0 w-100">'
                    html_body += '<div class="card-body p-2">'
                    html_body += '<div class="row">'
                    html_body += '<div class="col-6">'
                    html_body += '<span class="badge bg-primary text-white" style="font-size:10px;">' + value['date_action'] + '</span><br>'
                    $.each(value['data_detail_log'], function(keys, values) {
                        html_body += '<p class="m-0 p-0 float-start"><b class="small">' + values['item_name'] + '</b></p><br>'
                        html_body += '<p class="m-0 p-0 float-start" style="font-size:10px;">' + number_format(values['qty']) + ' ' + values['satuan_name'] + '</p>'
                        html_body += '<p class="m-0 mb-3 p-0 float-end" style="font-size:10px;">' + number_format(values['subtotal']) + '</p>'
                    })
                    html_body += '</div>'
                    html_body += '<div class="col-6 border-start" style="font-size:10px;">'

                    html_body += '<div class="row mb-2">'
                    html_body += '<div class="col-6 align-self-center text-end">Sub Total</div>'
                    html_body += '<div class="col-6 align-self-center text-end">'
                    html_body += number_format(value['old_total_harga'])
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '<div class="row mb-2">'
                    html_body += '<div class="col-6 align-self-center text-end">PPN</div>'
                    html_body += '<div class="col-6 align-self-center text-end">'
                    html_body += number_format(value['old_ppn'])
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '<div class="row mb-2">'
                    html_body += '<div class="col-6 align-self-center text-end">Grand Total</div>'
                    html_body += '<div class="col-6 align-self-center text-end">'
                    html_body += number_format(value['old_grand_total'])
                    html_body += '</div>'
                    html_body += '</div>'

                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                })
            }
        } else {
            html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
            html_body += '<div class="card shadow-none m-0 w-100">'
            html_body += '<div class="card-body p-2 text-center">'
            html_body += '<i class="small" style="font-size:10px;">Tidak Ada Riyawat Revisi PO</i>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'


        html_body += '<div class="col-12 col-md-6 mt-5">'
        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">Sub Total</div>'
        html_body += '<div class="col-8 align-self-center text-end">'
        html_body += number_format(data['total_harga'])
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 text-end">PPN</div>'
        html_body += '<div class="col-8 text-end">'
        html_body += number_format(data['ppn'])
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row mb-2">'
        html_body += '<div class="col-4 align-self-center text-end">Total</div>'
        html_body += '<div class="col-8 align-self-center text-end">'
        html_body += number_format(data['grand_total'])
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('#supplier').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
        $('.nominal').number(true, 3);
        if (data_detail != "") {
            showDetailPRinPO(data_detail)
            hiddenDetailPR(2)
        }
        $.each(data['data_detail'], function(keys, values) {
            id_po_detail.push(values['id'])
            formRowPO(last_number, data['data_detail'][keys])
            last_number++
        })
    }

    function formRowPO(i, data) {
        // console.log(data)
        var html_body = ""
        html_body += '<tr>'

        html_body += '<td class="text-center align-middle">' + i + '</td>'
        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="item_po' + i + '" class="form-control form-control-sm select2-single item_po" data-id="' + i + '" data-id_pr="' + data['id'] + '" data-parent="' + data['id_parent'] + '">'
        $.each(data_item, function(keys, values) {
            var select = ""
            if (data['item_id'] == values['id']) {
                select = 'selected'
            }
            html_body += '<option value="' + values['id'] + '" ' + select + '>' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</td>'

        var qty = ""
        var satuan = ""
        var harga = ""
        var total = ""
        if (data['qty_sisa'] == null) {
            qty = data['qty']
        } else {
            qty = data['qty_sisa']
        }
        if (data['unit_price'] == undefined) {
            harga = data['harga']
        } else {
            harga = data['unit_price']
        }
        if (data['unit_id'] == undefined) {
            satuan = data['satuan_id']
        } else {
            satuan = data['unit_id']
        }
        if (data['extended_price'] == undefined) {
            total = data['subtotal']
        } else {
            total = data['extended_price']
        }
        html_body += '<td><input style="border:none" type="text" name="" id="qty_po' + i + '" class="form-control form-control-sm p-1 qty_po" value="' + qty + '" data-id="' + i + '"></td>'

        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="unit_po' + i + '" class="form-control form-control-sm select2-single unit_po" data-id="' + i + '">'
        html_body += '<option value="" selected disabled></option>'
        html_body += '</select>'
        html_body += '</td>'

        html_body += '<td><input style="border:none" type="text" name="" id="harga_po' + i + '" class="form-control form-control-sm nominal p-1 harga_po" value="' + harga + '" data-id="' + i + '"></td>'

        html_body += '<td><input style="border:none" type="text" name="" id="total_po' + i + '" class="form-control form-control-sm nominal p-1 total_po" value="' + total + '"></td>'
        if (data['tanggal'] == undefined) {
            data['tanggal'] = ""
        }
        if (data == "") {
            html_body += '<td><input style="border:none" type="text" name="" id="tanggal_po' + i + '" class="form-control form-control-sm p-1 datepicker tanggal_po" value=""></td>'
        } else {
            if (data['tanggal'] == "" && data['tanggal_pengiriman'] != undefined) {
                data['tanggal'] = data['tanggal_pengiriman']
            }
            html_body += '<td><input style="border:none" type="text" name="" id="tanggal_po' + i + '" class="form-control form-control-sm p-1 datepicker tanggal_po" value="' + data['tanggal'] + '"></td>'

        }

        html_body += '</tr>'
        $('#bodyPO').append(html_body)
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        $('#item_po' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_po' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('.nominal').number(true, 3);
        changeItemPO(data['item_id'], i, satuan)
        return true;
    }

    function changeItemPO(id_item, id, id_satuan = '') {
        $('#unit_po' + id).empty()
        let obj = data_item.find((value, key) => {
            if (value.id == id_item) return true
        })['data_konversi']
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id == id_item) return true
        });
        var html_body = ""
        html_body += '<option value="" selected disabled></option>'
        var select = ''
        if (id_satuan == satuan_tetap.satuan_id) {
            select = 'selected'
        }
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '" ' + select + '>' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                var select = ''
                if (values.satuan_id == id_satuan) {
                    select = 'selected'
                }
                html_body += '<option value="' + values['satuan_id'] + '" ' + select + '>' + values['satuan_name'] + '</option>'
            })
        }
        $('#unit_po' + id).html(html_body)
    }

    function showDetailPRinPO(data) {
        last_number = 1
        $('#bodyPO').empty()
        var html_body = ""
        var check = []
        $.each(data, function(keys, values) {
            if (data_checked != "") {
                var id = data_checked.includes(values['id'].toString())
                if (id == true) {
                    check.push({
                        'keys': keys,
                        'id': values['id']
                    })
                }
            }
            var checkbox = ""
            if (values['is_po'] == 1 && values['qty_sisa'] == 0) {
                checkbox = 'disabled'
                html_body += '<div class="card shadow-none mb-1 p-0 small cardDetailPR bg-grey" id="cardDetailPR' + keys + '">'
            } else {
                html_body += '<div class="card shadow-none mb-1 p-0 small cardDetailPR" data-keys="' + keys + '" id="cardDetailPR' + keys + '">'
                // html_body += '<div class="card shadow-none mb-1 p-0 small cardDetailPR" data-keys="' + keys + '" id="cardDetailPR' + keys + '" onclick="cardClickPR(' + keys + ',' + values['id'] + ')">'
            }
            html_body += '<div class="card-body p-2">'
            html_body += '<div class="row d-flex align-items-center">'
            html_body += '<div class="col-1">'
            html_body += '<input class="form-check-input checkbox-PR" id="checkPR' + keys + '" type="checkbox" value="' + values['id'] + '" data-id="' + keys + '"  data-id_pr="' + values['id'] + '" ' + check + ' data-parent="' + values['id_parent'] + '"' + checkbox + '>'
            html_body += '</div>'
            html_body += '<div class="col-6"><span class="">' + values['item_name'] + '</span></div>'
            html_body += '<div class="col-5">'
            var sisa = ""
            if (values['qty_sisa'] != 0 && values['qty_sisa'] != null) {
                sisa = '<span class="text-danger" style="font-size:10px;">(Sisa : ' + values['qty_sisa'] + ')</span>'
            }
            html_body += '<span class="fa fa-shopping-basket fw-bold"></span> ' + values['qty'] + ' ' + sisa + '<br>'
            html_body += '<span class="fa fa-money fw-bold"></span> Rp. ' + number_format(values['extended_price'])
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#showDetailPRinPO').append(html_body)
        if (data_checked != "") {
            $.each(check, function(keys, values) {
                cardClickPR(values['keys'], values['id'])
            })
            status_more = 'more'
            showMoreFuction()
        }
    }

    function hiddenDetailPR(jumlah) {
        if (data_detail.length > 2) {
            $('#showMorePR').removeClass('d-none')
        } else {
            $('#showMorePR').addClass('d-none')
        }
        $.each(data_detail, function(keys, values) {
            if (keys < jumlah) {
                $('#cardDetailPR' + keys).removeClass('d-none')
            } else {
                $('#cardDetailPR' + keys).addClass('d-none')
            }
        })
    }

    function tambahSelectPR(num = keys_select) {
        var html_body = ""
        html_body += '<div class="row align-items-center" id="selectForm' + num + '">'
        html_body += '<div class="col-7">'
        html_body += '<select name="" class="form-control select2-single form-control-sm w-100 mb-2 no_pr" data-live-search="true" required="required">'
        html_body += '<option value="" disabled selected>Pilih No. PR</option>'
        var pr_filtered = data_pr.filter((value, key) => {
            if (value.state === 'APPROVED') return true
        })
        $.each(pr_filtered, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['no_pr'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-5">'
        html_body += '<button class="btn btn-sm p-1" onclick="deleteSelectForm(' + num + ')"><i class="fa fa-trash text-danger fa-1x"></i></button>'
        html_body += '</div>'
        html_body += '</div>'
        $('#select_many').append(html_body)
        keys_select++
    }

    function mulaiOrder(po_id) {
        var tgl = $('#tanggalPelunasan').val()
        var button = ''
        var url = '<?php echo api_url('Api_Warehouse/insertOrdering'); ?>'
        var type = 'POST'
        var data = {
            id_user: user_id,
            po_id: po_id,
            tanggal_expired: tgl
        }
        var image = 'truck.gif'
        var text_loading = 'Sedang Membuat Order Baru...'
        var state = 'MULAI'
        var content = {
            'button': button,
            'url': url,
            'type': type,
            'data': data,
            'image': image,
            'text_loading': text_loading,
            'po_id': po_id,
            'state': state,
        }
        // console.log(content)
        if (tgl) {
            ajaxTemplate(content)
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Tanggal Terakhir Pelunasan Kosong',
                text: 'Isi Tangal Terakhir Pelunasan Terlebih Dahulu',
            })
        }
    }

    function tambahSuratJalan(po_id, order_id, supplier_id) {
        var tanggal_sj = $('.tanggalSJ').map(function() {
            return $(this).val();
        }).get();
        var no_sj = $('.nomorSJ').map(function() {
            return $(this).val();
        }).get();
        var number_sj = $('.nomorSJ').map(function() {
            return $(this).data('id');
        }).get();
        var input_jumlah = $('.inputJumlahyangDatang').map(function() {
            return $(this).val();
        }).get();
        var number_input_jumlah = $('.inputJumlahyangDatang').map(function() {
            return $(this).data('id');
        }).get();
        var detail_input_jumlah = $('.inputJumlahyangDatang').map(function() {
            return $(this).data('detail_id');
        }).get();
        var item_id = $('.inputJumlahyangDatang').map(function() {
            return $(this).data('item');
        }).get();

        var detail_po_id = []
        var jumlah_arrive = []
        var item_arrivce = []
        for (let i = 0; i < no_sj.length; i++) {
            var array_id = []
            var array_jumlah = []
            var array_item = []
            for (let j = 0; j < input_jumlah.length; j++) {
                if (input_jumlah[j] != "" && number_input_jumlah[j] == number_sj[i]) {
                    array_id.push(detail_input_jumlah[j])
                    array_jumlah.push(input_jumlah[j])
                    array_item.push(item_id[j])
                }
            }
            detail_po_id.push(array_id)
            jumlah_arrive.push(array_jumlah)
            item_arrivce.push(array_item)
        }
        // console.log(item_arrivce)
        //-----------------------//
        var button = '#btnTambahSJ'
        var url = '<?php echo api_url('Api_Warehouse/insertSj'); ?>'
        var type = 'POST'
        var data = {
            user_id: user_id,
            po_id: po_id,
            order_id: order_id,
            no_sj: no_sj,
            tanggal_sj: tanggal_sj,
            detail_po_id: detail_po_id,
            jumlah_arrive: jumlah_arrive,
            item_id: item_arrivce,
            supplier_id: supplier_id,
        }
        var image = 'message.gif'
        var id_order = order_id
        var text_loading = 'Sedang Membuat Surat Jalan...'
        var state = 'SURATJALAN'
        var content = {
            'button': button,
            'url': url,
            'type': type,
            'data': data,
            'image': image,
            'text_loading': text_loading,
            'po_id': po_id,
            'state': state,
            'id_order': id_order,
        }
        if (tanggal_sj.length > 0 && no_sj.length > 0 && jumlah_arrive.length > 0 && jumlah_arrive[0] && tanggal_sj[0] && no_sj[0] && jumlah_arrive[0][0]) {
            ajaxTemplate(content)
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Ada yang Kosong',
                text: 'Isi Tanggal dan Nomor Surat Jalan Terlebih Dahulu',
            })
        }
    }

    function ajaxTemplate(content) {
        var preloaderTimeout
        $.ajax({
            url: content['url'],
            type: content['type'],
            data: content['data'],
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
                $(content['button']).prop("disabled", false);
            },
            beforeSend: function() {
                // preloaderTimeout = setTimeout(loading(content['image'], content['text_loading']), 500)
                $(content['button']).prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Berhasil',
                        icon: 'success',
                    }).then((responses) => {
                        $('#modal2').modal('hide')
                        ajaxPO()
                        if (content['state'] == "MULAI") {
                            statusOrdering(content['po_id'], 'PROCESS', response['id_order'])
                        } else if (content['state'] == "SURATJALAN") {
                            statusOrdering(content['po_id'], 'PROCESS', content['id_order'])
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(content['button']).prop("disabled", false);
                }
            }
        });
    }

    function hapusSuratJalan(no_sj, id, po_id) {
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus ' + no_sj + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_url('Api_Warehouse/deleteSuratJalan'); ?>',
                    type: 'POST',
                    data: {
                        order_detail_id: JSON.parse(id)
                    },
                    success: function(response) {
                        Swal.fire(
                            'Terhapus!',
                            'Surat Jalan ' + no_sj + ' Terhapus',
                            'success'
                        )
                        getSuratJalan(po_id)
                    }
                });
            }
        })
    }

    function cancelOrder(po_id) {
        var data = data_po.find((values, keys) => {
            if (values.po_id == po_id) return true
        })
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Cancel Order</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        if (data['order_detail'] == null) {
            html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
            html_body += '<div class="card shadow-sm m-0 w-100">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row align-self-center">'
            html_body += '<div class="col-12 text-center">'
            html_body += '<i class="small">Tidak Ada Order dan Surat Jalan pada PO ini, Apakah anda ingin membatalkan dokumen PO <span class="fw-bold text-primary">' + data['no_po'] + ' ?</span></i>'
            html_body += '<button class="mt-5 btn btn-danger btn-sm" id="btnCancelPO" onclick="formCancelPO(' + po_id + ')">Batalkan Purchase Order</button>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        } else {
            if (data['order_detail'][0]['no_sj'] != null) {
                html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                html_body += '<p class="small d-inline fw-bold" style="font-size:12px;"><b>Terdapat Surat Jalan didalam PO ini : </b></p>'
                $.each(data['order_detail'], function(key, value) {
                    html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
                    html_body += '<div class="card-body p-3">'
                    html_body += '<div class="row align-self-center">'
                    html_body += '<div class="col-auto text-center align-self-center">'
                    var text = "text-grey"
                    if (value['state'] == 'DONE') {
                        text = 'text-success'
                    }
                    html_body += '<i class="fa fa-check fa-2x me-2 ' + text + '"></i>'
                    html_body += '</div>'
                    html_body += '<div class="col">'
                    html_body += '<p class="small d-inline m-0 fw-bold" style="font-size:12px;">No. SJ ' + value['no_sj'] + '</p>'
                    html_body += '<p class="m-0"><span class="small" style="font-size:10px;">Status Order : ' + value['state'] + '</span></p>'
                    if (value['state'] != 'DONE') {
                        html_body += '<p class="m-0 lh-1 text-danger"><span class="small" style="font-size:8px;">*) Ketika anda menutup PO ini, maka Surat Jalan yang belum Selesai akan otomatis tertutup tanpa penerimaan</span></p>'
                    }
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                    html_body += '</div>'
                })
                html_body += '<p class="m-0 mt-4"><b class="small">Alasan Pembatalan :</b></p>'
                html_body += '<textarea class="form-control form-control-sm w-100" rows="10" id="catatanPembatalan"></textarea>'
                html_body += '<button class="mt-2 p-3 btn btn-danger btn-sm w-100" id="btnCancelPO" onclick="formCancelPO(' + po_id + ')">Batalkan Purchase Order</button>'
                html_body += '</div>'
            } else {
                html_body += '<div class="col-12 col-sm-12 m-0 p-1 align-self-center">'
                html_body += '<div class="card shadow-sm m-0 w-100">'
                html_body += '<div class="card-body">'
                html_body += '<div class="row align-self-center">'
                html_body += '<div class="col-12 text-center">'
                html_body += '<p class="m-0 mb-5"><i class="small">Sebelumnya anda telah membuka order tanpa Surat Jalan, Apakah anda ingin membatalkan PO <span class="fw-bold text-primary">' + data['no_po'] + ' ?</span></i></p>'
                html_body += '<p class="m-0"><b class="small">Alasan Pembatalan :</b></p>'
                html_body += '<textarea class="form-control form-control-sm w-100" rows="10" id="catatanPembatalan"></textarea>'
                html_body += '<button class="mt-2 btn btn-danger btn-sm" id="btnCancelPO" onclick="formCancelPO(' + po_id + ')">Batalkan Purchase Order</button>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            }
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup Halaman</button>'
        $('#modalFooter').html(html_footer);
    }

    function formCancelPO(po_id) {
        var data = data_po.find((values, keys) => {
            if (values.po_id == po_id) return true
        })
        Swal.fire({
            text: 'Apakah anda yakin ingin membatalkan PO ' + data['no_po'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                doCancelPO(po_id)
            }
        })
    }

    function doCancelPO(po_id) {
        var data = data_po.find((values, keys) => {
            if (values.po_id == po_id) return true
        })
        var uncomplete_detail_order_id = []
        $.each(data['order_detail'], function(keys, values) {
            if (values['state'] != 'DONE') {
                uncomplete_detail_order_id.push(values['pengiriman_detail_id'])
            }
        })
        var type = 'POST'
        var data = {
            po_id: data['po_id'],
            id_user: user_id,
            uncomplete_detail_order_id: uncomplete_detail_order_id,
            note: $('#catatanPembatalan').val()
        }
        var button = '#btnCancelPO'
        var url = '<?php echo api_url('Api_Warehouse/cancelPO'); ?>'
        kelolaData(data, type, url, button)
    }

    function showUncompletePO() {
        var data = data_po.filter((values, keys) => {
            if (values.is_complete == 0 && values.state_order == 'DONE') return true
        })
        // console.log(data)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Data Belum Closing ( ' + data.length + ' )</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        $.each(data, function(key, value) {
            html_body += '<div class="card shadow-none m-0 w-100 card-hoper mb-2">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row align-self-center">'
            html_body += '<div class="col">'
            html_body += '<p class="m-0" style="font-size:10px;">' + formatDateNormal(value['date_po']) + '</p>'
            html_body += '<p class="m-0" style="font-size:12px;"><b>' + value['no_po'] + '</b></p>'
            html_body += '<p class="m-0" style="font-size:12px;">Supplier : ' + value['supplier_name'] + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto">'
            html_body += '<button class="btn btn-sm btn-outline-success h-100 btnClosePO" onclick="doClosePO(' + value['po_id'] + ')">Close PO</button>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }

    function doClosePO(po_id) {
        var data = data_po.find((values, keys) => {
            if (values.po_id == po_id) return true
        })
        Swal.fire({
            text: 'Apakah anda yakin ingin Closing PO ' + data['no_po'] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var data = {
                    po_id: po_id,
                }
                var button = '.btnClosePO'
                var url = '<?php echo api_url('Api_Warehouse/completePo'); ?>'
                kelolaData(data, type, url, button)
            }
        })
    }

    function linkToDetail(idPo) {
        var url = '<?= base_url() ?>order/detailPO/' + idPo
        window.open(url, '_blank')
    }
</script>