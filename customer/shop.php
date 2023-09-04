<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/nomalize.css">
    <link rel='stylesheet' type='text/css' href='../src/css/style.css'/>
    <link rel="stylesheet" href="../src/css/media.css">
    <link rel="stylesheet" href="../src/css/single.css">
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
                <div>bread-crumb</div>
                <div class="shop">
                    <div style="display: flex">
                        <div class="shop_main_left shop_container">
                            <!-- Danh mục sản phẩm -->
                            <div style="margin-bottom: 40px;">
                                <div class="shop_category_tittle">
                                    <h2>
                                        <span>
                                            Danh mục
                                        </span>
                                    </h2>
                                </div>
                                <div class="shop_category_content">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-caret-right"></i>
                                            <a>Home</a>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-caret-right"></i>
                                            <a>Skateboard</a>
                                            <i class="shop_down_icon fa-solid fa-chevron-down"></i>
                                            <ul class="shop_dropdown-menu">
                                                <li>ván(số lượng)</li>
                                                <li>truck</li>
                                                <li>bánh</li>
                                                <li>bộ sửa</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-caret-right"></i>
                                            <a>Quần áo</a>
                                                <i class="shop_down_icon fa-solid fa-chevron-down"></i>
                                                <ul class="shop_dropdown-menu">
                                                    <li>áo (số lượng)</li>
                                                    <li>quần (số lượng)</li>
                                                </ul>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-caret-right"></i>
                                            <a>Phụ kiện</a>
                                                <i class="shop_down_icon fa-solid fa-chevron-down"></i>
                                                <ul class="shop_dropdown-menu">
                                                    <li>balo (số lượng)</li>
                                                    <li>giày (số lượng)</li>
                                                </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Danh mục nhà sản xuất -->
                            <div style="margin-bottom: 40px;">
                                <div class="shop_category_tittle">
                                    <h2>
                                        <span>nhà sản xuất</span>
                                    </h2>
                                </div>
                                <div class="shop_category_content">
                                    <ul class="shop_manufac_product">
                                        <li>
                                            <span>
                                                <label for="txt_manuf">
                                                    <input type="checkbox" id="txt_manuf">
                                                    nike
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <label for="txt">
                                                    <input type="checkbox" id="txt">
                                                    addidas
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <label for="txt_manuf">
                                                    <input type="checkbox" id="txt_manuf">
                                                    bug
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <label for="txt_manuf">
                                                    <input type="checkbox" id="txt_manuf">
                                                    bug
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <label for="txt_manuf">
                                                    <input type="checkbox" id="txt_manuf">
                                                    bug
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <label for="txt_manuf">
                                                    <input type="checkbox" id="txt_manuf">
                                                    bug
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="shop_main_right shop_container">
                            <div>
                                <!-- part 1 -->
                                <div class="shop_tittle_content_container">
                                    <div class="shop_flex_title_sort">
                                        <div class="shop_main_content_title">
                                            <div style="display:flex; align-items: center;">
                                                <h1>
                                                    kết quả lọc
                                                </h1>
                                                <span>
                                                    (372 sản phẩm)
                                                </span>
                                            </div>
                                        </div>
                                        <div class="shop_main_content_title">
                                            <div>
                                                <!-- <label>
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </label> -->
                                                <ul class="shop_sort_by_wat">
                                                    <li class="shop_size_text">
                                                        <span>
                                                            Sắp xếp theo
                                                        </span>
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                        <ul class="shop_sort_down">
                                                            <li>
                                                                <a>
                                                                    Mặc định
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    A -> Z
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    Z -> A
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    Giá tăng dần
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    Giá giảm dần
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- part 2 -->
                                <div>
                                    <div class="shop_card_container">
                                        <!-- list product -->
                                        <!-- product 1 -->
                                        <div class="shop_all_item">
                                            <div class="shop_item_box">
                                                <div class="shop_item_thumbnail">
                                                    <a href="" class="shop_item_img">
                                                        <img src="../src/img/noimage.gif">
                                                    </a>
                                                    <div class="shop_hover_item clear_fix">
                                                        <form class="shop_form_mini_card">
                                                            <div>
                                                                <button class="shop_icon_minicss hover_green_icon">
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                </button>
                                                                <a href="" style="display: inline-block;" class="shop_icon_minicss hover_green_icon">
                                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                                </a>
                                                                <a style="display: inline-block;" class="shop_icon_minicss hover_pink_icon">
                                                                    <i class="fa-solid fa-heart"></i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="shop_item_content">
                                                    <h3>
                                                        <a href="single_product.php">tên sp</a>
                                                    </h3>
                                                    <div class="shop_item_price">
                                                        <div class="shop_special_price">
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- product 2 -->
                                        <div class="shop_all_item">
                                            <div class="shop_item_box">
                                                <div class="shop_item_thumbnail">
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div class="shop_hover_item">
                                                        <form>
                                                            <div>
                                                                <button>
                                                                    <i>icon giỏ hàng</i>
                                                                </button>
                                                                <a>
                                                                    <i>icon tăng</i>
                                                                </a>
                                                                <a>
                                                                    <i>icon yêu thích</i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="shop_item_content">
                                                    <h3>tên sp</h3>
                                                    <div class="shop_item_price">
                                                        <div class="shop_special_price">
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- product 3 -->
                                            <div class="shop_all_item">
                                            <div class="shop_item_box">
                                                <div class="shop_item_thumbnail">
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div class="shop_hover_item">
                                                        <form>
                                                            <div>
                                                                <button>
                                                                    <i>icon giỏ hàng</i>
                                                                </button>
                                                                <a>
                                                                    <i>icon tăng</i>
                                                                </a>
                                                                <a>
                                                                    <i>icon yêu thích</i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="shop_item_content">
                                                    <h3>tên sp</h3>
                                                    <div class="shop_item_price">
                                                        <div class="shop_special_price">
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- product 4 -->
                                            <div class="shop_all_item">
                                            <div class="shop_item_box">
                                                <div class="shop_item_thumbnail">
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div class="shop_hover_item">
                                                        <form>
                                                            <div>
                                                                <button>
                                                                    <i>icon giỏ hàng</i>
                                                                </button>
                                                                <a>
                                                                    <i>icon tăng</i>
                                                                </a>
                                                                <a>
                                                                    <i>icon yêu thích</i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="shop_item_content">
                                                    <h3>tên sp</h3>
                                                    <div class="shop_item_price">
                                                        <div class="shop_special_price">
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- product 5 -->
                                            <div class="shop_all_item">
                                            <div class="shop_item_box">
                                                <div class="shop_item_thumbnail">
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div class="shop_hover_item">
                                                        <form>
                                                            <div>
                                                                <button>
                                                                    <i>icon giỏ hàng</i>
                                                                </button>
                                                                <a>
                                                                    <i>icon tăng</i>
                                                                </a>
                                                                <a>
                                                                    <i>icon yêu thích</i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="shop_item_content">
                                                    <h3>tên sp</h3>
                                                    <div class="shop_item_price">
                                                        <div class="shop_special_price">
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <!-- product 6 -->
                                            <div class="shop_all_item">
                                            <div class="shop_item_box">
                                                <div class="shop_item_thumbnail">
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div class="shop_hover_item">
                                                        <form>
                                                            <div>
                                                                <button>
                                                                    <i>icon giỏ hàng</i>
                                                                </button>
                                                                <a>
                                                                    <i>icon tăng</i>
                                                                </a>
                                                                <a>
                                                                    <i>icon yêu thích</i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="shop_item_content">
                                                    <h3>tên sp</h3>
                                                    <div class="shop_item_price">
                                                        <div class="shop_special_price">
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <ul class="shop_pagination">
                                                <!-- back -->
                                                <li>
                                                    <a><<</a>
                                                </li>

                                                <li>
                                                    <a>1</a>
                                                </li>
                                                <li>
                                                    <a>2</a>
                                                </li>
                                                <li>
                                                    <a>3</a>
                                                </li>

                                                <!-- next -->
                                                <li>
                                                    <a>>></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
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