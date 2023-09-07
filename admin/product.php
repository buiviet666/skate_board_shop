<?php
    session_start();

    if (empty($_SESSION['id_user'])) {
        header('location:login.php');
    } else {
        echo 'hi';
    }

    require 'connect.php';
    $sql_product = "select * from product";
    $result_product = mysqli_query($connect, $sql_product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/nomalize.css">
    <link rel="stylesheet" href="src/css/tabledata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
    <link rel="stylesheet" href="src/css/admincss.css">
</head>
<body>

    <div class="dashboard_main">
        <div class="container">
            <!-- menu -->
            <?php include "component_menu.php" ?>

            <div class="wrapper">
                <!-- header -->
                <?php include "component_header.php" ?>

                <!-- content -->
                <div class="main-container">
                    <div class="main-header anim" style="--delay: 0s">day la trang san pham</div>
                    
                    <div class="table_data">
                        <table class="table_data_main">
                            <thead class="table_data_tittle">
                                <tr>
                                    <th>id</th>
                                    <th>tên</th>
                                    <th>mô tả</th>
                                    <th>giá</th>
                                    <th>ảnh</th>
                                    <th>số lượng</th>
                                    <th>loại</th>
                                    <th>nhà sản xuất</th>
                                    <th>crud</th>
                                </tr>
                            </thead>
                            <tbody class="table_data_content">

                                <?php foreach ($result_product as $each) { ?>

                                <tr>
                                    <td>
                                        <?php echo $each['id_product']; ?>
                                    </td>
                                    <td>
                                        <?php echo $each['name_product']; ?>
                                    </td>
                                    <td>
                                        <?php echo $each['desc_product']; ?>
                                    </td>
                                    <td>
                                        <a>
                                            <?php echo $each['price_product']; ?> $
                                        </a>
                                    </td>
                                    <td style ="width: 10%;">
                                        <img src="../src/save_img_from_db/<?php echo $each['img_product']; ?>">
                                        <small>vcl</small>
                                    </td>
                                    <td>
                                        <?php echo $each['number_product']; ?>
                                    </td>
                                    <td>
                                        <?php echo $each['type_product']; ?>
                                    </td>
                                    <td>
                                        <a class="more">
                                            <?php echo $each['name_manufacturer']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <i class="fa-solid fa-info"></i>
                                    </td>
                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <p>chuyeern trang</p>

                    <div class="form_popup">
                        <!-- Button -->
                        <div class="btn-wrapper">
                            <button class="myBtn" id="myBtn">add</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal-container" id="myModal">
                            <div class="modal-wrapper">
                                <div class="modal">

                                    <form action="product/process_add_product.php" method="post" enctype="multipart/form-data">
                                        <header>
                                            <h2>Thêm sản phẩm</h2>
                                        </header>

                                        <main>
                                            <div class="input_position">
                                                <input type="text" name="name_product" required />
                                                <p>Tên sản phẩm</p>
                                                <span></span>
                                            </div>
                                            <div class="input_position">
                                                <input type="text" name="desc_product" required />
                                                <p>Mô tả</p>
                                                <span></span>
                                            </div>
                                            <div class="input_position">
                                                <input type="number" name="price_product" required />
                                                <p>Giá</p>
                                                <span></span>
                                            </div>
                                            <div class="input_position">
                                                <input type="text" name="type_product" required />
                                                <p>Loại sản phẩm</p>
                                                <span></span>
                                            </div>
                                            <div class="input_position">
                                                <input type="number" name="number_product" required />
                                                <p>Số lượng sản phẩm</p>
                                                <span></span>
                                            </div>
                                            <div class="input_position">
                                                <input type="text" name="manuf_product" required />
                                                <p>Tên nhà sản xuất</p>
                                                <span></span>
                                            </div>
                                            
                                            <!-- ảnh -->
                                            <div class="input_position">
                                                <input type="file" name="img_product" required />
                                                <span></span>
                                            </div>
                                            <!-- hết ảnh -->

                                        </main>

                                        <footer>
                                            <div class="btn-container">
                                                <div class="cancel-wrapper">
                                                    <input type="submit" class="btn btn-cancel" value="tạo">
                                                </div>
                                                <div class="delet-confirm-wrapper">
                                                    <a class="btn btn-confirm">
                                                        <i class="fa-solid fa-trash"></i>
                                                        Hủy
                                                    </a>
                                                </div>
                                            </div>
                                        </footer>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <script src="src/javascript/adminjs.js"></script>
</body>
</html>