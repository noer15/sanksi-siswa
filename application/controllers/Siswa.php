<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->middleware->isLogin();
		$this->load->model('M_siswa');
	}
	public function index()
	{
        $data['siswa'] = $this->db->get('siswa')->result();
		$this->load->view('admin/siswa/index',$data);
	}

    public function store(){
		$this->isPost();
        $this->M_siswa->input_data($_POST,'siswa');
		redirect('siswa');
	}
    public function update(){
		$this->isPost();
        $this->M_siswa->update($_POST);
		redirect(base_url().'siswa');
	}
    public function delete($id){
		$this->db->delete('siswa', array('id' => $id));
        redirect('siswa');
	}
    private function isPost()
    {
        if(!$_POST){
            redirect('siswa');
        }
    }
}
