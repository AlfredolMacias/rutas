<?php
    session_start();
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    if($user == "admin" && $pass=="123"){
        $_SESSION["usuario"] = "admin";
        header('Location:index.php');
    }else{
        header('Location: login.php');
    }
?>