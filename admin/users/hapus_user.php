<?php

    if(isset($_GET["id"]) && !empty($_GET['id'])){
        // hapus artikel
        $id = $_GET["id"];
        if(hapus_data_byId($koneksi, "user", $id)) {
            // arahkan ke data artikel
            echo "<script> alert('Berhasil hapus...')</script>";
            echo "<script> window.location = 'index.php'</script>";
        } else {
            // tampilkan pesan error
            die("Gaga menghapus: " . mysqli_error($koneksi));
        }

    } else {
        // arahkan ke data artikel
        header("location: index.php");
    }

?>
