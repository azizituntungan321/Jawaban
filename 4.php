<?php 
function dicetak($angka){  
	$tengah = ($angka/2)+0.5;
	for($x=1; $x<=$angka; $x++){
		for($y=1; $y<=$angka; $y++){
			if($x==1||$x==$angka||$y==$tengah)
				echo "X ";
			else
				echo "= ";
		}
	echo "<br>";
	}
}

dicetak(7);
?>