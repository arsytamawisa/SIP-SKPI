<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_prodi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{
		$data['petugas_prodi'] = $this->Petugas_model->tampil_admin();
		$this->load->view('admin/header');
		$this->load->view('admin/petugas_prodi/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{
		$input 			= $this->input->post();
		$data['prodi'] 	= $this->Program_studi_model->tampil();

		if($input)
		{
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin_prodi.username]');
			$this->form_validation->set_rules('nama_admin_prodi', 'Nama Admin', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('id_program_studi', 'Program Studi', 'required');

			if ($this->form_validation->run() == TRUE) 
			{
				$this->Petugas_model->tambah_admin($input);
				$this->session->set_flashdata('tambah','Petugas Prodi'); 
				redirect('admin/petugas_prodi','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_tambah');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/petugas_prodi/tambah',$data);
		$this->load->view('admin/footer');
	}

	public function edit($id)
	{
		$input 			= $this->input->post();
		$data['detail'] = $this->Petugas_model->detail_admin($id);
		$data['prodi'] 	= $this->Program_studi_model->tampil();
		
		if($input)
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_admin_prodi', 'Nama Admin', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('id_program_studi', 'Program Studi', 'required');

			if ($this->form_validation->run() == TRUE) 
			{
				$this->Petugas_model->edit_admin($input,$id);
				$this->session->set_flashdata('edit','Petugas Prodi'); 
				redirect('admin/petugas_prodi','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_tambah');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/petugas_prodi/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$this->Petugas_model->hapus_admin($id);
		$this->session->set_flashdata('hapus','Petugas Prodi'); 
		redirect('admin/petugas_prodi','refresh');
	}
	
}