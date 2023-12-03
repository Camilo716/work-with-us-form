<?php
namespace Controllers;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/../Validators/FileValidator.php';
require_once __DIR__ . '/../Data/FileSaver.php';
use Validators\FileValidator;
use Data\FileSaver;

final class WorkWithUsController {
    public function __construct() { }

    public function post() {
        $cv_file = $_FILES['curriculum_vitae'];
        $validExtensions = ['pdf'];
        $invalidExtension = !FileValidator::isValidExtension($cv_file["name"], $validExtensions);

        if($invalidExtension) {
            return "👎😑";
        }
        
        FileSaver::save($cv_file);
        return "💪😃";
    }
}

$controller = new WorkWithUsController();
$response = $controller->post();
echo $response;