<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// CATEGORIES
$route['category']['get'] = 'categories/index';
$route['category']['post'] = 'categories/store';




