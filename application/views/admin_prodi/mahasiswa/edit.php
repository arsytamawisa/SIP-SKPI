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
                                <h3 style="font-size:20px">Edit Data Mahasiswa</h3>
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
                                    <label>Nomor Induk Mahasiswa
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nim') ?></small>
                                    <div class="nk-int-st">
                                        <input id="input1" name="nim" value="<?= $detail['nim'] ?>" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap Mahasiswa
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nama_mahasiswa') ?></small>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="nama_mahasiswa" value="<?= $detail['nama_mahasiswa'] ?>" onkeypress="return (event.charCode == 32 || event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Nomor SKPI</label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="no_skpi" value="<?= $detail['no_skpi'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Nomor Ijazah</label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="no_ijazah" value="<?= $detail['no_ijazah'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <small class="form-text text-danger"><?= form_error('tanggal_masuk') ?></small>
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input autocomplete="off" name="tanggal_masuk" value="<?= $detail['tanggal_masuk'] ?>" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Tanggal Lulus</label>
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input autocomplete="off" name="tanggal_lulus" value="<?= $detail['tanggal_lulus'] ?>" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="nk-int-st">
                                        <input id="input_1" value="<?= $detail['nim'] ?>" disabled type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="nk-int-st">
                                        <input id="input_2" readonly value="<?= $detail['password'] ?>" name="password" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <a href="<?= base_url('admin_prodi/mahasiswa') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right" style="margin-left:20px">Batal</a>
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