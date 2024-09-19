<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari perhitungan a = $a dan b = $b <br><br>";
echo "Hasil penjumlahan (a dan b) = " . $hasilTambah . "<br>";
echo "Hasil pengurangan (a dan b) = " . $hasilKurang . "<br>";
echo "Hasil perkalian (a dan b) = " . $hasilKali . "<br>";
echo "Hasil pembagian (a dan b) = " . $hasilBagi . "<br>";
echo "Hasil sisa pembagian (a dan b) = " . $sisaBagi . "<br>";
echo "Hasil pangkat (a dan b) = " . $pangkat . "<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br>Hasil dari perbandingan a = $a dan b = $b <br><br>";
echo "Hasil (a) sama dengan (b) = $hasilSama <br>";
echo "Hasil (a) tidak sama dengan (b) = $hasilTidakSama <br>";
echo "Hasil (a) lebih kecil dari (b) = $hasilLebihKecil <br>";
echo "Hasil (a) lebih besar dari (b) = $hasilLebihBesar <br>";
echo "Hasil (a) lebih kecil sama dengan (b) = $hasilLebihKecilSama <br>";
echo "Hasil (a) lebih besar sama dengan (b) = $hasilLebihBesarSama <br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB =  !$b;

echo "<br><br>Hasil dari Operator Logika a = $a dan b = $b <br><br>";
echo "Hasil AND (a dan b) = $hasilAnd <br>";
echo "Hasil OR (a atau b) = $hasilOr <br>";
echo "Hasil NOT (a) = $hasilNotA <br>";
echo "Hasil NOT (b) = $hasilNotB <br>";

echo "<br><br>Hasil dari Operator Penugasan a = $a dan b = $b <br><br>";

$a += $b;
echo "Hasil tambah (a += b) = $a <br>";

$a = 10;
$a -= $b;
echo "Hasil kurang (a -= b) = $a <br>";

$a = 10;
$a *= $b;
echo "Hasil kali (a *= b) = $a <br>";

$a = 10;
$a /= $b;
echo "Hasil bagi (a /= b) = $a <br>";

$a = 10;
$a %= $b;
echo "Hasil modulus (a %= b) = $a <br>";

$a = 10;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;  

echo "<br><br>Hasil dari Operator Identik a = $a dan b = $b <br><br>";
echo "Hasil (a) identik dengan (b) = $hasilIdentik <br>";
echo "Hasil (a) tidak identik dengan (b) = $hasilTidakIdentik <br>";
?>