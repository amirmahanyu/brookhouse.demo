<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEt-In-Touch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="htpps://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/all.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body class="intouch">
<div class="top-bar">
                    <span>Dial:<ion-icon name="call-outline"></ion-icon>+255719-461-916</span>
            <ul>
                <li>Let Us Connect:</li>
              
                        <div class="room">
                        <li><a href="news.php">Newsroom</a></li>
                        </div>
               
               <div class="llery">
               <li><a href="gallery.php">Gallery</a></li>
               </div>       
            </ul>

        </div>

       
    <nav>
        <div class="logo">
            <img src="logo.jpg" alt="logo"><br>OUR ENLIGHTLEN TO BRITLY BE SHINE</a>
            </div>
            <div class="toggle">
                <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
            </div>
            <ul class="menu">
                <li><a href="amir.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="pay.php">Support Us</a> </li>
                 <!-- Vertical Line -->
    <div class="vertical-line"></div>
    <div class="joinus">
                <li><a href="contact.php">Contacts</a></li> 
<div>
                
            </ul>
           
    </nav>
<div class="in">
   
    <div class="container">
        <form onsubmit="sendEmail(); reset(); return false;">
        <h3>Our NewsLetters</h3>
        <input type="text" id="name" placeholder="Enter your Name" name="name" required>  
        <input type="text" id="email" placeholder="Enter your email" name="email" required> 
       <input type="number" id="phone" placeholder="Enter you phone no." name="phone" required>
       <input type="text" id="city" placeholder="City(name) you around now" name="city" required>
        <input type="text" id="nationality" placeholder="nationality" name="nationality" required>
        <textarea id="message" row="4" placeholder="How Can we help you?"></textarea>
        <button type="submit" class="btn">send</button>
        </form>
    </div>

    </div>
 
 <!-- Footer -->
 <footer>
                <div class="row">
                        <div class="col">
                        <div class="square">
                                <img src="logo.jpg" alt="Profile Picture">
                            </div>
    
                        <p>BROOKHOUSE INTERNATIONAL SCHOOL</p></div>

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
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Programms</a></li>
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
                <p>Got Questions Call Us:</p>
                <span>Dial:<ion-icon name="call-outline"></ion-icon>+255719-461-916</span>
               

        </div>
                   


        </div>
        <hr>
                        <div class="copyright">
                            
                                
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-yahoo"></ion-icon></a>
                <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
                <a href="#"><ion-icon name="logo-youtube"></ion-icon></a> 
                <p>Follow us on  Social Media:</p>
                <br>
                        <p>&copy; Copyright:Sunday, March 10 to Wednesday, June 1 "2024" by AmirMahanyuTz.co-All Rights Reserved.</p>
                        </div>
      
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






    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            email.send({
                        Host : "smtp.gmail.com",
                        Username: "amirimahanyu01@gmail.com",
                        Password: "0687344402AmirAlly@01_01",
                        To: "amirimahanyu01@gmail.com",
                        From: document.getElementById("email").value,
                        Subject: "New contact form, from the website",
                        Body: "Name: " + document.getElementById("name").value
                        +  "<br> Email: " + document.getElementById("email").value
                        +  "<br> Phone no: " + document.getElementById("phone").value
                        +  "<br> City: " + document.getElementById("city").value
                        +  "<br> Nationality: " + document.getElementById("nationality").value
                        +  "<br> Message: " + document.getElementById("message").value
                    }).then(
                        message =>{
                            if(message == 'OK' ){
                                swal("Succesful", "You contacted Us!", "success");
                            } else{
                                swal("Error", "Check your internet connection!", "error");
                            }

                        }
                );
 
        }
    </script>
</body>
</html>