<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">User <a class="btn btn-success pull-right" href="?adm_p=users&action=tambah"><i class="fa fa-plus-circle fa-lg"></i> Buat user</a></h1>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php

        // ambil data user dari database
        $query = mysqli_query($koneksi, "SELECT * FROM user");

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data['username']."</td>";
            echo "<td>".$data['password']."</td>";
            echo "<td>".$data['nama_lengkap']."</td>";
            echo "<td>".$data['email']."</td>";
            echo "<td><a href='?adm_p=users&action=edit&id=".$data['id']."' class='btn btn-info' /><i class='fa fa-edit'></i></a>
            <a href='?adm_p=users&action=hapus&id=".$data['id']."' class='btn btn-danger' onclick='confirm(\"Apakah Anda yakin ?\")'/><i class='fa fa-trash'></i></a></td>";
            echo "</tr>";
        }

        ?>

      </tbody>
    </table>
  </div>
</div>
