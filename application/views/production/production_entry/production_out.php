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
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row justify-content-between pb-3">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Hasil Produksi</b></p>
                    </div>
                    <div class="col-auto text-end">
                    </div>
                </div>
                <div id="listProgressHasil">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 pt-2">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="m-0 super-small-text"><b>Production Detail</b></p>
                    </div>
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-outline-dark shadow-none" onclick="formProductionOut()"><i class="fa fa-plus me-2"></i>Add New</button>
                        <button type="button" class="btn btn-sm btn-outline-dark shadow-none" id="btnModeChart" onclick="changeModeChart(1)"><i class="fa fa-table me-2"></i>Mode Chart</button>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-12" id="productionDetail">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function addOneHour(inputTime) {
        var timeArray = inputTime.split(":");
        var hours = parseInt(timeArray[0]);
        var minutes = parseInt(timeArray[1]);
        hours += 1;
        if (hours > 23) {
            hours = 0;
        }
        var newTime = (hours < 10 ? "0" : "") + hours + ":" + (minutes < 10 ? "0" : "") + minutes;
        return newTime;
    }

    function extractHour(timeString) {
        var parts = timeString.split(":");
        return parts[0];
    }

    // function findMissingHours(shiftStart, shiftEnd, dataList) {
    //     var missingHours = [];

    //     for (var i = parseInt(shiftStart) + 1; i < parseInt(shiftEnd); i++) {
    //         var hour = i.toString().padStart(2, "0");
    //         var found = false;
    //         for (var j = 0; j < dataList.length; j++) {
    //             if (dataList[j].start === hour) {
    //                 found = true;
    //                 break;
    //             }
    //         }

    //         if (!found) {
    //             missingHours.push(hour);
    //         }
    //     }

    //     return missingHours;
    // }
    function findMissingHours(shiftStart, shiftEnd, dataList) {
        var missingHours = [];

        var startHour = parseInt(shiftStart);
        var endHour = parseInt(shiftEnd);

        // Jika dataList kosong, tambahkan jam yang sesuai dengan shiftStart
        if (!dataList.length) {
            missingHours.push(shiftStart);
        } else {
            // Mengatasi lintas hari
            if (startHour > endHour) {
                for (var i = startHour + 1; i < 24; i++) {
                    var hour = i.toString().padStart(2, "0");
                    var found = false;
                    for (var j = 0; j < dataList.length; j++) {
                        if (dataList[j].start === hour) {
                            found = true;
                            break;
                        }
                    }

                    if (!found) {
                        missingHours.push(hour);
                    }
                }

                for (var i = 0; i < endHour; i++) {
                    var hour = i.toString().padStart(2, "0");
                    var found = false;
                    for (var j = 0; j < dataList.length; j++) {
                        if (dataList[j].start === hour) {
                            found = true;
                            break;
                        }
                    }

                    if (!found) {
                        missingHours.push(hour);
                    }
                }
            } else {
                for (var i = startHour + 1; i < endHour; i++) {
                    var hour = i.toString().padStart(2, "0");
                    var found = false;
                    for (var j = 0; j < dataList.length; j++) {
                        if (dataList[j].start === hour) {
                            found = true;
                            break;
                        }
                    }

                    if (!found) {
                        missingHours.push(hour);
                    }
                }
            }

        }

        return missingHours;
    }

    function convertToPerHour(input) {
        const result = [];

        input.forEach(item => {
            const startTime = parseInt(item.start);
            const endTime = parseInt(item.end);

            if (endTime >= startTime) {
                for (let i = startTime; i < endTime; i++) {
                    const startHour = String(i).padStart(2, '0');
                    const endHour = String(i + 1).padStart(2, '0');

                    result.push({
                        start: startHour,
                        end: endHour
                    });
                }
            } else {
                // Handle the case where the end time is earlier than the start time
                for (let i = startTime; i < 24; i++) {
                    const startHour = String(i).padStart(2, '0');
                    const endHour = String(i + 1).padStart(2, '0');

                    result.push({
                        start: startHour,
                        end: endHour
                    });
                }

                for (let i = 0; i < endTime; i++) {
                    const startHour = String(i).padStart(2, '0');
                    const endHour = String(i + 1).padStart(2, '0');

                    result.push({
                        start: startHour,
                        end: endHour
                    });
                }
            }
        });

        return result;
    }

    function convertDataToListTime(inputData) {
        var transformedData = [];

        for (var i = 0; i < inputData.length; i++) {
            if (inputData[i].time_start) {
                var startHour = extractHour(inputData[i].time_start);
                var endHour = extractHour(inputData[i].time_end);

                transformedData.push({
                    "start": startHour,
                    "end": endHour
                });
            }
        }

        return transformedData;
    }

    function convertDataToListTime2(inputData) {
        var transformedData = [];

        for (var i = 0; i < inputData.length; i++) {
            var startHour = extractHour(inputData[i].time.start);
            var endHour = extractHour(inputData[i].time.end);

            transformedData.push({
                "start": startHour,
                "end": endHour
            });
        }

        return transformedData;
    }

    function sortByStartTime(data) {
        return data.sort(function(a, b) {
            return a.time.start.localeCompare(b.time.start);
        });
    }

    function generateTimeSlots(startTime, endTime) {
        var timeSlots = [];
        var startHour = new Date('2000-01-01T' + startTime).getTime();
        var endHour = new Date('2000-01-01T' + endTime).getTime();
        var hourDiff = (endHour - startHour) / 3600000;

        for (var i = 0; i < hourDiff; i++) {
            var currentStart = new Date(startHour + (i * 3600000));
            var currentEnd = new Date(currentStart.getTime() + 3600000);

            timeSlots.push({
                'jamke': i + 1,
                'start': convertTimeFormat(currentStart.toTimeString().slice(0, 8)),
                'end': convertTimeFormat(currentEnd.toTimeString().slice(0, 8))
            });
        }

        return timeSlots;
    }

    function convertFromTimeSlotsToQTY(inputData, timeSlots) {
        var outputData = timeSlots.map(function(slot) {
            var matchingData = inputData.find(function(item) {
                var itemStartTime = item.time.start.slice(0, 5);
                var itemEndTime = item.time.end.slice(0, 5);
                return convertTimeFormat(itemStartTime) == slot.start && convertTimeFormat(itemEndTime) == slot.end;
            });

            return {
                "jamke": slot.jamke,
                "start": slot.start,
                "end": slot.end,
                "qty": matchingData ? matchingData.qty : 0
            };
        });

        return outputData;
    }

    function extractQty(data) {
        return data.map(function(item) {
            return item.qty;
        });
    }

    function extractJamke(data) {
        return data.map(function(item) {
            return item.jamke;
        });
    }

    function checkTimeStart(inputTime, dataArray) {
        const inputHour = inputTime.split(':')[0];

        for (const range of dataArray) {
            const startHour = range.start;
            const endHour = range.end;

            if (inputHour >= startHour && inputHour < endHour) {
                return 0; // Jam input berada dalam rentang waktu yang diberikan
            }
        }

        return 1; // Jam input tidak termasuk dalam rentang waktu yang diberikan
    }

    function checkTimeEnd(inputJam, data) {
        for (let i = 0; i < data.length; i++) {
            const startTime = parseInt(data[i].start);
            const endTime = parseInt(data[i].end);
            const inputTime = parseInt(inputJam);

            if (inputTime == startTime) {
                return 1;
            } else if (inputTime > startTime && inputTime < endTime) {
                return 0;
            } else if (inputTime == endTime) {
                return 0;
            }
        }
        return 1;
    }

    function conversiToTarget(input, multiplier, satuanBesar, satuanKecil) {
        const trays = Math.floor(input / multiplier);
        const remainingStik = input % multiplier;

        var nilai = ''
        if (remainingStik) {
            nilai = trays + ' ' + satuanBesar + ' ' + remainingStik + ' ' + satuanKecil
        } else {
            nilai = trays + ' ' + satuanBesar
        }
        return nilai
    }

    function cekJadwal(input_work_plan_product_id, input_jam_start, input_jam_end, data) {
        const matchingData = data.find(item => item.work_plan_product_id === input_work_plan_product_id);

        if (!matchingData) {
            return {
                product: '',
                return: 0
            }
        } else {
            // console.log(data)
            // const overlappingItems = data.find(item =>
            //     item.work_plan_product_id != input_work_plan_product_id &&
            //     item.time_start < input_jam_start + ':00' &&
            //     item.time_end > input_jam_start + ':00'
            // );

            const overlappingItems = data.find(item =>
                item.work_plan_product_id != input_work_plan_product_id &&
                findDateFromTime(convertTimeFormat(item.time_start), dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end) < findDateFromTime(input_jam_start, dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end) &&
                findDateFromTime(convertTimeFormat(item.time_end), dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end) > findDateFromTime(input_jam_start, dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end)
            );

            if (overlappingItems) {
                return {
                    product: overlappingItems,
                    return: 1
                }
            } else {
                return {
                    product: '',
                    return: 0
                }
            }
        }
    }

    function findDateFromTime(inputTime, datetimeStart, datetimeEnd) {
        const inputHourMinute = inputTime.split(":");
        const inputHour = parseInt(inputHourMinute[0]);
        const inputMinute = parseInt(inputHourMinute[1]);

        const startDateTime = new Date(datetimeStart);
        const endDateTime = new Date(datetimeEnd);

        const startDate = startDateTime.getDate();
        const endDate = endDateTime.getDate();

        if (inputHour >= startDateTime.getHours() && inputHour <= 23) {
            return `${startDateTime.getFullYear()}-${(startDateTime.getMonth() + 1)
      .toString()
      .padStart(2, "0")}-${startDate.toString().padStart(2, "0")}`;
        } else if (inputHour >= 0 && inputHour <= endDateTime.getHours()) {
            return `${endDateTime.getFullYear()}-${(endDateTime.getMonth() + 1)
      .toString()
      .padStart(2, "0")}-${endDate.toString().padStart(2, "0")}`;
        } else {
            return "";
        }
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
    var modeChart = 0
    var dataEntry
    var dataProductionOut = []
    var dataProductionOutGroup

    $(document).ready(function() {
        loadData()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
        }
        var url = "<?= api_produksi('loadPageProductionOutEntry'); ?>"
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
                arrangeVariable()
            }
        })
    }

    function reset() {
        dataProductionOut = []
        dataProductionOutGroup = []
    }

    function arrangeVariable() {
        reset()
        dataEntry.productionOutItem.forEach(e => {
            dataProductionOut.push({
                result_product_id: e.result_product_id,
                item_id: e.item.id,
                item_name: e.item.name,
                item_code: e.item.code,
                item_alias: e.item.alias,
                qty: e.qty,
                priority: e.priority,
                work_plan_product_id: e.work_plan_product_id,
            })
        });
        dataProductionOutGroup = groupAndSum(dataProductionOut, ['item_id', 'priority', 'work_plan_product_id'], ['qty'])
        listProgressHasil()
    }

    function listProgressHasil() {
        var html = ''
        dataEntry.workPlanMachine.products.forEach(e => {
            var dataGroup = dataProductionOutGroup.find((v, k) => {
                if (v.item_id == e.product.id && v.priority == e.priority) return true
            })
            if (dataGroup) {
                var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                    if (v.work_plan_product_id == dataGroup.work_plan_product_id) return true
                })
                if (dataGroup) {
                    var percentReal = (parseInt(dataGroup.qty) / parseInt((e.qty * dataProducts.unit_target.multiplier))) * 100
                } else {
                    var percentReal = 0
                    dataGroup = {}
                    dataGroup.qty = 0
                }
                var percent = roundToTwo(percentReal)
                if (percentReal > 100) {
                    percent = 100
                }
                var bg = ''
                if (percent == 100) {
                    bg = 'bg-success'
                }

                var nilaiConversi = conversiToTarget(dataGroup.qty, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
            } else {
                var percent = 0
                var nilaiConversi = 0
            }
            // console.log(nilaiConversi)
            html += '<div class="row">'
            html += '<div class="col align-self-center pb-3">'
            html += '<div class="progress">'
            html += '<div class="progress-bar ' + bg + '" style="width: ' + percent + '%" role="progressbar" aria-valuenow="' + percent + '" aria-valuemin="0" aria-valuemax="100">' + percent + '%</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-3">'
            html += '<h5 class="text-dark-grey m-0"><b>' + e.product.alias + ' - #' + e.priority + '</b></h5>'
            html += '<p class="m-0 small-text">' + nilaiConversi + ' / ' + e.qty + ' ' + e.unit_target.name + '</p>'
            html += '</div>'
            html += '</div>'
        })
        $('#listProgressHasil').html(html)
        viewModeChart()
    }

    function table() {
        var html = ''
        html += '<table class="table table-sm table-hover small-text">'
        html += '<thead>'
        html += '<tr>'
        html += '<th scope="col" class="p-3">#</th>'
        html += '<th scope="col" class="p-3"><i class="fa fa-clock-o"></i></th>'
        html += '<th scope="col" class="p-3">Brand - Batch</th>'
        html += '<th scope="col" class="p-3">QTY</th>'
        html += '<th scope="col" class="p-3">Unit</th>'
        html += '<th scope="col" class="p-3">User</th>'
        html += '<th scope="col" class="p-3">Notes</th>'
        html += '<th scope="col" class="p-3"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="tampilDetail">'
        html += '</tbody>'
        html += '</table>'
        $('#productionDetail').html(html)
        tableDetail()
    }

    function tableDetail() {
        var html = ''
        var a = 1
        if (dataEntry.productionOutItem.length > 0) {
            dataEntry.productionOutItem.forEach(e => {
                var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
                    if (v.work_plan_product_id == e.work_plan_product_id) return true
                })
                html += '<tr>'
                html += '<th class="p-2 text-center" scope="row">' + a++ + '</th>'
                html += '<td class="p-2 text-center">' + convertTimeFormat(e.time.start) + ' - ' + convertTimeFormat(e.time.end) + '</td>'
                html += '<td class="p-2 text-center">' + e.item.alias + ' - B' + e.priority + '</td>'
                var nilaiConversi = conversiToTarget(e.qty, dataProducts.unit_target.multiplier, dataProducts.unit_target.name, dataProducts.unit_input.name)
                html += '<td class="p-2 text-center">' + number_format(e.qty)
                html += '<p class="m-0 fw-bolder text-primary" style="font-size:7px;">( ' + nilaiConversi + ' )</p>'
                html += '</td>'
                html += '<td class="p-2 text-center">' + e.unit.name + '</td>'
                html += '<td class="p-2 text-center">' + e.employee.name.split(' ')[0] + '</td>'
                if (e.note == null) {
                    e.note = '-'
                }
                html += '<td class="p-2 text-center">' + shortenText(e.note, 20) + '</td>'
                html += '<td class="p-2 text-center">'
                html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="detailProductionOut(' + e.result_product_id + ')"><i class="fa fa-eye"></i></button>'
                html += '</td>'
                html += '</tr>'
            });
        } else {
            html += '<tr>'
            html += '<td class="text-center p-5" colspan="7"><i class="small-text">Tidak Ada Data yang Tersedia</i></td>'
            html += '</tr>'
        }
        $('#tampilDetail').html(html)
    }

    function chart() {
        var dataChart = []
        var dataTime = sortByStartTime(dataEntry.productionOutItem)
        var timeSlot = generateTimeSlots(dataEntry.workPlanMachine.shift.start, dataEntry.workPlanMachine.shift.end)
        dataEntry.workPlanMachine.products.forEach(e => {
            var data = dataTime.filter((v, k) => {
                if (v.item.id == e.product.id && v.priority == e.priority) return true
            })
            var dataConvert = convertFromTimeSlotsToQTY(data, timeSlot)
            dataChart.push({
                'label': e.product.alias + ' - B' + e.priority,
                'data': extractQty(dataConvert)
            })
        });
        var html = ''
        html += '<canvas id="myChart"></canvas>'
        $('#productionDetail').html(html)
        const ctx = document.getElementById('myChart');

        const data = {
            labels: extractJamke(timeSlot),
            datasets: dataChart
        };
        new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Line Chart'
                    }
                }
            },
        });
    }

    function changeModeChart() {
        if (modeChart) {
            // table
            table()
            $('#btnModeChart').removeClass('btn-dark')
            $('#btnModeChart').addClass('btn-outline-dark')
            modeChart = 0
        } else {
            // Chart
            chart()
            $('#btnModeChart').addClass('btn-dark')
            $('#btnModeChart').removeClass('btn-outline-dark')
            modeChart = 1
        }
    }

    function viewModeChart() {
        if (modeChart) {
            chart()
        } else {
            table()
        }
    }

    function formProductionOut() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">New Production Out</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12 mb-2">'
        html_body += '<p class="m-0 small-text"><b>Item</b></p>'
        html_body += '<select id="selectItem" class="form-select" onchange="formFill(),fillForm()">'
        html_body += '<option value="" selected disabled><i>Pilih Item</i></option>'
        dataEntry.workPlanMachine.products.forEach(e => {
            html_body += '<option value="' + e.product.id + '" data-work_plan_product_id="' + e.work_plan_product_id + '">' + e.product.name + ' - Batch ' + e.priority + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<div class="row" id="formFill">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="simpanData()">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }

    function formFill() {
        var html = ''
        var id = $('#selectItem').find(':selected').data('work_plan_product_id')
        var data = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.work_plan_product_id == id) return true
        })
        html += '<div class="col-12">'
        html += '<div class="line-with-text"><hr><span class="super-small-text ms-2 me-2">Fill the Form</span><hr></div>'
        html += '</div>'
        html += '<div class="col-12 mt-2" id="alertTanggal">'
        // alert

        // alert
        html += '</div>'
        html += '<div class="col-6 mt-2">'
        html += '<p class="m-0 small-text"><b>Start Time</b></p>'

        html += '<input type="time" id="startTime" class="form-control" value="" required="required" oninput="fillForm(),addToEndTime(event),checkAvailableHours()" min="19:00" max="03:00">'
        html += '<div class="form-check align-self-center">'
        html += '<input class="form-check-input" type="checkbox" value="" id="checkAutoNextHour" onchange="autoNextHour(),checkAvailableHours()" checked>'
        html += '<label class="form-check-label" for="checkAutoNextHour">Auto Next Hour</label>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-6 mt-2">'
        html += '<p class="m-0 small-text"><b>End Time</b></p>'
        html += '<input type="time" id="endTime" class="form-control" value="" required="required" oninput="fillForm(),checkAvailableHours()">'
        html += '</div>'
        html += '<div class="col-12 text-danger" id="textWarning">'
        html += '</div>'
        html += '<div class="col-12 mt-2">'
        // QTY
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body p-3">'
        html += '<div class="row">'
        html += '<div class="col-12">'
        html += '<p class="m-0 small-text mb-3"><b>QTY</b></p>'
        html += '</div>'

        html += '<div class="col-6 align-self-center">'
        // text
        html += '<p class="m-0 small-text">TOTAL</p>'
        html += '<p class="m-0 h1"><b id="totalQTY">0</b> ' + dataEntry.productionOutUnit.name + '</p>'
        // text
        html += '</div>'
        html += '<div class="col-6">'

        html += '<div class="row">'

        html += '<div class="col-8 pb-2">'
        html += '<input type="text" id="qty_target" class="form-control nominal" value="" required="required" onkeyup="fillForm()" autocomplete="off" data-multiplier="' + data.unit_target.multiplier + '">'
        html += '</div>'
        html += '<div class="col-4 pb-2 align-self-center">'
        html += '<b>' + data.unit_target.name + '</b>'
        html += '</div>'

        html += '<div class="col-8">'
        html += '<input type="text" id="qty_input" class="form-control nominal" value="" required="required" onkeyup="fillForm()" autocomplete="off" data-multiplier="' + data.unit_input.multiplier + '">'
        html += '</div>'
        html += '<div class="col-4 align-self-center">'
        html += '<b>' + data.unit_input.name + '</b>'
        html += '</div>'

        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        // QTY
        html += '</div>'
        html += '<div class="col-12 mt-2">'
        html += '<p class="m-0 small-text"><b>Note</b></p>'
        html += '<textarea id="note" class="form-control" rows="5" placeholder="Tuliskan notes disini" onkeyup="fillForm()"></textarea>'
        html += '</div>'
        $('#formFill').html(html)
        $('.nominal').number(true);
        autoNextHour()
        checkAvailableHours()
    }

    function detailProductionOut(id) {
        var dataFind = dataEntry.productionOutItem.find((v, k) => {
            if (v.result_product_id == id) return true
        })
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Production Out</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-6">'
        html_body += '<p class="m-0 small-text"><b>Start Time</b></p>'
        html_body += '<p class="m-0">' + convertTimeFormat(dataFind.time.start) + '</p>'

        html_body += '</div>'
        html_body += '<div class="col-6">'
        html_body += '<p class="m-0 small-text"><b>End Time</b></p>'
        html_body += '<p class="m-0">' + convertTimeFormat(dataFind.time.end) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mt-2">'
        html_body += '<p class="m-0 small-text"><b>Item</b></p>'
        html_body += '<p class="m-0">' + dataFind.item.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-6 mt-2">'
        html_body += '<p class="m-0 small-text"><b>QTY</b></p>'
        html_body += '<p class="m-0">' + dataFind.qty + ' ' + dataFind.unit.name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-2">'
        html_body += '<p class="m-0 small-text"><b>Note</b></p>'
        html_body += '<p class="m-0">' + dataFind.note + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12 mt-4">'
        html_body += '<button type="button" class="w-100 btn btn-danger" id="btnSimpan" onclick="hapusData(' + id + ')">Hapus Data Ini</button>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer);
    }

    function autoNextHour() {
        if ($('#checkAutoNextHour').is(":checked")) {
            var id = $('#selectItem').find(':selected').data('work_plan_product_id')
            var dataList = convertToPerHour(convertDataToListTime(dataEntry.workPlanMachine.products))
            console.log(convertDataToListTime(dataEntry.workPlanMachine.products))
            var missingHours = findMissingHours(extractHour(dataEntry.workPlanMachine.shift.start), extractHour(dataEntry.workPlanMachine.shift.end), dataList)[0] + ':00'
            $('#startTime').val(missingHours)
            $('#endTime').val(addOneHour(missingHours))
        } else {
            $('#startTime').val('')
            $('#endTime').val('')
        }
    }


    function fillForm() {
        var startTime = $('#startTime').val()
        var endTime = $('#endTime').val()
        var item = $('#selectItem').val()
        var qty_input = $('#qty_input').val()
        var qty_target = $('#qty_target').val()
        var note = $('#note').val()
        if (startTime && endTime && item && (qty_input || qty_target)) {
            $('#btnSimpan').removeAttr('disabled', true)
        } else {
            $('#btnSimpan').attr('disabled', true)
        }
        conversi()
    }

    var totalQTY = 0

    function conversi() {
        totalQTY = 0
        var id = $('#selectItem').find(':selected').data('work_plan_product_id')
        var data = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.work_plan_product_id == id) return true
        })
        var qty_input = $('#qty_input').val()
        var multiplier_input = $('#qty_input').data('multiplier')
        var qty_target = $('#qty_target').val()
        var multiplier_target = $('#qty_target').data('multiplier')
        totalQTY = (qty_input * multiplier_input) + (qty_target * multiplier_target)
        $('#totalQTY').html(number_format(totalQTY))
    }

    function addToEndTime(event) {
        var value = event.target.value
        $('#endTime').val(addOneHour(value))
    }

    function checkAvailableHours() {
        var startTime = $('#startTime').val()
        var endTime = $('#endTime').val()
        var dataList = convertDataToListTime2(dataEntry.productionOutItem)
        var checkStart = checkTimeStart(startTime, dataList)
        var checkEnd = checkTimeEnd(endTime, dataList)
        if (checkStart && checkEnd) {
            checkAvailableHoursInProducts(startTime, endTime)
        } else {
            $('#textWarning').html('<p class="m-0 super-small-text">Jam Tersebut Telah Dipakai, Harap Input Jam yang Masih Tersedia</p>')
            $('#qty').attr('disabled', true)
        }
        getDateFromTime(startTime)
    }

    function checkAvailableHoursInProducts(startTime, endTime) {
        var id = $('#selectItem').find(':selected').data('work_plan_product_id')
        var dataProducts = dataEntry.workPlanMachine.products.find((v, k) => {
            if (v.work_plan_product_id == id) return true
        })
        var check = cekJadwal(id, startTime, endTime, dataEntry.workPlanMachine.products)
        if (check.return) {
            $('#textWarning').html('<p class="m-0 super-small-text">Jam Tersebut Telah Dipakai oleh Produksi ' + check.product.product.name + ' Batch ' + check.product.priority + '</p>')
            $('#qty').attr('disabled', true)
        } else {
            $('#textWarning').html('')
            $('#qty').removeAttr('disabled', true)
        }
    }

    function getDateFromTime(value) {
        var data = findDateFromTime(value, dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end)
        var html = ''
        if (data) {
            html += '<div class="alert alert-primary d-flex align-items-center align-self-center small-text p-2" role="alert">'
            html += '<div class="fa fa-calendar align-middle me-2"></div> <div class="align-middle">' + formatDateIndonesia(data) + '</div>'
            html += '</div>'
        }
        $('#alertTanggal').html(html)
    }

    function simpanData() {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setResultProduct'); ?>'
        var data = {
            'resultProduct': {
                work_plan_id: dataEntry.workPlanMachine.work_plan_id,
                shift_id: dataEntry.workPlanMachine.shift.id,
                machine_id: dataEntry.workPlanMachine.machine.id,
                time_start: $('#startTime').val(),
                time_end: $('#endTime').val(),
                datetime_start: findDateFromTime($('#startTime').val(), dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end) + ' ' + $('#startTime').val() + ':00',
                datetime_end: findDateFromTime($('#endTime').val(), dataEntry.workPlanMachine.shift.datetime_start, dataEntry.workPlanMachine.shift.datetime_end) + ' ' + $('#endTime').val() + ':00',
                item_id: $('#selectItem').val(),
                work_plan_product_id: $('#selectItem').find(':selected').data('work_plan_product_id'),
                qty: totalQTY,
                unit_id: dataEntry.productionOutUnit.id,
                employee_id: user_id,
                note: $('#note').val(),
            }
        }
        // console.log(data)
        kelolaData(data, type, url, button)
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
                var url = '<?php echo api_produksi('setResultProduct'); ?>'
                var data = {
                    'deletedId': {
                        resultProduct: [id]
                    }
                }
                kelolaData(data, type, url, button)
            }
        })

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