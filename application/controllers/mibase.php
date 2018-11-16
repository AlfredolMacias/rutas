<?php
    class mibase extends CI_Controller{
        public function index(){
            $this->load->model("modelo_sgps");
            $data["lista"] = $this->modelo_sgps->get_usuario();
            //print_r ($lista);
            $this->load->view("view_mibase", $data);
        }
        public function agrega(){
            $this->load->helper("form");
            if($this->input->post()){
                echo "Información Correcta <br>";
                echo "El nombre es: " . $this->input->post()["nom"];
                echo "<pre>";
                print_r($this->input->post());
            }else{
                $this->load->view("view_agregar");
            }
        }
    }



?>