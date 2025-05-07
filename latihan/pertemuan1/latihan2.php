<?php
// satu baris
$fruit = ['Name' => 'Mangga', 'Color' => 'Hijau', 'Taste' => 'Manis', 'Price' => 10000, 'Stock' => 50];


// multi baris
$cars = [
    'Name' => 'Toyota', 
    'Color' => 'Merah', 
    'Year' => 2020, 
    'Price' => 200000000
];


// menampilkan isi array fruit
echo "<h2>Nama Buah</h2>";
foreach ($fruit as $key => $value) {
    echo "$key: $value<br>";
}
echo "<hr>";    

// menampilkan isi array cars
echo "<h2>Nama Mobil</h2>";
foreach ($cars as $key => $value) {
    echo "$key: $value<br>";
}
echo "<hr>";

?>