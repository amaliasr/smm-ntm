<link href="<?= base_url(); ?>assets/smm/purchase_order.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<style>
    .dropzone.dz-clickable {
        cursor: pointer;
    }

    .dropzone {
        min-height: 0px !important;
        border: 3px dashed #e5e5e5;
        background: #fff;
        padding: 5px;
        border-radius: 5px;
    }

    .dropzone,
    .dropzone * {
        box-sizing: border-box;
    }

    .dropzone .dz-preview {
        margin: 3px;
    }

    .dropzone .dz-preview .dz-remove {
        font-size: 10px;
        text-decoration: none;
        color: grey;
    }

    /* CSS untuk mengatur thumbnail lebih lanjut */
    .dropzone .dz-preview .dz-image {
        width: 100px;
        /* Lebar thumbnail */
        height: 100px;
        /* Tinggi thumbnail */
    }

    .dropzone .dz-preview .dz-image img {
        width: 100%;
        /* Memastikan gambar memenuhi kontainer */
        height: 100%;
        /* Menjaga rasio gambar sesuai kontainer */
        object-fit: cover;
        /* Menjaga proporsi gambar agar tetap pas */
    }

    .dropzone:hover {
        background-color: #f4f4f4;
    }
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow-sm">
                    <div class="card-body py-5">
                        <div class="row justify-content-center">
                            <div class="col-12 pb-2 text-center">
                                <p class="m-0 fw-bolder">Create New Purchase Requisition (PR)</p>
                                <p class="m-0 small-text">Please Select Cost Centre</p>
                            </div>
                            <div class="col-12 mt-3" id="costCenterList">
                            </div>
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
<!-- Modal -->
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal3" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog3">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader3">

            </div>
            <div class="modal-body" id="modalBody3">

            </div>
            <div class="modal-footer" id="modalFooter3">

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
<script src="https://cdn.jsdelivr.net/npm/compressorjs@1.1.1/dist/compressor.min.js"></script>
<script src="https://unpkg.com/pdf-lib/dist/pdf-lib.min.js"></script>

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

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        jumlahPR = 0
        last_number = 1
        data_checked = ""
        id_po_detail = []
        clearModal();
        clicked_cost_center = ''
        item_id_choosen = []
        attachments = []
    })
    var pr_id = '<?= $id ?>'
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_level_id = '<?= $this->session->userdata('job_level_id') ?>'
    var initialDivision = "<?= $this->session->userdata('alias') ?>"
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var no_pr = ""
    var date_start = currentDate()
    var date_end = currentDate()
    var clicked_cost_center = ''
    var item_id_choosen = []
    var attachments = []
    $(document).ready(function() {
        loadUser()
    })

    function loadUser() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                data_user = response['data']
                getCostCenter()
            }
        })
    }

    function getData(idCostCenter, nameCostCenter) {
        $.ajax({
            url: "<?= api_url('getPurchaseDataCreate'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                costCenterId: idCostCenter
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_item = response['data']['item'];
                clicked_cost_center = idCostCenter
                numberinPR(idCostCenter, nameCostCenter)
            }
        })
    }

    function numberinPR(idCostCenter, nameCostCenter) {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getCountDocPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                showOverlay('hide')
                const d = new Date();
                var month = d.getMonth() + 1;
                var thisMonth = (month < 10 ? '0' : '') + month
                let thisYear = d.getFullYear();
                if (response.message != 'Data data not found') {
                    let obj = response['data'].filter((value, key) => {
                        if (value.tahun === thisYear.toString() && value.cost_center_id == idCostCenter) return true
                    });
                    let count = 1
                    if (obj != undefined || obj.length == 0) {
                        var data_hasil = groupAndSum(obj, ['tahun'], ['count'])
                        if (data_hasil.length) {
                            count = parseInt(data_hasil[0]['count']) + 1;
                        } else {
                            count = 1
                        }
                    }
                    no_pr = count.toString().padStart(3, "0") + '/SMM-' + initialDivision + '/PR/' + romanize(thisMonth) + '/' + thisYear
                } else {
                    no_pr = '001' + '/SMM-' + initialDivision + '/PR/' + romanize(thisMonth) + '/' + thisYear

                }
                formPR(idCostCenter, nameCostCenter)
            }
        })
    }
    var data_cost_center = []

    function refresh() {
        showOverlay('show')
        getCostCenter()
    }

    function getCostCenter() {
        $.ajax({
            url: "<?= api_url('loadPagePurchaseRequestCreate'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                userId: user_id,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                showOverlay('hide')
                data_cost_center = response['data']
                // numberinPR()
                costCenterList()
            }
        })
    }

    function ajaxPR() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataPR'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                user_id: user_id,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                })
            },
            beforeSend: function() {},
            success: function(response) {
                data_pr = response['data']
                data_pr_approval = response['data_approval']
                costCenterList()
            }
        })
    }

    function costCenterList() {
        var html = ''
        data_cost_center.costCenter.forEach(e => {
            html += '<div class="card shadow-none mb-2 pointer card-hoper actions-btn" onclick="getData(' + e.id + ',' + "'" + e.code + ' - ' + e.name + "'" + ')">'
            html += '<div class="card-body small-text p-2">' + e.code + ' - ' + e.name + '</div>'
            html += '</div>'
        });
        $('#costCenterList').html(html)
    }

    function groupAndSum(arr, groupKeys, sumKeys) {
        return Object.values(
            arr.reduce((acc, curr) => {
                const group = groupKeys.map(k => curr[k]).join('-');
                acc[group] = acc[group] || Object.fromEntries(groupKeys.map(k => [k, curr[k]]).concat(sumKeys.map(k => [k, 0])));
                sumKeys.forEach(k => acc[group][k] += parseFloat(curr[k]));
                return acc;
            }, {})
        );
    }
    var last_number = 1
    Dropzone.autoDiscover = false;

    function formPR(idCostCenter, nameCostCenter) {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Purchase Requisition</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container-fluid small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-2">From</div>'
        html_body += '<div class="col-8 col-md-10 fw-bold">' + data_user[0]['name'] + '</div>'

        html_body += '<div class="col-4 col-md-2">To</div>'
        html_body += '<div class="col-8 col-md-10 fw-bold">Purchasing</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6">'
        html_body += '<div class="row">'
        html_body += '<div class="col-4 col-md-3">No. PR</div>'
        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + no_pr + '</span></div>'

        html_body += '<div class="col-4 col-md-3">Tanggal</div>'
        html_body += '<div class="col-8 col-md-9"><span class="fw-bold">' + currentDate() + '</span></div>'

        html_body += '<div class="col-4 col-md-3">Cost Centre</div>'
        html_body += '<div class="col-8 col-md-9"><span class="fw-bolder text-orange">' + nameCostCenter + '</span></div>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="col-12 mt-5">'
        html_body += '<table class="table table-bordered table-sm">'
        html_body += '<tr>'
        html_body += '<th class="align-middle" rowspan="2">No</th>'
        html_body += '<th class="align-middle" style="width:30%" rowspan="2">Description</th>'
        html_body += '<th class="align-middle" style="width:5%" rowspan="2">QTY</th>'
        html_body += '<th class="align-middle" style="width:10%" rowspan="2">Unit</th>'
        html_body += '<th class="align-middle" colspan="2">Estimated</th>'
        html_body += '<th class="align-middle" rowspan="2">Notes</th>'
        html_body += '<th class="align-middle" rowspan="2"></th>'
        html_body += '</tr>'
        html_body += '<tr>'
        html_body += '<th class="align-middle" style="width:15%">Unit Price</th>'
        html_body += '<th class="align-middle" style="width:15%">Extended Price</th>'
        html_body += '</tr>'
        html_body += '<tbody id="bodyPR">'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '<button class="btn btn-sm btn-outline-primary float-end" style="font-size:11px" id="btnNewRowPR"><i class="fa fa-plus me-2"></i> New Row</button>'
        html_body += '</div>'

        html_body += '<div class="col-12 col-md-6 mt-1">'
        html_body += '<small class="fw-bolder mb-2">Justification</small>'
        html_body += '<textarea class="form-control form-control-sm w-100 p-3" rows="5" id="justification" placeholder="Tuliskan Justification bila perlu"></textarea>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-6 mt-1">'
        html_body += '<small class="fw-bolder mb-2">Upload Lampiran</small>'

        // upload image
        html_body += '<div id="my-dropzone" class="dropzone text-center">'
        html_body += '<div class="dz-message">'
        html_body += '<img class="mb-2" style="width: 40px;" src="<?= base_url() ?>assets/image/svg/upload.svg" alt="Icon" />'
        html_body += '<p class="m-0 small-text"><i>Geser Dokumen atau Klik untuk Mengunggah</i></p>'
        html_body += '</div>'
        html_body += '</div>'
        // upload image

        html_body += '</div>'
        html_body += '<div class="col-12 col-md-4 mt-1">'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);
        // Initialize Dropzone for file upload
        initDropzone();

        var html_footer = '';
        var total = 0
        html_footer += '<div class="me-auto fw-bold">Total : Rp. <span id="totalPR">' + number_format(total) + '</span></div>'
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanPR" onclick="simpan(' + idCostCenter + ')">Simpan</button>'

        $('#modalFooter').html(html_footer);
        for (let i = 1; i <= 3; i++) {
            last_number++
            formRowPR(i)
        }
    }

    function initDropzone() {
        var myDropzone = new Dropzone("#my-dropzone", {
            url: "<?= api_url('doUpload'); ?>", // Endpoint untuk menerima file
            paramName: "image", // Nama parameter untuk file yang diunggah (default: "file")
            maxFilesize: 10, // Maximum file size in MB
            acceptedFiles: "image/*,.pdf", // Jenis file yang diterima
            method: "post", // HTTP method
            clickable: "#my-dropzone", // Membuat area div menjadi clickable
            addRemoveLinks: true, // Menambahkan tombol hapus pada file yang diunggah
            dictDefaultMessage: "Geser Dokumen atau Klik untuk Mengunggah", // Pesan default
            thumbnailWidth: 100, // Lebar thumbnail
            thumbnailHeight: 100, // Tinggi thumbnail
            autoProcessQueue: true,
            success: function(file, response) {
                // console.log(file, response)
                // console.log("File uploaded successfully!");
            },
            error: function(file, response) {
                console.log("File upload failed!");
            },
            init: function() {
                this.on("addedfile", async function(file) {
                    if (file.processed) return;

                    if (file.type.startsWith("image/")) {
                        new Compressor(file, {
                            quality: 0.8, // Adjust the quality as needed
                            maxWidth: 1200, // Maximum width in pixels
                            maxHeight: 1200, // Maximum height in pixels
                            success: (compressedFile) => {
                                compressedFile.processed = true;
                                compressedFile.name = getNewFileName(compressedFile.name);
                                attachments.push(compressedFile.name);
                                this.removeFile(file);
                                this.addFile(compressedFile);
                                // this.processQueue();
                            },
                            error(err) {
                                console.error("Image compression error:", err.message);
                            }
                        });
                    } else if (file.type == "application/pdf") {
                        // var compressedFile = await compressPDF(file);
                        // compressedFile.processed = true;
                        // compressedFile.name = getNewFileName(compressedFile.name);
                        // this.removeFile(file);
                        // this.addFile(compressedFile);
                        // this.processQueue();
                        // attachments.push(compressedFile.name);
                        // Tidak perlu kompres PDF, langsung diproses
                        file.processed = true;
                        // this.addFile(file);
                        // this.processQueue();
                        attachments.push(file.name);
                        console.log(attachments)
                    } else {
                        file.processed = true;
                        // this.processQueue();
                    }
                });
                // On sending the file, append additional parameters
                this.on("sending", function(file, xhr, formData) {
                    /// Rename the file before sending it
                    var datetime = getFormattedDateTime();
                    var fileExtension = file.name.split('.').pop(); // Get file extension
                    var newFileName = "file_" + datetime + "." + fileExtension;
                    formData.append("folder", "pr"); // Custom folder parameter
                    formData.append("fileName", newFileName); // New file name
                });
                this.on("removedfile", function(file) {
                    // Send delete request to the server
                    var fileName = file.name; // Assuming file.dataURL holds the file path or identifier

                    // Example for sending the delete request
                    $.ajax({
                        url: "<?= api_url('doDelete'); ?>", // Endpoint for file deletion
                        type: "POST",
                        data: {
                            fileName: fileName,
                            folder: "pr"
                        },
                        success: function(response) {
                            var jsonResponse = response
                            if (jsonResponse.success) {
                                // remove name from attachments array
                                attachments = attachments.filter(function(name) {
                                    return name != fileName;
                                })
                                console.log(attachments)
                                // console.log("File deleted from server");
                            } else {
                                console.log("File deletion failed:", jsonResponse.message);
                                // myDropzone.emit("addedfile", file); // Menambahkan file kembali ke Dropzone
                                // myDropzone.emit("complete", file);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error deleting file:", error);
                            // myDropzone.emit("addedfile", file); // Menambahkan file kembali ke Dropzone
                            // myDropzone.emit("complete", file);
                        }
                    });
                });
            }
        });
    }
    async function compressPDF(file) {
        try {
            // Read the file as an ArrayBuffer
            const pdfBytes = await file.arrayBuffer();

            // Load the PDF
            const pdfDoc = await PDFLib.PDFDocument.load(pdfBytes);

            // Optimize by saving the PDF with minimal features
            const compressedPdfBytes = await pdfDoc.save({
                useObjectStreams: false, // Disables object streams to reduce file size
                // You can also explore other options like `usePDFx` for specific needs
            });

            // Create a new File object with compressed content
            return new File([compressedPdfBytes], file.name, {
                type: 'application/pdf'
            });
        } catch (error) {
            console.error("PDF compression error:", error.message);
            return file; // Return the original file if compression fails
        }
    }

    function getNewFileName(originalName) {
        var datetime = getFormattedDateTime();
        var fileExtension = originalName.split('.').pop(); // Get file extension
        return "file_" + datetime + "." + fileExtension;
    }
    // Function to get the current date and time in a specific format
    function getFormattedDateTime() {
        var now = new Date();
        var year = now.getFullYear();
        var month = (now.getMonth() + 1).toString().padStart(2, '0');
        var day = now.getDate().toString().padStart(2, '0');
        var hours = now.getHours().toString().padStart(2, '0');
        var minutes = now.getMinutes().toString().padStart(2, '0');
        var seconds = now.getSeconds().toString().padStart(2, '0');
        var milliseconds = now.getMilliseconds().toString().padStart(3, '0');

        return year + month + day + "_" + hours + minutes + seconds + "_" + milliseconds;
    }

    function formRowPR(i, item_id = '') {
        var html_body = ""
        html_body += '<tr id="fieldPRRow' + i + '">'
        // no
        html_body += '<td class="text-center align-middle">' + i + '</td>'

        // item
        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="item_pr' + i + '" class="form-control form-control-sm selectpicker item_pr" data-id="' + i + '">'
        html_body += '<option value="" selected disabled> </option>'
        $.each(data_item, function(keys, values) {
            if (values.cost_center_ids) {
                if (values.cost_center_ids.includes(clicked_cost_center)) {
                    html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
                }
            }
        })
        html_body += '</select>'
        html_body += '</td>'

        // qty
        html_body += '<td class="text-wrap text-center">'
        html_body += '<input autocomplete="off" style="border:none" type="text" name="" class="form-control form-control-sm shadow-none p-1 qty_pr" id="qty_pr' + i + '" data-id="' + i + '"  value="">'
        html_body += '</td>'

        // unit
        html_body += '<td>'
        html_body += '<select style="border:none" name="" id="unit_pr' + i + '" class="form-control form-control-sm shadow-none select2-single unit_pr" data-id="' + i + '">'
        html_body += '<option value="" selected disabled></option>'
        html_body += '</select>'
        html_body += '</td>'

        // unit price
        html_body += '<td class="text-end" id="unit_field' + i + '">'
        html_body += addUnitField(i)
        html_body += '</td>'

        // extended price
        html_body += '<td class="text-end">'
        html_body += '<input autocomplete="off" style="border:none" type="text" name="" id="extended_price_pr' + i + '" data-id="' + i + '" class="nominal form-control form-control-sm shadow-none p-1 extended_price_pr " value="">'
        html_body += '</td>'

        // notes
        html_body += '<td>'
        html_body += '<input autocomplete="off" style="border:none" type="text" name="" id="notes_pr' + i + '" data-id="' + i + '" class="form-control form-control-sm shadow-none p-1 notes_pr" value="">'
        html_body += '</td>'

        // ACTION DELETE
        html_body += '<td class="text-center">'
        html_body += '<button type="button" class="btn text-danger btn-sm p-0 small-text shadow-none" onclick="deleteRowPR(' + i + ')"><i class="fa fa-trash"></i></button>'
        html_body += '</td>'

        html_body += '</tr>'
        $('#bodyPR').append(html_body)
        $('#item_pr' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
            dropdownCssClass: 'custom-dropdown border-top'
        })
        $('#unit_pr' + i).select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })
        $('#unit_price_pr' + i).number(true, 2);
        $('#extended_price_pr' + i).number(true, 2);
        $('#item_pr' + i).on('select2:open', function() {
            if (!$('.add-button').length) {
                $('.select2-dropdown').append('<button class="btn btn-sm small-text shadow-none rounded-0 border-top add-button py-2" style="width: 100%;" onclick="lihatSemuaData()">Lihat Semua Data</button>');
            }
        });
        // var select = ''
        // if (item_id) {
        //     if (item_id == values.id) {
        //         select = 'selected'
        //     } else {
        //         select = ''
        //     }
        // }
        if (item_id) {
            $('#item_pr' + i).val(item_id).trigger('change')
        }
        return true;
    }

    function deleteRowPR(i) {
        var item_id = $('#item_pr' + i).val()
        doRemoveData(item_id)
        $('#fieldPRRow' + i).remove()
    }

    function addUnitField(key) {
        var html = ''
        html += '<input autocomplete="off" style="border:none" type="text" name="" id="unit_price_pr' + key + '" data-id="' + key + '" class="nominal form-control form-control-sm shadow-none p-1 unit_price_pr " value="">'
        return html
    }

    $(document).on('change', '.item_pr', function(e) {
        var key = $(this).data('id')
        $('#unit_pr' + key).empty()
        var id = $(this).val()
        let obj = JSON.parse(data_item.find((value, key) => {
            if (value.id == id) return true
        })['data_konversi'])
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id == id) return true
        });
        // console.log(satuan_tetap)
        var html_body = ""
        // html_body += '<option value="" selected disabled></option>'
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '">' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                html_body += '<option value="' + values['satuan_id'] + '">' + values['satuan_name'] + '</option>'
            })
        }
        $('#unit_pr' + key).html(html_body)
        $('#unit_field' + key).html(addUnitField(key))
        $('#unit_price_pr' + key).number(true, 2);
        if (satuan_tetap.price) {
            $('#unit_price_pr' + key).val(satuan_tetap.price)
        }
        insertAllItemId()
        typingNominalPR($(this).data('id'))
    })
    $(document).on('click', '#btnNewRowPR', function(e) {
        formRowPR(last_number, "")
        last_number++
    })
    $(document).on('keyup', '.qty_pr,.unit_price_pr', function(e) {
        typingNominalPR($(this).data('id'))
    })

    function typingNominalPR(id) {
        var price = 0
        var unit = $('#unit_price_pr' + id).val()
        if (unit == "") {
            unit = 0
        }
        var qty = $('#qty_pr' + id).val()
        if (qty == "") {
            qty = 0
        }
        price = (parseFloat(unit) * parseFloat(qty))
        $('#extended_price_pr' + id).val(price)
        totalPricePR()
    }

    var jumlahPR = 0

    function totalPricePR() {
        jumlahPR = 0
        var total = $('.extended_price_pr').map(function() {
            return $(this).val();
        }).get();
        for (let i = 0; i < total.length; i++) {
            if (total[i] != "")
                jumlahPR += parseFloat(total[i]);
        }
        $('#totalPR').html(number_format(jumlahPR))
    }

    function simpan(idCostCenter) {
        var dataCostCenter = data_cost_center.costCenter.find((value, key) => {
            if (value.id == idCostCenter) return true
        })
        var type = 'POST'
        var id_item = $('.item_pr').map(function() {
            return $(this).val();
        }).get();
        var qty = $('.qty_pr').map(function() {
            return $(this).val();
        }).get();
        var unit = $('.unit_pr').map(function() {
            return $(this).val();
        }).get();
        var unit_price = $('.unit_price_pr').map(function() {
            return $(this).val();
        }).get();
        var total = $('.extended_price_pr').map(function() {
            return $(this).val();
        }).get();
        var notes = $('.notes_pr').map(function() {
            return $(this).val();
        }).get();
        var data = {
            id_users: user_id,
            to: 1,
            from: divisi_id,
            date: currentDate(),
            no_pr: no_pr,
            id_item: id_item,
            qty: qty,
            unit: unit,
            unit_price: unit_price,
            extended_price: total,
            notes: notes,
            total: jumlahPR,
            justification: $('#justification').val(),
            // category: $('#category').val(),
            job_level_id: job_level_id,
            cost_center_id: idCostCenter,
            attachments: attachments,
            department_id: dataCostCenter.department_id,
            employee_id: user_id,
        }
        var button = '#btnSimpanPR'
        var url = '<?php echo api_url('Api_Warehouse/insertPR2'); ?>'
        // var url = '<?php echo api_url('Api_Warehouse/insertPR'); ?>'
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
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Tersimpan',
                        icon: 'success',
                    }).then((responses) => {
                        $(button).prop("disabled", false);
                        var pending = []
                        var findApproval = response.data_approval.find((value, key) => {
                            if (value.is_current == 1) return true
                        })
                        if (findApproval) {
                            pending = findApproval.data_approval
                        }
                        var phone = []
                        var name = []
                        $.each(pending, function(keys, values) {
                            phone.push(values.phone)
                            name.push(values.full_name)
                        })
                        var link = '<?= base_url() ?>order/detailPR/' + response.id_pr + ''
                        $('#modal').modal('hide')
                        shareWhatsapp(response.id_pr, phone, link, 'PR', response.no_pr, name)
                        refresh()

                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(button).prop("disabled", false);
                }
            }
        });
    }

    function shareWhatsapp(id, no_telp, link, status, no_doc, nama) {
        $.ajax({
            url: "<?= base_url('api') ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                no_telp: no_telp,
                link: link,
                status: status,
                nama: nama,
                no_doc: no_doc,
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $('#modal2').modal('hide')
            },
            beforeSend: function() {
                preloaderTimeout = setTimeout(loading('message.gif', 'Mengirim Approval kepada yang Bersangkutan'), 500)
            },
            success: function(response) {
                $('#modal2').modal('hide')
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil Mengirimkan Approval',
                    icon: 'success',
                }).then((responses) => {});
            }
        })
    }

    function loading(image, text) {
        $('#modal2').modal('show')
        $('#modalDialog2').addClass('modal-dialog modal-dialog-centered');
        // var html_header = '';
        $('#modalHeader2').addClass('d-none');
        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row text-center p-5">'
        html_body += '<img src="<?= base_url() ?>assets/image/gif/' + image + '" class="w-50  mx-auto d-block"><br>'
        html_body += '<p class="mt-3">' + text + '</p>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody2').html(html_body);
        // var html_footer = '';
        $('#modalFooter2').addClass('d-none');
    }
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });

    function lihatSemuaData() {
        $('#modal3').modal('show')
        $('#modalDialog3').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Item List</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader3').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        //filter
        html_body += '<div class="col-12 mb-2" id="filterItem">'
        html_body += '</div>'
        //filter
        // tabel
        html_body += '<div class="col-12">'
        html_body += '<div class="table-responsive">'
        html_body += '<table class="table table-sm table-bordered table-hover" id="tableData2" width="100%">'
        html_body += '<thead>'
        html_body += '<tr>'
        html_body += '<th class="small-text align-middle">No</th>'
        html_body += '<th class="small-text align-middle">Name</th>'
        html_body += '<th class="small-text align-middle">Alias</th>'
        html_body += '<th class="small-text align-middle">Type</th>'
        html_body += '<th class="small-text align-middle">Is Match?</th>'
        html_body += '</tr>'
        html_body += '</thead>'
        html_body += '<tbody id="bodyItem">'
        html_body += '</tbody>'
        html_body += '</table>'
        html_body += '</div>'
        html_body += '</div>'
        // tabel
        html_body += '</div>'
        $('#modalBody3').html(html_body);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter3').html(html_footer)
        filterLihatSemuaData()
    }

    function filterLihatSemuaData() {
        var html = ''
        html += '<div class="row">'
        // select
        html += '<div class="col-4">'
        html += '<select id="selectTipeDataItem" class="form-select form-select-sm" onchange="doFilterLihatSemuaData()">'
        html += '<option value="0" selected>Semua Data</option>'
        html += '<option value="1">Sesuai Dengan Cost Center</option>'
        html += '<option value="2">Tidak Sesuai Dengan Cost Center</option>'
        html += '</select>'
        html += '</div>'
        // select
        // pencarian
        html += '<div class="col-8 ps-0">'
        html += '<input type="text" class="form-control form-control-sm" id="searchItem" placeholder="Cari Item" onkeyup="doFilterLihatSemuaData()">'
        html += '</div>'
        // pencarian
        html += '</div>'
        $('#filterItem').html(html)
        doFilterLihatSemuaData()
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function doFilterLihatSemuaData() {
        var filter = $('#selectTipeDataItem').val()
        var data = []
        if (filter == 0) {
            data = deepCopy(data_item)
        } else if (filter == 1) {
            data = deepCopy(data_item)
            data = data.filter((value, key) => {
                if (value.cost_center_ids) {
                    if (value.cost_center_ids.includes(clicked_cost_center)) {
                        return true
                    }
                }
            })
        } else if (filter == 2) {
            data = deepCopy(data_item)
            data = data.filter((value, key) => {
                if (value.cost_center_ids) {
                    if (!value.cost_center_ids.includes(clicked_cost_center)) {
                        return true
                    }
                } else {
                    return true
                }
            })
        }
        var dataCari = $('#searchItem').val()
        if (dataCari) {
            data = data.filter((value, key) => {
                if (value.name.toLowerCase().includes(dataCari.toLowerCase())) {
                    return true
                }
            })
        }
        bodyLihatSemuaData(data)
    }

    function bodyLihatSemuaData(data) {
        var html = ''
        var a = 1
        data.forEach(e => {
            var check = ''
            if (e.cost_center_ids) {
                e.cost_center_ids.forEach(key => {
                    if (key == clicked_cost_center) {
                        check = '<i class="fa fa-check-circle text-success"></i>'
                    }
                });
            }
            if (check) {
                var color = ''
                html += '<tr class="pointer" onclick="chooseItemMultiple(' + e.id + ')" id="itemMultiple' + e.id + '">'
            } else {
                var color = 'bg-light text-grey'
                html += '<tr>'
            }
            html += '<td class="' + color + ' rowItem' + e.id + ' small-text align-middle text-center">' + a++ + '</td>'
            if (!e.item_alias) {
                e.item_alias = ''
            }
            html += '<td class="' + color + ' rowItem' + e.id + ' small-text align-middle">' + e.name + '</td>'
            html += '<td class="' + color + ' rowItem' + e.id + ' small-text align-middle">' + e.item_alias + '</td>'
            html += '<td class="' + color + ' rowItem' + e.id + ' small-text align-middle">' + e.type_name + '</td>'
            html += '<td class="' + color + ' rowItem' + e.id + ' small-text align-middle text-center">'
            html += check
            html += '</td>'
            html += '</tr>'
        });
        $('#bodyItem').html(html)
        item_id_choosen.forEach(e => {
            coloringItemList(e)
        });
    }

    function insertAllItemId() {
        // insert item_id from .item_pr into item_id_choosen
        item_id_choosen = []
        $('.item_pr').each(function() {
            var item_id = $(this).val()
            item_id_choosen.push(parseInt(item_id))
        });
    }

    function chooseItemMultiple(item_id) {
        var check = item_id_choosen.includes(item_id)
        if (check) {
            doRemoveData(item_id)
        } else {
            item_id_choosen.push(item_id)
        }
        coloringItemList(item_id)
    }

    function coloringItemList(item_id) {
        if (item_id_choosen.includes(item_id)) {
            // coloring all class rowItem at id itemMultiple
            $('.rowItem' + item_id).addClass('bg-success-light fw-bolder')
        } else {
            // coloring all class rowItem at id itemMultiple
            $('.rowItem' + item_id).removeClass('bg-success-light fw-bolder')
        }
        addToFormItem()
    }

    function doRemoveData(item_id) {
        item_id_choosen = removeData(item_id_choosen, item_id)
    }

    function removeData(data, value) {
        return data.filter((val) => val != value);
    }

    function addToFormItem() {
        last_number = 1
        $('#bodyPR').html('')
        item_id_choosen.forEach(e => {
            formRowPR(last_number++, e)
        });
    }
</script>