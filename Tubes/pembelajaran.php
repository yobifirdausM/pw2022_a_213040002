<?php 
session_start();

if (!isset ($_SESSION["login"]) ) {
  header("Location: cover.php");
  exit;
}

require 'koneksi.php';

$materi = query("SELECT * FROM materi");

// tombol cari di klik
if(isset($_GET ["cari"])) {
  $materi = cari($_GET["keyword"]);
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

    <title>pembelajaran</title>
  </head>
  <body>
    <h1 class="text-center"> Materi Pelajaran</h1>
    <div class="d-flex mt-3">
      <a href="tambahdata.php" class=" btn btn-primary me-md-2">Tambah</a>
      <a href="halaman.php" class="btn btn-primary me-md-2">Kembali</a>
      <form action="" method="get" class=" btn d-flex col-5">
        <div class="d-grid gap-1 col-10 mx-auto">
              <input
                class="form-control "
                type="text"
                name="keyword" id="keyword" autocomplete="off"
                id="keyword"
                placeholder="Search"
                autofocus
              />
              </div>
              <button class="btn btn-outline-success" type="submit" id="cari" name="cari" id="tombol-cari">
                Search
              </button>
        </form>
      </div>
  <div id="container">
  <table class="table table-danger mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama pelajaran</th>
      <th scope="col">pelajaran</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($materi as $m) { ?>
          <tr class="align-middle table-dark">
            <th scope="row"><?= $no++; ?></th>
            <td><?= $m["nama_materi"]; ?></td>
            <td><a class="btn btn-primary" href="file/<?= $m["pelajaran"]; ?>"><?= $m["pelajaran"]; ?></a></td>
            <td>
              <a href="edit.php?id_materi=<?= $m["id_materi"]; ?>" class="btn badge  bg-warning">edit</a>
              <a href="hapus.php?id_materi=<?= $m["id_materi"]; ?>" class="btn badge bg-danger" onclick="return confirm('Apakah yakin untuk menghapus data')">delete</a>
            </td>
          </tr>
    <?php } ?>
  </tbody>
  </table>
  </div>
  <script src="js/script.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    
  </body>
</html>