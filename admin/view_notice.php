<?php
include "auth.php";
include "../db.php";

$result = mysqli_query($conn, "SELECT * FROM notices ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Notices</title>
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

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #eef2f7;
            color: #333;
        }

        tr:hover {
            background: #f9fbff;
        }

        .actions a {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 13px;
            margin-right: 5px;
            color: white;
        }

        .edit {
            background: #3498db;
        }

        .delete {
            background: #e74c3c;
        }

        .edit:hover {
            background: #2c80b4;
        }

        .delete:hover {
            background: #c0392b;
        }

        .back {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            background: #555;
            color: white;
            padding: 8px 14px;
            border-radius: 4px;
            font-size: 14px;
        }

        .back:hover {
            background: #333;
        }

        /* Mobile responsiveness */
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 6px;
                padding: 10px;
            }

            td {
                border: none;
                padding: 8px 0;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #555;
                display: block;
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>

<div class="header">View Notices</div>

<div class="container">
    <h2>All Notices</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td data-label="Title"><?php echo htmlspecialchars($row['title']); ?></td>
                <td data-label="Date"><?php echo $row['notice_date']; ?></td>
                <td data-label="Actions" class="actions">
                    <a class="edit" href="edit_notice.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="delete" href="delete_notice.php?id=<?php echo $row['id']; ?>"
                       onclick="return confirm('Are you sure you want to delete this notice?');">
                       Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a class="back" href="dashboard.php">⬅ Back to Dashboard</a>
</div>

</body>
</html>
