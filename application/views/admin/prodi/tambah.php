<style>.form-text{font-size:12px}</style>

<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <br>
                                <h3 style="font-size:20px">Tambah Data Program Studi</h3>
                                <br>
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
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Nama Program Studi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nama_prodi_indonesia') ?></small>
                                    <div class="nk-int-st nk-toggled">
                                        <input id="input1" value="<?= set_value('nama_prodi_indonesia') ?>" name="nama_prodi_indonesia" type="text" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Departement
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nama_prodi_inggris') ?></small>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input value="<?= set_value('nama_prodi_inggris') ?>" name="nama_prodi_inggris" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Gelar
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('gelar_indonesia') ?></small>
                                    <div class="nk-int-st">
                                        <input value="<?= set_value('gelar_indonesia') ?>" name="gelar_indonesia" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Title
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('gelar_inggris') ?></small>
                                    <div class="nk-int-st">
                                        <input value="<?= set_value('gelar_inggris') ?>" name="gelar_inggris" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Fakultas
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('id_fakultas') ?></small>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="id_fakultas" class="selectpicker" data-live-search="true">
                                                    <option value=""></option>
                                                    <?php foreach ($fakultas as $key => $value): ?>
                                                        <option value="<?= $value['id_fakultas'] ?>" <?php if(set_value('id_fakultas') == $value['id_fakultas']){echo "selected";} ?>>
                                                            <?= $value['nama_fakultas'] ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Jenis Jenjang Pendidikan
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="jenis_jenjang_pendidikan" class="selectpicker" data-live-search="true">
                                                    <option value="Akademik" <?php if(set_value('jenis_jenjang_pendidikan') == "Akademik"){echo "selected";} ?>>Akademik</option>
                                                    <option value="Profesi" <?php if(set_value('jenis_jenjang_pendidikan') == "Profesi"){echo "selected";} ?>>Profesi</option>
                                                    <option value="Vokasi" <?php if(set_value('jenis_jenjang_pendidikan') == "Vokasi"){echo "selected";} ?>>Vokasi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Program Pendidikan Tinggi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('program_pendidikan_tinggi') ?></small>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select id="jenjang" name="program_pendidikan_tinggi" class="selectpicker" data-live-search="true">
                                                    <option value=""></option>
                                                    <option value="Diploma" <?php if(set_value('program_pendidikan_tinggi') == "Diploma"){echo "selected";} ?>>
                                                        (D3) Diploma
                                                    </option>
                                                    <option value="Sarjana" <?php if(set_value('program_pendidikan_tinggi') == "Sarjana"){echo "selected";} ?>>
                                                        (S1) Sarjana
                                                    </option>
                                                    <option value="Magister" <?php if(set_value('program_pendidikan_tinggi') == "Magister"){echo "selected";} ?>>
                                                        (S2) Magister
                                                    </option>
                                                    <option value="Doktor" <?php if(set_value('program_pendidikan_tinggi') == "Doktor"){echo "selected";} ?>>
                                                        (S3) Doktor
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="jenjang_kualifikasi" value="<?= set_value('jenjang_kualifikasi') ?>" id="kualifikasi">
                                    <input type="hidden" name="pendidikan_lanjutan" value="<?= set_value('pendidikan_lanjutan') ?>" id="lanjutan">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>No SK Akreditasi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('no_sk_akreditasi_prodi') ?></small>
                                    <div class="nk-int-st">
                                        <input value="<?= set_value('no_sk_akreditasi_prodi') ?>" id="input1" name="no_sk_akreditasi_prodi" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Status Akreditasi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('status_akreditasi_prodi') ?></small>
                                    <p></p>
                                    <div class="nk-int-st">
                                        <label class="radio-inline">
                                            <input type="radio" value="A" name="status_akreditasi_prodi" <?php if(set_value('status_akreditasi_prodi') == "A"){echo "checked";} ?>>A 
                                        </label>
                                        &emsp;
                                        <label class="radio-inline">
                                            <input type="radio" value="B" name="status_akreditasi_prodi" <?php if(set_value('status_akreditasi_prodi') == "B"){echo "checked";} ?>>B 
                                        </label>
                                        &emsp;
                                        <label class="radio-inline">
                                            <input type="radio" value="C" name="status_akreditasi_prodi" <?php if(set_value('status_akreditasi_prodi') == "C"){echo "checked";} ?>>C
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Kode Program Studi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('kode_program_studi') ?></small>
                                    <div class="nk-int-st">
                                        <input value="<?= set_value('kode_program_studi') ?>" name="kode_program_studi" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <a href="<?= base_url('admin/prodi') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right" style="margin-left:20px">Kembali</a>
                                <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Simpan</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
<br><br>