<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username === "admin" && $password === "admin") {
                echo "<h3>Welcome <span style='color:red'>" . $username . "</span> to website</h3>";
            } else {
                echo "<h3><span style='color:red'>Login Error</span></h3>";
            }
        }
        ?>
    </div>
    <div class="container">
        <form method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>