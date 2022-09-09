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
        height: 300px;
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
</style>
<main>
    <div id="overlay">
        <h3 class="text-white spinner-loading">
            <div class="spinner-border text-light" role="status" style="height:100px;width:100px;"><span class="sr-only">Loading...</span></div>
        </h3>
        <p class="text-white text-loading">Menyiapkan Data Quiz</p>
    </div>
    <div class="fixed-bottom text-end shadow " style="z-index: 4;">
        <div class="w-100 bg-white">
            <div class="p-3">
                <!-- <div class="row justify-content-end d-flex align-self-center">
                    <div class="col-auto align-self-center"> -->
                <span class="me-5">
                    <i class="fa fa-users me-2"></i> <span id="jumlah_partisipan">0</span> <i class="fa fa-file ms-2 me-2"></i> <span id="jumlah_quiz">0</span>
                </span>
                <!-- </div>
                    <div class="col-auto"> -->
                <button type="button" class="btn btn-sm btn-outline-primary" id="btnReset">Reset</button>
                <button type="button" class="btn btn-sm btn-primary" id="btnSimpan"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                <!-- </div>
                </div> -->
            </div>
        </div>
    </div>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-1">
                <div class="row align-items-center justify-content-between">
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <!-- <div class="card-header">Tambah Participant</div> -->
            <div class="card-body">
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="row">
                            <div class="col-1">
                                <span class="badge bg-secondary">1</span>
                            </div>
                            <div class="col-11">
                                <b>Pilih Partisipan <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Klik atau Check siapa saja yang akan menjadi partisipan untuk quiz yang dipilih selanjutnya"></i></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="row">
                            <div class="col-1">
                                <span class="badge bg-secondary">2</span>
                            </div>
                            <div class="col-11">
                                <b>Pilih Quiz <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Klik atau Check Quiz sesuai jadwal untuk partisipan yang sudah dipilih sebelumnya"></i></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="input-group">
                            <!-- <div class="input-group input-group-joined mb-1"> -->
                            <input class="form-control pe-0" type="text" placeholder="Cari Nama Perserta" aria-label="Search" id="search_peserta">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="select_division">
                            </select>
                        </div>


                    </div>
                    <div class="col-6">

                        <div class="input-group input-group-joined">
                            <input class="form-control pe-0" type="text" placeholder="Cari Nama Quiz" aria-label="Search" id="search_quiz">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6" id="listUser">
                    </div>
                    <div class="col-6" id="listQuiz">
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
    var id_divisi = sessionStorage.getItem('division_id')
    var id_user = sessionStorage.getItem('user_id')

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
        var date = year + "/" + month + "/" + day;
        return date;
    }

    function formatTime(orginaldate) {
        var date = new Date(orginaldate);
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();
        if (detik < 10) {
            detik = "0" + detik;
        }
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        var date = jam + ":" + menit
        return date;
    }
    $(document).ready(function() {
        var width = $(window).width();
        var height = $(window).height();
        $('.spinner-loading').css('padding-top', height / 2 + 'px');
        $('.spinner-loading').css('text-align', 'center');
        $('.text-loading').css('text-align', 'center');

        getDivision()
    })

    var data_user = ""
    var data_quiz = ""
    var data_division = ""

    function getDivision() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/showDivision'); ?>',
            type: 'GET',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                data_division = data
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
                var data = response['data']
                data_user = data
                getDataQuiz()
            }
        });
    }

    function getDataQuiz() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataQuizModul'); ?>',
            type: 'GET',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                data_quiz = data
                listDivision()
            }
        });
    }

    function listDivision() {
        // console.log(data_division)
        var html = ""
        html += '<option disabled selected>Pilih Divisi</option>'
        $.each(data_division, function(key, value) {
            html += '<option value="' + value['id'] + '">' + value['division_name'] + '</option>'
        })
        $('#select_division').html(html)
        listUser()
    }

    function listUser() {
        // console.log(data_user)
        var html = ""
        $.each(data_user, function(key, value) {
            if (value['division_id'] == null) {
                value['division_id'] = 0
            }
            html += '<div class="card shadow-none data-user  mb-1" data-id="' + value['user_id'] + '" id="card_user' + key + '">'
            html += '<div class="card-body">'
            html += '<div class="row d-flex align-items-center">'
            html += '<div class="col-1">'
            html += '<input class="form-check-input checkbox-user" type="checkbox" value="' + value['user_id'] + '" id="checkUser' + value['user_id'] + '">'
            html += '</div>'
            html += '<div class="col-11"><span class="text_user" data-id_divisi="' + value['division_id'] + '" data-id="' + key + '">' + value['full_name'] + '</span></div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listUser').html(html)
        listQuiz()
    }

    function listQuiz() {
        // console.log(data_quiz)
        var html = ""
        $.each(data_quiz, function(key, value) {
            html += '<div class="card shadow-none data-quiz mb-1" data-id="' + value['schedule_id'] + '" id="card_quiz' + key + '">'
            html += '<div class="card-body">'
            html += '<div class="row d-flex align-items-center">'
            html += '<div class="col-1">'
            html += '<input class="form-check-input checkbox-quiz" type="checkbox" value="' + value['schedule_id'] + '" id="checkQuiz' + value['schedule_id'] + '">'
            html += '</div>'
            html += '<div class="col-11">'
            html += '<b class="text_quiz" data-id="' + key + '">' + removeTags(value['quiz_name']) + '</b><br>'
            html += '<small><i class="fa fa-calendar"></i> ' + formatDate(value['date_start']) + ' ' + formatTime(value['date_start']) + ' - ' + formatDate(value['date_end']) + ' ' + formatTime(value['date_end']) + '</small>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listQuiz').html(html)
    }
    var check_user = 0
    var check_quiz = 0

    $(document).on('click', '.data-user', function(e) {
        var id = $(this).data('id')
        if ($('#checkUser' + id).is(':checked')) {
            $('#checkUser' + id).removeAttr('checked', true)
            check_user--
        } else {
            $('#checkUser' + id).attr('checked', true)
            check_user++
        }
        $('#jumlah_partisipan').html(check_user)
    });
    $(document).on('click', '.data-quiz', function(e) {
        var id = $(this).data('id')
        if ($('#checkQuiz' + id).is(':checked')) {
            $('#checkQuiz' + id).removeAttr('checked', true)
            check_quiz--
        } else {
            $('#checkQuiz' + id).attr('checked', true)
            check_quiz++
        }
        $('#jumlah_quiz').html(check_quiz)
    });
    $(document).on('keyup', '#search_peserta', function(e) {
        var value = $(this).val().toLowerCase();
        var cards = $('.text_user').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_user').map(function() {
            return $(this).data('id');
        }).get();
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            if (element > -1) {
                $('#card_user' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_user' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('keyup', '#search_quiz', function(e) {
        var value = $(this).val().toLowerCase();
        var cards = $('.text_quiz').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_quiz').map(function() {
            return $(this).data('id');
        }).get();
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            if (element > -1) {
                $('#card_quiz' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_quiz' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('change', '#select_division', function(e) {
        var id = $(this).val()
        if (id == 'null') {
            id = 0
        }
        var cards = $('.text_user').map(function() {
            return $(this).data('id_divisi');
        }).get();
        var id_cards = $('.text_user').map(function() {
            return $(this).data('id');
        }).get();
        for (let i = 0; i < cards.length; i++) {
            if (cards[i] == id) {
                $('#card_user' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_user' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('click', '#btnSimpan', function(e) {
        var user_id = $('.checkbox-user:checked').map(function() {
            return $(this).val();
        }).get();
        var quiz_schedule_id = $('.checkbox-quiz:checked').map(function() {
            return $(this).val();
        }).get();
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/insertParticipant'); ?>',
            type: 'POST',
            data: {
                user_id: user_id,
                quiz_schedule_id: quiz_schedule_id,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnSimpan').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnSimpan').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        Swal.fire({
                            text: 'Apakah ingin masuk ke pengelolaan akun partisipan ?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var url = '<?= base_url('Participant') ?>'
                                window.location.href = url
                            } else {
                                $('#btnSimpan').prop("disabled", false);
                                reset()
                            }
                        })
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Isian Form Tidak Lengkap'
                    });
                    $('#btnSimpan').prop("disabled", false);
                }
            }
        });
    })
    $(document).on('click', '#btnReset', function(e) {
        reset()
    })

    function reset() {
        check_user = 0
        $('#jumlah_partisipan').html(check_user)
        check_quiz = 0
        $('#jumlah_quiz').html(check_quiz)
        listDivision()
    }
</script>