<?php 
	// koneksi ke database
	include 'koneksi.php';

	// fungsi registrasi
	function registrasi($data) {
		global $conn;

		$nama = strtolower(stripslashes($data['namasignup']));
		$email = mysqli_real_escape_string($conn, $data['emailsignup']);
		$pass = mysqli_real_escape_string($conn, $data['passwordsignup']);

		$result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

		if(mysqli_fetch_assoc($result)) {
			echo "<script>alert('Email sudah terdaftar!')</script>";
			return false;
		}

		$pass = password_hash($pass, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$email','$pass')");

		return mysqli_affected_rows($conn); 
	}
	// akhir fungsi registrasi
 ?>
