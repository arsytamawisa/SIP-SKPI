<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$admin = $this->session->userdata('admin');
		if(!$admin['role'] == "Super Admin" OR empty($admin['role'] == "Super Admin"))
		{
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->tampil();
		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function cetak($id)
	{
		$data['info']		= $this->Mahasiswa_model->detail_info_tambahan($id);
		$data['mahasiswa'] 	= $this->Mahasiswa_model->detail($id);
		$data['kompetensi']	= $this->Kompetensi_model->detail_kompetensi($data['mahasiswa']['id_program_studi']);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = $data['mahasiswa']['nim'] . "_" . $data['mahasiswa']['nama_mahasiswa'] . ".pdf";
		$this->pdf->load_view('admin/mahasiswa/cetak',$data);
	}

	public function tambah()
	{
		$input = $this->input->post();
		$data['program_studi'] = $this->Program_studi_model->tampil();
		
		if($input)
		{
			$this->Mahasiswa_model->tambah($input);
			$this->session->set_flashdata('tambah', $input['nama_mahasiswa']); 
			redirect('admin/mahasiswa','refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa/tambah',$data);
		$this->load->view('admin/footer');
	}

	public function upload()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa/upload');
		$this->load->view('admin/footer');

		if ($this->input->post('upload')) 
		{
			$this->Mahasiswa_model->upload_data();
			redirect('admin/mahasiswa','refresh');
		}
	}

	public function edit($id)
	{
		$input 					= $this->input->post();
		$data['detail'] 		= $this->Mahasiswa_model->detail($id);
		$data['program_studi'] 	= $this->Program_studi_model->tampil();
		
		if($input)
		{
			$this->Mahasiswa_model->edit_admin($input,$id);
			$this->session->set_flashdata('edit', $input['nama_mahasiswa']);
			redirect('admin/mahasiswa','refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa/edit',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$mahasiswa = nama_mahasiswa($id);
		$this->Mahasiswa_model->hapus($id);
		$this->session->set_flashdata('hapus', $mahasiswa); 
		redirect('admin/mahasiswa','refresh');
	}

	public function hapus_info($id)
	{
		$this->Mahasiswa_model->hapus_info($id);
		$this->session->set_flashdata('hapus','Informasi Tambahan'); 
		echo "<script> window.history.back() </script>";
	}

	public function detail($id)
	{
		$input 					= $this->input->post();
		$id_info 				= $this->input->post('id_informasi');
		$data['detail'] 		= $this->Mahasiswa_model->detail($id);
		$data['detail_info'] 	= $this->Mahasiswa_model->detail_info_tambahan($id);
		$data['mahasiswa'] 		= $this->Mahasiswa_model->tampil();

		if($input)
		{
			$this->Mahasiswa_model->edit_info($input,$id_info);
			$this->session->set_flashdata('edit','Informasi Tambahan');
			echo "<script> window.history.back() </script>";
		}

		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa/detail',$data);
		$this->load->view('admin/footer');
	}
}