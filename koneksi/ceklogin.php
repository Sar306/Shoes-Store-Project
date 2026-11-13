
<?php
include('koneksi.php');

// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Mencari data pembeli berdasarkan email
$sql = "SELECT * FROM pembeli WHERE email = ?";
$stmt = $scan->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {

    $pembeliData = $result->fetch_assoc();

    // Memeriksa password
    if (password_verify($password, $pembeliData['password'])) {

        $_SESSION['id_user'] = $pembeliData['id_user'];
        $_SESSION['nama'] = $pembeliData['nama'];
        $_SESSION['email'] = $pembeliData['email'];

        header("Location: ../index.php");
        exit;

    } else {
        echo "<script>
                alert('Email atau Password salah!');
                window.location='../login.php';
              </script>";
    }

    } else {
        echo "<script>
                alert('Email atau Password salah!');
                window.location='../login.php';
              </script>";
    }

$stmt->close();
$scan->close();
?>
