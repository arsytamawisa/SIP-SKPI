<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa'))){
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$mahasiswa 				= $this->session->userdata('mahasiswa');
		$nim 					= $mahasiswa['nim'];
		$data['mahasiswa'] 		= $this->Mahasiswa_model->detail($nim);
		$data['detail_info'] 	= $this->Mahasiswa_model->detail_info_tambahan($nim);

		if ($this->input->post()) 
		{
			$this->Mahasiswa_model->edit($this->input->post(),$nim);
			$this->session->set_flashdata('edit','Data'); 
			redirect('mahasiswa/surat','refresh');
		}

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/surat',$data);
		$this->load->view('mahasiswa/footer');
	}
}