<?php
class Queries extends CI_Model{

    public function getRoles(){
        $roles = $this->db->get('role');
        if($roles->num_rows() > 0 ){
            return $roles->result();
        }
    }
    public function registerAdmin($data){
        return $this->db->insert('users', $data);
    }

}
?>