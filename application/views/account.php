<style>
    .bg-rainbow {
        background: rgb(241, 94, 75);
        background: linear-gradient(31deg, rgba(241, 94, 75, 1) 3%, rgba(125, 35, 140, 1) 32%, rgba(48, 30, 103, 1) 63%, rgba(3, 0, 28, 1) 100%);
    }

    .position-pojok {
        position: fixed;
        bottom: 0px;
        right: 0px;
    }

    .bg-morning {
        background: url('../assets/image/background/5296502.jpg') no-repeat center;
        background-repeat: no-repeat;
        background-size: auto;
    }

    .bg-day {
        background: url('../assets/image/background/day.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-night {
        background: url('../assets/image/background/night.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    textarea::-webkit-resizer {
        display: none;
        /* Hilangkan handle pengubah ukuran di pojok kanan bawah untuk browser berbasis WebKit */
    }

    .btn-check:checked+.btn-warning,
    .btn-check:active+.btn-warning,
    .btn-warning:active,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #c38100;
        border-color: #b77900;
        border-radius: 20px;
    }

    .btn-check.btn-warning,
    .btn-check.btn-warning,
    .btn-warning,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #c38100;
        background-color: white;
        border-color: #b77900;
        border-radius: 20px;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 10px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
        border-radius: 20px;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.4rem;
        height: 2rem;
        line-height: 2rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .circular-landscape {
        display: inline-block;
        position: relative;
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 50%;
    }

    .circular-landscape img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #layoutSidenav_content {
        /* background-color: #F5EEE6 !important; */
    }
</style>
<main>
    <!-- <header class="page-header page-header-dark pb-5">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
            </div>
        </div>
    </header> -->
    <header class="page-header page-header-dark bg-scene bg-morning pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between">
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col-3 text-center align-self-center">
                <div class="circular-landscape">
                    <?php if ($this->session->userdata('image_profile')) { ?>
                        <img src="https://assets-hr.s3.ap-southeast-3.amazonaws.com/employee/photo/<?= $this->session->userdata('image_profile') ?>" />
                    <?php } else { ?>
                        <img src="<?= base_url('assets/img/illustrations/profiles/profile-2.png') ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-6 align-self-end pt-5">
                <p class="m-0 fw-bolder" id="namaJob"></p>
                <p class="fw-bolder m-0 lh-1" style="font-weight: 900 !important;font-size:60px;"><?= $this->session->userdata('full_name') ?></p>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-9">
                <div class="card shadow-sm">
                    <div class="card-body" id="dataEmployee">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute bottom-0 end-0">
        <!-- <img src="<?= base_url() ?>assets/image/gif/astronaut-1.svg" style="width: 300px;"> -->
    </div>
</main>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var data_user
    $(document).ready(function() {
        $('#dataEmployee').html(emptyReturn('Data Belum Ada'))
        loadData()
    });

    function loadData() {
        $.ajax({
            url: "https://rest.pt-bks.com/hr_lr/smm/get-data-employee",
            method: "GET",
            dataType: 'JSON',
            data: {
                employee_id: user_id,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_user = response['data']
                console.log(data_user)
                showData()
            }
        })
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function showData() {
        $('#namaJob').html(data_user.employee.job_title.job_title_name)

    }
</script>