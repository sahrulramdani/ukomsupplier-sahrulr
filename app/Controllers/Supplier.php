<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    protected $supplierModel;
    
    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
    }

    public function index()
    {
        $supplier = $this->supplierModel->findAll();
        
        $data = [
            'basetitle' => 'Halaman Dashboard',
            'title1' => 'Supplier',
            'supplier' => $supplier
        ];

        return view('pages/supplier', $data);
    }

    public function detailSupplier($id)
    {
        $supplier = $this->supplierModel->where(['id_supplier' => $id])->first();

        $data = [
            'basetitle' => 'Halaman Detail',
            'title1' => 'Detail Data Supplier',
            'supplier' => $supplier
        ];

        return view('pages/detailSupplier', $data);
    }

    public function tambahSupplier()
    {
        $data = [
            'basetitle' => 'Halaman Tambah Data',
            'title1' => 'Tambah Data Supplier'
        ];

        return view('pages/tambahSupplier', $data);
    }

    public function editSupplier($id)
    {
        $supplier = $this->supplierModel->where(['id_supplier' => $id])->first();

        $data = [
            'basetitle' => 'Halaman Edit Data',
            'title1' => 'Edit Data Supplier',
            'supplier' => $supplier
        ];

        return view('pages/editSupplier', $data);
    }

    public function saveSupplier()
    {
        if(!$this->validate([
            'nama_supplier'     => 'required',
            'alamat_supplier'   => 'required',
            'telp_supplier'     => 'required',
        ])){

            session()->setFlashdata('pesan', 'Isi data dengan benar dan lengkap.');
            return redirect()->to('/Supplier/tambahSupplier');
        }

        $filefoto = $this->request->getFile('foto');
        $filefoto->move('upload');

        $foto = $filefoto->getName();

        //store function

        $newKodeSupplier = $this->supplierModel->getNewId();
        
        foreach ($newKodeSupplier as $newid);

        $data_post = [
            'id_supplier'       => $newid,
            'nama_supplier'     => $this->request->getVar('nama_supplier'),
            'alamat_supplier'   => $this->request->getVar('alamat_supplier'),
            'telp_supplier'     => $this->request->getVar('telp_supplier'),
            'foto'              => $foto
        ];

        $save = $this->supplierModel->save($data_post);
        if($save){
            session()->setFlashdata('pesan', 'Data Supplier Berhasil Ditambahkan.');
            //Input data berhasil
            return redirect()->to(base_url().'/supplier');
        }else{
            //Input data gagal
            echo "Data Gagal ditambah";
        }
    }

    public function updateSupplier()
    {
        $filefoto = $this->request->getFile('foto');

        if ($filefoto->getError() == 4) {
            $namafoto = $this->request->getVar('fotoLama');
            
        }else {
            $namafoto = $filefoto->getName();

            $filefoto->move('upload', $namafoto);

            unlink('upload/' . $this->request->getVar('fotoLama'));
        }

        $data_post = [
            'id_supplier'       => $this->request->getVar('id_supplier'),
            'nama_supplier'     => $this->request->getVar('nama_supplier'),
            'alamat_supplier'   => $this->request->getVar('alamat_supplier'),
            'telp_supplier'     => $this->request->getVar('telp_supplier'),
            'foto'              => $namafoto
        ];
        $save = $this->supplierModel->save($data_post);
        if($save){
            session()->setFlashdata('pesan', 'Data Supplier Berhasil Diedit.');
            //Input data berhasil
            return redirect()->to(base_url().'/supplier');
        }else{
            //Input data gagal
            echo "Data Gagal diedit";
        }
    }

    public function deleteSupplier()
    {
        $id_supplier = $_GET['id_supplier'];
        $supplier = $this->supplierModel->find($id_supplier);
        $hapus = $this->supplierModel->delete($id_supplier);

        unlink('upload/' . $supplier['foto']);
        
        if($hapus){
            session()->setFlashdata('pesan', 'Data Supplier Berhasil Dihapus.');
            //Input data berhasil
            return redirect()->to(base_url().'/supplier');
        }else{
            //Input data gagal
            echo "Data Gagal dihapus";
        }
    }
}