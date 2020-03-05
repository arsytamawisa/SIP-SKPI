<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <br>
                                <h3 style="font-size:20px">Edit Data &emsp;|&emsp; <?= $detail['nama_admin_prodi'] ?></h3>
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
                                    <label>Nama Admin
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="nama_admin_prodi" value="<?= $detail['nama_admin_prodi'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Program Studi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select name="id_program_studi" class="selectpicker" data-live-search="true">
                                                    <option value=""></option>
                                                    <?php foreach ($prodi as $key => $value): ?>
                                                        <option value="<?= $value['id_program_studi'] ?>" 
                                                            <?php if($value['id_program_studi'] == $detail['id_program_studi']) {echo "selected";} ?> >
                                                            <?php 
                                                            if($value['program_pendidikan_tinggi'] == "Diploma")
                                                            {
                                                                echo "D3";
                                                            }
                                                            elseif ($value['program_pendidikan_tinggi'] == "Sarjana") 
                                                            {
                                                                echo "S1";
                                                            }
                                                            elseif ($value['program_pendidikan_tinggi'] == "Magister") 
                                                            {
                                                                echo "S2";
                                                            }
                                                            else
                                                            {
                                                                echo "S3";
                                                            }
                                                            ?>
                                                            <?= $value['nama_prodi_indonesia'] ?>
                                                        </option>
                                                    <?php endforeach ?>
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
                                <a href="<?= base_url('admin/petugas_prodi') ?>" class="btn btn-danger notika-btn-danger waves-effect pull-right" style="margin-left:20px">Kembali</a>
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