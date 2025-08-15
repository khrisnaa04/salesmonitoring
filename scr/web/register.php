<!-- File: registration.php -->
<?php
// register.php

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$hashedPassword', '$role')";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem BI | Registration</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <h2>REGISTRATION</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autofocus="true">
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="" disabled selected>Select Role</option>
          <option value="Manager">Manager</option>
          <option value="Data Analyst ">Data Analyst</option>
        </select>
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
