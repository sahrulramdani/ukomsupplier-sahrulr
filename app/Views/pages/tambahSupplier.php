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
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-danger mt-2" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <form action="/Supplier/saveSupplier" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Nama Supplier</div>
            <div class="col-sm-8">
                <input type="text" class="form-control shadow" name="nama_supplier" id="nama_supplier">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Alamat Supplier</div>
            <div class="col-sm-8">
                <input type="text" class="form-control shadow" name="alamat_supplier" id="alamat_supplier">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Nomor Telepon</div>
            <div class="col-sm-8">
                <input type="text" class="form-control shadow" name="telp_supplier" id="telp_supplier">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Foto</div>
            <div class="col-sm-8">
                <input type="file" class="form-control shadow" name="foto" id="foto" for="foto">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-8"><a href="/Supplier/index"
                    class="btn btn-secondary float-end color-1 fw-bold">Keluar</a>
            </div>
            <div class="col-sm-4"><button type="submit" class="btn bgcolor-1 color-1 fw-bold"
                    value="simpan">Simpan</button>
                </qdiv>
            </div>
    </form>
</div>

<?= $this->endSection(); ?>