<?php
$admin_name = "admin";
$admin_pass = "1234";

session_start();

if (isset($_SESSION['l_username'])) {
    // If the session is already set, redirect to admin panel
    echo "<script>location.href='adminpanel.php'</script>";
} else {
    // Check if the login form is submitted
    if (isset($_POST['login'])) {
        // Check if the entered username and password are correct
        if ($_POST['l_username'] == $admin_name && $_POST['l_pass'] == $admin_pass) {
            // Set the session variable
            $_SESSION['l_username'] = $admin_name;
            // Redirect to admin panel
            echo "<script>location.href='adminpanel.php'</script>";
        } else {
            // Invalid user, show an alert and redirect to login page
            echo "<script>alert('Invalid user')</script>";
            echo "<script>location.href='adminLogin.php'</script>";
        }
    }
}
?>
