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
    </div>
    <div class="row">
        <div class="col">
            <table class="table mt-3">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Jumlah Masuk</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach ($logbarang as $l) : 
                    ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $l['id_barang']; ?></td>
                        <td><?= $l['tgl_masuk']; ?></td>
                        <td><?= $l['jml_masuk']; ?></td>
                        <td><?= $l['supplier']; ?></td>
                        <td><?= $l['keterangan']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>