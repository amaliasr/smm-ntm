<!-- Font Awesome 5 -->
<script src="<?= base_url(); ?>assets/vendor/fontawesome/js/fontawesome.min.js"></script>

<!-- Feather Icons JS -->
<script src="<?= base_url(); ?>assets/vendor/feather/feather.min.js"></script>

<script>
    var feathericons = ["activity", "airplay", "alert-circle", "alert-octagon", "alert-triangle", "align-center", "align-justify", "align-left", "align-right", "anchor", "at-sign", "award", "bar-chart-2", "bar-chart", "battery-charging", "battery", "bell-off", "bell", "bluetooth", "book", "bookmark", "box", "briefcase", "calendar", "cast", "check-circle", "check-square", "check", "circle", "clipboard", "clock", "cloud-off", "cloud", "command", "copy", "cpu", "delete", "disc", "download-cloud", "download", "edit-2", "edit-3", "edit", "external-link", "eye-off", "eye", "feather", "file", "filter", "flag", "folder", "grid", "hash", "headphones", "heart", "home", "inbox", "info", "layers", "layout", "life-buoy", "link-2", "link", "list", "loader", "lock", "log-in", "log-out", "maximize-2", "maximize", "menu", "mic-off", "mic", "minimize-2", "minimize", "minus-circle", "minus-square", "minus", "monitor", "more-horizontal", "more-vertical", "move", "music", "octagon", "package", "pie-chart", "plus-circle", "plus-square", "plus", "power", "printer", "radio", "refresh-ccw", "refresh-cw", "rotate-ccw", "rotate-cw", "scissors", "search", "settings", "share-2", "share", "slash", "speaker", "square", "star", "tag", "target", "thumbs-down", "thumbs-up", "toggle-left", "toggle-right", "trash-2", "trash", "trending-down", "trending-up", "triangle", "type", "unlock", "upload-cloud", "upload", "user-check", "user-minus", "user-plus", "user-x", "user", "watch", "wifi", "x-circle", "x-square", "x", "zap", "zoom-in", "zoom-out", "fast-forward", "pause", "play", "repeat", "rewind", "shuffle", "skip-back", "skip-forward", "volume-1", "volume-2", "volume-x", "volume", "mail", "message-circle", "message-square", "phone-call", "phone-forwarded", "phone-incoming", "phone-missed", "phone-off", "phone-outgoing", "phone", "voicemail", "aperture", "camera-off", "camera", "image", "video-off", "video", "compass", "crosshair", "globe", "map-pin", "map", "navigation-2", "navigation", "cloud-drizzle", "cloud-lightning", "cloud-rain", "cloud-snow", "droplet", "moon", "sun", "sunrise", "sunset", "thermometer", "umbrella", "wind", "arrow-down-left", "arrow-down-right", "arrow-down", "arrow-left", "arrow-right", "arrow-up-left", "arrow-up-right", "arrow-up", "chevron-down", "chevron-left", "chevron-right", "chevron-up", "chevrons-down", "chevrons-left", "chevrons-right", "chevrons-up", "chrome", "codepen", "facebook", "instagram", "pocket", "slack", "twitter"]
</script>

<!-- Bootstrap 5 -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>

