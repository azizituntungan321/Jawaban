<?php
function biodata($nama,$address,$hobbies,$is_married,$school,$skills){ 
	$data = [ 'nama' => $nama, 'address' => $address, 'hobbies' => $hobbies, 'is_married' => $is_married, 'school' => $school, 'skills' => $skills ];
	$nilai = json_encode($data);
return $nilai;
}

$nama = 'Azizi Mukmn Aulia';
$address = 'Jl. Brigjend Zein Hamid Medan';
$hobby = array('baca','sepak bola');
$is_married = false;
$school = (object) array('1' => 'UNHAR MEDAN');
$skills = array('HTML' => 80, 'PS' => 75, 'CI' => 85);

$tampil = biodata($nama,$address,$hobby,$is_married,$school,$skills);
echo $tampil;
?>