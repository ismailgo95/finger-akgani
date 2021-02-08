<?php
include "./config/koneksi.php";

if (isset($_POST['btnSimpan'])) {
  $nama         = $_POST['nama'];
  $nip          = $_POST['nip'];
  $jabatan      = $_POST['jabatan'];
  $keterangan   = $_POST['keterangan'];

  $query = mysqli_query($koneksi, "INSERT INTO anggota(nama,nip,jabatan,keterangan) VALUES ('$nama','$nip','$jabatan','$keterangan')");

  if ($query) {
    header("Location:?pages=dataPersonal&notif=berhasil-add");
  } else {
    header("Location:?pages=dataPersonal&notif=gagal-add");
  }
}
