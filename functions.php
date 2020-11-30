<?php 
	// koneksi ke database
	$conn = mysqli_connect("localhost","root","","ecourse_itc");
	
	if ($conn->connect_error) {
		die('koneksi gagal : '.$koneksi->connect_error);
	}

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

	// fungsi query
	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	// akhir fungsi query

	// fungsi cari user
	function cari($keyword) {
		$query = "SELECT * FROM user WHERE
				nama != 'admin' AND
				(nama LIKE '%$keyword%' OR
				email LIKE '%$keyword%') 
		";

		return query($query);
	}
	// akhir fungsi cari 
?>
