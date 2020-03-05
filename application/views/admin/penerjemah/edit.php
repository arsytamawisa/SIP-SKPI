<?php

$tgl_mulai      = "";
$tgl_selesai    = "";

if($info['tgl_mulai'])
{
    $tgl_mulai   = tanggal_indo($info['tgl_mulai']);
}

if($info['tgl_selesai'])
{
    $oldformat      = str_replace("/","-",$info['tgl_selesai']);
    $time           = strtotime($info['tgl_selesai']);
    $tgl_selesai    = date('Y-m-d',$time);    
}?>

<style>hr{border-top:1px dashed}</style>
<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-9 col-lg-offset-1">
                            <div class="form-group">
                                <br><br><br>
                                <h3 style="font-size:20px">Additional Information &emsp;|&emsp; Translate Data</h3>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                    <br><br><br>
                                    <a style="margin-left:30px" href="javascript:history.back()" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-success success-icon-notika">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            <input type="hidden" name="status" value="kompetisi">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kompetisi</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Kompetisi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['activity'] ?>" name="activity" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara</label>
                                        <div class="nk-int-st">
                                            <input disabled value="<?= $info['penyelenggara'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Translate Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Tema (jika ada)</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['tema'] ?>" disabled name="tema" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Translate Tema</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['tema'] ?>" <?php if($info['tema'] == ""){echo "disabled";} ?> name="tema" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pemakalah -->
                    <div id="pemakalah">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="pemakalah">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Tulisan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Judul Tulisan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['writing'] ?>" name="writing" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Kegiatan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Judul Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['activity'] ?>" name="activity" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Translate Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pembicara -->
                    <div id="pembicara">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="pembicara">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Tulisan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Judul Tulisan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['writing'] ?>" name="writing" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Kegiatan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Judul Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['activity'] ?>" name="activity" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Penulis -->
                    <div id="penulis">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="penulis">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Tulisan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Judul Tulisan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['writing'] ?>" name="writing" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Magang -->
                    <div id="magang">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="magang">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Informasi Tambahan</label>
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
                                        <div class="nk-int-st">
                                            <input value="<?= $info['kota'] ?>" name="kota" type="text" class="form-control" placeholder="Contoh: Yogyakarta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Kerja Praktek -->
                    <div id="kerja_praktek">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="kerja_praktek">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Informasi Tambahan</label>
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
                                        <div class="nk-int-st">
                                            <input value="<?= $info['kota'] ?>" name="kota" type="text" class="form-control" placeholder="Contoh: Yogyakarta">
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
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Asisten Mata Kuliah -->
                    <div id="asisten_mata_kuliah">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="asisten_mata_kuliah">

                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama Mata Kuliah</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['nama_matkul'] ?>" disabled name="course" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Mata Kuliah
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['course'] ?>" name="course" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Asisten Pengabdian -->
                    <div id="asisten_pengabdian">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="asisten_pengabdian">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['activity'] ?>" name="activity" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Instansi</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Instansi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Asisten Penelitian -->
                    <div id="asisten_penelitian">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="asisten_penelitian">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Judul Penelitian</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_tulisan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Judul Penelitian
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['writing'] ?>" name="writing" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama Instansi</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Instansi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Kegiatan Eksternal -->
                    <div id="kegiatan_eksternal">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="kegiatan_eksternal">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['activity'] ?>" name="activity" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Kegiatan Internal -->
                    <div id="kegiatan_internal">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="kegiatan_internal">
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Kegiatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['activity'] ?>" name="activity" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pengurus UKM/HMJ -->
                    <div id="pengurus">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="pengurus">

                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['jabatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Translate Jabatan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['position'] ?>" name="position" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama UKM / HMJ</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['nama_ukm_hmj'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Translate Nama UKM / HMJ
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['name_ukm_hmj'] ?>" name="name_ukm_hmj" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-5 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Nama Instansi</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Translate Nama Instansi
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['institution'] ?>" name="institution" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- TOEFL -->
                    <div id="toefl">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="toefl">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Informasi Tambahan</label>
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
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>


                    <!-- Pelatihan -->
                    <div id="pelatihan">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="status" value="pelatihan">

                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Nama Pelatihan</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['judul_kegiatan'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Nama Pelatihan
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input name="activity" value="<?= $info['activity'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Penyelenggara</label>
                                        <div class="nk-int-st">
                                            <input value="<?= $info['penyelenggara'] ?>" disabled type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Translate Penyelenggara
                                            <span style="color:#d9534f">*</span>
                                        </label>
                                        <div class="nk-int-st">
                                            <input name="institution" value="<?= $info['institution'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Terjemahkan</button>
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