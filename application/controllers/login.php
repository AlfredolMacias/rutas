<?php
    class login extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('modelo_registrar');
            $this->load->library('session');
        }
        public function index(){
            $this->load->view("login");
        }
        public function valida(){            
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $login = $this->modelo_registrar->login($user, $pass);
            if($login){
                session_start();
                $_SESSION["usuario"] = $user;
                $_SESSION["id"] = $login["id"];
                $this->session->set_userdata('user', $user);
                header("Location: http://localhost:8080/Codeigniter/index.php/buscarUnidad");
            }else{
                $data["error"]="Usuario o contraseña incorrectos";
                $this->load->view('login', $data);
            }
        }
        function salir(){
            session_start();
            session_destroy();
            header('Location: http://localhost:8080/Codeigniter/index.php');
            exit();
        }
        function editar(){
            $data["user"] = $this->session->user;
            $this->load->view("modificar", $data);
        }
        public function registro(){
            $this->load->view("registro");
        }
    }
?>