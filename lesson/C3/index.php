<?php
$title = "Bài tập chương 3";
$username = "thanhdraw";
$fullname = "dangquocthanh";
$mail = "naruto@gmail.com";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "$title" ?>
    </title>
</head>

<body>

    <ul>
        <li>
            Họ và tên
            <b>
                <?php echo "$fullname" ?>
            </b>
        </li>
        <li>
            Username:
            <b>
                <?php echo "$username" ?>
            </b>
        </li>
        <li>
            Email:
            <b>
                <?php echo "$mail" ?>
            </b>
        </li>
    </ul>


</body>

</html>