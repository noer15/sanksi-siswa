<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->middleware->isLogin();
		$this->load->model('M_kriteria');
	}
	public function index()
	{
        $data['kriteria'] = $this->db->get('kriteria')->result();
		$this->load->view('admin/kriteria/index',$data);
	}

    public function store(){
		$this->isPost();
        $this->M_kriteria->input_data($_POST,'kriteria');
		redirect('kriteria');
	}
    public function update(){
		$this->isPost();
        $this->M_kriteria->update($_POST);
		redirect(base_url().'kriteria');
	}
    public function delete($id){
		$this->db->delete('kriteria', array('id' => $id));
        redirect('kriteria');
	}
    private function isPost()
    {
        if(!$_POST){
            redirect('kriteria');
        }
    }
}
