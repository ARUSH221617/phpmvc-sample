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

    #main-app-arush#

    <?php include "footer.php"; ?>

    <!-- <li>
        <a href="#" class="menu-btn" data-toggle="popup" data-target="#loginpopup">
            <i class="fas fa-user"></i>
        </a>
    </li> -->

    <?php
    // $section_services = self::$sectionsModel->getSectionByName("top_banner");
    // self::Section($section_services);
    ?>


    <script src="<?= Controller::assets('js/color-mode.js'); ?>"></script>
    <script src="<?= Controller::assets('js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= Controller::assets('js/toast/toast.js'); ?>"></script>
    <script src="<?= Controller::assets('js/preloader/preloader.js'); ?>"></script>
    <script src="<?= Controller::assets('js/script.js'); ?>"></script>
</body>

</html>