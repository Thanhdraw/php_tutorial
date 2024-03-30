<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-manager</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="../public/css/signin.css">
</head>

<body>
<div class="wrapper">
    <div id="header">
        <div class="text">
            <p><strong> <?php echo "Welcome " . $_SESSION["user_login"]; ?></strong> ||</p>
            <a href="?page=signout">Sign Out</a>
        </div>
        <ul id="main">
            <li><a href="?page=home">Trang chủ</a></li>
            <li><a href="?page=contact">Contact</a></li>
            <li><a href="?page=about">about</a></li>
            <li><a href="?page=product">Product</a></li>
            <li><a href="?page=login">Login</a></li>
            <li><a href="?page=signin">Sign In</a></li>
        </ul>
    </div>