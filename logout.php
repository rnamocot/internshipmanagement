<?php
// logout.php
if (isset($_SESSION['username'])) {
    // unset the session
    session_unset();
    // destroy the session
    session_destroy();
    // redirect the user to the login page
    header('Location: index.php');
    exit();
}
?>