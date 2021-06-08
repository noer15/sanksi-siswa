<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->middleware->isLogin();
		$this->load->model('M_user');
	}
	public function index()
	{
        $data['user'] = $this->db->get('user')->result();
		$this->load->view('admin/user/index',$data);
	}

    public function store(){
		$this->isPost();
        $this->M_user->input_data($_POST,'user');
		redirect('user');
	}
    public function update(){
		$this->isPost();
        $this->M_user->update($_POST);
		redirect(base_url().'user');
	}
    public function delete($id){
		$this->db->delete('user', array('id' => $id));
        redirect('user');
	}
    private function isPost()
    {
        if(!$_POST){
            redirect('user');
        }
    }
}
