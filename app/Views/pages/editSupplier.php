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
    <form action="/Supplier/updateSupplier" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Id Supplier</div>
            <div class="col-sm-8">
                <input type="text" class="form-control shadow" name="id_supplier" id="id_supplier"
                    value="<?= $supplier['id_supplier'] ?>">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Nama Supplier</div>
            <div class="col-sm-8">
                <input type="text" class="form-control shadow" name="nama_supplier" id="nama_supplier"
                    value="<?= $supplier['nama_supplier'] ?>">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Alamat Supplier</div>
            <div class="col-sm-8">
                <input type="text" class="form-control shadow" name="alamat_supplier" id="alamat_supplier"
                    value="<?= $supplier['alamat_supplier'] ?>">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Nomor Telepon</div>
            <div class="col-sm-8">
                <input type="tel" class="form-control shadow" name="telp_supplier" id="telp_supplier"
                    value="<?= $supplier['telp_supplier'] ?>">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Foto</div>
            <div class="col-sm-8">
                <input type="hidden" name="fotoLama" value="<?= $supplier['foto'] ?>">
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
                <input type="file" class="form-control shadow" name="foto" id="foto" for="foto">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-8">
                <a href="/supplier" class="btn btn-secondary float-end color-1 fw-bold">Kembali</a>
            </div>
            <div class="col-sm-4"><button type="submit" class="btn bgcolor-1 color-1 fw-bold">Simpan</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>