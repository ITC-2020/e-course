<?php
   include "../koneksi.php";
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $pass = password_hash($password, PASSWORD_DEFAULT);
    

    $query = "UPDATE user SET nama='".$nama."', email='".$email."', password='".$pass."' WHERE id='".$id."'";
    $cek = mysqli_query($conn,$query);

    if($cek != false){
        echo "<script> alert('Update Berhasil!');
        window.location.href = 'index.php';
        </script>";
    }
    else{
        echo "<script> alert('Update Gagal!');
        window.location.href = 'index.php';
        </script>";
    }
?>
