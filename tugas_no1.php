<?php 

function penjumlahan($a,$b){
    echo "<br> PENJUMLAHAN";
    echo "<br> Operator : +";
    echo "<br> Hasil : ", $a - $b;        
}
function pengurangan($a,$b){
    echo "<br> PENGURANGAN";
    echo "<br> Operator : -";
    echo "<br> Hasil : ", $a - $b;        
}
function perkalian($a,$b){
    echo "<br> PERKALIAN";
    echo "<br> Operator : *";
    echo "<br> Hasil : ", $a * $b;        
}
function pembagian($a,$b){
    echo "<br> PEMBAGIAN";
    echo "<br> Operator : /";
    echo "<br> Hasil : ", $a / $b;        
}
function modulus($a,$b){
    echo "<br> MODULUS";
    echo "<br> Operator : %";
    echo "<br> Hasil : ", $a % $b;        
}

$angka_satu = 10;
$angka_dua = 5;

echo "Bilangan 1 = ", $angka_satu;
echo "<br>";
echo "Bilangan 1 = ", $angka_dua;
echo "<br> <br> Berikut merupakan hasil operasi dari kedua bilangan diatas: <br>";

penjumlahan($angka_satu, $angka_dua);
echo "<br>";
pengurangan($angka_satu, $angka_dua);
echo "<br>";
perkalian($angka_satu, $angka_dua);
echo "<br>";
pembagian($angka_satu, $angka_dua);
echo "<br>";
modulus($angka_satu, $angka_dua);
?>