<?php
//identifikasi server database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
 //untuk koneksi ke database mysqli
$conn = mysqli_connect ($servername, $username, $password, $dbname);
//untuk cek koneksi mysqli
if (!$conn) { //jika koneksi gagal 
die("Connection failed: ". mysqli_connect_error()); //maka akan memunculkan text eror
}
 //untuk memberi perintah query pada database untuk membuat tabel baru
$sql = "CREATE TABLE buku_tamu(
    ID_BT INT(10)  AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI TEXT NOT NULL)";
if (mysqli_query($conn, $sql)) { //jika query berhasil
echo "Tabel berhasil dibuat"; //maka akan memunculkan text tabel berhasil dibuat
} else { //jika query eror
echo "Error: " . $sql . "<br>". mysqli_error($conn); //maka akan memunculkan text eror
}
mysqli_close($conn);  //menutup database mysqli
?>