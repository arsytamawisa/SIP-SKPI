<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'home';
$route['404_override'] 			= 'home/error_404';
$route['home/error_404']		= 'error_404';
$route['translate_uri_dashes'] 	= FALSE;
