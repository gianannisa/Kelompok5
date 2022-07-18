<?php
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];

//menginput data ke database
mysqli_query($connect, "INSERT INTO anggota VALUE ('$id','$nama','$nim','$jk','$ttl','$alamat')");

//mengalihkan halaman kembali ke anggota.php
header("location:anggota.php")

?>