<?php
// Start session
session_start();

// Include database configuration
@include 'config.php';

// Initialize error variable
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM sign WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Authentication successful
        $_SESSION['email'] = $email;
        header("Location: home.php");
        exit();
    } else {
        // If authentication failed, set error message
        $error = "Invalid username or password";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
<div class="form-container">
    <form action="login.php" method="post">
        <div class="container">
            <div class="log">
                <p>BROOKHOUSE INTERNATINAL SCHOOL</p>
                <img src="logo.jpg" alt="">
                <p>Hello! We are glad to communicate with you.</p>
            </div>
        </div>
        <h3>Login Now</h3>
        <?php
        if ($error) {
            echo '<span class="error-msg">' . $error . '</span>';
        }
        ?>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Login now" class="form-btn">
        <p>Login with</p>
        <a href="#">Google</a><br>
        <a href="#">Microsoft</a>
    </form>
</div>
</body>
</html>
