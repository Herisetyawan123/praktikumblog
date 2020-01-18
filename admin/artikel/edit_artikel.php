<?php


if(isset($_SESSION['username'])){

    if(isset($_GET['id']) && !empty($_GET['id'])){


        // ambil data dari database
        $id = $_GET["id"];
        $query = query_id($koneksi,"artikel", $id);
        if(mysqli_num_rows($query) > 0){
            $art = mysqli_fetch_array($query);
        } else {
            // artikel tidak ada di dabase
            echo "<script>window.location = 'index.php'</script>";
        }

?>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <input type="text" name="judul" class="form-control" placeholder="Judul artikel" value="<?php echo $art['judul']; ?>">
                  </div>
                  <div class="form-group">
                      <textarea name="isi" class="form-control" rows="16"><?php echo $art['isi']; ?></textarea>
                  </div>
                  <div class="form-group">

                      <input type="hidden" name="penulis" value="<?php echo $_SESSION['username'] ?>"/>

                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-send"></i> Ubah</button>
                  </div>

              </form>

            </div>



<?php

    } else {
        // arahkan ke halaman data artikel
    }

    // kode untuk mengupdate artikel ke database
    if(isset($_POST['simpan'])){

        $simpan = edit_artikel($koneksi, $_POST, $id);
        if($simpan) {
            // berhasil tersimpan, arahkan ke tabel data artikel
            echo "<script>window.location = 'index.php?adm_p=artikel'</script>";
                        echo "<script>alert('Berhasil menyimpan')</alert>";
        } else {
            // gagal menyimpan
            echo "<script>alert('Gagal menyimpan, suatu kesalahan terjadi!')</alert>";
        }
    }

} else {
    // suruh user login
    header('location: ../login.php');
}

?>