<!-- JQUERY! -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<!-- Bootstrap-Datepicker Script JS -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- jQuery Validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<!-- bootstrap validation -->
<script>
    $.validator.setDefaults({
        errorElement: "span",
        errorClass: "text-danger small",
        errorPlacement: function(error, element) {
            if (element.hasClass('selectpicker')) {
                errorInsert = "#" + element.attr("name") + "Error";
                error.appendTo(errorInsert);
                element.parent().after(error);
            } else {
                errorInsert = "#" + element.attr("name") + "Error";
                error.appendTo(errorInsert);

                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            if ($(element).hasClass('selectpicker')) {
                $(element).parent().find('button').addClass('is-invalid').removeClass('is-valid');
            } else {
                $(element).addClass("is-invalid").removeClass("is-valid");
            }
        },
        unhighlight: function(element) {
            if ($(element).hasClass('selectpicker')) {
                $(element).parent().find('button').addClass('is-valid').removeClass('is-invalid');
            } else {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        }
    });

    jQuery.validator.addMethod("exactlength", function(value, element, param) {
        return this.optional(element) || value.length == param;
    }, $.validator.format("Mohon masukkan {0} karakter."));

    $.validator.addMethod("valueNotEquals", function(value, element, arg) {
        return arg !== value;
    }, "Kolom ini wajib diisi.");

    jQuery.validator.addMethod("letteronly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/i.test(value);
    }, "Mohon masukkan format text yang benar");

    jQuery.validator.addMethod("lsnonly", function(value, element) {
        return this.optional(element) || /^[A-Za-z0-9\s]*$/i.test(value);
    }, "Mohon masukkan format text yang benar");

    jQuery.extend(jQuery.validator.messages, {
        required: "Kolom ini wajib diisi.",
        remote: "Mohon periksa kembali kolom ini.",
        email: "Mohon masukkan email yang benar.",
        url: "Mohon masukkan URL yang benar.",
        date: "Mohon masukkan tanggal yang benar.",
        dateISO: "Mohon masukkan tanggal sesuai format ISO yang benar.",
        number: "Mohon masukkan format angka yang benar.",
        digits: "Mohon masukkan angka saja.",
        creditcard: "Mohon masukkan format kartu kredit yang benar.",
        equalTo: "Mohon masukkan data yang sama lagi.",
        accept: "Mohon masukkan data dengan ekstensi yang benar.",
        maxlength: jQuery.validator.format("Mohon masukkan tidak lebih dari {0} karakter."),
        minlength: jQuery.validator.format("Mohon masukkan setidaknya {0} karakter."),
        rangelength: jQuery.validator.format("Mohon masukkan data diantara {0} dan {1} panjang karakter."),
        range: jQuery.validator.format("Mohon masukkan data diantara {0} dan {1}."),
        max: jQuery.validator.format("Mohon masukkan data lebih kecil atau sama dengan {0}."),
        min: jQuery.validator.format("Mohon masukkan data lebih besar atau sama dengan {0}.")
    });
</script>

<!-- Selectpicker -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap-select/js/bootstrap-select.min.js" crossorigin="anonymous">
</script>

<!-- Nestable Menu Drag & Drop -->
<script src="<?= base_url(); ?>assets/vendor/nestable/jquery.nestable.js" crossorigin="anonymous"></script>

<!-- Number JS -->
<script src="<?= base_url(); ?>assets/vendor/numberjs/number.js"></script>

<!-- Sweetalert 2 JS -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- TinyMCE -->
<script src="<?= base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>

<!-- Is Valid URL -->
<script>
    function isUrlValid(url) {
        return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
    }
</script>

<!-- SETUP BREADCRUMB -->
<script>
    function setupBreadcrumb() {
        var url = window.location.href;
        var currentItem = $("#accordionSidenav").find("[href$='" + url + "']");
        var html = "";
        html += '<li class="breadcrumb-item"><a href="' + base_url + '">Home</a></li>';
        var length = currentItem.parents("li").get().reverse().length;
        $(currentItem.parents("li").get().reverse()).each(function(key, value) {
            if ((length - 1) == key) {
                html += '<li class="breadcrumb-item text-capitalize active">' + $(this).children('a').text() + '</li>';
            } else {
                html += '<li class="breadcrumb-item text-capitalize"><span>' + $(this).children('li.nav-link div.nav-link-wrapper').text() + '</span></li>';
            }
        });
        $(".breadcrumb").html(html);
    }
</script>

<!-- Form Validation -->
<script>
    function bsValidation(forms) {
        var state = true;
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    state = false;
                }

                form.classList.add('was-validated');
            });

        return state;
    }
</script>

<script>
    (function($) {
        $.fn.buttonLoader = function(action) {
            var self = $(this);
            //start loading animation
            if (action == 'start') {
                if ($(self).attr("disabled") == "disabled") {
                    e.preventDefault();
                }
                //disable buttons when loading state
                $('.has-spinner').attr("disabled", "disabled");
                $(self).attr('data-btn-text', $(self).text());
                //binding spinner element to button and changing button text
                $(self).html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span>');
                $(self).addClass('active');
                $(self).attr('disabled', true);
            }
            //stop loading animation
            if (action == 'stop') {
                $(self).html($(self).attr('data-btn-text'));
                $(self).removeClass('active');
                //enable buttons after finish loading
                $('.has-spinner').removeAttr("disabled");
                $(self).attr('disabled', false);
            }
        }
    })(jQuery);
</script>

<script>
    // sweetalert 2 toast
    //* icon = ["success","error","warning","info","question"]
    function toast(icon = "success", title = "this is title", position = "top-end", timer = 3000, timerProgressBar = true) {
        const Toast = Swal.mixin({
            toast: true,
            position: position,
            showConfirmButton: false,
            timer: timer,
            timerProgressBar: timerProgressBar
        })

        return Toast.fire({
            icon: icon,
            title: title
        })
    }

    // sweetalert 2 confirm dialog

    function confirmDialog({
        icon = "warning",
        title = "this is title",
        html = "this is text",
        confirmColor = '#06794f',
        cancelColor = '#d73f30',
        confirmText = 'Yes',
        cancelText = 'Cancel',
    }) {
        var swal = Swal.fire({
            title: title,
            html: html,
            icon: icon,
            showCancelButton: true,
            confirmButtonColor: confirmColor,
            cancelButtonColor: cancelColor,
            confirmButtonText: confirmText,
            cancelButtonText: cancelText,
            customClass: {
                cancelButton: 'order-1',
                confirmButton: 'order-2',
            }
            // confirmButtonText: 'Yes, delete it!'
        });

        return swal;
    }
</script>

<script>
    function numberOnly() {
        if (!(event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105)) {
            event.preventDefault();
        }
    }

    function addHyphen(element) {
        let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join(''); // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }

    function lettersOnly() {
        if (!((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)) && (event.charCode != 32)) {
            event.preventDefault();
        }
    }

    function lsnOnly() {
        var value = event.target.value;
        if (!event.key.match(/^[A-Za-z0-9\s]*$/)) {
            event.preventDefault();
        }
    }

    function lsncOnly() {
        var value = event.target.value;
        if (!event.key.match(/^[A-Za-z0-9,\s]*$/)) {
            event.preventDefault();
        }
    }
</script>

<script>
    function kdelay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }
</script>