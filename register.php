<?php
include 'connect.php';

if(isset($_POST['signup'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    
    $checkEmail = "SELECT * FROM test_login WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result->num_rows > 0){
        echo "Email Address Already Exists";
    }
    else{
        $insertQuery = "INSERT INTO test_login(firstname, lastname, email, password)
                        VALUES('$firstname', '$lastname', '$email', '$password')";
        if($conn->query($insertQuery)){
            header("location: index.php");
            exit();
        }
        else{
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM test_login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql); // Thêm dòng này để thực thi truy vấn

    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        header("location: homepage.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email Or Password";
    }
}
?>
