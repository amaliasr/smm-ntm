<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-xxl-12">
                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                    <!-- jika jam menunjukkan waktu 00:00 s/d 10:00 maka Pagi 10:01 s/d 15:00 Siang 15:01 s/d 18:00 Sore 18:01 s/d 23:59 Malam -->
                                    <h1 class="text-primary">Selamat Datang, <span id="full_name"></span>!</h1>

                                    <!-- Random Quotes Based on master -->
                                    <p class="text-gray-700 mb-0">Segala sesuatu memiliki kesudahan, yang sudah berakhir biarlah berlalu dan yakinlah semua akan baik-baik saja.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="assets/img/illustrations/at-work.svg" style="max-width: 26rem" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-header">
                        Highlight
                    </div>
                    <div class="card-body h-100 p-5">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card h-100 position-relative">
                                    <div class="card-body ">
                                        <h5 class="card-title">Create Test / Assessment</h5>
                                        <p class="card-text">Create a new test if you never create it before</p>
                                        <a href="<?= base_url() ?>Question/Quiz" class="btn btn-primary">Make A Test</a>
                                    </div>
                                    <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                                        1
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card h-100 position-relative">
                                    <div class="card-body ">
                                        <h5 class="card-title">Create Question in a New Test</h5>
                                        <p class="card-text">Choose your new Test and Modul, then you can make brand new question or choose from your recent question</p>
                                        <button class="btn btn-primary" id="btnQuestion">Make Question</button>
                                    </div>
                                    <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                                        2
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card h-100 position-relative">
                                    <div class="card-body ">
                                        <h5 class="card-title">Create Audience</h5>
                                        <p class="card-text">Insert your audience into a new test in every schedule. Audience had access code in every schedule.</p>
                                        <a href="<?= base_url() ?>Participant/addParticipant" class="btn btn-primary">Make Audience</a>
                                    </div>
                                    <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                                        3
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<script>
    $(document).ready(function() {
        if (sessionStorage.getItem('user_id') == undefined) {
            var url = '<?= base_url('auth') ?>'
            window.location.href = url
        }
    })
</script>
<script>
    $(document).ready(function() {
        $('#full_name').html(sessionStorage.getItem("full_name"))
    });
    $(document).on('click', '#btnQuestion', function(e) {
        localStorage.removeItem("rule")
        localStorage.removeItem("data_modul")
        localStorage.removeItem("modul_id")
        localStorage.removeItem("modul_id_array")
        localStorage.removeItem("quiz_id")
        var url = '<?= base_url('Question/addQuestion') ?>'
        window.location.href = url
    })
</script>