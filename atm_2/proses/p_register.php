<?php
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $no_telp = $_POST['no_telp'];
    $password = $_POST['password'];
    $pin = $_POST['pin'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, no_telp, password, pin) VALUES ('$username', '$no_telp', '$hashed_password', '$pin')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Berhasil membuat akun!'); window.location='../index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Terjadi kesalahan: " . $conn->error . "');</script>";
    }
    $conn->close();
}
?>