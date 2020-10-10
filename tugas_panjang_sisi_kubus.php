<?php
function sqrt_sisi_kubus($luas){
	return sqrt($luas / 6);
}

echo "<br> <h4>Tugas menghitung Panjang Sisi Kotak Kayu </h4>";
echo "<br> Jadi panjang sisi kotak kayu tersebut akar dari luas 3750 cm2 : ", number_format((sqrt_sisi_kubus(3750)), 2), " cm";   
?>