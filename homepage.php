<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            HELLO <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query = mysqli_query($conn, "SELECT * FROM test_login WHERE email = '$email'");
                while ($row = mysqli_fetch_assoc($query)) {
                    echo $row['firstname'] . " " . $row['lastname'];
                }
            }
            ?>
        </p>
    </div>
</body>
</html>