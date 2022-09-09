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
                            Cek Gudang
                        </h1>
                        <!-- <div class="page-header-subtitle">Halaman ini berisi tentang kumpulan-kumpulan soal yang bersifat <span class="fw-bold">Sangat Rahasia</span>.</div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-lg-6 col-xl-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="small">Quiz</div>
                                <div class="text-lg fw-bold" id="jumlah_quiz"></div>
                            </div>
                            <i class="feather-xl" data-feather="clipboard"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class=" stretched-link" href="<?= base_url() ?>Question/Quiz">Lihat Quiz</a>
                        <div class=""><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="small">Jumlah Soal</div>
                                <div class="text-lg fw-bold" id="jumlah_soal">-</div>
                            </div>
                            <i class="feather-xl" data-feather="book"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class=" stretched-link" href="<?= base_url() ?>Question/Soal">Lihat Semua Soal</a>
                        <div class=""><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row h-100">
                            <div class="col-6 text-center align-self-center">
                                <div class="text-md fw-bold mb-3">Tambah Baru Soal dari Quiz</div>
                                <button class="btn btn-outline-primary btn-sm" id="btnTambahBankSoal"><i data-feather="plus"></i>&nbsp;&nbsp;Soal Quiz Baru</button>
                            </div>
                            <div class="col-6 border-start text-center align-self-center">
                                <div class="text-md fw-bold mb-3">Tambah Partisipan</div>
                                <button class="btn btn-outline-primary btn-sm" id="btnPartisipant"><i data-feather="users"></i>&nbsp;&nbsp;Partisipant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-header-actions">
            <div class="card-header">Bank Soal</div>
            <div class="card-body" id="listQuiz">


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