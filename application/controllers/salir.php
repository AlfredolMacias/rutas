<?php 
    session_start();
    session_destroy();
    $this->load->view("index");
    exit();
?>