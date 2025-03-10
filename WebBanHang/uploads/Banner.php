<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['banner'])) {
    $upload_dir = 'uploads/';
    $target_file = $upload_dir . 'tải xuống313123123213.jpg'; // Tên cố định

    // Kiểm tra định dạng file (chỉ cho phép jpg, png)
    $allowed_types = ['image/jpeg', 'image/png'];
    if (in_array($_FILES['banner']['type'], $allowed_types)) {
        if (move_uploaded_file($_FILES['banner']['tmp_name'], $target_file)) {
            echo "Upload thành công!";
        } else {
            echo "Lỗi khi upload!";
        }
    } else {
        echo "Chỉ chấp nhận ảnh JPG & PNG!";
    }
}
?>