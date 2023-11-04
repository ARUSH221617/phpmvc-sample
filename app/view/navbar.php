<?php
use Lordar221617\Portfolio\Controller;

?>
<div class="scroll-up-btn btn btn-sm btn-primary">
    <i class="fas fa-angle-up"></i>
</div>
<header class="main-header container py-4">
    <nav class="navbar navbar-expand-lg navbar-dark text-bg-primary rounded-4" aria-label="Main navigation">
        <div class="container" style="direction: rtl !important;">
            <style>
                .navigation-logo {
                    background-image: url(<?= Controller::assets("images/navigation-logo.png"); ?>);
                }
            </style>
            <a class="navbar-brand" href="<?= APP_URL; ?>">
                <span class="navigation-logo"></span>
                <span class="navigation-brand">
                    <?php
                    $appNameParts = explode(" ", APP_NAME);
                    array_pop($appNameParts);
                    $appNamePart = implode(" ", $appNameParts);
                    echo $appNamePart;
                    ?>
                    <span>
                        <?php
                        $appNameParts = explode(" ", APP_NAME);
                        $appNameLastPart = end($appNameParts);
                        echo $appNameLastPart;
                        ?>
                    </span>
                </span></a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">آموزش ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">فروشگاه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">نمونه کار ها</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav nav-pills ml-auto">
                    <div class="nav-item dropdown search-dropdown">
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle" href="#"><i
                                class="fa-regular fa-search"></i></a>
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle d-none" href="#"><i
                                class="fa-regular fa-close"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3">
                            <div>
                                <form method="POST" action="#">
                                    <div class="input-group search-box">
                                        <input type="text" id="search" class="form-control" placeholder="جست و جو...">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa-regular fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a /*data-bs-toggle="dropdown"*/ class="nav-link dropdown-toggle" href="<?= APP_URL; ?>login"><i
                                class="fa-regular fa-user"></i></a>
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle d-none" href="#"><i
                                class="fa-regular fa-close"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3">
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-user-cog"></span>
                                    پروفایل
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-user-plus"></span>
                                    عضویت ویژه
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-heart"></span>
                                    علاقه مندی ها
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-money-bill"></span>
                                    کیف پول
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-play"></span>
                                    آموزش های من
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-shopping-bag"></span>
                                    محصولات خریداری شده
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" class="link-primary dropdown-item-text">
                                    <span class="fa-regular fa-sign-out"></span>
                                    خروج
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown notif-dropdown">
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle" href="#"><i
                                class="fa-regular fa-bell"></i></a>
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle d-none" href="#"><i
                                class="fa-regular fa-close"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="p-3 py-0 pt-1 row row-cols-1 gap-2">
                                <a href="#" class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <p class="card-text">پست جدید اینستاگرام را دیدی؟</p>
                                            <p class="text-muted ms-auto">1402/03/15</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <p class="card-text">پست جدید اینستاگرام را دیدی؟</p>
                                            <p class="text-muted ms-auto">1402/03/15</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <p class="card-text">پست جدید اینستاگرام را دیدی؟</p>
                                            <p class="text-muted ms-auto">1402/03/15</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 m-0 mt-1">
                                <a href="#" class="btn d-block btn-primary rounded-0">تماس با ما</a>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown color-modes">
                        <button class="nav-link text-decoration-none dropdown-toggle d-flex align-items-center"
                            id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                            data-bs-display="static">
                            <span class="bi theme-icon-active">
                                <use class="fa-regular fa-adjust"></use>
                            </span>
                            <span class="ms-1 d-none" id="bd-theme-text">
                                ترکیب رنگی
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="light">
                                    <span class="bi me-2 opacity-50 theme-icon">
                                        <use class="fa-regular fa-sun"></use>
                                    </span>
                                    Light
                                    <span class="bi ms-auto d-none">
                                        <use class="fa-regular fa-sun"></use>
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark">
                                    <span class="bi me-2 opacity-50 theme-icon">
                                        <use class="fa-regular fa-moon"></use>
                                    </span>
                                    Dark
                                    <span class="bi ms-auto d-none">
                                        <use class="fa-regular fa-moon"></use>
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="auto">
                                    <span class="bi me-2 opacity-50 theme-icon">
                                        <use class="fa-regular fa-adjust"></use>
                                    </span>
                                    Auto
                                    <span class="bi ms-auto d-none">
                                        <use class="fa-regular fa-adjust"></use>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- <a href="#" class="nav-item nav-link"><i class="fa fa-facebook"></i></a> -->
                    <!-- <a href="#" class="nav-item nav-link"><i class="fa fa-twitter"></i></a> -->
                    <!-- <a href="#" class="nav-item nav-link"><i class="fa fa-google-plus"></i></a> -->
                    <!-- <a href="#" class="nav-item nav-link"><i class="fa fa-pinterest-p"></i></a> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="nav-scroller bg-body shadow-sm">
        <div class="container py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">وبلاگ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">برنامه نویس کیست؟</li>
                </ol>
            </nav>
        </div>
    </div> -->
</header>
<script>
    (() => {
        'use strict'

        document.querySelector('#navbarSideCollapse').addEventListener('click', () => {
            document.querySelector('.offcanvas-collapse').classList.toggle('open')
        })
    })()
</script>