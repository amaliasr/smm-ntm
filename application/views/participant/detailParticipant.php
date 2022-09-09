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
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-5 mb-2">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title mb-4" id="nama_quiz">
                            Quiz Title
                        </h1>
                        <p class="text-white d-inline"><i class="fa fa-calendar"></i>&nbsp;<span id="tanggal_quiz">-</span></p>
                        <p class="text-white"><i class="fa fa-clock"></i>&nbsp;<span id="waktu_quiz">-</span></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-body">
                <div class="row">

                    <div class="col-6 mb-5">
                        <div class="input-group input-group-joined">
                            <input class="form-control pe-0" type="text" placeholder="Cari Nama" aria-label="Search" id="search_nama">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6 mb-5">
                        <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</button> -->
                        <button type="button" class="btn btn-outline-primary" id="btnCetak"><i class="fa fa-print"></i></button>
                    </div>
                    <div class="col-6">
                        <div class="card shadow-none mb-1" style="cursor: pointer;border:2px dotted #A2B5BB;" id="modalAdd" data-bs-toggle="modal" data-bs-target="#modal">
                            <div class="card-body">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 text-center fw-bold"><i class="fa fa-plus me-2"></i><span class="">Tambah</span></div>
                                </div>
                            </div>
                        </div>
                        <div id="listUser">

                        </div>
                    </div>
                    <div class="col-6" id="manageUser">


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
    var data_all_user = ""
    var schedule_id = "<?= $schedule_id ?>"
    var schedule_id_array = []
    schedule_id_array.push(schedule_id)
    var id_divisi = sessionStorage.getItem('division_id')
    var id_user = sessionStorage.getItem('user_id')
    var check_user = 0

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
        var date = day + "/" + month + "/" + year;
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
        getDataPartisipan()
    })

    function getDataPartisipan() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/showQuizUser'); ?>',
            type: 'GET',
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data, Refresh Kembali Halaman Ini'
                });
            },
            beforeSend: function() {
                $("#overlay").show();
            },
            success: function(response) {
                var data = response['data']
                $.each(data, function(key, value) {
                    if (value['schedule_id'] == schedule_id) {
                        var nama_quiz = value['quiz_name']
                        var date_end = formatDate(value['date_end'])
                        var date_start = formatDate(value['date_start'])
                        var time_start = formatTime(value['date_start'])
                        var time_end = formatTime(value['date_end'])
                        data_user = JSON.parse(value['data_participant'])

                        $('#nama_quiz').html(nama_quiz)
                        $('#tanggal_quiz').html(date_start + ' - ' + date_end)
                        $('#waktu_quiz').html(time_start + ' - ' + time_end)
                        listDataPartisipan(nama_quiz, data_user)
                    }
                })
            }
        });
    }
    var id_partisipan = []

    function listDataPartisipan(nama_quiz, data_user) {
        // console.log(data_user)
        var html = ""
        $.each(data_user, function(key, value) {
            id_partisipan.push(value['user_id'])
            if (value['division_id'] == null) {
                value['division_id'] = 0
            }
            html += '<div class="card shadow-none data-user mb-1" data-id="' + value['user_id'] + '" id="card_user' + key + '" style="cursor: pointer">'
            html += '<div class="card-body">'
            html += '<div class="row d-flex align-items-center">'
            html += '<div class="col-11"><span class="text_user" data-id_divisi="' + value['division_id'] + '" data-id="' + key + '">' + value['user_name'] + '</span></div>'
            html += '<div class="col-1">'
            html += '<i class="fa fa-angle-right"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listUser').html(html)
        getDataUser()
    }

    function getDataUser() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/showUser'); ?>',
            type: 'GET',
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data, Refresh Kembali Halaman Ini'
                });
            },
            beforeSend: function() {},
            success: function(response) {
                $("#overlay").hide();
                var data = response['data']
                data_all_user = data
            }
        });
    }
    $(document).on('keyup', '#search_nama', function(e) {
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
    $(document).on('click', '.data-user', function(e) {
        var id = $(this).data('id')
        $.each(data_user, function(key, value) {
            if (value['user_id'] == id) {
                formDetailUser(value['code'], value['division_name'], value['user_name'], value['participant_id'])
            }
        })
    })

    function formDetailUser(code, nama_divisi, user_name, participant_id) {
        var html = ""
        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<div class="container">'
        html += '<table class="table">'
        html += '<tbody>'
        html += '<tr>'
        html += '<th>Nama</th>'
        html += '<td>' + user_name + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<th>Divisi</th>'
        html += '<td>' + nama_divisi + '</td>'
        html += '</tr>'
        html += '<tr>'
        html += '<th>Kode</th>'
        html += '<td>' + code + '</td>'
        html += '</tr>'
        html += '</tbody>'
        html += '</table>'
        html += '<button type="button" class="btn btn-sm btn-danger" id="hapus" data-id="' + participant_id + '" data-nama="' + user_name + '">Hapus dari Quiz</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#manageUser').html(html)
    }
    $(document).on('click', '#hapus', function(e) {
        var id = $(this).data('id')
        var nama = $(this).data('nama')
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus partisipan ' + nama + ' dari Jadwal Quiz ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo api_hrd('MasterHr/deleteParticipant'); ?>',
                    type: 'POST',
                    data: {
                        participant_id: id
                    },
                    success: function(response) {
                        Swal.fire(
                            'Terhapus!',
                            'Data Terhapus',
                            'success'
                        )
                        $('#manageUser').empty()
                        getDataPartisipan()
                    }
                });
            }
        })
    })
    $(document).on('click', '#btnCetak', function(e) {
        var url = '<?= base_url('Participant/cetakPartisipan') ?>';
        var params = "*$" + schedule_id;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    });
    $(document).on('click', '#modalAdd', function(e) {
        console.log(id_partisipan)
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Tambah Partisipan</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container">';
        html_body += '<div class="row">';
        html_body += '<div class="col-12 mb-2">'
        html_body += '<div class="input-group input-group-joined mb-1">'
        html_body += '<input class="form-control pe-0" type="text" placeholder="Cari Nama Perserta" aria-label="Search" id="search_peserta">'
        html_body += '<span class="input-group-text">'
        html_body += '<i class="fa fa-search"></i>'
        html_body += '</span>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12" id="listUser2">';
        html_body += '</div>';
        html_body += '</div>';
        html_body += '</div>';
        $('#modalBody').html(html_body);


        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnSimpan">Simpan (<span id="jumlah_partisipan">0</span>)</button>'
        $('#modalFooter').html(html_footer);
        listUser()
    })

    function listUser() {
        var html = ""
        $.each(data_all_user, function(key, value) {
            var ada = "tidak"
            for (let i = 0; i < id_partisipan.length; i++) {
                if (id_partisipan[i] == value['user_id']) {
                    ada = "ada"
                }
            }
            if (value['division_id'] == null) {
                value['division_id'] = 0
            }
            if (ada == "tidak") {
                html += '<div class="card shadow-none data-user2  mb-1" data-id="' + value['user_id'] + '" id="card_user2' + key + '">'
                html += '<div class="card-body">'
                html += '<div class="row d-flex align-items-center">'
                html += '<div class="col-1">'
                html += '<input class="form-check-input checkbox-user" type="checkbox" value="' + value['user_id'] + '" id="checkUser' + value['user_id'] + '">'
                html += '</div>'
                html += '<div class="col-11"><span class="text_user2" data-id_divisi="' + value['division_id'] + '" data-id="' + key + '">' + value['full_name'] + '</span></div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })
        $('#listUser2').html(html)
    }
    $(document).on('click', '.data-user2', function(e) {
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
    $(document).on('keyup', '#search_peserta', function(e) {
        var value = $(this).val().toLowerCase();
        var cards = $('.text_user2').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_user2').map(function() {
            return $(this).data('id');
        }).get();
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            if (element > -1) {
                $('#card_user2' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_user2' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('click', '#btnSimpan', function(e) {
        var user_id = $('.checkbox-user:checked').map(function() {
            return $(this).val();
        }).get();
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/insertParticipant'); ?>',
            type: 'POST',
            data: {
                user_id: user_id,
                quiz_schedule_id: schedule_id_array,
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
                    }).then((responses) => {
                        $('#btnSimpan').prop("disabled", false);
                        $('#modal').modal('hide')
                        reset()
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

    function reset() {
        check_user = 0
        $('#jumlah_partisipan').html(check_user)
        getDataPartisipan()
    }
</script>