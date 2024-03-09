<?php

$uploadDirectory = "uploads/";
if ($_GET['action'] == 'upload') {
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory);
    }
    $uploadFile = $uploadDirectory . basename($_FILES['file']['name']);
    echo $uploadFile;
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "The file " . basename($_FILES['file']['name']) . " has been uploaded";
    } else {
        echo "There was an error uploading the file, please try again!";
    }


}

