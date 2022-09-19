<style>
    html {
        scroll-behavior: smooth;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-cubes"></i></div>
                            Cek Gudang
                        </h1>
                        <!-- <div class="page-header-subtitle">Halaman ini berisi tentang kumpulan-kumpulan soal yang bersifat <span class="fw-bold">Sangat Rahasia</span>.</div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-lg-4 col-xl-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Request Today
                        <div class="row">
                            <div class="col-auto mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="1">Warehouse</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-auto mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="chart-pie"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Material Today
                        <div class="row">
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="1">Warehouse</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Material</option>
                                    <option value="1">Etiked</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="1">Sisa Gudang</option>
                                    <option value="1">Barang Out</option>
                                    <option value="2">Barang In</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-auto" style="height: 300px;">
                        <div class="container">
                            <?php for ($i = 0; $i < 30; $i++) { ?>
                                <div class="row">
                                    <div class="col-6 fw-bold">Foil Gold 12 SKM</div>
                                    <div class="col-6 text-end">650 Roll</div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card card-header-actions">
            <div class="card-header">
                <span class="d-none d-sm-block">Warehouse</span>
                <div class="float-end">
                    <div class="input-group input-group-sm w-100">
                        <input class="form-control pe-0" type="text" placeholder="Cari Nama Material" aria-label="Search" id="search_soal">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                        <div class="col-6 col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-3">
                            <div class="card shadow-sm w-100 h-100 p-1">
                                <div class="card-body text-center">
                                    <small class="fw-bold">Filter DF 160</small>
                                    <h2 class="text-primary m-0 p-0">6,000</h2>
                                    <small class="m-0 p-0">Tray</small>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader">

            </div>
            <div class="modal-body" id="modalBody">

            </div>
            <div class="modal-footer" id="modalFooter">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })

    $(document).ready(function() {})
    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Direct", "Referral", "Social"],
            datasets: [{
                data: [55, 30, 15],
                backgroundColor: [
                    "rgba(0, 97, 242, 1)",
                    "rgba(0, 172, 105, 1)",
                    "rgba(88, 0, 232, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 97, 242, 0.9)",
                    "rgba(0, 172, 105, 0.9)",
                    "rgba(88, 0, 232, 0.9)"
                ],
                hoverBorderColor: "rgba(234, 236, 244, 1)"
            }]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    function getQuizParticipant() {
        $.ajax({
            url: '<?php echo api_url('MasterHr/showQuizUser'); ?>',
            type: 'GET',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                $("#overlay").hide();
                var data = response['data']
                tampilQuizParticipant(data)
            }
        });
    }

    function tampilQuizParticipant(data) {
        var html = ""
        $.each(data, function(key, value) {
            var badge = ""
            var color = ""
            if (JSON.parse(value['data_participant']).length == 0) {
                color = "text-danger"
            }
            if (formatDate(value['date_start']) <= current_date && formatDate(value['date_end']) >= current_date) {
                badge = '<span class="badge rounded-pill bg-danger">Show Time</span>'
            }
            html += '<div class="card mb-3 w-100 shadow-none" id="btnDetail" style="cursor: pointer" data-id="' + value['schedule_id'] + '">'
            html += '<div class="card-body align-items-center align-middle">'
            html += '<div class="row">'
            html += '<div class="col-12 col-md-4">'
            html += '<b>' + value['quiz_name'] + ' ' + badge + '</b>'
            html += '</div>'
            html += '<div class="col-12 col-md-7">'
            html += '<span><i class="fa fa-user ' + color + '"></i> <b class="me-5 ' + color + '">' + JSON.parse(value['data_participant']).length + '</b> <i class="fa fa-calendar"></i> ' + formatDate(value['date_start']) + '<i class="fa fa-clock ms-4"></i> ' + formatTime(value['date_start']) + '</span>'
            html += '</div>'
            html += '<div class="col-12 col-md-1">'
            html += '<i class="fa fa-angle-right"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#listQuiz').html(html)
    }
    $(document).on('click', "#btnDetail", function() {
        var id = $(this).data('id')
        var url = '<?= base_url() ?>Participant/viewDetailParticipant/' + id
        window.location.href = url
    })
    $(document).on('click', "#btnTambahParticipant", function() {
        var url = '<?= base_url() ?>Participant/addParticipant/'
        window.location.href = url
    })
</script>