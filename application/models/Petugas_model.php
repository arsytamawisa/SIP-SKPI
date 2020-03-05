<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model 
{
	public function tampil_admin()
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = admin_prodi.id_program_studi', 'left');
		return $this->db->get('admin_prodi')->result_array();
	}

	public function tampil_penerjemah()
	{
		$this->db->where('role',"Penerjemah");
		return $this->db->get('admin')->result_array();
	}

	public function tambah_admin($input)
	{
		$input['password'] = sha1($input['password']);
		$this->db->insert('admin_prodi', $input);
	}

	public function tambah_penerjemah($input)
	{
		$input['role'] = "Penerjemah"; 
		$input['password'] = sha1($input['password']);
		$this->db->insert('admin', $input);
	}

	public function edit_admin($input, $id)
	{
		$data = $this->Petugas_model->detail_admin($id);
		if ($input['password'] == $data['password']) 
		{
			$this->db->where('id_admin_prodi', $id);
			$this->db->update('admin_prodi', $input);
		}
		else
		{
			$input['password'] = sha1($input['password']);
			$this->db->where('id_admin_prodi', $id);
			$this->db->update('admin_prodi', $input);
		}
	}

	public function edit_keterangan($input, $id)
	{
		$this->db->where('id_informasi', $id);
		$this->db->update('informasi_tambahan', $input);
	}

	public function edit_penerjemah($input, $id)
	{
		$data = $this->Petugas_model->detail_penerjemah($id);
		if ($input['password'] == $data['password']) 
		{
			$this->db->where('id_admin', $id);
			$this->db->update('admin', $input);
		}
		else
		{
			$input['password'] = sha1($input['password']);
			$this->db->where('id_admin', $id);
			$this->db->update('admin', $input);
		}
	}

	public function hapus_admin($id)
	{
		$this->db->where('id_admin_prodi', $id);
		$this->db->delete('admin_prodi');
	}

	public function hapus_penerjemah($id)
	{
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
	}

	public function detail_admin($id)
	{
		$this->db->where('id_admin_prodi', $id);
		return $this->db->get('admin_prodi')->row_array();
	}

	public function detail_penerjemah($id)
	{
		$this->db->where('role','Penerjemah');
		$this->db->where('id_admin', $id);
		return $this->db->get('admin')->row_array();
	}
}