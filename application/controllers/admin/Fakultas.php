<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller {

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
		$data['fakultas'] 	= $this->Fakultas_model->tampil();
		$data['prodi'] 		= $this->Fakultas_model->prodi_fakultas();
		$tambah 			= $this->input->post('tambah');
		$hapus 				= $this->input->post('hapus');
		$edit 				= $this->input->post('edit');
		$id					= $this->input->post('id_fakultas');

		$submitData = 
		[
			'nama_fakultas' => $this->input->post('nama_fakultas'),
			'nama_dekan' 	=> $this->input->post('nama_dekan')
		];

		// Hapus Multiple Data
		if($hapus !== NULL)
		{
			foreach ($this->input->post('fakultas') as $id_fakultas => $status) 
			{
				$this->Fakultas_model->hapus($id_fakultas);
			}
			redirect('admin/fakultas','refresh');
		}

		// Tambah Data
		if( $tambah !== NULL )
		{
			$this->form_validation->set_rules('nama_fakultas', 'Nama Fakultas', 'required|is_unique[fakultas.nama_fakultas]');
			$this->form_validation->set_rules('nama_dekan', 'Nama Dekan', 'required');

			if ($this->form_validation->run() == TRUE) 
			{
				$this->Fakultas_model->tambah($submitData);
				$this->session->set_flashdata('tambah', $submitData['nama_fakultas']); 
				redirect('admin/fakultas','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_tambah');
			}
		}

		// Edit Data
		if( $edit !== NULL )
		{
			$this->form_validation->set_rules('nama_fakultas', 'Nama Fakultas', 'required|is_unique[fakultas.nama_fakultas]');
			$this->form_validation->set_rules('nama_dekan', 'Nama Dekan', 'required');
			
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Fakultas_model->edit($submitData, $id);
				$this->session->set_flashdata('edit', $submitData['nama_fakultas']); 
				redirect('admin/fakultas','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_edit');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/fakultas/tampil',$data);
		$this->load->view('admin/footer');
	}


	public function hapus($id)
	{
		$fakultas = nama_fakultas($id);
		$this->Fakultas_model->hapus($id);
		$this->session->set_flashdata('hapus', $fakultas); 
		redirect('admin/fakultas','refresh');
	}
}