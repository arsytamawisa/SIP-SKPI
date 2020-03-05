<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <br>
                                <h3 style="font-size:20px">Edit Data &emsp;|&emsp; <?= $detail['nama_admin'] ?></h3>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Nama Admin
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="nama_admin" value="<?= $detail['nama_admin'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Username
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="username" value="<?= $detail['username'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Password
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="password" value="<?= $detail['password'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <a href="<?= base_url('admin/petugas_penerjemah') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right" style="margin-left:20px">Kembali</a>
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