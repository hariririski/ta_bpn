<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Redirect_controller';
// data
$route['home'] = 'Redirect_controller/home';
$route['logout'] = 'Redirect_controller/logout';
$route['login'] = 'Redirect_controller/login';
$route['data_pemohon'] = 'Redirect_controller/data_pemohon';
$route['detail_pemohon'] = 'Redirect_controller/detail_pemohon';
$route['data_warga_negara'] = 'Redirect_controller/data_warga_negara';
$route['data_tipe_pekerjaan'] = 'Redirect_controller/data_tipe_pekerjaan';
$route['data_kecamatan'] = 'Redirect_controller/data_kecamatan';
$route['data_desa'] = 'Redirect_controller/data_desa';
$route['data_admin'] = 'Redirect_controller/data_admin';
$route['grafik'] = 'Redirect_controller/grafik';

// edit
$route['edit_warga_negara'] = 'Redirect_controller/edit_warga_negara';
//$route['edit_pemohon'] = 'Redirect_controller/edit_warga_negara';
$route['edit_tanah'] = 'Redirect_controller/edit_tanah';
$route['edit_tipe_pekerjaan'] = 'Redirect_controller/edit_tipe_pekerjaan';
$route['edit_kecamatan'] = 'Redirect_controller/edit_kecamatan';
$route['edit_desa'] = 'Redirect_controller/edit_desa';
$route['edit_pemohon'] = 'Redirect_controller/edit_pemohon';
$route['edit_tanah'] = 'Redirect_controller/edit_tanah';


//tambah
$route['tambah_pemohon'] = 'Redirect_controller/tambah_pemohon';
$route['tambah_tanah'] = 'Redirect_controller/tambah_tanah';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
