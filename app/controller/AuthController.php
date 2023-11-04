<?php
namespace Lordar221617\Portfolio\Controller;

class AuthController extends \Lordar221617\Portfolio\Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            $this->renderView("auth/login");
        } else {
            // login
        }
    }
    public function signup($register = "")
    {
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            $this->renderView("auth/signup");
        } elseif ($register == "register") {
            self::init_api();
            // var_dump($_POST);
            // var_dump(json_decode(file_get_contents("php://input")));
            $email = $_POST["email"];
            $otp = rand(100000, 999999);
            $_SESSION["otp"] = $otp;
            $args = [
                "to" => $email,
                "subject" => "کد تایید",
                "content-no-html" => "",
                "content" => "کد تایید شما برای ورود به سایت arush.ir: $otp"
            ];
            self::sendMail($args);
        }
    }
}