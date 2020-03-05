<?php 

$tanggal_lahir 	= "";
$date_of_birth 	= "";
$tanggal_masuk 	= "";
$tanggal_lulus 	= "";
$date_in 		= "";
$date_out	 	= "";

if($mahasiswa['tanggal_lahir'])
{
	$oldformat		= str_replace("/","-",$mahasiswa['tanggal_lahir']);
	$time 			= strtotime($mahasiswa['tanggal_lahir']);
	$tanggal_lahir	= date('Y-m-d',$time);
	$tanggal_lahir	= tanggal_indo($tanggal_lahir);
	$date_of_birth	= date('Y-m-d',$time);
	$date_of_birth	= tanggal_luar($date_of_birth);
}

if($mahasiswa['tanggal_masuk'])
{
	$oldformat		= str_replace("/","-",$mahasiswa['tanggal_masuk']);
	$time 			= strtotime($mahasiswa['tanggal_masuk']);
	$tanggal_masuk	= date('Y-m-d',$time);
	$tanggal_masuk	= tanggal_indo($tanggal_masuk);
	$date_in		= date('Y-m-d',$time);
	$date_in		= tanggal_luar($date_in);
}

if($mahasiswa['tanggal_lulus'])
{
	$oldformat		= str_replace("/","-",$mahasiswa['tanggal_lulus']);
	$time 			= strtotime($mahasiswa['tanggal_lulus']);
	$tanggal_lulus	= date('Y-m-d',$time);
	$tanggal_lulus	= tanggal_indo($tanggal_lulus);
	$date_out		= date('Y-m-d',$time);
	$date_out		= tanggal_luar($date_out);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $mahasiswa['nama_mahasiswa'] ?></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/cssku.css">
</head>
<body>

	<div class="container">

		<!-- HEADER -->
		<br>
		<div class="row">
			<div class="col-12">
				<h3 class="header">SURAT KETERANGAN PENDAMPING IJAZAH</h3>
				<h3 class="header"><i>DIPLOMA SUPPLEMENT</i></h3>

				<p class="number">Nomor &emsp;: <?= $mahasiswa['no_skpi'] ?></p>
				<hr>
				<p class="number"><i>Number &emsp;: <?= $mahasiswa['no_skpi'] ?></i></p>
				<br>

				<p class="text">
					Surat Keterangan Pendamping Ijazah (SKPI) sebagai dokumen pelengkap ijazah yang menerangkan kompetensi lulusan dan prestasi dari pemegang ijazah selama masa kuliah.
				</p>
				<p class="text">
					The Diploma Supplement is a complementary document of diploma describing the learning outcomes and achievement of the holder during the period of study.
				</p>

			</div>
		</div>
		<br>
		
		<!-- CONTENT -->
		<div class="row">
			<div class="col-12">
				<table width="100%">
					<!-- INFORMASI TENTANG IDENTITAS DIRI PEMEGANG SKPI -->
					<thead>
						<tr>
							<th width="3%">I.</th>
							<th colspan="3">INFORMASI TENTANG IDENTITAS DIRI PEMEGANG SKPI</th>
						</tr>
						<tr>
							<th></th>
							<th colspan="3" class="spasi"><i>INFORMATION IDENTIFYING THE HOLDER OF DIPLOMA SUPPLEMENT</i></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td width="3">1.1</td>
							<td>Nama Lengkap</td>
							<td><?= $mahasiswa['nama_mahasiswa'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Full Name</i></td>
							<td class="spasi"><i><?= $mahasiswa['nama_mahasiswa'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="3">1.2</td>
							<td>Tempat dan Tanggal Lahir</td>
							<td><?= $mahasiswa['tempat_lahir'] ?>, <?= $tanggal_lahir ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Place and Date of Birth</i></td>
							<td class="spasi"><i><?= $mahasiswa['tempat_lahir'] ?>, <?= $date_of_birth ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="3">1.3</td>
							<td>Nomor Pokok Mahasiswa</td>
							<td><?= $mahasiswa['nim'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Student Identification Number</i></td>
							<td class="spasi"><i><?= $mahasiswa['nim'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="3">1.4</td>
							<td>Tanggal, Bulan, Tahun Masuk</td>
							<td><?= $tanggal_masuk ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Date of Admission</i></td>
							<td class="spasi"><i><?= $date_in ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="3">1.5</td>
							<td>Tanggal, Bulan, Tahun Lulus</td>
							<td><?= $tanggal_lulus ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Date of Graduation</i></td>
							<td class="spasi"><i><?= $date_out ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="3">1.6</td>
							<td>Nomor Ijazah</td>
							<td><?= $mahasiswa['no_ijazah'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Diploma Number</i></td>
							<td class="spasi"><i><?= $mahasiswa['no_ijazah'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="3">1.7</td>
							<td>Gelar</td>
							<td><?= $mahasiswa['gelar_indonesia'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="3"></td>
							<td><i>Title</i></td>
							<td class="spasi"><i><?= $mahasiswa['gelar_inggris'] ?></i></td>
						</tr>
					</tbody>
					
					<!-- Jarak Antar Table -->
					<tr style="visibility:hidden">
						<th colspan="4">asdasdds</th>
					</tr>

					<!-- INFORMASI TENTANG IDENTITAS PENYELENGGARA PROGRAM -->
					<thead>
						<tr>
							<th width="3%">II.</th>
							<th colspan="3">INFORMASI TENTANG IDENTITAS PENYELENGGARA PROGRAM</th>
						</tr>
						<tr>
							<th></th>
							<th colspan="3" class="spasi"><i>INFORMATION IDENTIFYING AWARDING INSTITUTION</i></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td width="5%">2.1</td>
							<td>Nama Perguruan Tinggi</td>
							<td><?= $mahasiswa['nama_perguruan_tinggi'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Awarding Institution</i></td>
							<td class="spasi"><i>University of Technology Yogyakarta</i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.2</td>
							<td>Status Akreditasi Perguruan Tinggi</td>
							<td><?= $mahasiswa['status_akreditasi_kampus'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Awarding Institution Accreditation Grade</i></td>
							<td class="spasi"><i><?= $mahasiswa['status_akreditasi_kampus'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.3</td>
							<td>Nomor SK Akreditasi Perguruan Tinggi</td>
							<td><?= $mahasiswa['no_sk_akreditasi_kampus'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Accreditation Decree Number</i></td>
							<td class="spasi"><i><?= $mahasiswa['no_sk_akreditasi_kampus'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.4</td>
							<td>Nama Program Studi</td>
							<td><?= $mahasiswa['nama_prodi_indonesia'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Departement</i></td>
							<td class="spasi"><i><?= $mahasiswa['nama_prodi_inggris'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.5</td>
							<td>Status Akreditasi Program Studi</td>
							<td><?= $mahasiswa['status_akreditasi_prodi'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Department Accreditation Grade</i></td>
							<td class="spasi"><i><?= $mahasiswa['status_akreditasi_prodi'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.6</td>
							<td>Nomor SK Akreditasi Program Studi</td>
							<td><?= $mahasiswa['no_sk_akreditasi_prodi'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Accreditation Decree Number</i></td>
							<td class="spasi"><i><?= $mahasiswa['no_sk_akreditasi_prodi'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.7</td>
							<td>Jenis Pendidikan</td>
							<td>Akademik</td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Type of Education</i></td>
							<td class="spasi"><i>Academic</i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.8</td>
							<td>Program Pendidikan Tinggi</td>
							<td><?php 
								if ($mahasiswa['program_pendidikan_tinggi'] == "Diploma") 
								{
									echo "Associate's Degree";
								} 
								else if ($mahasiswa['program_pendidikan_tinggi'] == "Sarjana")
								{
									echo "Bachelor's Degree";
								}
								else if ($mahasiswa['program_pendidikan_tinggi'] == "Magister")
								{
									echo "Master's Degree";
								}
								else
								{
									echo "Doctorate";
								}
								?>
							</td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Level of Education Program</i></td>
							<td class="spasi"><i><?= $mahasiswa['program_pendidikan_tinggi'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.9</td>
							<td>Jenjang Kualifikasi Sesuai KKNI</td>
							<td><?= $mahasiswa['jenjang_kualifikasi'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Level of Qualification in the National Qualification Framework</i></td>
							<td class="spasi"><i><?= $mahasiswa['jenjang_kualifikasi'] ?></i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.10</td>
							<td>Bahasa Pengantar Kuliah</td>
							<td>Indonesia</td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Language of Instruction</i></td>
							<td class="spasi"><i>Indonesian</i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.11</td>
							<td>Sistem Penilaian</td>
							<td><?= $mahasiswa['sistem_penilaian'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Grading System</i></td>
							<td class="spasi"><i>Scale 0-4; A=4, B=3, C=2, D=1, E=0</i></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%">2.12</td>
							<td>Jenis dan Jenjang Pendidikan Lanjutan</td>
							<td>Akademik dan <?= $mahasiswa['pendidikan_lanjutan'] ?></td>
						</tr>
						<tr>
							<td></td>
							<td width="5%"></td>
							<td><i>Type and Level of Further Study</i></td>
							<td><i>Academic and <?= $mahasiswa['pendidikan_lanjutan'] ?></i></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		 		
<!-- 		<footer>
			<table width="100%">
				<tr>
					<td>SURAT KETERANGAN PENDAMPING IJAZAH | Diploma Supplement</td>
					<td align="right">1</td>
				</tr>
			</table>
		</footer>  -->
	


	<!-- PAGE BREAK -->
	<div class="page_break"></div>
	<!-- PAGE BREAK -->


	<div class="row">
		<div class="col-12">
			<table width="100%">
				<thead>
					<tr>
						<th width="3%">III.</th>
						<th colspan="4">INFORMASI TENTANG KUALIFIKASI DAN HASIL YANG DICAPAI</th>
					</tr>
					<tr>
						<th></th>
						<th colspan="4"><i>INFORMATION IDENTIFYING THE QUALIFICATION AND OUTCOMES OBTAINED</i></th>
					</tr>
				</thead>
			</table>


			<!-- Kompetensi -->
			<table width="100%">
				<tbody>
					<tr class="judul">
						<td width="3%"></td>
						<td width="3%">A.</td>
						<td>KOMPETENSI LULUSAN</td>
						<td width="3%"></td>
						<td width="3%">A.</td>
						<td>GRADUATE COMPETENCIES</td>
					</tr>
					<?php foreach ($kompetensi as $key => $value): ?>
						<tr class="judul">
							<td></td>
							<td colspan="2"><?= $value['judul_kompetensi_indonesia'] ?></td>
							<td></td>
							<td colspan="2"><?= $value['judul_kompetensi_inggris'] ?></td>
						</tr>
						<?php foreach ($value['sub_kompetensi'] as $no => $isi): ?>
							<tr class="isi">
								<td></td>
								<td><?= $no+1 ?>.</td>
								<td><?= $isi['isi_kompetensi_indonesia'] ?></td>
								<td></td>
								<td><?= $no+1 ?>.</td>
								<td><?= $isi['isi_kompetensi_inggris'] ?></td>
							</tr>
						<?php endforeach ?>
					<?php endforeach ?>
				</tbody>
				<!-- Jarak Antar Table -->
				<tr style="visibility:hidden">
					<th colspan="6">asdasdds</th>
				</tr>
			</table>


			<!-- Info Tambahan -->
			<table width="100%">
				<tbody>
					<tr class="judul">
						<td width="3%"></td>
						<td width="3%">B.</td>
						<td>INFORMASI TAMBAHAN</td>
						<td width="3%"></td>
						<td width="3%">A.</td>
						<td>ADDITIONAL INFORMATION</td>
					</tr>
					<?php foreach ($info as $key => $value): ?>
						<tr class="isi">
							<td></td>
							<td><?= $key+1 ?>.</td>
							<td><?= $value['isi_informasi_indonesia'] ?></td>
							<td></td>
							<td><?= $key+1 ?>.</td>
							<td><?= $value['isi_informasi_inggris'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>

		</div>
	</div>
</div>

</body>
</html>