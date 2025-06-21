<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - DriveEasy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<!--<script>
  function selectCar(carName, carPrice) {
    const selected = {
      car: carName,
      price: carPrice
    };
    localStorage.setItem("selectedCar", JSON.stringify(selected));
    window.location.href = "booking.php";
  }
</script>-->
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <img src="DriveEasy_Logo-removebg-preview.png" alt="DriveEasy Logo" class="logo-image">
            <span class="logo-text">DriveEasy</span>
        </div>  
        <ul class="nav-menu animated-navbar">
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="cars.php">Cars</a></li>
            <li><a href="book.php">Book Now</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
 <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Fleet</h1>
            <p>Choose from our wide selection of premium vehicles</p>
            <nav class="breadcrumb">
                <a href="home.php">Home</a> > <span>Cars</span>
            </nav>
        </div>
    </section>

    <!-- Cars Section -->
    <section class="cars-section">
        <div class="container">
            <!-- Search and Filter -->
            <div class="search-filter-section">
                <div class="search-box">
                    <input type="text" id="carSearch" placeholder="Search cars...">
                    <i class="fas fa-search"></i>
                </div>
                <div class="car-filters">
                    <button class="filter-btn active" data-filter="all">All Cars</button>
                    <button class="filter-btn" data-filter="economy">Economy</button>
                    <button class="filter-btn" data-filter="luxury">Luxury</button>
                    <button class="filter-btn" data-filter="suv">SUV</button>
                </div>
                <div class="sort-options">
                    <select id="sortCars">
                        <option value="name">Sort by Name</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="seats">Number of Seats</option>
                    </select>
                </div>
            </div>

            <!-- Cars Grid -->
            <div class="cars-grid" id="carsGrid">
                <!-- Economy Cars -->
                <div class="car-card" data-category="economy" data-price="25" data-name="Toyota Corolla" data-seats="5">
                    <img src="Toyota Corolla.jpeg" alt="Toyota Corolla" class="car-img">
                    <div class="car-info">
                        <h3>Toyota Corolla</h3>
                        <p class="car-type">Economy</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 5 Seats</span>
                            <span><i class="fas fa-cog"></i> Manual</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-snowflake"></i> A/C</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Unlimited Mileage</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-shield-alt"></i>
                                <span>Full Insurance</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 4500/day</div>
                        <a href="booking.php?car=Toyota Corolla&price=4500" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <div class="car-card" data-category="economy" data-price="30" data-name="Nissan Sentra" data-seats="5">
                    <img src="Nissan Sentra.jpg" alt="Nissan Sentra" class="car-img">
                    <div class="car-info">
                        <h3>Nissan Sentra</h3>
                        <p class="car-type">Economy</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 5 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-snowflake"></i> A/C</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Unlimited Mileage</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-shield-alt"></i>
                                <span>Full Insurance</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 5200/day</div>
                        <a href="booking.php?car=Nissan Sentra&price=5200" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <div class="car-card" data-category="economy" data-price="28" data-name="Hyundai Elantra" data-seats="5">
                    <img src="Hyundai Elantra.jpeg" alt="Hyundai Elantra" class="car-img">
                    <div class="car-info">
                        <h3>Hyundai Elantra</h3>
                        <p class="car-type">Economy</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 5 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-snowflake"></i> A/C</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Unlimited Mileage</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-shield-alt"></i>
                                <span>Full Insurance</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 5000/day</div>
                        <a href="booking.php?car=Hyundai Elantra&price=5000" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <!-- Luxury Cars -->
                <div class="car-card" data-category="luxury" data-price="75" data-name="BMW 3 Series" data-seats="5">
                    <img src="BMW 3 Series.jpg" alt="BMW 3 Series" class="car-img">
                    <div class="car-info">
                        <h3>BMW 3 Series</h3>
                        <p class="car-type">Luxury</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 5 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-wifi"></i> GPS</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-crown"></i>
                                <span>Premium Interior</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-music"></i>
                                <span>Premium Sound</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 12000/day</div>
                        <a href="booking.php?car=BMW 3 Series&price=12000" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <div class="car-card" data-category="luxury" data-price="85" data-name="Mercedes C-Class" data-seats="5">
                    <img src="Mercedes C-Class.jpeg" alt="Mercedes C-Class" class="car-img">
                    <div class="car-info">
                        <h3>Mercedes C-Class</h3>
                        <p class="car-type">Luxury</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 5 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-wifi"></i> GPS</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-crown"></i>
                                <span>Premium Interior</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-music"></i>
                                <span>Premium Sound</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 15000/day</div>
                        <a href="booking.php?car=Mercedes C-Class&price=15000" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <div class="car-card" data-category="luxury" data-price="95" data-name="Audi A4" data-seats="5">
                    <img src="Audi A4.jpeg" alt="Audi A4" class="car-img">
                    <div class="car-info">
                        <h3>Audi A4</h3>
                        <p class="car-type">Luxury</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 5 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-wifi"></i> GPS</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-crown"></i>
                                <span>Premium Interior</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-music"></i>
                                <span>Premium Sound</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 13000/day</div>
                        <a href="booking.php?car=Audi A4&price=13000" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <!-- SUV Cars -->
                <div class="car-card" data-category="suv" data-price="55" data-name="Honda CR-V" data-seats="7">
                    <img src="Honda CR-V.jpeg" alt="Honda CR-V" class="car-img">
                    <div class="car-info">
                        <h3>Honda CR-V</h3>
                        <p class="car-type">SUV</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 7 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Hybrid</span>
                            <span><i class="fas fa-mountain"></i> AWD</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-suitcase"></i>
                                <span>Large Cargo</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-road"></i>
                                <span>All Terrain</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 8000/day</div>
                        <a href="booking.php?car=Honda CR-V&price=8000" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <div class="car-card" data-category="suv" data-price="65" data-name="Ford Explorer" data-seats="7">
                    <img src="Ford Explorer.jpeg" alt="Ford Explorer" class="car-img">
                    <div class="car-info">
                        <h3>Ford Explorer</h3>
                        <p class="car-type">SUV</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 7 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-mountain"></i> AWD</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-suitcase"></i>
                                <span>Large Cargo</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-road"></i>
                                <span>All Terrain</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 8500/day</div>
                        <a href="booking.php?car=Ford Explorer&price=8500" class="rent-btn">Rent Now</a>
                    </div>
                </div>

                <div class="car-card" data-category="suv" data-price="70" data-name="Chevrolet Tahoe" data-seats="8">
                    <img src="Chevrolet Tahoe.jpg" alt="Chevrolet Tahoe" class="car-img">
                    <div class="car-info">
                        <h3>Chevrolet Tahoe</h3>
                        <p class="car-type">SUV</p>
                        <div class="car-features">
                            <span><i class="fas fa-users"></i> 8 Seats</span>
                            <span><i class="fas fa-cog"></i> Automatic</span>
                            <span><i class="fas fa-gas-pump"></i> Petrol</span>
                            <span><i class="fas fa-mountain"></i> 4WD</span>
                        </div>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fas fa-suitcase"></i>
                                <span>Extra Large Cargo</span>
                            </div>
                            <div class="spec">
                                <i class="fas fa-road"></i>
                                <span>Heavy Duty</span>
                            </div>
                        </div>
                        <div class="car-price">LKR 10000/day</div>
                        <a href="booking.php?car=Chevrolet Tahoe&price=10000" class="rent-btn">Rent Now</a>
                    </div>
                </div>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="no-results" style="display: none;">
                <i class="fas fa-search"></i>
                <h3>No cars found</h3>
                <p>Try adjusting your search or filter criteria</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Book Your Car?</h2>
            <p>Get started with your reservation today and enjoy the freedom of the road</p>
            <a href="booking.php" class="cta-button">Book Now</a>
        </div>
    </section>

<footer>
    <h1>DriveEasy</h1>
    <p>Your trusted partner for reliable and affordable car rentals. Experience the freedom of the road with our premium fleet.</p>

    <p>Follow us on:
        <a href="https://www.facebook.com">Facebook</a> |
        <a href="https://www.twitter.com">Twitter</a> |
        <a href="https://www.instagram.com">Instagram</a>
    </p>

    <div class="footer-sections">
        <div>
            <h2>Quick Links</h2>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="cars.php">Cars</a></li>
                <li><a href="booking.php">Book Now</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <div>
            <h2>Service</h2>
            <ul>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="terms.php">Terms & Conditions</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>

        <div>
            <h2>Support</h2>
            <ul>
                <li><a href="support.php">Customer Support</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="careers.php">Careers</a></li>
                <li><a href="sitemap.php">Roadside Assistance</a></li>
            </ul>
        </div>
    </div>

    <p>&copy; 2025 DriveEasy Car Rental. All rights reserved.</p>
</footer>

</body>
</html>

