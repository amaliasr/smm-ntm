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
    <div id="overlay">
        <h3 class="text-white spinner-loading">
            <div class="spinner-border text-light" role="status" style="height:100px;width:100px;"><span class="sr-only">Loading...</span></div>
        </h3>
        <p class="text-white text-loading">Menyiapkan Data Quiz</p>
    </div>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="hard-drive"></i></div>
                            Management Test
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
<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel" id="namaCanvas"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<script>
    $(document).ready(function() {
        if (sessionStorage.getItem('user_id') == undefined) {
            var url = '<?= base_url('auth') ?>'
            window.location.href = url
        }
    })
</script>
<script>
    var id_divisi = sessionStorage.getItem('division_id')
    var id_user = sessionStorage.getItem('user_id')

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

    var d = new Date();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var current_date = d.getFullYear() + '-' +
        (month < 10 ? '0' : '') + month + '-' +
        (day < 10 ? '0' : '') + day
    // d.getHours() + ":" + (d.getMinutes() < 10 ? '0' : '') + d.getMinutes() + ":" + (d.getSeconds() < 10 ? '0' : '') + d.getSeconds();

    $(document).ready(function() {
        var width = $(window).width();
        var height = $(window).height();
        $('.spinner-loading').css('padding-top', height / 2 + 'px');
        $('.spinner-loading').css('text-align', 'center');
        $('.text-loading').css('text-align', 'center');
        // console.log(JSON.parse(localStorage.getItem('data_modul')))
        getDataSoal()
    })

    function getDataSoal() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataAllSoal'); ?>',
            type: 'GET',
            data: {
                divisi_id: id_divisi
            },
            error: function(xhr) {},
            beforeSend: function() {
                $("#overlay").show();
            },
            success: function(response) {
                var data = response['data']
                $('#jumlah_soal').html(data.length)
                getQuizSelect()
            }
        });
    }

    function getQuizSelect() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataQuizModul2'); ?>',
            type: 'GET',
            data: {
                division_id: id_divisi
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                $("#overlay").hide();
                var data = response['data']
                $('#jumlah_quiz').html(data.length)
                // console.log(data)
                tampilQuizModul(data)
            }
        });
    }

    function formatDate(orginaldate) {
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
        var date = year + "-" + month + "-" + day;
        return date;
    }

    function tampilQuizModul(data) {
        // console.log(data)
        var html = ""
        $.each(data, function(key, value) {
            if (JSON.parse(value['data_modul'])[0]['id_modul'] != null) {
                var schedules = JSON.parse(value['schedule'])
                var date_start = ""
                var date_end = ""
                if (schedules.length > 0) {
                    $.each(schedules, function(keys, values) {
                        if (keys == 0) {
                            date_start = formatDate(values['date_start'])
                        }
                        date_end = values['date_end']
                    })
                }
                var badge = ""
                var background = ""
                if (date_start <= current_date && date_end >= current_date) {
                    badge = '<span class="badge rounded-pill bg-success">Show Time</span>'
                } else if (date_end < current_date) {
                    badge = '<span class="badge rounded-pill bg-danger">Expired</span>'
                    background = 'bg-light'
                }
                html += '<div class="card mb-3 w-100 shadow-none ' + background + '">'
                html += '<div class="card-body align-items-center align-middle">'
                html += '<div class="row">'
                html += '<div class="col-12 col-md-4">'
                html += '<b>' + value['quiz_name'] + ' ' + badge + '</b>'
                html += '</div>'
                html += '<div class="col-12 col-md-8">'
                $.each(JSON.parse(value['data_modul']), function(keys, values) {
                    if (values['jumlah_soal'] == null) {
                        values['jumlah_soal'] = 0
                    }
                    var warning = ""
                    if (values['jumlah_soal'] == 0)
                        warning = ' <i class="fa fa-warning text-orange"></i>'
                    html += '<p style="cursor: pointer"><a id="detailModul" data-quiz="' + value['quiz_id'] + '" data-id="' + values['id_modul'] + '" data-nama="' + values['nama_modul'] + '">' + values['nama_modul'] + '</a>' + warning
                    html += '<br>'
                    html += '<small class="me-4"><span><i class="fa fa-file"></i> ' + values['jumlah_soal'] + '</span></small>'
                    html += '<small class="me-4"><span><i class="fa fa-pause"></i> ' + values['quiz_break'] + ' Menit</span></small>'
                    html += '<small class="me-4"><span><i class="fa fa-clock"></i> ' + values['quiz_timer'] + ' Menit</span></small>'
                    html += '</p>'
                    if (keys < JSON.parse(value['data_modul']).length - 1)
                        html += '<hr>'
                })
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })
        $('#listQuiz').html(html)
    }
    $(document).on('click', "#detailModul", function() {
        var id = $(this).data('id')
        var quiz = $(this).data('quiz')
        var nama = $(this).data('nama')
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataSoalModul'); ?>',
            type: 'GET',
            data: {
                modul_id: id
            },
            error: function(xhr) {
                $("#overlay").hide();
            },
            beforeSend: function() {
                $("#overlay").show();
            },
            success: function(response) {
                // console.log(response)
                noPertanyaan = -1
                $("#overlay").hide();
                if (response['rule'] == undefined) {
                    localStorage.setItem('rule', 'null')
                } else {
                    localStorage.setItem('rule', response['rule'][0]['rule'])
                }
                localStorage.setItem("data_modul", JSON.stringify(response))
                localStorage.setItem("modul_id_array", null)
                localStorage.setItem("modul_id", id)
                localStorage.setItem("quiz_id", quiz)
                var url = '<?= base_url('Question/addQuestion') ?>'
                window.location.href = url
            }
        });
    })
    $(document).on('click', "#btnTambahBankSoal", function() {
        localStorage.removeItem("rule")
        localStorage.removeItem("data_modul")
        localStorage.removeItem("modul_id")
        localStorage.removeItem("modul_id_array")
        localStorage.removeItem("quiz_id")
        var url = '<?= base_url('Question/addQuestion') ?>'
        window.location.href = url
    })
    $(document).on('click', "#btnPartisipant", function() {
        var url = '<?= base_url('Participant') ?>'
        window.location.href = url
    })
</script>