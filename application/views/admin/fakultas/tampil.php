<style>.form-text{font-size:12px}</style>

<div class="data-table-area">
    <!-- <form method="POST"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-2 col-xs-2">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-ctn">
                                        <h2></h2>
                                        <h2>Data Fakultas</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                                <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                    <!--                                     
                                        <button data-placement="left" name="hapus" title="Hapus Fakultas" class="btn btn-danger success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button> 
                                    -->
                                    <button style="margin-right:10px" id="modaltambah" data-toggle="modal" data-target="#myModal1" data-placement="left" title="Tambah Fakultas" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SweetAlert -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('gagal') ?>"></div>

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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th><input type="checkbox"></th> -->
                                        <th>#</th>
                                        <th>Nama Fakultas</th>
                                        <th>Nama Dekan</th>
                                        <th>Program Studi</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($fakultas as $key => $value): ?>
                                        <tr>
                                            <!-- <td><input type="checkbox" name="fakultas[<?php echo $value['id_fakultas']; ?>]"></td> -->
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nama_fakultas'] ?></td>
                                            <td><?= $value['nama_dekan'] ?></td>
                                            <td>
                                                <button class="badge btn-success success-icon-notika waves-effect" data-target="#<?= $key ?>" data-toggle="modal" title="Detail Fakultas">Detail</button>
                                            </td>
                                            <td>
                                                <button style="margin-right:20px" data-toggle="modal" title="Edit Data" data-target="#<?= $key.$key ?>" class="btn btn-success success-icon-notika waves-effect edit">
                                                    <i  class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                                <a href="<?= base_url("admin/fakultas/hapus/$value[id_fakultas]") ?>" class="btn btn-danger danger-icon-notika waves-effect hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
                                                    <i class="fa fa-trash"></i>
                                                </a>
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
        <!-- </form> -->
    </div>
    <br><br>


    <!-- Modal Detail -->
    <?php foreach ($prodi as $key => $value): ?>
        <div class="modal fade" id="<?= $key ?>" role="dialog">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 style="font-size:18px;padding-left:40px"><?= $value['nama_fakultas'] ?></h2>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" style="margin-right:5px;" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Program Studi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($value['prodi'] as $value_sub): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <?php 
                                                if ($value_sub['program_pendidikan_tinggi'] == "Diploma"){
                                                    echo "D3";
                                                } elseif ($value_sub['program_pendidikan_tinggi'] == "Sarjana") {
                                                    echo "S1";
                                                } elseif ($value_sub['program_pendidikan_tinggi'] == "Magister") {
                                                    echo "S2";
                                                } else {
                                                    echo "S3";
                                                }
                                                ?>
                                                <?= $value_sub['nama_prodi_indonesia'] ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    <?php endforeach ?>


    <!-- Modal Tambah -->
    <form method="post">
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 style="font-size:18px;padding-left:40px">Tambah Data Fakultas</h2>
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
                                <label>Nama Fakultas
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <small class="form-text text-danger"><?= form_error('nama_fakultas') ?></small>
                                <div class="nk-int-st">
                                    <input onkeyup="verify()" value="<?= set_value('nama_fakultas') ?>" onkeypress="return (event.charCode == 32 || event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" id="input1" name="nama_fakultas" type="text" class="form-control" autofocus autocomplete="off">
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <div class="form-group">
                                <label>Nama Dekan
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <small class="form-text text-danger"><?= form_error('nama_dekan') ?></small>
                                <div class="nk-int-st">
                                    <input onkeyup="verify()" value="<?= set_value('nama_dekan') ?>" onkeypress="return (event.charCode == 32 || event.code == 'Period' || event.code == 'Comma') || (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" id="input2" name="nama_dekan" type="text" class="form-control" autocomplete="off">
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
    <?php foreach ($fakultas as $key => $value): ?>
        <form method="post">
            <div class="modal fade" id="<?= $key.$key?>" role="dialog">
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
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                                <div class="form-group">
                                    <label>Nama Fakultas
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nama_fakultas') ?></small>
                                    <div class="nk-int-st">
                                        <input onkeypress="return (event.charCode == 32 || event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="nama_fakultas" value="<?= $value['nama_fakultas'] ?>" type="text" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <br><br>
                            </div>

                            <input type="hidden" name="id_fakultas" value="<?= $value['id_fakultas'] ?>">

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                                <div class="form-group">
                                    <label>Nama Dekan
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <small class="form-text text-danger"><?= form_error('nama_dekan') ?></small>
                                    <div class="nk-int-st">
                                        <input onkeypress="return (event.charCode == 32 || event.code == 'Period' || event.code == 'Comma') || (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="nama_dekan" value="<?= $value['nama_dekan'] ?>" type="text" class="form-control" autocomplete="off">
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