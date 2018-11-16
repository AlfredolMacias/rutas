<?php
    session_start();
    $user = isset($_SESSION["usuario"])? $_SESSION["usuario"]:"";
    if($user != "admin"){
        header('Location: login');
    }
?>