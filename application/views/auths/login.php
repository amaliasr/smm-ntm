<main>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header justify-content-center">
                        <h3 class="fw-medium my-4 text-center">Manajemen HR Quiz</h3>
                    </div>
                    <div class="card-body">
                        <!-- Login form-->
                        <form>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                            </div>
                            <!-- Form Group (password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" type="password" placeholder="Enter password" />
                            </div>
                            <!-- Form Group (remember password checkbox)-->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                            <!-- Form Group (login box)-->
                            <div class="mt-4 mb-0">
                                <a class="btn btn-primary float-end" style="cursor: pointer" id="btnLogin">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).on('click', '#btnLogin', function(e) {
        var email = $('#inputEmailAddress').val()
        var password = $('#inputPassword').val()
        $.ajax({
            url: '<?php echo api_hrd('MasterHr/loginUser'); ?>',
            type: 'POST',
            data: {
                username: email,
                password: password,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#btnLogin').prop("disabled", false);
            },
            beforeSend: function() {
                $('#btnLogin').prop("disabled", true);
            },
            success: function(response) {
                if (response.logged == true) {
                    $('#btnLogin').prop("disabled", false);
                    var data = response['data'][0]
                    sessionStorage.setItem("full_name", data['full_name']);
                    sessionStorage.setItem("division_id", data['division_id']);
                    sessionStorage.setItem("division_name", data['division_name']);
                    sessionStorage.setItem("user_id", data['user_id']);
                    sessionStorage.setItem("username", data['username']);
                    localStorage.removeItem("rule")
                    localStorage.removeItem("data_modul")
                    localStorage.removeItem("modul_id")
                    localStorage.removeItem("modul_id_array")
                    localStorage.removeItem("quiz_id")
                    var url = '<?= base_url('Dashboard') ?>'
                    window.location.href = url
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Login Gagal'
                    });
                    $('#btnLogin').prop("disabled", false);
                }
            }
        });
    })
</script>