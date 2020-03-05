<?php 

$tanggal_lahir  = "";
$tanggal_masuk  = "";
$tanggal_lulus  = "";

if($mahasiswa['tanggal_lahir'])
{
    $oldformat  = str_replace("/","-",$mahasiswa['tanggal_lahir']);
    $time       = strtotime($mahasiswa['tanggal_lahir']);
    $tanggal_lahir  = date('Y-m-d',$time);
}

if($mahasiswa['tanggal_masuk'])
{
    $oldformat  = str_replace("/","-",$mahasiswa['tanggal_masuk']);
    $time       = strtotime($mahasiswa['tanggal_masuk']);
    $tanggal_masuk  = date('Y-m-d',$time);
}

if($mahasiswa['tanggal_lulus'])
{
    $oldformat  = str_replace("/","-",$mahasiswa['tanggal_lulus']);
    $time       = strtotime($mahasiswa['tanggal_lulus']);
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
                                    <h2>Data SKPI Mahasiswa</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="button-icon-btn button-icon-btn-cl">
                                <button style="margin-right:20px" data-toggle="modal" data-target="#myModal1" data-placement="bottom" title="Update Data" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </button>
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
                                </button> <?= $this->session->flashdata('edit') ?> berhasil diupdate.
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
                                            <p>&emsp;<?= $mahasiswa['nim'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Nama</h5>
                                            <p><?= $mahasiswa['nama_mahasiswa'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Program Studi</h5>
                                            <p><?= $mahasiswa['nama_prodi_indonesia'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Fakultas</h5>
                                            <p><?= $mahasiswa['nama_fakultas'] ?></p>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>&emsp;Tempat Lahir</h5>
                                            <p>&emsp;<?= $mahasiswa['tempat_lahir'] ?></p>
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
                                            <p style="margin-left:14px"><?= $mahasiswa['no_skpi'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Nomor Ijazah</h5>
                                            <p><?= $mahasiswa['no_ijazah'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Program Pendidikan</h5>
                                            <p><?= $mahasiswa['program_pendidikan_tinggi'] ?></p>
                                        </div>
                                        <div class="col-md-3">
                                            <h5>Gelar</h5>
                                            <p><?= $mahasiswa['gelar_indonesia'] ?></p>
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
                                                    <tbody>
                                                        <?php $no=1; ?>
                                                        <?php foreach ($detail_info as $key => $value): ?>

                                                            <?php if ($value['id_informasi'] == null) { ?>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            <?php } else { ?>

                                                                <?php
                                                                $tgl_mulai      = "";
                                                                $tgl_selesai    = "";

                                                                if($value['tgl_mulai'])
                                                                {
                                                                    $tgl_mulai   = tanggal_indo($value['tgl_mulai']);
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
</div>
<br>

<!-- Modal Update -->
<form method="post">
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 style="font-size:18px;padding-left:40px">Edit Data</h2>
                            <b><p style="padding-left:40px;color:#d9534f">Note : Pastikan data yang diinputkan sesuai dengan KTP</p></b>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" style="margin-right:5px" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                        <div class="form-group">
                            <label>Tempat Lahir
                                <span style="color:#d9534f">*</span>
                            </label>
                            <div class="nk-int-st">
                                <input id="input1" onkeyup="verify()" name="tempat_lahir" value="<?= $mahasiswa['tempat_lahir'] ?>" onkeypress="return (event.charCode == 32 || event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" type="text" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <br><br>
                    </div>                        
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1">
                        <div class="form-group">
                            <label>Tanggal Lahir
                                <span style="color:#d9534f">*</span>
                            </label>
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_3">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input id="input2" onchange="verify()" autocomplete="off" name="tanggal_lahir" value="<?= $mahasiswa['tanggal_lahir'] ?>" placeholder="MM-DD-YYYY" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <button type="button" class="btn btn-danger notika-btn-danger waves-effect pull-right" data-dismiss="modal">Batal</button>
                        <button type="submit" id="tambah" disabled class="btn btn-success notika-btn-success waves-effect pull-right" style="margin-right:20px;">Update</button>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</form>

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
