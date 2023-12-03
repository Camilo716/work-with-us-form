<?php
namespace workWithUs\Validators;

final class FileValidator
{
    public static function isValidateExtension($file, $allowedExtensions)
    {
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        return in_array($fileExtension, $allowedExtensions);
    }
}
