<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_pdf extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa')))
		{
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$ses_mhs			= $this->session->userdata('mahasiswa');
		$nim 				= $ses_mhs['nim'];
		$id_prodi			= $ses_mhs['id_program_studi'];
		$data['info']		= $this->Mahasiswa_model->detail_info_tambahan($nim);
		$data['mahasiswa'] 	= $this->Mahasiswa_model->detail($nim);
		$data['kompetensi']	= $this->Kompetensi_model->detail_kompetensi($id_prodi);
		$this->load->view('mahasiswa/print',$data);
	}

}