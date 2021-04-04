<?php
//mengikutkan/memanggil file connect.php
include('connect.php');
$id_pegawai = $_GET['id_pegawai']; //menangkap id dan untuk mengeksekusi data sesuai yang diklik
$queryhapus = mysqli_query($koneksi, "DELETE FROM data_pegawai WHERE id_pegawai = $id_pegawai"); //mengahpus data yang dipilih
if($queryhapus){ //jika hapus berhasil
    header('location: index.php'); //maka akan masuk ke halaman index
}else{ //jika hapus gagal
    echo "Upss Something wrong.."; //maka akan memunculkan text something wrong
}
?>