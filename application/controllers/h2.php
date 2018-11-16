<?php
    class h2 extends CI_Controller{
        function __construct(){
            parent::__construct();
            /*$data['numero1'] = "4";
            $data['numero2'] = "5";*/
            $this->load->helper(array('myhelper','otro'));
        }

        function index(){

        }
        function f1(){
            echo saluda();
        }
        function f2(){
            echo estado();
        }
        function f3(){
            echo masfunciones();
        }
        function f4(){
            echo trabajo();
        }
    }

?>