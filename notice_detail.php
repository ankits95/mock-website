<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .notice-detail-section {
            padding: 80px 20px;
            max-width: 900px;
            margin: 0 auto;
        }
        .notice-detail-card {
            background: white;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .notice-header {
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 2rem;
            margin-bottom: 2rem;
        }
        .notice-title {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .notice-meta {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            color: #666;
            font-size: 0.95rem;
        }
        .notice-meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .notice-content {
            line-height: 1.8;
            color: #333;
            margin-bottom: 2rem;
        }
        .notice-content h3 {
            color: var(--primary-color);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        .notice-content p {
            margin-bottom: 1rem;
            color: #666;
        }
        .notice-content ul {
            margin-left: 2rem;
            margin-bottom: 1rem;
        }
        .notice-content li {
            margin-bottom: 0.5rem;
            color: #666;
        }
        .notice-attachment {
            background: var(--light-bg);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 2rem 0;
        }
        .notice-attachment h4 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        .attachment-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid #ddd;
        }
        .attachment-item:last-child {
            border-bottom: none;
        }
        .attachment-icon {
            font-size: 1.5rem;
        }
        .attachment-link {
            color: var(--secondary-color);
            text-decoration: none;
            flex-grow: 1;
        }
        .attachment-link:hover {
            text-decoration: underline;
        }
        .back-link {
            display: inline-block;
            margin-top: 2rem;
            padding: 10px 20px;
            background: var(--secondary-color);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .back-link:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .notice-detail-card {
                padding: 1.5rem;
            }
            .notice-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
            .notice-title {
                font-size: 1.5rem;
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
                <h1>School Notice</h1>
                <p>Important Announcements and Updates</p>
            </div>
        </section>

        <!-- Notice Detail -->
        <section class="notice-detail-section">
            <div class="notice-detail-card">
                <?php
                    // Sample notice data - In a real application, this would come from a database
                    $notices = array(
                        46 => array(
                            'title' => 'Summer Vacation Notice',
                            'date' => '2026-01-15',
                            'category' => 'Academic',
                            'content' => '<p>This is to inform that the school will remain closed for summer vacation from June 1 to July 15, 2026. Classes will resume on July 16, 2026.</p>
                            <h3>Holiday Details:</h3>
                            <ul>
                                <li>School Closure: June 1 - July 15, 2026</li>
                                <li>Classes Resume: July 16, 2026</li>
                                <li>First Assembly: July 16, 2026</li>
                            </ul>
                            <p>Students are advised to use this time for revision and pursuing their hobbies and interests.</p>',
                            'attachments' => array()
                        ),
                        53 => array(
                            'title' => 'Annual Examination Schedule',
                            'date' => '2026-01-20',
                            'category' => 'Examination',
                            'content' => '<p>The annual examination schedule for the academic year 2025-26 is now available. All students are required to participate in these exams as per the schedule.</p>
                            <h3>Examination Schedule:</h3>
                            <ul>
                                <li>Start Date: February 15, 2026</li>
                                <li>End Date: March 20, 2026</li>
                                <li>Time: 10:00 AM - 1:00 PM</li>
                            </ul>
                            <p>Students must report 15 minutes before the scheduled exam time. Carrying mobile phones or calculators is strictly prohibited.</p>',
                            'attachments' => array(
                                array('name' => 'Exam Schedule PDF', 'file' => 'exam_schedule.pdf'),
                                array('name' => 'Exam Rules & Guidelines', 'file' => 'exam_rules.pdf')
                            )
                        ),
                        55 => array(
                            'title' => 'Parent-Teacher Meeting',
                            'date' => '2026-01-25',
                            'category' => 'General',
                            'content' => '<p>Parents are cordially invited for the Parent-Teacher Meeting scheduled for February 5, 2026. This is an important opportunity to discuss your ward\'s academic progress and overall development.</p>
                            <h3>Meeting Details:</h3>
                            <ul>
                                <li>Date: February 5, 2026</li>
                                <li>Time: 3:00 PM - 5:00 PM</li>
                                <li>Venue: School Premises</li>
                            </ul>
                            <p>Please bring your ward\'s report card and any questions or concerns you may have. Refreshments will be served.</p>',
                            'attachments' => array()
                        ),
                        58 => array(
                            'title' => 'School Re-opening After Diwali',
                            'date' => '2026-01-28',
                            'category' => 'Academic',
                            'content' => '<p>School will remain closed for Diwali celebration from October 20 to October 23, 2026. Classes will resume on October 26, 2026.</p>
                            <h3>Important Information:</h3>
                            <ul>
                                <li>Holiday Dates: October 20-23, 2026</li>
                                <li>Classes Resume: October 26, 2026</li>
                                <li>Assembly Time: 8:15 AM</li>
                            </ul>
                            <p>All students must come with their homework completed. Happy Diwali!</p>',
                            'attachments' => array()
                        )
                    );

                    // Get the notice ID from URL
                    $id = isset($_GET['id']) ? intval($_GET['id']) : 46;
                    
                    // If notice exists, display it
                    if (isset($notices[$id])) {
                        $notice = $notices[$id];
                        echo '<div class="notice-header">';
                        echo '<h1 class="notice-title">' . htmlspecialchars($notice['title']) . '</h1>';
                        echo '<div class="notice-meta">';
                        echo '<div class="notice-meta-item">📅 ' . date('F j, Y', strtotime($notice['date'])) . '</div>';
                        echo '<div class="notice-meta-item">📌 ' . htmlspecialchars($notice['category']) . '</div>';
                        echo '</div>';
                        echo '</div>';
                        
                        echo '<div class="notice-content">';
                        echo $notice['content'];
                        echo '</div>';
                        
                        // Display attachments if any
                        if (!empty($notice['attachments'])) {
                            echo '<div class="notice-attachment">';
                            echo '<h4>📎 Attachments</h4>';
                            foreach ($notice['attachments'] as $attachment) {
                                echo '<div class="attachment-item">';
                                echo '<span class="attachment-icon">📄</span>';
                                echo '<a href="#" class="attachment-link">' . htmlspecialchars($attachment['name']) . '</a>';
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                    } else {
                        echo '<p style="color: #666; font-size: 1.1rem;">Notice not found.</p>';
                    }
                ?>
                <a href="index.php" class="back-link">← Back to Home</a>
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
