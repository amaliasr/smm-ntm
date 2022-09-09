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
        <div class="card card-header-actions">
            <div class="card-header">Management Quiz</div>
            <div class="card-body">
                <div class="row">

                    <div class="col-6 mb-5">
                        <div class="input-group input-group-joined">
                            <input class="form-control pe-0" type="text" placeholder="Cari Soal menggunakan Nama Quiz" aria-label="Search" id="search_soal">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <div class="row" id="isi_soal">

                        </div>
                    </div>
                    <div class="col-6" id="isi_detail">
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
    var huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
    var data_modul = ""

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

        getDataQuiz()
    })

    function getDataQuiz() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataQuizModul'); ?>',
            type: 'GET',
            data: {
                divisi_id: 1
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                data_modul = data
                listSoal(data)
            }
        });
    }

    function listSoal(data) {
        // console.log(data)
        var html_body = ""
        html_body += '<div class="col-md-12 col-12" id="btnTambahFormQuiz" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#modal">'
        html_body += '<div class="card shadow-none btn-available-soal mt-1 bg-blue bg-opacity-10" >'
        html_body += '<div class="card-body" style="padding:10px;">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 text-center">'
        html_body += '<small class="fw-bold"><i class="fa fa-plus"></i> Tambah Quiz Baru</small>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        $.each(data, function(key, value) {
            var length = 0
            $.each(data, function(keys, values) {
                if (value['quiz_id'] == values['quiz_id']) {
                    $.each(JSON.parse(value['data_modul']), function(key2, value2) {
                        if (value2['id_modul'] != null) {
                            length++
                        }
                    })
                }
            })
            html_body += '<div class="col-md-12 col-12 card_quiz" id="card_quiz' + key + '" data-id="' + key + '" >'
            html_body += '<div class="card shadow-none btn-available-soal  mt-1" >'
            html_body += '<div class="card-body" style="padding:10px;">'
            html_body += '<div class="row">'

            html_body += '<div class="col-9 card_title_quiz" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#modal" data-id_quiz="' + value['quiz_id'] + '" data-nama_quiz="' + value['quiz_name'] + '">'
            html_body += '<small class="text_soal" data-id="' + key + '">' + removeTags(value['quiz_name']) + '</small>'
            html_body += '</div>'

            html_body += '<div class="col-3">'
            html_body += '<small id="numModul' + key + '"><b>' + length + '</b></small>'
            html_body += '<small class="deleteBtn d-none" id="deleteBtn' + key + '" data-id="' + key + '" data-id_quiz="' + value['quiz_id'] + '" data-nama_quiz="' + value['quiz_name'] + '" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#modal"><i class="fa fa-trash text-danger"></i></small>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#isi_soal').html(html_body)
    }
    $(document).on('mouseover', '.card_quiz', function(e) {
        var id = $(this).data('id')
        $('#deleteBtn' + id).removeClass('d-none')
        $('#numModul' + id).addClass('d-none')
    });
    $(document).on('mouseout', '.card_quiz', function(e) {
        var id = $(this).data('id')
        $('#deleteBtn' + id).addClass('d-none')
        $('#numModul' + id).removeClass('d-none')
    });
    $(document).on('click', '.card_title_quiz', function(e) {
        var id = $(this).data('id_quiz')
        var nama = $(this).data('nama_quiz')

        $.each(data_modul, function(key, value) {
            if (value['quiz_id'] == id) {
                var modul = value['data_modul']
                formDetailQuiz(id, nama, modul)
            }
        })

    });
    var num_doc = -1

    function formDetailQuiz(id, nama, modul) {
        // console.log(JSON.parse(modul))
        $('#modalDialog').addClass('modal-dialog modal-xl');

        var html_header = '';
        html_header += '<h5 class="modal-title">Kelola Quiz : ' + nama + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = ""
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        html_body += '<div class="mb-3 row">'
        html_body += '<label for="inputNamaQuiz" class="col-sm-2 col-form-label">Nama Quiz</label>'
        html_body += '<div class="col-sm-10">'
        html_body += '<input type="text" class="form-control" id="inputNamaQuiz" value="' + nama + '" data-id="' + id + '">'
        html_body += '</div>'
        html_body += '</div>'

        // html_body += '<div class="mb-3 row">'
        // html_body += '<label for="inputTanggalMulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>'
        // html_body += '<div class="col-sm-10">'
        // html_body += '<input type="date" class="form-control" id="inputTanggalMulai" value="' + formatDate(date_start) + '">'
        // html_body += '</div>'
        // html_body += '</div>'

        // html_body += '<div class="mb-3 row">'
        // html_body += '<label for="inputTanggalAkhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>'
        // html_body += '<div class="col-sm-10">'
        // html_body += '<input type="date" class="form-control" id="inputTanggalAkhir" value="' + formatDate(date_end) + '">'
        // html_body += '</div>'
        // html_body += '</div>'

        html_body += '<div class="mb-3 row">'
        html_body += '<label for="inputTanggalAkhir" class="col-sm-2 col-form-label">Modul</label>'
        html_body += '<div class="col-sm-10">'

        $.each(JSON.parse(modul), function(key, value) {
            if (value['id_modul'] != null) {
                html_body += '<div  id="deletedModulList' + value['id_modul'] + '">'
                html_body += '<div class="row">'

                html_body += '<div class="col-sm-5">'
                html_body += '<input type="text" class="form-control nama_modul_recent" id="nama_modul_recent" value="' + value['nama_modul'] + '" placeholder="Nama Modul" data-id="' + value['quiz_detail_id'] + '" data-modul_id="' + value['id_modul'] + '">'
                html_body += '</div>'

                html_body += '<div class="col-sm-3">'
                html_body += '<div class="input-group mb-3">'
                html_body += '<span class="input-group-text" id="basic-addon1"><i class="fa fa-pause-circle"></i></span>'
                html_body += '<input type="text" class="form-control quiz_break_recent" id="quiz_break_recent" value="' + value['quiz_break'] + '" aria-describedby="basic-addon1" placeholder="Waktu Break">'
                html_body += '</div>'
                html_body += '</div>'

                html_body += '<div class="col-sm-3">'
                html_body += '<div class="input-group mb-3">'
                html_body += '<span class="input-group-text" id="basic-addon1"><i class="fa fa-clock"></i></span>'
                html_body += '<input type="text" class="form-control quiz_timer_recent" id="quiz_timer_recent" value="' + value['quiz_timer'] + '" aria-describedby="basic-addon1" placeholder="Waktu Ujian">'
                html_body += '</div>'
                html_body += '</div>'

                html_body += '<div class="col-sm-1">'
                html_body += '<button class="btn btn-danger deletedModul" data-id="' + value['id_modul'] + '"><i class="fa fa-trash"></i></button>'
                html_body += '</div>'

                html_body += '</div>'

                html_body += '<div class="mb-2 row">'
                html_body += '<div class="col-sm-5">'
                html_body += '<div class="form-check">'
                var check_q = ""
                var check_a = ""
                if (value['random_question'] == 1) {
                    check_q = "checked"
                }
                if (value['random_answer'] == 1) {
                    check_a = "checked"
                }
                html_body += '<input class="form-check-input checkboxRandomSoal_recent" type="checkbox" value="1" id="checkboxRandomSoalRecent' + value['id_modul'] + '" ' + check_q + '>'
                html_body += '<label class="form-check-label" for="checkboxRandomSoalRecent' + value['id_modul'] + '">Random Soal</label>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '<div class="col-sm-5">'
                html_body += '<div class="form-check">'
                html_body += '<input class="form-check-input checkboxRandomJawaban_recent" type="checkbox" value="1" id="checkboxRandomJawabanRecent' + value['id_modul'] + '" ' + check_a + '>'
                html_body += '<label class="form-check-label" for="checkboxRandomJawabanRecent' + value['id_modul'] + '">Random Jawaban</label>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
                html_body += '</div>'
            }
        })
        html_body += '<div id="fieldTambahModul">'
        html_body += '</div>'
        html_body += '<button class="btn btn-outline-primary w-100" id="btnTambahModul"><i class="fa fa-plus"></i> Tambah Modul</button>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnSimpanKelolaQuiz">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    function addModul() {
        num_doc++
        var html_body = ''
        html_body += '<div id="rowNewModul' + num_doc + '">'
        html_body += '<div class="row" >'

        html_body += '<div class="col-sm-5">'
        html_body += '<input type="text" class="form-control nama_modul" id="nama_modul" value="" placeholder="Nama Modul">'
        html_body += '</div>'

        html_body += '<div class="col-sm-3">'
        html_body += '<div class="input-group mb-3">'
        html_body += '<span class="input-group-text" id="basic-addon1"><i class="fa fa-pause-circle"></i></span>'
        html_body += '<input type="text" class="form-control quiz_break" id="quiz_break" value="" aria-describedby="basic-addon1" placeholder="Waktu Break">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-sm-3">'
        html_body += '<div class="input-group mb-3">'
        html_body += '<span class="input-group-text" id="basic-addon1"><i class="fa fa-clock"></i></span>'
        html_body += '<input type="text" class="form-control quiz_timer" id="quiz_timer" value="" aria-describedby="basic-addon1" placeholder="Waktu Ujian">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-sm-1">'
        html_body += '<button class="btn btn-danger btnDeleteNewRowModul" data-id="' + num_doc + '"><i class="fa fa-trash"></i></button>'
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="mb-2 row">'
        html_body += '<div class="col-sm-5">'
        html_body += '<div class="form-check">'
        html_body += '<input class="form-check-input checkboxRandomSoal" type="checkbox" value="1" id="checkboxRandomSoal' + num_doc + '" checked>'
        html_body += '<label class="form-check-label" for="checkboxRandomSoal' + num_doc + '">Random Soal</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-sm-5">'
        html_body += '<div class="form-check">'
        html_body += '<input class="form-check-input checkboxRandomJawaban" type="checkbox" value="1" id="checkboxRandomJawaban' + num_doc + '" checked>'
        html_body += '<label class="form-check-label" for="checkboxRandomJawaban' + num_doc + '">Random Jawaban</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#fieldTambahModul').append(html_body)
    }
    $(document).on('click', '#btnTambahModul', function(e) {
        addModul()
    })
    $(document).on('click', '.btnDeleteNewRowModul', function(e) {
        var id = $(this).data('id')
        $('#rowNewModul' + id).remove()
    })

    $(document).on('click', '.deleteBtn', function(e) {
        var id = $(this).data('id_quiz')
        var nama = $(this).data('nama_quiz')
        $('#modalDialog').addClass('modal-dialog');

        var html_header = '';
        html_header += '<h5 class="modal-title">Hapus Quiz</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = ""
        html_body += '<div class="row">'
        html_body += '<span>Apakah anda yakin ingin menghapus Quiz <b>' + nama + '</b> ?</span>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnHapusQuiz" data-id="' + id + '">Hapus</button>'
        $('#modalFooter').html(html_footer);
    });
    $(document).on('click', '#btnTambahFormQuiz', function(e) {
        $('#modalDialog').addClass('modal-dialog modal-xl');

        var html_header = '';
        html_header += '<h5 class="modal-title">Tambah Quiz</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = ""
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        html_body += '<div class="mb-3 row">'
        html_body += '<label for="inputNamaQuiz" class="col-sm-2 col-form-label">Nama Quiz</label>'
        html_body += '<div class="col-sm-10">'
        html_body += '<input type="text" class="form-control" id="inputNamaQuiz">'
        html_body += '</div>'
        html_body += '</div>'

        // html_body += '<div class="mb-3 row">'
        // html_body += '<label for="inputTanggalMulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>'
        // html_body += '<div class="col-sm-10">'
        // html_body += '<input type="date" class="form-control" id="inputTanggalMulai">'
        // html_body += '</div>'
        // html_body += '</div>'

        // html_body += '<div class="mb-3 row">'
        // html_body += '<label for="inputTanggalAkhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>'
        // html_body += '<div class="col-sm-10">'
        // html_body += '<input type="date" class="form-control" id="inputTanggalAkhir">'
        // html_body += '</div>'
        // html_body += '</div>'

        html_body += '<div class="mb-3 row">'
        html_body += '<label for="inputTanggalAkhir" class="col-sm-2 col-form-label">Modul</label>'
        html_body += '<div class="col-sm-10">'
        html_body += '<div id="fieldTambahModul">'
        html_body += '</div>'
        html_body += '<button class="btn btn-outline-primary w-100" id="btnTambahModul"><i class="fa fa-plus"></i> Tambah Modul</button>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnTambahQuizBaru">Simpan</button>'
        $('#modalFooter').html(html_footer);
    });
    $(document).on('click', '#btnHapusQuiz', function(e) {
        var id = $(this).data('id')
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/hapusQuiz'); ?>',
            type: 'POST',
            data: {
                quiz_id: id
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnHapusQuiz').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnHapusQuiz').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        $('#modal').modal('hide')
                        getDataQuiz()
                        $('#btnHapusQuiz').prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Isian Form Tidak Lengkap'
                    });
                    $('#btnHapusQuiz').prop("disabled", false);
                }
            }
        });
    })
    $(document).on('keyup', '#search_soal', function(e) {
        var value = $(this).val().toLowerCase();
        var cards = $('.text_soal').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_soal').map(function() {
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
    $(document).on('click', '#btnTambahQuizBaru', function(e) {
        var nama_quiz = $('#inputNamaQuiz').val()
        // var date_start = $('#inputTanggalMulai').val()
        // var date_end = $('#inputTanggalAkhir').val()
        var nama_modul = $('.nama_modul').map(function() {
            return $(this).val();
        }).get();
        var quiz_break = $('.quiz_break').map(function() {
            return $(this).val();
        }).get();
        var quiz_timer = $('.quiz_timer').map(function() {
            return $(this).val();
        }).get();
        var checkboxRandomSoal = $('.checkboxRandomSoal').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        var checkboxRandomJawaban = $('.checkboxRandomJawaban').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/insertQuiz'); ?>',
            type: 'POST',
            data: {
                division_id: 1,
                user_id: 100,
                nama_quiz: nama_quiz,
                // date_start: date_start,
                // date_end: date_end,
                modul_name: nama_modul,
                timer: quiz_timer,
                timebreak: quiz_break,
                is_random_q: checkboxRandomSoal,
                is_random_a: checkboxRandomJawaban,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnTambahQuizBaru').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnTambahQuizBaru').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        $('#modal').modal('hide')
                        getDataQuiz()
                        $('#btnTambahQuizBaru').prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Isian Form Tidak Lengkap'
                    });
                    $('#btnTambahQuizBaru').prop("disabled", false);
                }
            }
        });
    })

    var deleted_modul = []
    $(document).on('click', '.deletedModul', function(e) {
        var id = $(this).data('id')
        deleted_modul.push(id)
        $('#deletedModulList' + id).remove()
    })
    $(document).on('click', '#btnSimpanKelolaQuiz', function(e) {
        var nama_quiz = $('#inputNamaQuiz').val()
        var id_quiz = $('#inputNamaQuiz').data('id')
        // var date_start = $('#inputTanggalMulai').val()
        // var date_end = $('#inputTanggalAkhir').val()
        var nama_modul = $('.nama_modul').map(function() {
            return $(this).val();
        }).get();
        var quiz_break = $('.quiz_break').map(function() {
            return $(this).val();
        }).get();
        var quiz_timer = $('.quiz_timer').map(function() {
            return $(this).val();
        }).get();
        var checkboxRandomSoal = $('.checkboxRandomSoal').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        var checkboxRandomJawaban = $('.checkboxRandomJawaban').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        var nama_modul_recent = $('.nama_modul_recent').map(function() {
            return $(this).val();
        }).get();
        var id_quizdetail_recent = $('.nama_modul_recent').map(function() {
            return $(this).data('id');
        }).get();
        var id_modul_recent = $('.nama_modul_recent').map(function() {
            return $(this).data('modul_id');
        }).get();
        var quiz_break_recent = $('.quiz_break_recent').map(function() {
            return $(this).val();
        }).get();
        var quiz_timer_recent = $('.quiz_timer_recent').map(function() {
            return $(this).val();
        }).get();
        var checkboxRandomSoal_recent = $('.checkboxRandomSoal_recent').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        var checkboxRandomJawaban_recent = $('.checkboxRandomJawaban_recent').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/modifQuizModul'); ?>',
            type: 'POST',
            data: {
                division_id: 1,
                user_id: 100,
                nama_quiz: nama_quiz,
                id_quiz: id_quiz,
                // date_start: date_start,
                // date_end: date_end,
                modul_name: nama_modul,
                timer: quiz_timer,
                timebreak: quiz_break,
                is_random_q: checkboxRandomSoal,
                is_random_a: checkboxRandomJawaban,
                modul_name_recent: nama_modul_recent,
                modul_id_recent: id_modul_recent,
                quizdetail_id_recent: id_quizdetail_recent,
                timer_recent: quiz_timer_recent,
                timebreak_recent: quiz_break_recent,
                is_random_q_recent: checkboxRandomSoal_recent,
                is_random_a_recent: checkboxRandomJawaban_recent,
                deleted_modul_id: deleted_modul,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnSimpanKelolaQuiz').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnSimpanKelolaQuiz').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        $('#modal').modal('hide')
                        getDataQuiz()
                        $('#btnSimpanKelolaQuiz').prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Isian Form Tidak Lengkap'
                    });
                    $('#btnSimpanKelolaQuiz').prop("disabled", false);
                }
            }
        });
    })
</script>