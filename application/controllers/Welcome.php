<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        
    }

	
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$this->load->view('login');
	}
	public function proses_login()
    {
    $user =  $this->input->post("username", TRUE);
    $pass =  $this->input->post("password", TRUE);

    $where = [
        'username' => $user,
        'password' => $pass
        
    ];

    $cek = $this->M_auth->cek_pengguna($where)->num_rows();
    

    if ($cek <= 0) {
        $this->session->set_flashdata('gagal', 'Username dan Password Anda Salah');
        redirect(base_url("welcome/login"));
    } else {
        $cek_akun = $this->M_auth->cek_akun($where)->row_array();
        $id_user = $cek_akun["id"];
        $level = $cek_akun["level"];

        $data_session = array(
            'id_user' => $id_user,
            'level' => $level,
        );

    //    var_dump($data_session);exit;

        $this->session->set_userdata($data_session);

        if ($level == 'admin') {
        
            redirect(base_url("pantai"));
        } else {
			
            redirect(base_url("pantai"));
        }
    }
}

}

