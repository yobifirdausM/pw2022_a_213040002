<?php 
session_start();

if (!isset ($_SESSION["login"]) ) {
  header("Location: cover.php");
  exit;
}

require 'koneksi.php';

// ketika tombol tambah diklik
    if(isset($_POST["tambah"])){


        // jalankan fungsi tambah()
        if(tambah($_POST) > 0) {
            echo "<script>
                alert ('data berhasil ditambahkan')
                document.location.href = 'pembelajaran.php';
            </script>";
        } else {
            echo "<script>
                alert ('data gagal ditambahkan')
                document.location.href = 'pembelajaran.php';
            </script>";
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

    <title>Tambah Materi</title>
  </head>
  <body>
  <div class="container">
      <h1 class="text-center">Form Tambah Materi Pelajaran</h1>

      <a class="mt-3" href="pembelajaran.php">Kembali Ke Materi Pelajaran</a>
      
      <div class="row mt-3">
          <div class="col-8">

          <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
              <div class="mb-3">
                  <label for="nama_materi" class="form-label">Nama pelajaran</label>
                  <input type="text" class="form-control" id="nama_materi" name="nama_materi" required>
              </div>

              <div class="mb-3">
                  <label for="pelajaran" class="form-label">pelajaran</label>
                  <input type="file" class="form-control" id="pelajaran" name="pelajaran">
              </div>
              <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
          </form>

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