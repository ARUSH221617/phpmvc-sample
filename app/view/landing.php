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
    <link rel="stylesheet" href="<?= APP_URL; ?>public/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= APP_URL; ?>public/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <?php Controller::head($path); ?>
</head>

<body>
    <?php Controller::get_header(); ?>

    <main id="main-app">
        <section class="container py-3 d-flex flex-row" style="height: 60vh;">
            <div class="w-75 me-1" id="main-slider" style="height: 60vh;">
                <div class="w-100 owl-carousel owl-theme" style="height: 100%;">
                    <div class="owl-item"
                        style="background-image: url('<?= APP_URL; ?>public/images/jpg/flat-construction-with-people-web-site-design-minimal-design-technology-concept.jpg');">
                    </div>
                    <div class="owl-item"
                        style="background-image: url('<?= APP_URL; ?>public/images/jpg/flat-construction-with-people-web-site-design-minimal-design-technology-concept.jpg');">
                    </div>
                    <div class="owl-item"
                        style="background-image: url('<?= APP_URL; ?>public/images/jpg/flat-construction-with-people-web-site-design-minimal-design-technology-concept.jpg');">
                    </div>
                </div>
            </div>
            <div class="w-25 bg-secondary" style="height: 60vh;">
                <div class="w-100 bg-secondary" style="height: 60vh;"></div>
            </div>
        </section>
        <script>
            $(document).ready(function () {

                $("#main-slider .owl-carousel").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    pagination: false,
                    rewindSpeed: 500,
                    // dots: true
                });

            });
        </script>
        <?php
        // $section_services = self::$sectionsModel->getSectionByPage("home");
        // self::Section($section_services);
        ?>
    </main>

    <?php include "footer.php"; ?>



    <script src="<?= APP_URL; ?>public/js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="<?= Controller::assets('js/color-mode.js'); ?>"></script>
    <script src="<?= Controller::assets('js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= Controller::assets('js/toast/toast.js'); ?>"></script>
    <script src="<?= Controller::assets('js/preloader/preloader.js'); ?>"></script>
    <script src="<?= Controller::assets('js/script.js'); ?>"></script>
</body>

</html>