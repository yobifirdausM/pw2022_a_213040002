<?php 
  //pertemuan 2, membahas mengenal sintaks PHP
  // nilai: integer, string, boolean  
  echo 10;
  echo "<hr>";

  // VARIABLE
  // wadah untuk menyimpan NILAI
  // nama nya bebas, tidak boleh diawali angka
  // tidak boleh ada spasi
  $nama = 'yobi firdaus';
  echo $nama;
  echo "<br>";
  //bisa ditimpa / overwrite
  $nama = 'firdaus';
  echo $nama;
  echo "<hr>";


  // STRING
  // '', ""
  echo "jum'at";
  echo "<br>";
  // escaped character
  //\
  echo 'yobi : "jum\'at"';
  echo "<br>";
  echo "yobi : \"jum'at\"";
  echo "<br>";

  // interpolasi
  // mencetak isi variable
  // hanya bisa digunakan oleh ""
  echo " Halo nama saya $nama";
  echo "<br>";
  $price = 200;
  echo " price: $$price";

  echo "<hr>";

  // OPERATOR
  // Aritmatika
  // +, -, *, /, % (modulo / modulus / sisa bagi)

  echo (1 + 2) * 3 - 4; // KaBaTaKu
  echo "<br>";
  $alas = 10;
  $tinggi = 20;
  $luas_segi_tiga = ($alas * $tinggi) / 2;
  echo $luas_segi_tiga;

  echo "<br>";
  echo 3 % 2;
  echo "<hr>";

  // CONCAT
  // Penggabung String
  //.

  $nama_depan = 'yobi';
  $nama_belakang ='firdaus';
  echo$nama_depan . " " . $nama_belakang;
  echo "<hr>";

  // PERBANDINGAN
  // <, >, <=, >=, ==, /=

  echo 1 < 5;
  echo "<br>";
  echo 10 == "10";
  echo "<hr>";

  // identitas / strict comparison
  // ===, /==
  echo 10 === "10";
  echo "<hr>";

  // Increment / decrement
  // penambahan / pengurangan 1
  // ++, --

  $x = 10;
  echo ++$x;
  echo $x;
  echo "<br>";
  echo $x++

?>