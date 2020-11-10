<?php 
	require 'functions.php';

	// code signup
	if (isset($_POST['submitsignup'])) {
		if (isset($_POST['namasignup']) && !empty($_POST['namasignup']) && isset($_POST['emailsignup']) && !empty($_POST['emailsignup']) && isset($_POST['passwordsignup']) && !empty($_POST['passwordsignup'])) {
			if (registrasi($_POST) > 0) {
				header("Location: file.php");
			} else {
				echo mysqli_error($conn);
			}
		} else {
			echo "<script>alert('Isi data dengan lengkap!')</script>";
		}
	}
	// akhir code signup

	// code login
	if (isset($_POST['submitlogin'])) {
		$e_login = $_POST['emaillogin'];
		$p_login = $_POST['passwordlogin'];
		$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$e_login'");

		// cek username
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			// cek password admin
			if ($row['email'] == 'admin') {
				if ($p_login == 'admin') {
					header("Location: file.php");
					exit;
				} else {
					echo "<script>alert('Password admin salah')</script>";
				}
			} else {
				// cek password user selain admin
				if (password_verify($p_login, $row["password"])) {
					header("Location: file.php");
					exit;
				} else {
					echo "<script>alert('email: $e_login | Password anda salah')</script>";
				}
			}
		} else {
			echo "<script>alert('email: $e_login tidak ditemukan')</script>";	
		}
	}
	// akhir code login

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>E-course ITC</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/bootstrap4/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		
		<!-- Pop up samping -->
		<div class="menu">
			<a href="#overlay">
				<img src="image/menu.png" alt="menu">
			</a>
		</div>

		<div class="overlay" id="overlay">
			<div class="close">
				<a href="#">X</a>
			</div>
		</div>
		
		<a class="navbar-brand" href="">ITC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a
					 class="nav-link" href="#">About</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="ourProduct" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our Product
					</a>
					<div class="dropdown-menu" aria-labelledby="ourProduct">
						<a class="dropdown-item" href="">Platinum</a>
						<a class="dropdown-item" href="">Gold</a>
						<a class="dropdown-item" href="">Reguler</a>
					</div>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="Material" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our Product
					</a>
					<div class="dropdown-menu" aria-labelledby="Material">
						<a class="dropdown-item" href="">SD</a>
						<a class="dropdown-item" href="">SMP</a>
						<a class="dropdown-item" href="">SMA</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="Exam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Exam
					</a>
					<div class="dropdown-menu" aria-labelledby="Exam">
						<a class="dropdown-item" href="">UTBK</a>
						<a class="dropdown-item" href="">UN</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">Live</a>
				</li>
			</ul>

			<div class="inline">
				<div class="">
					<li data-toggle="modal" data-target="#mylogin"><a href="#"><span class="border-right p-2">Login</a>
					<li data-toggle="modal" data-target="#mydaftar"><a href="#"><span class="p-2">Sign Up</a>
				</div>
			</div>
		</div>
	</nav>

	<!-- Pop up daftar -->
	<div id="mydaftar" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
		<div class="modal-content">
	    	<div class="modal-header">
	        	<h4 class="modal-title">Sign Up</h4>
	      	</div>
	<form action="" method="post">
	  <div class="modal-body">
		<div class="form-group">
	      <label for="fullnameSignup">Fullname</label>
	      <input type="text" name="namasignup" class="form-control" id="fullnameSignup" placeholder="Fullname" autocomplete="off">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Email address</label>
	      <input type="email" name="emailsignup" class="form-control" id="exampleInputEmail1" placeholder="Email" autocomplete="off">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Password</label>
	      <input type="password" name="passwordsignup" class="form-control" id="exampleInputPassword1" placeholder="Password">
	    </div>
	  </div>
	    <div class="modal-footer">
	    	<button type="submit" name="submitsignup" class="btn btn-success">Daftar</button>
	    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div>
	</form>
		</div>
	  </div>
	</div>
	<!-- Pop up daftar -->

	<!-- Pop up login -->
	<div id="mylogin" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title">Login</h4>
	      </div>
	<form action="" method="post">      
		<div class="modal-body">
		    <div class="form-group">
		      <label for="emailLogin">Email</label>
		      <input type="text" name="emaillogin" class="form-control" id="emailLogin" placeholder="Username" autocomplete="off" required="">
		    </div>
		    <div class="form-group">
		      <label for="exampleInputPassword2">Password</label>
		      <input type="password" name="passwordlogin" class="form-control" id="exampleInputPassword2" placeholder="Password" required="">
		    </div>
	    </div>
	      <div class="modal-footer">
	       <button type="submit" name="submitlogin" class="btn btn-success" >Login</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	</form>
	    </div>
	  </div>
	</div>
	<!-- End Pop up Login -->	

</body>
</html>
