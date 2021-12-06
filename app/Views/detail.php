<?= $this->extend('layouts/main-layout'); ?>

<?= $this->section('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Profile Information</h1>
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
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->

        <div class="card">
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="/img/<?= $penduduk['photo_profile']; ?>" alt="User profile picture">
                </div>

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
                  <?php if ($penduduk['gender'] == 'male') : ?>
                    <div class="mb-3">
                      <label for="last-name" class="form-label">Jenis Kelamin</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male" checked>
                        <label class="form-check-label" for="gender-male">Pria</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female">
                        <label class="form-check-label" for="gender-female">Wanita</label>
                      </div>
                    </div>
                  <?php else : ?>
                    <div class="mb-3">
                      <label for="last-name" class="form-label">Jenis Kelamin</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male">
                        <label class="form-check-label" for="gender-male">Pria</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female" checked>
                        <label class="form-check-label" for="gender-female">Wanita</label>
                      </div>
                    </div>
                  <?php endif; ?>
                  <div class="mb-3 ">
                    <button type="submit" class="btn btn-primary w-100" onclick="return confirm('Apakah Anda Yakin?');">Update Data</button>
                  </div>
                </form>
                <form action="/delete" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" id="id" name="id" value="<?= $penduduk['id']; ?>">
                  <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Apakah Anda Yakin?');">Delete Data</button>
                </form>
              </div>
              <!-- /.card-body -->
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