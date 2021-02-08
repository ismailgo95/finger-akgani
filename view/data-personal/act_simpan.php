<?php
include "./config/koneksi.php";

if (isset($_POST['submit'])) {
  $nama         = $_POST['nama'];
  $nip          = $_POST['nip'];
  $jabatan      = $_POST['jabatan'];
  $keterangan   = $_POST['keterangan'];

  $query = mysqli_query($koneksi, "INSERT INTO anggota(nama,nip,jabatan,keterangan) VALUES ('$nama','$nip','$jabatan','$keterangan')");

  if ($query) {
    header("Location:?page=jenis&notif=berhasil-add");
  } else {
    header("Location:?page=jenis&notif=gagal-add");
  }
}
