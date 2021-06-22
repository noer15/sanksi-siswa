<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sanksi extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->middleware->isLogin();
	}
	public function index()
	{
		$this->load->view('admin/sanksi/index');
		// print_r($data);
	}

    
}
