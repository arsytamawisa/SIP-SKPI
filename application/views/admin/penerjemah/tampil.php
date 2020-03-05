<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
                <div class="breadcomb-list">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-ctn">
                                        <h2 style="font-size:22px;margin-top:10px">Data Mahasiswa</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pull-right" style="margin-top:10px">
                                <select name="prodi" id="prodi" class="selectpicker" data-live-search="true" onchange="submit()">
                                    <option value="">Filter Program Studi</option>
                                    <?php foreach ($program_studi as $key => $value): ?>
                                        <?php $prodi = $this->session->userdata('prodi') ?>
                                        <option value="<?= $value['id_program_studi'] ?>"
                                            <?php if($value['id_program_studi'] == $prodi ) {echo "selected";} ?>>
                                            <?php if ($value['program_pendidikan_tinggi'] == "Sarjana") { ?>
                                                S1
                                            <?php } elseif($value['program_pendidikan_tinggi'] == "Diploma") { ?>
                                                D3
                                            <?php } elseif($value['program_pendidikan_tinggi'] == "Magister") { ?>
                                                S2
                                            <?php } elseif($value['program_pendidikan_tinggi'] == "Doctor") { ?>
                                                S3
                                            <?php } ?>
                                            <?= $value['nama_prodi_indonesia'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-lg-3 pull-right" style="margin-top:10px">
                                <select name="fakultas" id="fakultas" class="selectpicker" data-live-search="true" onchange="submit()">
                                    <option value="">Filter Fakultas</option>
                                    <?php $s_fakultas = $this->session->userdata('fakultas') ?>
                                    <?php foreach ($fakultas as $key => $value): ?>
                                        <option value="<?= $value['id_fakultas'] ?>"
                                            <?php if($s_fakultas == $value['id_fakultas']) {echo "selected";} ?>>
                                            <?= $value['nama_fakultas'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                                    <th>Fakultas</th>
                                    <th>Program Studi</th>
                                    <th class="text-center">Info Tambahan</th>
                                </tr>
                            </thead>
                            <tbody id="mahasiswa">

                                <?php $no=1; ?>
                                <?php foreach ($mahasiswa as $key => $value): ?>

                                    <?php if ($mahasiswa == null) { ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php } else { ?>

                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nim'] ?></td>
                                            <td><?= $value['nama_mahasiswa'] ?></td>
                                            <td><?= nama_fakultas_prodi($value['id_program_studi']) ?></td>
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

                                            <?php if (jumlah_info($value['nim'])['total'] > 0 ) { ?>
                                                <?php if (jumlah_info($value['nim'])['total'] == jumlah_info($value['nim'])['dikerjakan']) { ?>
                                                    <td align="center">
                                                        <a href="penerjemah/detail/<?= $value['nim'] ?>" class="btn btn-success notika-btn-success">
                                                            <b>Data telah diterjemahkan</b>
                                                        </a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td align="center">
                                                        <a href="penerjemah/detail/<?= $value['nim'] ?>" class="btn btn-warning notika-btn-warning">
                                                            <b>Data belum diterjemahkan
                                                                ( <?= jumlah_info($value['nim'])['dikerjakan']." / " . jumlah_info($value['nim'])['total']; ?> )
                                                            </b>
                                                        </a>
                                                    </td>                                    
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td align="center">
                                                    <button class="btn btn-danger notika-btn-danger"><b>Data belum ada atau kosong</b></button>
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