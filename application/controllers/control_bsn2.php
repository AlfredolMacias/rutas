<?php
//include "seguridad.php";
class control_bsn2 extends CI_Controller{
    public function index(){
        $fecha = $_GET["fecha"];
        $fecha2 = date('Y/m/d', strtotime($fecha. '+ 1 days '));
        $this->load->model("modelo_Bsn_Ext2");
        $data["lista"] = $this->modelo_Bsn_Ext2->get_usuario($fecha, $fecha2);
        $this->load->view("View_Bsn2", $data);
    }
}
?>