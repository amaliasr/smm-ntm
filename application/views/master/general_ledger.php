<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/finance.css" rel="stylesheet" type="text/css">
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
                        <p class="m-0 small-text"><i>Last Updated</i></p>
                        <p class="m-0 small-text"><i>Today at <b id="timeRefresh">-</b></i></p>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm shadow-none btn-outline-primary" onclick="loadData()"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-sm shadow-none btn-primary" onclick="addNewData()"><i class="fa fa-plus me-2"></i>Create New</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="alertPOWithoutInvoice">
            </div>
            <div class="col-3">
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
            <div class="col-9 ps-0">
                <div class="card shadow-none h-100">
                    <div class="card-header">
                        <p class="m-0 super-small-text fw-bolder text-grey-99">List Cost Center</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 px-4" id="statusLine">

                            </div>
                        </div>
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
    var data_master_payment = null
    var data_po = {}
    var data_po_all = null
    var clicked_po = []
    var costCenterStatus = false
    var costCenterNTMId = 23
    var date_start = getFirstDate()
    var date_end = currentDate()
    var account = []
    var department_id_clicked = null
    var cost_center_id_clicked = null
    var statusLineVariableTemplate = {
        id: 0,
        name: 'Semua Data',
        selected: true,
        functions: 'countAllData()',
        getData: 'chooseDataAllData()'
    }
    var statusLineVariable = []
    var currentIndexStep = 1
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
            var text = 'text-grey border-bottom'
            var icon = 'text-grey bg-light'
            if (e.selected) {
                text = 'fw-bold filter-border'
                icon = 'bg-light-blue text-white'
            }
            var num = eval(e.functions)
            html += '<div class="col-auto h-100 statusLine text-small pb-2 align-self-center mb-2 ' + text + '" style="cursor:pointer" onclick="statusLineSwitch(' + e.id + ',' + "'" + e.getData + "'" + ')" id="colStatusLine' + e.id + '">'
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
        html += '<th class="align-middle small-text bg-white">Code</th>'
        html += '<th class="align-middle small-text bg-white">Name</th>'
        html += '<th class="align-middle small-text bg-white">Total GL</th>'
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
            html += '<a class="dropdown-item" onclick="showViewInvoice(' + "'" + e.department.id + "'" + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
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
        addNewData()
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
        var html = '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="simpanData(department_id_clicked)" disabled>Simpan</button>'
        return html
    }

    function btnSavePayment() {
        var html = '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanPayment" onclick="simpanDataPayment(department_id_clicked,cost_center_id_clicked)" disabled>Simpan</button>'
        return html
    }

    function headerData(department_id, cost_center_id) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12 px-3">'
        html += '<p class="m-0 fw-bolder h5 d-flex align-self-center">General Ledger Item <span class="badge bg-info text-white ms-2 small-text p-1 px-2">Draft</span></p>'
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
                btnSimpanRemoveDisabled(true)
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

    function simpanData(invoice_id) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setInvoice'); ?>'
        if (invoice_id) {
            var invoiceFiltered = data_gl.find((value, key) => {
                if (value.id == invoice_id) return true
            });
            code_invoice = invoiceFiltered.doc_number
            var id = invoice_id
        } else {
            var id = createCodeId()
        }
        if (newNumberInvoice) {
            code_invoice = newNumberInvoice
        }
        var doc_number_manual = $('#no_supplier_invoice').val()
        var datetime = $('#date_supplier_invoice').val() + ' ' + currentTimeNew()
        var date_overdue = $('#date_jatuh_tempo').val()
        var sub_total = $('#nominal_invoice').val()
        var tax_id = $('#selectJenisPph').val()
        var tax_ppn_id = $('#selectJenisPpn').val()
        var tax_nominal_pph = $('#nominal_pph_invoice').val()
        var tax_nominal_ppn = $('#nominal_ppn_invoice').val()
        if (!tax_nominal_pph) {
            tax_nominal_pph = 0
        }
        if (!tax_nominal_ppn) {
            tax_nominal_ppn = 0
        }
        if (tax_nominal_pph || tax_nominal_ppn) {
            var operatorpph = $('#selectJenisPph option:selected').attr('data-operator');
            var operatorppn = $('#selectJenisPpn option:selected').attr('data-operator');
            if (!operatorpph) {
                operatorpph = '+'
            }
            if (!operatorppn) {
                operatorppn = '+'
            }
            eval('var jumlah_tax = parseFloat(sub_total) ' + operatorpph + ' parseFloat(tax_nominal_pph)' + operatorppn + ' parseFloat(tax_nominal_ppn)');
            var grand_total = jumlah_tax
        } else {
            var grand_total = parseFloat(sub_total)
        }
        var note = $('#notes').val()
        var invoice_detail = []
        var a = 0
        for (let i = 0; i < invoice_po_id_clicked.length; i++) {
            var dataPO = data_po.find((value, key) => {
                if (value.id == invoice_po_id_clicked[i]) return true
            });
            if (invoice_id) {
                var findPOEdit = invoiceFiltered.invoice_details.find((value, key) => {
                    if (value.po_id == invoice_po_id_clicked[i]) return true
                });
                if (findPOEdit) {
                    var idDetail = findPOEdit.id
                } else {
                    var idDetail = createCodeId() + '' + a
                    a++
                }
            } else {
                var idDetail = createCodeId() + '' + a
                a++
            }
            invoice_detail.push({
                "id": idDetail,
                "invoice_id": id,
                "po_id": invoice_po_id_clicked[i],
                "nominal": $('#nominalPerPO' + invoice_po_id_clicked[i]).val(),
                "created_at": currentDateTime(),
                "updated_at": currentDateTime()
            })
        }
        var data = {
            invoice: [{
                id: id,
                doc_number: code_invoice,
                doc_number_manual: doc_number_manual,
                employee_id: user_id,
                supplier_id: supplier_id_clicked,
                datetime: datetime,
                date_overdue: date_overdue,
                sub_total: sub_total,
                grand_total: grand_total,
                created_at: currentDateTime(),
                updated_at: currentDateTime(),
                note: note,
            }],
            invoice_detail: invoice_detail
        }
        if (tax_nominal_pph) {
            data.invoice[0].tax_id = tax_id
            data.invoice[0].tax_nominal = tax_nominal_pph
        }
        if (tax_nominal_ppn) {
            data.invoice[0].tax_ppn_id = tax_ppn_id
            data.invoice[0].tax_ppn_nominal = tax_nominal_ppn
        }
        // console.log(data)
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
                        if (data.invoice) {
                            department_id_clicked = data.invoice[0].id
                        }
                        currentIndexStep = 0
                        code_invoice = ''
                        code_payment = ''
                        supplier_id_clicked = null
                        invoice_po_id_clicked = []
                        newNumberInvoice = ''
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
    // search multi
    $(document).on('keyup', '#search_id_po', function(e) {
        searching()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching() {
        var value = $('#search_id_po').val().toLowerCase();
        var cards = $('.text_search').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#cardListPO' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#cardListPO' + array_arranged[i]).removeClass('d-none')
        }
    }
</script>