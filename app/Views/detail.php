<?= $this->extend('layouts/main-layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card" style="width: 18rem;">
        <img src="/img/Guest_theapplication_2906.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Biodata</h5>
            <div class="col">
                <form action="/update" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="mb-3">
                        <input type="hidden" id="id" name="id" value="<?= $penduduk['id']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="first-name" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="first-name" name="first-name" value="<?= $penduduk['first_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" value="<?= $penduduk['last_name']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin?');">Update</button>
                </form>
                <form action="/delete" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" id="id" name="id" value="<?= $penduduk['id']; ?>">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>