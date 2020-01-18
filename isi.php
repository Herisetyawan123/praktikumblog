<div class="container wrap" style="background-color: #e2dfdf;">
	<div class="row">
		<div class="col-md-12">
                        <!-- ARTIKEL ------------------->
                        <?php


                            $query = fetch_artikel($koneksi);
                            // looping Artikel
                            while($artikel = mysqli_fetch_array($query)){
                                echo "<div class='artikel-kop'>";
                                echo "<h2><b>".$artikel['judul']."</b></h2>";
                                echo "<p class='artikel-tanggal'>Oleh <b>".$artikel['penulis']."</b>, pada ".$artikel['tanggal']."</p>";
                                echo "</div>";

                                echo "<div class='artikel-isi'>";
                                echo substr($artikel['isi'], 0, 255);
                                echo " [<a href='index.php?page=artikel&id=".$artikel['id']."' />Lanjut Baca...</a>]";
                                echo "</div><hr/>";

                            }

                        ?>
                        <!-- END ARTIKEL --------------->
		</div>
	</div>
</div>