<?php

function CekPrima($angka){
    $temp = 0;
    for($i =  $angka; $i > 0; $i--){
        $mod = $angka % $i;
        if($mod == 0){
            $temp++;
        }
    }
    if($temp == 2){
        return $angka;
    }
}

echo "Bilangan Prima dari 1 - 50 : <br> <br>";

for($i = 1; $i <= 50; $i++){
    $hasil = CekPrima($i);
    if($hasil != null){
        echo $hasil, "<br>";
    }
}

?>