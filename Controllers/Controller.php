<?php
namespace workWithUs\Controllers;

final class Controller {
    public function __construct() { }

    public function saveFile($file) {
        $base_path = "./../Assets/CurriculumsVitae/";
        $file_name = $file['name'];

        move_uploaded_file($file["tmp_name"], $base_path . $file_name);
    }
}