<?php
session_start();
$conn = new mysqli("localhost", "root", "root", "loginphp");

$username = $_POST['username'];
$password = md5($_POST['password']); // gunakan password_hash() di real case

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    $_SESSION['error'] = "Username atau password salah";
    header("Location: login.php");
}