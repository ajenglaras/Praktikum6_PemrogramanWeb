<?php
//identifikasi server database
$servername = "localhost";
$username = "root";
$password = "";
//untuk koneksi ke database mysqli
$conn = mysqli_connect($servername, $username, $password);
//untuk cek koneksi mysqli
if (!$conn) { //jika koneksi gagal 
die("Connection failed: " . mysqli_connect_error()); //maka akan memunculkan text eror
}
//untuk membuat database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) { //jika database berhasil dibuat 
echo "Database created successfully"; //maka akan memunculkan text successfully
} else {//jika database gagal dibuat 
echo "Error creating database: " . mysqli_error($conn); //maka akan memunculkan text eror
}
mysqli_close($conn); //menutup database mysqli
?>