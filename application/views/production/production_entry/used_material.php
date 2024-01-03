<style type="text/css">
    .progress {
        height: 40px;
        border-radius: 0px;
    }

    .progress-bar {
        text-align: left;
        padding-left: 10px;
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

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check-input {
        transform: scale(0.6);
        margin: 0;
    }

    .form-check-label {
        font-size: 12px;
        margin-left: 5px;
    }

    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .line-with-text hr {
        flex-grow: 1;
        border: none;
        border-top: 1px solid black;
    }

    .bg-dark-grey {
        color: white;
        background-color: #61677A !important;
    }

    .lingkaran {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        float: right;
    }

    .popover.show {
        opacity: 1;
        pointer-events: auto;
    }

    .popover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    /* CSS Kustom untuk Mengatur Lebar Popover */
    .custom-popover {
        width: 200px !important;
    }

    .bg-light-danger {
        background-color: #fce7e5 !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body p-0">
                <div class="row justify-content-between p-4 pb-3">
                    <div class="col-12">
                        <div class="row justify-content-between ps-2 pe-2 pb-3" id="menuMaterial">
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Search..." id="search_nama" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;border-color:#c5ccd6;">
                <div id="templateUsedMaterial">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    function parseString(input) {
        const segments = input.split('/').map(segment => segment.trim());
        const result = [];

        for (const segment of segments) {
            const matches = segment.match(/@(\w+)/);
            if (matches) {
                result.push(matches[1]);
            }
        }

        return result;
    }

    function parseMathExpression(inputExpression) {
        const variables = {};
        const input = [];
        const data = [];

        const matches = inputExpression.match(/[@$]\w+/g);

        if (matches) {
            for (const match of matches) {
                const variable = match.substring(1); // Menghilangkan tanda @ atau $
                if (!variables[variable]) {
                    variables[variable] = true;

                    if (match.startsWith('@')) {
                        input.push(variable);
                    } else {
                        data.push(variable);
                    }
                }
            }
        }

        return {
            input,
            data
        };
    }

    function removeSymbols(inputString) {
        const resultString = inputString.replace(/[@$]/g, ''); // Menghapus semua simbol @ dan $

        return resultString;
    }

    function changeTextInput(teks) {
        // Menggunakan ekspresi reguler untuk mencari dan mengganti 'xxx_remaining' dengan bagian sebelum '_remaining'
        var hasil = teks.replace(/([a-z]+)_remaining/g, function(match, captureGroup) {
            return captureGroup.toUpperCase();
        });
        return hasil;
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var modeChart = 0
    var dataEntry
    var dataProductionOut = []
    var dataProductionOutGroup

    $(document).ready(function() {
        // loadData()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
            workPlanProductId: isRunningID
        }
        var url = "<?= api_produksi('loadPageUsedMaterialEntrySingle'); ?>"
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
                var dataMentah = deepCopy(dataEntry.materialStock)
                dataEntry.materialStock = []
                dataEntry.materialStock.push(dataMentah)
                menuMaterial()
            }
        })
    }

    function templateMaterial(status) {
        var html = ''
        html += '<div class="row small-text p-3 m-0 bg-light-grey justify-content-center">'
        html += '<div class="col-2"><i class="fa fa-clock-o me-2"></i>Time Production</div>'
        html += '<div class="col-2 fw-bolder" id="timeProduction">-</div>'
        html += '<div class="col-2"><i class="fa fa-calculator me-2"></i>Material Machine</div>'
        html += '<div class="col-1 fw-bolder"><span id="countMaterial">-</span> / <span id="totalMaterial">-</span></div>'
        html += '</div>'
        html += '<hr class="m-0">'
        html += '<div class="table-responsive" id="table-product-trend-wrapper">'
        html += '<table class="table table-hover" style="width: 100%;">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle small-text">#</th>'
        html += '<th class="align-middle small-text" colspan="2">Material</th>'
        html += '<th class="align-middle small-text">Unit</th>'
        html += '<th class="align-middle small-text">Stok Awal</th>'
        html += '<th class="align-middle small-text"><i class="fa fa-arrow-down text-success me-2"></i>In</th>'
        html += '<th class="align-middle small-text"><i class="fa fa-arrow-up text-danger me-2"></i>Out</th>'
        html += '<th class="align-middle small-text">Pemakaian<br>Kotor</th>'
        html += '<th class="align-middle small-text">Stok Akhir</th>'
        html += '<th class="align-middle small-text"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="listMaterial">'
        html += '</tbody>'
        html += '</table>'
        html += '</div>'
        $('#templateUsedMaterial').html(html)
        draggableTables('table-product-trend-wrapper')
        listMaterial(status)
        timeProduction(status)
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function reset() {
        dataProductionOut = []
        dataProductionOutGroup = []
    }
    var countCard = 0

    function getDataMaterial(id, work_plan_product_id) {
        var data = dataEntry.materialStock.find((v, k) => {
            if (v.work_plan_product_id == work_plan_product_id) return true
        })
        var material = data.material.find((v, k) => {
            if (v.item.id == id) return true
        })
        // if (!material) {
        //     material = data.material_other.find((v, k) => {
        //         if (v.item.id == id) return true
        //     })
        // }
        return material
    }

    function inputSO(id, work_plan_product_id) {
        countCard = 0
        var material = getDataMaterial(id, work_plan_product_id)
        // console.log(material)
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">' + material.item.name + '</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += ''
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<div id="listAdditional">'
        html_body += '</div>'

        // add
        if (material.fraction_formula) {
            html_body += '<div class="card shadow-none mb-2 pointer" style="border: 2px dashed #d6d6d6;" onclick="listAdditional(1,' + id + ',' + "'" + work_plan_product_id + "'" + ')">'
            html_body += '<div class="card-body text-center">'
            html_body += '<div class="row">'
            html_body += '<div class="col-12 align-self-center">'
            html_body += '<p class="m-0 small-text"><i class="fa fa-plus"></i></p>'
            html_body += '<p class="m-0 small-text">Tambah Input Stok Lainnya</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        // add

        html_body += '</div>'
        if (material.used_material) {
            html_body += '<div class="col-12 text-end">'
            html_body += '<p class="m-0 small-text badge bg-danger pointer" onclick="removeAllMaterial(' + "'" + material.used_material.id + "'" + ',' + "'" + material.item.name + "'" + ')">Batalkan Input Stok Akhir Material ini ?</p>'
            html_body += '</div>'
        }
        html_body += '</div>'
        $('#modalBody').html(html_body)
        var html_footer = '';
        html_footer += '<div class="row w-100">'
        html_footer += '<div class="col">'

        html_footer += '<div class="row small-text">'
        html_footer += '<div class="col-4"><b>Vol. Pemakaian</b></div>'
        html_footer += '<div class="col-auto"><b>:</b></div>'
        html_footer += '<div class="col-3 text-end"><span id="volUsed">0</span></div>'
        html_footer += '<div class="col-3">' + material.unit.name + '</div>'
        html_footer += '</div>'
        html_footer += '<div class="row small-text">'
        html_footer += '<div class="col-4"><b>Stok Akhir</b></div>'
        html_footer += '<div class="col-auto"><b>:</b></div>'
        html_footer += '<div class="col-3 text-end"><span id="grandTotal">0</span></div>'
        html_footer += '<div class="col-3">' + material.unit.name + '</div>'
        html_footer += '</div>'

        // html_footer += '<p class="m-0 small"><b>Stok Akhir : </b><span id="grandTotal">0</span> ' + material.unit.name + '</p>'
        html_footer += '</div>'
        html_footer += '<div class="col text-end align-self-end">'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm me-2" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="simpanData()">Simpan</button>'
        html_footer += '</div>'
        html_footer += '</div>'
        $('#modalFooter').html(html_footer)
        $('.nominal').number(true, 2);
        listAdditional(0, id, work_plan_product_id, material.used_material)
        if (material.used_material_remaining) {
            // jika ada data used_material nya
            material.used_material_remaining.forEach(e => {
                listAdditional(1, id, work_plan_product_id, e)
            });
        }
    }

    function listAdditional(jenis, id, work_plan_product_id, used_material = null) {
        // console.log(used_material)
        var idUsed = ''
        if (used_material) {
            idUsed = used_material.id
        }
        var material = getDataMaterial(id, work_plan_product_id)
        var nameInput = []
        var unitInput = []
        var jenisInput = 'pecahan'
        if (jenis) {
            // jika oecahan
            var getFormula = parseMathExpression(material.fraction_formula.formula)
            nameInput = parseString(material.fraction_formula.formula)
            for (let i = 0; i < nameInput.length; i++) {
                unitInput.push('cm')
            }
            var text = ''
            text += '<div class="row">'
            text += '<div class="col-auto">'
            text += '<p class="m-0 small-text"><b>'
            text += material.fraction_formula.name + ' '
            text += '</b></p>'
            text += '</div>'
            text += '<div class="col-auto">'
            text += '<div class="lingkaran bg-dark-grey" id="hoverQuestion' + countCard + '" data-bs-toggle="popover"><i class="fa fa-question small-text"></i></div>'
            text += '</div>'
            text += '</div>'
        } else {
            // jika utuh
            nameInput.push('')
            unitInput.push(material.unit.name)
            var text = '<p class="m-0 small-text"><b>' + material.unit.name + '</b></p>'
            jenisInput = 'utuh'
        }
        var html = ''
        // card
        var variableRows = '' + countCard + '' + work_plan_product_id + '' + id + ''
        html += '<div class="card shadow-none mb-2 cardStokAkhir" id="cardMaterial' + variableRows + '" data-variable="' + variableRows + '" data-id="' + id + '" data-work_plan_product_id="' + work_plan_product_id + '" data-id_used="' + idUsed + '" data-jenis="' + jenis + '">'
        if (jenis) {
            // jika pecahan
            html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;" onclick="removeMaterial(' + "'" + variableRows + "'," + "'" + idUsed + "'" + ')"><i class="small-text fa fa-times text-light"></i></span>'
        }
        html += '<div class="card-body">'

        html += '<div class="row w-100">'
        html += '<div class="col-2 align-self-center">'
        // text
        html += text
        // text
        html += '</div>'
        html += '<div class="col-9 align-self-center border-start">'
        // form
        for (let i = 0; i < nameInput.length; i++) {
            var value = ''
            var idUsed = ''
            if (used_material) {
                idUsed = used_material.id
                if (used_material.qty_remaining) {
                    value = used_material.qty_remaining
                } else {
                    eval(`var value = used_material.${nameInput[i]}`)
                }
            }
            html += '<div class="row g-3 align-items-center justify-content-center small-text w-100">'
            html += '<div class="col-3">'
            html += '<label for="input' + variableRows + '" class="col-form-label">' + changeTextInput(nameInput[i]) + '</label>'
            html += '</div>'
            html += '<div class="col-4">'
            html += '<input type="text" id="input' + i + countCard + work_plan_product_id + '' + id + '" class="form-control nominal input' + variableRows + ' ' + jenisInput + '" aria-describedby="passwordHelpInline" autocomplete="off" oninput="createFormula(event,' + "'" + nameInput[i] + "'" + ',' + i + ',' + countCard + ',' + "'" + work_plan_product_id + "'" + ',' + id + ')" data-variable="' + nameInput[i] + '" data-jenis="' + jenis + '" data-id="' + "'" + idUsed + "'" + '" value="' + value + '">'
            html += '</div>'
            html += '<div class="col-3">'
            html += '<span id="passwordHelpInline" class="form-text">' + unitInput[i] + '</span>'
            html += '</div>'
            html += '</div>'
        }
        if (jenis) {
            // jika pecahan
            html += '<div class="row pt-2 align-items-center justify-content-center small-text w-100">'
            html += '<div class="col-7 text-end">'
            html += '</div>'
            html += '<div class="col-3">'
            html += '</div>'
            html += '</div>'

            html += '<div class="row pt-0 align-items-center justify-content-center small-text w-100">'
            html += '<div class="col-3">'
            html += '<label class="col-form-label">Sisa ' + material.unit.name + '</label>'
            html += '</div>'
            html += '<div class="col-4 text-end">'
            html += '<b id="panjangSisa' + variableRows + '">0</b>'
            html += '</div>'
            html += '<div class="col-3">'
            html += '<span class="form-text">' + material.unit.name + '</span>'
            html += '</div>'
            html += '</div>'
        }
        // form
        html += '</div>'
        html += '<div class="col-1 align-self-center pointer text-end">'
        html += '<span class="fa fa-check text-grey fa-2x" id="checkMaterial' + countCard + '' + work_plan_product_id + '' + id + '"></span>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#listAdditional').append(html)
        // $('.nominal').number(true);
        if (jenis) {
            var kontenPopover = ''
            getFormula.data.forEach(e => {
                for (const key in material.unit_fraction) {
                    if (e == key) {
                        kontenPopover += '<div class="row align-items-center justify-content-center super-small-text w-100">'
                        kontenPopover += '<div class="col">'
                        kontenPopover += '<b>' + key.toLocaleUpperCase() + '</b>'
                        kontenPopover += '</div>'
                        if (material.unit_fraction[key]) {
                            kontenPopover += '<div class="col text-end">'
                            kontenPopover += '<b>' + material.unit_fraction[key] + '</b>'
                            kontenPopover += '</div>'
                            kontenPopover += '<div class="col-auto">'
                            kontenPopover += '<span class="form-text">cm</span>'
                            kontenPopover += '</div>'
                            kontenPopover += '</div>'
                        } else {
                            kontenPopover += '<div class="col text-end">'
                            kontenPopover += '<b class="m-0 text-danger" style="font-size:5px !important;">*) Standard Ukuran Material belum ditentukan</b>'
                            kontenPopover += '</div>'
                            kontenPopover += '</div>'

                        }
                    }
                }
            });
            var popoverTriggerEl = document.querySelector('#hoverQuestion' + countCard);
            var popover = new bootstrap.Popover(popoverTriggerEl, {
                placement: 'bottom', // Menentukan posisi popover
                trigger: 'hover click', // Menentukan trigger popover (dalam contoh ini, hover)
                html: true,
                content: kontenPopover,
                customClass: 'custom-popover',
            });
            // var options = {
            //     placement: 'bottom',
            //     trigger: 'hover',
            //     html: true,
            //     content: 'test'
            // }
            // var exampleEl = document.getElementById('#hoverQuestion' + countCard)
            // var popover = new bootstrap.Popover(exampleEl, options)
        }
        $('.utuh').on('keypress', handleNumericInput);
        $('.pecahan').on('keypress', handleFractionInput);
        // card
        countCard++
        akumulasiFormula()
    }

    function handleFractionInput(event) {
        var allowChars = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 37, 39, 46, 44];
        if (allowChars.indexOf(event.which) === -1) {
            event.preventDefault();
        }

        var inputValue = $(this).val();
        // Mengganti koma dengan titik
        inputValue = inputValue.replace(/,/, '.');

        // Memeriksa apakah sudah ada titik atau koma dalam nilai input
        if ((event.which === 46 || event.which === 44) && inputValue.indexOf('.') !== -1) {
            event.preventDefault();
        }

        $(this).val(inputValue.replace(/[^\d.]/g, ''));
    }

    function handleNumericInput(event) {
        var allowChars = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 37, 39];
        if (allowChars.indexOf(event.which) === -1) {
            event.preventDefault();
        }

        var inputValue = $(this).val();
        $(this).val(inputValue.replace(/[^\d]/g, ''));
    }

    var removedId = {
        usedMaterial: [],
        usedMaterialRemaining: []
    }


    function removeMaterial(id, id_used) {
        if (id_used) {
            removedId.usedMaterialRemaining.push(id_used)
        }
        $('#cardMaterial' + id).remove()
        akumulasiFormula()
    }

    function removeAllMaterial(id, name) {
        Swal.fire({
            text: 'Apakah anda yakin ingin membatalkan Input Stok Akhir untuk Material ' + name + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                var data = {
                    deletedId: {
                        usedMaterial: []
                    }
                }
                data.deletedId.usedMaterial.push(id)
                var type = 'POST'
                var button = '#btnSimpan'
                var url = '<?php echo api_produksi('setUsedMaterial'); ?>'
                kelolaData(data, type, url, button)
            }
        })
    }

    function menuMaterial() {
        var html = ''
        html += '<div class="row">'
        var a = 0
        var id
        dataEntry.materialStock.forEach(e => {
            if (a == 0) {
                id = e.work_plan_product_id
            }
            html += '<div class="col-auto statusLine small-text pb-2 align-self-center text-grey" style="cursor:pointer" onclick="statusLine(' + "'" + e.work_plan_product_id + "'" + ')" id="colStatusLine' + e.work_plan_product_id + '"><b>' + e.product.alias + '</b> Batch ' + e.priority + '<span class="ms-2 fa fa-check text-grey"></span></div>'
            a++
        })
        html += '</div>'
        $('#menuMaterial').html(html)
        statusLine(id)
    }

    function statusLine(status) {
        var data = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.work_plan_product_id == status) return true
        })
        if (data.time_start) {
            templateMaterial(status)
            coloringStatusLine(status)
        } else {
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Not Available',
            //     text: 'Waktu Produksi belum tersedia'
            // });
            empty('#templateUsedMaterial', 'Waktu Production Out Belum Tersedia')
        }
    }

    function timeProduction(status) {
        var data = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.work_plan_product_id == status) return true
        })
        $('#timeProduction').html(convertTimeFormat2(data.time_start) + ' - ' + convertTimeFormat2(data.time_end))
    }

    function coloringStatusLine(status) {
        // DEFAULT COLOR
        $('.statusLine').each(function() {
            if ($(this).hasClass('fw-bold') && $(this).hasClass('filter-border')) {
                $(this).removeClass('fw-bold filter-border').addClass('text-grey');
            }
        });
        $('.statusLineIcon').each(function() {
            if ($(this).hasClass('bg-light-maroon') && $(this).hasClass('text-white')) {
                $(this).removeClass('bg-light-maroon text-white').addClass('bg-light text-grey');
            }
        });
        $('#colStatusLine' + status).removeClass('text-grey').addClass('fw-bold filter-border')
        $('#statusLineIcon' + status).removeClass('bg-light text-grey').addClass('bg-light-maroon text-white')
    }

    function listMaterial(status) {
        var html = ''
        var data = dataEntry.materialStock.find((v, k) => {
            if (v.work_plan_product_id == status) return true
        })
        var no = 1
        var count = 0
        // MATERIAL
        $('#totalMaterial').html(data.material.length)
        // $('#totalMaterialAll').html(data.material.length + data.material_other.length)
        $.each(data.material, function(key, value) {
            var tr_class = 'fw-bolder bg-light'
            if (value.gross_usage > 0) {
                tr_class = 'fw-bolder bg-light-success'
                count++
            }
            if (value.stok_akhir < 0) {
                tr_class = 'fw-bolder bg-light-danger'
            }
            html += formListMaterial(no, status, value, tr_class, '<i class="fa fa-star text-primary"></i>')
            no++
        });
        $('#countMaterial').html(count)

        // // MATERIAL OTHER
        // $.each(data.material_other, function(key, value) {
        //     var tr_class = ''
        //     if (value.gross_usage > 0) {
        //         tr_class = 'bg-light-success'
        //         count++
        //     }
        //     if (value.stok_akhir < 0) {
        //         tr_class = 'bg-light-danger'
        //     }
        //     html += formListMaterial(no, status, value, tr_class, '<i class="fa fa-star-o text-grey"></i>')
        //     no++
        // });
        // $('#countMaterialAll').html(count)
        $('#listMaterial').html(html)
    }

    function formListMaterial(no, work_plan_product_id, data, tr_class, star) {
        var html = ''
        html += '<tr class="' + tr_class + '" id="card_search' + no + '">'
        html += '<td class="align-middle small-text text-center">' + no + '</td>'
        html += '<td class="align-middle small-text text-center">'
        html += star
        html += '</td>'
        html += '<td class="align-middle small-text">'
        html += '<p class="m-0 super-small-text fw-light">' + data.item.code + '</p>'
        html += '<span class="text_search" data-id="' + no + '">' + data.item.name + '</span>'
        html += '</td>'
        html += '<td class="align-middle small-text text-center text-nowrap">' + data.unit.name + '</td>'
        html += '<td class="align-middle small-text text-center">' + number_format(data.stok_awal) + '</td>'
        html += '<td class="align-middle small-text text-center">' + number_format(data.in) + '</td>'
        html += '<td class="align-middle small-text text-center">' + number_format(data.out) + '</td>'
        html += '<td class="align-middle small text-center">'
        if (data.gross_usage) {
            if (data.gross_usage > 0) {
                html += '<span class="badge bg-success">' + number_format(roundToTwo(data.gross_usage)) + '</span>'
            } else {
                html += '<span class="badge bg-danger">' + number_format(roundToTwo(data.gross_usage)) + '</span>'
            }
        }
        html += '</td>'
        html += '<td class="align-middle small-text text-center">' + number_format(roundToTwo(data.stok_akhir)) + '</td>'
        html += '<td class="align-middle small-text text-center"><button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="inputSO(' + data.item.id + ',' + "'" + work_plan_product_id + "'" + ')"><i class="fa fa-pencil"></i></button></td>'
        html += '</tr>'
        return html
    }

    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching() {
        var value = $('#search_nama').val().toLowerCase();
        var cards = $('.text_search').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search' + array_arranged[i]).removeClass('d-none')
        }
    }

    function createFormula(event, nameInput, i, countCard, work_plan_product_id, id) {
        var material = getDataMaterial(id, work_plan_product_id)
        var valueInput = $('.input' + countCard + work_plan_product_id + id).map(function() {
            return parseFloat(ubahTandaKoma($(this).val()));
        }).get();
        var variable = $('.input' + countCard + work_plan_product_id + id).map(function() {
            return $(this).data('variable');
        }).get();
        var jenis = $('.input' + countCard + work_plan_product_id + id).map(function() {
            return $(this).data('jenis');
        }).get();
        // var idInput = $('.input' + countCard + work_plan_product_id + id).map(function() {
        //     return $(this).data('id');
        // }).get();
        // input data
        // if (jenis[0]) {
        //     var disabled = 0
        //     var getFormula = removeSymbols(material.fraction_formula.formula)
        //     for (let i = 0; i < variable.length; i++) {
        //         eval(`var ${variable[i]} = ${valueInput[i]}`)
        //         if (!valueInput[i]) {
        //             disabled = 1
        //         }
        //     }
        //     // get data
        //     for (const key in material.unit_fraction) {
        //         if (material.unit_fraction[key] !== null) {
        //             eval(`var ${key} = ${material.unit_fraction[key]}`);
        //         }
        //     }
        //     var total = eval(getFormula)
        //     $('#panjangSisa' + countCard + '' + work_plan_product_id + '' + id).html(roundToTwo(total))
        //     if (!disabled) {
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).removeClass('text-grey')
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).addClass('text-success')
        //     } else {
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).addClass('text-grey')
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).removeClass('text-success')
        //     }
        // } else {
        //     console.log(valueInput[0])
        //     if (valueInput[0]) {
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).removeClass('text-grey')
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).addClass('text-success')
        //     } else {
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).addClass('text-grey')
        //         $('#checkMaterial' + countCard + '' + work_plan_product_id + '' + id).removeClass('text-success')

        //     }
        // }
        akumulasiFormula()
    }

    function akumulasiFormula() {
        clearVariableInsert()
        var qtyUtuh = 0
        var qtyPecahan = []
        var qtyPecahanRounded = []
        var disabled = 1
        var grandTotal = 0
        var variableCard = $('.cardStokAkhir').map(function() {
            return $(this).data('variable');
        }).get();
        var jumlahForm = $('.cardStokAkhir').map(function() {
            return $(this).data('jumlahForm');
        }).get();
        var id = $('.cardStokAkhir').map(function() {
            return $(this).data('id');
        }).get();
        var work_plan_product_id = $('.cardStokAkhir').map(function() {
            return $(this).data('work_plan_product_id');
        }).get();
        var id_used = $('.cardStokAkhir').map(function() {
            return $(this).data('id_used');
        }).get();
        for (let i = 0; i < variableCard.length; i++) {
            var material = getDataMaterial(id[i], work_plan_product_id[i])
            // console.log(material)
            var valueInput = $('.input' + variableCard[i]).map(function() {
                return parseFloat(ubahTandaKoma($(this).val()));
            }).get();
            var variable = $('.input' + variableCard[i]).map(function() {
                return $(this).data('variable');
            }).get();
            var jenis = $('.input' + variableCard[i]).map(function() {
                return $(this).data('jenis');
            }).get();
            var value = event.target.value
            var total = 0
            if (jenis[0]) {
                console.log(material.fraction_formula.formula)
                var getFormula = removeSymbols(material.fraction_formula.formula)
                // input data
                var unfilled = 0
                for (let j = 0; j < variable.length; j++) {
                    if (!valueInput[j]) {
                        valueInput[j] = 0
                    }
                    eval(`var ${variable[j]} = ${valueInput[j]}`)
                    if (!valueInput[j]) {
                        unfilled = 1
                    }
                }
                if (!unfilled) {
                    // console.log(variable[j])
                    $('#checkMaterial' + variableCard[i]).removeClass('text-grey')
                    $('#checkMaterial' + variableCard[i]).addClass('text-success')
                } else {
                    $('#checkMaterial' + variableCard[i]).addClass('text-grey')
                    $('#checkMaterial' + variableCard[i]).removeClass('text-success')
                }
                // get data
                for (const key in material.unit_fraction) {
                    if (material.unit_fraction[key] != null) {
                        eval(`var ${key} = ${material.unit_fraction[key]}`);
                    }
                }
                var totalPerhitungan = parseFloat(eval(getFormula))
                $('#panjangSisa' + variableCard[i]).html(roundToTwo(totalPerhitungan))
                total = totalPerhitungan
                qtyPecahan.push(total)
                qtyPecahanRounded.push(Math.ceil(total))
            } else {
                if (!valueInput[0]) {
                    valueInput[0] = 0
                }
                total = parseFloat(valueInput[0])
                qtyUtuh = total
                qtyPecahan.push(0)
                qtyPecahanRounded.push(0)
                if (valueInput[0]) {
                    $('#checkMaterial' + variableCard[0]).removeClass('text-grey')
                    $('#checkMaterial' + variableCard[0]).addClass('text-success')
                } else {
                    $('#checkMaterial' + variableCard[0]).addClass('text-grey')
                    $('#checkMaterial' + variableCard[0]).removeClass('text-success')
                }
            }
            grandTotal = parseFloat(grandTotal) + parseFloat(total)
        }
        if (disabled) {
            $('#btnSimpan').removeAttr('disabled', true)
        } else {
            $('#btnSimpan').attr('disabled', true)
        }
        $('#grandTotal').html(roundToTwo(grandTotal))
        volumePenggunaan(grandTotal, id[0], work_plan_product_id[0], qtyUtuh, qtyPecahan, qtyPecahanRounded)
    }

    function volumePenggunaan(grandTotal, id, work_plan_product_id, qtyUtuh, qtyPecahan, qtyPecahanRounded) {
        var material = getDataMaterial(id, work_plan_product_id)
        var dataIn = (parseFloat(material.in) + parseFloat(material.stok_awal))
        var dataOut = parseFloat(material.out)
        var pemakaian = -(grandTotal) + dataIn - dataOut
        $('#volUsed').html(roundToTwo(pemakaian))
        arrangeUsedMaterial(id, work_plan_product_id, material, qtyUtuh, qtyPecahan, qtyPecahanRounded)
    }

    function clearVariableInsert() {
        dataInsert = {
            usedMaterial: [],
            usedMaterialRemaining: [],
            deletedId: {}
        }
        return true
    }

    function ubahTandaKoma(input) {
        // Mengecek apakah input mengandung tanda koma
        if (input.includes(',')) {
            // Mengganti tanda koma dengan titik
            input = input.replace(',', '.');
        }
        return input;
    }

    function arrangeUsedMaterial(material_id, work_plan_product_id, material, qtyUtuh, qtyPecahan, qtyPecahanRounded) {
        dataInsert.usedMaterial = []
        var data = dataEntry.materialStock.find((v, k) => {
            if (v.work_plan_product_id == work_plan_product_id) return true
        })
        var variableCard = $('.cardStokAkhir').map(function() {
            return $(this).data('variable');
        }).get();
        var jenisCard = $('.cardStokAkhir').map(function() {
            return $(this).data('jenis');
        }).get();
        var id_used = $('.cardStokAkhir').map(function() {
            return $(this).data('id_used');
        }).get();
        if (id_used[0]) {
            var id = id_used[0]
        } else {
            var id = new Date().getTime()
        }
        var indexPecahan = 0
        for (let i = 0; i < variableCard.length; i++) {
            var stokInput = $('.input' + variableCard[i]).map(function() {
                return parseFloat(ubahTandaKoma($(this).val()));
            }).get();
            // console.log(stokInput)
            var variableInput = $('.input' + variableCard[i]).map(function() {
                return $(this).data('variable');
            }).get();
            var jenisInput = $('.input' + variableCard[i]).map(function() {
                return $(this).data('jenis');
            }).get();
            if (jenisInput[0]) {
                // jika pecahan
                dataInsert.usedMaterialRemaining.push({
                    // id: id + '' + i,
                    used_material_id: id,
                    datetime: dataEntry.workPlanMachine.date + ' ' + data.time_end,
                    item_id_material: material_id,
                    qty: qtyPecahan[i],
                })
                if (id_used[i]) {
                    dataInsert.usedMaterialRemaining[indexPecahan].id = id_used[i]
                } else {
                    dataInsert.usedMaterialRemaining[indexPecahan].id = id + '' + i
                }
                for (let j = 0; j < variableInput.length; j++) {
                    if (!stokInput[j]) {
                        stokInput[j] = 0
                    }
                    eval(`dataInsert.usedMaterialRemaining[${indexPecahan}].${variableInput[j]} = ${stokInput[j]}`)
                }
                for (const key in material.unit_fraction) {
                    if (material.unit_fraction[key] !== null) {
                        eval(`dataInsert.usedMaterialRemaining[${indexPecahan}].${key} = ${material.unit_fraction[key]}`);
                    }
                }
                indexPecahan++
            }
        }
        var totalQtyPecahan = qtyPecahan.reduce(function(total, nilai) {
            return total + parseFloat(nilai);
        }, 0);
        var totalQtyPecahanRounded = qtyPecahanRounded.reduce(function(total, nilai) {
            return total + parseFloat(nilai);
        }, 0);
        var qty = (parseFloat(material.stok_awal) + parseFloat(material.in)) - qtyUtuh - totalQtyPecahanRounded
        var qty_fraction = totalQtyPecahanRounded - totalQtyPecahan
        var qty_remaining = qtyUtuh
        var qty_remaining_fraction = totalQtyPecahan
        dataInsert.usedMaterial.push({
            id: id,
            work_plan_id: dataEntry.workPlanMachine.work_plan_id,
            work_plan_product_id: work_plan_product_id,
            shift_id: dataEntry.workPlanMachine.shift_id,
            machine_id: dataEntry.workPlanMachine.machine.id,
            employee_id: user_id,
            item_id_product: data.item_id_product,
            datetime: dataEntry.workPlanMachine.date + ' ' + data.time_end,
            item_id_material: material_id,
            unit_id: material.unit.id,
            qty: qty,
            qty_fraction: qty_fraction,
            qty_remaining: qty_remaining,
            qty_remaining_fraction: qty_remaining_fraction,
            note: '',
        })
        dataInsert.deletedId = removedId
        // console.log(dataInsert)
    }

    function simpanData() {
        var data = dataInsert
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setUsedMaterial'); ?>'
        // console.log(data)
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
</script>