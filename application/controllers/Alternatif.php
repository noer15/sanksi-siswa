<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->middleware->isLogin();
		$this->load->model('M_alternatif');
	}
	public function index()
	{
		$this->load->view('admin/alternatif/index');
		// print_r($data);
	}

	public function add(){
		$this->load->view('admin/alternatif/add');
	}

	public function store(){
		$data = array();
		$data['id_siswa']   = $_POST['id_siswa'];
		for($i = 0; $i < count($_POST['id_kriteria']); $i++){
			$data['id_kriteria']  = $_POST['id_kriteria'][$i];
			$data['nilai']    = $_POST['nilai'][$i];
			$this->M_alternatif->input_data($data,'alternatif');
		}
		redirect('alternatif');
	}

	public function update(){
		$this->isPost();
        $this->M_alternatif->update($_POST);
		redirect('alternatif');
		// print_r($_POST);
	}


	public function delete($id){
		$this->db->delete('alternatif', array('id' => $id));
        redirect('alternatif');
	}


	public function view($id)
	{
        $data['alternatif'] = $this->M_alternatif->getId($id)->result();
		$this->load->view('admin/alternatif/view',$data);
		// print_r($data);
	}

	private function isPost()
    {
        if(!$_POST){
            redirect('alternatif');
        }
    }

    
}
