<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= config_item('site.name') ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= site_url('themes/admin/assets/css/app.css') ?>">

    <?php foreach ($stylesheets as $style) :?>
        <link rel="stylesheet" href="<?= $style ?>" />
    <?php endforeach; ?>
</head>

<body>