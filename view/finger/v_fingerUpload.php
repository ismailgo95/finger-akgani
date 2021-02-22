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
                <i class="fas fa-upload"></i>
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
                  <form action="?pages=act-upload-finger" method="post">
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
                          <a class="btn btn-primary" href="" data-toggle="modal" data-target="#modal-update<?= $data['id'] ?>"> <i class="fas fa-upload"></i> Upload</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                  </form>
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

<!-- Update Modal -->
<?php
$query = mysqli_query($koneksi, "SELECT * FROM anggota");
while ($data = mysqli_fetch_array($query)) { ?>
  <div class="modal fade" id="modal-update<?= $data['id'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload ke Mesin</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="?pages=act-upload-finger">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></button>
            <button type="submit" name="btnUpload" class="btn btn-primary"><i class="fas fa-upload"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>