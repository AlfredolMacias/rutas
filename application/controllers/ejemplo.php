<?php 
class ejemplo extends CI_Controller{
    public function index(){
        $this->load->view("vistaEjemplo1");
    }
    public function ejemplo1(){
        $this->load->view("vistaEjemplo2");
    }
    public function ejemplo2(){
        $this->load->view("vistaEjemplo3");
    }

}
?>