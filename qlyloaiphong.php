<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "homestayms";

// Kết nối cơ sở dữ liệu
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thêm loại phòng
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $loaiphong = $_POST['loaiphong'];
    $giaphong = $_POST['giaphong'];
    $songuoi = $_POST['songuoi'];
    $mota = $_POST['mota'];

    $sql = "INSERT INTO loaiphong (loaiphong, giaphong, songuoi, mota) 
            VALUES ('$loaiphong', '$giaphong', '$songuoi', '$mota')";
    $conn->query($sql);
    header("Location: qlyloaiphong.php");
}

// Xóa loại phòng
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM loaiphong WHERE id_loaiphong = $id";
    $conn->query($sql);
    header("Location: qlyloaiphong.php");
}

// Hiển thị dữ liệu loại phòng
function displayLoaiPhong($conn) {
    $sql = "SELECT * FROM loaiphong";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_loaiphong']}</td>
                <td>{$row['loaiphong']}</td>
                <td>{$row['giaphong']}</td>
                <td>{$row['songuoi']}</td>
                <td>{$row['mota']}</td>
                <td>
                    <a href='qlyloaiphong.php?action=delete&id={$row['id_loaiphong']}' class='btn btn-danger btn-sm'>Xóa</a>
                </td>
              </tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý loại phòng</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Quản lý loại phòng</h1>

        <!-- Form Thêm loại phòng -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Thêm loại phòng mới</div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="loaiphong" class="form-label">Tên loại phòng</label>
                            <input type="text" id="loaiphong" name="loaiphong" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="giaphong" class="form-label">Giá phòng</label>
                            <input type="number" id="giaphong" name="giaphong" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="songuoi" class="form-label">Số người</label>
                            <input type="number" id="songuoi" name="songuoi" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mota" class="form-label">Mô tả</label>
                            <textarea id="mota" name="mota" class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="action" value="add" class="btn btn-success">Thêm loại phòng</button>
                </form>
            </div>
        </div>

        <!-- Bảng Hiển thị danh sách loại phòng -->
        <div class="card">
            <div class="card-header bg-success text-white">Danh sách loại phòng</div>
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tên loại phòng</th>
                            <th>Giá phòng</th>
                            <th>Số người</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php displayLoaiPhong($conn); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
