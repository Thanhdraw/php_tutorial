I. Let do exercise upload_file php
    1: Regex file just is image: jpg, png, jpeg,... ✅
    2: What if the files are duplicates ? ✅
    3: How can i choose image to delete ?

II.Conlustion lib/check_file.php


    1: define the path, define (max_file_size), define allow img upload
    2: Get $_FILE form form HTML , anh check $_FILES["name"]["error"] = UPLOAD_ERR_OK
    3: assign value, $file = $_FILE['file'];
    4: create $upload_path
    5: create $allowed_extension
    6: // $file name is get from $file,
       // 'name' is key => $file[name] => solen-feyissa-TeasaJFiC5g-unsplash.jpg

    7: //define $file_extension, purpose is get file extension, 'jpg', 'jpeg', 'png', 'gif'
    8: //First, lower case file extension, and check file extension in $allowed_extensions
    9: //Second, check file size allow in MAX_FILE_SIZE
    10: //Third, check duplicate file name, just return true if file exists and oppositely false
    11://move file from tmp sever to upload_path + file_name in your position folder
    12: create // function check file exit
    13: create function rename file exit





