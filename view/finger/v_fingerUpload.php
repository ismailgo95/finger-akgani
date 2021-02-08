<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <?php
          if (isset($_GET['notif'])) {
            include 'notif.php';
          } ?>
          <!-- general form elements -->
          <div class="card card-light mt-4">
            <div class="card-header">
              <span class="card-title mt-2">
                <i class="fas fa-bars"></i>
              </span>
              <h3 class="card-title mt-2 ml-4 text-lg text-bold"> Upload Ke Mesin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
              <table class="table table-bordered table-hover" id="datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM anggota");
                  while ($data = mysqli_fetch_array($query)) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['nip'] ?></td>
                      <td><?= $data['jabatan'] ?></td>
                      <td><?= $data['keterangan'] ?></td>
                      <td>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $data['id'] ?>" href=""><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger" href="?pages=act-hapus&id=<?= $data['id'] ?>"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">

            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>