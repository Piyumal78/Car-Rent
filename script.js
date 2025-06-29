// Make selectCar globally accessible for inline onclick
function selectCar(carName, price) {
    const carElem = document.getElementById('selectedCar');
    const rateElem = document.getElementById('dailyRate');
    if (carElem) carElem.value = carName;
    if (rateElem) rateElem.value = '$' + price + '/day';
}
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





document.addEventListener("DOMContentLoaded", function () {
    // Animate boxes
    const boxes = document.querySelectorAll('.box');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    boxes.forEach(box => observer.observe(box));

    // Booking summary total (if used)
    function updateSummaryTotal() {
        const items = document.querySelectorAll('.summary-item');
        let total = 0;
        items.forEach(item => {
            const amount = parseFloat(item.dataset.amount || '0');
            total += amount;
        });
        const totalElem = document.querySelector('.summary-total span');
        if (totalElem) {
            totalElem.textContent = 'Rs. ' + total.toFixed(2);
        }
    }

    // Scroll-to-top button
    const scrollBtn = document.createElement('button');
    scrollBtn.textContent = '↑ Top';
    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 20px;
        padding: 10px 15px;
        background: #e74c3c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: none;
        z-index: 1000;
    `;
    document.body.appendChild(scrollBtn);
    window.addEventListener('scroll', () => {
        scrollBtn.style.display = window.scrollY > 300 ? 'block' : 'none';
    });
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Auto-fill selected car if params are in the URL
    const params = new URLSearchParams(window.location.search);
    const car = params.get("car");
    const price = params.get("price");
    if (car && price) {
        const carElem = document.getElementById("carName");
        const rateElem = document.getElementById("dailyrate");
        const summaryCar = document.getElementById("summaryCarName");
        const summaryRate = document.getElementById("summaryDailyRate");
        if (carElem) carElem.value = car;
        if (rateElem) rateElem.value = `LKR ${price}/day`;
        if (summaryCar) summaryCar.textContent = car;
        if (summaryRate) summaryRate.textContent = `LKR ${price}`;
    } else {
        const carElem = document.getElementById("selectedCar");
        const rateElem = document.getElementById("dailyRate");
        if (carElem) carElem.value = "No car selected";
        if (rateElem) rateElem.value = "LKR 0/day";
    }
   const pickupDate = document.getElementById("pickDate");
const returnDate = document.getElementById("returndate");
const summarySpan = document.getElementById("summaryPeriod");
const summarytot = document.getElementById("summaryDailyRate");
const finaltotal = document.getElementById("summarySubtotal");
const gps = document.getElementById("gps");
const childSeat = document.getElementById("childSeat");
const additionalDriver = document.getElementById("additionalDriver");
const Coverage = document.getElementById("Coverage");
const summaryExtras = document.getElementById("summaryExtras");
const summaryTotal=document.getElementById("summaryTotal");

function updateRentalPeriod() {
    const start = new Date(pickupDate.value);
    const end = new Date(returnDate.value);
    const subtot = parseInt(summarytot.textContent.replace(/[^0-9]/g, ""));

    if (pickupDate.value && returnDate.value && !isNaN(start) && !isNaN(end) && !isNaN(subtot)) {
        const diffTime = end - start;
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

        summarySpan.textContent = diffDays > 0 ? `${diffDays} days` : "0 days";

        let subtotal = diffDays > 0 ? diffDays * subtot : 0;
        let extras = [];
        let extraTotal = 0;
        let finalTotal = subtotal;

        function addExtra(checkbox, label) {
            if (checkbox.checked) {
                const price = parseInt(checkbox.dataset.price);
                extraTotal += price;
                finalTotal += price;
                extras.push(`✔️ ${label}`);
            }
        }

        addExtra(gps, "GPS");
        addExtra(childSeat, "Child Seat");
        addExtra(additionalDriver, "Additional Driver");
        addExtra(Coverage, "Full Coverage");

        summaryExtras.textContent = extras.length > 0 ? extras.join(", ") + ` (LKR ${extraTotal})` : "None";
        const sumExtras = parseInt(summaryExtras.textContent.replace(/[^0-9]/g, ""));
        finaltotal.textContent = `LKR ${subtotal}`;
        summaryTotal.textContent = `LKR ${finalTotal}`;

        // Update hidden fields
        document.getElementById("inputSummaryPeriod").value = summarySpan.textContent;
        document.getElementById("inputSummarySubtotal").value = subtotal;
        document.getElementById("inputSummaryExtras").value =sumExtras;
        document.getElementById("inputSummaryTotal").value = finalTotal;
    } else {
        summarySpan.textContent = "0 days";
        finaltotal.textContent = "LKR 0";
        summaryExtras.textContent = "None";

        // Also clear hidden inputs
        document.getElementById("inputSummaryPeriod").value = "0 days";
        document.getElementById("inputSummarySubtotal").value = 0;
        document.getElementById("inputSummaryExtras").value = "None";
        document.getElementById("inputSummaryTotal").value = 0;
    }
}


// Attach event listeners
pickupDate.addEventListener("change", updateRentalPeriod);
returnDate.addEventListener("change", updateRentalPeriod);
gps.addEventListener("change", updateRentalPeriod);
childSeat.addEventListener("change", updateRentalPeriod);
additionalDriver.addEventListener("change", updateRentalPeriod);
Coverage.addEventListener("change", updateRentalPeriod);

});
