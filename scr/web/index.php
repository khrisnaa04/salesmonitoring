<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem BI | Home </title>
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
    <h1>Welcome to Sistem BI PT XYZ of Sales</h1><br>
    <iframe title="2023-07-24 Power BI" width="1200" height="700" src="https://app.powerbi.com/reportEmbed?reportId=4fbdaef3-5122-4488-b111-72051476f718&autoAuth=true&ctid=b4058381-7fe5-41a3-8598-596679b8eb13" frameborder="0" allowFullScreen="true"></iframe>
  </div>
  <script>
    function logout() {
      window.location.href = "login.php";
      sessionStorage.removeItem("isLoggedIn");
    }
  </script>
</body>
</html>