<?php
namespace workWithUs\Controllers;
use workWithUs\Data\FileSaver;
use workWithUs\Validators\FileValidator;

final class WorkWithUsController {
    public function __construct() { }

    public function post() {
        $cv_file = $_FILES['curriculum_vitae'];
        $validExtensions = ['pdf'];
        $invalidExtension = !FileValidator::isValidateExtension($cv_file, $validExtensions);

        if($invalidExtension) {
            FileSaver::save($cv_file);
        }

        return "💪😃";
    }
}

$controller = new WorkWithUsController();
$controller->post();