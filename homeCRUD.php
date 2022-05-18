<!DOCTYPE HTML>
<html>
    <head>
        <title>Toko Buku Siplah</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="topnav">
            <p id="top-header"><i>Toko Buku Siplah</i></p>
            <a href="loginForm.php" action="loginForm.php">Login</a>
            <a class="active" href="#home">Home</a>
        </div>
        <h1>Selamat Datang</h1>
        <form action="search.php">
            Cari Buku:
            <input type="text" name="carinama">
            <input type="submit" value="Search">
        </form>
        <br>
        <table>
            <tr>
                <th> Id Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Detail </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
                <tr>
                    <td><?php echo $row["id_buku"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["pengarang"]; ?></td>
                    <td>
                        <a href="detailPage.php?id_buku=<?php echo $row["id_buku"];?>">
                        <button>Detail</button> </a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>           
        </table>
        <div class="fixed">
                <footer>
                    Since 2022 &copy; Siplah
                </footer>
        </div>
    </body>
</html>




