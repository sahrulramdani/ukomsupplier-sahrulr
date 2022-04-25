<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogBarangModel;

class LogBarang extends BaseController
{
    protected $logBarang;

    public function __construct()
    {
        $this->logBarang = new LogBarangModel();
    }

    public function index()
    {
        $logbarang = $this->logBarang->findAll();

        $data = [
            'basetitle' => 'Halaman Log Barang',
            'title1' => 'Log Barang',
            'logbarang' => $logbarang
        ];

        return view('pages/logBarangMasuk', $data);
    }
}