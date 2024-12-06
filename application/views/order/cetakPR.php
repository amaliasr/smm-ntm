<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $datas->no_pr ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
        }

        .table_main,
        .th_main,
        .td_main {
            border: 1px solid black;
            border-color: #444941;
            border-collapse: collapse;
        }

        .td_main {
            font-size: 11px;
            padding: 5px;
            vertical-align: middle;

        }

        .bg_color_blue {
            background-color: #CEE5D0;
        }

        .bg_color_yellow {
            background-color: #FFE162;
        }

        .th_main {
            padding: 10px;
            height: 10px;
            text-align: center;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .page_break {
            page-break-before: always;
        }

        @page {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        body {
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body style="padding:10px;text-align: center;">
    <table style="width: 100%;margin-bottom:20px;">
        <tr style="border-bottom: 1px black;">
            <td style="width: 33%;">
                <?php
                $image = base_url() . 'assets/image/logo/SMM.png';
                // Read image path, convert to base64 encoding
                $imageData = base64_encode(file_get_contents($image));

                // Format the image SRC:  data:{mime};base64,{data};
                $src = 'data:image/png;base64,' . $imageData;
                ?>
                <img src="<?= $src ?>" style="height:70px;">
            </td>
            <td style="width: 33%;text-align: center;">
                <b style="text-align: center;font-size:14px;">
                    PT. SINAR MAHKOTA MAS
                    <br>
                    Jalan Bandulan Barat No. 37
                    <br>
                    Sukun - Malang
                </b>
            </td>
            <td style="width: 33%;"></td>
        </tr>
    </table>
    <hr style="height:1px;border:none;color:#333;background-color:#333;margin-bottom:20px;" />
    <b style="text-align: center;font-size:12px;">PURCHASE REQUISITION</b>
    <table style="width: 100%;margin-top:20px;">
        <tr>
            <td style="width: 50%;vertical-align: top;">
                <table style="width: 100%;">
                    <tr>
                        <td style="width: auto;">FROM</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $datas->name ?></td>
                    </tr>
                    <tr>
                        <td style="width: auto;">TO</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $datas->to ?></td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%;vertical-align: top;">
                <table style="width: 100%;">
                    <tr>
                        <td style="width: auto;">NO</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $datas->no_pr ?></td>
                    </tr>
                    <tr>
                        <td style="width: auto;">DATE</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $datas->date ?></td>
                    </tr>
                    <tr>
                        <td style="width: auto;">COST CENTRE</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $datas->cost_center ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width:100%;margin-top:10px;margin-bottom:20px;" class="table_main">
        <tr style="text-align: center">
            <th class="th_main" rowspan="2">NO</th>
            <th class="th_main" rowspan="2">DESCRIPTION</th>
            <th class="th_main" rowspan="2">QTY</th>
            <th class="th_main" rowspan="2">UNIT</th>
            <th class="th_main" colspan="2">ESTIMATED</th>
            <th class="th_main" rowspan="2">NOTES</th>
        </tr>
        <tr style="text-align: center">
            <th class="th_main">UNIT PRICE</th>
            <th class="th_main">EXTENDED PRICE</th>
        </tr>
        <?php foreach ($detail as $key => $value) { ?>
            <tr>
                <td class="td_main" style="text-align: center;"><?= $key + 1 ?></td>
                <td class="td_main"><?= $value->item_name ?></td>
                <td class="td_main"><?= $value->qty ?></td>
                <td class="td_main"><?= $value->unit_name ?></td>
                <td class="td_main" style="text-align:right;"><?= number_format($value->unit_price) ?></td>
                <td class="td_main" style="text-align:right;"><?= number_format($value->extended_price) ?></td>
                <td class="td_main"><?= $value->note ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td class="td_main" colspan="5" style="text-align: right;font-size:14px;padding-right:10px;"><b>Total</b></td>
            <td class="td_main" style="text-align:right;font-size:14px;"><b><?= number_format($datas->grand_total) ?></b></td>
            <td class="td_main"></td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr style="vertical-align: top;">
            <td style="width: 50%;">
                <div style="text-align: left;">
                    <b style="margin-bottom: 5px;">JUSTIFICATION :</b>
                    <?php if (!$datas->justification) {
                        $datas->justification = '-';
                    } ?>
                    <p style="word-wrap: break-word;"><?= $datas->justification ?></p>
                    <b style="margin-bottom: 10px;margin-top:30px;">APPROVAL :</b>
                    <table style="width: 100%;margin-top:10px;">
                        <tr style="vertical-align: top;">
                            <?php $a = 0;
                            foreach (($datas->data_approval2) as $key => $value) {
                            ?>
                                <td>
                                    <table style="width: 100%;">
                                        <tr style="vertical-align: middle;">
                                            <td rowspan="2" style="width:40px;text-align:left;padding:0px;margin:0px;">
                                                <?php if ($value[0]->is_accept == 'Accepted') {
                                                    $images = base_url() . 'assets/image/logo/check.png';
                                                ?>
                                                    <!-- <span class="check-icon">&#xf00c;</span> -->

                                                <?php } else if ($value[0]->is_accept == 'Rejected') {
                                                    $images = base_url() . 'assets/image/logo/times.png';
                                                ?>
                                                    <!-- <span class="times-icon">&#xf00d;</span> -->
                                                <?php } else {
                                                    $images = base_url() . 'assets/image/logo/clock.png';
                                                ?>
                                                    <!-- <span class="clock-icon">&#xf017;</span> -->
                                                <?php } ?>
                                                <?php
                                                // Read image path, convert to base64 encoding
                                                $imageDatas = base64_encode(file_get_contents($images));
                                                // Format the image SRC:  data:{mime};base64,{data};
                                                $srcs = 'data:image/png;base64,' . $imageDatas;
                                                ?>
                                                <img src="<?= $srcs ?>" style="width:50%;">
                                            </td>
                                            <td style="padding:0px;margin:0px;">
                                                <b>
                                                    <?php
                                                    if ($a == 0) {
                                                        echo 'Checked';
                                                    } else {
                                                        echo 'Approved';
                                                    }
                                                    ?>
                                                </b>
                                            </td>
                                        </tr>
                                        <tr style="vertical-align: middle;">
                                            <td style="padding:0px;margin:0px;font-size:8px;">
                                                <?php if ($value[0]->is_accept == 'Accepted' || $value[0]->is_accept == 'Rejected') { ?>
                                                    <?php
                                                    $namaArr = explode(' ', $value[0]->user_name);

                                                    if (count($namaArr) >= 2) {
                                                        $duaKataDepan = $namaArr[0] . ' ' . $namaArr[1];
                                                        echo $duaKataDepan;
                                                    } else {
                                                        echo $value[0]->user_name;
                                                    }
                                                    ?>
                                                    <br>
                                                    <p style="margin: 0px;padding:0px;font-size:6px;"><?= date('d-m-Y H:i', strtotime($value[0]->date_approval)) ?></p>
                                                <?php } else { ?>
                                                    <i style="font-size:10px;color:grey;">Belum Ada</i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <br>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            <?php
                                $a++;
                            } ?>
                        </tr>
                    </table>
                </div>
            </td>
            <td style="width: 50%;text-align:center;">
                <b style="font-size:14px;">SCAN QRCODE</b>
                <p style="margin: 0px;margin-bottom:10px;">Scan untuk Melihat Approval</p>
                <img src="<?= base64_decode(str_replace(' ', '', $qrcode)) ?>" style="width:100px; height:100px">
                <!-- <div style="width:100px; height:100px; margin-top:15px;text-align:center;margin:0 auto;display:none;"></div> -->
            </td>
        </tr>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
    <script type="text/javascript">
        // var qrcode = new QRCode("qrcode", {
        //     text: 'http://192.168.10.156/smm-ntm',
        //     width: 100,
        //     height: 100,
        //     colorDark: "#000000",
        //     colorLight: "#ffffff",
        //     correctLevel: QRCode.CorrectLevel.H
        // });
        // var imgBase64Data = qrcode._oDrawing._elCanvas.toDataURL("image/png")
    </script>

</body>

</html>