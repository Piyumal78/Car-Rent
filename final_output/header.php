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
        <header>
            <nav class="navbar">
            <div class="logo">
            <img src="DriveEasy_Logo-removebg-preview.png" width="50px" height="50px" alt="DriveEasy Logo" class="logo-image">
            <span class="logo-text">DriveEasy</span>
            <div class="logo-glow"></div>
         </div>  
               <ul class="nav-menu animated-navbar">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">
                       <i class="fas fa-home"></i>
                       <span class="nav-text">Home</span> 
                       <div class ="nav-underline"></div>
                        </a>
                    </li>
                
                <li class="nav-item">
                    <a href="about.php" class="nav-link">
                          <i class="fas fa-info-circle"></i>
                          <span class="nav-text">About Us</span>
                          <div class ="nav-underline"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cars.php" class="nav-link">
                        <i class="fas fa-car"></i>
                        <span class="nav-text">Cars</span>  
                        <div class ="nav-underline"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="booking.php" class="nav-link">
                        <i class="fas fa-calendar-check"></i>
                        <span class="nav-text">Book Now</span>
                        <div class ="nav-underline"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">
                        <i class="fas fa-envelope"></i>
                        <span class="nav-text">Contact Us</span>
                        <div class ="nav-underline"></div>
                    </a>
                </li>
            </ul>
            </nav>
            </div>
        </header>
</html>