<?php
namespace Mail;

use DTOs\MailDto;
use PHPMailer\PHPMailer\PHPMailer;

require("vendor/autoload.php");
final class PHPMailerManager implements IMailManager
{
    private PHPMailer $phpmailer;

    public function __construct()
    {
        $this->phpmailer = new PHPMailer();
        $this->phpmailer = $this->configureServer($this->phpmailer);
    }

    function send(MailDto $mailDto)
    {
        $this->phpmailer->setFrom($mailDto->from, $mailDto->fromName);
        $this->phpmailer->addAddress('pepoRH@recursoshumanos.co', 'pepo');

        $this->phpmailer->isHTML(false);
        $this->phpmailer->Subject = $mailDto->subject;
        $this->phpmailer->Body = $mailDto->body;
        $this->phpmailer->addAttachment($mailDto->cvFileRoute);

        $this->phpmailer->send();
    }

    private function configureServer(PHPMailer $phpmailer)
    {
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '2da800fe968578';
        $phpmailer->Password = 'c8446dd73b14bf';

        return $phpmailer;
    }
}