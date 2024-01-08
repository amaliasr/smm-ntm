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

        .bg-yellow {
            background-color: #FFD966 !important;
        }

        .bg-blue {
            background-color: #9FC5E8 !important;
        }
    </style>
</head>
<?php

use function PHPUnit\Framework\lessThan;

$dataMaterial = [
    [
        'satuan' => 'KG',
        'material' => 'TEMBAKAU GBK',
        'jumlah' => 10,
    ],
    [
        'satuan' => 'LEMBAR',
        'material' => 'AMBRI',
        'jumlah' => 10,
    ],
    [
        'satuan' => 'LITER',
        'material' => 'PEMANIS',
        'jumlah' => 10,
    ],
];

$dataKaleng = [
    [
        'jenisKaleng' => 'MERAH MUDA TUTUP KOTAK',
        'ukuranKaleng1' => 0.36,
        'ukuranKaleng2' => 2.54,
        'tsg' => 2.18,
    ],
    [
        'jenisKaleng' => 'HIJAU & MERAH MUDA TUTUP BULAT YG BAGUS',
        'ukuranKaleng1' => 0.41,
        'ukuranKaleng2' => 2.54,
        'tsg' => 2.54,
    ],
    [
        'jenisKaleng' => 'BIRU & HIJAU KALENG LAMA',
        'ukuranKaleng1' => 0.33,
        'ukuranKaleng2' => 2.56,
        'tsg' => 2.23,
    ],
];
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
        if ($count > 40) {
            $sisaCount = $count - 40;
            $result[] = array('row_code' => $rowCode, 'count' => 40, 'data' => 'normal split');
            $result[] = array('row_code' => $rowCode, 'count' => $sisaCount, 'data' => 'split');
        } else {
            $result[] = array('row_code' => $rowCode, 'count' => $count, 'data' => 'normal');
        }
    }

    return $result;
}
function extractRowCodesWithCountSplit($data)
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
    $rowCodeCountReal = array_count_values($rowCodes);
    $rowCodeCounts = array_count_values($rowCodes);
    $a = 0;
    foreach ($rowCodeCounts as $rowCode => $count) {
        if ($a == 0) {
            $rowCodeCounts[$rowCode] = $rowCodeCounts[$rowCode] + 10;
        } else {
            $rowCodeCounts[$rowCode] = $rowCodeCounts[$rowCode] + 4;
        }
        $a++;
    }

    // Mengembalikan hasil dalam format yang diinginkan
    $result = array();
    $numAkumulasi = 0;
    foreach ($rowCodeCounts as $rowCode => $count) {
        $akumulasiBefore = $numAkumulasi;
        $numAkumulasi = $numAkumulasi + $count;
        if ($numAkumulasi > 49 || (($numAkumulasi - $akumulasiBefore) < 5)) {
            // potong;
            $awalCount = $rowCodeCountReal[$rowCode] - ($numAkumulasi - 49);
            $sisaCount = $numAkumulasi - 49;
            $result[] = array('row_code' => $rowCode, 'count' => $awalCount, 'data' => 'normal split');
            $result[] = array('row_code' => $rowCode, 'count' => $sisaCount, 'data' => 'split');
            $numAkumulasi = $sisaCount;
        } else {
            $result[] = array('row_code' => $rowCode, 'count' => $rowCodeCountReal[$rowCode], 'data' => 'normal');
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
        <h5 style="margin:0px;">Hari / Tanggal : <?= tgl_indo($date) ?></h5>
        <table style="width:100%;margin-top:10px;font-size:7px;margin-bottom:20px;" class="table_main">
            <tr style="text-align: center;">
                <th class="th_main" style="padding:2px;font-size:7px;" rowspan="2">SATUAN</th>
                <th class="th_main" style="padding:2px;font-size:7px" rowspan="2">MATERIAL</th>
                <th class="th_main" style="padding:2px;font-size:7px" colspan="3">SISA AWAL</th>
                <th class="th_main" style="padding:2px;font-size:7px;">TERIMA</th>
                <th class="th_main" style="padding:2px;font-size:7px;" rowspan="2">PEMAKAIAN</th>
                <th class="th_main" style="padding:2px;font-size:7px;" colspan="3">SISA AKHIR</th>
                <th class="th_main" style="padding:2px;font-size:7px;" rowspan="2">WASTE<br>AMBRI<br>RUSAK</th>
                <th class="th_main" style="padding:2px;font-size:7px;" rowspan="2">WASTE<br>TEMB.<br>SAPON<br>(KG)</th>
                <th class="th_main bg-blue" style="padding:2px;font-size:7px;" rowspan="2">WARNA KALENG</th>
                <th class="th_main bg-blue" style="padding:2px;font-size:7px;" rowspan="2">UKURAN<br>KALENG</th>
                <th class="th_main bg-blue" style="padding:2px;font-size:7px;" rowspan="2">UKURAN<br>KALENG</th>
                <th class="th_main bg-blue" style="padding:2px;font-size:7px;" rowspan="2">MURNI<br>TSG AJA</th>
            </tr>
            <tr style="text-align: center;">
                <th class="th_main" style="padding:2px;font-size:7px;">DI ORANG<br>GILING</th>
                <th class="th_main" style="padding:2px;font-size:7px;">DI GUDANG<br>KECIL</th>
                <th class="th_main" style="padding:2px;font-size:7px;">TOTAL</th>
                <th class="th_main" style="padding:2px;font-size:7px;">DARI GUDANG BESAR</th>
                <th class="th_main" style="padding:2px;font-size:7px;">DI ORANG<br>GILING</th>
                <th class="th_main" style="padding:2px;font-size:7px;">DI GUDANG<br>KECIL</th>
                <th class="th_main" style="padding:2px;font-size:7px;">TOTAL</th>
            </tr>
            <?php $a = 0;
            foreach ($dataMaterial as $material) { ?>
                <tr>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $material['satuan'] ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $material['material'] ?></td>
                    <?php for ($i = 0; $i < $material['jumlah']; $i++) { ?>
                        <td class="td_main" style="text-align: center;font-size:7px;"></td>
                    <?php } ?>
                    <?php if (isset($dataKaleng[$a])) { ?>
                        <td class="td_main bg-blue" style="padding:2px;font-size:7px;"><?= $dataKaleng[$a]['jenisKaleng'] ?></td>
                        <td class="td_main bg-blue" style="text-align: center;padding:2px;font-size:7px;"><?= $dataKaleng[$a]['ukuranKaleng1'] ?></td>
                        <td class="td_main bg-blue" style="text-align: center;padding:2px;font-size:7px;"><?= $dataKaleng[$a]['ukuranKaleng2'] ?></td>
                        <td class="td_main bg-blue" style="text-align: center;padding:2px;font-size:7px;"><?= $dataKaleng[$a]['tsg'] ?></td>
                    <?php } ?>
                </tr>
            <?php $a++;
            } ?>
        </table>
        <?php
        $datagroup = extractRowCodesWithCount($datas->resultProductWorkerTotal);
        $datagroupSplit = extractRowCodesWithCountSplit($datas->resultProductWorkerTotal);
        // print_r($datagroupSplit);
        $jumlahTable = 1;
        $splitNumber = 1;
        foreach ($datagroup as $k => $v) { ?>
            <table style="width:100%;margin-top:10px;font-size:7px;" class="table_main">
                <tr style="text-align: center;">
                    <th class="th_main" style="width: 10%;padding:2px;font-size:7px;width:20px;">No</th>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:7px;width:150xpx;">Nama</th>
                    <th class="th_main" style="width: 10%;padding:2px;font-size:7px;width:30px;">Group</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">SISA AWAL<br>TSG</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">TERIMA<br>TSG</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">PEMAKAIAN TSG</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">SISA AKHIR TSG</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">RATA2 BERAT<br>PER BTG</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">SISA AWAL<br>AMBRI</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">PENGAMBILAN<br>AMBRI (BTG)</th>
                    <th class="th_main bg-yellow" style="padding:2px;font-size:7px;">SISA<br>AKHIR<br>AMBRI</th>
                    <th class="th_main bg-danger" style="padding:2px;font-size:7px;">HASIL<br>PRODUKSI</th>
                    <th class="th_main bg-danger" style="padding:2px;font-size:7px;">AMBRI RUSAK<br>(LBR)</th>
                </tr>
                <?php
                $trueNumber = 1;
                if ($v['data'] == 'split') {
                    $a = $splitNumber;
                } else {
                    $a = 1;
                }
                $jumlahTotalGood = 0;
                foreach ($datas->resultProductWorkerTotal as $key => $value) {
                    if ($value->row_code == $v['row_code'] && $a == $trueNumber) {
                        $classMain = '';
                        if (isOdd($a)) {
                            $classMain = 'bg-line';
                        }
                ?>
                        <tr>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"><?= $a++ ?></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: left;font-size:7px;padding-left:5px;"><b><?= shortenText(strtoupper($value->employee->name)) ?></b></td>
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
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"><?= $value->qty ?></td>
                            <td class="td_main <?= $classMain ?>" style="text-align: center;font-size:7px;"></td>
                            <?php $jumlahTotalGood = $jumlahTotalGood + $value->qty ?>
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
                ?>
            </table>
            <?php $jumlahTable++; ?>
            <?php if ($jumlahTable <= count($datagroup)) { ?>
                <!-- $v['data'] == 'normal split') -->
                <div class="page_break"></div>
            <?php } else { ?>
                <table style="width:70%;margin-top:20px;font-size:7px;" class="table_main">
                    <tr style="text-align: center;">
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px;" rowspan="2">SISA AWAL</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px" rowspan="2">TERIMA<br>BATANGAN DRI<br>WAGIR</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px" rowspan="2">HASIL PRODUKSI</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px" colspan="2">PEMAKAIAN</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px" rowspan="2">SISA AKHIR</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px" rowspan="2">WASTE BTG DI<br>BANDULAN</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px" rowspan="2">WASTE BTGAN DI<br>WAGIR</th>
                    </tr>
                    <tr style="text-align: center;">
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px;">AK 12 SKT</th>
                        <th class="th_main bg-blue" style="padding:2px;font-size:7px;">AK 16 SKT</th>
                    </tr>
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <tr>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                            <td class="td_main" style="text-align: center;font-size:7px;height:10px;"></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        <?php } ?>
    </main>
</body>

</html>