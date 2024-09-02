<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/finance.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/multiselect.css" rel="stylesheet" type="text/css">
<!-- multiselect css -->
<link href="<?= base_url(); ?>assets/smm/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/bootstrap-multiselect/css/bootstrap-multiselect.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/bootstrap-multiselect/css/prettify.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/bootstrap-multiselect/css/fontawesome-5.15.1-web/all.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/bootstrap-multiselect/css/fontawesome-5.15.1-web/all.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/bootstrap-multiselect/css/bootstrap-example.min.css" rel="stylesheet" type="text/css">
<!-- multiselect -->
<script type="text/javascript" src="<?= base_url() ?>assets/smm/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/smm/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/smm/bootstrap-multiselect/js/bootstrap.bundle-4.5.2.min.js"></script>
<style>
    .bg-primary-gl {
        background-color: #96BBC3 !important;
        color: white !important;
    }

    .bg-grey {
        background-color: #f4f4f4 !important;
    }
</style>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
</svg>
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
                    <div class="col-10 align-self-center">
                        <h1 class="text-dark fw-bolder m-0" style="font-weight: 700 !important">General Ledger</h1>
                        <p class="m-0 super-small-text">Panel Kegiatan Entri untuk Manajemen General Ledger</p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="row justify-content-end">
                    <div class="col-auto pe-0">
                        <!-- <p class="m-0 small-text"><i>Last Updated</i></p>
                        <p class="m-0 small-text"><i>Today at <b id="timeRefresh">-</b></i></p> -->
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm shadow-none btn-outline-primary" onclick="loadData()"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm shadow-none btn-primary" onclick="addNewData()"><i class="fa fa-plus me-2"></i>Create New</button>
                        <button type="button" class="btn btn-sm shadow-none btn-outline-primary" onclick="addNewDataItem()"><i class="fa fa-plus me-2"></i>New Item GL</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="alertPOWithoutInvoice">
            </div>
            <div class="col-3" hidden>
                <div class="card shadow-none">
                    <div class="card-header">
                        <p class="m-0 super-small-text fw-bolder text-grey-99">Undefined Item (7)</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control-sm form-control" style="border-radius: 10px !important;" placeholder="Cari Item" id="search_id_po" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12" style="max-height: 400px;overflow-x: hidden;overflow-y: auto;">
                                <?php for ($i = 0; $i < 12; $i++) { ?>
                                    <div class="card shadow-none pointer card-hoper mb-2">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-3 align-self-end text-center">
                                                    <input class="form-check-input" type="checkbox" value="" id="checkListPO">
                                                </div>
                                                <div class="col-9">
                                                    <p class="m-0 small-text">RM.04-609</p>
                                                    <p class="m-0 small-text fw-bolder">Box REUSE 20 SKM RED</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-12 pt-2">
                                <button class="btn btn-sm shadow-none bg-primary-payment w-100 py-3" onclick="addNewData()">Convert to General Ledger (<span>3</span>)</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow-none h-100">
                    <div class="card-header">
                        <!-- <p class="m-0 super-small-text fw-bolder text-grey-99">List Cost Center</p> -->
                        <div class="row">
                            <div class="col-12 px-4" id="statusLine">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row me-0">
                            <div class="col-12 pe-0">
                                <div class="table-responsible" id="dataTable">
                                </div>
                            </div>
                        </div>
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
<!-- <script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script> -->
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
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 150px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 150px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function loadingReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 150px; height: 100%;" src="<?= base_url() ?>assets/json/loading.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function redSmallText(text = null) {
        var html = ''
        if (text) {
            html += '<span class="text-danger super-small-text">' + text + '</span>'
        } else {
            html += '<span class="text-danger">*</span>'
        }
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
        currentIndexStep = 0
        code_invoice = ''
        code_payment = ''
        department_id_clicked = null
        cost_center_id_clicked = null
        payment_id_clicked = null
        supplier_id_clicked = null
        invoice_po_id_clicked = []
        newNumberInvoice = ''
        openKerangkaAfterLoad = ''
        supplier_selected = null
        indexAdd = 0
        data_general_ledger = null
        data_general_ledger_item_showed = {}
        variableNewItem = []
        variableNewItemChoosed = []
        variableDeleteItemFromGL = []
        variableCheckedItem = []
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_level_id = '<?= $this->session->userdata('job_level_id') ?>'
    var initialDivision = "<?= $this->session->userdata('alias') ?>"
    var data_master = {}
    var data_department = null
    var data_cost_center = []
    var data_gl_showed = []
    var date_start = getFirstDate()
    var date_end = currentDate()
    var account = []
    var department_id_clicked = null
    var cost_center_id_clicked = null
    var data_general_ledger = null
    var data_general_ledger_item = null
    var data_general_ledger_item_showed = {}
    var statusLineVariableTemplate = {
        id: 0,
        name: 'Semua Data',
        selected: true,
        functions: 'countAllData()',
        getData: 'chooseDataAllData()'
    }
    var statusLineVariable = []
    var currentIndexStep = 0
    var stepCreateNew = [{
        index: 0,
        selected: true,
        finished: false,
        name: 'Pilih Departemen',
        function: 'firstStepInvoice(department_id,cost_center_id)',
        text: 'Pilih Departemen',
        button: ['btnCancel()', 'btnNext()'],
    }, {
        index: 1,
        selected: false,
        finished: false,
        name: 'Buat Cost Center',
        function: 'secondStepInvoice(department_id,cost_center_id)',
        text: 'Buat Cost Center',
        button: ['btnBack()', 'btnCancel()', 'btnNext()'],
    }, {
        index: 2,
        selected: false,
        finished: false,
        name: 'Buat Pilih Item',
        function: 'thirdStepInvoice(department_id,cost_center_id)',
        text: 'Buat Pilih Item',
        button: ['btnBack()', 'btnCancel()', 'btnSave()'],
    }]
    var tabChooseItem = [{
        index: 0,
        selected: false,
        getData: 'showItemGeneralLedger()',
        functions: 'chooseShowItemGeneralLedger()',
        text: 'Semua Item',
    }, {
        index: 1,
        selected: true,
        getData: 'showItemGeneralLedger(account_id)',
        functions: 'chooseShowItemGeneralLedger(account_id)',
        text: 'Selected Item',
    }]
    var formatedTabChooseItem = {}
    var indexAdd = 0
    var variableNewItem = []
    var variableDeleteItemFromGL = []
    var variableCheckedItem = []
    var variableNewItemChoosed = []
    var data_item
    $(document).ready(function() {
        loadData()
    })

    function alertPOWithoutInvoice(number) {
        var html = ''
        html += '<div class="alert alert-primary small-text py-3 d-flex align-items-center bd-highlight pointer" role="alert" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" onclick="getDataWithoutInvoice()">'
        html += '<div class="bd-highlight">'
        html += '<svg class="bi flex-shrink-0 me-2" width="15" height="15" role="img" aria-label="Warning:">'
        html += '<use xlink:href="#exclamation-triangle-fill" />'
        html += '</svg>'
        html += '</div>'
        html += '<div class="bd-highlight"><b class="me-1">' + number + '</b>Purchase Order belum memiliki Invoice</div>'
        html += '<div class="ms-auto bd-highlight"><i class="fa fa-chevron-right"></i></div>'
        html += '</div>'
        $('#alertPOWithoutInvoice').html(html)
    }

    function loadData() {
        $.ajax({
            url: "<?= api_url('getDepartmentAccount'); ?>",
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
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_department = response.data.departmentAccount
                arrangeVariable()
            }
        })
    }

    function arrangeVariable() {
        data_cost_center = []
        statusLineVariable = []
        statusLineVariable.push(statusLineVariableTemplate)
        var a = 1
        data_department.forEach(e => {
            if (e.cost_centers) {
                e.cost_centers.forEach(el => {
                    data_cost_center.push({
                        department: e.department,
                        cost_center: el.cost_center,
                        general_ledger_total: el.general_ledger_total,
                        general_ledgers: el.general_ledgers,
                        item_total: el.item_total,
                        items: el.items,
                    })
                });
                statusLineVariable.push({
                    id: a++,
                    name: shortenText(e.department.name, 15),
                    selected: false,
                    functions: 'countDataFiltered(' + e.department.id + ')',
                    getData: 'chooseDataFiltered(' + e.department.id + ')'
                })
            }
        });
        data_gl_showed = data_cost_center
        statusLine()
    }

    function currentTimeNew() {
        var d = new Date();
        var jam = d.getHours();
        var menit = d.getMinutes();
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        var time = jam + ":" + menit;
        return time;
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
                    dateRangeString()
                    loadData()
                });
            },
        })
    }

    function dateRangeString() {
        $('#dateRangeString').html(formatDateIndonesiaShort(date_start) + ' - ' + formatDateIndonesiaShort(date_end))
    }

    function chooseDataAllData() {
        var data = data_cost_center
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataFiltered(id_department) {
        var data = data_cost_center.filter((v, k) => {
            if (v.department.id == id_department) return true
        })
        return data
    }

    function countDataFiltered(id_department) {
        return chooseDataFiltered(id_department).length
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
        data_gl_showed = eval(getData)
        statusLine()
    }

    function statusLine() {
        var html = ''
        html += '<div class="row justify-content-between">'
        html += '<div class="col h-100">'
        html += '<div class="row justify-content-center">'
        statusLineVariable.forEach(e => {
            var text = 'text-dark-grey'
            var icon = 'text-grey bg-light'
            if (e.selected) {
                text = 'fw-bold text-dark filter-border'
                icon = 'bg-light-blue text-white'
            }
            var num = eval(e.functions)
            html += '<div class="col-auto h-100 statusLine text-small pb-2 align-self-center ' + text + '" style="cursor:pointer" onclick="statusLineSwitch(' + e.id + ',' + "'" + e.getData + "'" + ')" id="colStatusLine' + e.id + '">'
            html += e.name + '<span class="statusLineIcon ms-1 p-1 rounded ' + icon + '" id="statusLineIcon' + e.id + '">' + num + '</span>'
            html += ' </div>'

        });
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#statusLine').html(html)
        kerangkaHistory()
    }

    function kerangkaHistory() {
        var html = ''
        html += '<table class="table table-hover table-sm small w-100 mt-3" style="overflow-x: hidden;" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '<tr class="py-2">'
        html += '<th class="align-middle small-text bg-white">#</th>'
        html += '<th class="align-middle small-text bg-white">Department</th>'
        html += '<th class="align-middle small-text bg-white">Cost Center Code</th>'
        html += '<th class="align-middle small-text bg-white">Cost Center Name</th>'
        html += '<th class="align-middle small-text bg-white">Total<br>General Ledger</th>'
        html += '<th class="align-middle small-text bg-white">Total Item</th>'
        html += '<th class="align-middle small-text bg-white"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '</table>'
        $('#dataTable').html(html)
        bodyHistory()
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function bodyHistory() {
        var html = ''
        var a = 1
        var dataFind = deepCopy(data_gl_showed)
        dataFind.forEach(e => {
            html += '<tr>'
            html += '<td class="align-middle text-center small-text">' + a++ + '</td>'
            html += '<td class="align-middle text-center small-text">' + e.department.name + '</td>'
            html += '<td class="align-middle text-center small-text">' + e.cost_center.code + '</td>'
            html += '<td class="align-middle small-text">' + e.cost_center.name + '</td>'
            html += '<td class="align-middle text-center small-text">' + e.general_ledger_total + '</td>'
            html += '<td class="align-middle text-center small-text">' + e.item_total + '</td>'
            html += '<td class="align-middle small-text text-center">'
            html += '<button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
            html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
            html += '<a class="dropdown-item" onclick="addNewData(' + "'" + e.department.id + "'" + ',' + "'" + e.cost_center.id + "'" + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
            html += '</div>'
            html += '</td>'
            html += '</tr>'
        });
        $('#bodyTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "500px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            "initComplete": function(settings, json) {
                $('div.dataTables_filter input').attr('placeholder', 'Search...');
            },
            searching: true,
        })
        // jika modalnya terbuka
        if ($('#modal').hasClass('show')) {
            kerangkaNewData(department_id_clicked, cost_center_id_clicked)
        }
        addNewDataItem()
    }

    function createCodeId() {
        var date = (new Date).getTime()
        return date;
    }


    function checkNullInput() {
        var ifNull = false
        $.each(variableInsert, function(k, v) {
            if (!$(variableInputTag[k]).val()) {
                ifNull = true
                signIfNull(v)
            } else {
                $('#hr_' + v).removeClass('border border-danger')
                $('#error_' + v).html('')
            }
        })
        return ifNull
    }

    function signIfNull(variable) {
        $('#hr_' + variable).addClass('border border-danger')
        $('#error_' + variable).html('Tidak boleh kosong')
    }

    function copyNominal(nominal) {
        $('#nominalPembayaran').val(nominal)
    }

    function autoLunasClicked() {
        if ($('#autoLunasCheck').is(':checked')) {
            $('#fieldPelunasan').prop('hidden', false)
        } else {
            $('#fieldPelunasan').prop('hidden', true)
        }
    }


    function addNewData(department_id = null, cost_center_id = null) {
        department_id_clicked = department_id
        cost_center_id_clicked = cost_center_id
        $('#modal').modal('show')
        kerangkaNewData(department_id, cost_center_id)
    }

    function kerangkaNewData(department_id = null, cost_center_id = null) {
        openKerangkaAfterLoad = 'view'
        department_id_clicked = department_id
        cost_center_id_clicked = cost_center_id
        if (department_id && cost_center_id) {
            currentIndexStep = 2
        }
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<p class="m-0 fw-bold">Create New</p>';
        html_header += '<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12" id="headerData">'
        html_body += '</div>'
        html_body += '<div class="col-12" id="tabData">'
        html_body += '</div>'
        html_body += '<div class="col-12 py-3 pb-0" id="contentData">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += btnCancel()
        $('#modalFooter').html(html_footer);
        headerData(department_id, cost_center_id)
    }

    function btnCancel() {
        var html = '<button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Batal</button>'
        return html
    }

    function btnBack() {
        var html = '<button type="button" class="btn btn-outline-primary btn-sm" id="btnBack" onclick="backModal()"><i class="fa fa-chevron-left me-2"></i> Back</button>'
        return html
    }

    function btnNext() {
        var html = '<button type="button" class="btn btn-outline-primary btn-sm" id="btnNext" onclick="nextModal()" disabled>Next <i class="fa fa-chevron-right ms-2"></i></button>'
        return html
    }

    function btnSave() {
        var html = '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="simpanData()" disabled>Simpan</button>'
        return html
    }


    function headerData(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12 px-3">'
        html += '<p class="m-0 fw-bolder h5 d-flex align-self-center">General Ledger Item <span class="badge bg-info text-white ms-2 small-text p-1 px-2" hidden id="tagDraft">Draft</span></p>'
        html += '</div>'
        html += '</div>'
        $('#headerData').html(html)
        tabData(department_id, cost_center_id)
    }

    function tabData(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row px-3 mt-4">'
        stepCreateNew.forEach(e => {
            var text = 'text-grey border-bottom'
            if (e.index == currentIndexStep) {
                text = 'fw-bold filter-border'
            }
            html += '<div class="col-auto h-100 statusLine text-small pb-2 align-self-center mb-2 ' + text + '" style="cursor:pointer" id="statusTabe' + e.id + '">'
            html += e.name + '<span id="iconField' + e.index + '">' + changeIcon(e.finished) + '</span>'
            html += ' </div>'

        });
        html += '<div class="col w-100 border-bottom pb-2 mb-2">'
        html += '</div>'
        html += '</div>'
        $('#tabData').html(html)
        contentData(currentIndexStep, department_id, cost_center_id)
    }

    function changeIcon(status) {
        if (status) {
            var icon = '<i class="fa fa-check-circle text-success ms-2"></i>'
        } else {
            var icon = '<i class="fa fa-check-circle-o text-grey ms-2"></i>'
        }
        return icon
    }

    function chooseTabData(index, department_id, cost_center_id) {
        currentIndexStep = index
        tabData(department_id, cost_center_id)
    }

    function statusTabeSwitch(index, department_id, cost_center_id) {
        currentIndexStep = index
        let updatedData = stepCreateNew.map(item => {
            return {
                ...item,
                selected: false
            };
        });
        let updatedData2 = updatedData.map(item => {
            if (item.index == index) {
                return {
                    ...item,
                    selected: true
                };
            }
            return item;
        });
        stepCreateNew = updatedData2
        contentData(index, department_id, cost_center_id)
    }

    function contentData(index, department_id, cost_center_id) {
        // pusat change tab
        var data = stepCreateNew[currentIndexStep]
        eval(data.function)
        var html = ''
        for (let i = 0; i < data.button.length; i++) {
            eval('html += ' + data.button[i])
        }
        $('#modalFooter').html(html);
        if (department_id) {
            btnNextRemoveDisabled(true)
            if (cost_center_id) {
                btnNextRemoveDisabled(true)
                // btnSimpanRemoveDisabled(true)
            }
        }
    }

    function changeStatusFinished(index, status) {
        let updatedData = stepCreateNew.map(item => {
            if (item.index == index) {
                return {
                    ...item,
                    finished: status
                };
            }
            return item;
        });
        stepCreateNew = updatedData
        $('#iconField' + index).html(changeIcon(status))
    }

    function firstStepInvoice(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row p-2 pt-0">'
        html += '<div class="col-12">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Nama Departemen ' + redSmallText() + '</p>'
        html += '<select class="form-control w-100" id="selectDepartment" title="PILIH DEPARTEMENT" onchange="changeDepartment(' + "'" + department_id + "'" + ',' + "'" + cost_center_id + "'" + ')">'
        html += '<option value="" selected disabled>PILIH DEPARTEMENT</option>'
        data_department.forEach(e => {
            if (department_id_clicked == e.department.id) {
                html += '<option value="' + e.department.id + '" selected>' + e.department.name + '</option>'
            } else {
                html += '<option value="' + e.department.id + '">' + e.department.name + '</option>'
            }
        });
        html += '</select>'
        html += '</div>'
        html += '<div class="col-12 pt-2" id="showPurchaseOrder">'
        html += '</div>'
        html += '</div>'
        $('#contentData').html(html)
        $('#selectDepartment').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        getStatusOfPilihDepartment()
    }


    function changeDepartment(department_id, cost_center_id) {
        getStatusOfPilihDepartment()
    }


    function getStatusOfPilihDepartment() {
        var value = $('#selectDepartment').val()
        var status = false
        if (value) {
            department_id_clicked = value
            status = true
        }
        btnNextRemoveDisabled(status)
        changeStatusFinished(currentIndexStep, status)
    }

    function btnNextRemoveDisabled(status) {
        if (status) {
            $('#btnNext').prop('disabled', false)
        } else {
            $('#btnNext').prop('disabled', true)
        }
    }

    function secondStepInvoice(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row p-2 pt-0">'
        html += '<div class="col-12" id="badgeTabInfo">'
        html += badgeTabInfo(department_id, cost_center_id)
        html += '</div>'
        html += '<div class="col-12" id="dataCostCenter">'
        html += '</div>'
        html += '</div>'
        $('#contentData').html(html)
        dataCostCenter(department_id, cost_center_id)
    }

    function dataCostCenter(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-6 align-self-center">'
        var dataCost = data_cost_center.filter(item => item.department.id == department_id)
        html += '<p class="m-0 fw-bolder text-grey-dark small-text">Cost Center ( ' + dataCost.length + ' )</p>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<div class="form-group has-search">'
        html += '<span class="fa fa-search form-control-feedback"></span>'
        html += '<input type="text" class="form-control-sm form-control rounded-pill" placeholder="Cari Cost Center" id="search_cost_center" autocomplete="off" onkeyup="searching(' + "'#search_cost_center'" + ',' + "'.text_cost_center'" + ',' + "'#card_cost_center'" + ')">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-2" id="newCostCenter">'
        html += '</div>'
        html += '<div class="col-12 pt-2" id="listCostCenter">'
        html += '</div>'
        html += '</div>'
        $('#dataCostCenter').html(html)
        // newCostCenter(department_id)
        listCostCenter(department_id, cost_center_id)
    }

    function newCostCenter(department_id) {
        var html = ''
        html += btnAddNew('Cost Center', 'addNewFieldCostCenter(' + department_id + ')')
        $('#newCostCenter').html(html)
    }

    function btnAddNew(name, functions) {
        var html = ''
        html += '<div class="card shadow-none pointer" onclick="' + functions + '" style="border: 1px dashed #cfcfcf;">'
        html += '<div class="card-body text-center">'
        html += '<i class="m-0 small-text">Tambah ' + name + ' Baru</i>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function addNewFieldCostCenter(department_id) {
        var html = ''
        html += '<div class="row mb-2">'
        html += '<div class="col-12">'
        html += '<p class="m-0 small-text fw-bolder">New Data</p>'
        html += '</div>'
        html += '</div>'
        // list
        html += '<div class="row mb-2">'
        html += '<div class="col-12" id="listNewCostCenter">'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<button class="btn btn-primary p-2 text-center small-text me-2" onclick="simpanCostCenter(' + department_id + ')"><i class="fa fa-check me-2"></i>Simpan</button>'
        html += '<button class="btn btn-outline-primary p-2 text-center small-text" onclick="listNewCostCenter(' + department_id + ')"><i class="fa fa-plus me-2"></i>Tambah Row</button>'
        // html += '<button class="btn btn-success h-100 w-100 p-1 text-center" onclick="listNewCostCenter(' + department_id + ')"><i class="fa fa-plus"></i></button>'
        html += '</div>'
        html += '</div>'
        // list
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="m-0 small-text fw-bolder">Current Cost Center</p>'
        html += '</div>'
        html += '</div>'
        $('#newCostCenter').html(html)
        $('#selectCostCenterNew').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        listNewCostCenter(department_id)
    }

    function listNewCostCenter(department_id) {
        var html = ''
        html += kerangkaAddCostCenter(department_id, null, indexAdd)
        $('#listNewCostCenter').append(html)
        $('#selectCostCenterNew' + indexAdd).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        indexAdd++
    }

    function listCostCenter(department_id, cost_center_id) {
        var html = ''
        var dataCost = data_cost_center.filter(item => item.department.id == department_id)
        dataCost.forEach(e => {
            html += kerangkaAddCostCenter(department_id, e)
        });

        $('#listCostCenter').html(html)
    }

    function kerangkaAddCostCenter(department_id, value = null, index_add = null) {
        var html = ''
        if (value != null) {
            // edit
            html += '<div class="row mb-2" id="card_cost_center' + value.cost_center.id + '">'
            html += '<div class="col-12">'
            html += '<div class="card shadow-none pointer card-hoper bg-light" onclick="chooseGeneralLedger(' + value.cost_center.id + ')">'
            html += '<div class="card-body py-1">'

            html += '<div class="row">'
            html += '<div class="col-11 pe-0 align-self-center">'
            html += '<p class="m-0 small-text fw-bolder text_cost_center" data-id="' + value.cost_center.id + '">' + value.cost_center.code + ' - ' + value.cost_center.name + '</p>'
            html += '</div>'
            html += '<div class="col-1 ps-1 text-end">'
            html += '<button class="btn h-100 shadow-none px-1"><i class="fa fa-ellipsis-v"></i></button>'
            html += '</div>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        } else {
            // tambah baru
            html += '<div class="row mb-2" id="fieldCostCenterNew' + index_add + '">'
            html += '<div class="col-11 pe-0">'
            html += '<select class="form-control w-100 selectpicker" id="selectCostCenterNew' + index_add + '" title="PILIH COST CENTER">'
            html += '<option value="" selected>Pilih Cost Center</option>'
            html += '</select>'
            html += '</div>'
            html += '<div class="col-1 ps-0 text-end">'
            html += '<button class="btn h-100 w-100 p-1 text-center" onclick="deleteListNewCostCenter(' + index_add + ')">X</button>'
            // html += '<button class="btn btn-danger h-100 w-100 p-1 text-center" onclick="deleteListNewCostCenter(' + index_add + ')"><i class="fa fa-trash"></i></button>'
            html += '</div>'
            html += '</div>'
        }
        return html
    }

    function deleteListNewCostCenter(index) {
        $('#fieldCostCenterNew' + index).remove()
    }

    function badgeTabInfo(department_id, cost_center_id) {
        var html = ''
        html += '<div class="alert bg-light-primary-payment border-light-primary-payment py-3" role="alert">'
        html += '<div class="row">'
        html += '<div class="col-auto">'
        html += '<p class="m-0 fw-bold text-dark-grey small-text">Nama</p>'
        if (department_id) {
            var dataDep = data_department.find(item => item.department.id == department_id)
            html += '<p class="m-0 fw-bolder text-grey-dark">' + dataDep.department.name + '</p>'
        } else {
            html += '<p class="m-0 fw-bolder text-grey-dark">--</p>'
        }
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<p class="m-0 fw-bold text-dark-grey small-text">Cost Center</p>'
        if (cost_center_id) {
            var dataCost = data_cost_center.find(item => item.cost_center.id == cost_center_id)
            html += '<p class="m-0 fw-bolder text-grey-dark">' + dataCost.cost_center.code + ' - ' + dataCost.cost_center.name + '</p>'
        } else {
            html += '<p class="m-0 fw-bolder text-grey-dark">--</p>'
        }
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function thirdStepInvoice(department_id, cost_center_id) {
        var html = ''
        $('#contentData').html(html)
    }

    function btnSimpanRemoveDisabled(status) {
        if (status) {
            $('#btnSimpan').prop('disabled', false)
        } else {
            $('#btnSimpan').prop('disabled', true)
        }
    }

    function backModal() {
        currentIndexStep--
        changePositionPageModal()
    }

    function nextModal() {
        currentIndexStep++
        changePositionPageModal()
    }

    function changePositionPageModal() {
        tabData(department_id_clicked, cost_center_id_clicked)
    }

    function chooseGeneralLedger(cost_center_id) {
        cost_center_id_clicked = cost_center_id
        changeStatusFinished(currentIndexStep, 'true')
        currentIndexStep++
        tabData(department_id_clicked, cost_center_id_clicked)
    }

    function thirdStepInvoice(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row p-2 pt-0">'
        html += '<div class="col-12" id="badgeTabInfo">'
        html += badgeTabInfo(department_id, cost_center_id)
        html += '</div>'
        html += '<div class="col-12" id="dataGeneralLedger">'
        html += loadingReturn('Sedang Mencari Data General Ledger')
        html += '</div>'
        html += '</div>'
        $('#contentData').html(html)
        getDataGeneralLedger(department_id, cost_center_id)
    }


    function getDataGeneralLedger(department_id, cost_center_id) {
        data_general_ledger = null
        data_general_ledger_item = null
        data_general_ledger_item_showed = {}
        $.ajax({
            url: "<?= api_url('loadPageCostCenterAccountManage'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                costCenterId: cost_center_id,
                departmentId: department_id
            },
            error: function(xhr) {
                empty('#dataGeneralLedger', 'Data Error')
            },
            beforeSend: function() {},
            success: function(response) {
                data_general_ledger = response.data.costCenterAccount
                getDataItemGL(department_id, cost_center_id)
            }
        })
    }

    function getDataItemGL(department_id, cost_center_id) {
        $.ajax({
            url: "<?= api_url('getItemAccount'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                costCenterId: cost_center_id,
                departmentId: department_id
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_general_ledger_item = response.data.item
                data_general_ledger.general_ledger.forEach(e => {
                    formatedTabChooseItem[e.account_id] = deepCopy(tabChooseItem)
                    data_general_ledger_item_showed[e.account_id] = showItemGeneralLedger(e.account_id)
                });
                dataGeneralLedger(department_id, cost_center_id)
            }
        })
    }

    function dataGeneralLedger(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-6 align-self-center">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text">General Ledger ( ' + data_general_ledger.general_ledger.length + ' )</p>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<div class="form-group has-search">'
        html += '<span class="fa fa-search form-control-feedback"></span>'
        html += '<input type="text" class="form-control-sm form-control rounded-pill" placeholder="Cari General Ledger" id="search_general_ledger" autocomplete="off" onkeyup="searching(' + "'#search_general_ledger'" + ',' + "'.text_general_ledger'" + ',' + "'#card_general_ledger'" + ')">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-2" id="newGeneralLedger">'
        html += '</div>'
        html += '<div class="col-12 pt-2" id="listGeneraLedger">'
        html += '</div>'
        html += '</div>'
        $('#dataGeneralLedger').html(html)
        // newGeneralLedger(department_id, cost_center_id)
        listGeneraLedger(department_id, cost_center_id)
    }

    function newGeneralLedger(department_id, cost_center_id) {
        var html = ''
        html += btnAddNew('General Ledger', 'addNewFieldGeneralLedger(' + department_id + ',' + cost_center_id + ')')
        $('#newGeneralLedger').html(html)
    }

    function addNewFieldGeneralLedger(department_id, cost_center_id) {
        // tambah baru GL
    }

    function listGeneraLedger(department_id, cost_center_id) {
        var html = ''
        data_general_ledger.general_ledger.forEach(e => {
            html += kerangkaGeneralLedgerList(department_id, cost_center_id, e, e.gl_item_id, e.account_id)
        });
        $('#listGeneraLedger').html(html)
        data_general_ledger.general_ledger.forEach(e => {
            statusLineItemField(department_id, cost_center_id, e.gl_item_id, e.account_id)
        })
    }

    function kerangkaGeneralLedgerList(department_id, cost_center_id, value, general_ledger_id, account_id) {
        var html = ''
        html += '<div class="row" id="card_general_ledger' + value.account_id + '">'
        html += '<div class="col-12">'
        // card
        html += '<div class="card shadow-none mb-2 card-hoper pointer bg-light" id="cardGL' + value.account_id + '" onclick="toggleGeneralLedger(' + value.account_id + ')">'
        html += '<div class="card-body py-1">'

        html += '<div class="row">'
        html += '<div class="col-11 pe-0 align-self-center">'
        html += '<p class="m-0 small-text fw-bolder d-flex align-items-center text_general_ledger" data-id="' + value.account_id + '">' + value.code + ' - ' + value.name + ' <span class="badge bg-primary-payment d-flex align-items-center py-1 px-2 ms-2">' + chooseShowItemGeneralLedger(account_id) + '</span></p>'
        html += '</div>'
        html += '<div class="col-1 ps-1 text-end">'
        html += '<button class="btn h-100 shadow-none px-1"><i class="fa fa-ellipsis-v"></i></button>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        // card
        // card view
        html += '<div class="card shadow-none d-none mb-2" id="viewGL' + value.account_id + '">'
        html += '<div class="card-body">'

        html += '<div class="row">'
        // tab
        html += '<div class="col-12 mx-2">'
        html += '<div class="row" id="statusLineItemField' + general_ledger_id + '">'

        html += '</div>'
        html += '</div>'
        // tab
        // isi
        html += '<div class="col-12">'
        // table
        html += '<div class="row px-2">'
        html += '<div class="col-12 px-0 py-2">'
        // cari
        html += '<div class="form-group has-search">'
        html += '<span class="fa fa-search form-control-feedback"></span>'
        html += '<input type="text" class="form-control-sm form-control" style="border-radius: 10px !important;" placeholder="Cari Item" id="search_item" autocomplete="off" onkeyup="searching(' + "'#search_item'" + ',' + "'.text_item'" + ',' + "'#rowItemGL'" + ')">'
        html += '</div>'
        // cari
        html += '</div>'
        html += '<div class="col-1 small-text align-middle fw-bolder text-center py-2 border-bottom">'
        html += '<input class="form-check-input checkAllItemGL" type="checkbox" value="' + value.id + '" data-department_id="' + department_id + '" data-cost_center_id="' + cost_center_id + '" data-account_id="' + account_id + '" id="checkAllItemGL' + general_ledger_id + '" onclick="checkAllItemGL(' + general_ledger_id + ',' + account_id + ' )">'
        html += '</div>'
        html += '<div class="col-2 small-text align-middle fw-bolder text-center py-2 border-bottom">Kode</div>'
        html += '<div class="col-3 small-text align-middle fw-bolder text-center py-2 border-bottom">Nama</div>'
        html += '<div class="col-2 small-text align-middle fw-bolder text-center py-2 border-bottom">Alias</div>'
        html += '<div class="col-1 small-text align-middle fw-bolder text-center py-2 border-bottom">Satuan</div>'
        html += '<div class="col-1 small-text align-middle fw-bolder text-center py-2 border-bottom">Tipe</div>'
        html += '<div class="col-1 small-text align-middle fw-bolder text-center py-2 border-bottom">Categ</div>'
        html += '<div class="col-1 small-text align-middle fw-bolder text-center py-2 border-bottom">GL</div>'
        html += '</div>'
        html += '<div class="" style="max-height: 300px;overflow-x: hidden;overflow-y: auto;" id="bodyTableItem' + general_ledger_id + '">'
        html += '</div>'
        // table
        html += '</div>'
        // isi
        html += '</div>'

        html += '</div>'
        html += '</div>'
        // card view
        html += '</div>'
        html += '</div>'
        return html
    }

    function checkAllItemGL(general_ledger_id, account_id) {
        if ($('#checkAllItemGL' + general_ledger_id).is(':checked')) {
            // jika semua nya di checklist
            $('#bodyTableItem' + general_ledger_id).find('.checkItemGL').prop('checked', true)
        } else {
            // jika uncheck semua
            $('#bodyTableItem' + general_ledger_id).find('.checkItemGL').prop('checked', false)
        }
        checkAll(general_ledger_id)
    }

    function checkIfAllChecked(department_id, cost_center_id, general_ledger_id, account_id, dataList) {
        if (dataList.length) {
            var data = dataList.filter((v, k) => {
                if (v.department_id == department_id && v.cost_center_id == cost_center_id && v.account_id == account_id && v.id_gl == general_ledger_id) return true
            })
            // console.log(data)
            if (data.length) {
                data.forEach(e => {
                    $('#checkItemGL' + general_ledger_id + '' + e.id).prop('checked', true)
                });
            }
        }
        checkAll(general_ledger_id)
    }

    function checkAll(general_ledger_id) {

        if ($('#bodyTableItem' + general_ledger_id).find('.checkItemGL').length == $('#bodyTableItem' + general_ledger_id).find('.checkItemGL:checked').length) {
            // jika semua nya di checklist
            $('#checkAllItemGL' + general_ledger_id).prop('checked', true)
        } else {
            // jika ada yang belum di check
            $('#checkAllItemGL' + general_ledger_id).prop('checked', false)
        }
        checkIfAllUnChecked(general_ledger_id)
    }

    function statusLineItemField(department_id, cost_center_id, general_ledger_id, account_id) {
        var html = ''
        formatedTabChooseItem[account_id].forEach(e => {
            html += statusLineItemFieldFormat(department_id, cost_center_id, e, general_ledger_id, account_id)
        });
        $('#statusLineItemField' + general_ledger_id).html(html)
        bodyTableItem(department_id, cost_center_id, general_ledger_id, account_id)
    }

    function bodyTableItem(department_id, cost_center_id, general_ledger_id, account_id) {
        var html = ''
        var no = 1
        data_general_ledger_item_showed[account_id].forEach(e => {
            html += bodyTableItemFormat(department_id, cost_center_id, no++, e, general_ledger_id, account_id)
        });
        $('#bodyTableItem' + general_ledger_id).html(html)
        arrangeVariableAllChecked(department_id, cost_center_id, general_ledger_id, account_id)
    }

    function arrangeVariableAllChecked(department_id, cost_center_id, general_ledger_id, account_id) {
        variableCheckedItem = []
        showItemGeneralLedger(account_id).forEach(e => {
            variableCheckedItem.push({
                id: e.id,
                department_id: department_id,
                cost_center_id: cost_center_id,
                id_gl: general_ledger_id,
                account_id: account_id,
            })
        })
        checkIfAllChecked(department_id, cost_center_id, general_ledger_id, account_id, variableCheckedItem)
    }

    function bodyTableItemFormat(department_id, cost_center_id, no, e, general_ledger_id, account_id) {
        var fungsi = 'chooseItemGeneralLedger(' + department_id + ',' + cost_center_id + ',' + general_ledger_id + ',' + account_id + ',' + e.id + ')'
        var html = ''
        html += '<div class="row px-2 card-hoper" id="rowItemGL' + general_ledger_id + '' + e.id + '" onclick="' + fungsi + '" >'
        html += '<div class="col-1 small-text text-center align-self-start py-1 h-100">'
        html += '<input class="form-check-input checkItemGL" type="checkbox" value="' + e.id + '" data-department_id="' + department_id + '" data-cost_center_id="' + cost_center_id + '" data-id_gl="' + general_ledger_id + '" data-account_id="' + account_id + '" id="checkItemGL' + general_ledger_id + '' + e.id + '" onchange="' + fungsi + '">'
        html += '</div>'
        html += '<div class="col-2 small-text text-center align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '">' + e.code + '</div>'
        html += '<div class="col-3 small-text align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '">' + e.name + '</div>'
        html += '<div class="col-2 small-text text-center align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '">' + e.alias + '</div>'
        html += '<div class="col-1 small-text text-center align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '">' + e.unit.name + '</div>'
        html += '<div class="col-1 small-text text-center align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '">' + e.type.name + '</div>'
        html += '<div class="col-1 small-text text-center align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '">' + e.category.name + '</div>'
        html += '<div class="col-1 small-text text-center align-self-start py-1 h-100 text_item" data-id="' + general_ledger_id + '' + e.id + '"></div>'
        html += '<div class="col-12 border-bottom"></div>'
        html += '</div>'
        return html
    }

    function chooseItemGeneralLedger(department_id, cost_center_id, general_ledger_id, account_id, id) {
        if ($('#checkItemGL' + general_ledger_id + '' + id).is(':checked')) {
            // jika uncheck
            $('#checkItemGL' + general_ledger_id + '' + id).prop('checked', false)
            $('#rowItemGL' + general_ledger_id + '' + id).removeClass('bg-light')
        } else {
            // jika check
            $('#checkItemGL' + general_ledger_id + '' + id).prop('checked', true)
            $('#rowItemGL' + general_ledger_id + '' + id).addClass('bg-light')
        }
        checkAll(general_ledger_id)
    }

    function checkIfAllUnChecked(general_ledger_id) {
        // jika semua data teruncheck
        var dataCheck = $('#bodyTableItem' + general_ledger_id).find('.checkItemGL:checked')
        if (!dataCheck.length) {
            hapusCheclist(general_ledger_id)
        } else {
            batalHapusChecklist(general_ledger_id)
        }
        saveVariableCheckingIdItem()
    }

    function hapusCheclist(general_ledger_id) {
        variableDeleteItemFromGL.push(general_ledger_id)
    }

    function batalHapusChecklist(general_ledger_id) {
        variableDeleteItemFromGL.splice(variableDeleteItemFromGL.indexOf(general_ledger_id), 1)
    }

    function saveVariableCheckingIdItem() {
        variableNewItem = []
        $('.checkItemGL').each(function() {
            if ($(this).is(':checked')) {
                variableNewItem.push({
                    id: $(this).val(),
                    department_id: $(this).data('department_id'),
                    cost_center_id: $(this).data('cost_center_id'),
                    id_gl: $(this).data('id_gl'),
                    account_id: $(this).data('account_id'),
                })
            } else {
                if (variableDeleteItemFromGL.includes($(this).data('id_gl'))) {
                    variableNewItem.push({
                        id: '',
                        department_id: $(this).data('department_id'),
                        cost_center_id: $(this).data('cost_center_id'),
                        id_gl: $(this).data('id_gl'),
                        account_id: $(this).data('account_id'),
                    })
                }
            }
        })
        checkBtnSimpan()
    }

    function checkBtnSimpan() {
        if (variableNewItem.length > 0) {
            btnSimpanRemoveDisabled(true)
        } else {
            btnSimpanRemoveDisabled(false)
        }
    }

    function statusLineItemFieldFormat(department_id, cost_center_id, e, general_ledger_id, account_id) {
        var html = ''
        var text = 'text-grey border-bottom'
        var icon = 'text-grey bg-light'
        if (e.selected) {
            text = 'fw-bold filter-border'
            icon = 'bg-light-blue text-white'
        }
        var num = eval(e.functions)
        html += '<div class="col-auto h-100 statusLineItem text-small pb-2 align-self-center mb-2 ' + text + '" style="cursor:pointer" onclick="tabItemSwitch(' + e.index + ',' + "'" + e.getData + "'" + ',' + "'" + general_ledger_id + "'" + ',' + "'" + account_id + "'" + ',' + "'" + department_id + "'" + ',' + "'" + cost_center_id + "'" + ')" id="colStatusLineItem' + e.index + '">'
        html += e.text + '<span class="statusLineIconItem ms-1 p-1 rounded ' + icon + '" id="statusLineIconItem' + e.index + '">' + num + '</span>'
        html += ' </div>'
        return html
    }

    function tabItemSwitch(id, getData, general_ledger_id, account_id, department_id, cost_center_id) {
        let updatedData = formatedTabChooseItem[account_id].map(item => {
            return {
                ...item,
                selected: false
            };
        });
        let updatedData2 = updatedData.map(item => {
            if (item.index == id) {
                return {
                    ...item,
                    selected: true
                };
            }
            return item;
        });
        formatedTabChooseItem[account_id] = deepCopy(updatedData2)
        data_general_ledger_item_showed[account_id] = eval(getData)
        statusLineItemField(department_id, cost_center_id, general_ledger_id, account_id)
    }

    function showItemGeneralLedger(account_id = null) {
        var data = deepCopy(data_general_ledger_item)
        if (account_id) {
            data = data.filter((value, key) => {
                if (value.account_ids_gl) {
                    if (value.account_ids_gl.includes(parseInt(account_id))) return true
                }
            });
        }
        return data
    }

    function chooseShowItemGeneralLedger(account_id = null) {
        return showItemGeneralLedger(account_id).length
    }

    function toggleGeneralLedger(id) {
        if (!$('#viewGL' + id).hasClass('d-none')) {
            // hide
            $('#cardGL' + id).removeClass('bg-primary-gl')
            $('#viewGL' + id).addClass('d-none')
        } else {
            // show
            $('#cardGL' + id).addClass('bg-primary-gl')
            $('#viewGL' + id).removeClass('d-none')
        }
    }

    function transformDataGL(data) {
        const transformed = {};

        data.forEach(item => {
            const key = `${item.id_gl}_${item.cost_center_id}_${item.account_id}`;
            if (!transformed[key]) {
                transformed[key] = {
                    id: item.id_gl,
                    cost_center_id: item.cost_center_id,
                    account_id: item.account_id,
                    item_ids: [null]
                };
            }
            if (parseInt(item.id)) {
                if (transformed[key].item_ids[0] == null) {
                    transformed[key].item_ids[0] = parseInt(item.id);
                } else {
                    transformed[key].item_ids.push(parseInt(item.id));
                }
            }
        });

        return Object.values(transformed);
    }

    function simpanData() {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setGLItem'); ?>'
        var data = {
            gl_item: deepCopy(transformDataGL(variableNewItem)),
        }
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
                        $(button).prop("disabled", false);
                        variableNewItem = []
                        variableDeleteItemFromGL = []
                        variableCheckedItem = []
                        variableNewItemChoosed = []
                        loadData()
                    })
                }
            }
        });
    }

    function deleteInvoice(id) {
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Invoice ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanDataHapusInvoice(id)
            }
        })
    }

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching(idFormSearch, classTextCard, idCard) {
        var value = $(idFormSearch).val().toLowerCase();
        var cards = $(classTextCard).map(function() {
            return $(this).text();
        }).get();
        var id_cards = $(classTextCard).map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $(idCard + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $(idCard + array_arranged[i]).removeClass('d-none')
        }
    }

    function addNewDataItem() {
        $('#modal').modal('show')
        kerangkaNewDataItem()
    }

    function kerangkaNewDataItem() {
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<p class="m-0 fw-bold">Create Item General Ledger</p>';
        html_header += '<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 mb-2" id="findItemData">'
        html_body += loadingReturn('Sedang Mencari Data Item')
        html_body += '</div>'
        html_body += '<div class="col-12" id="formFillItemData">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += btnCancel()
        html_footer += btnSave()
        $('#modalFooter').html(html_footer);
        loadDataItem()
    }

    function loadDataItem() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_item = response.data
                findItemData()
            }
        })
    }

    function extractPrefixes(data) {
        // Buat set untuk menghindari duplikasi
        const prefixes = new Set();

        // Iterasi melalui setiap item dalam array data
        data.forEach(item => {
            // Pisahkan 'code' berdasarkan '.' dan ambil bagian pertama
            const prefix = item.code.split('.')[0];
            // Tambahkan prefix ke set
            prefixes.add(prefix);
        });

        // Ubah set menjadi array
        return Array.from(prefixes);
    }

    function findItemData() {
        var html = ''
        // html += '<div class="card shadow-none">'
        // html += '<div class="card-body">'

        html += '<div class="row p-3">'
        html += '<div class="col pe-0">'
        //tipe
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-1">Tipe</p>'
        html += '<select class="form-control form-control-sm w-100 small-text text-start" id="selectTipe" multiple="multiple">'
        data_item.itemType.forEach(e => {
            html += '<option value="' + e.id + '" selected>' + e.name + '</option>'
        });
        html += '</select>'
        //tipe
        html += '</div>'
        html += '<div class="col pe-0">'
        //group code
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-1">Group Code</p>'
        html += '<select class="form-control form-control-sm w-100 small-text text-start" id="selectGroupCode" multiple="multiple">'
        var item = extractPrefixes(data_item.item)
        item.forEach(e => {
            html += '<option value="' + e + '" selected>' + e + '</option>'
        });
        html += '</select>'
        //group code
        html += '</div>'
        html += '<div class="col pe-0">'
        //Unit Mesin
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-1">Unit Mesin</p>'
        html += '<select class="form-control form-control-sm w-100 small-text text-start" id="selectUnitMesin" multiple="multiple">'
        data_item.itemUnit.forEach(e => {
            html += '<option value="' + e.unit_id + '" selected>' + e.unit_name + '</option>'
        });
        html += '</select>'
        //Unit Mesin
        html += '</div>'
        html += '<div class="col-1 text-end align-self-end">'
        html += '<button class="btn btn-sm btn-primary w-100" onclick="getItemData()" style="height: 38px">Cari</button>'
        html += '</div>'
        html += '</div>'

        // html += '</div>'
        // html += '</div>'
        $('#findItemData').html(html)
        $('#selectTipe').multiselect({
            maxHeight: 200,
            includeSelectAllOption: true,
            allSelectedText: 'Pilih Semua',
            enableFiltering: true,
            buttonTextAlignment: 'left',
            enableCaseInsensitiveFiltering: true,
        });
        $('#selectGroupCode').multiselect({
            maxHeight: 200,
            includeSelectAllOption: true,
            allSelectedText: 'Pilih Semua',
            enableFiltering: true,
            buttonTextAlignment: 'left',
            enableCaseInsensitiveFiltering: true,
        });
        $('#selectUnitMesin').multiselect({
            maxHeight: 200,
            includeSelectAllOption: true,
            allSelectedText: 'Pilih Semua',
            enableFiltering: true,
            buttonTextAlignment: 'left',
            enableCaseInsensitiveFiltering: true,
        });
        $('#formFillItemData').html(emptyReturn('Lakukan Pencarian Terlebih Dahulu'))
        getItemData()
    }

    function filterDataItem(data, tipe, groupData, unitMesin) {
        return data.filter(item => {
            // Filter by type_id
            if (item.type_id) {
                var isTypeMatch = tipe.includes(item.type_id.toString());
            } else {
                var isTypeMatch = true
            }

            // Filter by group code (code before '.')
            const groupCode = item.code.split('.')[0];
            const isGroupMatch = groupData.includes(groupCode);

            // Filter by item_unit_id (unit mesin)
            if (item.item_unit_id) {
                var isUnitMesinMatch = unitMesin.includes(item.item_unit_id.toString());
            } else {
                var isUnitMesinMatch = true
            }
            return isTypeMatch && isGroupMatch && isUnitMesinMatch;
        });
    }

    function getItemData() {
        var tipe = $('#selectTipe').val()
        var groupCode = $('#selectGroupCode').val()
        var unitMesin = $('#selectUnitMesin').val()
        var data_item_filtered = data_item.item
        var data = filterDataItem(data_item_filtered, tipe, groupCode, unitMesin)
        formFillItemData(data)
    }

    function formFillItemData(data) {
        var html = ''
        html += '<div class="row px-3">'
        html += '<div class="col-12">'

        html += '<div class="card shadow-none">'
        // header
        html += '<div class="card-header bg-white text-grey">'
        html += '<p class="m-0 fw-bolder small-text text-dark">Form Fill General Ledger</p>'
        html += '</div>'
        // header
        // body
        html += '<div class="card-body p-0">'
        html += '<table class="table table-hover table-sm small w-100" style="overflow-x: hidden;" id="tableDetailItem">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle small-text ">#</th>'
        html += '<th class="align-middle small-text ">Kode</th>'
        html += '<th class="align-middle small-text ">Nama</th>'
        html += '<th class="align-middle small-text ">Alias</th>'
        html += '<th class="align-middle small-text ">Co Center</th>'
        html += '<th class="align-middle small-text ">General Ledger</th>'
        html += '<th class="align-middle small-text "></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        data.forEach((value, key) => {
            html += formBodyItem(value, key)
        })
        html += '</tbody>'
        html += '</table>'
        html += '</div>'
        // body
        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#formFillItemData').html(html)
        $('#tableDetailItem').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            searching: false,
            info: false,
        })
    }
    var indexRowItem = 0

    function formBodyItem(value, key) {
        var html = '';
        html += '<tr id="itemRow' + value.id + '">';
        html += '<td class="align-middle super-small-text py-2 text-center">' + (key + 1) + '</td>';
        html += '<td class="align-middle super-small-text py-2 text-center">' + value.code + '</td>';
        html += '<td class="align-middle super-small-text py-2">' + value.item_name + '</td>';
        if (!value.item_alias) {
            value.item_alias = '';
        }
        html += '<td class="align-middle super-small-text py-2 text-center">' + value.item_alias + '</td>';
        html += '<td class="align-middle super-small-text py-2"></td>';
        html += '<td class="align-middle super-small-text py-2"></td>';
        html += '<td class="align-middle super-small-text py-2"><button class="btn btn-sm shadow-none" onclick="addCoCenterGL(' + value.id + ')"><i class="fa fa-plus text-grey"></i></button></td>';
        html += '</tr>';
        return html;
    }


    function addCoCenterGL(id) {
        var html = '';
        html += '<tr id="itemRowChild' + indexRowItem + '">';
        html += '<td class="align-middle super-small-text py-2"></td>';
        html += '<td class="align-middle super-small-text py-2"></td>';
        html += '<td class="align-middle super-small-text py-2"></td>';
        html += '<td class="align-middle super-small-text py-2"></td>';
        html += '<td class="align-middle super-small-text py-2">test</td>';
        html += '<td class="align-middle super-small-text py-2">test</td>';
        html += '<td class="align-middle super-small-text py-2"><button class="btn btn-danger btn-sm shadow-none" onclick="deleteCoCenterGL(' + indexRowItem + ')"><i class="fa fa-trash"></i></button></td>';
        html += '</tr>';

        // Append the new row after the clicked row
        $('#itemRow' + id).after(html);
        indexRowItem++;
    }

    function deleteCoCenterGL(id) {
        $('#itemRowChild' + id).remove();
    }
</script>