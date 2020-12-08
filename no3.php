<?php

echo "Masukkan jam kerja : ";
$jam = trim(fgets(STDIN));
echo "Masukkan golongan kerja : ";
$gol_kerja = trim(fgets(STDIN));

$jam_kerja = $array = array(
    array(
    "Golongan" => "I",
    "Upah" => 3000
    ),
    array(
    "Golongan" => "II",
    "Upah" => 3500
    ),
    array(
    "Golongan" => "III",
    "Upah" => 4000
    ),
    array(
        "Golongan" => "IV",
        "Upah" => 5000
        )
       ); 

if ($jam>40) {
    $Gaji = 40 * $Upah + (($Jam - 40) * 1.5 * $Upah);
}else{
    $gaji = $jam * $upah;
}echo "\n\n Gaji : Rp.  \n", $gaji;

?>
