<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="box-1">
                <h3>Dashboard Admin</h3>
            </div>
        </div>
    </div>
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success mt-2" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Data <?= $title1; ?></h3>
        </div>
        <div class="col">
            <a href="/Supplier/tambahSupplier" class="btn btn-tambah float-end fw-bold">+ Tambah Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table mt-3">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Supplier</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Alamat Supplier</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach ($supplier as $s) : 
                    ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $s['id_supplier']; ?></td>
                        <td><?= $s['nama_supplier']; ?></td>
                        <td><?= $s['alamat_supplier']; ?></td>
                        <td><?= $s['telp_supplier']; ?></td>
                        <td>
                            <a href="/supplier/detail/<?= $s['id_supplier']; ?>"> <img src="/icon/detail.svg"
                                    alt="detail"></a>
                            <a href="/supplier/edit/<?= $s['id_supplier']; ?>"><img src="/icon/edit.svg" alt="edit"></a>
                            <a href="/Supplier/deleteSupplier?id_supplier=<?= $s['id_supplier']; ?>"><img
                                    src="/icon/hapus.svg" alt="hapus"></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>