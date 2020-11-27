<?php
    include "../koneksi.php";
    $id = $_POST['id'];

    $query = "DELETE FROM user WHERE id='".$id."'";
    $cek = mysqli_query($conn,$query);

    if($cek != false){
        echo "<script> alert('Data Berhasil dihapus!');
        window.location.href = 'index.php';
        </script>";
    }
    else{
        echo "<script> alert('Data Gagal Dihapus!');
        window.location.href = 'index.php';
        </script>";
    }
?>