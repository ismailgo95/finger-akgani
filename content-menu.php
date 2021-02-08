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
    case 'dataPersonal':
      include 'view/data-personal/v_dataPersonal.php';
      break;

    case 'act-simpan':
      include 'view/data-personal/act_simpan.php';
      break;
    case 'act-hapus';
      include 'view/data-personal/act-hapus.php';
      break;

    default:
      include 'error.php';
      break;
  }
} else {
  include 'beranda.php';
}
