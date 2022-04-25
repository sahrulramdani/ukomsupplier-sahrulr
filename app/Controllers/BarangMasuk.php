<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangMasukModel;
use App\Models\BarangModel;
use App\Models\JumlahBarangModel;
use App\Models\SupplierModel;


class BarangMasuk extends BaseController
{
    protected $barangMasuk;
    protected $barangModel;
    protected $JumlahBarangModel;
    protected $supplierModel;

    public function __construct()
    {
        $this->barangMasuk = new BarangMasukModel();
        $this->barangModel = new BarangModel();
        $this->jmlbarang = new JumlahBarangModel();
        $this->supplierModel = new SupplierModel();
    }

    public function index()
    {
        $barangmasuk = $this->barangMasuk->findAll();
        $jmlbarang = $this->jmlbarang->findAll();

        $data = [
            'basetitle' => 'Halaman Dashboard',
            'title2' => 'Barang Masuk',
            'title3' => 'Jumlah Barang',
            'barangmasuk' => $barangmasuk,
            'jmlbrg' => $jmlbarang
        ];

        return view('pages/barangMasuk', $data);
    }

    public function detailBarangMasuk($id)
    {
        $barangmasuk = $this->barangMasuk->where(['id_barang' => $id])->first();
        
        $data = [
            'basetitle' => 'Halaman Detail',
            'title1' => 'Detail Data Barang Masuk',
            'barang' => $barangmasuk
        ];

        return view('pages/detailBarangMasuk', $data);
    }
    
    public function tambahBarangMasuk()
    {
        $supplier = $this->supplierModel->findAll();
        $namabarang = $this->barangModel->findAll();
        
        $data = [
            'basetitle' => 'Halaman Tambah Data',
            'title1' => 'Tambah Data Barang Masuk',
            'namabarang' => $namabarang,
            'supplier' => $supplier
        ];

        return view('pages/tambahBarangMasuk', $data);
    }

    public function saveBarangMasuk()
    {
    if(!$this->validate([
        'id_barang'       => 'required',
        'jml_masuk'   => 'required',
        'supplier'     => 'required'
    ])){

        session()->setFlashdata('pesan', 'Isi data dengan benar dan lengkap.');
        return redirect()->to('/barangMasuk/tambahBarangMasuk');
    }


    //Procedure tambahbarangmasuk
    $id_barang = $this->request->getVar('id_barang');
    $jml_masuk = intval($this->request->getVar('jml_masuk'));
    $supplier = $this->request->getVar('supplier');
        
            $this->barangMasuk->query("CALL tambahbarangmasuk('". $id_barang . "', '" . $supplier . "', '" . $jml_masuk . "');");
            
            session()->setFlashdata('pesan', 'Data Barang Masuk Berhasil Ditambahkan.');
            //Input data berhasil
            return redirect()->to(base_url().'/barangMasuk');

    }
    
    public function deleteBarangMasuk()
    {
        $id_barang = $_GET['id_barang'];
        $hapus = $this->barangMasuk->delete($id_barang);
        
        if($hapus){
            session()->setFlashdata('pesan', 'Data Barang Masuk Berhasil Dihapus.');
            //Input data berhasil
            return redirect()->to(base_url().'/barangMasuk');
        }else{
            //Input data gagal
            echo "Data Gagal dihapus";
        }
    }

}