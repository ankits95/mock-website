<!-- Including Database connection file  -->

<?php include 'db.php'; ?>

<!-- Including Page Title  -->

<?php $pageTitle = 'Home - Our School'; ?>

<!-- Including Header file -->
<?php include 'header.php'; ?>


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

                <?php
                $sql = "SELECT * FROM notices ORDER BY notice_date DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="notice-item">
                        <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                        <small><?php echo $row['notice_date']; ?></small>
                        <p>
                            <?php echo substr(htmlspecialchars($row['description']), 0, 100); ?>...
                        </p>
                        <a href="notice_detail.php?id=<?php echo $row['id']; ?>">
                            Read More
                        </a>
                    </div>
                    <hr>
                <?php
                    }
                } else {
                    echo "<p>No notices available.</p>";
                }
                ?>
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
                <h2>Admissions</h2>
                <div class="admissions-content">
                    <div class="admission-info">
                        <h3>Admission Process</h3>
                        <ol>
                            <li>Submit the Application Form</li>
                            <li>Attend Entrance Exam (if applicable)</li>
                            <li>Personal Interview with Parents</li>
                            <li>Verification of Documents</li>
                            <li>Admission Confirmation</li>
                        </ol>
                        <p><strong>Admission Period:</strong> June to August</p>
                    </div>
                    <div class="admission-form">
                        <h3>Quick Inquiry</h3>
                        <form id="admissionForm">
                            <input type="text" placeholder="Student Name" required>
                            <input type="email" placeholder="Parent Email" required>
                            <input type="tel" placeholder="Contact Number" required>
                            <select required>
                                <option>Select Grade</option>
                                <option>Grade 1-5</option>
                                <option>Grade 6-8</option>
                                <option>Grade 9-10</option>
                                <option>Grade 11-12</option>
                            </select>
                            <textarea placeholder="Message" rows="4"></textarea>
                            <button type="submit" class="submit-btn">Send Inquiry</button>
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

<!--including Footer -->
<?php include 'footer.php'; ?>