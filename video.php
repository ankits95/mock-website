<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Gallery - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .gallery-section {
            padding: 80px 20px;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        .video-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .video-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .video-thumbnail {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
        }
        .play-button {
            font-size: 3rem;
            color: white;
            transition: transform 0.3s ease;
        }
        .video-item:hover .play-button {
            transform: scale(1.2);
        }
        .video-info {
            padding: 1.5rem;
        }
        .video-info h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        .video-info p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            align-items: center;
            justify-content: center;
        }
        .modal.active {
            display: flex;
        }
        .modal-content {
            width: 90%;
            max-width: 800px;
            position: relative;
        }
        .modal iframe {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 8px;
        }
        .close-modal {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            .modal iframe {
                height: 300px;
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
                <h1>Video Gallery</h1>
                <p>Explore Our School Life Through Videos</p>
            </div>
        </section>

        <!-- Video Gallery -->
        <section class="gallery-section">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary-color);">School Videos</h2>
                <p style="text-align: center; color: #666; margin-bottom: 3rem;">Watch videos of our school activities, events, and campus tour</p>
                
                <div class="gallery-grid">
                    <div class="video-item" onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>School Campus Tour</h3>
                            <p>Virtual tour of our beautiful campus, facilities, and learning spaces</p>
                        </div>
                    </div>

                    <div class="video-item" onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Annual Sports Day 2026</h3>
                            <p>Highlights from our exciting annual sports day event with various competitions</p>
                        </div>
                    </div>

                    <div class="video-item" onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Annual Function 2025</h3>
                            <p>Memorable moments from our annual cultural function and talent showcase</p>
                        </div>
                    </div>

                    <div class="video-item" onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Science Fair Highlights</h3>
                            <p>Students showcasing their innovative science projects and experiments</p>
                        </div>
                    </div>

                    <div class="video-item" onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Academic Excellence Awards</h3>
                            <p>Recognition ceremony celebrating students' academic achievements and awards</p>
                        </div>
                    </div>

                    <div class="video-item" onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-thumbnail">
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Class Field Trip</h3>
                            <p>Educational field trip where students explore and learn outside the classroom</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Video Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeVideo()">&times;</span>
            <iframe id="videoFrame" src="" allowfullscreen></iframe>
        </div>
    </div>

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
        function openVideo(videoUrl) {
            document.getElementById('videoModal').classList.add('active');
            document.getElementById('videoFrame').src = videoUrl;
        }

        function closeVideo() {
            document.getElementById('videoModal').classList.remove('active');
            document.getElementById('videoFrame').src = '';
        }

        // Close modal when clicking outside
        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideo();
            }
        });
    </script>
</body>
</html>
