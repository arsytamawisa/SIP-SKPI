<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-ctn">
                                    <h2></h2>
                                    <h2>Data Program Studi</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                <a href="<?= base_url("admin/prodi/tambah") ?>" data-toggle="tooltip" data-placement="left" title="Tambah Program Studi" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
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
                                </button> Data Program Studi <b><?= $this->session->flashdata('tambah') ?></b> berhasil ditambahkan.
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
                                </button> Data Program Studi <b><?= $this->session->flashdata('edit') ?></b> berhasil diupdate.
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
                                    <th>Kode</th>
                                    <th>Program Studi</th>
                                    <th class="text-center">Status Akreditasi</th>
                                    <th>Gelar</th>
                                    <th>Fakultas</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($prodi as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['kode_program_studi'] ?></td>
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
                                        <td align="center"><?= $value['status_akreditasi_prodi'] ?></td>
                                        <td><?= $value['gelar_indonesia'] ?></td>
                                        <td><?= $value['nama_fakultas'] ?></td>
                                        <td>
                                            <a href="<?= base_url("admin/prodi/edit/$value[id_program_studi]") ?>" class="btn btn-success success-icon-notika waves-effect" data-toggle="tooltip" data-placement="bottom" title="Update Data">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &emsp;
                                            <a href="<?= base_url("admin/prodi/hapus/$value[id_program_studi]") ?>" class="btn btn-danger danger-icon-notika waves-effect hapus" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>