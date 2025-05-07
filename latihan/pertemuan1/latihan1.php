<?php

//Array Numerik
$fruits = ["Mangga", "Apel", "Jeruk", "Pisang", "Anggur", "Naga"];

//Menampilkan isi array
echo "<h2>Nama - nama Buah</h2>";
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";
echo $fruits[3] . "<br>";
echo $fruits[4] . "<br>";
echo $fruits[5] . "<br>";
echo "<hr>";

// Mengubah urutan pisang menjadi pertama
$fruits[0] = "Pisang";

//Cara Penggunaan Looping untuk menampilkan isi array
echo "--- Cetak Value dari Array ---";
echo "<br>";
foreach ($fruits as $fruit) {
    echo "Nama Buah: " . $fruit . "<br>";
}
echo "<hr>";

//Menggunakan Looping untuk menampilkan key
echo "--- Cetak Key dari Array ---"; 
echo "<br>";
foreach ($fruits as $id => $fruit) {
    echo "Key array buah: " . $id . "<br>";
}
echo "<hr>";

//Menggunakan Looping untuk menampilkan key dan value
echo "--- Cetak Key dan Value dari Array ---";
echo "<br>";
foreach ($fruits as $id => $fruit) {
    echo "Key array buah " . $id . ", yaitu: " . $fruit . "<br>";
}
echo "<hr>";




?>