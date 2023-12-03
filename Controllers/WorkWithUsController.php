<?php
namespace Controllers;
use DTOs\MailDto;
use Mail\IMailManager;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '/../Validators/FileValidator.php';
require_once __DIR__ . '/../Data/FileSaver.php';
use Validators\FileValidator;
use Data\FileSaver;

final class WorkWithUsController {
    private IMailManager $_mailManager;

    public function __construct(IMailManager $mailManager) { 
        $this->_mailManager = $mailManager;
    }

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