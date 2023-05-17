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
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6 mt-4">
                        <h1 class="text-white m-0" style="font-size: 30px;">Good <span id="salam"></span> !</h1>
                        <p class="m-0 lh-1" style="font-size: 50px;"><b><span id="full_name" class="text-white"><?= $full_name ?></span></b></p>
                        <!-- <h5 style="font-size: 20px;margin: auto;width:100%;">
                            <a class="typewrite text-white" data-period="2000" data-type='[ "“We cannot solve problems with the kind of thinking we employed when we came up with them.” — Albert Einstein", "“When you change your thoughts, remember to also change your world.”—Norman Vincent Peale", "“It is only when we take chances, when our lives improve. The initial and the most difficult risk that we need to take is to become honest. —Walter Anderson"]' style="text-decoration:none">
                                <span class="wrap"></span>
                            </a>
                        </h5> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row p-5">
            <div class="col-12 col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <b class="small">Quick Menu <i class="ms-2 fa fa-flash text-warning"></i></b>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <b class="small">Quick Notes <i class="ms-2 fa fa-thumb-tack text-danger"></i></b>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <b class="small">Soon</b>
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
    });
</script>