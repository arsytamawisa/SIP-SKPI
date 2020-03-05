<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguruan_tinggi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$admin = $this->session->userdata('admin');
		if(!$admin['role'] == "Super Admin" OR empty($admin['role'] == "Super Admin"))
		{
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$id 						= 1;
		$input 						= $this->input->post();
		$data['perguruan_tinggi'] 	= $this->Perguruan_model->tampil($id);

		if($input)
		{
			$this->Perguruan_model->edit($input, $id);
			$this->session->set_flashdata('flashdata','Perguruan Tinggi'); 
			redirect('admin/perguruan_tinggi','refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/perguruan_tinggi/tampil',$data);
		$this->load->view('admin/footer');
	}

}