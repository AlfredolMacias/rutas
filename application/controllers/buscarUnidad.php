<?php
class buscarUnidad extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('modelo_registrar');
        $this->load->library('session');
    }
    public function index(){
        //$sesion = $this->session->userdata('user');
        $sesion = $this->session->usuario;
        $data["sesion2"]=$sesion;
        $user = isset($_SESSION["usuario"])? $_SESSION["usuario"]:"";
        $data["sesion2"] = $user;
        if($sesion == NULL){
            $this->load->view("login", $data);
        }else{
            $data["unidades"] = $this->modelo_registrar->unidades();
            $this->load->view("buscar_unidad", $data);
        }
    }
}
?>