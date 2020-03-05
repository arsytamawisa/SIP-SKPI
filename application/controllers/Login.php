<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['a'] 		= rand(1,10);
		$data['b'] 		= rand(1,10);
		$data['soal'] 	= $data['a'] . "+" . $data['b'];
		$data['hasil'] 	= $data['a'] + $data['b'];

		$this->load->view('login',$data);
	}

	function proses()
	{		
		$input = $this->input->post();
		if($input)
		{
			if($this->input->post('hasil') == $this->input->post('hasil_benar'))
			{
				$username 	= $input['username'];
				$password 	= sha1($input['password']);
				$cek_mhs 	= $this->Login_model->login_mahasiswa($username,$input['password']);
				$cek_admin 	= $this->Login_model->login_admin($username,$password);
				$cek_prodi	= $this->Login_model->login_admin_prodi($username,$password);

				$this->session->set_userdata("username", $username);
				$this->session->set_userdata("password", $input['password']);

				// Login Mahasiswa
				if($cek_mhs=="mahasiswa") 
				{
					if(!empty($this->input->post('remember')))
					{
						setcookie("loginUsername",$this->input->post('username'), time()+ (10 * 136 * 24 * 60 *60));
						setcookie("loginPassword",$this->input->post('password'), time()+ (10 * 136 * 24 * 60 *60));
						redirect('mahasiswa/surat','refresh');
					}
					else
					{
						setcookie("loginUsername", "");
						setcookie("loginPassword", "");
						redirect('mahasiswa/surat','refresh');
					}
				}
				
				// Login Admin Prodi
				elseif ($cek_prodi=="admin_prodi") 
				{
					if(!empty($this->input->post('remember')))
					{
						setcookie("loginUsername",$this->input->post('username'), time()+ (10 * 136 * 24 * 60 *60));
						setcookie("loginPassword",$this->input->post('password'), time()+ (10 * 136 * 24 * 60 *60));
						redirect('admin_prodi/dashboard','refresh');
					}
					else
					{
						setcookie("loginUsername", "");
						setcookie("loginPassword", "");
						redirect('admin_prodi/dashboard','refresh');
					}
				}

				// Login Admin
				else
				{
					if($cek_admin=="admin")
					{
						if(!empty($this->input->post('remember')))
						{
							setcookie("loginUsername",$this->input->post('username'), time()+ (10 * 136 * 24 * 60 *60));
							setcookie("loginPassword",$this->input->post('password'), time()+ (10 * 136 * 24 * 60 *60));
							redirect('admin/dashboard','refresh');
						}
						else
						{
							setcookie("loginUsername", "");
							setcookie("loginPassword", "");
							redirect('admin/dashboard','refresh');
						}
					}
					else
					{
						$this->session->set_flashdata('login', 'login gagal'); 
						redirect('login','refresh');
					}
				}
			}
			else
			{
				redirect('login','refresh');
			}
		}
	}
}
