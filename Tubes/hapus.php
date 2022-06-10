<?php 
session_start();

if (!isset ($_SESSION["login"]) ) {
  header("Location: cover.php");
  exit;
}

require 'koneksi.php';

$id_materi = $_GET["id_materi"];
if( hapus($id_materi) > 0 ) {
    echo "<script>
                alert ('data berhasil dihapus')
                document.location.href = 'pembelajaran.php';
            </script>";
} else {
    echo "<script>
                alert ('data gagal di hapus')
                document.location.href = 'pembelajaran.php';
            </script>";
}

?>