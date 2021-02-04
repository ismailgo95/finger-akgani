<?php

if ($_GET) {
  $hal = $_GET['pages'];
  switch ($hal) {
    case '':
      include 'beranda.php';
      break;
    case 'beranda':
      include 'beranda.php';
      break;
    case 'daftarAnggota':
      include 'view/daftarAnggota.php';
      break;

    default:
      include 'error.php';
      break;
  }
} else {
  include 'beranda.php';
}
