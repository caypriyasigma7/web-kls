<?php
// Periksa apakah tombol submit ditekan
if (isset($_POST['submit'])) {
    // Ambil nilai username dan password dari input form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password sesuai
    if ($username == "cahya" && $password == "1234") {
        // Redirect ke cisat.php jika login berhasil
        header("Location: cisat.php");
        exit;
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
