<?php session_start(); 
// Sumber : https://chatgpt.com/c/686105f5-4ecc-8013-aa20-e95465e77097
//jika user sudah login redirect ke halaman utama
if(isset($_SESSION['username'])){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <?php if (isset($_SESSION['error'])): ?>
    <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
    <form action="proses_login.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>