<?php

if (isset($_POST['btnHapus'])) {
  $Connect = fsockopen(IP_FP, PORT_FP, $errno, $errstr, 1);
  if ($Connect) {
    $id = $_POST['id'];
    $soap_request = "<DeleteUser><ArgComKey xsi:type=\"xsd:integer\">" . COMKEY . "</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">" . $id . "</PIN></Arg></DeleteUser>";
    $newLine = "\r\n";
    fputs($Connect, "POST /iWsService HTTP/1.0" . $newLine);
    fputs($Connect, "Content-Type: text/xml" . $newLine);
    fputs($Connect, "Content-Length: " . strlen($soap_request) . $newLine . $newLine);
    fputs($Connect, $soap_request . $newLine);
    $buffer = "";
    while ($Response = fgets($Connect, 1024)) {
      $buffer = $buffer . $Response;
    }

    $query =  mysqli_query($koneksi, "DELETE FROM anggota WHERE id='$id'");
    if ($query) {
      if ($query) {
        header("Location:?pages=finger-hapus&notif=berhasil-delete");
      } else {
        header("Location:?pages=finger-hapus&notif=gagal-delete");
      }
    }
    fclose($Connect);
  } else {
    echo "Konkesi Bermasalah";
  }
}
