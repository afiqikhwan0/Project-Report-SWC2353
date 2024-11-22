<?php
// Start session to handle messages
session_start();

// Include database configuration file
include "db_connect.php"; // Ensure the path to config.php is correct

// Verify that connection exists
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Check the submitted data
    var_dump($_POST);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if email already exists
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_email);

    if ($result && mysqli_num_rows($result) > 0) {
        $error_message = "Email already registered!";
    } else {
        // Insert new user into database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        // Debug: Check the query and the result
        if (mysqli_query($conn, $query)) {
            $_SESSION['success_message'] = "Registration successful! You can now log in.";
            header("Location: login.php");
            exit;
        } else {
            $error_message = "Error: Could not register. " . mysqli_error($conn);
            echo $error_message;  // Show error message
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <main>
    <section class="container">
        <div class="register-container">
            <h1>REGISTER</h1>
            <?php
            if (isset($error_message)) {
                echo "<p class='error-message'>$error_message</p>";
            }
            ?>
            <form action="register.php" method="POST" class="register-form">
                <label for="username">USERNAME:</label>
                <input type="text" name="username" placeholder="USERNAME" required />

                <label for="email">EMAIL:</label>
                <input type="email" name="email" placeholder="EMAIL" required />

                <label for="password">PASSWORD:</label>
                <input type="password" name="password" placeholder="PASSWORD" required />

                <button type="submit" class="register_btn">REGISTER</button>
            </form>
            <div class="login-forget">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>
    </section>
    </main>
</body>
</html>
