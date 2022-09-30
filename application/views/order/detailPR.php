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
                            Approval PR
                        </h1>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card h-100">
                    <div class="card-body" id="tampilData">
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
    var user_id = 439
    var id_pr = '<?= $id ?>'
    var data_user = ""
    var data_item = ""
    var no_pr = ""
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
                masterPR()
            }
        })
    }

    function masterPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: id_pr
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_pr = response['data'][0]
                // console.log(data_pr)
                // var jumlah_ttd = 0
                // if (data_pr['data_approval'] != null) {
                //     $.each(JSON.parse(data_pr['data_approval']), function(keys, values) {
                //         jumlah_ttd++
                //     })
                // }
                var image = 'request'
                if (data_pr['state'] == 'CHECKED') {
                    image = 'approval'
                } else if (data_pr['state'] == 'DONE') {
                    image = 'done'
                } else if (data_pr['state'] == 'REJECTED') {
                    image = 'rejected'
                }

                var html = '';
                html += '<div class="container-fluid small">'
                html += '<div class="row">'

                html += '<div class="col-12 col-md-4 mb-3">'
                html += '<div class="text-center">'
                html += '<img src="<?= base_url() ?>assets/image/logo/' + image + '.png" class="w-50" alt="Request">'
                html += '</div>'
                html += '</div>'

                html += '<div class="col-12 col-md-8">'
                html += '<div class="row">'
                html += '<div class="col-5 col-md-3">From</div>'
                html += '<div class="col-7 col-md-9 fw-bold">' + data_pr['name'] + '</div>'
                html += '<div class="col-5 col-md-3">To</div>'
                html += '<div class="col-7 col-md-9 fw-bold">Purchasing</div>'
                html += '<div class="col-5 col-md-3">No. PR</div>'
                html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['no_pr'] + '</span></div>'
                html += '<div class="col-5 col-md-3">Tanggal</div>'
                html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['date'] + '</span></div>'
                html += '<div class="col-5 col-md-3">Cost Centre</div>'
                html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['cost_center'] + '</span></div>'
                html += '<div class="col-5 col-md-3">Notes</div>'
                if (data_pr['justification'] == "") {
                    data_pr['justification'] = "-"
                }
                html += '<div class="col-7 col-md-9"><span class="fw-bold">' + data_pr['justification'] + '</span></div>'

                html += '<div class="col-5 col-md-3">Status</div>'
                html += '<div class="col-7 col-md-9"><i><span class="fw-bold text-warning">' + data_pr['state'] + '</span></i></div>'

                html += '</div>'
                html += '</div>'

                html += '<div class="col-12 mt-3 mb-2">'
                html += '<b>List Item</b>'
                html += '</div>'

                html += '<div class="col-12" id="bodyPR">'
                html += '</div>'

                html += '<div class="col-12 mt-3">'
                html += '<button class="btn btn-primary w-100">Approval</button>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                $('#tampilData').html(html);
                $.each(JSON.parse(data_pr['data_detail']), function(keys, values) {
                    formRowPR(last_number, JSON.parse(data_pr['data_detail'])[keys])
                    last_number++
                })
            }
        })
    }

    function formRowPR(i, data) {
        var html = ""
        html += '<div class="card w-100 shadow-sm mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center ">'

        html += '<div class="col-12 col-md-6 align-self-center">'
        html += '<span class="fw-bold text-primary">' + data['item_name'] + '</span><br>'
        if (data['note'] == "") {
            data['note'] = "-"
        }
        html += '<span class="small">Note : <span class="text-grey">' + data['note'] + '</span></span>'
        html += '</div>'

        html += '<div class="col-12 col-md-6 text-right">'
        html += '<table class="table small mt-2 align-self-center border-none">'
        html += '<tr>'
        html += '<td class="p-0 m-0">QTY</td>'
        html += '<td class="fw-bold p-0 m-0">' + data['qty'] + ' ' + data['unit_name'] + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="p-0 m-0">Unit Price</td>'
        html += '<td class="fw-bold p-0 m-0">' + number_format(data['unit_price']) + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="p-0 m-0">Total Price</td>'
        html += '<td class="fw-bold p-0 m-0">' + number_format(data['extended_price']) + '</td>'
        html += '</tr>'
        html += '</table>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'

        $('#bodyPR').append(html)
        return true;
    }
</script>