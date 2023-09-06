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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="src/css/admincss.css">
</head>
<body>

    <div class="dashboard_main">
        <div class="container">
            <div class="sidebar">
                <a class="logo-expand" href="#">skateboard</a>

                <div class="side-wrapper">
                    <div class="side-title">MENU</div>
                    <div class="side-menu">
                        <a class="sidebar-link discover is-active" href="#">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9.135 20.773v-3.057c0-.78.637-1.414 1.423-1.414h2.875c.377 0 .74.15 1.006.414.267.265.417.625.417 1v3.057c-.002.325.126.637.356.867.23.23.544.36.87.36h1.962a3.46 3.46 0 002.443-1 3.41 3.41 0 001.013-2.422V9.867c0-.735-.328-1.431-.895-1.902l-6.671-5.29a3.097 3.097 0 00-3.949.072L3.467 7.965A2.474 2.474 0 002.5 9.867v8.702C2.5 20.464 4.047 22 5.956 22h1.916c.68 0 1.231-.544 1.236-1.218l.027-.009z" />
                            </svg>
                            Home
                        </a>

                        <a class="sidebar-link trending" href="#">
                            <i class="db_icon fa-solid fa-user"></i>
                            Employee manager
                        </a>

                        <a class="sidebar-link trending" href="#">
                            <i class="db_icon fa-solid fa-users"></i>
                            Customer manager
                        </a>

                        <a class="sidebar-link" href="#">
                            <i class="db_icon fa-solid fa-store"></i>
                            Product Management
                        </a>

                        <a class="sidebar-link" href="#">
                            <i class="db_icon fa-solid fa-receipt"></i>
                            Invoice Management
                        </a>

                        <a class="sidebar-link" href="#">
                            <i class="db_icon fa-solid fa-newspaper"></i>
                            Blog manager
                        </a>
                    </div>
                </div>

                <div class="side-wrapper">
                    <div class="side-title">SETTING</div>
                    <div class="side-menu">
                        <a class="sidebar-link" href="process_logout_admin.php">
                            <i class="db_icon fa-solid fa-gear"></i>
                            Log Out
                        </a>

                        <a class="sidebar-link" href="#">
                            <i class="db_icon fa-solid fa-file-contract"></i>
                            Privacy
                        </a>
                    </div>
                </div>
            </div>


            <div class="wrapper">
                <div class="header">
                    <div class="search-bar">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="user-settings">
                        <img class="user-img" src="https://images.unsplash.com/photo-1587918842454-870dbd18261a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=943&q=80" alt="">
                        <div class="user-name">Thomas</div>
                        <i class="fa-solid fa-chevron-down"></i>
                        <div class="notify">
                            <div class="notification"></div>
                            <i class="fa-solid fa-bell"></i>
                        </div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="main-header anim" style="--delay: 0s">Discover</div>
                    

                </div>
            </div>
        </div>
    </div>

    <script src="src/javascript/adminjs.js"></script>
</body>
</html>