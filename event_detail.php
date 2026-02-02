<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .event-detail-section {
            padding: 80px 20px;
            max-width: 900px;
            margin: 0 auto;
        }
        .event-detail-card {
            background: white;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .event-header {
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 2rem;
            margin-bottom: 2rem;
        }
        .event-title {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .event-meta {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            color: #666;
            font-size: 0.95rem;
        }
        .event-meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .event-content {
            line-height: 1.8;
            color: #333;
            margin-bottom: 2rem;
        }
        .event-content h3 {
            color: var(--primary-color);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        .event-content p {
            margin-bottom: 1rem;
            color: #666;
        }
        .event-content ul {
            margin-left: 2rem;
            margin-bottom: 1rem;
        }
        .event-content li {
            margin-bottom: 0.5rem;
            color: #666;
        }
        .event-highlights {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 8px;
            margin: 2rem 0;
            border-left: 4px solid var(--secondary-color);
        }
        .event-highlights h4 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
        }
        .highlight-item {
            text-align: center;
            padding: 1rem;
        }
        .highlight-item .icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .highlight-item p {
            font-size: 0.9rem;
            color: #666;
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
            .event-detail-card {
                padding: 1.5rem;
            }
            .event-meta {
                grid-template-columns: 1fr;
            }
            .event-title {
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
                <h1>School Events</h1>
                <p>Celebrating Learning and Achievement</p>
            </div>
        </section>

        <!-- Event Detail -->
        <section class="event-detail-section">
            <div class="event-detail-card">
                <?php
                    // Sample event data - In a real application, this would come from a database
                    $events = array(
                        22 => array(
                            'title' => 'Annual Sports Day 2026',
                            'date' => '2026-03-15',
                            'time' => '9:00 AM - 3:00 PM',
                            'venue' => 'School Sports Complex',
                            'status' => 'Upcoming',
                            'content' => '<p>Our Annual Sports Day is the most awaited event of the year where students showcase their athletic talents and competitive spirit. This year promises to be bigger and better with exciting events and activities for all students.</p>
                            <h3>Event Highlights:</h3>
                            <ul>
                                <li>100m, 200m, and 400m races for different age groups</li>
                                <li>Relay races and hurdles</li>
                                <li>Long jump and high jump competitions</li>
                                <li>Throw ball and badminton tournaments</li>
                                <li>Tug of war and other team events</li>
                                <li>March past and cultural performances</li>
                            </ul>
                            <p>All students are encouraged to participate. School will provide sports kits for interested students. Winners will be awarded with medals and certificates.</p>',
                            'highlights' => array(
                                array('icon' => '🏃', 'label' => '15+ Events'),
                                array('icon' => '🏆', 'label' => 'Exciting Prizes'),
                                array('icon' => '👥', 'label' => 'All Students'),
                                array('icon' => '⭐', 'label' => 'Fun Packed')
                            )
                        ),
                        23 => array(
                            'title' => 'Annual Function 2025',
                            'date' => '2025-12-20',
                            'time' => '5:00 PM - 8:00 PM',
                            'venue' => 'School Auditorium',
                            'status' => 'Completed',
                            'content' => '<p>Our Annual Function was a grand celebration of talent, creativity, and achievement. The event brought together students, parents, teachers, and management in a memorable evening of performances and celebrations.</p>
                            <h3>Event Highlights:</h3>
                            <ul>
                                <li>Stunning dance performances by different classes</li>
                                <li>Solo and group singing performances</li>
                                <li>Theatrical skits and short plays</li>
                                <li>Fashion show showcasing student designs</li>
                                <li>Award ceremony for academic and extra-curricular achievements</li>
                                <li>Special cultural performances</li>
                            </ul>
                            <p>The event was a resounding success with thunderous applause from the audience. Special thanks to all students, teachers, and parents who contributed to making it a grand success.</p>',
                            'highlights' => array(
                                array('icon' => '🎭', 'label' => '20+ Acts'),
                                array('icon' => '🎤', 'label' => 'Live Performance'),
                                array('icon' => '✨', 'label' => 'Grand Show'),
                                array('icon' => '👏', 'label' => 'Audience Love')
                            )
                        ),
                        24 => array(
                            'title' => 'Science Fair 2026',
                            'date' => '2026-02-28',
                            'time' => '10:00 AM - 4:00 PM',
                            'venue' => 'School Campus',
                            'status' => 'Upcoming',
                            'content' => '<p>Our Annual Science Fair is a platform for students to showcase their scientific knowledge, innovation, and creativity. Students will present research projects, models, and innovative solutions to real-world problems.</p>
                            <h3>Event Highlights:</h3>
                            <ul>
                                <li>Physics projects and demonstrations</li>
                                <li>Chemistry experiments and innovations</li>
                                <li>Biology research and environmental projects</li>
                                <li>Robotics and technology innovations</li>
                                <li>Mathematical models and applications</li>
                                <li>Guest lectures from scientists and professionals</li>
                            </ul>
                            <p>Students are encouraged to work in groups and develop projects that solve real-world problems. Winning projects will be exhibited and their creators will receive recognition and rewards.</p>',
                            'highlights' => array(
                                array('icon' => '🧪', 'label' => 'Science'),
                                array('icon' => '💡', 'label' => 'Innovation'),
                                array('icon' => '🔬', 'label' => 'Research'),
                                array('icon' => '🏅', 'label' => 'Awards')
                            )
                        )
                    );

                    // Get the event ID from URL
                    $id = isset($_GET['id']) ? intval($_GET['id']) : 22;
                    
                    // If event exists, display it
                    if (isset($events[$id])) {
                        $event = $events[$id];
                        $statusColor = $event['status'] == 'Completed' ? '#27ae60' : '#3498db';
                        
                        echo '<div class="event-header">';
                        echo '<h1 class="event-title">' . htmlspecialchars($event['title']) . '</h1>';
                        echo '<div class="event-meta">';
                        echo '<div class="event-meta-item">📅 ' . date('F j, Y', strtotime($event['date'])) . '</div>';
                        echo '<div class="event-meta-item">🕐 ' . htmlspecialchars($event['time']) . '</div>';
                        echo '<div class="event-meta-item">📍 ' . htmlspecialchars($event['venue']) . '</div>';
                        echo '<div class="event-meta-item" style="color: ' . $statusColor . '; font-weight: bold;">● ' . htmlspecialchars($event['status']) . '</div>';
                        echo '</div>';
                        echo '</div>';
                        
                        echo '<div class="event-content">';
                        echo $event['content'];
                        echo '</div>';
                        
                        // Display highlights
                        if (!empty($event['highlights'])) {
                            echo '<div class="event-highlights">';
                            echo '<h4>✨ Event Highlights</h4>';
                            echo '<div class="highlights-grid">';
                            foreach ($event['highlights'] as $highlight) {
                                echo '<div class="highlight-item">';
                                echo '<div class="icon">' . $highlight['icon'] . '</div>';
                                echo '<p>' . htmlspecialchars($highlight['label']) . '</p>';
                                echo '</div>';
                            }
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p style="color: #666; font-size: 1.1rem;">Event not found.</p>';
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
