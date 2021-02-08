<?php

if (isset($_POST['btnUpdate'])) {
  $id           = $_POST['id'];
  $nama         = $_POST['nama'];
  $nip          = $_POST['nip'];
  $jabatan      = $_POST['jabatan'];
  $keterangan   = $_POST['keterangan'];

  $query = mysqli_query($koneksi, "UPDATE anggota SET
  nama        = '$nama',
  nip         = '$nip',
  jabatan     = '$jabatan',
  keterangan  = '$keterangan' 
  WHERE id    = '$id'");

  if ($query) {
    header("Location:?pages=dataPersonal&notif=berhasil-edit");
  } else {
    header("Location:?pages=dataPersonal&notif=gagal-add");
  }
}
