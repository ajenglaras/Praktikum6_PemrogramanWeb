<!DOCTYPE html>
<html>
    <head>
        <title>DATA PEGAWAI</title> <!--untuk judul header browser-->
        <link rel="stylesheet" href="style.css"> <!--memanggil file css untuk style-->
    </head>
    <body>
        <h1>WEBSITE DATA PEGAWAI</h1> <!--memberikan teks-->
        <h4>oleh. Ajeng Laras Wangi </h4> <!--memberikan teks--> 
        <section>
        <a href="index.php" class="menu">BERANDA</a> || <!--menu beranda-->
        <a href="add.php" class="menu">TAMBAH DATA</a> <!--menu tambah data-->
        <br>
        <br>
        <form action="" method="POST"> <!--membuat form untuk menampilkan data-->
            <table border="1" cellspacing="0" cellpadding="4">
                <tr style="text-align:center;background-color:coral"> <!--style untuk menu-->
                    <td>ID Pegawai</td> <!--kolom id-->
                    <td>Nama</td> <!--kolom nama-->
                    <td>No Telp</td> <!--kolom no telp-->
                    <td>Alamat</td> <!--kolom alamat-->
                    <td>Departemen</td> <!--kolom departemen-->
                    <td>Aksi</td> <!--kolom untuk aksi-->
                </tr>
                <?php
                include "connect.php"; //memanggil file connect.php
                $query = mysqli_query($koneksi, "SELECT * FROM data_pegawai") or die (mysqli_error()); //memasukkan perintah query mysqli
                if(mysqli_num_rows($query) == 0){ //jika data kosong
                echo "<b>Tidak ada data yang tersedia</b>"; //maka akan menampilkan tidak ada data
                }else{ //jika tidak
                while($r = mysqli_fetch_array($query)):  //maka akan menampilkan data secara array   
                ?>
                <tr>
                    <td style="text-align:center"><?php echo $r['id_pegawai'] ?></td> <!--isi data pada kolom id_pegawai-->
                    <td><?php echo $r['nama'] ?></td>  <!--isi data pada kolom nama-->
                    <td><?php echo $r['no_telp'] ?></td> <!--isi data pada kolom no-telp-->
                    <td><?php echo $r['alamat'] ?></td> <!--isi data pada kolom alamat-->
                    <td><?php echo $r['departemen'] ?></td> <!--isi data pada kolom departemen-->
                    <td>
                        <a href="edit.php?id_pegawai=<?php echo $r['id_pegawai'] ?>">Edit</a> || <!--tombol edit-->
                        <a href="delete.php?id_pegawai=<?php echo $r['id_pegawai'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>
                        Hapus</a> <!--tombol hapus-->
                    </td>
                </tr>
                <?php
                endwhile;
                }
                ?>
            </table>
        </form>
        </section>
    </body>
</html>