<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa'))){
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$mahasiswa 			= $this->session->userdata('mahasiswa');
		$nim 				= $mahasiswa['nim'];
		$data['mahasiswa'] 	= $this->Mahasiswa_model->detail($nim);
		
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/form',$data);
		$this->load->view('mahasiswa/footer');
		
		$input = $this->input->post();
		if($input)
		{
			$this->Mahasiswa_model->edit($input, $nim);
			redirect('mahasiswa/surat','refresh');
		}
	}
}