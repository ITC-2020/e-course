<?php 
$conn=mysqli_connect("localhost","root","","ecourse_itc");
	if ($conn->connect_error) {
		die('koneksi gagal : '.$koneksi->connect_error);
	}
 ?>