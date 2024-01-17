<style>
    html {
        background-color: #30475E !important;
    }

    .background {
        height: 100vh;
        width: 100vw;
    }

    .bg-dongker {
        background-color: #30475E;
    }

    .text-dongker {
        color: #30475E;
    }

    .bg-dark-grey {
        background-color: #3C4048;
    }

    .text-dark-grey {
        color: #3C4048;
    }

    .bg-rainbow {
        background: rgb(208, 103, 58);
        background: linear-gradient(66deg, rgba(208, 103, 58, 1) 0%, rgba(130, 51, 233, 1) 100%);
    }

    .text-rainbow {
        color: rgb(208, 103, 58);
        color: linear-gradient(66deg, rgba(208, 103, 58, 1) 0%, rgba(130, 51, 233, 1) 100%);
    }

    .centered {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    @-webkit-keyframes color-change-2x {
        0% {
            background: #19dcea;
        }

        100% {
            background: #b22cff;
        }
    }

    @keyframes color-change-2x {
        0% {
            background: #19dcea;
        }

        100% {
            background: #b22cff;
        }
    }

    .color-change-2x {
        -webkit-animation: color-change-2x 2s linear infinite alternate both;
        animation: color-change-2x 2s linear infinite alternate both;
    }
</style>
<main class="background">
    <!-- <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header justify-content-center">
                        <h3 class="fw-medium my-4 text-center">PT. SINAR MAHKOTA MAS</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" type="password" placeholder="Enter password" />
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <a class="btn btn-primary float-end" style="cursor: pointer" id="btnLogin">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row h-100">
        <div class="col-12 col-md-6 color-change-2x h-100 align-self-center d-none d-md-none d-lg-block d-lg-block">
            <div class="centered">
                <div class="container justify-content-center mt-4 mt-sm-0 text-center">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_abwhds4i.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 500px;" loop autoplay></lottie-player>
                    <!-- <h5 style="font-size: 20px;margin: auto;width:100%;">
                        <a class="typewrite text-white" data-period="2000" data-type='[ "“We cannot solve problems with the kind of thinking we employed when we came up with them.” — Albert Einstein", "“When you change your thoughts, remember to also change your world.”—Norman Vincent Peale", "“It is only when we take chances, when our lives improve. The initial and the most difficult risk that we need to take is to become honest. —Walter Anderson"]' style="text-decoration:none">
                            <span class="wrap"></span>
                        </a>
                    </h5> -->
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 bg-white h-100">
            <div class="row h-100 d-flex align-self-center justify-content-center">
                <div class="col-8 h-100 align-items-center align-content-center flex-wrap">
                    <div class="centered">
                        <div class="container justify-content-center">
                            <img class="mb-3" src="<?= base_url() ?>assets/image/logo/SMM.png" style="width: 50px;">
                            <h1 class="text-dongker fw-bold"><b>Welcome Back, Buddy !</b></h1>
                            <p class="m-0 small">Learn to level up yout life. Love the wotk, the grnd, the sweat, and the hard work. It pays off in the end.</p>
                            <div class="alert alert-danger mt-2 p-3 d-none" id="alertSalah" role="alert" style="font-size:12px;">
                                <b>Email atau Password</b> tidak sesuai, silahkan coba lagi. Atau jika belum memiliki akses, silahkan hubungi pihak IT
                            </div>
                            <form class="m-0 mt-3">
                                <div class="mb-3">
                                    <input class="form-control" id="inputEmailAddress" type="email" tabindex="1" placeholder="Enter email address" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" id="inputPassword" type="password" tabindex="2" placeholder="Enter password" />
                                </div>
                                <div class="mt-4 mb-0">
                                    <button class="btn btn-dark float-end" style="cursor: pointer" type="submit" id="btnLogin" tabindex="3">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    $(document).ready(function() {
        $('#layoutAuthentication_footer').addClass('d-none')
    })
    var email, password;
    $(document).on('click', '#btnLogin', function(e) {
        login()
    })

    function login() {
        email = $('#inputEmailAddress').val()
        password = $('#inputPassword').val()
        auth(email, password);
    }
    $('#inputPassword').on('keypress', function(event) {
        if (event.which === 13) { // Tombol Enter ditekan
            event.preventDefault();
            login();
        }
    });

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
            error: function(xhr) {
                $('#btnLogin').html('Login').removeAttr('disabled', true);
                $('#alertSalah').removeClass('d-none')
            },
            beforeSend: function() {
                $('#btnLogin').html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading...').attr('disabled', true);
                $('#alertSalah').addClass('d-none')
            },
            success: function(response) {
                // console.log(response)
                $('#alertSalah').addClass('d-none')
                let data = response['data'];
                if (response['success'] == true) {
                    var sessions = [];
                    sessions = {
                        token: data['token'],
                        user: data['user'],
                        department: data['employee']
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
                                if ('<?= $this->input->cookie('link') ?>' == "") {
                                    window.location = base_url + "dashboard";
                                } else {
                                    window.location = '<?= $this->input->cookie('link') ?>'
                                }
                            }
                        }
                    }).done(function() {
                        $('#btnLogin').html('Login').removeAttr('disabled', true);
                    });
                }
            }
        });
        return false;
    }
</script>