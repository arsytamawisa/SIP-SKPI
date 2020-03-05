<div class="flash-data" data-flashdata="<?= $this->session->flashdata('password_baru') ?>"></div>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('password_lama') ?>"></div>

<div class="breadcomb-area">
    <div class="container">

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
                                        </button> <b><?= $this->session->flashdata('flashdata') ?></b> berhasil diupdate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-example-wrap">
                    <div class="cmp-tb-hd">
                        <br><br>
                        <h2 class="text-center">Ganti Password</h2>
                        <br><br>
                    </div>
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-md-offset-1">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="nk-int-st">
                                        <input type="password" name="password_lama" class="form-control">
                                        <label class="nk-label">Password Lama</label>
                                    </div>
                                    <div class="form-ic-cmp"></div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-md-offset-1">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="nk-int-st">
                                        <input type="password" name="password_baru" class="form-control">
                                        <label class="nk-label">Password Baru</label>
                                    </div>
                                    <div class="form-ic-cmp"></div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="nk-int-st">
                                        <input type="password" name="password_konfirmasi" class="form-control">
                                        <label class="nk-label">Konfirmasi Password</label>
                                    </div>
                                    <div class="form-ic-cmp"></div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-success notika-btn-success waves-effect pull-right">Simpan</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
