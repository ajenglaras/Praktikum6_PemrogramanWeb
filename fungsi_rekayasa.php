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
die("Connection failed: ". mysqli_connect_error());  //maka akan memunculkan text eror
}
//untuk memberi perintah pada database
$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('jer', 'jerman', '4')";
if (mysqli_query($conn, $sql)) { //jika query berhasil
echo "New record created successfully"; //maka akan memunculkan text successfully
} else { //jika query eror
echo "Error: " . $sql . "<br>". mysqli_error($conn); //maka akan memunculkan text eror
}
mysqli_close($conn); //menutup database mysqli
?>