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
                                    <div class="nk-int-st nk-toggled">
                                        <input id="input1" name="nim" type="text" class="form-control" autocomplete="off" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap Mahasiswa
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="nama_mahasiswa" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Program Studi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="id_program_studi" class="selectpicker" data-live-search="true">
                                                    <option value=""></option>
                                                    <?php foreach ($program_studi as $key => $value): ?>
                                                        <option value="<?= $value['id_program_studi'] ?>">
                                                            <?php 
                                                            if ($value['program_pendidikan_tinggi'] == "Diploma"){
                                                                echo "D3";
                                                            } elseif ($value['program_pendidikan_tinggi'] == "Sarjana") {
                                                                echo "S1";
                                                            } elseif ($value['program_pendidikan_tinggi'] == "Magister") {
                                                                echo "S2";
                                                            } else {
                                                                echo "S3";
                                                            } ?>
                                                            <?= $value['nama_prodi_indonesia'] ?>
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
                                    <label>Nomor Ijazah</label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="no_ijazah" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <div class="nk-int-st">
                                        <input name="tempat_lahir" placeholder="Kota / Kabupaten" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Tanggal Lahir
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input id="input2" name="tanggal_lahir" placeholder="MM-DD-YYYY" type="text" class="form-control">
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
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input name="tanggal_masuk" placeholder="MM-DD-YYYY" type="text" class="form-control">
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
                                            <input name="tanggal_lulus" placeholder="MM-DD-YYYY" type="text" class="form-control">
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
                                        <input id="input_1" disabled type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="nk-int-st">
                                        <input id="input_2" disabled name="password" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <button onclick="history.back()" class="btn btn-danger notika-btn-danger waves-effect pull-right" style="margin-left:20px">Batal</button>
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