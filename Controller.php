<?php
echo "<pre>";


$controller = new Controller();
echo $controller->greetUser($_REQUEST);
$controller->saveFile($_FILES["profile_img"]);


print_r($_REQUEST);
print_r($_FILES);
echo "</pre>";

final class Controller {
    public function __construct() { }

    public function greetUser($user) {
        $name = $user["username"];
        return "Hello $name!!";
    }

    public function saveFile($file) {
        $base_path = "./Assets/Images/";
        $file_name = $file['name'];

        move_uploaded_file($file["tmp_name"], $base_path . $file_name);
    }
}