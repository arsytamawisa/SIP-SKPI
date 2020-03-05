<?php 
$session = $this->session->userdata('mahasiswa'); 
$nim     = $session['nim']; 
?>

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-xs-10">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-ctn">
                                    <h2></h2>
                                    <h2>Data Informasi Tambahan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-2">
                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                <a style="margin-right:20px" href="info_tambahan/tambah" data-placement="left" title="Tambah Informasi" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
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
                                <th width="80%">Informasi Tambahan</th>
                                <th class="text-center">Status Validasi</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach ($info_tambahan as $key => $value): ?>

                                <?php if ($value['id_informasi'] == null) { ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php } else { ?>

                                    <?php
                                    $tgl_mulai   = "";
                                    $tgl_selesai = "";
                                    if($value['tgl_mulai'])
                                    {
                                        $tgl_mulai  = tanggal_indo($value['tgl_mulai']);
                                    }
                                    if($value['tgl_selesai'])
                                    {
                                        $oldformat      = str_replace("/","-",$value['tgl_selesai']);
                                        $time           = strtotime($value['tgl_selesai']);
                                        $tgl_selesai    = date('Y-m-d',$time);
                                        $tgl_selesai    = tanggal_indo($tgl_selesai);
                                    }?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <?php if ($value['status'] == "kompetisi") { ?>
                                            <td>
                                                <?= $value['peringkat'] ?>,
                                                <?= $value['judul_kegiatan'] ?>,
                                                <?= $value['tema'] ?>
                                                <?= $value['penyelenggara'] ?>,
                                                <?= $tgl_mulai ?>,
                                                <?= $value['kota'] ?>
                                            </td>
                                        <?php } elseif($value['status'] == "pemakalah") { ?>
                                            <td>
                                                Pemakalah,
                                                <?= $value['judul_tulisan'] ?>,
                                                <?= $value['judul_kegiatan'] ?>,
                                                <?= $value['penyelenggara'] ?>,
                                                <?= $tgl_mulai ?>,
                                                <?= $value['kota'] ?>
                                            </td>
                                        <?php } elseif($value['status'] == "pembicara") { ?>
                                         <td>
                                             Pembicara,
                                             <?= $value['judul_tulisan'] ?>,
                                             <?= $value['judul_kegiatan'] ?>,
                                             <?= $tgl_mulai ?>,
                                             <?= $value['kota'] ?>   
                                         </td>        
                                     <?php } elseif($value['status'] == "penulis") { ?>
                                         <td>
                                             Penulis,
                                             <?= $value['judul_tulisan'] ?>,
                                             <?= $value['nama_media'] ?>,
                                             <?= $value['edisi'] ?>,
                                             <?= $tgl_mulai ?>
                                         </td>
                                     <?php } elseif($value['status'] == "magang") { ?>
                                         <td>
                                             Magang,
                                             <?= $value['penyelenggara'] ?>
                                             <?php if ($value['interval'] > 1) { ?>
                                                <?= $tgl_mulai . " - " . $tgl_selesai ?>,
                                            <?php } else { ?>
                                                <?= $tgl_mulai ?>,
                                            <?php } ?>
                                            <?= $value['kota'] ?>
                                        </td>
                                    <?php } elseif($value['status'] == "kerja_praktek") { ?>
                                     <td>
                                         Kerja Praktek,
                                         <?= $value['penyelenggara'] ?>
                                         <?php if ($value['interval'] > 1) { ?>
                                            <?= $tgl_mulai . " - " . $tgl_selesai ?>,
                                        <?php } else { ?>
                                            <?= $tgl_mulai ?>,
                                        <?php } ?>
                                        <?= $value['kota'] ?>
                                    </td>
                                <?php } elseif($value['status'] == "asisten_mata_kuliah") { ?>
                                 <td>
                                    Asisten Mata Kuliah,
                                    <?= $value['nama_matkul'] ?>, 
                                    Semester <?= $value['semester'] ?> 
                                    TA <?= $value['tahun_ajaran'] ?>,
                                    Universitas Teknologi Yogyakarta
                                </td>
                            <?php } elseif($value['status'] == "asisten_penelitian") { ?>
                             <td>
                                 Asisten Penelitian,
                                 <?= $value['judul_tulisan'] ?>,
                                 <?= $value['penyelenggara'] ?>,
                                 <?php if ($value['interval'] > 1) { ?>
                                    <?= $tgl_mulai . " - " . $tgl_selesai ?>,]
                                <?php } else { ?>
                                    <?= $tgl_mulai ?>
                                <?php } ?>
                            </td>
                        <?php } elseif($value['status'] == "asisten_pengabdian") { ?>
                         <td>
                            Asisten Pengabdian kepada Masyarakat,
                            <?= $value['judul_kegiatan'] ?>,
                            <?php if ($value['interval'] > 1) { ?>
                                <?= $tgl_mulai . " - " . $tgl_selesai ?>,
                            <?php } else { ?>
                                <?= $tgl_mulai ?>,
                            <?php } ?>
                            <?= $value['penyelenggara'] ?>
                        </td>
                    <?php } elseif($value['status'] == "kegiatan_eksternal" || $value['status'] == "kegiatan_internal") { ?>
                     <td>
                        <?= $value['jabatan'] ?>,
                        <?= $value['judul_kegiatan'] ?>,
                        <?= $value['penyelenggara'] ?>,
                        <?php if ($value['interval'] > 1) { ?>
                            <?= $tgl_mulai . " - " . $tgl_selesai ?>,
                        <?php } else { ?>
                            <?= $tgl_mulai ?>,
                        <?php } ?>
                        <?= $value['kota'] ?>
                    </td>
                <?php } elseif($value['status'] == "pengurus") { ?>
                 <td>
                    <?= $value['jabatan'] ?>,
                    <?= $value['nama_ukm_hmj'] ?>,
                    <?= $value['penyelenggara'] ?>,
                    <?php if ($value['interval'] > 1){ ?>
                        <?= $tgl_mulai . " - " . $tgl_selesai ?>
                    <?php } else { ?>
                        <?= $tgl_mulai ?>
                    <?php } ?>
                </td>
            <?php } elseif($value['status'] == "toefl") { ?>
             <td>
                Memiliki Sertifikat <i>English Profiency Test</i> dengan skor
                <?= $value['skor_toefl'] ?>
                diterbitkan oleh
                Universitas Teknologi Yogyakarta,
                <?= $tgl_mulai ?>
            </td>
        <?php } elseif($value['status'] == "pelatihan") { ?>
         <td>
            Lulus,
            <?= $value['judul_kegiatan'] ?>,
            <?= $value['penyelenggara'] ?>,
            <?= $tgl_mulai ?>,
            <?= $value['kota'] ?>
        </td>
    <?php } ?>

    
    <!-- Status  -->
    <td>
        <?php if ($value['validasi'] == "Validasi Ditolak") { ?>
            <button class="btn btn-danger notika-btn-danger" data-target="#<?= $key.$key ?>" data-toggle="modal">
                <i class="fa fa-ban" aria-hidden="true"></i> <b>Validasi Ditolak</b>
            </button>
        <?php } elseif ($value['validasi'] == "Belum Divalidasi") { ?>
            <button class="btn btn-warning notika-btn-warning">
                <i class="fa fa-close" aria-hidden="true"></i> <b>Belum Divalidasi</b>
            </button>
        <?php } else { ?>
            <button class="btn btn-success notika-btn-success">
                <i class="fa fa-check" aria-hidden="true"></i> <b>Sudah Divalidasi</b>
            </button>
        <?php } ?>
    </td>


    <!-- Opsi -->
    <td width="15%">
        <a href="<?= base_url("mahasiswa/info_tambahan/hapus/$value[id_informasi]") ?>" class="btn btn-danger danger-icon-notika waves-effect pull-right hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
            <i class="fa fa-trash"></i>
        </a>
        <a style="margin-right:20px" href="<?= base_url("mahasiswa/info_tambahan/edit/$value[id_informasi]") ?>" class="btn btn-success success-icon-notika waves-effect pull-right">
            <i  class="fa fa-edit" aria-hidden="true"></i>
        </a>
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
<br><br>


<!-- Modal Keterangan -->
<?php foreach ($info_tambahan as $key => $value): ?>
    <form method="post">
        <div class="modal fade" id="<?= $key.$key?>" role="dialog">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 style="font-size:18px;padding-left:40px">Validasi Ditolak</h2>
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
                                <label>Keterangan
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <p><?= $value['keterangan'] ?></p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php endforeach ?>


<!-- Modal Tanbah -->
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
                <input type="hidden" name="nim" value="<?= $nim ?>">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                        <div class="form-group">
                            <label>Informasi Tambahan
                                <span style="color:#d9534f">*</span>
                            </label>
                            <div class="nk-int-st">
                             <textarea name="isi_informasi_indonesia" onkeyup="verify()" id="input1" class="form-control" rows="3" autofocus></textarea>
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
<?php foreach ($info_tambahan as $key => $value): ?>
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
                                <label>Informasi Tambahan
                                    <span style="color:#d9534f">*</span>
                                </label>
                                <div class="nk-int-st">
                                    <input type="hidden" name="id_informasi" value="<?= $value['id_informasi'] ?>">
                                    <textarea name="isi_informasi_indonesia" class="form-control" rows="3"><?= $value['isi_informasi_indonesia'] ?></textarea>
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