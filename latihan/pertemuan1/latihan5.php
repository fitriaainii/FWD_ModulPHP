<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method GET</title>
</head>
<body>
    <form method="get">
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="fullname"><br><br>
        
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="alamat"></textarea><br><br>
        
        <input type="submit" name="proses" value="Kirim">
    </form>

    <?php
    $name = $_GET['fullname'] ?? null;
    $alamat = $_GET['alamat'] ?? null;

    echo "<h2>Data yang Dikirim</h2>";
    echo "Nama: $name" . "<br>";
    echo "Alamat: $alamat" . "<br>";
    ?>
</body>
</html>