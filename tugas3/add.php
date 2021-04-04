<!DOCTYPE html>
<html>
    <head>
        <title>TAMBAH DATA</title> <!--untuk judul header browser-->
        <link rel="stylesheet" href="style.css"> <!--memanggil file css untuk style-->
    </head>
    <body> 
        <h1>WEBSITE DATA PEGAWAI</h1> <!--memberikan teks-->
        <h4>oleh. Ajeng Laras Wangi </h4> <!--memberikan teks-->
        <section>
        <a href="index.php" class="menu">BERANDA</a> || <!--menu beranda-->
        <a href="add.php" class="menu">TAMBAH DATA</a> <!--menu tambah data-->
        <h2>FORM TAMBAH DATA</h2>
        <form action="" method="POST"> <!--membuat form untuk tambah data-->
            <table>
                <tr>
                    <td>ID Pegawai </td> <!--inputan id pegawai oleh user-->
                    <td><input type="text" name="id_pegawai"  placeholder="Masukkan ID Pegawai" /></td>
                </tr>
                <tr>
                    <td>Nama </td>  <!--inputan nama oleh user-->
                    <td><input type="text" name="nama"  placeholder="Masukkan Nama" /></td>
                </tr>
                <tr>
                    <td>No Telp</td>  <!--inputan no telp oleh user-->
                    <td> <input type="text" name="no_telp" placeholder="Masukkan No Telp"></td>
                </tr>   
                <tr>
                    <td>Alamat</td> <!--inputan alamat oleh user-->
                    <td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
                </tr>
                <tr>
                    <td>Departemen</td> <!--inputan departemen oleh user-->
                    <td><input type="text" name="departemen" placeholder="Masukkan Departemen"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="tambah" value="Tambah"> <!--button untuk submit data-->
                    <button type="reset" value="Reset">Reset</button> <!--button untuk reset data yang akan dimasukkan-->
                    </td>
                </tr>
            </table>
        </form>
        <?php 
            include "connect.php"; //memanggil file connect.php
            if(isset($_POST['tambah'])){ //jika button tambah ditekan maka akan memasukkan data ke database
            $id_pegawai = $_POST['id_pegawai']; //data inputan id pegawai
            $nama    = $_POST['nama']; //data inputan nama
            $no_telp = $_POST['no_telp']; //data inputan no telp
            $alamat  = $_POST['alamat']; //data inputan alamat
            $departemen  = $_POST['departemen']; //data inputan departemen
            //memberikan perintah query untuk memasukkan data ke database
            $querytambah = mysqli_query($koneksi, "INSERT INTO data_pegawai VALUES 
            ('$id_pegawai', '$nama', '$no_telp', '$alamat', '$departemen')") or die(mysqli_error()); 
            if($querytambah) { //jika tambah data berhasil
            header('location: index.php'); //maka akan menampilkan halaman index.php
            } else{ //jika gagal
            echo "Upss Something wrong.."; // maka akan menampilkan text something wrong
            }
            }
        ?>
        </section>
    </body>
</html>