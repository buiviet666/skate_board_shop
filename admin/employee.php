<?php
    session_start();

    if (empty($_SESSION['id_user'])) {
        header('location:login.php');
    } else {
        echo 'hi';
    }
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

                <h1>bread-crumb</h1>

                <!-- content -->
                <div class="main-container">
                    <div class="main-header anim" style="--delay: 0s">day la trang nhan vien</div>
                    
                    <div class="table_data">
                        <table class="table_data_main">
                            <thead class="table_data_tittle">
                                <tr>
                                    <th>id</th>
                                    <th>tên</th>
                                    <th>giới tính</th>
                                    <th>tên đăng nhập</th>
                                    <th>mật khẩu</th>
                                    <th>số điện thoại</th>
                                    <th>email</th>
                                    <th>địa chỉ</th>
                                    <th>crud</th>
                                </tr>
                            </thead>
                            <tbody class="table_data_content">
                                <tr>
                                    <td>1</td>
                                    <td>việt</td>
                                    <td>nam</td>
                                    <td>
                                        <a>
                                            vietbui
                                        </a>
                                    </td>
                                    <td>
                                        hề
                                        <small>vcl</small>
                                    </td>
                                    <td>
                                        09432-4
                                    </td>
                                    <td>
                                        viet@gmail.com
                                    </td>
                                    <td>
                                        <a class="more" href="">
                                            Ha Noi
                                        </a>
                                    </td>
                                    <td>
                                        <i class="fa-solid fa-info"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>việt</td>
                                    <td>nam</td>
                                    <td>
                                        <a>
                                            vietbui
                                        </a>
                                    </td>
                                    <td>
                                        hề
                                        <small>vcl</small>
                                    </td>
                                    <td>
                                        09432-4
                                    </td>
                                    <td>
                                        viet@gmail.com
                                    </td>
                                    <td>
                                        <a href="">
                                            Ha Noi
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>việt</td>
                                    <td>nam</td>
                                    <td>
                                        <a>
                                            vietbui
                                        </a>
                                    </td>
                                    <td>
                                        hề
                                        <small>vcl</small>
                                    </td>
                                    <td>
                                        09432-4
                                    </td>
                                    <td>
                                        viet@gmail.com
                                    </td>
                                    <td>
                                        <a href="">
                                            Ha Noi
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>việt</td>
                                    <td>nam</td>
                                    <td>
                                        <a>
                                            vietbui
                                        </a>
                                    </td>
                                    <td>
                                        hề
                                        <small>vcl</small>
                                    </td>
                                    <td>
                                        09432-4
                                    </td>
                                    <td>
                                        viet@gmail.com
                                    </td>
                                    <td>
                                        <a href="">
                                            Ha Noi
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>việt</td>
                                    <td>nam</td>
                                    <td>
                                        <a>
                                            vietbui
                                        </a>
                                    </td>
                                    <td>
                                        hề
                                        <small>vcl</small>
                                    </td>
                                    <td>
                                        09432-4
                                    </td>
                                    <td>
                                        viet@gmail.com
                                    </td>
                                    <td>
                                        <a href="">
                                            Ha Noi
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>chuyeern trang</p>

                    <div>
                        <button>
                            theem nhan vien
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="src/javascript/adminjs.js"></script>
</body>
</html>