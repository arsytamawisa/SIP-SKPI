<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa'))){
			redirect('error_404','refresh');
		}
	}

	public function index()
	{
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/footer');
	}
}