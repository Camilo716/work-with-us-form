<?php
namespace Mail;
use DTOs\MailDto;

interface IMailManager 
{
    public function send(MailDto $mailDto);
}