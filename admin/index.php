<!DOCTYPE html>
<html lang="en">

<!-- To Do -->
<!-- Add Session -->
<!-- Logout session -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mode Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("../image/bg-admin.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    include '../koneksi.php';
    $query = "SELECT id,nama,email FROM user WHERE id !='1'"; //memilih user yang bukan admin
    $data = mysqli_query($conn, $query);
    ?>
    <div class="container text-light">
        <div class="m-auto text-center p-2">
            <h1>Daftar User</h1>
        </div>
        <div class="main">
            <table class="table text-light bg-dark">
                <thead>
                    <tr>
                        <th>Nomor ID</th>
                        <th>Nama </th>
                        <th>Email </th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    ?>
                        <td>


                            <button data-toggle="modal" data-target="#updatePopUp<?= $row['id']; ?>" class="btn btn-warning">Update</button>
                            <div id="updatePopUp<?= $row['id']; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update</h4>
                                        </div>

                                        <form class="m-1" action="update.php" method="post">

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="idForm">ID</label>
                                                    <input type="text" readonly value="<?= $row['id'] ?>" class="form-control" id="idForm" name="id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="namaForm">Nama</label>
                                                    <input type="text" value="<?= $row['nama'] ?>" class="form-control" id="namaForm" name="nama" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailForm">Email</label>
                                                    <input type="email" value="<?= $row['email'] ?>"class="form-control" id="emailForm" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="passwordForm">Password</label>
                                                    <input type="password" id="passwordForm" class="form-control" name="password" required>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Confirm</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button data-toggle="modal" data-target="#deletePopUp<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
                            <div id="deletePopUp<?= $row['id']; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content text-dark">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete</h4>
                                        </div>

                                        <form class="m-1" action="delete.php" method="post">

                                            <div class="modal-body">
                                                <p>Apakah anda yakin untuk menghapus data?</p>
                                                <input type="hidden" value="<?= $row['id'] ?>" name="id">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="m-auto text-center">
                <a class="btn btn-danger" href="index.php">
                    Log Out
                </a>
            </div>
        </div>
    </footer>

</body>

</html>
