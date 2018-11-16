<?php
class user extends CI_Controller{
    public function index(){
        $this->load->helper("form");
        if($this->input->post()){
            $this->load->model("modelo_user");
            $data= array(
                'nom' => $this->input->post()["nombre"],
                'pass' => $this->input->post()["pass1"]
            );
            $this->modelo_user->set_insert($data);
            header('Location: http://localhost:8080/Codeigniter/index.php/user/muestra');
        }else{
            $this->load->view("nuevousuario");
        }
    }
    public function muestra(){
        $this->load->model("modelo_user");
        $data["lista"] = $this->modelo_user->get_usuario();
        $this->load->view("view_user", $data);
    }
    public function elimina(){
        $this->load->model("modelo_user");
        $id = $this->uri->segment(3);
        $data = array(
            'id' => $id
        );
        $this->modelo_user->set_delete($data);
        header('Location: http://localhost:8080/Codeigniter/index.php/user/muestra');
    }
    public function actualiza(){
        $this->load->helper("form");
        if($this->input->post()){
            $this->load->model("modelo_user");
            $data = array(
                'id' =>$this->input->post()["id"], 
                'nombre' =>$this->input->post()["nombre"], 
                'pass1' =>$this->input->post()["pass1"], 
            );
            $this->modelo_user->set_update($data);
            header('Location: http://localhost:8080/Codeigniter/index.php/user/muestra');
        }else{
            $data = array(
                'id' => $this->uri->segment(3),
                'nom' => $this->uri->segment(4)
            );
            $this->load->view("view_modifica");
        }
    }
}
?>