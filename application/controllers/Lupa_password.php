<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_password extends CI_Controller {

	public function index()
	{
		$this->load->view('lupa_password');

		if($this->input->post())
		{
			$cek = $this->Login_model->lupa_password($this->input->post('email'));
			echo $cek;
			if($cek=="berhasil")
			{

			}
			else{

			}
		}
	}
}