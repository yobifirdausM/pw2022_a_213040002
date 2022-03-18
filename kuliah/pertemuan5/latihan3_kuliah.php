<?php
// studi kasus

$mahasiswa = [
    ["yobi firdaus", "213040002", "yobifirdaus03@gmail.com", "Teknik Informatika"],
    ["Malwi hidayat", "213040016", "malwi@gmail.com", "Teknik informatika"],
    ["Fowaz amran", "213040032", "fowaz@gmail.com", "Teknik Informatika"]
];


?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama:<?php echo $mhs[0] ?></li>
        <li>Npm:<?php echo $mhs[1] ?></li>
        <li>Email:<?php echo $mhs[2] ?></li>
        <li>Jurusan:<?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>