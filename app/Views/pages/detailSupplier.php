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
        <div class="col-sm-4">Id Supplier</div>
        <div class="col-sm-8"><?= $supplier['id_supplier'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Nama Supplier</div>
        <div class="col-sm-8"><?= $supplier['nama_supplier'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Alamat Supplier</div>
        <div class="col-sm-8"><?= $supplier['alamat_supplier'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Nomor Telepon</div>
        <div class="col-sm-8"><?= $supplier['telp_supplier'];?></div>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4">Foto</div>
        <?php
            if ($supplier['foto']==NULL) {
                ?>
        <div class="col-sm-8">Tidak ada Foto</div>
        <?php
            } else{
                ?>
        <div class="col-sm-8"><img src="/upload/<?= $supplier['foto'];?>" alt="foto" width="200"></div>
        <?php
            }
        ?>
    </div>
    <div class="row mt-4 fw-bold">
        <div class="col-sm-4"></div>
        <div class="col-sm-8"><a href="/supplier" class="btn btn-secondary color-1 fw-bold">Kembali</a></div>
    </div>
</div>

<?= $this->endSection(); ?>