<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>WORK PLAN <?= $datas->productionPlan->code ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Nunito';
            font-family: 'Nunito', sans-serif;
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
            padding: 1rem 1rem;
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
        <h3>WORK PLAN</h3>
        <?php
        $start_date = $datas->productionPlan->date_start;
        $end_date = $datas->productionPlan->date_end;

        $date_range = [];
        $current_date = strtotime($start_date);

        while ($current_date <= strtotime($end_date)) {
            $date_range[] = date('Y-m-d', $current_date);
            $current_date = strtotime('+1 day', $current_date);
        }
        ?>
        <table style="width:100%;margin-top:30px;margin-bottom:30px;font-size:10px;" class="table_main">
            <tr style="text-align: center;">
                <th class="th_main" style="width: 10%;padding:15px;font-size:12px;">Machine | Date</th>
                <?php for ($i = 0; $i < count($date_range); $i++) { ?>
                    <th class="th_main" style="width:10%;padding:15px;font-size:12px;"><?= $date_range[$i] ?></th>
                <?php } ?>
            </tr>
            <?php
            foreach ($datas->machineType as $key => $value) {
            ?>
                <tr>
                    <td class="td_main" style="text-align: left;font-size:10px;" colspan="<?= count($date_range) + 1 ?>"><?= $value->name ?></td>
                </tr>
                <?php
                foreach ($datas->machine as $key2 => $value2) {
                    if ($value->id == $value2->machine_type_id) { ?>
                        <tr>
                            <td class="td_main" style="text-align: center;font-size:10px;"><?= $value2->name ?></td>
                            <?php for ($i = 0; $i < count($date_range); $i++) { ?>
                                <td class="td_main" style="text-align: center;vertical-align:top;">
                                    <?php
                                    foreach ($datas->workPlan as $k => $v) {
                                        if ($v->date == $date_range[$i]) {
                                            foreach ($v->work_plan->shift_qc as $k2 => $v2) {
                                                foreach ($v2->shift_mechanic as $k3 => $v3) {
                                                    foreach ($v3->shift_machine as $k4 => $v4) {
                                                        if ($v4->machine->id == $value2->id) {
                                    ?>
                                                            <div class="card bg-shift-<?= $v2->shift->id ?>" style="margin-bottom:2px;">
                                                                <div class="card-body" style="text-align: left;">
                                                                    <b><?= date('H:i', strtotime($v2->shift->start)) ?> - <?= date('H:i', strtotime($v2->shift->end)) ?></b>
                                                                    <br>
                                                                    <?php foreach ($v4->products as $k5 => $v5) { ?>
                                                                        <p style="margin:0px;"><?= $v5->product->alias ?> (<?= $v5->qty ?>)</p>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                    <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    } ?>
                                </td>
                            <?php } ?>
                        </tr>

                <?php }
                } ?>
            <?php } ?>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
    </main>
</body>

</html>