<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery - Our School</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .gallery-section {
            padding: 80px 20px;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .photo-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .photo-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .photo-item-image {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }
        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .photo-item:hover .photo-overlay {
            opacity: 1;
        }
        .photo-overlay-icon {
            font-size: 2.5rem;
            color: white;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            align-items: center;
            justify-content: center;
        }
        .modal.active {
            display: flex;
        }
        .modal-content {
            position: relative;
            width: 90%;
            max-width: 800px;
        }
        .modal-image {
            width: 100%;
            border-radius: 8px;
            max-height: 90vh;
            object-fit: contain;
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
        .photo-caption {
            color: white;
            text-align: center;
            margin-top: 1rem;
            font-size: 1.1rem;
        }
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
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
                <h1>Photo Gallery</h1>
                <p>Capturing Moments of Learning and Joy</p>
            </div>
        </section>

        <!-- Photo Gallery -->
        <section class="gallery-section">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary-color);">School Memories</h2>
                <p style="text-align: center; color: #666; margin-bottom: 3rem;">Click on any image to view full size</p>
                
                <div class="gallery-grid">
                    <div class="photo-item" onclick="openPhoto('Campus View', '📸')">
                        <div class="photo-item-image">📸</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Sports Day Event', '🏃')">
                        <div class="photo-item-image">🏃</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Annual Function', '🎭')">
                        <div class="photo-item-image">🎭</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Science Fair', '🧪')">
                        <div class="photo-item-image">🧪</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Library Study', '📚')">
                        <div class="photo-item-image">📚</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Computer Lab', '💻')">
                        <div class="photo-item-image">💻</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Class Activity', '👥')">
                        <div class="photo-item-image">👥</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Art Exhibition', '🎨')">
                        <div class="photo-item-image">🎨</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Music Performance', '🎵')">
                        <div class="photo-item-image">🎵</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Field Trip', '🚌')">
                        <div class="photo-item-image">🚌</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Awards Ceremony', '🏆')">
                        <div class="photo-item-image">🏆</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>

                    <div class="photo-item" onclick="openPhoto('Graduation Day', '👨‍🎓')">
                        <div class="photo-item-image">👨‍🎓</div>
                        <div class="photo-overlay">
                            <div class="photo-overlay-icon">🔍</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Photo Modal -->
    <div id="photoModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closePhoto()">&times;</span>
            <div style="font-size: 20rem; text-align: center;" id="photoEmoji">📸</div>
            <div class="photo-caption" id="photoCaption">Campus View</div>
        </div>
    </div>

<?php include 'footer.php'; ?>

    <script>
        function openPhoto(caption, emoji) {
            document.getElementById('photoModal').classList.add('active');
            document.getElementById('photoCaption').textContent = caption;
            document.getElementById('photoEmoji').textContent = emoji;
        }

        function closePhoto() {
            document.getElementById('photoModal').classList.remove('active');
        }

        // Close modal when clicking outside
        document.getElementById('photoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePhoto();
            }
        });
    </script>
</body>
</html>