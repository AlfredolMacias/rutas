<?php
    class libro extends CI_Controller{
        function __constraint(){
            parent::__constraint();
        }
        function index(){
            $this->load->library("operaciones");
            echo $this->operaciones->validandooperacion();
        }
        function suma(){
            $numero1 = "4";
            $numero2 = "5";
            $this->load->library("operaciones");
            echo $this->operaciones->suma($numero1, $numero2);
        }
        function mult(){
            $numero1 = "4";
            $numero2 = "5";
            $this->load->library("operaciones");
            echo $this->operaciones->mult($numero1, $numero2);
        }
        function resta(){
            $numero1 = "4";
            $numero2 = "5";
            $this->load->library("operaciones");
            echo $this->operaciones->resta($numero1, $numero2);
        }
        function division(){
            $numero1 = "4";
                $numero2 = "5";
            $this->load->library("operaciones");
            echo $this->operaciones->division($numero1, $numero2);
        }
    }
?>