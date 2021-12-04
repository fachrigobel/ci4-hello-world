<?= $this->extend('layouts/main-layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="col">
        <div class="row-3 my-3">
            <a href="/add" class="btn btn-primary">Tambah Data</a>
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
</div>

<?= $this->endSection(); ?>