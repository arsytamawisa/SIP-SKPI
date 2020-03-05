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
                                <a href="javascript:history.back()" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </a>
                                <a style="margin-right:20px" href="<?= base_url("admin_prodi/mahasiswa/edit/$detail[nim]") ?>" data-toggle="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                       <?php $no=1; ?>
                                                       <?php foreach ($detail_info as $key => $value): ?>

                                                        <?php

                                                        $tgl_mulai      = "";
                                                        $date_start     = "";
                                                        $tgl_selesai    = "";
                                                        $date_end       = "";

                                                        if($value['tgl_mulai'])
                                                        {
                                                            $tgl_mulai   = tanggal_indo($value['tgl_mulai']);
                                                            $date_start  = tanggal_luar($value['tgl_mulai']);
                                                        }

                                                        if($value['tgl_selesai'])
                                                        {
                                                            $oldformat      = str_replace("/","-",$value['tgl_selesai']);
                                                            $time           = strtotime($value['tgl_selesai']);
                                                            $tgl_selesai    = date('Y-m-d',$time);
                                                            $date_end       = tanggal_luar($tgl_selesai);

                                                        }?>


                                                        <?php if ($value['id_informasi'] == null ) { ?>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        <?php } else { ?>

                                                            <tr>
                                                                <td><?= $no++ ?></td>

                                                                <!-- Informasi Tambahan -->
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
                                                                        <?= $value['penyelenggara'] ?>,
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
                                                                            <?= $tgl_mulai . " - " . tanggal_indo($value['tgl_selesai']) ?>,
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
                                                                        diterbitkan oleh Universitas Teknologi Yogyakarta,
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


                                                                <!-- Additional Information -->
                                                                <?php if ($value['status'] == "kompetisi") { ?>
                                                                    <td>
                                                                        <i>
                                                                            <?= $value['peringkat'] ?>,
                                                                            <?= $value['activity'] ?>,
                                                                            <?= $value['tema'] ?>
                                                                            <?= $value['institution'] ?>,
                                                                            <?= $date_start ?>,
                                                                            <?= $value['kota'] ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "pemakalah") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Speaker,
                                                                            <?= $value['writing'] ?>,
                                                                            <?= $value['activity'] ?>,
                                                                            <?= $value['institution'] ?>,
                                                                            <?= $date_start ?>,
                                                                            <?= $value['kota'] ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "pembicara") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Speaker,
                                                                            <?= $value['writing'] ?>,
                                                                            <?= $value['activity'] ?>,
                                                                            <?= $date_start ?>,
                                                                            <?= $value['kota'] ?>   
                                                                        </i>
                                                                    </td>        
                                                                <?php } elseif($value['status'] == "penulis") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Penulis,
                                                                            <?= $value['writing'] ?>,
                                                                            <?= $value['nama_media'] ?>,
                                                                            <?= $value['edisi'] ?>,
                                                                            <?= $date_start ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "magang") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Internship,
                                                                            <?= $value['penyelenggara'] ?>,
                                                                            <?php if ($value['interval'] > 1) { ?>
                                                                                <?= $date_start . " - " . $date_end ?>,
                                                                            <?php } else { ?>
                                                                                <?= $date_start ?>,
                                                                            <?php } ?>
                                                                            <?= $value['kota'] ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "kerja_praktek") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Practical Work,
                                                                            <?= $value['penyelenggara'] ?>,
                                                                            <?php if ($value['interval'] > 1) { ?>
                                                                                <?= $date_start . " - " . $date_end ?>,
                                                                            <?php } else { ?>
                                                                                <?= $date_start ?>,
                                                                            <?php } ?>
                                                                            <?= $value['kota'] ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "asisten_mata_kuliah") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Course Assistant,
                                                                            <?= $value['course'] ?>,
                                                                            <?php if ($value['semester'] == "Genap"){ ?>
                                                                                Even
                                                                            <?php } else { ?>
                                                                                Odd
                                                                            <?php } ?>
                                                                            Semester of the
                                                                            <?= $value['tahun_ajaran'] ?>,
                                                                            School Year
                                                                            University of Technology Yogyakarta
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "asisten_penelitian") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Research Assistant,
                                                                            <?= $value['writing'] ?>,
                                                                            <?= $value['institution'] ?>,
                                                                            <?= $date_start . " - " . $date_end ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "asisten_pengabdian") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Community Service Assistant,
                                                                            <?= $value['activity'] ?>,
                                                                            <?= $date_start . " - " . $date_end ?>,
                                                                            <?php if ($value['interval'] > 1) { ?>
                                                                            <?php } else { ?>
                                                                                <?= $date_start ?>,
                                                                            <?php } ?>
                                                                            <?= $value['institution'] ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "kegiatan_eksternal" || $value['status'] == "kegiatan_internal") { ?>
                                                                    <td>
                                                                        <i>
                                                                            <?php if ($value['jabatan']== "Peserta") { ?>
                                                                                Peserta,
                                                                            <?php } else { ?>
                                                                                Committee,
                                                                            <?php } ?>
                                                                            <?= $value['activity'] ?>,
                                                                            <?= $value['institution'] ?>,
                                                                            <?php if ($value['interval'] > 1) { ?>
                                                                                <?= $date_start . " - " . $date_end ?>,
                                                                            <?php } else { ?>
                                                                                <?= $date_start ?>,
                                                                            <?php } ?>
                                                                            <?= $value['kota'] ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "pengurus") { ?>
                                                                    <td>
                                                                        <i>
                                                                            <?php if ($value['jabatan']== "Peserta") { ?>
                                                                                Participant,
                                                                            <?php } else { ?>
                                                                                Committe,
                                                                            <?php } ?>
                                                                            <?= $value['name_ukm_hmj'] ?>,
                                                                            <?= $value['institution'] ?>,
                                                                            <?= $date_start . " - " . $date_end ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "toefl") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Having an English Proficiency Test Certificate with a score of 
                                                                            <?= $value['skor_toefl'] ?>
                                                                            issued by the Education, Certification, and Training Center University of Technology Yogyakarta,
                                                                            <?= $date_start ?>
                                                                        </i>
                                                                    </td>
                                                                <?php } elseif($value['status'] == "pelatihan") { ?>
                                                                    <td>
                                                                        <i>
                                                                            Graduated,
                                                                            <?= $value['activity'] ?>,
                                                                            <?= $value['institution'] ?>,
                                                                            <?= $date_start ?>,
                                                                            <?= $value['kota'] ?>
                                                                        </i>
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