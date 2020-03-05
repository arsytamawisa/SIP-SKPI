<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas_model extends CI_Model {

	public function tampil()
	{
		return $this->db->get('fakultas')->result_array();
	}

	public function jumlah()
	{
		return $this->db->get('fakultas')->num_rows();
	}

	public function tambah($input)
	{
		$this->db->insert('fakultas', $input);
	}

	public function edit($input, $id)
	{
		$this->db->where('id_fakultas', $id);
		$this->db->update('fakultas', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_fakultas', $id);
		$this->db->delete('fakultas');
	}

	public function prodi_fakultas()
	{
		$data = $this->db->get('fakultas')->result_array();

		$semua = array();

		foreach ($data as $key => $value) {
			$this->db->where('id_fakultas', $value['id_fakultas']);
			$prodi 			= $this->db->get('program_studi')->result_array();
			$value['prodi'] = $prodi;
			$semua[] 		= $value;
		}
		return $semua;
	}
}