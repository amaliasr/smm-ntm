<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REPORT LEAVE PASS</title>
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
        <table style="width: 100%;margin-bottom:5px;">
            <tr style="border-bottom: 1px black;">
                <td style="width: 10%;">
                    <?php
                    $image = base_url() . 'assets/image/logo/SMM.png';
                    // Read image path, convert to base64 encoding
                    $imageData = base64_encode(file_get_contents($image));

                    // Format the image SRC:  data:{mime};base64,{data};
                    $src = 'data:image/png;base64,' . $imageData;
                    ?>
                    <img src="<?= $src ?>" style="height:70px;">
                </td>
                <td style="width: 80%;text-align: center;">
                    <p style="text-align: center;">
                        <b><span style="font-size:20px;">PT. SINAR MAHKOTA MAS</span></b>
                        <br>
                        <span style="font-size:12px;">Jalan Bandulan Barat No. 37 RT.008 RW.001</span>
                        <br>
                        <span style="font-size:12px;">Bandulan - Sukun - Malang</span>
                        <br>
                        <span style="font-size:12px;">Email : purchasing@pt-smm.com ; purcsmm@gmail.com</span>
                    </p>
                </td>
                <td style="width: 10%;"></td>
            </tr>
        </table>
        <hr style="height:2px;border:none;color:#333;background-color:#333;margin-bottom:20px;" />
    </header>
    <main>
        <h3 style="margin: 0px;">REPORT LEAVE PASS</h3>
        <h5 style="margin: 0px;"><?= tgl_indo(date("Y-m-d", strtotime($dateStart))); ?> - <?= tgl_indo(date("Y-m-d", strtotime($dateEnd))); ?></h5>
        <br>
        <table style="width:100%;margin-top:10px;font-size:7px;margin-bottom:20px;" class="table_main">
            <tr style="text-align: center;">
                <th class="th_main" style="padding:2px;font-size:7px;" rowspan="2">#</th>
                <th class="th_main" style="padding:2px;font-size:7px" rowspan="2">EID</th>
                <th class="th_main" style="padding:2px;font-size:7px" rowspan="2">NAMA</th>
                <th class="th_main" style="padding:2px;font-size:7px" rowspan="2">No. Meja</th>
                <th class="th_main" style="padding:2px;font-size:7px;" colspan="5">ISTIRAHAT</th>
                <th class="th_main" style="padding:2px;font-size:7px;" colspan="5">IBADAH</th>
            </tr>
            <tr style="text-align: center;">
                <?php for ($i = 0; $i < 2; $i++) { ?>
                    <th class="th_main" style="padding:2px;font-size:7px;">MENIT</th>
                    <th class="th_main" style="padding:2px;font-size:7px;">MENIT<br>TERLAMBAT</th>
                    <th class="th_main" style="padding:2px;font-size:7px;">FREQ</th>
                    <th class="th_main" style="padding:2px;font-size:7px;">FREQ<br>TERLAMBAT</th>
                    <th class="th_main" style="padding:2px;font-size:7px;">HARI YG<br>TERLAMBAT</th>
                <?php } ?>
            </tr>
            <?php $a = 1;
            foreach ($datas->reportLeavePassLog as $value) { ?>
                <tr>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $a++ ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->eid ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->name ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->row_code ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->minute_usage_istirahat ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->minutes_over_istirahat ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->freq_istirahat ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->freq_over_istirahat ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->total_day_over_istirahat ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->minute_usage_ibadah ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->minutes_over_ibadah ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->freq_ibadah ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->freq_over_ibadah ?></td>
                    <td class="td_main" style="text-align: center;font-size:7px;"><?= $value->total_day_over_ibadah ?></td>
                </tr>
            <?php } ?>
        </table>

    </main>
</body>

</html>