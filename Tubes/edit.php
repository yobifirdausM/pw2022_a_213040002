<?php 
session_start();

if (!isset ($_SESSION["login"]) ) {
  header("Location: cover.php");
  exit;
}

require 'koneksi.php';

// ambil data di url
$id_materi = $_GET["id_materi"];

$m = query("SELECT * FROM materi WHERE id_materi = $id_materi")[0];


// ketika tombol uedit diklik
    if(isset($_POST["tambah"])){
        // jalankan fungsi ubah()
        if(edit($_POST) > 0) {
            echo "<script>
                alert ('data berhasil di edit')
                document.location.href = 'pembelajaran.php';
            </script>";
        } else {
            echo "<script>
                alert ('data gagal di edit')
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

    <title>edit Materi</title>
  </head>
  <body>
  <div class="container">
      <h1 class="text-center"> Edit Materi Pelajaran</h1>

      <a class="mt-3" href="pembelajaran.php">Kembali Ke Materi Pelajaran</a>
      
      <div class="row mt-3">
          <div class="col-8">

          <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name="id_materi" value="<?= $m["id_materi"]; ?>">
            <input type="hidden" name="pelajaranLama" value="<?= $m["pelajaran"]; ?>">
              <div class="mb-3">
                  <label for="nama_materi" class="form-label">Nama pelajaran</label>
                  <input type="text" class="form-control" id="nama_materi" name="nama_materi" required value="<?= $m["nama_materi"]; ?>">
              </div>

              <div class="mb-3">
                  <label for="pelajaran" class="form-label">pelajaran</label>
                  <a href="file/<?= $m["pelajaran"]; ?>"><?= $m["pelajaran"]; ?></a>
                  <input type="file" class="form-control" id="pelajaran" name="pelajaran">
              </div>
              <button type="submit" class="btn btn-primary" name="tambah">Edit Data</button>
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