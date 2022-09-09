<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="server"></i></div>
                            Jadwal Test
                        </h1>
                        <div class="page-header-subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
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
            <div class="card-header">Jadwal Test <button class="btn btn-primary btn-sm" id="btn-add"><i data-feather="plus"></i>Add New</button></div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table id="datatables" class="table table-striped table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2022-03-01 15:00</td>
                                <td>2022-03-31 18:00</td>
                                <td>
                                    <div class="badge bg-primary text-white rounded-pill">Berjalan</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2022-02-01 15:00</td>
                                <td>2022-02-31 18:00</td>
                                <td>
                                    <div class="badge bg-danger text-white rounded-pill">Kadaluarsa</div>
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
        var title = '';
        title += 'Tambah Jadwal Test';
        document.getElementById("modal-title").innerHTML = title;

        var body = '';
        body += '<form>';
        body += '<div class="mb-3">';
        body += '<div class="row">';

        body += '<div class="col-12">';
        body += '<div class="form-group">';
        body += '<label for="date">Tanggal</label>';
        body += '<input class="form-control form-control-solid" id="litepickerRangePlugin" type="text">';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Waktu Mulai</label>';
        body += '<input type="text" class="form-control form-control-solid" id="start-time">';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Waktu Berakhir</label>';
        body += '<input type="text" class="form-control form-control-solid" id="end-time">';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';
        body += '</form>';
        document.getElementById("modal-body").innerHTML = body;

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