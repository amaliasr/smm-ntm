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
            <div class="card-header">Kumpulan Soal</div>
            <div class="card-body">
                <div class="row">

                    <div class="col-12 mb-5">
                        <div class="input-group input-group-joined">
                            <input class="form-control pe-0" type="text" placeholder="Cari Soal menggunakan Kode atau Nama Soal" aria-label="Search" id="search_soal">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>

                    <div class="overflow-cari-soal">
                        <div class="col-12" id="isi_soal">

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
    var noJawaban = 0
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

    function removeTags(str) {
        if ((str === null) || (str === ''))
            return false;
        else
            str = str.toString();
        return str.replace(/(<([^>]+)>)/ig, '');
    }

    $(document).ready(function() {
        var width = $(window).width();
        var height = $(window).height();
        $('.spinner-loading').css('padding-top', height / 2 + 'px');
        $('.spinner-loading').css('text-align', 'center');
        $('.text-loading').css('text-align', 'center');

        getDataSoal()
    })

    var data_soal = ""

    function getDataSoal() {
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
                listSoal(data)
            }
        });
    }

    function listSoal(data) {
        // console.log(data)
        var html_body = ""
        $.each(data, function(key, value) {
            html_body += '<div class="card shadow-none btn-available-soal mt-1" id="card_soal' + key + '" style="cursor: pointer" data-id="' + key + '">'
            html_body += '<div class="card-body" style="padding:10px;">'
            html_body += '<div class="row">'

            html_body += '<div class="col-10 card_soal" data-bs-toggle="modal" data-bs-target="#modal" data-id="' + value['id'] + '" >'
            html_body += '<b class="text_soal" data-id="' + key + '">#' + removeTags(value['code']) + '</b>'
            html_body += '<p class="text_soal" data-id="' + key + '">' + removeTags(value['label']) + '</p>'
            // $.each(JSON.parse(value['answer']), function(keys, values) {
            //     html_body += '<span class="mini-text" data-id="' + key + '">' + huruf[keys] + '. ' + removeTags(values['label']) + '</span><br>'
            // })
            html_body += '</div>'

            html_body += '<div class="col-2 text-end">'
            html_body += '<button class="btn btn-sm btn-danger btnDeleteSoal" data-bs-toggle="modal" data-bs-target="#modal" data-id="' + value['id'] + '" data-code="' + value['code'] + '"><i class="fa fa-trash"></i></button>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        })
        $('#isi_soal').html(html_body)
    }
    $(document).on('click', '.card_soal', function(e) {
        noJawaban = 0
        var id = $(this).data('id')
        $.each(data_soal, function(key, value) {
            if (value['id'] == id) {
                var pertanyaan = value['label']
                var jawaban = value['answer']
                var kode = value['code']
                modalDetailPertanyaan(pertanyaan, jawaban, kode, id)
            }
        })
    });

    function modalDetailPertanyaan(pertanyaan, jawaban, kode, id) {
        $('#modalDialog').addClass('modal-dialog modal-lg');

        var html_header = '';
        html_header += '<h5 class="modal-title">Soal ' + kode + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = ""
        html_body += '<div class="row" id="kontenPertanyaan">'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnSimpan" data-id="' + id + '">Simpan</button>'
        $('#modalFooter').html(html_footer);
        addPertanyaanYgSudahAda(pertanyaan, jawaban)
    }



    function addPertanyaanYgSudahAda(pertanyaan, jawaban) {
        var html = ""
        html += '<div class="col-12">'
        html += '<textarea class="editor" id="editor">' + pertanyaan + '</textarea>'
        html += '<div class="row mt-5 row-col-1">'
        html += '<div class="col-12 col-md-12">'
        html += '<h6><b>Jawaban :</b></h6>'

        html += '<ul class="list-group">'
        $.each(JSON.parse(jawaban), function(keys, values) {
            noJawaban++
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
            html += '<input type="text" class="form-control w-100 pilihan_jawaban" data-id_jawaban="' + values['id_jawaban'] + '" id="floatingInput" placeholder="" value="' + values['label'] + '" data-no="' + keys + '">'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-2">'
            html += '<div class="form-check form-check-inline">'
            html += '<input class="form-check-input checkbox-jawaban pilihan_true" type="checkbox" name="inlineRadioOptions' + keys + '" id="inlineRadio' + keys + '" data-no="' + keys + '" value="1" ' + check + '>'
            html += '<label class="form-check-label" for="inlineRadio' + keys + '0"></label>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</li>'
        })
        html += '<div id="viewJawaban">'
        html += '</div>'

        html += '</ul>'
        html += '</div>'
        html += '<div class="col-4 mt-2 float-end">'
        html += '<button type="button" class="btn btn-outline-primary btn-sm" id="btnPilihanJawaban"><i class="fa fa-plus"></i>&nbsp;Pilihan Jawaban</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#kontenPertanyaan').append(html)
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
    }

    $(document).on('click', "#btnPilihanJawaban", function() {
        var html = ""
        html += '<li class="list-group-item" id="listJawaban' + noJawaban + '">'
        html += '<div class="row">'
        html += '<div class="col-1">'
        html += '<p>' + huruf[noJawaban] + '</p>'
        html += '</div>'
        html += '<div class="col-9">'
        html += '<div class="input-group input-group-sm">'
        html += '<input type="text" class="form-control pilihan_jawaban_baru w-100" id="floatingInput" placeholder="" data-no="' + noJawaban + '">'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-2">'
        html += '<div class="form-check form-check-inline">'
        html += '<input class="form-check-input checkbox-jawaban pilihan_true_baru" type="checkbox" name="inlineRadioOptions" id="inlineRadio' + noJawaban + '" value="' + noJawaban + '" data-no="' + noJawaban + '">'
        html += '<label class="form-check-label" for="inlineRadio' + noJawaban + '"><button type="button" class="btn btn-danger btn-sm ms-1" onclick="return deleteJawaban(' + noJawaban + ');"><i class="fa fa-trash"></i></button></label>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</li>'
        $('#viewJawaban').append(html)
        noJawaban++
    })

    function deleteJawaban(no_jawaban) {
        $('#listJawaban' + no_jawaban).remove();
        noJawaban--
    }
    $(document).on('click', '.btnDeleteSoal', function(e) {
        var id = $(this).data('id')
        var code = $(this).data('code')
        $('#modalDialog').addClass('modal-dialog');

        var html_header = '';
        html_header += '<h5 class="modal-title">Hapus Soal</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = ""
        html_body += '<div class="row">'
        html_body += '<span>Apakah anda yakin ingin menghapus Soal dengan Kode <b>' + code + '</b> ?</span>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>'
        html_footer += '<button type="button" class="btn btn-primary" id="btnHapusAction" data-id="' + id + '">Hapus</button>'
        $('#modalFooter').html(html_footer);
    });
    $(document).on('click', '#btnHapusAction', function(e) {
        var id = $(this).data('id')
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/hapusSoal'); ?>',
            type: 'POST',
            data: {
                soal_id: id
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnHapusAction').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnHapusAction').prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                    }).then((response) => {
                        $('#modal').modal('hide')
                        getDataSoal()
                        $('#btnHapusAction').prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Isian Form Tidak Lengkap'
                    });
                    $('#btnHapusAction').prop("disabled", false);
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
                $('#card_soal' + id_cards[i]).removeClass('d-none')
            } else {
                $('#card_soal' + id_cards[i]).addClass('d-none')
            }
        }
    })
    $(document).on('click', '#btnSimpan', function(e) {
        var id = $(this).data('id')
        var pertanyaan = $('#editor').val()
        var jawaban = $('.pilihan_jawaban').map(function() {
            return $(this).val();
        }).get();
        var jawaban_baru = $('.pilihan_jawaban_baru').map(function() {
            return $(this).val();
        }).get();
        var id_jawaban = $('.pilihan_jawaban').map(function() {
            return $(this).data('id_jawaban');
        }).get();
        var pilihan_true = $('.pilihan_true').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        var pilihan_true_baru = $('.pilihan_true_baru').map(function() {
            if (this.checked) {
                return 1
            } else {
                return 0
            }
        }).get();
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/editSoal'); ?>',
            type: 'POST',
            data: {
                id_soal: id,
                pertanyaan: pertanyaan,
                jawaban: jawaban,
                jawaban_baru: jawaban_baru,
                id_jawaban: id_jawaban,
                is_true: pilihan_true,
                is_true_baru: pilihan_true_baru
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
                        $('#modal').modal('hide')
                        getDataSoal()
                        $('#btnSimpan').prop("disabled", false);
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
</script>