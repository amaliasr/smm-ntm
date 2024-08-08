<style>
    html {
        scroll-behavior: smooth;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    .nominal {
        text-align: right;
    }

    .text-grey {
        color: #D8D9CF;
    }

    .text-dark-grey {
        color: #B2B2B2;
    }

    .bg-grey {
        background-color: #EDEDED;
        color: #B2B2B2;
    }

    .bg-light-grey {
        background-color: #FAF7F0;
    }

    .text-random {
        color: #425F57;
    }

    .bg-random {
        background-color: #425F57;
    }

    /* .card-hoper:hover {
        background-color: #F7F7F7;
    } */

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }

    #profileImage {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 39px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .bg-ungu {
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
    }

    .bg-hijau {
        background: rgb(30, 121, 4);
        background: linear-gradient(66deg, rgba(30, 121, 4, 1) 0%, rgba(213, 232, 15, 1) 100%);
    }

    .bg-oren {
        background: rgb(208, 103, 58);
        background: linear-gradient(66deg, rgba(208, 103, 58, 1) 0%, rgba(233, 188, 51, 1) 100%);
    }

    .bg-merah {
        background: rgb(36, 0, 0);
        background: linear-gradient(90deg, rgba(36, 0, 0, 1) 0%, rgba(255, 46, 0, 1) 100%);
    }

    .card-hoper:hover {
        background-color: #EDEDED;
    }

    .dots-lead {
        display: flex;
    }

    .dots-lead::after {
        background-image: radial-gradient(circle, currentcolor 1px, transparent 1.5px);
        background-position: bottom;
        background-size: 1ex 4.5px;
        background-repeat: space no-repeat;
        content: "";
        flex-grow: 1;
        height: 1em;
        order: 2;
    }

    .gambar-miring {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
        opacity: 0.3;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-truck"></i></div>
                            Transaction
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <!-- <div class="col-auto">
                                    <div class="btn-group">
                                        <button class="btn btn-outline-light position-relative" type="button" id="dropdownMenuClickableOutside">
                                            <i class="fa fa-bell"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col mb-2 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-clock-o text-warning fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Pending</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahPending">0</b></h1>
                                        <!-- <p style="font-size: 11px;" class="mb-0">Done This Order</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2 ps-1 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-truck text-primary fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Delivered</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahDelivered">0</b></h1>
                                        <!-- <p style="font-size: 11px;" class="lh-sm mb-0">Orders are On The Way</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2 ps-1 pe-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-check text-success fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Checked</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahChecked">0</b></h1>
                                        <!-- <p style="font-size: 11px;" class="lh-sm mb-0">Orders are Unpaid</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2 ps-1">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 align-self-center text-center">
                                        <i class="fa fa-times text-danger fa-2x"></i>
                                    </div>
                                    <div class="col-9 align-self-center">
                                        <h6 class="fw-bold m-0">Canceled</h6>
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="jumlahCanceled">0</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="small"><b>List Surat Jalan</b></span>
                                    </div>
                                    <div class="col">
                                        <!-- <div class="btn-group float-end">
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                Option
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <h6 class="dropdown-header">Group By</h6>
                                                </li>
                                                <li><a class="dropdown-item" onclick="changeDetail('supplier')">Supplier <i class="ms-2 fa fa-check text-success" id="successSupplier"></i></a></li>
                                                <li><a class="dropdown-item" onclick="changeDetail('po')">PO <i class="ms-2 fa fa-check text-success d-none" id="successPO"></i></a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <form class="px-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="dropdownCheck2" checked>
                                                            <label class="form-check-label" for="dropdownCheck2">
                                                                Paid
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="dropdownCheck3" checked>
                                                            <label class="form-check-label" for="dropdownCheck3">
                                                                Unpaid
                                                            </label>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class="col-12 pt-4" id="tampilDetailSuratJalan">

                                    </div>
                                </div>

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
<!-- Modal -->
<div class="modal fade" id="modal3" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog3">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader3">

            </div>
            <div class="modal-body" id="modalBody3">

            </div>
            <div class="modal-footer" id="modalFooter3">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    function clearModal2() {
        $('#modalDialog2').removeClass();
        $('#modalDialog2').removeAttr('style');
        $('#modalHeader2').html('');
        $('#modalBody2').html('');
        $('#modalFooter2').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var data_suratjalan = ""

    // var qrcode = new QRCode("qrcode", {
    //     text: "http://jindo.dev.naver.com/collie",
    //     width: 128,
    //     height: 128,
    //     colorDark: "#000000",
    //     colorLight: "#ffffff",
    //     correctLevel: QRCode.CorrectLevel.H
    // });

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                getDataSJ()
            }
        })
    })

    function getDataSJ() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {
                var html = ""
                html += '<div class="card w-100 shadow-none mb-2 p-0">'
                html += '<div class="card-body p-2">'
                html += '<div class="row d-flex align-items-center">'
                html += '<div class="col text-center p-5">'
                html += '<i class="small">Memuat Data....</i>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                $('#tampilDetailSuratJalan').html(html)
            },
            success: function(response) {
                $('#tampilDetailSuratJalan').empty()
                data_suratjalan = response['data']
                // console.log(data_suratjalan)
                if (data_suratjalan != undefined) {
                    var pending = 0
                    var delivered = 0
                    var checked = 0
                    var canceled = 0
                    $.each(data_suratjalan, function(keys, values) {
                        $.each(JSON.parse(values['data_detail']), function(keys2, values2) {
                            if (values2['status_order'] == 'PENDING') {
                                pending++
                            }
                            if (values2['status_order'] == 'ON DELIVERY') {
                                delivered++
                            }
                            if (values2['status_order'] == 'CHECKED') {
                                checked++
                            }
                            if (values2['status_order'] == 'CANCEL') {
                                canceled++
                            }
                        })
                        $('#jumlahPending').html(pending)
                        $('#jumlahDelivered').html(delivered)
                        $('#jumlahChecked').html(checked)
                        $('#jumlahCanceled').html(canceled)
                        formListSJ(keys, data_suratjalan[keys], JSON.parse(values['data_detail']), JSON.parse(values['data_penerimaan']))
                    })
                } else {
                    var html = ""
                    html += '<div class="card w-100 shadow-none mb-2 p-0">'
                    html += '<div class="card-body p-2">'
                    html += '<div class="row d-flex align-items-center">'
                    html += '<div class="col text-center p-5">'
                    html += '<i class="small">Tidak Ada Data yang Tersedia</i>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    $('#tampilDetailSuratJalan').html(html)
                }
            }
        })
    }

    function formListSJ(keys, data, data_detail, data_terima) {
        background = ""
        check_success = "fa fa-truck text-grey"
        icon_profile = 'fa-truck'
        color_icon_profile = 'bg-ungu'
        if (data_detail[0]['status_order'] == 'DONE') {
            background = "bg-light"
            check_success = 'fa fa-check text-success'
            icon_profile = 'fa-check'
            color_icon_profile = 'bg-hijau'
        } else if (data_detail[0]['status_order'] == 'PENDING') {
            check_success = 'text-warning fa fa-exclamation-triangle'
            color_icon_profile = 'bg-oren'
            icon_profile = 'fa-clock-o'
        } else if (data_detail[0]['status_order'] == 'CANCEL') {
            background = "bg-light"
            check_success = 'fa fa-truck text-danger'
            icon_profile = 'fa-times'
            color_icon_profile = 'bg-merah'
        }
        var html = ""
        html += '<div class="card shadow-sm mb-2 w-100 card-hoper ' + background + '" id="card_search' + keys + '">'
        html += '<div class="card-body p-3">'
        html += '<div class="row">'
        html += '<div class="col-1 align-self-center">'
        html += '<div id="profileImage" class="' + color_icon_profile + '"><i class="fa ' + icon_profile + '"></i></div>'
        html += '</div>'
        html += '<div class="col-6 align-self-center">'
        html += '<p class="m-0 text-grey small" style="font-size:11px ;">Create at ' + data['date_transaction'] + '</p>'
        html += '<b class="text_search" data-id="' + keys + '" style="cursor: pointer;" onclick="detailSJ(' + "'" + data['no_sj'] + "'," + keys + ')">SJ #' + data['no_sj'] + '</b>'
        html += '<p class="m-0 mb-3 small lh-2" style="font-size: 11px;">No. PO <b class="text_search" data-id="' + keys + '">' + data['no_po'] + '</b></p>'
        html += '<p class="m-0 small lh-2 mb-2" style="font-size: 11px;"><i class="fa fa-gift"></i> ' + data_detail.length + ' Items from <b class="text_search" data-id="' + keys + '">' + data['supplier_name'] + '</b></p>'
        html += '</div>'
        html += '<div class="col-4">'
        html += '<p class="m-0 small text-grey" style="font-size:10px ;">Item</p>'
        if (data['category'] == null) {
            data['category'] = '-'
        }
        html += '<p class="m-0 small" style="font-size:12px ;"><b>' + data['category'] + '</b></p>'
        html += '<p class="m-0 small text-grey" style="font-size:10px ;">Status</p>'
        html += '<p class="m-0 small" style="font-size:12px ;"><b>' + data_detail[0]['status_order'] + '</b><span class="ms-2 ' + check_success + '"></span></p>'
        html += '</div>'
        html += '<div class="col-1 align-self-center">'
        html += '<button class="btn btn-sm float-end" onclick="toggleDropdown(' + keys + ')"><i class="fa fa-angle-down fa-2x" id="iconUp' + keys + '"></i></button>'
        html += '</div>'
        html += '</div>'
        html += '<div class="row mt-3 d-none" id="detailTransaction' + keys + '">'
        html += '<div class="col-12">'
        html += '<hr>'
        html += '</div>'
        html += '<div class="col-1">'

        html += '</div>'
        var status = 'text-grey'
        html += '<div class="col-3">'
        html += '<p class="m-0 mb-3" style="font-size: 11px;"><b>Tracking</b></p>'
        html += '<div class="timeline timeline-sm">'
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        // html += '<div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>'
        if (data_detail[0]['status_order'] == 'PROCESS' || data_detail[0]['status_order'] == 'ON DELIVERY' || data_detail[0]['status_order'] == 'CHECKED' || data_detail[0]['status_order'] == 'DONE' || data_detail[0]['status_order'] == 'PENDING') {
            status = 'bg-success text-white'
        } else {
            status = 'text-grey'
        }
        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">Ordered</div>'
        html += '</div>'
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        // html += '<div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>'
        if (data_detail[0]['status_order'] == 'ON DELIVERY' || data_detail[0]['status_order'] == 'CHECKED' || data_detail[0]['status_order'] == 'DONE' || data_detail[0]['status_order'] == 'PENDING') {
            status = 'bg-success text-white'
        } else {
            status = 'text-grey'
        }
        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">Delivered</div>'
        html += '</div>'
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        // html += '<div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>'
        if (data_detail[0]['status_order'] == 'CHECKED' || data_detail[0]['status_order'] == 'DONE' || data_detail[0]['status_order'] == 'PENDING') {
            status = 'bg-success text-white'
        } else {
            status = 'text-grey'
        }
        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa fa-check"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">Checked</div>'
        html += '</div>'
        html += '<div class="timeline-item">'
        html += '<div class="timeline-item-marker">'
        // html += '<div class="timeline-item-marker-text" style="white-space:normal;font-size:9px;">03/11/2022</div>'
        var icon = "fa-check"
        if (data_detail[0]['status_order'] == 'DONE') {
            status = 'bg-success text-white'
        } else if (data_detail[0]['status_order'] == 'PENDING') {
            status = 'bg-warning text-white'
            icon = 'fa-exclamation'
        } else {
            status = 'text-grey'
        }
        html += '<div class="timeline-item-marker-indicator ' + status + '"><i class="fa ' + icon + '"></i></div>'
        html += '</div>'
        html += '<div class="timeline-item-content" style="font-size: 11px;">Done</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '<div class="col-4 border-start">'
        html += '<p class="m-0 mb-3" style="font-size: 11px;"><b>Detail Item</b></p>'
        $.each(data_detail, function(keys, values) {
            var terima = data_terima.filter((value, key) => {
                if (value.item_id === values.item_id) return true
            })
            html += '<div class="row">'
            html += '<div class="col-2 p-2 text-center">'
            html += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-100 mx-auto d-block">'
            html += '</div>'
            html += '<div class="col-5 align-self-center ps-0">'
            html += '<p class="m-0 small" style="font-size:12px ;"><b>' + values['item_name'] + '</b></p>'
            html += '<p class="m-0 small float-start" style="font-size:10px ;">' + number_format(values['jumlah']) + ' ' + values['satuan_name'] + '</p>'
            html += '</div>'
            html += '<div class="col-5 align-self-center">'
            if (terima.length > 0) {
                var badge_qty = "bg-success"
                if (terima[0]['qty'] != values['jumlah']) {
                    badge_qty = 'bg-danger'
                }
                html += '<p class="m-0 small text-end text-success" style="font-size:12px ;"><i class="fa fa-check"></i> Checked <br><span class="badge ' + badge_qty + '">' + number_format(terima[0]['qty']) + ' ' + terima[0]['item_satuan'] + '</span></p>'
            } else {
                html += '<p class="m-0 small text-end text-grey" style="font-size:12px ;"><i class="fa fa-check"></i> Uncheck</p>'
            }
            html += '</div>'
            html += '</div>'
        })
        html += '</div>'
        html += '<div class="col-3 border-start text-center">'
        html += '<div class="qrcode" id="qrcode' + keys + '" style="text-align:center;" class="mt-3 mx-auto d-block w-100"></div>'

        // html += '<button type="button" class="btn btn-primary btn-sm mt-3" onclick="actionPerSJ()">Pengajuan Barang</button>'

        html += '</div>'
        html += '<div class="col-1">'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#tampilDetailSuratJalan').append(html)
        $('#qrcode' + keys).empty()
        var qrcode = new QRCode("qrcode" + keys, {
            text: "http://jindo.dev.naver.com/collie",
            width: 128,
            height: 128,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
        $(".qrcode > img").css({
            "margin": "auto"
        });
    }

    function toggleDropdown(keys) {
        var element = document.getElementById('detailTransaction' + keys).classList.contains('d-none');
        if (element == false) {
            // buka
            $('#detailTransaction' + keys).addClass('d-none')
            $('#iconUp' + keys).addClass('fa-angle-down')
            $('#iconUp' + keys).removeClass('fa-angle-up')
        } else {
            // tutup
            $('#detailTransaction' + keys).removeClass('d-none')
            $('#iconUp' + keys).removeClass('fa-angle-down')
            $('#iconUp' + keys).addClass('fa-angle-up')
        }
    }

    function actionPerSJ() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-md');
        var html_header = '';
        html_header += '<h5 class="modal-title">SJ #12345</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small p-5 pt-2">'
        html_body += '<div class="row">'
        html_body += '<p class="m-0 mb-2 small"><b>Action</b></p>'
        for (let i = 0; i < 3; i++) {
            html_body += '<div class="card shadow-none mb-1 small">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-2 border-end">'
            html_body += '<input class="form-check-input data_account" type="radio" name="data_account" id="radioAccount' + i + '" value="">'
            html_body += '</div>'
            html_body += '<div class="col-10">'
            html_body += '<label class="form-check-label" for="radioAccount' + i + '">'
            html_body += 'Barang Kurang'
            html_body += '</label>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<p class="m-0 mb-2 mt-2 small"><b>Jumlah Kekurangan</b></p>'
        for ($i = 0; $i < 4; $i++) {
            html_body += '<div class="row">'
            html_body += '<div class="col-2 p-2 text-center">'
            html_body += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-75 mx-auto d-block">'
            html_body += '</div>'
            html_body += '<div class="col-4 align-self-center ps-0">'
            html_body += '<p class="m-0 small" style="font-size:12px ;"><b>Nama Item</b> <i class="fa fa-check text-grey"></i></p>'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center p-0">'
            html_body += '<input type="text" name="" class="form-control form-control-sm p-1 nominal" value="" id="nominalPembayaran">'
            html_body += '</div>'
            html_body += '<div class="col-3 align-self-center text-start">'
            html_body += '<select name="" class="form-control select2-single form-control-sm w-100 " style="border:0" data-live-search="true" required="required">'
            html_body += '<option value="">Lembar</option>'
            html_body += '</select>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<div class="mt-3 text-center">'
        html_body += '<button class="btn btn-success w-100">Pengajuan Baru</button>'
        html_body += '<a class="small mt-1 text-grey" style="cursor:pointer;">Diterima saja</a>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.nominal').number(true);

        $('#modalFooter').addClass('d-none')
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
        html_body += '<div class="card shadow-sm">'
        html_body += '<div class="card-body p-2">'
        var detail = JSON.parse(data['data_detail'])
        var array = []
        $.each(detail, function(keys, values) {
            array.push(values['id_detail_order'])
            html_body += '<div class="row">'
            html_body += '<div class="col-3 p-2 text-center">'
            html_body += '<img src="<?= base_url() ?>assets/image/logo/box.png" class="w-50 mx-auto d-block">'
            html_body += '</div>'
            html_body += '<div class="col-5 align-self-center ps-0">'
            html_body += '<p class="m-0 small" style="font-size:12px ;"><b>' + values['item_name'] + '</b></p>'
            html_body += '<p class="m-0 small float-start" style="font-size:10px ;">' + values['jumlah'] + 'x</p>'
            html_body += '<p class="m-0 small float-end" style="font-size:10px ;">' + values['satuan_name'] + '</p>'
            html_body += '</div>'
            html_body += '</div>'
        })
        var stringArray = JSON.stringify(array)
        html_body += '</div>'
        html_body += '</div>'
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
                        getDataSJ()
                    }
                });
            }
        })
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
            $('#card_search' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search' + array_arranged[i]).removeClass('d-none')
        }
    }
</script>