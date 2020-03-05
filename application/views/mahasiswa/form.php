<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd col-md-offset-1">
                        <br><br>
                        <h2>Formulir Data Mahasiswa</h2>
                        <br><br>
                    </div>
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-md-offset-1">
                                <div class="form-group nk-datapk-ctm form-elet-mg">
                                    <label>NIM</label>
                                    <div class="nk-int-st">
                                        <input name="nim" type="text" class="form-control" disabled value="<?= $mahasiswa['nim'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg">
                                    <label>Nama Mahasiswa</label>
                                    <div class="nk-int-st">
                                        <input name="nama_mahasiswa" type="text" class="form-control" disabled value="<?= $mahasiswa['nama_mahasiswa'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-md-offset-1">
                                <div class="form-group nk-datapk-ctm form-elet-mg">
                                    <label>Tempat Lahir</label>
                                    <div class="nk-int-st">
                                        <input name="tempat_lahir" value="<?= $mahasiswa['tempat_lahir'] ?>" type="text" class="form-control" placeholder="Nama Kota / Kabupaten">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input name="tanggal_lahir" value="<?= $mahasiswa['tanggal_lahir'] ?>" placeholder="Bulan - Tanggal - Tahun" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-example-int mg-t-30 col-md-offset-1">
                            <button class="btn btn-success notika-btn-success">Simpan</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
