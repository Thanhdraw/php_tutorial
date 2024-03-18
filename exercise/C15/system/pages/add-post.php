<?php
const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif'];
const FILE_SIZE = 3000000;
function show_array($data): void
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function check_img($data)
{
    $allow_extension = ALLOWED_EXTENSIONS;
    $file_extension = pathinfo($data["name"], PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension), $allow_extension)) {
        return false;
    }
    if ($data["size"] > FILE_SIZE) {
        return false;
    }
    return true;
}

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $img = $_FILES["image"];
    $img_name = $img["name"];
    if (check_img($img)) {
        if (move_uploaded_file($img["tmp_name"], "uploads/" . $img_name)) {
            echo "Upload file thanh cong";
            echo "<img src='uploads/$img_name'>";
            $data = [
                "title" => $title,
                "content" => $content,
                "image" => $img_name
            ];
            show_array($data);
        } else {
            echo "Upload file failed";
        }
    } else {
        echo "⚠️ File not valid";
    }


}

?>


<h1>Thêm bài viết</h1>
<script src="plugin/ckeditor/ckeditor.js"></script>
<form action="" method="post" enctype="multipart/form-data">
    <h2>Tiêu đề</h2>
    <input type="text" name="title">
    <h2>Nội dung</h2>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <h2>Hình ảnh</h2>
    <input type="file" name="image">
    <button type="submit" name="submit">Đăng</button>
</form>

<script>
    // Replace the textarea with CKEditor
    CKEDITOR.replace('content');
</script>

