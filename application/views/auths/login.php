<main>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header justify-content-center">
                        <h3 class="fw-medium my-4 text-center">PT. SINAR MAHKOTA MAS</h3>
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
    var email, password;
    $(document).on('click', '#btnLogin', function(e) {
        email = $('#inputEmailAddress').val()
        password = $('#inputPassword').val()
        auth(email, password);
    })

    const auth = (email, password) => {
        var restURL = "<?= api_url('Auth/login'); ?>"
        $.ajax({
            url: restURL,
            method: "POST",
            data: {
                email: email,
                password: md5(password)
            },
            dataType: 'JSON',
            beforeSend: function() {
                $('#btn-login').html('<i class="fas fa-spinner fa-spin"></i>').attr('disabled', true);
            },
            success: function(response) {
                let data = response['data'];
                if (response['success'] == true) {
                    toast({
                        icon: 'success',
                        title: 'Login Berhasil',
                        timer: 1500
                    }).then(() => {
                        var sessions = [];
                        sessions = {
                            token: data['token'],
                            user: data['user'],
                            department: data['department']
                        }
                        $.ajax({
                            type: "POST",
                            data: sessions,
                            url: base_url + "Auth/setSessions",
                            dataType: 'JSON',
                            error: function(e) {
                                console.log(e)
                            },
                            success: function(response) {
                                if (response['success'] == true) {
                                    window.location = base_url + "dashboard";
                                }
                            }
                        }).done(function() {
                            $('#btn-login').html('Login').attr('disabled', false);
                        });
                    });
                }
            }
        });
        return false;
    }
</script>