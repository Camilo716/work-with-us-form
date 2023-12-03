<?php
namespace workWithUs\Controllers;
use workWithUs\Data\FileSaver;

final class WorkWithUsController {
    public function __construct() { }

    public function post($file) {
        FileSaver::save($_FILES["profile_img"]);
        return "💪😃";
    }
}