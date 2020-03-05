<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_angkatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$admin = $this->session->userdata('admin');
		if(!$admin['role'] == "Super Admin" OR empty($admin['role'] == "Super Admin"))
		{
			redirect('error_404','refresh');
		}
	}

	public function rules()
	{
		$this->form_validation->set_rules('angkatan', 'Tahun Angkatan', 'required|numeric|exact_length[4]|is_unique[tahun_angkatan.angkatan]');
		$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
	}

	public function index()
	{
		$this->rules();
		$data['tahun'] 		= $this->Tahun_model->tampil();
		$tambah 			= $this->input->post('tambah');
		$edit 				= $this->input->post('edit');
		$id					= $this->input->post('id_tahun');

		$submitData = 
		[
			'angkatan' 	=> $this->input->post('angkatan'),
			'tgl_masuk' => $this->input->post('tgl_masuk')
		];

		if( $tambah !== NULL )
		{
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Tahun_model->tambah($submitData);
				$this->session->set_flashdata('tambah', $submitData['angkatan']); 
				redirect('admin/tahun_angkatan','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_tambah');
			}
		}

		if( $edit !== NULL )
		{
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Tahun_model->edit($submitData, $id);
				$this->session->set_flashdata('edit', $submitData['angkatan']); 
				redirect('admin/tahun_angkatan','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal_edit');
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/tahun/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$tahun = tahun($id);
		$this->Tahun_model->hapus($id);
		$this->session->set_flashdata('hapus', $tahun); 
		redirect('admin/tahun_angkatan','refresh');
	}
}