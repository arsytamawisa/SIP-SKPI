<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-10 col-md-12 col-sm-2 col-xs-2">
							<div class="breadcomb-wp">
								<div class="breadcomb-ctn">
									<h2 style="margin-top:10px">Data Informasi Tambahan &emsp;|&emsp; <?= nama_mahasiswa($this->uri->segment('4')) ?></h2>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-12 col-sm-6 col-xs-6">
							<div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
								<a style="margin-top:10px" href="<?= base_url('admin/penerjemah') ?>" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
									<i class="fa fa-arrow-left" aria-hidden="true"></i>
								</a>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Flash Data Edit -->
	<?php if ( $this->session->flashdata('edit') ) : ?>
		<div id="flashData" class="row">
			<div class="col-lg-12 col-md-12">
				<div class="alert-inner mg-t-30">
					<div class="alert-list">
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
							</button> Data <b><?= $this->session->flashdata('edit') ?></b> berhasil diterjemahkan.
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

	<!-- Flash Data Hapus -->
	<?php if ( $this->session->flashdata('hapus') ) : ?>
		<div id="flashData" class="row">
			<div class="col-lg-12 col-md-12">
				<div class="alert-inner mg-t-30">
					<div class="alert-list">
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
							</button> Data <b><?= $this->session->flashdata('hapus') ?></b> berhasil dihapus.
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

	<!-- Flash Data Keterangan -->
	<?php if ( $this->session->flashdata('keterangan') ) : ?>
		<div id="flashData" class="row">
			<div class="col-lg-12 col-md-12">
				<div class="alert-inner mg-t-30">
					<div class="alert-list">
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
							</button> <b><?= $this->session->flashdata('keterangan') ?></b> berhasil diupdate.
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="data-table-list">
				<div class="table-responsive">
					<table id="data-table-basic" class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th width="35%">Informasi Tambahan</th>
								<th width="35%">Additional Information</th>
								<th class="text-center">Berkas</th>
								<th class="text-center">Status</th>
								<th class="text-center">Validasi</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							<?php foreach ($info_tambahan as $key => $value): ?>

								<?php if ($value['id_informasi'] == null) { ?>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								<?php } else { ?>
									
									<?php

									$tgl_mulai      = "";
									$date_start     = "";
									$tgl_selesai    = "";
									$date_end       = "";

									if($value['tgl_mulai'])
									{
										$tgl_mulai   = tanggal_indo($value['tgl_mulai']);
										$date_start  = tanggal_luar($value['tgl_mulai']);
									}

									if($value['tgl_selesai'])
									{
										$oldformat      = str_replace("/","-",$value['tgl_selesai']);
										$time           = strtotime($value['tgl_selesai']);
										$tgl_selesai    = date('Y-m-d',$time);
										$date_end       = tanggal_luar($tgl_selesai);

									}?>

									<tr>
										<td><?= $no++ ?></td>

										<!-- Informasi Tambahan -->
										<?php if ($value['status'] == "kompetisi") { ?>
											<td>
												<?= $value['peringkat'] ?>,
												<?= $value['judul_kegiatan'] ?>,
												<?= $value['tema'] ?>
												<?= $value['penyelenggara'] ?>,
												<?= $tgl_mulai ?>,
												<?= $value['kota'] ?>
											</td>
										<?php } elseif($value['status'] == "pemakalah") { ?>
											<td>
												Pemakalah,
												<?= $value['judul_tulisan'] ?>,
												<?= $value['judul_kegiatan'] ?>,
												<?= $value['penyelenggara'] ?>,
												<?= $tgl_mulai ?>,
												<?= $value['kota'] ?>
											</td>
										<?php } elseif($value['status'] == "pembicara") { ?>
											<td>
												Pembicara,
												<?= $value['judul_tulisan'] ?>,
												<?= $value['judul_kegiatan'] ?>,
												<?= $tgl_mulai ?>,
												<?= $value['kota'] ?>   
											</td>        
										<?php } elseif($value['status'] == "penulis") { ?>
											<td>
												Penulis,
												<?= $value['judul_tulisan'] ?>,
												<?= $value['nama_media'] ?>,
												<?= $value['edisi'] ?>,
												<?= $tgl_mulai ?>
											</td>
										<?php } elseif($value['status'] == "magang") { ?>
											<td>
												Magang,
												<?= $value['penyelenggara'] ?>
												<?php if ($value['interval'] > 1) { ?>
													<?= $tgl_mulai . " - " . $tgl_selesai ?>,
												<?php } else { ?>
													<?= $tgl_mulai ?>,
												<?php } ?>
												<?= $value['kota'] ?>
											</td>
										<?php } elseif($value['status'] == "kerja_praktek") { ?>
											<td>
												Kerja Praktek,
												<?= $value['penyelenggara'] ?>
												<?php if ($value['interval'] > 1) { ?>
													<?= $tgl_mulai . " - " . $tgl_selesai ?>,
												<?php } else { ?>
													<?= $tgl_mulai ?>,
												<?php } ?>
												<?= $value['kota'] ?>
											</td>
										<?php } elseif($value['status'] == "asisten_mata_kuliah") { ?>
											<td>
												Asisten Mata Kuliah,
												<?= $value['nama_matkul'] ?>, 
												Semester <?= $value['semester'] ?> 
												TA <?= $value['tahun_ajaran'] ?>,
												Universitas Teknologi Yogyakarta
											</td>
										<?php } elseif($value['status'] == "asisten_penelitian") { ?>
											<td>
												Asisten Penelitian,
												<?= $value['judul_tulisan'] ?>,
												<?= $value['penyelenggara'] ?>,
												<?php if ($value['interval'] > 1) { ?>
													<?= $tgl_mulai . " - " . $tgl_selesai ?>,]
												<?php } else { ?>
													<?= $tgl_mulai ?>
												<?php } ?>
											</td>
										<?php } elseif($value['status'] == "asisten_pengabdian") { ?>
											<td>
												Asisten Pengabdian kepada Masyarakat,
												<?= $value['judul_kegiatan'] ?>,
												<?php if ($value['interval'] > 1) { ?>
													<?= $tgl_mulai . " - " . $tgl_selesai ?>,
												<?php } else { ?>
													<?= $tgl_mulai ?>,
												<?php } ?>
												<?= $value['penyelenggara'] ?>
											</td>
										<?php } elseif($value['status'] == "kegiatan_eksternal" || $value['status'] == "kegiatan_internal") { ?>
											<td>
												<?= $value['jabatan'] ?>,
												<?= $value['judul_kegiatan'] ?>,
												<?= $value['penyelenggara'] ?>,
												<?php if ($value['interval'] > 1) { ?>
													<?= $tgl_mulai . " - " . tanggal_indo($value['tgl_selesai']) ?>,
												<?php } else { ?>
													<?= $tgl_mulai ?>,
												<?php } ?>
												<?= $value['kota'] ?>
											</td>
										<?php } elseif($value['status'] == "pengurus") { ?>
											<td>
												<?= $value['jabatan'] ?>,
												<?= $value['nama_ukm_hmj'] ?>,
												<?= $value['penyelenggara'] ?>,
												<?php if ($value['interval'] > 1){ ?>
													<?= $tgl_mulai . " - " . $tgl_selesai ?>
												<?php } else { ?>
													<?= $tgl_mulai ?>
												<?php } ?>
											</td>
										<?php } elseif($value['status'] == "toefl") { ?>
											<td>
												Memiliki Sertifikat <i>English Profiency Test</i> dengan skor
												<?= $value['skor_toefl'] ?>
												diterbitkan oleh Universitas Teknologi Yogyakarta,
												<?= $tgl_mulai ?>
											</td>
										<?php } elseif($value['status'] == "pelatihan") { ?>
											<td>
												Lulus,
												<?= $value['judul_kegiatan'] ?>,
												<?= $value['penyelenggara'] ?>,
												<?= $tgl_mulai ?>,
												<?= $value['kota'] ?>
											</td>
										<?php } ?>


										<!-- Additional Information -->
										<?php if ($value['status'] == "kompetisi") { ?>
											<td>
												<i>
													<?= $value['peringkat'] ?>,
													<?= $value['activity'] ?>,
													<?= $value['tema'] ?>
													<?= $value['institution'] ?>,
													<?= $date_start ?>,
													<?= $value['kota'] ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "pemakalah") { ?>
											<td>
												<i>
													Speaker,
													<?= $value['writing'] ?>,
													<?= $value['activity'] ?>,
													<?= $value['institution'] ?>,
													<?= $date_start ?>,
													<?= $value['kota'] ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "pembicara") { ?>
											<td>
												<i>
													Speaker,
													<?= $value['writing'] ?>,
													<?= $value['activity'] ?>,
													<?= $date_start ?>,
													<?= $value['kota'] ?>   
												</i>
											</td>        
										<?php } elseif($value['status'] == "penulis") { ?>
											<td>
												<i>
													Penulis,
													<?= $value['writing'] ?>,
													<?= $value['nama_media'] ?>,
													<?= $value['edisi'] ?>,
													<?= $date_start ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "magang") { ?>
											<td>
												<i>
													Internship,
													<?= $value['penyelenggara'] ?>,
													<?php if ($value['interval'] > 1) { ?>
														<?= $date_start . " - " . $date_end ?>,
													<?php } else { ?>
														<?= $date_start ?>,
													<?php } ?>
													<?= $value['kota'] ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "kerja_praktek") { ?>
											<td>
												<i>
													Practical Work,
													<?= $value['penyelenggara'] ?>,
													<?php if ($value['interval'] > 1) { ?>
														<?= $date_start . " - " . $date_end ?>,
													<?php } else { ?>
														<?= $date_start ?>,
													<?php } ?>
													<?= $value['kota'] ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "asisten_mata_kuliah") { ?>
											<td>
												<i>
													Course Assistant,
													<?= $value['course'] ?>,
													<?php if ($value['semester'] == "Genap"){ ?>
														Even
													<?php } else { ?>
														Odd
													<?php } ?>
													Semester of the
													<?= $value['tahun_ajaran'] ?>,
													School Year
													University of Technology Yogyakarta
												</i>
											</td>
										<?php } elseif($value['status'] == "asisten_penelitian") { ?>
											<td>
												<i>
													Research Assistant,
													<?= $value['writing'] ?>,
													<?= $value['institution'] ?>,
													<?= $date_start . " - " . $date_end ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "asisten_pengabdian") { ?>
											<td>
												<i>
													Community Service Assistant,
													<?= $value['activity'] ?>,
													<?= $date_start . " - " . $date_end ?>,
													<?php if ($value['interval'] > 1) { ?>
													<?php } else { ?>
														<?= $date_start ?>,
													<?php } ?>
													<?= $value['institution'] ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "kegiatan_eksternal" || $value['status'] == "kegiatan_internal") { ?>
											<td>
												<i>
													<?php if ($value['jabatan']== "Peserta") { ?>
														Peserta,
													<?php } else { ?>
														Committee,
													<?php } ?>
													<?= $value['activity'] ?>,
													<?= $value['institution'] ?>,
													<?php if ($value['interval'] > 1) { ?>
														<?= $date_start . " - " . $date_end ?>,
													<?php } else { ?>
														<?= $date_start ?>,
													<?php } ?>
													<?= $value['kota'] ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "pengurus") { ?>
											<td>
												<i>
													<?= $value['position'] ?>,
													<?= $value['name_ukm_hmj'] ?>,
													<?= $value['institution'] ?>,
													<?= $date_start . " - " . $date_end ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "toefl") { ?>
											<td>
												<i>
													Having an English Proficiency Test Certificate with a score of 
													<?= $value['skor_toefl'] ?>
													issued by the Education, Certification, and Training Center University of Technology Yogyakarta,
													<?= $date_start ?>
												</i>
											</td>
										<?php } elseif($value['status'] == "pelatihan") { ?>
											<td>
												<i>
													Graduated,
													<?= $value['activity'] ?>,
													<?= $value['institution'] ?>,
													<?= $date_start ?>,
													<?= $value['kota'] ?>
												</i>
											</td>
										<?php } ?>


										<!-- Berkas -->
										<?php if ($value['berkas']) { ?>
											<td class="text-center">
												<a target="_blank" href="<?= base_url("admin/penerjemah/berkas/$value[id_informasi]") ?>" data-toggle="tooltip" data-placement="bottom" title="Tampil Berkas" class="btn btn-success success-icon-notika waves-effect">
													<i class="fa fa-file-pdf-o"></i>
												</a>
											</td>
										<?php } else { ?>
											<td></td>
										<?php } ?>


										<!-- Status -->
										<td align="center">
											<?php if ($value['validasi'] == "Validasi Ditolak") { ?>
												<button class="btn btn-danger notika-btn-danger" data-target="#<?= $key.$key ?>" data-toggle="modal">
													<i class="fa fa-ban" aria-hidden="true"></i> <b>Ditolak</b>
												</button>
											<?php } elseif ($value['validasi'] == "Belum Divalidasi") { ?>
												<button class="btn btn-warning notika-btn-warning">
													<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
												</button>
											<?php } elseif ($value['status'] == "kompetisi") { ?>
												<?php if ($value['activity'] !== null AND $value['activity'] !== "" AND $value['institution'] !== null AND $value['institution'] !== "") { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "pemakalah") { ?>
												<?php if ($value['activity'] !== null AND $value['activity'] !== "" AND $value['writing'] !== null AND $value['writing'] !== "" AND $value['institution'] !== null AND $value['institution'] !== "") { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "pembicara") { ?>
												<?php if ($value['activity'] !== null AND $value['activity'] !== "" AND $value['writing'] !== null AND $value['writing']) { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "penulis") { ?>
												<?php if ($value['writing'] !== null AND $value['writing']) { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "magang" OR $value['status'] == "kerja_praktek") { ?>
												<?php if ($value['penyelenggara'] !== null AND $value['penyelenggara']) { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "toefl") { ?>
												<?php if ($value['skor_toefl'] !== null AND $value['skor_toefl']) { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "asisten_mata_kuliah") { ?>
												<?php if ($value['course'] !== null AND $value['course']) { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "asisten_penelitian") { ?>
												<?php if ($value['writing'] !== null AND $value['writing'] !== "" AND $value['institution'] !== null AND $value['institution'] !== "") { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "asisten_pengabdian" OR $value['status'] == "kegiatan_internal" OR $value['status'] == "kegiatan_eksternal" OR $value['status'] == "pelatihan") { ?>
												<?php if ($value['institution'] !== null AND $value['institution'] AND $value['activity'] !== null AND $value['activity'] !== "") { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } elseif($value['status'] == "pengurus") { ?>
												<?php if ($value['position'] !== null AND $value['position'] !== "" AND $value['institution'] !== null AND $value['institution'] !== "" AND $value['name_ukm_hmj'] !== null AND $value['name_ukm_hmj'] !== "") { ?>
													<button class="btn btn-success notika-btn-success">
														<i class="fa fa-check" aria-hidden="true"></i> <b>Sudah</b>
													</button>
												<?php } else { ?>
													<button class="btn btn-warning notika-btn-warning">
														<i class="fa fa-close" aria-hidden="true"></i> <b>Belum</b>
													</button>
												<?php } ?>
											<?php } ?>
										</td>


										<!-- Validasi -->
										<td width="16%">
											<form method="POST">
												<input type="hidden" name="id_informasi" value="<?= $value['id_informasi'] ?>">
												<select name="validasi" onchange="submit()" class="form-control">
													<option value="Belum Divalidasi" <?php if($value['validasi'] == "Belum Divalidasi") {echo"selected";} ?>>
														Belum Divalidasi
													</option>
													<option value="Sudah Divalidasi" <?php if($value['validasi'] == "Sudah Divalidasi") {echo"selected";} ?>>
														Sudah Divalidasi
													</option>
													<option value="Validasi Ditolak" <?php if($value['validasi'] == "Validasi Ditolak") {echo"selected";} ?>>
														Validasi Ditolak
													</option>
												</select>
											</form>
										</td>


										<!-- Opsi -->
										<?php if ($value['validasi'] == "Sudah Divalidasi") { ?>
											<td>
												<?php if ($value['status'] !== "toefl" AND $value['status'] !== "magang" AND $value['status'] !== "kerja_praktek"){ ?>
													<a href="<?= base_url("admin/penerjemah/edit/$value[id_informasi]") ?>" data-toggle="tooltip" data-placement="bottom" title="Edit Data" style="margin-right:20px" class="btn btn-success success-icon-notika pull-right">
														<i  class="fa fa-edit" aria-hidden="true"></i>
													</a>
												<?php } ?>
											</td>
										<?php } else { ?>
											<td></td>
										<?php } ?>

									</tr>
								<?php } ?>
							<?php endforeach ?>

						</tbody>
						<tfoot>
							<tr></tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>


<!-- Modal Keterangan -->
<?php foreach ($info_tambahan as $key => $value): ?>
	<form method="post">
		<div class="modal fade" id="<?= $key.$key?>" role="dialog">
			<div class="modal-dialog modal-default">
				<div class="modal-content">
					<div class="modal-header">
						<div class="row">
							<div class="col-lg-10">
								<h2 style="font-size:18px;padding-left:40px">Validasi Ditolak</h2>
							</div>
							<div class="col-lg-2">
								<button type="button" style="margin-right:5px;" class="close" data-dismiss="modal">&times;</button>
							</div>
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
							<div class="form-group">
								<label>Keterangan
									<span style="color:#d9534f">*</span>
								</label>
								<div class="nk-int-st">
									<textarea name="keterangan" rows="3" class="form-control"><?= $value['keterangan'] ?></textarea>
									<input type="hidden" name="id_informasi" value="<?= $value['id_informasi'] ?>">
								</div>
							</div>
							<br><br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
							<button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
							<button type="submit" name="edit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Submit</button>
						</div>
					</div>
					<br><br>
				</div>
			</div>
		</div>
	</form>
	<?php endforeach ?>