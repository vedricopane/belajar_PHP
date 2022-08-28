<?php

$a = 5;
$b = 4;
$total = 3;

// echo $total;
// Operator aritmatika
echo "Hasil : ", $a + $b;
echo "\nHasil : ", $a - $b;
echo "\nHasil : ", $a * $b;
echo "\nHasil : ", $a / $b;
echo "\nHasil : ", $a % $b;
echo "\nHasil : ", $a ** $b;

// Operator assignment
echo "\n", $total = $total + $a;   //cara penjumlahan pertama
echo "\n", $total += $a;   //cara penjumlahan kedua, dimana lebih simple.
echo "\n", $total -= $a;   //cara pengurangan
echo "\n", $total *= $a;   //cara perkalian
echo "\n", $total /= $a;   //cara pengurangan

// Operator pembanding
$c = 5;
// $d = "5";
$d = 6 ;

$komparasi = $a == $b;
echo var_dump($komparasi);  //komparasi equal

//komparasi identical
$komparasi_identical = $c == $d;
echo var_dump($komparasi_identical);  //komparasi equal --> akan menghasilkan true karena dengan operator (==) tidak akan mengecek tipe datanya.
$komparasi_identical2 = $c === $d;
echo var_dump($komparasi_identical2);  //komparasi equal --> akan menghasilkan false karena dengan operator (===) akan mengecek tipe datanya.

//komparasi not identical
$komparasi_identical3 = $c !== $d;  //$c tidak sama dengan $d
echo var_dump($komparasi_identical3);
$komparasi_identical4 = $c < $d; 
echo var_dump($komparasi_identical4);
$komparasi_identical4 = $c > $d; 
echo var_dump($komparasi_identical4);

// Operator increment/decrement
$c++;
echo $c;
$d--;
echo $d;

// Operator string
$e = "halloooo";
$f = "duniaa";
echo $e . $f;   //mengabungkan dua string atau lebih

?>