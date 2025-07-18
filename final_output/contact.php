<?php include 'header.php'; ?>
              <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch with our friendly customer service team</p>
            <nav class="breadcrumb">
                <a href="home.php">Home</a> > <span>Contact</span>
            </nav>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-info-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>Speak with our customer service team</p>
                    <div class="contact-details">
                        <strong>+1 (555) 123-4567</strong>
                        <span>24/7 Support Available</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>Send us a message anytime</p>
                    <div class="contact-details">
                        <strong>info@driveeasy.com</strong>
                        <span>Response within 2 hours</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Come to our main office</p>
                    <div class="contact-details">
                        <strong>123 Main Street</strong>
                        <span>City, State 12345</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Business Hours</h3>
                    <p>We're here when you need us</p>
                    <div class="contact-details">
                        <strong>Mon-Fri: 8AM-8PM</strong>
                        <span>Sat-Sun: 9AM-6PM</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form-container">
                    <h2>Send Us a Message</h2>
                    <p>Have a question or need assistance? Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <form id="contactForm" class="contact-form" action="contact.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="booking">Booking Question</option>
                                <option value="support">Customer Support</option>
                                <option value="complaint">Complaint</option>
                                <option value="suggestion">Suggestion</option>
                                <option value="partnership">Partnership</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Please describe your inquiry in detail..."></textarea>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" value="yes">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for updates and special offers
                            </label>
                        </div>
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>

                <div class="contact-sidebar">
                    <div class="sidebar-section">
                        <h3>Quick Help</h3>
                        <div class="help-links">
                            <a href="#" class="help-link">
                                <i class="fas fa-question-circle"></i>
                                <span>Frequently Asked Questions</span>
                            </a>
                            <a href="#" class="help-link">
                                <i class="fas fa-file-alt"></i>
                                <span>Terms & Conditions</span>
                            </a>
                            <a href="#" class="help-link">
                                <i class="fas fa-shield-alt"></i>
                                <span>Privacy Policy</span>
                            </a>
                            <a href="#" class="help-link">
                                <i class="fas fa-tools"></i>
                                <span>Roadside Assistance</span>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-section">
                        <h3>Emergency Contact</h3>
                        <div class="emergency-info">
                            <div class="emergency-item">
                                <i class="fas fa-exclamation-triangle"></i>
                                <div>
                                    <strong>24/7 Emergency Line</strong>
                                    <span>+1 (555) 911-HELP</span>
                                </div>
                            </div>
                            <div class="emergency-item">
                                <i class="fas fa-wrench"></i>
                                <div>
                                    <strong>Roadside Assistance</strong>
                                    <span>+1 (555) ROADHELP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-section">
                        <h3>Follow Us</h3>
                        <div class="social-links-large">
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="locations-section">
        <div class="container">
            <h2>Our Locations</h2>
            <div class="locations-grid">
                <div class="location-card">
                    <h3>Downtown Office</h3>
                    <div class="location-info">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Downtown</p>
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                        <p><i class="fas fa-clock"></i> Mon-Fri: 8AM-8PM, Sat-Sun: 9AM-6PM</p>
                    </div>
                    <div class="location-features">
                        <span class="feature-tag">Full Service</span>
                        <span class="feature-tag">Car Wash</span>
                        <span class="feature-tag">Parking</span>
                    </div>
                </div>
                <div class="location-card">
                    <h3>Airport Terminal</h3>
                    <div class="location-info">
                        <p><i class="fas fa-map-marker-alt"></i> Terminal 1, Arrivals Level</p>
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4568</p>
                        <p><i class="fas fa-clock"></i> 24/7 Service Available</p>
                    </div>
                    <div class="location-features">
                        <span class="feature-tag">24/7 Service</span>
                        <span class="feature-tag">Express Pickup</span>
                        <span class="feature-tag">Shuttle Service</span>
                    </div>
                </div>
                <div class="location-card">
                    <h3>Shopping Mall</h3>
                    <div class="location-info">
                        <p><i class="fas fa-map-marker-alt"></i> City Center Mall, Level B1</p>
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4569</p>
                        <p><i class="fas fa-clock"></i> Mall Hours: 10AM-10PM</p>
                    </div>
                    <div class="location-features">
                        <span class="feature-tag">Convenient</span>
                        <span class="feature-tag">Covered Parking</span>
                        <span class="feature-tag">Shopping</span>
                    </div>
                </div>
                <div class="location-card">
                    <h3>Train Station</h3>
                    <div class="location-info">
                        <p><i class="fas fa-map-marker-alt"></i> Central Station, East Exit</p>
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4570</p>
                        <p><i class="fas fa-clock"></i> Daily: 6AM-11PM</p>
                    </div>
                    <div class="location-features">
                        <span class="feature-tag">Transit Hub</span>
                        <span class="feature-tag">Easy Access</span>
                        <span class="feature-tag">Quick Service</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Find Us on the Map</h2>
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Interactive map would be embedded here</p>
                    <small>Google Maps integration available</small>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
         