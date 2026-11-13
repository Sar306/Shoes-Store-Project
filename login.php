<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Document</title>
</head>
<body>
  <div class="login-container">
    <h2>Login Step Up</h2>
    <form id="loginform" method="POST" action="koneksi/ceklogin.php" onsubmit="return validateForm()">
      <input type="email" name="email" id="email" placeholder="Email" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p id="errorMessage" class="error-message">
      <a href="registrasi.php">Klik untuk registrasi</a>
    </p>
  </div>
  <script src="script.js"></script>
</body>
</html>