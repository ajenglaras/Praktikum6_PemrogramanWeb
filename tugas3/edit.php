<!DOCTYPE html>
<html>
    <head>
        <title>EDIT DATA</title> <!--untuk judul header browser-->
        <link rel="stylesheet" href="style.css"> <!--memanggil file css untuk style-->
    </head>
    <body>
        <h1>WEBSITE DATA PEGAWAI</h1> <!--memberikan teks-->
        <h4>oleh. Ajeng Laras Wangi </h4> <!--memberikan teks-->
        <section>
        <a href="index.php" class="menu">BERANDA</a> || <!--menu beranda-->
        <a href="add.php" class="menu">TAMBAH DATA</a> <!--menu tambah data-->
        <h2>EDIT DATA</h2>
        <?php
            include "connect.php"; //memanggil file connect.php
            $id_pegawai = $_GET['id_pegawai']; //id pegawai = id pegawai yang diklik
            //memilih data sesuai dengan data yang diklik/ dipilih
            $query = mysqli_query($koneksi, "SELECT * FROM data_pegawai WHERE id_pegawai = '$id_pegawai'"); //memilih data sesuai dengan
            $res = mysqli_fetch_array($query); //res untuk memasukkan query
        ?>
        <form action="" method="POST"> <!--form untuk edit data-->
            <table>
                <tr>
                    <td>ID Pegawai </td> <!--data id pegawai-->
                    <td><input type="text" name="id_pegawai" value="<?php echo $res['id_pegawai'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama </td> <!--data nama-->
                    <td><input type="text" name="nama" value="<?php echo $res['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>No Telp</td> <!--data no telp-->
                    <td> <input type="text" name="no_telp"value="<?php echo $res['no_telp'] ?>"></td>
                </tr> 
                <tr>
                    <td>Alamat</td>  <!--data alamat-->
                    <td><input type="text" name="alamat" value="<?php echo $res['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>Departemen</td>  <!--data departemen-->
                    <td><input type="text" name="departemen" value="<?php echo $res['departemen'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" value="Edit">  <!--button input untuk edit -->
                    <button type="reset" value="Reset">Reset</button>  <!--button reset -->
                    </td>
                </tr>
            </table>
        </form>
        </section>
    </body>
</html>
<?php
    if(isset($_POST['edit'])){  //jika button edit ditekan maka akan mengubah data pada database
    $id_pegawai = $_POST['id_pegawai']; //data inputan id pegawai
    $nama    = $_POST['nama']; //data inputan nama
    $no_telp = $_POST['no_telp']; //data inputan no telp
    $alamat  = $_POST['alamat']; //data inputan alamat
    $departemen  = $_POST['departemen']; //data inputan departemen
    //memberikan perintah query untuk mengubah data pada database
    $queryupdate = mysqli_query($koneksi, "UPDATE data_pegawai SET  
    id_pegawai = '$id_pegawai', 
    nama    = '$nama',
    no_telp ='$no_telp',
    alamat  = '$alamat',
    departemen  = '$departemen'
    WHERE id_pegawai = $id_pegawai");

    if($queryupdate){ //jika ubah data berhasil 
        header('location: index.php'); //maka akan masuk ke halaman index.php
    }else{//jika gagal
        echo "Upss Something wrong.."; //maka akan menampilkan teks something wrong
    }
    }
?>
