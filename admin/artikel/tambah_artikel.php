            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <input type="text" name="judul" class="form-control" placeholder="Judul artikel">
                  </div>
                  <div class="form-group">
                      <textarea name="isi" class="form-control" rows="16" placeholder="Tuliskan apa yang anda pikirkan"></textarea>
                  </div>
                  <div class="form-group">

                      <input type="hidden" name="penulis" value="<?php echo $_SESSION['username'] ?>"/>

                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-send"></i> Terbitkan</button>
                  </div>

              </form>


            </div>


<?php

// kode untuk menyimpan artikel ke database
if(isset($_POST['simpan'])){
    $judul = empty($_POST['judul']) ? "Tampa judul": $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];

    // lakukan penyimpanan ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO artikel (judul,isi,penulis) VALUES('$judul','$isi','$penulis')");

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        header("location: index.php?adm_p=artikel");
    } else {
        // gagal menyimpan
        echo "Gagal menyimpan, suatu kesalahan terjadi!";
    }
}



?>
