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
                            Informasi Detail Surat Jalan
                        </h1>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        List Surat Jalan
                    </div>
                    <div class="card-body">
                        <div id="tampilSJ">
                            <h6 class="text-center text-grey mt-5 mb-5"><i>Memuat Data ...</i></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Detail Surat Jalan
                    </div>
                    <div class="card-body" id="tampilData">
                        <h4 class="text-center text-grey mt-5 mb-5"><i>Memuat Data ...</i></h4>
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
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        jumlahPR = 0
        last_number = 1
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    // var user_id = 143
    // var user_id = 118
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var suratJalan = '<?= $suratJalan ?>'
    var id_po = '<?= $id_po ?>'
    var data_user = ""
    var data_item = ""
    var no_pr = ""
    var data_po = ""
    var data_po_detail = ""
    var data_sj = ""
    var last_number = 1
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
                getData()
            }
        })
    })

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                if (id_po == "") {
                    masterSuratJalan()
                } else {
                    getDataPO()
                }
            }
        })
    }

    function getDataPO() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: id_po
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_po = response['data'][0]
                data_po_detail = JSON.parse(data_po['data_detail'])
                detailSJ()
            }
        })
    }
    var detailSJPenerimaan = ''

    function detailSJ() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataListSJ'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_sj: suratJalan
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                detailSJPenerimaan = response['data']
                masterSuratJalan()
            }
        })
    }

    function masterSuratJalan() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataSuratJalan'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                po_id: id_po,
            },
            error: function(xhr) {},
            beforeSend: function() {
                $('#tampilData').html('<h4 class="text-center text-grey mt-5 mb-5"><i>Memuat Data ...</i></h4>')
            },
            success: function(response) {
                data_sj = response['data']
                var html = ""
                if (data_po != "") {
                    html += '<div class="row pb-2">'
                    html += '<div class="col-4 align-self-center">'
                    html += '<p class="m-0" style="font-size:11px;">No. PO</p>'
                    html += '</div>'
                    html += '<div class="col-8">'
                    html += '<p class="m-0 fw-bold" style="font-size:11px;">' + data_po['no_po'] + '</p>'
                    html += '</div>'
                    html += '<div class="col-4 align-self-center">'
                    html += '<p class="m-0" style="font-size:11px;">Tgl. PO</p>'
                    html += '</div>'
                    html += '<div class="col-8">'
                    html += '<p class="m-0 fw-bold" style="font-size:11px;">' + data_po['date_po'] + '</p>'
                    html += '</div>'
                    html += '</div>'
                    var sj = JSON.parse(data_po['no_sj_luar'])
                    for (let i = 0; i < sj.length; i++) {
                        var bg = ""
                        if (sj[i] == suratJalan) {
                            bg = 'bg-light'
                        }
                        html += '<div class="card shadow-none mb-2 ' + bg + '" style="cursor:pointer;" onclick="changePR(' + "'" + sj[i] + "'" + ')">'
                        html += '<div class="card-body p-2">'
                        html += '<b style="font-size:11px;">' + sj[i] + '</b>'
                        html += '</div>'
                        html += '</div>'
                    }
                } else {
                    html += '<div class="card shadow-none mb-2 bg-light" style="cursor:pointer;">'
                    html += '<div class="card-body p-2">'
                    html += '<b style="font-size:11px;">' + suratJalan + '</b>'
                    html += '</div>'
                    html += '</div>'
                }
                $('#tampilSJ').html(html)
                formDetail()
            }
        })
    }

    function formDetail() {
        let obj = data_sj.filter((value, key) => {
            if (value.no_sj === suratJalan) return true
        })[0]
        let objDetailItem = JSON.parse(detailSJPenerimaan.filter((value, key) => {
            if (value.no_sj === suratJalan && value.po_id === id_po.toString()) return true
        })[0]['data_penerimaan'])
        // console.log(objDetailItem)
        var html = '';
        html += '<div class="container-fluid small">'
        html += '<div class="row">'
        $.each(JSON.parse(obj['data_order']), function(key, value) {
            // let objPenerimaan = detailSJPenerimaan.filter((value, key) => {
            //     if (value.no_sj === suratJalan && value.po_id === id_po.toString()) return true
            // })[0]['data_penerimaan'].filter((value, key) => {
            //     if (value.item_id === suratJalan && value.po_id === id_po.toString()) return true
            // })
            // console.log(objPenerimaan)
            var bg = ""
            if (value['state_order'] == 'DONE') {
                bg = 'bg-light'
            }
            html += '<div class="col-12">'
            html += '<div class="card shadow-none mb-2 ' + bg + '">'
            html += '<div class="card-body">'
            html += '<div class="row">'

            html += '<div class="col-12 col-md-5">'
            html += '<p class="m-0"><b>' + value['item_name'] + '</b></p>'
            html += '</div>'
            html += '<div class="col-12 col-md-7">'
            html += '<div class="row">'
            html += '<div class="col-5">'
            html += '<p class="m-0" style="font-size:11px;">Tanggal Create</p>'
            html += '</div>'
            html += '<div class="col-7 text-end"><p class="m-0" style="font-size:11px;">' + formatDate(value['tanggal_sj']) + '</p></div>'
            html += '<div class="col-5">'
            html += '<p class="m-0" style="font-size:11px;">Jumlah Order</p>'
            html += '</div>'
            html += '<div class="col-7 text-end"><p class="m-0" style="font-size:11px;">' + number_format(value['jumlah_order']) + ' ' + value['item_satuan'] + '</p></div>'
            html += '<div class="col-5">'
            html += '<p class="m-0" style="font-size:11px;">Jumlah Dikirim</p>'
            html += '</div>'
            html += '<div class="col-7 text-end"><p class="m-0" style="font-size:11px;">' + number_format(value['jumlah_dikirim']) + ' ' + value['item_satuan'] + '</p></div>'
            html += '<div class="col-5">'
            html += '<p class="m-0" style="font-size:11px;">Status</p>'
            html += '</div>'
            html += '<div class="col-7 text-end"><p class="m-0" style="font-size:11px;">' + value['state_order'] + '</p></div>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        html += '</div>'
        html += '</div>'
        $('#tampilData').html(html);
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

    function changePR(id) {
        suratJalan = id
        detailSJ()
    }
</script>