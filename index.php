<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Our School</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include 'db.php'; ?>
<?php include 'header.php'; ?>

<!-- ===============================
     ADMISSION POPUP MODAL
================================ -->
<div id="admissionModal" class="admission-modal">
    <div class="admission-modal-content">
        <span class="admission-close">&times;</span>

        <h2>Admissions Open 2025 – 2026</h2>

        <form method="post" action="admission_submit.php" id="admissionForm">
            <label for="modal-grade">Grade *</label>
            <select name="grade" id="modal-grade" required>
                <option value="">-- Please choose an option --</option>
                <option value="Nursery">Nursery</option>
                <option value="LKG">LKG</option>
                <option value="UKG">UKG</option>
                <option value="Class 1">Class 1</option>
                <option value="Class 2">Class 2</option>
                <option value="Class 3">Class 3</option>
                <option value="Class 4">Class 4</option>
                <option value="Class 5">Class 5</option>
            </select>

            <label for="modal-student-name">Name of Student *</label>
            <input type="text" name="student_name" id="modal-student-name" placeholder="Enter Student Name" required>

            <label for="modal-parent-name">Parent Name *</label>
            <input type="text" name="parent_name" id="modal-parent-name" placeholder="Enter Parent Name" required>

            <label for="modal-parent-email">Parent Email *</label>
            <input type="email" name="parent_email" id="modal-parent-email" placeholder="Enter Parent Email" required>

            <label for="modal-parent-phone">Parent Mobile *</label>
            <input type="tel" name="parent_phone" id="modal-parent-phone" placeholder="Enter Mobile Number" required>

            <label for="modal-dob">Date of Birth</label>
            <input type="date" name="dob" id="modal-dob">

            <button type="submit" class="submit-btn">
                Submit Admission Enquiry
            </button>
        </form>
    </div>
</div>

<main>

<!-- ===============================
     SUCCESS MESSAGE AFTER SUBMIT
================================ -->
<!-- ===============================
     SUCCESS MESSAGE AFTER SUBMIT
