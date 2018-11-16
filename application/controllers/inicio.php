<?php
    defined('BASEPATH') OR exit('No direct spript access allowes');
    class inicio extends CI_Controller{
        public function index(){
            session_start();
            $user = isset($_SESSION["usuario"])? $_SESSION["usuario"]:"";
            if($user != "admin"){
                header('Location: login');
            }else{
                $this->load->view("index");
            }
        }
    }

?>