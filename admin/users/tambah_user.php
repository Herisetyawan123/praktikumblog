            <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <label for="username">Username</nama>
                      <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                      <label for="password">Password</nama>
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                      <label for="nama-lengkap">Nama Lengkap</nama>
                      <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</nama>
                      <input type="text" name="email" class="form-control" placeholder="Email"/>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>

              </form>

            </div>


<?php

// kode untuk menyimpan menu ke database
if(isset($_POST['simpan'])){

    $simpan = tambah_user($koneksi, $_POST);

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Ditambah...')</script>";
        echo "<script>window.location = 'index.php?adm_p=users'</script>";
    } else {
        // gagal menyimpan
        echo "<script>alert('Gagal Ditambah...')</script>";
    }
}

?>
