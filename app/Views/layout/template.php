<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Resmi LPK/LKP Indera" />
    <meta name="keywords" content="Kursus Mengemudi terbaik di Magelang" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="email" content="rizkyculture@gmail.com" />
    <meta name="version" content="v1.0" />
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- :::::::::::::: Awal File CSS Disini :::::::::::::: -->

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- CSS Komik -->
    <link rel="stylesheet" href="/assets/css/komik.css">

    <!-- :::::::::::::: Akhir File CSS Disini :::::::::::::: -->

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader"> 
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>-->
    <!-- Loader -->

    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- :::::::::::::: Awal File Javascript Disini :::::::::::::: -->

    <!-- Javascript Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>


    <!-- :::::::::::::: Akhir File Javascript Disini :::::::::::::: -->
</body>

</html>