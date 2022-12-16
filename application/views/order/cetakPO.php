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
            margin-top: 90px;
            margin-bottom: 100px;
        }
    </style>
</head>

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
        <table style="width:100%;margin-top:30px;margin-bottom:30px;" class="table_main">
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
                <td class="td_main" colspan="4" style="text-align: right;font-size:14px;padding-right:10px;"><b>Sub Total (Rp)</b></td>
                <td class="td_main" style="text-align:right;font-size:14px;"><b><?= number_format($datas->total_harga, 2, ',', '.') ?></b></td>
                <td class="td_main"></td>
            </tr>
            <tr>
                <td class="td_main" colspan="4" style="text-align: right;font-size:14px;padding-right:10px;"><b>PPN 11%</b></td>
                <td class="td_main" style="text-align:right;font-size:14px;"><b><?= number_format($datas->ppn, 2, ',', '.') ?></b></td>
                <td class="td_main"></td>
            </tr>
            <tr>
                <td class="td_main" colspan="4" style="text-align: right;font-size:14px;padding-right:10px;"><b>Total (Rp)</b></td>
                <td class="td_main" style="text-align:right;font-size:14px;"><b><?= number_format($datas->grand_total, 2, ',', '.') ?></b></td>
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
    <footer>
        Purchase Order diatas menggunakan Sistem Resmi PT Sinar Mahkota Mas
    </footer>
</body>

</html>