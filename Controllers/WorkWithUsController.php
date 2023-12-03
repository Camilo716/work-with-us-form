<?php
namespace Controllers;

use DTOs\MailDto;
use Mail\IMailManager;
use Validators\FileValidator;
use Data\FileSaver;

require_once __DIR__ . '/../Validators/FileValidator.php';
require_once __DIR__ . '/../Data/FileSaver.php';
require_once __DIR__ . '/../DTOs/MailDto.php';

final class WorkWithUsController
{
    private IMailManager $_mailManager;

    public function __construct(IMailManager $mailManager)
    {
        $this->_mailManager = $mailManager;
    }

    public function post()
    {
        $cv_file = $_FILES['curriculum_vitae'];
        $validExtensions = ['pdf'];
        $invalidExtension = !FileValidator::isValidExtension($cv_file['name'], $validExtensions);

        if ($invalidExtension) {
            return "👎😑";
        }

        $filePath = FileSaver::save($cv_file);
        $mailDto = $this->buildMailDto($filePath);
        $this->_mailManager->send($mailDto);
        return "💪😃";
    }

    private function buildMailDto($cvFileRoute): MailDto
    {
        $mailDto = new MailDto();
        $mailDto->from = $_POST['email'];
        $mailDto->fromName = $_POST['name'];
        $mailDto->subject = $_POST['subject'];
        $mailDto->body = $_POST['message'];
        $mailDto->cvFileRoute = $cvFileRoute;

        return $mailDto;
    }
}