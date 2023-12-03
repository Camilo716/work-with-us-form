<?php
namespace Validators;

final class StringValidator
{
    public static function isValid(array $values)
    {
        foreach($values as $value)
        {
            if(empty($value)) return false;
        }
    }
}
