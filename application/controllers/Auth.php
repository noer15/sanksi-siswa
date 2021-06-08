<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->library('session');
    }

	public function index()
	{
		if($this->session->userdata('logged_in')){
            return redirect(base_url());
        }else{
            $this->load->view('login');
        }
	}

	public function login()
    {

        $nip = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $nip])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['status'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $session = [
                        'logged_in'     => true,
                        'id' => $user['id'],
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'role_id' => $user['role']
                    ];
                    $this->session->set_userdata($session);
                    return redirect(base_url('dashboard'));

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIP/Username belum diaktifkan oleh admin! klik <a href="https://api.whatsapp.com/send?phone=6289622814512&text=Halo%20Admin%21%20Saya%20ingin%20minta%20untuk%20Aktifasi%20NIP/Username :%20'.$_POST['username'].'" target="_blank"> disini</a></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIP tidak ditemukan!</div>');
            redirect('auth');
        }
    }

	public function update_password()
    {
        $password = $this->input->post('password');
        $data = array(
            'password' => password_hash($password, PASSWORD_DEFAULT)
            );
        $where = array( 'id' => $_POST['id'] );
        $this->M_auth->update_data($where,$data,'user');
        $this->session->set_flashdata('msg', 'Password sudah diubah');
        redirect('user');
    }

	public function logout()
    {
        session_destroy();
        return redirect(base_url('auth'));
    }


}
