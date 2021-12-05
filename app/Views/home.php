<?= $this->extend('layouts/main-layout'); ?>
<?= $this->section('content'); ?>

<div class="container container-main">
    <div class="row">
        <div class="col-2">
            <div class="row">
                <a href="/add" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="col-4">
            <form method="POST" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data Penduduk..." name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $index = 1; ?>
                <?php foreach ($dataPenduduk as $penduduk) : ?>
                    <tr>
                        <th scope="row"><?= $index; ?></th>
                        <td><?= $penduduk['first_name']; ?></td>
                        <td><?= $penduduk['last_name']; ?></td>
                        <td><a href="/detail/<?= $penduduk['id']; ?>" class="btn btn-outline-info">Details</a></td>
                    </tr>
                    <?php $index++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>