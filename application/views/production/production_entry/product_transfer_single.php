<style type="text/css">
    .progress-bulat {
        width: 80px;
        height: 80px;
        background: none;
        position: relative;
    }

    .progress-bulat::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 10px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress-bulat>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress-bulat .progress-left {
        left: 0;
    }

    .progress-bulat .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 10px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress-bulat .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress-bulat .progress-right {
        right: 0;
    }

    .progress-bulat .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress-bulat .progress-value {
        position: absolute;
        top: 0;
        left: 0;
    }
</style>
<style type="text/css">
    .progress-kotak {
        height: 15px;
    }

    .progress-bar-kotak {
        font-size: 10px;
        text-align: left;
        padding-left: 4px;
    }

    .machineStock:hover {
        background-color: #d1deeb;
    }

    .selected {
        background-color: #F8F0E5;
    }

    .circle-shape {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    .vertical-line {
        border-left: 2px dotted grey;
        height: 10px;
        margin: 0 auto;
    }

    .v-zone {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }
</style>
<style>
    /* ANIMATION */
    .shake-bottom {
        -webkit-animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
        animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
    }

    @-webkit-keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    @keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row">
                    <div class="col-2 align-self-center">
                        <b class="mb-2">
                            <p class="m-0 small">Machine Stock</p>
                        </b>
                        <p class="m-0 super-small-text">Updated</p>
                        <p class="m-0 super-small-text text-grey mb-2">05/08/2023 08:11</p>

                        <button type="button" class="btn btn-primary btn-sm p-1 small-text" onclick="viewAllMachineStock()">View All</button>

                    </div>
                    <div class="col-10">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="false">
                            <div class="carousel-inner" id="listCarousel">
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="justify-content:left !important">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="justify-content:right !important">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 pt-2">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Transaksi</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-primary shadow-none" onclick="formTransaction()"><i class="fa fa-paper-plane me-2"></i>Transaction</button>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-dark shadow-none dropdown-toggle position-relative" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="jumlahWaiting"></span>
                                <i class="fa fa-bell-o"></i>
                            </button>
                            <ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuClickableInside" id="notifWaiting">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="row justify-content-center" id="transaksiGroup">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-12">
                        <div class="card shadow-none">
                            <div class="card-body pt-0">
                                <table class="table table-sm table-hover small-text">
                                    <thead>
                                        <tr class="">
                                            <th scope="col" class="p-3 pt-5">#</th>
                                            <th scope="col" class="p-3 pt-5"></th>
                                            <th scope="col" class="p-3 pt-5">Time</th>
                                            <th scope="col" class="p-3 pt-5">Item / Material</th>
                                            <th scope="col" class="p-3 pt-5">QTY</th>
                                            <th scope="col" class="p-3 pt-5">Unit</th>
                                            <th scope="col" class="p-3 pt-5 bg-light">Source</th>
                                            <th scope="col" class="p-3 pt-5 bg-light">Direction</th>
                                            <th scope="col" class="p-3 pt-5">User</th>
                                            <th scope="col" class="p-3 pt-5">Status</th>
                                            <th scope="col" class="p-3 pt-5"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="transaksiDetail">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    function sortByProductId(data, idProducts) {
        const idSet = new Set(idProducts);

        const sortedData = [...data].sort((a, b) => {
            const aInIdProducts = idSet.has(a.item_id);
            const bInIdProducts = idSet.has(b.item_id);

            if (aInIdProducts && !bInIdProducts) {
                return -1;
            } else if (!aInIdProducts && bInIdProducts) {
                return 1;
            } else {
                return 0;
            }
        });

        return sortedData;
    }

    function extractProductId(data) {
        return data.map(function(item) {
            return item.product.id;
        });
    }

    function sumQtyByItemId(data) {
        const qtySumByItemId = {};

        data.forEach(item => {
            const itemId = item.item.id;
            const qty = item.qty;

            if (!qtySumByItemId[itemId]) {
                qtySumByItemId[itemId] = qty;
            } else {
                qtySumByItemId[itemId] += qty;
            }
        });

        const output = [];
        for (const itemId in qtySumByItemId) {
            output.push({
                item_id: parseInt(itemId),
                total_qty: qtySumByItemId[itemId],
            });
        }

        return output;
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function percentageToDegrees(percentage) {
        return percentage / 100 * 360
    }

    function getAliases(data) {
        const aliases = data.map(item => item.item.alias);
        return aliases.join(', ');
    }

    function conversiToTarget(input, multiplier, satuanBesar, satuanKecil) {
        const trays = Math.floor(input / multiplier);
        const remainingStik = input % multiplier;

        var nilai = ''
        if (remainingStik) {
            nilai = number_format(trays) + ' <span class="text-dark-grey">' + satuanBesar + '</span> ' + number_format(remainingStik) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
        } else {
            nilai = number_format(trays) + ' <span class="text-dark-grey">' + satuanBesar + '</span>'
        }
        return nilai
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var workPlanMachineId = '<?= $workPlanMachineId ?>'
    var dataEntry
    var itemIdSelected = []

    $(document).ready(function() {
        // loadData()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
            workPlanProductId: isRunningID
        }
        var url = "<?= api_produksi('loadPageProductTransferEntrySingle'); ?>"
        getData(data, url)
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function getData(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
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
                dataEntry = response.data
                var dataMentah = deepCopy(dataEntry.workPlanMachine.product)
                dataEntry.workPlanMachine.products = []
                dataEntry.workPlanMachine.products.push(dataMentah)
                arrangeVariable()
            }
        })
    }
    var stokMachineSort
    var listMachineTransferDetail = []
    var groupMachineReference

    function arrangeVariable() {
        reset()
        dataEntry.listMachineTransferDetail.forEach(e => {
            listMachineTransferDetail.push({
                id: e.id,
                send_at: e.send_at,
                item_id: e.item.id,
                item_name: e.item.name,
                item_alias: e.item.alias,
                type: e.type,
                unit_name: e.unit.name,
                qty: e.qty,
                source: e.source.name,
                destination: e.destination.name,
                machine_reference: e.machine_reference.name,
                action: e.action,
                status: e.status,
                user: e.send_by.name,
                note: e.note,
            })
        });
        groupMachineReference = groupAndSum(listMachineTransferDetail, ['machine_reference', 'destination'], ['qty'])
        dataMachineStock()
    }

    function reset() {
        stokMachineSort
        listMachineTransferDetail = []
        groupMachineReference
    }

    function dataMachineStock() {
        var productId = extractProductId(dataEntry.workPlanMachine.products)
        stokMachineSort = sortByProductId(dataEntry.machineStock, productId)
        transaksiGroup()
    }

    function transaksiGroup() {
        var html = ''
        if (groupMachineReference.length) {
            groupMachineReference.forEach(e => {
                var destination = e.destination
                if (e.machine_reference) {
                    destination = e.machine_reference
                }
                html += '<div class="col-2 text-center">'
                html += '<p class="m-0 small-text">' + destination + '</p>'
                html += '<h1 class="text-dark-grey"><b>' + number_format(e.qty) + '</b></h1>'
                html += '</div>'
            });
            html += '<div class="col-2 text-center">'
            html += '<p class="m-0 small-text">Satuan</p>'
            html += '<h1 class="text-dark-grey"><b>' + dataEntry.productionOutUnit.name + '</b></h1>'
            html += '</div>'
            $('#transaksiGroup').html(html)
        } else {
            html += '<div class="col-12 text-center align-self-center">'
            html += '<i class="small-text">Tidak Ada Transaksi</i>'
            html += '</div>'
            $('#transaksiGroup').html(html)

        }
        transaksiDetail()
    }

    function transaksiDetail() {
        var html = ''
        // console.log(listMachineTransferDetail)
        if (listMachineTransferDetail.length) {
            var a = 1
            listMachineTransferDetail.forEach(e => {
                var dataProducts = dataEntry.machineStock.find((v, k) => {
                    if (v.item_id == e.item_id) return true
                })
                var destination = '<b>' + e.destination + '</b>'
                if (e.machine_reference) {
                    destination = '<p class="m-0 text-grey">' + e.destination + '</p>'
                    destination += '<div class="v-zone"><div class="vertical-line mt-1 mb-1"></div></div>'
                    destination += '<b>' + e.machine_reference + '</b>'
                }
                var arrow = '<i class="fa fa-arrow-down text-success"></i>'
                if (e.action == 'OUT') {
                    arrow = '<i class="fa fa-arrow-up text-danger"></i>'
                }
                if (e.status == 'WAITING') {
                    var status = '<span class="badge rounded-pill bg-light text-dark-grey">Waiting</span>'
                } else if (e.status == 'RECEIVED') {
                    var status = '<span class="badge rounded-pill bg-success">Diterima</span>'
                } else if (e.status == 'REJECTED') {
                    var status = '<span class="badge rounded-pill bg-danger">Ditolak</span>'
                } else {
                    var status = ''

                }
                html += '<tr>'
                html += '<th class="p-2  text-center" scope="row">' + a++ + '</th>'
                html += '<td class="p-2  text-center">' + arrow + '</td>'
                html += '<td class="p-2  text-center">' + formatDateIndonesiaTanggalBulanSort(e.send_at) + ' ' + formatJamMenit(e.send_at) + '</td>'
                html += '<td class="p-2 ">'
                // html += '<p class="m-0 super-small-text"><b>' + e.item_alias + '</b></p>'
                html += '<p class="m-0"><b>' + e.item_alias + '</b><p class="m-0 super-small-text">' + e.item_name + '</p></p>'
                html += '</td>'
                if (dataProducts) {
                    var nilaiConversi = conversiToTarget(e.qty, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
                } else {
                    var nilaiConversi = number_format(e.qty) + ' ' + e.unit_name
                }
                html += '<td class="p-2  text-center fw-bolder text-orange nowrap">' + number_format(e.qty) + '<p class="m-0 super-small-text text-dark">( ' + nilaiConversi + ' )</p></td>'
                html += '<td class="p-2  text-center text-orange">' + e.unit_name + '</td>'
                html += '<td class="p-2  text-center bg-light"><b>' + e.source + '</b></td>'
                html += '<td class="p-2  text-center bg-light">' + destination + '</td>'
                html += '<td class="p-2  text-center">' + e.user.split(' ')[0] + '</td>'
                html += '<td class="p-2  text-center">' + status + '</td>'
                html += '<td class="p-2  text-center">'
                html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="viewDetail(' + e.id + ')"><i class="fa fa-eye"></i></button>'
                html += '</td>'
                html += '</tr>'
            });
        } else {
            html += '<tr>'
            html += '<td class="text-center p-5" colspan="11"><i class="small-text">Tidak Ada Data yang Tersedia</i></td>'
            html += '</tr>'
        }
        $('#transaksiDetail').html(html)
        carouselMachineStock()
    }

    function carouselMachineStock() {
        var html = ''
        $.each(stokMachineSort, function(k, v) {
            var active = ''
            if (k == 0) {
                active = 'active'
            }
            if (k % 2 == 0) {
                html += '<div class="carousel-item ' + active + '" data-bs-ride="false">'
                html += '<div class="row justify-content-center">'
            }
            html += '<div class="col-5">'
            html += showProgressMachineStock(v)
            html += '</div>'
            if (k % 2 != 0) {
                html += '</div>'
                html += '</div>'
            }
        });
        $('#listCarousel').html(html)
        activatedProgressBar()
    }

    function activatedProgressBar() {
        $(".progress").each(function() {
            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');
            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }
        })
        notifWaiting()
    }

    function singkatkanTeks(teksAwal) {
        // Mengecek apakah panjang teks awal lebih dari 3 karakter
        var kataKata = teksAwal.split(' ');
        if (kataKata[0].length > 5) {
            // Mengambil tiga karakter pertama dari teks awal
            var singkatan = teksAwal.substring(0, 3);

            // Mengambil kata selanjutnya setelah tiga karakter pertama
            var teksAkhir = singkatan + '. ' + hapusKataPertama(teksAwal);

            return teksAkhir;
        } else {
            // Jika panjang teks awal tidak lebih dari 3 karakter, kembalikan teks awal
            return teksAwal;
        }
    }

    function hapusKataPertama(teksAwal) {
        // Membagi teks menjadi array kata-kata
        var kataKata = teksAwal.split(' ');
        // Menghapus kata pertama dari array
        kataKata.shift();
        // Menggabungkan kembali array kata-kata menjadi teks
        var teksAkhir = kataKata.join(' ');

        return teksAkhir;
    }

    function notifWaiting() {
        var html = ''
        var count = 0
        dataEntry.machineTransferWaiting.forEach(e => {
            if (e.status == 'WAITING' && e.action == 'IN' && count < 4) {
                html += '<div style="width: 300px;max-height: 400px;overflow-x: hidden;overflow-y: auto;">'
                html += '<li><a class="dropdown-item" href="javascript:void(0)" onclick="detailWaiting(' + e.id + ')">'
                html += '<div class="row pt-2 pb-2">'

                html += '<div class="col-3 text-center">'
                html += '<div class="circle-shape bg-dongker">'
                html += '<p class="m-0 text-wrap small-text text-white">' + singkatkanTeks(e.subject_sender.name) + '</p>'
                html += '</div>'
                html += '</div>'

                html += '<div class="col-9 align-self-center">'

                html += '<div class="row">'

                html += '<div class="col-6">'
                html += '<p class="m-0 super-small-text text-dark"><b>' + shortenName(e.employee_sender.name, 2) + '</b></p>'
                html += '</div>'

                html += '<div class="col-6 ps-0 text-end">'
                html += '<p class="m-0 super-small-text text-dark-grey text-wrap">' + formatDateIndonesiaTanggalBulan(e.time) + ' ' + formatJamMenit(e.time) + '</p>'
                html += '</div>'

                html += '<div class="col-12">'

                html += '<p class="m-0 text-wrap small-text">' + shortenText('Anda mendapatkan permintaan persetujuan untuk ' + getAliases(e.machine_transfer_detail), 100) + '</p>'
                if (e.machine_next) {
                    html += '<p class="m-0 text-wrap super-small-text text-success"><i class="fa fa-paper-plane me-2"></i>Send to ' + e.machine_next.name + '</p>'
                }

                html += '</div>'

                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</a></li>'
                html += '</div>'
                html += '<li><hr class="dropdown-divider mt-0 mb-0"></li>'
                count++
            }
        });
        if (!count) {
            html += '<div class="card border-0 shadow-none">'
            html += '<div class="card-body p-5 text-center">'
            html += '<p class="m-0 super-small-text"><i>Tidak Notifikasi</i></p>'
            html += '</div>'
            html += '</div>'
        }
        html += '<li class="text-center" onclick="seeAllWaiting()"><p class="m-0 small-text text-primary">See All</p></li>'
        $('#notifWaiting').html(html)
        $('#dropdownMenuClickableInside').removeClass('shake-bottom')
        if (dataEntry.machineTransferWaiting.length) {
            $('#jumlahWaiting').removeClass('d-none')
            $('#dropdownMenuClickableInside').addClass('shake-bottom')
            if (dataEntry.machineTransferWaiting.length > 100) {
                $('#jumlahWaiting').html('<p class="m-0">99+</p>')
            } else {
                $('#jumlahWaiting').html('<p class="m-0">' + dataEntry.machineTransferWaiting.length + '</p>')
            }
        } else {
            $('#jumlahWaiting').addClass('d-none')
        }
    }

    function seeAllWaiting() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Unprocessed Data</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'

        html_body += '<nav>'
        html_body += '<div class="nav nav-tabs" id="nav-tab" role="tablist">'
        html_body += '<button class="nav-link small-text active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Today</button>'
        html_body += '<button class="nav-link small-text" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">All Pending</button>'
        html_body += '</div>'
        html_body += '</nav>'
        html_body += '<div class="tab-content" id="nav-tabContent">'
        html_body += '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">'
        // today
        // today
        html_body += '</div>'
        html_body += '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">'
        // all
        // all
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none');
        fillDataWaiting()
    }

    function fillDataWaiting() {
        if (dataEntry.machineTransferWaiting.length) {
            var data = dataEntry.machineTransferWaiting.filter((v, k) => {
                if (formatDate(v.time) == currentDate()) return true
            })
            var html2 = ''
            dataEntry.machineTransferWaiting.forEach(e => {
                html2 += templateWaiting(e)
            });
            $('#nav-profile').html(html2)
            if (data.length) {
                var html = ''
                data.forEach(e => {
                    html += templateWaiting(e)
                });
                $('#nav-home').html(html)
            } else {
                emptyText('#nav-home', 'Tidak Ada Data Tersedia')
            }
        } else {
            emptyText('#nav-profile', 'Tidak Ada Data Tersedia')
            emptyText('#nav-home', 'Tidak Ada Data Tersedia')
        }


    }

    function templateWaiting(data) {
        var html = ''
        html += '<div class="card rounded-0 border-top-0 border-start-0 border-end-0 shadow-none">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-2 text-center">'
        html += '<div class="circle-shape bg-light-dongker">'
        html += '<p class="m-0 text-wrap small-text text-white">' + data.subject_sender.name + '</p>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 small-text text-orange"><b>' + data.employee_sender.name + '</b></p>'
        html += '<p class="m-0 small-text text-dark-grey"><b>' + getDateStringWithTime(data.time) + '</b></p>'
        html += '<p class="m-0 mt-2 small-text text-dark-grey">'
        var a = 0
        data.machine_transfer_detail.forEach(e => {
            html += e.item.name + ' <span class="fw-bolder">(' + e.qty + ')</span>'
            a++
            if (a < data.machine_transfer_detail.length) {
                html += ', '
            }
        });
        html += '</p>'
        html += '</div>'
        html += '<div class="col align-self-center text-center">'
        var next_id = null
        if (data.machine_next) {
            next_id = data.machine_next.id
        }
        html += '<div class="row">'
        html += '<div class="col">'
        html += '<button class=" w-100 h-100 btn btn-sm btn-outline-danger" onclick="approvalData(' + data.id + ',0,' + next_id + ')"><i class="me-2 fa fa-times"></i> Reject</button>'
        html += '</div>'
        html += '<div class="col">'
        html += '<button class=" w-100 h-100 btn btn-sm btn-outline-success" onclick="approvalData(' + data.id + ',1,' + next_id + ')"><i class="me-2 fa fa-check"></i> Accept</button>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function detailWaiting(id) {
        var jenis = 'parent'
        var data = dataEntry.machineTransferWaiting.find((v, k) => {
            if (v.id == id) return true
        })
        if (!data) {
            jenis = 'detail'
            var data = dataEntry.listMachineTransferDetail.find((v, k) => {
                if (v.id == id) return true
            })
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Transaction</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'

        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Waktu Transaksi</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + getDateStringWithTime(data.time) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Dibuat Oleh</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + data.employee_sender.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>' + toTitleCase(data.subject_sender.subject) + ' Asal</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + data.subject_sender.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>' + toTitleCase(data.subject_receiver.subject) + ' Tujuan</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + data.subject_receiver.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text text-success"><b><i class="fa fa-plane me-1"></i>Direct</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        if (data.machine_next) {
            html_body += '<p class="m-0 small-text fw-bolder">' + data.machine_next.name + '</p>'
        } else {
            html_body += '<p class="m-0 small-text">-</p>'
        }
        html_body += '</div>'
        if (data.status == 'WAITING') {
            html_body += '<div class="col-12">'
            html_body += '<hr>'
            html_body += '</div>'
            html_body += '<div class="col-3">'
            html_body += '<p class="m-0 small-text"><b>Waktu Persetujuan</b></p>'
            html_body += '</div>'
            html_body += '<div class="col-9">'
            html_body += '<div class="row">'
            html_body += '<div class="col">'
            html_body += '<input class="form-control form-control-sm datepicker" type="text" id="dateTransaction" placeholder="Tanggal" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + formatDate(data.time) + '">'
            html_body += '</div>'
            html_body += '<div class="col">'
            html_body += '<input type="time" id="timeTransaction" class="form-control form-control-sm" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + formatJamMenit(data.time) + '" required="required">'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Detail</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        // detail
        html_body += '<div class="row">'
        if (jenis == 'parent') {
            data.machine_transfer_detail.forEach(el => {
                html_body += '<div class="col">'
                html_body += '<p class="m-0 small-text">' + el.item.name + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-auto text-end">'
                html_body += '<p class="m-0 small-text"><span class="text-orange">' + number_format(el.qty) + '</span> <b>' + el.unit.name + '</b></p>'
                html_body += '</div>'
            });
        } else {
            html_body += '<div class="col">'
            html_body += '<p class="m-0 small-text">' + data.item.name + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto text-end">'
            html_body += '<p class="m-0 small-text"><span class="text-orange">' + number_format(data.qty) + '</span> <b>' + data.unit.name + '</b></p>'
            html_body += '</div>'
        }
        html_body += '</div>'
        // detail
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-12">'
        if (data.status == 'WAITING') {
            html_body += '<div class="row pt-5">'
            html_body += '<div class="col" style="height:50px;">'
            html_body += '<button class=" w-100 h-100 btn btn-sm btn-outline-danger" onclick="approvalData(' + id + ',0,' + data.machine_next + ')"><i class="me-2 fa fa-times"></i> Reject</button>'
            html_body += '</div>'
            html_body += '<div class="col" style="height:50px;">'
            html_body += '<button class=" w-100 h-100 btn btn-sm btn-outline-success" onclick="approvalData(' + id + ',1,' + data.machine_next + ')"><i class="me-2 fa fa-check"></i> Accept</button>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pt-0 pb-0')
        $('.nominal').number(true);
        $('#dateTransaction').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            todayHighlight: true,
        });
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="">Simpan</button>'
        $('#modalFooter').html(html_footer).addClass('d-none');
    }

    function formTransaction() {
        itemIdSelected = []
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Transaction</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-3 border-end ps-0">'

        html_body += '<div class="row p-0">'
        html_body += '<div class="col-auto align-self-center p-4 pb-0">'
        html_body += '<p class="small-text"><b>Machine Stock</b></p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row pt-3">'
        html_body += '<div class="p-0 m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'

        stokMachineSort.forEach(e => {
            var data = dataEntry.productionOutItem.filter((v, k) => {
                if (v.item.id == e.item_id) return true
            })
            var dataProducts = dataEntry.machineStock.find((v, k) => {
                if (v.item_id == e.item_id) return true
            })
            var akumulasiProdOut = sumQtyByItemId(data)
            if (akumulasiProdOut.length) {
                var jumlahStok = parseFloat(akumulasiProdOut[0].total_qty) + parseFloat(e.stok_awal)
            } else {
                var jumlahStok = 0 + parseFloat(e.stok_awal)
            }
            if (jumlahStok) {
                var persen = roundToTwo(parseFloat(e.stok_akhir) / jumlahStok * 100)
            } else {
                var persen = 0
            }
            if (persen < 20) {
                var bg = 'bg-danger'
            } else if (persen >= 20 && persen < 60) {
                var bg = 'bg-warning'
            } else if (persen >= 60 && persen < 100) {
                var bg = 'bg-primary'
            } else {
                var bg = 'bg-success'
            }
            html_body += '<div class="col-12 p-4 border-top border-bottom machineStock pointer" id="chooseBrand' + e.item_id + '" onclick="chooseBrand(' + e.item_id + ')">'

            html_body += '<div class="row">'

            html_body += '<div class="col">'
            html_body += '<b class="m-0">' + e.alias + '</b>'
            html_body += '</div>'
            html_body += '<div class="col text-end align-self-bottom">'
            html_body += '<p class="super-small-text m-0">' + e.name + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-12">'
            html_body += '<div class="progress">'
            html_body += '<div class="progress-bar ' + bg + '" style="width: ' + persen + '%" role="progressbar" aria-valuenow="' + persen + '" aria-valuemin="0" aria-valuemax="100"></div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '<div class="col mt-1">'
            if (dataProducts) {
                var nilaiConversi = conversiToTarget(e.stok_akhir, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
            } else {
                var nilaiConversi = number_format(e.stok_akhir) + ' ' + e.unit_name
            }
            html_body += '<p class="super-small-text m-0">Sisa<br><b class="text-orange">' + nilaiConversi + '</b></p>'
            html_body += '</div>'
            html_body += '<div class="col mt-1 text-end">'
            if (dataProducts) {
                var nilaiConversi = conversiToTarget(jumlahStok, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
            } else {
                var nilaiConversi = number_format(jumlahStok) + ' ' + e.unit_name
            }
            html_body += '<p class="super-small-text m-0">Total<br><b class="text-primary">' + nilaiConversi + '</b></p>'
            html_body += '</div>'

            html_body += '</div>'
            html_body += '</div>'
        })

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-9">'

        html_body += '<div class="row p-0">'
        html_body += '<div class="col-auto align-self-center p-4 pb-0">'
        html_body += '<p class="small-text"><b>Form Transaction</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-12" id="listFormTransaction">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('pt-0 pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="arrangeVariableInsert()">Simpan</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none')
        kerangkaFormTransaction()
    }

    function chooseBrand(id) {
        if ($('#chooseBrand' + id).hasClass('selected')) {
            $('#chooseBrand' + id).removeClass('selected')
            itemIdSelected = itemIdSelected.filter(e => e.item_id != id);
        } else {
            $('#chooseBrand' + id).addClass('selected')
            var data = deepCopy(dataEntry.machineStock.find((v, k) => {
                if (v.item_id == id) return true
            }))
            data.qty = ''
            if (data.material_moving) {
                data.material_moving.forEach(e => {
                    e.qty = ''
                });
            }
            if (data) {
                itemIdSelected.push(data)
            }
        }
        listFormTransaction()
    }

    function kerangkaFormTransaction() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-8 pt-3" id="listFormBrand" style="height: 450px;overflow-x: hidden;overflow-y: auto;">'
        html += '</div>'
        html += '<div class="col-4 pt-3">'

        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<p class="small-text"><b>Tujuan Transaksi</b></p>'
        html += '<select class="form-select" name="state" id="tujuanTransaksi" onchange="eventButton()">'
        html += '<option value="" disabled selected>Pilih Tujuan</option>'
        dataEntry.machineTransferDestination.forEach(e => {
            html += '<optgroup label="' + e.type + '">'
            if (e.data) {
                e.data.forEach(el => {
                    var gudang = ''
                    if (el.gudang_id) {
                        gudang = el.gudang_id
                    }
                    html += '<option value="' + el.id + '" data-variable="' + el.variable + '" data-gudang="' + gudang + '">' + el.name + '</option>'
                });
            }
            html += '</optgroup>'
        });
        html += '</select>'
        html += '<p class="small-text mt-3"><b>Tanggal</b></p>'
        html += '<input class="form-control datepicker" type="text" id="dateInput" placeholder="Tanggal" value="' + dataEntry.workPlanMachine.date + '" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" disabled>'
        html += '<p class="small-text mt-3"><b>Waktu (Jam)</b></p>'
        html += '<input type="time" id="waktu" class="form-control" value="" required="required" oninput="eventButton()">'
        html += '<button class="btn btn-sm btn-outline-dark float-end mt-2 p-2" onclick="autoClock()"><i class="fa fa-clock-o me-2"></i>Auto</button>'
        html += '<p class="small-text mt-3"><b>Notes</b></p>'
        html += '<textarea class="form-control" rows="8" placeholder="Tuliskan catatan disini" id="notes"></textarea>'
        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#listFormTransaction').html(html)
        empty('#listFormBrand', 'Belum Ada Data yang Terpilih')
        // $('.select2').select2({
        //     dropdownParent: $('#modal')
        // });
    }

    function currentTimeTitikDua() {
        var d = new Date();
        var jam = d.getHours();
        var menit = d.getMinutes();
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        var time = jam + ":" + menit;
        return time;
    }

    function autoClock() {
        $('#waktu').val(currentTimeTitikDua())
        eventButton()
    }

    function listFormTransaction() {
        var html = ''
        if (itemIdSelected.length) {
            itemIdSelected.forEach(e => {
                var dataProducts = dataEntry.machineStock.find((v, k) => {
                    if (v.item_id == e.item_id) return true
                })
                if (dataProducts) {
                    var nilaiConversi = conversiToTarget(e.stok_akhir, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
                } else {
                    var nilaiConversi = number_format(e.stok_akhir) + ' ' + e.unit_name
                }
                // card
                html += '<div class="card shadow-none mb-2">'
                html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;z-index:999;" onclick="chooseBrand(' + e.item_id + ')"><i class="small-text fa fa-times text-light"></i></span>'
                html += '<div class="card-body  p-0">'
                html += '<div class="row p-0 m-0">'

                html += '<div class="col-1 p-3 rounded-start bg-dongker text-center">'
                html += '<div class="row d-flex align-items-center h-100">'
                html += '<div class="col text-center">'
                html += '<span class="small text-white vertical-text">' + e.alias + '</span>'
                html += '</div>'
                html += '</div>'
                html += '</div>'

                html += '<div class="col p-0">'
                // form fill
                html += '<div class="row">'
                html += '<div class="col-12">'
                // html += '<p class="m-0 small-text"><b>Hasil</b></p>'

                html += '<div class="card shadow-none border-0" id="cardHasil' + e.item_id + '">'
                html += '<div class="card-body">'

                if (dataProducts) {
                    // console.log(dataProducts)
                    html += '<div class="row mb-3">'
                    html += '<div class="col-3">'
                    html += '</div>'
                    html += '<div class="col-5">'
                    html += '<input type="text" id="qty_target" class="form-control form-control-sm nominal qty qty_item qty_item' + e.item_id + '" required="required" onkeyup="fillForm(event,' + e.item_id + ')" autocomplete="off" value="' + e.qty + '" data-item="' + e.item_id + '" data-unit="' + dataProducts.unit_target.id + '" data-jenisunit="unit_target" style="background-color:transparent;border:0px;" data-stok="' + e.stok_akhir + '">'
                    html += '<hr class="m-0">'
                    html += '</div>'
                    html += '<div class="col-4 align-self-center">'
                    html += '<p class="m-0 small"><b>' + dataProducts.unit_target.name + '</b></p>'
                    html += '</div>'
                    html += '</div>'
                }

                html += '<div class="row">'
                html += '<div class="col-3">'
                html += '</div>'
                html += '<div class="col-5">'
                html += '<input type="text" id="qty_input" class="form-control form-control-sm nominal qty qty_item qty_item' + e.item_id + '" required="required" onkeyup="fillForm(event,' + e.item_id + ')" autocomplete="off" value="' + e.qty + '" data-item="' + e.item_id + '" data-unit="' + e.unit_id + '" data-jenisunit="unit_input" style="background-color:transparent;border:0px;" data-stok="' + e.stok_akhir + '">'
                html += '<hr class="m-0">'
                html += '<p class="m-0 mt-2 float-end super-small-text">Sisa Stok <b class="text-orange" id="sisaStokBerjalan' + e.item_id + '">' + nilaiConversi + '</b></p>'
                html += '</div>'
                html += '<div class="col-4 align-self-center">'
                html += '<p class="m-0 small"><b>' + e.unit_name + '</b></p>'
                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '</div>'

                html += '</div>'
                if (e.material_moving) {
                    html += '<div class="col-12 pt-3">'
                    html += '<p class="m-0 small-text"><b>Mentah Khusus</b></p>'

                    e.material_moving.forEach(el => {
                        html += '<div class="card shadow-none mb-2" id="cardHasil' + e.item_id + '' + el.item_id + '">'
                        html += '<div class="card-body p-2">'

                        html += '<div class="row">'
                        html += '<div class="col-4 align-self-center">'
                        html += '<b><p class="m-0 small-text">' + el.alias + '</p></b>'
                        html += '</div>'
                        html += '<div class="col-4">'
                        html += '<input type="text" id="qty" class="form-control form-control-sm nominal qty qty_material" required="required" onkeyup="fillForm(event,' + e.item_id + ',' + el.item_id + ')" autocomplete="off" value="' + el.qty + '" style="background-color:transparent;border:0px;" data-stok="' + el.stok_akhir + '" data-item="' + el.item_id + '" data-unit="' + el.unit_id + '">'
                        html += '<hr class="m-0">'
                        html += '<p class="m-0 float-end super-small-text">Sisa Stok <b class="text-orange" id="sisaStokBerjalan' + e.item_id + '' + el.item_id + '">' + el.stok_akhir + '</b></p>'
                        html += '</div>'
                        html += '<div class="col-4 align-self-center">'
                        html += '<p class="m-0 small"><b>' + el.unit_name + '</b></p>'
                        html += '</div>'
                        html += '</div>'

                        html += '</div>'
                        html += '</div>'
                    });

                    html += '</div>'
                    html += '</div>'
                }
                // form fill
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                // card
            });
            $('#listFormBrand').html(html)
            itemIdSelected.forEach(e => {
                colorizedValue(e.qty, e.stok_akhir, e.item_id, '')
                if (e.material_moving) {
                    e.material_moving.forEach(el => {
                        colorizedValue(el.qty, el.stok_akhir, e.item_id, el.item_id)
                    });
                }
            })
        } else {
            empty('#listFormBrand', 'Belum Ada Data yang Terpilih')
        }
        $('.nominal').number(true);
    }

    function fillForm(event, id, material_id = '') {
        const value = event.target.value;
        const stok = event.target.dataset.stok;
        const unit = event.target.dataset.unit
        colorizedValue(removeCommas(value), stok, id, material_id, unit)
    }

    function removeCommas(numberWithCommas) {
        return numberWithCommas.replace(/,/g, '');
    }

    function colorizedValue(value, stok, id, material_id, unit) {
        var data = itemIdSelected.find((v, k) => {
            if (v.item_id == id) return true
        })
        var totalAll = 0
        var status = 'item'
        var dataProducts
        if (material_id) {
            var material = data.material_moving.find((v, k) => {
                if (v.item_id == material_id) return true
            })
            // material.qty = value
            totalAll = value
            status = 'material'
        } else {
            totalAll = calculateConvertedMaterial(id).totalDefault
            dataProducts = calculateConvertedMaterial(id).dataProductsDefault
            // data.qty = totalAll
        }
        if (totalAll) {
            if (parseFloat(totalAll) <= parseFloat(stok)) {
                $('#cardHasil' + id + material_id).removeClass('bg-light-danger')
                $('#cardHasil' + id + material_id).addClass('bg-light-success')
                $('#sisaStokBerjalan' + id + material_id).html(conversiSelisih(data, dataProducts, stok, totalAll))
            } else if (parseFloat(totalAll) > parseFloat(stok)) {
                $('#cardHasil' + id + material_id).removeClass('bg-light-success')
                $('#cardHasil' + id + material_id).addClass('bg-light-danger')

                $('#sisaStokBerjalan' + id + material_id).html('<span class="text-danger">Melebihi Jumlah Stok</span>')
            }
        } else {
            $('#cardHasil' + id + material_id).removeClass('bg-light-success')
            $('#cardHasil' + id + material_id).removeClass('bg-light-danger')
            $('#sisaStokBerjalan' + id + material_id).html(conversiSelisih(data, dataProducts, stok, totalAll))
        }
        eventButton()
    }

    function conversiSelisih(data, dataProducts, stok, totalAll) {
        var nilaiConversi = ''
        var selisih = parseFloat(stok) - parseFloat(totalAll)
        if (dataProducts) {
            nilaiConversi = conversiToTarget(selisih, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
        } else {
            nilaiConversi = selisih + ' ' + data.unit_name
        }
        return nilaiConversi
    }

    function checkDataValidity(data) {
        for (let i = 0; i < data.length; i++) {
            const item = data[i];

            if (parseFloat(item.qty) > parseFloat(item.stok_akhir)) {
                return 0;
            }

            if (item.material_moving) {
                for (let j = 0; j < item.material_moving.length; j++) {
                    const materialMovingItem = item.material_moving[j];

                    if (parseFloat(materialMovingItem.qty) > parseFloat(materialMovingItem.stok_akhir)) {
                        return 0;
                    }
                }
            }
        }
        if (!$('#tujuanTransaksi').val() || !$('#waktu').val()) {
            return 0
        }
        return 1;
    }

    function eventButton() {
        var available = checkDataValidity(itemIdSelected)
        if (available) {
            $('#btnSimpan').removeAttr('disabled', true)
        } else {
            $('#btnSimpan').attr('disabled', true)
        }
    }

    function calculateConvertedMaterial(id) {
        var totalDefault = 0
        var valueItem = $('.qty_item' + id).map(function() {
            return $(this).val();
        }).get();
        var unitItem = $('.qty_item' + id).map(function() {
            return $(this).data('unit');
        }).get();
        var jenisUnitItem = $('.qty_item' + id).map(function() {
            return $(this).data('jenisunit');
        }).get();
        var dataProductsDefault = dataEntry.machineStock.find((v, k) => {
            if (v.item_id == id) return true
        })
        for (let i = 0; i < jenisUnitItem.length; i++) {
            if (dataProductsDefault) {
                if (!valueItem[i]) {
                    valueItem[i] = 0
                }
                totalDefault = parseFloat(totalDefault) + (parseFloat(valueItem[i]) * eval(`dataProductsDefault.${jenisUnitItem[i]}.multiplier`))
            } else {
                totalDefault = parseFloat(totalDefault) + parseFloat(valueItem[i])
            }
        }
        return {
            totalDefault: totalDefault,
            dataProductsDefault: dataProductsDefault,
        }
    }

    function arrangeVariableInsert() {
        var qty = $(".qty_item").map(function() {
            return $(this).val();
        }).get();
        var itemId = $(".qty_item").map(function() {
            return $(this).data('item');
        }).get();
        var uniqueItemId = [...new Set(itemId)];
        var unit = $(".qty_item").map(function() {
            return $(this).data('unit');
        }).get();
        var qty_material = $(".qty_material").map(function() {
            return $(this).val();
        }).get();
        var itemId_material = $(".qty_material").map(function() {
            return $(this).data('item');
        }).get();
        var unit_material = $(".qty_material").map(function() {
            return $(this).data('unit');
        }).get();
        var tujuanTransaksi = $("#tujuanTransaksi").val()
        var tujuanTransaksiVariable = $("#tujuanTransaksi").find(':selected').data('variable')
        var tujuanTransaksiGudang = $("#tujuanTransaksi").find(':selected').data('gudang')
        var data = {}
        data.machineTransfer = []
        var id = new Date().getTime()
        data.machineTransfer.push({
            id: id,
            machine_id: dataEntry.workPlanMachine.machine.id,
            send_at: dataEntry.workPlanMachine.date + ' ' + $('#waktu').val() + ':00',
            employee_id_sender: user_id,
            action: 'OUT',
            tag: 'TRANSFER',
            note: $('#notes').val(),
            work_plan_id: dataEntry.workPlanMachine.work_plan_id,
            shift_id: dataEntry.workPlanMachine.shift.id
        })
        eval('data.machineTransfer[0].' + tujuanTransaksiVariable + '=' + tujuanTransaksi)
        if (tujuanTransaksiGudang) {
            data.machineTransfer[0].gudang_id = tujuanTransaksiGudang
        }
        data.machineTransferDetail = []
        var index = 0
        uniqueItemId.forEach(e => {
            var total = calculateConvertedMaterial(e).totalDefault
            if (total) {
                data.machineTransferDetail.push({
                    id: id + '' + index,
                    machine_transfer_id: id,
                    item_id: e,
                    unit_id: dataEntry.productionOutUnit.id,
                    qty: total
                })
                index++
            }
        });
        for (let i = 0; i < qty_material.length; i++) {
            if (qty_material[i]) {
                data.machineTransferDetail.push({
                    id: id + '' + index,
                    machine_transfer_id: id,
                    item_id: itemId_material[i],
                    unit_id: unit_material[i],
                    qty: qty_material[i]
                })
                index++
            }
        }
        // console.log(data)
        simpanData(data)
    }

    function simpanData(data) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setMachineTransfer'); ?>'
        kelolaData(data, type, url, button)
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
            },
            success: function(response) {
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                loadData()
            }
        });
    }

    function viewAllMachineStock() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Machine Stock</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'

        html_body += '<div class="col-12">'
        html_body += '<table class="table table-bordered table-hover">'
        html_body += '<tbody>'
        $.each(stokMachineSort, function(k, v) {
            html_body += '<tr>'
            html_body += '<th class="text-start bg-light" colspan="6"><b>' + v.alias + '</b></th>'
            html_body += '</tr>'
            html_body += '<tr>'
            html_body += '<th class="small-text text-start">Item</th>'
            html_body += '<th class="small-text">Unit</th>'
            html_body += '<th class="small-text">Stok Awal</th>'
            html_body += '<th class="small-text">In</th>'
            html_body += '<th class="small-text">Out</th>'
            html_body += '<th class="small-text">Stok Akhir</th>'
            html_body += '</tr>'
            html_body += '<tr>'
            html_body += '<th class="small-text text-start">' + v.name + '</th>'
            html_body += '<th class="small-text">' + v.unit_name + '</th>'
            html_body += '<th class="small-text">' + v.stok_awal + '</th>'
            html_body += '<th class="small-text">' + v.in + '</th>'
            html_body += '<th class="small-text">' + v.out + '</th>'
            html_body += '<th class="small-text">' + v.stok_akhir + '</th>'
            html_body += '</tr>'
            if (v.material_moving) {
                v.material_moving.forEach(e => {
                    html_body += '<tr>'
                    html_body += '<th class="small-text text-start">' + e.name + '</th>'
                    html_body += '<th class="small-text">' + e.unit_name + '</th>'
                    html_body += '<th class="small-text">' + e.stok_awal + '</th>'
                    html_body += '<th class="small-text">' + e.in + '</th>'
                    html_body += '<th class="small-text">' + e.out + '</th>'
                    html_body += '<th class="small-text">' + e.stok_akhir + '</th>'
                    html_body += '</tr>'
                });
            }
        })
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '</div>'
        // $.each(stokMachineSort, function(k, v) {
        //     html_body += '<div class="col-4 p-3">'
        //     html_body += showProgressMachineStock(v)
        //     html_body += '</div>'
        // })
        html_body += '</div>'
        $('#modalBody').html(html_body)
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
        activatedProgressBar()
    }

    function showProgressMachineStock(v) {
        var html = ''
        var data = dataEntry.productionOutItem.filter((va, ke) => {
            if (va.item.id == v.item_id) return true
        })
        var dataProducts = dataEntry.machineStock.find((va, ke) => {
            if (va.item_id == v.item_id) return true
        })
        var akumulasiProdOut = sumQtyByItemId(data)
        if (akumulasiProdOut.length) {
            var jumlahStok = parseFloat(akumulasiProdOut[0].total_qty) + parseFloat(v.stok_awal)
        } else {
            var jumlahStok = 0 + parseFloat(v.stok_awal)
        }
        if (jumlahStok) {
            var persen = roundToTwo(parseFloat(v.stok_akhir) / jumlahStok * 100)
        } else {
            var persen = 0
        }
        if (persen < 20) {
            var bg = 'border-danger'
        } else if (persen >= 20 && persen < 60) {
            var bg = 'border-warning'
        } else if (persen >= 60 && persen < 100) {
            var bg = 'border-primary'
        } else {
            var bg = 'border-success'
        }
        html += '<div class="row">'
        html += '<div class="col-auto text-center">'
        html += '<div class="progress progress-bulat mx-auto" data-value="' + persen + '">'
        html += '<span class="progress-left">'
        html += '<span class="progress-bar ' + bg + '"></span>'
        html += '</span>'
        html += '<span class="progress-right">'
        html += '<span class="progress-bar ' + bg + '"></span>'
        html += '</span>'
        html += '<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">'
        html += '<div class="font-weight-bold text-dark">' + persen + '<sup class="small">%</sup></div>'
        html += '</div>'
        html += '</div>'
        if (dataProducts) {
            var nilaiConversiStokAkhir = conversiToTarget(v.stok_akhir, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
            var nilaiConversiJumlahStok = conversiToTarget(jumlahStok, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
        } else {
            var nilaiConversiStokAkhir = number_format(v.stok_akhir) + ' ' + v.unit_name
            var nilaiConversiJumlahStok = number_format(jumlahStok) + ' ' + v.unit_name
        }
        html += '<p class="m-0 mt-2 super-small-text text-dark">Sisa : ' + nilaiConversiStokAkhir + ' <br> Total : ' + nilaiConversiJumlahStok + '</p>'
        html += '</div>'

        html += '<div class="col align-self-center">'
        html += '<h4 class="text-dark-grey m-0"><b>' + v.alias + '</b></h4>'

        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<i class="fa fa-arrow-down text-success"></i>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 super-small-text text-dark">' + number_format(v.in) + ' ' + v.unit_name + '</p>'
        html += '</div>'
        html += '</div>'
        html += '<div class="row">'
        html += '<div class="col-auto align-self-center">'
        html += '<i class="fa fa-arrow-up text-danger"></i>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 super-small-text text-dark">' + number_format(v.out) + ' ' + v.unit_name + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function viewDetail(id) {
        var data = listMachineTransferDetail.find((v, k) => {
            if (v.id == id) return true
        })
        var dataProducts = dataEntry.machineStock.find((v, k) => {
            if (v.item_id == data.item_id) return true
        })
        if (dataProducts) {
            var nilaiConversi = conversiToTarget(data.qty, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
        } else {
            var nilaiConversi = number_format(data.qty) + ' ' + data.unit_name
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Transaksi</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'
        html_body += '<div class="col-4">'
        html_body += '<p class="m-0 small-text"><b>Tanggal Transaksi</b></p>'
        html_body += '<p class="m-0 small">' + getDateTime(data.send_at) + '</p>'

        html_body += '</div>'
        html_body += '<div class="col-4">'
        html_body += '<p class="m-0 small-text"><b>Item / Material</b></p>'
        html_body += '<p class="m-0 small">' + data.item_name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-4">'
        html_body += '<p class="m-0 small-text"><b>Type</b></p>'
        html_body += '<p class="m-0 small">' + data.type + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-4 mt-3">'
        html_body += '<p class="m-0 small-text"><b>QTY</b></p>'
        html_body += '<p class="m-0 small"><span class="text-orange fw-bolder">' + number_format(data.qty) + '</span> <span class="text-dark fw-bolder">( ' + nilaiConversi + ' )</span></p>'
        html_body += '</div>'
        html_body += '<div class="col-4 mt-3">'
        html_body += '<p class="m-0 small-text"><b>Unit</b></p>'
        html_body += '<p class="m-0 small text-orange fw-bolder">' + data.unit_name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-4 mt-3">'
        html_body += '<p class="m-0 small-text"><b>Source</b></p>'
        html_body += '<p class="m-0 small">' + data.source + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-4 mt-3">'
        html_body += '<p class="m-0 small-text"><b>Destination</b></p>'
        var destination = '<span class="text-grey">' + data.destination + '</span>'
        if (data.machine_reference) {
            destination = data.machine_reference
        }
        html_body += '<p class="m-0 small">' + destination + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-4 mt-3">'
        var arrow = '<i class="ms-2 fa fa-arrow-down text-success"></i>'
        if (data.action == 'OUT') {
            arrow = '<i class="ms-2 fa fa-arrow-up text-danger"></i>'
        }
        html_body += '<p class="m-0 small-text"><b>Action</b></p>'
        html_body += '<p class="m-0 small">' + data.action + '' + arrow + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-4 mt-3">'
        html_body += '<p class="m-0 small-text"><b>Status</b></p>'
        html_body += '<p class="m-0 small">' + data.status + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-3">'
        html_body += '<p class="m-0 small-text"><b>Note</b></p>'
        html_body += '<p class="m-0 small">' + data.note + '</p>'
        html_body += '</div>'
        if (data.status == 'WAITING') {
            html_body += '<div class="col-12 mt-5">'
            html_body += '<button type="button" class="w-100 btn btn-danger" id="btnSimpan" onclick="hapusData(' + id + ')"><i class="fa fa-trash me-2"></i>Hapus Data</button>'
            html_body += '</div>'
        }
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }

    function hapusData(id) {
        Swal.fire({
            text: 'Apakah anda yakin ingin menghapus data ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var button = '#btnSimpan'
                var url = '<?php echo api_produksi('setMachineTransfer'); ?>'
                var data = {
                    'deletedId': {
                        machineTransferDetail: [id]
                    }
                }
                kelolaData(data, type, url, button)
            }
        })
    }

    function approvalData(id, approval, machine_next) {
        var isSendNextMachine = 0
        if (machine_next) {
            isSendNextMachine = 1
        }
        var status = 'menolak'
        if (approval) {
            status = 'menyetujui'
        }
        Swal.fire({
            text: 'Apakah anda yakin ingin ' + status + ' data tersebut ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var button = '#btnSimpan'
                var url = '<?php echo api_produksi('setMachineTransferReceive'); ?>'
                var data = {
                    id: id,
                    isReceive: approval,
                    employeeId: user_id,
                    isSendNextMachine: isSendNextMachine,
                    receivedAt: $('#dateTransaction').val() + ' ' + $('#timeTransaction').val(),
                }
                kelolaData(data, type, url, button)
            }
        })

    }
</script>