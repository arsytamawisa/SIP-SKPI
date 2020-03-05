<div class="data-table-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <br>
                                <h3 style="font-size:20px">Data Perguruan Tinggi</h3>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flash Data -->
        <?php if ( $this->session->flashdata('flashdata') ) : ?>
            <div id="flashData" class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-md-offset-1">
                                <div class="alert-list">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
                                        </button> Data <b><?= $this->session->flashdata('flashdata') ?></b> berhasil diupdate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcomb-list">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Nama Perguruan Tinggi</label>
                                    <div class="nk-int-st">
                                        <input name="nama_perguruan_tinggi" type="text" class="form-control" value="Universitas Teknologi Yogyakarta" disabled autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Status SK Akreditasi</label>
                                    <p></p>
                                    <div class="nk-int-st">
                                        <label class="radio-inline">
                                            <input type="radio" value="A" name="status_akreditasi_kampus" 
                                            <?php if($perguruan_tinggi['status_akreditasi_kampus'] == "A"){echo "checked";} ?> >A &emsp;
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="B" name="status_akreditasi_kampus" 
                                            <?php if($perguruan_tinggi['status_akreditasi_kampus'] == "B"){echo "checked";} ?>>B &emsp;
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="C" name="status_akreditasi_kampus" 
                                            <?php if($perguruan_tinggi['status_akreditasi_kampus'] == "C"){echo "checked";} ?>>C
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-md-offset-1">
                                <div class="form-group">
                                    <label>Nomor SK Akreditasi
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <input name="no_sk_akreditasi_kampus" value="<?= $perguruan_tinggi['no_sk_akreditasi_kampus'] ?>" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <label>Sistem Penilaian
                                        <span style="color:#d9534f">*</span>
                                    </label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                            <input name="sistem_penilaian" value="<?= $perguruan_tinggi['sistem_penilaian'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Update</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>