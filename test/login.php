<?php
    session_start();
    include "connect.php";
    
    // Kiểm tra nếu đã đăng nhập rồi thì chuyển về home
    if (isset($_SESSION['email'])) {
        header("Location: home.php");
        exit();
    }
    
    // Xử lý đăng nhập
    if(isset($_POST['btndangnhap'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $query = "SELECT * from user where email = '$email' and password = '$password'";
        $kq = $conn->query($query);
        if($kq->num_rows > 0){
            $row = $kq->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            $_SESSION['fname'] = $row['firstname'];
            $_SESSION['lname'] = $row['lastname'];
           
            header("Location: home.php");
            exit();
        }
        else {
            echo "Email hoặc mật khẩu không đúng";
        }
    }
?>
<form action="" method="post">
    <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required>
        </div>
        <button type="submit" id="btndangnhap" name = "btndangnhap">Đăng nhập</button>
</form>