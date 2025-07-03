<?php include 'header.php'; ?>
         <!-- Booking Page -->
<main>
    <section class="first-contain">
        <div class="content-wrapper">
            <h1 class="fist-head">Book Your Car</h1>
            <p class="second-head">Complete your reservation in just a few simple steps</p>
            <div class="connect"><a href="home.php">Home</a> &gt; Book Now</div>
        </div>
    </section>
</main>

<section class="second-contain">
    <div class="top-contain">
        <div class="first">
           <div class="no">1</div>
        Select Car
    </div>
    <div class="first">
        <div class="no">2</div>
        Personal Info
    </div>
    <div class="first">
        <div class="no">3</div>
        Confirmation
    </div>
    </div>
    
    <div class="third-contain">
            <h1 class="third-head">Quick Car Selction</h1>
        <p class="third-parah">Don't have a car slected? Choose from our popular options  below:</p>
        <div class="sample-car">
            <div class="car">
                <img src="Toyota Corolla.jpeg" alt="" width="200" height="120">
                <p class="into">Toyota Corolla</p>
                <p class="car-contain">LKR 4500/day</p>
            </div>
            <div class="car">
                <img src="img1.avif" alt="" width="200" height="120">
                <p class="into">BMW 3 Series</p>
                <p class="car-contain">LKR 12000/day</p>
            </div>
            <div class="car">
                <img src="Honda CR-V.jpeg" alt="" width="200" height="120">
                <p class="into">Honda CR-V</p>
                <p class="car-contain">LKR 8000/day</p>
            </div>
        </div>
        <a href="cars.php" class="car-link">View All Cars</a>
    </div>
