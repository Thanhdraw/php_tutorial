<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 300px;
            display: flex;
            flex-direction: column;
            margin: 50px auto;
        }

        label {
            margin-top: 10px;
        }

        button {
            margin-top: 20px;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Calculator</h1>
    <form method="post" action="">
        <label for="num1"> Number 1: </label>
        <input type="number" name="num1" id="num1" required>

        <label for="num2"> Number 2: </label>
        <input type="number" name="num2" id="num2" required>

        <label for="operation"> Operation: </label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>

        <button type="submit">Calculate</button>
    </form>
</body>

</html>




<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        $num_1 = $_POST["num1"];
        $num_2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = Caculate($num_1, $num_2, $operation);
        echo "Sau tinh toan: $num_1 $operation $num_2: " . $result;
    } else {
        error_log("Oracle database not available!");
    }
}


function Caculate($num_1, $num_2, $operation)
{
    switch ($operation) {
        case "add":
            $result = $num_1 + $num_2;
            break;
        case "subtract":
            $result = $num_1 - $num_2;
            break;
        case "multiply":
            $result = $num_1 * $num_2;
            break;
        case "divide":
            if ($num_2 != 0 && $num_2 > 0) {

                $result = $num_1 / $num_2;
                break;
            } else {
                echo "Cannot divide by zero!";

            }
        default:
            return "Invalid operation";
    }
    return $result;
}
?>