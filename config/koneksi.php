<?php

$koneksi = mysqli_connect("localhost", "root", "123123123", "db_finger_gani");

// Check connection
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
