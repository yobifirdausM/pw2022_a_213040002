<?php 
session_start();

if (!isset ($_SESSION["login"]) ) {
  header("Location: cover.php");
  exit;
}

require '../koneksi.php';

$keyword = $_GET["keyword"];

$query =  "SELECT * FROM materi 
            WHERE
          nama_materi LIKE '%$keyword%'
          ";
$materi = query($query);

?>
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