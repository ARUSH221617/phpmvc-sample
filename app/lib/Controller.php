<?php

namespace Lordar221617\Portfolio;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Controller
{
    public static $sectionsModel;
    public static $contactModel;
    public function __construct()
    {
        $this->init();
    }

    public static function error()
    {
        if (APP_DEBUG) {
            self::setCookie("message", "Error;", 0);
            // echo sprintf("Error ;Error Message: %s", $e->getMessage());
        }
        return false;
    }

    public static function Section($section)
    {
        @$section_value = ["section_custom_class" => $section->section_custom_class, "section_id" => $section->section_id, "section_type" => $section->section_type, "section_title" => $section->section_title, "section_content" => $section->section_content];
        echo vsprintf('
        <section class="%s" id="%s">
            <div class="max-width">
                <h2 class="title">%s</h2>
                <div class="content">
                    %s
                </div>
            </div>
            </div>
        </section>
        ', $section_value);
    }


    private function init(): void
    {
        // TODO: create objects in models
        self::$sectionsModel = self::getModel('sections');
        self::$contactModel = self::getModel('contact');
        // $userModel = self::getModel('user');
        // $postModel = self::getModel('post');
        // ...
    }

    public static function getModel(string $model): object
    {
        $modelClass = "Lordar221617\\Portfolio\\Model\\" . ucwords($model);
        return new $modelClass;
    }

    public static function head($path)
    {
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>' . self::get_title($path) . '</title>';
        echo '<link rel="stylesheet" href="' . self::assets('css/style.css') . '">';
        echo '<script src="' . self::assets('js/fontawesome/all.min.js') . '"></script>';
        echo '<script src="' . self::assets('js/jquery-3.6.3.min.js') . '"></script>';
        echo '<link rel="stylesheet" href="' . self::assets('css/toast.css') . '">';
        return true;
    }

    public static function get_title(string $path)
    {
        switch ($path) {
            case 'landing':
                $title = "سایت رسمی تیم ARUSH || arush.ir";
                break;
            case 'login':
                $title = "";
                break;
            case 'signup':
                $title = "";
                break;
            case 'blog':
                $title = "";
                break;
            case 'shop':
                $title = "";
                break;
            case 'aboutus':
                $title = "";
                break;
            default:
                $title = "سایت رسمی تیم ARUSH";
                break;
        }
        return $title;
    }

    public static function renderView(string $path, $args = [])
    {
        require_once __APP_ROOT__ . '/view/' . $path . '.php';
    }

    public static function get_header()
    {
        require_once __APP_ROOT__ . '/view/navbar.php';
    }

    public static function get_footer()
    {
        require_once __APP_ROOT__ . '/view/footer.php';
    }

    public static function get_sidebar()
    {
        require_once __APP_ROOT__ . '/view/sidebar.php';
    }

    public static function assets(string $path)
    {
        return APP_URL . 'public/' . $path;
    }

    public static function image(string $path, object $param = null)
    {
        $param = !isset($param) || empty($param) || $param == null ? new class {
            public $alt = "";
            public $class = "";
            public $id = "";
        }
            : $param;
        $param->alt = !isset($param->alt) || empty($param->alt) ? "" : $param->alt;
        $param->class = !isset($param->class) || empty($param->class) ? "" : $param->class;
        $param->id = !isset($param->id) || empty($param->id) ? "" : $param->id;
        $path = self::assets($path);
        return '<img src="' . $path . '" alt="' . $param->alt . '" class="' . $param->class . '" class="' . $param->id . '"id>';
    }

    public static function redirect($url)
    {
        header("location:" . APP_URL . $url);
        return true;
    }

    public static function redirectBack()
    {
        $url = $_GET["back_url"];
        return self::redirect($url);
    }

    public static function setCookie($cookie_name, $cookie_value, $days_left)
    {
        setcookie($cookie_name, $cookie_value, time() + (86400 * $days_left), "/"); // 86400 = 1 day
    }

    public static function upload($file, $filename = "", $path = "images/"): void
    {
        $filename = empty($filename) || $filename == "" ? basename($file["name"]) : $filename;
        $target_dir = __APP_PUBLIC__ . "/" . $path;
        $target_file = $target_dir . $filename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($file["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
                $_SESSION['error'] = "File is not an image.";
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
            $_SESSION['error'] = "Sorry, file already exists.";
        }
        // Check file size
        if ($file["size"] > 500000) {
            $uploadOk = 0;
            $_SESSION['error'] = "Sorry, your file is too large.";
        }
        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
            $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $_SESSION['error'] = "Sorry, your file was not uploaded.";
            self::redirect("home/index");
            die();
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                $_SESSION['success'] = "The file " . basename($file["name"]) . " has been uploaded.";
                self::redirect("home/index");
                die();
            } else {
                $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                self::redirect("home/index");
                die();
            }
        }
    }

    public static function sendMail(array $args)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // if (APP_DEBUG) {
            //     $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
            // }
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'mail.arush.ir '; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'auth@arush.ir'; //SMTP username
            $mail->Password = 'BCgzGVa-WWI%'; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('auth@arush.ir', 'ARUSH Team');
            $mail->addAddress($args["to"]); //Add a recipient
            // $mail->addAddress('ellen@arush.ir'); //Name is optional
            $mail->addReplyTo('info@arush.ir', 'Information');
            $mail->addCC('cc@arush.ir');
            $mail->addBCC('bcc@arush.ir');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = $args["subject"];
            $mail->Body = $args["content"];
            $mail->AltBody = $args["content-no-html"];
            $mail->CharSet = "UTF-8";

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }

    public static function init_api()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    }

    public static function error_codes($code)
    {
        $codes = json_decode(file_get_contents(__APP_PUBLIC__ . "/json/codes.json"), true);
        return $codes[$code];
    }

    public static function api_echo($code)
    {
        echo json_encode(["message" => self::error_codes($code), "code" => $code]);
    }
}