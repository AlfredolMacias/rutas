<?php
    class modelo_Bsn_Ext extends CI_Model{

        /*function _construct(){
            parent::_construct();
        }*/
        function get_usuario(){
            $this->load->database();
            $query = $this->db->get("[dbo].bh_table_Transactions t where Instance_Id = 'PUE 1 CHOFER' and t.DateTime_GPS > '2018-01-01 00:00:00.000' and t.DateTime_GPS < '2018-01-02 00:00:00.000'");            
            return $query->result();
        }
    }

?>