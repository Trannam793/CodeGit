<?php
$servername = "localhost"; // Tên server
$username = "root";        // Tên đăng nhập database
$password = "";            // Mật khẩu database
$database = "homestayms";  // Tên cơ sở dữ liệu

// Tạo kết nối
$connection = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($connection->connect_error) {
    die("Kết nối thất bại: " . $connection->connect_error); // Báo lỗi kết nối
} else {
    echo "Kết nối thành công!";
}
?>
