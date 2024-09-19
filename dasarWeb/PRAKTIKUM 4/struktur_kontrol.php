<?php
echo "Struktur Kontrol <br><br>";
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf D";
}

echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";
echo "Perulangan For<br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";
echo "Perulangan Foreach<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";
echo "Perulangan Foreach If<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

    //Soal Cerita 4.6 
    echo "<br><br>";
    echo "Soal Cerita 4.6 <br><br>";
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    
    // Urutkan nilai dari yang terkecil ke yang terbesar
    sort($nilaiSiswa);
    
    // Hapus dua nilai terendah
    array_shift($nilaiSiswa);
    array_shift($nilaiSiswa);
    
    // Hapus dua nilai tertinggi
    array_pop($nilaiSiswa);
    array_pop($nilaiSiswa);
    
    // Hitung total nilai yang tersisa
    $totalNilai = array_sum($nilaiSiswa);
    
    // Hitung rata-rata nilai
    $rataRataNilai = $totalNilai / count($nilaiSiswa);
    
    echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai<br>";
    echo "Nilai rata-rata adalah: $rataRataNilai";

?>