<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['admin'] = 'admin/dasboard';
$route['manager'] = 'manager/dasboard_manager';
$route['karyawan'] = 'karyawan/dasboard';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
