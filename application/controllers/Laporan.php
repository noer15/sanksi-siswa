<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->middleware->isLogin();
	}
	public function index()
	{
		$this->load->view('admin/laporan/index');
		// print_r($data);
	}

	public function alternatif()
	{
		$this->load->view('admin/laporan/alternatif');
	}
	public function cetak_alternatif()
	{
		$this->load->view('admin/laporan/cetak_alternatif');
	}

	// laporan sanksi

	public function sanksi()
	{
		$this->load->view('admin/laporan/sanksi');
	}
	public function cetak_sanksi()
	{
		$this->load->view('admin/laporan/cetak_sanksi');
	}

	// laporan kriteria

	public function kriteria()
	{
		$this->load->view('admin/laporan/kriteria');
	}
	public function cetak_kriteria()
	{
		$this->load->view('admin/laporan/cetak_kriteria');
	}

	// laporan siswa

	public function siswa()
	{
		$this->load->view('admin/laporan/siswa');
	}
	public function cetak_siswa()
	{
		$this->load->view('admin/laporan/cetak_siswa');
	}

	public function cetak()
	{
		$this->load->view('admin/laporan/cetak_invoice');
	}
	

    
}
