<?php
    class modelo_Bsn_Ext2 extends CI_Model{
        function get_usuario($fecha, $fecha2){
            $this->load->database();
            $this->db->select('Latitude, Longitude');
            $this->db->select_max('DateTime_GPS');
            $this->db->order_by('DateTime_GPS');
            $query = $this->db->get("bh_table_Transactions where Instance_Id='PUE 2 Chofer' and 
            DateTime_GPS > '".$fecha." 00:00:00.000' and DateTime_GPS < '".$fecha2." 00:00:00.000' group by Latitude, Longitude");            
            return $query->result();
        }
    }
?>