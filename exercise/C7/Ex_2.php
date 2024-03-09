<?php


$news = array(
    1 => array(
        "id" => 1,
        "title" => "Bắc Ninh phê duyệt kế hoạch xác minh tài sản và thu nhập nhiều sở",
        "content" => "Chủ tịch UBND tỉnh Bắc Ninh vừa có quyết định phê duyệt nội dung kế hoạch xác minh tài sản, thu nhập năm 2024, trong đó có nhiều sở, thị xã và thành phố.
        Theo đó, căn cứ vào nội dung được phê duyệt, Chánh Thanh tra tỉnh Bắc Ninh ban hành kế hoạch xác minh tài sản, thu nhập năm 2024. Các sở, ngành, địa phương, đơn vị, doanh nghiệp liên quan có trách nhiệm phối hợp với Thanh tra tỉnh Bắc Ninh triển khai thực hiện theo quy định.",
        "img" => "https://photo.znews.vn/w660/Uploaded/oplukaa/2024_01_26/xac_minh.jpg",
        "time" => "Thứ bảy, 27/1/2024 13:00 (GMT+7)",
    ),
    2 => array(
        "id" => 2,
        "title" => "Vi phạm nồng độ cồn, còn cầm điện thoại quay CSGT",
        "content" => "Bị lập biên bản vi phạm nồng độ cồn, nam tài xế nói hối hận nhưng nhất quyết không ký mà còn cầm điện thoại quay hoạt động của cảnh sát giao thông.
        Đêm 26/1, Đội tuần tra dẫn đoàn thuộc Phòng Cảnh sát giao thông (CSGT) Công an TP.HCM lập chốt kiểm tra nồng độ cồn tại giao lộ Điện Biên Phủ - Hai Bà Trưng (quận 1).
        Theo đó, căn cứ vào nội dung được phê duyệt, Chánh Thanh tra tỉnh Bắc Ninh ban hành kế hoạch xác minh tài sản, thu nhập năm 2024. Các sở, ngành, địa phương, đơn vị, doanh nghiệp liên quan có trách nhiệm phối hợp với Thanh tra tỉnh Bắc Ninh triển khai thực hiện theo quy định.",
        "img" => "https://photo.znews.vn/w660/Uploaded/oplukaa/2024_01_26/quay.jpg",
        "time" => "Thứ bảy, 27/1/2024 13:00 (GMT+7)",
    ),
);
// echo "<pre>";
// print_r($news);
// echo "</pre>";



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Viết</title>
</head>

<body>
    <div class="container-news">
        <?php foreach ($news as $key => $items): ?>
            <strong>
                <?php echo $items["time"] ?>

            </strong>
            <h1>
                <?php echo $items["title"] ?>
            </h1>
            <p>
                <?php echo $items["content"] ?>
            </p>
            <img src=<?php echo ($items["img"]) ?> alt="">
            <br>
        <?php endforeach; ?>
    </div>
</body>

</html>