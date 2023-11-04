<?php
use Lordar221617\Portfolio\Core;
try {
    require_once '../app/config/config.php';
    require_once '../vendor/autoload.php';

    Core::Run();
} catch (Exception $e) {
    echo $e->getMessage();
}