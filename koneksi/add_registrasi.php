
<?php
include 'koneksi.php';

// Ambil data dari form registrasi
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['notelp'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Simpan data ke tabel pembeli
$sql = "INSERT INTO pembeli (nama, email, password, no_telp)
        VALUES (?, ?, ?, ?)";

$stmt = $scan->prepare($sql);
$stmt->bind_param("ssss", $nama, $email, $password, $no_telp);

// Jalankan query
if ($stmt->execute()) {
    echo "Registrasi berhasil! <a href='../login.php'>Silakan login</a>";
} else {
    echo "Registrasi gagal: " . $stmt->error;
}

$stmt->close();
$scan->close();
?>
