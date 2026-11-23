<?php
$buku = [
  ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
  ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
  // tambahkan 4 buku lagi
];
foreach ($buku as $b) {
  echo "<tr><td>{$b['judul']}</td><td>{$b['tahun']}</td></tr>";
}

// Contoh array awal
$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982]
];

// Filter buku dengan tahun > 1981
$bukuBaru = array_filter($buku, fn($b) => $b['tahun'] > 1981);

// Tampilkan hasil filter
echo "<h3>Buku Tahun > 1981</h3>";
foreach ($bukuBaru as $b) {
    echo $b['judul'] . " (" . $b['tahun'] . ")<br>";
}

// Urutkan dari terlama ke terbaru
usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);

// Hitung jumlah total buku
$jumlahBuku = count($buku);

echo "<h3>Katalog Terurut & Jumlah Buku</h3>";
echo "Total buku: " . $jumlahBuku . "<br>";

foreach ($buku as $b) {
    echo "- " . $b['judul'] . " (" . $b['tahun'] . ")<br>";
}
?>
