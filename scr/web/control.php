<?php
include("config.php");

// Fungsi untuk mendapatkan data dari database
function getDataFromDatabase() {
    global $koneksi;
    $data = array();

    $sql = "SELECT * FROM user"; // Ganti "data_table" dengan nama tabel Anda
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

// Panggil fungsi untuk mendapatkan data dari database
$dataTable = getDataFromDatabase();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem BI | Controll</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="sidebar">
    <img src="assets/logo.png" alt="Logo" class="logo">
    <h3>Menu</h3>
    <ul>
      <li><a href="index.php">Home</a></li>
      <?php
      session_start();
      if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"]) {
        $role = $_SESSION["role"];

        if ($role === "manager") {
          echo '<li><a href="#" onclick="logout()">Logout</a></li>';
        } else {
          echo '<li><a href="control.php">Control</a></li>';
          echo '<li><a href="#" onclick="logout()">Logout</a></li>';
        }
      }
      ?>
    </ul>
  </div>
  <div class="content">
    <table>
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dataTable as $row) : ?>
          <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td>
              <a class= "button-update" href="update.php?username=<?php echo $row['username']; ?>">Update</a>
              <a class= "button-delete" href="delete.php?username=<?php echo $row['username']; ?>">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script>
    function logout() {
      window.location.href = "login.php";
      sessionStorage.removeItem("isLoggedIn");
    }
  </script>
</body>
</html>
