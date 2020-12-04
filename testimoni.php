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
					<a class="nav-link text-dark" href="index.php"><b>HOME</b></a>
				</li>

				<li class="nav-item">
					<a class="nav-link text-dark" href="about.php">About</a>
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

			<div class="row">
				<div class="col-md-6">
				<a href="#" data-toggle="modal" data-target="#mylogin" class="btn btn-success"><span class="">Login</a>
				</div>
				<div class="col-md-6">
				<a href="#" data-toggle="modal" data-target="#mydaftar" class="btn btn-success "><span class="">SignUp</a>
				</div>
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
			

		<div class="bg-white ">
			<div class="row">
			<div class="col-md-6">
			<div class=" p-5">
 			<iframe width="640" height="360" style="border-radius: 10px;" src="https://www.youtube.com/embed/lFi-ZwzNkqM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			</div>
			<div class="col-md-6">
			<h1 class="ml-5 mt-5 p-5 font-italic">"<b>ITC COURSE</b> ngajarin belajar untuk berpikir kritis dan jadi pembelajar yang mandiri"</h1>
			<hr width="70%" size="10%">
			</div>
			</div>
		</div>

		
		<section id="Main">
	  <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>

	 <div class="carousel-inner">
		  <div class="carousel-item active">
		    <div class="min-vh-100 pb-3 bg-white">
			<div class="row">
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni4.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Rangga Mahesa <br>(STEI Intitut Teknologi Bandung)</b></p>
					    <p class="card-text">Secara keseluruhan, ITC Course membantu gue dalam membangun fundamental yang kuat dan kokoh, pola pikir ilmiah dan berkembang, serta matematika dasar untuk mempersiapkan saya menghadapi tantangan yang akan datang dalam hidup saya.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni5.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Jerome Polin <br> (Matematika UGM)</b></p>
					    <p class="card-text">Bareng ITC Course, saya suka "curi start" materi pelajaran saat liburan sekolah. Saya cenderung menghabiskan materi pelajaran sebelum liburan selesai bareng ITC Course. Tutor-tutor ITC Course, khususnya Tutor Matematika, penjelasannya jelas, dan sering disajikan dengan cerita-cerita menyenangkan untuk dipelajari! Secara keseluruhan, ITC Course juga membantu saya untuk berpikir secara logis dan struktural.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni6.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Putri Tanjung<br> (FK Universitas Indonesia)</b></p>
					    <p class="card-text">Tutor-tutor ITC Course nggak hanya membantu memahami materi materi secara cermat dan utuh, tapi juga mengajarkan konsep diri yang membantu gue menentukan tujuan hidup. ITC Course membekali gue pola pikir yang tepat, sehingga gue bisa mewujudkan misi untuk masa depan bumi yang lebih baik.</p>
					  </div>
					</div>
				</div>
				</div>
		      </div>
		    </div>


		    <div class="carousel-item">
		    <div class="min-vh-100 pb-3 bg-white">
			<div class="row">
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni7.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Noah B <br>(Informatika ITS)</b></p>
					    <p class="card-text">Secara keseluruhan, ITC Course membantu gue dalam membangun fundamental yang kuat dan kokoh, pola pikir ilmiah dan berkembang, serta matematika dasar untuk mempersiapkan saya menghadapi tantangan yang akan datang dalam hidup saya.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni8.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> iqbal R <br> (FEB Universitas Padjajaran)</b></p>
					    <p class="card-text">Bareng ITC Course, saya suka "curi start" materi pelajaran saat liburan sekolah. Saya cenderung menghabiskan materi pelajaran sebelum liburan selesai bareng ITC Course. Tutor-tutor ITC Course, khususnya Tutor Matematika, penjelasannya jelas, dan sering disajikan dengan cerita-cerita menyenangkan untuk dipelajari! Secara keseluruhan, ITC Course juga membantu saya untuk berpikir secara logis dan struktural.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni9.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Ekida <br> (FK Universitas Indonesia)</b></p>
					    <p class="card-text">Tutor-tutor ITC Course nggak hanya membantu memahami materi materi secara cermat dan utuh, tapi juga mengajarkan konsep diri yang membantu gue menentukan tujuan hidup. ITC Course membekali gue pola pikir yang tepat, sehingga gue bisa mewujudkan misi untuk masa depan bumi yang lebih baik.</p>
					  </div>
					</div>
				</div>
				</div>
		      </div>
		    </div>

		    <div class="carousel-item">
		    <div class="min-vh-100 pb-3 bg-white">
			<div class="row">
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni10.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Gita S <br>(Ilmu Komunikasi UPNVY)</b></p>
					    <p class="card-text">Secara keseluruhan, ITC Course membantu gue dalam membangun fundamental yang kuat dan kokoh, pola pikir ilmiah dan berkembang, serta matematika dasar untuk mempersiapkan saya menghadapi tantangan yang akan datang dalam hidup saya.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni11.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Tannya R <br> (UCLA)</b></p>
					    <p class="card-text">Bareng ITC Course, saya suka "curi start" materi pelajaran saat liburan sekolah. Saya cenderung menghabiskan materi pelajaran sebelum liburan selesai bareng ITC Course. Tutor-tutor ITC Course, khususnya Tutor Matematika, penjelasannya jelas, dan sering disajikan dengan cerita-cerita menyenangkan untuk dipelajari! Secara keseluruhan, ITC Course juga membantu saya untuk berpikir secara logis dan struktural.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card mx-auto" style="width: 22rem;">
					  <img class="card-img-top" src="image/alumni12.jpg" alt="Card image cap" >
					  <div class="card-body">
					  	<p><b> Reza Pahlevi<br> (HI UPH)</b></p>
					    <p class="card-text">Tutor-tutor ITC Course nggak hanya membantu memahami materi materi secara cermat dan utuh, tapi juga mengajarkan konsep diri yang membantu gue menentukan tujuan hidup. ITC Course membekali gue pola pikir yang tepat, sehingga gue bisa mewujudkan misi untuk masa depan bumi yang lebih baik.</p>
					  </div>
					</div>
				</div>
				</div>
		      </div>
		      
		    </div>
		  </div>

	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>

	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>

	</div>
</section>
	
		<div class=" min-vh-100" style="background-color: black;">
			<h1 class="text-white text-center pt-4"><b>STORIES OF ITC COURSE ALUMNI</b></h1>
			<div class="row mt-5">
				<div class="col-md-4 text-right">
					<iframe width="250" height="350" src="https://www.youtube.com/embed/yBD0R-ml6SU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-4 text-center">
					<iframe width="250" height="350" src="https://www.youtube.com/embed/jx5yxmcgjNo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-4 text-left">
					<iframe width="250" height="350" src="https://www.youtube.com/embed/xo03dwoToZ0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <h6 class="text-uppercase font-weight-bold">ITC COURSE</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>ITC Course is the bigest tech company in Indonesia whose focus on education. </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ABOUT US</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="about.php">About</a>
        </p>
        <p>
          <a class="dark-grey-text" href="textimoni.php">Testimonial</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!"></a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!"></a>
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
