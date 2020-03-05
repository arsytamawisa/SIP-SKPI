<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_password extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa'))){
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$input 		= $this->input->post();
		$mahasiswa 	= $this->session->userdata('mahasiswa');

		$this->load->view("mahasiswa/header");
		$this->load->view("mahasiswa/ganti_password");
		$this->load->view("mahasiswa/footer");

		if($input)
		{					
			if ($input['password_lama'] !== "" || $input['password_baru'] !== "" || $input['password_konfirmasi'] !== "") 
			{
				if(sha1($input['password_lama']) == $mahasiswa['password'])
				{
					if($input['password_baru'] == $input['password_konfirmasi'])
					{
						$this->Pengaturan_model->ubah_password_mahasiswa($input['password_baru'], $mahasiswa['id_mahasiswa']);
						$this->session->set_flashdata('flashdata','Password');
						redirect('mahasiswa/ganti_password','refresh');
					}
					else
					{
						echo "<script> alert('Password konfirmasi salah') </script>";
						redirect('mahasiswa/ganti_password','refresh');
					}
				}
				else
				{
					echo "<script> alert('Password lama salah') </script>";
					redirect('mahasiswa/ganti_password','refresh');
				}
			}
			else
			{
				echo "<script> alert('Password tidak boleh kosong') </script>";
				redirect('mahasiswa/ganti_password','refresh');
			}
		}
	}

}