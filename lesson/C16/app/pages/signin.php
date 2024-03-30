<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../public/css/signin.css">
</head>
<body>
<div class="container">
    <form action="../data/user.php" method="POST">
        <h2>Sign In</h2>
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <span class="error" style="color: #B31312;"><?php echo $error["username"] ?? ""; ?></span>
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span class="error" style="color: #B31312;"><?php echo $error["password"] ?? ""; ?></span>

        </div>
        <div class="input-group">
            <button name="submit" type="submit" value="submit">Sign In</button>
        </div>

    </form>
</div>
</body>
</html>

