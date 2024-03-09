<?php

$list_post_cat = array(
	1 => array(
		"id" => 1,
		"title" => "Giáo dục",
		"level" => 0,
	),
	2 => array(
		"id" => 2,
		"title" => "Khuyến học",
		"level" => 1,
	),
	3 => array(
		"id" => 3,
		"title" => "Du học",
		"level" => 1,
	),
	4 => array(
		"id" => 4,
		"title" => "Thể thao",
		"level" => 0,
	),
	5 => array(
		"id" => 5,
		"title" => "Châu Âu",
		"level" => 1,
	),
	6 => array(
		"id" => 6,
		"title" => "Châu Á",
		"level" => 1,
	),
);
echo "<pre>";
print_r($list_post_cat);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <?php if (!empty($list_post_cat)): ?>
        <?php $temp = 0;?>
        <?php foreach ($list_post_cat as $value): ?>
            <table>
                <?php $temp++;?>
                <tr>
                    <td><?php echo $temp; ?></td>
                </tr>
                <tr>
                    <td><?php echo str_repeat("--", $value["level"]) . $value["title"]; ?></td>
                </tr>
            </table>
        <?php endforeach;?>
    <?php endif;?>

</body>
</html>
