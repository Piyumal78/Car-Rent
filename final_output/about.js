document.addEventListener('DOMContentLoaded', function() {

    const teamCards = document.querySelectorAll('.bg-white.p-6.rounded-lg.shadow-md');
    
    teamCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-5px)';
            card.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    });
    
        console.log('DriveEasy Rentals About Page loaded');
    
    
    fetch('api/team-members.php')
        .then(response => response.json())
        .then(data => {
            // Process and display team members
        })
        .catch(error => console.error('Error fetching team members:', error));
   
});