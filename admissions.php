<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Our School</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation Header -->
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <h1>OUR SCHOOL</h1>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutschool.php">About</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="admissions.php">Admissions</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Admissions</h1>
                <p>Join Our School Family - Applications Open Now</p>
            </div>
        </section>

        <!-- Admission Process -->
        <section class="admissions">
            <div class="container">
                <h2>Admission Process</h2>
                <div class="admissions-content">
                    <div class="admission-info">
                        <h3>Step-by-Step Process</h3>
                        <ol style="margin-left: 1.5rem; color: #666; line-height: 2.2;">
                            <li><strong>Submit Application:</strong> Fill the application form available on our website or collect from school office. Include all required documents.</li>
                            <li><strong>Application Review:</strong> Your application will be reviewed by our admissions team. You will be informed about further steps.</li>
                            <li><strong>Entrance Assessment:</strong> Applicable for Grade 6 onwards. Assess academic level and aptitude in core subjects.</li>
                            <li><strong>Personal Interview:</strong> Meeting with parents and student to discuss expectations and understanding of our school philosophy.</li>
                            <li><strong>Counseling Session:</strong> Discussion regarding curriculum, fees, and other school policies with the admissions counselor.</li>
                            <li><strong>Document Verification:</strong> Original documents submitted for verification against photocopies provided.</li>
                            <li><strong>Admission Confirmation:</strong> Upon approval, admission is confirmed with payment of registration and fees.</li>
                        </ol>
                        <p style="margin-top: 2rem;"><strong>Admission Period:</strong> June to August annually</p>
                        <p><strong>Note:</strong> Admissions for higher grades may also be considered in January based on availability.</p>
                    </div>
                    <div class="admission-form">
                        <h3>Quick Inquiry Form</h3>
                        <form id="admissionForm">
                            <input type="text" placeholder="Student Name" required>
                            <input type="email" placeholder="Parent Email" required>
                            <input type="tel" placeholder="Contact Number" required>
                            <select required>
                                <option value="">Select Grade</option>
                                <option value="grade-1-5">Grade 1-5</option>
                                <option value="grade-6-8">Grade 6-8</option>
                                <option value="grade-9-10">Grade 9-10</option>
                                <option value="grade-11-12">Grade 11-12</option>
                            </select>
                            <textarea placeholder="Your Message / Questions" rows="4"></textarea>
                            <button type="submit" class="submit-btn">Send Inquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Required Documents -->
        <section class="about">
            <div class="container">
                <h2>Required Documents</h2>
                <div class="about-content">
                    <div class="about-text">
                        <h3>For All Applicants</h3>
                        <ul style="margin-left: 1.5rem; color: #666; line-height: 2;">
                            <li>Duly filled application form</li>
                            <li>Birth Certificate (original and photocopy)</li>
                            <li>Previous school records and mark sheets</li>
                            <li>Transfer Certificate from previous school</li>
                            <li>Passport-size photographs (4 copies)</li>
                            <li>Proof of residence (utility bill or similar)</li>
                            <li>Medical fitness certificate from registered doctor</li>
                        </ul>
                        <h3>For New Admissions (Grade 1)</h3>
                        <ul style="margin-left: 1.5rem; color: #666; line-height: 2; margin-top: 1rem;">
                            <li>Age proof (Birth Certificate)</li>
                            <li>Vaccination record</li>
                            <li>Parent identification proof (ID card/Passport)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fee Structure -->
        <section class="academics">
            <div class="container">
                <h2>Fee Structure</h2>
                <div class="programs-grid">
                    <div class="program-card">
                        <h3>Primary (Grade 1-5)</h3>
                        <p><strong>Annual Tuition Fee:</strong> ₹1,50,000</p>
                        <p><strong>Registration Fee:</strong> ₹10,000 (One-time)</p>
                        <p><strong>Additional Charges:</strong> Uniform, Books, Transport, Activities</p>
                    </div>
                    <div class="program-card">
                        <h3>Middle School (Grade 6-8)</h3>
                        <p><strong>Annual Tuition Fee:</strong> ₹1,80,000</p>
                        <p><strong>Registration Fee:</strong> ₹10,000 (One-time)</p>
                        <p><strong>Additional Charges:</strong> Uniform, Books, Transport, Lab Activities</p>
                    </div>
                    <div class="program-card">
                        <h3>Secondary (Grade 9-10)</h3>
                        <p><strong>Annual Tuition Fee:</strong> ₹2,10,000</p>
                        <p><strong>Registration Fee:</strong> ₹10,000 (One-time)</p>
                        <p><strong>Additional Charges:</strong> Uniform, Books, Transport, Lab Activities</p>
                    </div>
                    <div class="program-card">
                        <h3>Senior Secondary (Grade 11-12)</h3>
                        <p><strong>Annual Tuition Fee:</strong> ₹2,50,000</p>
                        <p><strong>Registration Fee:</strong> ₹10,000 (One-time)</p>
                        <p><strong>Additional Charges:</strong> Uniform, Books, Transport, Lab Activities</p>
                    </div>
                </div>
                <div style="background: var(--light-bg); padding: 2rem; border-radius: 8px; margin-top: 2rem; text-align: center;">
                    <p style="color: #666;"><strong>Note:</strong> Scholarship schemes available for meritorious and economically disadvantaged students. Contact admissions office for details.</p>
                </div>
            </div>
        </section>

        <!-- Eligibility Criteria -->
        <section class="facilities">
            <div class="container">
                <h2>Eligibility Criteria</h2>
                <div class="facilities-grid">
                    <div class="facility-item">
                        <h4>Grade 1 Admission</h4>
                        <p>Child should be 5+ years old as on June 1st of the admission year. Age proof and kindergarten completion preferred.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Grade 6 Admission</h4>
                        <p>Completion of Grade 5 from recognized school. Entrance assessment in Mathematics and English required.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Grade 9 Admission</h4>
                        <p>Completion of Grade 8 with good academic record. Assessment in Science and Mathematics. Selection based on merit.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Grade 11 Admission</h4>
                        <p>Completion of Grade 10 with minimum 70% marks. Stream selection based on aptitude and academic performance.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Transfer Students</h4>
                        <p>Transfer Certificate from previous school. Academic record review. Entrance assessment may be required.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Special Admissions</h4>
                        <p>Candidates with special talents (sports, arts) may be considered based on merit and school policy.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Important Information -->
        <section class="contact">
            <div class="container">
                <h2>Important Information</h2>
                <div class="contact-content">
                    <div class="contact-info">
                        <div class="contact-item">
                            <h4>Admission Calendar</h4>
                            <p><strong>Applications Open:</strong> February 1st<br><strong>Last Date:</strong> May 31st<br><strong>Admission Confirmation:</strong> June 30th</p>
                        </div>
                        <div class="contact-item">
                            <h4>Refund Policy</h4>
                            <p>Registration fee is non-refundable. Other fees may be refunded as per school policy if withdrawal is made before June 15th.</p>
                        </div>
                        <div class="contact-item">
                            <h4>School Hours</h4>
                            <p><strong>Monday - Friday:</strong> 8:00 AM - 3:30 PM<br><strong>Saturday:</strong> 8:00 AM - 12:00 PM</p>
                        </div>
                        <div class="contact-item">
                            <h4>Contact Admissions</h4>
                            <p><strong>Phone:</strong> +91-XXXXX-XXXXX<br><strong>Email:</strong> admissions@ourschool.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5>About School</h5>
                    <p>Committed to nurturing young minds and providing quality education.</p>
                </div>
                <div class="footer-section">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="aboutschool.php">About Us</a></li>
                        <li><a href="academics.php">Academics</a></li>
                        <li><a href="admissions.php">Admissions</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Our School. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
