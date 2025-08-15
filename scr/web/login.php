<?php
include("config.php");

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION["isLoggedIn"] = true;
            $_SESSION["role"] = $user['role'];
            header("Location: index.php");
            exit;
        } else {
            $message = 'Invalid email or password.';
        }
    } else {
        $message = 'Invalid email or password.';
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem BI | Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
  <img src="assets/logo.png" alt="Logo Perusahaan" class="logo">
    <form method="post" action="login.php">
      <h2>LOGIN</h2>
      <?php if (!empty($message)) : ?>
        <p class="error-message"><?php echo $message; ?></p>
      <?php endif; ?>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autofocus="true">
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </form>
  </div> 
</body>
</html>