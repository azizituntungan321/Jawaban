<?php 
include ("koneksi.php");
if (isset($_POST['btn_tambah'])) {
$nama = $_POST['nama'];
$query="INSERT INTO users SET name='$nama'";
mysqli_query($db,$query);
echo "Data Berhasil Tersimpan !<br>";
echo "<h3><a href='index.php'>Kembali Ke Home</a></h3>";
}
?>