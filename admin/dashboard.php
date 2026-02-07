<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
        }

        .header {
            background: #1e3c72;
            color: white;
            padding: 15px 20px;
            font-size: 20px;
        }

        .container {
            padding: 20px;
        }

        .welcome {
            margin-bottom: 20px;
            color: #333;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card h3 {
            margin-bottom: 15px;
            color: #1e3c72;
        }

        .card a {
            display: inline-block;
            padding: 10px 18px;
            background: #1e3c72;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .card a:hover {
            background: #16335f;
        }

        .logout a {
            background: #c0392b;
        }

        .logout a:hover {
            background: #a93226;
        }

        @media (max-width: 480px) {
            .header {
                font-size: 18px;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="header">
    Admin Dashboard
</div>

<div class="container">
    <div class="welcome">
        <h2>Welcome Admin 👋</h2>
        <p>You are logged in successfully.</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Add Notice</h3>
            <a href="add_notice.php">➕ Add Notice</a>
        </div>

        <div class="card logout">
            <h3>View Admissions</h3>
            <a href="view_admissions.php">👁️ View Admissions</a>
        </div>

        <div class="card">
            <h3>View Notices</h3>
            <a href="view_notice.php">📄 View Notices</a>
        </div>
        

        <div class="card logout">
            <h3>Logout</h3>
            <a href="logout.php">🚪 Logout</a>
        </div>
        
    </div>
</div>

</body>
</html>
