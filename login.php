<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
  
  require 'functions.php';

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
    <style>
        
    </style>

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
          <a class="nav-link" href="admin/index.php">Admin Page</a>
        </li>
        <?php endif; ?>

      </ul>

    <?php if (isset($_SESSION["login"])) : ?>
    <div class="inline">
      <?= $user["nama"];  ?> | <?= $user["email"];  ?> 
      <br>
      <a href="logout.php" style="margin-left: 125px;">Logout</a>
    </div>
    <?php endif; ?>
    
    </div>
  </nav>
  <!-- End Navbar -->

		
			
    <!-- Artikel -->
    <section class="artikel" id="artikel">
        <div class="container">
            <div class="judul">
                <div class="col-sm-12">
                    <h2 class="text-center">Artikel</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 offset-sm-1">
                    <a href="https://www.w3schools.com/html/default.asp">
                        <img src="image/html.jpg" class="gambar" alt="html">
                        <h2>Belajar HTML</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eos dolore omnis at. Impedit facilis, ullam natus accusantium velit voluptatum assumenda ad architecto sed eveniet.</p>
                    <hr>
                </div>
                <div class="col-sm-5">
                    <a href="https://www.w3schools.com/css/default.asp">
                        <img src="image/css.png" class="gambar" alt="css">
                        <h2>Belajar CSS</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, omnis ratione cum minus architecto, rerum id error placeat officiis porro, iusto dolore. Distinctio odit tempora aliquam, quidem facere ex maiores.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 offset-sm-1">
                    <a href="https://www.w3schools.com/js/default.asp">
                        <img src="image/js.jpg" class="gambar" alt="js">
                        <h2>Belajar Javasript</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eos dolore omnis at. Impedit facilis, ullam natus accusantium velit voluptatum assumenda ad architecto sed eveniet.</p>
                    <hr>
                </div>
                <div class="col-sm-5">
                    <a href="https://www.w3schools.com/php/default.asp">
                        <img src="image/php.png" class="gambar" alt="php">
                        <h2>Belajar PHP</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, omnis ratione cum minus architecto, rerum id error placeat officiis porro, iusto dolore. Distinctio odit tempora aliquam, quidem facere ex maiores.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 offset-sm-1">
                    <a href="https://www.w3schools.com/sql/default.asp">
                        <img src="image/mysql.png" class="gambar" alt="mysql">
                        <h2>Belajar Mysql</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eos dolore omnis at. Impedit facilis, ullam natus accusantium velit voluptatum assumenda ad architecto sed eveniet.</p>
                    <hr>
                </div>
                <div class="col-sm-5">
                    <a href="https://www.w3schools.com/css/css3_user_interface.asp">
                        <img src="image/uiux.jpeg" class="gambar" alt="ui/ux">
                        <h2>Belajar UI/UX</h2>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, omnis ratione cum minus architecto, rerum id error placeat officiis porro, iusto dolore. Distinctio odit tempora aliquam, quidem facere ex maiores.</p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- end of Artikel -->

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
