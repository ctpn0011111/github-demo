<?php
if (isset($_FILES["file"])) {
    $uploadDir = "uploads/"; // Thư mục lưu ảnh
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Tạo thư mục nếu chưa có
    }

    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_error = $_FILES["file"]["error"];
    $target_file = $uploadDir . basename($file_name);

    if ($file_error == 0) {
        if (move_uploaded_file($file_tmp, $target_file)) {
            echo "<p>✅ File tải lên thành công!</p>";
            echo "<img src='$target_file' alt='Uploaded Image' style='max-width: 300px; display: block;'>";
        } else {
            echo "<p>❌ Có lỗi khi tải file.</p>";
        }
    } else {
        echo "<p>❌ Lỗi tải file: $file_error</p>";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
