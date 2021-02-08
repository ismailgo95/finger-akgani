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
              <h3 class="card-title mt-2 ml-4 text-lg text-bold"> Daftar Anggota</h3>
              <a href="#" class="float-right btn btn-primary btn-icon-split" data-toggle="modal" data-target="#modal-default" id="btn_tambah">
                <span class="icon text-white">
                  <i class="fas fa-plus-square"></i>
                </span>
                <span class="text-white">
                  Tambah Data
                </span>
              </a>
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
                        <a class="btn btn-warning" href="#"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>
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


<!-- Modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="?pages=act-simpan">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" id="nip" placeholder="Masukan Nip">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukan Jabatan">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan Keterangan">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="btnSimpan" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>