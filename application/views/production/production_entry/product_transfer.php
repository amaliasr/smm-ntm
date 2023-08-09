<style type="text/css">
    .progress-bulat {
        width: 90px;
        height: 90px;
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
                        <button type="button" class="btn btn-sm btn-outline-dark shadow-none" onclick="formTransaction()"><i class="fa fa-paper-plane me-2"></i>Transaction</button>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 12 A</p>
                                        <h1 class="text-dark-grey"><b>200</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 12 B</p>
                                        <h1 class="text-dark-grey"><b>0</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 20 A</p>
                                        <h1 class="text-dark-grey"><b>200</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">HLP 20 B</p>
                                        <h1 class="text-dark-grey"><b>200</b></h1>
                                    </div>
                                    <div class="col text-center">
                                        <p class="m-0 small-text">Satuan</p>
                                        <h1 class="text-dark-grey"><b>Tray</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-12">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <table class="table table-sm table-hover small-text">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="p-3">#</th>
                                            <th scope="col" class="p-3">Brand</th>
                                            <th scope="col" class="p-3">QTY</th>
                                            <th scope="col" class="p-3">Unit</th>
                                            <th scope="col" class="p-3">Source</th>
                                            <th scope="col" class="p-3">Direction</th>
                                            <th scope="col" class="p-3">User</th>
                                            <th scope="col" class="p-3">Status</th>
                                            <th scope="col" class="p-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 10; $i++) { ?>
                                            <tr>
                                                <th class="p-2 text-center" scope="row">1</th>
                                                <td class="p-2 text-center">ABLF12</td>
                                                <td class="p-2 text-center">100</td>
                                                <td class="p-2 text-center">Tray</td>
                                                <td class="p-2 text-center">MK9A</td>
                                                <td class="p-2 text-center">HLP12</td>
                                                <td class="p-2 text-center">Dera</td>
                                                <td class="p-2 text-center"><span class="badge rounded-pill bg-success">Telah Diterima</span></td>
                                                <td class="p-2 text-center">
                                                    <button type="button" class="btn btn-outline-dark shadow-none btn-sm"><i class="fa fa-eye"></i></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
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
        loadData()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageCatcherEntry'); ?>"
        getData(data, url)
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
                dataMachineStock()
            }
        })
    }
    var stokMachineSort

    function dataMachineStock() {
        var productId = extractProductId(dataEntry.workPlanMachine.products)
        stokMachineSort = sortByProductId(dataEntry.machineStock, productId)
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
    }

    function formTransaction() {
        itemIdSelected = []
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl');
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
        html_body += '<div class="row">'
        html_body += '<div class="p-0 m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'

        stokMachineSort.forEach(e => {
            var data = dataEntry.productionOutItem.filter((v, k) => {
                if (v.item.id == e.item_id) return true
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
            html_body += '<div class="col">'
            html_body += '<p class="super-small-text m-0">Sisa Stok : <b class="text-orange">' + parseFloat(e.stok_akhir) + '</b></p>'
            html_body += '</div>'
            html_body += '<div class="col text-end">'
            html_body += '<p class="super-small-text m-0">Total Stok : <b class="text-primary">' + jumlahStok + '</b></p>'
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
        $('#modalFooter').html(html_footer);
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
        html += '<div class="col-8" id="listFormBrand" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'
        html += '</div>'
        html += '<div class="col-4">'

        html += '<div class="card shadow-none">'
        html += '<div class="card-body">'
        html += '<p class="small-text"><b>Tujuan Transaksi</b></p>'
        html += '<select class="form-select" name="state" id="tujuanTransaksi" onchange="eventButton()">'
        html += '<option value="" disabled selected>Pilih Tujuan</option>'
        dataEntry.machineTransferDestination.forEach(e => {
            html += '<optgroup label="' + e.type + '">'
            e.data.forEach(el => {
                var gudang = ''
                if (el.gudang_id) {
                    gudang = el.gudang_id
                }
                html += '<option value="' + el.id + '" data-variable="' + el.variable + '" data-gudang="' + gudang + '">' + el.name + '</option>'
            });
            html += '</optgroup>'
        });
        html += '</select>'
        html += '<p class="small-text mt-3"><b>Notes</b></p>'
        html += '<textarea class="form-control" rows="10" placeholder="Tuliskan catatan disini" id="notes"></textarea>'
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

    function listFormTransaction() {
        var html = ''
        if (itemIdSelected.length) {
            itemIdSelected.forEach(e => {
                // card
                html += '<div class="card shadow-none mb-2">'
                html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;" onclick="chooseBrand(' + e.item_id + ')"><i class="small-text fa fa-times text-light"></i></span>'
                html += '<div class="card-body  p-0">'
                html += '<div class="row p-0 m-0">'

                html += '<div class="col-1 p-3 rounded-start bg-dongker text-center">'
                html += '<div class="row d-flex align-items-center h-100">'
                html += '<div class="col text-center">'
                html += '<span class="small text-white vertical-text">' + e.alias + '</span>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '<div class="col p-3">'
                // form fill
                html += '<div class="row">'
                html += '<div class="col-12">'
                html += '<p class="m-0 small-text"><b>Hasil</b></p>'

                html += '<div class="card shadow-none" id="cardHasil' + e.item_id + '">'
                html += '<div class="card-body p-2">'

                html += '<div class="row">'
                html += '<div class="col-4">'
                html += '</div>'
                html += '<div class="col-4">'
                html += '<input type="text" id="qty" class="form-control form-control-sm nominal qty" required="required" onkeyup="fillForm(event,' + e.item_id + ')" autocomplete="off" value="' + e.qty + '" data-item="' + e.item_id + '" data-unit="' + e.unit_id + '" style="background-color:transparent;border:0px;" data-stok="' + e.stok_akhir + '">'
                html += '<hr class="m-0">'
                html += '<p class="m-0 float-end super-small-text">Sisa Stok : <b class="text-orange">' + e.stok_akhir + '</b></p>'
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
                        html += '<input type="text" id="qty" class="form-control form-control-sm nominal qty" required="required" onkeyup="fillForm(event,' + e.item_id + ',' + el.item_id + ')" autocomplete="off" value="' + el.qty + '" style="background-color:transparent;border:0px;" data-stok="' + el.stok_akhir + '" data-item="' + el.item_id + '" data-unit="' + el.unit_id + '">'
                        html += '<hr class="m-0">'
                        html += '<p class="m-0 float-end super-small-text">Sisa Stok : <b class="text-orange">' + el.stok_akhir + '</b></p>'
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
        colorizedValue(value, stok, id, material_id)
    }

    function colorizedValue(value, stok, id, material_id) {
        var data = itemIdSelected.find((v, k) => {
            if (v.item_id == id) return true
        })
        if (material_id) {
            var material = data.material_moving.find((v, k) => {
                if (v.item_id == material_id) return true
            })
            material.qty = value
        } else {
            data.qty = value
        }
        if (value) {
            if (parseFloat(value) <= parseFloat(stok)) {
                $('#cardHasil' + id + material_id).removeClass('bg-light-danger')
                $('#cardHasil' + id + material_id).addClass('bg-light-success')
            } else if (parseFloat(value) > parseFloat(stok)) {
                $('#cardHasil' + id + material_id).removeClass('bg-light-success')
                $('#cardHasil' + id + material_id).addClass('bg-light-danger')
            }
        } else {
            $('#cardHasil' + id + material_id).removeClass('bg-light-success')
            $('#cardHasil' + id + material_id).removeClass('bg-light-danger')
        }
        eventButton()
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
        if (!$('#tujuanTransaksi').val()) {
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

    function arrangeVariableInsert() {
        var qty = $(".qty").map(function() {
            return $(this).val();
        }).get();
        var itemId = $(".qty").map(function() {
            return $(this).data('item');
        }).get();
        var unit = $(".qty").map(function() {
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
            send_at: currentDateTime(),
            employee_id_sender: user_id,
            action: 'OUT',
            tag: 'TRANSFER',
            note: $('#notes').val(),
            reference_id: 123,
            work_plan_id: dataEntry.workPlanMachine.work_plan_id,
            shift_id: dataEntry.workPlanMachine.shift.id
        })
        eval('data.machineTransfer[0].' + tujuanTransaksiVariable + '=' + tujuanTransaksi)
        if (tujuanTransaksiGudang) {
            data.machineTransfer[0].gudang_id = tujuanTransaksiGudang
        }
        data.machineTransferDetail = []
        for (let i = 0; i < qty.length; i++) {
            if (qty[i]) {
                data.machineTransferDetail.push({
                    id: id + '' + i,
                    machine_transfer_id: id,
                    item_id: itemId[i],
                    unit_id: unit[i],
                    qty: qty[i]
                })
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
        $.each(stokMachineSort, function(k, v) {
            html_body += '<div class="col-4 p-3">'
            html_body += showProgressMachineStock(v)
            html_body += '</div>'
        })
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
        html += '<p class="m-0 mt-2 super-small-text text-dark">' + number_format(v.stok_akhir) + ' / ' + number_format(jumlahStok) + ' ' + v.unit_name + '</p>'
        html += '</div>'

        html += '<div class="col align-self-center">'
        html += '<h1 class="text-dark-grey m-0"><b>' + v.alias + '</b></h1>'

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
</script>