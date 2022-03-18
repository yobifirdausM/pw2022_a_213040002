<?php
// ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai



// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // Cara baru
$bulan = array("januari", "Februari", "Maret"); // Cara lama
$myArray = [100, "Yobi", true];


// Mencetak Array
// mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";


// mencetak emua elemen pada array
// var_dump() atau print_r()
// khusu untuk debugging
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";

// Mencetak menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach (khusus untuk array)
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";
foreach ($hari as $key => $value) {
    echo "key: $key, value: $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi isi array
// menambah elemen baru di akhir array
$hari[] = "Sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);





?>