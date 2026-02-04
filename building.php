<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrastructure & Building - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .infrastructure-section {
            padding: 80px 20px;
        }
        .infrastructure-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .infrastructure-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .infrastructure-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .infrastructure-card-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }
        .infrastructure-card-content {
            padding: 2rem;
        }
        .infrastructure-card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        .infrastructure-card p {
            color: #666;
            line-height: 1.8;
        }
        .building-stats {
            background: var(--light-bg);
            padding: 3rem 2rem;
            border-radius: 8px;
            margin: 3rem 0;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }
        .stat-item h4 {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }
        .stat-item p {
            color: #666;
            font-size: 0.95rem;
        }
        @media (max-width: 768px) {
            .infrastructure-grid {
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
                <h1>Infrastructure & Building</h1>
                <p>State-of-the-Art Facilities for Excellence in Education</p>
            </div>
        </section>

        <!-- Infrastructure Section -->
        <section class="infrastructure-section">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: var(--primary-color);">Our Facilities</h2>
                <div class="infrastructure-grid">
                    <div class="infrastructure-card">
                        <div class="infrastructure-card-image">📚</div>
                        <div class="infrastructure-card-content">
                            <h3>Modern Library</h3>
                            <p>Fully equipped library with 5,000+ books, digital resources, and comfortable reading spaces for students to explore and enhance their knowledge.</p>
                        </div>
                    </div>
                    <div class="infrastructure-card">
                        <div class="infrastructure-card-image">🧪</div>
                        <div class="infrastructure-card-content">
                            <h3>Science Laboratories</h3>
                            <p>Advanced science labs with modern equipment for Physics, Chemistry, and Biology. Hands-on learning environment for practical knowledge.</p>
                        </div>
                    </div>
                    <div class="infrastructure-card">
                        <div class="infrastructure-card-image">💻</div>
                        <div class="infrastructure-card-content">
                            <h3>Computer Labs</h3>
                            <p>Two fully equipped computer labs with latest technology, high-speed internet, and software for coding and digital literacy programs.</p>
                        </div>
                    </div>
                    <div class="infrastructure-card">
                        <div class="infrastructure-card-image">🎓</div>
                        <div class="infrastructure-card-content">
                            <h3>Smart Classrooms</h3>
                            <p>Interactive smart classrooms with projectors, interactive boards, and audio-visual systems for enhanced teaching and learning experience.</p>
                        </div>
                    </div>
                    <div class="infrastructure-card">
                        <div class="infrastructure-card-image">🏃</div>
                        <div class="infrastructure-card-content">
                            <h3>Sports Complex</h3>
                            <p>Complete sports facilities including basketball court, badminton court, cricket ground, and indoor games area with trained coaches.</p>
                        </div>
                    </div>
                    <div class="infrastructure-card">
                        <div class="infrastructure-card-image">🎨</div>
                        <div class="infrastructure-card-content">
                            <h3>Art & Music Studio</h3>
                            <p>Well-designed studios for art, music, and performing arts. Equipped with instruments, materials, and professional instructors for creative development.</p>
                        </div>
                    </div>
                </div>

                <!-- Building Stats -->
                <div class="building-stats">
                    <h2 style="text-align: center; font-size: 2rem; margin-bottom: 2rem; color: var(--primary-color);">Campus Overview</h2>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <h4>15+</h4>
                            <p>Acres of Campus</p>
                        </div>
                        <div class="stat-item">
                            <h4>35+</h4>
                            <p>Classrooms</p>
                        </div>
                        <div class="stat-item">
                            <h4>10+</h4>
                            <p>Specialized Labs</p>
                        </div>
                        <div class="stat-item">
                            <h4>2</h4>
                            <p>Cafeteria & Dining</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Facilities -->
        <section class="about">
            <div class="container">
                <h2>Additional Amenities</h2>
                <div class="about-content">
                    <div>
                        <h3>Health & Wellness</h3>
                        <p>Our school has a well-equipped medical room with qualified nurses on duty. Regular health check-ups, vaccination drives, and counseling services are provided to ensure the physical and mental well-being of our students.</p>
                        <h3 style="margin-top: 2rem;">Security & Safety</h3>
                        <p>24/7 CCTV surveillance, trained security personnel, and controlled access gates ensure a safe and secure campus environment. Fire safety equipment and regular drills are conducted to maintain safety protocols.</p>
                    </div>
                    <div>
                        <h3>Transport Facilities</h3>
                        <p>Air-conditioned school buses with GPS tracking and trained drivers cover major routes across the city. Regular vehicle maintenance and safety checks ensure reliable and secure transportation for all students.</p>
                        <h3 style="margin-top: 2rem;">Cafeteria</h3>
                        <p>Hygienic and spacious cafeteria serves nutritious meals and refreshments. Our menu is designed by nutritionists to provide balanced diet. Special dietary requirements are accommodated upon request.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>