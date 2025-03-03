<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $datas->shipment[0]->doc_number ?></title>
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
            padding: 3px;
            vertical-align: middle;
        }

        .bg_color_blue {
            background-color: #CEE5D0;
        }

        .bg_color_yellow {
            background-color: #FFE162;
        }

        .th_main {
            padding: 3px;
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

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: right;
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
        <table style="width: 100%;margin-bottom:20px;">
            <tr>
                <td class="text-center" colspan="2" style="width: 100%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:14px;">SURAT JALAN</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" colspan="2" style="width: 100%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">PT. BERCA KAWAN SEJATI</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" style="width: 50%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Jl. Retawu No. 30, Malang</span></b>
                    </p>
                </td>
                <td class="text-end" style="width: 50%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Malang, 25 Jan 2025</span></b>
                    </p>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="" style="width: 5%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">No. SJ</span></b>
                    </p>
                </td>
                <td class="" style="width: 2%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="" style="width: 20%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">SJ-SMM250125-0030</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" style="width: 15%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Kepada Yth</span></b>
                    </p>
                </td>
                <td class="" style="width: 2%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="" style="width: 20%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">SR JAKARTA</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" style="width: 15%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Alamat</span></b>
                    </p>
                </td>
                <td class="" style="width: 2%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="" style="width: 20%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Rukan sedayu city block SCBRF No. 21, Cakung Barat, Jakarta Timur</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" style="width: 15%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Telephone</span></b>
                    </p>
                </td>
                <td class="" style="width: 2%;">
                    <p style="text-align: center;margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">:</span></b>
                    </p>
                </td>
                <td class="" style="width: 20%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">081944946015</span></b>
                    </p>
                </td>
            </tr>
        </table>
        <table class="table_main" style="width: 100%;margin-bottom:5px; margin-top: 10px;">
            <tr>
                <th class="th_main" style="width: 10%;">No</th>
                <th class="th_main" style="width: 50%;">Nama Barang</th>
                <th class="th_main" style="width: 20%;">QTY</th>
                <th class="th_main" style="width: 20%;">UoM</th>
                <th class="th_main" style="width: 25%;">Keterangan</th>
            </tr>
            <?php
            $total = 0;
            $no = 1;
            foreach ($datas->shipment[0]->stok_gudang_riwayats as $key => $value) {
            ?>
                <tr>
                    <td class="td_main" style="text-align: center;"><?= $no ?></td>
                    <td class="td_main"><?= $value->item->name ?></td>
                    <td class="td_main text-center"><?= $value->qty_out ?></td>
                    <td class="td_main"><?= $value->unit->name ?></td>
                    <td class="td_main">-</td>
                </tr>
            <?php
                $total += $value->qty_out;
                $no++;
            }
            ?>
            <tr>
                <th class="th_main text-end" colspan="4">Total</th>
                <th class="th_main"><?= $total ?></th>
            </tr>
        </table>
        <table>
            <tr>
                <td class="" style="width: 100%;">
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <b><span style="font-size:10px;">Dikeluarkan dari Gudang Bandulan No 37</span></b>
                    </p>
                    <p style="margin-bottom:0px;margin-top:0px;">
                        <i><span style="font-size:10px;">Barang - barang tersebut diatas telah kami (saya) periksa dan terima dengan baik serta cukup</span></i>
                    </p>
                </td>
            </tr>
        </table>
        <table class="" style="width: 100%;margin-bottom:5px; margin-top: 50px;">
            <tr>
                <td class="" style="width: 25%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Gudang</span></b>
                    </p>
                </td>
                <td class="" style="width: 25%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Sopir</span></b>
                    </p>
                </td>
                <td class="" style="width: 25%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Yang Menerima</span></b>
                    </p>
                </td>
                <td class="" style="width: 25%;padding-bottom:25px;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">Hormat Kami</span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td class="" style="width: 25%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
                <td class="" style="width: 25%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
                <td class="" style="width: 25%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
                <td class="" style="width: 25%;">
                    <p style="text-align: center;">
                        <b><span style="font-size:10px;">(..........................................)</span></b>
                    </p>
                </td>
            </tr>
        </table>
    </header>
</body>

</html>