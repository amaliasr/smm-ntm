<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORT PRODUCTION DAILY VERPACK</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> -->
    <style type="text/css">
        body {
            /* font-family: 'Nunito';
            font-family: 'Nunito', sans-serif; */
            font-family: Arial, sans-serif;
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
            padding: 1px;
            vertical-align: middle;
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .bg_color_blue {
            background-color: #CEE5D0;
        }

        .bg_color_yellow {
            background-color: #FFE162;
        }

        .th_main {
            padding: 5px;
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
            margin-top: 10px;
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
            margin-top: 20px;
            margin-bottom: 10px;
            margin-left: 30px;
            margin-right: 30px;
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

        .card {
            position: relative;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 2px;
            padding-left: 10px;
        }

        .bg-shift-42 {
            background-color: #9DB2BF !important;
            border-width: 2px;
            border-color: #1D5B79;
        }

        .bg-shift-39 {
            background-color: #EA906C !important;
            border-width: 2px;
            border-color: #B31312;
        }

        .bg-shift-44 {
            background-color: #526D82 !important;
            color: white;
            border-width: 2px;
            border-color: #1D5B79;
        }

        .bg-shift-41 {
            background-color: #B31312 !important;
            color: white;
            border-width: 2px;
            border-color: #470707;
        }

        .bg-line {
            background-color: #d7f0fc !important;
        }

        .bg-danger {
            background-color: #ec9797 !important;
        }
    </style>
</head>
<?php

use function PHPUnit\Framework\lessThan;

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
function isOdd($number)
{
    return $number % 2 !== 0;
}
function shortenText($text, $length = 20)
{
    // Menggunakan substr untuk memotong string
    $shortenedText = substr($text, 0, $length);

    // Menambahkan tanda elipsis jika panjang asli melebihi panjang yang diinginkan
    if (strlen($text) > $length) {
        $shortenedText .= '...';
    }

    return $shortenedText;
}
function findRowCode($data)
{
    return array_values(array_unique(array_column($data, 'row_code')));
}
?>

<body>
    <main>
        <?php
        $totalAll = [];
        $totalGood = []; ?>
        <?php
        $rowCode = findRowCode($datas->reportResultPersonDaily);
        ?>
        <?php for ($k = 0; $k < count($rowCode); $k++) { ?>
            <h3 style="margin:0px;">Hari / Tanggal : <?= tgl_indo($date) ?></h3>
            <?php if ($k == 0) { ?>
                <table style="margin-top:10px;font-size:10px;width:100%;margin-bottom:10px;margin-top:10px" class="table_main">
                    <tr style="text-align: center;">
                        <th class="th_main bg-danger" style="padding:5px;font-size:10px;width:10% !important;">Brand</th>
                        <?php foreach ($datas->reportResultPersonDaily as $key => $value) {
                            foreach ($value->results as $keyItem => $item) {
                                if ($key == 0) {
                                    $elabel = '';
                                    if ($item->item_product->label) {
                                        $elabel = $item->item_product->label . ' ';
                                    }
                                    $totalAll[$keyItem] = 0;
                                    if (!$item->label) {
                                        $hasilLabel = ' ' . $elabel . '<br>' . $item->machine_step_label;
                                    } else {
                                        $hasilLabel = ' ' . $elabel . '<br>' . $item->label;
                                    } ?>
                                    <th class="th_main bg-danger" style="padding:5px;font-size:10px;"><?= $item->product->code . '' .  $hasilLabel ?></th>
                        <?php }
                                $totalAll[$keyItem] += $item->qty_rpp;
                            }
                        } ?>
                    </tr>
                    <tr style="text-align: center;">
                        <td class="td_main" style="text-align: center;font-size:10px;">Total All</td>
                        <?php
                        for ($i = 0; $i < count($totalAll); $i++) { ?>
                            <td class="td_main" style="text-align: center;font-size:10px;"><?= number_format($totalAll[$i]) ?></td>
                        <?php
                        } ?>
                    </tr>
                </table>
            <?php } ?>
            <h3 style="margin:0px;">No. Meja : <b><?= $rowCode[$k] ?></b></h3>
            <table style="margin-top:10px;font-size:10px;" class="table_main">
                <tr style="text-align: center;">
                    <th class="th_main" style="padding:5px;font-size:10px;width:10% !important;">No</th>
                    <th class="th_main" style="padding:5px;font-size:10px;width:25px !important;">EID</th>
                    <th class="th_main" style="padding:5px;font-size:10px;width:40px !important;">Nama</th>
                    <th class="th_main" style="padding:5px;font-size:10px;width:10% !important;">#</th>
                    <?php foreach ($datas->reportResultPersonDaily[0]->results as $key => $value) {
                        $elabel = '';
                        if ($value->item_product->label) {
                            $elabel = $value->item_product->label . ' ';
                        }
                        $totalGood[$key] = 0;
                        if (!$value->label) {
                            $hasilLabel = ' ' . $elabel . '<br>' . $value->machine_step_label;
                        } else {
                            $hasilLabel = ' ' . $elabel . '<br>' . $value->label;
                        }
                    ?>
                        <th class="th_main" style="padding:5px;font-size:10px;width:45px !important;"><?= $value->product->code . '' . $hasilLabel ?></th>
                    <?php } ?>
                </tr>
                <?php
                $a = 1;
                foreach ($datas->reportResultPersonDaily as $key => $value) {
                    if ($rowCode[$k] != $value->row_code) continue;
                    $classMain = '';
                    if (isOdd($a)) {
                        $classMain = 'bg-line';
                    }
                ?>
                    <tr>
                        <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:10px;"><?= $a++ ?></td>
                        <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:8px;"><?= $value->employee->eid ?></td>
                        <td class="td_main <?= $classMain ?>" style="text-align: left;font-size:10px;padding-left:5px;"><b><?= shortenText(strtoupper($value->employee->name)) ?></b></td>
                        <?php
                        $code = '-';
                        if ($value->row_code) {
                            $code = $value->row_code;
                        }
                        ?>
                        <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:8px;"><?= $code ?></td>
                        <?php foreach ($value->results as $keyItem => $item) {
                            $totalGood[$keyItem] += $item->qty_rpp;
                        ?>
                            <?php
                            if ($item->reject) {
                                $classMainDanger = 'bg-danger';
                            } else {
                                $classMainDanger = $classMain;
                            }
                            ?>
                            <td class="td_main <?= $classMainDanger ?>" style="text-align: center;font-size:10px;"><?= $item->qty_rpp ?></td>
                        <?php } ?>
                    </tr>
                <?php
                } ?>
                <tr style="text-align: center;">
                    <th class="th_main" style="padding:2px;font-size:10px;width:20px;" colspan="4">Total</th>
                    <?php for ($i = 0; $i < count($totalGood); $i++) { ?>
                        <th class="th_main" style="padding:2px;font-size:10px;width:20px;"><b><?= $totalGood[$i] ?></b></th>
                    <?php } ?>
                </tr>
            </table>
            <?php if ($k != count($rowCode) - 1) { ?>
                <div class="page_break"></div>
            <?php } ?>
        <?php } ?>
    </main>
</body>

</html>