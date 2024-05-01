<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORT PRODUCTION DAILY</title>
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
function extractRowCodesWithCount($data)
{
    $rowCodes = array();

    foreach ($data as $item) {
        if (isset($item->row_code)) {
            $rowCodes[] = $item->row_code;
        } else {
            $rowCodes[] = '';
        }
    }
    // Menggunakan array_count_values untuk mendapatkan jumlah setiap nilai
    $rowCodeCounts = array_count_values($rowCodes);

    // Mengembalikan hasil dalam format yang diinginkan
    $result = array();
    foreach ($rowCodeCounts as $rowCode => $count) {
        if ($count > 34) {
            $sisaCount = $count - 34;
            $result[] = array('row_code' => $rowCode, 'count' => 34, 'data' => 'normal split');
            $result[] = array('row_code' => $rowCode, 'count' => $sisaCount, 'data' => 'split');
        } else {
            $result[] = array('row_code' => $rowCode, 'count' => $count, 'data' => 'normal');
        }
    }

    return $result;
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
?>

<body>
    <main>
        <?php
        $datagroup = extractRowCodesWithCount($datas->reportResultPersonDaily);
        $jumlahTable = 1;
        $splitNumber = 1;
        foreach ($datagroup as $k => $v) { ?>
            <h5 style="margin:0px;">Hari / Tanggal : <?= tgl_indo($date) ?></h5>
            <table style="width:100%;margin-top:10px;font-size:10px;" class="table_main">
                <tr style="text-align: center;">
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:20px;" rowspan="2">No</th>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:40px;" rowspan="2">EID</th>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:150xpx;" rowspan="2">Nama</th>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:30px;" rowspan="2">Group</th>
                    <?php foreach ($datas->reportResultPersonDaily[0]->data as $key => $value) {
                        $dateKey = key((array)$value);
                    ?>
                        <th class="th_main" style="width: 10%;padding:2px;font-size:10px;" colspan="2">Setoran <?= $dateKey ?></th>
                    <?php } ?>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:30px;" rowspan="2">Total</th>
                </tr>
                <tr style="text-align: center;">
                    <?php foreach ($datas->reportResultPersonDaily[0]->data as $key => $value) { ?>
                        <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:35px;">Qty</th>
                        <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:30px;">Jam</th>
                    <?php } ?>
                </tr>
                <?php
                $trueNumber = 1;
                if ($v['data'] == 'split') {
                    $a = $splitNumber;
                } else {
                    $a = 1;
                }
                $jumlahTotalGood = 0;
                $jumlahSetoranArray;
                unset($jumlahSetoranArray);
                foreach ($datas->reportResultPersonDaily as $key => $value) {
                    if ($value->row_code == $v['row_code'] && $a == $trueNumber) {
                        $classMain = '';
                        if (isOdd($a)) {
                            $classMain = 'bg-line';
                        }
                ?>
                        <tr>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:10px;"><?= $a++ ?></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"><?= $value->employee->eid ?></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: left;font-size:10px;padding-left:5px;"><b><?= shortenText(strtoupper($value->employee->name)) ?></b></td>
                            <?php if ($trueNumber == 1) { ?>
                                <td class="td_main" style="text-align: center;font-size:12px;" rowspan="<?= $v['count'] ?>"><?= $v['row_code'] ?></td>
                                <?php } else {
                                if ($v['data'] == 'split') {
                                    if ($trueNumber == $splitNumber) {
                                ?>
                                        <td class="td_main" style="text-align: center;font-size:12px;" rowspan="<?= $v['count'] ?>"><?= $v['row_code'] ?></td>
                            <?php }
                                }
                            } ?>
                            <?php foreach ($value->data as $key2 => $value2) {
                                $dateKey = key((array)$value2);
                            ?>
                                <?php if ($value2->{$dateKey}->total_good == 0) {
                                    $value2->{$dateKey}->total_good = '';
                                }
                                if ($value2->{$dateKey}->reject_left) {
                                    $classMainDanger = 'bg-danger';
                                } else {
                                    $classMainDanger = $classMain;
                                }
                                ?>
                                <td class="td_main <?= $classMainDanger ?>" style="text-align: center;font-size:10px;"><?= $value2->{$dateKey}->total_good ?></td>

                                <?php
                                if (!isset($jumlahSetoranArray[$dateKey])) {
                                    if ($value2->{$dateKey}->total_good == '') {
                                        $value2->{$dateKey}->total_good = 0;
                                    }
                                    $jumlahSetoranArray[$dateKey] = $value2->{$dateKey}->total_good;
                                } else {
                                    if ($value2->{$dateKey}->total_good == '') {
                                        $value2->{$dateKey}->total_good = 0;
                                    }
                                    $jumlahSetoranArray[$dateKey] = $jumlahSetoranArray[$dateKey] + $value2->{$dateKey}->total_good;
                                } ?>
                                <?php
                                $time = '';
                                if ($value2->{$dateKey}->time) {
                                    $time = date("H:i", strtotime($value2->{$dateKey}->time[0]));
                                } ?>
                                <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:10px;"><?= $time ?></td>
                            <?php } ?>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:10px;"><b><?= $value->total_good ?></b></td>
                            <?php $jumlahTotalGood = $jumlahTotalGood + $value->total_good ?>
                        </tr>
                <?php
                    }
                    if ($value->row_code == $v['row_code']) {
                        $trueNumber++;
                        if ($v['data'] == 'normal split') {
                            if ($trueNumber == $v['count'] + 1) {
                                $splitNumber = $a;
                                break;
                            }
                        }
                    }
                }
                // print_r($jumlahSetoranArray);
                ?>
                <tr style="text-align: center;">
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:20px;" colspan="4">Total</th>
                    <?php for ($i = 1; $i <= count($datas->reportResultPersonDaily[0]->data); $i++) { ?>
                        <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:20px;" colspan="2"><b><?= $jumlahSetoranArray[$i] ?></b></th>
                    <?php } ?>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:10px;width:20px;"><b><?= $jumlahTotalGood ?></b></th>
                </tr>
            </table>
            <?php $jumlahTable++; ?>
            <?php if ($jumlahTable <= count($datagroup)) { ?>
                <div class="page_break"></div>
            <?php } ?>
        <?php } ?>
    </main>
</body>

</html>