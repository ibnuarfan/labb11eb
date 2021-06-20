<!DOCTYPE html>
<html lang="en">
    <?= $this->include('template/header'); ?>
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
    </head>
    <body>
        <h1><?= $title; ?></h1>
        <hr>
        <p><?= $content; ?></p>
    </body>
</html>
<?= $this->include('template/footer'); ?>