<style>.form-text{font-size:12px}</style>

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-2 col-xs-2">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-ctn">
                                    <h2></h2>
                                    <h2>Data Tahun Angkatan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                <button id="modaltambah" data-toggle="modal" data-target="#myModal1" data-placement="left" title="Tambah tahun" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
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
                        <table id="data-table-basic" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Angkatan</th>
                                    <th>Tanggal Masuk</th>
                                    <th width="15%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($tahun as $key => $value): ?>
                                    <?php
                                    if($value['tgl_masuk'])
                                    {
                                        $oldformat  = str_replace("/","-",$value['tgl_masuk']);
                                        $time       = strtotime($value['tgl_masuk']);
                                        $tgl_masuk  = date('Y-m-d',$time);
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['angkatan'] ?></td>
                                        <td><?= tanggal_indo($tgl_masuk) ?></td>
                                        <td>
                                            <button style="margin-right:20px" id="modaledit" data-toggle="modal" title="Edit Data" data-target="#<?= $key.$key ?>" class="btn btn-success success-icon-notika waves-effect">
                                                <i  class="fa fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <a href="<?= base_url("admin/tahun_angkatan/hapus/$value[id_tahun]") ?>" class="btn btn-danger danger-icon-notika waves-effect hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
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
<br><br>


<!-- Modal Tambah -->
<form method="post">
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 style="font-size:18px;padding-left:40px">Tambah Data</h2>
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
                            <label>Tahun Angkatan
                                <span style="color:#d9534f">*</span>
                            </label>
                            <small class="form-text text-danger"><?= form_error('angkatan') ?></small>
                            <div class="nk-int-st">
                                <input onkeyup="verify()" value="<?= set_value('angkatan') ?>" id="input1" name="angkatan" type="text" class="form-control" autofocus autocomplete="off">
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                        <div class="form-group">
                            <label>Tanggal Masuk
                                <span style="color:#d9534f">*</span>
                            </label>
                            <small class="form-text text-danger"><?= form_error('tgl_masuk') ?></small>
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input id="input2" value="<?= set_value('tgl_masuk') ?>" onchange="verify()" autocomplete="off" name="tgl_masuk" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                </div>
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
<?php foreach ($tahun as $key => $value): ?>
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
                                <label>Tahun Angkatan
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <small class="form-text text-danger"><?= form_error('angkatan') ?></small>
                                <div class="nk-int-st">
                                    <input name="angkatan" value="<?= $value['angkatan'] ?>" type="text" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Tanggal Masuk
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <small class="form-text text-danger"><?= form_error('tgl_masuk') ?></small>
                                <?php
                                if($value['tgl_masuk'])
                                {
                                    $oldformat  = str_replace("-","/",$value['tgl_masuk']);
                                    $time       = strtotime($value['tgl_masuk']);
                                    $tgl_masuk  = date('m/d/Y',$time);
                                }
                                ?>
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input id="input2" onchange="verify()" autocomplete="off" name="tgl_masuk" value="<?= $tgl_masuk ?>" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <input type="hidden" name="id_tahun" value="<?= $value['id_tahun'] ?>">
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