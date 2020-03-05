    <div class="notika-status-area">
        <div class="container">
            <div class="row tes">
                <style>.tes{margin-top:-30px}</style>
                <div class="col-lg-8 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <img src="<?= base_url('assets/home/img/UTY.jpg') ?>">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <style>.kon{margin-bottom:14px;margin-top:14px}</style>
                        <div class="col-12 text-center kon">
                         <h3><span class="counter"><?= $jumlah_fakultas ?></span></h3>
                         <p>Fakultas</p>
                     </div>
                     <hr>
                     <div class="col-12 text-center kon">
                         <h3><span class="counter"><?= $jumlah_prodi ?></span></h3>
                         <p>Program Studi</p>
                     </div>
                     <hr>
                     <div class="col-12 text-center kon">
                         <h3><span class="counter"><?= $jumlah_mahasiswa ?></span></h3>
                         <p>Mahasiswa</p> 
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <br>

 <div class="notika-email-post-area rounded">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                    <div class="contact-hd search-hd-eg">
                        <h2>Data Fakultas</h2>
                        <p>Jumlah Program Studi berdasarkan Fakultas</p>
                    </div>
                    <div class="search-eg-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fakultas</th>
                                    <th class="text-right">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fakultas as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['nama_fakultas'] ?></td>
                                        <td class="text-center">
                                            <h4><?= jumlah_prodi($value['id_fakultas']) ?></h4>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                    <div class="contact-hd search-hd-eg">
                        <h2>Data Fakultas</h2>
                        <p>Jumlah Mahasiswa berdasarkan Fakultas</p>
                    </div>
                    <div class="search-eg-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fakultas</th>
                                    <th class="text-right">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fakultas as $key => $value): ?>
                                    <tr>
                                        <td><?= $value['nama_fakultas'] ?></td>
                                        <td class="text-center">
                                            <h4><?= jml_mhs_fakultas($value['id_fakultas']) ?></h4>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <style>#scrol{overflow:auto;max-height:355px}</style>
            <div id="scrol" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                    <div class="contact-hd search-hd-eg">
                        <h2>Data Mahasiswa</h2>
                        <p>Jumlah Mahasiswa berdasarkan Program Studi</p>
                    </div>
                    <div class="search-eg-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Program Studi</th>
                                    <th class="text-center">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($prodi as $key => $value): ?>
                                    <tr>
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
                                        <td class="text-center">
                                            <h4><?= jml_mhs_prodi($value['id_program_studi']) ?></h4>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>