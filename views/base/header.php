<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>

    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet" />
    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="phone-icon" viewBox="0 0 485.213 485.212">
            <path fill="#edc939" d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606
                c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429
                c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657
                c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363
                c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972
                c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806
                c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z" />
        </symbol>
    </svg>


    <!-- App-header -->
    <header id="app-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-row">
                        <div class="header-row-item justify-content-start">
                            <a href="/" class="logo">
                                <img src="../../images/icon/logo/logo.png" alt="Carlone logo">
                            </a>
                        </div>
                        <div class="header-row-item d-none d-lg-flex">
                            <ul class="header-nav-menu d-flex justify-content-between align-items-center w-100">
                                <?php
                                    foreach ($header_nav_menu as $key => $value) {
                                        echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="header-row-item  d-none d-sm-flex">
                            <ul class="phone-list">
                                <li>
                                    <a href="tel:<?= $phone_link?>">
                                        <svg width="20" height="20">
                                            <use xlink:href="#phone-icon"></use>
                                        </svg>
                                        <?= $phone ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-row-item  d-none d-sm-flex">
                            <a href="#" class="btn btn-primary scroll-link">
                                Подобрать авто
                            </a>
                        </div>
                        <div class="header-row-item justify-content-center">
                            <div class="burger-menu d-flex flex-column justify-content-center align-items-start">
                                <div class="line line--top"></div>
                                <div class="line line--middle d-flex justify-content-between align-items-start">
                                    <div class="line line--small"></div>
                                    <div class="line line--big"></div>
                                </div>
                                <div class="line line--bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Main -->
    <main>