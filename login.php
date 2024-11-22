<?php
// Start session
session_start();

// Include database configuration file
include"db_connect.php"; // Ensure the path to config.php is correct

// Verify that connection exists
if (!isset($conn)) {
    die("Database connection is not set.");
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user from the database
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the query failed
    if (!$result) {
        die("Error: " . mysqli_error($conn)); // Display error if query fails
    }
    
    $user = mysqli_fetch_assoc($result);

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        // Store user information in the session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        // Redirect to a protected page (e.g., dashboard.php)
        header("Location: index.php");
        exit;
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gems Store</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <main>
        <section class="login-section">
            <h2>Login to Your Account</h2>
            <?php
            if (isset($error_message)) {
                echo "<p class='error-message'>$error_message</p>";
            }
            ?>
            <form action="login.php" method="POST" class="login-form">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Password:</label>
                <div style="position: relative;">
                    <input type="password" name="password" id="password" required>
                    <button type="button" onclick="togglePassword()" class="toggle-password-button">Show</button>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </section>
    </main>

    <script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var toggleButton = passwordField.nextElementSibling;
        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleButton.textContent = "Hide";
        } else {
            passwordField.type = "password";
            toggleButton.textContent = "Show";
        }
    }
    </script>
</body>
</html>