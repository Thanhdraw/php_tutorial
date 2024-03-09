<?php
// Kiểm tra sự tồn tại của tệp và xử lý tên tệp nếu cần thiết
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    echo "<pre>";
    print_r($file);
    echo "</pre>";
    $upload_path = '../uploads/';

    $pattern = '([^\s]+(\.(?i)(jpe?g|png|gif|bmp))$)';
    if (!preg_match($pattern, $file['name'])) {
        echo "⚠️ File không hợp lệ ";
        echo "<a href=\"../index.php\">Back</a>";
        exit();
    } else {
        $upload_file = $upload_path . $file['name'];
        echo "File nội chọn: {$file['name']}";
        if (check_duplicate($upload_path . $file["name"])) {
            echo "<br>File đã tồn tại<br>"; // In ra thông báo nếu tập tin đã tồn tại
            $file['name'] = rename_file_exit($file['name'], $upload_path); // Đổi tên tệp nếu đã tồn tại
            echo "==File đổi tên: {$file['name']}==<br>";
            move_uploaded_file($file['tmp_name'], $upload_path . $file['name']);
            echo "✅ File đã đổi tên và được tải lên thành công || {$file['name']} <br>";
        } else {
            move_uploaded_file($file['tmp_name'], $upload_file);
            echo "✅ File đã được tải lên thành công || {$file['name']} <br>";
        }
        echo "<a href=\"../index.php\">Back</a>";
//        if (move_uploaded_file($file['tmp_name'], $upload_file)) {
//            echo "✅ File đã được tải lên thành công || {$file['name']} <br>";
//            echo "<a href=$upload_file> Tải xuống: {$file['name']}</a>";
//        } else {
//            echo "Upload Failed :((";
//        }
    }
}

// Hàm kiểm tra sự tồn tại của tệp
function check_duplicate($fileName): bool
{
    if (file_exists($fileName)) {
        return true;
    }
    return false;
}

// Hàm đổi tên tệp nếu đã tồn tại
function rename_file_exit($fileName, $upload_path)
{
    $newFileName = $fileName;
    $i = 1;
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);

    // Kiểm tra xem tên tệp có tồn tại không
    while (file_exists($upload_path . $newFileName)) {
        // Tạo tên mới bằng cách thêm số vào phía trước của tên tệp
        $newFileName = $fileWithoutExtension . "($i).$fileExtension";
        $i++;
    }

    return $newFileName;
}


