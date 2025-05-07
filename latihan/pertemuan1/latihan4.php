<?php

// Latihan Struktur Kendali 1
$nama = "Fitriani";
$totalBelanja = 2000000;
$keterangan = "";

// If-else untuk menentukan keterangan
if ($totalBelanja >= 1000000) {
    $keterangan = "Selamat $nama, Anda mendapatkan diskon 10%";
} else {
    $keterangan = "Maaf $nama, Anda tidak mendapatkan diskon";

}

// Menampilkan hasil
echo "Nama: $nama <br>";
echo "Total Belanja: Rp$totalBelanja <br>";
echo "Keterangan: $keterangan <br>";
echo "<hr>";


// Latihan Struktur Kendali 2
$nama = "Fitriani";
$matapelajaran = "Pemrograman Web";
$nilai = 85;

// If-else untuk menentukan keterangan
if ($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 70 && $nilai < 85) {
    $grade = "B";
} elseif ($nilai >= 60 && $nilai < 70) {
    $grade = "C";
} else {
    $grade = "D";                          
}

// A = Memuaskan
// B = Baik Sekali
// C = Cukup
// D = Kurang Baik
switch ($grade) {
    case "A":
        $keterangan = "Memuaskan";
        break;
    case "B":
        $keterangan = "Baik Sekali";
        break;
    case "C":
        $keterangan = "Cukup";
        break;
    case "D":
        $keterangan = "Kurang Baik";
        break;
    default:
        $keterangan = "Tidak Ada Keterangan";
}

// Menampilkan hasil
echo "Nama Mahasiswa: $nama <br>";
echo "Mata Pelajaran: $matapelajaran <br>";                
echo "Nilai: $nilai <br>";
echo "Grade: $grade <br>";
echo "Keterangan: $keterangan <br>";
echo "<hr>";

?>