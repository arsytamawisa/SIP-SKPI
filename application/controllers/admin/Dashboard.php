<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$data['prodi'] 				= $this->Program_studi_model->tampil();
		$data['fakultas'] 			= $this->Fakultas_model->tampil();
		$data['jumlah_prodi'] 		= $this->Program_studi_model->jumlah();
		$data['jumlah_fakultas'] 	= $this->Fakultas_model->jumlah();
		$data['jumlah_mahasiswa'] 	= $this->Mahasiswa_model->jumlah();

		$this->load->view('admin/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}
}