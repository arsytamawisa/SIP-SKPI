<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

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
		$data['prodi'] = $this->Program_studi_model->tampil();

		$this->load->view('admin/header');
		$this->load->view('admin/prodi/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama_prodi_indonesia', 'Nama Program Studi', 'required');
		$this->form_validation->set_rules('nama_prodi_inggris', 'Departement', 'required');
		$this->form_validation->set_rules('gelar_indonesia', 'Gelar', 'required');
		$this->form_validation->set_rules('gelar_inggris', 'Title', 'required');
		$this->form_validation->set_rules('id_fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('no_sk_akreditasi_prodi', 'Nomor SK Akreditasi', 'required');
		$this->form_validation->set_rules('status_akreditasi_prodi', 'Status Akreditasi', 'required');
		$this->form_validation->set_rules('program_pendidikan_tinggi', 'Program Pendidikan Tinggi', 'required');
		$this->form_validation->set_rules('kode_program_studi', 'Kode Program Studi', 'required|numeric|exact_length[4]');
	}

	public function tambah()
	{
		$input					= $this->input->post();
		$data['fakultas'] 		= $this->Fakultas_model->tampil();
		$data['program_studi'] 	= $this->Program_studi_model->tampil();

		if($input)
		{
			$this->rules();
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Program_studi_model->tambah($input);
				$this->session->set_flashdata('tambah', $input['nama_prodi_indonesia']); 
				redirect('admin/prodi','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/prodi/tambah',$data);
		$this->load->view('admin/footer');

	}

	public function edit($id)
	{
		$input				= $this->input->post();
		$data['fakultas'] 	= $this->Fakultas_model->tampil();
		$data['detail'] 	= $this->Program_studi_model->detail($id);

		if($input)
		{
			$this->rules();
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Program_studi_model->edit($input,$id);
				$this->session->set_flashdata('edit', $input['nama_prodi_indonesia']); 
				redirect('admin/prodi','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/prodi/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$prodi = nama_prodi($id);
		$this->Program_studi_model->hapus($id);
		$this->session->set_flashdata('hapus', $prodi); 
		redirect('admin/prodi','refresh');
	}
}