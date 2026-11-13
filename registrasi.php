<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi - Shoe Store</title>
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>

    <div class="login-container">
        <h2>Registrasi Akun</h2>

        <form action="koneksi/add_registrasi.php" method="POST">

            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="tel" name="notelp" id="notelp" placeholder="Nomor Telepon" required>
            <input type="password" name="password" id="password" placeholder="Password" required>

            <button type="submit">Daftar</button>

        </form>

        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>

</body>
</html>
