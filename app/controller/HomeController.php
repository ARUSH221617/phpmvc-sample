<?php

namespace Lordar221617\Portfolio\Controller;

use Lordar221617\Portfolio\Controller;
use Exception;
use PDOException;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Controller::renderView("landing");
    }
    // public static function aboutMe()
    // {
    // try {
    //     $aboutme = self::$sectionsModel->getSectionByName("aboutme");
    //     return self::Section($aboutme);
    // } catch (Exception | PDOException $e) {
    //     if (APP_DEBUG) {
    //         setCookie("message", "Error in Database;");
    //         echo sprintf("Error ;Error Message: %s", $e->getMessage());
    //     }
    //     return false;
    // }
    // }
    // public static function myServices()
    // {
    // try {
    // $section_services = self::$sectionsModel->getSectionByName("services");
    // return self::Section($section_services);
    //     $services = json_decode($author->services, true);
    //     for ($i = 0; $i < count($services); $i++) {
    //         echo '
    // <div class="card">
    //     <div class="box">
    //         <i class="fas ' . $services[$i]["icon"] . '"></i>
    //         <div class="text">' . $services[$i]["title"] . '</div>
    //         <p>' . substr($services[$i]["description"], 0, 150) . '...</p>
    //         <a href="#" data-toggle="popup" data-target="#popup_' . (str_replace(" ", "_", strip_tags($services[$i]["title"]))) . '">Read More</a>
    //     </div>
    // </div>
    // <div id="popup_' . (str_replace(" ", "_", strip_tags($services[$i]["title"]))) . '" class="popup" style="color: #000;">
    //     <header>
    //         <span>' . $services[$i]["title"] . '</span>
    //         <div class="close" data-toggle="close">x</div>
    //     </header>
    //     <div class="content">
    //         <p>' . $services[$i]["description"] . '</p>
    //     </div>
    // </div>
    // ';
    //     }
    // } catch (Exception | PDOException $e) {
    //     if (APP_DEBUG) {
    //         setCookie("message", "Error in Database;");
    //         echo sprintf("Error ;Error Message: %s", $e->getMessage());
    //     }
    //     return false;
    // }
    // }
    // public static function mySkills()
    // {
    //     try {
    //         $author = self::$authorModel->getAuthorById(1);
    //         $skills = json_decode($author->skills, true);
    //         $skill = "";
    //         foreach ($skills["skills"] as $s => $k) {
    //             $skill .= '
    //         <div class="bars">
    //             <div class="info">
    //                 <span>' . $s . '</span>
    //                 <span>' . $k . '%</span>
    //             </div>
    //             <div class="line line-show-skills-' . $s . '"></div>
    //         </div>
    //         <style>
    //         .skills-content .right .line-show-skills-' . $s . '::before {
    //             width: ' . $k . '%;
    //           }
    //         </style>
    //         ';
    //         }
    //         echo '
    //     <div class="column left">
    //         <div class="text">' . $skills["title"] . '</div>
    //         <p>' . $skills["description"] . '</p>
    //         <!-- <a href="#">Read more</a> -->
    //     </div>
    //     <div class="column right">' . $skill . '</div>
    // ';
    //     } catch (Exception | PDOException $e) {
    //         if (APP_DEBUG) {
    //             setCookie("message", "Error in Database;");
    //             echo sprintf("Error ;Error Message: %s", $e->getMessage());
    //         }
    //         return false;
    //     }
    // }
    // public static function myTeams()
    // {
    //     try {
    //         $authors = self::$authorModel->getAuthors();
    //         for ($i = 0; $i < count($authors); $i++) {
    //             $author = $authors[$i];
    //             echo '
    //         <div class="card">
    //             <div class="box">
    //                 ' . self::image($author->img) . '
    //                 <div class="text">' . $author->fullName . '</div>
    //                 <p>' . substr(strip_tags($author->description), 0, 100) . '...</p>
    //             </div>
    //         </div>
    //         ';
    //         }
    //     } catch (Exception | PDOException $e) {
    //         if (APP_DEBUG) {
    //             setCookie("message", "Error in Database;");
    //             echo sprintf("Error ;Error Message: %s", $e->getMessage());
    //         }
    //         return false;
    //     }
    // }
}