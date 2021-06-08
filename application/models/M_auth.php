<?php

class M_auth extends CI_Model {

    public function checkUser($username)
    {
        return  $this->db->where('username', $username)
                ->get('user')->row();
    }
    public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}