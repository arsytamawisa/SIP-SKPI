<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerjemah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{
		$data['mahasiswa'] 		= $this->Mahasiswa_model->tampil();
		$data['fakultas'] 		= $this->Fakultas_model->tampil();
		$data['program_studi'] 	= $this->Program_studi_model->tampil();
		$fakultas				= $this->input->post('fakultas');
		$prodi					= $this->input->post('prodi');

		if ($fakultas && $prodi) 
		{
			$data['mahasiswa'] = $this->Mahasiswa_model->tampil_fakultas_prodi($fakultas,$prodi);
			$data['program_studi'] = prodi_fakultas($fakultas);
		}
		elseif($fakultas)
		{
			$data['mahasiswa'] = $this->Mahasiswa_model->tampil_fakultas($fakultas);
			$data['program_studi'] = prodi_fakultas($fakultas);
		}
		elseif($prodi)
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil_prodi($prodi);
		}
		else
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil();
		}

		$this->session->set_userdata("fakultas", $fakultas);
		$this->session->set_userdata("prodi", $prodi);
		$this->load->view('admin/header');
		$this->load->view('admin/penerjemah/tampil',$data);
		$this->load->view('admin/footer');
	}

	public function berkas($id)
	{
		$data['info'] = $this->Mahasiswa_model->detail_info($id);
		$this->load->view('admin/penerjemah/berkas',$data);
	}

	public function ajax_fakultas()
	{

		if ($this->input->post('fakultas') == "") 
		{
			$data = $this->Program_studi_model->tampil();
			echo json_encode($data);
		}
		else
		{
			$data = prodi_fakultas($this->input->post('fakultas'));
			echo json_encode($data);
		}
	}

	public function ajax_prodi()
	{
		if ($this->input->post('prodi') == "") 
		{
			$data = $this->Mahasiswa_model->tampil();
			echo json_encode($data);
		}
		else
		{
			$data = $this->Mahasiswa_model->tampil_prodi($this->input->post('prodi'));
			echo json_encode($data);
		}
	}

	public function edit($id)
	{
		$data['info'] 	= $this->Mahasiswa_model->detail_info($id);
		
		if($this->input->post())
		{
			$this->Mahasiswa_model->edit_info_penerjemah($this->input->post(),$id);
			$this->session->set_flashdata('edit','Informasi Tambahan'); 
			redirect('admin/penerjemah/detail/'.$data['info']['nim'],'refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/penerjemah/edit',$data);
		$this->load->view('admin/footer');
	}

	public function detail($id)
	{
		$data['info_tambahan'] 	= $this->Mahasiswa_model->detail_info_tambahan($id);
		$data['mahasiswa'] 		= $this->Mahasiswa_model->detail($id);
		$id_informasi 			= $this->input->post('id_informasi');
		$edit 					= $this->input->post('edit');
		$validasi 				= [ 'validasi' => $this->input->post('validasi') ];
		
		$submitData = 
		[
			'id_informasi' => $this->input->post('id_informasi'),
			'keterangan' 	=> $this->input->post('keterangan')
		];

		if( $this->input->post('validasi') !== NULL )
		{
			$this->Mahasiswa_model->validasi($validasi,$id_informasi);
			redirect('admin/penerjemah/detail/'.$id,'refresh');
		}

		if( $edit !== NULL )
		{			
			$this->Petugas_model->edit_keterangan($submitData, $id_informasi);
			$this->session->set_flashdata('keterangan','Keterangan Ditolak'); 
			redirect('admin/penerjemah/detail/'.$id,'refresh');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/penerjemah/detail',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapus_info($id);
		$this->session->set_flashdata('hapus','Info Tambahan'); 
		echo "<script> window.history.back() </script>";
	}
	
}