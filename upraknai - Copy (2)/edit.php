<?php

include("functions.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    

    // buat query update
    $sql = "UPDATE data_buku SET judul='$judul',  WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-buku.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>