<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <table>
        <tr>
            <th>Index</th>
            <th>Nama Dosen</th>
        </tr>
        <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
        foreach ($Listdosen as $index => $dosen) {
            echo "<tr>";
            echo "<td>" . $index . "</td>";
            echo "<td>" . $dosen . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>