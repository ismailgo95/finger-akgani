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
                <i class="fas fa-hospital-user"></i>
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


<!-- Tambah Modal -->
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
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" placeholder="Masukan Nip">
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" placeholder="Masukan Keterangan">
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

<!-- Update Modal -->
<?php
$query = mysqli_query($koneksi, "SELECT * FROM anggota");
while ($data = mysqli_fetch_array($query)) { ?>
  <div class="modal fade" id="modal-update<?= $data['id'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Anggota <?= $data['id'] ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="?pages=act-update">
          <div class="modal-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="form-group">
              <label>NIP</label>
              <input type="text" name="nip" class="form-control" placeholder="Masukan Nip" value="<?= $data['nip'] ?>">
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" value="<?= $data['jabatan'] ?>">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" class="form-control" placeholder="Masukan Keterangan" value="<?= $data['keterangan'] ?>">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="btnUpdate" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>