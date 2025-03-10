<?php
    session_start();
    session_destroy();  // xóa session
    header("location:index.php");
?>