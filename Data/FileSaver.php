<?php

namespace Data;

final class FileSaver
{
    public static function save($file)
    {
        $base_path = "./Assets/CurriculumsVitae/";
        $file_name = $file['name'];
        $file_name = str_replace(' ', '_', $file_name);
        $path = $base_path . $file_name;

        if (!file_exists($base_path)) {
            mkdir($base_path, 0777, true);
        }

        move_uploaded_file($file["tmp_name"], $path);
    }
}
