<?php 

function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);

	$bulan = array (1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$split    = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

function date_now($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);

	$bulan = array (1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$split    = explode('-', $tanggal);
	$tgl_indo = $split[0] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[2];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

function tanggal_luar($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
		'Selasa',
		'Rabu',
		'Kamis',
		'Jumat',
		'Sabtu',
		'Minggu'
	);

	$bulan = array (1 =>   'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	);
	$split    = explode('-', $tanggal);
	$tgl_indo = $bulan[ (int)$split[1] ] . ' ' . $split[2] . ', ' .  $split[0];

	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

function jumlah_sub($id) 
{
	$CI =& get_instance();
	$CI->db->where('id_kompetensi', $id);
	return $CI->db->get('sub_kompetensi')->num_rows();
}

function jumlah_prodi($id) 
{
	$CI =& get_instance();
	$CI->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
	$CI->db->where('program_studi.id_fakultas', $id);
	return $CI->db->get('program_studi')->num_rows();
}

function tampil_prodi($id)
{
	$CI =& get_instance();
	$CI->db->join('program_studi', 'kompetensi.id_program_studi = program_studi.id_program_studi', 'left');
	$CI->db->where('kompetensi.id_program_studi', $id);
	$kompetensi = $CI->db->get('kompetensi')->row_array();
	return $kompetensi['nama_prodi_indonesia'];
}

function jenjang_prodi($id)
{
	$CI =& get_instance();
	$CI->db->join('program_studi', 'kompetensi.id_program_studi = program_studi.id_program_studi', 'left');
	$CI->db->where('kompetensi.id_program_studi', $id);
	$kompetensi = $CI->db->get('kompetensi')->row_array();
	return $kompetensi['program_pendidikan_tinggi'];
}

function prodi_fakultas($id)
{
	$CI =& get_instance();
	$CI->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
	$CI->db->where('program_studi.id_fakultas', $id);
	return $CI->db->get('program_studi')->result_array();
}

function nama_fakultas($id)
{
	$CI =& get_instance();
	$CI->db->where('fakultas.id_fakultas', $id);
	$fakultas = $CI->db->get('fakultas')->row_array();
	return $fakultas['nama_fakultas'];
}

function nama_fakultas_prodi($id)
{
	$CI =& get_instance();
	$CI->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
	$CI->db->where('program_studi.id_program_studi', $id);
	$prodi = $CI->db->get('program_studi')->row_array();
	return $prodi['nama_fakultas'];
}

function nama_prodi($id)
{
	$CI =& get_instance();
	$CI->db->where('program_studi.id_program_studi', $id);
	$program_studi = $CI->db->get('program_studi')->row_array();
	return $program_studi['nama_prodi_indonesia'];
}

function tahun($id)
{
	$CI =& get_instance();
	$CI->db->where('tahun_angkatan.id_tahun', $id);
	$tahun = $CI->db->get('tahun_angkatan')->row_array();
	return $tahun['angkatan'];
}

function nama_mahasiswa($id)
{
	$CI =& get_instance();
	$CI->db->where('mahasiswa.nim', $id);
	$mahasiswa = $CI->db->get('mahasiswa')->row_array();
	return $mahasiswa['nama_mahasiswa'];
}

function jml_mhs_prodi($id)
{
	$CI =& get_instance();
	$CI->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
	$CI->db->where('program_studi.id_program_studi', $id);
	return $CI->db->get('mahasiswa')->num_rows();
}

function jumlah_info($id)
{
	$CI =& get_instance();
	$data  = $CI->db->query("SELECT * FROM `informasi_tambahan`
		LEFT JOIN mahasiswa ON mahasiswa.nim = informasi_tambahan.nim
		WHERE informasi_tambahan.nim='$id'
		AND NOT validasi='Validasi Ditolak'")->result_array();
	$total = 0;

	foreach ($data as $key => $value) 
	{
		if ($value['status'] == "kompetisi") 
		{
			if($value['activity'] !== null 
				AND $value['activity'] !== ""
				AND $value['institution'] !== null
				AND $value['institution'] !== ""
				AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "pemakalah")
		{
			if($value['activity'] !== null
				AND $value['activity'] !== "" 
				AND $value['writing'] !== null
				AND $value['writing'] !== ""
				AND $value['institution'] !== null 
				AND $value['institution'] !== ""
				AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "pembicara")
		{
			if($value['activity'] !== "" AND $value['activity'] !== null AND $value['writing'] !== "" AND $value['writing'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "penulis")
		{
			if($value['writing'] !== "" AND $value['writing'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "magang" OR $value['status'] == "kerja_praktek")
		{
			if($value['penyelenggara'] !== "" AND $value['penyelenggara'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}		
		elseif ($value['status'] == "toefl")
		{
			if($value['skor_toefl'] !== "" AND $value['skor_toefl'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "asisten_mata_kuliah")
		{
			if($value['course'] !== "" AND $value['course'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "asisten_penelitian")
		{
			if($value['institution'] !== "" AND $value['institution'] !== null AND $value['writing'] !== "" AND $value['writing'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "asisten_pengabdian" 
			OR $value['status'] == "kegiatan_internal" 
			OR $value['status'] == "kegiatan_eksternal"
			OR $value['status'] == "pelatihan")
		{
			if($value['institution'] !== "" AND $value['institution'] !== null AND $value['activity'] !== "" AND $value['activity'] !== null AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
		elseif ($value['status'] == "pengurus")
		{
			if($value['position'] !== "" 
				AND $value['position'] !== null 
				AND $value['name_ukm_hmj'] !== "" 
				AND $value['name_ukm_hmj'] !== null
				AND $value['institution'] !== "" 
				AND $value['institution'] !== null
				AND $value['validasi'] == "Sudah Divalidasi")
			{
				$total+=1;
			}
		}
	}

	$response['total']		= count($data);
	$response['dikerjakan']	= $total;
	return $response;
}

function tgl_lulus($id)
{
	$CI =& get_instance();
	return $CI->db->query("SELECT DISTINCT tanggal_lulus FROM mahasiswa 
		WHERE (tanggal_lulus IS NOT NULL AND tanggal_lulus NOT IN (' '))
		AND id_tahun = '$id'")->result_array();
}

function cek_data($id)
{
	$CI =& get_instance();
	$CI->db->where('nim', $id);
	return $CI->db->get('informasi_tambahan')->result_array();
}


function jml_mhs_fakultas($id)
{
	$CI =& get_instance();
	$CI->db->join('program_studi', 'program_studi.id_program_studi = mahasiswa.id_program_studi', 'left');
	$CI->db->join('fakultas', 'fakultas.id_fakultas = program_studi.id_fakultas', 'left');
	$CI->db->where('program_studi.id_fakultas', $id);
	return $CI->db->get('mahasiswa')->num_rows();
}

function generateRandomString($length = 6) 
{
	$characters = '123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}