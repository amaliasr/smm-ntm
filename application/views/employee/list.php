<style>
    #foto-pegawai {
        width: 150px !important;
        height: 200px !important;
    }

    #img-foto-pegawai {
        width: 190px !important;
        height: 200px !important;
    }

    thead input {
        width: 100%;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-15">
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">
                Employee List
                <div class="float-end">
                    <button class="btn btn-success btn-sm mr-0" id="btn-add"><i data-feather="upload" class="me-1"></i>Import Excel</button>
                    <a href="<?= base_url('Employee/manage') ?>" class="btn btn-primary btn-sm" id="btn-add"><i data-feather="plus" class="me-1"></i>Add New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive-lg">
                    <table id="datatables" class="table table-striped table-bordered table-sm text-sm text-center">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Departemen</th>
                                <th>TTL</th>
                                <th>Status Perkawinan</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td class="text-center">1</td>
                                <td>1910259503</td>
                                <td>Adam Rachman</td>
                                <td>Business Control & Compliance</td>
                                <td>Malang, 30 Maret 1995</td>
                                <td>Kawin</td>
                                <td>Arga Park Residence Kav 2 Malang</td>
                                <td>082264361579</td>
                                <td><i class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Non Aktif" data-feather="x-circle"></i></td>
                                <td class="text-nowrap text-center">
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" onclick="deleteEmployee()"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td class="text-center">2</td>
                                <td>2003259503</td>
                                <td>Moh Sochron</td>
                                <td>Business Control & Compliance</td>
                                <td>Tuban, 25 Februari 1995</td>
                                <td>Lajang</td>
                                <td>Jl Raya Bandulan Gang 1 A</td>
                                <td>082264361579</td>
                                <td><i class="text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Aktif" data-feather="check-circle"></i></td>
                                <td class="text-nowrap text-center">
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" onclick="deleteEmployee()"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function deleteEmployee() {
        confirmDialog({
            title: "Hapus Data",
            html: "Apakah anda yakin ingin menghapus pegawai dengan <strong>NIP: 1910259503</strong> ?",
            confirmColor: "#d73f30",
            cancelColor: "#c5ccd6",
            confirmText: "Hapus Pegawai",
            cancelText: "Batal"
        }).then((result) => {
            console.log(result);
        })
    }
</script>

<script>
    function loadTable() {
        $('#datatables').DataTable({
            orderCellsTop: true,
        });
    }
    $(document).ready(function() {
        loadTable();
    });
</script>