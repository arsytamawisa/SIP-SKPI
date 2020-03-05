<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Mahasiswa_model extends CI_Model {

	public function tampil()
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tampil_fakultas_prodi($fakultas,$prodi)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
		$this->db->where('mahasiswa.id_program_studi',$prodi);
		$this->db->where('program_studi.id_fakultas',$fakultas);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tahun_telah_lulus($id,$tahun)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->join('tahun_angkatan', 'tahun_angkatan.id_tahun = mahasiswa.id_tahun', 'left');
		$this->db->where('tanggal_lulus IS NOT NULL');
		$this->db->where('tanggal_lulus NOT IN (" ")');
		$this->db->where('mahasiswa.id_tahun',$tahun);
		$this->db->where('mahasiswa.id_program_studi',$id);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tahun_tgl_telah_lulus($id,$tahun,$tgl_lulus)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->join('tahun_angkatan', 'tahun_angkatan.id_tahun = mahasiswa.id_tahun', 'left');
		$this->db->where('tanggal_lulus IS NOT NULL');
		$this->db->where('tanggal_lulus NOT IN (" ")');
		$this->db->where('mahasiswa.id_tahun',$tahun);
		$this->db->where('mahasiswa.tanggal_lulus',$tgl_lulus);
		$this->db->where('mahasiswa.id_program_studi',$id);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tahun_belum_lulus($id,$tahun)
	{
		return $this->db->query("SELECT * FROM `mahasiswa` 
			WHERE id_tahun = '$tahun' 
			AND id_program_studi = '$id' 
			AND (tanggal_lulus IS NULL 
			OR tanggal_lulus IN (' '))")->result_array();
	}

	public function tampil_tgl_lulus($id,$tahun,$tgl_lulus)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->join('tahun_angkatan', 'tahun_angkatan.id_tahun = mahasiswa.id_tahun', 'left');
		$this->db->where('mahasiswa.id_program_studi',$id);
		$this->db->where('mahasiswa.id_tahun',$tahun);
		$this->db->where('mahasiswa.tanggal_lulus',$tgl_lulus);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tampil_prodi($id)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->where('mahasiswa.id_program_studi',$id);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tampil_fakultas($fakultas)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
		$this->db->where('program_studi.id_fakultas',$fakultas);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tampil_prodi_tahun($id,$tahun)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->join('tahun_angkatan', 'tahun_angkatan.id_tahun = mahasiswa.id_tahun', 'left');
		$this->db->where('mahasiswa.id_program_studi',$id);
		$this->db->where('mahasiswa.id_tahun',$tahun);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tampil_prodi_page($id,$start,$length)
	{
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->where('mahasiswa.id_program_studi',$id);
		return $this->db->get('mahasiswa',$start,$length)->result_array();
	}

	public function jumlah()
	{
		return $this->db->get('mahasiswa')->num_rows();
	}

	public function form($input)
	{
		$this->db->insert('mahasiswa', $input);
	}	

	public function tambah($input)
	{
		// Otomatis Insert Id Prodi
		$prodi1 = substr($input['nim'], 0,1);
		$prodi2	= substr($input['nim'], 3,4);
		if ($prodi1 == "5") 
		{
			$prodi1 = "Sarjana";
		}
		elseif ($prodi1 == "3") 
		{
			$prodi1 = "Diploma";
		}
		else
		{
			$prodi1 = "";
		}
		$this->db->where('kode_program_studi', $prodi2);
		$this->db->where('program_pendidikan_tinggi', $prodi1);
		$prodi = $this->db->get('program_studi')->row_array();

		// Otomatis Insert Tanggal Masuk
		$tahun 		= substr($input['nim'], 1,2);
		$tahun 		= "20".$tahun;
		$this->db->where('angkatan',$tahun);
		$angkatan 	= $this->db->get('tahun_angkatan')->row_array();

		// Data yang di insert ke tabel mahasiswa
		$input['id_program_studi'] 		= $prodi['id_program_studi'];
		$input['tanggal_masuk']			= $angkatan['tgl_masuk'];
		$input['id_tahun']				= $angkatan['id_tahun'];
		$input['id_perguruan_tinggi'] 	= 1;
		$input['password'] 				= generateRandomString();
		$this->db->insert('mahasiswa', $input);
	}	

	public function edit($input, $id)
	{
		$this->db->where('nim', $id);
		$this->db->update('mahasiswa', $input);
	}

	public function edit_admin($input, $id)
	{
		$input['id_perguruan_tinggi'] = 1;
		$this->db->where('nim', $id);
		$this->db->update('mahasiswa', $input);
	}

	public function hapus($id)
	{
		$this->db->where('nim', $id);
		$this->db->delete('mahasiswa');
	}

	public function hapus_info($id)
	{
		$this->db->where('id_informasi', $id);
		$this->db->delete('informasi_tambahan');
	}

	public function detail($nim)
	{
		$this->db->join('perguruan_tinggi', 'perguruan_tinggi.id_perguruan_tinggi = mahasiswa.id_perguruan_tinggi', 'left');
		$this->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
		$this->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
		$this->db->where('mahasiswa.nim', $nim);
		return $this->db->get('mahasiswa')->row_array();
	}

	public function detail_info($id)
	{
		$this->db->where('id_informasi',$id);
		return $this->db->get('informasi_tambahan')->row_array();
	}

	public function detail_info_tambahan($nim)
	{
		$this->db->join('informasi_tambahan', 'informasi_tambahan.nim = mahasiswa.nim', 'left');
		$this->db->where('mahasiswa.nim', $nim);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambah_info($input)
	{
		$config['upload_path'] = './assets/file/';
		$config['allowed_types'] = 'pdf';

		$this->load->library('upload', $config);
		$this->upload->do_upload('berkas');

		$input['berkas'] 		= $this->upload->data('file_name');
		$input['tgl_mulai']  	= str_replace("/","-",$input['tgl_mulai']);
		$tahun 					= substr($input['tgl_mulai'], 6,4);
		$bulan 					= substr($input['tgl_mulai'], 3,2);
		$hari 					= substr($input['tgl_mulai'], 0,2);
		$input['tgl_mulai'] 	= $tahun."-".$hari."-".$bulan;

		if (
			$input['status'] == "kompetisi" 
			OR $input['status'] == "pemakalah" 
			OR $input['status'] == "pembicara" 
			OR $input['status'] == "penulis" 
			OR $input['status'] == "magang"
			OR $input['status'] == "kerja_praktek"
			OR $input['status'] == "asisten_penelitian"
			OR $input['status'] == "asisten_pengabdian"
			OR $input['status'] == "pengurus"
			OR $input['status'] == "toefl"
			OR $input['status'] == "pelatihan"
		)
		{
			$this->db->insert('informasi_tambahan', $input);
		}
		elseif ($input['status'] == "kegiatan_internal" OR $input['status'] == "kegiatan_eksternal") 
		{
			$tanggal_mulai			= date_create($input['tgl_mulai']);
			$tgl_selesai			= date_add($tanggal_mulai,date_interval_create_from_date_string(($input['interval']-1)." days"));
			$input['tgl_selesai']	= date_format($tgl_selesai, "Y-m-d");
			$this->db->insert('informasi_tambahan', $input);
		}
		elseif ($input['status'] == "asisten_mata_kuliah") 
		{
			unset($input['tgl_mulai']);
			error_reporting(0);
			$input['penyelenggara'] = "Universitas Teknologi Yogyakarta";
			$this->db->insert('informasi_tambahan', $input);
		}
		else
		{
			$error = $this->upload->display_errors();
			echo "<script>alert('File yang anda upload terlalu besar atau format file salah');</script>";
			redirect('mahasiswa/info_tambahan/tambah','refresh');
		}
	}

	public function validasi($validasi, $id)
	{
		$this->db->where('id_informasi', $id);
		$this->db->update('informasi_tambahan', $validasi);
	}

	public function edit_info_penerjemah($input, $id)
	{
		$this->db->where('id_informasi', $id);
		$this->db->update('informasi_tambahan', $input);
	}

	public function edit_info($input, $id)
	{
		error_reporting(0);
		$config['upload_path'] = './assets/file/';
		$config['allowed_types'] = 'pdf';
		// $config['max_size']  = '2000';
		$this->load->library('upload', $config);
		$datalama = $this->detail_info($id);
		$berkas = $datalama['berkas'];

		if ($input['tgl_mulai'] !== $datalama['tgl_mulai']) 
		{
			$input['tgl_mulai']  	= str_replace("/","-",$input['tgl_mulai']);
			$tahun 					= substr($input['tgl_mulai'], 6,4);
			$bulan 					= substr($input['tgl_mulai'], 3,2);
			$hari 					= substr($input['tgl_mulai'], 0,2);
			$input['tgl_mulai'] 	= $tahun."-".$hari."-".$bulan;
		}

		if($this->upload->do_upload('berkas'))
		{
			if(file_exists("./assets/file/$datalama[berkas]"))
			{
				unlink("./assets/file/$datalama[berkas]");
			}
			$input['berkas'] = $this->upload->data('file_name');
		}

		if (
			$input['status'] == "kompetisi" 
			OR $input['status'] == "pemakalah" 
			OR $input['status'] == "pembicara" 
			OR $input['status'] == "penulis" 
			OR $input['status'] == "magang"
			OR $input['status'] == "kerja_praktek"
			OR $input['status'] == "asisten_mata_kuliah"
			OR $input['status'] == "asisten_penelitian"
			OR $input['status'] == "asisten_pengabdian"
			OR $input['status'] == "pengurus"
			OR $input['status'] == "toefl"
			OR $input['status'] == "pelatihan"
		)
		{
			$this->db->where('id_informasi', $id);
			$this->db->update('informasi_tambahan', $input);
		}
		elseif ($input['status'] == "kegiatan_internal" OR $input['status'] == "kegiatan_eksternal") 
		{
			$tanggal_mulai			= date_create($input['tgl_mulai']);
			$tgl_selesai			= date_add($tanggal_mulai,date_interval_create_from_date_string(($input['interval']-1)." days"));
			$input['tgl_selesai']	= date_format($tgl_selesai, "Y-m-d");
			$this->db->where('id_informasi', $id);
			$this->db->update('informasi_tambahan', $input);
		}

	}

	public function edit_info_status($input, $id)
	{
		$this->db->where('nim', $id);
		$this->db->update('mahasiswa', $input);
	}

	public function calon_wisuda($input, $nim)
	{
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $input);
	}

	public function upload_data()
	{
		$config['upload_path'] = './assets/file/';
		$config['allowed_types'] = 'xlsx|xls';
		// $config['max_size']  = '2000';
		
		$this->load->library('upload', $config);
		$this->upload->do_upload('data');

		$namafile = $this->upload->data('file_name');
		$inputFileName = './assets/file/'.$namafile;
		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
		$data_mahasiswa = $spreadsheet->getActiveSheet()->toArray();

		foreach ($data_mahasiswa as $key => $value) 
		{
			if ($key!=0) 
			{
				// Otomatis Insert Id Prodi
				$prodi1 = substr($value[0], 0,1);
				$prodi2	= substr($value[0], 3,4);
				if ($prodi1 == "5") 
				{
					$prodi1 = "Sarjana";
				}
				elseif ($prodi1 == "3") 
				{
					$prodi1 = "Diploma";
				}
				else
				{
					$prodi1 = "";
				}
				$this->db->where('kode_program_studi', $prodi2);
				$this->db->where('program_pendidikan_tinggi', $prodi1);
				$prodi = $this->db->get('program_studi')->row_array();

				// Otomatis Insert Tanggal Masuk
				$tahun 		= substr($value[0], 1,2);
				$tahun 		= "20".$tahun ;
				$this->db->where('angkatan',$tahun);
				$angkatan 	= $this->db->get('tahun_angkatan')->row_array();

				// Data yang di insert ke tabel mahasiswa
				$mahasiswa['nim'] 					= $value[0];
				$mahasiswa['nama_mahasiswa'] 		= $value[1];
				$mahasiswa['id_program_studi'] 		= $prodi['id_program_studi'];
				$mahasiswa['tanggal_masuk']			= $angkatan['tgl_masuk'];
				$mahasiswa['id_tahun']				= $angkatan['id_tahun'];
				$mahasiswa['password'] 				= generateRandomString();
				$mahasiswa['id_perguruan_tinggi'] 	= 1;
				$this->db->insert('mahasiswa', $mahasiswa);
			}
		}

		unlink("./assets/file/".$namafile);
	}

}