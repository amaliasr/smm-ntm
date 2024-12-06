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
        width: 120px;
        height: 120px;
        overflow: hidden;
        border-radius: 50%;
    }

    .circular-landscape img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn-check:checked+.btn-outline-switch-chart,
    .btn-check:active+.btn-outline-switch-chart,
    .btn-outline-switch-chart:active,
    .btn-outline-switch-chart.active,
    .btn-outline-switch-chart.dropdown-toggle.show {
        color: #fff;
        background-color: #969696;
        border-color: #969696;
    }

    .btn-outline-switch-chart {
        color: #969696;
        border-color: #969696;
    }

    .bg-storage-1 {
        background-color: #025464 !important;
        border-color: #025464 !important;
        color: white !important;
    }

    th,
    td {
        background-color: white !important;
    }

    .birthday-frame {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background: url('./assets/image/logo/birthday-frame.png') center/cover no-repeat;
    }

    #confetti {
        overflow-y: hidden;
        overflow-x: hidden;
        width: 100%;
        margin: 0;
        height: 100%;
        position: absolute;
        top: 0;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
<main>
    <!-- <header class="page-header page-header-dark pb-5">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
            </div>
        </div>
    </header> -->
    <canvas id="confetti"></canvas>
    <header class="page-header page-header-dark bg-scene pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4 pb-3">
                <div class="row align-items-center mt-4">
                    <div class="col-2 pe-0 ps-0 text-center align-self-center">
                        <div class="circular-landscape">
                            <?php if ($this->session->userdata('image_profile')) { ?>
                                <img src="https://assets-hr.s3.ap-southeast-3.amazonaws.com/employee/photo/<?= $this->session->userdata('image_profile') ?>" />
                            <?php } else { ?>
                                <img src="<?= base_url('assets/img/illustrations/profiles/profile-2.png') ?>" />
                            <?php } ?>
                            <div class="birthday-frame" id="birthdayFrame" hidden></div>
                            <div id="eventFrame"></div>
                        </div>
                    </div>
                    <div class="col-6 ps-0">
                        <h1 class="text-white m-0" style="font-size: 30px;">Good <span id="salam"></span> !</h1>
                        <p class="m-0 lh-1" style="font-size: 50px;"><b><span id="full_name" class="text-white"><?= $full_name ?></span></b></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row mt-4">
            <!-- <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading fw-bolder">Fitur Baru ✨</h4>
                    <p>Menampilkan foto profil yang sudah anda upload di Athena, silahkan logout login terlebih dahulu :)</p>
                </div>
            </div> -->
            <?php if (if_dashboard_report()) { ?>
                <div class="col-12 col-md-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-4 align-self-center">
                                    <b class="small"><i class="fa fa-industry me-2 text-warning"></i>Pencapaian Target</b>
                                    <p class="m-0 small-text" id="dateRange">-</p>
                                </div>
                                <div class="col-4 text-center align-self-center">
                                    <input type="radio" class="btn-sm btn-check" name="options" id="option1" autocomplete="off" onclick="changePeriodOption('DAILY')">
                                    <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option1">Daily</label>

                                    <input type="radio" class="btn-sm btn-check" name="options" id="option2" autocomplete="off" onclick="changePeriodOption('WEEKLY')" checked>
                                    <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option2">Weekly</label>

                                    <input type="radio" class="btn-sm btn-check" name="options" id="option4" autocomplete="off" onclick="changePeriodOption('MONTHLY')">
                                    <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option4">Monthly</label>
                                </div>
                                <div class="col-4 align-self-center">
                                    <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="form-group has-search me-2">
                                            <span class="fa fa-search form-control-feedback"></span>
                                            <input type="text" class="form-control-sm form-control" placeholder="Search Product" id="search_nama" autocomplete="off">
                                        </div>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked onclick="changePencapaianTarget('table')">
                                            <label class="btn btn-outline-switch-chart shadow-none" for="btnradio1"><i class="fa fa-table"></i></label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" onclick="changePencapaianTarget('chart')">
                                            <label class="btn btn-outline-switch-chart shadow-none" for="btnradio3"><i class="fa fa-bar-chart"></i></label>
                                        </div>
                                        <button class="btn btn-sm btn-success ms-1" onclick="downloadExcel()"><i class="fa fa-download"></i></button>
                                        <button type="button" class="ms-1 shadow-none btn btn-sm btn-outline-switch-chart" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false" onclick="showDropdown()"><i class="fa fa-filter"></i></button>
                                        <div class="dropdown-menu" id="dropdownFilter" style="width: 200px;">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <p class="m-0 small fw-bolder">Filter</p>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="px-4 py-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <b class="small">Tanggal Mulai</b>
                                                        <input class="form-control form-control-sm datepicker mb-3" type="text" id="dateStartTarget" autocomplete="off">
                                                    </div>
                                                    <div class="col-12">
                                                        <b class="small">Tanggal Akhir</b>
                                                        <input class="form-control form-control-sm datepicker mb-3" type="text" id="dateEndTarget" autocomplete="off">
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <button class="btn btn-sm btn-primary" onclick="loadPencapaianTarget()">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4" id="pencapaianTarget">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-center">
                                    <b class="small"><i class="fa fa-tasks me-2 text-warning"></i>Penyimpanan</b>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="radio" class="btn-sm btn-check" name="optionGudang" id="optionGudang1" autocomplete="off" checked>
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionGudang1">Penampung HLP</label>

                                            <input type="radio" class="btn-sm btn-check" name="optionGudang" id="optionGudang2" autocomplete="off">
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionGudang2">Gudang WIP</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-3">
                                        <p class="m-0 fw-bolder">Total All</p>
                                        <h1 class="m-0 fw-bolder" style="font-size: 50px;">340,000</h1>
                                        <p class="m-0">Trays</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-3">
                                        <?php for ($i = 0; $i < 15; $i++) { ?>
                                            <div class="col-2">
                                                <div class="card shadow-none mb-2">
                                                    <div class="card-body">
                                                        <p class="m-0 super-small-text">FMK.ABOF-ST</p>
                                                        <p class="m-0 small-text fw-bolder">Armour Bold Filter - Stick</p>
                                                    </div>
                                                    <div class="card-footer pt-2 pb-2">
                                                        <div class="row justify-content-between">
                                                            <div class="col-auto">
                                                                <p class="m-0 small-text fw-bolder text-warning">2,800</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <p class="m-0 small-text fw-bolder">Tray</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-center">
                                    <b class="small"><i class="fa fa-bar-chart me-2 text-warning"></i>Sisa Hasil Produksi</b>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="radio" class="btn-sm btn-check" name="optionSisaProduksi" id="optionSisaProduksi1" autocomplete="off" checked>
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionSisaProduksi1">MAKER 9 A</label>

                                            <input type="radio" class="btn-sm btn-check" name="optionSisaProduksi" id="optionSisaProduksi2" autocomplete="off">
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionSisaProduksi2">MAKER 9 B</label>

                                            <input type="radio" class="btn-sm btn-check" name="optionSisaProduksi" id="optionSisaProduksi2" autocomplete="off">
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionSisaProduksi2">MAKER 9 C</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <?php } else { ?>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>
    function loadingReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/loading.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function errorReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><button class="btn btn-sm btn-primary mt-3" onclick="' + text + '()"><i class="fa fa-refresh me-2"></i>Refresh</button></div></div></div></div>'
        return html
    }
</script>
<script>
    var akun = '<?= $this->session->userdata('username') ?>'
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var machineId = []
    var modetarget = 'table'
    var indexMachine = 0
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
    function findDataByDate(dataArray, targetDate) {
        // Mengubah tanggal target ke dalam format yang sama dengan data
        const formattedTargetDate = new Date(targetDate).toISOString();

        // Mencari objek yang memiliki rentang tanggal yang mencakup tanggal target
        const result = dataArray.find(item => {
            const startDate = new Date(item.date.start).toISOString();
            const endDate = new Date(item.date.end).toISOString();

            return formatDate(formattedTargetDate) >= formatDate(startDate) && formatDate(formattedTargetDate) <= formatDate(endDate);
        });

        return result;
    }

    function findDataByIndex(dataArray, targetType) {
        const result = dataArray[targetType]
        return result;
    }

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

    function getFirstDate() {
        // Mendapatkan tanggal hari ini
        const today = new Date();
        var month = today.getMonth() + 1;
        var year = today.getFullYear();

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = year + "-" + month + "-01";

        return formattedDate;
    }
    var access = '<?= if_dashboard_report() ?>'
    $(document).ready(function() {
        // $('#layoutSidenav_content').addClass('bg-rainbow')
        setInterval(updateTime, 1000);
        initialPageVisited()
        loadData()
    });
    var data_machine
    var data_user
    var data_pencapaian
    var periodOption = 'WEEKLY'


    function isUlangTahun(date) {
        var tanggalLahir = new Date(date);
        // Mendapatkan tanggal hari ini
        var hariIni = new Date();

        // Mendapatkan tanggal ulang tahun pada tahun ini
        var ulangTahunTahunIni = new Date(hariIni.getFullYear(), tanggalLahir.getMonth(), tanggalLahir.getDate());
        // Memeriksa apakah hari ini adalah ulang tahun
        var hasil = (hariIni.toDateString() === ulangTahunTahunIni.toDateString());
        return hasil;
    }
    var eventDate = [{
        'dateStart': '2024-03-11',
        'dateEnd': '2024-04-11',
        'eventName': 'Ramadan Mubarak',
        'image': 'ramadan'
    }]


    function eventImage() {
        var hariIni = new Date();
        var image = ''
        var hasil = false
        eventDate.forEach(e => {
            var dateStart = new Date(e.dateStart);
            var dateEnd = new Date(e.dateEnd);
            var eventDateStart = new Date(hariIni.getFullYear(), dateStart.getMonth(), dateStart.getDate());
            var eventDateEnd = new Date(hariIni.getFullYear(), dateEnd.getMonth(), dateEnd.getDate());
            var hasil = (hariIni >= eventDateStart && hariIni <= eventDateEnd);
            if (hasil) {
                image = e.image
            }
        });
        if (image) {
            // $("#eventFrame").css('')
            $("#eventFrame").css({
                'position': 'absolute',
                'top': '0',
                'left': '0',
                'right': '0',
                'bottom': '0',
                'z-index': '1',
                'background': "url('./assets/image/logo/" + image + ".png ') center/cover no-repeat",
            });
        }
    }

    function dateInformation() {
        $('#dateRange').html(formatDateIndonesiaShort(dateStartTarget) + ' - ' + formatDateIndonesiaShort(dateEndTarget))
    }

    function loadData() {
        $.ajax({
            url: "https://rest.pt-bks.com/hr_lr/smm/get-data-employee",
            method: "GET",
            dataType: 'JSON',
            data: {
                employee_id: user_id,
            },
            error: function(xhr) {
                $('#pencapaianTarget').html(errorReturn('loadMachine'))
                loadMachine()
            },
            beforeSend: function() {
                $('#pencapaianTarget').html(loadingReturn('Sedang Diproses'))
            },
            success: function(response) {
                data_user = response['data']
                if (data_user.person.birth_date) {
                    var isBirthday = isUlangTahun(data_user.person.birth_date)
                    if (isBirthday) {
                        Draw()
                        $('#birthdayFrame').prop('hidden', false)
                    } else {
                        $('#birthdayFrame').prop('hidden', true)
                        eventImage()
                    }
                } else {
                    eventImage()
                }
                if (!access) {
                    var textarea = document.getElementById("myTextarea");
                    textarea.focus();
                    $('#myTextarea').val(getCookie('myTextarea'))
                } else {
                    // Pencapaian Target
                    loadMachine()
                }
            }
        })
    }

    function loadMachine() {
        $('#dateStartTarget').val(dateStartTarget)
        $('#dateEndTarget').val(dateEndTarget)
        $('#pencapaianTarget').html(loadingReturn('Sedang Diproses'))
        setDaterange()
        $.ajax({
            url: "<?= api_produksi('loadPageMachineReport'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {
                $('#pencapaianTarget').html(errorReturn('loadMachine'))
            },
            beforeSend: function() {
                $('#pencapaianTarget').html(loadingReturn('Sedang Diproses'))
            },
            success: function(response) {
                data_machine = response['data']
                data_machine.machine.forEach(e => {
                    machineId.push(e.id)
                });
                machineId = arrayToString(machineId)
                loadPencapaianTarget()
            }
        })
    }

    function changePeriodOption(stats) {
        periodOption = stats
        loadPencapaianTarget()
    }
    var dateStartTarget = getFirstDate()
    var dateEndTarget = currentDate()

    function loadPencapaianTarget() {
        dateInformation()
        $.ajax({
            url: "<?= api_produksi('getDashboardPlanActual'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                dateStart: dateStartTarget,
                dateEnd: dateEndTarget,
                machineId: machineId,
                periodOption: periodOption
            },
            error: function(xhr) {
                $('#pencapaianTarget').html(errorReturn('loadPencapaianTarget'))
            },
            beforeSend: function() {
                $('#pencapaianTarget').html(loadingReturn('Sedang Diproses'))
            },
            success: function(response) {
                data_pencapaian = response['data'].planActual
                closeDropdown()
                pencapaianTarget()
            }
        })
    }

    function closeDropdown() {
        var dropdownMenu = document.querySelector('#dropdownFilter');
        dropdownMenu.classList.remove('show');
    }

    function showDropdown() {
        var dropdownMenu = document.querySelector('#dropdownFilter');
        dropdownMenu.classList.add('show');
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateStartTarget'),
            elementEnd: document.getElementById('dateEndTarget'),
            singleMode: false,
            firstDay: 0,
            format: "DD MMMM YYYY",
            allowRepick: true,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    dateStartTarget = formatDate(date1['dateInstance'])
                    dateEndTarget = formatDate(date2['dateInstance'])
                });
            },
        })
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

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
<script>
    function changePencapaianTarget(x) {
        modetarget = x
        pencapaianTarget()
    }

    function pencapaianTarget() {
        if (modetarget == 'table') {
            targetTable()
        } else {
            targetChart()
        }
    }

    function targetTable() {
        var html = ''
        var heading = data_pencapaian[0].data[0].data
        var periodtext = ''
        if (periodOption == 'WEEKLY') {
            periodtext = 'Minggu '
        }
        html += '<table class="table table-sm table-bordered table-hover w-100" id="tableDetail">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle" rowspan="2">Produk</th>'
        html += '<th class="align-middle" rowspan="2">Step</th>'
        html += '<th class="align-middle" rowspan="2">Unit</th>'
        heading.forEach(e => {
            var textDate = ''
            if (periodtext) {
                textDate = '<br><span class="small-text text-grey">' + formatDateText(e.date.start) + ' - ' + formatDateText(e.date.end) + '</span>'
            }
            html += '<th class="align-middle" colspan="3">' + periodtext + '' + e.index + '' + textDate + '</th>'
        });
        html += '</tr>'
        html += '<tr>'
        heading.forEach(e => {
            html += '<th style="width:90px;">Plan</th>'
            html += '<th style="width:90px;">Aktual</th>'
            html += '<th style="width:90px;">Persentase</th>'
        })
        html += '</tr>'
        html += '</thead>'
        html += '<tbody class="small-text">'
        data_pencapaian.forEach(d => {
            html += '<tr>'
            html += '<td class="fw-bolder bg-light" style="border-right:0px;">' + d.machineTypeName + '</td>'
            for (let i = 0; i < ((parseInt(data_pencapaian[0].data[0].data.length) * 3) + 2); i++) {
                html += '<td class="bg-light" style="border-left:0px;border-right:0px;"></td>'
            }
            html += '</tr>'
            d.data.forEach(e => {
                html += '<tr>'
                html += '<td class="text-nowrap">' + e.item.name + '</td>'
                if (!e.step.alias) {
                    e.step.alias = '-'
                }
                html += '<td class="text-center text-nowrap">' + e.step.alias + '</td>'
                html += '<td class="text-center text-nowrap">' + e.unit.name + '</td>'
                e.data.forEach(el => {
                    html += '<td class="text-center">' + number_format(roundToTwo(el.data.qty_plan)) + '</td>'
                    html += '<td class="text-center">' + number_format(roundToTwo(el.data.qty_actual)) + '</td>'
                    var percen = 0
                    if (!el.data.qty_plan || !el.data.qty_actual) {
                        percen = 0
                    } else {
                        percen = roundToTwo(parseFloat(el.data.qty_actual) / parseFloat(el.data.qty_plan) * 100)
                    }
                    html += '<td class="text-center">' + percen + '%</td>'
                });
                html += '</tr>'
            });
        });
        html += '</tbody>'
        html += '</table>'
        $('#pencapaianTarget').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedColumns: {
                left: 2
            },
            paging: false,
            searching: false,
        })
    }

    function downloadExcel() {
        var url = "<?= base_url() ?>report/reportDashboardTable"
        var params = "*$" + dateStartTarget + "*$" + dateEndTarget + "*$" + machineId + "*$" + periodOption;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }

    function targetChart() {
        var html = ''
        html += '<div class="row justify-content-center">'
        html += '<div class="col-auto text-center">'

        html += '<div class="row">'
        html += '<div class="col-auto align-self-center pointer" onclick="nextPrevious(' + "'-1'" + "" + ')">'
        html += '<span id="mengurangiHari"><i class="fa fa-chevron-left"></i></span>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<p class="m-0 fw-bolder" id="titleTime">-</p>'
        html += '<p class="m-0 small-text" id="periodTime">-</p>'
        html += '</div>'
        html += '<div class="col-auto align-self-center pointer" onclick="nextPrevious(' + "'+1'" + "" + ')">'
        html += '<span id="mengurangiHari"><i class="fa fa-chevron-right"></i></span>'
        html += '</div>'
        html += '</div>'


        html += '</div>'
        html += '<div class="col-12 text-center">'
        // form

        // form
        html += '</div>'
        html += '<div class="col-12" id="formMyChart">'
        html += '</div>'
        html += '</div>'
        $('#pencapaianTarget').html(html)
        findVariableChart()
    }

    function formatDateText(orginaldate) {
        var date = new Date(orginaldate);
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        var tanggal = date.getDate();
        var hari = date.getDay();
        switch (hari) {
            case 0:
                hari = "Minggu";
                break;
            case 1:
                hari = "Senin";
                break;
            case 2:
                hari = "Selasa";
                break;
            case 3:
                hari = "Rabu";
                break;
            case 4:
                hari = "Kamis";
                break;
            case 5:
                hari = "Jumat";
                break;
            case 6:
                hari = "Sabtu";
                break;
        }
        switch (bulan) {
            case 0:
                bulan = "Januari";
                break;
            case 1:
                bulan = "Februari";
                break;
            case 2:
                bulan = "Maret";
                break;
            case 3:
                bulan = "April";
                break;
            case 4:
                bulan = "Mei";
                break;
            case 5:
                bulan = "Juni";
                break;
            case 6:
                bulan = "Juli";
                break;
            case 7:
                bulan = "Agustus";
                break;
            case 8:
                bulan = "September";
                break;
            case 9:
                bulan = "Oktober";
                break;
            case 10:
                bulan = "November";
                break;
            case 11:
                bulan = "Desember";
                break;
        }
        var tampilTanggal = tanggal + " " + bulan + " " + tahun;
        return tampilTanggal;
    }

    var dataToday

    function findIndexByIndex(dataArray, targetIndex) {
        for (let i = 0; i < dataArray.length; i++) {
            if (dataArray[i].index == targetIndex) {
                return i; // Mengembalikan indeks saat ditemukan
            }
        }
        return -1; // Mengembalikan -1 jika tidak ditemukan
    }

    function findIndexByMachine(machineId) {
        for (let i = 0; i < data_pencapaian.length; i++) {
            if (data_pencapaian[i].machineTypeId == machineId) {
                return i; // Mengembalikan indeks saat ditemukan
            }
        }
        return -1; // Mengembalikan -1 jika tidak ditemukan
    }


    function nextPrevious(type) {
        var findCurrentIndex = findIndexByIndex(data_pencapaian[indexMachine].data[0].data, dataToday.index)
        eval('var findIndexFromType = parseInt(findCurrentIndex)' + type)
        if (findIndexFromType < 0 || !data_pencapaian[indexMachine].data[0].data[findIndexFromType]) {
            Swal.fire({
                icon: 'error',
                title: 'Not Available',
                text: 'Telah Mencapai Batas Tanggal'
            });
        } else {
            dataToday = findDataByIndex(data_pencapaian[indexMachine].data[0].data, findIndexFromType);
            arrangeVariableChart(dataToday)
        }
    }

    function findVariableChart(dateFill = null) {
        if (!dateFill) {
            dateFill = currentDate()
        }
        dataToday = findDataByDate(data_pencapaian[indexMachine].data[0].data, dateFill);
        arrangeVariableChart(dataToday)
    }

    function formMyChart() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-1" id="listMachine">'
        html += '</div>'
        html += '<div class="col-11">'
        html += '<div id="myChart"></div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function listMachine() {
        var html = ''
        var a = 0
        data_pencapaian.forEach(e => {
            var checked = ''
            if (a == indexMachine) {
                checked = 'checked'
            }
            html += '<input type="radio" class="btn-check" name="optionMachine" id="optionMachine' + a + '" autocomplete="off" ' + checked + '><label class="btn btn-sm btn-outline-switch-chart mb-1 w-100 shadow-none super-small-text" for="optionMachine' + a + '" onclick="changeMachine(' + e.machineTypeId + ')">' + e.machineTypeName + '</label>'
            a++
        });
        $('#listMachine').html(html)
    }

    function changeMachine(machineId = null) {
        indexMachine = findIndexByMachine(machineId)
        var findCurrentIndex = findIndexByIndex(data_pencapaian[indexMachine].data[0].data, dataToday.index)
        dataToday = findDataByIndex(data_pencapaian[indexMachine].data[0].data, findCurrentIndex);
        arrangeVariableChart(dataToday)
    }

    function arrangeVariableChart(dataToday) {
        $('#formMyChart').html(formMyChart())
        var actualData = []
        var targetData = []
        var brandList = []
        data_pencapaian[indexMachine].data.forEach(e => {
            brandList.push(e.item.alias)
            e.data.forEach(el => {
                if (el.index == dataToday.index) {
                    actualData.push(roundToTwo(el.data.qty_actual))
                    targetData.push(roundToTwo(el.data.qty_plan))
                }
            });
        });
        listMachine()
        dragTime(dataToday, actualData, targetData, brandList)
    }


    function dragTime(dataToday, actualData, targetData, brandList) {
        var periodText = ''
        if (periodOption == 'WEEKLY') {
            periodText = 'Minggu '
        }
        // console.loh(dataToday)
        $('#titleTime').html(periodText + '' + dataToday.index)
        $('#periodTime').html(formatDateText(dataToday.date.start) + ' - ' + formatDateText(dataToday.date.end))
        settingChart(actualData, targetData, brandList)
    }

    function settingChart(actualData, targetData, brandList) {
        var unitName = data_pencapaian[indexMachine].data[0].unit.name
        var options = {
            series: [{
                name: 'Aktual',
                data: actualData
            }, {
                name: 'Target',
                data: targetData
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: brandList,
            },
            yaxis: {
                title: {
                    // text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "" + val + " " + unitName
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#myChart"), options);
        chart.render();
        // const ctx = document.getElementById('myChart');
        // const dateList = ['ABOF', 'ABLF', 'ACF']
        // const data = {
        //     labels: dateList,
        //     datasets: [{
        //             label: 'Target Plan',
        //             data: [2000, 3000, 5000],
        //             backgroundColor: '#025464',
        //         },
        //         {
        //             label: 'Aktual',
        //             data: [1500, 1000, 3000],
        //             backgroundColor: '#E8AA42',
        //         },
        //     ]
        // };
        // new Chart(ctx, {
        //     type: 'bar',
        //     data: data,
        //     options: {
        //         plugins: {},
        //         responsive: true,
        //         scales: {
        //             x: {
        //                 stacked: true,
        //             },
        //             y: {
        //                 stacked: true
        //             }
        //         }
        //     }
        // });
    }
</script>
<script>
    let W = window.innerWidth;
    let H = document.getElementById('confetti').clientHeight;
    const canvas = document.getElementById('confetti');
    const context = canvas.getContext("2d");
    const maxConfettis = 25;
    const particles = [];

    const possibleColors = [
        "#ff7336",
        "#f9e038",
        "#02cca4",
        "#383082",
        "#fed3f5",
        "#b1245a",
        "#f2733f"
    ];

    function randomFromTo(from, to) {
        return Math.floor(Math.random() * (to - from + 1) + from);
    }

    function confettiParticle() {
        this.x = Math.random() * W; // x
        this.y = Math.random() * H - H; // y
        this.r = randomFromTo(11, 33); // radius
        this.d = Math.random() * maxConfettis + 11;
        this.color =
            possibleColors[Math.floor(Math.random() * possibleColors.length)];
        this.tilt = Math.floor(Math.random() * 33) - 11;
        this.tiltAngleIncremental = Math.random() * 0.07 + 0.05;
        this.tiltAngle = 0;

        this.draw = function() {
            context.beginPath();
            context.lineWidth = this.r / 2;
            context.strokeStyle = this.color;
            context.moveTo(this.x + this.tilt + this.r / 3, this.y);
            context.lineTo(this.x + this.tilt, this.y + this.tilt + this.r / 5);
            return context.stroke();
        };
    }

    function Draw() {
        const results = [];

        // Magical recursive functional love
        requestAnimationFrame(Draw);

        context.clearRect(0, 0, W, window.innerHeight);

        for (var i = 0; i < maxConfettis; i++) {
            results.push(particles[i].draw());
        }

        let particle = {};
        let remainingFlakes = 0;
        for (var i = 0; i < maxConfettis; i++) {
            particle = particles[i];

            particle.tiltAngle += particle.tiltAngleIncremental;
            particle.y += (Math.cos(particle.d) + 3 + particle.r / 2) / 2;
            particle.tilt = Math.sin(particle.tiltAngle - i / 3) * 15;

            if (particle.y <= H) remainingFlakes++;

            // If a confetti has fluttered out of view,
            // bring it back to above the viewport and let if re-fall.
            if (particle.x > W + 30 || particle.x < -30 || particle.y > H) {
                particle.x = Math.random() * W;
                particle.y = -30;
                particle.tilt = Math.floor(Math.random() * 10) - 20;
            }
        }

        return results;
    }

    window.addEventListener(
        "resize",
        function() {
            W = window.innerWidth;
            H = window.innerHeight;
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        },
        false
    );

    // Push new confetti objects to `particles[]`
    for (var i = 0; i < maxConfettis; i++) {
        particles.push(new confettiParticle());
    }

    // Initialize
    canvas.width = W;
    canvas.height = H;
</script>