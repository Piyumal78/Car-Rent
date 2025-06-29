<htmL>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <script src="script.js"></script>
    </head>
    <body>
        <script>
document.addEventListener("DOMContentLoaded", function() {
    const boxes = document.querySelectorAll('.box');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    boxes.forEach(box => {
        observer.observe(box);
    });
});
</script>
        <footer>
            <div class="footer-container">
                <div class="footer-logo">
                     <img src="DriveEasy_Logo-removebg-preview.png" alt="DriveEasy Logo" width="50px" height="50px">
               <h1>DriveEasy</h1>
               <p>Your trusted partner for reliable and affordable car rentals. Experience the freedom <br>of the road with our premium fleet.</p>
                <div class="social-media">
                   <h2>Follow Us</h2>
               <p class ="social-icons">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
               </p>
            </div>
            </div>
            
            <div class="footer-links">
              <h2>Quick Links</h2>
                <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="cars.html">Cars</a></li>
                <li><a href="booknow.html">Book Now</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
                </div>

                
                <div class="footer-links">
              <h2>Service</h2>
                <ul>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                </div>
                <div class="footer-links">
                <h2>Support</h2>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Roadside Assistance</a></li>
                </ul>
            </div>
            </div>
             <hr>
               <p class="hr">&copy; 2025 DriveEasy Car Rental. All rights reserved.</p>
             
         </footer>
        </header>
</html>


