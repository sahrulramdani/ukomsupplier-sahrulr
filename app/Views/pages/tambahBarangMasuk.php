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
    <form action="/barangMasuk/saveBarangMasuk" method="post">
        <?= csrf_field(); ?>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Id Barang</div>
            <div class="col-sm-8">
                <select class="form-select" id="id_barang" name="id_barang">
                    <?php foreach ($namabarang as $brg) : ?>
                    <option value="<?= $brg['id_barang'] ?>"><?= $brg['nama_barang']; ?> <?= $brg['spesifikasi']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Jumlah Masuk</div>
            <div class="col-sm-8">
                <input type="number" min="0" class="form-control shadow" name="jml_masuk" id="jml_masuk">
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-4">Supplier</div>
            <div class="col-sm-8">
                <select class="form-select" id="supplier" name="supplier">
                    <?php foreach ($supplier as $s) : ?>
                    <option value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row mt-4 fw-bold">
            <div class="col-sm-8"><a href="/barangMasuk" class="btn btn-secondary float-end color-1 fw-bold">Kembali</a>
            </div>
            <div class="col-sm-4"><button type="submit" class="btn bgcolor-1 color-1 fw-bold">Simpan</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>