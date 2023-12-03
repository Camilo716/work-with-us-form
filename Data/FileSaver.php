<?php

namespace workWithUs\Data;

final class FileSaver
{
    public static function save($file)
    {
        $base_path = "./../Assets/CurriculumsVitae/";
        $file_name = $file['name'];
        $path = $base_path . $file_name;

        move_uploaded_file($file["tmp_name"], $path);
    }
}
