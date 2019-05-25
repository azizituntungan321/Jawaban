<?php
function ubah($data,$cari,$ganti){
	for($x=0; $x<strlen($data); $x++) {
		if($data[$x]==$cari)
			$data[$x]=$ganti;
	}
	return $data;
}

$hasil = ubah('mukmin muslim','m','d');
echo $hasil;
?>