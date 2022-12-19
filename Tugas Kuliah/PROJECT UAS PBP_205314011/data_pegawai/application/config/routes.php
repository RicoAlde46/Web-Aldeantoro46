<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['dashboard'] = 'home/dashboard';
$route['sign_out'] = 'home/sign_out';
$route['login'] = 'home';
$route['admin'] = 'home/profil_admin';
$route['profil'] = 'home/profil_pegawai';
$route['password'] = 'home/ganti_password';

//route data barang
$route['barang'] = 'data_barang/index';
$route['tambah_barang'] = 'data_barang/tambah_data';
$route['edit_barang'] = 'data_barang/edit_data';
$route['edit_barang/(:any)'] = 'data_barang/edit_data/$1';
$route['stok_barang'] = 'data_barang/stok';
$route['ajax_barang'] = 'data_barang/ajax_barang';
$route['ajax_stok_barang'] = 'data_barang/ajax_stok_barang';

//route data pegawai
$route['pegawai'] = 'data_pegawai/index';
$route['pegawai/(:any)'] = 'data_pegawai/detail_pegawai/$1';
$route['tambah_pegawai'] = 'data_pegawai/tambah_pegawai';
$route['edit_pegawai'] = 'data_pegawai/edit_data';
$route['edit_pegawai/(:any)'] = 'data_pegawai/edit_data/$1';
$route['ganti_password'] = 'data_pegawai/ganti_password';
$route['ajax_pegawai'] = 'data_pegawai/ajax_pegawai';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
