<?php
    session_start();
    include("connect.php");
    if(isset($_SESSION['taikhoan'])){
        header("location:home.php");
        exit();
    }
    if(isset($_POST['btndangky'])){
        $tk = $_POST['taikhoan'];
        $mk = $_POST['matkhau'];
        $sdt = $_POST['sdt'];
        $mk = md5($mk);
    
    $checktk = "SELECT * from user where taikhoan = '$tk'";
    $kq = $conn->query($checktk);
    if($kq->num_rows > 0){
        echo "Tài khoản đã tồn tại";
    }
    else{
        $chen = "INSERT into user(taikhoan, matkhau, sdt)
        values ('$tk', '$mk', $sdt)";
        if($conn->query($chen)){
        header("location:login.php");
        exit();
        }
    }
}
    if(isset($_POST['btndangnhap1'])){
        header("location:login.php");
        exit();
    }
?>

<form action="" method ="post">
    <div class="input-group">
        <label for="taikhoan">Tài Khoản</label>
        <input type="text" name="taikhoan" required>
    </div>
    <div class="input-group">
        <label for="matkhau">Mật khẩu</label>
        <input type="text" name="matkhau"required>
    </div>
    <div class="input-group">
        <label for="sdt">Số điện thoại</label>
        <input type="text" name="sdt"required>
    </div>
    <button type="submit" name="btndangky">Đăng ký</button>
    
</form>
    <form action="login.php">
        <button type="submit">Đăng Nhập</button>
    </form>