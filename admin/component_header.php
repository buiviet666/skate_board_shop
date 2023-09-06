<div class="header">
    <div class="search-bar">
        <input type="text" placeholder="Search">
    </div>
    <div class="user-settings">
        <img class="user-img" src="https://images.unsplash.com/photo-1587918842454-870dbd18261a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=943&q=80" alt="">
        <div class="user-name">
            <?php
                echo $_SESSION['ten_admin'];
            ?>
        </div>
        <i class="fa-solid fa-chevron-down"></i>
        <div class="notify">
            <div class="notification"></div>
            <i class="fa-solid fa-bell"></i>
        </div>
    </div>
</div>