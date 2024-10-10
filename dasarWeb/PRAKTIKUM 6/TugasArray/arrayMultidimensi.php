<?php
// Array multidimensi untuk menyimpan data mahasiswa
$mahasiswa = [
    [
        'nama' => 'Andi',
        'nim' => '123456',
        'jurusan' => 'Teknik Informatika',
        'email' => 'andi@example.com'
    ],
    [
        'nama' => 'Budi',
        'nim' => '654321',
        'jurusan' => 'Sistem Informasi',
        'email' => 'budi@example.com'
    ],
    [
        'nama' => 'Citra',
        'nim' => '112233',
        'jurusan' => 'Teknik Komputer',
        'email' => 'citra@example.com'
    ]
];


// Menampilkan data mahasiswa
echo "<h1>Data Mahasiswa</h1>";
echo "<ul>";

foreach ($mahasiswa as $mhs) {
    echo "<li>";
    echo "Nama: {$mhs['nama']}<br>";
    echo "NIM: {$mhs['nim']}<br>";
    echo "Jurusan: {$mhs['jurusan']}<br>";
    echo "Email: {$mhs['email']}";
    echo "</li><br>";
}

echo "</ul>";
?>