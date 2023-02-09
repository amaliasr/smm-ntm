<!doctype html>
<html lang="id">

<head>
    <?= $meta_tag ?>

    <?= $css ?>

    <?= $js_top ?>

    <?= $title ?>
</head>

<body class="nav-fixed">

    <?= $env ?>

    <?= $navbar ?>
    <div id="layoutSidenav">
        <?= $sidenav ?>

        <div id="layoutSidenav_content" class="bg-white">
            <?= $content ?>
            <?= $footer ?>
        </div>
    </div>

    <?= $js ?>
</body>

</html>