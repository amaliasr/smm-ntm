<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-15">
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4 mt-n10">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                    <!-- Wizard navigation item 1-->
                    <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                        <div class="d-flex flex-row align-items-center">
                            <div class="bg-white shadow-sm rounded px-4 py-3 d-flex align-items-center num-box text-primary">
                                <span class="fw-bolder">1</span>
                            </div>
                            <div class="wizard-step-text py-2 px-2">
                                <div class="fw-bolder">Info Pribadi</div>
                            </div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 2-->
                    <a class="nav-item nav-link disabled bg-gray-500" id="wizard2-tab" href="#wizard2" data-bs-toggle="tab" role="tab" aria-controls="wizard2" aria-selected="false">
                        <div class="d-flex flex-row align-items-center">
                            <div class="bg-white opacity-75 shadow-sm rounded px-4 py-3 d-flex align-items-center num-box">
                                <span class="fw-bolder">2</span>
                            </div>
                            <div class="wizard-step-text py-2 px-2">
                                <div class="fw-bold">Review</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="tabs">
                    <!-- Wizard tab pane item 1-->
                    <div class="tab-pane py-2 fade active show" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
                        <div class="row justify-content-center">
                            <div class="col-11">
                                <h5 class="card-title mb-4">Form input informasi pribadi pegawai</h5>
                                <form id="form-basic" class="text-sm" autocomplete="off">
                                    <!-- KTP, KK -->
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputKTP">Kartu Tanda Penduduk <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" onkeypress="numberOnly()" id="inputKTP" name="inputKTP" type="text" placeholder="Masukkan nomor KTP">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputKartuKeluarga">Kartu Keluarga <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" onkeypress="numberOnly()" id="inputKartuKeluarga" name="inputKartuKeluarga" type="text" placeholder="Masukkan nomor Kartu Keluarga">
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin, Agama, Status Perkawinan -->
                                    <div class="row">
                                        <div class="mb-3 col-md-3">
                                            <label class="small mb-1" for="inputJenisKelamin">Jenis Kelamin <sup class="text-red">*</sup></label>
                                            <select name="inputJenisKelamin" id="inputJenisKelamin" class="form-control form-control-sm form-control-solid selectpicker">
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="small mb-1" for="inputStatusPerkawinan">Status Perkawinan <sup class="text-red">*</sup></label>
                                            <select name="inputStatusPerkawinan" id="inputStatusPerkawinan" class="form-control form-control-sm form-control-solid selectpicker">
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputAgama">Agama <sup class="text-red">*</sup></label>
                                            <select name="inputAgama" id="inputAgama" class="form-control form-control-sm form-control-solid selectpicker">
                                            </select>
                                        </div>
                                    </div>
                                    <!-- NIK, Full Name -->
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputNIK">Nomor Induk Karyawan <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" onkeypress="numberOnly()" id="inputNIK" name="inputNIK" type="text" placeholder="Masukkan nomor induk karyawan">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputNamaLengkap">Nama Lengkap <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" onkeypress="lettersOnly()" id="inputNamaLengkap" name="inputNamaLengkap" type="text" placeholder="Masukkan nama lengkap">
                                        </div>
                                    </div>
                                    <!-- Tempat Lahir, Tanggal Lahir -->
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputTempatLahir">Tempat Lahir <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" id="inputTempatLahir" name="inputTempatLahir" type="text" onkeypress="lsnOnly()" placeholder="Masukkan kota tempat lahir">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputTanggalLahir">Tanggal Lahir <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm datepicker" id="inputTanggalLahir" name="inputTanggalLahir" onkeydown="return false" type="text" placeholder="Masukkan tanggal lahir">
                                        </div>
                                    </div>
                                    <!-- Kewarganegaraan, Alamat -->
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputKewarganegaraan">Kewarganegaraan <sup class="text-red">*</sup></label>
                                            <select name="inputKewarganegaraan" id="inputKewarganegaraan" class="form-control form-control-solid form-control-sm selectpicker">
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputAlamat">Alamat <sup class="text-red">*</sup></label>
                                            <textarea class="form-control form-control-solid form-control-sm" id="inputAlamat" name="inputAlamat" placeholder="Masukkan tanggal lahir" onkeypress="lsncOnly()"></textarea>
                                        </div>
                                    </div>
                                    <!-- Telepon, Email -->
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputTelepon">Telepon <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" id="inputTelepon" name="inputTelepon" type="text" onchange="numberOnly();" placeholder="Masukkan nomor telepon">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputEmail">Email <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" id="inputEmail" name="inputEmail" type="email" placeholder="Masukkan email">
                                        </div>
                                    </div>
                                    <!-- Foto -->
                                    <!-- <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="small mb-1" for="inputFoto">Foto <sup class="text-red">*</sup></label>
                                            <input class="form-control form-control-solid form-control-sm" id="inputFoto" name="inputFoto" type="file" placeholder="Masukkan foto" accept="image/*" onchange="loadImg()">
                                        </div>
                                        <div class="mb-3 pt-3 col-md-6 d-flex align-items-end justify-content-md-start justify-content-center">
                                            <div class="bg-white rounded w-100 shadow-sm" id="preview-image">
                                            </div>
                                        </div>
                                    </div> -->

                                    <hr class="my-4">
                                    <div class="d-flex justify-content-end">
                                        <!-- <button class="btn btn-light disabled" type="button" disabled="">Previous</button> -->
                                        <button class="btn btn-primary" type="button" id="submitPersonalInfo">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Wizard tab pane item 2-->
                    <div class="tab-pane py-2 fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                        <div class="row justify-content-center">
                            <div class="col-9 col-sm-11">
                                <h5 class="card-title mb-4">Review kembali informasi hasil input sebelum melakukan Submit</h5>
                                <div class="row d-flex flex-column-reverse flex-md-row">
                                    <div class="col-md-12">
                                        <div class="card" style="height: 300px;">
                                            <div class="card-body overflow-auto">
                                                <!-- KTP, KK -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Nomor KTP:</em></div>
                                                            <div class="col" id="rKTP"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Nomor KK:</em></div>
                                                            <div class="col" id="rKK"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Jenis Kelamin, Status Perkawinan -->
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Jenis Kelamin:</em></div>
                                                            <div class="col" id="rJenisKelamin"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Status:</em></div>
                                                            <div class="col" id="rStatusPerkawinan"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Agama, NIK -->
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Agama:</em></div>
                                                            <div class="col" id="rAgama"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>NIK:</em></div>
                                                            <div class="col" id="rNIK"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Nama Lengkap, Kewarganegaraan -->
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Nama:</em></div>
                                                            <div class="col" id="rNamaLengkap"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Nationality:</em></div>
                                                            <div class="col" id="rKewarganegaraan"></div>
                                                        </div>
                                                    </div>
                                                    <!-- T, TL -->
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Tempat Lahir:</em></div>
                                                            <div class="col" id="rTempatLahir"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Tanggal Lahir:</em></div>
                                                            <div class="col" id="rTanggalLahir"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Telepon, Email -->
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Telepon:</em></div>
                                                            <div class="col" id="rTelepon"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Email:</em></div>
                                                            <div class="col" id="rEmail"></div>
                                                        </div>
                                                    </div>
                                                    <!-- Alamat -->
                                                    <div class="col-12">
                                                        <div class="row small text-muted">
                                                            <div class="col-sm-3 text-truncate"><em>Alamat:</em></div>
                                                            <div class="col" id="rAlamat"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light" type="button" id="previousReview">Previous</button>
                                    <button class="btn btn-primary" type="button" id="submitReview">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<script>
    var array_ktp, array_kk, array_nik, array_phone, array_email = [];
    $(document).ready(function() {
        getInfoPersonal();
        validateFormBasic();
    });

    const manageEmployee = (id) => {
        var restURL = api_assesment_url + "getEmployee";

        $.ajax({
            type: "GET",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            data: {
                id: id
            },
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            success: function(data) {
                var response = data['data'][0];
                var index_ktp = array_ktp.indexOf(response['ktp']);
                if (index_ktp !== -1) {
                    array_ktp.splice(index_ktp, 1);
                }

                var index_kk = array_kk.indexOf(response['kartu_keluarga']);
                if (index_kk !== -1) {
                    array_kk.splice(index_kk, 1);
                }

                var index_nik = array_nik.indexOf(response['eid']);
                if (index_nik !== -1) {
                    array_nik.splice(index_nik, 1);
                }

                var index_phone = array_phone.indexOf(response['phone']);
                if (index_phone !== -1) {
                    array_phone.splice(index_phone, 1);
                }

                var index_email = array_email.indexOf(response['email']);
                if (index_email !== -1) {
                    array_email.splice(index_email, 1);
                }

                $('#inputKTP').val(response['ktp']);
                $('#inputKartuKeluarga').val(response['kartu_keluarga']);
                $('#inputJenisKelamin').val(response['gender']).change();
                $('#inputStatusPerkawinan').val(response['marital_status']).change();
                $('#inputAgama').val(response['religion']).change();
                $('#inputNIK').val(response['eid']);
                $('#inputNamaLengkap').val(response['full_name']);
                $('#inputTempatLahir').val(response['birth_place']);
                $('#inputTanggalLahir').datepicker("setDate", new Date(response['birth_date']));
                $('#inputKewarganegaraan').val(response['nationality']).change();
                $('#inputAlamat').val(response['address']);
                $('#inputTelepon').val(response['phone']);
                $('#inputEmail').val(response['email']);
            }
        }).done(function() {
            $('.selectpicker').selectpicker('refresh');
            $('#form-basic').valid();
        })
    }

    const getInfoPersonal = () => {
        var restURL = api_assesment_url + "getPageEmployeePersonalInfo";
        $.ajax({
            type: "GET",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            success: function(data) {
                var response = data['data'];
                array_ktp = response['ktp'];
                array_kk = response['kartuKeluarga'];
                array_nik = response['eId'];
                array_phone = response['phone'];
                array_email = response['email'];

                optionData(response);
            }
        }).done(function() {
            var params = new URLSearchParams(window.location.search);
            if (params.has('id')) {
                manageEmployee(params.get('id'));
            } else {
                $('.selectpicker').selectpicker('refresh');
            }
        })
    }

    function optionData(response) {
        var html = '';
        html += '<option value="">&nbsp;</option>';
        $.each(response['gender'], function(key, value) {
            html += '<option value="' + value + '">' + value + '</option>';
        })
        $('#inputJenisKelamin').html(html);

        var html = '';
        html += '<option value="">&nbsp;</option>';
        $.each(response['maritalStatus'], function(key, value) {
            html += '<option value="' + value + '">' + value + '</option>';
        })
        $('#inputStatusPerkawinan').html(html);

        var html = '';
        html += '<option value="">&nbsp;</option>';
        $.each(response['religion'], function(key, value) {
            html += '<option value="' + value + '">' + value + '</option>';
        })
        $('#inputAgama').html(html);

        var html = '';
        html += '<option value="">&nbsp;</option>';
        $.each(response['nationality'], function(key, value) {
            html += '<option value="' + value + '">' + value + '</option>';
        })
        $('#inputKewarganegaraan').html(html);
    }

    $.validator.addMethod("checkKTP",
        function(value, element) {
            var result = false;
            if (!array_ktp.includes(value)) {
                result = true;
            }
            return result;
        },
        "Nomor KTP sudah terdaftar."
    );

    $.validator.addMethod("checkKartuKeluarga",
        function(value, element) {
            var result = false;
            if (!array_kk.includes(value)) {
                result = true;
            }
            return result;
        },
        "Nomor Kartu Keluarga sudah terdaftar."
    );

    $.validator.addMethod("checkNIK",
        function(value, element) {
            var result = false;
            if (!array_nik.includes(value)) {
                result = true;
            }
            return result;
        },
        "Nomor Induk Karyawan sudah terdaftar."
    );

    $.validator.addMethod("checkPhone",
        function(value, element) {
            var result = false;
            if (!array_phone.includes(value)) {
                result = true;
            }
            return result;
        },
        "Nomor Telepon sudah terdaftar."
    );

    $.validator.addMethod("checkEmail",
        function(value, element) {
            var result = false;
            if (!array_email.includes(value)) {
                result = true;
            }
            return result;
        },
        "Email sudah terdaftar."
    );

    const validateFormBasic = () => {
        $('#form-basic').validate({
            ignore: [],
            rules: {
                inputKTP: {
                    required: true,
                    exactlength: 16,
                    number: true,
                    checkKTP: true
                },
                inputKartuKeluarga: {
                    required: true,
                    exactlength: 16,
                    number: true,
                    checkKartuKeluarga: true
                },
                inputJenisKelamin: {
                    required: true
                },
                inputAgama: {
                    required: true
                },
                inputStatusPerkawinan: {
                    required: true
                },
                inputNIK: {
                    required: true,
                    exactlength: 10,
                    number: true,
                    checkNIK: true
                },
                inputTempatLahir: {
                    required: true,
                },
                inputNamaLengkap: {
                    required: true,
                    letteronly: true
                },
                inputTempatLahir: {
                    required: true,
                    lsnonly: true
                },
                inputTanggalLahir: {
                    required: true,
                },
                inputKewarganegaraan: {
                    required: true,
                },
                inputAlamat: {
                    required: true,
                },
                inputTelepon: {
                    required: true,
                    minlength: 6,
                    maxlength: 14,
                    checkPhone: true
                },
                inputEmail: {
                    required: true,
                    email: true,
                    checkEmail: true
                },
                inputFoto: {
                    required: true,
                }
            }
        });
    }
