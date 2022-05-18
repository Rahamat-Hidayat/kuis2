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

    $query = "INSERT into buku(id_buku, Judul, Pengarang, Penerbit, deskripsi) VALUES 
    ('9793062797', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka',
    'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan 
    oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 
    10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah 
    Muhammadiyah di Belitung yang penuh dengan keterbatasan'),

    ('9786027893412', 'Malin Kundang', 'Kak Yudi', 'Pustaka Sandro Jaya',
    'Malin Kundang adalah cerita rakyat yang berasal dari provinsi Sumatra Barat, Indonesia. 
    Legenda Malin Kundang berkisah tentang seorang anak yang durhaka pada ibunya 
    dan karena itu dikutuk menjadi batu. Cerita rakyat yang mirip juga dapat ditemukan 
    di negara-negara lain di Asia Tenggara'),

    ('9786027870413', 'Dia Adalah Dilanku Tahun 1990', 'Pidi Baiq', 'Pastel Books',
    'Dia adalah Dilanku Tahun 1990 edisi 1 berwarna biru muda dengan tokoh Dilan dan 
    sepeda motornya yang dijadikan covernya.  Nah, gambar Dilan yang menggunakan seragam 
    SMA dengan gaya yang sangat santai  yang terletak di Cover diilustrasikan sendiri  oleh 
    sang penulis Pidi Baiq. Gambar yang terdapat di cover menjadi ciri dari isi novel yang
    menggambarkan kehidupan remaja. Dibawah gambar Dilan tercantum quotes Pidi Baiq menambah 
    kesan menarik bagi sampulnya.')";

    if(mysqli_query($connect, $query)) {
        echo "Data baru berhasil ditambahkan!";
    } else {
        echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>