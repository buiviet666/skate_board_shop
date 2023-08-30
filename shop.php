<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/nomalize.css">
    <link rel='stylesheet' type='text/css' href='src/css/style.css'/>
    <link rel="stylesheet" href="src/css/media.css">
    <link rel="stylesheet" href="src/css/single.css">
    <title>Skateboard life</title>
    <link rel="shortcut icon" href="./src/img/favicon.png" type="image/x-icon">
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
                                                <ul class="">
                                                    <li>ván(số lượng)</li>
                                                    <li>truck</li>
                                                    <li>bánh</li>
                                                    <li>bộ sửa</li>
                                                </ul>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-caret-right"></i>
                                            <a>quần áo</a>
                                                <i class="fa-solid fa-chevron-down"></i>
                                                <ul>
                                                    <li>áo (số lượng)</li>
                                                    <li>quần (số lượng)</li>
                                                </ul>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-caret-right"></i>
                                            <a>phụ kiện</a>
                                                <i class="fa-solid fa-chevron-down"></i>
                                                <ul>
                                                    <li>balo (số lượng)</li>
                                                    <li>giày (số lượng)</li>
                                                </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Danh mục nhà sản xuất -->
                            <div>
                                <div>
                                    <div>
                                        <h2>
                                            <span>nhà sản xuất</span>
                                        </h2>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>
                                                <span>
                                                    <label>
                                                        <input>
                                                        "nike"
                                                    </label>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <label>
                                                        <input>
                                                        "addidas"
                                                    </label>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <label>
                                                        <input>
                                                        "bug"
                                                    </label>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop_main_right shop_container">
                            <div>
                                <!-- part 1 -->
                                <div>
                                    <div>
                                        <div>
                                            <div>
                                                <h1>
                                                    kết quả lọc
                                                </h1>
                                                <span>
                                                    (372 sản phẩm)
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <label><i>icon</i></label>
                                                <ul>
                                                    <li>
                                                        <span>
                                                            Mặc định
                                                        </span>
                                                        <ul>
                                                            <li>Mặc định</li>
                                                            <li>A -> Z</li>
                                                            <li>Z -> A</li>
                                                            <li>Giá tăng dần</li>
                                                            <li>Giá giảm dần</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- part 2 -->
                                <div>
                                    <div>
                                        <!-- list product -->
                                           <!-- product 1 -->
                                        <div>
                                            <div>
                                                <div>
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div>
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
                                                <div>
                                                    <h3>tên sp</h3>
                                                    <div>
                                                        <div>
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                           <!-- product 2 -->
                                        <div>
                                            <div>
                                                <div>
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div>
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
                                                <div>
                                                    <h3>tên sp</h3>
                                                    <div>
                                                        <div>
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- product 3 -->
                                        <div>
                                            <div>
                                                <div>
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div>
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
                                                <div>
                                                    <h3>tên sp</h3>
                                                    <div>
                                                        <div>
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <!-- product 4 -->
                                        <div>
                                            <div>
                                                <div>
                                                    <a>
                                                        <img>
                                                    </a>
                                                    <div>
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
                                                <div>
                                                    <h3>tên sp</h3>
                                                    <div>
                                                        <div>
                                                            <span>
                                                                11000 Đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- part 3 -->
                                <div>
                                    <div>
                                        <ul>
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

                <!-- footer content -->
                <?php include "component_footer.php" ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.min.js" integrity="sha512-zAHJKGyoPf2Y20Wi4uo32sa/vSvwKfY4tYUt6gJfmkA79X0wt5ZfaxL5GqJ5cMnmvGslWi5PKTo51rHRZqYbJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="src/javascript/index.js"></script>
</body>
</html> 