<?php
//identifikasi server database
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db   = "dbpegawai";
//untuk koneksi ke database mysqli
 $koneksi = mysqli_connect($host, $user, $pass, $db);
 if(mysqli_connect_errno()){ //jika koneksi gagal 
  echo "Gagal Terhubung ".mysqli_connect_error(); //maka akan memunculkan text gagal terhubung
 }
 ?>