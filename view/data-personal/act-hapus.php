<?php

$hapus = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$hapus'");
if ($query) {
  header("Location:?pages=dataPersonal&notif=berhasil-edit");
} else {
  header("Location:?pages=dataPersonal&notif=gagal-edit");
}
