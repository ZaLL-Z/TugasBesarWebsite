<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: /private/dashboard.php");
    exit;
}

$error = $_GET['error'] ?? '';
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="auth-container">
    <div class="auth-card">
        <h2>Login</h2>

        <?php if ($error): ?>
            <div class="auth-error">
                Username atau password salah
            </div>
        <?php endif; ?>

        <form method="post" action="../process/login_process.php">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Masuk</button>
        </form>

        <div class="auth-link">
            Belum punya akun?
            <a href="register.php">Daftar</a>
        </div>
    </div>
</div>

</body>
</html>
