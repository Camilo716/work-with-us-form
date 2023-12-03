<?php
namespace Validators;

final class FileValidator
{
    public static function isValidExtension($file, $allowedExtensions)
    {
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        return in_array($fileExtension, $allowedExtensions);
    }
}
