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
                                <h3 style="font-size:20px">Tambah Data Mahasiswa</h3>
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
                        <?php $admin = $this->session->userdata('admin_prodi') ?>
                        <input type="hidden" name="id_program_studi" value="<?= $admin['id_program_studi'] ?>">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Nomor Induk Mahasiswa
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nim') ?></small>
                                    <div class="nk-int-st nk-toggled">
                                        <input id="input1" name="nim" value="<?= set_value('nim') ?>" type="text" class="form-control" autocomplete="off" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="nk-int-st">
                                        <input id="input_1" value="<?= set_value('nim') ?>" disabled type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <div class="form-group">
                                    <label>Nama Mahasiswa
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nama_mahasiswa') ?></small>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="nama_mahasiswa" value="<?= set_value('nama_mahasiswa') ?>" onkeypress="return (event.charCode == 32 || event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" type="text" class="form-control">
                                        </div>
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