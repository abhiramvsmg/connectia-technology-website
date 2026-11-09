<?php

class Pdf
{
    public static function savePdf(string $prefix, string $foldername)
    {
        //check if exists
        if (!isset($_FILES['file-input-x']['name'])) {
            return ["success" => false];
        }

        //get name and extension
        $extension = pathinfo($_FILES['file-input-x']["name"], PATHINFO_EXTENSION);
        // $file_name = $_FILES['file-input-x']['name'];
        $file_name = Self::getFileName($prefix);
        $file_tmp = $_FILES['file-input-x']['tmp_name'];
        $file_name = $file_name . $extension;

        $target = __DIR__ . "/../../assets/uploads/" . $foldername . "/" . $file_name;

        if (move_uploaded_file($file_tmp, $target)) {
            return ["success" => true, "filename" => $file_name];
        }
        return ["success" => false];
    }

    private static function getFileName(string $prefix)
    {
        $randomno = rand(0, 100000);
        $rename =  $prefix . date('Ymd') . $randomno;
        return $rename;
    }
}
