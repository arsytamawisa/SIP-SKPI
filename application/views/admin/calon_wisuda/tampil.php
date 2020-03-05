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
                                    <h2>Data Calon Wisuda</h2>
                                </div>
                            </div>
                        </div>
                        <!--  
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                            <div class="button-icon-btn button-icon-btn-cl">
                                <button data-toggle="tooltip" data-placement="bottom" title="Hapus Data" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                                <button style="margin-right:20px" data-toggle="modal" data-target="#myModal1" data-placement="left" title="Edit Data" class="btn btn-primary primary-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    -->
                </div>
            </div>
        </div>
    </div>

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

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="data-table-list">
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Program Studi</th>
                                <th>No SKPI</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach ($mahasiswa as $key => $value): ?>
                                <tr>
                                    <td width="5%"><?= $no++ ?></td>
                                    <td><?= $value['nim'] ?></td>
                                    <td><?= $value['nama_mahasiswa'] ?></td>
                                    <td>
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
                                    </td>
                                    <td><?= $value['no_skpi'] ?></td>
                                    <td>
                                        <button class="badge btn-success success-icon-notika waves-effect" data-target="#<?= $key ?>" data-toggle="modal" title="Hapus Data">Update</button>
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


<!-- Modal Update SKPI -->
<?php foreach ($mahasiswa as $key => $value): ?>
    <form method="post">
        <div class="modal fade" id="<?= $key ?>" role="dialog">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 style="font-size:18px;padding-left:40px">Update Nomor SKPI</h2>
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
                                <label>Nomor SKPI
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="nk-int-st">
                                    <input type="hidden" name="nim" value="<?= $value['nim'] ?>">
                                    <input onkeyup="verify()" id="input1" value="<?= $value['no_skpi'] ?>" name="no_skpi" type="text" class="form-control">
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                            <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
                            <button type="submit" id="tambah" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Simpan</button>
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
        if( document.getElementById("input1").value==="" )
        { 
            document.getElementById('tambah').disabled = true; 
        } 
        else 
        { 
            document.getElementById('tambah').disabled = false;
        }
    }

</script>