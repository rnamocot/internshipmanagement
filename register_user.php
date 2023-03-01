<?php
session_start();

// connect to the database
include_once("./config/mydb.php");
$conn = connectionDB();

if (isset($_POST['btn-register'])) {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check if passwords match
    if ($password != $confirm_password) {
        $_SESSION['message'] = "Passwords do not match";
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into database
    $sql = "INSERT INTO rn_main_users(name, username, email, password) VALUES ('$name', '$username', '$email', '$hashed_password')";
    mysqli_query($conn, $sql);

    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['message'] = "You are now logged in";
    header("Location: main.php");
    exit();
}
?>