</section>
<section class="booking-section">
    <div class="container">
        <div class="booking-container">
              <div class="booking-form-container">
                <h2>Reservation Details</h2>
                <form  id="bookinForm" class="bookin-form" method="POST" action="index.php">
                    <!-- Selected Vehicle -->
                    <div class="form-section">
                        <h3><i class="fas fa-car"></i> Selected Vehicle</h3>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="carName">Selected Car</label>
                               <input id="carName" name="carName" type="text" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="dailyrate">Daily Rate</label>
                                <input id="dailyrate" name="dailyrate" type="text" required readonly>
                            </div>
                        </div>
                    </div>
                    <hr class="row-line">
                    <!-- Personal Information -->
                    <div class="form-section">
                        <h3><i class="fas fa-user"></i> Personal Information</h3>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="firstname">First Name *</label>
                               <input type="text" id="firstname" name="firstname" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name *</label>
                                <input type="text" id="lastname" name="lastname" required>
                            </div>
                        </div>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="email">Email Address *</label>
                               <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="number" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="lnumber">Driver's License Number *</label>
                               <input type="text" id="lnumber" name="lnumber" >
                            </div>
                        </div>
                    </div>
                    <hr class="row-line">
                    <!-- Rental Period -->
                    <div class="form-section">
                        <h3><i class="fas fa-calendar"></i> Rental Period</h3>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="pickDate">Pickup Date *</label>
                               <input type="date" id="pickDate" name="pickDate" required>
                            </div>
                            <div class="form-group">
                                <label for="picktime">Pickup Time *</label>
                                <input type="time" id="picktime" name="picktime" required>
                            </div>
                        </div>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="returndate">Return Date *</label>
                               <input type="date" id="returndate" name="returndate" required>
                            </div>
                            <div class="form-group">
                                <label for="return_time">Return Time *</label>
                                <input type="time" id="returntime" name="returntime" required>
                            </div>
                        </div>
                    </div>
                    <hr class="row-line">
                    <!-- Pickup & Return Locations -->
                    <div class="form-section">
                        <h3><i class="fas fa-map-marker-alt"></i> Pickup & Return Locations</h3>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="pickuplocation">Pickup Location *</label>
                                    <select id="pickuplocation" name="pickuplocation" required>
                                        <option value="">Select Location</option>
                                        <option value="Colombo City Center - Fort Area">Colombo City Center - Fort Area</option>
                                        <option value="Bandaranaike International Airport – Katunayake">Bandaranaike International Airport – Katunayake</option>
                                        <option value="Kandy City Center">Kandy City Center</option>
                                        <option value="Galle Fort Area">Galle Fort Area</option>
                                        <option value="Negombo Beach Road">Negombo Beach Road</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="droplocation">Return Location *</label>
                                <select id="droplocation" name="droplocation" required>
                                        <option value="">Select Location</option>
                                        <option value="Colombo City Center - Fort Area">Colombo City Center - Fort Area</option>
                                        <option value="Bandaranaike International Airport – Katunayake">Bandaranaike International Airport – Katunayake</option>
                                        <option value="Kandy City Center">Kandy City Center</option>
                                        <option value="Galle Fort Area">Galle Fort Area</option>
                                        <option value="Negombo Beach Road">Negombo Beach Road</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <hr class="row-line">
                    <!-- Additional Options -->
                    <div class="form-section">
                        <h3><i class="fas fa-plus"></i> Additional Options</h3>
                        <div class="check-group">
                            <label for="checkbox-label">
                                <input type="checkbox" name="gps" value="yes" id="gps" data-price="1000">
                                <span class="checkmark"></span>
                                GPS Navigation (+LKR 1000/day)
                            </label>
                            <label for="checkbox-label">
                                <input type="checkbox" name="childSeat" value="yes" id="childSeat" data-price="1500">
                                <span class="checkmark"></span>
                                Child Safety Seat (+LKR 1500/day)
                            </label>
                            <label for="checkbox-label">
                                <input type="checkbox" name="additionalDriver" value="yes" id="additionalDriver" data-price="3500" >
                                <span class="checkmark"></span>
                                Additional Driver (+LkR 3500/day)
                            </label>
                            <label for="checkbox-label">
                                <input type="checkbox" name="Coverage" value="yes" id="Coverage" data-price="5000" >
                                <span class="checkmark"></span>
                                Full Coverage Insurance (+LKR 5000/day)
                            </label>
                        </div>
                    </div>
                    <hr class="row-line">
                    <!-- Special Requests -->
                    <div class="form-section">
                        <h3><i class="fas fa-comment"></i> Special Requests</h3>
                        <div class="from-row">
                            <div class="form-group">
                               <label for="comments">Additional Comments</label>
                               <textarea name="comments" id="comments">Any spical requests or comments ...</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn" name="submit">
                            <i class="fas fa-check"></i>  Complete Booking
                        </button>
                </div>
                
                <!-- Booking Summary -->
                 <div class="booking-summary">
                    <input type="hidden" name="summaryPeriod" id="inputSummaryPeriod">
                    <input type="hidden" name="summarySubtotal" id="inputSummarySubtotal">
                    <input type="hidden" name="summaryExtras" id="inputSummaryExtras">
                    <input type="hidden" name="summaryTotal" id="inputSummaryTotal">

                    <h3>Booking Summary</h3>
                    <div class="summary-item">
                        <span>Selected Car:</span>
                        <span id="summaryCarName">Not selected</span>
                    </div>
                    <div class="line"></div>
                    <div class="summary-item">
                        <span>Daily Rate:</span>
                        <span id="summaryDailyRate">LKR 0</span>
                    </div>
                    <div class="line"></div>
                    <div class="summary-item">
                        <span>Rental Period:</span>
                        <span id="summaryPeriod" >0 days</span>
                    </div>
                    <div class="line"></div>
                    <div class="summary-item">
                        <span>Subtotal:</span>
                        <span id="summarySubtotal" >LKR 0</span>
                    </div>
                    <div class="line"></div>
                    <div class="summary-item">
                        <span>Additional Options:</span>
                        <span id="summaryExtras">$0</span>
                    </div>
                    <div class="line"></div>
                    <div class="summary-item">
                        <span>Taxes & Fees:</span>
                        <span id="summaryTaxes">LKR 0</span>
                    </div>
                    <div class="line"></div>
                    <div class="summary-total">
                        <span>Total Cost:</span>
                        <span id="summaryTotal" >$0</span>
                    </div>
                    
                    <div class="summary-note">
                        <i class="fas fa-info-circle"></i>
                        <p>Final price includes all taxes and fees. No hidden charges.</p>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
         