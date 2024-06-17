<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer src="app.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="contact">
    <div class="top-bar">
        <span>Dial: <ion-icon name="call-outline"></ion-icon> +255719-461-916</span>
        <ul>
            <li>Let Us Connect:</li>
            <li><a href="news.php">Newsroom</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </div>
    <div class="mosaporg">
        <p>BROOKHOUSE INTERNATIONAL SCHOOL</p>
    </div>
    <nav>
        <div class="logo">
            <img src="logo.jpg" alt="logo"><br>OUR ENLIGHTLEN TO BRITLY BE SHINE
        </div>
        <div class="toggle">
            <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
        </div>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="program.php">Programs</a></li>
            <li><a href="support.php">Support Us</a></li>
            <li><a href="contact.php">Contacts</a></li>
        </ul>
    </nav>
    <div class="message">
        <h1>Why do we need your email address?</h1>
        <p>We create new embedded services for each season so you can quickly get notifications about your preferred services all without ever pushing to the website. To do this, we need an email address so we know which services are yours and so you can come back and manage them.</p>
        <p>Call or submit our online form to request our services. We look forward to serving you!</p>
    </div>
    <div class="contact-in">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15896.989872651!2d39.111822170706446!3d-5.
                063590818609165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1843da486b337cd9%3A0xaaf70fc7191b4137!2sRaskazone%2C%20Tanga!5e0!3m2!1sen!2stz!4v1718618114604!5m2!1sen!2stz"
                width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


               
        </div> 
        <div class="contact-form">
            <div class="container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h3>Get in touch</h3>
                    <input type="text" id="name" placeholder="Enter your Name" name="name" required>  
                    <input type="email" id="email" placeholder="Enter your email" name="email" required> 
                    <input type="number" id="phone" placeholder="Enter your phone no." name="phone" required>
                    <input type="text" id="city" placeholder="City you are currently in" name="city" required>
                    <input type="text" id="nationality" placeholder="Nationality" name="nationality" required>
                    <textarea id="message" rows="4" placeholder="How can we help you?" name="message" required></textarea>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col">
                <div class="square">
                    <img src="logo.jpg" alt="Profile Picture">
                </div>
                <p>BROOKHOUSE INTERNATIONAL SCHOOL</p>
            </div>
            <div class="col">
                <h3>BROOKHOUSE <div class="underline"><span></span></div></h3>
                <p>P.O.BOX 1509</p>
                <p>RASKAZONE STREET, RASKAZONE WARD,</p>
                <p>TANGA MUNICIPAL, Tanzania.</p>
                <p class="email-id">BROOKHOUSE@yahoo.com</p>
                <h4>+255719-461-916</h4>
            </div>
            <div class="col">
                <h3>ACTIVITIES <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Programs</a></li>
                    <li><a href="#">Support Us</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>THE SCHOOL <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="#">NewsRoom</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>            
            </div>
        </div>
        <div class="call">
            <p>Got Questions? Call Us:</p>
            <span>Dial: <ion-icon name="call-outline"></ion-icon> +255719-461-916</span>
        </div>
        <hr>
        <div class="copyright">           
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="#"><ion-icon name="logo-yahoo"></ion-icon></a>
            <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
            <a href="#"><ion-icon name="logo-youtube"></ion-icon></a> 
            <p>Follow us on Social Media:</p>
            <br>
            <p>&copy; Copyright: Sunday, March 10 to Wednesday, June 1 "2024" by AmirMahanyuTz.co - All Rights Reserved.</p>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="script.js">
  // Get all the menu items
const menuItems = document.querySelectorAll('.menu li a');

// Add touchstart event listener to each menu item
menuItems.forEach(item => {
    item.addEventListener('touchstart', function(event) {
        // Prevent the default action of the touch event
        event.preventDefault();
        // Redirect to the href of the touched menu item
        window.location.href = this.getAttribute('href');
    });
});

</script>









    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $nationality = $_POST['nationality'];
        $message = $_POST['message'];

        $to = "amirimahanyu01@gmail.com"; // Replace with your organization's email
        $subject = "New contact form submission from the website";
        $body = "Name: $name\nEmail: $email\nPhone no: $phone\nCity: $city\nNationality: $nationality\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "<script>
                    swal('Success', 'Your message has been sent!', 'success');
                  </script>";
        } else {
            echo "<script>
                    swal('Error', 'There was an issue sending your message. Please try again later.', 'error');
                  </script>";
        }
    }
    ?>
</body>
</html>
