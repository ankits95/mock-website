<?php include 'db.php'; ?>

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
            border-bottom: 2px solid #3498db;
            padding-bottom: 1.5rem;
            margin-bottom: 2rem;
        }
        .notice-title {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .notice-meta {
            color: #666;
        }
        .notice-content {
            line-height: 1.8;
            color: #333;
        }
        .back-link {
            display: inline-block;
            margin-top: 2rem;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        .back-link:hover {
            background: #2c80b4;
        }
    </style>
</head>
<body>
<main>

<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>School Notice</h1>
            <p>Important Announcements & Updates</p>
        </div>
    </section>

    <!-- Notice Detail -->
    <section class="notice-detail-section">
        <div class="notice-detail-card">

            <?php
            // Get notice ID safely
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

            // Fetch notice from DB
            $sql = "SELECT * FROM notices WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            
            if ($result && mysqli_num_rows($result) > 0): 
                $notice = mysqli_fetch_assoc($result);
            ?>

                <div class="notice-header">
                    <h1 class="notice-title">
                        <?php echo htmlspecialchars($notice['title']); ?>
                    </h1>
                    <div class="notice-meta">
                        📅 <?php echo date('F j, Y', strtotime($notice['notice_date'])); ?>
                    </div>
                </div>

                <div class="notice-content">
                    <?php echo nl2br(htmlspecialchars($notice['description'])); ?>
                </div>

            <?php else: ?>

                <p style="color:#666; font-size:1.1rem;">
                    ❌ Notice not found.
                </p>

            <?php endif; ?>

            <a href="index.php" class="back-link">← Back to Home</a>

        </div>
    </section>

</main>

<?php include 'footer.php'; ?>