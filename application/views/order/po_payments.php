<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<style>
    .text-primary-payment {
        color: #1D91C3 !important;
    }

    .bg-primary-payment {
        background-color: #1D91C3 !important;
        color: white !important;
    }

    .bg-light-primary-payment {
        background-color: #ecf5f9 !important;
    }

    .border-primary-payment {
        border-color: #1D91C3 !important;
    }

    .border-light-primary-payment {
        border-color: #a4d3e7 !important;
    }

    .text-orange-payment {
        color: #D68231 !important;
    }

    .bg-orange-payment {
        background-color: #D68231 !important;
        color: white !important;
    }

    .bg-light-orange-payment {
        background-color: #FDF8F4 !important;
    }

    .border-orange-payment {
        border-color: #D68231 !important;
    }

    .border-light-orange-payment {
        border-color: #F1D3B7 !important;
    }

    .select2-selection {
        border: 1px solid #b6b7b7 !important;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 7px;
        padding-bottom: 7px;
        color: #a4a5a6 !important;
    }

    .select2-container .select2-selection--single {
        height: auto !important;
    }

    .form-check-input {
        width: 15px;
        height: 15px;
        margin: 0px;
    }

    .select2-container--default .select2-results>.select2-results__options {
        max-height: 500px !important;
    })
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
                    <div class="col-1 align-self-center text-center">
                        <img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/payment.svg" alt="Icon" />
                    </div>
                    <div class="col-10 align-self-center">
                        <h1 class="text-dark fw-bolder m-0" style="font-weight: 700 !important">Invoices & Payments</h1>
                        <p class="m-0 super-small-text">Panel Kegiatan Entri untuk Pembuatan Invoice <br>dan Pembayaran dari Purchase Order</p>
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
                        <button type="button" class="btn btn-sm shadow-none btn-primary" onclick="addNewInvoice()"><i class="fa fa-plus me-2"></i>Invoice Baru</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" id="alertPOWithoutInvoice">
        </div>
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-header">
                    <p class="m-0 super-small-text fw-bolder text-dark">List Invoices</p>
                    <p class="m-0 super-small-text fw-bolder text-dark-grey" id="dateRangeString"></p>
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="z-index: 9999;width: 400px;">
    <div class="offcanvas-header border-bottom">
        <p class="m-0 small" id="offcanvasRightLabel">Purchase Orders tanpa Invoices</p>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">
        <div class="row">
            <div class="col-12 p-0">
                <!-- cari -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control-sm form-control small-text" style="border-radius: 10px !important;" placeholder="Cari No. PO" id="search_id_po" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-2 ps-1" hidden>
                        <button class="btn btn-sm btn-outline-primary w-100" style="border-radius: 10px !important;"><i class="fa fa-filter"></i></button>
                    </div>
                </div>
                <!-- cari -->
            </div>
            <div class="col-12 mt-2 p-0" hidden>
                <!-- filter -->
                <div class="row">
                    <div class="col-12">
                        <p class="m-0 super-small-text text-dark">Filter :</p>
                    </div>
                    <div class="col-3 mt-2 align-self-center">
                        <P class="m-0 small-text text-dark-grey">Supplier</P>
                    </div>
                    <div class="col-9 mt-2 align-self-center">
                        <!-- form -->
                        <!-- form -->
                    </div>
                    <div class="col-3 mt-2 align-self-center">
                        <P class="m-0 small-text text-dark-grey">Date Range</P>
                    </div>
                    <div class="col-9 mt-2 align-self-center">
                        <!-- form -->
                        <!-- form -->
                    </div>
                    <div class="col-12 mt-2 text-end">
                        <button class="btn btn-sm btn-outline-primary shadow-none" style="border-radius: 10px !important;">Cari</button>
                    </div>
                </div>
                <!-- filter -->
            </div>
            <div class="col-12 mt-2 p-0 pe-1" style="max-height: 620px;overflow-x: hidden;overflow-y: auto;" id="listDataWithoutInvoice">
                <!-- list data -->
                <!-- list data -->
            </div>
            <div class="col-12" id="fieldListPOManage" hidden>
                <div class="row mt-2">
                    <div class="col-3 pe-0 ps-0">
                        <button class="btn btn-sm btn-outline-primary w-100" style="border-radius: 10px !important;height:40px;" onclick="resetDataListPO()">Reset</button>
                    </div>
                    <div class="col-9 ps-1 pe-0">
                        <button class="btn btn-sm btn-primary w-100" style="border-radius: 10px !important;height:40px;" onclick="addNewInvoiceFromSide()"><i class="fa fa-plus me-2"></i>Invoice Baru</button>
                    </div>
                </div>
            </div>
            <div class="col-12" id="alertListPOManage">
                <div class="card shadow-none border-0">
                    <div class="card-body text-center">
                        <i class="text-grey small-text">Pilih PO Terlebih Dahulu untuk Mendapatkan Aksi</i>
                    </div>
                </div>
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
        invoice_id_clicked = null
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
    var data_invoice = {}
    var data_master_payment = null
    var data_po = {}
    var data_po_all = null
    var clicked_po = []
    var costCenterStatus = false
    var costCenterNTMId = 23
    var date_start = getFirstDate()
    var date_end = currentDate()
    // var date_end = '2024-07-31'
    var account = []
    var po_id_clicked
    var statusLineVariable = [{
            id: 0,
            name: 'All Data',
            selected: true,
            functions: 'countAllData()',
            getData: 'chooseDataAllData()'
        },
        {
            id: 1,
            name: 'Unfinished Paid',
            selected: false,
            functions: 'countUnfinishedPaid()',
            getData: 'chooseDataUnfinishedPaid()'
        }
    ]
    var currentIndexStep = 0
    var stepCreateInvoice = [{
        index: 0,
        function: 'firstStepInvoice(id)',
        text: 'Pilih Supplier',
        button: ['btnCancel()', 'btnNext()'],
    }, {
        index: 1,
        function: 'secondStepInvoice(id)',
        text: 'Mengisi Data Invoice',
        button: ['btnBack()', 'btnCancel()', 'btnSave()'],
    }]
    var code_invoice = ''
    var code_payment = ''
    var invoice_id_clicked = null
    var payment_id_clicked = null
    var supplier_id_clicked = null
    var invoice_po_id_clicked = []
    var data_invoice_showed = []
    var data_invoice_payment = []
    var newNumberInvoice = ''
    var openKerangkaAfterLoad = ''
    var supplier_selected = null
    $(document).ready(function() {
        dateRangeString()
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
            url: "<?= api_url('loadPageInvoiceCreate'); ?>",
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
                data_master = response.data
                if (data_master.poInvoiceCount) {
                    alertPOWithoutInvoice(data_master.poInvoiceCount)
                }
                getInvoice()
            }
        })
    }

    function getInvoice() {
        $.ajax({
            url: "<?= api_url('getInvoice'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
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
                data_invoice = response.data.invoicePayment
                data_invoice_payment = []
                data_invoice.forEach(e => {
                    if (e.payments) {
                        e.payments.forEach(el => {
                            data_invoice_payment.push(el)
                        })
                    }
                });
                data_invoice_showed = data_invoice
                loadPaymentInvoice()
            }
        })
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

    function loadPaymentInvoice() {
        $.ajax({
            url: "<?= api_url('loadPagePaymentInvoice'); ?>",
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
                $('#timeRefresh').html(currentTimeNew())
                showOverlay('hide')
                data_master_payment = response.data
                statusLine()
            }
        })
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
        var data = data_invoice
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataUnfinishedPaid() {
        var data = data_invoice.filter((v, k) => {
            if (!v.is_paid_off) return true
        })
        return data
    }

    function countUnfinishedPaid() {
        return chooseDataUnfinishedPaid().length
    }

    function chooseDataAllDone() {
        var data = data_invoice.filter((v, k) => {
            if (v.is_paid_off == 1) return true
        })
        return data
    }

    function countAllDone() {
        return chooseDataAllDone().length
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
        data_invoice_showed = eval(getData)
        statusLine()
    }

    function statusLine() {
        var html = ''
        html += '<div class="row justify-content-between">'
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

        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 border-top pt-2">'

        html += '<div class="row justify-content-end">'
        html += '<div class="col-auto">'
        // html += '<p class="m-0 small-text">Filter :</p>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#statusLine').html(html)
        setDaterange()
        kerangkaHistory()
    }

    function kerangkaHistory() {
        var html = ''
        html += '<table class="table table-hover table-sm small w-100" style="overflow-x: hidden;" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '<tr class="py-2">'
        html += '<th class="align-middle small-text bg-white">#</th>'
        html += '<th class="align-middle small-text bg-white">No. Invoice</th>'
        html += '<th class="align-middle small-text bg-white">Sup. Invoice</th>'
        html += '<th class="align-middle small-text bg-white">Entry Date</th>'
        html += '<th class="align-middle small-text bg-white">Due Date</th>'
        html += '<th class="align-middle small-text bg-white">No. PO</th>'
        html += '<th class="align-middle small-text bg-white">User</th>'
        html += '<th class="align-middle small-text bg-white">Total Invoice</th>'
        html += '<th class="align-middle small-text bg-white">Total Payment</th>'
        html += '<th class="align-middle small-text bg-white">Invoice Balance</th>'
        html += '<th class="align-middle small-text bg-white">Payment Freq</th>'
        html += '<th class="align-middle small-text bg-white">Status</th>'
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
        var dataFind = deepCopy(data_invoice_showed)
        dataFind.forEach(e => {
            var total_payment = parseFloat(e.total_payment) + parseFloat(e.total_dp)
            if (!e.payment_freq) {
                e.payment_freq = '-'
            }
            if (!e.total_dp) {
                e.total_dp = '-'
            } else {
                e.total_dp = number_format(e.total_dp)
            }
            var iconLunas = '<i class="fa fa-check-circle text-grey"></i>'
            var bgLunas = ''
            if (e.is_paid_off) {
                iconLunas = '<i class="fa fa-check-circle text-success" title="Pembayaran Lunas"></i>'
                bgLunas = 'bg-success-light'
            } else {
                if (total_payment > 0) {
                    iconLunas = '<i class="fa fa-clock-o text-warning" title="Proses Pembayaran"></i>'
                }
            }
            html += '<tr>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + a++ + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text under-hover fw-bolder pointer" onclick="showViewInvoice(' + "'" + e.id + "'" + ')">' + e.doc_number + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + e.doc_number_manual + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + formatDate(e.datetime) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + formatDate(e.date_overdue) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle small-text text-center">'
            e.invoice_details.forEach(el => {
                html += '<p class="m-0">' + el.doc_number_po + '</p>'
            });
            html += '</td>'
            if (!e.employee.name) {
                e.employee.name = '-'
            }
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + shortenName(e.employee.name, 2) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-end small-text">' + number_format(roundToTwo(e.grand_total)) + '</td>'
            if (!e.payment_total) {
                e.payment_total = 0
            }
            html += '<td class="' + bgLunas + ' align-middle text-end small-text">' + number_format(roundToTwo(e.payment_total)) + '</td>'
            var selisih = roundToTwo(e.grand_total - e.payment_total)
            html += '<td class="' + bgLunas + ' align-middle text-end small-text">' + number_format(selisih) + '</td>'
            var jumlahPay = 0
            if (e.payments) {
                jumlahPay = e.payments.length
            }
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + jumlahPay + '</td>'
            var badge = '<span class="badge rounded-pill bg-grey super-small-text p-2 w-100">PROSES</span>'
            if (e.is_paid_off) {
                badge = '<span class="badge rounded-pill bg-success super-small-text p-2 w-100">PAID</span>'
            }
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + badge + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">'
            html += '<button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
            html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
            html += '<a class="dropdown-item" onclick="showViewInvoice(' + "'" + e.id + "'" + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
            html += '<a class="dropdown-item" onclick="addNewInvoice(' + "'" + e.id + "'" + ')"><i class="fa fa-pencil me-2"></i> Edit Invoice</a>'
            if (!e.paid_off_at) {
                html += '<hr class="m-2">'
                html += '<div class="text-center pe-2 ps-2 mt-2">'
                html += '<button class="btn btn-sm btn-danger w-100" onclick="deleteInvoice(' + "'" + e.id + "'" + ')">Hapus Invoice</button>'
                html += '</div>'
            }
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
            searching: false,
        })
        if (openKerangkaAfterLoad == 'add') {
            kerangkaNewInvoice(invoice_id_clicked)
        } else if (openKerangkaAfterLoad == 'view') {
            kerangkaViewInvoice(invoice_id_clicked)
        } else if (openKerangkaAfterLoad == 'delete') {
            $('#modal').modal('hide')
        }
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


    function addNewInvoice(id = null) {
        invoice_id_clicked = id
        $('#modal').modal('show')
        kerangkaNewInvoice(id)
    }

    function kerangkaNewInvoice(id = null) {
        openKerangkaAfterLoad = 'view'
        invoice_id_clicked = id
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<p class="m-0 fw-bold">Create New Invoice</p>';
        html_header += '<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 border-bottom" id="headerInvoice">'
        html_body += '</div>'
        html_body += '<div class="col-12 py-3 pb-0" id="contentStepInvoice">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += btnCancel()
        $('#modalFooter').html(html_footer);
        headerInvoice(id)
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
        var html = '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" onclick="simpanData(invoice_id_clicked)" disabled>Simpan</button>'
        return html
    }

    function btnSavePayment() {
        var html = '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanPayment" onclick="simpanDataPayment(invoice_id_clicked,payment_id_clicked)" disabled>Simpan</button>'
        return html
    }

    function countCurrentMonthData(data, currentDate) {
        var count = 0;
        var currentYear = currentDate.getFullYear();
        var currentMonth = currentDate.getMonth() + 1;

        $.each(data, function(index, record) {
            var createdAt = new Date(record.datetime);
            var createdYear = createdAt.getFullYear();
            var createdMonth = createdAt.getMonth() + 1;

            if (createdYear === currentYear && createdMonth === currentMonth) {
                count++;
            }
        });

        return count;
    }

    function padNumber(num) {
        return num.toString().padStart(5, '0');
    }

    function generateAutoInvoiceNumber() {
        var date = new Date(currentDate());
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        switch (bulan) {
            case 0:
                bulan = "I";
                break;
            case 1:
                bulan = "II";
                break;
            case 2:
                bulan = "III";
                break;
            case 3:
                bulan = "IV";
                break;
            case 4:
                bulan = "V";
                break;
            case 5:
                bulan = "VI";
                break;
            case 6:
                bulan = "VII";
                break;
            case 7:
                bulan = "VIII";
                break;
            case 8:
                bulan = "IX";
                break;
            case 9:
                bulan = "X";
                break;
            case 10:
                bulan = "XI";
                break;
            case 11:
                bulan = "XII";
                break;
        }
        var jumlah = countCurrentMonthData(data_invoice, date);
        var code = 'INV/SMM/' + tahun + '/' + bulan + '/' + padNumber(jumlah + 1)
        // check available code
        var checkInvoice = data_invoice.filter((record) => record.doc_number == code);
        if (checkInvoice) {
            code
        }
        code_invoice = code
        return code
    }

    function createCodeInvoice(tahun, bulan, jumlah) {
        var code = 'INV/SMM/' + tahun + '/' + bulan + '/' + padNumber(jumlah + 1)
        return code
    }

    function checkAvailableCodeInvoice(code, tahun, bulan, jumlah) {
        var checkInvoice = data_invoice.filter((record) => record.doc_number == code);
        if (checkInvoice) {
            jumlah++
            checkAvailableCode(code)
        }
    }

    function generateAutoPaymentNumber(invoice_id) {
        var date = new Date(currentDate());
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        switch (bulan) {
            case 0:
                bulan = "I";
                break;
            case 1:
                bulan = "II";
                break;
            case 2:
                bulan = "III";
                break;
            case 3:
                bulan = "IV";
                break;
            case 4:
                bulan = "V";
                break;
            case 5:
                bulan = "VI";
                break;
            case 6:
                bulan = "VII";
                break;
            case 7:
                bulan = "VIII";
                break;
            case 8:
                bulan = "IX";
                break;
            case 9:
                bulan = "X";
                break;
            case 10:
                bulan = "XI";
                break;
            case 11:
                bulan = "XII";
                break;
        }
        var paymentsFiltered = []
        data_invoice.forEach(e => {

        });
        var data_payment = deepCopy(data_invoice_payment)
        var jumlah = countCurrentMonthData(data_payment, date);
        var code = 'PAY/SMM/' + tahun + '/' + bulan + '/' + padNumber(jumlah + 1)
        code_payment = code
        return code
    }

    function headerInvoice(id) {
        var html = ''
        var badge = ''
        var btnRefresh = ''
        var invoiceNumber = ''
        var invoiceDate = ''
        if (id) {
            var invoiceFiltered = data_invoice.find((value, key) => {
                if (value.id == id) return true
            });
            invoiceNumber = invoiceFiltered.doc_number
            invoiceDate = formatDateIndonesia(invoiceFiltered.created_at)
        } else {
            invoiceNumber = generateAutoInvoiceNumber()
            invoiceDate = formatDateIndonesia(currentDate())
            badge = '<span class="badge bg-orange-payment small-text">NEW</span>'
            btnRefresh = '<span class="fa fa-pencil ms-2 text-grey pointer" id="btnEditInvoiceNumber" onclick="editNumberInvoice(' + "'" + invoiceNumber + "'" + ')"></span>'
        }
        if (newNumberInvoice) {
            invoiceNumber = newNumberInvoice
        }
        html += returnHeaderInvoice('Invoice', badge, btnRefresh, invoiceDate)
        $('#headerInvoice').html(html)
        disabledEditNumberInvoice(invoiceNumber)
        contentStepInvoice(id)
    }

    function returnHeaderInvoice(text, badge, btnRefresh, invoiceDate) {
        var html = ''
        html += '<div class="p-2 pb-3">'
        html += '<div class="d-flex align-items-center">'
        html += '<p class="m-0 fw-bold text-grey-dark h3 d-flex align-items-center gap-2">'
        html += badge
        html += text
        // input
        html += '<div class="ms-2" id="fieldEditInvoiceNumber">'
        html += '</div>'
        // input
        html += btnRefresh
        html += '</p>'
        html += '</div>'
        html += '<p class="m-0 small text-dark-grey">Created At ' + invoiceDate + '</p>'
        html += '</div>'
        return html
    }

    function editNumberInvoice(invoiceNumber) {
        var html = ''
        if (newNumberInvoice) {
            invoiceNumber = newNumberInvoice
        }
        html += '<input class="form-control form-control-lg p-0 border-0 shadow-none w-100 h3 fw-bold" type="text" autocomplete="off" id="nomorInvoiceManual" value="' + invoiceNumber + '" style="min-height:0px;border-radius:0px;min-width:210px;" oninput="inputNewInvoiceNumber()" onblur="disabledEditNumberInvoice(' + "'" + invoiceNumber + "'" + ')">'
        html += '<hr class="m-0 mt-1">'
        $('#fieldEditInvoiceNumber').html(html)
        $('#nomorInvoiceManual').focus();
        $('#btnEditInvoiceNumber').addClass('d-none');
    }

    function disabledEditNumberInvoice(invoiceNumber) {
        var html = ''
        if (newNumberInvoice) {
            invoiceNumber = newNumberInvoice
        }
        html += '<span class="text-primary-payment h3 fw-bold" id="invoiceAutoNumber">#<span id="textNumberInvoice">' + invoiceNumber + '</span></span>'
        $('#fieldEditInvoiceNumber').html(html)
        $('#btnEditInvoiceNumber').removeClass('d-none');
    }

    function inputNewInvoiceNumber() {
        var invoiceNumber = $('#nomorInvoiceManual').val()
        newNumberInvoice = invoiceNumber
    }

    function contentStepInvoice(id) {
        // if (id) {
        //     currentIndexStep = 1
        //     var invoiceFiltered = data_invoice.find((value, key) => {
        //         if (value.id == id) return true
        //     });
        //     supplier_id_clicked = invoiceFiltered.supplier.id
        // }
        var data = stepCreateInvoice[currentIndexStep]
        eval(data.function)
        var html = ''
        for (let i = 0; i < data.button.length; i++) {
            eval('html += ' + data.button[i])
        }
        $('#modalFooter').html(html);
        if (id) {
            btnSimpanRemoveDisabled(true)
        }
    }

    function firstStepInvoice(id) {
        if (id) {
            var invoiceFiltered = data_invoice.find((value, key) => {
                if (value.id == id) return true
            });
            supplier_id_clicked = invoiceFiltered.supplier.id
        }
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-12">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Choose a Supplier ' + redSmallText() + '</p>'
        html += '<select class="form-control w-100" id="selectSupplier" title="PILIH SUPPLIER" onchange="changePurchaseOrder(' + "'" + id + "'" + ')">'
        html += '<option value="" selected disabled>PILIH SUPPLIER</option>'
        data_master.supplier.forEach(e => {
            if (supplier_id_clicked == e.id) {
                html += '<option value="' + e.id + '" selected>' + e.kode_baru + ' ' + e.name + '</option>'
            } else {
                html += '<option value="' + e.id + '">' + e.kode_baru + ' ' + e.name + '</option>'
            }
        });
        html += '</select>'
        html += '</div>'
        html += '<div class="col-12 pt-2" id="showPurchaseOrder">'
        html += '</div>'
        html += '</div>'
        $('#contentStepInvoice').html(html)
        $('#selectSupplier').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        changePurchaseOrder(id)
    }

    function beforeChooseSupplier() {
        var html = ''
        html += '<div class="card shadow-none bg-light-orange-payment border-light-orange-payment">'
        html += '<div class="card-body p-3">'
        html += '<div class="row">'
        html += '<div class="col-2 text-end">'
        html += '<img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/dino.svg" alt="Icon" />'
        html += '</div>'
        html += '<div class="col-5 align-self-center text-start">'
        html += '<p class="m-0 small-text text-orange-payment fw-bolder">Pilih Supplier Terlebih Dahulu</p>'
        html += '<p class="m-0 small-text text-orange-payment fw-light">Anda dapat informasi detail terkait dengan supplier dan list Purchase Order ketika sudah memilih supplier</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#showPurchaseOrder').html(html)
    }

    function destringNull(value) {
        if (value === 'null') {
            return null;
        }
        return value;
    }

    function changePurchaseOrder(id) {
        id = destringNull(id)
        var value = $('#selectSupplier').val()
        if (value != supplier_id_clicked) {
            invoice_po_id_clicked = []
        }
        if (value) {
            supplier_id_clicked = value
            showPurchaseOrder(id, value)
        } else {
            beforeChooseSupplier()
        }
        getStatusOfButtonNext()
    }

    function showPurchaseOrder(id, supplier_id) {
        var data = data_master.supplier.find((value, key) => {
            if (value.id == supplier_id) return true
        });
        var html = ''
        //card
        html += '<div class="card shadow-none bg-light-primary-payment border-light-primary-payment">'
        html += '<div class="card-body p-3">'
        html += '<div class="row">'

        html += '<div class="col-12 mb-2">'
        html += '<p class="m-0 super-small-text text-primary-payment fw-bolder">Supplier Information</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Name</p>'
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.name + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Address</p>'
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.address + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Notes</p>'
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.note + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Include Pajak</p>'
        if (data.is_pajak == 'Y') {
            data.is_pajak = 'YES'
        } else {
            data.is_pajak = 'NO'
        }
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.is_pajak + '</p>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        //card
        html += '<div id="fieldListPO">'
        html += loadingReturn('Sedang Mencari Data PO')
        html += '</div>'
        $('#showPurchaseOrder').html(html)
        getDataPurchaseOrder(id, supplier_id, data)
    }

    function getDataPurchaseOrder(id, supplier_id, data_supplier) {
        $.ajax({
            url: "<?= api_url('getPOInvoice'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                supplierId: supplier_id,
            },
            error: function(xhr) {
                empty('#fieldListPO', 'Data Error')
            },
            beforeSend: function() {},
            success: function(response) {
                data_po = response.data.POInvoice
                if (data_po.length) {
                    fieldListPO(id, data_po, data_supplier)
                } else {
                    empty('#fieldListPO', 'Tidak Ada Data yang Tersedia')
                }
            }
        })
    }

    function fieldListPO(id, data, data_supplier) {
        var html = ''
        html += '<p class="m-0 fw-bolder text-grey-dark small-text my-2">Purchase Order (' + data.length + ')</p>'
        // alert
        html += '<div class="alert alert-primary d-flex align-items-center py-2 small mb-2" role="alert">'
        html += '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">'
        html += '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>'
        html += '</svg>'
        html += '<div class="ms-2">Purchase order yang dipilih akan berdasarkan supplier yang terkait dari <span class="fw-bold">' + data_supplier.name + '</span></div>'
        html += '</div>'
        // alert
        // search
        html += '<div class="form-group has-search">'
        html += '<span class="fa fa-search form-control-feedback"></span>'
        html += '<input type="text" class="form-control-sm form-control" style="border-radius: 0.35rem !important;" placeholder="Cari No. PO" id="search_id_po" autocomplete="off">'
        html += '</div>'
        // search
        // list PO
        html += '<div class="mt-2" style="max-height: 230px;overflow-x: hidden;overflow-y: auto;">'
        data.forEach(e => {
            html += cardListPO(id, e)
        });
        html += '</div>'
        // list PO
        $('#fieldListPO').html(html)
        if (id) {
            var invoiceFiltered = data_invoice.find((value, key) => {
                if (value.id == id) return true
            });
            invoiceFiltered.invoice_details.forEach(e => {
                invoice_po_id_clicked.push(e.po_id)
            });
        }
        data.forEach(e => {
            var data_po_clicked = invoice_po_id_clicked.find((value, key) => {
                if (value == e.id) return true
            });
            if (data_po_clicked) {
                clickListPO(id, e.id)
            }
        })
    }

    function cardListPO(id, data) {
        var html = ''
        if (data.invoice_doc_numbers[0] == null) {
            // jika tidak ada invoice
            var textNumberInvoice = '<span class="text-grey ms-2"><i>No Invoice Created</i></span>'
            var textSisa = ''
            var bgSisa = ''
        } else {
            var textNumberInvoice = '<span class="fw-bold text-primary-payment ms-2"><i class="fa fa-file-text-o me-1"></i> ' + data.invoice_doc_numbers.length + ' Invoice telah dibuat</span>'
            var textSisa = '<p class="m-0 super-small-text text-danger fw-bolder">Sisa Rp. ' + number_format(data.nominal_left) + '</p>'
            var bgSisa = 'bg-light-orange-payment border-light-orange-payment'
        }
        // penerimaan barang
        if (data.is_receive) {
            // jika diterima
            if (data.is_receive_all) {
                // jika diterima utuh
                var badgeInvoice = '<span class="badge rounded-pill border border-success bg-success-light py-2 px-2 super-small-text text-success w-100">Barang Diterima</span>'
            } else {
                // jika diterima sebagian
                var badgeInvoice = '<span class="badge rounded-pill border border-orange bg-light-orange py-2 px-2 super-small-text text-orange w-100">Diterima Partial</span>'
            }
        } else {
            // jika belum diterima
            var badgeInvoice = '<span class="badge rounded-pill bg-light-grey border border-dark-grey py-2 px-2 super-small-text text-dark-grey w-100">Barang On Going</span>'
        }
        // penerimaan barang
        html += '<div class="card shadow-none pointer card-hoper mb-2" id="cardListPO' + data.id + '" onclick="clickListPO(' + "'" + id + "'" + ',' + data.id + ')">'
        html += '<div class="card-body p-3">'
        html += '<div class="row">'

        html += '<div class="col-1 text-center align-self-center">'
        html += '<input class="form-check-input" type="checkbox" value="" id="checkListPO' + data.id + '">'
        html += '</div>'

        html += '<div class="col-5 align-self-center">'
        html += '<p class="m-0 small fw-bolder">#<span class="text_search" data-id="' + data.id + '">' + data.no_po + '</span></p>'
        html += '<p class="m-0 super-small-text text-grey-dark">' + data.supplier.name + ' ' + textNumberInvoice + '</p>'
        html += '</div>'

        html += '<div class="col-4 align-self-center ps-0">'
        html += '<p class="m-0 small text-dark-grey">Rp. ' + number_format((data.grand_total - data.nominal_left)) + ' <span class="fw-bold text-dark small-text">/ Rp. ' + number_format(data.grand_total) + '</span></p>'
        html += textSisa
        html += '</div>'

        html += '<div class="col-2 text-end align-self-center">'
        html += badgeInvoice
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'

        return html
    }

    function clickListPO(id, id_po) {
        var check = $('#checkListPO' + id_po).is(':checked')
        if (check) {
            // remove
            invoice_po_id_clicked.splice(invoice_po_id_clicked.indexOf(id_po), 1)
            $('#checkListPO' + id_po).prop('checked', false)
            $('#cardListPO' + id_po).removeClass('bg-light-primary-payment border-light-primary-payment')
        } else {
            // add
            invoice_po_id_clicked.push(id_po)
            invoice_po_id_clicked = [...new Set(invoice_po_id_clicked)]
            $('#checkListPO' + id_po).prop('checked', true)
            $('#cardListPO' + id_po).addClass('bg-light-primary-payment border-light-primary-payment')
        }
        getStatusOfButtonNext()
    }

    function getStatusOfButtonNext() {
        var length_po_id = invoice_po_id_clicked.length
        if (length_po_id > 0) {
            btnNextRemoveDisabled(true)
        } else {
            btnNextRemoveDisabled(false)
        }
    }

    function btnNextRemoveDisabled(status) {
        if (status) {
            $('#btnNext').prop('disabled', false)
        } else {
            $('#btnNext').prop('disabled', true)
        }
    }

    function secondStepInvoice(id) {
        if (id) {
            var invoiceFiltered = data_invoice.find((value, key) => {
                if (value.id == id) return true
            });
        }
        var data = data_master.supplier.find((value, key) => {
            if (value.id == supplier_id_clicked) return true
        });
        // console.log(data)
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-12 mb-1">'
        html += '<p class="m-0 super-small-text text-primary-payment fw-bolder">Supplier Information</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Name</p>'
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.kode_baru + ' - ' + data.name + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Address</p>'
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.address + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Notes</p>'
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.note + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark fw-bolder">Include Pajak</p>'
        if (data.is_pajak == 'Y') {
            data.is_pajak = 'YES'
        } else {
            data.is_pajak = 'NO'
        }
        html += '<p class="m-0 super-small-text text-grey-dark fw-bolder">' + data.is_pajak + '</p>'
        html += '</div>'
        html += '<div class="col-12 mb-1 mt-2">'
        html += '<p class="m-0 super-small-text text-primary-payment fw-bolder">PO Information (' + invoice_po_id_clicked.length + ')</p>'
        html += '</div>'
        html += '<div class="col-12 mb-1">'
        // card
        var no = 1
        data_po.forEach(e => {
            var show = false
            for (let i = 0; i < invoice_po_id_clicked.length; i++) {
                if (e.id == invoice_po_id_clicked[i]) {
                    show = true
                }
            }
            if (show) {
                if (e.invoice_doc_numbers[0] == null) {
                    var textNumberInvoice = '<span class="text-grey ms-2"><i>No Invoice Created</i></span>'
                } else {
                    var textNumberInvoice = '<span class="fw-bold text-primary-payment ms-2"><i class="fa fa-file-text-o me-1"></i> ' + e.invoice_doc_numbers.length + ' Invoice telah dibuat</span>'
                }
                var nominalValue = ''
                if (id) {
                    var dataEdit = invoiceFiltered.invoice_details.find((value, key) => {
                        if (value.po_id == e.id) return true
                    });
                    if (dataEdit) {
                        nominalValue = dataEdit.nominal
                    } else {
                        nominalValue = ''
                    }
                }
                html += '<div class="card shadow-none mb-1">'
                html += '<div class="card-body py-3 px-2">'
                html += '<div class="row w-100">'
                html += '<div class="col-1 align-self-center text-center">'
                html += '<p class="m-0 small-text">#' + no++ + '</p>'
                html += '</div>'
                html += '<div class="col-3 align-self-center">'
                html += '<p class="m-0 small-text fw-bolder">' + e.no_po + '</p>'
                html += '</div>'
                html += '<div class="col-3 align-self-center">'
                html += '<p class="m-0 small-text text-grey">' + textNumberInvoice + '</p>'
                html += '</div>'
                html += '<div class="col-2 align-self-center p-0">'
                html += '<p class="m-0 small-text text-orange">Sisa Rp. ' + number_format(e.nominal_left) + '</p>'
                html += '</div>'
                html += '<div class="col-2 align-self-center p-0">'
                // input
                html += '<input class="form-control form-control-sm p-0 border-0 shadow-none formInvoice nominal nominalPerPO" type="text" name="" placeholder="Isi Nominal (Rp)" autocomplete="off" id="nominalPerPO' + e.id + '" oninput="totalNominalPOtoNominalInvoice()" value="' + nominalValue + '">'
                html += '<hr class="m-0">'
                // input
                html += '</div>'
                html += '<div class="col-1 align-self-center text-center">'
                html += '<button class="btn btn-sm border-primary-payment text-primary-payment shadow-none p-1" onclick="copyNominal(' + e.id + ',' + e.nominal_left + ')"><span class="fa fa-copy small-text"></span></button>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        });
        // card
        html += '</div>'
        html += '<div class="col-12 mb-1">'
        // form isi
        html += '<div class="card shadow-none mb-1">'
        html += '<div class="card-header p-2 px-3 bg-primary-payment text-white">'
        html += '<p class="m-0 small-text fw-bolder">General Form Fill</p>'
        html += '</div>'
        html += '<div class="card-body" id="generalFormFill">'
        html += '</div>'
        html += '</div>'
        // form isi
        // taxes
        html += '<div class="card shadow-none mb-1">'
        html += '<div class="card-body" id="taxesFill">'
        html += '</div>'
        html += '</div>'
        // taxes
        html += '</div>'
        html += '</div>'
        $('#contentStepInvoice').html(html)
        $('.nominal').number(true);
        generalFormFill(id)
    }

    function generalFormFill(id) {
        var html = ''
        // input
        html += '<div class="row">'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">No. Supplier Invoices ' + redSmallText() + '</p>'
        html += '<input class="form-control form-control-sm p-1 border-0 shadow-none formInvoice" type="text" name="" placeholder="" autocomplete="off" id="no_supplier_invoice" oninput="formInvoice()">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Tanggal Invoice Terima ' + redSmallText() + '</p>'
        html += '<input class="form-control form-control-sm p-1 border-0 shadow-none formInvoice datepicker" type="text" name="" placeholder="" autocomplete="off" id="date_supplier_invoice" onchange="formInvoice()">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Tanggal Jatuh Tempo Invoice ' + redSmallText() + '</p>'
        html += '<input class="form-control form-control-sm p-1 border-0 shadow-none formInvoice datepicker" type="text" name="" placeholder="" autocomplete="off" id="date_jatuh_tempo" onchange="formInvoice()">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Nominal Invoices (Rp) ' + redSmallText() + '</p>'
        html += '<input class="form-control form-control-sm p-1 border-0 shadow-none formInvoice nominal" type="text" name="" placeholder="" autocomplete="off" id="nominal_invoice" onchange="formInvoice()">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Jenis PPh</p>'
        html += '<select class="form-select form-select-sm w-100" id="selectJenisPph" title="PILIH PPH" onchange="changePPhNominal()">'
        html += '<option value="" data-hitung="" selected>Tanpa PPH</option>'
        data_master.tax.forEach(e => {
            if (e.category == 'PPH') {
                html += '<option value="' + e.id + '" data-hitung="' + e.value + '" data-operator="' + e.operator + '" data-autofill="' + e.is_auto_fill + '">' + e.name + '</option>'
            }
        });
        html += '</select>'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Jenis PPN</p>'
        html += '<select class="form-select form-select-sm w-100" id="selectJenisPpn" title="PILIH PPN" onchange="changePPnNominal()">'
        html += '<option value="" data-hitung="" selected>Tanpa PPN</option>'
        data_master.tax.forEach(e => {
            if (e.category == 'PPN') {
                html += '<option value="' + e.id + '" data-hitung="' + e.value + '" data-operator="' + e.operator + '" data-autofill="' + e.is_auto_fill + '">' + e.name + '</option>'
            }
        });
        html += '</select>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Notes</p>'
        html += '<input class="form-control form-control-sm p-1 border-0 shadow-none" type="text" name="" placeholder="" autocomplete="off" id="notes">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '</div>'
        // input
        $('#generalFormFill').html(html)
        $('.nominal').number(true);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        taxesFill(id)
    }

    function taxesFill(id) {
        var html = ''
        html += '<div class="row justify-content-end">'

        // html += '<div class="col-8 mb-2" id="fieldNominalPph" hidden>'
        // html += '<p class="m-0 fw-bolder text-grey-dark small-text mb-2">Nominal PPh (Rp) ' + redSmallText('( Auto )') + '</p>'
        // html += '<input class="form-control form-control-sm p-1 border-0 shadow-none nominal" type="text" name="" placeholder="" autocomplete="off" id="nominal_pph_invoice" oninput="totalAmount()">'
        // html += '<hr class="m-0">'
        // html += '</div>'


        html += '<div class="col-12">'

        // subtotal
        html += '<div class="row">'
        html += '<div class="col-9 text-end align-self-center">'
        html += '<p class="m-0 fw-bold text-dark-grey">Subtotal</p>'
        html += '</div>'
        html += '<div class="col-3 align-self-center text-end">'
        html += '<p class="m-0 text-dark-grey fw-bolder">Rp. <span id="subtotal"></span></p>'
        html += '</div>'
        html += '</div>'
        // subtotal

        // pph
        html += '<div class="row" id="fieldNominalPph" hidden>'
        html += '<div class="col-9 text-end align-self-center">'
        html += '<p class="m-0 fw-bold text-dark-grey">PPh ( <span id="inputoperatorPPH"></span> )</p>'
        html += '</div>'
        html += '<div class="col-3 align-self-center text-end">'
        html += '<input class="form-control form-control-sm p-0 border-0 shadow-none nominal text-orange" type="text" name="" placeholder="isi PPh" autocomplete="off" id="nominal_pph_invoice" oninput="totalAmount()">'
        html += '</div>'
        html += '</div>'
        // pph

        // ppn
        html += '<div class="row" id="fieldNominalPpn" hidden>'
        html += '<div class="col-9 text-end align-self-center">'
        html += '<p class="m-0 fw-bold text-dark-grey">PPN ( <span id="inputoperatorPPN"></span> )</p>'
        html += '</div>'
        html += '<div class="col-3 align-self-center text-end">'
        html += '<input class="form-control form-control-sm p-0 border-0 shadow-none nominal text-orange" type="text" name="" placeholder="isi PPN" autocomplete="off" id="nominal_ppn_invoice" oninput="totalAmount()">'
        html += '</div>'
        html += '</div>'
        // ppn

        // total amount
        html += '<div class="row">'
        html += '<div class="col-9 text-end align-self-center mt-1">'
        html += '<p class="m-0 fw-bolder text-dark">Total Amount</p>'
        html += '</div>'
        html += '<div class="col-3 align-self-center text-end mt-1">'
        html += '<p class="m-0 text-dark fw-bolder">Rp. <span id="total_amount"></span></p>'
        html += '</div>'
        html += '</div>'
        // total amount

        html += '</div>'

        html += '</div>'
        $('#taxesFill').html(html)
        $('.nominal').number(true);
        paymentList(id)
    }

    function kerangkaTaxes() {

    }

    function paymentList(id) {
        var html = ''
        // input
        html += returnPaymentEmpty(id)
        // input
        $('#paymentList').html(html)
        if (id) {
            filledEditValue(id)
        }
    }

    function returnPaymentEmpty(id) {
        var html = ''
        html += '<div class="row justify-content-center">'
        html += '<div class="col-1 text-end">'
        html += '<img class="" style="width: 25px;" src="<?= base_url() ?>assets/image/svg/bill.svg" alt="Icon" />'
        html += '</div>'
        html += '<div class="col-auto align-self-center text-start ps-0">'
        html += '<p class="m-0 small text-dark-grey fw-light"><i>Belum Memiliki Riwayat Pembayaran</i></p>'
        html += '</div>'
        html += '<div class="col-12 mt-2 text-center">'
        html += '<button class="btn btn-sm shadow-none border-primary-payment text-primary-payment small-text" style="border-radius: 10px !important;" onclick="addNewPayment(' + "'" + id + "'" + ')">Tambah Payment Baru</button>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function filledEditValue(id) {
        var invoiceFiltered = data_invoice.find((value, key) => {
            if (value.id == id) return true
        });
        $('#no_supplier_invoice').val(invoiceFiltered.doc_number_manual)
        $('#date_supplier_invoice').val(formatDate(invoiceFiltered.datetime))
        $('#date_jatuh_tempo').val(formatDate(invoiceFiltered.date_overdue))
        $('#nominal_invoice').val(invoiceFiltered.sub_total)
        if (invoiceFiltered.tax_nominal) {
            $('#nominal_pph_invoice').val(invoiceFiltered.tax_nominal)
            $('#selectJenisPph').val(invoiceFiltered.tax.id)
        }
        $('#notes').val(invoiceFiltered.note)
        totalNominalPOtoNominalInvoice()
    }

    function formInvoice() {
        var value = $('.formInvoice').map(function() {
            return $(this).val();
        }).get();
        const hasEmptyElement = $.inArray('', value) !== -1;
        if (hasEmptyElement) {
            // jika ada yg kosong
            btnSimpanRemoveDisabled(false)
        } else {
            // jika tidak ada yg kosong
            btnSimpanRemoveDisabled(true)
        }
        changePPhNominal()
        changePPnNominal()
    }

    function btnSimpanRemoveDisabled(status) {
        if (status) {
            $('#btnSimpan').prop('disabled', false)
        } else {
            $('#btnSimpan').prop('disabled', true)
        }
    }

    function changePPhNominal() {
        var value = $('#selectJenisPph').val();
        if (value) {
            $('#fieldNominalPph').prop("hidden", false)
            fillPPh()
        } else {
            $('#nominal_pph_invoice').val(0)
            $('#fieldNominalPph').prop("hidden", true)
            totalAmount()
        }
    }

    function changePPnNominal() {
        var value = $('#selectJenisPpn').val();
        if (value) {
            $('#fieldNominalPpn').prop("hidden", false)
            fillPPn()
        } else {
            $('#nominal_ppn_invoice').val(0)
            $('#fieldNominalPpn').prop("hidden", true)
            totalAmount()
        }
    }

    function fillPPh() {
        var value = $('#selectJenisPph').val();
        var nominal = $('#nominal_invoice').val();
        var hitung = $('#selectJenisPph option:selected').attr('data-hitung');
        var operator = $('#selectJenisPph option:selected').attr('data-operator');
        var autofill = $('#selectJenisPph option:selected').attr('data-autofill');
        if (autofill == 1) {
            $('#nominal_pph_invoice').val(roundToTwo(parseFloat(nominal) * parseFloat(hitung) / 100))
        } else {
            $('#nominal_pph_invoice').val(0)
        }
        totalAmount()
    }

    function fillPPn() {
        var value = $('#selectJenisPpn').val();
        var nominal = $('#nominal_invoice').val();
        var hitung = $('#selectJenisPpn option:selected').attr('data-hitung');
        var operator = $('#selectJenisPpn option:selected').attr('data-operator');
        var autofill = $('#selectJenisPpn option:selected').attr('data-autofill');
        if (autofill == 1) {
            $('#nominal_ppn_invoice').val(roundToTwo(parseFloat(nominal) * parseFloat(hitung) / 100))
        } else {
            $('#nominal_ppn_invoice').val(0)
        }
        totalAmount()
    }

    function totalAmount() {
        var nominal = $('#nominal_invoice').val();
        $('#subtotal').html(number_format(roundToTwo(nominal)))
        if (nominal) {
            var pph = parseFloat($('#nominal_pph_invoice').val())
            var ppn = parseFloat($('#nominal_ppn_invoice').val())
            if (!pph) {
                pph = 0
            }
            if (!ppn) {
                ppn = 0
            }
            var operatorpph = $('#selectJenisPph option:selected').attr('data-operator');
            var operatorppn = $('#selectJenisPpn option:selected').attr('data-operator');
            if (!operatorpph) {
                operatorpph = '+'
            }
            if (!operatorppn) {
                operatorppn = '+'
            }
            $('#inputoperatorPPH').html(operatorpph)
            $('#inputoperatorPPN').html(operatorppn)
            if (pph || ppn) {
                eval('var jumlah_tax = parseFloat(nominal) ' + operatorpph + ' parseFloat(pph)' + operatorppn + ' parseFloat(ppn)');
                $('#total_amount').html(number_format(roundToTwo(jumlah_tax)))
            } else {
                $('#total_amount').html(number_format(roundToTwo(parseFloat(nominal))))
            }
        } else {
            $('#total_amount').html(0)
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
        contentStepInvoice(invoice_id_clicked)
    }

    function copyNominal(id_po, nominal) {
        $('#nominalPerPO' + id_po).val(nominal)
        totalNominalPOtoNominalInvoice()
    }

    function sumArray(arr) {
        return arr.reduce((accumulator, currentValue) => {
            return accumulator + (currentValue === '' ? 0 : Number(currentValue));
        }, 0);
    }

    function totalNominalPOtoNominalInvoice() {
        var value = $('.nominalPerPO').map(function() {
            return $(this).val();
        }).get();
        $('#nominal_invoice').val(sumArray(value))
        formInvoice()
    }

    function simpanData(invoice_id) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setInvoice'); ?>'
        if (invoice_id) {
            var invoiceFiltered = data_invoice.find((value, key) => {
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
                            invoice_id_clicked = data.invoice[0].id
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

    function iconEdit() {
        var html = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>'
        return html
    }

    function showViewInvoice(id) {
        invoice_id_clicked = id
        $('#modal').modal('show')
        kerangkaViewInvoice(id)
    }

    function kerangkaViewInvoice(id) {
        openKerangkaAfterLoad = 'view'
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<p class="m-0 fw-bold">View Invoice</p>';
        html_header += '<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-10" id="viewHeaderInvoice">'
        html_body += '</div>'
        html_body += '<div class="col-2 text-center align-self-center">'
        html_body += '<button class="btn btn-sm shadow-none" style="border-color: #69707a;" onclick="kerangkaNewInvoice(' + id + ')">' + iconEdit() + '</button>'
        html_body += '</div>'
        html_body += '<div class="col-12 border-bottom">'
        html_body += '</div>'
        html_body += '<div class="col-12 py-3" id="supplierInformationInvoice">'
        html_body += '</div>'
        html_body += '<div class="col-12 border-bottom">'
        html_body += '</div>'
        html_body += '<div class="col-12 py-3" id="generalFormFillInvoice">'
        html_body += '</div>'
        html_body += '<div class="col-12 border-bottom">'
        html_body += '</div>'
        html_body += '<div class="col-12 py-3" id="paymentListInvoice">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += btnCancel()
        $('#modalFooter').html(html_footer);
        viewHeaderInvoice(id)
    }

    function viewHeaderInvoice(id) {
        var html = ''
        var invoiceFiltered = data_invoice.find((value, key) => {
            if (value.id == id) return true
        });
        html += returnHeaderInvoice('Invoice', '', '', formatDateIndonesia(invoiceFiltered.created_at))
        $('#viewHeaderInvoice').html(html)
        disabledEditNumberInvoice(invoiceFiltered.doc_number)
        supplierInformationInvoice(invoiceFiltered)
    }

    function supplierInformationInvoice(data) {
        var dataSupplier = data_master.supplier.find((value, key) => {
            if (value.id == data.supplier.id) return true
        });
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-3">'
        html += '<p class="m-0 fw-bolder text-primary-payment small-text mb-2">Purchase Order</p>'
        data.invoice_details.forEach(e => {
            html += '<p class="m-0 small">' + e.doc_number_po + '</p>'
        });
        html += '</div>'
        html += '<div class="col-9">'
        html += '<p class="m-0 fw-bolder text-primary-payment small-text mb-2">Supplier Information</p>'
        html += '<div class="row">'
        // supplier
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Name</p>'
        html += '<p class="m-0 small-text fw-bolder">' + dataSupplier.name + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Address</p>'
        html += '<p class="m-0 small-text fw-bolder">' + dataSupplier.address + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Notes</p>'
        html += '<p class="m-0 small-text fw-bolder">' + dataSupplier.note + '</p>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Include Pajak</p>'
        if (dataSupplier.is_pajak == 'Y') {
            dataSupplier.is_pajak = 'YES'
        } else {
            dataSupplier.is_pajak = 'NO'
        }
        html += '<p class="m-0 small-text fw-bolder">' + dataSupplier.is_pajak + '</p>'
        html += '</div>'
        // supplier
        html += '</div>'
        html += '</div>'
        $('#supplierInformationInvoice').html(html)
        generalFormFillInvoice(data)
    }

    function generalFormFillInvoice(data) {
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-12">'
        html += '<p class="m-0 fw-bolder text-primary-payment small-text mb-2">General Information</p>'
        html += '<div class="row">'
        // general
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">No. Supplier Invoices</p>'
        html += '<p class="m-0 small-text fw-bolder">' + data.doc_number_manual + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Tanggal Invoice Terima</p>'
        html += '<p class="m-0 small-text fw-bolder">' + formatDate(data.datetime) + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Tanggal Jatuh Tempo Invoice</p>'
        if (data.date_overdue) {
            var dateOverdue = formatDate(data.date_overdue)
        } else {
            var dateOverdue = '<i class="text-grey">( Tidak Ada )</i>'
        }
        html += '<p class="m-0 small-text fw-bolder">' + dateOverdue + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Tanggal Pelunasan</p>'
        if (data.paid_off_at) {
            var paidOffAt = formatDate(data.paid_off_at)
        } else {
            var paidOffAt = '<i class="text-grey">( Belum Lunas )</i>'
        }
        html += '<p class="m-0 small-text fw-bolder">' + paidOffAt + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Notes</p>'
        if (data.note) {
            var note = shortenText(data.note, 20)
        } else {
            var note = '<i class="text-grey">( Tidak Ada )</i>'
        }
        html += '<p class="m-0 small-text fw-bolder">' + note + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">PPH</p>'
        if (data.tax_nominal) {
            var taxNominal = data.tax_nominal
        } else {
            var taxNominal = 0
        }
        html += '<p class="m-0 small-text fw-bolder">Rp. ' + number_format(taxNominal) + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Total Amount (+pph)</p>'
        if (data.grand_total) {
            var grandTotal = data.grand_total
        } else {
            var grandTotal = 0
        }
        html += '<p class="m-0 small-text fw-bolder">Rp. ' + number_format(grandTotal) + '</p>'
        html += '</div>'
        html += '<div class="col-3 mb-2">'
        html += '<p class="m-0 super-small-text text-dark-grey fw-bolder mb-1">Status Invoice</p>'
        var badge = '<span class="text-grey-dark super-small-text">PROSES</span>'
        if (data.is_paid_off) {
            badge = '<span class="text-success super-small-text">PAID</span>'
        }
        html += '<p class="m-0 small-text fw-bolder">' + badge + '</p>'
        html += '</div>'
        // general
        html += '</div>'
        html += '</div>'
        $('#generalFormFillInvoice').html(html)
        paymentListInvoice(data)
    }

    function paymentListInvoice(data) {
        // console.log(data)
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-12">'

        html += '<div class="row">'
        html += '<div class="col-6 align-self-center">'
        html += '<p class="m-0 fw-bolder text-primary-payment small-text mb-2">Payment List</p>'
        html += '</div>'
        html += '<div class="col-6 align-self-center text-end" id="fieldAddPayment" hidden>'
        html += '<button class="btn btn-sm super-small-text text-primary-payment border-primary-payment p-2" onclick="addNewPayment(' + "'" + data.id + "'" + ')"><i class="fa fa-plus me-2"></i>Tambah Payment</button>'
        html += '</div>'
        html += '</div>'
        html += '<div class="row" id="paymentList">'
        // general
        html += '<div class="col-12 py-3">'
        html += returnPaymentEmpty(data.id)
        html += '</div>'
        // general
        html += '</div>'
        html += '</div>'
        $('#paymentListInvoice').html(html)
        if (data.payments) {
            paymentListData(data)
        }
    }

    function paymentListData(data) {
        $('#fieldAddPayment').prop("hidden", false);
        var html = ''
        html += '<div class="table-responsive p-2">'
        html += '<table class="table table-hover table-bordered table-sm small w-100" style="overflow-x: hidden;">'
        html += '<thead>'
        html += '<tr class="py-2">'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">#</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">Code</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">Tipe Pembayaran</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">Tgl. Bayar</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">Sumber Dana</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">Nominal</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white">Notes</th>'
        html += '<th class="align-middle bg-light p-2 small-text bg-white"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        var a = 1
        var b = 1
        data.payments.forEach(e => {
            html += '<tr>'
            html += '<td class="align-middle small-text text-center">' + a++ + '</td>'
            html += '<td class="align-middle small-text text-center">' + e.doc_number + '</td>'
            var tipe = data_master_payment.paymentMethod.find(x => x.id == e.is_dp).name
            if (e.is_dp != 1) {
                tipe = tipe + ' #' + b++
            }
            html += '<td class="align-middle small-text text-center">' + tipe + '</td>'
            html += '<td class="align-middle small-text text-center">' + formatDate(e.datetime) + '</td>'
            html += '<td class="align-middle small-text text-center">' + e.account.name + '</td>'
            html += '<td class="align-middle small-text text-end">' + number_format(e.nominal) + '</td>'
            if (!e.note) {
                e.note = ''
            }
            html += '<td class="align-middle small-text text-center" title="' + e.note + '">' + shortenText(e.note, 30) + '</td>'
            html += '<td class="align-middle small-text text-center"><i class="fa fa-pencil pointer" onclick="addNewPayment(' + data.id + ', ' + e.id + ')"></i></td>'
        });
        html += '</tbody>'
        html += '<tfoot>'
        html += '<tr>'
        html += '<th colspan="5" class="align-middle small-text bg-white text-end pe-2">Total Bayar</th>'
        html += '<th class="align-middle small-text text-end">' + number_format(data.payment_total) + '</th>'
        html += '<th class="align-middle small-text text-end"></th>'
        html += '<th class="align-middle small-text text-end"></th>'
        html += '</tr>'
        var selisih = data.grand_total - data.payment_total
        if (selisih > 0) {
            html += '<tr>'
            html += '<th colspan="5" class="align-middle small-text bg-white text-end pe-2">Sisa Bayar</th>'
            html += '<th class="align-middle small-text text-end text-orange">' + number_format(selisih) + '</th>'
            html += '<th class="align-middle small-text text-end"></th>'
            html += '<th class="align-middle small-text text-end"></th>'
            html += '</tr>'
        }
        html += '</tfoot>'
        html += '</table>'
        html += '</div>'
        $('#paymentList').html(html)
        if (selisih <= 0) {
            $('#fieldAddPayment').prop("hidden", true);
        }
    }

    function addNewPayment(invoice_id, id = null) {
        payment_id_clicked = id
        kerangkaAddNewPayment(invoice_id, id)
    }

    function kerangkaAddNewPayment(invoice_id, id) {
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        $('#modalDialog').removeClass('modal-lg');
        var html_header = '';
        html_header += '<p class="m-0 fw-bold">Create New Payment</p>';
        html_header += '<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12" id="headerPayment">'
        html_body += '</div>'
        html_body += '<div class="col-12 border-bottom">'
        html_body += '</div>'
        html_body += '<div class="col-12 py-3" id="bodyPayment">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += btnCancel()
        html_footer += btnSavePayment()
        $('#modalFooter').html(html_footer);
        headerPayment(invoice_id, id)
    }

    function headerPayment(invoice_id, id) {
        var html = ''
        var paymentNumber = ''
        var badge = ''
        var invoiceFiltered = data_invoice.find((value, key) => {
            if (value.id == invoice_id) return true
        });
        if (id) {
            var paymentFiltered = invoiceFiltered.payments.find((value, key) => {
                if (value.id == id) return true
            })
            paymentNumber = paymentFiltered.doc_number
        } else {
            badge = '<span class="badge bg-orange-payment small-text">NEW</span>'
            paymentNumber = generateAutoPaymentNumber(invoice_id)
        }
        code_payment = paymentNumber
        html += returnHeaderInvoice('Payment', badge, '', formatDateIndonesia(invoiceFiltered.created_at))
        $('#headerPayment').html(html)
        disabledEditNumberInvoice(paymentNumber)
        bodyPayment(invoice_id, id)
    }

    function bodyPayment(invoice_id, id) {
        var html = ''
        html += '<div class="row p-2">'
        html += '<div class="col-12 mb-1">'
        // form isi
        html += '<div class="card shadow-none mb-1">'
        html += '<div class="card-header p-2 px-3 bg-primary-payment text-white">'
        html += '<p class="m-0 small-text fw-bolder">Form Payment</p>'
        html += '</div>'
        html += '<div class="card-body" id="formPayment">'
        html += '</div>'
        html += '</div>'
        // form isi
        html += '</div>'
        if (!id) {
            html += '<div class="col-12">'
            html += '<div class="alert alert-success small-text py-2 mb-2" id="alertLunas" hidden role="alert">Tidak Ada Nominal Sisa, maka akan auto Lunas pada sistem</div>'
            html += '</div>'
        } else {
            html += '<div class="col-12 mb-2">'
            html += '<button class="btn btn-danger small-text w-100 shadow-none" onclick="deletePayment(' + id + ',1)">Hapus Payment</button>'
            html += '</div>'
        }
        html += '</div>'
        $('#bodyPayment').html(html)
        formPayment(invoice_id, id)
    }

    function formPayment(invoice_id, id) {
        var html = ''
        var invoiceFiltered = data_invoice.find((value, key) => {
            if (value.id == invoice_id) return true
        });
        html += '<div class="row justify-content-end">'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-1">Kode Invoice</p>'
        html += '<p class="m-0 fw-bolder super-small-text">#' + invoiceFiltered.doc_number + '</p>'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-1">Dibuat Oleh</p>'
        html += '<p class="m-0 fw-bolder super-small-text">' + invoiceFiltered.employee.name + '</p>'
        html += '</div>'

        html += '<div class="col-4 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-1">Supplier</p>'
        html += '<p class="m-0 fw-bolder super-small-text">' + invoiceFiltered.supplier.name + '</p>'
        html += '</div>'

        html += '<div class="col-4 mb-4">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-1">Nominal Invoice</p>'
        html += '<p class="m-0 fw-bolder super-small-text">Rp. ' + number_format(invoiceFiltered.grand_total) + ' ' + redSmallText('( +PPn )') + '</p>'
        html += '</div>'

        html += '<div class="col-4 mb-4">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-1">Total Bayar</p>'
        if (!invoiceFiltered.payment_total) {
            invoiceFiltered.payment_total = 0
        }
        html += '<p class="m-0 fw-bolder super-small-text">Rp. ' + number_format(invoiceFiltered.payment_total) + '</p>'
        html += '</div>'

        html += '<div class="col-4 mb-4">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-1">Sisa Invoice</p>'
        var selisih = roundToTwo(invoiceFiltered.grand_total - invoiceFiltered.payment_total)
        html += '<div class="d-flex justify-content-start">'
        html += '<p class="m-0 fw-bolder super-small-text">Rp. ' + number_format(selisih) + '</p>'
        html += '<i class="fa fa-copy super-small-text fw-bolder ms-2 pointer text-grey" onclick="copySisaInvoice(' + selisih + ')"></i>'
        html += '</div>'
        html += '</div>'


        html += '<div class="col-6 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-2">Tipe Pembayaran ' + redSmallText() + '</p>'
        html += '<select class="form-control form-control-sm w-100 bg-light-grey formPaymentInput" id="selectTipePembayaran" title="PILIH TIPE PEMBAYARAN" onchange="inputNominalPayment()">'
        html += '<option value="" selected disabled>PILIH TIPE PEMBAYARAN</option>'
        data_master_payment.paymentMethod.forEach(e => {
            html += '<option value="' + e.id + '">' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'

        html += '<div class="col-6 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-2">Tgl. Bayar ' + redSmallText() + '</p>'
        html += '<input class="form-control form-control-sm p-1 bg-light-grey formPaymentInput datepicker" type="text" autocomplete="off" id="tanggal_bayar" value="" onchange="inputNominalPayment()">'
        html += '</div>'

        html += '<div class="col-6 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-2">Sumber Dana ' + redSmallText() + '</p>'
        html += '<select class="form-control form-control-sm w-100 bg-light-grey formPaymentInput" id="selectSumberDana" title="PILIH SUMBER DANA" onchange="inputNominalPayment()">'
        html += '<option value="" selected disabled>PILIH SUMBER DANA</option>'
        data_master_payment.account.forEach(e => {
            html += '<option value="' + e.id + '">' + e.code + ' - ' + e.name + '</option>'
        });
        html += '</select>'
        html += '</div>'

        html += '<div class="col-6 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-2">Nominal ' + redSmallText() + '</p>'
        html += '<input class="form-control form-control-sm p-1 bg-light-grey formPaymentInput nominal" type="text" autocomplete="off" id="nominal_payment" oninput="inputNominalPayment()" value="" data-selisih="' + selisih + '">'
        html += '<div class="d-flex justify-content-between mt-1">'
        html += '<p class="m-0 fw-bold text-dark-grey super-small-text mb-2">Sisa Bayar</p>'
        var hide = ''
        if (id) {
            hide = 'hidden'
        }
        html += '<p class="m-0 fw-bolder super-small-text mb-2 text-danger" id="showSelisihPayment" ' + hide + '>Rp. ' + number_format(selisih) + '</p>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<p class="m-0 fw-bolder text-dark-grey small-text mb-2">Notes</p>'
        html += '<textarea class="form-control form-control-sm bg-light-grey" rows="4" id="note_payment"></textarea>'
        html += '</div>'

        html += '</div>'
        $('#formPayment').html(html)
        $('.nominal').number(true);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        if (id) {
            filledEditValuePayment(invoice_id, id)
        }
        inputNominalPayment()
    }

    function filledEditValuePayment(invoice_id, id) {
        var invoiceFiltered = data_invoice.find((value, key) => {
            if (value.id == invoice_id) return true
        });
        var paymentFiltered = invoiceFiltered.payments.find((value, key) => {
            if (value.id == id) return true
        })
        $('#tanggal_bayar').val(formatDate(paymentFiltered.datetime))
        $('#selectTipePembayaran').val(paymentFiltered.is_dp)
        $('#selectSumberDana').val(paymentFiltered.account.id)
        $('#nominal_payment').val(paymentFiltered.nominal)
        $('#note_payment').val(paymentFiltered.note)
    }

    function inputNominalPayment() {
        var nominal = $('#nominal_payment').val()
        if (!nominal) {
            nominal = 0
        }
        var selisih = $('#nominal_payment').attr('data-selisih')
        var value = selisih - nominal
        $('#showSelisihPayment').html('Rp. ' + number_format(roundToTwo(value)))
        if (value <= 0) {
            $('#alertLunas').prop("hidden", false)
            $('#showSelisihPayment').addClass('text-success')
            $('#showSelisihPayment').removeClass('text-danger')
        } else {
            $('#alertLunas').prop("hidden", true)
            $('#showSelisihPayment').addClass('text-danger')
            $('#showSelisihPayment').removeClass('text-success')
        }
        formPaymentInput()
    }

    function copySisaInvoice(value) {
        $('#nominal_payment').val(value)
        inputNominalPayment()
    }

    function formPaymentInput() {
        var value = $('.formPaymentInput').map(function() {
            return $(this).val();
        }).get();
        const hasEmptyElement = $.inArray('', value) !== -1;
        if (hasEmptyElement) {
            // jika ada yg kosong
            btnSimpanPaymentRemoveDisabled(false)
        } else {
            // jika tidak ada yg kosong
            btnSimpanPaymentRemoveDisabled(true)
        }
    }

    function btnSimpanPaymentRemoveDisabled(status) {
        if (status) {
            $('#btnSimpanPayment').prop('disabled', false)
        } else {
            $('#btnSimpanPayment').prop('disabled', true)
        }
    }

    function simpanDataPayment(invoice_id, payment_id = null) {
        var type = 'POST'
        var button = '#btnSimpanPayment'
        var url = '<?php echo api_produksi('setPayment'); ?>'
        var datetime = $('#tanggal_bayar').val()
        var tipePembayaran = $('#selectTipePembayaran').val()
        var account_id = $('#selectSumberDana').val()
        var nominal = $('#nominal_payment').val()
        var note = $('#note_payment').val()
        if (payment_id) {
            var id = payment_id
        } else {
            var id = createCodeId()
        }
        var data = {
            payment: [{
                id: id,
                doc_number: code_payment,
                invoice_id: invoice_id,
                employee_id: user_id,
                account_id: account_id,
                datetime: datetime,
                nominal: nominal,
                is_dp: tipePembayaran,
                note: note,
                created_at: currentDateTime(),
                updated_at: currentDateTime()
            }],
        }
        kelolaData(data, type, url, button)
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

    function simpanDataHapusInvoice(invoice_id) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setInvoice'); ?>'
        openKerangkaAfterLoad = 'delete'
        var invoiceDetailId = []
        var invoiceFiltered = data_invoice.find((value, key) => {
            if (value.id == invoice_id) return true
        });
        invoiceFiltered.invoice_details.forEach(e => {
            invoiceDetailId.push(e.id)
        });
        var data = {
            deletedId: {
                invoice: [invoice_id],
                invoice_detail: invoiceDetailId
            }
        }
        kelolaData(data, type, url, button)
    }

    function deletePayment(id) {
        Swal.fire({
            text: 'Apakah Anda yakin ingin menghapus Payment ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanDataHapusPayment(id)
            }
        })
    }

    function simpanDataHapusPayment(payment_id) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setPayment'); ?>'
        openKerangkaAfterLoad = 'view'
        var data = {
            deletedId: {
                payment: [payment_id]
            }
        }
        kelolaData(data, type, url, button)
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

    function getDataWithoutInvoice() {
        supplier_selected = null
        invoice_po_id_clicked = []
        $.ajax({
            url: "<?= api_url('getPOInvoice'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_po_all = response.data.POInvoice
                listDataWithoutInvoice()
            }
        })
    }

    function listDataWithoutInvoice() {
        var html = ''
        data_po_all.forEach(e => {
            if (e.is_receive) {
                // jika diterima
                if (e.is_receive_all) {
                    // jika diterima utuh
                    var badgeInvoice = '<span class="text-success">Telah Diterima</span>'
                } else {
                    // jika diterima sebagian
                    var badgeInvoice = '<span class="text-orange">Diterima Partial</span>'
                }
            } else {
                // jika belum diterima
                var badgeInvoice = '<span class="text-grey">On Going</span>'
            }
            html += '<div class="card shadow-none mb-2 pointer" onclick="choosePOWithoutInvoice(' + e.id + ')" id="cardListPO' + e.id + '">'
            html += '<div class="card-body py-3">'
            html += '<div class="row">'
            html += '<div class="col-10">'
            html += '<p class="m-0 small text-grey-dark fw-bolder">#<span class="text_search" data-id="' + e.id + '">' + e.no_po + '</span></p>'
            html += '<p class="m-0 small-text text-dark">Rp. ' + number_format(e.grand_total) + ',-</p>'
            html += '<p class="m-0 small-text text-grey-dark mt-1 fw-bold text_search" data-id="' + e.id + '">' + e.supplier.name + ' - ' + badgeInvoice + '</p>'
            html += '</div>'
            html += '<div class="col-2 align-self-center text-end ps-0 pe-1">'
            html += '<span class="fa fa-check fa-2x text-grey" id="checkIcon' + e.id + '"></span>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });
        $('#listDataWithoutInvoice').html(html)
        $('#search_id_po').focus();
        searching()
    }

    function choosePOWithoutInvoice(po_id) {
        var check = $('#cardListPO' + po_id).hasClass('checked')
        var supplier_id_selected = data_po_all.find((value, key) => {
            if (value.id == po_id) return true
        }).supplier.id
        var array_invoice_po = deepCopy(invoice_po_id_clicked)
        if (!array_invoice_po.length) {
            // jika baru pertama klik, arraynya kosong sebelumnya
            setCardColor(check, po_id)
            supplier_selected = supplier_id_selected
        } else {
            if (supplier_selected == supplier_id_selected) {
                setCardColor(check, po_id)
            }
        }
    }

    function setCardColor(check, po_id) {
        if (check) {
            // remove
            $('#cardListPO' + po_id).removeClass('checked')
            $('#cardListPO' + po_id).removeClass('bg-light-primary-payment border-light-primary-payment')
            $('#checkIcon' + po_id).removeClass('text-success')
            $('#checkIcon' + po_id).addClass('text-grey')
            invoice_po_id_clicked.splice(invoice_po_id_clicked.indexOf(po_id), 1)
        } else {
            // add
            $('#cardListPO' + po_id).addClass('checked')
            $('#cardListPO' + po_id).addClass('bg-light-primary-payment border-light-primary-payment')
            $('#checkIcon' + po_id).removeClass('text-grey')
            $('#checkIcon' + po_id).addClass('text-success')
            invoice_po_id_clicked.push(po_id)
            invoice_po_id_clicked = [...new Set(invoice_po_id_clicked)]
        }
        if (invoice_po_id_clicked.length) {
            showPOFilteredName(po_id)
            $('#fieldListPOManage').prop('hidden', false)
            $('#alertListPOManage').prop('hidden', true)
        } else {
            $('#search_id_po').val('')
            $('#fieldListPOManage').prop('hidden', true)
            $('#alertListPOManage').prop('hidden', false)
            searching()
        }
    }

    function showPOFilteredName(po_id) {
        var supplier_name = data_po_all.find((value, key) => {
            if (value.id == po_id) return true
        }).supplier.name
        $('#search_id_po').val(supplier_name)
        searching()
    }

    function addNewInvoiceFromSide() {
        supplier_id_clicked = supplier_selected
        $('#search_id_po').val('')
        $('#fieldListPOManage').prop('hidden', true)
        $('#alertListPOManage').prop('hidden', false)
        var offcanvasElement = document.getElementById('offcanvasRight');
        var bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
        bsOffcanvas.hide();
        addNewInvoice()
    }
</script>