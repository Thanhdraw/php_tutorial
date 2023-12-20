<?php


$custom_list = [
    "1" => ["Tên" => "Mai Văn Hoàng",
        "Ngày sinh" => "20 - 08 - 1983",
        "Địa chỉ" => "Hà Nội",
        "Ảnh" => "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],

    "2" => ["Tên" => "Mai Văn Hoàng",
        "Ngày sinh" => "20 - 08 - 1983",
        "Địa chỉ" => "Hà Nội",
        "Ảnh" => "https://plus.unsplash.com/premium_photo-1674777843203-da3ebb9fbca0?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],

    "3" => ["Tên" => "Mai Văn Hoàng",
        "Ngày sinh" => "20 - 08 - 1983",
        "Địa chỉ" => "Hà Nội",
        "Ảnh" => "https://images.unsplash.com/photo-1552058544-f2b08422138a?q=80&w=1899&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
    "4" => ["Tên" => "Mai Văn Hoàng",
        "Ngày sinh" => "20 - 08 - 1983",
        "Địa chỉ" => "Hà Nội",
        "Ảnh" => "https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
    "5" => ["Tên" => "Mai Văn Hoàng",
        "Ngày sinh" => "20 - 08 - 1983",
        "Địa chỉ" => "TPHCM",
        "Ảnh" => "https://images.unsplash.com/photo-1500522144261-ea64433bbe27?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],


];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            s width: 100%;
        }

        th,
        td {
            width: 150px;
            height: 100px;
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <table>
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($custom_list as $id => $value): ?>
                <tr>
                    <td>
                        <?php print_r($id) ?>
                    </td>
                    <td>
                        <?php print_r($value["Tên"]) ?>
                    </td>
                    <td>
                        <?php print_r($value["Ngày sinh"]) ?>
                    </td>
                    <td>
                        <?php print_r($value["Địa chỉ"]) ?>
                    </td>
                    <td>
                        <img src=<?php print_r($value["Ảnh"]) ?> alt="">
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>