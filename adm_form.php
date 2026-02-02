<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Admission Form - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .form-section {
            padding: 80px 20px;
            background-color: var(--light-bg);
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .form-header h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .form-header p {
            color: #666;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
            font-weight: 500;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        .form-section-title {
            background: var(--light-bg);
            padding: 1rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            border-left: 4px solid var(--secondary-color);
            color: var(--primary-color);
            font-weight: bold;
            border-radius: 4px;
        }
        .checkbox-group {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            margin-top: 0.5rem;
        }
        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .checkbox-item input {
            width: auto;
            cursor: pointer;
        }
        .submit-btn {
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 40px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .reset-btn {
            background-color: #95a5a6;
            color: white;
            padding: 12px 40px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }
        .reset-btn:hover {
            background-color: #7f8c8d;
        }
        .button-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }
        .required::after {
            content: ' *';
            color: var(--accent-color);
        }
        .form-info {
            background: #e3f2fd;
            border-left: 4px solid var(--secondary-color);
            padding: 1rem;
            border-radius: 4px;
            margin-bottom: 2rem;
            color: #1565c0;
        }
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
            .button-group {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
                <h1>Online Admission Form</h1>
                <p>Register Your Child Today</p>
            </div>
        </section>

        <!-- Admission Form -->
        <section class="form-section">
            <div class="form-container">
                <div class="form-header">
                    <h2>Student Admission Registration</h2>
                    <p>Please fill in all required fields carefully</p>
                </div>

                <div class="form-info">
                    ℹ️ All fields marked with <span style="color: var(--accent-color);">*</span> are mandatory. Please ensure accurate information.
                </div>

                <form id="admissionForm">
                    <!-- Student Information Section -->
                    <div class="form-section-title">👤 Student Information</div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName" class="required">First Name</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="required">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dob" class="required">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="required">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="applyingFor" class="required">Applying For Grade</label>
                        <select id="applyingFor" name="applyingFor" required>
                            <option value="">Select Grade</option>
                            <option value="kg">Kindergarten</option>
                            <option value="1">Grade 1</option>
                            <option value="2">Grade 2</option>
                            <option value="3">Grade 3</option>
                            <option value="4">Grade 4</option>
                            <option value="5">Grade 5</option>
                            <option value="6">Grade 6</option>
                            <option value="7">Grade 7</option>
                            <option value="8">Grade 8</option>
                            <option value="9">Grade 9</option>
                            <option value="10">Grade 10</option>
                            <option value="11">Grade 11</option>
                            <option value="12">Grade 12</option>
                        </select>
                    </div>

                    <!-- Parent/Guardian Information Section -->
                    <div class="form-section-title">👨‍👩‍👧 Parent/Guardian Information</div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="fatherName" class="required">Father's Name</label>
                            <input type="text" id="fatherName" name="fatherName" required>
                        </div>
                        <div class="form-group">
                            <label for="fatherPhone" class="required">Father's Phone</label>
                            <input type="tel" id="fatherPhone" name="fatherPhone" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="motherName" class="required">Mother's Name</label>
                            <input type="text" id="motherName" name="motherName" required>
                        </div>
                        <div class="form-group">
                            <label for="motherPhone">Mother's Phone</label>
                            <input type="tel" id="motherPhone" name="motherPhone">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="parentEmail" class="required">Parent Email</label>
                            <input type="email" id="parentEmail" name="parentEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="fatherOccupation">Father's Occupation</label>
                            <input type="text" id="fatherOccupation" name="fatherOccupation">
                        </div>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="form-section-title">📍 Contact Information</div>

                    <div class="form-group">
                        <label for="address" class="required">Residential Address</label>
                        <textarea id="address" name="address" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="city" class="required">City</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="state" class="required">State</label>
                            <input type="text" id="state" name="state" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="pincode" class="required">Pincode</label>
                            <input type="text" id="pincode" name="pincode" required>
                        </div>
                        <div class="form-group">
                            <label for="country" class="required">Country</label>
                            <input type="text" id="country" name="country" value="India" required>
                        </div>
                    </div>

                    <!-- Academic Information Section -->
                    <div class="form-section-title">📚 Academic Information</div>

                    <div class="form-group">
                        <label for="previousSchool">Previous School Name</label>
                        <input type="text" id="previousSchool" name="previousSchool">
                    </div>

                    <div class="form-group">
                        <label for="lastGPA">Last Obtained GPA/Percentage</label>
                        <input type="text" id="lastGPA" name="lastGPA">
                    </div>

                    <!-- Additional Information Section -->
                    <div class="form-section-title">ℹ️ Additional Information</div>

                    <div class="form-group">
                        <label class="required">Any Special Requirements/Needs</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="learning" name="special" value="learning">
                                <label for="learning" style="margin: 0;">Learning Disability</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="physical" name="special" value="physical">
                                <label for="physical" style="margin: 0;">Physical Disability</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="none" name="special" value="none">
                                <label for="none" style="margin: 0;">None</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="additionalInfo">Additional Comments</label>
                        <textarea id="additionalInfo" name="additionalInfo" placeholder="Any additional information you'd like to share..."></textarea>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms" style="display: inline; margin-left: 0.5rem;">I agree to the school's terms and conditions</label>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="submit-btn">Submit Application</button>
                        <button type="reset" class="reset-btn">Clear Form</button>
                    </div>
                </form>
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
    <script>
        document.getElementById('admissionForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const applyingFor = document.getElementById('applyingFor').value;
            const parentEmail = document.getElementById('parentEmail').value;
            
            // Basic validation
            if (firstName && lastName && applyingFor && parentEmail) {
                alert('Thank you! Your admission application has been submitted successfully.\n\nWe will contact you within 2-3 business days.\n\nParent Email: ' + parentEmail);
                this.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });
    </script>
</body>
</html>
