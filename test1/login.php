<?php
    session_start();
    include("connect.php");
    if(isset($_SESSION['taikhoan'])){
        header("location:home.php");
        exit();
    }
    if(isset($_POST['btndangnhap'])){
        $tk = $_POST['taikhoan'];
        $mk = $_POST['matkhau'];
        $mk = md5($mk);

        $kt = "SELECT * from user where taikhoan = '$tk' and matkhau = '$mk'";
        $kq = $conn->query($kt);
        if($kq->num_rows > 0){
            $row = $kq->fetch_assoc();
            $_SESSION['taikhoan'] = $row['taikhoan'];
            $_SESSION['matkhau'] = $row['matkhau'];
            $_SESSION['sdt'] = $row['sdt'];
            header("location:home.php");
            exit();
        }
    }
    
?>

<form action="" method ="post">
    <div class="input-group">
        <label for="taikhoan">Tài Khoản</label>
        <input type="text" name="taikhoan">
    </div>
    <div class="input-group">
        <label for="matkhau">Mật khẩu</label>
        <input type="text" name="matkhau">
    </div>
    <button type="submit" name="btndangnhap">Đăng Nhập</button>
</form>
<form action="index.php">
    <button type="submit">Đăng Ký</button>
</form>