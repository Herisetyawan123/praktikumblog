<?php

if(isset($_SESSION['username'])){


?>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <label for="nama">Nama Menu</nama>
                      <input type="text" name="nama" class="form-control" placeholder="Nama menu" required>
                  </div>
                  <div class="form-group">
                      <label for="url">URL</nama>
                      <input type="text" name="url" class="form-control" placeholder="Inputkan URL" required>
                  </div>
                  <div class="form-group">
                      <label for="urutan">Urutan</nama>
                      <input type="number" name="urutan" class="form-control" placeholder="Urutan" required>
                  </div>
                  <div class="form-group">
                      <label for="Status">Status</nama>
                      <select name="status" class="form-control">
                          <option value="1">Aktif</option>
                          <option value="0">Non-aktif</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>

              </form>

            </div>

<?php

// kode untuk menyimpan menu ke database
if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $url = $_POST['url'];
    $urutan = $_POST['urutan'];
    $status = $_POST['status'];

    // lakukan penyimpanan ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO menu (nama,url,urutan,status) VALUES('$nama','$url','$urutan','$status')");

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "Gagal menyimpan, suatu kesalahan terjadi!";
    }
}

} else {
    // suruh user login
    header('location: ../login.php');
}

?>
