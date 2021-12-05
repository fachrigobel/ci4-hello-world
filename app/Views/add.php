<?= $this->extend('layouts/main-layout'); ?>
<?= $this->section('content'); ?>
<div class="container container-main">
    <div class="row">
        <div class="col-6">
            <form method="POST" action="/add" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="first-name" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="first-name" name="first-name">
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="last-name" name="last-name">
                </div>
                <div class="mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo-profile" name="photo-profile">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>