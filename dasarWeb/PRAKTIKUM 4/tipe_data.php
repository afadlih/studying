<?php
$a=10;
$b=5;
$c=$a+5;
$d=$b + (10*5);
$e=$d-$c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

//Tipe Data Nilai Rata Rata

echo "<br><br>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);

//Tipe Data Boolean
echo "<br><br>";
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

//Tipe Data String
echo "<br><br>";
$namaDepan = "Ahmad Fadlih";
$namaBelakang = 'Wahyu Sardana';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;
echo "<br>";
echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';
echo "<br>";
echo $namaLengkap;

//Tipe Data Array
echo "<br><br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>