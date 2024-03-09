<?php
global $uploadDirectory;

if (isset($_GET['file'])) {
    echo $_GET['file'];
    $file_contains = $_GET['file'];
    if (!file_exists($file_contains)) {
        echo "File not found";
        exit();
    } else {
        if (unlink($file_contains)) {
            echo "File deleted successfully";
        } else {
            echo "Failed to delete file";
        }
    }
}


