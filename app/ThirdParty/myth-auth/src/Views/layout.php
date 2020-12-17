<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/all.min.css">
    <!-- external css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <!-- title -->
    <title>Login | Cicknime</title>
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>
    <?= view('Myth\Auth\Views\_navbar') ?>
    <main role="main" class="container">
        <?= $this->renderSection('main') ?>
    </main>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url(); ?>/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/js/script.js"></script>
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>