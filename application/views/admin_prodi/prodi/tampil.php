<style>.judul{font-size:14px}</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcomb-list">
                <br><br>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <br>
                            <h3 style="font-size:20px">Data Program Studi</h3>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="breadcomb-list" style="min-height:400px">
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Kode Program Studi</h3>
                            <p><?= $detail['kode_program_studi'] ?></p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Program Studi</h3>
                            <p><?= $detail['nama_prodi_indonesia'] ?></p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Departement</h3>
                            <p><?= $detail['nama_prodi_inggris'] ?></p>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Fakultas</h3>
                            <p><?= $detail['nama_fakultas'] ?></p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Gelar</h3>
                            <p><?= $detail['gelar_indonesia'] ?></p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Title</h3>
                            <p><?= $detail['gelar_inggris'] ?></p>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Status Akreditasi</h3>
                            <p><?= $detail['status_akreditasi_prodi'] ?></p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Program Pendidikan</h3>
                            <p><?= $detail['program_pendidikan_tinggi'] ?></p>
                        </div>
                        <div class="col-lg-3 col-lg-offset-1">
                            <h4 class="judul">Jenis Jenjang Pendidikan</h3>
                            <p><?= $detail['jenis_jenjang_pendidikan'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>