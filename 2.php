<?php
function cetak_tanggal($awal,$akhir){ 
	$data_awal = explode("-",$awal);
	$data_akhir = explode("-",$akhir);
	for($x=$data_awal[2]; $x<=$data_akhir[2]; $x++) {
		echo $data_awal[0].'-'.$data_awal[1].'-'.$x.',<br>';
	}
}
 
cetak_tanggal('2019-12-20','2019-12-27');
?>