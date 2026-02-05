<?php
include "auth.php";
include "../db.php";

$id = $_GET['id'];

if (isset($_POST['confirm'])) {
    mysqli_query($conn, "DELETE FROM notices WHERE id=$id");
    header("Location: view_notice.php");
    exit;
}

if (isset($_POST['cancel'])) {
    header("Location: view_notice.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Notice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #fff;
            padding: 30px;
            width: 100%;
            max-width: 420px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            text-align: center;
        }

        .card h2 {
            margin-bottom: 15px;
            color: #c0392b;
        }

        .card p {
            color: #555;
            margin-bottom: 25px;
            font-size: 15px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .actions button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .delete {
            background: #e74c3c;
            color: white;
        }

        .delete:hover {
            background: #c0392b;
        }

        .cancel {
            background: #bdc3c7;
            color: #333;
        }

        .cancel:hover {
            background: #aab0b3;
        }

        @media (max-width: 480px) {
            .card {
                margin: 15px;
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Delete Notice</h2>
    <p>Are you sure you want to delete this notice?<br>This action cannot be undone.</p>

    <form method="post">
        <div class="actions">
            <button type="submit" name="confirm" class="delete">Yes, Delete</button>
            <button type="submit" name="cancel" class="cancel">Cancel</button>
        </div>
    </form>
</div>

</body>
</html>
