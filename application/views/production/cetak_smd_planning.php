<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $datas->data[0]->code ?></title>
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
            background-color: #F5F0BB;
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
        <h3>RENCANA PRODUKSI SMD - <?= $datas->data[0]->production_type->name ?></h3>
        <h3><?= tgl_indo(date("Y-m-d", strtotime($datas->data[0]->date_start))); ?> - <?= tgl_indo(date("Y-m-d", strtotime($datas->data[0]->date_end))); ?></h3>
        <!-- MAKER -->
        <?php
        $jenis_produksi = strtolower($datas->data[0]->production_type->name);
        ?>
        <table style="width:100%;margin-top:30px;margin-bottom:30px;font-size:7px;" class="table_main">
            <tr style="text-align: center">
                <th class="th_main" style="width: 10%;">TANGGAL</th>
                <th class="th_main" style="width:10%">MESIN</th>
                <th class="th_main" style="width:5%">SATUAN</th>
                <?php foreach ($datas->loadPage->$jenis_produksi->product as $k => $v) { ?>
                    <th class="th_main" style="text-align:center;"><?= $v->code ?></th>
                <?php } ?>
                <th class="th_main" style="text-align:center;">Total</th>
            </tr>
            <?php
            $jumMachine = 0;
            foreach ($datas->data[0]->detail as $key => $value) {
                foreach ($datas->loadPage->$jenis_produksi->machineGroupPlan as $kprod => $vprod) {
                    foreach ($vprod->machine_group_plan as $kmachine => $vmachine) {
                        if ($key == 0) {
                            $jumMachine++;
                        }
                    }
                }
                $loop = 0;
                foreach ($datas->loadPage->$jenis_produksi->machineGroupPlan as $kprod => $vprod) {
                    foreach ($vprod->machine_group_plan as $kmachine => $vmachine) {
            ?>
                        <tr>
                            <?php if ($loop == 0) { ?>
                                <td class="td_main" rowspan="<?= $jumMachine ?>" style="text-align: center;font-size:7px;"><?= $value->date ?></td>
                            <?php } ?>
                            <td class="td_main" style="text-align: center;font-size:7px;"><?= $vmachine->name ?></td>
                            <td class="td_main" style="text-align: center;font-size:7px;"><?= $vmachine->item_unit_name_plan ?></td>
                            <?php foreach ($datas->loadPage->$jenis_produksi->product as $k => $v) { ?>
                                <?php
                                $qty = '';
                                foreach ($value->data as $key2 => $value2) {
                                    foreach ($value2->data as $key3 => $value3) {
                                        foreach ($value3->data as $key4 => $value4) {
                                            if ($value4->product->id == $v->id && $vmachine->id == $value3->machine->id) {
                                                if ($qty == '') {
                                                    $qty = $value4->qty;
                                                }
                                            }
                                        }
                                    }
                                } ?>
                                <td class="th_main" style="text-align:center;font-size:7px;"><?= $qty ?></td>
                            <?php } ?>
                            <td class="th_main" style="text-align:center;font-size:7px;"></td>
                        </tr>
            <?php $loop++;
                    }
                }
            } ?>
        </table>
        <table style="width: 100%;">
            <tr style="vertical-align: top;">
                <td style="width: 50%;">
                    <div style="text-align: left;">
                        <b style="margin-bottom: 10px;">CATATAN :</b>
                        <div style="word-wrap: break-word;"></div>
                    </div>
                </td>
                <td style="width: 50%;text-align:center;">
                    <b style="font-size:14px;">SCAN QRCODE</b>
                    <p style="margin: 0px;margin-bottom:10px;">Scan untuk Melihat Persetujuan</p>
                    <img src="<?= base64_decode(str_replace(' ', '', $qrcode)) ?>" style="width:100px; height:100px">
                    <!-- <div style="width:100px; height:100px; margin-top:15px;text-align:center;margin:0 auto;display:none;"></div> -->
                </td>
            </tr>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
    </main>
</body>

</html>