
<?php
      session_start();
      include "connect.php";
      if (isset($_SESSION['email'])) {
        header("Location: home.php");
        exit();
    }

    if(isset($_POST['btndangky'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        
        $checkemail = "SELECT * from user where email = '$email'";
        $kq = $conn->query($checkemail);

        if($kq->num_rows > 0){
            echo "Email đã tồn tại";
        }
        else{
            $chen = "INSERT into user(firstname, lastname, email, password)
            values('$fname', '$lname', '$email',  '$password')";
            if($conn->query($chen)){
                header("location: login.php");
                exit();
            }
            else
            echo "Lỗi".$conn->error;
        }
    }
 
?>
<form action="" method="post">
    <div class="input-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" required>
    </div>
    <div class="input-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" required>
    </div>
    <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required>
    </div>
    <button type="submit" id="btndangky" name="btndangky">Đăng ký</button>
    
    
</form> 
    