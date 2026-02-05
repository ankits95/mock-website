<?php
session_start();
include "../db.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['add_notice'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $notice_date = $_POST['notice_date'];

    $query = "INSERT INTO notices (title, description, notice_date)
              VALUES ('$title', '$description', '$notice_date')";

    if (mysqli_query($conn, $query)) {
        $msg = "Notice added successfully";
    } else {
        $msg = "Error adding notice";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Notice</title>
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
            display: flex;
            justify-content: center;
        }

        .card {
            background: #fff;
            padding: 25px;
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .success {
            background: #e8f8f0;
            color: #2d7a46;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }

        .error {
            background: #fdecea;
            color: #c0392b;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actions button {
            padding: 10px 18px;
            background: #1e3c72;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .actions button:hover {
            background: #16335f;
        }

        .back {
            text-decoration: none;
            font-size: 14px;
            color: #555;
        }

        .back:hover {
            color: #000;
        }

        @media (max-width: 480px) {
            .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="header">Add Notice</div>

<div class="container">
    <div class="card">
        <h2>Add New Notice</h2>

        <?php 
        if (isset($msg)) {
            if ($msg == "Notice added successfully") {
                echo "<div class='success'>$msg</div>";
            } else {
                echo "<div class='error'>$msg</div>";
            }
        }
        ?>

        <form method="post">
            <label>Title</label>
            <input type="text" name="title" required>

            <label>Description</label>
            <textarea name="description" required></textarea>

            <label>Date</label>
            <input type="date" name="notice_date" required>

            <div class="actions">
                <a class="back" href="dashboard.php">⬅ Back</a>
                <button type="submit" name="add_notice">Add Notice</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
