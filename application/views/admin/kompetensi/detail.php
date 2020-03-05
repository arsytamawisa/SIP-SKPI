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
                                    <h2>Data Sub Kompetensi</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                            <div class="button-icon-btn button-icon-btn-cl">
                                <a href="<?= base_url("admin/kompetensi") ?>" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                                <button style="margin-right:20px" data-toggle="modal" data-target="#myModal1" data-placement="left" title="Tambah Sub Kompetensi" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
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
                                    <th><?= $detail['judul_kompetensi_indonesia'] ?></th>
                                    <th><?= $detail['judul_kompetensi_inggris'] ?></th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($sub_kompetensi as $key => $value): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td width="40%"><?= $value['isi_kompetensi_indonesia'] ?></td>
                                        <td width="40%"><?= $value['isi_kompetensi_inggris'] ?></td>
                                        <td width="15%">
                                            <button class="btn btn-primary primary-icon-notika waves-effect" data-toggle="modal" data-target="#<?= $key ?>" data-placement="bottom" title="Update Data">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            &emsp;
                                            <a href="<?= base_url("admin/kompetensi/hapus_sub/$value[id_sub_kompetensi]") ?>" class="btn btn-danger danger-icon-notika waves-effect hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
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
</div>


<!-- Modal Tanbah -->
<form method="post">
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 style="font-size:18px;padding-left:40px">Tambah Sub Kompetensi</h2>
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
                            <label><?= $detail['judul_kompetensi_indonesia'] ?>
                            <span style="color:#d9534f">*</span>
                        </label>
                        <div class="nk-int-st">
                         <textarea name="isi_kompetensi_indonesia" onkeyup="verify()" id="input1" class="form-control" rows="3" autofocus></textarea>
                     </div>
                 </div>
                 <br><br>
             </div>
             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                <div class="form-group">
                    <label><?= $detail['judul_kompetensi_inggris'] ?>
                    <span style="color:#d9534f">*</span>
                </label>
                <div class="nk-int-st">
                 <textarea name="isi_kompetensi_inggris" onkeyup="verify()" id="input2" class="form-control" rows="3"></textarea>
             </div>
         </div>
         <br><br>
     </div>
 </div>
 <div class="row">
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
        <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
        <button type="submit" id="tambah" name="submit" disabled class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Simpan</button>
    </div>
</div>
<br><br>
</div>
</div>
</div>
</form>


<!-- Modal Edit -->
<?php foreach ($sub_kompetensi as $key => $value): ?>
    <form method="post">
        <div class="modal fade" id="<?= $key ?>" role="dialog">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 style="font-size:18px;padding-left:40px">Edit Sub Kompetensi</h2>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" style="margin-right:5px;" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <input type="hidden" name="id_sub_kompetensi" value="<?= $value['id_sub_kompetensi'] ?>">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <div class="form-group">
                                <label><?= $detail['judul_kompetensi_indonesia'] ?>
                                <span style="color:#d9534f">*</span>
                            </label>
                            <div class="nk-int-st">
                             <textarea name="isi_kompetensi_indonesia" class="form-control" rows="3"><?= $value['isi_kompetensi_indonesia'] ?></textarea>
                         </div>
                     </div>
                     <br><br>
                 </div>
                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                    <div class="form-group">
                        <label><?= $detail['judul_kompetensi_inggris'] ?>
                        <span style="color:#d9534f">*</span>
                    </label>
                    <div class="nk-int-st">
                     <textarea name="isi_kompetensi_inggris" class="form-control" rows="3"><?= $value['isi_kompetensi_inggris'] ?></textarea>
                 </div>
             </div>
             <br><br>
         </div>
     </div>
     <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
            <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
            <button type="submit" name="edit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Simpan</button>
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
