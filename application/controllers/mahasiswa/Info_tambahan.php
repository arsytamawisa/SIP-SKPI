<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_tambahan extends CI_Controller {

	public function index()
	{
		$mahasiswa 				= $this->session->userdata('mahasiswa');
		$nim 					= $mahasiswa['nim'];
		$data['info_tambahan']	= $this->Mahasiswa_model->detail_info_tambahan($nim);
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/info_tambahan',$data);
		$this->load->view('mahasiswa/footer');
	}

	public function api_kota()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: f587623248129bd4654ffecf28357279"
			),
		));

		$response 	= curl_exec($curl);
		$data 		= json_decode($response,true); 
		$data 		= $data['rajaongkir']['results']; 
		return $data;
	}

	public function edit($id)
	{
		$input 				= $this->input->post();
		$data['info'] 		= $this->Mahasiswa_model->detail_info($id);
		$data['api_kota'] 	= $this->api_kota();

		if($input)
		{
			// Kompetisi
			if ($input['status'] == "kompetisi") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Nama Kompetisi', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');
				$this->form_validation->set_rules('peringkat', 'Peringkat', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pemakalah
			if ($input['status'] == "pemakalah") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('judul_tulisan', 'Judul Tulisan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pembicara
			if ($input['status'] == "pembicara") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('judul_tulisan', 'Judul Tulisan', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Penulis
			if ($input['status'] == "penulis") 
			{
				$this->form_validation->set_rules('judul_tulisan', 'Judul Tulisan', 'required');
				$this->form_validation->set_rules('edisi', 'Edisi', 'required');
				$this->form_validation->set_rules('nama_media', 'Nama Media', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Magang, Kerja Praktek
			if ($input['status'] == "magang" || $input['status'] == "kerja_praktek") 
			{
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('kota', 'Nama Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Waktu Selesai', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Asisten Mata Kuliah
			if ($input['status'] == "asisten_mata_kuliah") 
			{
				$this->form_validation->set_rules('nama_matkul', 'Nama Mata Kuliah', 'required');
				$this->form_validation->set_rules('semester', 'Semester', 'required');
				$this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Asisten Penelitian
			if ($input['status'] == "asisten_penelitian") 
			{
				$this->form_validation->set_rules('judul_tulisan', 'Judul Penelitian', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Waktu Selesai', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Asisten Pengabdian
			if ($input['status'] == "asisten_pengabdian") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Waktu Selesai', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Kegiatan Internal
			if ($input['status'] == "kegiatan_internal" || $input['status'] == "kegiatan_eksternal") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pengurus UKM / HMJ
			if ($input['status'] == "pengurus") 
			{
				$this->form_validation->set_rules('nama_ukm_hmj', 'Nama UKM / HMJ', 'required');
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// TOEFL
			if ($input['status'] == "toefl") 
			{
				$this->form_validation->set_rules('skor_toefl', 'Skor TOEFL', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pelatihan
			if ($input['status'] == "pelatihan") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Nama Pelatihan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_info($input,$id);
					$this->session->set_flashdata('edit','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}
		}

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/edit_info',$data);
		$this->load->view('mahasiswa/footer');
	}


	public function tambah()
	{
		$data['api_kota'] 	= $this->api_kota();
		$input 				= $this->input->post();

		if($input)
		{

			// Kompetisi
			if ($input['status'] == "kompetisi") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Nama Kompetisi', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');
				$this->form_validation->set_rules('peringkat', 'Peringkat', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pemakalah
			if ($input['status'] == "pemakalah") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('judul_tulisan', 'Judul Tulisan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pembicara
			if ($input['status'] == "pembicara") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('judul_tulisan', 'Judul Tulisan', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Penulis
			if ($input['status'] == "penulis") 
			{
				$this->form_validation->set_rules('judul_tulisan', 'Judul Tulisan', 'required');
				$this->form_validation->set_rules('edisi', 'Edisi', 'required');
				$this->form_validation->set_rules('nama_media', 'Nama Media', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Magang, Kerja Praktek
			if ($input['status'] == "magang" || $input['status'] == "kerja_praktek") 
			{
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('kota', 'Nama Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Waktu Selesai', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Asisten Mata Kuliah
			if ($input['status'] == "asisten_mata_kuliah") 
			{
				$this->form_validation->set_rules('nama_matkul', 'Nama Mata Kuliah', 'required');
				$this->form_validation->set_rules('semester', 'Semester', 'required');
				$this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Asisten Penelitian
			if ($input['status'] == "asisten_penelitian") 
			{
				$this->form_validation->set_rules('judul_tulisan', 'Judul Penelitian', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Waktu Selesai', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Asisten Pengabdian
			if ($input['status'] == "asisten_pengabdian") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Waktu Selesai', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Kegiatan Internal
			if ($input['status'] == "kegiatan_internal" || $input['status'] == "kegiatan_eksternal") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pengurus UKM / HMJ
			if ($input['status'] == "pengurus") 
			{
				$this->form_validation->set_rules('nama_ukm_hmj', 'Nama UKM / HMJ', 'required');
				$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
				$this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// TOEFL
			if ($input['status'] == "toefl") 
			{
				$this->form_validation->set_rules('skor_toefl', 'Skor TOEFL', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}

			// Pelatihan
			if ($input['status'] == "pelatihan") 
			{
				$this->form_validation->set_rules('judul_kegiatan', 'Nama Pelatihan', 'required');
				$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
				$this->form_validation->set_rules('kota', 'Kota', 'required');
				$this->form_validation->set_rules('tgl_mulai', 'Waktu', 'required');

				if ($_FILES['berkas']['name'] == "") 
				{
					$this->session->set_flashdata('gagal', 'gagal');
					$this->form_validation->set_rules('berkas', 'Berkas', 'required');
				}

				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->tambah_info($input);
					$this->session->set_flashdata('tambah','Informasi Tambahan'); 
					redirect('mahasiswa/info_tambahan','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}
		}

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/tambah_info',$data);
		$this->load->view('mahasiswa/footer');
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapus_info($id);
		$this->session->set_flashdata('hapus','Informasi Tambahan'); 
		redirect('mahasiswa/info_tambahan','refresh');
	}
}