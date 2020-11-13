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
		
		<a class="navbar-brand" href="index.php"  style="font-size: 30px; margin-left: 10px; font-weight: bold;">ITC</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
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
				      <div class="modal-body">
				        <form>
				     <div class="form-group">
				      <label for="exampleInputEmail1">Fullname</label>
				      <input type="text" class="form-control" id="Fullname" placeholder="Fullname">
				    </div>
				    <div class="form-group">
				      <label for="exampleInputEmail1">Email address</label>
				      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Password</label>
				      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				    </div>
				  </form>
				      </div>
				      <div class="modal-footer">
				       <button type="button" class="btn btn-success" data-dismiss="modal">Daftar</button>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
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
				      <div class="modal-body">
				        <form>
				    <div class="form-group">
				      <label for="exampleInputEmail1">Username</label>
				      <input type="text" class="form-control" id="username" placeholder="Username">
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Password</label>
				      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				    </div>
				  </form>
				      </div>
				      <div class="modal-footer">
				       <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- End Pop up Login -->	
			

			<div class="masthead3">
				<div class="row">
        		<div class="col-md-6">
        			
        		</div>
        		<div class="col-md-6">
        			<h1 class="text-center mt-5"><b>To spark the love of learning, <br> in everyone, everywhere,<br>to question everything</b></h1>
       
        		</div>
      			</div>
        	</div>

        	<div class="bg-white min-vh-100">
        		<h1 class="text-center pt-4">Tentang ITC course</h1>
        		<div class="ml-5 mr-5">
	        		<p>PT ITC (ITC Course) adalah perseroan terbatas yang bergerak di bidang pendidikan nonformal yang didirikan menurut dan berdasarkan hukum yang berlaku di Indonesia serta telah memperoleh Izin Pendirian Satuan Pendidikan Nonformal dan Izin Operasional Lembaga Kursus Pelatihan dengan Nomor 3/A.5a/31.74.01/-1.851.332/2018.</p>

	        		<p>ITC Course merupakan perusahaan teknologi terbesar di Indonesia yang berfokus pada layanan berbasis pendidikan. Kami telah memiliki lebih dari 15 juta pengguna serta mengelola 300.000 guru yang menawarkan jasa di lebih dari 100 bidang pelajaran.</p>

	        		<p>ITC Course mengembangkan berbagai layanan belajar berbasis teknologi, termasuk layanan kelas virtual, platform ujian online, video belajar berlangganan, marketplace les privat, serta konten-konten pendidikan lainnya yang bisa diakses melalui web dan aplikasi Ruangguru.</p>

	        		<p>Kami juga telah dipercaya untuk bermitra dengan 32 (dari 34) Pemerintah Provinsi dan 326 Pemerintah Kota dan Kabupaten di Indonesia.</p>

	        		<p>ITC Course juga telah memenangkan sejumlah penghargaan di dalam dan luar negeri, termasuk Solver of MIT, Atlassian Prize,UNICEF Innovation to Watch,Google Launchpad Accelerator, dan ITU Global Industry Award.</p>
        		</div>

        		<br>
        		<div class="text-center">
        			<img src="image/image-about2.jpg" width="400px">
        		</div>
        		<br><br><br>
        		
        		<div class="ml-5 mr-5">
	        		<h2>ITC Course untuk pendidikan Indonesia</h2>
	        		<p>ITC Course memiliki misi untuk menyediakan dan memperluas akses terhadap pendidikan berkualitas melalui teknologi untuk semua siswa, kapan saja dan di mana saja.</p>

	        		<p>Kami percaya bahwa pendidikan adalah hak setiap manusia. Kami juga meyakini bahwa pendidikan adalah tiket untuk masa depan yang lebih baik. Maka dari itu, kami bertujuan untuk menyediakan layanan pendidikan dan materi pembelajaran dari guru-guru terbaik Indonesia, yang bisa diakses oleh seluruh siswa di mana saja mereka berada dengan biaya yang terjangkau.</p>

	        		<p>Kami juga bertujuan untuk meningkatkan kualitas guru dengan menciptakan lapangan pekerjaan dan tambahan penghasilan bagi guru di Indonesia. Ruangguru percaya, dengan meningkatnya kualitas guru, maka mutu pendidikan di Indonesia juga akan menjadi lebih baik.</p>

	        		<p>ITC Course juga percaya bahwa teknologi memudahkan siswa untuk mengakses materi pembelajaran yang berkualitas. Di mana pun mereka berada, ITC Course dapat membantu proses belajar siswa tanpa batasan ruang dan waktu. Kami juga meyakini bahwa teknologi dapat membantu siswa, guru, dan orang tua untuk menjalankan aktivitasnya menjadi lebih efektif dan efisien.</p>

	        		<p>Kami bertekad untuk terus mengembangkan layanan kami serta berkolaborasi dengan berbagai pihak guna mencapai tujuan-tujuan kami.</p>

	        		<br><br>
	        		<h2>Startup Digital di bidang pendidikan terbaik di Indonesia</h2>
	        		<p>Sebagai salah satu startup teknologi dan pendidikan terbesar di Indonesia, ITC Course telah dinobatkan menjadi penerima beragam penghargaan.</p>

        		</div>

        		<div class="mr-3 ml-3">
	        		<div class="row">
		        		<div class="col-md-4 text-center">
		        			<img src="image/award1.jpg" width="300px" class="">
		        		</div>
		        		<div class="col-md-4 text-center">
		        			<img src="image/award2.jpg" width="300px;">
		        		</div>
		        		<div class="col-md-4 text-center">
		        			<img src="image/award3.jpg" width="300px;">
		        		</div>
	      			</div>
      			</div>
      			<br><br>
        		
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
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">MDBootstrap</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">MDWordPress</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">BrandFlow</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Your Account</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Shipping Rates</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Help</a>
        </p>

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
