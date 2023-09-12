<?php
    session_start();

    if (empty($_SESSION['id_user'])) {
        header('location: ../login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/nomalize.css">
    <link rel='stylesheet' type='text/css' href='../src/css/style.css'/>
    <link rel="stylesheet" href="../src/css/media.css">
    <title>Skateboard life</title>
    <link rel="shortcut icon" href="../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.css" integrity="sha512-hcCQQPp7EFTf6BXS6aGe9vk02E5YZzjaI4K1KsAUUjm6WvfvSPKFn4jJiYMiQ68NRl/I6SEl33gW+NVeqZI15g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <div id = "main">
        <?php include "component_sidebar_left.php" ?>    

        <div class = "main_right_content">
            <div class = "right_content_position">
                <!-- main content -->
                
                <div class="table_cart">
                    <h3 class="table_cart_tittle">Your cart</h3>

                    <form class="table_cart_form">
                        <div>
                            <table class="table_cart_form_main">
                                <thead class="table_cart_form_tittle">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Sản phẩm</th>
                                        <th>giá sản phẩm</th>
                                        <th>số lượng</th>
                                        <th>tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table_cart_form_content">
                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td style="width: 100px; height: 100%;">
                                            <img src="../src/save_img_from_db/1694016276.jpg" style="width: 100%">
                                        </td>
                                        <td>
                                            <p>tên</p>
                                            <small>Fugiat voluptates quasi nemo, ipsa perferendis</small>
                                        </td>
                                        <td style="text-align: center;">12 $</td>
                                        <td style="width: 10%;">
                                            <input type="number"  class="input_cart_form_quantity">
                                        </td>
                                        <td style="text-align: center;">
                                            24 $
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td style="width: 100px; height: 100%;">
                                            <img src="../src/save_img_from_db/1694016276.jpg" style="width: 100%">
                                        </td>
                                        <td>
                                            <p>tên</p>
                                            <small>Fugiat voluptates quasi nemo, ipsa perferendis</small>
                                        </td>
                                        <td style="text-align: center;">12 $</td>
                                        <td style="width: 10%;">
                                            <input type="number"  class="input_cart_form_quantity">
                                        </td>
                                        <td style="text-align: center;">
                                            24 $
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" checked>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td style="width: 100px; height: 100%;">
                                            <img src="../src/save_img_from_db/1694016276.jpg" style="width: 100%">
                                        </td>
                                        <td>
                                            <p>tên</p>
                                            <small>Fugiat voluptates quasi nemo, ipsa perferendis</small>
                                        </td>
                                        <td style="text-align: center;">12 $</td>
                                        <td style="width: 10%;">
                                            <input type="number"  class="input_cart_form_quantity">
                                        </td>
                                        <td style="text-align: center;">
                                            24 $
                                        </td>
                                        <td>
                                            <a href="">
                                                <i class="fa-solid fa-xmark"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form_submit_main">
                            <div class="form_submit_btn_position">
                                <p>
                                    <span>Subtotal: </span>
                                    <span>£80.22</span>
                                </p>
                                <a href="">Continue Shopping</a>
                                <input type="submit" name="update" value="Update cart" style="padding: 14px 34px;">
                                <input type="submit" name="check_out" value="Check out" style="padding: 14px 34px;">
                            </div>
                        </div>
                    </form>
                </div>


                <!-- footer content -->
                <?php include "component_footer.php" ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.js" integrity="sha512-zAHJKGyoPf2Y20Wi4uo32sa/vSvwKfY4tYUt6gJfmkA79X0wt5ZfaxL5GqJ5cMnmvGslWi5PKTo51rHRZqYbJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../src/javascript/index.js"></script>
</body>
</html> 