<!-- Scripts JS -->
<script src="<?= base_url(); ?>assets/js/scripts.js"></script>

<!-- Datatable Simple JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->

<!-- Datatable JS  -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


<!-- Litepicker Bundle JS -->
<script src="<?= base_url(); ?>assets/vendor/litepicker/litepicker.bundle.js"></script>

<!-- Litepicker Mobile Friendly -->
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/plugins/mobilefriendly.js"></script>

<!-- Litepicker Script JS -->
<script src="<?= base_url(); ?>assets/vendor/litepicker/litepicker.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.sortable.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>



<!-- tiny -->
<script src="<?= base_url(); ?>assets/vendor/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/patternfly/3.24.0/js/patternfly.min.js"></script> -->
<script src="<?= base_url() ?>assets/js/vendor/jquery.validate/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/jquery.validate/additional-methods.min.js"></script>



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
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
            maxViewMode: 2 //year
        });
    });
</script>

<!-- PickerJS Script JS -->
<script src="<?= base_url(); ?>assets/vendor/pickerjs/picker.min.js"></script>

<script>
    function litepickerSingle(el) {
        const input = el[0];
        if (input) {
            const picker = new Litepicker({
                element: input,
                plugins: ['mobilefriendly'],
                mobilefriendly: {
                    breakpoint: 480,
                }
            });
        }
    }
</script>

<!-- save state toggle navbar -->
<script>
    var toggledNav = localStorage.getItem('toggledNav') || 'false';

    function toggleNavbarState() {
        toggledNav = localStorage.getItem('toggledNav') || 'false';
        toggledNav == 'false' ? localStorage.setItem('toggledNav', 'true') : localStorage.setItem('toggledNav', 'false');
    }

    if (toggledNav == 'true') {
        $('body').addClass('sidenav-toggled');
    }
</script>