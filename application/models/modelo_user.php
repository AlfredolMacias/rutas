<?php
    class modelo_user extends CI_Model{
        function get_usuario(){
            $this->load>database();
            $query = $this->db->get("usuarios");
            return $query->result();
        }
        function set_insert($data=null){
            $this->load>database();
            $this->db->set($data);
            $this->db->insert("usuarios");
            $this->db->trans_complete();
            $this->db->trans_commit();
        }
        function set_delete($data=null){
            $this->load>database();
            $this->db->delete("usuarios", array("id"=>$data["id"]));
            $this->db->trans_commit();
        }
        function set_update($data=null){
            $this->load>database();
            $d = array(
                "nom" => $data["nom"],
                "pass" => $data["pass"]
            );
            $this->db->where("id", $data["id"]);
            $this->db->update("usuarios", $d);
            $this->db->trans_commit();
        }
    }

?>