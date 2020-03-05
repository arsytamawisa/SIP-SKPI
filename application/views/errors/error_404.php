<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404 HTML Template by Colorlib</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/error_404/') ?>css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/error_404/') ?>css/style.css" />

</head>

<body>

	<div id="notfound">
		<div class="notfound-bg">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>Page Not Found</h2>
			<br>
			<a href="<?php 

			if( $this->uri->segment('1') == "mahasiswa") 
				{ 
					echo base_url('mahasiswa/form'); 
				}
			elseif ( $this->uri->segment('1') == "admin") 
				{
					echo base_url('admin/dashboard'); 
				}
			else 
				{ echo base_url('/'); } ?>"> Back to Homepage
			</a>
		</div>
	</div>

</body>

</html>
