
<?php
session_start();

$host = "localhost";
$db = "stepup";
$user = "root";
$pass = "";
$port = "3307";

// Koneksi
$scan = new mysqli($host, $user, $pass, $db, $port);

// Cek Koneksi
if ($scan->connect_error) {
    die("Koneksi Gagal: " . $scan->connect_error);
}
?>
