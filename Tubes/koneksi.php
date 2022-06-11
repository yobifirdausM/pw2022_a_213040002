<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_tubes') or die('KONEKSI GAGAL!');

    return $conn;
}


function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    $nama_materi = htmlspecialchars($data["nama_materi"]);

    // upload file 
    $pelajaran = upload();
    if(!$pelajaran) {
        return false;
    }

    $query = "INSERT INTO 
                materi 
              VALUES (NULL, '$nama_materi', '$pelajaran')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
function upload() {
    $namaFile = $_FILES ['pelajaran']['name'];
    $ukuranFile = $_FILES ['pelajaran']['size'];
    $error = $_FILES['pelajaran']['error'];
    $tmpName = $_FILES['pelajaran']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if( $error === 4) {
        echo "<script>
                 alert ('Pilih file terlebih dahulu');
             </script>";
        return false;
    }

    // cek yang di upload
    $ekstensiFilevalid = ['doc', 'docx', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if( !in_array($ekstensiFile, $ekstensiFilevalid)) {
        echo "<script>
                alert ('yang anda upload bukan file');
             </script>";
        return false;
    }

    // cek ukuran
    if( $ukuranFile > 1000000) {
        echo "<script>
                alert ('Ukuran file terlalu besar')
            </script>";
        return false;
    }

    // selesai pengecekan
    // generate nama gambar 
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;


    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);
    return $namaFileBaru;
}



function hapus($id_materi) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM materi WHERE id_materi = $id_materi");
    return mysqli_affected_rows($conn);
}


function edit($data) {
    $conn = koneksi();

    $id_materi = $data["id_materi"];
    $nama_materi = htmlspecialchars($data["nama_materi"]);
    $pelajaranLama =  htmlspecialchars($data["pelajaranLama"]);
    
    // cek apakah user pilih gambar baru
    if($_FILES['pelajaran']['error'] === 4 ){
        $pelajaran = $pelajaranLama;
    }else {
        $pelajaran = upload();
    }


    $query = "UPDATE materi SET nama_materi = '$nama_materi', pelajaran = '$pelajaran' WHERE id_materi = $id_materi";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
    
function cari($keyword) {
    $query = "SELECT * FROM materi 
                WHERE
              nama_materi LIKE '%$keyword%'
             ";
    return query($query);
}
function search($keyword) {
    $query = "SELECT * FROM pelajaran 
                WHERE
              nama_pelajaran LIKE '%$keyword%'
             ";
    return query($query);
}









function registrasi ($data) {
    $conn = koneksi();

    // $nama = $data["nama_lengkap"];
    // $notlp = $data["no_tlp"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar')
             </script>";

             return false;
    }


    // cek konfirmasi
    if( $password !== $password2) {
        echo "<script>
                alert('konfirmasi password salah')
             </script>";
        
        return false;
    }

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);
    
}
