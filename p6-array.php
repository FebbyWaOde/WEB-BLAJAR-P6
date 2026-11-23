<?php
$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982]
];

$buku[] = [
    "judul" => "Filosofi Kopi",
    "pengarang" => "Dee Lestari",
    "tahun" => 2006
];

// Langkah 2 (yang sudah kamu buat)
echo "<pre>";
print_r($buku);
echo "</pre>";

usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);

// Tambahkan untuk Langkah 3: Ubah menjadi tabel HTML dengan foreach
echo "<table border='1' cellpadding='6'>";
echo "<tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Tahun</th></tr>";

foreach ($buku as $index => $sb) {
    $no = $index + 1;
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $sb['judul'] . "</td>";
    echo "<td>" . $sb['pengarang'] . "</td>";
    echo "<td>" . $sb['tahun'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
