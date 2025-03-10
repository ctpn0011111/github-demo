<?php
    session_start();


// Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
    }
    echo "Thông tin đăng nhập <br>";
    echo "First name: ". $_SESSION['fname']."<br>";
    echo "Last name: ". $_SESSION['lname']."<br>";
    echo "Email: ". $_SESSION['email']."<br>";
    
?>
<form action="logout.php" method="post">
    <button type="submit" name="logout">Đăng xuất</button>
</form>
