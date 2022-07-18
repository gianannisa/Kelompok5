<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($connect, "DELETE FROM anggota WHERE id ='$id'");
if($sql) { ?>
    <script>
    alert('Hapus data sukses');
    window.location.href= "anggota.php";
    </script>
    <?php
}else{
    echo "Hapus data gagal";
}
?>