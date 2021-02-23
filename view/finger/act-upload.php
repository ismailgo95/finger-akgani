<?php

if (isset($_POST['btnUpload'])) {
  $Connect = fsockopen(IP_FP, PORT_FP, $errno, $errstr, 1);
  if ($Connect) {
    $id   = $_POST['id'];
    $nama  = $_POST['nama'];
    $soap_request = "<SetUserInfo><ArgComKey Xsi:type=\"xsd:integer\">" . COMKEY . "</ArgComKey><Arg><PIN>" . $id . "</PIN><Name>" . $nama . "</Name></Arg></SetUserInfo>";
    $newLine = "\r\n";
    fputs($Connect, "POST /iWsService HTTP/1.0" . $newLine);
    fputs($Connect, "Content-Type: text/xml" . $newLine);
    fputs($Connect, "Content-Length: " . strlen($soap_request) . $newLine . $newLine);
    fputs($Connect, $soap_request . $newLine);
    $buffer = "";
    while ($Response = fgets($Connect, 1024)) {
      $buffer = $buffer . $Response;
    }
    header("Location:?pages=finger&notif=berhasil-upload");
    fclose($Connect);
  } else {
    header("Location:?pages=finger&notif=koneksi");
  }
}
