<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		echo ":";
		// digunakan unutk cek session
		// $this->load->view('template/header_login');
		// $this->load->view('login');
		// $this->load->view('template/footer_login');
	}

    public function login()
	{
        // load login view
		$this->load->view('Auth/login_view');
	}

    public function register()
	{
		// load register view
	}
}
