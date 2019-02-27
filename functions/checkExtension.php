<?php
function checkExtension(string $type, string $file) : bool {
    $file = strtolower($file);
    $extension = substr(strrchr($file, '.'), 1);

    if ($type === "image")
    {
        $fileExtension = array("jpeg", "jpg", "png", "bmp", "gif", "tiff", "webp");
        return in_array($extension, $fileExtension) ?? false;
    }

    elseif ($type === "document")
    {
        $fileExtension = array("doc", "docx", "pdf", "txt", "xls", "xlsx");
        return in_array($extension, $fileExtension) ?? false;
    }

    else
    {
        return false;
    }
}