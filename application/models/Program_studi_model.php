<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_studi_model extends CI_Model {

	public function tampil()
	{
		$this->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
		$this->db->order_by('id_program_studi', 'desc');
		return $this->db->get('program_studi')->result_array();
	}	

	public function jumlah()
	{
		return $this->db->get('program_studi')->num_rows();
	}

	public function detail($id)
	{
		$this->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
		$this->db->where('program_studi.id_program_studi', $id);
		return $this->db->get('program_studi')->row_array();
	}	

	public function tambah($input)
	{
		$this->db->insert('program_studi', $input);
	}	

	public function edit($input, $id)
	{
		$this->db->where('id_program_studi', $id);
		$this->db->update('program_studi', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_program_studi', $id);
		$this->db->delete('program_studi');
	}
}
