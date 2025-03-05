<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/smm/shipping.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<style>
    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    #custom-search-container div.dataTables_filter input {
        border-radius: 20px;
        width: 200px;
    }

    #custom-search-container div.dataTables_filter {
        font-size: 0px;
    }

    .formFilter {
        border-radius: 20px;
        width: 200px;
        padding-left: 30px;
        padding: 9px !important;
        padding-right: 50px !important;
        font-size: 10px;
    }

    .circular-landscape {
        display: inline-block;
        position: relative;
        width: 30px;
        height: 30px;
        overflow: hidden;
        border-radius: 50%;
    }

    .circular-landscape img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Flashing */
    .avatar:hover img {
        opacity: 1;
        -webkit-animation: flash 1.5s;
        animation: flash 1.5s;
    }

    @-webkit-keyframes flash {
        0% {
            opacity: .4;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes flash {
        0% {
            opacity: .4;
        }

        100% {
            opacity: 1;
        }
    }

    .avatars {
        display: inline-flex;
        flex-direction: row;
    }

    .avatar {
        position: relative;
        border: 2px solid #fff;
        border-radius: 50%;
        overflow: hidden;
        width: 30px;
        height: 30px;
        /* Sesuaikan dengan ukuran yang diinginkan */
    }

    .avatar:not(:last-child) {
        margin-right: -20px;
        /* Mengatur jarak antara gambar */
    }

    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar tetap terlihat utuh dalam lingkaran */
        display: block;
    }

    .avatar canvas {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar tetap terlihat utuh dalam lingkaran */
        display: block;
    }

    .plus-avatar {
        background-color: #27374D;
        width: 30px;
        height: 30px;
        display: flex;
        color: white;
        justify-content: center;
        align-items: center;
    }

    .plus-avatar-grey {
        background-color: #EFF5F5;
        width: 30px;
        height: 30px;
        display: flex;
        color: grey;
        justify-content: center;
        align-items: center;
    }

    .plus-avatar-grey-empty {
        background-color: transparent;
        width: 30px;
        height: 30px;
        display: flex;
        color: white;
        justify-content: center;
        align-items: center;
    }

    .plus-icon {
        font-size: 10px;
        font-weight: bold;
    }

    table td {
        white-space: nowrap;
        /* Mencegah teks wrap */
    }
</style>
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
                        <h1 class="text-dark fw-bolder m-0" style="font-weight: 700 !important">Outgoing Shipment</h1>
                        <p class="m-0 super-small-text">Panel Kegiatan Entri untuk Management Pengiriman Shipment</p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end align-self-center">
                <div class="row justify-content-end">
                    <div class="col-auto pe-0">
                        <p class="m-0 small-text"><i>Last Updated</i></p>
                        <p class="m-0 small-text"><i>Today at <b id="timeRefresh">-</b></i></p>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm shadow-none btn-outline-primary" onclick="loadData()"><i class="fa fa-refresh"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" id="alertPOWithoutInvoice">
        </div>
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-header">
                    <p class="m-0 super-small-text fw-bolder text-dark">Shipping Lists</p>
                    <p class="m-0 super-small-text fw-bolder text-dark-grey" id="dateRangeString"></p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 px-4" id="statusLine">

                        </div>
                    </div>
                    <div class="row me-0">
                        <div class="col-12 pe-0">
                            <div class="table-responsible table-sticky-last" id="dataTable">
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
            <div class="modal-body small" id="modalBody">

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
<div class="qrcode" id="qrcode" style="text-align:center;display:none;" class="mt-3 mx-auto d-block w-100"></div>
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
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="<?= base_url(); ?>assets/JSPrintManager.js"></script>
<!-- <script src="<?= base_url(); ?>assets/ebapi-modules.js"></script> -->
<script>
    var imgBase64Data

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
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var data_load = {}
    var data_load_showed = []
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
            name: 'Data Incomplete',
            selected: false,
            functions: 'countPending()',
            getData: 'chooseDataPending()'
        }
    ]
    var indexVariable = 0
    var indexVariablePacking = 0
    var data_packing_list = []
    var data_packing_list_showed = []
    var linkPhoto = ''
    var printers = []
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
            url: "<?= api_url('loadPageFinishGoodShipment'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                gudangId: 1,
                dataStart: date_start,
                dataEnd: date_end
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
                data_load = response.data
                data_load_showed = eval(statusLineVariable[indexVariable].getData)
                statusLine()
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

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: date_start,
            endDate: date_end,
            format: "DD MMMM YYYY",
            autoRefresh: true,
            lockDays: [],
            numberOfColumns: 1,
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
        var data = data_load.shipment
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataPending() {
        var data = data_load.shipmentActive
        return data
    }

    function countPending() {
        return chooseDataPending().length
    }

    function sortShipments(data) {
        // Sort function
        return data.sort((a, b) => {
            // Check is_receive first
            if (a.is_receive == 1 && b.is_receive != 1) {
                return -1; // a comes first
            }
            if (a.is_receive != 1 && b.is_receive == 1) {
                return 1; // b comes first
            }

            // If both are received, sort by receive_at
            if (a.is_receive == 1 && b.is_receive == 1) {
                return new Date(b.receive_at) - new Date(a.receive_at); // Sort by receive_at, newest first
            }

            // If both are not received, keep original order
            return 0;
        });
    }

    function statusLineSwitch(id, getData) {
        indexVariable = id
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
        data_load_showed = eval(getData)
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
        html += '<div class="col-auto ps-0" id="custom-search-container">'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-2">'

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
        html += '<th class="align-middle text-center small-text bg-white">#</th>'
        html += '<th class="align-middle text-center small-text bg-white">Doc Number</th>'
        html += '<th class="align-middle text-center small-text bg-white">Send At</th>'
        html += '<th class="align-middle text-center small-text bg-white">Sender</th>'
        html += '<th class="align-middle text-center small-text bg-white">Origin</th>'
        html += '<th class="align-middle text-center small-text bg-white">Destination</th>'
        html += '<th class="align-middle text-center small-text bg-white">Receive<br>At</th>'
        html += '<th class="align-middle text-center small-text bg-white">Receive<br>By</th>'
        html += '<th class="align-middle text-center small-text bg-white">Note<br>Sender</th>'
        html += '<th class="align-middle text-center small-text bg-white">Note<br>Receive</th>'
        html += '<th class="align-middle text-center small-text bg-white">Driver</th>'
        html += '<th class="align-middle text-center small-text bg-white">Status<br>Pengiriman</th>'
        html += '<th class="align-middle text-center small-text bg-white">Status<br>Kelengkapan</th>'
        html += '<th class="align-middle text-center small-text bg-white"></th>'
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

    function calculateTotals(details, attribute, id) {
        let total = 0;
        var data = details.filter(e => e.unit.id == id)
        $.each(data, function(index, detail) {
            total += detail[attribute];
        });
        return total;
    }

    function bodyHistory() {
        var html = ''
        var a = 1

        var dataFind = deepCopy(data_load_showed)
        var b = 0
        $.each(dataFind, function(key, value) {
            if (!value.doc_number) {
                value.doc_number = '-'
            }
            if (!value.note_sender) {
                value.note_sender = '-'
            }
            if (!value.note_receiver) {
                value.note_receiver = '-'
            }
            if (!value.driver.name) {
                value.driver.name = '-'
            }
            var badgePengiriman = ''
            var badgeKelengkapan = ''
            if (value.stok_gudang_riwayats.length > 0) {
                if (value.is_load_all) {
                    if (value.is_approve) {
                        if (value.is_receive_close) {
                            badgePengiriman = '<span class="badge rounded-pill bg-success super-small-text p-2 w-100">PENERIMAAN SELESAI</span>'
                        } else {
                            badgePengiriman = '<span class="badge rounded-pill bg-orange super-small-text p-2 w-100">PERJALANAN KIRIM</span>'
                        }
                    } else {
                        badgePengiriman = '<span class="badge rounded-pill bg-primary super-small-text p-2 w-100">MENUNGGU PERSEJUTUAN</span>'
                    }
                } else {
                    badgePengiriman = '<span class="badge rounded-pill bg-warning super-small-text p-2 w-100">PROSES MUAT</span>'
                }
            } else {
                badgePengiriman = '<span class="badge rounded-pill bg-grey super-small-text p-2 w-100">MENUNGGU MUAT</span>'
            }
            if (value.is_receive_close) {
                if (value.stok_gudang_riwayats.length > 0) {
                    if (checkDataStokGudangRiwayat(value.stok_gudang_riwayats, null)) {
                        badgeKelengkapan = '<span class="badge rounded-pill bg-warning super-small-text p-2 w-100">KURANG</span>'
                    } else {
                        badgeKelengkapan = '<span class="badge rounded-pill bg-success super-small-text p-2 w-100">LENGKAP</span>'
                    }
                }
            } else {
                badgeKelengkapan = '<span class="badge rounded-pill bg-grey super-small-text p-2 w-100">MENUNGGU</span>'
            }
            html += '<tr>'
            html += '<td class="bg-white align-middle small-text text-center">' + (parseInt(key) + 1) + '</td>'
            html += '<td class="bg-white align-middle small-text text-center fw-bolder">' + value.doc_number + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + formatDate(value.send_at) + ' ' + formatTime(value.send_at) + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + value.employee_sender.name + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + value.subject_origin.name + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + value.subject_dest.name + '</td>'
            if (value.receive_at) {
                html += '<td class="bg-white align-middle small-text text-center">' + formatDate(value.receive_at) + ' ' + formatTime(value.receive_at) + '</td>'
                html += '<td class="bg-white align-middle small-text text-center">' + value.employee_receiver.name + '</td>'
            } else {
                html += '<td class="bg-white align-middle small-text text-center">-</td>'
                html += '<td class="bg-white align-middle small-text text-center">-</td>'
            }
            html += '<td class="bg-white align-middle small-text text-center">' + value.note_sender + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + value.note_receiver + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + value.driver.name + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + badgePengiriman + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">' + badgeKelengkapan + '</td>'
            html += '<td class="bg-white align-middle small-text text-center">'
            html += '<button class="super-small-text btn btn-sm btn-outline-dark py-1 px-2 shadow-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>'
            html += '<div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuButton">'
            var anyButton = 0
            html += '<a class="dropdown-item mb-2" onclick="cetakSuratJalan(' + "'" + value.id + "'" + ',' + "'" + value.doc_number + "'" + ')"><i class="fa fa-print me-2"></i> Cetak Surat Jalan</a>'
            if (value.is_load_all == 1 && value.is_approve == null) {
                html += '<a class="dropdown-item mb-2" onclick="approveDataPengiriman(' + "'" + value.id + "'" + ',' + "'" + value.doc_number + "'" + ')"><i class="fa fa-check text-success me-2"></i> Approve Pengiriman</a>'
                anyButton++
            }
            if (value.is_approve == null && value.is_load_all == 1) {
                html += '<div class="text-center pe-2 ps-2">'
                html += '<button class="btn btn-sm btn-danger w-100" onclick="batalMuat(' + "'" + value.id + "'" + ',' + "'" + value.doc_number + "'" + ')">Batal Muat</button>'
                html += '</div>'
                anyButton++
            }
            if (!anyButton) {
                // html += '<div class="text-center pe-2 ps-2">'
                // html += '<i class="small-text">Tidak ada aksi</i>'
                // html += '</div>'
            }
            html += '</div>'
            html += '</td>'
            html += '</tr>'
            b++
        })
        $('#bodyTable').html(html)
        footTable()
    }

    function cetakSuratJalan(id, doc_num) {
        var qrcode = new QRCode("qrcode", {
            text: doc_num,
            width: 100,
            height: 100,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
        imgBase64Data = qrcode._oDrawing._elCanvas.toDataURL("image/png")
        var image = btoa(imgBase64Data)
        var url = '<?= base_url('production/cetakSuratJalanTransferGudang') ?>'
        var params = "*$" + image + "*$" + id
        window.open(url + '?params=' + (params), '_blank')
    }

    function checkDataStokGudangRiwayat(data, status) {
        var dataFind = deepCopy(data)
        var data = dataFind.find(e => e.qty_receive == status)
        if (data) {
            return true
        } else {
            return false
        }

    }

    function footTable() {
        $('#tableDetail').DataTable({
            ordering: true, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "600px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            "initComplete": function(settings, json) {
                $('div.dataTables_filter input').attr('placeholder', 'Search...');
            },
            searching: true,
        })
        $('#custom-search-container').html($('.dataTables_filter'));
        $('#tableDetail').addClass('table-sticky-last');
    }

    function receiveData(id, doc_name) {

    }


    function formRejectApproval(id, doc_num) {
        clearModal()
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title small">Reject Pengiriman ' + doc_num + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 small-text fw-bolder">Alasan Reject</p>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<div class="input-group mb-3">'
        html_body += '<textarea class="form-control" placeholder="Alasan Reject" id="alasanReject"></textarea>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<button type="button" class="btn btn-danger btn-sm w-100 p-3" onclick="rejectPengiriman(' + "'" + id + "'" + ',' + "'" + doc_num + "'" + ')">Reject</button>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>'
        $('#modalFooter').html(html_footer);
    }

    function approvePengiriman(id, doc_num) {
        Swal.fire({
            text: 'Apakah Anda yakin ingin menyetujui Surat Jalan ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanDataApproval(id)
            }
        })
    }

    function simpanDataApproval(id) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setShipment'); ?>'
        var data = {
            stok_gudang_pengiriman: [{
                id: id,
                is_approve: 1,
                approve_at: currentDateTime(),
                approve_id: user_id
            }]
        }
        kelolaData(data, type, url, button)
    }

    function batalMuat(id, doc_num) {
        Swal.fire({
            text: 'Apakah Anda yakin ingin batal muat Surat Jalan ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                simpanDataBatalMuat(id)
            }
        })
    }

    function simpanDataBatalMuat(id) {
        var type = 'POST'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('setShipment'); ?>'
        var data = {
            stok_gudang_pengiriman: [{
                id: id,
                is_load_all: 'null',
            }]
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
                        $('#modal').modal('hide')
                        loadData()
                    })
                }
            }
        });
    }

    function approveDataPengiriman(id, doc_num) {
        var dataFind = deepCopy(data_load_showed)
        var data = dataFind.find(e => e.id == id)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title small">Surat Jalan ' + doc_num + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 mb-4" id="tampilSuratJalan">'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 small-text fw-bolder">Stok List</p>'
        html_body += '</div>'
        html_body += '<div class="col-12 table-responsive" id="dataPackingList">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        var html_footer = '';
        html_footer += '<div class="row w-100 justify-content-center">'
        html_footer += '<div class="col-auto">'
        html_footer += '<button type="button" class="btn btn-danger btn-sm me-2" onclick="formRejectApproval(' + id + ', ' + "'" + doc_num + "'" + ')">Reject <i class="fa fa-times ms-2"></i></button>'
        html_footer += '<button type="button" class="btn btn-success btn-sm" id="btnSimpan" onclick="approvePengiriman(' + id + ', ' + "'" + doc_num + "'" + ')">Accept <i class="fa fa-check ms-2"></i></button>'
        html_footer += '</div>'
        html_footer += '</div>'
        $('#modalFooter').html(html_footer);
        tampilSuratJalan(id, data)
        dataPackingList(id, data)
    }

    function tampilSuratJalan(id, data) {
        var html = ''
        html += '<div class="row">'
        // col
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Send At</p>'
        html += '<p class="m-0 small-text fw-bolder text-dark-grey">' + formatDate(data.send_at) + '</p>'
        html += '</div>'
        // col
        // col
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Sender</p>'
        html += '<p class="m-0 small-text fw-bolder text-dark-grey">' + data.employee_sender.name + '</p>'
        html += '</div>'
        // col
        // col
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Receiver</p>'
        html += '<p class="m-0 small-text fw-bolder text-dark-grey">' + data.employee_receiver.name + '</p>'
        html += '</div>'
        // col
        // col
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Origin</p>'
        html += '<p class="m-0 small-text fw-bolder text-dark-grey">' + data.subject_origin.name + '</p>'
        html += '</div>'
        // col
        // col
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text fw-bolder">Destination</p>'
        html += '<p class="m-0 small-text fw-bolder text-dark-grey">' + data.subject_dest.name + '</p>'
        html += '</div>'
        // col
        html += '</div>'
        $('#tampilSuratJalan').html(html)
    }

    function dataPackingList(id, data) {
        var html = '';
        html += '<table class="table table-bordered table-hover table-sm small w-100 tablePackingList" id="tablePackingList">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle small-text" style="width:5%">No</th>'
        // html += '<th class="align-middle small-text">Tgl</th>'
        html += '<th class="align-middle small-text" style="width:10%">Item Code</th>'
        html += '<th class="align-middle small-text" style="width:10%">Item Name</th>'
        html += '<th class="align-middle small-text" style="width:20%">Unit</th>'
        html += '<th class="align-middle small-text" style="width:20%">QTY<br>In</th>'
        html += '<th class="align-middle small-text" style="width:20%">QTY<br>Out</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        html += '</tbody>'
        html += '<tfoot>'
        html += '</tfoot>'
        html += '</table>'
        $('#dataPackingList').html(html)
        if (data.stok_gudang_riwayats.length) {
            dataTablePackingList(id, data)
        } else {
            $('#tablePackingList tbody').html('<tr><td colspan="6" class="text-center">Data tidak ditemukan</td></tr>')
        }
    }

    function formatDate2(inputDate) {
        // Mengambil tanggal dari input
        const date = new Date(inputDate);

        // Mengambil hari, bulan, dan tahun dari objek Date
        let day = date.getDate();
        let month = date.getMonth() + 1; // Bulan dimulai dari 0, jadi ditambahkan 1
        let year = date.getFullYear();

        // Mengubah tahun ke dua digit terakhir
        year = year.toString().slice(-2);

        // Menambahkan 0 di depan hari dan bulan jika kurang dari 10
        if (day < 10) day = '0' + day;
        if (month < 10) month = '0' + month;

        // Menggabungkan hari, bulan, dan tahun sesuai format DD/MM/YY
        return `${day}/${month}/${year}`;
    }

    function sortShipmentData(data) {
        return data.sort((a, b) => {
            // Sort by qty_receive, moving items with null or 0 to the bottom
            if ((a.qty_receive === null || a.qty_receive === 0) && (b.qty_receive !== null && b.qty_receive !== 0)) {
                return 1; // Move 'a' below 'b'
            } else if ((b.qty_receive === null || b.qty_receive === 0) && (a.qty_receive !== null && a.qty_receive !== 0)) {
                return -1; // Move 'b' below 'a'
            } else {
                return 0; // Maintain the original order for other cases
            }
        });
    }

    function dataTablePackingList(id, data) {
        var html = '';
        var a = 1
        data.stok_gudang_riwayats.forEach(e => {
            html += '<tr>'
            html += '<td class="align-middle small-text text-center">' + a++ + '</td>'
            html += '<td class="align-middle small-text text-center">' + e.item.code + '</td>'
            html += '<td class="align-middle small-text">' + e.item.name + '</td>'
            html += '<td class="align-middle small-text text-center">' + e.unit.name + '</td>'
            html += '<td class="align-middle small-text text-end">' + number_format(roundToTwo(e.qty_in)) + '</td>'
            html += '<td class="align-middle small-text text-end">' + number_format(roundToTwo(e.qty_out)) + '</td>'
            html += '</tr>'
        });
        $('#tablePackingList tbody').html(html)
        dataTablePackingListFooter(id)
    }

    function dataTablePackingListFooter(id) {
        $('#tablePackingList').DataTable({
            ordering: true, // Menonaktifkan pengurutan
            // pageLength: 200,
            paging: false,
            fixedHeader: true,
            searching: false,
            // scrollY: "400px",
            // scrollX: true,
            // scrollCollapse: true,
            "info": false, // Mematikan tampilan informasi
            "lengthChange": false
        })
    }

    function cetakPackingList(id, doc_num) {
        var url = "<?= base_url() ?>page/cetakPackingList"
        var params = "*$" + id + "*$" + doc_num
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }

    function excelPackingList(id, doc_num) {
        var url = '<?= base_url('report/excelPackingList') ?>';
        var params = "*$" + id + "*$" + doc_num
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
    var printerKey = ''

    function showBarcode(id, code) {
        defaultLabelPrinter = localStorage.getItem("defaultLabelPrinter") || '';
        printerKey = ''
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Barcode</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader2').html(html_header);
        var html_body = '';
        $('#modalBody2').html(html_body);
        var html_footer = '';
        $('#modalFooter2').html(html_footer).addClass('d-none')
        $('#qrcodePacking').empty()
        // if (defaultLabelPrinter) {
        //     choosePrinter(printerKey, defaultLabelPrinter)
        // }
        layoutPrinted(id, code)
    }

    function layoutPrinted(id, code) {
        // console.log(data_packing_list_showed)
        var data = data_packing_list_showed.find(item => item.shipment_detail_id == id)
        // console.log(id)
        var weight = data.inventory.weight
        if (!weight) {
            weight = data.inventory.weight_est
        }
        var html = '';
        html += '<div class="row">'
        html += '<div class="col-3">'
        html += '<div id="qrcodePacking" style="margin-top:15px;margin:auto;"></div>'
        html += '</div>'
        html += '<div class="col-9">'

        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="m-0 small-text fw-bolder">' + formatDateBarcode(data.inventory.purchase_at) + '</p>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<p class="m-0 small-text">GRADE</p>'
        html += '<h1 class="m-0 fw-bolder" style="font-size:50px !important">' + data.item_grade.name + '</h1>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<p class="m-0 small-text">BERAT (Kg)</p>'
        html += '<h1 class="m-0 fw-bolder" style="font-size:50px !important">' + weight + '</h1>'
        html += '</div>'
        html += '</div>'

        html += '</div>'

        html += '<div class="col-12 mt-2">'
        html += '<p class="m-0 small-text fw-bold">' + data.inventory.code + '</p>'
        html += '<p class="m-0 small fw-bolder">' + data.item.name + '</p>'
        html += '</div>'

        html += '<div class="col-6 mt-3">'
        html += '<p class="m-0 small fw-bolder">' + data.supplier.name + '</p>'
        html += '<p class="m-0 small fw-bolder">' + data.inventory.bale_number + '</p>'
        html += '</div>'

        html += '<div class="col-6 mt-3 text-end">'
        if (!data.inventory.global_code) {
            data.inventory.global_code = ''
        }
        html += '<p class="m-0 small fw-bolder">' + data.inventory.global_code + '</p>'
        html += '</div>'

        html += '</div>'
        $('#modalBody2').html(html);
        $('#qrcodePacking').empty()
        var qrcode = new QRCode("qrcodePacking", {
            text: code,
            width: 100,
            height: 100,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
    }

    function layoutPrintCard(id, code) {
        var html
        html += '<div class="row">'
        //filter
        html += '<div class="col-6 text-center mb-2">'
        html += '<div id="qrcodePacking" style="margin-top:15px;margin:auto;"></div>'
        html += '</div>'
        // print barcode
        html += '<div class="col-6 ps-0">'
        // list printer
        html += '<div class="row mb-2">'
        html += '<div class="col-12" style="max-height: 200px;overflow-x: hidden;overflow-y: auto;">'
        if (printers.length) {
            $.each(printers, (key, value) => {
                if (defaultLabelPrinter == value) {
                    printerKey = key
                }
                html += '<div class="card shadow-none pointer card-hoper mb-2 cardChoosePrinter" onclick="choosePrinter(' + key + ',' + "'" + value + "'" + ')" id="cardChoosePrinter' + key + '">'
                html += '<div class="card-body p-1 px-2">'
                // text
                html += '<div class="row">'
                html += '<div class="col-10 align-self-center">'
                html += '<p class="m-0 super-small-text fw-bolder">' + value + '</p>'
                html += '</div>'
                html += '<div class="col-2 text-end">'
                html += '<i class="fa fa-check-circle text-grey iconChoosePrinter" id="iconChoosePrinter' + key + '"></i>'
                html += '</div>'
                html += '</div>'
                // text
                html += '</div>'
                html += '</div>'
            })
        } else {
            html += '<div class="card shadow-none">'
            html += '<div class="card-body">'
            html += '<p class="text-center small-text fw-bolder"><i>Printer Tidak Ditemukan</i></p>'
            html += '<p class="m-0 text-center small-text">Silahkan untuk instalasi JSPM Terlebih Dahulu</p>'
            html += '<p class="m-0 text-center small-text">Jika printer sudah terinstall, silahkan refresh halaman ini</p>'
            html += '</div>'
            html += '</div>'
        }
        html += '</div>'
        html += '</div>'
        // list printer
        html += '<button type="button" class="btn btn-primary btn-sm small-text" onclick="printQrCode(\'' + id + '\')" id="btnCetakQRCode" disabled>Cetak QR Code</button>'
        html += '</div>'
        // print barcode
        //filter
        html += '</div>'
        return html
    }

    function choosePrinter(key, value) {
        localStorage.setItem('defaultLabelPrinter', value)
        $('.cardChoosePrinter').removeClass('border-success bg-light')
        $('.iconChoosePrinter').removeClass('text-success')
        $('#cardChoosePrinter' + key).addClass('border-success bg-light')
        $('#iconChoosePrinter' + key).addClass('text-success')
        $('#btnCetakQRCode').prop('disabled', false)
    }

    function formatDateBarcode(dateString) {
        // Create a new Date object from the input date string
        const date = new Date(dateString);

        // Array of month names for converting month number to name
        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];

        // Extract day, month, year, hours, and minutes
        const day = date.getDate(); // Day of the month
        const month = months[date.getMonth()]; // Month name
        const year = String(date.getFullYear()).slice(-2); // Last 2 digits of the year
        const hours = String(date.getHours()).padStart(2, '0'); // Hour in 2 digits
        const minutes = String(date.getMinutes()).padStart(2, '0'); // Minutes in 2 digits

        // Format the date as '18 Sep 24, 16:06'
        return `${day} ${month} ${year}, ${hours}:${minutes}`;
    }

    function printQrCode(id) {
        var data = data_packing_list_showed.find(item => item.id == id)
        var weight = data.inventory.weight
        if (!weight) {
            weight = data.inventory.weight_est
        }
        let cmds = '';
        cmds += '^XA' +
            '^FO30,30^BQR,2,10,H,10^FDQA,' + data.inventory.code + '^FS' + // QR code with inventory code
            '^FO30,300^CF0,30^FD' + data.inventory.code + '^FS' + // Display inventory code
            '^FO30,340^CF0,40^FD' + data.item.name + '^FS' + // Item description
            '^FO300,30^CF0,30^FD' + formatDateBarcode(data.inventory.purchase_at) + '^FS' + // Date and time
            '^CFA,30^FO300,70^FDGRADE^FS' + // Grade label
            '^CF0,160^FO300,110^FD' + data.item_grade.name + '^FS' + // Grade value
            '^CFA,30^FO710,70^FDBERAT(Kg)^FS' + // Weight label
            '^CF0,160^FO710,110^FD' + weight + '^FS' + // Weight value
            '^CF0,40^FO750,440^FD' + data.inventory.global_code + '^FS' + // Lot number
            '^CF0,40^FO30,470^FD' + data.supplier.name + '^FS' + // Press label
            '^CF0,40^FO30,520^FD' + data.inventory.bale_number + '^FS' + // Batch info
            // '^FO850,480^BY1,2,80^BCN,80,N,N,N^FD' + data.inventory.code + '^FS' + // Barcode with inventory code
            '^XZ'; // End of label
        defaultLabelPrinter = localStorage.getItem("defaultLabelPrinter") || '';
        if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open) {
            var cpj = new JSPM.ClientPrintJob();
            cpj.clientPrinter = new JSPM.InstalledPrinter(defaultLabelPrinter);
            // cpj.clientPrinter = new JSPM.BluetoothPrinter("60:95:32:23:E4:45", 1);
            cpj.printerCommands = cmds;
            cpj.sendToClient();

        }
    }
</script>