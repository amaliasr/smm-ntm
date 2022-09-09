<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="hard-drive"></i></div>
                            Kumpulan Soal Divisi IT
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
            <div class="card-header">Modul <button class="btn btn-primary btn-sm" id="btn-add"><i data-feather="plus"></i>Add New</button></div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table id="datatables" class="table table-striped table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modul</th>
                                <th>Deskripsi</th>
                                <th>Total Soal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Penggunaan Aplikasi Salesman</td>
                                <td class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                <td>55</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="edit-3"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Penggunaan Aplikasi Gudang</td>
                                <td class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                <td>45</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="edit-3"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Penggunaan Aplikasi Accounting</td>
                                <td class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                <td>0</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="edit-3"></i></button>
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
        title += 'Tambah Modul';
        document.getElementById("modal-title").innerHTML = title;

        var body = '';
        body += '<form>';
        body += '<div class="mb-3">';
        body += '<div class="row">';

        body += '<div class="col-12">';
        body += '<div class="form-group">';
        body += '<label for="tags">Modul</label>';
        body += '<input type="text" class="form-control form-control-sm form-control-solid" id="modul"></input>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-12 mt-2">';
        body += '<div class="form-group">';
        body += '<label for="description">Deskripsi</label>';
        body += '<textarea class="form-control form-control-sm form-control-solid" id="description"></textarea>';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';
        body += '</form>';
        document.getElementById("modal-body").innerHTML = body;

        $('.selectpicker').selectpicker();

        // feather icon refresh
        feather.replace();

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