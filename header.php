<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
      ';
    }
}
?>

<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img src="assets/img/Logo.png" alt="logo">Gamer<span>Book</span></a>

        <nav class="navbar">
            <a href="home.php">Trang chủ</a>
            <a href="about.php">Về chúng tôi</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Liên hệ</a>
            <a href="orders.php">Đơn hàng</a>
        </nav>

        <div class="icons">
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
            $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $cart_rows_number = mysqli_num_rows($select_cart_number);
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span>
            </a>
        </div>

        <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="login.php" class="delete-btn">logout</a>
        </div>
    </div>
</header>