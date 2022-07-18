<?php
include "koneksi.php";

$id = $_GET['id'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$jk = $_GET['jk'];
$ttl = $_GET['ttl'];
$alamat = $_GET['alamat'];

$edit = $_GET['edit'];

if($edit){
    $connect = mysqli_query($connect, "UPDATE anggota SET id='$id',nama='$nama',nim='$nim',jk='$jk',
    ttl='$ttl',alamat='$alamat' WHERE id='$id'");

}
header("location:anggota.php")
?>