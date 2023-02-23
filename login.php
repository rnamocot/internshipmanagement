<?php
session_start();

// connect to the database
include_once("./config/mydb.php");
$conn = connectionDB();

if (isset($_POST['btn-login'])) {
    // Get form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if user exists in the database
    $sql = "SELECT * FROM rn_main_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        $_SESSION['message'] = "User not found";
        header("Location: index.php");
        exit();
    }

    // Verify password
    if (password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['message'] = "You are now logged in";
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = "Incorrect password";
        header("Location: index.php");
        exit();
    }
}
?>
