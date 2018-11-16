<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class rutas extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('modelo_registrar');
        $this->load->library('session');
    }
    function unidades(){
        $unidad = $_POST["unidades"];
        $this->load->view("calendario");
    }
    function comentarios(){
        $fecha = $_GET["fecha"];   
        $data["comentarios"] = $this->modelo_registrar->comentarios($fecha);     
        $data["fecha"] = $fecha;
        $this->load->view("comentarios", $data);
    }
    function nuevoComentario(){
        $usuario = $_SESSION["usuario"];
        $fecha = $_POST["fecha"];
        $comentario = $_POST["comentario"];
        $id = $this->modelo_registrar->getId($usuario);
        $data = array(
            'comentario' => $comentario,
            'id_user' => $id[0]->id,
            'fecha' => $fecha,
        );
        $this->modelo_registrar->nuevoComentario($data);
        header("Location: http://localhost:8080/codeigniter/index.php/rutas/comentarios?fecha=".$fecha);
    }
}
?>