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
                <h1 class="text-dark fw-bolder" style="font-weight: 700 !important"><span class="text-orange">P</span>URCHASE <span class="text-orange">O</span>RDER <span class="text-orange">P</span>AYMENT</h1>
            </div>
            <div class="col-4 text-end">
                <button type="button" class="btn btn-sm shadow-none btn-outline-dark" onclick="loadData()"><i class="fa fa-refresh"></i></button>
            </div>
            <div class="col-8">
                <p class="m-0 super-small-text">Payment Management for Purchase Order</p>
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
    var data_pending = []
    var data_pending_showed = []
    var data_history = []
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    var data_user = []
    var costCenterStatus = false
    var costCenterNTMId = 23
    var date_start = getFirstDate()
    var date_end = currentDate()
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
            name: 'Payment Pending',
            selected: false,
            functions: 'countPending()',
            getData: 'chooseDataPending()'
        }, {
            id: 2,
            name: 'Payment Done',
            selected: false,
            functions: 'countAllDone()',
            getData: 'chooseDataAllDone()'
        },
    ]
    $(document).ready(function() {
        loadData()
    })

    function loadData() {
        $.ajax({
            url: "<?= api_url('loadPagePayment'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                userId: user_id,
                dateStart: date_start,
                dateEnd: date_end,
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
                data_pending = response['data'].paymentPO
                data_pending_showed = data_pending
                account = response['data'].account
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
                    loadData()
                });
            },
        })
    }

    function chooseDataAllData() {
        var data = data_pending
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataPending() {
        var data = data_pending.filter((v, k) => {
            if (v.state == 'APPROVED' && v.is_paid_off == 0) return true
        })
        return data
    }

    function countPending() {
        return chooseDataPending().length
    }

    function chooseDataAllDone() {
        var data = data_pending.filter((v, k) => {
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
        data_pending_showed = eval(getData)
        statusLine()
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
        html += '<thead class="w-100" id="headTable">'
        html += '<tr class="py-2">'
        html += '<th class="align-middle small-text" style="background-color: white;">#</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">PO ID</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Create Date</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Supplier</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Total Price</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Total Paid</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Sisa</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Paid Freq</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">DP</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Status</th>'
        html += '<th class="align-middle small-text" style="background-color: white;"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '</table>'
        $('#dataTable').html(html)
        bodyHistory()
    }

    function bodyHistory() {
        var html = ''
        var a = 1
        var dataFind = deepCopy(data_pending_showed)
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
            html += '<td class="' + bgLunas + ' align-middle text-center small-text under-hover fw-bolder pointer" onclick="clickDetailPayment(' + e.po_id + ')">' + e.no_po + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + formatDate(e.date_po) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle small-text">' + e.supplier.name + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-end small-text fw-bolder">' + number_format(e.total_po) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-end small-text">' + number_format(total_payment) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-end small-text text-warning">' + number_format(e.po_remaining) + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + e.payment_freq + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-end small-text">' + e.total_dp + '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">' + iconLunas + '</td>'
            html += '</td>'
            html += '<td class="' + bgLunas + ' align-middle text-center small-text">'
            html += '<button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
            html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
            html += '<a class="dropdown-item" onclick="clickDetailPayment(' + e.po_id + ')"><i class="fa fa-eye me-2"></i> Lihat Detail</a>'
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
            }
            // searching: false,
        })
        openModal()
    }

    function openModal() {
        if ($('#modal').hasClass('show')) {
            detailPayment(po_id_clicked)
        }
    }

    function clickDetailPayment(id) {
        $('#modal').modal('show')
        detailPayment(id)
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function detailPayment(id) {
        var data = deepCopy(data_pending_showed).find((value, key) => {
            if (value.po_id == id) return true
        })
        var total_payment = parseFloat(data.total_payment) + parseFloat(data.total_dp)
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<p class="m-0 fw-bold">Detail Payment</p>';
        html_header += '<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        $('#modalHeader').addClass('py-3');
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row mt-2">'
        // left side
        html_body += '<div class="col-7">'
        // right content
        html_body += '<div class="row">'
        // information
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 h2">Payment PO<br><b>#' + data.no_po + '</b></p>'
        html_body += '<p class="m-0 mt-1">Due at <b>' + formatDateIndonesia(data.date_po) + '</b></p>'
        html_body += '</div>'
        // information
        // information total
        html_body += '<div class="col-12 my-3">'
        html_body += '<div class="row">'
        html_body += '<div class="col-8">'
        html_body += '<p class="m-0 fw-bolder h4">Rp. ' + number_format(total_payment) + ' <span class="fw-light" style="font-size: 12px;">/ Rp. ' + number_format(data.total_po) + '</span></p>'
        html_body += '</div>'
        html_body += '<div class="col-4 text-end align-self-end">'
        if (data.ppn) {
            html_body += '<p class="m-0 small-text"><span class="badge bg-warning">+ PPn ' + number_format(data.ppn) + '</span></p>'
        }
        var percent = 0
        if (total_payment) {
            percent = roundToTwo((total_payment / data.total_po) * 100)
        }
        // html_body += '<button class="btn btn-outline-dark btn-sm super-small-text p-1" onclick="addPayment()"><i class="fa fa-plus me-1"></i> Tambah Baru</button>'
        html_body += '</div>'
        // progress bar
        html_body += '<div class="col-12 mt-2">'
        html_body += '<div class="progress">'
        html_body += '<div class="progress-bar bg-primary" role="progressbar" style="width: ' + percent + '%" aria-valuenow="' + percent + '" aria-valuemin="0" aria-valuemax="100"></div>'
        html_body += '</div>'
        // html_body += '<div class="alert alert-danger py-2 small mt-2" role="alert"><span class="fa fa-warning text-warning me-2"></span><i class="text-dark">Will be Expired in <b>3</b> Days</i></div>'
        html_body += '</div>'
        // progress bar
        // col payment
        html_body += '<div class="col-12 mt-2">'
        // card info detail
        html_body += '<div class="card shadow-none mb-2">'
        html_body += '<div class="card-header bg-white py-2">'
        html_body += '<p class="m-0 small-text text-dark fw-bolder">Detail Information</p>'
        html_body += '</div>'
        html_body += '<div class="card-body py-2">'
        html_body += '<div class="row">'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">NO PO</p>'
        html_body += '<p class="m-0 small">' + data.no_po + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">Supplier</p>'
        html_body += '<p class="m-0 small">' + data.supplier.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">Item</p>'
        html_body += '<ol class="ps-3 pb-0 mb-0">'
        data.po_details.forEach(e => {
            html_body += '<li style="font-size: 8px"><p class="m-0">' + shortenText(e.item.name, 35) + '</p></li>'
        });
        html_body += '</ol>'
        html_body += '</div>'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">Total Harga PO</p>'
        html_body += '<p class="m-0 small">Rp. ' + number_format(data.total_po) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">Total PPN</p>'
        html_body += '<p class="m-0 small">Rp. ' + number_format(data.ppn) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">Total Terbayarkan</p>'
        html_body += '<p class="m-0 small">Rp. ' + number_format(total_payment) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mb-2">'
        html_body += '<p class="m-0 small-text fw-bolder">Status Payment</p>'
        var status = '<span class="text-grey">PROSES PAYMENT</span>'
        if (data.is_paid_off) {
            status = '<span class="text-success">LUNAS</span>'
        }
        html_body += '<p class="m-0 small">' + status + '</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // card info detail
        // card info detail
        html_body += '<div class="card shadow-none">'
        html_body += '<div class="card-header bg-white py-2">'
        html_body += '<p class="m-0 small-text text-dark fw-bolder">Payment List</p>'
        html_body += '</div>'
        html_body += '<div class="card-body p-0">'
        // information payment
        html_body += '<div class="table-responsive">'
        html_body += '<table class="table table-hover table-sm small w-100" style="overflow-x: hidden;" id="tableDetail2">'
        html_body += '<thead class="w-100">'
        html_body += '<tr>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">#</th>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">No. Invoice</th>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">Paid Date</th>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">Source</th>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">Type</th>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">Nominal</th>'
        html_body += '<th class="p-2 align-middle super-small-text" style="background-color: white;">Status</th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody id="bodyTableDetail">'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '</div>'
        // information payment
        html_body += '</div>'
        html_body += '</div>'
        // card info detail
        html_body += '</div>'
        // col payment
        html_body += '</div>'
        html_body += '</div>'
        // information total
        html_body += '</div>'
        // right content
        html_body += '</div>'
        // left side
        // right side
        html_body += '<div class="col-5" id="createField">'
        html_body += '</div>'
        // right side
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
        $('#modalFooter').addClass('d-none');
        bodyTableDetail(id, data)
        createField(id)
    }

    function bodyTableDetail(id, data) {
        var html = ''
        var a = 1
        data.payments.forEach(e => {
            if (e) {
                html += '<tr>'
                html += '<td class="bg-light align-middle text-center super-small-text">' + a++ + '</td>'
                html += '<td class="bg-light align-middle text-center super-small-text under-hover fw-bolder pointer" onclick="detailPayment()">' + e.doc_number + '</td>'
                html += '<td class="bg-light align-middle text-center super-small-text">' + formatDate(e.datetime) + '</td>'
                html += '<td class="bg-light align-middle text-center super-small-text">' + e.account.name + '</td>'
                var text = 'Pelunasan'
                if (e.is_dp) {
                    text = 'DP'
                }
                html += '<td class="bg-light align-middle text-center super-small-text">' + text + '</td>'
                html += '<td class="bg-light align-middle text-end super-small-text">' + number_format(e.nominal) + '</td>'
                html += '<td class="bg-light align-middle text-center super-small-text"><p class="m-0 fw-bold text-success">PAID</p></td>'
                html += '</tr>'
            }
        });
        if (a == 1) {
            html += '<tr>'
            html += '<td colspan="7" class="align-middle text-center super-small-text p-5"><i>Tidak ada data</i></td>'
            html += '</tr>'
        }
        $('#bodyTableDetail').html(html)
    }

    function createField(id) {
        var data = deepCopy(data_pending_showed).find((value, key) => {
            if (value.po_id == id) return true
        })
        console.log(data)
        var html = ''
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-header bg-random py-2">'
        html += '<p class="m-0 small-text text-white fw-bolder">Create Payment</p>'
        html += '</div>'
        html += '<div class="card-body">'
        html += '<div class="row">'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-group">'
        html += '<label class="mb-1 fw-bolder">No. Invoice</label>'
        html += '<input type="text" name="" class="form-control form-control-sm p-1 border-0 shadow-none" id="no_invoice" placeholder="" autocomplete="off">'
        html += '<hr class="m-0 hr_form" id="hr_no_invoice">'
        html += '<span class="small-text text-danger error_form" id="error_no_invoice"></span>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-group">'
        html += '<label class="mb-1 fw-bolder">Tanggal Pembayaran</label>'
        html += '<input type="text" name="" class="form-control form-control-sm p-1 border-0 shadow-none datepicker" placeholder="" autocomplete="off" id="datePembayaran">'
        html += '<hr class="m-0 hr_form" id="hr_datePembayaran">'
        html += '<span class="small-text text-danger error_form" id="error_datePembayaran"></span>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-group">'
        html += '<label class="mb-1 fw-bolder">Sumber Dana</label>'
        html += '<select class="form-select form-select-sm w-100 ps-0 py-3 border-0 shadow-none" id="select_sumber_dana" title="Pilih View By">'
        html += '<option value="" selected disabled>Pilih Sumber Dana</option>'
        account.forEach(e => {
            html += '<option value="' + e.id + '">' + e.name + '</option>'
        });
        html += '</select>'
        html += '<hr class="m-0 hr_form" id="hr_select_sumber_dana">'
        html += '<span class="small-text text-danger error_form" id="error_select_sumber_dana"></span>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-group">'
        html += '<label class="mb-2 fw-bolder">Jenis Pembayaran</label>'
        // radio
        var check = ''
        if (!data.total_dp) {
            html += '<div class="form-check">'
            html += '<input class="form-check-input" type="radio" value="DP" name="flexRadioDefault" id="flexRadioDefault1">'
            html += '<label class="form-check-label small-text" for="flexRadioDefault1">Pembayaran DP</label>'
            html += '</div>'
        } else [
            check = 'checked'
        ]
        html += '<div class="form-check">'
        html += '<input class="form-check-input" type="radio" value="Pelunasan" name="flexRadioDefault" id="flexRadioDefault2" ' + check + '>'
        html += '<label class="form-check-label small-text" for="flexRadioDefault2">Pelunasan</label>'
        html += '</div>'
        // radio
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-group">'
        html += '<label class="mb-1 fw-bolder">Nominal</label>'
        html += '<input type="text" name="" class="nominal form-control form-control-sm p-1 border-0 shadow-none" placeholder="" autocomplete="off" id="nominalPembayaran">'
        html += '<hr class="m-0 hr_form" id="hr_nominalPembayaran">'
        html += '<span class="small-text text-danger error_form" id="error_nominalPembayaran"></span>'
        // copy
        html += '<button class="btn btn-sm btn-outline-warning border-radius-20 p-1 small-text mt-2 float-end shadow-none" id="btnCopy" onclick="copyNominal(' + data.po_remaining + ')">Copy Sisa ' + number_format(data.po_remaining) + '</button>'
        // copy
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-group">'
        html += '<label class="mb-1 fw-bolder">Notes</label>'
        html += '<input type="text" name="" class="form-control form-control-sm p-1 border-0 shadow-none" placeholder="" autocomplete="off" id="notes">'
        html += '<hr class="m-0">'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<div class="form-check float-end">'
        html += '<input class="form-check-input" type="checkbox" value="1" id="autoLunasCheck" onchange="autoLunasClicked()"/>'
        html += '<label class="form-check-label small-text" for="autoLunasCheck">Auto Lunas ?</label>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-4" hidden id="fieldPelunasan">'
        html += '<div class="form-group">'
        html += '<label class="mb-1 fw-bolder">Tanggal Pelunasan</label>'
        html += '<input type="text" name="" class="form-control form-control-sm p-1 border-0 shadow-none datepicker" placeholder="" autocomplete="off" id="datepelunasan">'
        html += '<hr class="m-0 hr_form" id="hr_datepelunasan">'
        html += '<span class="small-text text-danger error_form" id="error_datepelunasan"></span>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<button class="w-100 btn btn-sm bg-random text-white border-radius-20 py-2" id="btnSimpan" onclick="simpanData(' + id + ')">Simpan</button>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'

        $('#createField').html(html)
        $('.nominal').number(true, 2);
        new Litepicker({
            element: document.getElementById('datePembayaran'),
            singleMode: true,
            firstDay: 0,
            format: 'YYYY-MM-DD',
            autoRefresh: true,
        })
        new Litepicker({
            element: document.getElementById('datepelunasan'),
            singleMode: true,
            firstDay: 0,
            format: 'YYYY-MM-DD',
            autoRefresh: true,
        })
    }

    function createCodeId() {
        var date = (new Date).getTime()
        return date;
    }
    var variableInsert = {
        'datetime': 'datePembayaran',
        'doc_number': 'no_invoice',
        'account_id': 'select_sumber_dana',
        'nominal': 'nominalPembayaran',
        'is_dp': '',
    }
    var variableInputTag = {
        'datetime': '#datePembayaran',
        'doc_number': '#no_invoice',
        'account_id': '#select_sumber_dana',
        'nominal': '#nominalPembayaran',
        'is_dp': 'input[name="flexRadioDefault"]:checked',
    }

    function simpanData(po_id) {
        po_id_clicked = po_id
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setPayment'); ?>'
        var datetime = $(variableInputTag.datetime).val()
        var doc_number = $(variableInputTag.doc_number).val()
        var account_id = $(variableInputTag.account_id).val()
        var nominal = $(variableInputTag.nominal).val()
        var is_dp = $(variableInputTag.is_dp).val() == 'DP' ? 1 : 0
        var note = $('#notes').val()
        var data = {
            payment: [{
                id: createCodeId(),
                datetime: datetime,
                employee_id: user_id,
                doc_number: doc_number,
                account_id: account_id,
                nominal: nominal,
                is_dp: is_dp,
                note: note,
                reference_table: 'PO',
                reference_id: po_id,
            }]
        }
        if (!checkNullInput()) {
            kelolaData(data, type, url, button)
        }
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
                loadData()
            }
        });
    }

    function copyNominal(nominal) {
        $('#nominalPembayaran').val(nominal)
    }

    function autoLunasClicked() {
        if ($('#autoLunasCheck').is(':checked')) {
            console.log('test')
            $('#fieldPelunasan').prop('hidden', false)
        } else {
            $('#fieldPelunasan').prop('hidden', true)
        }
    }
</script>