<?php


//Define constant UPLOAD_PATH
const UPLOAD_PATH = '../uploads/';

//Define constant MAX_FILE_SIZE
const MAX_FILE_SIZE = 3000000;

//Define constant ALLOWED_EXTENSIONS
const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif'];

//Check File Exists and not error when uploading file , and "UPLOAD_ERR_OK" = 0
if (isset($_REQUEST['uploadFile'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        //$file is get from $_FILES, 'file' is key
        $file = $_FILES['file'];

        //    define $upload_path
        $upload_path = UPLOAD_PATH;

        //    define $allowed_extensions, 'jpg', 'jpeg', 'png', 'gif'
        $allowed_extensions = ALLOWED_EXTENSIONS;

        // $file name is get from $file,
        // 'name' is key => $file[name] => solen-feyissa-TeasaJFiC5g-unsplash.jpg
        $file_name = $file['name'];

        //define $file_extension, purpose is get file extension, 'jpg', 'jpeg', 'png', 'gif'
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

        //First, lower case file extension, and check file extension in $allowed_extensions
        if (!in_array(strtolower($file_extension), $allowed_extensions)) {
            echo "⚠️ File not valid || ";
            echo "<a href=\"../main.php\">Back</a>";
            exit();
        }

        //Second, check file size allow in MAX_FILE_SIZE
        if ($file['size'] > MAX_FILE_SIZE) {
            echo "⚠️ File too large";
            echo "<a href=\"../main.php\">Back</a>";
            exit();
        }


        //../uploads/solen-feyissa-TeasaJFiC5g-unsplash.jpg
        //Specify the file path
        $upload_file = $upload_path . $file_name;

        //Third, check duplicate file name, just return true if file exists and oppositely false
        if (file_exists($upload_file)) {
            $file_name = rename_file_exit($file_name, $upload_path);
        }

        //move file from tmp sever to upload_path + file_name in your position folder
        if (move_uploaded_file($file['tmp_name'], $upload_path . $file_name)) {
            echo "✅ File đã được tải lên thành công || {$file_name} <br>";
            echo "<a href=$upload_file> Tải xuống: {$file_name}</a> || ";
            echo "<a href=\"../main.php\">Back</a>";
        } else {
            echo "Upload Failed :((";
        }

    }
}else {
    echo "You have to upload file";
}

// function check file exit
function check_duplicate($fileName): bool
{
    if (file_exists($fileName)) {
        return true;
    }
    return false;
}

//funtion rename file exit
function rename_file_exit($fileName, $upload_path)
{
    $newFileName = $fileName;
    $i = 1;
    //$fileExtension = solen-feyissa-TeasaJFiC5g-unsplash.jpg => jpg
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    //$fileWithoutExtension is solen-feyissa-TeasaJFiC5g-unsplash
    $fileWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);

    // Kiểm tra xem tên tệp có tồn tại không
    while (file_exists($upload_path . $newFileName)) {
        // Tạo tên mới bằng cách thêm số vào phía trước của tên tệp
        $newFileName = $fileWithoutExtension . "($i).$fileExtension";
        $i++;
    }

    return $newFileName;
}


