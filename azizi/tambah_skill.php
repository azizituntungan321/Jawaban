<?php
include 'koneksi.php';
if (isset($_POST['btn_skill'])) {
$id = $_POST['id'];
$nama_skill = $_POST['nama_skill'];
$query="INSERT INTO skills SET name='$nama_skill', user_id=$id";
mysqli_query($db,$query);
echo "Data Berhasil Tersimpan !<br>";
echo "<h3><a href='index.php'>Kembali Ke Home</a></h3>";
}
?>