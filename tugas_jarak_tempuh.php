<?php
$jari2 = 21;
$putaran = 200;
const phi = 22/7;

echo "<br> <h4>Tugas menghitung jarak tempuh mobil</h4>";
echo "<br> Jadi keliling roda sepeda adalah : ", number_format($putaran * (2 * phi * $jari2)/100, 2), " meter";
?>