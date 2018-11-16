<?php
    class h extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->helper("myhelper");
        }
        function index(){
            $this->load->view("view_help");
        }
        function estado(){
            echo estado();
        }
        function prueba(){
            $data['numero1'] = "4";
            $data['numero2'] = "5";
            $this->load->view("view_help3", $data);
        }   
    }
?>