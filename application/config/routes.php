<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$route['pages/(:any)'] = 'pages/$1';
$route['registerDb'] = "pages/registerDb/$1";

$route['register'] = "pages/register/$1";
$route['login'] = "pages/login/$1";
$route['vote']="pages/vote/$1";

$route['dashboard/signOut'] = "dashboard/signOut/$1";
$route['dashboard/(:any)'] = "dashborad/index/$1";

$route['pages/register'] = "pages/register/$1";
$route['pages/vote'] = "pages/vote/$1";
$route['pages/registerDb'] = "pages/registerDb/$1";
//$route['(:any)'] = "pages/register/$1";



$route['default_controller'] = 'home/index';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
