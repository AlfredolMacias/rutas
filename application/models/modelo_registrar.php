<?php
class modelo_registrar extends CI_Model{
    function __construct() {
        parent::__construct();
    }
   
    function registrar($data)
    {
        $this->load->database();
        $this->db->insert('login', $data);    
    }
    
    function login($usuario, $pass){
        $pass = md5($pass);
        $this->load->database();
        $this->db->where('usuario', $usuario);
        $this->db->where('password', $pass);
        $query = $this->db->get('login');
        if ($query->num_rows() > 0){
            return 1;
        }
        else{
            return 0;
        }
    }

    function ExisteUser($usuario){            
        $this->load->database();           
        $this->db->where('usuario',$usuario);
        $query = $this->db->get('login');
        if ($query->num_rows() > 0){
            return 1;
        }
        else{
            return 0;
        }
    }
    function eliminarCuenta($user){
        $this->load->database();           
        $this->db->where('usuario', $user);
        $this->db->delete('login');
    }
    
    function unidades(){
        $this->load->database();
        $this->db->distinct();
        $this->db->select("Instance_Id");
        $this->db->from("bh_table_Transactions");
        $query = $this->db->get();  
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return 0;
        }
    }
    function comentarios($fecha){
        $this->load->database();
        $this->db->select("*");
        $this->db->from("comentario");
        $this->db->join("login", "comentario.id_user = login.id");
        $this->db->where('comentario.fecha', $fecha);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return 0;
        }
    }
    function getId($usuario){
        $this->load->database();
        $this->db->select("id");
        $this->db->from("login");
        $this->db->where("usuario", $usuario);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return 0;
        }
    }
    function nuevoComentario($data){
        $this->load->database();
        $this->db->insert('comentario', $data);  
    }
}
?>