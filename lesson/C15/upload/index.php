<?php
require_once 'lib/data.php';
if (isset($_FILES['file'])) {



    // folder containing uploaded files 

    $upload_dir = 'uploads/';

    // Destination file was uploaded

    $upload_file = $upload_dir . $_FILES['file']['name'];

    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "✅ File uploaded successfully";
        echo "<a href=$upload_file> Download: {$_FILES['file']['name']}</a>";

    } else {
        echo "⚠️ Error uploading file";
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload with PHP</title>
</head>

<body>
    <h2>Upload a File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Chọn file <input type="file" name="file" id="file">
        <button type="submit" name="uploadFile1" value="uploadFile1">Upload</button>
    </form>
</body>

</html>