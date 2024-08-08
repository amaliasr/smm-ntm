<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<main class="w-100" style="height: 100vh;">
    <div class="row h-100">
        <div class="col-4 border-end p-5 pt-0">
            <header class="page-header page-header-dark pb-5">
                <div class="container-xl">
                </div>
            </header>
            <!-- sisi kiri -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-dark fw-bolder m-0" style="font-weight: 700 !important"><span class="text-orange">L</span>OGISTIC <span class="text-orange">T</span>RACKING</h3>
                </div>
                <div class="col-12">
                    <p class="m-0 super-small-text">Tracking Order by Delivery Order (Surat Jalan)</p>
                </div>
                <div class="col-12 py-3">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control-sm form-control" placeholder="Cari Surat Jalan" id="search_nama" autocomplete="off">
                    </div>
                </div>
                <div class="col-12" id="listSuratJalan" style="max-height: 600px;overflow-x: hidden;overflow-y: auto;">
                </div>
            </div>
            <!-- sisi kiri -->
        </div>
        <div class="col-8 bg-light p-3" style="max-height: 800px;overflow-x: hidden;overflow-y: auto;">
            <!-- sisi kanan -->
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
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Info:">
                    <use xlink:href="#info-fill" />
                </svg>
                <div>
                    <p class="m-0 small-text">Pilih Surat Jalan Terlebih Dahulu pada Panel sebelah kiri untuk membuka detail dan melakukan aksi lainnya</p>
                </div>
            </div>
            <!-- detail surat jalan -->
            <div id="cardDetail">
            </div>
            <!-- detail surat jalan -->
            <!-- history -->
            <div class="card shadow-none w-100">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-auto align-self-center">
                            <p class="m-0 fw-bold small-text fw-bolder">History This Month</p>
                        </div>
                        <div class="col-12">
                            <div class="table-responsible mt-4" id="dataTable">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- history -->
            <!-- sisi kanan -->
        </div>
    </div>
    <!-- <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <div class="container-xl mt-n10">
        <div class="row mb-4">
            <div class="col-8">
                <div class="row">
                    <div class="col-1 align-self-center text-center">
                        <img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/maps.svg" alt="Icon" />
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <h1 class="text-dark fw-bolder m-0" style="font-weight: 700 !important"><span class="text-orange">T</span>RACKING <span class="text-orange">O</span>RDER</h1>
                        </div>
                        <div class="col-12">
                            <p class="m-0 super-small-text">Tracking Order by Delivery Order (Surat Jalan). You can manage all orders with their details and Tracking with Timeline</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end">
                <button type="button" class="btn btn-sm shadow-none btn-outline-dark" onclick="refresh()"><i class="fa fa-refresh"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-none">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
    var data_history = []
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    var data_user = []
    var costCenterStatus = false
    var costCenterNTMId = 23
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
        showOverlay('show')
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
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
                data_user = response['data']
                loadData()
            }
        })
    }

    function loadData() {
        $.ajax({
            url: "<?= api_url('loadPageShipmentReceive'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                userId: user_id
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
                // showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_pending = response['data'].shipmentPending
                data_history = response['data'].receiveHistory
                listSuratJalan()
            }
        })
    }

    function listSuratJalan() {
        var html = ''
        var a = 0
        data_pending.forEach(e => {
            html += '<div class="card shadow-none pointer card-hoper mb-1 btn-card" id="btn-card' + a + '" onclick="clickedCardDetail(' + "'" + e.no_sj + "'" + ',' + a + ')">'
            html += '<div class="card-body py-3">'
            html += '<div class="row">'
            html += '<div class="col-10 align-self-center">'
            html += '<p class="m-0 small-text text_search" data-id="' + a + '">' + formatDateIndonesia(e.send_at) + '</p>'
            html += '<p class="m-0 lh-1 small fw-bolder">#<span class="text_search" data-id="' + a + '">' + e.no_sj + '</span></p>'
            html += '</div>'
            html += '<div class="col-2 text-end align-self-center">'
            html += '<i class="fa fa-chevron-right fa-1x text-grey"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            a++
        });
        $('#listSuratJalan').html(html)
        kerangkaHistory()
    }

    function refresh() {
        showOverlay('show')
        ajaxPO()
    }

    function clickedCardDetail(surat_jalan, key) {
        $('.btn-card').removeClass('bg-light')
        $('#btn-card' + key).addClass('bg-light')
        cardDetail(surat_jalan)
    }

    function getDateStringWithTime2(orginaldate) {
        var date = new Date(orginaldate);
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();
        if (detik < 10) {
            detik = "0" + detik;
        }
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        if (day < 10) {
            day = "0" + day;
        }
        switch (month) {
            case 1:
                month = "Jan";
                break;
            case 2:
                month = "Feb";
                break;
            case 3:
                month = "Mar";
                break;
            case 4:
                month = "Apr";
                break;
            case 5:
                month = "May";
                break;
            case 6:
                month = "Jun";
                break;
            case 7:
                month = "Jul";
                break;
            case 8:
                month = "Aug";
                break;
            case 9:
                month = "Sep";
                break;
            case 10:
                month = "Oct";
                break;
            case 11:
                month = "Nov";
                break;
            case 12:
                month = "Dec";
                break;
        }
        var date = day + " " + month + " " + year + ' ' + jam + ":" + menit;
        return date;
    }

    function cardDetail(surat_jalan) {
        var data = data_pending.find(x => x.no_sj == surat_jalan)
        var html = ''
        html += '<div class="card shadow-none w-100 mb-2">'
        html += '<div class="card-header bg-white">'
        html += '<div class="row justify-content-between">'
        html += '<div class="col-auto align-self-center">'
        html += '<p class="m-0 text-dark-grey">Surat Jalan : <span class="text-dark fw-bolder" id="idSuratJalan">#' + data.no_sj + '</span><span class="ms-2 fa fa-copy pointer" onclick="copyToClipboard(' + "'" + data.no_sj + "'" + ')"></span></p>'
        html += '</div>'
        html += '<div class="col-auto align-self-center">'
        html += '<span class="badge bg-outline-grey p-2 px-3 small rounded-pill me-2">Pending</span>'
        html += '<button class="btn btn-sm btn-success rounded-pill small shadow-none p-2 px-3" id="btnCheckIn" onclick="cariSuratJalan(' + "'" + data.no_sj + "'" + ')">Check In</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card-body p-0">'
        html += '<div class="row">'
        html += '<div class="col-12 py-1 px-4">'
        // timeline'
        html += '<div class="timeline-steps aos-init aos-animate" data-aos="fade-up">'
        html += '<div class="timeline-step">'
        html += '<div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="">'
        html += '<div class="inner-circle-success"><i class="fa fa-check text-white"></i></div>'
        html += '<p class="small-text mt-2 mb-1 fw-bolder">Create PO</p>'
        html += '<p class="small-text lh-1 text-muted mb-0 mb-lg-0">' + getDateStringWithTime2(data.po.datetime) + '</p>'
        html += '</div>'
        html += '</div>'
        html += '<div class="timeline-step">'
        html += '<div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="">'
        html += '<div class="inner-circle-success"><i class="fa fa-check text-white"></i></div>'
        html += '<p class="small-text mt-2 mb-1 fw-bolder">Create Surat Jalan</p>'
        html += '<p class="small-text lh-1 text-muted mb-0 mb-lg-0">' + getDateStringWithTime2(data.send_at) + '</p>'
        html += '</div>'
        html += '</div>'
        html += '<div class="timeline-step">'
        html += '<div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="">'
        html += '<div class="inner-circle"><i class="fa fa-check text-white"></i></div>'
        html += '<p class="small-text mt-2 mb-1 fw-bolder">Checked</p>'
        html += '<p class="small-text lh-1 text-muted mb-0 mb-lg-0">--</p>'
        html += '</div>'
        html += '</div>'
        html += '<div class="timeline-step">'
        html += '<div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="">'
        html += '<div class="inner-circle"><i class="fa fa-check text-white"></i></div>'
        html += '<p class="small-text mt-2 mb-1 fw-bolder">Done</p>'
        html += '<p class="small-text lh-1 text-muted mb-0 mb-lg-0">--</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // timeline'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<hr class="m-0">'
        html += '</div>'
        html += '<div class="col-12 py-3 px-5">'
        html += '<div class="row justify-content-start my-2 ms-1">'
        html += '<div class="col">'
        html += '<p class="m-0 small-text fw-bolder text-blue-grey"><i class="fa fa-truck me-2"></i>Send Information</p>'
        html += '<div class="row mt-3">'
        html += '<div class="col-12 pb-2">'
        html += '<p class="m-0 small-text text-dark-grey">PO ID</p>'
        html += '<p class="m-0 small-text fw-bolder">' + data.po.no_po + '</p>'
        html += '</div>'
        html += '<div class="col-12 pb-2">'
        html += '<p class="m-0 small-text text-dark-grey">Note</p>'
        if (!data.po.note) {
            data.po.note = '-'
        }
        html += '<p class="m-0 small-text fw-bolder">' + data.po.note + '</p>'
        html += '</div>'
        html += '<div class="col-12 pb-2">'
        html += '<p class="m-0 small-text text-dark-grey">Created Date</p>'
        html += '<p class="m-0 small-text fw-bolder">' + formatDateIndonesia(data.po.datetime) + '</p>'
        html += '</div>'
        html += '<div class="col-12 pb-2">'
        html += '<p class="m-0 small-text text-dark-grey">Created By</p>'
        html += '<p class="m-0 small-text fw-bolder">' + data.employee_sender.name + '</p>'
        html += '</div>'

        html += '</div>'
        html += '</div>'

        html += '<div class="col-9">'
        html += '<p class="m-0 small-text fw-bolder text-blue-grey"><i class="fa fa-dropbox me-2"></i>Items & Request Information</p>'
        html += '<div class="row mt-3">'
        html += '<div class="col-12">'
        html += '<div class="table-responsive">'
        html += '<table class="table table-sm table-bordered table-hover w-100">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" rowspan="2">No</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" rowspan="2">Items</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" colspan="2">Quantity</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" rowspan="2">Unit</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" rowspan="2">PR ID</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" rowspan="2">Cost<br>Center</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light" rowspan="2">Status</th>'
        html += '</tr>'
        html += '<tr>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light">Terima</th>'
        html += '<th class="align-middle super-small-text text-center p-1 bg-light">Kirim</th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody>'
        var a = 1
        data.pengiriman_details.forEach(e => {
            // console.log(e)
            if (e.cost_center.id == costCenterNTMId) {
                costCenterStatus = true
            }
            var icon = '<i class="fa fa-truck text-grey"></i>'
            var bg = ''
            if (e.state != 'ON DELIVERY') {
                bg = 'bg-success-light'
                icon = '<i class="fa fa-check text-success"></i>'
            }
            html += '<tr>'
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2">' + a++ + '</td>'
            html += '<td class="' + bg + ' align-middle super-small-text p-2">' + e.item.name + '</td>'
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2">-</td>'
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2">' + number_format(e.qty) + '</td>'
            var dataUnit = e.unit_option.find(x => x.is_default == 1)
            if (!dataUnit) {
                dataUnit = e.unit_option[0]
            }
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2">' + dataUnit.name + '</td>'
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2 under-hover fw-bolder pointer" onclick="linkToDetail(' + e.pr.id + ')">' + e.pr.code + '</td>'
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2">' + e.cost_center.name + '</td>'
            html += '<td class="' + bg + ' align-middle super-small-text text-center p-2">' + icon + '</td>'
            html += '</tr>'
        });
        html += '</tbody>'
        html += '</table>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#cardDetail').html(html)
    }

    function copyToClipboard(sj) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(sj).select();
        document.execCommand("copy");
        $temp.remove();
    }

    function linkToDetail(idPr) {
        var url = '<?= base_url() ?>order/detailPR/' + idPr
        window.open(url, '_blank')
    }

    function linkToDetailPO(idPo) {
        var url = '<?= base_url() ?>order/detailPO/' + idPo
        window.open(url, '_blank')
    }

    function kerangkaHistory() {
        var html = ''
        html += '<table class="table table-hover table-sm small w-100" style="overflow-x: hidden;" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '<tr class="py-2">'
        html += '<th class="align-middle small-text" style="background-color: white;">#</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">SJ ID</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">PO ID</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Receive At</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Receive By</th>'
        html += '<th class="align-middle small-text" style="background-color: white;">Item</th>'
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
        var html_popover = {}
        data_history.forEach(e => {
            html += '<tr>'
            html += '<td class="align-middle text-center small-text" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="align-middle text-center small-text" style="background-color: white;">' + e.no_sj + '</td>'
            html += '<td class="align-middle text-center small-text under-hover fw-bolder pointer" style="background-color: white;" onclick="linkToDetailPO(' + e.po_id + ')">' + e.no_po + '</td>'
            html += '<td class="align-middle text-center small-text" style="background-color: white;">' + getDateTime(e.receive_at) + '</td>'
            html += '<td class="align-middle text-center small-text" style="background-color: white;">' + shortenName(e.employee_receiver.name, 2) + '</td>'
            html += '<td class="align-middle text-center small-text pointer" style="background-color: white;" id="popoverHover' + e.id + '" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Item List">'
            html += '<span class="badge bg-grey me-1">' + shortenText(e.penerimaan_details[0].item.name, 20) + '</span>'
            if (e.penerimaan_details.length > 1) {
                html += '<span class="badge bg-grey me-1">+' + (parseInt(e.penerimaan_details.length) - 1) + '</span>'
            }
            html += '</td>'
            html += '</tr>'
            if (!html_popover[e.id]) {
                html_popover[e.id] = ''
            }
            e.penerimaan_details.forEach(el => {
                html_popover[e.id] += '<p class="m-0 small-text">' + el.item.name + ' <span class="fw-bolder">( ' + el.qty + ' ' + el.unit.name + ')</span></p>'
            });
        });
        $('#bodyTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            paging: false,
            searching: false,
        })
        data_history.forEach(e => {
            var popoverTriggerEl = document.getElementById('popoverHover' + e.id)
            var popover = new bootstrap.Popover(popoverTriggerEl, {
                placement: 'bottom', // Menentukan posisi popover
                trigger: 'hover focus', // Menentukan trigger popover (dalam contoh ini, hover)
                html: true,
                content: html_popover[e.id],
                customClass: 'custom-popover',
            });
        });
        $('#cardDetail').html('')
    }
    var data_sj = []
    var data_key

    // function cariSuratJalan(surat_jalan) {
    //     $.ajax({
    //         url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
    //         method: "GET",
    //         dataType: 'JSON',
    //         data: {
    //             no_sj: surat_jalan
    //         },
    //         error: function(xhr) {
    //             $('#btnCheckIn').html('Check In').removeAttr('disabled', true);
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'Oops...',
    //                 text: 'Error Data'
    //             })
    //         },
    //         beforeSend: function() {
    //             $('#btnCheckIn').html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading...').attr('disabled', true);
    //         },
    //         success: function(response) {
    //             $('#btnCheckIn').html('Check In').removeAttr('disabled', true);
    //             if (response['data']) {
    //                 data_sj = response['data']
    //                 if (data_sj.length > 1) {
    //                     modalSJMulti()
    //                 } else {
    //                     data_key = 0
    //                     $('#modal').modal('show')
    //                     modalPencarianSJ(response['data'][0], 0)
    //                 }
    //             }
    //         }
    //     })
    // }

    function cariSuratJalan(surat_jalan) {
        data_sj = data_pending.find(x => x.no_sj == surat_jalan)
        $('#modal').modal('show')
        modalPencarianSJ(data_sj)
    }

    function modalSJMulti() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Surat Jalan Terkait</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        $.each(data_sj, function(key, value) {
            let obj = JSON.parse(value['data_detail']).filter((value, key) => {
                if (value.status_order === 'ON DELIVERY') return true
            }).length;
            html_body += '<div class="col-12">'
            var check = "text-light"
            if (obj > 0) {
                html_body += '<div class="card shadow-none mb-2" style="cursor:pointer;" onclick="formPencarianSJKey(' + key + ')">'
            } else {
                check = 'text-success'
                html_body += '<div class="card shadow-none mb-2 bg-light">'
            }
            html_body += '<div class="card-body">'

            html_body += '<div class="row">'
            html_body += '<div class="col-6">'
            html_body += '<p class="m-0" style="font-size:10px;"><i class="fa fa-clock-o"></i> : ' + value['date_transaction_detail'] + '</p>'
            html_body += '<b style="font-size:16px;" class="mb-3">' + value['no_sj'] + '</b>'
            html_body += '<p class="m-0" style="font-size:11px;">NO. PO : <span class="fw-bold">' + value['no_po'] + '</span></p>'
            html_body += '<p class="m-0" style="font-size:11px;">Supplier : <span class="fw-bold">' + value['supplier_name'] + '</span></p>'
            html_body += '</div>'
            html_body += '<div class="col-6">'
            html_body += '<b style="font-size:11;">Item :</b>'
            $.each(JSON.parse(value['data_detail']), function(keys, values) {
                html_body += '<p class="m-0" style="font-size:11px;"><i class="fa fa-check ' + check + ' me-2"></i>' + values['item_name'] + ' (' + values['jumlah'] + ')</p>'
            })
            html_body += '</div>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>'
        $('#modalFooter').html(html_footer);
    }

    // function formPencarianSJKey(key) {
    //     data_key = key
    //     modalPencarianSJ(data_sj[key], key)
    // }

    function modalPencarianSJ(data) {
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered').removeClass('modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Check In</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12" id="tampilSuratJalan">'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>'
        $('#modalFooter').html(html_footer);
        formPencarianSJ(data)
    }

    function formPencarianSJ(data) {
        let obj = data['pengiriman_details'].filter((value, key) => {
            if (value.status_order == 'DONE' || value.status_order == 'PENDING') return true
        }).length;
        var html = ""
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<div id="profileImage"><i class="fa fa-truck"></i></div>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0">Surat Jalan <b class="m-0">#' + data['no_sj'] + '</b></p>'
        if (costCenterStatus) {
            html += '<p class="m-0">Supplier <b class="m-0">' + data.supplier.name + '</b></p>'
        }
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-header py-2">'
        html += '<div class="d-flex bd-highlight">'
        html += '<p class="m-0 bd-highlight me-auto text-dark" style="font-size: 11px;"><b>Detail Item</b></p>'
        html += '<span class="m-0 bd-highlight fa fa-print text-dark" style="cursor:pointer;" onclick="cetakPenerimaan(' + "'" + data['supplier_name'] + "'," + "'" + data['no_sj'] + "'" + ')"></span>'
        html += '</div>'
        html += '</div>'
        html += '<div class="card-body">'
        var dataPengiriman = data['pengiriman_details'].filter((v, k) => {
            if (!v.is_complete) return true
        })
        $.each(dataPengiriman, function(keys, values) {
            var converted = ''
            var checkSatuan = values.unit_option.find((v, k) => {
                if (v.id == values.unit.id) return true
            })
            var satuanTerkecil = values.unit_option.find((v, k) => {
                if (v.is_default == 1) return true
            })
            if (!checkSatuan.is_default) {
                eval(`var total = parseFloat(values.qty) ${checkSatuan.operator_reverse} checkSatuan.multiplier`)
                converted = '<span class="ms-1">= ' + number_format(total) + ' ' + satuanTerkecil.name + '</span>'
            }

            html += '<div class="row">'
            html += '<div class="col-1 pt-1 text-center align-self-top">'
            html += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-100 mx-auto d-block">'
            html += '</div>'
            html += '<div class="col-4 align-self-top ps-0">'
            html += '<p class="m-0 small-text"><b>' + values.item.name + '</b></p>'
            html += '<p class="m-0 super-small-text">' + values.qty + ' <span>' + values.unit.name + '</span>' + converted + '</p>'
            html += '<button class="btn btn-outline-success btn-sm shadow-none" style="font-size:7px;padding:2px !important" onclick="salinInput(' + values.qty + ',' + keys + ')"><i class="fa fa-copy me-1"></i>Salin</button>'
            html += '</div>'
            if (obj == 0) {
                html += '<div class="col-3 ps-0 pe-0 text-end">'
                html += '<input type="text" name="" class="form-control form-control-sm border-radius-20 py-1 px-2 nominal jumlahMasuk" id="jumlahMasuk' + keys + '" data-key="' + keys + '" data-jumlah="' + values.qty + '" data-item="' + values.item.id + '" data-satuan="' + values.unit.id + '" data-order="' + values.id + '" data-date="' + "'" + values.date_transaction + "'" + '" autocomplete="off" placeholder="0" oninput="convertOption()">'
                html += '<p class="m-0 mt-1" style="font-size:10px;" id="convertedFill' + keys + '"></p>'
                html += '</div>'
                html += '<div class="col-4">'
                html += '<select name="" id="satuanSelect' + keys + '" class="form-select form-select-sm border-radius-20 satuanSelect" required="required" onchange="convertOption()">'
                $.each(values.unit_option, function(key, value) {
                    var select = ''
                    if (value.id == values.unit.id) {
                        select = 'selected'
                    }
                    html += '<option value="' + value['id'] + '" ' + select + '>' + value['name'] + '</option>'
                })
                html += '</select>'
                html += '</div>'
            }
            html += '</div>'
            if (keys < dataPengiriman.length - 1) {
                html += '<div class="row">'
                html += '<div class="col-12">'
                html += '<hr>'
                html += '</div>'
                html += '</div>'
            }
        })

        html += '</div>'
        html += '</div>'
        html += '<div class="card shadow-sm mb-2">'
        html += '<div class="card-header py-2">'
        html += '<p class="m-0 text-dark fw-bolder small">Customize</p>'
        html += '</div>'
        html += '<div class="card-body">'
        html += '<div class="row">'
        if (obj == 0 && costCenterStatus) {
            html += '<div class="col">'
            html += '<p class="m-0 mb-3" style="font-size: 11px;"><b>User Terima</b></p>'
            html += '<select name="" id="user_checking" class="form-select form-select-sm border-radius-20" required="required">'
            html += '<option value="" disabled selected>Pilih User</option>'
            $.each(data_user, function(key, value) {
                var select = ''
                if (value['id'] == user_id) {
                    select = 'selected'
                }
                html += '<option value="' + value['id'] + '" ' + select + '>' + value['name'] + '</option>'
            })
            html += '</select>'
            html += '</div>'
        }
        html += '<div class="col">'
        html += '<p class="m-0 mb-3" style="font-size: 11px;"><b>Tanggal Terima</b></p>'
        html += '<input class="form-control form-control-sm tanggalTerima datepicker mb-2 border-radius-20 px-2" value="' + currentDate() + '">'
        html += '</div>'
        html += '<div class="col">'
        html += '<p class="m-0 mb-3" style="font-size: 11px;"><b>Jam Terima</b></p>'
        html += '<input type="time" class="form-control form-control-sm jamTerima mb-2 border-radius-20 px-2 py-1" value="' + formatJamMenit(currentDateTime()) + '">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="mt-2">'
        if (obj == 0) {
            html += '<button class="btn btn-success w-100 border-radius-20" id="btnChecked" onclick="checkDataArrived(' + data.po.id + ',' + data['id'] + ',' + "'" + data['no_sj'] + "'" + ')">Selesaikan Pengecekan</button>'
        } else {
            html += '<button class="btn btn-outline-success w-100" disabled>Anda telah melakukan pengecekan</button>'
        }
        html += '</div>'
        $('#tampilSuratJalan').html(html)
        $('.nominal').number(true, 2);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });
        if (obj == 0) {
            convertOption()
        }
    }

    function convertOption() {
        var key = $('.jumlahMasuk').map(function() {
            return $(this).data('key');
        }).get();
        var order = $('.jumlahMasuk').map(function() {
            return $(this).data('order');
        }).get();
        var jumlah = $('.jumlahMasuk').map(function() {
            return $(this).data('jumlah');
        }).get();
        var valueJumlah = $('.jumlahMasuk').map(function() {
            return $(this).val();
        }).get();
        var satuan = $('.jumlahMasuk').map(function() {
            return $(this).data('satuan');
        }).get();
        for (let i = 0; i < key.length; i++) {
            var data = convertReturn(i, order, key, valueJumlah)
            $('#convertedFill' + key[i]).html(number_format(data.total) + ' ' + data.satuanTerkecilName)
        }
    }

    function convertReturn(i, order, key, valueJumlah) {
        var data = data_sj.pengiriman_details.find((v, k) => {
            if (v.id == order[i]) return true
        })
        var idSatuanSeelct = $('#satuanSelect' + key[i]).val()
        var checkSatuan = data.unit_option.find((v, k) => {
            if (v.id == idSatuanSeelct) return true
        })
        var satuanTerkecil = data.unit_option.find((v, k) => {
            if (v.is_default == 1) return true
        })
        if (!valueJumlah[i]) {
            valueJumlah[i] = 0
        }
        eval(`var total = parseFloat(valueJumlah[i]) ${checkSatuan.operator_reverse} checkSatuan.multiplier`)
        return {
            total: total,
            satuanTerkecilName: satuanTerkecil.name,
            satuanTerkecilId: satuanTerkecil.id,
        }
    }

    function cetakPenerimaan(supplier, no_sj) {
        var url = '<?= base_url('order/cetakPenerimaan') ?>'
        var params = "*$" + btoa(no_sj) + "*$" + btoa(data_sj['pengiriman_details']) + "*$" + btoa(supplier)
        window.open(url + '?params=' + (params), '_blank')
    }

    function salinInput(jumlah, key) {
        $('#jumlahMasuk' + key).val(jumlah)
        convertOption()
    }

    var any_anomali = 0
    $(document).on('keyup', '.jumlahMasuk', function(e) {
        var key = $(this).data('key')
        var jumlah = $(this).data('jumlah')
        if (parseFloat(jumlah) == parseFloat($('#jumlahMasuk' + key).val())) {
            any_anomali = 0
            $('#checkItem' + key).removeClass('d-none')
            $('#warningItem' + key).addClass('d-none')
        } else {
            any_anomali = 1
            $('#checkItem' + key).addClass('d-none')
            $('#warningItem' + key).removeClass('d-none')
        }
    })

    function checkDataArrived(po_id, pengiriman_id, no_sj) {
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
        var key = $('.jumlahMasuk').map(function() {
            return $(this).data('key');
        }).get();
        var date_transaction = $('.jumlahMasuk').map(function() {
            return $(this).data('date');
        }).get();
        var item_sampel = $('.itemSampel').map(function() {
            return $(this).val();
        }).get();
        var satuan_sampel = $('.itemSampel').map(function() {
            return $(this).find(':selected').data('satuan');
        }).get();
        var jumlah_sampel = $('.jumlahSampel').map(function() {
            return $(this).val();
        }).get();
        var check_sampel = $('.checkStockSampel').map(function() {
            if ($('.checkStockSampel:checked').val() == 'BAD') {
                return 'BAD'
            } else {
                return 'GOOD'
            }
        }).get();
        var detail = []
        var detail_sampel = []
        var jumlahDiterima = 0
        for (let i = 0; i < jumlah.length; i++) {
            var data = convertReturn(i, order, key, jumlah)
            if (data.total) {
                detail.push({
                    'id_detail_order': order[i],
                    'jumlah_barang': data.total,
                    'id_satuan': data.satuanTerkecilId,
                    'id_item': item[i],
                    'date_transaction': date_transaction[i],
                    'employee_id_recheiver': user_id,
                    'recheived_at': currentDateTime()
                })
                jumlahDiterima++
            }
        }
        for (let i = 0; i < jumlah_sampel.length; i++) {
            detail_sampel.push({
                'item_sampel': item_sampel[i],
                'satuan_sampel': satuan_sampel[i],
                'jumlah_sampel': jumlah_sampel[i],
                'check_sampel': check_sampel[i],
            })
        }
        var id_user_checking = $('#user_checking').val()
        var date_received = $('.tanggalTerima').val() + ' ' + $('.jamTerima').val() + ':00'
        var type = 'POST'
        var data = {
            id_users: user_id,
            pengiriman_id: pengiriman_id,
            no_sj: no_sj,
            po_id: po_id,
            id_user_checking: id_user_checking,
            detail: detail,
            detail_sampel: detail_sampel,
            date_received: date_received,
        }
        var button = '#btnChecked'
        var url = '<?php echo api_url('Api_Warehouse/insertPenerimaan'); ?>'
        // console.log(data)
        if (jumlahDiterima) {
            Swal.fire({
                text: 'Apakah Anda Yakin Ingin Menerima ' + jumlahDiterima + ' item ?',
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
            Swal.fire({
                icon: 'error',
                title: 'Data Terima Item Kosong Semua',
                text: 'Isi data item yang diterima terlebih dahulu'
            });
        }
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
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((responses) => {
                        $('#modal').modal('hide')
                        showOverlay('show')
                        loadData()
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
    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching() {
        var value = $('#search_nama').val().toLowerCase();
        var cards = $('.text_search').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#btn-card' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#btn-card' + array_arranged[i]).removeClass('d-none')
        }
    }
</script>