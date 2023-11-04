<?php

use Lordar221617\Portfolio\Controller;

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->
    <?php Controller::head($path); ?>
</head>

<body>
    <?php Controller::get_header(); ?>

    <main id="main-app" class="d-flex justify-content-center align-items-center" style="background-image: url('<?= APP_URL . "public/images/jpg/flat-construction-with-people-web-site-design-minimal-design-technology-concept.jpg" ?>');background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
background-position: center;">
        <div class="d-flex flex-column justify-content-center align-items-center bg-glass p-3"
            style="width: 450px;min-height: 350px;">
            <h2 class="h2 text-black">خوش آمدید</h2>
            <form action="/auth/signup/register" method="post" class="w-100" id="formRegister">
                <div class="mb-3">
                    <label for="email" class="form-label text-black-50">ایمیل:</label>
                    <input type="email" name="email" id="inputEmail" class="form-control bg-glass" value=""
                        placeholder="">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-black-50">رمز عبور:</label>
                    <input type="password" name="password" id="inputPassword" class="form-control bg-glass disabled"
                        value="" placeholder="" disabled>
                </div>
                <button type="submit" class="mb-3 btn btn-primary bg-glass w-100">ثبت نام</button>
                <div class="w-100 d-flex flex-row justify-content-center align-items-center">
                    <button type="button" class="mb-3 btn btn-danger bg-glass w-100 me-3">ثبت نام با گوگل</button>
                    <button type="button" class="mb-3 btn btn-dark bg-glass w-100">ثبت نام با گیت هاب</button>
                </div>
            </form>
        </div>
        <?php
        // $section_services = self::$sectionsModel->getSectionByPage("login");
        // self::Section($section_services);
        ?>
    </main>

    <?php Controller::get_footer(); ?>



    <script src="<?= Controller::assets('js/color-mode.js'); ?>"></script>
    <script src="<?= Controller::assets('js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= Controller::assets('js/toast/toast.js'); ?>"></script>
    <script src="<?= Controller::assets('js/preloader/preloader.js'); ?>"></script>
    <script src="<?= Controller::assets('js/script.js'); ?>"></script>
    <script src="<?= Controller::assets('js/register.js'); ?>"></script>
</body>

</html>