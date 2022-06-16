<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Main';
// $route['admin'] = 'admin/login';
// $route['Main/products'] = 'products';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['stamp_duty_assistant'] = 'Main/stamp_duty_assistant';
$route['blog'] = 'Main/blog';
$route['resultdisplay'] = 'Main/resultdisplay';
$route['insolvency_quiz'] = 'Main/insolvency_quiz';
$route['blogdetails/(:any)/(:any)'] = 'Main/blogview/$1/$2';
