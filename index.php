<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký và đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id ='signup'>
        <h1 class="form-title">Đăng ký</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" id="fname" placeholder="Fisrt Name" required>
                <label for="fname">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                <label for="lname">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign up" name="signup">
        </form>
        <p class="or">
            ---------- or ----------
        </p>
        <div class="icons">
            <i class="fab fb-google"></i>
            <i class="fab fb-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    <div class="container" id ='signin' style="display: none;">
        <h1 class="form-title">Đăng Nhập</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Quên mật khẩu</a>
            </p>
            <input type="submit" class="btn" value="Sign in" name="signin">
        </form>
        <p class="or">
            ---------- or ----------
        </p>
        <div class="icons">
            <i class="fab fb-google"></i>
            <i class="fab fb-facebook"></i>
        </div>
        <div class="links">
            <p>Chưa có tài khoản ?</p>
            <button id="signUpButton">Sign up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>