<?php

require "lib/check_file.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
<h2>Upload a File</h2>

<form action="lib/check_file.php" method="post" enctype="multipart/form-data">
    Chọn file <input type="file" name="file" id="file">
    <div class="form-group">
        <p>just file format: <b>jpg, jpeg, png, gif</b></p>
        <button type="submit" name="uploadFile">Upload</button>
    </div>

</form>
<div class="row">

</div>

<div class="container mt-5">
    <h2 class="mb-4">Uploaded Files</h2>

    <ul class="row">
        <!-- Second row: Display images -->
        <?php
        global $uploadDirectory;
        $uploadDirectory = "uploads/";

        if (is_dir($uploadDirectory)) {
            if ($dh = opendir($uploadDirectory)) {

                $counter = 1;
                while (($file = readdir($dh)) !== false) {
                    if ($file != '.' && $file != '..') {
                        // Display the file as a list item
                        echo "<div class='row'>";
                        echo "<li class='img'><a href='$uploadDirectory$file'>$file</a></li>";
                        echo "<div class='delete'><a href='lib/delete_file.php?file=" . urlencode($uploadDirectory . $file) . "' class='btn btn-danger'>
                        <i class='fas fa-trash'></i> Delete</a></div>";
                        echo "</div>";
                        $counter++;
                    }

                }
                closedir($dh);
            }
        }
        ?>
    </ul>
</div>


</body>
</html>
