<?php
    session_start();
    if(!isset($_SESSION['taikhoan'])){
        header("location:index.php");
        exit();
    }
    echo "Thông tin đăng nhập <br>";
    echo "Tài khoản: ". $_SESSION['taikhoan'] . "<br>";
    echo "Mật khẩu: ". $_SESSION['matkhau'] . "<br>";
    echo "Số điện thoại: ". $_SESSION['sdt'] . "<br>";

    if(isset($_POST['logout'])){
        session_destroy();
        header("location:login.php");
    }
?>
<form action="" method ="post">
    <button type="submit" name="logout">Đăng xuất</button>
</form>
