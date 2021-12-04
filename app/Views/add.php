<?= $this->extend('layouts/main-layout'); ?>
<?= $this->section('content'); ?>
<form method="POST" action="/add">
    <div class="mb-3">
        <label for="first-name" class="form-label">Nama Depan</label>
        <input type="text" class="form-control" id="first-name" name="first-name">
    </div>
    <div class="mb-3">
        <label for="last-name" class="form-label">Nama Belakang</label>
        <input type="text" class="form-control" id="last-name" name="last-name">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
<?= $this->endSection(); ?>