<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Pantai extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_pantai');
    }

	public function index()
	{
		$data['data']=$this->M_pantai->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('pantai',$data);
		$this->load->view('t_admin/footer',$data);
	}
	public function peta()
	{
		$data['data']=$this->M_pantai->getdata()->result();
		// var_dump($data);exit;

		$this->load->view('t_admin/header'); 
		$this->load->view('t_admin/nav');
		$this->load->view('peta',$data);
		$this->load->view('t_admin/footer',$data);
	}

	public function tambah()
	{
		
		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('tambah_pantai');
		$this->load->view('t_admin/footer');
	}

	public function proses_tambah_data()
	{
		// $id_alfa = $this->input->post('id_pantai');
		$nama_pantai = $this->input->post('nama_pantai');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$nama_file = $_FILES['foto']['name'];
		$tmp_file = $_FILES['foto']['tmp_name'];
		$path = "./file/".$nama_file;
		move_uploaded_file($tmp_file, $path);

		$data = array(
			// 'id_pantai' => $id_pantai,
			'nama_pantai' => $nama_pantai,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng,
			'foto' => $nama_file
		);

		$this->M_pantai->tambah($data);
		redirect('pantai');
	}

	public function edit($id_pantai)
	{
		$data['data'] = $this->M_pantai->getdataid($id_pantai)->row();

		$this->load->view('t_admin/header');
		$this->load->view('t_admin/nav');
		$this->load->view('edit_pantai', $data);
		$this->load->view('t_admin/footer');
	}

	public function proses_edit_data()
	{
		$id_pantai = $this->input->post('id_pantai');
		$nama_pantai = $this->input->post('nama_pantai');
		$alamat = $this->input->post('alamat');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$data = array(
			'nama_pantai' => $nama_pantai,
			'alamat' => $alamat,
			'lat' => $lat,
			'lng' => $lng
		);

		if (!empty($_FILES['foto']['name'])) {
			$nama_file = $_FILES['foto']['name'];
			$tmp_file = $_FILES['foto']['tmp_name'];
			$path = "./file/".$nama_file;
			move_uploaded_file($tmp_file, $path);
			$data['foto'] = $nama_file;
		}

		$this->M_pantai->edit($data, $id_pantai);
		redirect('pantai');
	}

	public function hapus($id)
	{
		$this->M_pantai->hapus($id);
		redirect('pantai');


	}

}