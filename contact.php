<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .contact-hero {
            padding: 80px 20px;
        }
        .contact-main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 4rem;
        }
        .contact-form-section form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 8px;
        }
        .contact-form-section input,
        .contact-form-section textarea,
        .contact-form-section select {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
        }
        .contact-form-section input:focus,
        .contact-form-section textarea:focus,
        .contact-form-section select:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }
        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: none;
        }
        .contact-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        .contact-detail-item {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .contact-detail-item h4 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        .contact-detail-item p {
            color: #666;
            line-height: 1.8;
        }
        .contact-detail-item a {
            color: var(--secondary-color);
            text-decoration: none;
        }
        .contact-detail-item a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .contact-main {
                grid-template-columns: 1fr;
            }
            .contact-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<main>

<?php include 'header.php'; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Contact Us</h1>
                <p>We'd Love to Hear From You</p>
            </div>
        </section>

        <!-- Contact Form and Map -->
        <section class="contact-hero">
            <div class="container">
                <div class="contact-main">
                    <div class="contact-form-section">
                        <h2>Send us a Message</h2>
                        <form id="contactForm">
                            <input type="text" placeholder="Your Name" required>
                            <input type="email" placeholder="Your Email" required>
                            <input type="tel" placeholder="Phone Number">
                            <select required>
                                <option value="">Select Subject</option>
                                <option value="inquiry">General Inquiry</option>
                                <option value="admission">Admission Related</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                            <textarea placeholder="Your Message" rows="5" required></textarea>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                    <div>
                        <h2>School Location</h2>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5693471156!2d72.8479!3d19.0760!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c5c5c5c5c5%3A0x5c5c5c5c5c5c5c5c!2sSchool%20Address%2C%20City!5e0!3m2!1sen!2sin!4v1234567890" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Details -->
        <section class="about">
            <div class="container">
                <h2>Contact Information</h2>
                <div class="contact-details">
                    <div class="contact-detail-item">
                        <h4>📍 School Address</h4>
                        <p>Our School<br>
                           123 Education Avenue<br>
                           City, State - 400001<br>
                           India</p>
                    </div>
                    <div class="contact-detail-item">
                        <h4>📞 Phone Numbers</h4>
                        <p><strong>Main Office:</strong><br>
                           <a href="tel:+911234567890">+91-1234-567890</a><br><br>
                           <strong>Admissions:</strong><br>
                           <a href="tel:+911234567891">+91-1234-567891</a></p>
                    </div>
                    <div class="contact-detail-item">
                        <h4>📧 Email Address</h4>
                        <p><strong>General Queries:</strong><br>
                           <a href="mailto:info@ourschool.com">info@ourschool.com</a><br><br>
                           <strong>Admissions:</strong><br>
                           <a href="mailto:admissions@ourschool.com">admissions@ourschool.com</a></p>
                    </div>
                    <div class="contact-detail-item">
                        <h4>⏰ School Hours</h4>
                        <p><strong>Monday - Friday:</strong><br>
                           8:00 AM - 4:00 PM<br><br>
                           <strong>Saturday:</strong><br>
                           9:00 AM - 1:00 PM<br><br>
                           <strong>Sunday & Holidays:</strong><br>
                           Closed</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Departments Section -->
        <section class="facilities">
            <div class="container">
                <h2>Reach Out to Specific Departments</h2>
                <div class="facilities-grid">
                    <div class="facility-item">
                        <h4>Academics</h4>
                        <p><strong>Email:</strong> academics@ourschool.com<br><strong>Phone:</strong> +91-XXXXX-XXXXX</p>
                    </div>
                    <div class="facility-item">
                        <h4>Admissions</h4>
                        <p><strong>Email:</strong> admissions@ourschool.com<br><strong>Phone:</strong> +91-XXXXX-XXXXX</p>
                    </div>
                    <div class="facility-item">
                        <h4>Student Services</h4>
                        <p><strong>Email:</strong> services@ourschool.com<br><strong>Phone:</strong> +91-XXXXX-XXXXX</p>
                    </div>
                    <div class="facility-item">
                        <h4>Finance & Fees</h4>
                        <p><strong>Email:</strong> finance@ourschool.com<br><strong>Phone:</strong> +91-XXXXX-XXXXX</p>
                    </div>
                    <div class="facility-item">
                        <h4>Transport</h4>
                        <p><strong>Email:</strong> transport@ourschool.com<br><strong>Phone:</strong> +91-XXXXX-XXXXX</p>
                    </div>
                    <div class="facility-item">
                        <h4>Principal's Office</h4>
                        <p><strong>Email:</strong> principal@ourschool.com<br><strong>Phone:</strong> +91-XXXXX-XXXXX</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="academics">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="programs-grid">
                    <div class="program-card">
                        <h3>What are the school timings?</h3>
                        <p>School operates from 8:00 AM to 4:00 PM on weekdays and 9:00 AM to 1:00 PM on Saturdays. Students should arrive 10 minutes before the start of school.</p>
                    </div>
                    <div class="program-card">
                        <h3>How can I visit the school?</h3>
                        <p>We welcome campus visits by appointment. Contact the admissions office at least 2 days in advance to schedule a tour. Weekend visits are also available.</p>
                    </div>
                    <div class="program-card">
                        <h3>What is the admission fee?</h3>
                        <p>One-time registration fee is ₹10,000. Annual tuition fees vary by grade level. Detailed fee structure is available on the Admissions page or by contacting the office.</p>
                    </div>
                    <div class="program-card">
                        <h3>Is transportation available?</h3>
                        <p>Yes, we provide school transport on major routes. Transport charges are additional. Contact the transport department for route details and fee structure.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Follow Us Section -->
        <section class="contact">
            <div class="container">
                <h2>Follow Us on Social Media</h2>
                <div style="text-align: center; margin-top: 3rem;">
                    <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                        <a href="https://facebook.com/ourschool" target="_blank" style="display: inline-block; padding: 12px 40px; background: #3498db; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; transition: all 0.3s ease;">
                            Facebook
                        </a>
                        <a href="https://twitter.com/ourschool" target="_blank" style="display: inline-block; padding: 12px 40px; background: #3498db; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; transition: all 0.3s ease;">
                            Twitter
                        </a>
                        <a href="https://instagram.com/ourschool" target="_blank" style="display: inline-block; padding: 12px 40px; background: #3498db; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; transition: all 0.3s ease;">
                            Instagram
                        </a>
                        <a href="https://youtube.com/ourschool" target="_blank" style="display: inline-block; padding: 12px 40px; background: #3498db; color: white; text-decoration: none; border-radius: 8px; font-weight: bold; transition: all 0.3s ease;">
                            YouTube
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>