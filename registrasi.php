<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="proses_registrasi.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required> <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Registrasi">
    </form>
</body>
</html>