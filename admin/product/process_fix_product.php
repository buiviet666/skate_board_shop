<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_product = $_POST['id_product'];
    $name_product = $_POST['name_product'];
    $desc_product = $_POST['desc_product'];
    $price_product = $_POST['price_product'];
    $type_product = $_POST['type_product'];
    $number_product = $_POST['number_product'];
    $manuf_product = $_POST['manuf_product'];

    // Xử lý ảnh nếu được tải lên
    if ($_FILES['img_product']['error'] === 0) {
        $folder = '../../src/save_img_from_db/';
        $file_extension = pathinfo($_FILES['img_product']['name'], PATHINFO_EXTENSION);
        $file_img_name = time() . '.' . $file_extension;
        $file_path = $folder . $file_img_name;

        // Di chuyển tệp tải lên đến thư mục đích
        if (move_uploaded_file($_FILES['img_product']['tmp_name'], $file_path)) {
            // Tiến hành cập nhật cơ sở dữ liệu
            require '../connect.php'; // Kết nối đến cơ sở dữ liệu, thay thế bằng thông tin đăng nhập của bạn

            // Sử dụng prepared statements để tránh SQL injection
            $sql = "UPDATE product SET name_product = ?, desc_product = ?, price_product = ?, img_product = ?, type_product = ?, number_product = ?, name_manufacturer = ? WHERE id_product = ?";
            $stmt = mysqli_prepare($connect, $sql);
            mysqli_stmt_bind_param($stmt, "sssssssi", $name_product, $desc_product, $price_product, $file_img_name, $type_product, $number_product, $manuf_product, $id_product);

            if (mysqli_stmt_execute($stmt)) {
                // Đóng statement và kết nối cơ sở dữ liệu
                mysqli_stmt_close($stmt);
                mysqli_close($connect);

                header('location: ../product.php'); // Chuyển hướng sau khi cập nhật thành công
                exit();
            } else {
                echo "Lỗi khi cập nhật dữ liệu: " . mysqli_error($connect);
            }
        } else {
            echo "Lỗi khi tải ảnh lên.";
        }
    } else {
        echo "Không có ảnh nào được tải lên.";
    }
}
?>
