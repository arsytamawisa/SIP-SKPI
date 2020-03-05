<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] 	= array();
$autoload['libraries'] 	= array('database','session','form_validation');
$autoload['drivers']	= array();
$autoload['helper'] 	= array('url','app','cookie','file','form');
$autoload['config']	 	= array();
$autoload['language'] 	= array();
$autoload['model'] 		= 
[
	'Mahasiswa_model',
	'Login_model',
	'Fakultas_model',
	'Program_studi_model',
	'Kompetensi_model',
	'Perguruan_model',
	'Pengaturan_model',
	'Petugas_model',
	'Tahun_model'
];
