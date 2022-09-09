<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Nunito', sans-serif;
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

<body style="padding:10px;">

    <?php $b = 0;
    foreach ($datas as $key) {
        if ($key->schedule_id == $schedule_id) { ?>

            <h3 style="text-align: center;"><?= $key->quiz_name ?></h3>
            <table style="width:100%;" class="table_main">
                <tr>
                    <th class="th_main bg_color_blue">#</th>
                    <th class="th_main bg_color_blue">Code</th>
                    <th class="th_main bg_color_blue">Nama User</th>
                </tr>
                <?php $a = 1;
                foreach (json_decode($key->data_participant) as $keys) { ?>
                    <tr>
                        <td class="td_main" style="text-align: center;"><?= $a++ ?></td>
                        <td class="td_main" style="text-align: center;"><?= $keys->code ?></td>
                        <td class="td_main"><?= $keys->user_name ?></td>
                    </tr>
                <?php } ?>

            </table>
    <?php }
    } ?>
</body>

</html>