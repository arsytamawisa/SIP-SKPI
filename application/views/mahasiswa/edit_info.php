<?php $session = $this->session->userdata('mahasiswa') ?>
<?php
$info['tgl_mulai']  = str_replace("-","/",$info['tgl_mulai']);
$info['tgl_mulai']  = strtotime($info['tgl_mulai']);
$info['tgl_mulai']  = date('m/d/Y',$info['tgl_mulai']);
?>

<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                            <div class="form-group">
                                <br><br><br>
                                <h3 style="font-size:20px">Informasi Tambahan &emsp;|&emsp; Edit Data</h3>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="button-icon-btn button-icon-btn-cl">
                                <br><br><br>
                                <a href="<?= base_url('mahasiswa/info_tambahan') ?>" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger danger-icon-notika pull-right">
                                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                </a>
                                <!--                                 
                                    <a data-toggle="tooltip" style="margin-right:20px" data-placement="bottom" title="Pertanyaan" class="btn btn-success success-icon-notika pull-right">
                                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                                    </a> 
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SweetAlert -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('gagal') ?>"></div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">

                    <!-- Status -->
                    <div class="row" id="kategori">
                        <div class="col-lg-5 col-md-offset-1">
                            <div class="form-group">
                                <label>Kategori
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="nk-int-st">
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select id="status" name="status" class="selectpicker" data-live-search="true">
                                            <option value="">Pilih Kategori</option>
                                            <option value="kompetisi" <?php if($info['status'] == "kompetisi") {echo"selected";} ?>></option>
                                            <option value="pemakalah" <?php if($info['status'] == "pemakalah") {echo"selected";} ?>></option>
                                            <option value="pembicara" <?php if($info['status'] == "pembicara") {echo"selected";} ?>></option>
                                            <option value="penulis" <?php if($info['status'] == "penulis") {echo"selected";} ?>></option>
                                            <option value="magang" <?php if($info['status'] == "magang") {echo"selected";} ?>></option>
                                            <option value="kerja_praktek" <?php if($info['status'] == "kerja_praktek") {echo"selected";} ?>></option>
                                            <option value="asisten_mata_kuliah" <?php if($info['status'] == "asisten_mata_kuliah") {echo"selected";} ?>></option>
                                            <option value="asisten_penelitian" <?php if($info['status'] == "asisten_penelitian") {echo"selected";} ?>></option>
                                            <option value="asisten_pengabdian" <?php if($info['status'] == "asisten_pengabdian") {echo"selected";} ?>></option>
                                            <option value="kegiatan_internal" <?php if($info['status'] == "kegiatan_internal") {echo"selected";} ?>></option>
                                            <option value="kegiatan_eksternal" <?php if($info['status'] == "kegiatan_eksternal") {echo"selected";} ?>></option>
                                            <option value="pengurus" <?php if($info['status'] == "pengurus") {echo"selected";} ?>></option>
                                            <option value="toefl" <?php if($info['status'] == "toefl") {echo"selected";} ?>></option>
                                            <option value="pelatihan" <?php if($info['status'] == "pelatihan") {echo"selected";} ?>></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>


                    <!-- Kompetisi -->
                    <div id="kompetisi">
                        <form method="post" enctype="multipart/form-data">

                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="kompetisi">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Juara I, Lomba Tangkas Terampil Perkoperasian Tahun 2016 Tingkat Perguruan Tinggi se-Yogyakarta, Dinas Perdagangan, Koperasi dan Pertanian Kota Yogyakarta, 26 Juli 2016, Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kompetisi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_kegiatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" name="judul_kegiatan" type="text" class="form-control" placeholder="Contoh: Lomba Tangkas Terampil Perkoperasian Tahun 2016 Tingkat Perguruan Tinggi se-Yogyakarta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Dinas Perdagangan, Koperasi dan Pertanian Kota Yogyakarta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label style="margin-bottom:15px">Peringkat
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('peringkat') ?></small>
                                        <div class="nk-int-st">
                                            <label class="radio-inline">
                                                <input type="radio" value="Juara I" name="peringkat"
                                                <?php if($info['peringkat'] == "Juara I") {echo "checked";} ?>>
                                                Juara I (satu) &emsp;
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Juara II" name="peringkat"
                                                <?php if($info['peringkat'] == "Juara II") {echo "checked";} ?>>
                                                Juara II (dua) &emsp;
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Juara III" name="peringkat"
                                                <?php if($info['peringkat'] == "Juara III") {echo "checked";} ?>>
                                                Juara III (tiga)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Tema (jika ada)</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['tema'] ?>" name="tema" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-md-12 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pemakalah -->
                    <div id="pemakalah">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="pemakalah">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Pemakalah, Faktor-faktor yang Mempengaruhi Kepatuhan Wajib Pajak, Seminar Nasional Akuntansi IX, Universitas Teknologi Yogyakarta, 2 Januari 2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Tulisan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_tulisan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" name="judul_tulisan" type="text" class="form-control" placeholder="Contoh: Faktor-faktor yang Mempengaruhi Kepatuhan Wajib Pajak">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_kegiatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" name="judul_kegiatan" type="text" class="form-control" placeholder="Contoh: Seminar Nasional Akuntansi IX">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Universitas Teknologi Yogyakarta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5  col-md-offset-1">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" name="tgl_mulai" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pembicara -->
                    <div id="pembicara">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="pembicara">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Pembicara, Analisis Fundamental, Pelatihan Pasar Modal untuk Siswa SMA Swadaya Temanggung, 2 Januari 2017, Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Tulisan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_tulisan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" name="judul_tulisan" type="text" class="form-control" placeholder="Contoh: Analisis Fundamental">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_kegiatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" name="judul_kegiatan" type="text" class="form-control" placeholder="Contoh: Pelatihan Pasar Modal untuk Siswa SMA Swadaya Temanggung">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" name="tgl_mulai" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Penulis -->
                    <div id="penulis">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="penulis">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Penulis, Dampak Diberlakukannya Tax Amnesty bagi Wajib Pajak, Kedaulatan Rakyat, Edisi XVI, Kamis, 5 Oktober 2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Tulisan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_tulisan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" name="judul_tulisan" type="text" class="form-control" placeholder="Contoh: Dampak Diberlakukannya Tax Amnesty bagi Wajib Pajak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Nama Media
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('nama_media') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['nama_media'] ?>" name="nama_media" type="text" class="form-control" placeholder="Kedaulatan Rakyat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Edisi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('edisi') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['edisi'] ?>" name="edisi" type="text" class="form-control" placeholder="Edisi XVI">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Magang -->
                    <div id="magang">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="magang">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Magang, PT Syncore, 1 Maret 2020 – 30 Mei 2020, Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Instansi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Contoh: PT Syncore">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Nama Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5  col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Waktu Mulai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="form-group">
                                        <label>Waktu Selesai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_selesai'] ?>" autocomplete="off" name="tgl_selesai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Kerja Praktek -->
                    <div id="kerja_praktek">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="kerja_praktek">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Kerja Praktek, PT Syncore, 1 Maret 2020 – 31 Juli 2020, Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Instansi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Contoh: PT Syncore">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Nama Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5  col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Waktu Mulai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="form-group">
                                        <label>Waktu Selesai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_selesai'] ?>" autocomplete="off" name="tgl_selesai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Asisten Mata Kuliah -->
                    <div id="asisten_mata_kuliah">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="asisten_mata_kuliah">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Asisten Mata Kuliah, Praktikum Perpajakan, Semester Genap TA 2019/2020, Universitas Teknologi Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama Mata Kuliah
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['nama_matkul'] ?>" name="nama_matkul" type="text" class="form-control" placeholder="Contoh: Praktikum Perpajakan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label style="margin-bottom:10px">Semester
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <label class="radio-inline">
                                                <input type="radio" value="Genap" name="semester"
                                                <?php if($info['semester'] == "Genap") {echo "checked";} ?>>Genap &emsp;
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Ganjil" name="semester"
                                                <?php if($info['semester'] == "Ganjil") {echo "checked";} ?>>Ganjil
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="form-group">
                                        <label>Tahun Ajaran
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['tahun_ajaran'] ?>" name="tahun_ajaran" autocomplete="off" name="tgl_mulai" placeholder="2019/2020" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Asisten Pengabdian -->
                    <div id="asisten_pengabdian">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="asisten_pengabdian">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Asisten Pengabdian kepada Masyarakat, Pelatihan Keterampilan Seni Daur Ulang Kertas sebagai Media untuk Menciptakan Peluang Usaha, 2 Januari 2020 – 30 Maret 2020, Universitas Teknologi Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_kegiatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" name="judul_kegiatan" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-4 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama Tempat
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Waktu Mulai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label>Waktu Selesai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_selesai'] ?>" autocomplete="off" name="tgl_selesai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Asisten Penelitian -->
                    <div id="asisten_penelitian">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="asisten_penelitian">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Asisten Penelitian, Dampak Pergantian CEO terhadap Abnormal Return Perusahaan Manufaktur di Indonesia,  Universtas Teknologi Yogyakarta, 2 Januari 2020 – 30 Maret 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Penelitian
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" name="judul_tulisan" type="text" class="form-control" placeholder="Contoh:  Dampak Pergantian CEO terhadap Abnormal Return Perusahaan Manufaktur di Indonesia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-4 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama Instansi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Contoh:  Universtas Teknologi Yogyakarta">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Waktu Mulai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                        <label>Waktu Selesai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_selesai'] ?>" autocomplete="off" name="tgl_selesai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Kegiatan Eksternal -->
                    <div id="kegiatan_eksternal">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="kegiatan_eksternal">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Peserta, MX Campus Seminar: Past, Present, Future of Indonesai E-Commerce, Universitas Gadjah Mada, 24 Agustus 2016, Yogyakarta </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_kegiatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" name="judul_kegiatan" type="text" class="form-control" placeholder="Contoh: MX Campus Seminar: Past, Present, Future of Indonesai E-Commerce">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Contoh: Universitas Gadjah Mada">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label style="margin-bottom:10px">Status
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <label class="radio-inline">
                                                <input type="radio" value="Peserta" name="jabatan"
                                                <?php if($info['jabatan'] == "Peserta") {echo "checked";} ?>>Peserta &emsp;
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Panitia" name="jabatan"
                                                <?php if($info['jabatan'] == "Panitia") {echo "checked";} ?>>Panitia
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Jangka Waktu (hari)</label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="nk-int-st">
                                                <input value="<?= $info['interval'] ?>" name="interval" min="1" value="1" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Kegiatan Internal -->
                    <div id="kegiatan_internal">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="kegiatan_internal">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Panitia, Pendidikan Dasar Perkoperasian, KOPMA UTY, 9  April 2016, Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('judul_kegiatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" name="judul_kegiatan" type="text" class="form-control" placeholder="Contoh: Pendidikan Dasar Perkoperasian">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" name="penyelenggara" type="text" class="form-control" placeholder="Contoh: KOPMA UTY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label style="margin-bottom:10px">Status
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <label class="radio-inline">
                                                <input type="radio" value="Peserta" name="jabatan"
                                                <?php if($info['jabatan'] == "Peserta") {echo "checked";} ?>>Peserta &emsp;
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="Panitia" name="jabatan"
                                                <?php if($info['jabatan'] == "Panitia") {echo "checked";} ?>>Panitia
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Jangka Waktu (hari)</label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="nk-int-st">
                                                <input value="<?= $info['interval'] ?>" name="interval" min="1" value="1" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pengurus UKM/HMJ -->
                    <div id="pengurus">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="pengurus">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Ketua, Himpunan Mahasiswa Akuntansi, Universitas Teknologi Yogyakarta, 15 September 2019 – 1 September 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Jabatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('jabatan') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['jabatan'] ?>" name="jabatan" type="text" class="form-control" placeholder="Contoh: Ketua">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Nama UKM / HMJ
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('nama_ukm_hmj') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['nama_ukm_hmj'] ?>" name="nama_ukm_hmj" type="text" class="form-control" placeholder="Contoh: Himpunan Mahasiswa Akuntansi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Tanggal Mulai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Tanggal Selesai
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_selesai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_selesai'] ?>" autocomplete="off" name="tgl_selesai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- TOEFL -->
                    <div id="toefl">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="toefl">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Memiliki Sertifikat English Proficiency Test dengan skor 460 diterbitkan oleh Pusat Pelatihan Bahasa Universitas Teknologi Yogyakarta, 10 Agustus 2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Skor TOEFL
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['skor_toefl'] ?>" name="skor_toefl" type="text" class="form-control" placeholder="Contoh: 460">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Tanggal Sertifikat
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pelatihan -->
                    <div id="pelatihan">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nim" value="<?= $session['nim'] ?>">
                            <input type="hidden" name="status" value="pelatihan">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Contoh Data</label>
                                        <div class="nk-int-st">
                                            <p>Lulus, Pelatihan Pajak Terapan Brevet A dan B Angkatan XIII, Sekolah Vokasi UGM kerjasama PT Mitranata Cipta Mulia, 10 Oktober 2016, Yogyakarta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Pelatihan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" type="text" name="judul_kegiatan" class="form-control" placeholder="Contoh: Pelatihan Pajak Terapan Brevet A dan B Angkatan XIII">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('penyelenggara') ?></small>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" type="text" name="penyelenggara" class="form-control" placeholder="Sekolah Vokasi UGM kerjasama PT Mitranata Cipta Mulia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Waktu
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('tgl_mulai') ?></small>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input value="<?= $info['tgl_mulai'] ?>" autocomplete="off" name="tgl_mulai" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Kota
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('kota') ?></small>
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="kota" class="selectpicker" data-live-search="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                    <?php foreach ($api_kota as $key => $value): ?>
                                                        <option value="<?= $value['city_name'] ?>" <?php if($value['city_name'] == $info['kota']) {echo "selected";} ?>>
                                                            <?= $value['city_name'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Berkas
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <small class="form-text text-danger"><?= form_error('berkas') ?></small>
                                        <p><i><?= $info['berkas'] ?></i></p>
                                        <p id="copyHere">File yang diupload harus menggunakan format PDF (maks 1MB)</p>
                                        <div class="nk-int-st">
                                            <input id="file" type="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <a href="<?= base_url('mahasiswa/info_tambahan') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right">Kembali</a>
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px">Update</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <br>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>


<!-- Sweet Alert -->
<script src="<?= base_url() ?>assets/template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/template/form/') ?>js/sweetalert2.all.min.js"></script>

<script>
    const flashData = $('.flash-data').data('flashdata');
    if(flashData)
    {
        Swal.fire({
            icon: 'error',
            title: 'Gagal Input Data',
            text: 'Cek kembali data yang anda inputkan',
            confirmButtonColor: '#d9534f',
            confirmButtonText: 'Tutup'
        });
    }
</script>


<!-- Input File Validation -->
<script>
  function validationInputFile()
  {
    var htmlFile  = document.getElementById("file");
    var copyHere  = document.getElementById("copyHere");
    var file      = document.getElementById("file").value;
    var extension = file.split('.').pop();
    var content   = `<input type="file" id="file" name="berkas" onchange="validationInputFile()" accept="application/pdf" class="form-control">`;

    if (extension !== "pdf") 
    {
      copyHere.insertAdjacentHTML("afterend",content); 
      htmlFile.remove();
  }
}
</script>