<?php
define("__APP_ROOT__", dirname(__DIR__));
define("__APP_PUBLIC__", dirname(dirname(__DIR__))."/public");

define('APP_NAME', 'ARUSH');
define("APP_AUTHOR_NAME", "Amir Reza Uneszadeh");
define('APP_URL', 'https://update.arush.ir/');
define("APP_AUTHOR_IMG", "https://update.arush.ir/public/images/profile-1.jpeg");
define('APP_DEBUG', true);

define("DB_HOST", "localhost");
define("DB_PORT", "3306");
define("DB_NAME", "arushir_portfolio");
define("DB_USER", "arushir_portfolio");
define("DB_PASS", "BI5EW7^X7VXA");

define("DB_PRE", "ar_");

error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 3600);
session_start();

define("S_PENDING", 1);
define("S_PRIVATE", 2);
define("S_PUBLISHED", 3);
define("T_SIMPLE", 1);
define("T_USER_SIMPLE", 1);
define("T_USER_AUTHOR", 2);
define("T_USER_SEO", 3);
define("T_USER_ADMIN", 4);
define("T_USER_CODE", 5);
define("T_USER_PARTNER", 6);
