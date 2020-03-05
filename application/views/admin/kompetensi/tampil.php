<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-2 col-xs-2">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-ctn">
                                    <h2></h2>
                                    <h2>Data Kompetensi</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                <button type="button" data-toggle="modal" data-placement="left" data-target="#myModal1" title="Tambah Kompetensi" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Data Tambah -->
    <?php if ( $this->session->flashdata('tambah') ) : ?>
        <div id="flashData" class="row">
            <div class="col-lg-12 col-md-12">
                <div class="alert-inner mg-t-30">
                    <div class="alert-list">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
                            </button> Data <b><?= $this->session->flashdata('tambah') ?></b> berhasil ditambahkan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- Flash Data Edit -->
    <?php if ( $this->session->flashdata('edit') ) : ?>
        <div id="flashData" class="row">
            <div class="col-lg-12 col-md-12">
                <div class="alert-inner mg-t-30">
                    <div class="alert-list">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
                            </button> Data <b><?= $this->session->flashdata('edit') ?></b> berhasil diupdate.
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

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="data-table-list">
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Program Studi</th>
                                <th>Kompetensi Kelulusan</th>
                                <th>Graduate Competencies</th>
                                <th class="text-center">Sub Kompetensi</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach ($kompetensi as $key => $value): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <?php 
                                        if (jenjang_prodi($value['id_program_studi']) == "Diploma"){
                                            echo "D3";
                                        } elseif (jenjang_prodi($value['id_program_studi']) == "Sarjana") {
                                            echo "S1";
                                        } elseif (jenjang_prodi($value['id_program_studi']) == "Magister") {
                                            echo "S2";
                                        } else {
                                            echo "S3";
                                        }
                                        ?>
                                        <?= tampil_prodi($value['id_program_studi']) ?>
                                    </td>
                                    <td><?= $value['judul_kompetensi_indonesia'] ?></td>
                                    <td><?= $value['judul_kompetensi_inggris'] ?></td>
                                    <td align="center">
                                        <a href="kompetensi/detail/<?= $value['id_kompetensi'] ?>" class="badge btn-success notika-btn-success">Detail</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url("admin/kompetensi/hapus/$value[id_kompetensi]") ?>" class="btn btn-danger danger-icon-notika waves-effect pull-right hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <button style="margin-right:20px" type="button" data-toggle="modal" title="Edit Kompetensi" data-target="#<?= $key ?>" class="btn btn-primary primary-icon-notika btn-reco-mg btn-button-mg pull-right">
                                            <i  class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
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


<!-- Modal Tanbah -->
<form method="post">
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 style="font-size:18px;padding-left:40px">Tambah Data Kompetensi</h2>
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
                            <label>Program Studi
                                <span style="color:#d9534f">*</span>
                            </label>
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
                                            }
                                            ?>
                                            <?= $value['nama_prodi_indonesia'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                        <div class="form-group">
                            <label>Judul Kompetensi (Bahasa Indonesia)
                                <span style="color:#d9534f">*</span>
                            </label>
                            <div class="nk-int-st">
                                <input onkeyup="verify()" id="input1" name="judul_kompetensi_indonesia" type="text" class="form-control" autofocus>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                        <div class="form-group">
                            <label>Judul Kompetensi (Bahasa Inggris) 
                                <span style="color:#d9534f">*</span>
                            </label>
                            <div class="nk-int-st">
                                <input onkeyup="verify()" id="input2" name="judul_kompetensi_inggris" type="text" class="form-control">
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
                        <button type="submit" id="tambah" name="tambah" disabled class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Simpan</button>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</form>


<!-- Modal Edit -->
<?php foreach ($kompetensi as $key => $value_k): ?>
    <form method="post">
        <div class="modal fade" id="<?= $key ?>" role="dialog">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 style="font-size:18px;padding-left:40px">Edit Data</h2>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" style="margin-right:5px;" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <input type="hidden" name="id_kompetensi" value="<?= $value_k['id_kompetensi'] ?>">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <div class="form-group">
                                <label>Program Studi
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="id_program_studi" class="selectpicker" data-live-search="true">
                                        <?php foreach ($program_studi as $key => $value): ?>
                                            <option value="<?= $value['id_program_studi'] ?>" <?php if($value['id_program_studi'] == $value_k['id_program_studi']) {echo "selected";} ?>>
                                                <?php 
                                                if ($value['program_pendidikan_tinggi'] == "Diploma"){
                                                    echo "D3";
                                                } elseif ($value['program_pendidikan_tinggi'] == "Sarjana") {
                                                    echo "S1";
                                                } elseif ($value['program_pendidikan_tinggi'] == "Magister") {
                                                    echo "S2";
                                                } else {
                                                    echo "S3";
                                                }
                                                ?>
                                                <?= $value['nama_prodi_indonesia'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <div class="form-group">
                                <label>Judul Kompetensi (Bahasa Indonesia)
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="nk-int-st">
                                    <input id="input3" name="judul_kompetensi_indonesia" value="<?= $value_k['judul_kompetensi_indonesia'] ?>" type="text" class="form-control" autofocus>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <div class="form-group">
                                <label>Judul Kompetensi (Bahasa Inggris) 
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="nk-int-st">
                                    <input name="judul_kompetensi_inggris" value="<?= $value_k['judul_kompetensi_inggris'] ?>" type="text" class="form-control">
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                            <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
                            <button type="submit" name="edit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Ubah</button>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </form>
<?php endforeach ?>

<script>

    function verify(){
        if( document.getElementById("input1").value==="" || document.getElementById("input2").value==="" )
        { 
            document.getElementById('tambah').disabled = true; 
        } 
        else 
        { 
            document.getElementById('tambah').disabled = false;
        }
    }

</script>