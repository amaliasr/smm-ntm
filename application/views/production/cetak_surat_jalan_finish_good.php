<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $datas->machineTransfer->document_number ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Nunito';
            /* font-family: 'Nunito', sans-serif; */
            font-size: 11px;
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
            padding: 3px;
            vertical-align: middle;
        }

        .bg_color_blue {
            background-color: #CEE5D0;
        }

        .bg_color_yellow {
            background-color: #FFE162;
        }

        .th_main {
            padding: 3px;
            height: 10px;
            text-align: center;
            word-wrap: break-word;
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

        .bg-skm-0 {
            background-color: #73A9AD;
        }

        .bg-skm-1 {
            background-color: #B3C890;
        }

        .bg-skm-2 {
            background-color: #FCFFB2;
        }

        @page {
            margin-top: 90px;
            margin-bottom: 70px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            height: 70px;
        }

        header {
            position: fixed;
            top: -60px;
            height: 100px;
        }

        body {
            margin-top: 70px;
            margin-bottom: 50px;
        }

        table {
            page-break-inside: always;
        }

        table tr {
            page-break-inside: always;
        }

        table tr td {
            page-break-inside: always;
        }

        .bg-pita-other-0 {
            background-color: #F2DF3A !important;
        }

        .bg-pita-other-1 {
            background-color: #3AB4F2 !important;
        }

        .bg-pita-other-2 {
            background-color: #0078AA !important;
        }
    </style>
</head>
<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

<body style="padding:10px;text-align: center;">
    <header>
        <table class="table_main" style="width: 100%;margin-bottom:5px;">
            <tr>
                <td class="td_main" rowspan="2" style="width: 15%;text-align: center;">
                    <?php
                    $image = base_url() . 'assets/image/logo/SMM.png';
                    // Read image path, convert to base64 encoding
                    $imageData = base64_encode(file_get_contents($image));
                    // Format the image SRC:  data:{mime};base64,{data};
                    $src = 'data:image/png;base64,' . $imageData;
                    ?>
                    <img src="<?= $src ?>" style="height:70px;">
                </td>
                <td class="td_main" style="width: 58%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:20px;">PT. SINAR MAHKOTA MAS</span></b>
                    </p>
                </td>
                <!-- <td class="td_main" style="width: 5%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">No. Doc</span></b>
                    </p>
                </td>
                <td class="td_main" style="width: 2%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="td_main" style="width: 20%;">
                    <p>
                        <b><span style="font-size:10px;"><?php echo $datas->machineTransfer->document_number ?></span></b>
                    </p>
                </td> -->
                <td class="td_main" rowspan="2" style="width: 15%;text-align: center;">
                    <img src="<?= base64_decode(str_replace(' ', '', $qrcode)) ?>" style="width:100px; height:100px">
                </td>
            </tr>
            <tr>
                <td class="td_main" rowspan="1" style="width: 58%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:15px;">FORM SERAH TERIMA FG LOGISTIC</span></b>
                    </p>
                </td>
                <!-- <td class="td_main" style="width: 15%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Tanggal</span></b>
                    </p>
                </td>
                <td class="td_main" style="width: 2%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="td_main" style="width: 20%;">
                    <p>
                        <b><span style="font-size:10px;"><?php echo tgl_indo(date('Y-m-d', strtotime($datas->machineTransfer->send_at))) ?></span></b>
                    </p>
                </td> -->
            </tr>
        </table>
        <table style="margin-bottom:5px; margin-top: 20px;">
            <tr style="margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px;">
                <td class="" style="width: 5%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px">
                        <b><span style="font-size:10px;">No. Doc</span></b>
                    </p>
                </td>
                <td class="" style="width: 2%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="" style="width: 20%;">
                    <p style="margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px">
                        <b><span style="font-size:10px;"><?php echo $datas->machineTransfer->document_number ?></span></b>
                    </p>
                </td>
            </tr>
            <tr style="margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px;">
                <td class="" style="width: 15%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px">
                        <b><span style="font-size:10px;">Tanggal</span></b>
                    </p>
                </td>
                <td class="" style="width: 2%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="" style="width: 20%;">
                    <p style="margin-bottom:0px;margin-top:0px;padding-top:0px;padding-bottom:0px">
                        <b><span style="font-size:10px;"><?php echo tgl_indo(date('Y-m-d', strtotime($datas->machineTransfer->send_at))) ?></span></b>
                    </p>
                </td>
            </tr>
        </table>
        <table class="table_main" style="width: 100%;margin-bottom:5px; margin-top: 10px;">
            <tr>
                <th class="th_main" rowspan="2" style="width: 10%;">No</th>
                <th class="th_main" rowspan="2" style="width: 20%;">Kode Item</th>
                <th class="th_main" rowspan="2" style="width: 50%;">Brand</th>
                <th class="th_main" rowspan="2" style="width: 20%;">Tahun Stok</th>
                <th class="th_main" colspan="2" style="width: 25%;">Box</th>
                <th class="th_main" colspan="2" style="width: 25%;">Bale</th>
            </tr>
            <tr>
                <th class="th_main" style="width: 20%;">QTY</th>
                <th class="th_main" style="width: 20%;">Checker</th>
                <th class="th_main" style="width: 20%;">QTY</th>
                <th class="th_main" style="width: 20%;">Checker</th>
            </tr>
            <?php
            $no = 1;
            foreach ($datas->machineTransfer->products as $key => $value) {
            ?>
                <tr>
                    <td class="td_main" style="text-align: center;"><?= $no ?></td>
                    <td class="td_main"><?= $value->product->code ?></td>
                    <td class="td_main"><?= $value->product->name ?></td>
                    <td class="td_main"><?= $value->stok_year->name ?></td>
                    <?php
                    foreach ($datas->resultStockTemplate as $k => $v) {
                        $qty = '';
                        $dataDetail  = [];
                        foreach ($value->details as $k2 => $v2) {
                            if ($v->id == $v2->unit_id) {
                                if (count($v2->machine_transfer_detail_requests)) {
                                    $qty = number_format($v2->machine_transfer_detail_requests[0]->qty, 0);
                                }
                            }
                        }
                    ?>
                        <td class="td_main" style="text-align: center;"><?= $qty ?></td>
                        <td class="td_main" style="text-align: center;"></td>
                    <?php } ?>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>
        <table class="" style="width: 100%;margin-bottom:5px; margin-top: 50px;">
            <tr>
                <td class="" style="width: 50%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Diketahui oleh</span></b>
                    </p>
                </td>
                <td class="" style="width: 50%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Diterima oleh</span></b>
                    </p>
                </td>
                <td class="" style="width: 50%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Diserahkan oleh</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" style="width: 50%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
                <td class="" style="width: 50%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
                <td class="" style="width: 50%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
            </tr>
        </table>
    </header>
</body>

</html>