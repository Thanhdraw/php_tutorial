<?php

//Define constant UPLOAD_PATH
const upload_path = "../uploads/";

//Define constant MAX_FILE_SIZE
const MAX_FILE_SIZE = 3000000;

//Define constant ALLOWED_EXTENSIONS
const ALLOWED_EXTENSIONS = ["jpg", "jpeg", "png", "gif"];

if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $file = $_FILES['file'];
    $upload_path = upload_path;
    $allowed_extensions = ALLOWED_EXTENSIONS;

    $file_name = $file["name"];
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $upload_file = $upload_path . $file_name;

    //check file đúng định dạng
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "⚠️ File extension not allowed";
        exit();
    }

    // check file exits
    if (file_exists($upload_file)) {
        $file_name = rename_file_exit($file_name, $upload_path);
    }

    if (move_uploaded_file($file["tmp_name"], $upload_path . $file_name)) {
        echo "✅ File upload thanh cong || $file_name <br>";
        echo "<a href=$upload_file> Download: $file_name</a> ";
    } else {
        echo "Upload Failed :((";
    }
}

function check_duplicate($fileName): bool
{
    return file_exists($fileName);
}

function rename_file_exit($fileName, $upload_path)
{
    $newFileName = $fileName;
    $i = 1;
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);
    while (file_exists($upload_path . $newFileName)) {
        $newFileName = $fileWithoutExtension . "($i).$fileExtension";
        $i++;
    }
    return $newFileName;
}


