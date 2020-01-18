<?php


if(isset($_SESSION['username'])){

    if(isset($_GET['id']) && !empty($_GET['id'])){


        // ambil data dari database
        $id = $_GET["id"];
        $query = query_id($koneksi,"user", $id);
        if(mysqli_num_rows($query) > 0){
            $art = mysqli_fetch_array($query);
        } else {
            // artikel tidak ada di dabase
            echo "<script>window.location = 'index.php'</script>";

        }

?>
            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <label for="username">Username</nama>
                      <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $art['username'] ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="password">Password</nama>
                      <input type="password" name="password" class="form-control" placeholder="Password" value="" required>
                  </div>
                  <div class="form-group">
                      <label for="nama-lengkap">Nama Lengkap</nama>
                      <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap" value="<?= $art['nama_lengkap'] ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</nama>
                      <input type="text" name="email" class="form-control" placeholder="Email" value="<?= $art['email'] ?>"/>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>

              </form>

            </div>
<?php

    } else {
        // arahkan ke halaman data artikel
    }

    // kode untuk mengupdate artikel ke database
    if(isset($_POST['simpan'])){
        $simpan = edit_user($koneksi, $_POST, $id);
        if($simpan) {
            // berhasil tersimpan, arahkan ke tabel data artikel
            echo "<script>window.location = 'index.php?adm_p=artikel'</script>";
            echo "<script>alert('Berhasil menyimpan')</alert>";
        } else {
            // gagal menyimpan
            echo "<script>alert('Gagal menyimpan, suatu kesalahan terjadi!');</alert>";
            echo "<script>window.location = 'index.php?adm_p=users'</script>";
        }
    }

} else {
    // suruh user login
    header('location: ../login.php');
}

?>
