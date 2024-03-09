<?php
//delete file image
$file_url = 'uploads/Caohoc(1).jpg';

if (!file_exists($file_url)) {
    echo 'File not found';
    exit;
}else{
    if(unlink($file_url)){
        echo 'Delete Success';
    }else{
        echo 'Delete Failed';
    }
}
