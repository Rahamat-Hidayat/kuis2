<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect) {
        echo "Koneksi ke MySQL berhasil! <br>";
    } 
    else {
        echo "Koneksi ke MySQL gagal!". mysqli_connect_error();
    }

    $query = "INSERT into admin(username, password) VALUES 
    ('admin', '123');

    if(mysqli_query($connect, $query)) {

    } else {
        echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>