</script>

<script>
    var tab1 = $('#wizard1-tab');
    var tab2 = $('#wizard2-tab');

    $('#submitPersonalInfo').on('click', function() {
        if ($('#form-basic').valid()) {
            $('#wizard2-tab').removeClass('disabled bg-gray-500');
            $('#wizard2-tab .num-box').removeClass('opacity-75').addClass('text-primary');

            // switch to tab2
            bootstrap.Tab.getOrCreateInstance(tab2).show();
        }
    });

    $('#submitReview').on('click', function() {
        if (!$('#form-basic').valid()) {
            // switch to tab1
            bootstrap.Tab.getOrCreateInstance(tab1).show();
        } else {
            postEmployee();
        }
    })

    function getValueWizard1() {
        var inputKTP = $('#inputKTP').val();
        var inputKK = $('#inputKartuKeluarga').val();
        var inputJenisKelamin = $('#inputJenisKelamin').val();
        var inputStatusPerkawinan = $('#inputStatusPerkawinan').val();
        var inputAgama = $('#inputAgama').val();
        var inputNIK = $('#inputNIK').val();
        var inputNamaLengkap = $('#inputNamaLengkap').val();
        var inputTempatLahir = $('#inputTempatLahir').val();
        var inputTanggalLahir = $('#inputTanggalLahir').val();
        var inputKewarganegaraan = $('#inputKewarganegaraan').val();
        var inputAlamat = $('#inputAlamat').val();
        var inputTelepon = $('#inputTelepon').val();
        var inputEmail = $('#inputEmail').val();
        var inputFoto = $('#inputFoto').val() == '' ? 'No Picture' : $('#inputFoto').val();
    }

    function postEmployee() {
        $('#submitPersonalInfo').attr('disabled', true);
        $('#previousReview').attr('disabled', true);
        $('#submitReview').attr('disabled', true);
        var inputKTP = $('#inputKTP').val();
        var inputKK = $('#inputKartuKeluarga').val();
        var inputJenisKelamin = $('#inputJenisKelamin').val();
        var inputStatusPerkawinan = $('#inputStatusPerkawinan').val();
        var inputAgama = $('#inputAgama').val();
        var inputNIK = $('#inputNIK').val();
        var inputNamaLengkap = $('#inputNamaLengkap').val();
        var inputTempatLahir = $('#inputTempatLahir').val();
        var inputTanggalLahir = $('#inputTanggalLahir').val();
        var inputKewarganegaraan = $('#inputKewarganegaraan').val();
        var inputAlamat = $('#inputAlamat').val();
        var inputTelepon = $('#inputTelepon').val();
        var inputEmail = $('#inputEmail').val();
        // var inputFoto = $('#inputFoto').val() == '' ? 'No Picture' : $('#inputFoto').val();

        var array_data = {};
        array_data['personalInfo'] = {
            'eid': inputNIK,
            'full_name': inputNamaLengkap,
            'gender': inputJenisKelamin,
            'religion': inputAgama,
            'birth_place': inputTempatLahir,
            'birth_date': inputTanggalLahir,
            'marital_status': inputStatusPerkawinan,
            'nationality': inputKewarganegaraan,
            'address': inputAlamat,
            'phone': inputTelepon,
            'email': inputEmail,
            'ktp': inputKTP,
            'kartu_keluarga': inputKK,
            // 'photo': inputFoto
        }

        var restURL = api_assesment_url + 'setEmployee';
        $.ajax({
            type: "POST",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            data: {
                data: array_data
            },
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            success: function(data) {
                var status = data['success'] == true ? 'success' : 'error';
                var response = data['message'];
                toast(status, response).then(() => {
                    window.location.reload();
                });
            }
        })
    }

    $('#previousReview').on('click', function() {
        // switch to tab1
        bootstrap.Tab.getOrCreateInstance(tab1).show();
    })

    tab2.on("shown.bs.tab", function(e) {
        var inputKTP = $('#inputKTP').val();
        var inputKK = $('#inputKartuKeluarga').val();
        var inputJenisKelamin = $('#inputJenisKelamin').val();
        var inputStatusPerkawinan = $('#inputStatusPerkawinan').val();
        var inputAgama = $('#inputAgama').val();
        var inputNIK = $('#inputNIK').val();
        var inputNamaLengkap = $('#inputNamaLengkap').val();
        var inputTempatLahir = $('#inputTempatLahir').val();
        var inputTanggalLahir = $('#inputTanggalLahir').val();
        var inputKewarganegaraan = $('#inputKewarganegaraan').val();
        var inputAlamat = $('#inputAlamat').val();
        var inputTelepon = $('#inputTelepon').val();
        var inputEmail = $('#inputEmail').val();
        // var inputFoto = $('#inputFoto').val() == '' ? 'No Picture' : $('#inputFoto').val();

        $('#rKTP').text(inputKTP);
        $('#rKK').text(inputKK);
        $('#rJenisKelamin').text(inputJenisKelamin);
        $('#rStatusPerkawinan').text(inputStatusPerkawinan);
        $('#rAgama').text(inputAgama);
        $('#rNIK').text(inputNIK);
        $('#rNamaLengkap').text(inputNamaLengkap);
        $('#rTempatLahir').text(inputTempatLahir);
        $('#rTanggalLahir').text(inputTanggalLahir);
        $('#rKewarganegaraan').text(inputKewarganegaraan);
        $('#rAlamat').text(inputAlamat);
        $('#rTelepon').text(inputTelepon);
        $('#rEmail').text(inputEmail);
        // $('#rPathImage').text(inputFoto);
        // var src = $('#image').attr('src');
        // if (src == undefined) {
        //     src = 'https://cdn1.vectorstock.com/i/thumb-large/50/20/no-photo-or-blank-image-icon-loading-images-vector-37375020.jpg';
        // }
        // $('#preview-image-review').html('<img src="' + src + '" id="image-preview" class="img-fluid rounded" width="200px" style="filter: saturate(50%);" onError="this.src=' + 'https://picsum.photos/200' + '">');
    });

    $('.selectpicker').on('change', function() {
        $(this).valid();
    });

    // when the dialog is closed....
    $('.dropdown').on('hide.bs.dropdown', function(e) {
        if (selectpickerIsClicked) {
            e.preventDefault();
            selectpickerIsClicked = false;
        }
    });

    $('#inputTanggalLahir').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        maxViewMode: 2
    }).on('changeDate', function(ev) {
        if ($('#inputTanggalLahir').valid()) {
            $('#inputTanggalLahir').removeClass('is-invalid').addClass('is-valid');
        } else {
            $('#inputTanggalLahir').removeClass('is-valid').addClass('is-invalid');
        }
    });

    // const loadImg = () => {
    //     if ($('#inputFoto').valid()) {
    //         var html = '';
    //         html += '<img src="' + URL.createObjectURL(event.target.files[0]) + '" class="rounded mx-auto img-fluid" alt="avatar" id="image">'
    //         $('#preview-image').html(html);
    //     }

    // }
</script>