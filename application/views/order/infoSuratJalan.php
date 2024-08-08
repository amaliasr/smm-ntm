<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto mt-4">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-3">
                <h1 class="fw-bolder">
                    Surat Jalan
                    <br>
                    <p class="m-0">No. SJ <span class="text-orange" id="namaSuratJalan">--</span></p>
                </h1>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 mb-4">
                <div class="card shadow-none mb-2">
                    <div class="card-header" id="tampilHeader">
                    </div>
                    <div class="card-body p-0" id="tampilData">
                        <p class="m-0 text-center text-grey"><i>Memuat Data ...</i></p>
                    </div>
                </div>
                <div class="row" id="kerangkaSJLainnya">
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
                no_sj: suratJalan,
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                detailSJPenerimaan = response['data']
                $('#namaSuratJalan').html(suratJalan)
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
                kerangkaSJLainnya()
            }
        })
    }

    function kerangkaSJLainnya() {
        var html = ''
        html += '<div class="col-12 py-3">'
        html += '<p class="m-0 small-text fw-bolder">Surat Jalan Lainnya</p>'
        html += '</div>'
        html += '<div class="col-12" id="tampilListSJ">'
        html += '</div>'
        $('#kerangkaSJLainnya').html(html)
        isiKerangkaLainnya()
    }

    function isiKerangkaLainnya() {
        var html = ""
        var listSJ = ''
        html += '<div class="row">'
        html += '<div class="col-2 align-self-center">'
        html += '<p class="m-0 text-dark-grey" style="font-size:11px;">No. PO</p>'
        html += '</div>'
        html += '<div class="col-10">'
        html += '<p class="m-0 text-dark fw-bold" style="font-size:11px;">' + data_po['no_po'] + '</p>'
        html += '</div>'
        html += '<div class="col-2 align-self-center">'
        html += '<p class="m-0 text-dark-grey" style="font-size:11px;">Tgl. PO</p>'
        html += '</div>'
        html += '<div class="col-10">'
        html += '<p class="m-0 text-dark fw-bold" style="font-size:11px;">' + data_po['date_po'] + '</p>'
        html += '</div>'
        html += '</div>'
        var sj = JSON.parse(data_po['no_sj_luar'])
        for (let i = 0; i < sj.length; i++) {
            var bg = ""
            if (sj[i] == suratJalan) {
                bg = 'bg-light'
            }
            listSJ += '<div class="card shadow-none rounded-pill mb-2 ' + bg + '" style="cursor:pointer;" onclick="changePR(' + "'" + sj[i] + "'" + ')">'
            listSJ += '<div class="card-body p-2 px-3">'
            listSJ += '<b style="font-size:11px;">' + sj[i] + '</b>'
            listSJ += '</div>'
            listSJ += '</div>'
        }

        $('#tampilListSJ').html(listSJ)
        $('#tampilHeader').html(html)
        formDetail()
    }

    function formDetail() {
        let obj = data_sj.find((value, key) => {
            if (value.no_sj === suratJalan) return true
        })
        var html = ''
        if (obj) {
            let objDetailItem = JSON.parse(detailSJPenerimaan.filter((value, key) => {
                if (value.no_sj === suratJalan && value.po_id === id_po.toString()) return true
            })[0]['data_penerimaan'])
            html += '<table class="table table-hover m-0">'
            html += '<tr>'
            html += '<th class="text-center align-middle small-text" style="width:5%">No</th>'
            html += '<th class="text-center align-middle small-text">Date</th>'
            html += '<th class="text-center align-middle small-text">Item</th>'
            html += '<th class="text-center align-middle small-text">Unit</th>'
            html += '<th class="text-center align-middle small-text">Jumlah<br>Order</th>'
            html += '<th class="text-center align-middle small-text">Jumlah<br>Dikirim</th>'
            html += '<th class="text-center align-middle small-text">Status</th>'
            html += '</tr>'
            var a = 1
            $.each(JSON.parse(obj['data_order']), function(key, value) {
                var bg = ""
                if (value['state_order'] == 'DONE') {
                    bg = 'bg-light'
                }
                html += '<tr>'
                html += '<td class="text-center align-middle small-text">' + a++ + '</td>'
                html += '<td class="text-center align-middle small-text">' + formatDate(value['tanggal_sj']) + '</td>'
                html += '<td class="text-center align-middle small-text">' + value['item_name'] + '</td>'
                html += '<td class="text-center align-middle small-text">' + value['item_satuan'] + '</td>'
                html += '<td class="text-center align-middle small-text">' + number_format(value['jumlah_order']) + '</td>'
                html += '<td class="text-center align-middle small-text">' + number_format(value['jumlah_dikirim']) + '</td>'
                html += '<td class="text-center align-middle small-text">' + value['state_order'] + '</td>'
                html += '</tr>'
                last_number++
            })
            html += '</table>'
        } else {
            html += '<div class="my-5 align-middle text-center">'
            html += '<p class="m-0 small fw-bolder">No Data</p>'
            html += '<p class="m-0 small-text">Data tidak tersedia dikarenakan data telah terhapus</p>'
            html += '</div>'
        }
        $('#tampilData').html(html)
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