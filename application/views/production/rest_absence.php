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

    .card-hoper:hover {
        background-color: #F7F7F7;
    }

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }

    #profileImage {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 39px;
        vertical-align: middle;
        margin: 0 auto;
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

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .bg-super-grey {
        background-color: #F7F7F7;
    }

    .is-select-picker {
        background-color: white !important;
        border: 1px solid #c5ccd6 !important;
        text-align: left !important;
    }

    .formFilter {
        border-radius: 20px;
        width: 200px;
        padding-left: 30px;
        padding: 10px;
        padding-right: 45px;
    }

    .is-select-picker {
        border-radius: 20px !important;
        width: 200px !important;
        padding-left: 30px !important;
        padding: 10px !important;
        padding-right: 45px !important;
    }

    .border-radius-20 {
        border-radius: 20px;
    }

    #tableDetail_length,
    #tableDetail_info {
        display: none;
    }

    .dataTables_filter {
        margin-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_paginate {
        float: none;
        text-align: center;
    }

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px !important;
        border: 1px solid #dce0e6 !important;
    }

    .vertical-line {
        border-left: 3px dotted #b2b0b0;
        height: 15px;
        margin: 0 auto;
    }

    .v-zone {
        /* display: flex; */
        padding-left: 20px;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .start-10 {
        left: 10% !important;
    }

    .bd-callout-warning {
        border-left-color: #FF9843 !important;
    }

    .border-lunch {
        border-color: #fce7d7 !important;
    }

    .border-mosque {
        border-color: #d4d6e2 !important;
    }

    .bg-dark-lunch {
        background-color: #F6B17A !important;

    }

    .bg-dark-mosque {
        background-color: #7077A1 !important;

    }

    .bg-break-1 {
        background-color: #7077A1 !important;
    }

    .bg-break-2 {
        background-color: #F6B17A !important;
    }


    .bd-callout {
        padding: 1.25rem;
        margin-top: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #e9ecef;
        border-left-width: 0.25rem;
        border-radius: 0.25rem;
    }

    .start-90 {
        left: 90% !important;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


<main class="bg-purples">
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-between mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">Break Time Attendance</h1>
                <p class="m-0 small">Absensi Istirahat untuk Pekerja Giling</p>
            </div>
            <div class="col-auto align-self-center">
                <div class="row">
                    <div class="col-auto text-end" id="textAutoSave">
                    </div>
                    <div class="col-auto text-end" id="loadingSave" hidden>
                    </div>
                    <div class="col-auto" hidden id="saveField">
                        <button class="btn btn-outline-primary btn-sm"><i class="fa fa-eye me-2"></i>View</button>
                        <button class="btn btn-primary btn-sm" id="btnSimpan" onclick="autoSaveData()"><i class="fa fa-save me-2"></i>Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-4 border-end p-5">
                                <div class="row">
                                    <div class="col-12 pt-3 text-center">
                                        <p class="m-0 small" id="dateCurrent"></p>
                                        <lottie-player style="margin:auto;" src="<?= base_url() ?>assets/json/scan_barcode.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control rounded-pill form-leave" style="text-align: center;" tabindex="1" role="dialog" placeholder="ID Pekerja" id="codeQR" autocomplete="off" onblur="this.focus()" autofocus>
                                        <button class="mt-2 w-100 btn btn-primary rounded-pill" onclick="changeScanner()"><i class="fa fa-search me-2"></i>Cari</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="bd-callout bd-callout-warning super-small-text">
                                            Pastikan text scanner berada pada isi kolom diatas. Jika scanner sedang dalam masalah, anda dapat mengetikkan ID Pekerja kemudian klik <b>Cari</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 p-5" id="kerangkaIsi">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <p class="m-0 small fw-bolder">Belum Kembali (<span id="jumlahBelumKembali">-</span>)</p>
                        <div class="mt-3" id="dataBelumKembaliLebih">

                        </div>
                        <div class="mt-3 mb-2">
                            <input type="text" class="form-control form-control-sm shadow-none mt-3" placeholder="Search" id="search_nama" autocomplete="off" placeholder="Cari Nama" onclick="offBlurWhenModalOn(),this.focus()" onblur="onBlurWhenModalOff()">
                        </div>
                        <div class="pt-2 pe-2" style="height: 500px;overflow-x: hidden;overflow-y: auto;" id="dataBelumKembali">
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
<script src="<?= base_url(); ?>assets/js/easytimer.min.js"></script>

<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function notFoundReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function empty(location, text, height = null) {
        if (!height) {
            height = '100%'
        }
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
        $('#codeQR').val('')
        isClickedRest = false
    }
    // var codeQRInput = $('#codeQR');
    // codeQRInput.on('blur', handleBlurEvent);

    // function handleBlurEvent() {
    //     if ($('#modal').hasClass('show')) {
    //         $('#modal').focus();
    //     } else {
    //         codeQRInput.focus();
    //     }
    // }

    $('#modal').on('hidden.bs.modal', function(e) {
        // codeQRInput.on('blur', handleBlurEvent);
        // codeQRInput.focus();
        clearModal();
        onBlurWhenModalOff()
    })
    $('#modal').on('shown.bs.modal', function() {
        //     codeQRInput.off('blur', handleBlurEvent);
        //     $('#modal').focus();
        offBlurWhenModalOn()
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_user = ""
    var notes = ''
    var current_date = currentDate()
    var master_break = {
        istirahat: 60,
    }
    var scannedEid = null
    var dataSave = {
        leavePassLog: [],
        deletedId: {
            leavePassLog: [],
        }
    }
    var firstAccess = true
    var insertMode = true

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function createCodeId(id = '') {
        var code = id + '' + (new Date).getTime()
        return code;
    }
    $(document).ready(function() {
        $('#dateCurrent').html(formatDateIndonesia(currentDate()))
        $('#kerangkaIsi').html(emptyReturn('Anda Belum Melakukan Scanning'))
        loadData()
    })

    function loadData(ifAuto = null) {
        data_user = ''
        $.ajax({
            url: "<?= api_produksi('loadPageEmployeeLeavePass'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                // date: '2024-01-01',
                date: currentDate(),
            },
            error: function(xhr) {
                if (firstAccess) {
                    showOverlay('hide')
                }
                // Swal.fire({
                //     icon: 'error',
                //     title: 'Oops...',
                //     text: 'Error Data'
                // });
            },
            beforeSend: function() {
                if (firstAccess) {
                    showOverlay('show')
                }
            },
            success: function(response) {
                if (firstAccess) {
                    showOverlay('hide')
                }
                data_user = response['data']
                firstAccess = false
                arrangeVariable(ifAuto)
            }
        })
    }
    var data_detail = []

    function arrangeVariable(ifAuto) {
        var data = deepCopy(data_user.employeeLeavePass)
        if (dataSave.leavePassLog.length) {
            deepCopy(dataSave.leavePassLog).forEach(e => {
                var datetime_out = null
                var minutes_usage = null
                var is_over = 0
                var minutes_over = 0
                if (e.datetime_out) {
                    datetime_out = e.datetime_out
                    minutes_usage = e.minutes_usage
                    is_over = e.is_over
                    minutes_over = e.minutes_over
                }
                var dataTemplate = {
                    id: e.id,
                    employee_id: e.employee_id,
                    leave_pass_type_id: e.leave_pass_type_id,
                    datetime_in: e.datetime_in,
                    datetime_out: datetime_out,
                    minutes_usage: minutes_usage,
                    is_over: is_over,
                    minutes_over: minutes_over,
                    employee_id_check: e.employee_id_check,
                }
                var dataAsliFiltered = data.filter((v, k) => {
                    if (v.id == e.employee_id) return true
                })
                if (!dataAsliFiltered[0].data_leave) {
                    dataAsliFiltered[0].data_leave = []
                    dataAsliFiltered[0].data_leave.push(dataTemplate)
                } else {
                    var checkDataLeave = dataAsliFiltered[0].data_leave.filter((v, k) => {
                        if (v.id == e.id) return true
                    })
                    if (checkDataLeave.length) {
                        // jika ada sebelumnya
                        dataAsliFiltered[0].data_leave = dataAsliFiltered[0].data_leave.filter((v, k) => {
                            if (v.id != e.id) return true
                        })
                        dataAsliFiltered[0].data_leave.push(dataTemplate)
                    } else {
                        // jika tidak ada
                        dataAsliFiltered[0].data_leave.push(dataTemplate)
                    }
                }
            });
        }
        // console.log(data)
        data_user.employeeLeavePass = deepCopy(data)
        data_detail = []
        data_user.employeeLeavePass.forEach(e => {
            if (e.data_leave) {
                e.data_leave.forEach(el => {
                    var dataBreak = data_user.leavePassType.find((v, k) => {
                        if (v.id == el.leave_pass_type_id) return true
                    })
                    data_detail.push({
                        id: e.id,
                        eid: e.eid,
                        name: e.name,
                        row_code: e.row_code,
                        id_leave: el.id,
                        leave_pass_type_id: el.leave_pass_type_id,
                        leave_pass_type_name: dataBreak.name,
                        leave_pass_type_icon: dataBreak.icon,
                        datetime_in: el.datetime_in,
                        datetime_out: el.datetime_out,
                        minutes_usage: el.minutes_usage,
                        is_over: el.is_over,
                        minutes_over: el.minutes_over,
                        employee_id_check: el.employee_id_check,

                    })
                });
            }
        });
        if (scannedEid) {
            findIDPekerja(scannedEid, ifAuto)
        }
        dataBelumKembali()
    }

    function sisaWaktu(eid, id_break) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        var dataBreak = data_user.leavePassType.find((v, k) => {
            if (v.id == id_break) return true
        })
        // console.log(id_break)
        if (dataBreak.minutes_max) {
            // ISTIRAHAT
            var dataReturn = dataBreak.minutes_max
            if (!data.data_leave) {
                dataReturn = dataBreak.minutes_max
            } else {
                // rumus
                var totalMinutes = findTotalMinutes(data.data_leave)
                if (totalMinutes > dataBreak.minutes_max) {
                    dataReturn = 0
                } else {
                    dataReturn = parseInt(dataBreak.minutes_max) - parseInt(totalMinutes)
                }
            }
        } else {
            // IBADAH
            var dataReturn = dataBreak.freq_max
            if (!data.data_leave) {
                dataReturn = dataBreak.freq_max
            } else {
                // rumus
                var totalFreq = findTotalFreq(data.data_leave)
                if (totalFreq > dataBreak.freq_max) {
                    dataReturn = 0
                } else {
                    dataReturn = parseInt(dataBreak.freq_max) - parseInt(totalFreq)
                }
            }
        }
        return dataReturn
    }

    function findTotalMinutes(data) {
        var total = 0
        data.forEach(e => {
            if (!e.minutes_usage) {
                e.minutes_usage = 0
            }
            if (e.leave_pass_type_id == 2) {
                total = total + parseInt(e.minutes_usage)
            }
        });
        return total
    }

    function findTotalFreq(data) {
        var total = 0
        data.forEach(e => {
            if (e.leave_pass_type_id == 1) {
                total++
            }
        });
        return total
    }

    function sisaFreq(eid, id_break) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        var dataBreak = data_user.leavePassType.find((v, k) => {
            if (v.id == id_break) return true
        })
        var dataReturn = 0
        if (!data.data_leave) {
            dataReturn = dataBreak.freq_max
        } else {
            // rumus
        }
        return dataReturn
    }

    function hitungMinutesOver(minutes_max, input, eid, jenisIstirahat) {
        var data = 0
        var sisaWaktuSebelumnya = 0
        if (minutes_max == null) {
            // IBADAH
            data = 0
            var sisa = sisaWaktu(eid, jenisIstirahat)
            if (sisa <= 0) {
                data = 1
            }
        } else {
            // ISTIRAHAT
            if (input > minutes_max) {
                data = parseFloat(input) - parseInt(minutes_max)
            }
            if (eid) {
                var sisa = sisaWaktu(eid, jenisIstirahat)
                if (sisa <= 0) {
                    // jika sudah tidak ada sisa waktu
                    data = input
                }
            }
        }
        return data
    }

    function hitungMinutesOverAll(minutes_max, input, eid, jenisIstirahat, data_leave, datetime_out) {
        var data = {
            'jumlah': 0,
            'status': 0,
        }
        var sisaWaktuSebelumnya = 0
        if (minutes_max == null) {
            // IBADAH
            data.jumlah = 0
            data.status = 0
            var sisa = sisaWaktu(eid, jenisIstirahat)
            if (sisa <= 0) {
                data.jumlah = 1
                data.status = 1
            }
        } else {
            // ISTIRAHAT
            var total_menit = 0
            var total_overtime = 0
            data_leave.forEach(e => {
                if (e.datetime_out) {
                    total_menit = total_menit + e.minutes_usage
                    total_overtime = total_overtime + e.minutes_over
                } else {
                    total_menit = total_menit + selisihMenit(datetime_out, e.datetime_in)
                }
            });
            if (total_menit > minutes_max) {
                data.jumlah = total_menit - (total_overtime + parseInt(minutes_max))
                data.status = 1
            }
        }
        return data
    }

    $(document).on('keypress', '#codeQR', function(e) {
        if (event.keyCode === 13) {
            changeScanner()
        }
    })

    function checkNotLong(kelas) {
        var value = $('.' + kelas).map(function() {
            return $(this).val();
        }).get();
        var stillNormal = true
        for (let i = 0; i < value.length; i++) {
            if (value[i].length > 12) {
                stillNormal = false
            }
        }
        return stillNormal
    }

    var scannedId

    function changeScanner() {
        if ($('#codeQR').val()) {
            if (checkNotLong('form-leave')) {
                isClickedRest = false
                scannedId = $('#codeQR').val()
                showrestMode(scannedId)
                findIDPekerja(scannedId)
            } else {
                $('#codeQR').val('')
                Swal.fire({
                    icon: 'error',
                    title: 'Terlalu Panjang',
                    text: 'Data yang dimasukkan Terlalu Panjang'
                });
            }
        }
    }

    function findIDPekerja(eid, ifAuto = null) {
        scannedEid = eid
        var dataMaster = deepCopy(data_user.employeeLeavePass)
        var dataFilter = dataMaster.find((v, k) => {
            if (v.eid == eid) return true
        })
        kerangkaIsi(dataFilter, ifAuto)
    }

    function kerangkaIsi(data, ifAuto = null) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="m-0">' + data.eid + '</p>'
        html += '<p class="m-0 fw-bolder lh-1" style="font-weight: 900 !important;font-size:30px;">' + data.name.toUpperCase() + '</p>'
        html += '<p class="m-0 fw-bold">Sisa Waktu Istirahat : <span class="fw-bolder text-orange">' + sisaWaktu(data.eid, 2) + '</span> Menit</p>'
        html += '<div class="row mt-3">'
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center p-3">'
        html += '<p class="m-0 fw-bolder super-small-text">TOTAL<br>ISTIRAHAT</p>'
        html += '<p class="m-0" style="font-weight: 900 !important;font-size:30px;" id="totalIstirahat">0</p>'
        html += '<p class="m-0 fw-bolder super-small-text">Menit</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center p-3">'
        html += '<p class="m-0 fw-bolder super-small-text">TOTAL<br>IBADAH</p>'
        html += '<p class="m-0" style="font-weight: 900 !important;font-size:30px;" id="totalIbadah">0</p>'
        html += '<p class="m-0 fw-bolder super-small-text">Menit</p>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center p-3">'
        html += '<p class="m-0 fw-bolder super-small-text">TOTAL<br>SEMUA</p>'
        html += '<p class="m-0" style="font-weight: 900 !important;font-size:30px;" id="totalSemua"></p>'
        html += '<p class="m-0 fw-bolder super-small-text">Menit</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-3">'
        html += '<div class="card shadow-sm mb-3">'
        html += '<div class="card-body text-center p-3">'
        html += '<p class="m-0 fw-bolder super-small-text">WAKTU<br>OVERTIME</p>'
        html += '<p class="m-0 text-danger" style="font-weight: 900 !important;font-size:30px;" id="waktuOvertime">0</p>'
        html += '<p class="m-0 fw-bolder super-small-text">Menit</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12">'
        html += '<p class="m-0 small fw-bolder">Detail Waktu</p>'
        html += '<div class="mt-2 pe-2" style="height: 250px;overflow-x: hidden;overflow-y: auto;" id="detailWaktu">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#kerangkaIsi').html(html)
        collectInformation(data.eid)
        if (!ifAuto) {

        }
    }

    function collectInformation(eid) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        informationBox(data)
        // alertStillBreak(data)
        detailWaktu(data)
    }

    function showrestMode(eid) {
        var dataMaster = data_user.employeeLeavePass
        var data = null
        if (dataMaster) {
            data = deepCopy(dataMaster).find((v, k) => {
                if (v.eid == eid) return true
            })
        }
        if (data) {
            if (!data.data_leave) {
                // jika leave nya null (belum pernah istirahat)
                chooseRest(data.id)
            } else {
                var dataLeave = data.data_leave.find((v, k) => {
                    if (!v.datetime_out) return true
                })
                if (dataLeave) {
                    // jika ada yang belum checkout
                    stopRest(data.id, dataLeave)
                } else {
                    chooseRest(data.id)
                }
            }
        } else {
            $('#codeQR').val('')
            Swal.fire({
                icon: 'error',
                title: 'Data Tidak Ditemukan, Scan Ulang',
                text: 'Coba Lagi'
            });
        }
    }

    function detailWaktu(data) {
        var html = ''
        if (data.data_leave) {
            data.data_leave.forEach(e => {
                var dataBreak = data_user.leavePassType.find((v, k) => {
                    if (v.id == e.leave_pass_type_id) return true
                })
                html += '<div class="card shadow-none mb-2 border-' + dataBreak.icon.toLowerCase() + '">'
                html += '<div class="card-body p-0">'
                html += '<div class="row p-0 m-0 w-100">'

                html += '<div class="col-2 p-3 align-self-center bg-dark-' + dataBreak.icon.toLowerCase() + ' text-center" style="border-bottom-left-radius: 0.35rem;border-top-left-radius: 0.35rem;">'
                if (!e.minutes_usage) {
                    e.minutes_usage = 0
                }
                html += '<p class="m-0 lh-1 text-white fw-bolder small">' + e.minutes_usage + '</p>'
                html += '<p class="m-0 lh-1 text-white super-small-text">Menit</p>'
                html += '</div>'

                html += '<div class="col p-2 ps-3 align-self-center">'
                html += '<p class="m-0 lh-1 fw-bolder">Waktu ' + toTitleCase(dataBreak.name) + '</p>'
                if (e.datetime_out) {
                    var textMinutes = formatJamMenit(e.datetime_in) + ' - ' + formatJamMenit(e.datetime_out)
                } else {
                    var textMinutes = formatJamMenit(e.datetime_in) + ' - ???'
                }
                html += '<p class="m-0 fw-bold lh-1  super-small-text">' + textMinutes + '</p>'
                html += '</div>'

                html += '<div class="col p-2 pe-3 align-self-center text-end">'
                if (e.is_over) {
                    html += '<i class="text-danger small-text">Overtime</i>'
                }
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'
            });
        } else {
            html += '<div class="row h-100">'
            html += '<div class="col-12">'
            html += emptyTextReturn('Belum ada Data Istirahat')
            html += '</div>'
            html += '</div>'
        }
        $('#detailWaktu').html(html)
    }

    function informationBox(data) {
        $('#totalIstirahat').html(totalIstirahat(data.eid))
        $('#totalIbadah').html(totalIbadah(data.eid))
        $('#totalSemua').html(parseInt(totalIstirahat(data.eid)) + parseInt(totalIbadah(data.eid)))
        $('#waktuOvertime').html(waktuOvertime(data.eid))
    }

    function totalIstirahat(eid) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        var total = 0
        if (data.data_leave) {
            data.data_leave.forEach(e => {
                if (e.leave_pass_type_id == 2) {
                    if (!e.minutes_usage) {
                        e.minutes_usage = 0
                    }
                    total = total + parseInt(e.minutes_usage)
                }
            });
        }
        return total
    }

    function totalIbadah(eid) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        var total = 0
        if (data.data_leave) {
            data.data_leave.forEach(e => {
                if (e.leave_pass_type_id == 1) {
                    if (!e.minutes_usage) {
                        e.minutes_usage = 0
                    }
                    total = total + parseInt(e.minutes_usage)
                }
            });
        }
        return total
    }

    function waktuOvertime(eid) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        var total = 0
        if (data.data_leave) {
            data.data_leave.forEach(e => {
                if (!e.minutes_over) {
                    e.minutes_over = 0
                }
                total = total + parseInt(e.minutes_over)
            });
        }
        return total
    }

    function alertStillBreak(data) {
        var html = ''
        if (data.data_leave) {
            html += '<div class="col-12">'
            html += '<div class="alert alert-danger p-3" role="alert">'
            html += '<div class="row justify-content-between">'
            html += '<div class="col-auto">'
            html += 'Sedang <b>Istirahat</b>'
            html += '<p class="m-0 super-small-text">Dari pukul 09.00</p>'
            html += '</div>'
            html += '<div class="col-auto align-self-center">'
            // html += '<button class="btn btn-sm btn-danger">Stop</button>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        }
        $('#alertStillBreak').html(html)
    }

    var idnya
    var idSaved
    var isClickedRest = false

    function chooseRest(id) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.id == id) return true
        })
        idSaved = ''
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Istirahat</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        var a = 1;
        data_user.leavePassType.forEach(e => {
            html_body += '<div class="col">'
            html_body += '<div class="card card-hoper shadow-none border-none pointer h-100 bg-break-' + e.id + '" style="border-radius:20px;" onclick="saveBreak(' + "'" + id + "'" + ',' + "'" + e.id + "'" + ')">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'
            html_body += '<div class="col-12 text-center">'
            html_body += '<p class="fw-bolder text-white h1">Ketik ' + a++ + '</p>'
            html_body += '<img src="<?= base_url() ?>assets/image/svg/' + e.icon + '.svg" style="width: 50%">'
            html_body += '<h1 class="m-0 fw-bolder text-white lh-1 mt-5" style="font-weight: 900 !important;font-size:50px;">' + e.name + '</h1>'
            if (e.minutes_max) {
                html_body += '<h5 class="m-0 fw-bolder text-white lh-1">SISA WAKTU : ' + sisaWaktu(data.eid, e.id) + ' MENIT</h5>'
            }
            if (e.freq_max) {
                html_body += '<h5 class="m-0 fw-bolder text-white lh-1">SISA : ' + sisaWaktu(data.eid, e.id) + ' KALI</h5>'
            }

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        });
        html_body += '</div>'
        $('#modalBody').html(html_body)
        $('#modalFooter').addClass('d-none');
        idnya = id

    }
    $(document).on('keypress', function(event) {
        // Check if the modal is still shown (has the 'show' class)
        if ($('#modal').hasClass('show')) {
            if (!idSaved) {
                idSaved = idnya
                // Check if the key pressed is '1' (key code 49)
                if (event.which == 49) {
                    saveBreak(idnya, 2)
                } else if (event.which == 50) {
                    saveBreak(idnya, 1)
                }
            }
        }
    });
    // $(document).on('keypress', function(e) {
    //     // Periksa kode tombol
    //     switch (e.which) {
    //         case 49: // Tombol 1 (Angka 1)
    //             saveBreak(idnya, 2)
    //             break;
    //         case 50: // Tombol 2 (Angka 2)
    //             saveBreak(idnya, 1)
    //             break;
    //             // Tambahkan case lain sesuai kebutuhan
    //     }
    // });

    function stopRest(id, dataLeave) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.id == id) return true
        })
        var dataBreak = data_user.leavePassType.find((v, k) => {
            if (v.id == dataLeave.leave_pass_type_id) return true
        })
        var datetime_out = currentDateTime()
        var selisih = selisihMenit(getDateTime(dataLeave.datetime_in), datetime_out)
        var minutesOver = hitungMinutesOverAll(dataBreak.minutes_max, selisih, data.eid, dataLeave.leave_pass_type_id, data.data_leave, datetime_out)
        var textOver = 'Telah melakukan ' + dataBreak.name + ' selama ' + selisih + ' menit'
        var icon = 'success'
        if (minutesOver.status == 1) {
            // terlambat
            textOver = 'Anda terlambat ' + dataBreak.name + ' dengan akumulasi keterlambatan ' + minutesOver.jumlah + ' menit'
            icon = 'error'
        }
        offBlurWhenModalOn()
        Swal.fire({
            title: "Checkin " + data.name,
            icon: icon,
            html: textOver,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: true,
            confirmButtonText: 'Yes !',
        }).then((result) => {
            onBlurWhenModalOff()
            // if (result.isConfirmed) {
            insertMode = false
            isClickedRest = false
            saveBreak(id, dataLeave.leave_pass_type_id, dataLeave.id)
            // }
        });
        // let timerIntervalSwal;
        // Swal.fire({
        //     title: data.name,
        //     html: "Telah Checkout Istirahat",
        //     timer: 500,
        //     timerProgressBar: true,
        //     didOpen: () => {},
        //     willClose: () => {
        //         clearInterval(timerIntervalSwal);
        //     }
        // }).then((result) => {
        //     if (result.dismiss === Swal.DismissReason.timer) {
        //         insertMode = false
        //         isClickedRest = false
        //         saveBreak(id, dataLeave.leave_pass_type_id, dataLeave.id)
        //     }
        // });
    }

    function selisihMenit(datetime1, datetime2) {
        // Mengonversi string datetime menjadi objek Date
        const date1 = new Date(datetime1);
        const date2 = new Date(datetime2);

        // Menghitung selisih waktu dalam milidetik
        const selisihMilidetik = Math.abs(date2 - date1);

        // Menghitung selisih menit
        const selisih = Math.floor(selisihMilidetik / (1000 * 60));

        return selisih;
    }


    function saveBreak(employee_id, jenisIstirahat, id_leave = null) {
        var dataUser = data_user.employeeLeavePass.find((v, k) => {
            if (v.id == employee_id) return true
        })
        if (id_leave) {
            actionSaveBreak(employee_id, jenisIstirahat, id_leave)
        } else {
            var sisa = sisaWaktu(dataUser.eid, jenisIstirahat)
            if (sisa <= 0) {
                // var dataBreak = data_user.leavePassType.find((v, k) => {
                //     if (v.id == jenisIstirahat) return true
                // })
                // Swal.fire({
                //     text: 'Jam ' + toTitleCase(dataBreak.name) + ' Sudah Habis, Apakah tetap ingin melanjutkan ?',
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#3085d6',
                //     cancelButtonColor: '#d33',
                //     confirmButtonText: 'Ya',
                //     cancelButtonText: 'Batal',
                // }).then((result) => {
                //     if (result.isConfirmed) {}
                // })
                actionSaveBreak(employee_id, jenisIstirahat, id_leave)
            } else {
                actionSaveBreak(employee_id, jenisIstirahat, id_leave)
            }
        }
    }

    function actionSaveBreak(employee_id, jenisIstirahat, id_leave = null) {
        if (isClickedRest == false) {
            if (id_leave) {
                // edit (closing)
                var dataUser = data_user.employeeLeavePass.find((v, k) => {
                    if (v.id == employee_id) return true
                })
                var dataUserLeave = dataUser.data_leave.find((v, k) => {
                    if (v.id == id_leave) return true
                })
                var dataBreak = data_user.leavePassType.find((v, k) => {
                    if (v.id == dataUserLeave.leave_pass_type_id) return true
                })
                var datetime_out = currentDateTime()
                var selisih = selisihMenit(getDateTime(dataUserLeave.datetime_in), datetime_out)
                var minutesOver = hitungMinutesOverAll(dataBreak.minutes_max, selisih, dataUser.eid, jenisIstirahat, dataUser.data_leave, datetime_out)
                var data = {
                    id: id_leave,
                    employee_id: employee_id,
                    leave_pass_type_id: jenisIstirahat,
                    datetime_in: getDateTime(dataUserLeave.datetime_in),
                    datetime_out: datetime_out,
                    minutes_usage: selisih,
                    is_over: minutesOver.status,
                    minutes_over: minutesOver.jumlah,
                    employee_id_check: user_id,
                }
                if (notes) {
                    data['note'] = notes
                }
            } else {
                isClickedRest = true
                // tambah
                var idLeave = createCodeId(employee_id)
                var data = {
                    id: idLeave,
                    employee_id: employee_id,
                    leave_pass_type_id: jenisIstirahat,
                    datetime_in: currentDateTime(),
                    employee_id_check: user_id,
                    minutes_over: 0,
                }
            }
            console.log(data)
            dataSave.leavePassLog.push(data)
        }
        ifDataEmpty()
        afterSaveBreak()
    }

    function sisaWaktuSimpan(eid, id_break) {
        var data = data_user.employeeLeavePass.find((v, k) => {
            if (v.eid == eid) return true
        })
        var dataBreak = data_user.leavePassType.find((v, k) => {
            if (v.id == id_break) return true
        })
        // console.log(id_break)
        if (dataBreak.minutes_max) {
            // ISTIRAHAT
            var dataReturn = dataBreak.minutes_max
            if (!data.data_leave) {
                // jika leva nya belum ada sebelumnya
                dataReturn = dataBreak.minutes_max
            } else {
                // rumus
                var totalMinutes = findTotalMinutes(data.data_leave)
                if (totalMinutes > dataBreak.minutes_max) {
                    dataReturn = 0
                } else {
                    // jika total menit kurang dari max
                    dataReturn = parseInt(dataBreak.minutes_max) - parseInt(totalMinutes)
                }
            }
        }
        return dataReturn
    }

    function afterSaveBreak() {
        $('#modal').modal('hide')
        $('#codeQR').val('')
        $('#codeQR').focus();
        notes = ''
        arrangeVariable()
    }
    setInterval(autoSaveData, 60 * 1000);
    setInterval(loadData, 5 * 60 * 1000);

    function autoSaveData() {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setLeavePassLog'); ?>'
        if (dataSave.leavePassLog.length) {
            var data = deepCopy(dataSave)
            kelolaData(data, type, url, button)
        }
    }

    function currentTimeTitikDua() {
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

    function textAutoSave() {
        var html = ''
        html += '<p class="m-0 small-text fw-bolder"><i>Telah Disimpan Otomatis</i></p>'
        html += '<p class="m-0 super-small-text"><i>Terakhir Simpan ' + currentTimeTitikDua() + '</i></p>'
        return html
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                $(button).prop("disabled", false)
                $('#loadingSave').prop("hidden", true)
            },
            beforeSend: function() {
                $(button).prop("disabled", true)
                $('#loadingSave').prop("hidden", false)
            },
            success: function(response) {
                var dataToDelete = deepCopy(data.leavePassLog)
                let newData = deepCopy(dataSave.leavePassLog).slice();
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                dataSave.leavePassLog = newData
                $(button).prop("disabled", false)
                $('#loadingSave').prop("hidden", true)
                $('#textAutoSave').prop("hidden", false).html(textAutoSave())
                ifDataEmpty()
                loadData(1)
            }
        });
    }

    function ifDataEmpty() {
        if (dataSave.leavePassLog.length) {
            $('#saveField').prop("hidden", false)
        } else {
            $('#saveField').prop("hidden", true)
        }
    }

    var timer = new easytimer.Timer();
    timer.start();

    timer.addEventListener('secondsUpdated', function(e) {
        dataBelumKembali()
    });

    function dataBelumKembali() {
        var html = ''
        var a = 0
        var overTime = []
        data_detail.forEach(e => {
            if (!e.datetime_out) {
                var selisih = selisihMenit(e.datetime_in, currentDateTime())
                html += '<div class="card shadow-none mb-2 pointer card-hoper" onclick="forceStopRest(' + "'" + e.eid + "'" + ',' + "'" + e.id_leave + "'" + ')" id="card_search' + a + '">'
                html += '<span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-dark-' + e.leave_pass_type_icon.toLowerCase() + ' super-small-text">' + selisih + ' menit</span>'
                html += '<div class="card-body p-3">'
                html += '<div class="row justify-content-between">'

                html += '<div class="col-auto align-self-center">'
                html += '<p class="m-0 fw-bold super-small-text">No. Meja <span class="text_search" data-id="' + a + '">' + e.row_code + '</span></p>'
                html += '<p class="m-0 fw-bolder small text_search" data-id="' + a + '">' + shortenText(e.name, 20) + '</p>'
                html += '<p class="m-0 lh-1 fw-bold small-text">Waktu ' + toTitleCase(e.leave_pass_type_name) + '</p>'
                html += '</div>'

                html += '<div class="col-auto align-self-center">'
                html += '<p class="m-0 small">' + formatJamMenit(e.datetime_in) + '</p>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'
                if (selisih > 60) {
                    overTime.push(e)
                }
                a++
            }
        });
        if (!a) {
            html += emptyTextReturn('Tidak Ada')
        }
        $('#jumlahBelumKembali').html(a)
        $('#dataBelumKembali').html(html)
        overtimeData(overTime)
        searching()
    }

    function overtimeData(data) {
        var html = ''
        data.forEach(e => {
            var selisih = selisihMenit(e.datetime_in, currentDateTime())
            html += '<div class="card shadow-none mb-2 pointer card-hoper" onclick="forceStopRest(' + "'" + e.eid + "'" + ',' + "'" + e.id_leave + "'" + ')" style="background-color:#fce6e6 !important">'
            html += '<div class="card-body p-3">'
            html += '<div class="row justify-content-between">'

            html += '<div class="col-auto align-self-center">'
            html += '<i class="fa fa-warning text-danger fa-2x"></i>'
            html += '</div>'
            html += '<div class="col align-self-center">'
            html += '<p class="m-0 fw-bolder small-text">' + shortenText(e.name, 20) + '</p>'
            html += '<p class="m-0 fw-bold super-small-text">Belum Kembali dengan total ' + selisih + ' Menit</p>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#dataBelumKembaliLebih').html(html)
    }
    window.addEventListener("beforeunload", function(event) {
        if (dataSave.leavePassLog.length) {
            event.returnValue = "Data masih belum di Upload";
        }
    });


    function forceStopRest(eid, id_leave) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Checkin Paksa</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<p class="small fw-bolder">Tambahkan Alasan dibawah ini</p>'
        html_body += '<textarea class="form-control w-100 textingNote" rows="5" placeholder="Tuliskan alasan disini" id="notes"></textarea>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<button class="btn btn-danger w-100 mt-3" onclick="doForceStopRest(' + "'" + eid + "'" + ',' + "'" + id_leave + "'" + ')">Lanjut Checkin Paksa</button>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body)
        $('#modalFooter').addClass('d-none');
    }

    function doForceStopRest(eid, id_leave) {
        notes = $('#notes').val()
        if (!notes) {
            Swal.fire({
                icon: 'error',
                title: 'Notes masih kosong',
                text: 'Wajib menambahkan notes'
            });
        } else {
            showrestMode(eid)
        }
    }

    function onBlurWhenModalOff() {
        $('#codeQR').attr('onblur', 'this.focus()').focus();
    }

    function offBlurWhenModalOn() {
        $('#codeQR').removeAttr('onblur', 'this.focus()')
        $('#notes').focus();
    }

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