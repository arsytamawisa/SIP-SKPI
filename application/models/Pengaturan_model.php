<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model 
{
	function ubah_password_admin($password, $id)
	{
		$input['password'] = sha1($password);
		$this->db->where('id_admin', $id);
		$this->db->update('admin', $input);
	}

	function ubah_password_mahasiswa($password, $id)
	{
		$input['password'] = sha1($password);
		$this->db->where('nim', $id);
		$this->db->update('mahasiswa', $input);
	}

}