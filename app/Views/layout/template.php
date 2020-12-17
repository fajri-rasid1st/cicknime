<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- title -->
    <title><?= $title; ?> | Cicknime</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/all.min.css">
    <!-- external css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

</head>

<body>
    <!-- navbar -->
    <?= $this->include("layout/navbar"); ?>

    <!-- content -->
    <?= $this->renderSection("content"); ?>

    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url(); ?>/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/js/script.js"></script>
</body>

</html>