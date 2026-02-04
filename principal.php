<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .principal-section {
            padding: 80px 20px;
            background-color: #fff;
        }
        .principal-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        .principal-image {
            text-align: center;
        }
        .principal-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        .principal-info h2 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.8rem;
        }
        .principal-designation {
            color: var(--secondary-color);
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }
        .principal-info h3 {
            color: var(--secondary-color);
            margin-top: 1.5rem;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        .principal-info p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        .credentials {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 8px;
            margin-top: 2rem;
        }
        .credentials h4 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        .credentials ul {
            list-style: none;
            padding-left: 0;
        }
        .credentials li {
            padding: 0.5rem 0;
            color: #666;
            border-bottom: 1px solid #ddd;
        }
        .credentials li:last-child {
            border-bottom: none;
        }
        @media (max-width: 768px) {
            .principal-content {
                grid-template-columns: 1fr;
            }
            .principal-info h2 {
                font-size: 1.5rem;
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
                <h1>Our Principal</h1>
                <p>Visionary Leadership for Educational Excellence</p>
            </div>
        </section>

        <!-- Principal Profile Section -->
        <section class="principal-section">
            <div class="container">
                <div class="principal-content">
                    <div class="principal-image">
                        <div style="width: 300px; height: 400px; background: linear-gradient(135deg, var(--secondary-color), #2980b9); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                            [Principal Photo]
                        </div>
                    </div>
                    <div class="principal-info">
                        <h2>Dr. Rajesh Kumar Singh</h2>
                        <p class="principal-designation">Principal & Founder</p>
                        <p>Dr. Rajesh Kumar Singh is an accomplished educationist with over 25 years of experience in school administration and academic leadership. His visionary approach and commitment to educational excellence have transformed Our School into one of the most respected institutions in the region.</p>
                        
                        <h3>Professional Background</h3>
                        <p>With a doctorate in Education from a premier university, Dr. Singh has been instrumental in implementing innovative curriculum frameworks, incorporating technology in education, and fostering a culture of continuous learning and improvement. His leadership emphasizes both academic rigor and holistic student development.</p>

                        <h3>Vision & Philosophy</h3>
                        <p>Dr. Singh believes that education is the most powerful tool for transformation. He advocates for student-centered learning, where every child is recognized for their unique potential and nurtured to achieve excellence. His inclusive approach ensures that education reaches all segments of society.</p>

                        <div class="credentials">
                            <h4>Qualifications & Certifications</h4>
                            <ul>
                                <li>Ph.D. in Education - National Institute of Education</li>
                                <li>M.A. in Education Management - University of Excellence</li>
                                <li>B.Ed. - Teacher Education Institute</li>
                                <li>Certified in International Educational Leadership</li>
                                <li>Fellow of the Indian Education Society</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Message from Principal -->
        <section class="about">
            <div class="container">
                <h2>Message from the Principal</h2>
                <div class="about-content">
                    <div class="about-text">
                        <h3>Welcome to Our School Family</h3>
                        <p>Dear Parents, Students, and Well-wishers,</p>
                        <p>I am delighted to welcome you to Our School, a community dedicated to nurturing excellence and character. Over the past 25 years, we have remained committed to the belief that every child possesses unlimited potential waiting to be discovered and developed.</p>
                        
                        <h3>Our Commitment</h3>
                        <p>As Principal, I am committed to ensuring that Our School remains a beacon of quality education where students not only excel academically but also grow as responsible, empathetic, and capable individuals. We invest in our faculty, upgrade our infrastructure, and continuously innovate our teaching methodologies to meet the evolving needs of 21st-century education.</p>
                        
                        <h3>Partnership with Parents</h3>
                        <p>Education is a collaborative effort. I firmly believe in the power of partnership between school and home. Together, we can create an ecosystem where students thrive, dream, and achieve their fullest potential. I invite you to be an active part of our school community and share in the journey of educational transformation.</p>
                        
                        <h3>Looking Forward</h3>
                        <p>As we navigate the future with confidence and optimism, we remain steadfast in our values while embracing change and innovation. We are building a generation of leaders, innovators, and global citizens who will shape a better tomorrow.</p>
                        
                        <p><strong>With warm regards and best wishes,<br>Dr. Rajesh Kumar Singh<br>Principal & Founder</strong></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership Initiatives -->
        <section class="facilities">
            <div class="container">
                <h2>Key Initiatives & Achievements</h2>
                <div class="facilities-grid">
                    <div class="facility-item">
                        <h4>Digital Learning Platform</h4>
                        <p>Introduced modern digital infrastructure enabling hybrid and blended learning models for enhanced educational experience.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Scholarship Program</h4>
                        <p>Established comprehensive scholarship schemes ensuring quality education is accessible to all deserving students regardless of economic background.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Research & Innovation</h4>
                        <p>Created platforms for educational research and innovation, encouraging faculty to participate in professional development programs.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Green Campus Initiative</h4>
                        <p>Implemented sustainable practices and environmental programs making Our School a certified green institution.</p>
                    </div>
                    <div class="facility-item">
                        <h4>Community Outreach</h4>
                        <p>Spearheaded programs connecting students with community, instilling values of social responsibility and service.</p>
                    </div>
                    <div class="facility-item">
                        <h4>International Collaborations</h4>
                        <p>Established partnerships with international schools and educational institutions for global perspective and student exchange programs.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>