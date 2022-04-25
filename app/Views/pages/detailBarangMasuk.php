<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="box-1">
                <h3>Dashboard Admin</h3>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3><?= $title1; ?></h3>
        </div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Id Barang</div>
        <div class="col-sm-8"><?= $barang['id_barang'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Tanggal Masuk</div>
        <div class="col-sm-8"><?= $barang['tgl_masuk'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Jumlah Masuk</div>
        <div class="col-sm-8"><?= $barang['jml_masuk'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Supplier</div>
        <div class="col-sm-8"><?= $barang['supplier'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4"></div>
        <div class="col-sm-8"><a href="/barangMasuk" class="btn btn-secondary color-1 fw-bold">Keluar</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>