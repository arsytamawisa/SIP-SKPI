<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguruan_model extends CI_Model {

	public function tampil($id)
	{
		$this->db->where('id_perguruan_tinggi', $id);
		return $this->db->get('perguruan_tinggi')->row_array();
	}

	public function edit($input, $id)
	{
		$this->db->where('id_perguruan_tinggi', $id);
		$this->db->update('perguruan_tinggi', $input);
	}
}