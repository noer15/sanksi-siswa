<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_alternatif extends CI_Model
{
    public function getAll()
    {
        return $this->db
        ->join('siswa','siswa.id = alternatif.id_siswa','left')
        ->join('kriteria','kriteria.id = alternatif.id_kriteria','left')
        ->get('alternatif');
    }
    public function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

    public function update($p){
        return $this->db->where("id", $p["id"])
                        ->update("alternatif", $p);
    }

    public function getId($id)
    {
        return $this->db
        ->join('siswa','siswa.id = alternatif.id_siswa','left')
        ->join('kriteria','kriteria.id = alternatif.id_kriteria','left')
        ->get_where('alternatif',['id_siswa'=>$id]);
    }
   
}
