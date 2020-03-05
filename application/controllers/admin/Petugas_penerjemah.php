<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_penerjemah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{
		$data['petugas_penerjemah'] = $this->Petugas_model->tampil_penerjemah();
		$this->load->view('admin/header');
		$this->load->view('admin/petugas_penerjemah/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
			$this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == TRUE) 
			{
				$this->Petugas_model->tambah_penerjemah($input);
				$this->session->set_flashdata('tambah','Penerjemah'); 
				redirect('admin/petugas_penerjemah','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_tambah');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/petugas_penerjemah/tambah');
		$this->load->view('admin/footer');
	}

	public function edit($id)
	{
		$input 				= $this->input->post();
		$data['detail'] 	= $this->Petugas_model->detail_penerjemah($id);
		
		if($input)
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == TRUE) 
			{
				$this->Petugas_model->edit_penerjemah($input,$id);
				$this->session->set_flashdata('edit','Penerjemah'); 
				redirect('admin/petugas_penerjemah','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_tambah');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/petugas_penerjemah/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$this->Petugas_model->hapus_penerjemah($id);
		$this->session->set_flashdata('hapus','Penerjemah'); 
		redirect('admin/petugas_penerjemah','refresh');
	}
	
}