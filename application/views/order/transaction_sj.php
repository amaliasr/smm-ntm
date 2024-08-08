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
                    <div class="col-2 align-self-center text-center pe-0">
                        <img class="" style="width: 30px;" src="<?= base_url() ?>assets/image/svg/maps.svg" alt="Icon" />
                    </div>
                    <div class="col-10 ps-0">
                        <div class="col-12">
                            <h1 class="text-dark lh-1 fw-bolder mb-2" style="font-weight: 700 !important"><span class="text-orange">T</span>RACKING <span class="text-orange">O</span>RDER</h1>
                        </div>
                        <div class="col-12">
                            <p class="m-0 lh-1 super-small-text">Tracking Order by Delivery Order (Surat Jalan)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end">
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
    var data_suratjalan = ""
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
                ajaxSJ()
            }
        })
    }

    function refresh() {
        showOverlay('show')
        ajaxSJ()
    }
    var data_sj_showed = []

    function ajaxSJ() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
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
                data_suratjalan = response['data']
                if (!data_suratjalan) {
                    data_suratjalan = []
                }
                data_sj_showed = data_suratjalan.filter((v, k) => {
                    if (v.date_transaction_detail <= date_end && v.date_transaction_detail >= date_start) return true
                })
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
        var data = data_suratjalan.filter((v, k) => {
            if (v.date_transaction_detail <= date_end && v.date_transaction_detail >= date_start) return true
        })
        return data
    }

    function countAllData() {
        return chooseDataAllData().length
    }


    function chooseDataPending() {
        var data = data_suratjalan.filter((v, k) => {
            var detail = JSON.parse(v.data_detail)
            if (detail[0].status_order == 'PENDING') return true
        })
        return data
    }

    function countPending() {
        return chooseDataPending().length
    }

    function chooseDataCanceled() {
        var data = data_suratjalan.filter((v, k) => {
            var detail = JSON.parse(v.data_detail)
            if (detail[0].status_order == 'REJECTED' || detail[0].status_order == 'CANCEL') return true
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
        data_sj_showed = eval(getData)
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
        html += '<th class="align-middle small" style="background-color: white;">Date</th>'
        html += '<th class="align-middle small" style="background-color: white;">SJ ID</th>'
        html += '<th class="align-middle small" style="background-color: white;">PO ID</th>'
        html += '<th class="align-middle small" style="background-color: white;">Supplier</th>'
        html += '<th class="align-middle small" style="background-color: white;">Category</th>'
        html += '<th class="align-middle small" style="background-color: white;">Items</th>'
        html += '<th class="align-middle small" style="background-color: white;">Status</th>'
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ''
        var a = 1
        res = {}
        itemYangSisa = []
        $.each(data_sj_showed, function(keys, values) {
            var detail = JSON.parse(values.data_detail)
            var acc_check
            var badge = ""
            var bg = ""
            var btnPO = ""
            var textPO = "text-light"
            var textAcc = ""
            var checkStatusDocument = ''
            var bgRow = ''
            if (detail[0].status_order == 'DONE') {
                badge = '<span class="badge rounded-pill bg-success"><i class="fa fa-check"></i></span>'
                bg = 'bg-light'
                checkStatusDocument = '<i class="fa fa-check text-success ms-1"></i>'
                textAcc = "text-success"
                bgRow = 'bg-light'
            } else if (detail[0].status_order == 'REJECTED' || detail[0].status_order == 'CANCEL') {
                badge = '<span class="badge rounded-pill bg-danger"><i class="fa fa-times"></i></span>'
                bg = 'bg-light'
                textPO = 'text-light'
                checkStatusDocument = '<i class="fa fa-times text-danger ms-1"></i>'
                textAcc = "text-danger"
                bgRow = 'bg-light-danger'
            }

            html += '<tr>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + formatDateNormal(values['date_transaction']) + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2 fw-bolder pointer under-hover" style="background-color: white;" onclick="detailSJ(' + "'" + values['no_sj'] + "'," + keys + ')">' + values['no_sj'] + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + values['no_po'] + '</td>'
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + values['supplier_name'] + '</td>'
            if (!values['category']) {
                values['category'] = ''
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2" style="background-color: white;">' + values['category'] + '</td>'
            var jumlahItem = ''
            if (detail.length > 0) {
                jumlahItem = '<span class="badge bg-outline-dark pointer fw-bolder" style="background-color:none !important">' + detail.length + '</span>'
            }
            html += '<td class="' + bgRow + ' text-center small p-2 align-middle py-2" style="background-color: white;">' + jumlahItem + '</td>'
            var textColor = 'text-grey'
            if (detail[0].status_order == 'REJECTED' || detail[0].status_order == 'CANCEL') {
                textColor = 'text-danger'
            } else if (detail[0].status_order == 'DONE') {
                textColor = 'text-success'
            }
            html += '<td class="' + bgRow + ' text-center small-text align-middle py-2 ' + textColor + '" style="background-color: white;">' + detail[0].status_order + ' ' + checkStatusDocument + '</td>'
            html += '</tr>'
        })
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
        var data = data_suratjalan.find(x => x.po_id == id)['data_detail']
        var data_parent = data_suratjalan.find(x => x.po_id == id)
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
            var data_parent = data_suratjalan.find(x => x.po_id == po_id)
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
        var data = data_suratjalan.find(x => x.po_id == po_id)['data_detail']
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

    function detailSJ(no_sj, keys) {
        var data = data_suratjalan[keys]
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">SJ #' + no_sj + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small p-5 pt-2">'
        html_body += '<div class="row">'
        html_body += '<p class="m-0 p-0 small">Surat Jalan <b>#' + data['no_sj'] + '</b></p>'
        html_body += '<p class="m-0 p-0 mb-2 small">Supplier <b>' + data['supplier_name'] + '</b></p>'
        var detail = JSON.parse(data['data_detail'])
        var detailPenerimaan = JSON.parse(data['data_penerimaan'])
        var array = []
        $.each(detail, function(keys, values) {
            // var checkPenerimaan = detailPenerimaan.find(x => x.po_id == id)
            array.push(values['id_detail_order'])
            html_body += '<div class="card shadow-none rounded-pill mb-2">'
            html_body += '<div class="card-body p-2">'
            html_body += '<div class="row">'
            html_body += '<div class="col-2 p-3 text-center align-self-center">'
            html_body += '<img src="<?= base_url() ?>assets/image/svg/truck-load.svg" style="width: 25px;" class="mx-auto d-block">'
            html_body += '</div>'
            html_body += '<div class="col-10 align-self-center ps-0">'
            html_body += '<p class="m-0 super-small-text fw-bolder"">' + values['item_name'] + '</p>'
            html_body += '<p class="m-0 small-text float-start">' + number_format(values['jumlah']) + ' ' + values['satuan_name'] + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        var stringArray = JSON.stringify(array)
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = ""
        var state = "PROCESS"
        var text = '<i class="fa fa-paper-plane-o me-2"></i> Process'
        if (detail[0]['status_order'] == 'PROCESS') {
            text = '<i class="fa fa-truck me-2"></i> Deliver'
            state = "ON DELIVERY"
        } else if (detail[0]['status_order'] == 'ON DELIVERY') {
            text = '<i class="fa fa-check me-2"></i> Check'
            state = 'CHECKED'
        } else if (detail[0]['status_order'] == 'CHECKED') {
            text = '<i class="fa fa-paper-plane-o me-2"></i> Finish it'
            state = 'DONE'
        } else if (detail[0]['status_order'] == 'PENDING') {
            text = '<i class="fa fa-paper-plane-o me-2"></i> Finish it'
            state = 'DONE'
        } else if (detail[0]['status_order'] == 'DONE') {

        }
        if (detail[0]['status_order'] != 'DONE') {
            html_footer += '<button type="button" class="btn btn-success w-100" onclick="approvalSJ(' + "'" + state + "'" + ',' + "'" + stringArray + "'" + ')">' + text + '</button>'
            html_footer += '<span class="small mx-auto d-block text-danger" style="cursor:pointer;font-size:12px;">Pembatalan Surat Jalan</span>'
        } else {
            html_footer += '<span class="small mx-auto d-block text-grey"><i>Surat Jalan ini telah selesai</i></span>'
        }
        $('#modalFooter').html(html_footer);
        $('#modalFooter').removeClass('d-none')
    }

    function approvalSJ(state, id) {
        Swal.fire({
            text: 'Apakah anda yakin ingin melanjutkan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Lanjut'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_url('Api_Warehouse/updateStateSJ'); ?>',
                    type: 'POST',
                    data: {
                        order_detail_id: JSON.parse(id),
                        state: state
                    },
                    success: function(response) {
                        $('#modal').modal('hide')
                        Swal.fire(
                            'Berhasil!',
                            'success'
                        )
                        refresh()
                    }
                });
            }
        })
    }
</script>