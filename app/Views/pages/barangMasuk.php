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
            <h3>Data <?= $title2; ?></h3>
        </div>
        <div class="col">
            <a href="/BarangMasuk/tambahBarangMasuk" class="btn btn-tambah float-end fw-bold">+ Tambah Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table mt-3">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach ($barangmasuk as $b) : 
                    ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $b['id_barang']; ?></td>
                        <td><?= $b['tgl_masuk']; ?></td>
                        <td><?= $b['jml_masuk']; ?></td>
                        <td><?= $b['supplier']; ?></td>
                        <td>
                            <a href="/barangMasuk/detail/<?= $b['id_barang']; ?>"> <img src="/icon/detail.svg"
                                    alt="detail"></a>
                            <a href="/BarangMasuk/deleteBarangMasuk?id_barang=<?= $b['id_barang']; ?>"><img
                                    src="/icon/hapus.svg" alt="hapus" class="ms-3"></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Data <?= $title3; ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table mt-3">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Total Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach ($jmlbrg as $jml) : 
                    ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $jml['nama_barang']; ?></td>
                        <td><?= $jml['total_barang']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>