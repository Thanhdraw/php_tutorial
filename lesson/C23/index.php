<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <title>Làm việc với Ajax - Jquery</title>
    <script>
        $(document).ready(function () {
            $("#quantity").change(function () {
                let quantity = $("#quantity").val();
                let Price = $("#Price").text();
                let total = $("#total").text();
                console.log("quantity: " + quantity, "Price: " + Price);
                let data = {quantity: quantity, total: total};
                $.ajax({
                    url: "process.php", //(Not Found 404) => đường dẫn không tồn tại
                    method: "POST",
                    data: {
                        quantity: quantity,
                        total: total
                    },
                    dataType: "text",
                    success: function (response) {
                        let $result = JSON.parse(response);
                        $("#total").html("<strong>" + $result.total + "</strong>");

                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr, ajaxOptions, thrownError);
                        alert(thrownError);
                    }
                })
            });
        })
    </script>
</head>
<body>
<h1>Tiính toán bằng Ajax</h1>
<form action="process.php" method="post">
    <p>Giá: <span id="Price">10</span></p>
    <label for="">Số lượng</label>
    <input type="number" id="quantity" min="0" max="20" name="quantity" value="0">
    <hr>
    <label for="">Tổng: <span id="total">10 </span></label>
</form>
</body>
</html>