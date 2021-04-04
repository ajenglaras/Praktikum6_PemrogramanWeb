<html>
    <head>
        <title>Koneksi Database MYSQL</title> <!--untuk judul header browser-->
    </head>
    <body>
        <h1>Demo Koneksi database MYSQL</h1> <!--memberikan text judul-->
        <?php
        //untuk koneksi ke database mysqli
        $con = mysqli_connect("localhost","root","","coba");
        //untuk cek koneksi mysqli
        if (mysqli_connect_error()) { //jika koneksi gagal 
        echo "Failed to connect to MYSQL: ". mysqli_connect_error();//maka akan memunculkan text eror
        exit();
        }
        ?>
    </body>
</html>