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
</style>
<main>
    <header class="page-header page-header-dark pb-5">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <h1 class="text-white m-0 mb-3" style="font-size: 30px;">Welcome Back !</h1>
                <!-- <p style="font-size: 11px;width:100%;" class="mt-2">
                    <a class="typewrite text-white" data-period="2000" data-type='[ "“We cannot solve problems with the kind of thinking we employed when we came up with them.” — Albert Einstein", "“When you change your thoughts, remember to also change your world.”—Norman Vincent Peale", "“It is only when we take chances, when our lives improve. The initial and the most difficult risk that we need to take is to become honest. —Walter Anderson"]' style="text-decoration:none">
                        <span class="wrap"></span>
                    </a>
                </p> -->
                <p class="m-0 lh-1 mb-5" style="font-size: 50px;"><b><span id="full_name" style="color:#F5EDCE"><?= $full_name ?></span></b></p>
                <div class="row">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="col-4">
                            <div class="card shadow-sm" style="opacity: 0.7; height:200px;">
                                <div class="card-body">
                                    <b class="small">Soon</b>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <div class="position-absolute bottom-0 end-0">

        <img src="<?= base_url() ?>assets/image/gif/astronaut-1.svg" style="width: 300px;">

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
</script>
<script>
    $(document).ready(function() {
        $('#layoutSidenav_content').addClass('bg-rainbow')
    });
</script>