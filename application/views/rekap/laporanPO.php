<link href="<?= base_url(); ?>assets/smm/report.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">REKAP PO</h1>
                <p class="m-0 small" id="dateRangeString">-</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <p class="fw-bolder small-text m-0">Tanggal</p>
                                <input class="form-select form-select-sm datepicker formFilter" type="text" id="dateRange" placeholder="Tanggal Mulai" autocomplete="off">
                            </div>
                            <div class="col-auto ps-0">
                                <p class="fw-bolder small-text m-0">Periode</p>
                                <select class="selectpicker w-100" id="selectPeriode" title="Pilih View By" onchange="arrangeVariable()">
                                    <option value="daily" selected>Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                </select>
                            </div>
                            <div class="col-auto ps-0">
                                <p class="fw-bolder small-text m-0">Subject</p>
                                <select class="selectpicker w-100" id="selectSubject" title="Pilih View By" onchange="arrangeVariable()">
                                    <option value="user" selected>User</option>
                                    <option value="costcenter">Cost Center</option>
                                    <option value="supplier">Supplier</option>
                                    <option value="department">Department</option>
                                </select>
                            </div>
                            <div class="col-auto d-flex align-items-end ps-0">
                                <button type="button" class="btn btn-primary btn-sm btnSimpan" style="border-radius: 20px;padding: 10px;" onclick="simpanData()">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-end">
                        <!-- <div class="dropdown">
                            <button class="btn btn-outline-primary btn-sm dropdown-toggle border-radius-20 shadow-none small-text btnSimpan" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fa fa-download me-2"></span>Downloads
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="exportExcel()">Excel</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-12 mb-2">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                        <p class="fw-bolder m-0">Detail</p>
                        <div class="table-responsible" id="dataTable">

                        </div>

                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function notFoundReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function empty(location, text, height = null) {
        if (!height) {
            height = '100%'
        }
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function groupDataByProperties(data, propertyNames) {
        // Menggunakan Set untuk menyimpan nilai unik dari kombinasi properti
        var uniqueValuesSet = new Set();

        // Loop melalui data untuk mendapatkan nilai unik dari kombinasi properti
        data.forEach(function(item) {

            // Membuat array yang berisi nilai properti yang diinginkan
            var propertyValues = propertyNames.map(function(propertyName) {
                if (item[propertyName].name) {
                    return item[propertyName].name
                } else {
                    return item[propertyName];
                }
            });

            // Menambahkan array nilai properti ke dalam Set
            uniqueValuesSet.add(JSON.stringify(propertyValues));
        });

        // Mengonversi Set menjadi array dan mengembalikan hasilnya
        var uniqueValuesArray = Array.from(uniqueValuesSet).map(function(stringifiedArray) {
            return JSON.parse(stringifiedArray);
        });

        return uniqueValuesArray;
    }

    function findQty(data, criteria) {
        for (let i = 0; i < data.length; i++) {
            let match = true;

            for (let key in criteria) {
                // Mengatasi properti dengan hierarki
                const keys = key.split('.');
                let currentValue = data[i];

                for (let j = 0; j < keys.length; j++) {
                    if (currentValue.hasOwnProperty(keys[j])) {
                        currentValue = currentValue[keys[j]];
                    } else {
                        match = false;
                        break;
                    }
                }

                if (!match) {
                    break;
                }
                if (currentValue != criteria[key]) {
                    match = false;
                    break;
                }
            }
            if (match) {
                if (data[i].qty_waste == null) {
                    data[i].qty_waste = 0
                }
                if (data[i].qty_goods == null) {
                    data[i].qty_goods = 0
                }
                if (data[i].qty_reject == null) {
                    data[i].qty_reject = 0
                }
                return {
                    qty_goods: number_format(data[i].qty_goods),
                    qty_reject: number_format(data[i].qty_reject),
                    qty_waste: number_format(data[i].qty_waste),
                }
            }
        }
        return null;
    }

    function formatJustDay(orginaldate) {
        var date = new Date(orginaldate);
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
        return hari;
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    function getFirstDateOfCurrentMonth() {
        const currentDate = new Date();
        const firstDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

        const year = firstDate.getFullYear();
        const month = (firstDate.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
        const day = firstDate.getDate().toString().padStart(2, '0');

        return `${year}-${month}-${day}`;
    }

    function getPreviousFriday() {
        // Mendapatkan tanggal hari ini
        const today = new Date();

        // Mendapatkan hari dalam bentuk angka (0: Minggu, 1: Senin, ..., 6: Sabtu)
        const dayOfWeek = today.getDay();

        // Menghitung selisih hari untuk kembali ke hari Jumat
        const daysUntilFriday = (dayOfWeek + 2) % 7;

        // Menghitung tanggal Jumat sebelumnya
        const previousFriday = new Date(today);
        previousFriday.setDate(today.getDate() - daysUntilFriday);

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = previousFriday.toISOString().split('T')[0];

        return formattedDate;
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_item = ""
    var data_report = ""
    var date_start = getFirstDate()
    var date_end = currentDate()
    var detailMode = false
    var periode = 'daily'
    var subject = 'user'
    var is_mutation_only = 0
    $(document).ready(function() {
        $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian atau Bisa Langsung Download File'))
        $('select').selectpicker();
        loadData()
    })

    function getFirstDate() {
        // Mendapatkan tanggal hari ini
        const today = new Date();
        var month = today.getMonth() + 1;
        var year = today.getFullYear();

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = year + "-" + month + "-01";

        return formattedDate;
    }

    function loadData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_item = response['data']['item'];
                setDaterange()
                formItem()
                dateRangeString()
            }
        })
    }

    function dateRangeString() {
        $('#dateRangeString').html(formatDateIndonesiaShort(date_start) + ' - ' + formatDateIndonesiaShort(date_end))
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: date_start,
            endDate: date_end,
            format: "DD MMMM YYYY",
            autoRefresh: true,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    date_start = formatDate(date1['dateInstance'])
                    date_end = formatDate(date2['dateInstance'])
                });
            },
        })
    }

    function formItem() {
        var html = ''
        data_item.forEach(e => {
            var select = ''
            select = 'selected'
            html += '<option value="' + e.id + '" ' + select + '>' + e.name + '</option>'
        });
        $('#selectItem').html(html)
        $('#selectItem').selectpicker('refresh');
        $('#selectItem').selectpicker({

        });
        // autoSave()
        // simpanData()
        arrangeVariable()
    }

    function arrangeVariable() {}

    function simpanData() {
        periode = $('#selectPeriode').val()
        subject = $('#selectSubject').val()
        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_url('Api_Warehouse/rekapPo'); ?>'
        var data = {
            periode: periode,
            subject: subject,
            date_start: date_start,
            date_end: date_end,
        }
        kelolaData(data, type, url, button)
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dateRangeString()
                $(button).prop("disabled", false);
                data_report = response.data
                if (data_report.length) {
                    updatedStructure()
                } else {
                    // tidak ada data
                    $('#dataTable').html(notFoundReturn('Data Tidak Ditemukan'))
                }
            }
        });
    }

    function updatedStructure() {
        dataTable()
    }

    function dataTable() {
        var html = ''
        html += '<table class="table table-bordered table-hover table-sm small w-100 tableDetail" id="tableDetail" style="width: 100%;white-space:nowrap;cursor: grab;overflow:auto;">'
        html += '<thead id="headTable">'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '</table>'
        $('#dataTable').html(html)
        headTable()
    }

    function headTable() {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle text-center small-text" rowspan="2">No</th>'
        html += '<th class="align-middle text-center small-text" rowspan="2">Tanggal</th>'
        html += '<th class="align-middle text-center small-text" rowspan="2" id="namaSubject">' + toTitleCase(subject) + '</th>'
        html += '<th class="align-middle text-center small-text" style="width:auto;" colspan="2">Dokumen</th>'
        html += '<th class="align-middle text-center small-text" style="width:auto;" colspan="2">Pengiriman</th>'
        html += '<th class="align-middle text-center small-text" style="width:auto;" colspan="3">Barang</th>'
        html += '<th class="align-middle text-center small-text" rowspan="2">Transaksi<br>Diterima</th>'
        html += '</tr>'
        html += '<tr style="width:100%;">'
        html += '<th class="align-middle text-center small-text">Batal</th>'
        html += '<th class="align-middle text-center small-text">Revisi</th>'
        html += '<th class="align-middle text-center small-text">Tepat Waktu</th>'
        html += '<th class="align-middle text-center small-text">Terlambat</th>'
        html += '<th class="align-middle text-center small-text">Barang Sesuai</th>'
        html += '<th class="align-middle text-center small-text">Barang Kurang</th>'
        html += '<th class="align-middle text-center small-text">Barang Lebih</th>'
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ""
        $.each(data_report, function(key, value) {
            var laporan = JSON.parse(value['data_laporan'])
            $.each(laporan, function(keys, values) {
                if (keys == 0) {
                    html += fieldContentDetail(laporan[keys], laporan.length, key, value['date'], 'parent', data_report[key])
                }
            })

            if (laporan.length > 1) {
                $.each(laporan, function(keys, values) {
                    if (keys > 0) {
                        html += fieldContentDetail(laporan[keys], laporan.length, key, value['date'], 'child', data_report[key])
                    }
                })
            }
        })
        $('#bodyTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedColumns: {
                left: 4
            },
            paging: false,
            rowGroup: {
                dataSrc: 'group'
            }
        })
        table_scroll('tableDetail')
    }

    function fieldContentDetail(laporan, jumlah, key, date, jenis, data) {
        var html = ""
        html += '<tr>'
        if (jenis == 'parent') {
            html += '<td class="text-center smal-text" rowspan="' + jumlah + '">' + (key + 1) + '</td>'
            var param_lain = ""
            if (periode == 'weekly') {
                param_lain = 'Minggu ke-' + data['minggu_ke'] + '<br>'
            } else if (periode == 'monthly') {
                param_lain = data['bulan'] + '<br>'
            }
            html += '<td class="text-center small-text" rowspan="' + jumlah + '">' + param_lain + date + '</td>'
        }
        if (laporan['subject_name'] == null) {
            laporan['subject_name'] = "-"
        }
        html += '<td class="small-text">' + laporan['subject_name'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_batal'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_revisi'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_tepat_waktu'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_telat_kirim'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_barang_sesuai'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_barang_kurang'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_barang_lebih'] + '</td>'
        html += '<td class="text-center small-text">' + laporan['total_transaksi_diterima'] + '</td>'
        html += '</tr>'
        return html
    }

    function cetakReport(x, y, merge) {
        var viewBy = ''
        if (y == 1) {
            viewBy = 'Detail'
        }
        eval('var url = "<?= base_url() ?>report/' + x + 'PersonEarn' + viewBy + '"')
        var params = "*$" + date_start + "*$" + date_end + "*$" + itemId + "*$" + viewBy + "*$" + merge;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }

    function table_scroll(className) {
        const slider = document.querySelector("." + className);
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener("mousedown", (e) => {
            document.querySelector("." + className).style.cursor = "grabbing";
            isDown = true;
            slider.classList.add("active");
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener("mouseleave", () => {
            isDown = false;
            document.querySelector("." + className).style.cursor = "grab";
            slider.classList.remove("active");
        });

        slider.addEventListener("mouseup", () => {
            isDown = false;
            document.querySelector("." + className).style.cursor = "grab";
            slider.classList.remove("active");
        });

        slider.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            document.querySelector("." + className).style.cursor = "grabbing";
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 3; // scroll-fast
            slider.scrollLeft = scrollLeft - walk;
        });
    }

    function exportExcel() {
        itemId = $('#selectItem').map(function() {
            return $(this).val();
        }).get().toString()
        var url = '<?= base_url('report/exportLaporanGudang') ?>';
        var params = "*$" + itemId + "*$" + date_start + "*$" + date_end;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }

    function roundToOne(num) {
        return +(Math.round(num + "e+1") + "e-1");
    }
</script>