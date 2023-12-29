<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Solver</title>
</head>

<body>
    <h1>Quadratic Equation Solver</h1>
    <form method="post" id="calculatorForm">
        <label for="a">Enter coefficient a:</label>
        <input type="number" id="a" name="a" value="<?php echo isset($a) ? $a : 0 ?>" required>
        <label for="a">x<sup>2</sup></label>

        <label for="b">Enter coefficient b:</label>
        <input type="number" id="b" name="b" value="<?php echo isset($b) ? $b : 0 ?>" required>
        <label for="b">x</label>

        <label for="c">Enter coefficient c:</label>
        <input type="number" id="c" name="c" value="<?php echo isset($c) ? $c : 0 ?>" required>
        <label for="c"></label>

        <button type="submit">Calculate</button>
    </form>

    <?php
    require "QuadraticEquation.php";
    $result = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            $equation = new QuadraticEquation($a, $b, $c);
            // $result = [
            //     'discriminant' => $equation->getDiscriminant(),
            // ];
            // if (isset($result['discriminant']['roots'])) {
            //     $result['roots'] = $result['discriminant']['roots'];
            // }
            echo $equation->getDiscriminant();
        }
    }
    ?>



</body>

</html>