================================ -->
<?php 
if (isset($_GET['success']) && $_GET['success'] == '1') { 
?>
    <div id="successMessage" style="
        background:#d4edda;
        color:#155724;
        padding:15px;
        text-align:center;
        font-weight:bold;
        margin:15px;
        border-radius:6px;
        position: relative;
    ">
        ✅ Thank you! Your admission enquiry has been submitted successfully.
        <button onclick="closeSuccessMessage()" style="
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #155724;
        ">&times;</button>
    </div>
    <script>
        // Auto-hide success message after 5 seconds
        setTimeout(function() {
            closeSuccessMessage();
        }, 5000);
        
        function closeSuccessMessage() {
            document.getElementById('successMessage').style.display = 'none';
            // Remove the success parameter from URL without reloading
            if (window.history.replaceState) {
                const url = window.location.href.split('?')[0];
                window.history.replaceState({}, document.title, url);
            }
        }
    </script>
<?php 
} 
?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to Excellence in Education</h1>
            <p>Nurturing Young Minds for a Brighter Future</p>
            <a href="#admissions" class="cta-button">Apply Now</a>
        </div>
    </section>

    <!-- Notice Section -->
    <section class="notices">
        <div class="container">
            <h2>Latest Notices</h2>
            <div class="notices-grid">
            <?php
            $sql = "SELECT * FROM notices ORDER BY notice_date DESC LIMIT 5";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="notice-item">
                    <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                    <span class="notice-date"><?php echo date('d M, Y', strtotime($row['notice_date'])); ?></span>
                    <p>
                        <?php echo substr(htmlspecialchars($row['description']), 0, 150); ?>...
                    </p>
                    <a href="notice_detail.php?id=<?php echo $row['id']; ?>">
                        Read More →
                    </a>
                </div>
            <?php
                }
            } else {
                echo "<p style='text-align: center; padding: 2rem; color: #666;'>No notices available.</p>";
            }
            ?>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Our Mission</h3>
                    <p>We are committed to providing high-quality education that empowers students to think critically, innovate, and excel in all aspects of life. Our dedicated faculty works tirelessly to create an inclusive and supportive learning environment.</p>
                    <h3>Our Vision</h3>
                    <p>To develop well-rounded individuals who are equipped with knowledge, skills, and values to become responsible global citizens and leaders of tomorrow.</p>
                </div>
                <div class="about-stats">
                    <div class="stat">
                        <h4>25+</h4>
                        <p>Years of Excellence</p>
                    </div>
                    <div class="stat">
                        <h4>1000+</h4>
                        <p>Happy Students</p>
                    </div>
                    <div class="stat">
                        <h4>50+</h4>
                        <p>Expert Faculty</p>
                    </div>
                    <div class="stat">
                        <h4>95%</h4>
                        <p>Success Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academics Section -->
    <section id="academics" class="academics">
        <div class="container">
            <h2>Our Academic Programs</h2>
            <div class="programs-grid">
                <div class="program-card">
                    <h3>Primary Section</h3>
                    <p>Grades 1-5: Building strong foundations in numeracy, literacy, and critical thinking skills.</p>
                </div>
                <div class="program-card">
                    <h3>Middle School</h3>
                    <p>Grades 6-8: Comprehensive curriculum focusing on holistic development and subject expertise.</p>
                </div>
                <div class="program-card">
                    <h3>Secondary School</h3>
                    <p>Grades 9-10: Rigorous academics with focus on board examinations and competitive preparation.</p>
                </div>
                <div class="program-card">
                    <h3>Senior Secondary</h3>
                    <p>Grades 11-12: Advanced curriculum with Science, Commerce, and Humanities streams.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities">
        <div class="container">
            <h2>Our Facilities</h2>
            <div class="facilities-grid">
                <div class="facility-item">
                    <h4>Modern Classrooms</h4>
                    <p>Well-equipped with digital boards and learning resources</p>
                </div>
                <div class="facility-item">
                    <h4>Science Labs</h4>
                    <p>State-of-the-art facilities for practical learning</p>
                </div>
                <div class="facility-item">
                    <h4>Computer Center</h4>
                    <p>Latest technology for IT and programming education</p>
                </div>
                <div class="facility-item">
                    <h4>Sports Complex</h4>
                    <p>Complete sports facilities for all outdoor activities</p>
                </div>
                <div class="facility-item">
                    <h4>Library</h4>
                    <p>Extensive collection of books and digital resources</p>
                </div>
                <div class="facility-item">
                    <h4>Auditorium</h4>
                    <p>Multi-purpose hall for events and programs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Admissions Section -->
    <section id="admissions" class="admissions">
        <div class="container">
            <h2>Admissions Open 2025 – 2026</h2>

            <div class="admissions-content">
                <!-- Admission Info -->
                <div class="admission-info">
                    <h3>Admission Process</h3>
                    <ol>
                        <li>Submit the Admission Form</li>
                        <li>School will Contact Parents</li>
                        <li>Document Verification</li>
                        <li>Admission Confirmation</li>
                    </ol>
                    <p><strong>Session:</strong> 2025 – 2026</p>
                </div>

                <!-- Admission Form -->
                <div class="admission-form">
                    <h3>Admission Enquiry Form</h3>

                    <form method="post" action="admission_submit.php">
                        
                        <label for="grade">Grade *</label>
                        <select name="grade" id="grade" required>
                            <option value="">-- Please choose an option --</option>
                            <option value="Nursery">Nursery</option>
                            <option value="LKG">LKG</option>
                            <option value="UKG">UKG</option>
                            <option value="Class 1">Class 1</option>
                            <option value="Class 2">Class 2</option>
                            <option value="Class 3">Class 3</option>
                            <option value="Class 4">Class 4</option>
                            <option value="Class 5">Class 5</option>
                            <option value="Class 6">Class 6</option>
                            <option value="Class 7">Class 7</option>
                            <option value="Class 8">Class 8</option>
                            <option value="Class 9">Class 9</option>
                            <option value="Class 10">Class 10</option>
                            <option value="Class 11">Class 11</option>
                            <option value="Class 12">Class 12</option>
                        </select>

                        <label for="student-name">Name of Student *</label>
                        <input type="text" name="student_name" id="student-name" placeholder="Enter Student Name" required>

                        <label for="parent-name">Parent Name *</label>
                        <input type="text" name="parent_name" id="parent-name" placeholder="Enter Parent Name" required>

                        <label for="parent-email">Parent Email *</label>
                        <input type="email" name="parent_email" id="parent-email" placeholder="Enter Parent Email" required>

                        <label for="parent-phone">Parent Mobile / WhatsApp *</label>
                        <input type="tel" name="parent_phone" id="parent-phone" placeholder="Enter Mobile Number" required>

                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob">

                        <button type="submit" class="submit-btn">
                            Submit Admission Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <h4>Address</h4>
                        <p>Your School Address<br>City, State - Pin Code</p>
                    </div>
                    <div class="contact-item">
                        <h4>Phone</h4>
                        <p>+91-XXXXX-XXXXX<br>+91-XXXXX-XXXXX</p>
                    </div>
                    <div class="contact-item">
                        <h4>Email</h4>
                        <p>info@ourschool.com<br>admissions@ourschool.com</p>
                    </div>
                    <div class="contact-item">
                        <h4>Hours</h4>
                        <p>Monday - Friday: 8:00 AM - 4:00 PM<br>Saturday: 9:00 AM - 1:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Including Footer -->
<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>