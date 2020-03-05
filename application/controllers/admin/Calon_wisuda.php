<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_wisuda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{
		$input 				= $this->input->post();
		$nim 				= $this->input->post('nim');
		$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil();

		if( $input )
		{
			$this->Mahasiswa_model->calon_wisuda($input, $nim);
			$this->session->set_flashdata('edit','Calon Wisuda'); 
			redirect('admin/calon_wisuda','refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/calon_wisuda/tampil',$data);
		$this->load->view('admin/footer');
	}
	
}