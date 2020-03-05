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
                                    <h2>Data Admin Prodi</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                <a href="<?= base_url('admin/petugas_prodi/tambah') ?>" data-placement="left" title="Tambah Data" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
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
                                    <th width="5%">#</th>
                                    <th>Nama Admin</th>
                                    <th>Program Studi</th>
                                    <th width="15%" class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($petugas_prodi as $key => $value): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['nama_admin_prodi'] ?></td>
                                        <td>
                                            <?php 
                                            if($value['program_pendidikan_tinggi'] == "Diploma")
                                            {
                                                echo "D3";
                                            }
                                            elseif ($value['program_pendidikan_tinggi'] == "Sarjana") 
                                            {
                                                echo "S1";
                                            }
                                            elseif ($value['program_pendidikan_tinggi'] == "Magister") 
                                            {
                                                echo "S2";
                                            }
                                            else
                                            {
                                                echo "S3";
                                            }
                                            ?>
                                            <?= $value['nama_prodi_indonesia'] ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?= base_url("admin/petugas_prodi/edit/$value[id_admin_prodi]") ?>" style="margin-right:15px" data-toggle="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-success success-icon-notika waves-effect">
                                                <i  class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <a href="<?= base_url("admin/petugas_prodi/hapus/$value[id_admin_prodi]") ?>" class="btn btn-danger danger-icon-notika waves-effect hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
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