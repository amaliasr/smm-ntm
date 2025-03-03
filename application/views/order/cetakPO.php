<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $datas->no_po ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 11px;
        }

        .table_main,
        .th_main,
        .td_main,
        .th_approval {
            border: 1px solid black;
            border-color: #444941;
            border-collapse: collapse;
        }

        .td_main {
            font-size: 11px;
            padding: 5px;
            vertical-align: middle;

        }

        .th_main {
            padding: 10px;
            height: 10px;
            text-align: center;
            word-wrap: break-word;
        }

        .th_approval {
            padding: 5px;
            height: 5px;
            text-align: center;
            word-wrap: break-word;
        }

        .bg_color_blue {
            background-color: #CEE5D0;
        }

        .bg_color_yellow {
            background-color: #FFE162;
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

        /* footer {
            position: fixed;
            bottom: -60px;
            height: 70px;
        }

        header {
            position: fixed;
            top: -50px;
            height: 100px;
        }

        @page {
            margin-top: 70px;
            margin-bottom: 30px;
        }


        body {
            margin-top: 70px;
            margin-bottom: 20px;
        } */
        @page {
            margin: 0px;
            /* margin-top: 250px; */
            margin-bottom: 85px;
        }

        .body {
            margin-top: 200px;
            /*margin-bottom: 20px; */
            margin-left: 40px;
            margin-right: 40px;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    $imagePathHeader = base_url() . 'assets/image/logo/kop.jpg';
    $imageDataHeader = base64_encode(file_get_contents($imagePathHeader));
    $imageSrcHeader = 'data:image/jpeg;base64,' . $imageDataHeader;
    $imagePathFooter = base_url() . 'assets/image/logo/footer.jpg';
    $imageDataFooter = base64_encode(file_get_contents($imagePathFooter));
    $imageSrcFooter = 'data:image/jpeg;base64,' . $imageDataFooter;
    ?>
    <!-- HEADER -->
    <div class="header">
        <img src="<?= $imageSrcHeader ?>" style="width: 100%;">
    </div>
    <!-- HEADER -->
    <main class="page body" style="padding:10px;text-align: center;">
        <table style="width: 100%;padding:0px;margin-bottom:30px;">
            <tr>
                <td style="width: auto;text-align:left;padding:0px;">No</td>
                <td style="width: 2px;">:</td>
                <?php
                $rev = "";
                if ($datas->data_log != null || $datas->data_log != "") {
                    if (json_decode($datas->data_log)[0]->old_date_po != "") {
                        $rev =  '(REV)';
                    }
                }
                ?>
                <td style="word-wrap: break-word;width: 50%;"><?= $datas->no_po ?> <?= $rev ?></td>
                <td style="width: 20%;"><?= date("d M Y", strtotime($datas->date_po)); ?></td>
            </tr>
            <tr>
                <td style="width: auto;text-align:left;padding:0px;">Hal</td>
                <td style="width: 2px;">:</td>
                <td style="word-wrap: break-word;width: 90%;">Pemesanan Barang</td>
            </tr>
        </table>
        <div style="text-align: left;">
            <!-- <?php print_r($datas); ?> -->
            Kepada Yth :<br>
            <p style="margin-bottom: 0px;"><b><?= $datas->supplier_name ?></b></p>
            <p style="margin-top: 0px;margin-bottom: 0px;"><?= $datas->supplier_addr ?></p>
            <p style="margin-top: 0px;"><?= $datas->supplier_city ?></p>
            Dengan Hormat,<br>
            Bersama dengan surat ini kami memesan barang - barang berikut :
        </div>
        <table style="width:100%;margin-top:10px;margin-bottom:20px;" class="table_main">
            <tr style="text-align: center">
                <th class="th_main">Item</th>
                <th class="th_main">Qty</th>
                <th class="th_main">Satuan</th>
                <th class="th_main">Harga (Rp)</th>
                <th class="th_main">Total (Rp)</th>
                <th class="th_main">Tanggal Pengiriman</th>
            </tr>
            <?php foreach ($detail as $key => $value) { ?>
                <tr>
                    <td class="td_main"><?= $value->item_name ?></td>
                    <td class="td_main" style="text-align: right;"><?= number_format($value->qty) ?></td>
                    <td class="td_main" style="text-align: center;"><?= $value->satuan_name ?></td>
                    <td class="td_main" style="text-align:right;"><?= number_format($value->harga, 2, ',', '.') ?></td>
                    <td class="td_main" style="text-align:right;"><?= number_format($value->subtotal, 2, ',', '.') ?></td>
                    <td class="td_main" style="text-align: center;"><?= date("d M Y", strtotime($value->tanggal_pengiriman)) ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td class="td_main" colspan="4" style="text-align: right;font-size:12px;padding-right:10px;"><b>Sub Total (Rp)</b></td>
                <td class="td_main" style="text-align:right;font-size:12px;"><b><?= number_format($datas->total_harga, 2, ',', '.') ?></b></td>
                <td class="td_main"></td>
            </tr>
            <tr>
                <td class="td_main" colspan="4" style="text-align: right;font-size:12px;padding-right:10px;"><b>PPN 12%</b></td>
                <td class="td_main" style="text-align:right;font-size:12px;"><b><?= number_format($datas->ppn, 2, ',', '.') ?></b></td>
                <td class="td_main"></td>
            </tr>
            <tr>
                <td class="td_main" colspan="4" style="text-align: right;font-size:12px;padding-right:10px;"><b>Total (Rp)</b></td>
                <td class="td_main" style="text-align:right;font-size:12px;"><b><?= number_format($datas->grand_total, 2, ',', '.') ?></b></td>
                <td class="td_main"></td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr style="vertical-align: top;">
                <td style="width: 60%;">
                    <div style="text-align: left;">
                        <b style="margin-bottom: 10px;">Keterangan</b>
                        <ol>
                            <li>Termin Pembayaran : <?= $datas->supplier_top ?> hari setelah pesanan diterima</li>
                            <!-- <li>Termin Pembayaran : hari/COD/CBD setelah pesanan kami terima</li> -->
                            <li>Barang akan kami kembalikan apabila tidak sesuai pesanan</li>
                            <li>Nomor PO harus dicantumkan dalam Surat Jalan, Nota/Kwitansi/Invoice</li>
                            <li>Quantity Pengiriman ±5% dari quantity PO</li>
                        </ol>
                        <p>Atas perhatian dan kerjasamanya kami ucapkan terima kasih</p>
                        <?php if ($qrcode != '0') { ?>
                            <b style="margin-bottom: 20px;margin-top:30px;">APPROVAL :</b>
                            <table style="width: 100%;margin-top:10px;">
                                <tr style="vertical-align: top;">
                                    <?php $a = 0;
                                    foreach (json_decode($datas->data_approval) as $key => $value) {
                                    ?>
                                        <td>
                                            <table style="width: 100%;">
                                                <tr style="vertical-align: middle;">
                                                    <td rowspan="2" style="width:40px;text-align:left;padding:0px;margin:0px;">
                                                        <?php if ($value->is_accept == 'Accepted') {
                                                            $images = base_url() . 'assets/image/logo/check.png';
                                                        ?>
                                                            <!-- <span class="check-icon">&#xf00c;</span> -->

                                                        <?php } else if ($value->is_accept == 'Rejected') {
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
                                                        <?php if ($value->is_accept == 'Accepted' || $value->is_accept == 'Rejected') { ?>
                                                            <?php
                                                            $namaArr = explode(' ', $value->user_name);

                                                            if (count($namaArr) >= 2) {
                                                                $duaKataDepan = $namaArr[0] . ' ' . $namaArr[1];
                                                                echo $duaKataDepan;
                                                            } else {
                                                                echo $value->user_name;
                                                            }
                                                            ?>
                                                            <br>
                                                            <p style="margin: 0px;padding:0px;font-size:6px;"><?= date('d-m-Y H:i', strtotime($value->date_approval)) ?></p>
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
                            <!-- <table class="table_main" style="margin-top: 20px;">
                                <tr>
                                    <th class="th_approval">No</th>
                                    <th class="th_approval">Jabatan</th>
                                    <th class="th_approval">Nama</th>
                                    <th class="th_approval">Tanggal</th>
                                    <th class="th_approval">Status</th>
                                </tr>
                                <tr>
                                    <td class="th_approval" style="font-size: 10px;">1</td>
                                    <td class="th_approval" style="font-size: 10px;">STAFF PURCHASING</td>
                                    <td class="th_approval" style="font-size: 10px;">RATNA NURUL</td>
                                    <td class="th_approval" style="font-size: 10px;">08/11/2023 08:24</td>
                                    <td class="th_approval" style="font-size: 10px;">CHECKED</td>
                                </tr>
                                <tr>
                                    <td class="th_approval" style="font-size: 10px;">1</td>
                                    <td class="th_approval" style="font-size: 10px;">STAFF PURCHASING</td>
                                    <td class="th_approval" style="font-size: 10px;">RATNA NURUL</td>
                                    <td class="th_approval" style="font-size: 10px;">08/11/2023 08:24</td>
                                    <td class="th_approval" style="font-size: 10px;">CHECKED</td>
                                </tr>
                                <tr>
                                    <td class="th_approval" style="font-size: 10px;">1</td>
                                    <td class="th_approval" style="font-size: 10px;">STAFF PURCHASING</td>
                                    <td class="th_approval" style="font-size: 10px;">RATNA NURUL</td>
                                    <td class="th_approval" style="font-size: 10px;">08/11/2023 08:24</td>
                                    <td class="th_approval" style="font-size: 10px;">CHECKED</td>
                                </tr>
                            </table> -->
                        <?php } ?>
                    </div>
                </td>
                <td style="width: 40%;">
                    <?php if ($qrcode != '0') { ?>
                        <div style="width: 100%;text-align:center;">
                            <b style="font-size:14px;">SCAN QRCODE</b>
                            <p style="margin: 0px;margin-bottom:10px;">Scan untuk Melihat Approval</p>
                            <img src="<?= base64_decode(str_replace(' ', '', $qrcode)) ?>" style="width:100px; height:100px">
                        </div>
                    <?php } else { ?>
                        <b style="margin-bottom: 20px;">Persetujuan :</b>
                        <ol>
                            <?php
                            $a = 0;
                            for ($k = 0; $k < count($approval); $k++) {
                                for ($i = 0; $i < count($approval[$k]); $i++) {
                                    for ($j = 0; $j < count($approval[$k][$i]); $j++) {

                                        // $a = 0;
                                        // foreach (json_decode($approval[$k][$i][$j]->data_approval) as $key => $value) {
                                        if ($a == 0) {
                                            $nama = 'Dibuat';
                                        } else if ($a == 1) {
                                            $nama = 'Disetujui';
                                        } else if ($a == 2) {
                                            $nama = 'Diketahui';
                                        }
                                        echo '<li><p style="margin:0px;">' . $nama . ' Oleh ' . json_decode($approval[$k][$i][$j]->data_approval)[0]->user_name . '</p></li>';
                                        //     $a++;
                                        // }
                                        $a++;
                                    }
                                }
                            }
                            ?>
                        </ol>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
    </main>
    <!-- FOOTER -->
    <div class="footer" style="text-align: center;">
        <!-- Purchase Order diatas menggunakan Sistem Resmi PT Sinar Mahkota Mas -->
        <img src="<?= $imageSrcFooter ?>" style="width: 100%;">
    </div>
</body>

</html>