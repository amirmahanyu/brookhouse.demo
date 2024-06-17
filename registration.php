<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    // Check if user already exists
    $select = "SELECT * FROM sign WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Passwords do not match!';
        } else {
            // Hash the password before storing it
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
            $insert = "INSERT INTO sign (firstname, surname, email, password, user_type) VALUES('$firstname','$surname','$email', '$hashed_pass', '$user_type')";
            if (mysqli_query($conn, $insert)) {
                header("Location: login.php");
            } else {
                $error[] = 'Failed to register user!';
            }
        }
    }
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="register">
    <div class="form-container">
        <form action="" method="post" onsubmit="return validatePassword()">
            <div class="container">
                <div class="log">
                    <p>BROOKHOUSE INTERNATINAL SCHOOL</p>
                    <img src="logo.jpg" alt="Organization Logo">
                </div>
            </div>
            <h3>Register Now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $err) {
                    echo '<span class="error-msg">' . htmlspecialchars($err) . '</span>';
                }
            }
            ?>
            <input type="text" name="firstname" placeholder="Enter your first name" required>
            <input type="text" name="surname" placeholder="Enter your surname" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" id="password" name="password" placeholder="Enter your password" minlength="12" required>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
            <select name="user_type" required>
                <option value="user">User</option>
                <option value="Teacher">Teacher</option>
            </select>
            <input type="submit" class="form-btn" name="submit" value="Register Now">
            <p>Already have an account? <a href="login.php">Login Now</a></p>
        </form>
    </div>
    <script>
    function validatePassword() {
        var password = document.getElementById('password').value;
        var pattern = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{12,}$/;

        if (!pattern.test(password)) {
            alert("Password must contain at least one number, one letter, and one special character, and have a minimum length of 12 characters.");
            return false;
        }
        return true;
    }
    </script>
</body>
</html>
