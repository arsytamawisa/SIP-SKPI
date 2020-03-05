<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Surat Keterangan Pendamping Ijazah</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/template/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/vendor/animate/animate.css">	
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/vendor/select2/select2.min.css">	
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/css/util.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/template/login/css/main.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url('/') ?>">UTY</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href=" <?= base_url('/#informasi') ?> ">Informasi <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- SweetAlert -->
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('login') ?>"></div>

	<div class="limiter" style="padding-top:10px">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form flex-sb flex-w" method="post" action="<?= base_url('login/proses') ?>">
					<span class="login100-form-title p-b-32" style="text-align:center"> LOGIN </span>

					<span class="txt1 p-b-11"> Username </span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" autocomplete="off" name="username" value="<?php if(isset($_COOKIE['loginUsername'])){echo $_COOKIE['loginUsername'];}?>">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11"> Password </span>
					<div class="wrap-input100 m-b-30">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" autocomplete="off" name="password" value="<?php if(isset($_COOKIE['loginPassword'])){echo $_COOKIE['loginPassword'];}?>">
						<span class="focus-input100"></span>
					</div>
					
<!-- 					<span class="txt1 p-b-11"> Hasil Penjumlahan dari <?= $soal ?> = </span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" autocomplete="off" name="hasil" value="<?= $hasil ?>">
						<input class="input100" type="text" autocomplete="off" value="<?= $hasil ?>" name="hasil_benar" hidden>
						<span class="focus-input100"></span>
					</div> -->

					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" <?php if(isset($_COOKIE['loginUsername'])){echo "checked";} ?>>
							<label class="label-checkbox100" for="ckb1"> Ingat saya </label>
						</div>
<!-- 						<div>
							<a href="<?= base_url('lupa_password') ?>" class="txt3"> Lupa password? </a>
						</div> -->
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn w-full"> Login </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

	<script src="<?= base_url() ?>assets/template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/template/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= base_url() ?>assets/template/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/template/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/template/login/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>assets/template/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/template/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url() ?>assets/template/login/js/main.js"></script>
	<script src="<?= base_url('assets/template/form/') ?>js/sweetalert2.all.min.js"></script>

	<script>
		const flashData = $('.flash-data').data('flashdata');
		if(flashData)
		{
			Swal.fire({
				icon: 'error',
				title: 'Login Gagal',
				text: 'Username atau password salah',
				confirmButtonColor: '#d9534f',
				confirmButtonText: 'Tutup'
			});
		}
	</script>

</body>
</html>