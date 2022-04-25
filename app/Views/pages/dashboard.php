<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="ro">
        <div class="col">
            <h1 class="text-center">Selamat Datang</h1>
            <h2 class="text-center"><?= $user_login ?></h2>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>