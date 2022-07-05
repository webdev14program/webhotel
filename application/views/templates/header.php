<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JUNIA GUEST HOUSE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?= base_url() ?>assets/images/logo.png" type="image/png">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>

    <!-- header -->
    <header class="header" id="header" style=" background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2)), url('assets/images/bg_hero.jpeg') center/cover no-repeat;">
        <div class="head-top">
            <div class="site-name">
                <span>JUNIA GUEST HOUSE</span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>WELCOME TO JUNIA GUEST HOUSE</h2>
        </div>
    </header>
    <!-- end of header -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
        <span class="cancel-btn" id="cancel-btn">
            <i class="fas fa-times"></i>
        </span>

        <ul class="navbar">
            <li><a href="#header">home</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#rooms">rooms</a></li>
            <li><a href="#customers">customers</a></li>
        </ul>
    </div>