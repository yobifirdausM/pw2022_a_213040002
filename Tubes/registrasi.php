<?php 
session_start();


require 'koneksi.php';

if( isset($_POST["register"]) ) {
  

  if( registrasi ($_POST) > 0) {
    echo "<script>
            alert ('user baru berhasil ditambahkan');
            document.location.href = 'pembelajaran.php';
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Registrasi</title>
  </head>
  <body>
    <div class="d-flex justify-content-center bg-secondary">
      <div class="row-center">
        <h1 class="text-center text-white mt-4">Daftar</h1>
        <div class="row mt-3" style="width: 50%; height: 500px;">
          <div class="col-8">
            <form action="" method="post">
              <!-- <div class="mb-3" style="width: 350px;">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" >
              </div>
              <div class="mb-3" style="width: 350px;">
                <label for="notlp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="notlp" name="notlp" >
              </div> -->
              <div class="mb-3" style="width: 350px;">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" name="username" >
              </div>
              <div class="mb-3" style="width: 350px;">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="mb-3" style="width: 350px;">
                <label for="password2" class="form-label">konfirmasi Password</label>
                <input type="password" class="form-control" id="password2" name="password2">
              </div>
              <button type="submit" class="btn btn-primary mt-3 mb-3 " name="register">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>