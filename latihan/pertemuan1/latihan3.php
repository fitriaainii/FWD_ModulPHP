<?php

    $fruits = [
        ['Name' => 'Mangga', 'Color' => 'Hijau', 'Taste' => 'Manis', 'Price' => 10000, 'Stock' => 50],
        ['Name' => 'Apel', 'Color' => 'Merah', 'Taste' => 'Asam', 'Price' => 15000, 'Stock' => 30],
        ['Name' => 'Jeruk', 'Color' => 'Kuning', 'Taste' => 'Asam Manis', 'Price' => 12000, 'Stock' => 20],
        ['Name' => 'Pisang', 'Color' => 'Kuning', 'Taste' => 'Manis', 'Price' => 8000, 'Stock' => 40],
    ];

    echo "<h2>List Buah-buahan</h2>";
    foreach ($fruits as $fruit) {
        echo "Name: " . $fruit['Name'] . "<br>";
        echo "Color: " . $fruit['Color'] . "<br>";
        echo "Taste: " . $fruit['Taste'] . "<br>";
        echo "Price: " . $fruit['Price'] . "<br>";
        echo "Stock: " . $fruit['Stock'] . "<br>";
        echo "<hr>";
    }

?>