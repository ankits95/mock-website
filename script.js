// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Form Submission Handler
const admissionForm = document.getElementById('admissionForm');
if (admissionForm) {
    admissionForm.addEventListener('submit', function (e) {
        e.preventDefault();
        
        // Get form values
        const studentName = this.querySelector('input[type="text"]').value;
        const email = this.querySelector('input[type="email"]').value;
        const phone = this.querySelector('input[type="tel"]').value;
        const grade = this.querySelector('select').value;
        const message = this.querySelector('textarea').value;
        
        // Basic validation
        if (studentName && email && phone && grade !== 'Select Grade' && message) {
            // Show success message
            alert('Thank you! Your inquiry has been submitted successfully.\nWe will contact you soon.');
            
            // Clear form
            this.reset();
        } else {
            alert('Please fill in all fields.');
        }
    });
}

// Add scroll animation to elements
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all cards and sections
document.querySelectorAll('.program-card, .facility-item, .stat, .contact-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Mobile Menu Toggle (if needed in future)
function initMobileMenu() {
    const navLinks = document.querySelector('.nav-links');
    if (window.innerWidth <= 768) {
        // Add mobile-specific functionality if needed
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
});

// Handle window resize
window.addEventListener('resize', function() {
    initMobileMenu();
});
