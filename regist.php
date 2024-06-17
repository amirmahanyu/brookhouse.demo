<?php
@include 'config.php';

 // Collect the posted form data and assign to scalar variables
if(isset($_POST['submit'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = $_POST['email'];
    $pass =  $_POST['password'];
    $cpass =  $_POST['cpassword'];
    $user_type =  $_POST['user_type'];

$select = " SELECT * FROM sign WHERE email = '$email' && password='$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

$error[]= 'user already exit!'; 

}else{
    if($pass != $cpass){
    $error[]= 'password not matched!'; 

}else{
    $insert="INSERT INTO sign (firstname, surname, email, password , user_type) VALUES('$firstname','$surname','$email', '$pass', '$user_type')";
    mysqli_query($conn, $insert);
   header ("location:login.php");
    }
}
};
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="register">
    <div class="form-container">
        <form action="" method="post">
        <div class="container">
        <div class="log">
        <p>[Organazation name goes Here]</p>
        <img src="logo.jpg" alt="">
        
        </div>
        
    </div>
            
        <h3>Register Now</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error. '</span>';
            }; 
        };
         ?> 
        <input type="text" name="firstname" placeholder="Enter your first name" id="" required>
        <input type="text" name="surname" placeholder="Enter your sur name" id="" required>
        <input type="text" name="email" placeholder=" Enter your email" id="" required>
       <div id="passwordForm" onsubmit="return validatePassword()">
  <input type="password" id="" name="password" placeholder=" Enter your password" minlength="12" required>
  <input type="password" id="" name="cpassword" placeholder="confirm your password" required></div>
  <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
       <input type="submit" class="form-btn" name="submit" value="register now" > 
            <p>Already have an account? <a href="login.php">Login Now</a></p>
        </form>
    </div>


    <script src="script.js">
     function validatePassword() {
  var password = document.getElementById('password').value;

  // Regular expression pattern to match the specified criteria
  var pattern = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{12,}$/;

  // Test the password against the pattern
  if (!pattern.test(password)) {
    alert("Password must contain at least one number, one letter, and one special character, and have a minimum length of 12 characters.");
    return false; // Prevent form submission
  }
  return true; // Allow form submission
}
</script>
    
</body>
</html>