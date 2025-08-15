<?php
include("config.php");

if (isset($_GET['username'])) {
    $username = $_GET['username'];

    if ($username === "admin") {
        echo "Admin account cannot be deleted.";
    } else {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) == 1) {
            $sql_delete = "DELETE FROM user WHERE username = '$username'";

            if (mysqli_query($koneksi, $sql_delete)) {
                header("Location: control.php");
                exit;
            } else {
                echo "Error deleting user: " . mysqli_error($koneksi);
            }
        } else {
            echo "User not found.";
        }
    }
} else {
    echo "Invalid request.";
}

mysqli_close($koneksi);
?>
