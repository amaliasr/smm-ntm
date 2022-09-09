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