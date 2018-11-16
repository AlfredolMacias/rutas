<?php
class control_bsn extends CI_Controller{
    public function index(){
        $this->load->model("modelo_Bsn_Ext");
        $data["lista"] = $this->modelo_Bsn_Ext->get_usuario();
        $this->load->view("View_Bsn", $data);
    }
}
?>