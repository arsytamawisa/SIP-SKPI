<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetensi_model extends CI_Model {

	public function tampil()
	{
		return $this->db->get('kompetensi')->result_array();
	}

	public function tampil_prodi($id)
	{
		$this->db->join('admin_prodi', 'admin_prodi.id_program_studi = kompetensi.id_program_studi', 'left');
		$this->db->where('kompetensi.id_program_studi',$id);
		return $this->db->get('kompetensi')->result_array();
	}

	public function tambah($input)
	{
		$this->db->insert('kompetensi', $input);
	}

	public function edit($input, $id)
	{
		$this->db->where('id_kompetensi', $id);
		$this->db->update('kompetensi', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_kompetensi', $id);
		$this->db->delete('kompetensi');
	}

	public function hapus_sub($id)
	{
		$this->db->where('id_sub_kompetensi', $id);
		$this->db->delete('sub_kompetensi');
	}

	public function sub_kompetensi($id)
	{
		$this->db->join('kompetensi', 'kompetensi.id_kompetensi = sub_kompetensi.id_kompetensi', 'left');
		$this->db->where('sub_kompetensi.id_kompetensi', $id);
		return $this->db->get('sub_kompetensi')->result_array();
	}

	public function detail($id)
	{
		$this->db->where('id_kompetensi', $id);
		return $this->db->get('kompetensi')->row_array();
	}

	public function tambah_sub($input, $id)
	{
		$input['id_kompetensi'] = $id;
		$this->db->insert('sub_kompetensi', $input);
	}

	public function edit_sub($input, $id)
	{
		$this->db->where('id_sub_kompetensi', $id);
		$this->db->update('sub_kompetensi', $input);
	}

	public function kompetensi()
	{
		$data = $this->db->get('kompetensi')->result_array();

		$array = array();

		foreach ($data as $key => $value) {
			$this->db->where('id_kompetensi', $value['id_kompetensi']);
			$sub_kompetensi 			= $this->db->get('sub_kompetensi')->result_array();
			$value['sub_kompetensi'] 	= $sub_kompetensi;
			$array[] 					= $value;
		}
		return $array;
	}

	public function detail_kompetensi($id)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = kompetensi.id_program_studi', 'left');
		$this->db->where('kompetensi.id_program_studi', $id);
		$data = $this->db->get('kompetensi')->result_array();

		$array = array();

		foreach ($data as $key => $value) {
			$this->db->where('id_kompetensi', $value['id_kompetensi']);
			$sub_kompetensi 			= $this->db->get('sub_kompetensi')->result_array();
			$value['sub_kompetensi'] 	= $sub_kompetensi;
			$array[] 					= $value;
		}
		return $array;
	}
}