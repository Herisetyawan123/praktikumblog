<?php
include '../data/function.php';
session_start();

if(isset($_SESSION['username'])){
?>
<!-- Tampilkan halaman damin -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/profile.png">

    <title>Administrator Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

  </head>

  <body>

    <nav><?php include('navbar.php'); ?></nav>

    <div class="container-fluid">
      <div class="row">

      <?php if (isset($_GET['adm_p'])): ?>
        
        <?php if ($_GET['adm_p'] == "artikel"): ?>
          <aside>
              <?php $artikel = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
              <?php include('artikel/index.php'); ?>
          </section>
        <?php elseif($_GET['adm_p'] == "users"): ?>
          <aside>
              <?php $user = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
              <?php include('users/index.php'); ?>
          </section>
        <?php elseif($_GET['adm_p'] == "menu"): ?>       
          <aside>
              <?php $menu = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
              <?php include('menu/index.php'); ?>
          </section>
        <?php endif ?>
      <?php else: ?>
          <aside>
              <?php $home = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
              <?php include('home.php'); ?>
          </section> 
      <?php endif ?>


      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/holder.js"></script>
  </body>
</html>

<?php
} else {
    // suruh user login
    header('location: login.php');
}

?>
