<?php

require "config/db_connect.php";
global $pdo;
if ($pdo) {
    $message = "Connection successful!";
} else {
    $message = "Connection failed!";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Form - AJAX</title>
</head>
<body>

<h1>Form - AJAX</h1>

<form id="basicForm" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" name="btn_submit" value="Submit">
    <hr>
    <div id="message"></div>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#basicForm").submit(function (event) {
            event.preventDefault();
            let name = $("#name").val();
            let email = $("#email").val();
            $.ajax({
                url: "config/process.php",
                method: "POST",
                dataType: "text",
                data: {name: name, email: email},
                success: function (response) {
                    $("#message").html(response);
                    alert(" Your form has been submitted successfully");
                    let result = JSON.parse(response);
                    $("#message").html(result.message + "<br>");
                    $("#message").html(result.name + "<br>" + result.email);


                },
                error: function (response, status, error) {
                    $("#message").html(response);
                    console.log(error);
                }

            })
        })
    })
</script>