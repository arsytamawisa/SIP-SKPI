<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_model extends CI_Model {

	public function tampil()
	{
		$this->db->order_by('angkatan', 'desc');
		return $this->db->get('tahun_angkatan')->result_array();
	}

	public function tahun_akhir()
	{
		$this->db->order_by('angkatan', 'desc');
		return $this->db->get('tahun_angkatan')->row_array();
	}

	public function tambah($input)
	{
		$this->db->insert('tahun_angkatan', $input);
	}

	public function edit($input, $id)
	{
		$this->db->where('id_tahun', $id);
		$this->db->update('tahun_angkatan', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_tahun', $id);
		$this->db->delete('tahun_angkatan');
	}

}