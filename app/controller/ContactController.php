<?php
namespace Lordar221617\Portfolio\Controller;

use Lordar221617\Portfolio\Controller;

class ContactController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        self::redirect("home/");
    }

    public function send($back="/home/test/")
    {
        // name email subject message push
        if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST["push"])) {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "subject" => $_POST["subject"],
                "message" => $_POST["message"],
                "status" => S_PENDING,
                "type" => T_SIMPLE,
            ];
            self::$contactModel->createContact($data);
            self::setCookie("message", "Create Contact Success.", 1);
            self::redirectBack();
        }
    }
}