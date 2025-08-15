<?php
// edit_data.php

include("config.php");

if (isset($_GET['username'])) {
    $id = $_GET['username'];

    $sql = "SELECT * FROM user WHERE username = '$id'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $username = $user['username'];
        $email = $user['email'];
        $role = $user['role'];
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $new_password = $_POST["new_password"];

    if (!empty($new_password)) {
        $hashedPassword = password_hash($new_password, PASSWORD_BCRYPT);
        $sql_update = "UPDATE user SET username = '$username', email = '$email', role = '$role', password = '$hashedPassword' WHERE username = '$id'";
    } else {
        $sql_update = "UPDATE user SET username = '$username', email = '$email', role = '$role' WHERE username = '$id'";
    }

    if (mysqli_query($koneksi, $sql_update)) {
        header("Location: control.php");
        exit;
    } else {
        echo "Error: " . $sql_update . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem BI | Update Data</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?username=' . $id); ?>" method="post">
      <h2>UPDATE DATA</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autofocus="true" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="" disabled>Select Role</option>
          <option value="manager" <?php if ($role === 'manager') echo 'selected'; ?>>Manager</option>
          <option value="da" <?php if ($role === 'da') echo 'selected'; ?>>Data Analyst</option>
        </select>
      </div>
      <div class="input-group">
        <label for="new_password">New Password (Leave blank if not changing)</label>
        <input type="password" id="new_password" name="new_password">
      </div>
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
