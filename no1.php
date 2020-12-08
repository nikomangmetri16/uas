<?php
echo "1. jajar genjang\n";
echo "2. persegi panjang \n";
echo "Mau Menghitung Luas Apa (1/2) : ";

$type = trim (fgets(STDIN));

function jajar_genjang($alas,$tinggi){

    $luas = $alas*$tinggi;
    echo "luasnya : $luas";
}

function persegi_panjang($panjang,$lebar){

    $luas = $panjang*$lebar;
    echo "luasnya : $luas";
}

if ($type == 1 ){
    echo "masukkan alas : ";
    $alas = trim (fgets(STDIN));

    echo "masukkan tinggi : ";
    $tinggi = trim (fgets(STDIN));

    $luas = $alas * $tinggi;

    echo "Menghitung jajar genjang :  $luas cm2  ";
} else {
    echo "masukkan panjang : ";
    $panjang = trim (fgets(STDIN));

    echo "masukkan lebar : ";
    $lebar = trim (fgets(STDIN));

    $luas = $panjang * $lebar;
echo "Luas persegi panjang :  $luas cm2 ";
}
?>