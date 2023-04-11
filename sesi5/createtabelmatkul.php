<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){

        $tbel = "tbMATKUL";
        $sql = "CREATE TABLE $tbel(
            kodemk VARCHAR (8) PRIMARY KEY,
            matakuliah VARCHAR(50),
            sks INT
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