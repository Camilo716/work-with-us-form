<?php

use workWithUs\Controllers\Controller;

echo "<pre>";


$controller = new Controller();
$controller->saveFile($_FILES["profile_img"]);


print_r($_REQUEST);
print_r($_FILES);
echo "</pre>";