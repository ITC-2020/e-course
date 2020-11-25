<?php
    include "../koneksi.php";
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "UPDATE user SET nama='".$nama."', email='".$email."', password='".$password."' WHERE id='".$id."'";
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