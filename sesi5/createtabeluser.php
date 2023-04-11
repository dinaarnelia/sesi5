<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){

        $tbel = "tbUSER";
        $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(30) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(20),
            paskey VARCHAR(255),
            iduser VARCHAR(255)
        )";
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "Pembuatan Tabel " . $tbel . "SUKSES";
         }else{
            echo "Pembuatan Tabel " . $tbel . "GAGAL";
         }
    }else{
        echo "Koneksi ke MySQL Gagal";
    }