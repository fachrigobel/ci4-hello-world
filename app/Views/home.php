<?= $this->extend('layouts/main-layout'); ?>

<?= $this->section('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div>
      <!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Kelola Data Penduduk</li>
        </ol>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $jumlahPenduduk ?></h3>

            <p>Jumlah Data Penduduk</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $pendudukPria; ?></h3>

            <p>Jumlah Penduduk Pria</p>
          </div>
          <div class="icon">
            <i class="fa fa-male"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $pendudukWanita; ?></h3>

            <p>Jumlah Penduduk Wanita</p>
          </div>
          <div class="icon">
            <i class="fa fa-female"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <div class="col-6">
        <div class="small-box">
          <form method="POST" action="">
            <div class="input-group">
              <input type="search" class="form-control form-control-lg" placeholder="Cari Data Penduduk..." name="keyword" id="keyword">
              <div class="input-group-append">
                <button class="btn btn-lg btn-default" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->

        <div class="card">
          <div class="card-header">
            <div class="card-tools">
              <div class="row">
                <div class="col">
                  <a href="/add" class="btn btn-primary">Tambah Data</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $index = 1 + (5 * ($currentPage - 1)); ?>
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
          <div class="card-footer">
            <div class="card-tools">
              <?= $pager->links('penduduk', 'my_pagination'); ?>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.Left col -->
    </div>
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
  </div>
  <!-- /.row (main row) -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>