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
        $jumMachine = 0;
        $rowSplit = [];
        $jumlahRowSplit = [];
        foreach ($datas->data[0]->detail as $key => $value) {
            foreach ($datas->loadPage->$jenis_produksi->machineGroupPlan as $kprod => $vprod) {
                foreach ($vprod->machine_group_plan as $kmachine => $vmachine) {
                    if ($key == 0) {
                        $jumMachine++;
                    }
                    foreach ($value->data as $key2 => $value2) {
                        foreach ($value2->data as $key3 => $value3) {
                            foreach ($value3->data as $key4 => $value4) {
                                if (!isset($jumlahRowSplit[$value->date])) {
                                    $jumlahRowSplit[$value->date] = 0;
                                }
                                // check pita
                                if (count($value4->pita) > 1 && $vmachine->id == $value3->machine->id) {
                                    // split
                                    if ($rowSplit[$vmachine->id][$value->date] == '') {
                                        $rowSplit[$vmachine->id][$value->date] = 'rowspan="' . count($value4->pita) . '"';
                                        $jumlahRowSplit[$value->date] += (int)count($value4->pita) - 1;
                                    }
                                } else {
                                    $rowSplit[$vmachine->id][$value->date] = '';
                                    $jumlahRowSplit[$value->date] += 0;
                                }
                            }
                        }
                    }
                }
            }
        }
        // print_r($datas->loadPage->$jenis_produksi->product);
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
            foreach ($datas->data[0]->detail as $key => $value) {
                // print_r($rowSplit);
                $loop = 0;
                $color_skm = -1;
                $start_id_color_skm = 0;
                foreach ($datas->loadPage->$jenis_produksi->machineGroupPlan as $kprod => $vprod) {
                    foreach ($vprod->machine_group_plan as $kmachine => $vmachine) {
                        if ($start_id_color_skm != $vmachine->machine_sub_type_id) {
                            $start_id_color_skm = $vmachine->machine_sub_type_id;
                            $color_skm++;
                        }
                        $produkPita = [];
                        $produkPitaId = [];
                        $totalMachine = 0;
            ?>
                        <tr>
                            <?php if ($loop == 0) { ?>
                                <td class="td_main" rowspan="<?= ($jumMachine + $jumlahRowSplit[$value->date]) ?>" style="text-align: center;font-size:7px;"><?= $value->date ?></td>
                            <?php } ?>
                            <td class="td_main bg-<?= $jenis_produksi ?>-<?= $color_skm ?>" <?= $rowSplit[$vmachine->id][$value->date] ?> style="text-align: center;font-size:7px;"><?= $vmachine->name ?></td>
                            <td class="td_main bg-<?= $jenis_produksi ?>-<?= $color_skm ?>" <?= $rowSplit[$vmachine->id][$value->date] ?> style="text-align: center;font-size:7px;"><?= $vmachine->item_unit_name_plan ?></td>
                            <?php foreach ($datas->loadPage->$jenis_produksi->product as $k => $v) { ?>
                                <?php
                                $qty = '';
                                $warnaPita = '';
                                $splitProduct = '';
                                $idProdukSplit = '';
                                foreach ($value->data as $key2 => $value2) {
                                    foreach ($value2->data as $key3 => $value3) {
                                        foreach ($value3->data as $key4 => $value4) {
                                            // print_r($value4);
                                            if ($value4->product->id == $v->id && $vmachine->id == $value3->machine->id) {
                                                // check pita
                                                if ($qty == '') {
                                                    if (count($value4->pita) > 1) {
                                                        // split
                                                        $qty = $value4->pita[0]->qty;
                                                        $idProdukSplit = $value4->product->id;
                                                        $produkPita[$value4->product->id] = $value4->pita[1]->qty;
                                                        $produkPitaId[$value4->product->id] = $value4->pita[1]->id;
                                                    } else {
                                                        $qty = $value4->qty;
                                                    }
                                                    $totalMachine += $value4->qty;
                                                    if ($jenis_produksi == 'skt') {
                                                        foreach ($datas->loadPage->$jenis_produksi->productPita as $kpita => $vpita) {
                                                            if ($vpita->is_default == 0 && $value4->pita[0]->id == $vpita->id) {
                                                                $warnaPita = 'bg-pita-other-0';
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if ($idProdukSplit != $v->id) {
                                    $splitProduct = $rowSplit[$vmachine->id][$value->date];
                                }
                                ?>
                                <td class="th_main <?= $warnaPita ?> bg-<?= $jenis_produksi ?>-<?= $color_skm ?>" style="text-align:center;font-size:7px;" <?= $splitProduct ?>>
                                    <?= $qty ?>
                                </td>
                            <?php } ?>
                            <td class="th_main bg-<?= $jenis_produksi ?>-<?= $color_skm ?>" <?= $rowSplit[$vmachine->id][$value->date] ?> style="text-align:center;font-size:7px;"><?= $totalMachine ?></td>
                        </tr>
                        <?php if ($rowSplit[$vmachine->id][$value->date] != '') { ?>
                            <tr>
                                <?php foreach ($datas->loadPage->$jenis_produksi->product as $k => $v) {
                                    $bg = '';
                                    if (isset($produkPita[$v->id])) {
                                        foreach ($datas->loadPage->$jenis_produksi->productPita as $kpita => $vpita) {
                                            if ($vpita->is_default == 0 && $vpita->id == $produkPitaId[$v->id]) {
                                                $bg = 'bg-pita-other-0';
                                            }
                                        }
                                ?>
                                        <td class="th_main <?= $bg ?>" style="text-align:center;font-size:7px;"><?= $produkPita[$v->id] ?></td>
                                <?php }
                                } ?>
                            </tr>
                        <?php } ?>
            <?php $loop++;
                    }
                }
            } ?>
        </table>
        <table style="width: 100%;">
            <?php if ($jenis_produksi == 'skt') { ?>
                <tr style="vertical-align: top;">
                    <td style="width: 100%;">
                        <b style="font-size:14px;">Keterangan Pita Khusus</b>
                        <table>
                            <?php $a = 0;
                            foreach ($datas->loadPage->$jenis_produksi->productPita as $k => $v) {
                                if ($v->is_default == 0) { ?>
                                    <tr>
                                        <td class="bg-pita-other-<?= $a++ ?>" style="border: 1px solid;width:10px !important;"> </td>
                                        <td><?= $v->name; ?></td>
                                    </tr>
                            <?php }
                            } ?>
                        </table>


                    </td>
                </tr>
            <?php } ?>
            <tr style="vertical-align: top;">
                <td style="width: 50%;">
                    <div style="text-align: left;">
                        <b style="margin-bottom: 10px;">CATATAN :</b>
                        <div style="word-wrap: break-word;"><?= $datas->data[0]->note ?></div>
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