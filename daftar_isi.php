            <div class="container wrap" style="background-color: #e2dfdf;">
                <div class="row">
                    <div class="col-md-12">

                        <!-- ARTIKEL ------------------->
                        <?php

                            $query = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY tanggal DESC");
                            $i = 1;

                            // looping Artikel
                            echo "<div class='list-group'>";
                            while($artikel = mysqli_fetch_array($query)){

                                echo "<a class='list-group-item' href='artikel.php?id=".$artikel['id']."'>$i. <b>".$artikel['judul']."</b><span class='badge'>".$artikel['tanggal']."</span></a>";
                                $i++;
                            }
                            echo "</div>";
                        ?>
                        <!-- END ARTIKEL --------------->
                    </div>
                </div>
            </div>