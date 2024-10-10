<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        h1 {
            font-size: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Siswa</h1>
    <?php
    $dataSiswa = [
        ["nama" => "Andi", "umur" => 15, "kelas" => "10A", "alamat" => "Jl. Merdeka No. 1"],
        ["nama" => "Budi", "umur" => 16, "kelas" => "11B", "alamat" => "Jl. Sudirman No. 2"],
        ["nama" => "Cici", "umur" => 14, "kelas" => "9C", "alamat" => "Jl. Thamrin No. 3"],
        ["nama" => "Dedi", "umur" => 17, "kelas" => "12D", "alamat" => "Jl. Gatot Subroto No. 4"]
    ];

    $totalUmur = array_sum(array_column($dataSiswa, 'umur'));
    $jumlahSiswa = count($dataSiswa);
    $rataRataUmur = $totalUmur / $jumlahSiswa;
    ?>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataSiswa as $siswa) : ?>
                <tr>
                    <td><?php echo $siswa["nama"]; ?></td>
                    <td><?php echo $siswa["umur"]; ?></td>
                    <td><?php echo $siswa["kelas"]; ?></td>
                    <td><?php echo $siswa["alamat"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>Total Rata-rata Umur Siswa: <?php echo number_format($rataRataUmur, 2); ?></p>
</body>

</html>