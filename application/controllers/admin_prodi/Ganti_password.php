<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_password extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin_prodi') OR empty($this->session->userdata('admin_prodi')))
		{
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$this->load->view("admin_prodi/header");
		$this->load->view("admin_prodi/ganti_password");
		$this->load->view("admin_prodi/footer");

		$admin 	= $this->session->userdata('admin_prodi');
		$input 	= $this->input->post();

		if($input)
		{					
			if ($input['password_lama'] !== "" || $input['password_baru'] !== "" || $input['password_konfirmasi'] !== "") 
			{
				if(sha1($input['password_lama']) == $admin['password'])
				{
					if($input['password_baru'] == $input['password_konfirmasi'])
					{
						$this->Pengaturan_model->ubah_password_admin($input['password_baru'], $admin['id_admin']);
						$this->session->set_flashdata('flashdata','Password');
						redirect('admin_prodi/ganti_password','refresh');
					}
					else
					{
						echo "<script> alert('Password konfirmasi salah') </script>";
						redirect('admin_prodi/ganti_password','refresh');
					}
				}
				else
				{
					echo "<script> alert('Password lama salah') </script>";
					redirect('admin_prodi/ganti_password','refresh');
				}
			}
			else
			{
				echo "<script> alert('Password tidak boleh kosong') </script>";
				redirect('admin_prodi/ganti_password','refresh');
			}
		}
	}


}