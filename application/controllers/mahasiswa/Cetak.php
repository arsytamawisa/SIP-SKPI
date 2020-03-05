<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
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

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = $data['mahasiswa']['nim']."_".$data['mahasiswa']['nama_mahasiswa'].".pdf";
		$this->pdf->load_view('mahasiswa/cetak',$data);
		$this->stream(array("Attachment" => false));
		// $this->pdf->render();
		// $this->pdf->stream();
	}

}