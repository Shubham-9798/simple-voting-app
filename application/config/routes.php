<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/login/(:any)'] = 'admin/login/$1';
$route['admin/index'] = 'admin/index/$1';

$route['home/(:any)'] = 'home/$1';
$route['home/index'] = 'home/index/$1';

$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
