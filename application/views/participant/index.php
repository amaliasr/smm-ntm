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
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            Participant
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">Managemen Partisipan <button class="btn btn-primary btn-sm" id="btnTambahParticipant"><i data-feather="plus"></i>Tambah Partisipant</button></div>
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
        getQuizParticipant()
    })

    function getQuizParticipant() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/showQuizUser'); ?>',
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
        var date = jam + ":" + menit + ":" + detik;
        return date;
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