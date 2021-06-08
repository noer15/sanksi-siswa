<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_kriteria extends CI_Model
{
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update($p){
        return $this->db->where("id", $p["id"])
                        ->update("kriteria", $p);
    }
   
}
