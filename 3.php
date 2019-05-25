<?php
function berapa_huruf($kalimat){ 
	$vokal = array('a','i','u','e','o');
	$hasil = 0;
	for($x=0; $x<strlen($kalimat); $x++) {
		for($y=0; $y<count($vokal); $y++) {
			if($kalimat[$x]==$vokal[$y])
				$hasil=$hasil+1;
		}
	}
    return $hasil;
}

$hasil = berapa_huruf("mukmin muslim");
echo $hasil;
?>