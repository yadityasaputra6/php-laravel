<?php

// echo 'Program Ganjil_Genap';
// $number = 1;

// if ($number % 2 == 0){
//     echo 'Genap';
// } else {
//    echo 'Ganjil';
// }


// PROGRAM HITUNG LUAS SEGITIGA
// DEKLARASI
// VARIABLE a DAN b TIPE DATA >>> INT
// VARIABLE HASIL TIPE DATA >>> FLOAT
// ALGORITMA
// NILAI MASUK (a.t)
// HASIL =

// echo PHP_EOL;
// echo ('Program Hitung Luas Segitiga'). PHP_EOL;

// $a = 6;
// $t = 20;

// $hasil = (int)(1/2*$a*$t);

// echo ("luas segitiga = $hasil"). PHP_EOL;

// var_dump($hasil);

/* hitung volume balok
deklarasi
var p, l, t
var hasil string
algoritma 
input
*/


// echo ('Hitung Luas Balok'). PHP_EOL;;

// $p = 82;
// $l = 46;
// $t = 18;

// $hasil = (string) ($p*$l*$t);

// echo ("hasil Luas Balok = $hasil"). PHP_EOL;

// var_dump ($hasil);



// Program keliling & luas persegi, keliling & luas lingkarang

echo "A. Keliling Persegi". PHP_EOL;
echo "Sisi : ";
$sisi = trim(fgets(STDIN));
$keliling = 4 * $sisi;
echo "Keliling Persegi = $keliling". PHP_EOL;

echo "B. Luas Persegi". PHP_EOL;
echo "Sisi : ";
$sisi = trim(fgets(STDIN));
$luas = $sisi * $sisi;
echo "Luas Persegi = $luas". PHP_EOL;

echo "C. Keliling Lingkaran". PHP_EOL;
echo "Diameter : ";
$diameter = trim(fgets(STDIN));
$keliling = 3.14 * $diameter;
echo "Keliling Lingkaran = $keliling". PHP_EOL;

echo "D. Luas Lingkaran". PHP_EOL;
echo "Jari-jari : ";
$jarijari = trim(fgets(STDIN));
$luas = 22/7 * $jarijari * $jarijari;
echo "Luas Lingkaran = $luas". PHP_EOL;