<?php include '../data/function.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Web</title>
	<link rel="icon" href="../assets/img/profile.jpg" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min2.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/style-admin.css" />
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css" />
</head>
<body>
	<div class="container wrap">
		<div class="row login-pg">
			<div class="col-md-12">
				<div class="card transparent-card">
					<div class="card-header">
						<div class="card-title">
							<h3>Sign In</h3>
						</div>
					</div>
					<div class="card-body">
						<form class="login" action="" method="post">
		                      <div class="form-group">
		                        <label for="full-name">Full name</label>
		                        <input type="text" class="form-control" placeholder="Diko ardiansyah" name="full_name">
		                      </div>

		                      <div class="form-group">
		                        <label for="email">Email</label>
		                        <input type="email" class="form-control" placeholder="Diko@tanos.com" name="email">
		                      </div>

		                      <div class="form-group">
		                        <label for="username">Username</label>
		                        <input type="text" class="form-control" placeholder="Diko cs" name="username">
		                      </div>
							
		                      <div class="form-group">
		                        <label for="Password">Password</label>
		                        <input type="password" class="form-control" placeholder="****" name="password">
		                      </div>
							
							  <input type="submit" name="button" class="btn btn-primary" value="Sign Up">
								
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


<?php 

if (isset($_POST['button'])) {
	if(tambah_user($koneksi, $_POST)){
		echo "<script>alert('Berhasil Ditambah...')</script>";
		echo "<script>window.location = 'login.php'</script>";
	}else{
		echo "<script>alert('Gagal Ditambah...')</script>";
	}
}

 ?>