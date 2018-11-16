<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class usuario extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('modelo_registrar');
        $this->load->library('session');
    }

    public function index(){
		$this->load->view('registro');
    }
    
  function registrar(){
    $user = $this->input->post()["user"];
    $ExisteUser = $this->modelo_registrar->ExisteUser($user);
    if($ExisteUser){
        $data["error"]="El usuario ya existe";
        $this->load->view('registro', $data);
    }else{
        $data = array(
            'usuario' => $this->input->post('user',TRUE),
            'password' => md5($this->input->post('pass',TRUE))
        );    
        $this->modelo_registrar->registrar($data);
        session_start();
        $_SESSION["usuario"] = $user;
        $this->session->set_userdata('user', $user);
        header("Location: http://localhost:8080/Codeigniter/index.php/buscarUnidad");
    }
    
  }

   function modificar(){
        $user = $_POST["user"];
        $oldpass = $_POST["oldpass"];
        $pass = $_POST["pass"];
        $login = $this->modelo_registrar->login($user, $oldpass);
        $pass = md5($pass);
        if($login){
            $this->db->set('password', $pass);
            $this->db->where('usuario', $user);
            $this->db->update('login');
            header("Location:  http://localhost:8080/Codeigniter/index.php/buscarUnidad");
        }else{
            $data["error"]="Usuario o contraseña incorrectos";
            $data["user"]=$user;
            $this->load->view('modificar', $data);
        }
    }
    function eliminar(){
        $user = $_GET["user"];
        $this->modelo_registrar->eliminarCuenta($user);
        $this->load->view("index");
    }
}
