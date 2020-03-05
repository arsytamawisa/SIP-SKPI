<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetensi extends CI_Controller {

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
		$data['kompetensi'] 	= $this->Kompetensi_model->tampil();
		$data['program_studi'] 	= $this->Program_studi_model->tampil();
		$id_kompetensi			= $this->input->post('id_kompetensi');
		$tambah 				= $this->input->post('tambah');
		$edit 					= $this->input->post('edit');

		$submitData = 
		[
			'id_program_studi' 				=> $this->input->post('id_program_studi'),
			'judul_kompetensi_indonesia' 	=> $this->input->post('judul_kompetensi_indonesia'),
			'judul_kompetensi_inggris' 		=> $this->input->post('judul_kompetensi_inggris')
		];

		if( $tambah !== NULL )
		{
			$this->Kompetensi_model->tambah($submitData);
			$this->session->set_flashdata('tambah','Kompetensi'); 
			redirect('admin/kompetensi','refresh');
		}

		if( $edit !== NULL )
		{
			$this->Kompetensi_model->edit($submitData, $id_kompetensi);
			$this->session->set_flashdata('edit','Kompetensi'); 
			redirect('admin/kompetensi','refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/kompetensi/tampil',$data);
		$this->load->view('admin/footer');
	}


	public function hapus($id)
	{
		$this->Kompetensi_model->hapus($id);
		$this->session->set_flashdata('hapus','Kompetensi'); 
		redirect('admin/kompetensi','refresh');
	}

	public function hapus_sub($id)
	{
		$this->Kompetensi_model->hapus_sub($id);
		$this->session->set_flashdata('hapus','Sub Kompetensi'); 
		echo "<script> window.history.back() </script>";
	}


	public function detail($id)
	{
		$data['sub_kompetensi'] = $this->Kompetensi_model->sub_kompetensi($id);
		$data['detail'] 		= $this->Kompetensi_model->detail($id);
		$submit 				= $this->input->post('submit');
		$edit 					= $this->input->post('edit');
		$id_sub					= $this->input->post('id_sub_kompetensi');

		$input = 
		[
			'isi_kompetensi_indonesia' 	=> $this->input->post('isi_kompetensi_indonesia'),
			'isi_kompetensi_inggris' 	=> $this->input->post('isi_kompetensi_inggris')
		];

		if( $submit !== NULL )
		{
			$this->Kompetensi_model->tambah_sub($input, $id);
			$this->session->set_flashdata('tambah','Sub Kompetensi'); 
			echo "<script> window.history.back() </script>";
		}

		if( $edit !== NULL )
		{
			$this->Kompetensi_model->edit_sub($input, $id_sub);
			$this->session->set_flashdata('edit','Sub Kompetensi'); 
			echo "<script> window.history.back() </script>";
		}

		$this->load->view('admin/header');
		$this->load->view('admin/kompetensi/detail',$data);
		$this->load->view('admin/footer');
	}
}