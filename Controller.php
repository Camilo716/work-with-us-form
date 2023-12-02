<?php
echo "<pre>";
$controller = new Controller();
$controller->greetUser($_REQUEST);

print_r($_REQUEST);
print_r($_FILES['file']['name']);
echo "</pre>";

final class Controller {
    public function __construct() { }

    public function greetUser($user)
    {
        print_r($user);
        $name = $user["username"];
        echo "Hello $name!!";
    }
}