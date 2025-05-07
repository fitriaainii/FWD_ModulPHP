<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Modul Pemrograman PHP - Form Nilai</title>
    <style>
        .container {
            background:rgb(114, 161, 255);
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            width: 450px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        body {
            font-family: Arial, sans-serif;
            background:rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 16px 0 16px;
            border: 1px solid ;
            border-radius: 10px;
        }

        button {
            width: 95%;
            padding: 15px;
            background:rgb(55, 49, 208);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            align: center;
        }

        .result {
            margin-top: 15px;
            background:rgb(144, 201, 255);
            padding: 15px;
            border-radius: 6px;
            color:rgb(255, 255, 255);
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Nilai Ujian</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Nilai Ujian:</label>
        <input type="number" name="nilai" required>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['nilai'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $nilai = htmlspecialchars($_POST['nilai']);

        echo "<div class='result'>";
        echo "<h3>Hasil Input:</h3>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Nilai Ujian: $nilai</p>";
        if ($nilai >70) {
            echo "<p>Status: Lulus</p>";
        } else {
            echo "<p>Status: Remedial</p>";
        }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>