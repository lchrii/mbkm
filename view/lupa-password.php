<?php
include '../function/proses-lupa.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="../assets/css/style-lupa-password.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../assets/img/Logo MBKM.png" alt="Logo MBKM">
        </div>

        <!-- Tampilkan Pesan -->
        <?php if (isset($_SESSION['message'])): ?>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>

        <!-- Formulir Email -->
        <?php if (!isset($_SESSION['step']) || $_SESSION['step'] === 'email'): ?>
        <form method="POST">
            <div>Silahkan Masukkan Email Anda:</div>
            <input type="email" name="email" placeholder="Email" required />
            <button type="submit">Selanjutnya</button>
        </form>
        <?php endif; ?>

        <!-- Formulir OTP -->
        <?php if (isset($_SESSION['step']) && $_SESSION['step'] === 'otp'): ?>
        <form method="POST">
            <div>Silahkan Masukkan Kode OTP:</div>
            <input type="text" name="otp" maxlength="4" placeholder="Kode OTP" required />
            <button type="submit">Konfirmasi</button>
        </form>
        <?php endif; ?>

        <!-- Formulir Reset Password -->
        <?php if (isset($_SESSION['step']) && $_SESSION['step'] === 'password'): ?>
        <form method="POST">
            <div>Silahkan Masukkan Password Baru:</div>
            <input type="password" name="password" placeholder="Password Baru" required />
            <input type="password" name="confirm-password" placeholder="Konfirmasi Password Baru" required />
            <button type="submit">Simpan Perubahan</button>
        </form>
        <?php endif; ?>
    </div>
</body>

</html>
