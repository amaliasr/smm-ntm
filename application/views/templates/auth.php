<!doctype html>
<html lang="id">

<head>
    <?= $meta_tag ?>

    <?= $css ?>

    <?= $js_top ?>

    <?= $title ?>
</head>

<body class="bg-primary">
    <?= $env ?>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <?= $content ?>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row float-end">
                        <div class="col-12 small">Copyright © PT Sinar Mahkota Mas <?= date('Y') ?></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?= $js ?>
</body>

</html>