<style>
    html {
        scroll-behavior: smooth;
    }

    .green-item {
        background-color: #6BCB77;
        color: white;
    }

    .checkbox-jawaban {
        width: 30px;
        height: 30px;
        padding: 0px;
        margin: 0px;
        background-color: #ECECEC;
    }

    .checkbox-jawaban:checked {
        background-color: #4E944F;
        border-color: #4E944F;
    }

    .fixed-div {
        width: 100%;
        position: fixed;
        z-index: 1051;
        /* anything above 1050*/
        background: #fff;
        box-shadow: 0 5px 20px 4px rgba(0, 0, 0, .1);
    }

    .overflow-cari-soal {
        height: 500px;
        overflow-x: scroll;
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

    .mini-text {
        font-size: 10px;
        padding: 0px;
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
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-3">
                <div class="card card-header-actions">
                    <div class="card-header">Filter</div>
                    <div class="card-body">
                        <small>Quiz</small>
                        <select class="form-select form-select-sm w-100 mb-2" id="select_quiz">
                            <option value="">Pilih Quiz</option>
                        </select>
                        <small>User</small>
                        <select class="form-select form-select-sm w-100 mb-2" id="select_user">
                            <option value="">All User</option>
                        </select>
                        <small>Show By</small>
                        <select class="form-select form-select-sm w-100 mb-2" id="select_group">
                            <option value="" disabled selected>Pilih Show By</option>
                            <option value="quiz">Quiz</option>
                            <option value="detail">Detail</option>
                        </select>
                        <button type="button" class="btn btn-sm btn-primary w-100 mt-4" id="btnFilter">Filter</button>

                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card card-header-actions">
                    <div class="card-header">Laporan</div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                    <th>Kehadiran</th>
                                    <th>Waktu Pengerjaan</th>
                                </tr>
                            </thead>
                            <tbody id="tbl_data">

                            </tbody>
                        </table>

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
<script>
    $(document).ready(function() {
        if (sessionStorage.getItem('user_id') == undefined) {
            var url = '<?= base_url('auth') ?>'
            window.location.href = url
        }
    })
</script>
<script>
    var huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
    var data_user = ""
    var id_divisi = sessionStorage.getItem('division_id')

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

    function removeTags(str) {
        if ((str === null) || (str === ''))
            return false;
        else
            str = str.toString();
        return str.replace(/(<([^>]+)>)/ig, '');
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

    $(document).ready(function() {
        var width = $(window).width();
        var height = $(window).height();
        $('.spinner-loading').css('padding-top', height / 2 + 'px');
        $('.spinner-loading').css('text-align', 'center');
        $('.text-loading').css('text-align', 'center');

        getQuizSelect()
    })
    var data_quiz = ""
    var data_user = ""

    function getQuizSelect() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataQuizModul'); ?>',
            type: 'GET',
            data: {
                division_id: id_divisi
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_quiz = response['data']
                // console.log(data_quiz)
                var html = ""
                html += '<option value="" disabled selected>Pilih Quiz</option>'
                $.each(data_quiz, function(key, value) {
                    html += '<option value="' + value['quiz_id'] + '">' + value['quiz_name'] + '</option>'
                })
                $('#select_quiz').html(html)
                getDataUser()
            }
        });
    }

    function getDataUser() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/showUser'); ?>',
            type: 'GET',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                // console.log(data_user)
                var html = ""
                html += '<option value="">All User</option>'
                $.each(data_user, function(key, value) {
                    html += '<option value="' + value['user_id'] + '">' + value['full_name'] + '</option>'
                })
                $('#select_user').html(html)
            }
        });
    }

    var metode = "quiz"
    var quiz_id = 0
    var user_id = 0

    function getDataLaporan() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataLaporan'); ?>',
            type: 'GET',
            data: {
                metode: metode,
                quiz_id: quiz_id,
                user_id: user_id,
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                // console.log(data)
                listDataLaporan(data)
            }
        });
    }

    function listDataLaporan(data) {
        var html = ""
        var a = 1
        $.each(data, function(key, value) {
            html += '<tr>'
            html += '<td>' + a++ + '</td>'
            html += '<td>' + value['full_name'] + '</td>'
            html += '<td>' + value['grade'] + '</td>'
            html += '<td>' + value['description'] + '</td>'
            html += '<td>' + value['working_time_minute'] + ' Menit</td>'
            html += '</tr>'
        })
        $('#tbl_data').html(html)
    }
    $(document).on('click', '#btnFilter', function(e) {
        $('#tbl_data').empty()
        quiz_id = $('#select_quiz').val()
        user_id = $('#select_user').val()
        metode = $('#select_group').val()
        getDataLaporan()
    })
</script>