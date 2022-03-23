<?php
// Array Assosiative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = [
    [
        "nama" => "yobi firdaus", 
        "npm" => "213040002", 
        "email" => "yobifirdaus03@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Malwi hidayat", 
        "npm" => "213040016", 
        "email" => "malwi@gmail.com", 
        "jurusan" => "Teknik informatika"
    ],
    [
        "nama" => "Fowaz amran", 
        "npm" => "213040032", 
        "email" => "fowaz@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Alif akbar", 
        "email" => "alif02@gmail.com", 
        "jurusan" => "Teknik Informatika", 
        "npm" => "2130400018"
    ]
];

// var_dump($mahasiswa);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"] ?></li>
        <li>Npm: <?php echo $mhs["npm"] ?></li>
        <li>Email: <?php echo $mhs["email"] ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php } ?>