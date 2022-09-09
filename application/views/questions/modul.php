<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="hard-drive"></i></div>
                            Modul 1 - Pengetahuan Aplikasi
                        </h1>
                        <div class="page-header-subtitle">Halaman ini berisi tentang kumpulan-kumpulan soal yang bersifat <span class="fw-bold">Sangat Rahasia</span>.</div>
                    </div>
                </div>
                <nav class="mt-4 rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb px-3 py-2 rounded mb-0">
                        <li class="breadcrumb-item"><a href="#">...</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">Pertanyaan dan Jawaban <button class="btn btn-primary btn-sm" id="btn-add"><i data-feather="plus"></i>Add New</button></div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table id="datatables" class="table table-striped table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Soal</th>
                                <th>Jawaban</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>232</td>
                                <td class="text-uppercase">30 + 45 = n, Berapa nilai n?</td>
                                <td class="text-uppercase">
                                    <div class="mb-2">25</div>
                                    <div class="mb-2">35</div>
                                    <div class="mb-2">40</div>
                                    <div class="badge bg-success text-white rounded-pill mb-2">75</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>233</td>
                                <td class="text-uppercase">Kapan PT Berca Kawan Sejati dilahirkan?</td>
                                <td class="text-uppercase">
                                    <div class="mb-2">25 Agustus 2022</div>
                                    <div class="badge bg-success text-white rounded-pill mb-2">20 April 2019</div>
                                    <div class="mb-2">21 Juli 2019</div>
                                    <div class="mb-2">30 Maret 1995</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('components/modal_static') ?>

<script>
    var modal = new bootstrap.Modal(document.getElementById('modal'));


    const btnAdd = document.getElementById('btn-add');
    btnAdd.addEventListener('click', event => {
        var dialog = $('.modal-dialog');

        // large modal
        dialog.addClass("modal-lg modal-dialog-centered");

        var title = '';
        title += 'Tambah Bank Soal';
        document.getElementById("modal-title").innerHTML = title;

        var body = '';
        body += '<form>';
        body += '<div class="mb-3">';
        body += '<div class="row">';

        body += '<div class="col-12">';
        body += '<div class="form-group">';
        body += '<label for="tags">Tagar</label>';
        body += '<select class="form-control form-control-sm form-control-solid selectpicker" data-live-search="true" multiple>';
        body += '<option value="1">Opsi 1</option>';
        body += '<option value="2">Opsi 2</option>';
        body += '<option value="3">Opsi 3</option>';
        body += '</select>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-12 mt-2">';
        body += '<div class="form-group">';
        body += '<label for="question">Soal</label>';
        body += '<textarea class="form-control form-control-sm form-control-solid" id="question"></textarea>';
        body += '</div>';
        body += '</div>';

        // Jawaban 1
        body += '<div class="row">';
        body += '<div class="col-10 mt-2">';
        body += '<div class="form-group">';
        body += '<label for="answer">Jawaban</label>';
        body += '<input type="text" class="form-control form-control-sm form-control-solid" id="answer"></input>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-2 mt-2">';
        body += '<label for="right">Benar</label>';
        body += '<div class="d-flex align-items-center">';
        body += '<input type="radio" class="form-check-input" id="right" name="right"></input>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        // Jawaban 2
        body += '<div class="row">';
        body += '<div class="col-10 mt-2">';
        body += '<div class="form-group">';
        body += '<input type="text" class="form-control form-control-sm form-control-solid" id="answer"></input>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-2 mt-2">';
        body += '<div class="d-flex align-items-center">';
        body += '<input type="radio" class="form-check-input" id="right" name="right"></input>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        body += '<div class="row">';
        body += '<div class="col-12 mt-2">';
        body += '<div class="form-group">';
        body += '<button type="button" class="btn btn-light btn-sm" id="add-answer" role="button"><i data-feather="plus"></i> Tambah</button>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';
        body += '</form>';
        document.getElementById("modal-body").innerHTML = body;

        $('.selectpicker').selectpicker();

        // feather icon refresh
        feather.replace();

        // remove tinymce first
        tinymce.remove(); //minimalisir bug

        // init tinymce
        tinymce.init({
            selector: '#question',
            plugins: 'code image link lists',
            toolbar: 'undo redo | styles | bold italic underline | align | bullist numlist',
            menubar: false,
            visual: true,
            statusbar: false,
            height: '200px'
        });

        const litepickerRangePlugin = document.getElementById('litepickerRangePlugin');
        if (litepickerRangePlugin) {
            const picker = new Litepicker({
                element: litepickerRangePlugin,
                singleMode: false,
                numberOfMonths: 2,
                numberOfColumns: 2,
                format: 'MMM DD, YYYY',
                tooltipText: {
                    one: 'day',
                    other: 'days'
                },
                tooltipNumber: (totalDays) => {
                    return totalDays;
                },
                plugins: ['mobilefriendly'],
                mobilefriendly: {
                    breakpoint: 480,
                }
            });
        }

        const startTime = document.getElementById('start-time');
        if (startTime) {
            new Picker(startTime, {
                format: 'HH:mm',
                headers: true,
                text: {
                    title: 'Waktu Mulai',
                },
            });
        }

        const endTime = document.getElementById('end-time');
        if (endTime) {
            new Picker(endTime, {
                format: 'HH:mm',
                headers: true,
                text: {
                    title: 'Waktu Berakhir',
                },
            });
        }
        modal.toggle();
    })
</script>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>