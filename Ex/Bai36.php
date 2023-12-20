<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #result {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Shape Printer</h1>

    <form method="post" id="menu" action="">
        <label for="shapeSelector">Choose a shape:</label>
        <select id="shapeSelector" name="selectedShape">
            <option value="rectangle">Print the rectangle</option>
            <option value="squareTriangle">Print the square triangle</option>
            <option value="isoscelesTriangle">Print isosceles triangle</option>
        </select>
        <button type="submit">Print</button>
    </form>

    <div id="result"></div>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedShape = $_POST["selectedShape"];
    $result = Shape($selectedShape);
    echo "$result";





}

function Shape($selectedShape, )
{

    $array_shape = array();
    $ket_qua = '';
    switch ($selectedShape) {
        case "rectangle":
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    $ket_qua .= "*";
                }
                $ket_qua .= "<br>";
            }
            break;
        case "squareTriangle":
            $chieu_cao = 5;

            for ($i = 1; $i <= $chieu_cao; $i++) {
                // Add leading spaces to center the triangle
                for ($k = 1; $k <= $chieu_cao - $i; $k++) {
                    $ket_qua .= "&nbsp;&nbsp;";
                }

                // Add asterisks for the current row
                for ($j = 1; $j <= $i; $j++) {
                    $ket_qua .= "*&nbsp;";
                }

                $ket_qua .= "<br>";
            }
            break;
        case "isoscelesTriangle":
            $chieu_cao = 5;

            for ($i = 7; $i >= 1; $i--) {
                // Add leading spaces to center the triangle
                for ($k = 1; $k <= $chieu_cao + $i; $k++) {
                    $ket_qua .= "&nbsp;&nbsp;";
                }

                // Add asterisks for the current row
                for ($j = 1; $j <= $i; $j++) {
                    $ket_qua .= "*&nbsp;";
                }

                $ket_qua .= "<br>";
            }
            break;
    }
    return $ket_qua;
}


?>