<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the home page (or any other page you prefer)
header("Location: login.php");
exit;
?>
