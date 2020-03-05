<?php 

$tanggal_lahir  = "";
$tanggal_masuk  = "";
$tanggal_lulus  = "";

if($detail['tanggal_lahir'])
{
    $oldformat  = str_replace("/","-",$detail['tanggal_lahir']);
    $time       = strtotime($detail['tanggal_lahir']);
    $tanggal_lahir  = date('Y-m-d',$time);
}

if($detail['tanggal_masuk'])
{
    $oldformat  = str_replace("/","-",$detail['tanggal_masuk']);
    $time       = strtotime($detail['tanggal_masuk']);
    $tanggal_masuk  = date('Y-m-d',$time);
}

if($detail['tanggal_lulus'])
{
    $oldformat  = str_replace("/","-",$detail['tanggal_lulus']);
    $time       = strtotime($detail['tanggal_lulus']);
    $tanggal_lulus  = date('Y-m-d',$time);
}

?>

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-ctn">
                                    <h2></h2>
                                    <h2>Data Mahasiswa &emsp;|&emsp; <?= $detail['nama_mahasiswa'] ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="button-icon-btn button-icon-btn-cl">
                                <button onclick="history.back()" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </button>
                                <a style="margin-right:20px" href="<?= base_url("admin/mahasiswa/edit/$detail[nim]") ?>" data-toggle="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-primary primary-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
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
                <div class="widget-tabs-int">
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Identitas Mahasiswa</a></li>
                            <li><a data-toggle="tab" href="#menu2">Informasi Tambahan</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="home" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>&emsp;NIM</h5>
                                            <p>&emsp;<?= $detail['nim'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Nama</h5>
                                            <p><?= $detail['nama_mahasiswa'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Program Studi</h5>
                                            <p><?= $detail['nama_prodi_indonesia'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Fakultas</h5>
                                            <p><?= $detail['nama_fakultas'] ?></p>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>&emsp;Tempat Lahir</h5>
                                            <p>&emsp;<?= $detail['tempat_lahir'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Tanggal Lahir</h5>
                                            <p><?php if($tanggal_lahir) { echo tanggal_indo($tanggal_lahir); } ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Tanggal Masuk</h5>
                                            <p><?php if($tanggal_masuk) { echo tanggal_indo($tanggal_masuk); } ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Tanggal Lulus</h5>
                                            <p><?php if($tanggal_lulus) { echo tanggal_indo($tanggal_lulus); } ?></p>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>&emsp;Nomor SKPI</h5>
                                            <p style="margin-left:14px"><?= $detail['no_skpi'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Nomor Ijazah</h5>
                                            <p><?= $detail['no_ijazah'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Program Pendidikan</h5>
                                            <p><?= $detail['program_pendidikan_tinggi'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Gelar</h5>
                                            <p><?= $detail['gelar_indonesia'] ?></p>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Informasi Tambahan</th>
                                                            <th>Additional Information</th>
                                                            <th class="text-center">Opsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no=1; ?>
                                                        <?php foreach ($detail_info as $key => $value): ?>

                                                            <?php if ($value['isi_informasi_indonesia'] == "") { echo ""; ?>
                                                            
                                                        <?php } else { ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td class="text-justify"><?= $value['isi_informasi_indonesia'] ?></td>
                                                                <td class="text-justify"><?= $value['isi_informasi_inggris'] ?></td>
                                                                <td width="15%">
                                                                    <a href="<?= base_url("admin/mahasiswa/hapus_info/$value[id_informasi]") ?>" class="btn btn-danger danger-icon-notika waves-effect pull-right hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                    <button style="margin-right:20px" type="button" data-toggle="modal" title="Edit Kompetensi" data-target="#<?= $key ?>" class="btn btn-primary primary-icon-notika btn-reco-mg btn-button-mg pull-right">
                                                                        <i  class="fa fa-edit" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>

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
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>


<!-- Modal Edit -->
<?php foreach ($detail_info as $key => $value): ?>
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
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                            <div class="form-group">
                                <label>Additional Information
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="nk-int-st">
                                    <input type="hidden" name="id_informasi" value="<?= $value['id_informasi'] ?>">
                                    <textarea name="isi_informasi_inggris" class="form-control" rows="3"><?= $value['isi_informasi_inggris'] ?></textarea>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                            <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Ubah</button>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </form>
    <?php endforeach ?>