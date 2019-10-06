<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// CATEGORIES
$route['category']['get'] = 'categories/index';
$route['category']['post'] = 'categories/store';
$route['category/update/(:num)']['post'] = 'categories/update/$1';
$route['category/edit/(:num)']['get'] = 'categories/edit/$1';
$route['category/delete/(:num)']['post'] = 'categories/destroy/$1';


// SUPPLIERS
$route['supplier']['get'] = 'suppliers/index';
$route['supplier']['post'] = 'suppliers/store';
$route['supplier/update/(:num)']['post'] = 'suppliers/update/$1';
$route['supplier/edit/(:num)']['get'] = 'suppliers/edit/$1';
$route['supplier/delete/(:num)']['post'] = 'suppliers/destroy/$1';
