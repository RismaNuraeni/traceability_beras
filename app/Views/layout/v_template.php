<?php /**@var string $title */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="<?= base_url('sb-admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('sb-admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
    <?= $this->include('layout/v_sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?= $this->include('layout/v_topbar') ?>

            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
            <?= $this->include('layout/v_footer') ?>
        </div>
</div>
        <script src="<?= base_url('sb-admin/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('sb-admin/js/sb-admin-2.min.js') ?>"></script>
</body>
</html>