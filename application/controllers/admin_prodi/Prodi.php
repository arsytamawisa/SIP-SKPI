<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if( !$this->session->userdata('admin_prodi') OR empty($this->session->userdata('admin_prodi')) )
		{
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{
		$session			= $this->session->userdata('admin_prodi');
		$id 				= $session['id_program_studi'];
		$input				= $this->input->post();
		$data['fakultas'] 	= $this->Fakultas_model->tampil();
		$data['detail'] 	= $this->Program_studi_model->detail($id);

		if($input)
		{
			$this->Program_studi_model->edit($input,$id);
			$this->session->set_flashdata('flashdata','Program Studi'); 
			redirect('admin_prodi/prodi','refresh');
		}

		$this->load->view('admin_prodi/header');
		$this->load->view('admin_prodi/prodi/tampil',$data);
		$this->load->view('admin_prodi/footer');
	}

}