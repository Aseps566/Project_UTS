<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan prepared statement untuk keamanan!
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username); // "s" menandakan string
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    // Verifikasi password menggunakan password_verify (PENTING!)
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'username' => $user['username'],
            'role' => $user['role']
        ];
        if ($user['role'] === 'admin') {
            header("Location: dashboard/beranda.php");
        } else {
            header("Location: landpage.php");
        }
        exit;
    } else {
        $_SESSION['error'] = "Password salah!";
        header("Location: login.php");
        exit;
    }
} else {
    $_SESSION['error'] = "Username tidak ditemukan!";
    header("Location: login.php");
    exit;
}
$stmt->close();
$conn->close();
?>