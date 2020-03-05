<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UTY | Surat Keterangan Pendamping Ijazah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/template/form/') ?>img/uty.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/owl.transitions.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/summernote/summernote.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/normalize.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/wave/waves.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/wave/button.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/notika-custom-icon.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/datapicker/datepicker3.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/color-picker/farbtastic.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/chosen/chosen.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/notification/notification.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/dropzone/dropzone.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/main.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>style.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/form/') ?>css/responsive.css">
    <script src="<?= base_url('assets/template/form/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li>
                                    <a data-toggle="collapse" href="<?= base_url('mahasiswa/info_tambahan') ?>">Info Tambahan</a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="<?= base_url('mahasiswa/surat') ?>">Surat</a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#pengaturan" href="#">Pengaturan</a>
                                    <ul id="pengaturan" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?= base_url('mahasiswa/ganti_password') ?>">Ganti Password</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('mahasiswa/logout') ?>">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php if($this->uri->segment('2') == 'info_tambahan') { echo "active" ;} ?>">
                            <a href="<?= base_url('mahasiswa/info_tambahan') ?>"><i class="notika-icon notika-app"></i> Info Tambahan</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'surat') { echo "active" ;} ?>">
                            <a href="<?= base_url('mahasiswa/surat') ?>"><i class="notika-icon notika-edit"></i> Data SKPI</a>
                        </li>
                        <li class="<?php if($this->uri->segment('2') == 'pengaturan') { echo "active" ;} ?>">
                            <a data-toggle="tab" href="#Page"><i class="notika-icon notika-menus"></i> Pengaturan</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?= base_url('mahasiswa/ganti_password') ?>"> Ganti Password </a>
                                </li>
                                <li>
                                    <a href="#"> | </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('mahasiswa/logout') ?>"> Logout </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>