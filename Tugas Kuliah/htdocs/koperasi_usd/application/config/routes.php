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

//route data supplier
$route['supplier'] = 'data_supplier/index';
$route['supplier/(:any)'] = 'data_supplier/edit_supplier/$1';
$route['ajax_supplier'] = 'data_supplier/ajax_supplier';
$route['tambah_supplier'] = 'data_supplier/tambah_supplier';
$route['hapus_supplier'] = 'data_supplier/hapus_data';

//route data pembelian barang
$route['data_pembelian'] = 'pembelian/index';
$route['tambah_pembelian'] = 'pembelian/tambah_data';
$route['hapus_pembelian'] = 'pembelian/hapus_data';
$route['data_pembelian/(:any)'] = 'pembelian/detail_pembelian/$1';
$route['edit_pembelian'] = 'pembelian/edit_pembelian';
$route['edit_pembelian/(:any)'] = 'pembelian/edit_pembelian/$1';
$route['tambah_cart'] = 'pembelian/tambah_cart';
$route['get_item'] = 'pembelian/get_item';
$route['update_cart'] = 'pembelian/update_cart';
$route['remove_item'] = 'pembelian/remove_item';
$route['ajax_pembelian'] = 'pembelian/ajax_pembelian';

//route data penjualan barang
$route['data_penjualan'] = 'penjualan/index';
$route['data_penjualan/(:any)'] = 'penjualan/detail_penjualan/$1';
$route['tambah_penjualan'] = 'penjualan/tambah_data';
$route['ajax_penjualan'] = 'penjualan/ajax_penjualan';
$route['cari_barang_penjualan'] = 'penjualan/cari_barang_penjualan';
$route['tambah_cart_penjualan'] = 'penjualan/tambah_cart_penjualan';
$route['hapus_item_penjualan'] = 'penjualan/hapus_cart_penjualan';
$route['get_item_penjualan'] = 'penjualan/get_item_penjualan';
$route['get_item_penjualan/(:any)'] = 'penjualan/get_item_penjualan/$1';
$route['update_cart_penjualan'] = 'penjualan/update_cart_penjualan';
$route['hapus_penjualan'] = 'penjualan/hapus_penjualan';
$route['edit_penjualan'] = 'penjualan/edit_penjualan';
$route['edit_penjualan/(:any)'] = 'penjualan/edit_penjualan/$1';

//route data laporan
$route['stok_harian'] = 'laporan/data_stok_harian';
$route['stok_harian/(:any)'] = 'laporan/cetak_stok_harian/$1';
$route['stok_bulanan'] = 'laporan/data_stok_bulanan';
$route['stok_bulanan/(:any)'] = 'laporan/cetak_stok_bulanan/$1';
$route['stok_tahunan'] = 'laporan/data_stok_tahunan';
$route['stok_tahunan/(:any)'] = 'laporan/cetak_stok_tahunan/$1';
$route['pembelian_harian'] = 'laporan/data_pembelian_harian';
$route['pembelian_harian/(:any)'] = 'laporan/cetak_pembelian_harian/$1';
$route['pembelian_bulanan'] = 'laporan/data_pembelian_bulanan';
$route['pembelian_bulanan/(:any)'] = 'laporan/cetak_pembelian_bulanan/$1';
$route['penjualan_harian'] = 'laporan/data_penjualan_harian';
$route['penjualan_harian/(:any)'] = 'laporan/cetak_penjualan_harian/$1';
$route['penjualan_bulanan'] = 'laporan/data_penjualan_bulanan';
$route['penjualan_bulanan/(:any)'] = 'laporan/cetak_penjualan_bulanan/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
