<?php
$jari2 = 14;
const phi = 22/7;

function luas_lingkaran($jari2){
	return phi * ($jari2 * $jari2);
}

echo "<br> <h4>Tugas menghitung Luas Lingkaran</h4>";
echo "<br> Jadi luas lingkaran adalah : ", number_format(luas_lingkaran($jari2) , 2);
?>