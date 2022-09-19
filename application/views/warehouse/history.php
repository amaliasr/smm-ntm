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
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-cubes"></i></div>
                            History
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari No. MR" aria-label="Search" id="search_soal">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
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
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-auto col-12 mb-1 p-1">

                                <input type="text" name="" id="input" class="form-control form-control-sm datepicker" placeholder="Tanggal">

                            </div>
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Status</option>
                                    <option value="1">Baru Dimulai</option>
                                    <option value="1">Diterima Warehouse</option>
                                    <option value="1">Telah Disiapkan</option>
                                    <option value="1">Verifikasi Gudang</option>
                                    <option value="1">Diterima SMD</option>
                                    <option value="1">Selesai</option>
                                </select>
                            </div>
                            <div class="col-md-auto col-12 mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">

                                <table class="table table-bordered table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>No. MK</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 30; $i++) { ?>
                                            <tr class="small">
                                                <td>1</td>
                                                <td>12/09/2022 09:10:00</td>
                                                <td>FM.SMD-003</td>
                                                <td>Baru Dimulai</td>
                                                <td>Tambahan dll</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="modal" role="dialog" aria-hidden="true">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
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
        clearModal();
    })

    $(document).ready(function() {})

    function getQuizParticipant() {
        $.ajax({
            url: '<?php echo api_url('MasterHr/showQuizUser'); ?>',
            type: 'GET',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                $("#overlay").hide();
                var data = response['data']
                tampilQuizParticipant(data)
            }
        });
    }

    function tampilQuizParticipant(data) {
        var html = ""
        $.each(data, function(key, value) {
            var badge = ""
            var color = ""
            if (JSON.parse(value['data_participant']).length == 0) {
                color = "text-danger"
            }
            if (formatDate(value['date_start']) <= current_date && formatDate(value['date_end']) >= current_date) {
                badge = '<span class="badge rounded-pill bg-danger">Show Time</span>'
            }
            html += '<div class="card mb-3 w-100 shadow-none" id="btnDetail" style="cursor: pointer" data-id="' + value['schedule_id'] + '">'
            html += '<div class="card-body align-items-center align-middle">'
            html += '<div class="row">'
            html += '<div class="col-12 col-md-4">'
            html += '<b>' + value['quiz_name'] + ' ' + badge + '</b>'
            html += '</div>'
            html += '<div class="col-12 col-md-7">'
            html += '<span><i class="fa fa-user ' + color + '"></i> <b class="me-5 ' + color + '">' + JSON.parse(value['data_participant']).length + '</b> <i class="fa fa-calendar"></i> ' + formatDate(value['date_start']) + '<i class="fa fa-clock ms-4"></i> ' + formatTime(value['date_start']) + '</span>'
            html += '</div>'
            html += '<div class="col-12 col-md-1">'
            html += '<i class="fa fa-angle-right"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listQuiz').html(html)
    }
    $(document).on('click', "#btnDetail", function() {
        var id = $(this).data('id')
        var url = '<?= base_url() ?>Participant/viewDetailParticipant/' + id
        window.location.href = url
    })
    $(document).on('click', "#btnTambahParticipant", function() {
        var url = '<?= base_url() ?>Participant/addParticipant/'
        window.location.href = url
    })
</script>