<main>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-8">
                <div class="card mt-5 p-3 pt-5">
                    <div class="card-body">
                        <h5 class="mb-5 text-center">Approval <span class="fw-bold" id="no_pr"></span></h5>
                        <hr>
                        <div class="row" id="tampilData">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var id_po = '<?= $id ?>'
    var data_user = ""
    var data_item = ""
    var no_pr = ""
    var last_number = 1
    $(document).ready(function() {
        getData()
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

    var level = 0

    function masterPR() {
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
                console.log(data_po)
                $('#no_pr').html(data_po['no_pr'])
                var data_approval = JSON.parse(data_po['data_approval'])
                var ada = "tidak"
                formDetail(data_approval)
            }
        })
    }

    function formDetail(data_approval) {
        var image = 'request'
        if (data_po['state'] == 'CHECKED') {
            image = 'approval'
        } else if (data_po['state'] == 'DONE') {
            image = 'done'
        } else if (data_po['state'] == 'REJECTED') {
            image = 'rejected'
        }

        var html = '';
        html += '<div class="col-12 mb-3">'
        html += '<div class="row">'
        html += '<div class="col-5 col-md-4">Create By</div>'
        html += '<div class="col-7 col-md-8 fw-bold">' + data_po['name'] + '</div>'
        html += '<div class="col-5 col-md-4">Supplier</div>'
        html += '<div class="col-7 col-md-8 fw-bold">' + data_po['supplier_name'] + '</div>'
        html += '<div class="col-5 col-md-4">No. PO</div>'
        html += '<div class="col-7 col-md-8"><span class="fw-bold">' + data_po['no_po'] + '</span></div>'
        html += '<div class="col-5 col-md-4">Tanggal</div>'
        html += '<div class="col-7 col-md-8"><span class="fw-bold">' + formatDate(data_po['date_po']) + '</span></div>'
        html += '<div class="col-5 col-md-4">Status</div>'
        html += '<div class="col-7 col-md-8"><i><span class="fw-bold text-warning">' + data_po['state'] + '</span></i></div>'


        html += '</div>'
        html += '</div>'

        html += '<div class="col-12 mb-2">'
        html += '<b>List Item</b>'
        html += '<div id="bodyPR" class="mt-2">'
        html += '</div>'

        html += '<table style="width:100%" class="fw-bold mt-2 mb-2">'
        html += '<tr>'
        html += '<td class="text-end" style="width:65%">Subtotal</td>'
        html += '<td class="text-end" style="width:35%">' + number_format(data_po['total_harga']) + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="text-end" style="width:65%">PPN</td>'
        html += '<td class="text-end" style="width:35%">' + number_format(data_po['ppn']) + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="text-end" style="width:65%">Total</td>'
        html += '<td class="text-end" style="width:35%">' + number_format(data_po['grand_total']) + '</td>'
        html += '</tr>'
        html += '</table>'

        html += '<div class="col-12 mt-3 mb-2">'
        html += '<b>Approval</b>'
        html += '<div class="row mt-2">'

        $.each(data_approval, function(keys, values) {
            var success = "fa-check text-light"
            if (values['is_accept'] == 'Accepted') {
                success = 'fa-check text-success'
            } else if (values['is_accept'] == 'Rejected') {
                success = 'fa-times text-danger'
            }
            html += '<div class="col-6">'
            html += '<div class="card shadow-none h-100">'
            html += '<div class="card-body text-center">'
            html += '<i class="fa ' + success + ' fa-2x mb-2"></i>'
            html += '<p class="fw-bold mb-0 small" style="font-size:10px;">' + values['user_name'] + '</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })

        html += '</div>'
        html += '</div>'

        html += '</div>'
        $('#tampilData').html(html);
        $.each(JSON.parse(data_po['data_detail']), function(keys, values) {
            formRowPR(last_number, JSON.parse(data_po['data_detail'])[keys])
            last_number++
        })
    }

    function formRowPR(i, data) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center ">'

        html += '<div class="col-12 col-md-6 align-self-center">'
        html += '<span class="fw-bold text-primary">' + data['item_name'] + '</span><br>'
        html += '</div>'

        html += '<div class="col-12 col-md-6 text-right">'
        html += '<table class="table small mt-2 align-self-center border-none">'
        html += '<tr>'
        html += '<td class="p-0 m-0">QTY</td>'
        html += '<td class="fw-bold p-0 m-0">' + data['qty'] + ' ' + data['satuan_name'] + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="p-0 m-0">Unit Price</td>'
        html += '<td class="fw-bold p-0 m-0">' + number_format(data['harga']) + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<td class="p-0 m-0">Total Price</td>'
        html += '<td class="fw-bold p-0 m-0">' + number_format(data['subtotal']) + '</td>'
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