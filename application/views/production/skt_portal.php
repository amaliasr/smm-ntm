<!XLSTYPE html>
    <html>

    <head>
        <title>JSPrintManager</title>
        <meta charset="utf-8" />

    </head>

    <body>

        <div style="text-align:center">
            <h1>Multiple Image Printing with Duplex from Javascript</h1>
            <hr />
            <fieldset>
                <legend><strong>Image Files to print</strong></legend>

                <label>
                    Local Image file:
                    <input id="input-local-img-file" type="file" accept=".jpg,.png" multiple />
                </label>
            </fieldset>
            <br /><br />
            <fieldset>
                <legend><strong>Target Printer</strong></legend>
                <label>Printer:</label>
                <select id="printerName">
                </select>
            </fieldset>
            <br />
            <button onclick="doPrinting();">
                <h2>Print Images Now...</h2>
            </button>

        </div>

        <script src="<?= base_url(); ?>assets/JSPrintManager.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>




        <script>
            var clientPrinters = null;
            var _this = this;

            //WebSocket settings
            JSPM.JSPrintManager.auto_reconnect = true;
            JSPM.JSPrintManager.start();
            JSPM.JSPrintManager.WS.onStatusChanged = function() {
                if (jspmWSStatus()) {
                    //get client installed printers
                    JSPM.JSPrintManager.getPrinters().then(function(printersList) {
                        clientPrinters = printersList;
                        var options = '';
                        for (var i = 0; i < clientPrinters.length; i++) {
                            options += '<option>' + clientPrinters[i] + '</option>';
                        }
                        $('#printerName').html(options);
                    });
                }
            };

            //Check JSPM WebSocket status
            function jspmWSStatus() {
                if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Open)
                    return true;
                else if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Closed) {
                    console.warn('JSPrintManager (JSPM) is not installed or not running! Download JSPM Client App from https://neodynamic.com/downloads/jspm');
                    return false;
                } else if (JSPM.JSPrintManager.websocket_status == JSPM.WSStatus.Blocked) {
                    alert('JSPM has blocked this website!');
                    return false;
                }
            }

            //Do printing...
            function doPrinting() {
                if (jspmWSStatus()) {

                    //create ClientPrintJob
                    var cpj = new JSPM.ClientPrintJob();

                    //Set Printer info
                    var myPrinter = new JSPM.InstalledPrinter($('#printerName').val());
                    myPrinter.duplex = JSPM.DuplexMode.Default;
                    cpj.clientPrinter = myPrinter;

                    //Set Image file
                    var local_file = $("#input-local-img-file").prop('files');
                    var files = [];

                    if (local_file && local_file.length > 0) {
                        for (let i = 0; i < local_file.length; i++) {
                            files.push(new JSPM.PrintFile(local_file[i], JSPM.FileSourceType.BLOB, local_file[i], 1));
                        }
                    } else {
                        alert('Must specify a local image file!');
                        return;
                    }

                    //create PrintFileGroup with the specified files
                    let myFileGroup = new JSPM.PrintFileGroup(files, "MyFileGroup", 1);

                    //add file group to ClientPrintJob
                    cpj.files.push(myFileGroup);

                    //Send print job to printer!
                    cpj.sendToClient();

                }
            }
        </script>
    </body>

    </html>