<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $no_sj ?></title>
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
            word-break: normal;
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
    </style>
</head>

<body style="padding:10px;text-align: center;">
    <table style="width: 100%;margin-bottom:20px;">
        <tr style="border-bottom: 1px black;">
            <td style="width: 33%;">
                <?php
                $image = base_url() . 'assets/image/logo/SMM.png';
                // Read image path, convert to base64 encoding
                $imageData = base64_encode(file_get_contents($image));

                // Format the image SRC:  data:{mime};base64,{data};
                $src = 'data:image/png;base64,' . $imageData;
                ?>
                <img src="<?= $src ?>" style="height:70px;">
            </td>
            <td style="width: 33%;text-align: center;">
                <b style="text-align: center;font-size:14px;">
                    PT. SINAR MAHKOTA MAS
                    <br>
                    Jalan Bandulan Barat No. 37
                    <br>
                    Sukun - Malang
                </b>
            </td>
            <td style="width: 33%;"></td>
        </tr>
    </table>
    <hr style="height:1px;border:none;color:#333;background-color:#333;margin-bottom:20px;" />
    <b style="text-align: center;font-size:12px;">CHECKING ARRIVED PACKAGES</b>
    <table style="width: 100%;margin-top:40px;">
        <tr>
            <td style="width: 50%;vertical-align: top;">
                <table style="width: 100%;">
                    <tr>
                        <td style="width: auto;">NO. SURAT JALAN</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $no_sj ?></td>
                    </tr>
                    <tr>
                        <td style="width: auto;">SUPPLIER</td>
                        <td style="width: 2px;">:</td>
                        <td style="word-wrap: break-word;width: 90%;"><?= $nama_supplier ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width:100%;margin-top:30px;margin-bottom:30px;" class="table_main">
        <tr style="text-align: center">
            <th class="th_main" style="width: 10%;">NO</th>
            <th class="th_main" style="width: 30%;">NAMA BARANG</th>
            <th class="th_main" style="width: 10%;">QTY</th>
            <th class="th_main" style="width: 20%;">SATUAN</th>
            <th class="th_main" style="width: 30%;">NOTES</th>
        </tr>
        <?php foreach ($detail as $key => $value) { ?>
            <tr>
                <td class="td_main" style="text-align: center;"><?= $key + 1 ?></td>
                <td class="td_main"><?= $value['item_name'] ?></td>
                <td class="td_main"></td>
                <td class="td_main"><?= $value['satuan_name'] ?></td>
                <td class="td_main"></td>
            </tr>
        <?php } ?>
    </table>
    <table style="width: 100%;">
        <tr style="vertical-align: top;">
            <td style="width: 50%;">
                <div style="text-align: left;">
                    <b style="margin-bottom: 10px;">CATATAN :</b>
                    <div style="word-wrap: break-word;"></div>
                </div>
            </td>
        </tr>
    </table>

</body>

</html>