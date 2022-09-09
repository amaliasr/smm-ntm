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
    <div class="fixed-bottom text-end" style="z-index: 4;">
        <button type="button" class="btn btn-primary rounded-0 rounded-top" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" id="jumlahSoal">Question Maps (1)</button>
    </div>
    <div class="offcanvas offcanvas-end border border-light" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-scroll="true" data-bs-backdrop="false" style="width: 300px;">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Question Maps</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row g-2 rowQuestionMaps">
            </div>
        </div>
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
        <div class="row mb-3">
            <div class="col-md-7 col-12">
                <div class="card card-header-actions shadow-none mb-3 h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="form-select form-select-sm mb-2 w-100" id="choose_quiz">
                                            <option value="">Pilih Quiz</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select form-select-sm w-100" id="choose_modul" disabled>
                                            <option value="">Pilih Modul</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <span class="float-start">
                                            <small class="mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" id="checkBankSoal">
                                                    <label class="form-check-label" for="checkBankSoal">
                                                        Hanya Bank Soal
                                                    </label>
                                                </div>
                                            </small>
                                        </span>
                                        <span class="float-end">
                                            <u style="cursor: pointer;" id="btnTambahQuiz" data-bs-toggle="modal" data-bs-target="#modal"><small>Quiz Baru</small></u>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 border-start">
                                <!-- <button class="btn btn-outline-primary btn-sm float-end w-100 mb-2" id="btnTambahQuiz" data-bs-toggle="modal" data-bs-target="#modal"><i class="fa fa-plus"></i>&nbsp;Quiz Baru</button> -->
                                <button class="btn btn-outline-primary btn-sm float-end w-100 h-100" id="btn_add"><i class="fa fa-save"></i>&nbsp;Simpan Semua</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <div class="card card-header-actions shadow-none mb-3 h-100">
                    <div class="card-body">
                        <div class="row h-100">
                            <div class="col-6 text-center align-self-center">
                                <div class="fa fa-2x fa-calendar mb-3"></div>
                                <div class="text-sm fw-bold">Schedule <span id="status_schedule"></span></div>
                                <button class="btn btn-outline-primary btn-sm" id="btnSchedule"><i data-feather="plus"></i>&nbsp;&nbsp;Tambah</button>
                            </div>
                            <div class="col-6 border-start text-center align-self-center">
                                <div class="fa fa-2x fa-users mb-3"></div>
                                <div class="text-sm fw-bold">Participant</div>
                                <button class="btn btn-outline-primary btn-sm" id="btnPartisipant"><i data-feather="plus"></i>&nbsp;&nbsp;Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush mb-3 shadow-sm" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa fa-plus"></i>&nbsp;Tambah Rules&nbsp;<span class="text-warning" id="warningRule"></span>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-6">
                                <textarea class="editor_rules"></textarea>
                            </div>
                            <div class="col-6">
                                <b>Preview</b>
                                <br>
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <h5 class="fw-medium">Rules</h5>
                                        <div id="showRules">

                                        </div>
                                        <div class="float-end"><button class="btn btn-success" id="">I'm Ready</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-header-actions shadow-none">
            <div class="card-header">
                <span>Tambah Soal&nbsp;<span class="text-warning" id="warningSoal"></span></span>
            </div>
            <div class="card-body">

                <!-- card -->
                <div id="viewPertanyaan">
                </div>
                <!-- card -->
                <div class="col-12 mt-3">
                    <button type="button" class="btn btn-outline-primary btnTambahPertanyaan w-100 d-none" id="btnTambahPertanyaan" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus"></i>&nbsp;Tambah Pertanyaan</button>
                    <div class="dropdownShowPertanyaan dropdown">
                        <button type="button" class="btn btn-outline-primary btnDropdownPertanyaan w-100" id="btnDropdownPertanyaan" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus"></i>&nbsp;Tambah Pertanyaan</button>
                        <ul class="menu-pertanyaan dropdown-menu" aria-labelledby="btnDropdownPertanyaan">
                            <li><a class="dropdown-item" href="#" id="btnTambahPertanyaan">Tambah Baru</a></li>
                            <li><a class="dropdown-item" href="#" id="btnTambahSudahAda" data-bs-toggle="modal" data-bs-target="#modal">Tambah yang Sudah Ada</a></li>
                        </ul>
                    </div>
                    <small>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkboxAllNew">
                            <label class="form-check-label" for="checkboxAllNew">
                                Tambah Baru Semua
                            </label>
                        </div>
                    </small>
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
    var noPertanyaan = -1;
    var huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
    var check_new_all = false
    var data_quiz_modul = ""
    var repo = "http://127.0.0.1/Prometheus/assets/image"
    var id_divisi = sessionStorage.getItem('division_id')
    var id_user = sessionStorage.getItem('user_id')
    var schedule_id = ""

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    function removeTags(str) {
        if ((str === null) || (str === ''))
            return false;
        else
            str = str.toString();
        return str.replace(/(<([^>]+)>)/ig, '');
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $(document).ready(function() {
        // console.log(localStorage.getItem('rule'))
        if (localStorage.getItem('rule') != '' && localStorage.getItem('rule') != 'null') {
            $('.editor_rules').html(localStorage.getItem('rule'))
            $('#showRules').html(localStorage.getItem('rule'))
        } else {
            $('#warningRule').html('<i class="fa fa-warning"></i>')
        }
        $('textarea.editor_rules').tinymce({
            height: 300,
            menubar: false,
            plugins: [
                'advlist', 'autolink',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table | image',
            file_picker_types: 'image',
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            setup: function(ed) {
                ed.on('keyup', function(e) {
                    setTimeout(
                        function() {
                            $('#showRules').html(ed.getContent())
                        },
                        300);
                });
            },
            // images_upload_url: repo,
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        });

        var width = $(window).width();
        var height = $(window).height();
        $('.spinner-loading').css('padding-top', height / 2 + 'px');
        $('.spinner-loading').css('text-align', 'center');
        $('.text-loading').css('text-align', 'center');
        getQuizSelect()
        if (localStorage.getItem("data_modul") == null && localStorage.getItem("modul_id") == null && localStorage.getItem("quiz_id") == null) {
            addPertanyaan()
        } else {
            if (localStorage.getItem("modul_id_array") == 'null') {
                var data = JSON.parse(localStorage.getItem('data_modul'))['data']
                if (data.length == 0) {
                    $('#warningSoal').html('<i class="fa fa-warning"></i>')
                }
                selectFromLocal(data)
            } else {
                addPertanyaan()
            }

        }
    })

    function selectFromLocal(data) {
        $.each(data, function(key, value) {
            addPertanyaanYgSudahAda(value['label'], value['data_jawaban'], value['id'], value['category_id'], data.length)
        })
    }
    $(document).on('click', "#btnTambahPertanyaan", function() {
        addPertanyaan()
    })

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
                data_quiz_modul = response['data']
                // console.log(data_quiz_modul)
                showQuizSelect(data_quiz_modul)
            }
        });
    }

    function showQuizSelect(data_quiz_modul) {
        var html = ""
        html += '<option value="" disabled selected>Pilih Quiz</option>'
        $.each(data_quiz_modul, function(key, value) {
            var select = ""
            if (localStorage.getItem('quiz_id') == value['quiz_id']) {
                select = "selected"
                schedule_id = value['schedule_id']
            }
            html += '<option value="' + value['quiz_id'] + '" ' + select + '>' + value['quiz_name'] + '</option>'
        })
        $('#choose_quiz').html(html)
        if (localStorage.getItem('quiz_id') != null) {
            $('#choose_quiz').attr('disabled', true)
            $('#checkBankSoal').attr('disabled', true)
            if (localStorage.getItem('modul_id_array') != 'null') {
                showSelectModulLocalArray()
            } else {
                showSelectModulLocal()
            }
        }
    }

    function showSelectModulLocal() {
        var html = ""
        $.each(data_quiz_modul, function(key, value) {
            if (value['quiz_id'] == localStorage.getItem('quiz_id')) {
                $.each(JSON.parse(value['data_modul']), function(keys, values) {
                    var select = ""
                    if (localStorage.getItem('modul_id') == values['id_modul']) {
                        select = "selected"
                    }
                    html += '<option value="' + values['id_modul'] + '" ' + select + '>' + values['nama_modul'] + '</option>'
                })
            }
        })
        $('#choose_modul').attr('disabled', true).html(html)
    }

    function showSelectModulLocalArray() {
        // console.log(data_quiz_modul)
        // buat yang beru pertama kali buat
        var html = ""
        html += '<option value="" disabled selected>Pilih Modul</option>'
        $.each(data_quiz_modul, function(key, value) {
            if (value['quiz_id'] == localStorage.getItem('quiz_id')) {
                $.each(JSON.parse(value['data_modul']), function(keys, values) {
                    html += '<option value="' + values['id_modul'] + '">' + values['nama_modul'] + '</option>'
                })
                var status = ''
                if (value['schedule_id'] == null) {
                    status = '<span class="text-warning"><i class="fa fa-warning"></i></span>'
                } else {
                    status = '<span class="text-success"><i class="fa fa-check-square"></i></span>'
                }
                $('#status_schedule').html(status)
            }
        })
        $('#choose_modul').removeAttr('disabled', true).html(html)
    }
    $(document).on('change', "#choose_quiz", function() {
        // console.log(data_quiz_modul)
        var html = ""
        var id = $('#choose_quiz').val()
        html += '<option value="" disabled selected>Pilih Modul</option>'
        $.each(data_quiz_modul, function(key, value) {
            if (value['quiz_id'] == id) {
                $.each(JSON.parse(value['data_modul']), function(keys, values) {
                    html += '<option value="' + values['id_modul'] + '">' + values['nama_modul'] + '</option>'
                })
            }
        })

        $('#choose_modul').removeAttr('disabled', true).html(html)
    })

    function addPertanyaan() {
        noPertanyaan++
        var nomer = parseInt(noPertanyaan) + 1
        var html = ""
        html += '<div class="card shadow-none mb-3" id="baris' + noPertanyaan + '">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<span class="badge bg-primary">' + nomer + '</span>'
        html += '</div>'
        html += '<div class="col-10">'
        html += '<textarea class="editor" data-id="' + noPertanyaan + '" data-id_current=""></textarea>'

        html += '<div class="row mt-5 row-col-1">'
        html += '<div class="col-12 col-md-10">'
        html += '<h6><b>Jawaban :</b></h6>'
        html += '<ul class="list-group list-group-sortable' + noPertanyaan + '">'

        html += '<li class="list-group-item">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<p>A</p>'
        html += '</div>'
        html += '<div class="col-9">'
        html += '<div class="input-group input-group-sm">'
        html += '<input type="text" class="form-control w-100 pilihan_jawaban" data-id_jawaban="" id="floatingInput" placeholder="" data-id="' + noPertanyaan + '" data-no="0">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-2">'
        html += '<div class="form-check form-check-inline">'
        html += '<input class="form-check-input checkbox-jawaban pilihan_true" type="checkbox" name="inlineRadioOptions' + noPertanyaan + '" id="inlineRadio' + noPertanyaan + '" value="1" data-no="0">'
        html += '<label class="form-check-label" for="inlineRadio' + noPertanyaan + '0"></label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</li>'

        html += '<li class="list-group-item">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<p>B</p>'
        html += '</div>'
        html += '<div class="col-9">'
        html += '<div class="input-group input-group-sm">'
        html += '<input type="text" class="form-control w-100 pilihan_jawaban" data-id_jawaban="" id="floatingInput" placeholder="" data-id="' + noPertanyaan + '" data-no="1">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-2">'
        html += '<div class="form-check form-check-inline">'
        html += '<input class="form-check-input checkbox-jawaban pilihan_true" type="checkbox" name="inlineRadioOptions' + noPertanyaan + '" id="inlineRadio' + noPertanyaan + '" value="1" data-no="1">'
        html += '<label class="form-check-label" for="inlineRadio' + noPertanyaan + '1"></label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</li>'
        html += '<li class="list-group-item">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<p>C</p>'
        html += '</div>'
        html += '<div class="col-9">'
        html += '<div class="input-group input-group-sm">'
        html += '<input type="text" class="form-control w-100 pilihan_jawaban" data-id_jawaban="" id="floatingInput" placeholder="" data-id="' + noPertanyaan + '" data-no="2">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-2">'
        html += '<div class="form-check form-check-inline">'
        html += '<input class="form-check-input checkbox-jawaban pilihan_true" type="checkbox" name="inlineRadioOptions' + noPertanyaan + '" id="inlineRadio' + noPertanyaan + '" value="1" data-no="2">'
        html += '<label class="form-check-label" for="inlineRadio' + noPertanyaan + '2"></label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</li>'
        html += '<div id="viewJawaban' + noPertanyaan + '">'
        html += '</div>'
        html += '</ul>'
        html += '</div>'
        html += '<div class="col-2 mt-2 float-end">'
        html += '</div>'
        html += '<div class="col-4 mt-2 float-end">'
        html += '<button type="button" class="btn btn-outline-primary btn-sm" id="btnPilihanJawaban" data-id="' + noPertanyaan + '"><i class="fa fa-plus"></i>&nbsp;Pilihan Jawaban</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-1">'
        if (noPertanyaan != 0) {
            html += '<button type="button" class="btn btn-danger btn-sm" onclick="return deletePertanyaan(' + noPertanyaan + ');"><i class="fa fa-trash"></i></button>'
        }
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#viewPertanyaan').append(html)
        $('.list-group-sortable' + noPertanyaan + '').sortable({
            placeholderClass: 'list-group-item'
        });
        $('.selectpicker').selectpicker();
        $('textarea.editor').tinymce({
            height: 300,
            menubar: false,
            plugins: [
                'advlist', 'autolink',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table | image',
            file_picker_types: 'image',
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            // images_upload_url: repo,
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        });
        jumlahSoal('add', noPertanyaan, "")

    }

    function deletePertanyaan(noPertanyaans) {
        $('#baris' + noPertanyaans).remove();
        noPertanyaan--
        jumlahSoal('delete', noPertanyaans, "")
    }
    var noJawaban = {}
    $(document).on('click', "#btnPilihanJawaban", function() {
        var id = $(this).data(id)['id']
        console.log(id)
        if (noJawaban[id] == undefined) {
            noJawaban[id] = 3
        }
        var html = ""
        html += '<li class="list-group-item" id="listJawaban' + id + noJawaban[id] + '">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<p>' + huruf[noJawaban[id]] + '</p>'
        html += '</div>'
        html += '<div class="col-9">'
        html += '<div class="input-group input-group-sm">'
        html += '<input type="text" class="form-control pilihan_jawaban w-100" id="floatingInput" placeholder="" data-id="' + id + '" data-no="' + noJawaban[id] + '">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-2">'
        html += '<div class="form-check form-check-inline">'
        html += '<input class="form-check-input checkbox-jawaban pilihan_true" type="checkbox" name="inlineRadioOptions' + id + '" id="inlineRadio' + id + noJawaban[id] + '" value="' + noJawaban[id] + '" data-no="' + noJawaban[id] + '">'
        html += '<label class="form-check-label" for="inlineRadio' + id + noJawaban[id] + '"><button type="button" class="btn btn-danger btn-sm ms-1" onclick="return deleteJawaban(' + id + ',' + noJawaban[id] + ');"><i class="fa fa-trash"></i></button></label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</li>'
        $('#viewJawaban' + id).append(html)
        noJawaban[id]++
    })

    function deleteJawaban(id, no_jawaban) {
        $('#listJawaban' + id + no_jawaban).remove();
        noJawaban[id]--
    }

    function jumlahSoal(variable, nomer_id, length) {
        var nomer = parseInt(noPertanyaan) + 1
        $('#jumlahSoal').html('Question Maps (' + nomer + ')')
        if (variable == 'add') {
            questionMapsAdd(nomer_id, length)
        } else {
            questionMapsDelete(nomer_id, length)
        }
    }

    function questionMapsAdd(nomer_id, length) {

        var nomer = parseInt(nomer_id) + 1
        var html = ""
        html += '<div class="col-3" id="btnMaps" data-id="' + nomer_id + '"><button type="button" class="btn btn-primary w-100 btnQuestionMaps" >' + nomer + '</button></div>'
        $('.rowQuestionMaps').append(html)
        $('.rowQuestionMaps').sortable({
            placeholderClass: 'btnQuestionMaps'
        });
        if (length == "") {
            if (nomer_id != 0) {
                setTimeout(
                    function() {
                        $('html').animate({
                                scrollTop: $("#baris" + nomer_id).offset().top - 100
                            },
                            'fast');
                    },
                    100);
            }
        }


    }

    function questionMapsDelete(nomer_id) {
        $('[id="btnMaps"][data-id="' + nomer_id + '"]').remove();
    }
    $(document).on('click', '#btnMaps', function(e) {
        var id = $(this).data('id')
        $('html').animate({
                scrollTop: $("#baris" + id).offset().top - 100
            },
            'fast');
    })
    $(document).on('click', '#btnTambahQuiz', function(e) {
        $('#modalDialog').addClass('modal-dialog modal-lg modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Add Quiz</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnSimpanQuizModul">Simpan</button>'
        $('#modalFooter').html(html_footer);
        SelectModul()
    })

    function SelectModul() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataQuizModul'); ?>',
            type: 'GET',
            data: {
                division_id: id_divisi
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                tampilQuizModul(data)
            }
        });
    }
    var array_modul = {}
    var array_quiz = 0

    function tampilQuizModul(data) {
        var html_body = ""
        html_body += '<ul class="list-group">'
        $.each(data, function(key, value) {
            html_body += '<li class="list-group-item list-group-item-primary list-group-item-action fw-bold d-flex justify-content-between align-items-center addModul"  data-id="' + array_quiz + '" data-quiz_id="' + value['quiz_id'] + '"><span><i class="fa fa-chevron-right me-2" aria-hidden="true"></i>' + value['quiz_name'] + '</span><span class="badge bg-primary rounded-pill"><i class="fa fa-plus"></i></span></li>'
            $.each(JSON.parse(value['data_modul']), function(keys, values) {
                html_body += '<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"><span class="ms-5"><b>#' + values['code_modul'] + '</b>&nbsp;&nbsp;&nbsp;' + values['nama_modul'] + '</span></li>'
            })
            html_body += '<div id="formTambahModul' + array_quiz + '">'
            html_body += '</div>'
            array_quiz++
        })
        html_body += '<div id="formTambahQuiz">'
        html_body += '</div>'
        html_body += '<li class="list-group-item list-group-item-action active text-center" id="addQuiz">Tambah Quiz</li>'
        html_body += '</ul>'
        $('#modalBody').html(html_body);
    }

    $(document).on('click', '.addModul', function(e) {
        var id = $(this).data(id)['id']
        var quiz_id = $(this).data(quiz_id)['quiz_id']
        if (array_modul[id] == undefined) {
            array_modul[id] = 0
        }
        var html_body = ""
        html_body += '<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start modul' + id + '"  id="listModul' + id + array_modul[id] + '"><span class="ms-5"><input class="form-control form-control-sm input_modul" type="text" placeholder="Isi nama modul tanpa menuliskan kode" style="width:300px;" data-id="' + id + '" data-quiz_id="' + quiz_id + '"></span><span><button type="button" class="btn btn-danger btn-sm" onclick="return deleteModul(' + id + ',' + array_modul[id] + ');"><i class="fa fa-trash"></i></button></span></li>'
        $('#formTambahModul' + id).append(html_body)
        array_modul[id]++
    })
    $(document).on('click', '#addQuiz', function(e) {
        var id = $(this).data(id)['id']
        var html_body = ""
        html_body += '<li class="list-group-item list-group-item-primary list-group-item-action d-flex justify-content-between align-items-start" id="listQuiz' + array_quiz + '"><span><div class="input-group"><input class="form-control form-control-sm input_quiz" data-id="' + array_quiz + '" type="text" placeholder="Isi Nama Quiz Baru" style="width:300px;"></div></span><div><button type="button" class="btn btn-primary btn-sm addModul "  data-id="' + array_quiz + '"><i class="fa fa-plus"></i></button><button type="button" class="btn btn-danger btn-sm ms-2" onclick="return deleteQuiz(' + array_quiz + ');"><i class="fa fa-trash"></i></button></div></li>'
        html_body += '<div id="formTambahModul' + array_quiz + '">'
        html_body += '</div>'
        $('#formTambahQuiz').append(html_body)
        array_quiz++
    })

    function deleteModul(id, no_modul) {
        $('#listModul' + id + no_modul).remove();
    }

    function deleteQuiz(no_quiz) {
        $('#listQuiz' + no_quiz).remove();
        $('#formTambahModul' + no_quiz).remove();
    }
    $(document).bind("keydown", function(e) {
        if (e.ctrlKey && e.which == 83) {
            e.preventDefault();
            e.stopPropagation();
            simpan()
        }
    });
    $(document).on('click', '#btn_add', function(e) {
        simpan()
    })
    $(document).on('click', '#checkboxAllNew', function(e) {
        if ($(this).is(':checked') == true) {
            check_new_all = true
            $('.btnTambahPertanyaan').removeClass('d-none')
            $('.btnDropdownPertanyaan').addClass('d-none')
        } else {
            check_new_all = false
            $('.btnTambahPertanyaan').addClass('d-none')
            $('.btnDropdownPertanyaan').removeClass('d-none')
        }
    })

    function swallalala(text) {
        Swal.fire({
            title: 'Success!',
            text: text,
            icon: 'success',
        }).then((response) => {

        });
    }
    $(document).on('click', '#btnTambahSudahAda', function(e) {
        $('#modalDialog').addClass('modal-dialog modal-lg');

        var html_header = '';
        html_header += '<h5 class="modal-title">Tambah Soal yang Sudah Ada</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = ""
        html_body += '<div class="row">'

        html_body += '<div class="col-12 mb-5">'
        html_body += '<div class="input-group input-group-joined">'
        html_body += '<input class="form-control pe-0" type="text" placeholder="Cari Soal menggunakan Kode atau Nama Soal" aria-label="Search" id="search_soal">'
        html_body += '<span class="input-group-text">'
        html_body += '<i class="fa fa-search"></i>'
        html_body += '</span>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="overflow-cari-soal">'
        html_body += '<div class="col-12" id="isi_soal">'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnSimpanSoalSudahAda">Simpan</button>'
        $('#modalFooter').html(html_footer);
        dataSoalSudahAda()
    })
    var data_soal = ""

    function dataSoalSudahAda() {
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/getDataAllSoal'); ?>',
            type: 'GET',
            data: {
                divisi_id: id_divisi
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                var data = response['data']
                data_soal = data
                listSoalSudahAda(data)
            }
        });
    }

    function listSoalSudahAda(data) {
        var html_body = ""
        $.each(data, function(key, value) {
            html_body += '<div class="card shadow-none btn-available-soal  mt-1" id="card_soal' + key + '" data-id="' + key + '">'
            html_body += '<div class="card-body" style="padding:10px;">'
            html_body += '<div class="row">'

            html_body += '<div class="col-10">'
            html_body += '<b class="text_soal" data-id="' + key + '">#' + removeTags(value['code']) + '</b>'
            html_body += '<p class="text_soal" data-id="' + key + '">' + removeTags(value['label']) + '</p>'
            html_body += '</div>'

            html_body += '<div class="col-2 d-flex align-items-center">'
            html_body += '<input class="form-check-input checkbox-jawaban checkbox-soalada" type="checkbox" name="inlineRadioOptions' + key + '" id="inlineRadioSoalSudahAda' + key + '" value="' + key + '">'
            html_body += '<label class="form-check-label" for="inlineRadioSoalSudahAda' + key + '0"></label>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#isi_soal').html(html_body)
    }
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
                $('#card_soal' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_soal' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('click', '#btnSimpanSoalSudahAda', function(e) {
        var value_check = $('.checkbox-soalada:checked').map(function() {
            return $(this).val();
        }).get();
        $.each(data_soal, function(key, value) {
            for (let i = 0; i < value_check.length; i++) {
                if (key == value_check[i]) {
                    var soal = value['label']
                    var jawaban = value['answer']
                    var id_soal = value['id']
                    var id_kategori = value['category_id']
                    addPertanyaanYgSudahAda(soal, jawaban, id_soal, id_kategori, data_soal.length)
                }
            }
        })
        $('#modal').modal('hide')
    })

    function addPertanyaanYgSudahAda(soal, jawaban, id_soal, id_kategori, length) {
        // console.log(JSON.parse(jawaban))
        noPertanyaan++
        var nomer = parseInt(noPertanyaan) + 1
        var html = ""
        html += '<div class="card shadow-none mb-3" id="baris' + noPertanyaan + '">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<span class="badge bg-primary">' + nomer + '</span>'
        html += '</div>'
        html += '<div class="col-10">'
        html += '<textarea class="editor" data-id="' + noPertanyaan + '" data-id_current="' + id_soal + '" disabled>' + soal + '</textarea>'
        html += '<div class="row mt-5 row-col-1">'
        html += '<div class="col-12 col-md-10">'
        html += '<h6><b>Jawaban :</b></h6>'

        html += '<ul class="list-group list-group-sortable' + noPertanyaan + '">'
        $.each(JSON.parse(jawaban), function(keys, values) {
            var check = ""
            if (values['is_true'] == 1) {
                check = 'checked'
            }
            html += '<li class="list-group-item">'
            html += '<div class="row">'
            html += '<div class="col-1">'
            html += '<p>' + huruf[keys] + '</p>'
            html += '</div>'
            html += '<div class="col-9">'
            html += '<div class="input-group input-group-sm">'
            html += '<input type="text" class="form-control w-100 pilihan_jawaban" data-id_jawaban="' + values['id_jawaban'] + '" id="floatingInput" placeholder="" value="' + values['label'] + '" data-id="' + noPertanyaan + '" data-no="' + keys + '">'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-2">'
            html += '<div class="form-check form-check-inline">'
            html += '<input class="form-check-input checkbox-jawaban pilihan_true" type="checkbox" name="inlineRadioOptions' + noPertanyaan + '" id="inlineRadio' + noPertanyaan + '" data-no="' + keys + '" value="1" ' + check + '>'
            html += '<label class="form-check-label" for="inlineRadio' + noPertanyaan + '0"></label>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</li>'
        })
        html += '<div id="viewJawaban' + noPertanyaan + '">'
        html += '</div>'

        html += '</ul>'
        html += '</div>'
        html += '<div class="col-2 mt-2 float-end">'
        html += '</div>'
        html += '<div class="col-4 mt-2 float-end">'
        html += '<button type="button" class="btn btn-outline-primary btn-sm" id="btnPilihanJawaban" data-id="' + noPertanyaan + '"><i class="fa fa-plus"></i>&nbsp;Pilihan Jawaban</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-1">'
        if (noPertanyaan != 0) {
            html += '<button type="button" class="btn btn-danger btn-sm" onclick="return deletePertanyaan(' + noPertanyaan + ');"><i class="fa fa-trash"></i></button>'
        }
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#viewPertanyaan').append(html)
        $('.list-group-sortable' + noPertanyaan + '').sortable({
            placeholderClass: 'list-group-item'
        });
        $('.selectpicker').selectpicker();
        $('textarea.editor').tinymce({
            height: 300,
            menubar: false,
            plugins: [
                'advlist', 'autolink',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table | image',
            file_picker_types: 'image',
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /* and here's our custom image picker*/
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        });
        jumlahSoal('add', noPertanyaan, length)

    }

    $(document).on('click', '.btn-available-soal', function(e) {
        var id = $(this).data('id')
        var checkbox = $('input[type="checkbox"][id="inlineRadioSoalSudahAda' + id + '"]')
        checkbox.attr('checked', !checkbox.attr('checked'))
    })
    $(document).on('click', '#btnSimpanQuizModul', function(e) {
        var modul = $('.input_modul').map(function() {
            return $(this).val();
        }).get();
        var quiz_id = $('.input_modul').map(function() {
            return $(this).data('quiz_id');
        }).get();
        var id = $('.input_modul').map(function() {
            return $(this).data('id');
        }).get();
        var nama_quiz = $('.input_quiz').map(function() {
            return $(this).val();
        }).get();
        var nama_quiz_id = $('.input_quiz').map(function() {
            return $(this).data('id');
        }).get();

        var new_quiz = {}
        for (let i = 0; i < nama_quiz.length; i++) {
            new_quiz[nama_quiz_id[i]] = nama_quiz[i];
        }
        var $nonempty = $('.input_modul').filter(function() {
            return this.value != ''
        });

        $.ajax({
            url: '<?php echo api_hrd('MasterHr/quickInsert'); ?>',
            type: 'POST',
            data: {
                modul: modul,
                quiz_id: quiz_id,
                id: id,
                new_quiz: new_quiz,
                divisi_id: id_divisi,
                user_id: id_user
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnSimpanQuizModul').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnSimpanQuizModul').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        SelectModul()
                        getQuizSelect()
                        $('#btnSimpanQuizModul').prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Isian Form Tidak Lengkap'
                    });
                    $('#btnSimpanQuizModul').prop("disabled", false);
                }
            }
        });
    })

    function simpan() {
        var complete = 0
        var quiz_id = $('#choose_quiz').val()
        var modul_id = $('#choose_modul').val()
        var rule = $('.editor_rules').val()
        var nama_pertanyaan = $('.editor').map(function() {
            return $(this).val();
            if ($(this).val().length == 0) {
                complete = 1
            }
        }).get();
        var id_pertanyaan = $('.editor').map(function() {
            return $(this).data('id');
        }).get();
        var pertanyaan_current = $('.editor').map(function() {
            return $(this).data('id_current');
        }).get();
        var pilihan_jawaban = $('.pilihan_jawaban').map(function() {
            return $(this).val();
            if ($(this).val().length == 0) {
                complete = 1
            }
        }).get();
        var pilihan_true = $('.pilihan_true').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        var pilihan_jawaban_id = $('.pilihan_jawaban').map(function() {
            return $(this).data('id');
        }).get();
        var pilihan_jawaban_no = $('.pilihan_jawaban').map(function() {
            return $(this).data('no');
        }).get();
        var pilihan_jawaban_current = $('.pilihan_jawaban').map(function() {
            return $(this).data('id_jawaban');
        }).get();
        var jawaban = []
        var is_true = []
        var jawaban_current = []
        for (let i = 0; i < pilihan_jawaban.length; i++) {
            if (jawaban[pilihan_jawaban_id[i]] == undefined) {
                jawaban[pilihan_jawaban_id[i]] = []
                is_true[pilihan_jawaban_id[i]] = []
            }
            if (jawaban_current[pilihan_jawaban_id[i]] == undefined) {
                jawaban_current[pilihan_jawaban_id[i]] = []
            }
            is_true[pilihan_jawaban_id[i]][pilihan_jawaban_no[i]] = pilihan_true[i]
            jawaban[pilihan_jawaban_id[i]][pilihan_jawaban_no[i]] = pilihan_jawaban[i]
            jawaban_current[pilihan_jawaban_id[i]][pilihan_jawaban_no[i]] = pilihan_jawaban_current[i]
        }
        if (complete == 1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Terdapat Form yang Kosong, Cek Kembali'
            });
        } else {
            $.ajax({
                url: '<?php echo api_hrd('MasterHr/insertSoalJawaban'); ?>',
                type: 'POST',
                data: {
                    id_pertanyaan: id_pertanyaan,
                    nama_pertanyaan: nama_pertanyaan,
                    jawaban: jawaban,
                    is_true: is_true,
                    pertanyaan_current: pertanyaan_current,
                    quiz_id: quiz_id,
                    modul_id: modul_id,
                    if_add_only: checked_soal,
                    jawaban_current: jawaban_current,
                    divisi_id: id_divisi,
                    user_id: id_user,
                    rule: rule
                },
                error: function(xhr) {
                    $("#overlay").hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error Data'
                    });
                    // $('#btnSimpanQuizModul').prop("disabled", false);
                },
                beforeSend: function() {
                    $("#overlay").show();
                    // $('#btnSimpanQuizModul').prop("disabled", true);
                },
                success: function(response) {
                    $("#overlay").hide();
                    if (response.success == true) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Data Berhasil Disimpan',
                            icon: 'success',
                        }).then((responses) => {
                            localStorage.setItem('rule', rule)
                            // $('#btnSimpanQuizModul').prop("disabled", false);
                            $("#overlay").show();
                            $('#viewPertanyaan').empty()
                            $('.rowQuestionMaps').empty()
                            noPertanyaan = -1
                            // console.log(response)
                            if (localStorage.getItem('rule') == '' && localStorage.getItem('rule') == 'null') {
                                $('#warningRule').html('<i class="fa fa-warning"></i>')
                            }
                            localStorage.setItem('data_modul', JSON.stringify(response))
                            getDataModulQuiz(response['data'])

                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Isian Form Tidak Lengkap'
                        });
                        // $('#btnSimpanQuizModul').prop("disabled", false);
                    }
                }
            });
        }
    }
    var checked_soal = 0
    $(document).on('click', '#checkBankSoal', function(e) {
        if ($(this).is(':checked')) {
            $('#choose_quiz').attr('disabled', true)
            $('#choose_modul').attr('disabled', true)
            checked_soal = 1
            noPertanyaan = -1
            $('#viewPertanyaan').empty()
            addPertanyaan()
        } else {
            $('#choose_quiz').removeAttr('disabled', true)
            $('#choose_modul').removeAttr('disabled', true)
            checked_soal = 0
            noPertanyaan = -1
            $('#viewPertanyaan').empty()
        }
    })

    function getDataModulQuiz(data) {

        $.each(data, function(key, value) {
            var soal = value['label']
            var jawaban = value['data_jawaban']
            var id_soal = value['id']
            var id_kategori = value['category_id']
            addPertanyaanYgSudahAda(soal, jawaban, id_soal, id_kategori, data.length)
        })
        $("#overlay").hide();
    }
    $(document).on('change', "#choose_modul", function() {
        var id = $(this).val()
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
                $('#viewPertanyaan').empty()
                $('.rowQuestionMaps').empty()
                noPertanyaan = -1
                var data = response['data']
                if (data != undefined) {
                    getDataModulQuiz(data)
                } else {
                    addPertanyaan()
                    $("#overlay").hide();
                }
            }
        });
    })

    function check_empty() {
        var complete = 0
        $(".editor").each(function() {
            if ($(this).val().length == 0) {
                complete = 1
            }
        });
        $(".pilihan_jawaban").each(function() {
            if ($(this).val().length == 0) {
                complete = 1
            }
        });
        if (complete == 1)
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Terdapat Form yang Kosong, Cek Kembali'
            });
    }
    $(document).on('click', "#btnSchedule", function() {
        var url = '<?= base_url('Question/Quiz') ?>'
        window.location.href = url
    })
    $(document).on('click', "#btnPartisipant", function() {
        var url = '<?= base_url() ?>Participant/viewDetailParticipant/' + schedule_id
        window.location.href = url
    })
</script>