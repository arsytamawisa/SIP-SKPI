<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->session->unset_userdata('username');
		$this->load->view('home');
	}

	public function error_404()
	{
		$this->load->view('errors/error_404');
	}
}
