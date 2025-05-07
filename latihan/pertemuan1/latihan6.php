<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
</head>
<body>
    <form method="post">
        <label for="nama">Username</label><br>
        <input type="text" id="username" name="username"><br><br>
        

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" name="proses" value="Login">
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        echo "<h2>Data yang Dikirim</h2>";
        echo "Username: $username" . "<br>";
        echo "Password: $password" . "<br>";
    }
    ?>
</body>
</html>