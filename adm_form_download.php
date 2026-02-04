<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Our School</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
    <style>
        .download-section {
            padding: 80px 20px;
            background-color: white;
        }
        .download-container {
            max-width: 900px;
            margin: 0 auto;
        }
        .download-intro {
            text-align: center;
            margin-bottom: 3rem;
        }
        .download-intro h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .download-intro p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        .forms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .form-card {
            background: white;
            border: 2px solid var(--light-bg);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        .form-card:hover {
            border-color: var(--secondary-color);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .form-card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .form-card h3 {
            color: var(--primary-color);
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        .form-card p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        .download-btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .instructions-section {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 8px;
            margin-bottom: 3rem;
            border-left: 4px solid var(--secondary-color);
        }
        .instructions-section h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        .instructions-list {
            columns: 2;
            gap: 2rem;
        }
        .instructions-list li {
            margin-bottom: 1rem;
            color: #666;
            line-height: 1.6;
        }
        .faq-section {
            background: white;
        }
        .faq-section h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .faq-items {
            display: grid;
            gap: 1.5rem;
        }
        .faq-item {
            background: var(--light-bg);
            padding: 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .faq-item:hover {
            background: #d5dbdb;
        }
        .faq-item h4 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
        }
        .faq-item p {
            color: #666;
            display: none;
            margin-top: 1rem;
            line-height: 1.6;
        }
        .faq-item.active p {
            display: block;
        }
        .info-box {
            background: #e3f2fd;
            border-left: 4px solid var(--secondary-color);
            padding: 1.5rem;
            border-radius: 4px;
            margin-bottom: 2rem;
            color: #1565c0;
        }
        @media (max-width: 768px) {
            .forms-grid {
                grid-template-columns: 1fr;
            }
            .instructions-list {
                columns: 1;
            }
            .download-intro h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Header -->
     <?php include 'header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Download Admission Forms</h1>
                <p>Get Your Admission Form and Complete Instructions</p>
            </div>
        </section>

        <!-- Download Section -->
        <section class="download-section">
            <div class="download-container">
                <div class="download-intro">
                    <h2>Downloadable Admission Forms</h2>
                    <p>Select the appropriate admission form for your child's grade level and download it. Fill the form carefully and submit it along with required documents.</p>
                </div>

                <div class="info-box">
                    ℹ️ You can also fill the form online using our <a href="adm_form.php" style="color: #1565c0; font-weight: bold;">Online Admission Form</a>. Both methods are equally accepted.
                </div>

                <!-- Download Forms Grid -->
                <div class="forms-grid">
                    <div class="form-card">
                        <div class="form-card-icon">👶</div>
                        <h3>Kindergarten Form</h3>
                        <p>For students applying to Kindergarten (KG) program</p>
                        <button class="download-btn" onclick="downloadForm('KG_Admission_Form.pdf')">
                            📥 Download Form
                        </button>
                    </div>

                    <div class="form-card">
                        <div class="form-card-icon">📚</div>
                        <h3>Primary Form (Grade 1-5)</h3>
                        <p>For students applying to Primary Classes (Grades 1-5)</p>
                        <button class="download-btn" onclick="downloadForm('Primary_Admission_Form.pdf')">
                            📥 Download Form
                        </button>
                    </div>

                    <div class="form-card">
                        <div class="form-card-icon">📖</div>
                        <h3>Secondary Form (Grade 6-8)</h3>
                        <p>For students applying to Secondary Classes (Grades 6-8)</p>
                        <button class="download-btn" onclick="downloadForm('Secondary_Admission_Form.pdf')">
                            📥 Download Form
                        </button>
                    </div>

                    <div class="form-card">
                        <div class="form-card-icon">🎓</div>
                        <h3>Senior Secondary Form (Grade 9-12)</h3>
                        <p>For students applying to Senior Secondary Classes (Grades 9-12)</p>
                        <button class="download-btn" onclick="downloadForm('Senior_Admission_Form.pdf')">
                            📥 Download Form
                        </button>
                    </div>

                    <div class="form-card">
                        <div class="form-card-icon">📋</div>
                        <h3>Medical Form</h3>
                        <p>Medical history and health declaration form</p>
                        <button class="download-btn" onclick="downloadForm('Medical_Form.pdf')">
                            📥 Download Form
                        </button>
                    </div>

                    <div class="form-card">
                        <div class="form-card-icon">🚌</div>
                        <h3>Transport Form</h3>
                        <p>School bus transportation request and safety form</p>
                        <button class="download-btn" onclick="downloadForm('Transport_Form.pdf')">
                            📥 Download Form
                        </button>
                    </div>
                </div>

                <!-- Instructions Section -->
                <div class="instructions-section">
                    <h3>📋 Instructions for Filling the Form</h3>
                    <ul class="instructions-list">
                        <li>Use blue or black pen only (no pencil)</li>
                        <li>Write clearly and in capital letters</li>
                        <li>Do not leave any field blank (write N/A if not applicable)</li>
                        <li>Paste a recent passport-size photograph (4x6 cm)</li>
                        <li>Ensure all parent/guardian signatures are present</li>
                        <li>Submit the form within 7 days of filling</li>
                        <li>Keep a photocopy of the submitted form for your records</li>
                        <li>Attach all required supporting documents</li>
                    </ul>
                </div>

                <!-- Required Documents -->
                <section class="about" style="background: transparent; padding: 3rem 0;">
                    <div style="max-width: 100%;">
                        <h2>📄 Required Documents</h2>
                        <div class="about-content" style="grid-template-columns: 1fr;">
                            <div>
                                <h3>Documents to Submit with Admission Form:</h3>
                                <ul style="margin-left: 1.5rem; line-height: 2; color: #666;">
                                    <li>Birth Certificate (copy)</li>
                                    <li>Aadhar Card (copy) - Child and Parents</li>
                                    <li>Recent Passport-size Photographs (2 copies)</li>
                                    <li>Previous School Report Card (if applicable)</li>
                                    <li>Transfer Certificate (if applicable)</li>
                                    <li>Proof of Residence (Utility Bill/Lease Agreement)</li>
                                    <li>Medical Certificate from Government Hospital</li>
                                    <li>Immunization Certificate</li>
                                    <li>Any Special Needs Certificate (if applicable)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- FAQ Section -->
                <section class="faq-section">
                    <h3>❓ Frequently Asked Questions</h3>
                    <div class="faq-items">
                        <div class="faq-item" onclick="toggleFaq(this)">
                            <h4>When is the admission submission deadline?</h4>
                            <p>The school accepts admissions throughout the year based on seat availability. However, for new academic sessions, the primary admission window is from February to March. We recommend submitting forms early to secure admission.</p>
                        </div>

                        <div class="faq-item" onclick="toggleFaq(this)">
                            <h4>Is there an entrance test for admission?</h4>
                            <p>Yes, there is an entrance assessment for grades 2 onwards. The assessment is designed to evaluate the student's current knowledge level and help in proper placement. For Kindergarten and Grade 1, we conduct an interaction session with the child and parents.</p>
                        </div>

                        <div class="faq-item" onclick="toggleFaq(this)">
                            <h4>What is the admission fee?</h4>
                            <p>The one-time registration fee is ₹10,000. Annual tuition fees vary by grade level from ₹1,50,000 to ₹2,50,000. A detailed fee structure will be provided after the admission is approved.</p>
                        </div>

                        <div class="faq-item" onclick="toggleFaq(this)">
                            <h4>How long does the admission process take?</h4>
                            <p>The admission process typically takes 2-3 weeks from the date of form submission. This includes form verification, entrance assessment (if applicable), interview, and final approval by the principal.</p>
                        </div>

                        <div class="faq-item" onclick="toggleFaq(this)">
                            <h4>Can I submit the form online instead of a printed form?</h4>
                            <p>Yes! We have an online admission form available on our website. Both online and offline forms are equally accepted. The online form is convenient and processed quickly. Visit our Online Admission Form page to apply online.</p>
                        </div>

                        <div class="faq-item" onclick="toggleFaq(this)">
                            <h4>What if I don't have all the documents?</h4>
                            <p>Please contact the admissions office. Some documents like transfer certificates can be obtained from your previous school. We'll guide you through the process and may grant conditional admission with a commitment to submit remaining documents within a specified timeframe.</p>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
    <script>
        function downloadForm(filename) {
            // In a real application, this would trigger an actual file download
            // For now, we'll show a confirmation message
            alert('Form "' + filename + '" will be downloaded.\n\nNote: In production, implement actual file download functionality.');
            // Example: window.location.href = 'forms/' + filename;
        }

        function toggleFaq(element) {
            element.classList.toggle('active');
        }
    </script>
</body>
</html>
