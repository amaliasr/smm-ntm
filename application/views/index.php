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
        background: url('./assets/image/background/morning.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-day {
        background: url('./assets/image/background/day.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-night {
        background: url('./assets/image/background/night.jpg') no-repeat center center fixed;
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
</style>
<main>
    <!-- <header class="page-header page-header-dark pb-5">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
            </div>
        </div>
    </header> -->
    <header class="page-header page-header-dark bg-scene pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6 mt-4">
                        <h1 class="text-white m-0" style="font-size: 30px;">Good <span id="salam"></span> !</h1>
                        <p class="m-0 lh-1" style="font-size: 50px;"><b><span id="full_name" class="text-white"><?= $full_name ?></span></b></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <?php if (if_dashboard_report()) { ?>
                <div class="col-12 col-md-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-center">
                                    <b class="small"><i class="fa fa-industry me-2 text-warning"></i>Pencapaian Target</b>
                                </div>
                                <div class="col-auto align-self-center">
                                    <input type="radio" class="btn-sm btn-check" name="options" id="option1" autocomplete="off">
                                    <label class="btn btn-sm btn-warning shadow-none" for="option1">Daily</label>

                                    <input type="radio" class="btn-sm btn-check" name="options" id="option2" autocomplete="off" checked>
                                    <label class="btn btn-sm btn-warning shadow-none" for="option2">Weekly</label>

                                    <input type="radio" class="btn-sm btn-check" name="options" id="option4" autocomplete="off">
                                    <label class="btn btn-sm btn-warning shadow-none" for="option4">Monthly</label>
                                </div>
                                <div class="col-12 mt-5">

                                    <table class="table table-sm table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="align-middle" rowspan="2">Produk</th>
                                                <th class="align-middle" rowspan="2">Unit</th>
                                                <th class="align-middle" colspan="3">Week 1</th>
                                                <th class="align-middle" colspan="3">Week 2</th>
                                                <th class="align-middle" colspan="3">Week 3</th>
                                            </tr>
                                            <tr>
                                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                                    <th style="width:90px;">Plan</th>
                                                    <th style="width:90px;">Realisasi</th>
                                                    <th style="width:90px;">Persentase</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody class="small-text">
                                            <?php for ($i = 0; $i < 9; $i++) { ?>
                                                <tr>
                                                    <td class="text-center">ABOF 12</td>
                                                    <td class="text-center">Stik</td>
                                                    <?php for ($j = 0; $j < 3; $j++) { ?>
                                                        <td class="text-center">2,000</td>
                                                        <td class="text-center">1,500</td>
                                                        <td class="text-center">40%</td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading fw-bolder">Fitur Baru ✨</h4>
                        <p>Menampilkan foto profil yang sudah anda upload di Athena, silahkan logout login terlebih dahulu :)</p>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="card shadow-sm mb-4 h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <b class="small">Quick Menu <i class="ms-2 fa fa-flash text-warning"></i></b>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col-12 pt-3">
                                    <div class="row">
                                        <div class="col">
                                            <b>
                                                <h3>Hai Para Pekerja Hebat!</h3>
                                            </b>
                                            <p class="small mt-3">Anda telah bekerja keras sepanjang hari, dan sekarang saatnya untuk memanjakan diri Anda dengan beristirahat sejenak dan makan cemilan kesukaanmu. Lihatlah kami membuat insight selama anda membuka aplikasi ini.</p>
                                        </div>
                                        <div class="col align-self-center">
                                            <div class="row">
                                                <div class="col-6 text-center border-end">
                                                    <b id="totalPageVisited">0</b>
                                                    <p class="m-0 small">Page Visited</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <b id="totalMostVisited">-</b>
                                                    <p class="m-0 small">Most Visited</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm mb-4 h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <b class="small float-start">Quick Notes <i class="ms-2 fa fa-thumb-tack text-danger"></i></b>
                                </div>
                                <div class="col">
                                    <i class="fa fa-trash text-light float-end" style="cursor:pointer;" id="btnHapusTextarea"></i>
                                </div>
                                <div class="col-12 pt-3">
                                    <textarea class="form-control shadow-none" id="myTextarea" rows="10" style="border: none;outline: none;padding:0px;border-radius:0px;" placeholder="Tuliskan Catatan Penting Anda Disini"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="position-absolute bottom-0 end-0">
        <!-- <img src="<?= base_url() ?>assets/image/gif/astronaut-1.svg" style="width: 300px;"> -->
    </div>
</main>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script>
    var akun = '<?= $this->session->userdata('username') ?>'
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
</script>
<script>
    function updateTime() {
        const currentTime = new Date();
        const currentHour = currentTime.getHours();
        $('.bg-scene').removeClass('bg-morning bg-day bg-night')
        if (currentHour >= 5 && currentHour < 12) {
            $('.bg-scene').addClass('bg-morning')
            $('#salam').html('Morning')
        } else if (currentHour >= 12 && currentHour < 18) {
            $('.bg-scene').addClass('bg-day')
            $('#salam').html('Afternoon')
        } else {
            $('.bg-scene').addClass('bg-night')
            $('#salam').html('Evening')
        }
    }
    $(document).ready(function() {
        // $('#layoutSidenav_content').addClass('bg-rainbow')
        setInterval(updateTime, 1000);
        var textarea = document.getElementById("myTextarea");
        textarea.focus();
        $('#myTextarea').val(getCookie('myTextarea'))
        initialPageVisited()
    });

    function initialPageVisited() {
        var data = JSON.parse(getCookie('arrayVisited'))
        var dataFiltered = data.filter((v, k) => {
            if (v.akun == akun) return true
        })
        // console.log(data)
        if (dataFiltered.length) {
            // Mencari nilai terbesar
            var maxValue = dataFiltered.reduce(function(prev, current) {
                return (prev.count > current.count) ? prev : current;
            })
            var sum = dataFiltered.reduce(function(acc, current) {
                return acc + current.count;
            }, 0);
        } else {
            var maxValue = '-'
            var sum = 0
        }

        $('#totalMostVisited').html(maxValue.name)
        $('#totalPageVisited').html(sum)
    }


    $(document).on('keyup', '#myTextarea', function(e) {
        var text = $('#myTextarea').val()
        simpanTextarea(text)
    })
    $(document).on('click', '#btnHapusTextarea', function(e) {
        Swal.fire({
            text: 'Data akan terhapus semua, Apakah anda yakin ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                deleteTextarea()
            }
        })
    })

    function deleteTextarea() {
        $('#myTextarea').val('')
        simpanTextarea('')
    }

    function simpanTextarea(text) {
        setCookie("myTextarea", text);
    }

    // Menyimpan data ke dalam cookie dengan masa berlaku yang panjang
    function setCookie(name, value) {
        var expirationDate = new Date();
        expirationDate.setFullYear(expirationDate.getFullYear() + 10); // Masa berlaku 10 tahun

        var cookie = name + "=" + encodeURIComponent(value) + "; expires=" + expirationDate.toUTCString() + "; path=/";
        document.cookie = cookie;
    }

    // Mengambil nilai dari cookie
    function getCookie(name) {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            if (cookie.indexOf(name + "=") === 0) {
                return decodeURIComponent(cookie.substring(name.length + 1));
            }
        }
        return null;
    }
</script>