<?php include 'data/function.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">	
    <title>Calon Programmer</title>
    <link rel="icon" href="assets/img/profile.jpg" />
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css" /> -->
    <link rel="stylesheet" href="assets/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
</head>
<body>

	<!-- Header -->
	<header>
		<?php include 'header.php'; ?>
	</header>

	<!-- Menu -->
    <nav class="navbar navbar-default">
    	<?php include("menu.php"); ?> 
   	</nav>

   	<!-- Isi / Content -->
    <div class="isi">
    	<?php 
 
    	if (isset($_GET["page"])) {
    		if ($_GET['page'] == "artikel") {
    			include 'artikel.php';
    		}elseif ($_GET['page'] == "about") {
    			include 'about.php';
    		}elseif ($_GET['page'] == "daftar-isi") {
                include 'daftar_isi.php';
            }else{
    			include '404.php';
    		}
    	}elseif (!isset($_GET['page'])) {
    		include 'isi.php';   		
    	}
    	?>
    </div>

    <!-- Footer -->
    <footer>
    	<?php include 'footer.php'; ?>
    </footer>
</body>
</html>