<?php 
session_start();

  require 'functions.php';

  // code signup
  if (isset($_POST['submitsignup'])) {
    if (isset($_POST['namasignup']) && !empty($_POST['namasignup']) && isset($_POST['emailsignup']) && !empty($_POST['emailsignup']) && isset($_POST['passwordsignup']) && !empty($_POST['passwordsignup'])) {
      $e_signup = $_POST["emailsignup"];

      if (registrasi($_POST) > 0) {

        //set session
        $_SESSION["login"] = true;
        $_SESSION["user"] = $e_signup;

        echo "
          <script>
            alert('registrasi berhasil')
            document.location.href = 'index.php'
          </script>
        ";
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

          //set session
          $_SESSION["admin"] = true;
          $_SESSION["login"] = true;
          $_SESSION["user"] = $e_login;

          header("Location: index.php");
          exit;
        } else {
          echo "<script>alert('Password admin salah')</script>";
        }
      } else {
        // cek password user selain admin
        if (password_verify($p_login, $row["password"])) {
          
          //set session
          $_SESSION["login"] = true;
          $_SESSION["user"] = $e_login;

          header("Location: index.php");
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

  // code untuk menampilkan akun di kanan navbar
  if (isset($_SESSION["user"])) {
    $e_logout = $_SESSION["user"];

    $user = query("SELECT * FROM user WHERE email = '$e_logout'")[0];
  }
  // akhir code untuk menampilkan akun

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
		
		<a class="navbar-brand" href="index.php"  style="font-size: 30px; margin-left: 50px; font-weight: bold;">ITC</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link" href="about.php" style="margin-left: 30px; margin-right: 15px;">About</a>
				</li>

        <li class="nav-item">
          <a class="nav-link" href="#" style="margin-right: 15px;">Testimonial</a>
        </li>

        <?php if (isset($_SESSION["login"])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Article</a>
        </li>
        <?php endif; ?>

        <?php if (isset($_SESSION["admin"])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="admin">Admin Page</a>
        </li>
        <?php endif; ?>

			</ul>

    <?php if (!isset($_SESSION["login"])) : ?>
		<div class="inline">
				<li data-toggle="modal" data-target="#mylogin"><a href="#"><span class="border-right p-2">Login</a>
				<li data-toggle="modal" data-target="#mydaftar"><a href="#"><span class="p-2">Sign Up</a>
		</div>
    <?php endif; ?>

    <?php if (isset($_SESSION["login"])) : ?>
    <div class="inline">
      <?= $user["nama"];  ?> | <?= $user["email"];  ?> 
      <br>
      <a href="logout.php">Logout</a>
    </div>
    <?php endif; ?>
		
		</div>
	</nav>
  <!-- End Navbar -->

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
        <input type="text" name="namasignup" class="form-control" id="fullnameSignup" placeholder="Fullname" autocomplete="off" autofocus="">
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
  <!-- End Pop up daftar -->

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
          <input type="text" name="emaillogin" class="form-control" id="emailLogin" placeholder="Email" autocomplete="off" required="" autofocus="">
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
		
			
	<div class="masthead2">
		<div class="row" >
        	<div class="col-md-6">
        		<div class="row ml-5">
        			
        			<div class="col-md-4 text-center ">
        				<img src="image/alumni1.jpg" width="130px" class="rounded mt-5">
        				<h5 style="color: #cf9608;"><b>Kevin Hartono</b></h5>
        				<p style="color: #cf9608;">consultant</p>
        			</div>
        			<div class="col-md-4 text-center">
        				<br><br>
        				<img src="image/alumni2.jpg" width="130px" class="rounded mt-5">
        				<h5 style="color: #cf9608;"><b>Nadhira Afifa</b></h5>
        				<p style="color: #cf9608;">General Doctor</p>
        			</div>
        			<div class="col-md-4 text-center">
        				<img src="image/alumni3.jpg" width="130px" class="rounded mt-5">
        				<h5 style="color: #cf9608;"><b>Leonardo Dcaprio</b></h5>
        				<p style="color: #cf9608;">Internship Designer</p>
        			</div>		
        		</div>
        	</div>
	        <div class="col-md-6">	
	             <div class="mx-auto text-center">
             		 <br><br><br>
	                 <h2 style="color: #cf9608;" class="mt-5">ITC Alumni <br> with Successful Careers</h2>
	                  <a class="btn btn-primary1">Almuni Testimoni</a>
	             </div>
	            		
	        </div>
      	</div>
				
    </div>

	<div class="masthead">
		<div class="row">
			<div class="col-md-6">
        	
        	</div>
        	<div class="col-md-6">
        		<div class="text-center mt-5">
        		<h1 class="text-white">Not afraid to miss class with interactive live bimble<br> first in indonesia!</h1>
        		<h5 class="text-white">Taught by the best tutors!</h5>
        		<br>
        		

        		<div class="row">
        			<div class="col-md-6">
        				<div class="card ml-5" style="width: 15rem; border-radius: 20px;">
						  <ul class="list-group list-group-flush" style="border-radius: 20px;">
						    <li class="list-group-item bg-warning">Optima</li>
						    <li class="list-group-item cardhover">Bimbel Live</li>
						  </ul>
						</div>
        			</div>
        			<div class="col-md-6">
        				<div class="card mr-5" style="width: 15rem; border-radius: 20px;">
						  <ul class="list-group list-group-flush " style="border-radius: 20px;">
						    <li class="list-group-item bg-warning">Ultima</li>
						    <li class="list-group-item cardhover">UTBK & Bimbel Live</li>
						  </ul>
						</div>	
        			</div>
        		</div>

        		<br>
        		<h6 class="text-white">Download ITC Course App Now!</h6>
        		<div class="row">
        			<div class="col-md-6 text-right"><img src="image/googleplay.png" width="150px"></div>
        			<div class="col-md-6 text-left"><img src="image/appstore.png" width="150px"></div>
        		</div>
        	</div>
        	</div>
      	</div>
     </div>





     <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5 bg-warning">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"></h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Browser Side</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p class="dark-grey-text">Learn HTML</p>
        
        <p class="dark-grey-text">Learn CSS</p>
        
        <p class="dark-grey-text">Learn Javascript</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Server Side</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p class="dark-grey-text">Learn PHP</p>
        
        <p class="dark-grey-text">Learn SQL</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text" href="https://mdbootstrap.com/"> ITC COURSE</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
       

        	

        	
				

</body>
</html>
