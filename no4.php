<?php

$minimum = 100;
$gol1 = 1000;
$gol2 = 2000;
$array = [
    [
    "Nama" => "Andi",
    "Golongan" => "I",
    "KWH" => 50,
    ],
    [
    "Nama" => "Susi",
    "Golongan" => "II",
    "KWH" => 150
    ],
    [
    "Nama" => "Made",
    "Golongan" => "I",
    "KWH" => 1000
    ],
    [
    "Nama" => "Rosa",
    "Golongan" => "II",
    "KWH" => 1500
    ]
   ];

array_walk($array, function($data) use ($gol1,$gol2){
    echo "Nama : " . $data['Nama']."\n";
    echo "Golongan : " . $data['Golongan']."\n";
    echo "KWH : " . $data['KWH']."\n";
    echo "Tarif : ";
        if ($data['Golongan'] == "I"){      
            $tarif = $gol1;
        }else {
            $tarif = $gol2;
        }
        if($data['KWH'] < 100){
            echo 100 * $tarif."\n\n";
        }else if ($data['KWH'] >=1000){
            echo ($data['KWH'] * $tarif) + (0.1 * ($data['KWH'] * $tarif))."\n\n";
        }else{
            echo $data['KWH'] * $tarif."\n\n";
        }
});

?>
