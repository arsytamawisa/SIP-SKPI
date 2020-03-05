<?php header('Cache-Control: max-age=10') ?>

<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-ctn">
                                    <h2></h2>
                                    <h2 style="font-size:22px">Data Mahasiswa</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                <a style="margin-right:20px" data-toggle="tooltip" data-placement="bottom" title="Cetak Data Mahasiswa" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right" onclick="
                                <?php foreach ($print as $key => $value): ?>
                                    window.open('<?= base_url("admin_prodi/mahasiswa/print/$value[nim]") ?>');
                                <?php endforeach ?>
                                ">
                                <i class="fa fa-print" aria-hidden="true"></i>
                            </a>
                            <a style="margin-right:20px" href="mahasiswa/tambah" data-toggle="tooltip" data-placement="bottom" title="Tambah Data Mahasiswa" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <?php if ($mahasiswa == array()){ ?>
                                <a style="margin-right:20px" data-toggle="tooltip" data-placement="bottom" title="Download Data Mahasiswa" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </a>
                            <?php } else { ?>
                                <a style="margin-right:20px" id="export" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Download Data Mahasiswa" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </a>
                            <?php } ?>

                            <a style="margin-right:20px" href="mahasiswa/upload" data-toggle="tooltip" data-placement="bottom" title="Upload Data Mahasiswa" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <form method="post">
                        <div class="col-lg-3" style="margin-left:20px">
                            <b><p>Filter Data Kelulusan</p></b>
                            <?php $status = $this->session->userdata('status') ?>
                            <select name="status" id="status" class="selectpicker" data-live-search="true" onchange="submit()" onload="submit()">
                                <option value="Semua Data" <?php if($status == "Semua Data") {echo "selected";} ?> >Semua Data</option>
                                <option value="Telah Lulus" <?php if($status == "Telah Lulus") {echo "selected";} ?> >Telah Lulus</option>
                                <option value="Belum Lulus" <?php if($status == "Belum Lulus") {echo "selected";} ?> >Belum Lulus</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <b><p>Filter Tahun Angkatan</p></b>
                            <?php $s_tahun = $this->session->userdata('tahun') ?>
                            <select name="tahun" id="tahun" class="selectpicker" data-live-search="true" onchange="submit()" onload="submit()">
                                <?php foreach ($tahun as $key => $value): ?>
                                    <option value="<?= $value['id_tahun'] ?>" 
                                        <?php if($value['id_tahun'] == $s_tahun ) {echo "selected";} ?>>
                                        <?= $value['angkatan'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <b><p>Filter Tanggal Lulus</p></b>
                            <?php $s_tgl_lulus = $this->session->userdata('tgl_lulus') ?>
                            <select name="tgl_lulus" id="tgl_lulus" class="selectpicker" data-live-search="true" onchange="submit()" onload="submit()">
                                <option value="Semua Data">Semua Data</option>
                                <?php foreach ($tgl_lulus as $key => $value): ?>
                                    <?php 
                                    if($value['tanggal_lulus'])
                                    {
                                        $oldformat      = str_replace("/","-",$value['tanggal_lulus']);
                                        $time           = strtotime($value['tanggal_lulus']);
                                        $tanggal_lulus  = date('Y-m-d',$time);
                                    }?>
                                    <option value="<?= $value['tanggal_lulus'] ?>"
                                        <?php if($value['tanggal_lulus'] == $s_tgl_lulus ) {echo "selected";} ?>>
                                        <?= tanggal_indo($tanggal_lulus) ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </form>
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
                            </button> Data Mahasiswa <b><?= $this->session->flashdata('tambah') ?></b> berhasil ditambahkan.
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
                            </button> Data Mahasiswa <b><?= $this->session->flashdata('edit') ?></b> berhasil diupdate.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- Flash Data Upload -->
    <?php if ( $this->session->flashdata('upload') ) : ?>
        <div id="flashData" class="row">
            <div class="col-lg-12 col-md-12">
                <div class="alert-inner mg-t-30">
                    <div class="alert-list">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
                            </button> <?= $this->session->flashdata('upload') ?> berhasil diupload.
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
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tanggal Lulus</th>
                                <th class="text-center">Detail Mahasiswa</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php foreach ($mahasiswa as $key => $value): ?>
                                <?php 

                                $tanggal_lulus = "";

                                if($value['tanggal_lulus'])
                                {
                                    $oldformat      = str_replace("/","-",$value['tanggal_lulus']);
                                    $time           = strtotime($value['tanggal_lulus']);
                                    $tanggal_lulus  = date('Y-m-d',$time);
                                }

                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nim'] ?></td>
                                    <td><?= $value['nama_mahasiswa'] ?></td>
                                    <td>
                                        <?php if ($tanggal_lulus) 
                                        {
                                            echo tanggal_indo($tanggal_lulus);                                               
                                        } ?>
                                    </td>
                                    <td align="center">
                                        <a href="mahasiswa/detail/<?= $value['nim'] ?>" class="badge btn-success notika-btn-success">Detail</a>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($value['tanggal_lulus'] !== "" AND $value['tanggal_lulus'] !== NULL AND jumlah_info($value['nim'])['total'] == jumlah_info($value['nim'])['dikerjakan'] AND jumlah_info($value['nim'])['total'] !== 0 AND jumlah_info($value['nim'])['dikerjakan'] !== 0) { ?>
                                            <a target="_blank" href="<?= base_url("admin_prodi/mahasiswa/print/$value[nim]") ?>" data-toggle="tooltip" data-placement="bottom" title="Cetak PDF" class="btn btn-success success-icon-notika">
                                                <i class="fa fa-print" aria-hidden="true"></i>
                                            </a>
                                            &emsp;
                                        <?php } else { ?>
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php } ?>
                                        <a href="<?= base_url("admin_prodi/mahasiswa/edit/$value[nim]") ?>" class="btn btn-success success-icon-notika waves-effect" data-toggle="tooltip" data-placement="bottom" title="Update Data">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        &emsp;
                                        <a href="<?= base_url("admin_prodi/mahasiswa/hapus/$value[nim]") ?>" class="btn btn-danger danger-icon-notika waves-effect hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
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