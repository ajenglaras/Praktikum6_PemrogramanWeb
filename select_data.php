<!DOCTYPE html>
<html>
    <body>
        <?php
        //identifikasi server database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";
        //untuk koneksi ke database mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        //untuk cek koneksi mysqli
        if (!$conn) { //jika koneksi gagal 
            die("Connection failed: ". mysqli_connect_error()); //maka akan memunculkan text eror
        }
        //untuk memberi perintah pada database
        $sql = "SELECT kode, negara, champion FROM liga";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows ($result) > 0) {
            // output data setiap kolom
            while($row = mysqli_fetch_assoc($result)) { //menampilkan hasil query sebagai output
                echo "kode: " . $row ["kode"]. " - Negara: ". $row["negara"]. " ".$row["champion"]. "<br>";
            } 
        }
        else { //jika gagal
            echo "0 results"; //akan menampilkan 0 result
        }
        mysqli_close($conn);  //menutup database mysqli
        ?>
    </body>
</html>