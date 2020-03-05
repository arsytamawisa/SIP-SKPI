<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->library('pdf');
		if(!$this->session->userdata('admin_prodi') OR empty($this->session->userdata('admin_prodi'))){
			redirect('error_404','refresh');
		}
	}
	
	public function index()
	{

		$session			= $this->session->userdata('admin_prodi');
		$id 				= $session['id_program_studi'];
		$input				= $this->input->post('status');
		$tahun_akhir 		= $this->Tahun_model->tahun_akhir();
		$tahun 				= $tahun_akhir['id_tahun'];
		$tahun				= $this->input->post('tahun');
		$tgl_lulus			= $this->input->post('tgl_lulus');
		$data['tahun']		= $this->Tahun_model->tampil();

		$this->session->set_userdata("status", $input);
		$this->session->set_userdata("tahun", $tahun);
		$this->session->set_userdata("tgl_lulus", $tgl_lulus);

		if ($input == "Belum Lulus" && $tahun && $tgl_lulus) 
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tahun_belum_lulus($id,$tahun);
			$data['print'] 		= $this->Mahasiswa_model->tahun_belum_lulus($id,$tahun);
		}
		elseif($input == "Telah Lulus" && $tahun && $tgl_lulus == "Semua Data")
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tahun_telah_lulus($id,$tahun);
			$data['print'] 		= $this->Mahasiswa_model->tahun_telah_lulus($id,$tahun);
			$data['tgl_lulus'] 	= tgl_lulus($tahun);
		}
		elseif($input == "Telah Lulus" && $tahun && $tgl_lulus !== "Semua Data")
		{
			$data['mahasiswa']	= $this->Mahasiswa_model->tahun_tgl_telah_lulus($id,$tahun,$tgl_lulus);
			$data['print'] 		= $this->Mahasiswa_model->tahun_tgl_telah_lulus($id,$tahun,$tgl_lulus);
			$data['tgl_lulus'] 	= tgl_lulus($tahun);
		}
		elseif($input == "Semua Data" && $tahun && $tgl_lulus !== "Semua Data")
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil_tgl_lulus($id,$tahun,$tgl_lulus);
			$data['print'] 		= $this->Mahasiswa_model->tampil_tgl_lulus($id,$tahun,$tgl_lulus);
			$data['tgl_lulus'] 	= tgl_lulus($tahun);
		}
		elseif($tahun)
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil_prodi_tahun($id,$tahun);
			$data['print'] 		= $this->Mahasiswa_model->tampil_prodi_tahun($id,$tahun);
			$data['tgl_lulus'] 	= tgl_lulus($tahun);
		}
		else
		{
			$tahun_akhir 		= $this->Tahun_model->tahun_akhir();
			$tahun 				= $tahun_akhir['id_tahun'];
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil_prodi_tahun($id,$tahun);
			$data['print'] 		= $this->Mahasiswa_model->tampil_prodi_tahun($id,$tahun);
			$data['tgl_lulus'] 	= tgl_lulus($tahun);
		}

		$this->load->view('admin_prodi/header');
		$this->load->view('admin_prodi/mahasiswa/tampil',$data);
		$this->load->view('admin_prodi/footer');
	}
	

	public function cetak($id)
	{
		$data['info']		= $this->Mahasiswa_model->detail_info_tambahan($id);
		$data['mahasiswa'] 	= $this->Mahasiswa_model->detail($id);
		$data['kompetensi']	= $this->Kompetensi_model->detail_kompetensi($data['mahasiswa']['id_program_studi']);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->load_view('admin_prodi/mahasiswa/cetak',$data);
	}


	public function print($id)
	{   
		$data['info']		= $this->Mahasiswa_model->detail_info_tambahan($id);
		$data['mahasiswa'] 	= $this->Mahasiswa_model->detail($id);
		$data['kompetensi']	= $this->Kompetensi_model->detail_kompetensi($data['mahasiswa']['id_program_studi']);
		$this->load->view('admin_prodi/mahasiswa/print',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required|numeric|exact_length[10]|is_unique[mahasiswa.nim]');
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');

		$input = $this->input->post();
		$data['program_studi'] = $this->Program_studi_model->tampil();
		
		if($input)
		{
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Mahasiswa_model->tambah($input);
				$this->session->set_flashdata('tambah', $input['nama_mahasiswa']); 
				redirect('admin_prodi/mahasiswa','refresh');
			}
			else
			{
				$this->session->set_flashdata('gagal', 'gagal');
			}
		}

		$this->load->view('admin_prodi/header');
		$this->load->view('admin_prodi/mahasiswa/tambah',$data);
		$this->load->view('admin_prodi/footer');
	}

	public function upload()
	{
		$this->load->view('admin_prodi/header');
		$this->load->view('admin_prodi/mahasiswa/upload');
		$this->load->view('admin_prodi/footer');

		if ($this->input->post('upload')) 	
		{
			$config['upload_path'] = './assets/file/';
			$config['allowed_types'] = 'xlsx|xls';
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('data')) 
			{
				$this->session->set_flashdata('gagal', 'gagal');
				redirect('admin_prodi/mahasiswa/upload','refresh');
			}

			$this->Mahasiswa_model->upload_data();
			$this->session->set_flashdata('upload', 'Data Mahasiswa');
			redirect('admin_prodi/mahasiswa','refresh');
		}
	}

	public function download($status=null,$tahun=null)
	{
		// $this->load->view('admin_prodi/mahasiswa/download', $data);	
		$session		= $this->session->userdata('admin_prodi');
		$id 			= $session['id_program_studi'];
		$detail			= $this->Program_studi_model->detail($id);
		$nama_file		= $detail['nama_prodi_indonesia'];
		$status 		= str_replace("%20", " ", $status);

		if ($status == "Belum Lulus" && $tahun) 
		{
			$data['mahasiswa'] = $this->Mahasiswa_model->tahun_belum_lulus($id,$tahun);
		}
		elseif($status == "Telah Lulus" && $tahun)
		{
			$data['mahasiswa'] = $this->Mahasiswa_model->tahun_telah_lulus($id,$tahun);
		}
		else
		{
			$data['mahasiswa'] 	= $this->Mahasiswa_model->tampil_prodi_tahun($id,$tahun);
		}

		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

		$excel = new PHPExcel();

		$excel->getProperties()->setCreator('Arsytama')
		->setLastModifiedBy('Darkside')
		->setTitle("Data Mahasiswa")
		->setSubject("Mahasiswa")
		->setDescription("Data Mahasiswa")
		->setKeywords("Data Mahasiswa");

		$style_col = 
		array
		(
			'font' 		=> array('bold' => true),
			'alignment' => 
			array
			(
				'horizontal' 	=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' 		=> PHPExcel_Style_Alignment::VERTICAL_CENTER
			),
			'borders' => 
			array
			(
				'top' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'right' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'bottom' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'left' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN)
			)
		);

		$style_row = 
		array
		(
			'alignment' => 
			array
			(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
			),
			'borders' => 
			array
			(
				'top' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'right' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'bottom' 	=> array('style'  => PHPExcel_Style_Border::BORDER_THIN),
				'left' 		=> array('style'  => PHPExcel_Style_Border::BORDER_THIN)
			)
		);

		$excel->setActiveSheetIndex(0)->setCellValue('A1', "NIS");
		$excel->setActiveSheetIndex(0)->setCellValue('B1', "NAMA MAHASISWA");
		$excel->setActiveSheetIndex(0)->setCellValue('C1', "USERNAME");
		$excel->setActiveSheetIndex(0)->setCellValue('D1', "PASSWORD");

		$excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);

		$no = 1;
		$numrow = 2;
		foreach($data['mahasiswa'] as $value)
		{
			$excel->getActiveSheet()->setCellValue('A'.$numrow, $value['nim']);
			$excel->getActiveSheet()->setCellValue('B'.$numrow, $value['nama_mahasiswa']);
			$excel->getActiveSheet()->setCellValueExplicit('C'.$numrow, $value['nim'], PHPExcel_Cell_DataType::TYPE_STRING);
			$excel->getActiveSheet()->setCellValueExplicit('D'.$numrow, $value['password'], PHPExcel_Cell_DataType::TYPE_STRING);

			$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);

			$no++;
			$numrow++;
		}

		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15);

		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$excel->getActiveSheet(0)->setTitle("Export Data Mahasiswa");
		$excel->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;'.'filename='.$nama_file.'.xlsx');
		header('Cache-Control: max-age=0');

		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required');
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');

		$input 					= $this->input->post();
		$data['detail'] 		= $this->Mahasiswa_model->detail($id);
		$data['program_studi'] 	= $this->Program_studi_model->tampil();

		if($input)
		{
			if($input)
			{
				if ($this->form_validation->run() == TRUE) 
				{
					$this->Mahasiswa_model->edit_admin($input,$id);
					$this->session->set_flashdata('edit', $input['nama_mahasiswa']);
					redirect('admin_prodi/mahasiswa','refresh');
				}
				else
				{
					$this->session->set_flashdata('gagal', 'gagal');
				}
			}
		}

		$this->load->view('admin_prodi/header');
		$this->load->view('admin_prodi/mahasiswa/edit',$data);
		$this->load->view('admin_prodi/footer');
	}

	public function hapus($id)
	{
		$mahasiswa = nama_mahasiswa($id);
		$this->Mahasiswa_model->hapus($id);
		$this->session->set_flashdata('hapus', $mahasiswa); 
		redirect('admin_prodi/mahasiswa','refresh');
	}

	public function hapus_info($id)
	{
		$this->Mahasiswa_model->hapus_info($id);
		$this->session->set_flashdata('hapus','Informasi Tambahan'); 
		echo "<script> window.history.back() </script>";
	}

	public function detail($id)
	{
		$input 					= $this->input->post();
		$id_info 				= $this->input->post('id_informasi');
		$data['detail'] 		= $this->Mahasiswa_model->detail($id);
		$data['detail_info'] 	= $this->Mahasiswa_model->detail_info_tambahan($id);
		$data['mahasiswa'] 		= $this->Mahasiswa_model->tampil();

		if($input)
		{
			$this->Mahasiswa_model->edit_info($input,$id_info);
			$this->session->set_flashdata('edit','Informasi Tambahan');
			echo "<script> window.history.back() </script>";
		}

		$this->load->view('admin_prodi/header');
		$this->load->view('admin_prodi/mahasiswa/detail',$data);
		$this->load->view('admin_prodi/footer');
	}
}