<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/transaksi', 'TransaksiController::index');
$routes->post('/transaksi/simpan', 'TransaksiController::simpan');
$routes->get('/transaksi/tampil', 'TransaksiController::tampil');
$routes->get('/transaksi/hapus', 'TransaksiController::hapus');



