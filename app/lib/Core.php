<?php

namespace Lordar221617\Portfolio;

class Core
{
    static string $controller = "home";
    static string $method = "index";
    public function __construct()
    {
    }

    public static function init()
    {
        $routes = Route::$routes;

        foreach ($routes as $url => $action) {
            $paths = explode("/", self::getURL());
            $path = empty($paths) || empty($paths[0]) ? self::$controller . "/" . self::$method : $paths[0] . (!isset($paths[1]) ? '' : "/" . $paths[1]);
            unset($paths[0]);
            unset($paths[1]);
            $params = $paths;
            $url = trim($url, "/");

            if ($url == $path) {
                $controllerClass = "Lordar221617\\Portfolio\\Controller\\" . ucfirst($action[0]) . "Controller";
                self::$controller = $controllerClass;
                $controller = new self::$controller;
                self::$method = $action[1];
                call_user_func_array([$controller, self::$method], $params);
                return;
            }
        }
    }

    public static function Run()
    {
        require __APP_ROOT__ . '/route.php';
        self::init();
    }

    public static function getURL()
    {
        return isset($_GET['url']) ? trim($_GET['url'], '/') : '/';
    }
}