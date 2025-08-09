<?php
// Data nilai siswa
$siswa = [
    "Ali" => [85, 90, 78, 80, 82, 90],
    "Budi" => [70, 75, 80, 86, 89, 86],
    "Citra" => [95, 88, 92, 90, 89, 91],
    "Dewi" => [60, 65, 70, 72, 78, 83]
];

// Menampilkan laporan perkembangan nilai siswa
echo "<h1>Laporan Perkembangan Nilai Siswa</h1>";
echo "<table border='1'>";
echo "<tr><th>Nama Siswa</th><th>Nilai</th><th>Rata-rata</th></tr>";

foreach ($siswa as $nama => $nilai) {
    // Menghitung rata-rata nilai
    $rataRata = array_sum($nilai) / count($nilai);
    
    // Menampilkan data siswa
    echo "<tr>";
    echo "<td>$nama</td>";
    echo "<td>" . implode(", ", $nilai) . "</td>";
    echo "<td>" . number_format($rataRata, 2) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
